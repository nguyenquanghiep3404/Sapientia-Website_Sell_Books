<?php

require_once './commons/function.php';
require_once './commons/env.php';
class ProductClientModel {
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }
    public function getAllBookWithVariants()
    {
        try {
            // Viết lại câu SQL một cách rõ ràng, không comment inline
            $sql = "SELECT
                        b.book_id,
                        b.book_title,
                        b.book_image,
                        b.status,
                        b.updated_at,
                        c.category_name,
                        bv.book_variant_id AS variant_id,
                        bv.format,
                        bv.language,
                        bv.book_price AS variant_price,
                        bv.book_sale_price AS variant_sale_price,
                        bv.quantity AS variant_quantity
                    FROM
                        books b
                    INNER JOIN
                        categories c ON b.category_id = c.category_id
                    LEFT JOIN
                        book_variants bv ON b.book_id = bv.book_id
                    ORDER BY
                        b.book_id, bv.book_variant_id";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            // Log lỗi chi tiết hơn
            error_log("SQL Error in getAllBookWithVariants: " . $e->getMessage() . "\nSQL Query: " . $sql); // Ghi cả câu SQL gây lỗi vào log
            echo "<h1>Đã xảy ra lỗi khi truy vấn dữ liệu sách. Vui lòng thử lại sau.</h1>";
            // Hoặc có thể hiển thị $e->getMessage() nếu đang ở môi trường development để debug
            // echo "DEBUG: " . $e->getMessage();
            return [];
        }
    }
    public function getBookDetails($bookId)
{
    try {
        $sql = "SELECT 
                    b.*,
                    c.category_name,
                    GROUP_CONCAT(DISTINCT bv.format) as formats,
                    GROUP_CONCAT(DISTINCT bv.language) as languages,
                    MIN(bv.book_sale_price) as min_sale_price,
                    MAX(bv.book_price) as max_price
                FROM books b
                LEFT JOIN book_variants bv ON b.book_id = bv.book_id
                INNER JOIN categories c ON b.category_id = c.category_id
                WHERE b.book_id = :book_id
                GROUP BY b.book_id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':book_id', $bookId, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (Exception $e) {
        error_log("Error getting book details: " . $e->getMessage());
        return false;
    }
}

    public function getBookVariants($bookId)
    {
        try {
            $sql = "SELECT 
                        book_variant_id,
                        format,
                        language,
                        book_price,
                        book_sale_price,
                        quantity
                    FROM book_variants
                    WHERE book_id = :book_id
                    ORDER BY book_variant_id ASC";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':book_id', $bookId, PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (Exception $e) {
            error_log("Error getting book variants: " . $e->getMessage());
            return [];
        }
    }
}