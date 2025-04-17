<?php
class commentController
{
    public $commentModel;
    public function __construct()
    {
        $this->commentModel = new commentModel();
    }

    public function showComment()
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
        $showComment = $this->commentModel->all();
        require_once './views/admin/comment/comment.php';
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->commentModel->delete($id);
        header('location:?action=showComment');
    }

    public function comment()
    {
        // Kiểm tra người dùng đã đăng nhập chưa
        if (!isset($_SESSION['name'])) {
            header('location:?action=login'); // Chuyển hướng đến trang đăng nhập
            exit();
        }

        $user_id = $_SESSION['name']['user_id'];
        $product_id = $_GET['product_id'];

        // Kiểm tra người dùng đã mua sản phẩm này chưa
        if (!$this->commentModel->hasPurchasedProduct($user_id, $product_id)) {
            $_SESSION['error'] = "Bạn cần mua sản phẩm trước khi đánh giá.";
            header("location: ?action=product-details&product_id=$product_id");
            exit();
        }
        // Kiểm tra đã đánh giá sản phẩm này chưa
        if ($this->commentModel->hasCommented($user_id, $product_id)) {
            $_SESSION['error'] = "Bạn đã đánh giá sản phẩm này trước đó.";
            header("location: ?action=product-details&product_id=$product_id");
            exit();
        }
        // var_dump($_POST);
        $comment = $_POST['comment'];
        $user_id = $_SESSION['name']['user_id'];
        $product_id = $_GET['product_id'];
        $create_at = date('Y-m-d H:i:s');
        $name = $_SESSION['name']['name'];
        $email = $_SESSION['name']['email'];
        $rating = $_POST['rating'];
        $this->commentModel->insert_comment($comment, $user_id, $product_id, $create_at, $name, $email, $rating);
        header("location:?action=product-details&product_id=$product_id");
    }
}
?>