<?php
require_once "./commons/env.php";
require_once "./commons/function.php";
require_once "./models/admin/CategoryAdminModel.php";
require_once "./models/admin/AuthorAdminModel.php";
require_once "./models/admin/PublisherAdminModel.php";
require_once "./controllers/admin/AdminCategoriesController.php";
require_once "./controllers/admin/AdminAuthorsController.php";
require_once "./controllers/admin/AdminPublishersController.php";
require_once "./controllers/admin/AdminDashboardController.php";

$action = isset($_GET["act"]) ? $_GET["act"] : 'dashboard';  
$type = isset($_GET["type"]) && in_array($_GET["type"], ['category', 'author', 'publisher']) ? $_GET["type"] : 'category';

if ($action === "dashboard") {
    $controller = new AdminDashboardController();
    $controller->index();
    exit();
}

switch ($type) {
    case "category":
        $controller = new AdminCategoriesController();
        break;
    case "author":
        $controller = new AdminAuthorsController();
        break;
    case "publisher":
        $controller = new AdminPublishersController();
        break;
    default:
        header("Location: " . BASE_URL . "index.php?act=dashboard");
        exit();
}

switch ($action) {
    case "list":
        $controller->list();
        break;
    case "add":
        $controller->formAdd();
        break;
    case "postAdd":
        $controller->postAdd();
        break;
    case "edit":
        $controller->formEdit();
        break;
    case "postEdit":
        $controller->postEdit();
        break;
    case "delete":
        $controller->delete();
        break;
    case "show":
        $controller->showDetail();
        break;
    default:
        header("Location: " . BASE_URL . "index.php?act=dashboard");
        exit();
}
