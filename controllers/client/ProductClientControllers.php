<?php 
require_once './models/ProductQuery.php';
require_once './commons/function.php';

class HomeClientControllers {

    public $productQuery;
    public $categoryQuery;
    public $cartModels;
    public $loginModel;
    public $commentModel;
    public function __construct() {
        $this->productQuery = new ProductQuery();
        $this->loginModel = new LoginModel();
        $this->commentModel = new commentModel();
    }

    // trang sản phẩm hiện thị view trang chủ
    public function home(){
        $listCategories = $this->productQuery->getAllCategories();
        $listProductLastes = $this->productQuery->getTop4ProductLastes();
        $kinhte = $this->productQuery->get_products_by_category_kinhte(25);
        $aolen = $this->productQuery->get_products_by_category_thieunhi(28);
        // var_dump($aophao) ;
        require_once './views/client/dashboardClient.php';
    }
    public function productDetails()
    {
        $product_id = $_GET['product_id'];
        $listCategories = $this->productQuery->getAllCategories();
        $product = $this->productQuery->getDetailSan($product_id);
        $variant = $this->productQuery->getProductByVariant($product_id);
        $allComment = $this->commentModel->allComment($product_id);
        include "./views/client/product-details.php";
        
    }
    // public function miniProduct(){
    //     $product_id = $_GET['product_id'];
    //     $product = $this->productQuery->getDetailSan($product_id);
    //     $variant = $this->productQuery->get_product_by_variant($product_id);
    //     include './views/client/layout/modalPoduct.php';
    // }
    public function categoryProductClient(){
        
        $listCategories = $this->productQuery->getAllCategories();
        
        if (isset($_GET['id'])) {
            $category_id = $_GET['id'];
            $products = $this->productQuery->getProductsByCategory($category_id);
        } else {
            $products = $this->productQuery->getAllProductCate();
        }
        include './views/client/categoryProductClient.php';
    }
    // 
    public function addToCart(){
        // yêu cầu người dùng đăng nhập thì mới đặt được hàng
        // if (!isset($_SESSION['name'])) {
        //     echo "<script>alert('Vui lòng đăng nhập để đặt hàng.');</script>";
        //     header('location:?action=login'); // Chuyển hướng đến trang đăng nhập
        //     exit();
        // }
        // Xóa toàn bộ giỏ hàng nếu được yêu cầu
        if (isset($_GET['emptyCart']) && ($_GET['emptyCart']) == 1) {
            unset($_SESSION['myCart']);
            header('Location: ?action=addToCart');
            exit();
        }
         // Loại bỏ các sản phẩm bị ẩn khỏi giỏ hàng
        if (isset($_SESSION['myCart']) && is_array($_SESSION['myCart'])) {
            foreach ($_SESSION['myCart'] as $key => $value) {
                $product = $this->productQuery->find($value['product_id']);
                if (!$product || $product->status == 0) {
                    unset($_SESSION['myCart'][$key]); // Xóa sản phẩm khỏi giỏ hàng
                }
            }
            // Reset lại các chỉ số của mảng
            $_SESSION['myCart'] = array_values($_SESSION['myCart']);
        }
        
        // Xử lý khi người dùng thêm sản phẩm vào giỏ hàng
        if (isset($_POST['add_to_cart']) && $_POST['product_id'] > 0 ) {
            $variant_id = (int)$_POST['variant_id'];
            $product_id = (int)$_POST['product_id']; // Lấy cả product_id gốc
            $quantity = isset($_POST['quantity']) && (int)$_POST['quantity'] > 0 ? (int)$_POST['quantity'] : 1;

            // Tìm thông tin biến thể chi tiết từ database bằng hàm findvariant
            $variant = $this->productQuery->findvariant($variant_id);
            // Tìm thông tin sản phẩm gốc bằng hàm find
            $product = $this->productQuery->find($product_id);

            if (!$variant || !$product) {
                // Nếu không tìm thấy biến thể hoặc sản phẩm gốc
                 echo "<script>alert('Lỗi: Sản phẩm hoặc biến thể không tồn tại.'); </script>";
                 die();
                
            }

             // Kiểm tra trạng thái sản phẩm gốc (Giả định đối tượng $product có thuộc tính 'status')
             if (!isset($product->status) || $product->status == 0) {
                // Nếu sản phẩm gốc bị ẩn
                 echo "<script>alert('Xin lỗi, sản phẩm này hiện không còn kinh doanh.'); window.history.back();</script>";
                exit();
            }

             // Kiểm tra số lượng tồn kho của biến thể (Giả định đối tượng $variant có thuộc tính 'quantity')
             if (!isset($variant->quantity) || $variant->quantity < $quantity) {
                 $available_qty = $variant->quantity ?? 0; // Lấy số lượng hiện có hoặc 0 nếu không có
                 echo "<script>alert('Số lượng tồn kho không đủ cho biến thể \"".htmlspecialchars($variant->format ?? 'N/A')."\". Chỉ còn ". $available_qty ." sản phẩm.'); window.history.back();</script>";
                 exit();
             }


            // Khởi tạo giỏ hàng nếu chưa tồn tại
            if (!isset($_SESSION['myCart']) || !is_array($_SESSION['myCart'])) {
                $_SESSION['myCart'] = [];
            }

            // Xác định giá cuối cùng (ưu tiên giá khuyến mãi)
            // Giả định đối tượng $variant có thuộc tính 'sale_price' và 'price'
            $final_price = $variant->sale_price ?? $variant->price ?? 0; // Thêm ?? 0 phòng trường hợp cả 2 đều null

            // Kiểm tra biến thể đã tồn tại trong giỏ hàng chưa
            $item_exists_key = false;
            foreach ($_SESSION['myCart'] as $key => $item) {
                // Kiểm tra dựa trên variant_id
                if ($item['variant_id'] == $variant_id) {
                    $item_exists_key = $key;
                    break;
                }
            }

            // Nếu biến thể đã tồn tại, cập nhật số lượng
            if ($item_exists_key !== false) {
                 // Kiểm tra tổng số lượng mới có vượt quá tồn kho không
                 $new_quantity = $_SESSION['myCart'][$item_exists_key]['quantity'] + $quantity;
                 if ($new_quantity > $variant->quantity) {
                      echo "<script>alert('Không thể thêm số lượng này. Tổng số lượng trong giỏ (". $new_quantity .") vượt quá số lượng tồn kho (". $variant->quantity .") cho biến thể \"".htmlspecialchars($variant->format ?? 'N/A')."\".'); window.history.back();</script>";
                      exit();
                 }

                $_SESSION['myCart'][$item_exists_key]['quantity'] = $new_quantity;
            }
            // Nếu biến thể chưa tồn tại, thêm mới vào giỏ hàng
            else {
                // Giả định $product có 'image', 'name' và $variant có 'variant_id', 'format'
                $cart_item = [
                    "variant_id" => $variant->variant_id ?? $variant_id, // Lấy từ object hoặc fallback về id post lên
                    "product_id" => $product->product_id ?? $product_id, // Lấy từ object hoặc fallback về id post lên
                    "image" => $product->image ?? '',         // Ảnh đại diện sản phẩm gốc
                    "name" => $product->name ?? 'Sản phẩm không tên', // Tên sản phẩm gốc
                    "format" => $variant->format ?? 'Mặc định',  
                        // Tên định dạng/biến thể
                    "price" => $final_price,   
                    "total" => $final_price * $quantity,           // Giá cuối cùng của biến thể
                    "quantity" => $quantity,
                ];
                $_SESSION['myCart'][] = $cart_item; // Thêm vào cuối mảng
            }

             // Sau khi thêm/cập nhật thành công, chuyển hướng đến trang giỏ hàng
             header('Location: ?action=addToCart');
             exit();
        }
        include './views/client/cart.php';
    }
    public function updateCartQuantity()
    {
        if (isset($_POST['index']) && isset($_POST['quantity'])) {
            $index = (int)$_POST['index'];
            $quantity = (int)$_POST['quantity'];

            // Kiểm tra nếu giỏ hàng và sản phẩm tồn tại
            if (isset($_SESSION['myCart'][$index])) {
                $_SESSION['myCart'][$index]['quantity'] = $quantity;
                $_SESSION['myCart'][$index]['total'] = $_SESSION['myCart'][$index]['price'] * $quantity;

                // Tính tổng giỏ hàng
                $cartTotal = array_reduce($_SESSION['myCart'], function ($total, $item) {
                    return $total + $item['total'];
                }, 0);

                // Trả về dữ liệu cập nhật
                echo json_encode([
                    'status' => 'success',
                    'productTotal' => $_SESSION['myCart'][$index]['total'],
                    'cartTotal' => $cartTotal
                ]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Sản phẩm không tồn tại']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Dữ liệu không hợp lệ']);
        }
    }
    public function removeCartItem()
    {
        if (isset($_POST['index'])) {
            $index = (int)$_POST['index'];

            // Kiểm tra nếu sản phẩm tồn tại trong giỏ hàng
            if (isset($_SESSION['myCart'][$index])) {
                unset($_SESSION['myCart'][$index]);
                $_SESSION['myCart'] = array_values($_SESSION['myCart']); // Sắp xếp lại chỉ số mảng

                // Tính tổng giỏ hàng
                $cartTotal = array_reduce($_SESSION['myCart'], function ($total, $item) {
                    return $total + $item['total'];
                }, 0);

                // Trả về dữ liệu cập nhật
                echo json_encode(['status' => 'success', 'cartTotal' => $cartTotal]);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Sản phẩm không tồn tại']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Dữ liệu không hợp lệ']);
        }
    }
    public function search() {
        $results = [];
        if (isset($_POST['kyw']) && !empty($_POST['kyw'])) {
            $keyword = trim($_POST['kyw']);
            $results = $this->productQuery->searchProducts($keyword);
        }

        // Trả dữ liệu về view
        require './views/client/searchResults.php';
    }


}



?> 