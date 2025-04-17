<?php
class OrderControllers
{
    public $orderModel;
    public function __construct()
    {
        $this->orderModel = new OrderModel();
    }
    // Lấy danh sách của order
    public function listOrder()
    {
        if (!isset($_SESSION['name'])) {
            header('location:?action=login'); // Chuyển hướng đến trang đăng nhập
            exit();
        }
        // Kiểm tra quyền của người dùng phải có role =1 thì mới được vào admin
        if (!isset($_SESSION['role_id']) || $_SESSION['role_id'] != 0) {
            header('location:?action=403'); // Chuyển hướng đến trang lỗi không đủ quyền
            exit();
        }
        $orders = $this->orderModel->allOrder();
        // Tham chiếu giá trị status
        $statusShow = [
            0 => 'Chờ xác nhận',
            1 => 'Đã huỷ',
            2 => 'Đã xác nhận',
            3 => 'Đang vận chuyển',
            4 => 'Hoàn thành',
        ];
        require_once './views/admin/Order/showOrder.php';
    }
    public function updateOrder()
    {
        if (!isset($_SESSION['name'])) {
            header('location:?action=login'); // Chuyển hướng đến trang đăng nhập
            exit();
        }
        // Kiểm tra quyền của người dùng phải có role =1 thì mới được vào admin
        if (!isset($_SESSION['role_id']) || $_SESSION['role_id'] != 0) {
            header('location:?action=403'); // Chuyển hướng đến trang lỗi không đủ quyền
            exit();
        }
        $id =  $_GET['id'];
        $orderEdit = $this->orderModel->find($id);
        require_once './views/admin/Order/Order.php';
    }
    public function updateOrder_POST()
    {
        $id = $_GET['id'];
        $newStatus = $_POST['status'];

        $order = $this->orderModel->find($id);
        $currentStatus = $order['status'];

        if ($newStatus <= $currentStatus) {
            // $_SESSION['error'] = "Không thể cập nhật lùi trạng thái!";
            header('location:?action=listOrders');
            return;
        }

        if ($currentStatus == 1) {
            $_SESSION['error'] = "Đơn hàng đã bị huỷ, không thể cập nhật!";
            header('location:?action=listOrders');
            return;
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $updated_at = date('Y-m-d H:i:s');
        $success = $this->orderModel->updateOrder($id, $newStatus, $updated_at);

        if ($success) {
            $_SESSION['success'] = "Cập nhật trạng thái thành công.";
        } else {
            $_SESSION['error'] = "Có lỗi xảy ra khi cập nhật.";
        }

        header('location:?action=listOrders');
    }


    // Chi tiết đơn hàng 
    public function showOrder()
    {
        if (!isset($_SESSION['name'])) {
            header('location:?action=login'); // Chuyển hướng đến trang đăng nhập
            exit();
        }
        // Kiểm tra quyền của người dùng phải có role =1 thì mới được vào admin
        if (!isset($_SESSION['role_id']) || $_SESSION['role_id'] != 0) {
            header('location:?action=403'); // Chuyển hướng đến trang lỗi không đủ quyền
            exit();
        }
        $id = $_GET['id'];
        $showOrder = $this->orderModel->allShow($id);
        require_once './views/admin/Order/showOrderDetails.php';
        // var_dump($showOrder);
    }
}
