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
// Controller bên client

$action = isset($_GET["action"]) ? $_GET["action"] : 'user';
$userAdmin = new AdminUsersController();
switch ($action) {
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
    // Thông báo lỗi 403: Không có quyền truy cập - 404: truy cập sai đường dẫn
    case "403":
        include './views/403page.php';
        break;
    default:
        http_response_code(404);
        require_once "./views/404page.php";
        break;
}
