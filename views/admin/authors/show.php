<?php require_once './views/admin/layouts/header.php'; ?>
<?php require_once './views/admin/layouts/sidebar.php'; ?>


<div class="container mt-4">
    <h2>Chi tiết Tác giả</h2>
    
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td><?= $author['author_id'] ?></td>
        </tr>
        <tr>
            <th>Tên Tác giả</th>
            <td><?= htmlspecialchars($author['author_name']) ?></td>
        </tr>
        <tr>
            <th>Tiểu sử</th>
            <td><?= nl2br(htmlspecialchars($author['bio'])) ?></td>
        </tr>
        <tr>
            <th>Ngày tạo</th>
            <td><?= $author['created_at'] ?></td>
        </tr>
    </table>

    <a href="<?= BASE_URL ?>index.php?act=list&type=author" class="btn btn-secondary">Hủy</a>

</div>

<?php require_once './views/admin/layouts/footer.php'; ?>
