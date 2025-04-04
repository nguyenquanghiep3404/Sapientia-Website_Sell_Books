<?php require_once './views/admin/layouts/header.php'; ?>
<?php require_once './views/admin/layouts/sidebar.php'; ?>


<div class="container mt-4">
    <h2>Chỉnh sửa Tác giả</h2>
    <form method="POST" action="<?= BASE_URL ?>index.php?act=postEdit&type=author">

        <input type="hidden" name="author_id" value="<?= $author['author_id'] ?>">

        <div class="mb-3">
            <label for="author_name" class="form-label">Tên Tác giả</label>
            <input type="text" name="author_name" id="author_name" class="form-control" value="<?= htmlspecialchars($author['author_name']) ?>">
            <?php if (!empty($errors['author_name'])) : ?>
                <p class="text-danger"><?= $errors['author_name'] ?></p>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="bio" class="form-label">Tiểu sử</label>
            <textarea name="bio" id="bio" class="form-control"><?= htmlspecialchars($author['bio']) ?></textarea>
            <?php if (!empty($errors['bio'])) : ?>
                <p class="text-danger"><?= $errors['bio'] ?></p>
            <?php endif; ?>
        </div>

        <button type="submit" class="btn btn-success">Cập nhật</button>
        <a href="<?= BASE_URL ?>index.php?act=list&type=author" class="btn btn-secondary">Hủy</a>

    </form>
</div>

<?php require_once './views/admin/layouts/footer.php'; ?>
