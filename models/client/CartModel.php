<?php
class CartModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }
    // Kiểm tra xem user đã có giỏ hàng chưa
    public function getCartByUser($userId) {
        $stmt = $this->conn->prepare("SELECT * FROM cart WHERE user_id = ?");
        $stmt->execute([$userId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Tạo giỏ hàng mới cho user nếu chưa có
    public function createCart($userId) {
        $stmt = $this->conn->prepare("INSERT INTO cart (user_id) VALUES (?)");
        $stmt->execute([$userId]);
        return $this->conn->lastInsertId();
    }

    // Lưu sản phẩm vào giỏ hàng
    public function addToCart($cartId, $bookVariantId, $quantity) {
        $stmt = $this->conn->prepare("INSERT INTO cart_items (cart_id, book_variant_id, quantity) 
                                      VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity)");
        return $stmt->execute([$cartId, $bookVariantId, $quantity]);
    }

    // Lấy danh sách sản phẩm trong giỏ hàng
    public function getCartItems($cartId) {
        $stmt = $this->conn->prepare("SELECT ci.*, bv.price, b.title 
                                      FROM cart_items ci
                                      JOIN book_variants bv ON ci.book_variant_id = bv.book_variant_id
                                      JOIN books b ON bv.book_id = b.book_id
                                      WHERE ci.cart_id = ?");
        $stmt->execute([$cartId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function removeFromCart($cartItemId) {
        $stmt = $this->conn->prepare("DELETE FROM cart_items WHERE cart_item_id = ?");
        return $stmt->execute([$cartItemId]);
    }

    // Cập nhật số lượng sản phẩm
    public function updateCartItem($cartItemId, $quantity) {
        $stmt = $this->conn->prepare("UPDATE cart_items SET quantity = ? WHERE cart_item_id = ?");
        return $stmt->execute([$quantity, $cartItemId]);
    }

    // Xóa toàn bộ giỏ hàng
    public function clearCart($cartId) {
        $stmt = $this->conn->prepare("DELETE FROM cart_items WHERE cart_id = ?");
        return $stmt->execute([$cartId]);
    }
}
?>
