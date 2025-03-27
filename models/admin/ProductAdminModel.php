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
        try{
            $sql = "SELECT books.*, categories.category_name
            FROM books
            INNER JOIN categories ON books.category_id = categories.category_id
             ";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(Exception $e){
            echo "<h1>";
            echo "Lỗi hàm all trong model: " . $e->getMessage();
            echo "</h1>";
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
    public function addBook($book_title, $description, $gallery, $book_image, $category_id, $book_price, $release_date, $book_sale_price = null) {
        try {
            date_default_timezone_set('Asia/Ho_Chi_Minh'); 
            $created_at = date('Y-m-d H:i:s');

            // Khởi tạo câu lệnh SQL
            $sql = "INSERT INTO books (book_title, description, gallery, book_image, category_id, book_price, created_at, release_date";
            $values = " VALUES (:book_title, :description, :gallery, :book_image, :category_id, :book_price, :created_at, :release_date";
            $params = [
                ':book_title' => $book_title,
                ':description' => $description,
                ':gallery' => $gallery,
                ':book_image' => $book_image,
                ':category_id' => $category_id,
                ':book_price' => $book_price,
                ':created_at' => $created_at,
                ':release_date' => $release_date
            ];
    
            // Nếu có giá sale thì thêm vào câu SQL
            if ($book_sale_price !== null && $book_sale_price !== "") {
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
            echo "<h1>Lỗi trong hàm addBook: " . $e->getMessage() . "</h1>";
        }
    }
    // add bieens the
    public function hhd(){
        
    }
    
    public function __destruct()
    {
        $this->conn = null;
    }
    
}