

<?php include ('./views/admin/layout/header.php'); ?>
<style>
    :root {
        --primary-color: #dc3545;
        --primary-hover: #bb2d3b;
        --sidebar-width: 280px;
    }
    
    body {
        background-color: #f8f9fa;
    }
    
    #sidebar {
        background: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    
    .brand {
        padding: 1rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        border-bottom: 1px solid #eee;
    }
     .brand-text {
        font-weight: 600;
        color: var(--primary-color);
    }
    .brand img {
        height: 40px;
    }
    
    .side-menu li.active a {
        color: var(--primary-color);
        border-left: 4px solid var(--primary-color);
    }
    
    .side-menu li a:hover {
        color: var(--primary-color);
    }
    
    .nav-link {
        transition: all 0.3s ease;
    }
    /* Thêm CSS tùy chỉnh */
    .table-show-category {
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    
    .table-show-category thead {
        background: #dc3545;
        color: white;
    }
    
    .table-show-category th {
        border-bottom: 2px solid #ff4d4d;
        padding: 15px;
        text-align: center;
    }
    
    .table-show-category td {
        padding: 12px;
        vertical-align: middle;
        border-color: #ffe6e6;
    }
    
    .table-show-category tr:nth-child(even) {
        background-color: #fff5f5;
    }
    
    .table-show-category tr:hover {
        background-color: #ffe6e6;
        transition: 0.3s;
    }
    
    .btn-custom {
        background: #dc3545;
        color: white;
        padding: 8px 20px;
        border-radius: 5px;
        transition: 0.3s;
    }
    
    .btn-custom:hover {
        background: #c82333;
        color: white;
        transform: translateY(-2px);
    }
    
    .status-badge {
        padding: 5px 12px;
        border-radius: 20px;
        font-weight: 500;
    }
    
    .status-active {
        background: #d4edda;
        color: #155724;
    }
    
    .status-inactive {
        background: #f8d7da;
        color: #721c24;
    }
    
    .action-btns a {
        margin: 0 5px;
        padding: 5px 10px;
        border-radius: 4px;
        transition: 0.3s;
    }
    
    .action-btns .edit-btn {
        color: #dc3545;
        border: 1px solid #dc3545;
    }
    
    .action-btns .edit-btn:hover {
        background: #dc3545;
        color: white;
    }
    
    h3.text-center {
        color: #dc3545;
        font-weight: 700;
        margin: 25px 0;
        position: relative;
        padding-bottom: 10px;
    }
    
    h3.text-center:after {
        content: '';
        width: 60px;
        height: 3px;
        background: #dc3545;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }
    @media (max-width: 768px) {
    .table-show-category {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }
    
    .action-btns .btn {
        font-size: 0.875rem;
        padding: 0.25rem 0.5rem;
    }
    
    .product-img img {
        max-width: 60px !important;
    }
}

@media (max-width: 576px) {
    .action-btns .btn {
        min-width: auto !important;
    }
    
    .action-btns .btn i {
        margin-right: 0 !important;
    }
    
    .action-btns .btn span {
        display: none;
    }
}
/* Sidebar */
#sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: var(--sidebar-width);
        height: 100%;
        background: #fff;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        z-index: 1000;
        transition: all var(--transition-speed) ease;
    }
    
    #sidebar.hide {
        width: 60px;
    }
    
    .brand {
        padding: 1rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        border-bottom: 1px solid #eee;
    }
    
    .brand-logo {
        height: 40px;
    }
    
    .brand-text {
        font-weight: 600;
        color: var(--primary-color);
    }
    
    #sidebar.hide .brand-text {
        opacity: 0;
        display: none;
    }
    /* slidebar */
    .side-menu li.active a {
        background: var(--light-red);
        color: var(--primary-color) !important;
        border-left: 4px solid var(--primary-color);
    }
    
    .side-menu li a:hover {
        color: var(--primary-color);
    }
    /* Navbar */
   /* Màu chữ chính trong navbar */
