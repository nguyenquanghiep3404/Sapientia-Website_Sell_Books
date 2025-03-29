<?php
require_once './models/admin/ProductAdminModel.php';
class ProductAdminController
{
    public $productAdminModel;
    public function __construct()
    {
        $this->productAdminModel = new ProductAdminModel();
    }
    public function index()
    {

        require_once './views/admin/admin-broad.php';
    }
    public function showListBook()
    {
        $listBook = $this->productAdminModel->getAllBook();
        require_once './views/admin/book/list-book.php';
    }
    public function addBook()
    {
        if ((isset($_POST['themmoi'])) && ($_POST['themmoi'])) {
            $book_title = $_POST['book_title'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];
            // $book_price = $_POST['book_price'];
            // $release_date = date('Y', strtotime($_POST['release_date']));
            $release_date = $_POST['release_date'];
            // $book_sale_price = $_POST['book_sale_price'];

            // Xử lý tải lên ảnh chính
            $book_image = "";
            if ($_FILES["book_image"]["error"] == UPLOAD_ERR_OK) {
                $target_dir = "./uploads/book_one/";
                $target_file = $target_dir . basename($_FILES["book_image"]["name"]);
                if (move_uploaded_file($_FILES["book_image"]["tmp_name"], $target_file)) {
                    $book_image = $target_file;
                } else {
                    $message = "Lỗi khi tải lên ảnh.";
                }
            }
            // xử lý việc tải nhiều ảnh
            $galery = [];
            $target_dir_gallery = "./uploads/book_gallery/";
            if (isset($_FILES["gallery"])) {
                foreach ($_FILES["gallery"]["tmp_name"] as $key => $tmp_name) {
                    $gallery_image_name = $_FILES["gallery"]["name"][$key];
                    $gallery_target_file = $target_dir_gallery . basename($gallery_image_name);

                    // Chỉ xử lý ảnh nếu người dùng đã tải lên
                    if ($_FILES["gallery"]["error"][$key] == UPLOAD_ERR_OK) {
                        if (move_uploaded_file($tmp_name, $gallery_target_file)) {
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

                // Thêm sách và lấy book_id
                $book_id = $this->productAdminModel->addBook($book_title, $description, $gallery, $book_image, $category_id, $release_date);

                if ($book_id) {
                    foreach ($_POST['variant_format'] as $key => $format) {
                        $language = $_POST['variant_language'][$key];
                        $quantity = (int)$_POST['variant_quantity'][$key];
                        $price = $_POST['variant_price'][$key];
                        $sale_price = $_POST['variant_sale_price'][$key] ?? null;

                        // Kiểm tra xem biến thể đã tồn tại (cùng book_id, format, language, price)
                        $existing = $this->productAdminModel->getVariantByAttributes(
                            $book_id,
                            $format,
                            $language,
                            $price
                        );

                        if ($existing) {
                            // Cập nhật số lượng nếu đã tồn tại
                            $this->productAdminModel->updateVariantQuantity(
                                $existing['variant_id'],
                                $quantity
                            );
                        } else {
                            // Thêm mới nếu chưa tồn tại
                            $this->productAdminModel->addBookVariant(
                                $book_id,
                                $format,
                                $language,
                                $quantity,
                                $price,
                                $sale_price
                            );
                        }
                    }
                    header('Location:index.php?action=list-book');
                    exit();
                } else {
                    $message = "Thêm sách thất bại!";
                }
            }
        }
        // end submit form
        $listCategories = $this->productAdminModel->getAllCategory();
        require_once './views/admin/book/create-book.php';
    }

    public function editBook() {
        if (isset($_GET['book_id'])) {
            $book_id = $_GET['book_id'];
            $one = $this->productAdminModel->getBookById($book_id);
            $existingGallery = isset($one[0]['gallery']) ? json_decode($one[0]['gallery'], true) : [];
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['capnhat'])) {
            $book_title = $_POST['book_title'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];
            $release_date = $_POST['release_date'];
    
            // Xử lý ảnh chính
            $book_image = $one[0]['book_image'] ?? ''; // Giữ nguyên ảnh cũ
            if ($_FILES["book_image"]["error"] == UPLOAD_ERR_OK) {
                $target_dir = "./uploads/book_one/";
                $target_file = $target_dir . basename($_FILES["book_image"]["name"]);
                if (move_uploaded_file($_FILES["book_image"]["tmp_name"], $target_file)) {
                    $book_image = $target_file;
                } else {
                    $message = "Lỗi khi tải lên ảnh chính.";
                }
            }
    
            // Xử lý gallery
$gallery = isset($_POST['existing_gallery']) ? $_POST['existing_gallery'] : [];
if (!empty($_FILES["gallery"]["name"][0])) {
    $target_dir_gallery = "./uploads/book_gallery/";
    foreach ($_FILES["gallery"]["tmp_name"] as $key => $tmp_name) {
        if ($_FILES["gallery"]["error"][$key] == UPLOAD_ERR_OK) {
            $gallery_image_name = $_FILES["gallery"]["name"][$key];
            $gallery_target_file = $target_dir_gallery . basename($gallery_image_name);
            if (move_uploaded_file($tmp_name, $gallery_target_file)) {
                $gallery[] = $gallery_target_file;
            }
        }
    }
}
$gallery_json = json_encode($gallery);

    
            if (empty($message)) {
                // Cập nhật thông tin sách
                if (!empty($book_image) || !empty($gallery_json)) {
                    $this->productAdminModel->updateBookWithImage(
                        $book_title,
                        $description,
                        $gallery_json,
                        $book_image,
                        $category_id,
                        $release_date,
                        $book_id
                    );
                } else {
                    $this->productAdminModel->updateBookWithoutImage(
                        $book_title,
                        $description,
                        $category_id,
                        $release_date,
                        $book_id
                    );
                }
    
                // Cập nhật biến thể
                if (isset($_POST['variant_id'])) {
                    foreach ($_POST['variant_id'] as $key => $variant_id) {
                        $format = $_POST['variant_format'][$key] ?? '';
                        $language = $_POST['variant_language'][$key] ?? '';
                        $quantity = (int)($_POST['variant_quantity'][$key] ?? 0);
                        $price = (float)($_POST['variant_price'][$key] ?? 0);
                        $sale_price = !empty($_POST['variant_sale_price'][$key]) 
                            ? (float)$_POST['variant_sale_price'][$key] 
                            : null;
    
                        $this->productAdminModel->updateBookVariant(
                            $variant_id,
                            $format,
                            $language,
                            $quantity,
                            $price,
                            $sale_price
                        );
                    }
                }
    
                // Thêm biến thể mới
                if (isset($_POST['new_variant_format'])) {
                    foreach ($_POST['new_variant_format'] as $key => $new_format) {
                        $new_language = $_POST['new_variant_language'][$key] ?? '';
                        $new_quantity = (int)($_POST['new_variant_quantity'][$key] ?? 0);
                        $new_price = (float)($_POST['new_variant_price'][$key] ?? 0);
                        $new_sale_price = !empty($_POST['new_variant_sale_price'][$key]) 
                            ? (float)$_POST['new_variant_sale_price'][$key] 
                            : null;
    
                        // Kiểm tra biến thể trùng
                        $existing = $this->productAdminModel->getVariantByAttributes(
                            $book_id,
                            $new_format,
                            $new_language,
                            $new_price
                        );
    
                        if ($existing) {
                            $this->productAdminModel->updateVariantQuantity(
                                $existing['variant_id'],
                                $new_quantity
                            );
                        } else {
                            $this->productAdminModel->addBookVariant(
                                $book_id,
                                $new_format,
                                $new_language,
                                $new_quantity,
                                $new_price,
                                $new_sale_price
                            );
                        }
                    }
                }
    
                header('Location: index.php?action=list-book');
                exit();
            }
        }
    
        require_once './views/admin/book/edit-book.php';
    }
    
}
