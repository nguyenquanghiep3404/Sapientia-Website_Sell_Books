<?php
session_start();

// Kết nối PDO
require_once "./commons/env.php";
require_once "./commons/function.php";

// Kết nối với model
// model bên admin
require_once "./models/admin/ProductAdminModel.php";
// model bên client

// Kết nối Controller
// Controller bên admin
require_once "./controllers/admin/ProductAdminController.php";
// Controller bên client

$action = isset($_GET["action"]) ? $_GET["action"] : 'admin';
$productAdmin = new ProductAdminController();
switch ($action) {
    case "admin":
        $productAdmin->index();
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
    // Thông báo lỗi 403: Không có quyền truy cập - 404: truy cập sai đường dẫn
    case "403":
        include './views/403page.php';
        break;
    default:
        http_response_code(404);
        require_once "./views/404page.php";
        break;
}
