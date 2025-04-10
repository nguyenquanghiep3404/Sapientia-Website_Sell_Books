<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin thanh toán</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h4 class="mb-0">Thông tin Chuyển khoản</h4>
            </div>
            <div class="card-body text-center">
                <div class="mb-4">
                    <img src="<?= $qrCodePath ?>" alt="QR Code" class="img-fluid rounded shadow" style="max-width: 250px;">
                </div>
                <div class="d-flex justify-content-center">
                    <div class="text-start mx-auto">
                        <p class="mb-2">Ngân hàng: <strong><?= $data['bank'] ?></strong></p>
                        <p class="mb-2">Số tài khoản: <strong><?= $data['account_number'] ?></strong></p>
                        <p class="mb-2">Chủ tài khoản: <strong><?= $data['account_name'] ?></strong></p>
                        <p class="mb-2">Số tiền: <strong><?= number_format($data['amount'], 0, ',', '.') ?> VNĐ</strong></p>
                        <p class="mb-0">Nội dung chuyển khoản: 
                            <strong><?= $data['content'] ?></strong>
                        </p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-muted">* Vui lòng nhập đúng nội dung chuyển khoản để đơn hàng được xử lý nhanh nhất.</p>
                    <p class="text-muted">Nếu có thắc mắc, liên hệ <strong>Hotline: 0123 456 789</strong>.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>