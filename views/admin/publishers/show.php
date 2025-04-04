<?php require_once './views/admin/layouts/header.php'; ?>
<?php require_once './views/admin/layouts/sidebar.php'; ?>

<div class="container mt-4">
    <h2>Chi tiết Nhà xuất bản</h2>
    
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td><?= $publisher['publisher_id'] ?></td>
        </tr>
        <tr>
            <th>Tên Nhà xuất bản</th>
            <td><?= htmlspecialchars($publisher['publisher_name']) ?></td>
        </tr>
        <tr>
            <th>Ngày tạo</th>
            <td><?= $publisher['created_at'] ?></td>
        </tr>
    </table>

    <a href="?act=list&type=publisher" class="btn btn-secondary">Hủy</a>
</div>

<?php require_once './views/admin/layouts/footer.php'; ?>
