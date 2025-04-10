<?php include ('./views/client/layout/header.php') ?>
    <style>
        table {
            width: 95%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
<?php $groupedOrders = [];
foreach ($orderHistory as $order) {
    $groupedOrders[$order['order_detail_id']][] = $order;
}  ?>
<div>
    <!-- <?php var_dump($groupedOrders) ?> -->
    <h2 class="text-center mt-4 mb-4">Lịch sử đơn hàng</h2>
    <table class="mt-3" style="margin-left:25px;margin-right:15px;">
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
            </tr>
        </thead>
        <tbody>
            
            <?php foreach ($groupedOrders as $orderDetailId => $orders): ?>
                <?php 
                $firstOrder = $orders[0]; // Lấy thông tin chung từ sản phẩm đầu tiên
                $totalAmount = 0; 
                foreach ($orders as $order) {
                    $totalAmount += (float)$order['total']; // Cộng dồn giá trị 'total'
                }
                ?>
                <tr>
                    <td><?= $orderDetailId ?></td>
                    <td><?= $firstOrder['name'] ?></td>
                    <td><?= $firstOrder['email'] ?></td>
                    <td><?= $firstOrder['phone'] ?></td>
                    <td><?= $firstOrder['address'] ?></td>
                    <td><?= $firstOrder['note'] ?></td>
                    <td><?= $firstOrder['created_at'] ?></td>
                    <td><?= number_format($totalAmount, 0, ',', '.') ?> VND</td>
                    <td>
                        <a href="?action=viewOrderDetails&order_id=<?=($firstOrder['order_detail_id']) ?>" 
                            class="btn btn-info btn-sm">
                            Xem chi tiết
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    <?php include './views/client/layout/miniCart.php' ?>
    <?php include ('./views/client/layout/footer.php'); ?>
