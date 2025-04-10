<?php
require_once "./models/client/CartModel.php"; // Kết nối DB
require_once "./commons/function.php"; // Kết nối DB

class CartController
{
    private $cartModel;

    public function __construct()
    {
        global $pdo; // Kết nối database
        $this->cartModel = new CartModel($pdo);
    }

    public function index()
    {
        include "./views/client/cart.php";
    }

    // Hiển thị giỏ hàng
    public function viewCart()
    {
        if (isset($_SESSION['user_id'])) {
            // Lấy giỏ hàng từ database
            $cart = $this->cartModel->getCartByUser($_SESSION['user_id']);
            if ($cart) {
                $cartItems = $this->cartModel->getCartItems($cart['cart_id']);
            } else {
                $cartItems = [];
            }
        } else {
            // Lấy giỏ hàng từ session
            $cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
        }

        include "./views/client/cart.php";  // Truyền biến $cartItems vào view
    }

    // Thêm vào giỏ hàng
    public function addToCart()
    {
        $bookVariantId = $_POST['book_variant_id'];
        $quantity = $_POST['quantity'];

        if (isset($_SESSION['user_id'])) {
            // Lấy giỏ hàng từ database hoặc tạo mới
            $cart = $this->cartModel->getCartByUser($_SESSION['user_id']);
            $cartId = $cart ? $cart['cart_id'] : $this->cartModel->createCart($_SESSION['user_id']);
            
            // Thêm sản phẩm vào giỏ hàng trong DB
            $this->cartModel->addToCart($cartId, $bookVariantId, $quantity);
        } else {
            // Thêm sản phẩm vào giỏ hàng trong session
            if (isset($_SESSION['cart'][$bookVariantId])) {
                $_SESSION['cart'][$bookVariantId]['quantity'] += $quantity;
            } else {
                $_SESSION['cart'][$bookVariantId] = [
                    'book_variant_id' => $bookVariantId,
                    'quantity' => $quantity
                ];
            }
        }

        header("Location: /index.php?act=cart");
    }

    // Đồng bộ giỏ hàng từ session vào DB khi người dùng đăng nhập
    public function syncSessionCartToDatabase($userId)
    {
        if (!isset($_SESSION['cart'])) return;

        $cart = $this->cartModel->getCartByUser($userId);
        $cartId = $cart ? $cart['cart_id'] : $this->cartModel->createCart($userId);

        foreach ($_SESSION['cart'] as $item) {
            $this->cartModel->addToCart($cartId, $item['book_variant_id'], $item['quantity']);
        }

        unset($_SESSION['cart']); // Xóa cart trong session sau khi chuyển
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function removeFromCart()
    {
        $cartItemId = $_GET['id'];

        if (isset($_SESSION['user_id'])) {
            $this->cartModel->removeFromCart($cartItemId);
        } else {
            unset($_SESSION['cart'][$cartItemId]); // Key chính là book_variant_id
        }

        header("Location: /cart");
    }

    // Cập nhật số lượng sản phẩm trong giỏ hàng
    public function updateCartItem()
    {
        $cartItemId = $_POST['cart_item_id'];
        $quantity = $_POST['quantity'];

        if (isset($_SESSION['user_id'])) {
            $this->cartModel->updateCartItem($cartItemId, $quantity);
        } else {
            $_SESSION['cart'][$cartItemId]['quantity'] = $quantity;
        }

        header("Location: /cart");
    }
}
