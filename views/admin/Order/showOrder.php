<?php include ('./views/admin/layout/header.php'); ?>
<section id="sidebar">
    <a href="index.php" class="brand">
        <img src="../uploads/logo_owenstore.svg" alt="" class="brand-logo">
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
                <h2 class="card-title mb-0"><i class='bx bxs-calendar-check me-2'></i> Danh sách đơn hàng</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-danger">
                            <tr>
                                <th class="text-nowrap">ID</th>
                                <th class="text-nowrap">Khách hàng</th>
                                <th class="text-nowrap">Email</th>
                                <th class="text-nowrap">Điện thoại</th>
                                <th class="text-nowrap">Địa chỉ</th>
                                <th class="text-nowrap">Ngày tạo</th>
                                <th class="text-nowrap">Ngày cập nhật</th>
                                <th class="text-nowrap">Trạng thái</th>
                                <th class="text-nowrap">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order) { ?>
                                <tr class="animate__animated animate__fadeIn">
                                    <td><?= $order['order_detail_id'] ?></td>
                                    <td><?= $order['name'] ?></td>
                                    <td><?= $order['email'] ?></td>
                                    <td><?= $order['phone'] ?></td>
                                    <td><?= $order['address'] ?></td>
                                    <td><?= date('d/m/Y H:i', strtotime($order['created_at'])) ?></td>
                                    <td><?= date('d/m/Y H:i', strtotime($order['updated_at'])) ?></td>
                                    <td>
                                        <span class="badge 
                                            <?php 
                                                switch($order['status']) {
                                                    case 0: echo 'bg-secondary'; break;
                                                    case 1: echo 'bg-primary'; break;
                                                    case 2: echo 'bg-warning text-dark'; break;
                                                    case 3: echo 'bg-success'; break;
                                                    case 4: echo 'bg-danger'; break;
                                                    default: echo 'bg-info';
                                                }
                                            ?>">
                                            <?= $statusShow[$order['status']] ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="?action=showOrder&id=<?= $order['order_detail_id'] ?>" 
                                               class="btn btn-sm btn-outline-primary">
                                               <i class='bx bx-show-alt'></i> Xem
                                            </a>
                                            <a href="?action=updateOrder&id=<?= $order['order_detail_id'] ?>" 
                                               class="btn btn-sm btn-outline-warning">
                                               <i class='bx bx-edit-alt'></i> Cập nhật
                                            </a>
                                        </div>
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

<style>
    :root {
        --primary-color: #dc3545;
        --primary-hover: #bb2d3b;
        --sidebar-width: 280px;
    }
    
    body {
        background-color: #f8f9fa;
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
    
    .card {
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .btn-outline-primary {
        border-color: var(--primary-color);
        color: var(--primary-color);
    }
    
    .btn-outline-primary:hover {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .table-hover tbody tr:hover {
        background-color: rgba(220, 53, 69, 0.05);
    }
    
    .switch-mode {
        background-color: var(--primary-color);
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