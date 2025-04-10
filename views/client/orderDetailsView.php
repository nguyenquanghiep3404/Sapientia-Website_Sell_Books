<?php include ('./views/client/layout/header.php') 
?>
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
<div>
    <h2 class="text-center mt-4 mb-4">Chi tiết đơn hàng</h2>

    <?php if (empty($orderDetails)): ?>
        <p>Không tìm thấy chi tiết đơn hàng.</p>
    <?php else: ?>
        <table class="mt-3" style="margin-left:25px;margin-right:15px;">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tổng giá sản phẩm</th>
                </tr>
            </thead>
            <!-- <?php var_dump($orderDetails) ?> -->
            <tbody>
                <?php foreach ($orderDetails as $detail): ?>
                    <tr>
                        <td><?= ($detail['product_name']) ?></td>
                        <th> <img src="<?= ($detail['product_image']) ?>" alt="" width="50px"></th>
                        <td><?= number_format($detail['product_price'], 0, ',', '.') ?> VND</td>
                        <td><?= ($detail['quantity']) ?></td>
                        <td><?= number_format($detail['order_total'], 0, ',', '.') ?> VND</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <div class="text-right " style="margin-right: 70px; margin-top:17px; font-size:20px"> <?php $totalAmount = 0;
        foreach ($orderDetails as $order) {
            $totalAmount += (float)$order['order_total'];
        }
        ?> 
        <td colspan="4" style="text-align: right;"><strong style="font-size:25px">Tổng cộng:</strong></td>
        <td><strong class="text-danger"><?= number_format($totalAmount, 0, ',', '.') ?> VND</strong></td>
    </div>
    <div class="text-primary" style="padding-top:10px;margin-left:25px;margin-right:15px;">
    <a  href="?action=historic">Quay lại lịch sử đơn hàng</a>
    </div>
</div>

    <?php include './views/client/layout/miniCart.php' ?>
    <?php include ('./views/client/layout/footer.php'); ?>