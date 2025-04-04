<?php

class PublisherAdminModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = connect_db();
    }

    // Lấy tất cả nhà phát hành
    public function getAll()
    {
        try {
            $sql = 'SELECT * FROM publishers ORDER BY publisher_id DESC';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Lỗi getAll: " . $e->getMessage());
            return false;
        }
    }

    // Thêm nhà phát hành
    public function add($publisher_name)
    {
        try {
            $sql = 'INSERT INTO publishers (publisher_name, created_at) 
                    VALUES (:publisher_name, NOW())';
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                ':publisher_name' => $publisher_name
            ]);
        } catch (Exception $e) {
            error_log("Lỗi add: " . $e->getMessage());
            return false;
        }
    }

    // Lấy chi tiết nhà phát hành
    public function getDetail($publisher_id)
    {
        try {
            $sql = 'SELECT * FROM publishers WHERE publisher_id = :publisher_id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':publisher_id' => $publisher_id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            error_log("Lỗi getDetail: " . $e->getMessage());
            return false;
        }
    }

    // Cập nhật nhà phát hành
    // Cập nhật nhà phát hành (KHÔNG cập nhật created_at)
    public function update($publisher_id, $publisher_name)
    {
        try {
            $sql = 'UPDATE publishers 
                SET publisher_name = :publisher_name 
                WHERE publisher_id = :publisher_id';
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([
                ':publisher_name' => $publisher_name,
                ':publisher_id'   => $publisher_id
            ]);
        } catch (Exception $e) {
            error_log("Lỗi update: " . $e->getMessage());
            return false;
        }
    }


    // Xóa nhà phát hành
    public function destroy($publisher_id)
    {
        try {
            $sql = 'DELETE FROM publishers WHERE publisher_id = :publisher_id';
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([':publisher_id' => $publisher_id]);
        } catch (Exception $e) {
            error_log("Lỗi destroy: " . $e->getMessage());
            return false;
        }
    }
}
