<?php
class profileController{
    public $profileModel;
    public function __construct()
    { 
       $this->profileModel = new profileModel();  
    }
    public function  profile(){
        $show = $this->profileModel->getUsername($_SESSION['name']['name']);

        if(isset($_POST['btn_update'])){
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            if($this->profileModel->updateProfile($_SESSION['name']['name'], $email, $phone, $address)){
                header("location:?action=profile");
            }else{
                echo "Có lỗi xảy ra, vui lòng thử lại";
            }
        }

        if(isset($_GET['update']) && $_GET['update'] == 1){
            echo "<script>alert('Sửa thành công');</script>";
        }

        require_once './views/client/profile.php';
    }
}
?>