.navbar {
    color: #000 !important; /* Màu đen */
}

/* Màu chữ cho các link trong navbar */
.navbar a,
.navbar .nav-link,
.navbar .dropdown-toggle,
.navbar .form-check-label {
    color: #000 !important; /* Màu đen */
}

/* Màu chữ cho icon user và tên tài khoản */
.navbar .bx-user-circle,
.navbar .dropdown-toggle span {
    color: #000 !important;
}

/* Màu chữ cho thông báo */
.navbar .badge {
    color: #000 !important;
}

/* Màu chữ cho dropdown menu */
.dropdown_account_link li a {
    color: #000 !important;
}



/* Màu chữ khi hover */
.navbar a:hover,
.navbar .nav-link:hover,
.navbar .dropdown-toggle:hover {
    color: #000 !important;
    opacity: 0.8;
}
    
    
    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    }
    /* Dropdown */
    .dropdown_account_link {
        position: absolute;
        top: 100%;
        right: 0;
        background: white;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        padding: 0.5rem 0;
        min-width: 200px;
        z-index: 1000;
        display: none;
    }
    
    .dropdown_account_link.show {
        display: block;
    }
    
    .dropdown_account_link li {
        list-style: none;
    }
    
    .dropdown_account_link li a {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        color: var(--text-color);
        text-decoration: none;
        transition: all 0.2s ease;
    }
    
    .dropdown_account_link li a:hover {
        background-color: rgba(220, 53, 69, 0.1);
        color: var(--primary-color);
    }
    
    .dropdown_account_link li a i {
        margin-right: 0.75rem;
        font-size: 1rem;
        width: 20px;
        text-align: center;
    }
</style>
<section id="sidebar">
    <a href="index.php" class="brand">
    <span class="brand-text">Sapientia Admin</span>

    </a>
    <ul class="side-menu top">
        <li>
            <a href="index.php?action=admin">
                <i class='bx bxs-home'></i>
                <span class="text">Trang Chủ</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=home-dm">
                <i class='bx bxs-category-alt'></i>
                <span class="text">Danh Mục</span>
            </a>
        </li>
        <li class="active">
            <a href="index.php?action=product">
                <i class='bx bxs-window-alt'></i>
                <span class="text">Sản Phẩm</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=listOrders">
                <i class='bx bxs-calendar-check'></i>
                <span class="text">Đơn Hàng</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=showComment">
                <i class='bx bxs-chat'></i>
                <span class="text">Phản Hồi</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=all_register">
                <i class='bx bxs-group'></i>
                <span class="text">Tài Khoản</span>
            </a>
        </li>
       

    </ul>
    <ul class="side-menu">
        <li>
            <a href="index.php?action=logout" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Đăng Xuất</span>
            </a>
        </li>
    </ul>
</section>

