<?php require_once './views/admin/layouts/header.php'; ?>
<?php require_once './views/admin/layouts/sidebar.php'; ?>

<div class="container mt-4">
    <h2>Danh sách Nhà xuất bản</h2>
    <a href="?act=add&type=publisher" class="btn btn-primary mb-3">Thêm Nhà xuất bản</a>

    <?php if (!empty($listPublishers)) : ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Nhà xuất bản</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listPublishers as $publisher) : ?>
                    <tr>
                        <td><?= $publisher['publisher_id'] ?></td>
                        <td><?= htmlspecialchars($publisher['publisher_name']) ?></td>
                        <td>
                        <a href="?act=edit&type=publisher&id_publisher=<?= $publisher['publisher_id'] ?>" class="btn btn-warning btn-sm">Sửa</a>

                        <a href="?act=delete&type=publisher&id_publisher=<?= $publisher['publisher_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');">Xóa</a>

                        <a href="?act=show&type=publisher&id_publisher=<?= $publisher['publisher_id'] ?>" class="btn btn-info btn-sm">Chi tiết</a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Không có nhà xuất bản nào.</p>
    <?php endif; ?>
</div>

<?php require_once './views/admin/layouts/footer.php'; ?>
