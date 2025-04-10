<?php
class checkoutModel{
    public $conn;
    public function __construct()
    { 
        $this-> conn = connect_db();  
    }
    
    public function getOrder_details_user_id($user_id)
    {
        $sql = "SELECT * FROM `order_details`  WHERE `order_details` . `user_id` = '$user_id' ORDER BY order_detail_id DESC";
        $data = $this->conn->query($sql);
        return $data->fetch();
    }

    public function getUserName($name)
    {
        $sql = "SELECT * FROM `users` WHERE `users`.`name` = '$name' ";
        $data = $this->conn->query($sql);
        return $data->fetch();
    }

    public function insetOrderDetails($name,$email,$phone,$address,$note,$id,$created_at)
    {   
        $sql = "INSERT INTO `order_details` (`name`, `email`, `phone`, `address`, `note`, `user_id`, `created_at` ) VALUE ('$name', '$email', '$phone', '$address', '$note', '$id', '$created_at')";
        $this->conn->exec($sql);
    }
    
    public function insetOrder($id, $product_id, $order_details_id, $quantity, $price, $total)
{
    $sql = "INSERT INTO `orders` (`user_id`, `product_id`, `order_detail_id`, `quantity`, `price`, `total`) 
            VALUES ('$id', '$product_id', '$order_details_id', '$quantity', '$price', '$total')";
    $this->conn->exec($sql);
}
    

    public function __destruct()
    {
        $this -> conn = null;
    }
}
?>