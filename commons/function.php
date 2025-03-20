<?php
function connect_db() {
    try {
        $dsn = 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=utf8';
        $conn = new PDO($dsn, DB_USERNAME, DB_PASSWORD);

        // Cài đặt chế độ xử lý lỗi của PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Cài đặt chế độ trả về dữ liệu dạng mảng kết hợp
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conn;
    } catch (PDOException $e) {
        die('Lỗi kết nối CSDL: ' . $e->getMessage());
    }
}