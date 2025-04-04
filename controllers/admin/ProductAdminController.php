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
    public function showAll()
    {
        require_once './views/client/client-board.php';
    }
    public function showListBook()
    {
        // Gọi hàm mới để lấy dữ liệu sách kèm biến thể
        $listBookWithVariants = $this->productAdminModel->getAllBookWithVariants();
        // Truyền dữ liệu đã lấy vào view
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
        $one = null; // Khởi tạo $one
        $listCategories = $this->productAdminModel->getAllCategory(); // Lấy danh sách categories

        if (isset($_GET['book_id'])) {
            $book_id = $_GET['book_id'];
            $one = $this->productAdminModel->getBookById($book_id); // Dùng hàm đã sửa
            if (!$one) {
                 // Xử lý trường hợp không tìm thấy sách (ví dụ: hiển thị lỗi, redirect)
                 echo "Không tìm thấy sách!";
                 // Hoặc: header('Location: index.php?action=list-book&error=not_found'); exit();
                 return; // Dừng xử lý nếu không có sách
            }
             $existingGallery = isset($one['gallery']) ? json_decode($one['gallery'], true) : []; // Truy cập đúng key
        } else {
             // Xử lý trường hợp không có book_id (ví dụ: redirect về trang list)
             header('Location: index.php?action=list-book');
             exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['capnhat'])) {
            $book_title = $_POST['book_title'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];
            $release_date = $_POST['release_date'];

            // --- Xử lý Ảnh chính ---
            $book_image = $one['book_image']; // Giữ ảnh cũ mặc định
            if (isset($_FILES["book_image"]) && $_FILES["book_image"]["error"] == UPLOAD_ERR_OK) {
                // Có tải ảnh mới
                $target_dir = "./uploads/book_one/";
                 // Cân nhắc tạo tên file duy nhất để tránh ghi đè
                $imageFileType = strtolower(pathinfo($_FILES["book_image"]["name"], PATHINFO_EXTENSION));
                $unique_image_name = uniqid('book_', true) . '.' . $imageFileType;
                $target_file = $target_dir . $unique_image_name;

                // Kiểm tra thư mục tồn tại, nếu chưa thì tạo
                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }

                if (move_uploaded_file($_FILES["book_image"]["tmp_name"], $target_file)) {
                     // Xóa ảnh cũ nếu upload thành công và ảnh cũ tồn tại
                    if (!empty($book_image) && file_exists($book_image) && $book_image !== $target_file) {
                         @unlink($book_image); // Dùng @ để bỏ qua lỗi nếu không xóa được
                    }
                    $book_image = $target_file; // Cập nhật đường dẫn ảnh mới
                } else {
                    $message = "Lỗi khi tải lên ảnh chính.";
                    // Có thể muốn dừng lại ở đây hoặc báo lỗi cụ thể hơn
                }
            }

             // --- Xử lý Gallery ---
            $gallery = isset($_POST['existing_gallery']) ? $_POST['existing_gallery'] : []; // Lấy gallery hiện có
             if (!empty($_FILES["gallery"]["name"][0])) { // Kiểm tra xem có file mới được upload không
                $target_dir_gallery = "./uploads/book_gallery/";

                 // Kiểm tra thư mục gallery tồn tại
                 if (!file_exists($target_dir_gallery)) {
                     mkdir($target_dir_gallery, 0777, true);
                 }

                 foreach ($_FILES["gallery"]["tmp_name"] as $key => $tmp_name) {
                     if ($_FILES["gallery"]["error"][$key] == UPLOAD_ERR_OK) {
                         // Tạo tên file duy nhất cho gallery
                         $galleryFileType = strtolower(pathinfo($_FILES["gallery"]["name"][$key], PATHINFO_EXTENSION));
                         $unique_gallery_name = uniqid('gallery_', true) . '.' . $galleryFileType;
                         $gallery_target_file = $target_dir_gallery . $unique_gallery_name;

                         if (move_uploaded_file($tmp_name, $gallery_target_file)) {
                             $gallery[] = $gallery_target_file; // Thêm ảnh mới vào mảng
                         } else {
                              $message = "Lỗi khi tải lên ảnh gallery.";
                              // Cân nhắc xử lý lỗi chi tiết hơn
                         }
                     }
                 }
             }
            $gallery_json = json_encode(array_values($gallery)); // Encode lại toàn bộ gallery (cũ + mới)


            // --- Cập nhật thông tin sách ---
            if (empty($message)) {
                 // Kiểm tra xem có thay đổi ảnh hoặc gallery không để quyết định hàm update nào
                $image_changed = ($book_image !== $one['book_image']); // Ảnh chính thay đổi
                 $gallery_changed = ($gallery_json !== $one['gallery']); // Gallery thay đổi

                $update_success = false;
                 if ($image_changed || $gallery_changed) {
                     $update_success = $this->productAdminModel->updateBookWithImage(
                         $book_title, $description, $gallery_json, $book_image, $category_id, $release_date, $book_id
                     );
                 } else {
                     $update_success = $this->productAdminModel->updateBookWithoutImage(
                         $book_title, $description, $category_id, $release_date, $book_id
                     );
                 }


                 if ($update_success) {
                     // --- Cập nhật/Xóa biến thể hiện có ---
                     $variants_to_delete = []; // Mảng chứa ID biến thể cần xóa
                     if (isset($_POST['variant_id'])) {
                         $current_variant_ids = []; // Giữ ID các biến thể được gửi lên
                         foreach ($_POST['variant_id'] as $key => $variant_id) {
                             $current_variant_ids[] = $variant_id;
                             // ... (lấy format, language, quantity, price, sale_price như cũ)
                               $format = $_POST['variant_format'][$key] ?? '';
                               $language = $_POST['variant_language'][$key] ?? '';
                               $quantity = (int)($_POST['variant_quantity'][$key] ?? 0);
                               $price = (float)($_POST['variant_price'][$key] ?? 0);
                               $sale_price = !empty($_POST['variant_sale_price'][$key])
                                   ? (float)$_POST['variant_sale_price'][$key]
                                   : null;


                              // Thực hiện update cho biến thể này
                             $this->productAdminModel->updateBookVariant(
                                 $variant_id, $format, $language, $quantity, $price, $sale_price
                             );
                         }

                         // Xác định các biến thể cần xóa (có trong DB nhưng không có trong POST)
                         foreach ($one['variants'] as $existing_variant) {
                             if (!in_array($existing_variant['variant_id'], $current_variant_ids)) {
                                 $variants_to_delete[] = $existing_variant['variant_id'];
                             }
                         }
                     } else {
                          // Nếu không có variant_id nào được gửi, tức là xóa hết biến thể cũ
                         foreach ($one['variants'] as $existing_variant) {
                             $variants_to_delete[] = $existing_variant['variant_id'];
                         }
                     }

                    // Thực hiện xóa các biến thể đã đánh dấu
                     if (!empty($variants_to_delete)) {
                         $this->productAdminModel->deleteBookVariants($variants_to_delete); // *Cần thêm hàm này vào Model*
                     }


                     // --- Thêm biến thể mới ---
                      if (isset($_POST['new_variant_format'])) {
                         foreach ($_POST['new_variant_format'] as $key => $new_format) {
                             if (!empty($new_format)) { // Chỉ thêm nếu có format
                                // ... (lấy new_language, new_quantity, new_price, new_sale_price như cũ)
                               $new_language = $_POST['new_variant_language'][$key] ?? '';
                               $new_quantity = (int)($_POST['new_variant_quantity'][$key] ?? 0);
                               $new_price = (float)($_POST['new_variant_price'][$key] ?? 0);
                               $new_sale_price = !empty($_POST['new_variant_sale_price'][$key])
                                   ? (float)$_POST['new_variant_sale_price'][$key]
                                   : null;


                                // Kiểm tra trùng lặp trước khi thêm (tùy chọn, nhưng nên có)
                                // Có thể cần sửa hàm getVariantByAttributes hoặc tạo hàm mới
                                $existing = $this->productAdminModel->getVariantByAttributes(
                                    $book_id, $new_format, $new_language, $new_price // Kiểm tra có thể cần chính xác hơn
                                );

                                if ($existing) {
                                     // Cập nhật số lượng nếu muốn gộp
                                     // $this->productAdminModel->updateVariantQuantity($existing['variant_id'], $new_quantity);
                                     // Hoặc bỏ qua không thêm nếu đã có (logic hiện tại)
                                     echo "<p>Biến thể mới (Format: $new_format, Language: $new_language) đã tồn tại, bỏ qua.</p>";
                                } else {
                                    $this->productAdminModel->addBookVariant(
                                        $book_id, $new_format, $new_language, $new_quantity, $new_price, $new_sale_price
                                    );
                                }
                            }
                        }
                    }


                     // Chuyển hướng sau khi cập nhật thành công
                    header('Location: index.php?action=list-book&status=updated');
                    exit();

                 } else {
                     $message = "Cập nhật sách thất bại!";
                 }
            }
             // Nếu có lỗi upload hoặc cập nhật, cần nạp lại dữ liệu form
             // Lấy lại dữ liệu sách và biến thể sau khi có lỗi để hiển thị lại form
            $one = $this->productAdminModel->getBookById($book_id);
            $existingGallery = isset($one['gallery']) ? json_decode($one['gallery'], true) : [];

        } // Kết thúc xử lý POST

         // Luôn luôn require view ở cuối cùng
        require_once './views/admin/book/edit-book.php';
    }

     // ** BỔ SUNG HÀM XÓA SÁCH (CẦN XÓA BIẾN THỂ TRƯỚC) **
     public function deleteBook() {
         if (isset($_GET['book_id'])) {
             $book_id = $_GET['book_id'];

             // (Quan trọng) Bắt đầu transaction để đảm bảo xóa cả sách và biến thể hoặc không xóa gì cả
             $this->productAdminModel->conn->beginTransaction();

             try {
                 // 1. Xóa tất cả biến thể liên quan đến sách
                 $deleted_variants = $this->productAdminModel->deleteAllVariantsByBookId($book_id); // *Cần thêm hàm này*

                 // 2. Xóa sách chính
                 $deleted_book = $this->productAdminModel->deleteBookById($book_id); // *Cần thêm hàm này*

                 if ($deleted_book) {
                     // Commit transaction nếu thành công
                     $this->productAdminModel->conn->commit();
                     // (Tùy chọn) Xóa ảnh chính và ảnh gallery liên quan trên server
                     // Cần lấy thông tin sách trước khi xóa để biết đường dẫn file
                     header('Location: index.php?action=list-book&status=deleted');
                     exit();
                 } else {
                     // Rollback nếu xóa sách thất bại
                     $this->productAdminModel->conn->rollBack();
                     header('Location: index.php?action=list-book&error=delete_failed');
                     exit();
                 }

             } catch (Exception $e) {
                 // Rollback nếu có lỗi xảy ra
                 $this->productAdminModel->conn->rollBack();
                 error_log("Lỗi xóa sách: " . $e->getMessage()); // Ghi log lỗi
                 header('Location: index.php?action=list-book&error=delete_exception');
                 exit();
             }

         } else {
             header('Location: index.php?action=list-book');
             exit();
         }
     }

    
}
