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
require_once "./controllers/admin/ProductAdminController.php";
// Kết nối với model
// model bên admin
require_once "./models/admin/ProductAdminModel.php";
require_once "./models/admin/UserAdminModel.php";
require_once "./models/client/ProductClientModel.php";
// model bên client

// Kết nối Controller
// Controller bên admin

require_once "./controllers/admin/UserAdminController.php";
require_once "./controllers/admin/AuthController.php";
require_once "./controllers/client/ProductClientController.php";

// Controller bên client

$action = isset($_GET["action"]) ? $_GET["action"] : 'admin';
$productAdmin = new ProductAdminController() ;
$userAdmin = new AdminUsersController();
$controller = new AdminDashboardController();
$controllerCategory = new AdminCategoriesController();
$controllerAuthors = new AdminAuthorsController();
$controllerPublishers = new AdminPublishersController();
$authController = new AuthController();
$productClient = new ProductClientController();

switch ($action) {
    case "admin":
        $productAdmin->index();
        break;
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
    case "client":
        $productClient->showClientBook();
        break;
    case "detail":
        $productClient->showDetailBook();
        break;
    case "admin":
        $productAdmin->index();
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
    // Quản lý danh mục (Category)
    case "category":
        $controllerCategory->list();
        break;
    case "add-category":
        $controllerCategory->formAdd();
        break;
    case "edit-category":
        $controllerCategory->formEdit();
        break;
    case "delete-category":
        $controllerCategory->delete();
        break;
    case "show-category":
        $controllerCategory->showDetail();
        break;
    // Quản lý tác giả (Author)
    case "author":
        $controllerAuthors->list();
        break;
    case "add-author":
        $controllerAuthors->formAdd();
        break;
    case "edit-author":
        $controllerAuthors->formEdit();
        break;
    case "delete-author":
        $controllerAuthors->delete();
        break;
    case "show-author":
        $controllerAuthors->showDetail();
        break;

    // Quản lý nhà xuất bản (Publisher)
    case "publisher":
        $controllerPublishers->list();
        break;
    case "add-publisher":
        $controllerPublishers->formAdd();
        break;
    case "edit-publisher":
        $controllerPublishers->formEdit();
        break;
    case "delete-publisher":
        $controllerPublishers->delete();
        break;
    case "show-publisher":
        $controllerPublishers->showDetail();
    case "edit-book":
        $productAdmin->editBook();
        break;
    case "delete-book":
        $productAdmin->deleteBook();
        break;
    // Thông báo lỗi 403: Không có quyền truy cập - 404: truy cập sai đường dẫn
    case "403":
        include './views/403page.php';
}
