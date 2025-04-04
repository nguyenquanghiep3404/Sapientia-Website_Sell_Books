<?php
require_once "./models/admin/CategoryAdminModel.php";
require_once "./models/admin/AuthorAdminModel.php";
require_once "./models/admin/PublisherAdminModel.php";

class AdminDashboardController {
    public function index() {
        $categoryModel = new CategoryAdminModel();
        $authorModel = new AuthorAdminModel();
        $publisherModel = new PublisherAdminModel();

        $totalCategories = count($categoryModel->getAll());
        $totalAuthors = count($authorModel->getAll());
        $totalPublishers = count($publisherModel->getAll());

        require_once './views/admin/dashboard.php';
    }
}
