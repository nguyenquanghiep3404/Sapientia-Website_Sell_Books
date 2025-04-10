<?php include('./views/client/layout/header.php'); ?>

<style>
    table {
        width: 95%;
        border-collapse: collapse;
        margin: 0 auto;
    }

    table,
    th,
    td {
        border: 1px solid #ddd;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f8f9fa;
    }

    .text-center {
        text-align: center;
    }

    .btn-sm {
        padding: 5px 10px;
        font-size: 0.875rem;
    }

    .status-warning {
        color: #ffc107;
        font-weight: bold;
    }

    .status-danger {
        color: #dc3545;
        font-weight: bold;
    }

    .status-primary {
        color: #007bff;
        font-weight: bold;
    }

    .status-info {
        color: #17a2b8;
        font-weight: bold;
    }

    .status-success {
        color: #28a745;
        font-weight: bold;
    }

    .status-unknown {
        color: #6c757d;
        font-weight: bold;
    }
</style>

<?php
if (isset($_GET['cancel']) && $_GET['cancel'] == 'success') {
    echo "<script>alert('Huỷ đơn hàng thành công!');</script>";
}
?>

<?php
$groupedOrders = [];
foreach ($orderHistory as $order) {
    $groupedOrders[$order['order_detail_id']][] = $order;
}
?>

<div>
    <h2 class="text-center mt-4 mb-4">Lịch sử đơn hàng</h2>
    <table class="mt-3">
        <thead>
            <tr>
                <th>ID Đơn hàng</th>
                <th>Tên người nhận</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ghi chú</th>
                <th>Ngày đặt</th>
                <th>Tổng tiền</th>
                <th>Chi tiết</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
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

                $statusMap = [
                    0 => ['label' => 'Chờ xác nhận', 'class' => 'status-warning'],
                    1 => ['label' => 'Đã huỷ', 'class' => 'status-danger'],
                    2 => ['label' => 'Đã xác nhận', 'class' => 'status-primary'],
                    3 => ['label' => 'Đang vận chuyển', 'class' => 'status-info'],
                    4 => ['label' => 'Hoàn thành', 'class' => 'status-success']
                ];

                $status = $firstOrder['status'] ?? -1;
                $statusInfo = $statusMap[$status] ?? ['label' => 'Không rõ', 'class' => 'status-unknown'];
                ?>
                <tr>
                    <td><?= htmlspecialchars($orderDetailId) ?></td>
                    <td><?= htmlspecialchars($firstOrder['name']) ?></td>
                    <td><?= htmlspecialchars($firstOrder['email']) ?></td>
                    <td><?= htmlspecialchars($firstOrder['phone']) ?></td>
                    <td><?= htmlspecialchars($firstOrder['address']) ?></td>
                    <td><?= htmlspecialchars($firstOrder['note']) ?></td>
                    <td><?= date('d/m/Y H:i', strtotime($firstOrder['created_at'])) ?></td>
                    <td><?= number_format($totalAmount, 0, ',', '.') ?> VND</td>
                    <td>
                        <a href="?action=viewOrderDetails&order_id=<?= $firstOrder['order_detail_id'] ?>" class="btn btn-info btn-sm">
                            Xem chi tiết
                        </a>
                    </td>
                    <td class="<?= $statusInfo['class'] ?>">
                        <?= $statusInfo['label'] ?>
                    </td>
                    <td>
                        <?php if ($status === 0): ?>
                            <form method="POST" action="index.php?action=cancelOrder" onsubmit="return confirm('Bạn có chắc muốn huỷ đơn này không?');">
                                <input type="hidden" name="order_detail_id" value="<?= $firstOrder['order_detail_id'] ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Huỷ đơn</button>
                            </form>

                        <?php elseif ($status === 1): ?>
                            <span class="text-muted">Đã huỷ</span>
                        <?php else: ?>
                            <span class="text-muted">Không thể huỷ</span>
                        <?php endif; ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include './views/client/layout/miniCart.php'; ?>
<?php include('./views/client/layout/footer.php'); ?>