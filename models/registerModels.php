<?php
class registerModel{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }

    public function all_register()
    {
        $sql = "SELECT * FROM `users`";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }
    public function delete($id)
    {
         $sql = "DELETE FROM users WHERE `users`.`user_id`={$id} ";
         $this->conn->exec($sql);
    }
    public function inset($name,$email,$password,$phone,$address)
    {
        $sql = "INSERT INTO `users` (`name`,`email`,`password`,`phone`,`address`) VALUE ('{$name}','{$email}','{$password}','{$phone}','{$address}') ";
        $this->conn->exec($sql);
    }
    public function updateRole($userId, $roleId) {
        $sql = "UPDATE users SET role_id = ? WHERE user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$roleId, $userId]);
    }
    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
    
    public function updateUser($id, $name, $email, $phone, $address, $role_id) {
        $sql = "UPDATE users SET name = ?, email = ?, phone = ?, address = ?, role_id = ? WHERE user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $email, $phone, $address, $id, $role_id]);
    }
    
    
}


 ?>