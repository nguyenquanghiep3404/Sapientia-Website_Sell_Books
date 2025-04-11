<?php include ('./views/client/layout/header.php') ?>
<style>
        :root {
            --primary-color: #C82333;  /* Màu đỏ chính */
            --secondary-color: #FF6B6B; /* Màu đỏ phụ */
            --hover-color: #A71D2A;    /* Màu hover đỏ đậm */
            --background-color: #fff5f5; /* Nền hồng nhạt */
        }

        .order-history {
            padding: 2rem;
            background: var(--background-color);
            min-height: 100vh;
        }

        .title-section {
            text-align: center;
            margin-bottom: 2.5rem;
            position: relative;
            padding-bottom: 1rem;
        }

        .title-section h2 {
            font-size: 2.5rem;
            color: var(--primary-color);
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(200, 35, 51, 0.1);
        }

        .title-section::after {
            content: '';
            display: block;
            width: 150px;
            height: 3px;
            background: var(--primary-color);
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .order-table {
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(200, 35, 51, 0.1);
            overflow: hidden;
            margin: 0 auto;
            width: 98%;
            border: 1px solid var(--primary-color);
        }

        .order-table table {
            width: 100%;
            border-collapse: collapse;
            margin: 0;
        }

        .order-table thead {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
        }

        .order-table th {
            padding: 1.2rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            border: none;
        }

        .order-table td {
            padding: 1.2rem;
            border-bottom: 1px solid #ffe6e6;
            vertical-align: middle;
        }

        .order-table tbody tr {
            transition: all 0.3s ease;
        }

        .order-table tbody tr:hover {
            background-color: #fff0f0;
            transform: translateX(5px);
        }

        .btn-detail {
            background: var(--primary-color);
            color: white !important;
            padding: 0.5rem 1.2rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
        }

        .btn-detail:hover {
            background: var(--hover-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(200, 35, 51, 0.2);
        }

        .total-amount {
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .order-table td::before {
                color: var(--primary-color);
            }
            
            .order-table tr {
                border: 2px solid var(--primary-color);
            }
        }
    </style>

    <?php 
    $groupedOrders = [];
    foreach ($orderHistory as $order) {
        $groupedOrders[$order['order_detail_id']][] = $order;
    }  
    ?>
    
    <div class="order-history">
        <div class="title-section">
            <h2><i class="fas fa-history me-2"></i>Lịch Sử Đơn Hàng</h2>
        </div>

        <div class="order-table">
            <table>
                <thead>
                    <tr>
                        <th>Mã ĐH</th>
                        <th>Người Nhận</th>
                        <th>Điện Thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Ngày Đặt</th>
                        <th>Tổng Tiền</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($groupedOrders as $orderDetailId => $orders): ?>
                        <?php 
                        $firstOrder = $orders[0];
                        $totalAmount = 0;
                        foreach ($orders as $order) {
                            $totalAmount += (float)$order['total'];
                        }
                        ?>
                        <tr>
                            <td data-label="Mã ĐH">#<?= $orderDetailId ?></td>
                            <td data-label="Người Nhận"><?= $firstOrder['name'] ?></td>
                            <td data-label="Điện Thoại"><?= $firstOrder['phone'] ?></td>
                            <td data-label="Địa Chỉ"><?= substr($firstOrder['address'], 0, 15) ?>...</td>
                            <td data-label="Ngày Đặt"><?= date('d/m/Y', strtotime($firstOrder['created_at'])) ?></td>
                            <td data-label="Tổng Tiền" class="total-amount"><?= number_format($totalAmount, 0, ',', '.') ?>₫</td>
                            <td data-label="Thao Tác">
                                <a href="?action=viewOrderDetails&order_id=<?= $firstOrder['order_detail_id'] ?>" 
                                   class="btn-detail">
                                   <i class="fas fa-eye"></i>
                                   Chi Tiết
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php include './views/client/layout/miniCart.php' ?>
    <?php include ('./views/client/layout/footer.php'); ?>