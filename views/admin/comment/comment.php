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
    
    .form-input input {
        border: 1px solid rgba(255,255,255,0.3);
        background-color: rgba(255,255,255,0.2);
        color: white;
    }
    
    .form-input input::placeholder {
        color: rgba(255,255,255,0.7);
    }
    
    .header_account a {
        color: white !important;
    }
    
    .dropdown_account_link {
        background-color: white;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    
    .dropdown_account_link li a:hover {
        color: var(--primary-color) !important;
        background-color: rgba(220, 53, 69, 0.1);
    }
    
    /* Style for comment table */
    .card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    
    .card-header {
        background-color: var(--primary-color);
        color: white;
    }
    
    .table-responsive {
        overflow-x: auto;
    }
    
    .table {
        margin-bottom: 0;
    }
    
    .table thead {
        background-color: var(--primary-color);
        color: white;
    }
    
    .table th {
        border-bottom: none;
        font-weight: 500;
    }
    
    .table td, .table th {
        vertical-align: middle;
        padding: 12px 15px;
    }
    
    .btn-sm {
        padding: 5px 10px;
        font-size: 0.875rem;
    }
    
    .btn-danger {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .btn-danger:hover {
        background-color: var(--primary-hover);
        border-color: var(--primary-hover);
    }
    
    .animate__animated {
        animation-duration: 0.5s;
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
        <li>
            <a href="index.php?action=listOrders" class="nav-link">
                <i class='bx bxs-calendar-check'></i>
                <span class="text">Đơn Hàng</span>
            </a>
        </li>
        <li class="active">
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

    <div class="container-fluid py-4">
        <div class="card border-0 shadow">
            <div class="card-header bg-danger text-white">
                <h2 class="card-title mb-0"><i class='bx bxs-chat me-2'></i> Quản Lý Bình Luận</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-danger">
                            <tr>
                                <th>ID</th>
                                <th>Tên Khách Hàng</th>
                                <th>Email</th>
                                <th>Ngày Tạo</th>
                                <th>Nội Dung</th>
                                <th>Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($showComment as $item) { ?>
                            <tr class="animate__animated animate__fadeIn">
                                <td><?= $item['comment_id'] ?></td>
                                <td><?= $item['name'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= date('d/m/Y H:i', strtotime($item['create_at'])) ?></td>
                                <td><?= $item['comment'] ?></td>
                                <td>
                                    <a href="?action=delete_comment&id=<?= $item['comment_id'] ?>" 
                                       onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này?')" 
                                       class="btn btn-sm btn-danger">
                                       <i class='bx bx-trash'></i> Xóa
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ('./views/admin/layout/footer.php'); ?>