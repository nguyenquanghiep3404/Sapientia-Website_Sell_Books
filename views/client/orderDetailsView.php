<?php include ('./views/client/layout/header.php') ?>

<div class="container-fluid py-5" style="background-color: #fff5f5;">
    <div class="container">
        <h2 class="text-center mb-5">
            <span class="pb-2 border-bottom border-3 border-danger text-danger fw-bold">CHI TIẾT ĐƠN HÀNG</span>
        </h2>

        <?php if (empty($orderDetails)): ?>
            <div class="alert alert-warning text-center">Không tìm thấy chi tiết đơn hàng!</div>
        <?php else: ?>
            <div class="card shadow-lg border-danger">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped mb-0">
                            <thead class="bg-danger text-white">
                                <tr>
                                    <th scope="col" class="ps-4">Sản phẩm</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col" class="text-end pe-4">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orderDetails as $detail): ?>
                                    <tr class="align-middle">
                                        <td class="ps-4 fw-medium"><?= htmlspecialchars($detail['product_name']) ?></td>
                                        <td>
                                            <img src="<?= htmlspecialchars($detail['product_image']) ?>" 
                                                 class="img-thumbnail border-danger" 
                                                 style="width: 70px; height: 70px; object-fit: cover;" 
                                                 alt="<?= htmlspecialchars($detail['product_name']) ?>">
                                        </td>
                                        <td><?= number_format($detail['product_price'], 0, ',', '.') ?>₫</td>
                                        <td>
                                            <span class="badge bg-danger rounded-pill"><?= $detail['quantity'] ?></span>
                                        </td>
                                        <td class="text-end pe-4 fw-medium text-danger">
                                            <?= number_format($detail['order_total'], 0, ',', '.') ?>₫
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <a href="?action=historic" class="btn btn-outline-danger rounded-pill px-4">
                        <i class="bi bi-arrow-left me-2"></i>Quay lại lịch sử
                    </a>
                </div>
                <div class="col-md-6 text-end">
                    <div class="h4 fw-bold text-danger">
                        Tổng cộng: 
                        <span class="ms-2">
                            <?= number_format(array_sum(array_column($orderDetails, 'order_total')), 0, ',', '.') ?>₫
                        </span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php include './views/client/layout/miniCart.php' ?>
<?php include ('./views/client/layout/footer.php'); ?>