<?php include('./views/client/layout/header.php'); ?>

<style>
    :root {
        --primary-color: #C82333;
        --secondary-color: #FF6B6B;
        --hover-color: #A71D2A;
        --background-color: #fff5f5;
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
    }

    .order-table table {
        width: 100%;
        border-collapse: collapse;
    }

    .order-table thead {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
    }

    .order-table th, .order-table td {
        padding: 1.2rem;
        border-bottom: 1px solid #ffe6e6;
        vertical-align: middle;
        text-align: center;
    }

    .order-table tbody tr:hover {
        background-color: #fff0f0;
    }

    .btn-detail, .btn-cancel {
        background: var(--primary-color);
        color: white;
        padding: 0.5rem 1.2rem;
        border-radius: 25px;
        border: none;
        font-weight: 500;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .btn-detail:hover, .btn-cancel:hover {
        background: var(--hover-color);
    }

    .total-amount {
        color: var(--primary-color);
        font-weight: 700;
        font-size: 1.1rem;
    }

    .status-warning { color: #ffc107; font-weight: bold; }
    .status-danger { color: #dc3545; font-weight: bold; }
    .status-primary { color: #007bff; font-weight: bold; }
    .status-info { color: #17a2b8; font-weight: bold; }
    .status-success { color: #28a745; font-weight: bold; }
    .status-unknown { color: #6c757d; font-weight: bold; }
</style>

<?php 
if (isset($_GET['cancel']) && $_GET['cancel'] == 'success') {
    echo "<script>alert('Huỷ đơn hàng thành công!');</script>";
}

$groupedOrders = [];
foreach ($orderHistory as $order) {
    $groupedOrders[$order['order_detail_id']][] = $order;
}

$statusMap = [
    0 => ['label' => 'Chờ xác nhận', 'class' => 'status-warning'],
    1 => ['label' => 'Đã huỷ', 'class' => 'status-danger'],
    2 => ['label' => 'Đã xác nhận', 'class' => 'status-primary'],
    3 => ['label' => 'Đang vận chuyển', 'class' => 'status-info'],
    4 => ['label' => 'Hoàn thành', 'class' => 'status-success']
];
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
                    <th>Trạng Thái</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($groupedOrders as $orderDetailId => $orders): ?>
                    <?php
                    $firstOrder = $orders[0];
                    $totalAmount = array_reduce($orders, fn($carry, $order) => $carry + (float)$order['total'], 0);
                    $status = $firstOrder['status'] ?? -1;
                    $statusInfo = $statusMap[$status] ?? ['label' => 'Không rõ', 'class' => 'status-unknown'];
                    ?>
                    <tr>
                        <td>#<?= htmlspecialchars($orderDetailId) ?></td>
                        <td><?= htmlspecialchars($firstOrder['name']) ?></td>
                        <td><?= htmlspecialchars($firstOrder['phone']) ?></td>
                        <td><?= htmlspecialchars($firstOrder['address']) ?></td>
                        <td><?= date('d/m/Y', strtotime($firstOrder['created_at'])) ?></td>
                        <td class="total-amount"><?= number_format($totalAmount, 0, ',', '.') ?>₫</td>
                        <td class="<?= $statusInfo['class'] ?>"><?= $statusInfo['label'] ?></td>
                        <td>
                            <a href="?action=viewOrderDetails&order_id=<?= $firstOrder['order_detail_id'] ?>" class="btn-detail">
                                <i class="fas fa-eye"></i> Chi Tiết
                            </a>
                            <?php if ($status === 0): ?>
                                <form method="POST" action="index.php?action=cancelOrder" style="display:inline;" onsubmit="return confirm('Bạn có chắc muốn huỷ đơn này không?');">
                                    <input type="hidden" name="order_detail_id" value="<?= $firstOrder['order_detail_id'] ?>">
                                    <button type="submit" class="btn-cancel" style="margin-left: 10px;">Huỷ đơn</button>
                                </form>
                            <?php elseif ($status === 1): ?>
                                <div class="text-muted mt-2">Đã huỷ</div>
                            <?php else: ?>
                                <div class="text-muted mt-2">Không thể huỷ</div>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<?php include './views/client/layout/miniCart.php'; ?>
<?php include('./views/client/layout/footer.php'); ?>
