<?php include('./views/admin/layout/header.php'); ?>
<style>
    :root {
        --primary-color: #dc3545;
        --primary-hover: #bb2d3b;
    }
    
    .order-detail-container {
        background-color: #f8f9fa;
        padding: 2rem 0;
    }
    
    .order-card {
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
        overflow: hidden;
    }
    
    .order-header {
        background-color: var(--primary-color);
        color: white;
        padding: 1.5rem;
    }
    
    .order-item {
        border-bottom: 1px solid #eee;
        padding: 1.5rem;
        transition: all 0.3s ease;
    }
    
    .order-item:hover {
        background-color: rgba(220, 53, 69, 0.05);
    }
    
    .order-footer {
        background-color: var(--primary-color);
        color: white;
        padding: 1.5rem;
        font-weight: 500;
    }
    
    .product-img {
        max-width: 100px;
        height: auto;
        border-radius: 5px;
    }
    
    .back-link {
        color: var(--primary-color);
        margin-bottom: 1rem;
        display: inline-block;
    }
    
    .back-link:hover {
        color: var(--primary-hover);
        text-decoration: none;
    }
    
    .text-muted {
        color: #6c757d !important;
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
        <img src="../uploads/logo_owenstore.svg" alt="" class="brand-logo">
        <span class="brand-text">OwenStore Admin</span>
    </a>
    <ul class="side-menu top">
        <li>
            <a href="index.php?action=admin" class="nav-link">
                <i class='bx bxs-home'></i>
                <span class="text">Trang Chủ</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=home-dm" class="nav-link">
                <i class='bx bxs-category-alt'></i>
                <span class="text">Danh Mục</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=product" class="nav-link">
                <i class='bx bxs-window-alt'></i>
                <span class="text">Sản Phẩm</span>
            </a>
        </li>
        <li class="active">
            <a href="index.php?action=listOrders" class="nav-link">
                <i class='bx bxs-calendar-check'></i>
                <span class="text">Đơn Hàng</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=showComment" class="nav-link">
                <i class='bx bxs-chat'></i>
                <span class="text">Phản Hồi</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=all_register" class="nav-link">
                <i class='bx bxs-group'></i>
                <span class="text">Tài Khoản</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="index.php?action=logout" class="logout nav-link">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Đăng Xuất</span>
            </a>
        </li>
    </ul>
</section>

<section id="content">
    <!-- Your existing navbar code -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse">
                <i class='bx bx-menu'></i>
            </button>
            <a href="?action=admin" class="nav-link text-white me-3">Trang Chủ</a>
            
            <form class="d-flex ms-auto me-3">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Tìm Kiếm...">
                    <button class="btn btn-outline-light" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            
            <div class="d-flex align-items-center">
                <div class="form-check form-switch me-3">
                    <input class="form-check-input" type="checkbox" id="switch-mode">
                    <label class="form-check-label text-white" for="switch-mode"></label>
                </div>
                
                <a href="#" class="position-relative me-3 text-white">
                    <i class='bx bxs-bell fs-4'></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark">8</span>
                </a>
                
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown">
                        <i class='bx bxs-user-circle fs-3 me-2'></i>
                        <span><?= isset($_SESSION['name']) ? $_SESSION['name']['name'] : 'Tài Khoản' ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownUser">
                        <?php if (isset($_SESSION['name'])) { ?>
                            <li><h6 class="dropdown-header">Xin chào, <?= $_SESSION['name']['name'] ?></h6></li>
                            <li><a class="dropdown-item" href="?action=profile"><i class="fas fa-user-cog me-2"></i>Quản Lý Tài Khoản</a></li>
                            <?php if ($_SESSION['role_id'] == 0) { ?>
                                <li><a class="dropdown-item" href="?action=admin"><i class="fas fa-tools me-2"></i>Trang Admin</a></li>
                            <?php } ?>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="?action=logout"><i class="fas fa-sign-out-alt me-2"></i>Đăng Xuất</a></li>
                        <?php } else { ?>
                            <li><a class="dropdown-item" href="?action=login"><i class="fas fa-sign-in-alt me-2"></i>Đăng Nhập</a></li>
                            <li><a class="dropdown-item" href="?action=register"><i class="fas fa-user-plus me-2"></i>Đăng Ký</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid py-4 order-detail-container">
        <div class="card order-card">
            <div class="order-header">
                <h2 class="mb-0"><i class='bx bxs-receipt me-2'></i> Chi Tiết Đơn Hàng</h2>
            </div>
            
            <div class="card-body p-4">
                <a href="?action=listOrders" class="back-link">
                    <i class='bx bx-arrow-back me-1'></i> Quay lại trang Đơn hàng
                </a>
                
                <?php $totalPrice = 0; ?>
                <?php foreach ($showOrder as $item) { 
                    $totalPrice += $item['order_price'];
                ?>
                    <div class="order-item animate__animated animate__fadeIn">
                        <div class="row align-items-center">
                            <div class="col-md-2 mb-3 mb-md-0">
                                <img src="<?= $item['image'] ?>" 
                                     alt="Ảnh sản phẩm" 
                                     class="product-img img-fluid">
                            </div>
                            <div class="col-md-2 text-center text-md-start mb-2 mb-md-0">
                                <h6 class="mb-1">Khách hàng</h6>
                                <p class="text-muted mb-0"><?= $item['customer_name'] ?></p>
                            </div>
                            <div class="col-md-2 text-center text-md-start mb-2 mb-md-0">
                                <h6 class="mb-1">Địa chỉ</h6>
                                <p class="text-muted mb-0"><?= $item['address'] ?></p>
                            </div>
                            <div class="col-md-1 text-center text-md-start mb-2 mb-md-0">
                                <h6 class="mb-1">Giá</h6>
                                <p class="text-muted mb-0"><?= number_format($item['order_price'], 0, ',', '.') ?> đ</p>
                            </div>
                            <div class="col-md-1 text-center text-md-start mb-2 mb-md-0">
                                <h6 class="mb-1">Số lượng</h6>
                                <p class="text-muted mb-0"><?= $item['quantity'] ?></p>
                            </div>
                            <div class="col-md-2 text-center text-md-start mb-2 mb-md-0">
                                <h6 class="mb-1">Điện thoại</h6>
                                <p class="text-muted mb-0"><?= $item['phone'] ?></p>
                            </div>
                            <div class="col-md-2 text-center text-md-start mb-2 mb-md-0">
                                <h6 class="mb-1">Ngày đặt</h6>
                                <p class="text-muted mb-0"><?= date('d/m/Y H:i', strtotime($item['detail_created_at'])) ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            
            <div class="order-footer text-end">
                <h5 class="mb-0 d-inline-flex align-items-center">
                    <span class="me-3">Tổng tiền đơn hàng:</span>
                    <span class="h3 mb-0"><?= number_format($totalPrice, 0, ',', '.') ?> đ</span>
                </h5>
            </div>
        </div>
    </div>
</section>

<?php include('./views/admin/layout/footer.php'); ?>