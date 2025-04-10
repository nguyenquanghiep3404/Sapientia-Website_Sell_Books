<?php include ('./views/admin/layout/header.php'); ?>

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
                                                <li><a href="?action=profile"><i class="fas fa-user-circle"></i> Xin Chào <?= ($_SESSION['name']['name']) ?>!</a></li>
                                                <li><a href="?action=profile"><i class="fas fa-user-cog"></i> Quản Lý Tài Khoản</a></li>
                                                <?php if ($_SESSION['role_id'] == 0) { // Quản trị viên ?>
                                                    <li><a href="?action=client"><i class="fas fa-tools"></i> Về trang Client</a></li>
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


      
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->



<?php include ('./views/admin/layout/footer.php'); ?>
