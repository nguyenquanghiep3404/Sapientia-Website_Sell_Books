<?php

class AuthController {
    public $modelUser;

    public function __construct() {
        $this->modelUser = new User();
    }

    public function showLoginForm() {
        require_once './views/auth/login.php';
    }

    public function showRegisterForm() {
        require_once './views/auth/register.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];

            if ($this->modelUser->getUserByEmail($email)) {
                $_SESSION['error'] = "Email đã tồn tại!";
                header("Location: ?action=register");
                exit();
            }

            if ($this->modelUser->register($user_name, $email, $password, $address, $phone)) {
                $_SESSION['success'] = "Đăng ký thành công!";
                header("Location: ?action=login");
                exit();
            }
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->modelUser->login($email, $password);
            if ($user) {
                $_SESSION['user'] = $user;
                header("Location: index.php");
                exit();
            } else {
                $_SESSION['error'] = "Email hoặc mật khẩu không đúng!";
                header("Location: ?action=login");
                exit();
            }
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
        exit();
    }
}
?>