<section id="content">
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" id="menu-toggle">
                <i class='bx bx-menu'></i>
            </button>
            <a href="?action=admin" class="nav-link text-white me-3 d-none d-lg-block">
                <i class='bx bxs-home me-1'></i>
                Trang Chủ
            </a>
            <form class="d-flex ms-auto me-3">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Tìm kiếm...">
                    <button class="btn btn-light" type="submit">
                        <i class='bx bx-search text-danger'></i>
                    </button>
                </div>
            </form>
            
            <div class="d-flex align-items-center">
                <div class="form-check form-switch me-3">
                    <input class="form-check-input" type="checkbox" id="switch-mode">
                    <label class="form-check-label text-white" for="switch-mode">
                        <i class='bx bxs-moon'></i>
                    </label>
                </div>
                
                <a href="#" class="position-relative me-3 text-white">
                    <i class='bx bxs-bell fs-4'></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-dark">
                        8
                        <span class="visually-hidden">thông báo mới</span>
                    </span>
                </a>
                
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bxs-user-circle fs-3 me-2'></i>
                        <span><?= isset($_SESSION['name']) ? $_SESSION['name']['name'] : 'Tài Khoản' ?></span>
                    </a>
                    <ul class="dropdown_account_link">
                        <?php if (isset($_SESSION['name'])) { ?>
                            <li><a href="?action=profile"><i class="fas fa-user-circle"></i> Xin Chào <?= ($_SESSION['name']['name']) ?>!</a></li>
                            <li><a href="?action=profile"><i class="fas fa-user-cog"></i> Quản Lý Tài Khoản</a></li>
                            <?php if ($_SESSION['role_id'] == 0) { // Quản trị viên ?>
                                <li><a href="?action=admin"><i class="fas fa-tools"></i> Truy Cập Trang Admin</a></li>
                            <?php } ?>
                            <li><a href="?action=logout"><i class="fas fa-sign-out-alt"></i> Đăng Xuất</a></li>
                        <?php } else { ?>
                            <li><a href="?action=login"><i class="fas fa-sign-in-alt"></i> Đăng Nhập</a></li>
                            <li><a href="?action=register"><i class="fas fa-user-plus"></i> Đăng Kí</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="container-fluid">
            <h3 class="text-center">QUẢN LÝ SẢN PHẨM</h3>
            
            <div class="mb-4">
                <a href="index.php?action=product-create" class="btn-custom">
                    <i class='bx bx-plus'></i> Thêm sản phẩm mới
                </a>
            </div>

            <div class="card border-danger">
                <div class="card-body p-0">
                    <table class="table table-show-category">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên SP</th>
                                <th>Hình Ảnh</th>
                                <th>Giá</th>
                                <th>Danh mục</th>
                                <th>Ngày Nhập</th>
                                <th>Trạng thái</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($danhSachProduct as $key => $product) : ?>
                                <tr>
                                    <td class="text-center"><?= $key +1 ?></td>
                                    <td><?= $product['name'] ?></td>
                                    <td>
                                        <div class="product-img">
                                            <img src="<?= $product['image'] ?>" 
                                                 class="img-thumbnail" 
                                                 style="max-width: 80px; height: auto;">
                                        </div>
                                    </td>
                                    <td class="text-danger fw-bold">
                                        <?= number_format($product['min_price'], 0, ',', '.') ?> đ
                                    </td>
                                    <td><?= $product['category_name'] ?></td>
                                    <td><?= date('d/m/Y', strtotime($product['created_at'])) ?></td>
                                    <td>
                                        <span class="status-badge <?= $product['status'] ==1 ? 'status-active' : 'status-inactive' ?>">
                                            <?= $product['status'] ==1 ? 'Đang bán' : 'Ngừng bán' ?>
                                        </span>
                                    </td>
                                    <td class="action-btns">
    <div class="d-flex flex-wrap gap-2 align-items-center">
        <!-- Nút trạng thái -->
        <form method="POST" action="?action=update-product-status" 
              class="flex-shrink-0">
            <input type="hidden" name="product_id" 
                   value="<?= $product['product_id'] ?>">
            <input type="hidden" name="new_status" 
                   value="<?= $product['status'] ==1 ? 0 : 1 ?>">
            <button type="submit" 
                    class="btn btn-sm <?= $product['status'] ==1 ? 'btn-outline-danger' : 'btn-outline-success' ?>"
                    style="min-width: 100px;">
                <?= $product['status'] ==1 ? 'Ngừng bán' : 'Kích hoạt' ?>
            </button>
        </form>

        <!-- Nút sửa -->
        <a href="<?= '?action=product-form-edit&id='.$product['product_id'] ?>" 
           class="btn btn-sm btn-outline-primary"
           style="min-width: 80px;">
            <i class='bx bx-edit-alt'></i>
            <span class="d-none d-md-inline">Sửa</span>
        </a>
    </div>
</td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Phân trang -->
            <div class="mt-4 d-flex justify-content-end">
                <nav>
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
</section>

<?php include ('./views/admin/layout/footer.php'); ?>