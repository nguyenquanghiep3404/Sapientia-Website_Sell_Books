<?php require_once './views/admin/layouts/header.php'; ?>
<?php require_once './views/admin/layouts/sidebar.php'; ?>

<div class="container mt-4">
    <h2>Chỉnh sửa Nhà xuất bản</h2>
    <form action="?act=postEdit&type=publisher" method="POST">
        <input type="hidden" name="publisher_id" value="<?= $publisher['publisher_id'] ?>">
        <div class="mb-3">
            <label for="publisher_name" class="form-label">Tên Nhà xuất bản</label>
            <input type="text" name="publisher_name" id="publisher_name" class="form-control" value="<?= htmlspecialchars($publisher['publisher_name']) ?>">
            <?php if (!empty($errors['publisher_name'])) : ?>
                <p class="text-danger"><?= $errors['publisher_name'] ?></p>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-success">Cập nhật</button>
        <a href="?act=list&type=publisher" class="btn btn-secondary">Hủy</a>
    </form>
</div>

<?php require_once './views/admin/layouts/footer.php'; ?>