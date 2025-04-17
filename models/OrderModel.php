<?php
class OrderModel
{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }

    public function allOrder()
    {
        $sql = "SELECT * FROM `order_details` ORDER BY created_at DESC";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }

    public function updateOrder($id, $status, $updated_at)
    {
        $sql = "UPDATE `order_details` SET `status` = :status, `updated_at` = :updated_at WHERE `order_detail_id` = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':status', $status, PDO::PARAM_INT);
        $stmt->bindParam(':updated_at', $updated_at);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM `order_details` WHERE `order_details` . `order_detail_id` = '$id'";
        $stml = $this->conn->query($sql);
        $data = $stml->fetch();
        return $data;
    }
    // Chi tiết đơn hàng
    public function allShow($id)
    {
        $sql = "SELECT 
    orders.order_id,
    orders.total AS order_price,
    orders.quantity,
    
    
    order_details.name AS customer_name,
    order_details.address,
    order_details.phone,
    order_details.email,
    order_details.note,
    order_details.created_at AS detail_created_at,
    
    products.name AS product_name,
    products.image,
    products.description
    FROM orders
    INNER JOIN order_details 
    ON orders.order_detail_id = order_details.order_detail_id
    INNER JOIN products 
    ON orders.product_id = products.product_id WHERE order_details.order_detail_id = '$id' ";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }
    public function __destruct()
    {
        $this->conn = null;
    }
}
