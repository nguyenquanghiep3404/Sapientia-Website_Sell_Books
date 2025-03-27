<?php

class AdminUsersController {
    public $modelUser;
    public function __construct() {
        $this->modelUser = new User();
    }
    public function list() {
        $listUsers = $this->modelUser->getAll();
        require_once './views/user/list.php';
    }
    public function formAdd() {
        require_once './views/user/add.php';
    }
    public function postAdd() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $role_id = 1; 
            $errors = [];
            if (empty($user_name)) {
                $errors['user_name'] = 'Tên người dùng không được để trống.';
            }
            if (empty($email)) {
                $errors['email'] = 'Email không được để trống.';
            }
            if (empty($_POST['password'])) {
                $errors['password'] = 'Mật khẩu không được để trống.';
            }
            if (empty($errors)) {
                $this->modelUser->add($user_name, $email, $password, $address, $phone, $role_id);
                header('Location: index.php?action=user');
                exit();
            } else {
                require_once './views/user/add.php';
            }
        }
    }
    public function formEdit() {
        $user_id = $_GET['id_user'];
        $user = $this->modelUser->getDetail($user_id);
        if ($user) {
            require_once './views/user/edit.php';
        } else {
            header('Location: index.php?action=user');
            exit();
        }
    }
    public function postEdit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user_id = $_POST['user_id'];
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            if ($password) {
                $this->modelUser->update($user_id, $user_name, $email, $password, $address, $phone);
            } else {
                $this->modelUser->updateWithoutPassword($user_id, $user_name, $email, $address, $phone);
            }
            header('Location: index.php?action=user');
            exit();
        }
    }
    public function delete() {
        $user_id = $_GET['id_user'];
        $this->modelUser->destroy($user_id);
        header('Location: index.php?action=user');
        exit();
    }
    public function aa(){}
}