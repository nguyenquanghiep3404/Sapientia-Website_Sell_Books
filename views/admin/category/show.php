<?php require_once './views/admin/layouts/header.php'; ?>
<?php require_once './views/admin/layouts/sidebar.php'; ?>

<div class="container mt-4">
    <h2 class="mb-4">Chi tiết danh mục</h2>

    <?php if (!isset($category) || empty($category)) : ?>
        <div class="alert alert-danger">Không tìm thấy danh mục!</div>
    <?php else : ?>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th class="w-25">ID</th>
                    <td><?= htmlspecialchars($category['category_id'] ?? 'N/A') ?></td>
                </tr>
                <tr>
                    <th>Tên danh mục</th>
                    <td><?= htmlspecialchars($category['category_name'] ?? 'Không có dữ liệu') ?></td>
                </tr>
                <tr>
                    <th>Mô tả</th>
                    <td><?= htmlspecialchars($category['description'] ?? 'Không có mô tả') ?></td>
                </tr>
                <tr>
                    <th>Ngày tạo</th>
                    <td><?= htmlspecialchars($category['created_at'] ?? 'Chưa cập nhật') ?></td>
                </tr>
                <tr>
                    <th>Ngày cập nhật</th>
                    <td><?= htmlspecialchars($category['updated_at'] ?? 'Chưa cập nhật') ?></td>
                </tr>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="<?= BASE_URL . 'index.php?act=list&type=category' ?>" class="btn btn-secondary">Quay lại</a>
</div>

<?php require_once './views/admin/layouts/footer.php'; ?>
