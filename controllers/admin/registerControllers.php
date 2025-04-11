<?php
class registerController{
    public $registerModel;
    public function __construct()
    { 
         $this->registerModel = new registerModel();  
    }
    public function all_register()
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
        $register = $this->registerModel->all_register();
        require_once './views/admin/login/show-acc.php';
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->registerModel->delete($id);
        header('location:?action=all_register');
    }

    public function createRegister()
    {
        require_once './views/admin/login/register.php';
    }
    public function createRegisterPost()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        // $role_id = 1;
        $this->registerModel->inset($name,$email,$password,$phone,$address);
        header('location:?action=login');
    }
    public function update_role()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userId = $_POST['user_id'];
            $roleId = $_POST['role_id'];

            // Không cho tự hạ cấp chính mình nếu là admin duy nhất (bạn có thể thêm logic nâng cao ở đây)
            $this->registerModel->updateRole($userId, $roleId);
        }
        header('Location: ?action=all_register');
    }
    public function edit_user() {
        $id = $_GET['id'];
        $user = $this->registerModel->getUserById($id);
        require_once './views/admin/login/editUser.php';
    }
    
    public function edit_user_post() {
        $id = $_POST['user_id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $role_id = $_POST['role_id'];
    
        $this->registerModel->updateUser($id, $name, $email, $phone, $address, $role_id);
        header('Location:?action=all_register');
    }
    

    
    
} 
 ?>