<?php 
require_once './models/admin/ProductAdminModel.php';
class ProductAdminController {
    public $productAdminModel;
    public function __construct() {
       $this->productAdminModel = new ProductAdminModel();
    }
    public function index() {
        echo "123";
        require_once './views/admin/admin-broad.php';
    }
}