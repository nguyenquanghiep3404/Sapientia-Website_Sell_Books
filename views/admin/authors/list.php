<?php require_once './views/admin/layouts/header.php'; ?>
<?php require_once './views/admin/layouts/sidebar.php'; ?>

<div class="container mt-4">
    <h2>Danh sách Tác giả</h2>
    <a href="?act=add&type=author" class="btn btn-primary mb-3">Thêm Tác giả</a>


    <?php if (!empty($listAuthors)) : ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Tác giả</th>
                    <th>Bio</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listAuthors as $author) : ?>
                    <tr>
                        <td><?= $author['author_id'] ?></td>
                        <td><?= htmlspecialchars($author['author_name']) ?></td>
                        <td><?= nl2br(htmlspecialchars($author['bio'])) ?></td> 
                        <td>
                        <a href="?act=edit&type=author&id_author=<?= $author['author_id'] ?>" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="?act=delete&type=author&id_author=<?= $author['author_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?');">Xóa</a>
                        <a href="?act=show&type=author&id_author=<?= $author['author_id'] ?>" class="btn btn-info btn-sm">Chi tiết</a>
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Không có tác giả nào.</p>
    <?php endif; ?>
</div>

<?php require_once './views/admin/layouts/footer.php'; ?>
