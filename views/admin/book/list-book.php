<?php include('./views/admin/layout/header.php'); ?>

<style>
    /* CSS giữ nguyên */
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
    /* Thêm style cho hàng biến thể phụ (tùy chọn) */
    .variant-row td {
        /* border-top: none !important; */ /* Bỏ đường kẻ trên nếu muốn liền mạch */
        font-size: 0.9em;
        background-color: #fdfdfd; /* Màu nền hơi khác để phân biệt */
    }
    .variant-details {
        padding-left: 15px; /* Thụt lề cho thông tin biến thể */
        color: #555;
    }
</style>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1 bg-light-subtle">
                        <h4 class="card-title mb-0">Quản lý Sách và Biến thể</h4>
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
                                        <th>Tên Sách / Biến thể</th>
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
                                    <?php
                                    $current_book_id = null; // Biến để theo dõi book_id hiện tại
                                    $stt = 0; // Biến số thứ tự cho sách
                                    ?>
                                    <?php foreach ($listBookWithVariants as $item): ?>
                                        <?php
                                        // Kiểm tra nếu là sách mới hoặc sách không có biến thể (dòng đầu tiên của sách)
                                        $is_new_book = ($item['book_id'] !== $current_book_id);
                                        if ($is_new_book) {
                                            $current_book_id = $item['book_id'];
                                            $stt++;
                                        }
                                        ?>

                                        <tr class="<?= !$is_new_book ? 'variant-row' : '' // Thêm class cho hàng biến thể phụ ?>">
                                            <?php if ($is_new_book): // Chỉ hiển thị các cột này cho dòng đầu tiên của sách ?>
                                                <td rowspan="<?= array_count_values(array_column($listBookWithVariants, 'book_id'))[$item['book_id']] // Đếm số biến thể + dòng chính ?>">
                                                    <?= $stt ?>
                                                </td>
                                                <td class="fw-medium">
                                                    <?= htmlspecialchars($item['book_title']) ?>
                                                    <?php if(empty($item['variant_id'])) echo "<br><small class='text-muted'>(Chưa có biến thể)</small>"?>
                                                </td>
                                                <td rowspan="<?= array_count_values(array_column($listBookWithVariants, 'book_id'))[$item['book_id']] ?>">
                                                    <img src="<?= htmlspecialchars($item['book_image'] ?: './path/to/default/image.jpg') // Đường dẫn ảnh mặc định nếu null ?>"
                                                         alt="<?= htmlspecialchars($item['book_title']) ?>"
                                                         class="product-image rounded border">
                                                </td>
                                            <?php elseif (!empty($item['variant_id'])): // Dòng biến thể phụ, hiển thị tên biến thể ?>
                                                <td colspan="2" class="variant-details"> <small><i><?= htmlspecialchars($item['format'] ?? 'N/A') ?> - <?= htmlspecialchars($item['language'] ?? 'N/A') ?></i></small>
                                                </td>
                                             <?php else: ?>
                                                <td colspan="2"></td> <?php endif; ?>


                                            <?php // Các cột thông tin biến thể (hiển thị cho mọi dòng có biến thể) ?>
                                            <?php if (!empty($item['variant_id'])): ?>
                                                <td class="text-danger fw-bold">
                                                    <?= number_format($item['variant_price'] ?? 0, 0, ',', '.') ?>đ
                                                </td>
                                                <td class="text-success">
                                                    <?php
                                                    $discount_percent = '--';
                                                    if (!empty($item['variant_sale_price']) && !empty($item['variant_price']) && $item['variant_price'] > 0 && $item['variant_sale_price'] < $item['variant_price']) {
                                                        $discount = $item['variant_price'] - $item['variant_sale_price'];
                                                        $discount_percent = '-' . number_format(($discount / $item['variant_price']) * 100, 0) . '%';
                                                    }
                                                    echo $discount_percent;
                                                    ?>
                                                </td>
                                                <td>
                                                    <span class="badge bg-<?= ($item['variant_quantity'] ?? 0) > 0 ? 'success' : 'danger' ?>">
                                                        <?= ($item['variant_quantity'] ?? 0) ?>
                                                    </span>
                                                </td>
                                            <?php else: // Sách không có biến thể ?>
                                                 <td>N/A</td>
                                                 <td>N/A</td>
                                                 <td>
                                                     <span class="badge bg-secondary">0</span>
                                                 </td>
                                            <?php endif; ?>


                                            <?php if ($is_new_book): // Chỉ hiển thị các cột này cho dòng đầu tiên của sách ?>
                                                <td rowspan="<?= array_count_values(array_column($listBookWithVariants, 'book_id'))[$item['book_id']] ?>">
                                                     <?= htmlspecialchars($item['category_name']) ?>
                                                </td>
                                                <td rowspan="<?= array_count_values(array_column($listBookWithVariants, 'book_id'))[$item['book_id']] ?>">
                                                    <?= date('d/m/Y H:i', strtotime($item['updated_at'])) // Hiển thị cả giờ phút ?>
                                                </td>
                                                <td rowspan="<?= array_count_values(array_column($listBookWithVariants, 'book_id'))[$item['book_id']] ?>">
                                                    <span class="status-badge bg-<?= $item['status'] ? 'success' : 'secondary' ?>">
                                                        <?= $item['status'] ? 'Hiển thị' : 'Ẩn' ?>
                                                    </span>
                                                </td>
                                                <td rowspan="<?= array_count_values(array_column($listBookWithVariants, 'book_id'))[$item['book_id']] ?>">
                                                    <div class="d-flex gap-2 action-buttons">
                                                        <a href="?action=edit-book&book_id=<?= $item['book_id'] ?>"
                                                           class="btn btn-outline-primary btn-sm"
                                                           data-bs-toggle="tooltip"
                                                           title="Chỉnh sửa sách & biến thể">
                                                            <i class="bx bx-edit"></i>
                                                        </a>
                                                        <a href="?action=delete-book&book_id=<?= $item['book_id'] ?>"
                                                           class="btn btn-outline-danger btn-sm"
                                                           onclick="return confirm('Bạn chắc chắn muốn xóa sách này và tất cả biến thể của nó?')"
                                                           data-bs-toggle="tooltip"
                                                           title="Xóa sách và biến thể">
                                                            <i class="bx bx-trash"></i>
                                                        </a>
                                                        </div>
                                                </td>
                                            <?php endif; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                     <?php if (empty($listBookWithVariants)): ?>
                                        <tr>
                                            <td colspan="10" class="text-center">Không có dữ liệu sách.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>

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
    // Kích hoạt tooltip (giữ nguyên)
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

<?php include('./views/admin/layout/footer.php'); ?>