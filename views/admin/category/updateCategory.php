
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

    <h1 class="text-center text-success mb-4">Update Category</h1>
    <form action="?action=updatePost-dm&id=<?= $cateEdit['category_id'] ?>" method="POST" class="bg-light p-4 rounded shadow">
        <div class="mb-3">
            <label for="">ID:</label>
            <input type="text" id="id" disabled>
        </div>
        <div class="mb-3">
            <label for="">Name:</label>
            <input type="text" id="name" name="name" value="<?= $cateEdit['name'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="">Description:</label>
            <input type="text" id="description" name="description" value="<?= $cateEdit['description'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="">Status:</label>
            <input type="text" disabled>
        </div>
        <div  class="d-flex justify-content-center">
            <input type="submit" value="Update" class="btn btn-success w-50">
        </div>
    </form>
    <?php include('./views/admin/layout/footer.php'); ?>