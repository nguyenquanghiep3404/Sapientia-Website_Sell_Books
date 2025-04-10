<?php
class checkoutController{
    public $checkModel;
    public function __construct()
    {
        $this->checkModel = new checkoutModel();
    }
    
    public function returnVNpay(){
        require_once './views/client/order_success.php';
        
    }
    

    public function showOrderDetails()
    {   
        if(isset($_SESSION['name'])){
        $showCheckout = $this->checkModel->getUserName($_SESSION['name']['name']);
        
    }else{
        $showCheckout['name'] = '';
        $showCheckout['email'] = '';
        $showCheckout['phone'] = '';
        $showCheckout['address'] = '';
    }
        // var_dump($_SESSION['myCart']);
        require_once './views/client/checkout.php';
    }
    
    
    public function CreateOrderDetails() { 
        if (!isset($_SESSION['name'])) {
            header('location:?action=login'); // Chuyển hướng đến trang đăng nhập
            exit();
        }
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $note = $_POST['note'];
        $check_method = $_POST['check_method']; // Lấy phương thức thanh toán
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $created_at = date('Y-m-d H:i:s');
        $id = $_SESSION['name']['user_id'];
    

            if ($check_method === 'vnpay') {
                // Chuyển hướng đến VNPAY
               
                // Lưu sản phẩm vào đơn hàng
                // Thêm chi tiết đơn hàng
                $this->checkModel->insetOrderDetails($name, $email, $phone, $address, $note, $id, $created_at); 
                $order_details_id = $this->checkModel->getOrder_details_user_id($id)['order_detail_id']; 
    
                if (isset($_SESSION['myCart']) && is_array($_SESSION['myCart'])) {
                    $order_total = 0;
                    foreach ($_SESSION['myCart'] as $item) {
                        $product_id = $item['product_id'];
                        $quantity = $item['quantity'];
                        $price = $item['price'];
                        // $total =$item['total'] ;
                        // Tính tổng tiền cho từng sản phẩm
                        $total = $price * $quantity;
                        // Cộng tổng tiền của giỏ hàng
                        $order_total += $total;

                    // Gọi hàm thêm sản phẩm vào đơn hàng
                    $this->checkModel->insetOrder($id, $product_id, $order_details_id, $quantity, $price, $total);
                    
                    }
                    
                // Chỉ gọi hàm redirect sau khi xử lý tất cả sản phẩm
                    $this->redirectToVnpay($order_total, $order_details_id, $id);
                }
            } 
            // thanh toan truc tiep
            else if($check_method === 'cod') {
                $this->checkModel->insetOrderDetails($name, $email, $phone, $address, $note, $id, $created_at); 
                $order_details_id = $this->checkModel->getOrder_details_user_id($id)['order_detail_id']; 
    
            if (isset($_SESSION['myCart']) && is_array($_SESSION['myCart'])) {
                // $cartTotal = 0;
                foreach ($_SESSION['myCart'] as $item) {
                    $product_id = $item['product_id'];
                    $quantity = $item['quantity'];
                    // $price = $item['total'];
                    // $price = $item['price'];
                    // $cartTotal += $price * $quantity;
                        $price = $item['price'];
                        // $cartTotal += $price * $quantity;
                        // Tính tổng cho sản phẩm
                        $total =$item['total'] ;

                    // Gọi hàm thêm sản phẩm vào đơn hàng
                    $this->checkModel->insetOrder($id, $product_id, $order_details_id, $quantity, $price, $total);
                }
                unset($_SESSION['myCart']);
                header("location:?action=Vnpay");

            }   
            } else {
            echo "Giỏ hàng rỗng hoặc dữ liệu không đúng!";
        }
    }
    
    // Hàm redirect đến VNPAY
    public function redirectToVnpay($amount, $order_id, $user_id) {
        $vnp_TmnCode = "SF6QFXPR"; // Thay bằng mã TMN của bạn
        $vnp_HashSecret = "MU4F4UXIGGBAQUICD514Z684865TBBVD"; // Thay bằng chuỗi bí mật
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost/Du-an-1_Nhom5/?action=Vnpay"; // URL xử lý sau khi thanh toán
       
        $vnp_TxnRef = $order_id; // Mã đơn hàng
        $vnp_OrderInfo = "Thanh toán đơn hàng $order_id";
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $amount *100; // Quy đổi ra VNĐ (x100)
        $vnp_Locale = "vn";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
    
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );
    
        ksort($inputData);
        $hashdata = "";
        $query = "";
        $i = 0;
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
    
        $vnp_SecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
        $vnp_Url .= "?" . $query . 'vnp_SecureHash=' . $vnp_SecureHash;
    
        // Điều hướng tới URL của VNPAY
        header("Location: $vnp_Url");
        exit();
    }
    // mb

}
?>