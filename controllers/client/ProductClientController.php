<?php
require_once './models/client/ProductClientModel.php';
class ProductClientController
{
    public $productClientModel;
    public function __construct()
    {
        $this->productClientModel = new ProductClientModel();
    }
    public function showAll()
    {
        require_once './views/client/client-board.php';
    }
    public function showClientBook()
    {
        // Gọi hàm mới để lấy dữ liệu sách kèm biến thể
        $listBookWithVariants = $this->productClientModel->getAllBookWithVariants();
        // Truyển dữ liệu sang trang chủ client
        include './views/client/client-board.php';
        
    }
    public function showDetailBook()
    {
        // Gọi hàm mới để lấy dữ liệu sách kèm biến thể
        // $listBookWithVariant = $this->productClientModel->getAllBookWithVariants();
        // Truyển dữ liệu sang trang chủ client
        require_once './views/client/detail.php';
        
    }
    // ... các phần trước giữ nguyên ...

    public function showDetailBooks()
    {
        try {
            // Validate book ID
            $bookId = $this->validateBookId($_GET['id'] ?? 0);

            // Lấy thông tin chi tiết sách
            $bookDetails = $this->productClientModel->getBookDetails($bookId);

            // Kiểm tra sách tồn tại
            if (!$bookDetails) {
                $this->showNotFound();
                return;
            }

            // Lấy các biến thể của sách
            $variants = $this->productClientModel->getBookVariants($bookId);

            // Lấy sách liên quan
            // $relatedBooks = $this->productClientModel->getRelatedBooks(
            //     $bookDetails['category_id'], 
            //     4, 
            //     $bookId
            // );

            // Truyền dữ liệu sang view
            require_once './views/client/detail.php';

        } catch (Exception $e) {
            // Xử lý lỗi
            error_log('Error in showDetailBook: ' . $e->getMessage());
            $this->showErrorPage();
        }
    }

    private function validateBookId($id)
    {
        $bookId = filter_var($id, FILTER_VALIDATE_INT, [
            'options' => [
                'min_range' => 1
            ]
        ]);

        if (!$bookId) {
            throw new Exception('ID sách không hợp lệ');
        }

        return $bookId;
    }

    private function showNotFound()
    {
        http_response_code(404);
        require_once './views/errors/404.php';
        exit;
    }

    private function showErrorPage()
    {
        http_response_code(500);
        require_once './views/errors/500.php';
        exit;
    }
}