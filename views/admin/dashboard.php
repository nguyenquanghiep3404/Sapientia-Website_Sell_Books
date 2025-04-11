<?php include('./views/admin/layout/header.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<style>
    /* Custom Red Theme */
    :root {
        --primary: #dc3545;
        --primary-light: #ff6b6b;
        --primary-dark: #c82333;
        
        --text: #ffffff;
    }

    /* Sidebar */
    /* #sidebar {
        background: var(--sidebar-bg);
    } */
    
    #sidebar .brand img {
        filter: invert(1);
        padding: 15px;
    }

    #sidebar .side-menu li a:hover {
        background: var(--primary);
        border-left: 4px solid var(--primary-light);
    }

    /* Navbar */
    nav {
        background: var(--primary);
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .switch-mode::before {
        background: var(--primary);
    }

    .notification .num {
        background: var(--primary-dark);
    }

    /* Box Info */
    .box-info li {
        background: #fff;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s;
        border-left: 4px solid var(--primary);
    }

    .box-info li:hover {
        transform: translateY(-5px);
    }

    .box-info i {
        font-size: 2.5rem;
        color: var(--primary);
    }

    /* Chart Container */
    .chart-container {
        background: #fff;
        border-radius: 15px;
        padding: 20px;
        margin-top: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Recent Orders Table */
    .recent-orders {
        background: #fff;
        border-radius: 15px;
        padding: 20px;
        margin-top: 30px;
    }

    .recent-orders table {
        width: 100%;
        border-collapse: collapse;
    }

    .recent-orders th {
        background: var(--primary);
        color: white;
        padding: 15px;
        text-align: left;
    }

    .recent-orders td {
        padding: 15px;
        border-bottom: 1px solid #eee;
    }

    .status {
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.9em;
    }

    .status.completed {
        background: #d4edda;
        color: #155724;
    }

    .status.pending {
        background: #fff3cd;
        color: #856404;
    }
    .chart-container {
    background: #fff;
    border-radius: 15px;
    padding: 20px;
    margin-top: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    position: relative;
    height: 400px;
}

.chart-container h3 {
    margin-bottom: 20px;
    color: #333;
    font-size: 1.4rem;
}
</style>

<!-- SIDEBAR -->
<section id="sidebar">
    <a href="index.php" class="brand">
        <img src="#### lay tu upload" alt="">
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="index.php?action=admin">
                <i class='bx bxs-home'></i>
                <span class="text">Trang Chủ</span>
            </a>
        </li>
        <li>

            <!-- <a href="index.php?act=home-dm"> -->
            <a href="index.php?action=home-dm">
                <i class='bx bxs-category-alt'></i>
                <span class="text">Danh Mục</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=product">
                <i class='bx bxs-window-alt'></i>
                <span class="text">Sản Phẩm</span>
            </a>
        </li>
        <li>
            <a href="?action=listOrders">
                <i class='bx bxs-calendar-check'></i>
                <span class="text">Đơn Hàng</span>
            </a>
        </li>
        <li>
            <a href="?action=showComment">
                <i class='bx bxs-chat'></i>
                <span class="text">Phản Hồi</span>
            </a>
        </li>
        <li>
            <a href="?action=all_register">
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

<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
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
                            <li><a href="?action=profile"><i class="fas fa-user-circle"></i> Xin Chào
                                    <?= ($_SESSION['name']['name']) ?>!</a></li>
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

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Thống kê</h1>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download'></i>
                <span class="text">Download PDF</span>
            </a>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text c-bill">
                    <h3><strong><?php echo $totalCart; ?></strong></h3>
                    <p>Đơn Hàng</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group'></i>
                <span class="text c-user">
                    <h3><strong><?php echo $totalUser; ?></strong></h3>
                    <p>Tài Khoản</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-category'></i>
                <span class="text c-product">
                    <h3><strong><?php echo $totalProducts; ?></strong></h3>
                    <p>Sản Phẩm</p>
                </span>
            </li>

        </ul>
        <ul class="box-info">
            <li>
                <i class='bx bxs-comment-detail'></i>
                <span class="text c-bill">
                    <h3><strong><?php echo $totalComment; ?></strong></h3>
                    <p>Bình luận</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-category-alt'></i>
                <span class="text c-user">
                    <h3><strong><?php echo $totalCategories; ?></strong></h3>
                    <p>Danh mục</p>
                </span>
            </li>


        </ul>
        <!-- Bổ sung phần biểu đồ và bảng -->
        <div class="chart-container">
            <h3>Doanh thu 7 ngày gần nhất</h3>
            <canvas id="revenueChart"></canvas>
        </div>

        <div class="recent-orders">
    <h3>Đơn hàng gần đây</h3>
    <table>
        <thead>
            <tr>
                <th>Mã ĐH</th>
                <th>Khách hàng</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Ngày đặt</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($recentOrders as $order): ?>
            <tr>
                <td>#<?= $order['order_detail_id'] ?></td>
                <td><?= htmlspecialchars($order['customer_name']) ?></td>
                <td><?= number_format($order['total'], 0, ',', '.') ?>₫</td>
                <td>
                    <span class="status <?= $order['status'] ?>">
                        <?= match($order['status']) {
                            'pending' => 'Đang chờ',
                            'processing' => 'Đang xử lý',
                            'completed' => 'Hoàn thành',
                            'cancelled' => 'Đã hủy',
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
    </main>
</section>



</main>
<!-- MAIN -->
</section>
<!-- CONTENT -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('revenueChart').getContext('2d');
    const chartData = <?= json_encode($chartData) ?>;

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
                        label: function(context) {
                            return ' ' + context.parsed.y.toLocaleString() + '₫';
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return value.toLocaleString() + '₫';
                        },
                        color: '#666'
                    },
                    grid: {
                        color: '#eee'
                    }
                },
                x: {
                    ticks: {
                        color: '#666'
                    },
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
});
</script>

<?php include('./views/admin/layout/footer.php'); ?>