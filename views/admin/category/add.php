<?php require_once './views/admin/layouts/header.php'; ?>
<?php require_once './views/admin/layouts/sidebar.php'; ?>

    <div class="container mt-4">
        <h2 class="mb-4">Thêm Danh Mục</h2>

        <form action="<?= BASE_URL . 'index.php?act=postAdd' ?>" method="POST">


            <!-- Tên danh mục -->
            <div class="mb-3">
                <label for="category_name" class="form-label">Tên Danh Mục <span class="text-danger">*</span></label>
                <input type="text" class="form-control <?= isset($errors['category_name']) ? 'is-invalid' : '' ?>" id="category_name" name="category_name" value="<?= isset($category_name) ? htmlspecialchars($category_name) : '' ?>">
                <?php if (isset($errors['category_name'])) : ?>
                    <div class="invalid-feedback"><?= htmlspecialchars($errors['category_name']) ?></div>
                <?php endif; ?>
            </div>

            <!-- Mô tả -->
            <div class="mb-3">
                <label for="description" class="form-label">Mô Tả <span class="text-danger">*</span></label>
                <textarea class="form-control <?= isset($errors['description']) ? 'is-invalid' : '' ?>" id="description" name="description"><?= isset($description) ? htmlspecialchars($description) : '' ?></textarea>
                <?php if (isset($errors['description'])) : ?>
                    <div class="invalid-feedback"><?= htmlspecialchars($errors['description']) ?></div>
                <?php endif; ?>
            </div>

            <!-- Nút thao tác -->
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="<?= BASE_URL . 'index.php?act=list' ?>" class="btn btn-secondary">Hủy</a>
        </form>
    </div>

<?php require_once './views/admin/layouts/footer.php'; ?>