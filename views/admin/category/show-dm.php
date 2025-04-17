
<?php include('./views/admin/layout/header.php'); ?>
<style>
    /* Custom Red Theme */
    :root {
        --primary-color: #dc3545;
        --primary-hover: #bb2d3b;
        --light-red: #fff5f5;
    }
    .table-hover tbody tr:hover {
        background-color: var(--light-red);
    }
    .btn-primary {
        background: var(--primary-color);
        border: none;
        transition: all 0.3s;
    }
    .btn-primary:hover {
        background: var(--primary-hover);
        transform: translateY(-1px);
    }
    .table thead {
        background: linear-gradient(135deg, #dc3545, #c82333);
        color: white;
    }
    .btn-danger {
        background: #dc3545;
        border: none;
    }
    .btn-warning {
        background: #ffc107;
        border: none;
    }
    .btn-success {
        background: #28a745;
        border: none;
    }
    .status-active {
        color: #28a745;
        font-weight: bold;
    }
    .status-inactive {
        color: #dc3545;
        font-weight: bold;
    }
    .table-bordered {
        border: 2px solid var(--primary-color);
    }
    .switch-mode::before {
        background: var(--primary-color);
    }
    .notification i {
        color: var(--primary-color);
    }
    .side-menu li.active a {
        background: var(--light-red);
        color: var(--primary-color) !important;
        border-left: 4px solid var(--primary-color);
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
    
    .side-menu li.active a {
        background: var(--light-red);
        color: var(--primary-color) !important;
        border-left: 4px solid var(--primary-color);
    }
    
    .side-menu li a:hover {
        color: var(--primary-color);
    }
    
    .nav-link {
        transition: all 0.3s ease;
    }
    nav{
        background-color: var(--primary-color);
    }
</style>

<section id="sidebar">
<a href="index.php" class="brand">
        <img src="../uploads/logo_owenstore.svg" alt="" class="brand-logo">
        <span class="brand-text">Sapientia Admin</span>
    </a>
    <ul class="side-menu top">
        <li>
            <a href="index.php?action=admin">
                <i class='bx bxs-home'></i>
                <span class="text">Trang Chủ</span>
            </a>
        </li>
        <li class="active">
            <a href="index.php?action=home-dm">
                <i class='bx bxs-category-alt'></i>
                <span class="text">Danh Mục</span>
            </a>
        </li>
        <li >
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
<nav>
        <i class='bx bx-menu'></i>
        <a href="?action=admin" class="nav-link">Trang Chủ</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Tìm Kiếm...">
                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <span class="num">8</span>
        </a>
        <div class="header_account">
                                <ul class="d-flex">
                                    <li class="header_search"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                                    <li class="account_link">
                                        <a href="#"><i class="icon-user icons"></i> Tài Khoản</a>
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
                                    </li>
                                    


                                </ul>
                            </div>
    </nav>
    <!-- NAVBAR -->
    <div class="container-fluid px-4">
        <h1 class="text-center text-danger mb-4 fw-bold">QUẢN LÝ DANH MỤC</h1>
        
        <div class="card border-danger shadow">
            <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Danh sách danh mục</h5>
                <a href="?action=create-dm" class="btn btn-light">
                    <i class='bx bx-plus'></i> Thêm mới
                </a>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle">
                        <thead class="bg-danger text-white">
                            <tr>
                                <th width="100">ID</th>
                                <th>Tên Danh Mục</th>
                                <th>Mô Tả</th>
                                <th width="120">Trạng Thái</th>
                                <th width="200">Thao Tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cate as $cates) { ?>
                                <tr>
                                    <td class="fw-bold">#<?= $cates['category_id'] ?></td>
                                    <td><?= $cates['name'] ?></td>
                                    <td class="text-muted"><?= $cates['description'] ?></td>
                                    <td>
                                        <span class="<?= $cates['status'] == 1 ? 'status-active' : 'status-inactive' ?>">
                                            <?= $cates['status'] == 1 ? 'Hiển thị' : 'Ẩn' ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="?action=update-dm&id=<?= $cates['category_id'] ?>" 
                                               class="btn btn-sm btn-warning text-white">
                                                <i class='bx bx-edit'></i>
                                            </a>
                                            <a href="?action=hide-dm&id=<?= $cates['category_id'] ?>" 
                                               onclick="return confirm('Bạn chắc chắn muốn ẩn?')" 
                                               class="btn btn-sm btn-danger">
                                                <i class='bx bx-hide'></i>
                                            </a>
                                            <a href="?action=show-dm&id=<?= $cates['category_id'] ?>" 
                                               onclick="return confirm('Bạn muốn hiển thị lại?')" 
                                               class="btn btn-sm btn-success">
                                                <i class='bx bx-show'></i>
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

<?php include('./views/admin/layout/footer.php'); ?>