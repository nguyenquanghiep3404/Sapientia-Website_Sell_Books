<?php 

require_once './commons/function.php';
require_once './commons/env.php';
class User {
    public $conn;
    public function __construct() {
        $this->conn = connect_db();
    }
    public function getAll() {
        try {
            $sql = 'SELECT * FROM users';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    public function add($user_name, $email, $password, $address, $phone, $role_id) {
        try {
            $sql = 'INSERT INTO users (user_name, email, password, address, phone, role_id) VALUES (:user_name, :email, :password, :address, :phone, :role_id)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':user_name' => $user_name,
                ':email' => $email,
                ':password' => $password,
                ':address' => $address,
                ':phone' => $phone,
                ':role_id' => $role_id
            ]);
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    public function getDetail($user_id) {
        try {
            $sql = 'SELECT * FROM users WHERE user_id = :user_id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':user_id' => $user_id]);
            return $stmt->fetch();
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    public function update($user_id, $user_name, $email, $password, $address, $phone) {
        try {
            $sql = 'UPDATE users SET user_name = :user_name, email = :email, password = :password, address = :address, phone = :phone WHERE user_id = :user_id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':user_name' => $user_name,
                ':email' => $email,
                ':password' => $password,
                ':address' => $address,
                ':phone' => $phone,
                ':user_id' => $user_id
            ]);
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    public function updateWithoutPassword($user_id, $user_name, $email, $address, $phone) {
        try {
            $sql = 'UPDATE users SET user_name = :user_name, email = :email, address = :address, phone = :phone WHERE user_id = :user_id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                ':user_name' => $user_name,
                ':email' => $email,
                ':address' => $address,
                ':phone' => $phone,
                ':user_id' => $user_id
            ]);
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
    public function destroy($user_id) {
        try {
            $sql = 'DELETE FROM users WHERE user_id = :user_id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([':user_id' => $user_id]);
        } catch (Exception $e) {
            echo "Lỗi: " . $e->getMessage();
        }
    }
}
