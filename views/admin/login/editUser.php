<?php include('./views/admin/layout/header.php'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<style>
    /* Giữ nguyên các phần CSS cơ bản từ bản gốc */
    /* ... (phần CSS giữ nguyên như trong file gốc) ... */
    
    .avatar-preview {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #ddd;
        margin-bottom: 15px;
    }
    
    .role-badge {
        display: inline-block;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 0.85em;
    }
    
    .role-admin { background: #dc3545; color: white; }
    .role-user { background: #28a745; color: white; }
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
    <!-- Giữ nguyên phần sidebar như trong file gốc -->
    <!-- ... -->
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
    <main class="my-5">
        <div class="container">
            <h3 class="text-center mb-4">Chỉnh Sửa Người Dùng: <?= htmlspecialchars($user['name']) ?></h3>

            <form action="?action=editUser&id=<?= $user['user_id'] ?>" method="POST" enctype="multipart/form-data" style="max-width: 700px; margin: 0 auto;">
                <!-- Phần Avatar -->
                <!-- <div class="form-group mb-4 text-center">
                    <label for="avatar" class="d-block mb-3">
                        <?php if ($user['avatar']): ?>
                            <img src="<?= htmlspecialchars($user['avatar']) ?>" class="avatar-preview" alt="Avatar">
                        <?php else: ?>
                            <div class="avatar-preview bg-light d-flex align-items-center justify-content-center">
                                <i class="fas fa-user fa-3x text-secondary"></i>
                            </div>
                        <?php endif; ?>
                    </label>
                    <input type="file" name="avatar" id="avatar" class="form-control-file" accept="image/*">
                </div> -->

                <!-- Thông tin cơ bản -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="name">Họ và tên</label>
                            <input type="text" name="name" id="name" class="form-control" 
                                   value="<?= htmlspecialchars($user['name']) ?>" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" 
                                   value="<?= htmlspecialchars($user['email']) ?>" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" name="phone" id="phone" class="form-control" 
                                   pattern="[0-9]{10}" value="<?= htmlspecialchars($user['phone']) ?>" required>
                            <small class="form-text text-muted">Ví dụ: 0912345678</small>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="role_id">Vai trò</label>
                            <select name="role_id" id="role_id" class="form-control">
                                <option value="0" <?= $user['role_id'] == 0 ? 'selected' : '' ?>>Quản trị viên</option>
                                <option value="1" <?= $user['role_id'] == 1 ? 'selected' : '' ?>>Người dùng</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="address">Địa chỉ</label>
                    <textarea name="address" id="address" class="form-control" 
                              rows="3"><?= htmlspecialchars($user['address']) ?></textarea>
                </div>

                <div class="form-group mb-4">
                    <label for="password">Mật khẩu mới</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <small class="form-text text-muted">Để trống nếu không đổi mật khẩu</small>
                </div>
                <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">


                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-dark px-4"><i class="fas fa-save"></i> Cập nhật</button>
                    <a href="?action=all_register" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Quay lại</a>
                </div>
            </form>
        </div>
    </main>
</section>

<script>
    // Xử lý preview avatar
    document.getElementById('avatar').addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function() {
            document.querySelector('.avatar-preview').src = reader.result;
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    // Validate số điện thoại
    document.getElementById('phone').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
    });
</script>

<?php include('./views/admin/layout/footer.php'); ?>