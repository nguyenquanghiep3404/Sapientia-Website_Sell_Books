<?php require_once './views/admin/layouts/header.php'; ?>
<?php require_once './views/admin/layouts/sidebar.php'; ?>

    <div class="container mt-4">
        <h2 class="mb-4">Danh Sách Danh Mục</h2>
        <a href="<?= BASE_URL . 'index.php?action=add-category' ?>" class="btn btn-primary mb-3">Thêm Danh Mục</a>

        <?php if (!empty($listCategory)) : ?>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tên Danh Mục</th>
                        <th>Mô Tả</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listCategory as $category) : ?>
                        <tr>
                            <td><?= htmlspecialchars($category['category_id']) ?></td>
                            <td><?= htmlspecialchars($category['category_name']) ?></td>
                            <td><?= htmlspecialchars($category['description']) ?></td>
                            <td>
                                <a href="index.php?act=show-category&id_cate=<?= $category['category_id'] ?>" class="btn btn-info btn-sm">
                                    Xem chi tiết
                                </a>
                                <a href="<?= BASE_URL . 'index.php?act=edit-category&id_cate=' . $category['category_id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                                <a href="<?= BASE_URL . 'index.php?act=delete-category&id_cate=' . $category['category_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <div class="alert alert-warning">Chưa có danh mục nào.</div>
        <?php endif; ?>
    </div>

<?php require_once './views/admin/layouts/footer.php'; ?>