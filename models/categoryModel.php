<?php
class categoryModel{
    public $conn;
    
    public function __construct()
    {
        $this->conn = connect_db();
    }
// Lấy danh sách danh mục
    public function all_dm()
    {
        $sql = "SELECT * FROM `categories`";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }
// Ẩn danh mục 
   public function hide_dm($id) 
   { $sql = "UPDATE categories SET status = 0 WHERE category_id = {$id}"; 
     $this->conn->exec($sql); 
   } 
// Hiển thị lại danh mục 
    public function show_dm($id) 
    { 
        $sql = "UPDATE categories SET status = 1 WHERE category_id = {$id}"; 
        $this->conn->exec($sql); 
    } 
// Xoá 
    // public function delete_dm($id)
    // {
    //     $sql = "DELETE FROM categories WHERE `categories`.`id` = {$id}";
    //     $this->conn->exec($sql);
    // }
// Thêm
    public function inset_dm($name,$description)
    {
        $sql = "INSERT INTO `categories` (`name` , `description`) VALUES ('{$name}' , '{$description}')";
        $this->conn->exec($sql);
    }
// Sửa
    public function update_dm($id,$name,$description)
    {
        $sql = "UPDATE `categories` SET `name` = '{$name}', `description` = '{$description}' WHERE `categories`.`category_id` = {$id}";
        $this->conn->exec($sql); 
    }
// Lấy thông tin cho trước
    public function find_dm($id)
    {
        $sql = "SELECT * FROM categories WHERE `categories` . `category_id` = {$id}";
        $stml = $this->conn->query($sql);
        $data = $stml->fetch();
        return $data;
    }
    public function __destruct()
    {
        $this->conn = null;
    }
}   
?>