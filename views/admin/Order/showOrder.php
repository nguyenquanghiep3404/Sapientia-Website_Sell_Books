<?php include ('./views/admin/layout/header.php'); ?>
<section id="sidebar">
    <a href="index.php" class="brand">
        <img src="../uploads/logo_owenstore.svg" alt="">
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
        <li >
            <a href="index.php?action=product">
                <i class='bx bxs-window-alt'></i>
                <span class="text">Sản Phẩm</span>
            </a>
        </li>
        <li class="active">
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

<h1 class="text-center text-primary mb-4">Danh sách đơn hàng</h1>

<table class="table table-hover table-bordered text-center align-middle">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Khách hàng</th>
            <th>Email</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
            <th>Ngày tạo</th>
            <th>Ngày cập nhật</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $order) { ?>
            <tr>
                    <td><?= $order['order_detail_id'] ?></td>
                    <td><?= $order['name'] ?></td>
                    <td><?= $order['email'] ?></td>
                    <td><?= $order['phone'] ?></td>
                    <td><?= $order['address'] ?></td>
                    <td><?= $order['created_at'] ?></td>
                    <td><?= $order['updated_at'] ?></td>
                    <td><?=$statusShow[$order['status']]?></td>
                    <td>
                        <a href="?action=showOrder&id=<?= $order['order_detail_id'] ?>" class="btn btn-primary btn-sm">Xem chi tiết</a>
                        <a href="?action=updateOrder&id=<?= $order['order_detail_id'] ?>" class="btn btn-warning btn-sm">Cập nhật</a>
                    </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include ('./views/admin/layout/footer.php'); ?>