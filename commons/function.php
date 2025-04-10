
<?php
// require_once './commons/env.php';
function connect_db() {
    try {
        $dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=utf8';
        $conn = new PDO($dsn, DB_USERNAME, DB_PASSWORD);

        // Cài đặt chế độ xử lý lỗi của PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Cài đặt chế độ trả về dữ liệu dạng mảng kết hợp
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conn;
    } catch (PDOException $e) {
        die('Lỗi kết nối CSDL: ' . $e->getMessage());
    }
}
/**
 * Thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_db();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn dữ liệu (SELECT)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng các bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_db();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một bản ghi
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng chứa bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_db();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
/**
 * Thực thi câu lệnh sql truy vấn một giá trị
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return giá trị
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_value($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_db();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_last_insert_id($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_db();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $last_id = $conn->lastInsertId();
        return $last_id;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
function convertToObjectProduct ($row){
    $product = new Product();
    $product->product_id = $row['product_id'];
    $product->name = $row['name'];
    $product->image = $row['image'];
    $product->price = $row['price'];
    $product->color = $row['color'];
    $product->size = $row['size'];
    $product->quantity = $row['quantity'];
    $product->sale_price = $row['sale_price'];
    $product->category_id = $row['category_id'];
    $product->created_at = $row['created_at'];
    $product->updated_at = $row['updated_at'];
    $product->description = $row['description'];
    $product->gallery = $row['gallery'];
    $product->status= $row['status'];
    return $product;
}

// format date 
// function formatDate($date){
//     return date("d-m-Y", strtotime($date));
// }

// function checkLoginAdmin(){
//     if (!isset($_SESSION['user_admin'])) {
//         header("Location: " . BASE_URL_ADMIN . '?act=login-admin');
//         exit();
//     }
// }

// function formatPrice($price){
//     return number_format($price, 0, ',', '.');
// }
?>