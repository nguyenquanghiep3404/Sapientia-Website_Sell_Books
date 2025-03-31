<?php 

class AuthorAdminModel {
    private $conn;

    public function __construct() {
        $this->conn = connect_db();
    }

    // Lấy tất cả tác giả
    public function getAll() {
        try {
            $sql = 'SELECT * FROM authors ORDER BY author_id DESC';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Lỗi getAll: " . $e->getMessage());
            return false;
        }
    }

    // Thêm tác giả
    public function add($author_name, $bio) {
        try {
            $sql = 'INSERT INTO authors (author_name, bio, created_at) 
                    VALUES (:author_name, :bio, NOW())';
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                ':author_name' => $author_name,
                ':bio'         => $bio
            ]);
        } catch (Exception $e) {
            error_log("Lỗi add: " . $e->getMessage());
            return false;
        }
    }

    // Lấy chi tiết tác giả
    public function getDetail($author_id) {
        try {
            $sql = 'SELECT * FROM authors WHERE author_id = :author_id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':author_id' => $author_id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Lỗi getDetail: " . $e->getMessage());
            return false;
        }
    }

    // Cập nhật tác giả
    public function update($author_id, $author_name, $bio) {
        try {
            $sql = 'UPDATE authors 
                    SET author_name = :author_name, bio = :bio 
                    WHERE author_id = :author_id';
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                ':author_name' => $author_name,
                ':bio'         => $bio,
                ':author_id'   => $author_id
            ]);
        } catch (Exception $e) {
            error_log("Lỗi update: " . $e->getMessage());
            return false;
        }
    }
    

    // Xóa tác giả
    public function destroy($author_id) {
        try {
            $sql = 'DELETE FROM authors WHERE author_id = :author_id';
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([':author_id' => $author_id]);
        } catch (Exception $e) {
            error_log("Lỗi destroy: " . $e->getMessage());
            return false;
        }
    }
}
