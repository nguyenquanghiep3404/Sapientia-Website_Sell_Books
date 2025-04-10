<?php include('./views/client/layout/header.php'); ?>

<style>
    .order-details-container {
        width: 95%;
        margin: 40px auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
        vertical-align: middle;
    }

    th {
        background-color: #f8f9fa;
    }

    .text-center {
        text-align: center;
    }

    .product-img {
        width: 60px;
        height: auto;
        object-fit: cover;
        border-radius: 4px;
    }

    .total-row {
        text-align: right;
        font-size: 20px;
        margin-top: 20px;
        font-weight: bold;
    }

    .back-link {
        margin-top: 20px;
        font-size: 16px;
    }
</style>

<div class="order-details-container">
    <h2 class="text-center mb-4">Chi tiết đơn hàng</h2>

    <?php if (empty($orderDetails)): ?>
        <p class="text-center">Không tìm thấy chi tiết đơn hàng.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $totalAmount = 0;
                foreach ($orderDetails as $detail):
                    $itemTotal = $detail['product_price'] * $detail['quantity'];
                    $totalAmount += $itemTotal;
                ?>
                    <tr>
                        <td><?= htmlspecialchars($detail['product_name']) ?></td>
                        <td><img src="<?= htmlspecialchars($detail['product_image']) ?>" alt="Ảnh sản phẩm" class="product-img"></td>
                        <td><?= number_format($detail['product_price'], 0, ',', '.') ?> VND</td>
                        <td><?= $detail['quantity'] ?></td>
                        <td><?= number_format($itemTotal, 0, ',', '.') ?> VND</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="total-row text-end mt-4">
            Tổng cộng: <span class="text-danger"><?= number_format($totalAmount, 0, ',', '.') ?> VND</span>
        </div>
    <?php endif; ?>

    <div class="back-link text-start mt-3">
        <a href="?action=historic" class="btn btn-secondary">← Quay lại lịch sử đơn hàng</a>
    </div>
</div>

<?php include './views/client/layout/miniCart.php'; ?>
<?php include('./views/client/layout/footer.php'); ?>
