<?php include('./views/admin/layout/header.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    :root {
        --primary-color: #dc3545;
        --primary-hover: #c82333;
        --primary-light: #f8d7da;
        --text-color: #343a40;
        --sidebar-width: 280px;
        --transition-speed: 0.3s;
    }
    
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: var(--text-color);
        overflow-x: hidden;
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
    /* Content */
    #content {
        position: relative;
        width: calc(100% - var(--sidebar-width));
        left: var(--sidebar-width);
        transition: all var(--transition-speed) ease;
    }
    
    #sidebar.hide ~ #content {
        width: calc(100% - 60px);
        left: 60px;
    }
    
    
    
    /* Dashboard Content */
    .head-title {
        margin: 1.5rem 0;
    }
    
    .head-title h1 {
        color: var(--text-color);
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 0.5rem;
    }
    
    /* Stats Cards */
    .box-info {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
        padding: 0;
        list-style: none;
    }
    
    .box-info li {
        background: white;
        border-radius: 10px;
        padding: 1.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: transform var(--transition-speed) ease, box-shadow var(--transition-speed) ease;
        border-left: 4px solid var(--primary-color);
        display: flex;
        align-items: center;
    }
    
    .box-info li:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .box-info i {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-right: 1.5rem;
    }
    
    .box-info .text {
        flex: 1;
    }
    
    .box-info h3 {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--text-color);
        margin-bottom: 0.25rem;
    }
    
    .box-info p {
        color: #6c757d;
        font-size: 0.9rem;
        margin: 0;
    }
    
    /* Chart container - keeping as is per request */
    .chart-container {
        background: #fff;
        border-radius: 15px;
        padding: 20px;
        margin-top: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        position: relative;
        height: 400px;
    }

    .chart-container h3 {
        margin-bottom: 20px;
        color: #333;
        font-size: 1.4rem;
    }
    
    /* Recent Orders */
    .recent-orders {
        background: white;
        border-radius: 10px;
        padding: 1.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
    
    .recent-orders h3 {
        color: var(--text-color);
        font-weight: 600;
        margin-bottom: 1.5rem;
        font-size: 1.4rem;
    }
    
    .recent-orders table {
        width: 100%;
        border-collapse: collapse;
    }
    
    .recent-orders th {
        background-color: var(--primary-color);
        color: white;
        padding: 0.75rem 1rem;
        text-align: left;
        font-weight: 600;
    }
    
    .recent-orders th:first-child {
        border-top-left-radius: 8px;
    }
    
    .recent-orders th:last-child {
        border-top-right-radius: 8px;
    }
    
    .recent-orders td {
        padding: 0.75rem 1rem;
        border-bottom: 1px solid #eee;
        vertical-align: middle;
    }
    
    .recent-orders tr:hover {
        background-color: rgba(0,0,0,0.01);
    }
    
    .recent-orders tr:last-child td {
        border-bottom: none;
    }
    
    .status {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
    }
    
    .status-0 { background-color: #fff3cd; color: #856404; } /* Pending */
    .status-1 { background-color: #f8d7da; color: #721c24; } /* Cancelled */
    .status-2 { background-color: #cce5ff; color: #004085; } /* Confirmed */
    .status-3 { background-color: #e2e3e5; color: #383d41; } /* Shipping */
    .status-4 { background-color: #d4edda; color: #155724; } /* Completed */
    
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
    
    /* Responsive */
    @media screen and (max-width: 768px) {
        #sidebar {
            width: 60px;
        }
        
        #sidebar .brand-text,
        #sidebar .side-menu li a .text {
            opacity: 0;
            display: none;
        }
        
        #content {
            width: calc(100% - 60px);
            left: 60px;
        }
        
        .box-info {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }
    }
    
    /* Dark mode toggle */
    .form-check-input {
        cursor: pointer;
        width: 40px;
        height: 20px;
    }
    
    .form-check-input:checked {
        background-color: #212529;
        border-color: #212529;
    }
    
    /* Dark mode styles */
    body.dark {
        background-color: #1a1d21;
        color: #e9ecef;
    }
    
    body.dark #sidebar {
        background: #212529;
    }
    
    body.dark .brand {
        border-bottom: 1px solid #2c3035;
    }
    
    body.dark .side-menu li a {
        color: #e9ecef;
    }
    
    body.dark .side-menu li.active a {
        background: rgba(220, 53, 69, 0.2);
    }
    
    body.dark .side-menu li a:hover {
        background: rgba(220, 53, 69, 0.1);
    }
    
    body.dark .box-info li,
    body.dark .recent-orders,
    body.dark .chart-container {
        background: #212529;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    
    body.dark .box-info h3,
    body.dark .recent-orders h3,
    body.dark .chart-container h3,
    body.dark .head-title h1 {
        color: #e9ecef;
    }
    
    body.dark .box-info p {
        color: #adb5bd;
    }
    
    body.dark .recent-orders td {
        border-bottom: 1px solid #2c3035;
    }
    
    body.dark .dropdown_account_link {
        background: #212529;
    }
    
    body.dark .dropdown_account_link li a {
        color: #e9ecef;
    }
    
    body.dark .dropdown_account_link li a:hover {
        background-color: rgba(220, 53, 69, 0.1);
    }
</style>

<!-- SIDEBAR -->
<section id="sidebar">
    <a href="index.php" class="brand">
        <img src="../uploads/logo_owenstore.svg" alt="" class="brand-logo">
        <span class="brand-text">Sapientia Admin</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="index.php?action=admin" class="nav-link">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Trang Chủ</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=home-dm" class="nav-link">
                <i class='bx bxs-category'></i>
                <span class="text">Danh Mục</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=product" class="nav-link">
                <i class='bx bxs-shopping-bag'></i>
                <span class="text">Sản Phẩm</span>
            </a>
        </li>
        <li>
            <a href="?action=listOrders" class="nav-link">
                <i class='bx bxs-cart'></i>
                <span class="text">Đơn Hàng</span>
            </a>
        </li>
        <li>
            <a href="?action=showComment" class="nav-link">
                <i class='bx bxs-message-dots'></i>
                <span class="text">Phản Hồi</span>
            </a>
        </li>
        <li>
            <a href="?action=all_register" class="nav-link">
                <i class='bx bxs-user'></i>
                <span class="text">Tài Khoản</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="index.php?action=logout" class="logout nav-link">
                <i class='bx bxs-log-out'></i>
                <span class="text">Đăng Xuất</span>
            </a>
        </li>
    </ul>
</section>

<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
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

    <!-- MAIN CONTENT -->
    <div class="container-fluid py-4">
        <div class="head-title">
            <h1>Thống Kê Tổng Quan</h1>
            <p class="text-muted">Xem tổng quan về hoạt động của cửa hàng</p>
        </div>

        <!-- Stats Cards -->
        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check'></i>
                <div class="text">
                    <h3><?= number_format($totalCart) ?></h3>
                    <p>Đơn Hàng</p>
                </div>
            </li>
            <li>
                <i class='bx bxs-group'></i>
                <div class="text">
                    <h3><?= number_format($totalUser) ?></h3>
                    <p>Tài Khoản</p>
                </div>
            </li>
            <li>
                <i class='bx bxs-shopping-bag'></i>
                <div class="text">
                    <h3><?= number_format($totalProducts) ?></h3>
                    <p>Sản Phẩm</p>
                </div>
            </li>
            <li>
                <i class='bx bxs-message-alt-detail'></i>
                <div class="text">
                    <h3><?= number_format($totalComment) ?></h3>
                    <p>Bình Luận</p>
                </div>
            </li>
            <li>
                <i class='bx bxs-category'></i>
                <div class="text">
                    <h3><?= number_format($totalCategories) ?></h3>
                    <p>Danh Mục</p>
                </div>
            </li>
        </ul>

        <!-- Revenue Chart - Keeping as is per request -->
        <div class="chart-container">
            <h3>Doanh Thu 7 Ngày Gần Nhất</h3>
            <canvas id="revenueChart" height="300"></canvas>
        </div>

        <!-- Recent Orders -->
        <div class="recent-orders">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="m-0">Đơn Hàng Gần Đây</h3>
                <a href="?action=listOrders" class="btn btn-outline-danger btn-sm">
                    Xem tất cả
                    <i class='bx bx-right-arrow-alt'></i>
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Mã ĐH</th>
                            <th>Khách Hàng</th>
                            <th>Tổng Tiền</th>
                            <th>Trạng Thái</th>
                            <th>Ngày Đặt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recentOrders as $order): ?>
                        <tr>
                            <td>#<?= $order['order_detail_id'] ?></td>
                            <td><?= htmlspecialchars($order['customer_name']) ?></td>
                            <td><?= number_format($order['total'], 0, ',', '.') ?>₫</td>
                            <td>
                                <span class="status status-<?= (int) $order['status'] ?>">
                                    <?= match ((int) $order['status']) {
                                        0 => 'Đang chờ',
                                        1 => 'Đã hủy',
                                        2 => 'Đã xác nhận',
                                        3 => 'Đang vận chuyển',
                                        4 => 'Hoàn thành',
                                        default => 'Chưa xác định'
                                    } ?>
                                </span>
                            </td>
                            <td><?= date('d/m/Y H:i', strtotime($order['created_at'])) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Toggle sidebar
    const menuToggle = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');
    
    menuToggle.addEventListener('click', function() {
        sidebar.classList.toggle('hide');
    });
    
    // Toggle dropdown
    const dropdownToggle = document.getElementById('dropdownUser');
    const dropdownMenu = document.querySelector('.dropdown_account_link');
    
    dropdownToggle.addEventListener('click', function(e) {
        e.preventDefault();
        dropdownMenu.classList.toggle('show');
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
        if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
    
    // Dark mode toggle
    const switchMode = document.getElementById('switch-mode');
    
    switchMode.addEventListener('change', function() {
        document.body.classList.toggle('dark', this.checked);
        localStorage.setItem('dark-mode', this.checked ? 'true' : 'false');
    });
    
    // Check for saved dark mode preference
    if (localStorage.getItem('dark-mode') === 'true') {
        switchMode.checked = true;
        document.body.classList.add('dark');
    }
    
    // Chart
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('revenueChart').getContext('2d');
        const chartData = <?= json_encode($chartData) ?>;
        
        // Set chart font color based on dark mode
        Chart.defaults.color = document.body.classList.contains('dark') ? '#e9ecef' : '#666';

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: chartData.labels,
                datasets: [{
                    label: 'Doanh thu (VND)',
                    data: chartData.data,
                    borderColor: '#dc3545',
                    backgroundColor: 'rgba(220, 53, 69, 0.1)',
                    borderWidth: 2,
                    pointRadius: 4,
                    pointBackgroundColor: '#dc3545',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return ' ' + context.parsed.y.toLocaleString() + '₫';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function (value) {
                                return value.toLocaleString() + '₫';
                            }
                        },
                        grid: {
                            color: document.body.classList.contains('dark') ? 'rgba(255, 255, 255, 0.1)' : '#eee'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
        
        // Update chart colors when dark mode changes
        switchMode.addEventListener('change', function() {
            window.location.reload();
        });
    });
</script>

<?php include('./views/admin/layout/footer.php'); ?>
