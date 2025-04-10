<?php 
require_once './models/historicModel.php';

class historicController {

    public $historicModel;
    public $checkModel;


    public function __construct() {
        $this->historicModel = new historicModel();
        $this->checkModel = new checkoutModel();
        
    }
    public function orderHistory(){
        
        // if (isset($_SESSION['user_id'])) {
        //     $user_id = $_SESSION['user_id'];
        //     echo "User ID của người dùng đang đăng nhập là: $user_id";
        // } else {
        //     echo "Người dùng chưa đăng nhập.";
        // }

        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!isset($_SESSION['name'])) {
            echo "<script>alert('Vui lòng đăng nhập để xem lịch sử đơn hàng.');</script>";
            header('location:?action=login'); // Chuyển hướng đến trang đăng nhập
            exit();
        }
         // Lấy user_id từ session
         $user_id = $_SESSION['user_id'];
        //  echo $user_id;
        // Lấy dữ liệu lịch sử đơn hàng từ Model
        $orderHistory = $this->historicModel->getOrderHistoryByUserId($user_id);
        require_once './views/client/orderHistory.php';
    }
    public function viewOrderDetails() {
        // Kiểm tra nếu người dùng chưa đăng nhập
        if (!isset($_SESSION['name'])) {
            echo "<script>alert('Vui lòng đăng nhập để xem lịch sử đơn hàng.');</script>";
            header('location:?action=login'); // Chuyển hướng đến trang đăng nhập
            exit();
        }
        // Lấy order_id từ URL (GET parameter)
        if (isset($_GET['order_id'])) {
            $order_id = intval($_GET['order_id']); // Chuyển về kiểu số nguyên
        } else {
            echo "<script>alert('Không tìm thấy đơn hàng.');</script>";
            header('location:?action=orderHistory');
            exit();
        }

        // Lấy dữ liệu chi tiết đơn hàng từ Model
        $orderDetails = $this->historicModel->getOrderDetails($order_id);

        // Gửi dữ liệu đến View
        require_once './views/client/orderDetailsView.php';
    }

}



?>