<?php 
require_once './models/admin/ProductAdminModel.php';
class ProductAdminController {
    public $productAdminModel;
    public function __construct() {
       $this->productAdminModel = new ProductAdminModel();
    }
    public function index() {
       
        require_once './views/admin/admin-broad.php';
    }
    public function showListBook(){
        $listBook = $this->productAdminModel->getAllBook();
        require_once './views/admin/list-book.php';
    }
    public function addBook(){
        if((isset($_POST['themmoi'])) &&($_POST['themmoi'])) {
            $book_title = $_POST['book_title'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];
            $book_price = $_POST['book_price'];
            $release_date = $_POST['release_date'];
            $book_sale_price = $_POST['book_sale_price'];
            
            // Xử lý tải lên ảnh chính
            $book_image ="";
            if($_FILES["book_image"]["error"] == UPLOAD_ERR_OK) {
                $target_dir = "./uploads/book_one/";
                $target_file = $target_dir.basename($_FILES["book_image"]["name"]);
                if(move_uploaded_file($_FILES["book_image"]["tmp_name"], $target_file)) {
                    $book_image = $target_file;
                } else {
                    $message = "Lỗi khi tải lên ảnh.";
                }
            }
            // xử lý việc tải nhiều ảnh
            $galery = [];
            $target_dir_gallery = "./uploads/book_gallery/";
            if(isset($_FILES["gallery"])) {
                foreach($_FILES["gallery"]["tmp_name"] as $key => $tmp_name) {
                    $gallery_image_name = $_FILES["gallery"]["name"][$key];
                    $gallery_target_file = $target_dir_gallery.basename($gallery_image_name);
    
                    // Chỉ xử lý ảnh nếu người dùng đã tải lên
                    if($_FILES["gallery"]["error"][$key] == UPLOAD_ERR_OK) {
                        if(move_uploaded_file($tmp_name, $gallery_target_file)) {
                            $gallery[] = $gallery_target_file;
                        } else {
                            $message = "Lỗi khi tải lên ảnh trong gallery.";
                            break;
                        }
                    }
                }
            }
            if (empty($message)) {
                // Chuyển gallery thành JSON
                $gallery = json_encode($gallery);
    
                // Thêm sản phẩm vào bảng `books`
                $product_id = $this->productAdminModel->addBook($book_title,$description,$gallery,$book_image,$category_id,$book_price,$release_date,$book_sale_price);
    
                // // Lưu biến thể sản phẩm vào bảng `product_variants`
                // foreach ($_POST['variant_size'] as $key => $size) {
                //     $color = $_POST['variant_color'][$key];
                //     $quantity = $_POST['variant_quantity'][$key];
    
                //     $this->productQuery->addProductVariants($product_id, $size, $color, $quantity);
                // }
    
                // header('Location: index.php?action=');
            }
        }  
        // end submit form
        $listCategories = $this->productAdminModel->getAllCategory();
        require_once './views/admin/create-book.php';
    }

}