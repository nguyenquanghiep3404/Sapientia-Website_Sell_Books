<?php require_once 'layouts/header.php'; ?>
<?php require_once 'layouts/sidebar.php'; ?>

<h2>Trang Quản Trị</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
            <div class="card-header">Danh mục</div>
            <div class="card-body">
                <h5 class="card-title"><?= $totalCategories ?> Danh mục</h5>
                <a href="<?= BASE_URL . 'index.php?type=category&act=list' ?>" class="btn btn-light">Quản lý</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-success mb-3">
            <div class="card-header">Tác giả</div>
            <div class="card-body">
                <h5 class="card-title"><?= $totalAuthors ?> Tác giả</h5>
                <a href="<?= BASE_URL . 'index.php?type=author&act=list' ?>" class="btn btn-light">Quản lý</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-white bg-warning mb-3">
            <div class="card-header">Nhà phát hành</div>
            <div class="card-body">
                <h5 class="card-title"><?= $totalPublishers ?> Nhà phát hành</h5>
                <a href="<?= BASE_URL . 'index.php?type=publisher&act=list' ?>" class="btn btn-light">Quản lý</a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'layouts/footer.php'; ?>
