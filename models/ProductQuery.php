<?php

require_once './commons/function.php';
require_once './commons/env.php';


class ProductQuery
{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }
    // ### ADMIN
    public function getTotalProducts()
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total_products FROM products");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_products'] ?? 0;
    }
    public function getTotalUser()
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total_users FROM users");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_users'] ?? 0;
    }
    public function getTotalCart()
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total_order_details FROM order_details");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_order_details'] ?? 0;
    }
    public function getTotalComment()
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total_comment FROM comment");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_comment'] ?? 0;
    }
    public function getTotalCategories()
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) AS total_categories FROM categories");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total_categories'] ?? 0;
    }
    // getall sản phẩm (lấy tất cả thông tin từ bảng san pham) trong admin
    public function getAllProduct()
{
    try {
        $sql = "
            SELECT 
                p.*, 
                c.name AS category_name,
                (
                    SELECT MIN(
                        CASE 
                            WHEN pv.sale_price > 0 THEN pv.sale_price
                            ELSE pv.price
                        END
                    )
                    FROM product_variant AS pv
                    WHERE pv.product_id = p.product_id
                ) AS min_price
            FROM 
                products AS p
            INNER JOIN 
                categories AS c 
                ON p.category_id = c.category_id
        ";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    } catch (Exception $error) {
        echo "<h1>Lỗi hàm all trong model: " . $error->getMessage() . "</h1>";
    }
}
 // END FUNCTION ALL()
    // Lấy ra tất cả các danh mục từ database
    public function getAllCategories()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductsByCategory($category_id)
{
    try {
        $sql = "
            SELECT 
                p.product_id, 
                p.name AS product_name, 
                p.image, 
                p.description, 
                p.category_id, 
                p.created_at, 
                p.updated_at, 
                p.status, 
                c.name AS category_name,
                pv.product_variant_id,
                pv.price AS price,
                pv.sale_price AS sale_price
            FROM 
                products AS p
            INNER JOIN 
                categories AS c ON p.category_id = c.category_id
            LEFT JOIN 
                product_variant AS pv ON p.product_id = pv.product_id
            WHERE 
                p.status = 1 
                AND c.status = 1 
                AND p.category_id = :category_id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $error) {
        echo "<h1>Lỗi hàm getProductsByCategory: " . $error->getMessage() . "</h1>";
        return [];
    }
}

    // thêm sản phẩm vào bảng product
    public function addProduct($name, $image, $category_id, $description, $gallery)
    {
        //khai bao try catch
        try {
            $sql = "INSERT INTO products (name, image, category_id, description,gallery, created_at) 
                VALUES (?, ?, ?, ?, ?, NOW())";
            return pdo_last_insert_id($sql, $name, $image, $category_id, $description, $gallery);
        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm insert trong model: " . $error->getMessage();
            echo "</h1>";
        }
    }
    // Lấy thông tin chi tiết sản phẩm
    public function getDetailSan($product_id)
    {
        try {
            $sql = '
                SELECT 
                    p.*, 
                    c.name AS category_name, 
                    pv.format, 
                    pv.quantity
                FROM products AS p
                INNER JOIN categories AS c ON p.category_id = c.category_id
                LEFT JOIN product_variant AS pv ON p.product_id = pv.product_id
                WHERE p.product_id = :product_id
            ';

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':product_id' => $product_id]);

            return $stmt->fetch(); // Trả về dữ liệu của sản phẩm
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    // thêm các màu số lượng vào bảng biến thể
    public function addProductVariants($product_id, $price, $sale_price, $format, $quantity)
    {
        //khai bao try catch

        $sql = "INSERT INTO product_variant( product_id,price,sale_price,format,	quantity) VALUES (?,?,?,?,?)";
        // 3. Return kết quả
        pdo_execute($sql, $product_id, $price, $sale_price, $format, $quantity);
        echo "Thêm thành công variant!";
    }
    // Truy xuất tất cả sản phẩm từ bảng product
    function render_allproduct()
    {
        $sql = "SELECT * FROM products";
        return pdo_query($sql);
    }
    // lấy chi tiết 1 số sản phẩm dựa trên ID
    function getone_product($product_id)
    {
        $sql = "SELECT * FROM products WHERE product_id=?";
        return pdo_query($sql, $product_id);
    }
    function find($product_id)
    {
        $sql = "
            SELECT 
                p.*, 
                pv.format,
                pv.price,
                pv.sale_price, 
                pv.quantity 
            FROM products AS p
            LEFT JOIN product_variant AS pv ON p.product_id = pv.product_id
            WHERE p.product_id = $product_id
        ";
        $data = $this->conn->query($sql)->fetch();
        if ($data) {
            $product = convertToObjectProduct($data); // Chuyển đổi dữ liệu thành đối tượng
            // var_dump($product); // Debug dữ liệu trả về
            return $product;
        } else {
            return null; // Không tìm thấy sản phẩm
        }
    }
    public function findvariant($variant_id) {
        // Sử dụng prepared statement để bảo mật và đúng cú pháp
        $sql = "SELECT * FROM product_variant WHERE product_variant_id= ?";
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$variant_id]); // Truyền $variant_id vào
            $data = $stmt->fetch(PDO::FETCH_ASSOC); // Lấy dữ liệu dạng mảng kết hợp
    
            if ($data) {
                $variant = convertToObjectVariant($data);
                return $variant;
            } else {
                return null; // Không tìm thấy biến thể
            }
        } catch (PDOException $e) {
            // Xử lý lỗi nếu có (ví dụ: ghi log)
            error_log("Database error in findvariant: " . $e->getMessage());
            return null;
        }
    }
    
    public function updateProductVariant($variant_id, $price, $sale_price, $format, $quantity)
{
    $sql = "UPDATE product_variant 
            SET format = ?, 
                price = ?, 
                sale_price = ?, 
                quantity = ? 
            WHERE product_variant_id = ?";
    
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$format, $price, $sale_price, $quantity, $variant_id]);
}

    // Truy xuất tất cả sản phẩm từ bảng product biến thể
    function get_allvariant()
    {
        $sql = "SELECT * FROM product_variant";
        return pdo_query($sql);
    }
    // Cập nhật cả ảnh sản phẩm.(khi người dùng tải lên hình ảnh mới hoặc thay đổi thư viện ảnh.)
    // function update_product($name, $image,	$price,$category_id,$sale_price, $description,$gallery, $product_id)
    // {
    //     try {
    //         $sql = "UPDATE products SET  name = ?, image = ?,	price =?,category_id = ?,sale_price =?, description = ?, gallery = ?, created_at=NOW(), updated_at=NOW() WHERE product_id=?";
    //         pdo_execute($sql, $name, $image,$price,$category_id,$sale_price, $description,$gallery, $product_id);
    //         echo "Chỉnh sửa thành công";
    //     } catch (PDOException $e) {
    //         echo "Chỉnh Sửa thất bại! ".$e->getMessage();
    //     }       
    // }
    function update_product($name, $image, $category_id, $description, $gallery, $product_id)
    {
        $sql = "UPDATE products 
                SET name = ?, image = ?, category_id = ?,  description = ?, gallery = ?, updated_at = NOW() 
                WHERE product_id = ?";
        return pdo_execute($sql, $name, $image, $category_id, $description, $gallery, $product_id);
    }

    // Không cập nhật ảnh (Dùng để cập nhật sản phẩm không bao gồm hình ảnh (trong trường hợp hình ảnh không được tải lên mới).)
    function update_product_noneimg($name, $category_id, $description, $product_id)
    {
        try {
            $sql = "UPDATE products SET name=?,  category_id=?, description=?, updated_at=NOW() WHERE product_id=?";
            pdo_execute($sql, $name, $category_id, $description, $product_id);
            echo "Chỉnh sửa thành công";
        } catch (PDOException $e) {
            echo "Chỉnh Sửa thất bại! " . $e->getMessage();
        }
    }

    ### TRANG CHU
    // Lấy top 4 sp moi nhat
    //  p.*: Lấy tất cả các cột từ bảng products.
    // vp.size, vp.color: Lấy cột size và color từ bảng variant_product.
    // INNER JOIN: Chỉ lấy những dòng mà products.id khớp với variant_product.product_id.
    // ORDER BY p.created_at: Sắp xếp sản phẩm theo thời gian tạo.
    // LIMIT 4: Giới hạn kết quả trả về chỉ 4 dòng.
    public function getTop4ProductLastes()
{
    try {
        $sql = "
            SELECT 
                p.*, 
                vp.format, 
              
                vp.quantity,
                vp.price,
                vp.sale_price,
                (
                    SELECT MIN(
                        CASE 
                            WHEN pv.sale_price > 0 THEN pv.sale_price
                            ELSE pv.price
                        END
                    )
                    FROM product_variant AS pv
                    WHERE pv.product_id = p.product_id
                ) AS min_price
            FROM 
                products AS p
            INNER JOIN 
                product_variant AS vp 
                ON vp.product_variant_id = (
                    SELECT MIN(product_variant_id)
                    FROM product_variant
                    WHERE product_variant.product_id = p.product_id
                )
            ORDER BY 
                p.created_at DESC
            LIMIT 8
        ";

        $data = $this->conn->query($sql)->fetchAll();
        $ds = [];

        foreach ($data as $row) {
            $product = convertToObjectProduct($row);

            $product->format = $row['format'];
           
            $product->quantity = $row['quantity'];

            $product->price = $row['price'];
            $product->sale_price = $row['sale_price'];
            $product->min_price = $row['min_price'];

            $ds[] = $product;
        }

        return $ds;

    } catch (Exception $error) {
        echo "<h1>Lỗi hàm getTop4ProductLastes trong model: " . $error->getMessage() . "</h1>";
    }
}

    // lấy tất cả danh mục áo phao
    public function get_products_by_category_aophao($category_id)
    {
        try {
            $sql = "
                SELECT 
                    p.*, 
                    vp.format, 
                 
                    vp.quantity
                FROM 
                    products AS p
                INNER JOIN 
                    product_variant AS vp 
                    ON p.product_id = vp.product_id
                INNER JOIN 
                    categories AS c 
                    ON p.category_id = c.category_id
                WHERE 
                    vp.product_variant_id = (
                        SELECT MIN(product_variant_id)
                        FROM product_variant
                        WHERE product_variant.product_id = p.product_id
                    )
                    AND p.category_id = :category_id
                    AND p.status = 1 
                    AND c.status = 1
                ORDER BY 
                    p.created_at DESC
                LIMIT 8
            ";

            // Chuẩn bị câu truy vấn với PDO
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT); // Bind đúng tham số
            $stmt->execute();

            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $ds = [];
            // Chuyển dữ liệu sang object product
            foreach ($data as $row) {
                $product = convertToObjectProduct($row); // Cần hàm chuyển đổi sang đối tượng Product
                $product->format = $row['format']; // Thêm thông tin size
               // Thêm thông tin color
                $product->quantity = $row['quantity'];
                $ds[] = $product;
            }

            return $ds;
        } catch (Exception $error) {
            echo "<h1>Lỗi hàm get_products_by_category_aophao: " . $error->getMessage() . "</h1>";
        }
    }


    public function get_products_by_category_aolen($category_id)
    {
        try {
            $sql = "
                SELECT 
                    p.*, 
                    vp.format, 
                   
                    vp.quantity
                FROM 
                    products AS p
                INNER JOIN 
                    product_variant AS vp 
                    ON p.product_id = vp.product_id
                INNER JOIN 
                    categories AS c 
                    ON p.category_id = c.category_id
                WHERE 
                    vp.product_variant_id = (
                        SELECT MIN(product_variant_id)
                        FROM product_variant
                        WHERE product_variant.product_id = p.product_id
                    )
                    AND p.category_id = :category_id
                    AND p.status = 1 
                    AND c.status = 1
                ORDER BY 
                    p.created_at DESC
                LIMIT 8
            ";

            // Chuẩn bị câu truy vấn với PDO
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT); // Bind đúng tham số
            $stmt->execute();

            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $ds = [];
            // Chuyển dữ liệu sang object product
            foreach ($data as $row) {
                $product = convertToObjectProduct($row); // Cần hàm chuyển đổi sang đối tượng Product
                $product->format = $row['format']; // Thêm thông tin size
                // Thêm thông tin color
                $product->quantity = $row['quantity'];
                $ds[] = $product;
            }

            return $ds;
        } catch (Exception $error) {
            echo "<h1>Lỗi hàm get_products_by_category_aophao: " . $error->getMessage() . "</h1>";
        }
    }
    public function getProductByVariant($product_id)
    {

        $sql = "SELECT 
                    product_variant_id AS variant_id, 
                    pv.product_id, 
                    pv.format, 
                    pv.price,
                    pv.sale_price,
                  
                    pv.quantity 
                FROM product_variant pv
                WHERE pv.product_id = :product_id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->execute();

        // Lấy dữ liệu dạng mảng
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }
    function getProductById($product_id)
    {
        $sql = "SELECT p.*, c.name AS categories_name, c.category_id 
                FROM products AS p
                JOIN categories AS c ON p.category_id = c.category_id
                WHERE  p.status = 0 p.product_id = ?";
        return pdo_query_one($sql, $product_id);
    }
    // Cập nhật trạng thái sản phẩm
    public function updateStatus($product_id, $status)
    {
        try {
            // Câu lệnh SQL cập nhật status
            $sql = "UPDATE products SET status = :status WHERE product_id = :product_id";
            $stmt = $this->conn->prepare($sql);

            // Gán giá trị vào các tham số
            $stmt->bindParam(':status', $status, PDO::PARAM_INT);
            $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);

            // Thực thi truy vấn
            $stmt->execute();

            // Kiểm tra kết quả
            if ($stmt->rowCount() > 0) {
                return "Cập nhật trạng thái thành công!";
            } else {
                return "Không tìm thấy sản phẩm hoặc trạng thái không thay đổi.";
            }
        } catch (PDOException $e) {
            // Xử lý lỗi
            return "Lỗi khi cập nhật trạng thái: " . $e->getMessage();
        }
    }

    // public function __destruct()
    // {
    //     $this->conn = null;
    // }

    // Hàm tìm kiếm sản phẩm theo từ khóa
    public function searchProducts($keyword)
{
    try {
        $query = "
            SELECT 
                p.product_id,
                p.name AS name,
                p.image,
                p.description,
                p.category_id,
                p.created_at,
                p.updated_at,
                p.status,
                c.name AS category_name,
                pv.product_variant_id,
                pv.price AS price,
                pv.sale_price AS sale_price
            FROM 
                products AS p
            INNER JOIN 
                categories AS c ON p.category_id = c.category_id
            LEFT JOIN 
                product_variant AS pv ON p.product_id = pv.product_id
            WHERE 
                p.name LIKE :keyword 
                AND p.status = 1 
                AND c.status = 1
        ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':keyword', '%' . $keyword . '%', PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $error) {
        echo "<h1>Lỗi hàm searchProducts: " . $error->getMessage() . "</h1>";
        return [];
    }
}
    public function deleteProductVariant($variant_id)
    {
        $query = "DELETE FROM product_variant WHERE product_variant_id = :product_variant_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':product_variant_id', $variant_id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getAllProductCate()
{
    try {
        $sql = "
            SELECT 
                products.product_id,
                products.name AS product_name, 
                products.image, 
                products.description, 
                products.category_id, 
                products.created_at, 
                products.updated_at, 
                products.status, 
                categories.name AS category_name,
                product_variant.product_variant_id, 
                product_variant.price AS price,
                product_variant.sale_price AS sale_price 
            FROM 
                products 
            INNER JOIN 
                categories 
            ON 
                products.category_id = categories.category_id
            LEFT JOIN 
                product_variant 
            ON 
                products.product_id = product_variant.product_id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $error) {
        echo "<h1>Lỗi hàm getAllProductCate trong model: " . $error->getMessage() . "</h1>";
    }
}




}
?>