<?php
class profileModel{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }
    public function updateProfile($name, $email, $phone, $address)
    {
        $sql = "UPDATE users SET email = '$email', phone = '$phone', address = '$address' WHERE name = '$name'";
        $this->conn->exec($sql);
    }
    public function getProfile($id)
    {
        $sql = "SELECT * FROM users WHERE user_id ='$id'";
        $data = $this->conn->query($sql);
        return $data->fetch();
    }
    public function showProfile(){
        $sql = "SELECT * FROM users";
        $data = $this->conn->query($sql);
        return $data->fetch();
    }
    public function getUsername($name){
        $sql = "SELECT * FROM users WHERE name = '$name'";
        $data = $this->conn->query($sql);
        return $data->fetch();
    }
    public function __destruct()
    {
        $this->conn = null;
    }
}
?>