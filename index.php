<?php
session_start();

// Kết nối PDO
require_once "./commons/env.php";
require_once "./commons/function.php";

// Kết nối với model
// model bên admin
require_once "./models/admin/ProductAdminModel.php";
require_once "./models/admin/UserAdminModel.php";
// model bên client

// Kết nối Controller
// Controller bên admin
require_once "./controllers/admin/ProductAdminController.php";
require_once "./controllers/admin/UserAdminController.php";
require_once "./controllers/admin/AuthController.php";
// Controller bên client

$action = isset($_GET["action"]) ? $_GET["action"] : 'admin';
$productAdmin = new ProductAdminController() ;
$userAdmin = new AdminUsersController();
$productAdmin = new ProductAdminController();
$authController = new AuthController();
switch ($action) {
    case "admin":
        $productAdmin->index();
    case "login":
        $authController->showLoginForm();
        break;
    case "login_post":
        $authController->login();
        break;
    case "register":
        $authController->showRegisterForm();
        break;
    case "register_post":
        $authController->register();
        break;
    case "logout":
        $authController->logout();
        break;
    case "user":
        $userAdmin->list();
        break;
    case "user_add":
        $userAdmin->formAdd();
        break;
    case "user_add_post":
        $userAdmin->postAdd();
        break;
    case "user_edit":
        $userAdmin->formEdit();
        break;
    case "user_edit_post":
        $userAdmin->postEdit();
        break;
    case "user_delete":
        $userAdmin->delete();
        break;
    case "list-book":
        $productAdmin->showListBook();
        break;
    case "create-book":
        $productAdmin->addBook();
        break;
    case "edit-book":
        $productAdmin->editBook();
        break;
    case "delete-book":
        $productAdmin->deleteBook();
        break;
    // Thông báo lỗi 403: Không có quyền truy cập - 404: truy cập sai đường dẫn
    case "403":
        include './views/403page.php';
        break;
    default:
        http_response_code(404);
        require_once "./views/404page.php";
        break;
}
