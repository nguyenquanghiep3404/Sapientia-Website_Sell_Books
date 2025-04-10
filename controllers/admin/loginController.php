<?php

class loginController{
    public $loginModel;
    public function __construct()
    {
        $this->loginModel = new loginModel();
    }
    public function home()
    {
        require_once './views/client/dashboardClient.php';
    }
    public function login()
    {
        require_once './views/admin/login/login.php';
    }
    public function loginPost()
    {
        if(isset($_POST['btn-login'])){
            $username = $_POST['name'];
            $password = $_POST['password'];
            $user = $this->loginModel->check($username,$password);

            if($user){
               $_SESSION['name'] = $user;
               $_SESSION['user_id'] = $_SESSION['name']['user_id'];
               $_SESSION['email'] = $_SESSION['name']['email'];
               $_SESSION['role_id'] = $this->loginModel->Role($username)['role_id'];
            //    var_dump($_SESSION['id_role']);
               header('location:?action=client');
            }else {
                // Lưu thông báo lỗi vào session tạm
                $_SESSION['login_error'] = "Sai tên đăng nhập hoặc mật khẩu!";
                header('location:?action=login');
                exit();
            }

        }
    }

    public function logout()
    {
        unset($_SESSION['name']);
       
        header('location:?action=client');
        
    } 
}

?>