<?php include('./views/admin/layout/header.php'); ?>

<style>
    .product-image {
        width: 80px;
        height: 100px;
        object-fit: contain;
        transition: transform 0.3s ease;
    }
    .product-image:hover {
        transform: scale(1.8);
        z-index: 2;
    }
    .status-badge {
        font-size: 0.8rem;
        padding: 4px 8px;
        border-radius: 4px;
    }
    .action-buttons .btn {
        width: 32px;
        height: 32px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1 bg-light-subtle">
                        <h4 class="card-title mb-0">Quản lý Sách</h4>
                        <div class="d-flex gap-2">
                            <a href="?action=create-book" class="btn btn-primary btn-sm">
                                <i class="bx bx-plus"></i> Thêm sách mới
                            </a>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" 
                                        type="button" 
                                        data-bs-toggle="dropdown">
                                    Tùy chọn
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Xuất Excel</a></li>
                                    <li><a class="dropdown-item" href="#">In danh sách</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Tên Sách</th>
                                        <th>Ảnh</th>
                                        <th>Giá</th>
                                        <th>Giảm giá</th>
                                        <th>Tồn kho</th>
                                        <th>Danh mục</th>
                                        <th>Ngày cập nhật</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listBook as $index => $book): ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td class="fw-medium"><?= htmlspecialchars($book['book_title']) ?></td>
                                            <td>
                                                <img src="<?= htmlspecialchars($book['book_image']) ?>" 
                                                     alt="<?= htmlspecialchars($book['book_title']) ?>" 
                                                     class="product-image rounded border">
                                            </td>
                                            <td class="text-danger fw-bold">
                                                <?= number_format($book['prices'], 0, ',', '.') ?>đ
                                            </td>
                                            <td class="text-success">
                                                <?php if($book['sale_prices'] > 0): ?>
                                                    -<?= number_format(($book['prices'] - $book['sale_prices'])/$book['prices']*100, 0) ?>%
                                                <?php else: ?>
                                                    --
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <span class="badge bg-<?= $book['book_quantity'] > 0 ? 'success' : 'danger' ?>">
                                                    <?= $book['book_quantity'] ?> cuốn
                                                </span>
                                            </td>
                                            <td><?= htmlspecialchars($book['category_name']) ?></td>
                                            <td>
                                                <?= date('d/m/Y', strtotime($book['updated_at'])) ?>
                                            </td>
                                            <td>
                                                <span class="status-badge bg-<?= $book['status'] ? 'success' : 'secondary' ?>">
                                                    <?= $book['status'] ? 'Hiển thị' : 'Ẩn' ?>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2 action-buttons">
                                                    <a href="?action=edit-book&book_id=<?= $book['book_id'] ?>" 
                                                       class="btn btn-outline-primary btn-sm"
                                                       data-bs-toggle="tooltip" 
                                                       title="Chỉnh sửa">
                                                        <i class="bx bx-edit"></i>
                                                    </a>
                                                    <a href="?action=delete-book&book_id=<?= $book['book_id'] ?>" 
                                                       class="btn btn-outline-danger btn-sm"
                                                       onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                                                       data-bs-toggle="tooltip" 
                                                       title="Xóa sách">
                                                        <i class="bx bx-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Phân trang -->
                        <nav class="mt-3">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Trước</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Sau</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Kích hoạt tooltip
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

<?php include('./views/admin/layout/footer.php'); ?>