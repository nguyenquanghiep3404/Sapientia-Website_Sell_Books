<?php include './views/client/layout/header.php' ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    :root {
        --primary-red: #e53935;
        --secondary-red: #c62828;
        --light-red: #ffcdd2;
        --hover-red: #b71c1c;
    }
    
    .profile-container {
        margin-top: 30px;
        margin-bottom: 50px;
    }
    
    .breadcrumb-custom {
        padding: 10px 15px;
        background-color: #f8f9fa;
        border-radius: 8px;
        margin-bottom: 25px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    
    .breadcrumb-custom:hover {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .breadcrumb-custom a {
        color: var(--primary-red);
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    
    .breadcrumb-custom a:hover {
        color: var(--hover-red);
        text-decoration: underline;
    }
    
    .sidebar-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        margin-bottom: 20px;
    }
    
    .sidebar-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    .sidebar-header {
        background: linear-gradient(135deg, var(--primary-red), var(--secondary-red));
        color: white;
        padding: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .sidebar-body {
        padding: 0;
    }
    
    .sidebar-list-item {
        border-left: 3px solid transparent;
        transition: all 0.3s ease;
        padding: 12px 15px;
    }
    
    .sidebar-list-item:hover {
        background-color: #f8f9fa;
        border-left: 3px solid var(--primary-red);
    }
    
    .sidebar-list-item strong {
        color: #333;
        font-size: 16px;
    }
    
    .sidebar-list-item a {
        color: #666;
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        padding: 5px 0;
    }
    
    .sidebar-list-item a:hover {
        color: var(--primary-red);
        transform: translateX(5px);
    }
    
    .profile-card {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .profile-card:hover {
        box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    .profile-header {
        background: linear-gradient(135deg, var(--primary-red), var(--secondary-red));
        color: white;
        padding: 20px;
        text-align: center;
        position: relative;
    }
    
    .profile-header h5 {
        margin: 0;
        font-weight: 700;
        letter-spacing: 1.5px;
    }
    
    .profile-header::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 3px;
        background-color: white;
        border-radius: 3px;
    }
    
    .profile-body {
        padding: 30px;
    }
    
    .form-control {
        border-radius: 8px;
        padding: 12px 15px;
        border: 1px solid #ddd;
        transition: all 0.3s ease;
    }
    
    .form-control:focus {
        border-color: var(--primary-red);
        box-shadow: 0 0 0 0.25rem rgba(229, 57, 53, 0.25);
    }
    
    .form-label {
        font-weight: 600;
        color: #555;
        margin-bottom: 8px;
    }
    
    .btn-save {
        background: linear-gradient(135deg, var(--primary-red), var(--secondary-red));
        border: none;
        border-radius: 8px;
        padding: 12px 30px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(229, 57, 53, 0.3);
    }
    
    .btn-save:hover {
        background: linear-gradient(135deg, var(--secondary-red), var(--hover-red));
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(229, 57, 53, 0.4);
    }
    
    .input-group-icon {
        position: relative;
    }
    
    .input-icon {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 15px;
        color: #999;
        z-index: 10;
    }
    
    .icon-input {
        padding-left: 45px;
    }
    
    /* Animation effects */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .animate-fade-in {
        animation: fadeIn 0.5s ease forwards;
    }
    
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }
    .delay-3 { animation-delay: 0.3s; }
    .delay-4 { animation-delay: 0.4s; }
    .delay-5 { animation-delay: 0.5s; }
</style>

<div class="container profile-container">
    <div class="breadcrumb-custom animate-fade-in">
        <a href="?action=client" onclick="saveClick('Trang chủ')">Trang chủ</a> /
        <span class="text-muted">Thông tin cá nhân</span>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="sidebar-card animate-fade-in delay-1">
                <div class="sidebar-header text-center">
                    <h5>Trung tâm cá nhân</h5>
                </div>
                <div class="sidebar-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item sidebar-list-item">
                            <strong><i class="fas fa-user me-2"></i> Tài khoản của tôi</strong>
                            <ul class="list-unstyled ms-4 mt-2">
                                <li><a href="?act=profile" onclick="saveClick('Thông tin của tôi')"><i class="fas fa-angle-right me-2"></i> Thông tin của tôi</a></li>
                                <li><a href="?act=changePass" onclick="saveClick('Thông tin của tôi')"><i class="fas fa-angle-right me-2"></i> Đổi mật khẩu</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item sidebar-list-item">
                            <strong><i class="fas fa-shopping-bag me-2"></i> Đơn hàng của tôi</strong>
                            <ul class="list-unstyled ms-4 mt-2">
                                <li><a href="?action=historic" onclick="saveClick('Tất cả các đơn hàng')"><i class="fas fa-angle-right me-2"></i> Tất cả các đơn hàng</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="profile-card animate-fade-in delay-2">
                <div class="profile-header">
                    <h5>THÔNG TIN NGƯỜI DÙNG</h5>
                </div>
                <div class="profile-body">
                    <form action="" method="post">
                        <div class="mb-4 animate-fade-in delay-2">
                            <label for="username" class="form-label"><i class="fas fa-user me-2"></i> Tên đăng nhập:</label>
                            <div class="input-group-icon">
                                <span class="input-icon"><i class="fas fa-user"></i></span>
                                <input type="text" id="username" name="name" class="form-control icon-input" value="<?= $show['name'] ?>" readonly>
                            </div>
                        </div>
                        <div class="mb-4 animate-fade-in delay-3">
                            <label for="email" class="form-label"><i class="fas fa-envelope me-2"></i> Email:</label>
                            <div class="input-group-icon">
                                <span class="input-icon"><i class="fas fa-envelope"></i></span>
                                <input type="email" id="email" name="email" class="form-control icon-input" value="<?= $show['email'] ?>" required>
                            </div>
                        </div>
                        <div class="mb-4 animate-fade-in delay-4">
                            <label for="phone" class="form-label"><i class="fas fa-phone me-2"></i> Số điện thoại:</label>
                            <div class="input-group-icon">
                                <span class="input-icon"><i class="fas fa-phone"></i></span>
                                <input type="tel" id="phone" name="phone" class="form-control icon-input" value="<?= $show['phone'] ?>" required>
                            </div>
                        </div>
                        <div class="mb-4 animate-fade-in delay-5">
                            <label for="address" class="form-label"><i class="fas fa-map-marker-alt me-2"></i> Địa chỉ:</label>
                            <div class="input-group-icon">
                                <span class="input-icon"><i class="fas fa-map-marker-alt"></i></span>
                                <input type="text" id="address" name="address" class="form-control icon-input" value="<?= $show['address'] ?>">
                            </div>
                        </div>
                        <div class="text-center animate-fade-in delay-5">
                            <button type="submit" name="btn_update" class="btn btn-save">
                                <i class="fas fa-save me-2"></i> LƯU THÔNG TIN
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Add animation on scroll -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add hover effect to form fields
        const formInputs = document.querySelectorAll('.form-control');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateX(5px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateX(0)';
            });
        });
        
        // Add pulse effect to save button
        const saveButton = document.querySelector('.btn-save');
        setInterval(() => {
            saveButton.classList.add('pulse');
            setTimeout(() => {
                saveButton.classList.remove('pulse');
            }, 1000);
        }, 3000);
    });
    
    // Add pulse animation
    document.head.insertAdjacentHTML('beforeend', `
        <style>
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.05); }
                100% { transform: scale(1); }
            }
            
            .pulse {
                animation: pulse 1s ease;
            }
        </style>
    `);
</script>

<?php include './views/client/layout/footer.php' ?>
