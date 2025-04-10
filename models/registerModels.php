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
}


 ?>