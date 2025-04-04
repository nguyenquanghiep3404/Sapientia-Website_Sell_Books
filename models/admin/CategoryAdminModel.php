<?php 

class CategoryAdminModel {
    private $conn;

    public function __construct() {
        $this->conn = connect_db();
    }

    // Lấy tất cả danh mục
    public function getAll() {
        try {
            $sql = 'SELECT * FROM categories ORDER BY category_id DESC';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Lỗi getAll: " . $e->getMessage());
            return false;
        }
    }

    // Thêm danh mục
    public function add($category_name, $description) {
        try {
            $sql = 'INSERT INTO categories (category_name, description, created_at, updated_at) 
                    VALUES (:category_name, :description, NOW(), NOW())';
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                ':category_name' => $category_name,
                ':description'   => $description
            ]);
        } catch (Exception $e) {
            error_log("Lỗi add: " . $e->getMessage());
            return false;
        }
    }

    // Lấy chi tiết danh mục
    public function getDetail($category_id) {
        try {
            $sql = 'SELECT * FROM categories WHERE category_id = :category_id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':category_id' => $category_id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Lỗi getDetail: " . $e->getMessage());
            return false;
        }
    }

    // Cập nhật danh mục
    public function update($category_id, $category_name, $description) {
        try {
            $sql = 'UPDATE categories 
                    SET category_name = :category_name, description = :description, updated_at = NOW() 
                    WHERE category_id = :category_id';
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                ':category_name' => $category_name,
                ':description'   => $description,
                ':category_id'   => $category_id
            ]);
        } catch (Exception $e) {
            error_log("Lỗi update: " . $e->getMessage());
            return false;
        }
    }

    // Xóa danh mục
    public function destroy($category_id) {
        try {
            $sql = 'DELETE FROM categories WHERE category_id = :category_id';
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([':category_id' => $category_id]);
        } catch (Exception $e) {
            error_log("Lỗi destroy: " . $e->getMessage());
            return false;
        }
    }
    
}
