<?php 

require_once './commons/function.php';
require_once './commons/env.php';
class ProductAdminModel {
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }


    
    public function __destruct()
    {
        $this->conn = null;
    }
    
}