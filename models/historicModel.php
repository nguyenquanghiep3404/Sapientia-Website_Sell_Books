<?php
class historicModel
{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }
    // Lấy thông tin chi tiết đơn hàng của người dùng theo user_id
    public function getOrderHistoryByUserId($user_id)
    {
        $sql = "SELECT o.order_id, o.product_id, o.quantity, o.total, od.name, od.email, od.phone, od.address, od.note, od.order_detail_id, od.created_at, od.status
        FROM orders o
        JOIN order_details od ON o.order_detail_id = od.order_detail_id
        WHERE o.user_id = :user_id ORDER BY od.created_at DESC";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về danh sách đơn hàng
    }
    // chi tiet don hang
    public function getOrderDetails($order_detail_id)
    {
        $sql = "SELECT 
        o.order_detail_id, 
        o.order_id, 
        o.product_id, 
        o.variant_id,
        o.quantity, 
        o.total AS order_total, 
        o.price AS order_price, 
        p.image AS product_image,
        p.name AS product_name, 
        COALESCE(pv.sale_price, pv.price) AS product_price
    FROM orders o
    JOIN products p ON o.product_id = p.product_id
    JOIN product_variant pv ON o.variant_id = pv.product_variant_id
    WHERE o.order_detail_id = :order_detail_id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':order_detail_id', $order_detail_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy danh sách đơn hàng gần nhất (cho admin)
    public function getRecentOrders($limit = 10)
    {
        $sql = "SELECT 
                    od.order_detail_id, 
                    od.name AS customer_name,
                    SUM(o.total) AS total,
                    od.status,
                    od.created_at
                FROM order_details od
                JOIN orders o ON od.order_detail_id = o.order_detail_id
                GROUP BY od.order_detail_id
                ORDER BY od.created_at DESC 
                LIMIT :limit";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy dữ liệu cho biểu đồ doanh thu
    public function getRevenueChartData($days = 7)
    {
        $sql = "SELECT 
                    DATE(od.created_at) AS date,
                    SUM(o.total) AS total_revenue
                FROM order_details od
                JOIN orders o ON od.order_detail_id = o.order_detail_id
                WHERE od.created_at >= CURDATE() - INTERVAL :days DAY
                GROUP BY DATE(od.created_at)
                ORDER BY date ASC";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':days', $days, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $labels = [];
        $data = [];
        foreach ($result as $row) {
            $labels[] = date('d/m', strtotime($row['date']));
            $data[] = $row['total_revenue'];
        }

        return [
            'labels' => $labels,
            'data' => $data
        ];
    }


    public function __destruct()
    {
        $this->conn = null;
    }

    // Tìm đơn hàng theo ID
    public function find($order_detail_id)
    {
        $sql = "SELECT * FROM order_details WHERE order_detail_id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $order_detail_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Cập nhật trạng thái đơn hàng
    public function updateOrder($order_detail_id, $status, $updated_at)
    {
        $sql = "UPDATE order_details SET status = :status, updated_at = :updated_at WHERE order_detail_id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':status', $status, PDO::PARAM_INT); // sửa thành INT
        $stmt->bindParam(':updated_at', $updated_at);
        $stmt->bindParam(':id', $order_detail_id);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }

    // Lấy danh sách đơn hàng theo user
    public function getOrdersByUser($userId)
    {
        $sql = "SELECT * FROM order_details WHERE user_id = :userId ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
