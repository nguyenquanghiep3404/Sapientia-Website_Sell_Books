<?php 

require_once './commons/function.php';
require_once './commons/env.php';
class ProductAdminModel {
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }
    public function getAllBook(){
        try {
            $sql = "SELECT 
                        books.*, 
                        categories.category_name,
                        GROUP_CONCAT(DISTINCT book_variants.book_price) AS prices,
                        GROUP_CONCAT(DISTINCT book_variants.book_sale_price) AS sale_prices,
                        GROUP_CONCAT(DISTINCT book_variants.quantity) AS book_quantity
                    FROM books
                    INNER JOIN categories ON books.category_id = categories.category_id
                    LEFT JOIN book_variants ON books.book_id = book_variants.book_id
                    GROUP BY books.book_id ";
    
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo "<h1>Lỗi trong hàm getAllBook: " . $e->getMessage() . "</h1>";
            return [];
        }
    }
    
    public function getAllCategory(){
        try{
            $sql = "SELECT * FROM categories";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(Exception $e){
            echo "<h1>";
            echo "Lỗi hàm all trong model: " . $e->getMessage();
            echo "</h1>";
        }
    }
    public function addBook($book_title, $description, $gallery, $book_image, $category_id, $release_date) {
        try {
            date_default_timezone_set('Asia/Ho_Chi_Minh'); 
            $created_at = date('Y-m-d H:i:s');
    
            $sql = "INSERT INTO books (book_title, description, gallery, book_image, category_id, created_at, release_date) 
                    VALUES (:book_title, :description, :gallery, :book_image, :category_id, :created_at, :release_date)";
            
            $params = [
                ':book_title' => $book_title,
                ':description' => $description,
                ':gallery' => $gallery,
                ':book_image' => $book_image,
                ':category_id' => $category_id,
                ':created_at' => $created_at,
                ':release_date' => $release_date
            ];
    
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($params);
            
            // Trả về ID của sách vừa thêm
            return $this->conn->lastInsertId();
    
        } catch (Exception $e) {
            echo "<h1>Lỗi trong hàm addBook: " . $e->getMessage() . "</h1>";
            return false;
        }
    }
    // add bieens the
    public function addBookVariant($book_id, $format, $language, $quantity, $book_price, $book_sale_price = null) {
        try {
            // Khởi tạo SQL cơ bản
            $sql = "INSERT INTO book_variants (book_id, format, language, quantity, book_price";
            $values = " VALUES (:book_id, :format, :language, :quantity, :book_price";
            $params = [
                ':book_id' => $book_id,
                ':format' => $format,
                ':language' => $language,
                ':quantity' => $quantity,
                ':book_price' => $book_price,
            ];
    
            // Nếu có giá sale, thêm vào câu SQL và danh sách tham số
            if (!is_null($book_sale_price) && $book_sale_price !== "") {
                $sql .= ", book_sale_price";
                $values .= ", :book_sale_price";
                $params[':book_sale_price'] = $book_sale_price;
            }
    
            // Hoàn thành câu SQL
            $sql .= ") " . $values . ")";
    
            // Thực thi truy vấn
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute($params);
        } catch (Exception $e) {
            echo "<h1>Lỗi trong hàm addBookVariant: " . $e->getMessage() . "</h1>";
        }
    }
    public function getVariantByAttributes($book_id, $format, $language, $price) {
        try {
            $sql = "SELECT * FROM book_variants 
                    WHERE book_id = :book_id 
                    AND format = :format 
                    AND language = :language 
                    AND book_price = :price";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':book_id' => $book_id,
                ':format' => $format,
                ':language' => $language,
                ':price' => $price
            ]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            // Xử lý lỗi
            return false;
        }
    }
    public function getVariantByFormatAndLanguage($book_id, $format, $language) {
        try {
            $sql = "SELECT * FROM book_variants 
                    WHERE book_id = :book_id 
                    AND format = :format 
                    AND language = :language";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':book_id' => $book_id,
                ':format' => $format,
                ':language' => $language
            ]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            // Xử lý lỗi
            return false;
        }
    }
    
    public function updateVariantQuantity($variant_id, $quantity_to_add) {
        try {
            $sql = "UPDATE book_variants 
                    SET quantity = quantity + :quantity_to_add 
                    WHERE variant_id = :variant_id";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                ':quantity_to_add' => $quantity_to_add, // Số lượng cần thêm
                ':variant_id' => $variant_id
            ]);
        } catch (Exception $e) {
            // Xử lý lỗi
            return false;
        }
    }
    public function getBookById($book_id){
            
        try{
            $sql = "SELECT * FROM books WHERE book_id=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$book_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch (Exception $e) {
            // Xử lý lỗi
            // return false;
        }
    }
    public function updateBookWithImage($book_title, $description, $gallery, $book_image, $category_id, $release_date, $book_id) {
        try {
            $sql = "UPDATE books 
                    SET book_title = ?, description = ?, gallery = ?, book_image = ?, category_id = ?, release_date = ?, updated_at = NOW() 
                    WHERE book_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$book_title, $description, $gallery, $book_image, $category_id, $release_date, $book_id]);
            echo "Chỉnh sửa thành công";
            return true;
        } catch (PDOException $e) {
            echo "Chỉnh Sửa thất bại! " . $e->getMessage();
            return false;
        }
    }

    public function updateBookWithoutImage($book_title, $description, $category_id, $release_date, $book_id) {
        try {
            $sql = "UPDATE books 
                    SET book_title = ?, description = ?, category_id = ?, release_date = ?, updated_at = NOW() 
                    WHERE book_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$book_title, $description, $category_id, $release_date, $book_id]);
            echo "Chỉnh sửa thành công";
            return true;
        } catch (PDOException $e) {
            echo "Chỉnh Sửa thất bại! " . $e->getMessage();
            return false;
        }
    }
    public function updateBookVariant($variant_id, $format, $language, $quantity, $price, $sale_price = null) {
        try {
            $sql = "UPDATE book_variants 
                    SET format = :format, 
                        language = :language, 
                        quantity = :quantity, 
                        book_price = :price, 
                        book_sale_price = :sale_price 
                    WHERE variant_id = :variant_id";
            
            $stmt = $this->conn->prepare($sql);
            $params = [
                ':format' => $format,
                ':language' => $language,
                ':quantity' => $quantity,
                ':price' => $price,
                ':sale_price' => $sale_price,
                ':variant_id' => $variant_id
            ];
            return $stmt->execute($params);
        } catch (Exception $e) {
            error_log("Lỗi cập nhật biến thể: " . $e->getMessage());
            return false;
        }
    }

    
    
    public function editBook(){
        
    }
    public function __destruct()
    {
        $this->conn = null;
    }
    
}