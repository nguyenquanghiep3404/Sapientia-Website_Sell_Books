<?php 
class historicModel {
    public $conn;
    public function __construct()
    { 
        $this-> conn = connect_db();  
    }
    // Lấy thông tin chi tiết đơn hàng của người dùng theo user_id
    public function getOrderHistoryByUserId($user_id) {
        $sql = "SELECT o.order_id, o.product_id, o.quantity, o.total, od.name, od.email, od.phone, od.address, od.note, od.order_detail_id, od.created_at
                FROM orders o
                JOIN order_details od ON o.order_detail_id = od.order_detail_id
                WHERE o.user_id = :user_id ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về danh sách đơn hàng
    }
    // chi tiet don hang
    public function getOrderDetails($order_detail_id) {
            $sql = "SELECT 
                o.order_detail_id, 
                o.order_id, 
                o.product_id, 
                o.quantity, 
                o.total AS order_total, 
                o.price AS order_price, 
                p.image AS product_image,
                p.name AS product_name, 
                p.price AS product_price
            FROM orders o
            JOIN products p ON o.product_id = p.product_id
            WHERE o.order_detail_id = :order_detail_id"; 
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':order_detail_id', $order_detail_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về danh sách chi tiết đơn hàng
    }
    
    public function __destruct()
    {
        $this -> conn = null;
    }

}



?>