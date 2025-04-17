<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký - Hệ Thống</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #dc3545;
            --primary-dark: #bb2d3b;
            --primary-light: #f8d7da;
        }
        
        body {
            background-color: #f8f9fa;
            height: 100vh;
        }
        
        .register-container {
            max-width: 900px;
            margin: 0 auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }
        
        .register-image {
            background: linear-gradient(135deg, var(--primary-color) 0%, #fd7e14 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            color: white;
            height: 100%;
        }
        
        .register-image img {
            max-width: 80%;
            height: auto;
        }
        
        .register-form {
            padding: 3rem 2rem;
            background: white;
        }
        
        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #ced4da;
            margin-bottom: 1.5rem;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            border-radius: 10px;
            padding: 12px 15px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        .register-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 2rem;
        }
        
        .register-subtitle {
            color: #6c757d;
            margin-bottom: 2rem;
        }
        
        .form-label {
            font-weight: 600;
            color: #495057;
        }
        
        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .alert {
            border-radius: 10px;
        }
        
        .login-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }
        
        .login-link:hover {
            text-decoration: underline;
        }
        
        .popup {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px 25px;
            border-left: 5px solid #dc3545;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1000;
            animation: slideIn 0.3s ease-out forwards;
        }
        
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @media (max-width: 768px) {
            .register-image {
                display: none;
            }
        }

        /* CSS cho input-group và các thành phần liên quan */
        .input-group {
            position: relative;
            display: flex;
            align-items: stretch;
        }

        .input-group-text {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            border-right: none;
            height: 100%;
            padding: 0.75rem;
        }

        .input-group .form-control {
            border-left: none;
            height: 58px; /* Đảm bảo chiều cao cố định */
            padding: 0.75rem 1.25rem;
            display: flex;
            align-items: center;
        }

        .input-group .input-group-text {
            height: 58px; /* Đảm bảo chiều cao cố định và bằng với form-control */
            width: 58px; /* Đảm bảo chiều rộng cố định */
            justify-content: center;
            align-items: center;
            display: flex;
        }

        /* CSS cho thông báo lỗi */
        .error-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 5px solid #dc3545;
            font-size: 14px;
            display: flex;
            align-items: center;
            animation: fadeIn 0.3s ease-out forwards;
        }

        .error-message i {
            margin-right: 10px;
            font-size: 18px;
        }

        .error-shake {
            animation: shake 0.5s cubic-bezier(.36,.07,.19,.97) both;
        }

        @keyframes shake {
            10%, 90% {
                transform: translate3d(-1px, 0, 0);
            }
            20%, 80% {
                transform: translate3d(2px, 0, 0);
            }
            30%, 50%, 70% {
                transform: translate3d(-4px, 0, 0);
            }
            40%, 60% {
                transform: translate3d(4px, 0, 0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .input-error {
            border-color: #dc3545 !important;
        }

        .input-group-text-error {
            border-color: #dc3545 !important;
            background-color: #f8d7da !important;
        }
    </style>
    <script>
        function showPopup(message) {
            const popup = document.getElementById('popup');
            popup.innerText = message;
            popup.style.display = 'block';

            // Tự động ẩn sau 3 giây
            setTimeout(() => {
                popup.style.display = 'none';
            }, 3000);
        }

        // Thêm hàm để hiển thị lỗi trên form
        function showFormError(message) {
            const errorDiv = document.getElementById('register-error');
            if (errorDiv) {
                errorDiv.innerHTML = '<i class="fas fa-exclamation-circle"></i> ' + message;
                errorDiv.style.display = 'flex';
                errorDiv.classList.add('error-shake');
                
                // Xóa hiệu ứng shake sau khi hoàn thành
                setTimeout(() => {
                    errorDiv.classList.remove('error-shake');
                }, 500);
            }
        }

        // Xóa thông báo lỗi khi người dùng bắt đầu nhập lại
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    const errorDiv = document.getElementById('register-error');
                    if (errorDiv) {
                        errorDiv.style.display = 'none';
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div class="popup" id="popup"></div>
    
    <div class="container d-flex align-items-center justify-content-center py-5">
        <div class="register-container row">
            <!-- Left Side - Image -->
            <div class="col-md-5 p-0">
            <div class="register-image fire-effect">
    <div class="register-image-content text-center">
        <h2 class="fw-bold mb-4">Chào mừng bạn đã tới Sapientia</h2>
        <p class="mb-4">Đăng ký để trở thành thành viên của chúng tôi</p>
        <img src="https://cdn-icons-png.flaticon.com/512/5087/5087579.png" alt="Register Illustration" class="img-fluid">
    </div>
</div>
            </div>
            
            <!-- Right Side - Form -->
            <div class="col-md-7 p-0">
                <div class="register-form">
                    <h2 class="register-title">Đăng Ký Tài Khoản</h2>
                    <p class="register-subtitle">Vui lòng điền thông tin đăng ký của bạn</p>
                    
                    <!-- Thêm phần hiển thị lỗi -->
                    <div id="register-error" class="error-message" style="display: none;"></div>
                    
                    <?php
                    // Kiểm tra nếu có lỗi đăng ký
                    if (!empty($error_message)): 
                    ?>
                    <script>
                        // Hiển thị lỗi trong form
                        document.addEventListener('DOMContentLoaded', function() {
                            showFormError("<?= htmlspecialchars($error_message) ?>");
                        });
                    </script>
                    <?php endif; ?>
                    
                    <form action="?action=registerPost" method="POST">
                        <!-- Tên đăng ký -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên Đăng Ký</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-muted"></i>
                                </div>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên đăng ký">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope text-muted"></i>
                                </div>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email">
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số Điện Thoại</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fas fa-phone text-muted"></i>
                                </div>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                        
                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa Chỉ</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fas fa-map-marker-alt text-muted"></i>
                                </div>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Nhập địa chỉ">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label">Mật Khẩu</label>
                            <div class="input-group">
                                <div class="input-group-text">
                                    <i class="fas fa-lock text-muted"></i>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu của bạn">
                            </div>
                        </div>
                        
                        <button type="submit" name="btn-login" class="btn btn-primary w-100 mb-4">
                            <i class="fas fa-user-plus me-2"></i> Đăng Ký
                        </button>
                        
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <p class="mb-0">Bạn đã có tài khoản? <a href="?action=login" class="login-link">Đăng nhập</a></p>
                            </div>
                            <div>
                                <a href="?action=client" class="text-primary">Quay về Trang chủ</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<style>
  /* Hiệu ứng lửa cháy */
.fire-effect {
    position: relative;
    overflow: hidden;
}

.fire-effect::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(
        45deg,
        rgba(255, 100, 0, 0.8) 0%,
        rgba(255, 200, 0, 0.8) 15%,
        rgba(255, 100, 0, 0.8) 30%,
        rgba(255, 200, 0, 0.8) 45%,
        rgba(255, 100, 0, 0.8) 60%,
        rgba(255, 200, 0, 0.8) 75%,
        rgba(255, 100, 0, 0.8) 90%
    );
    background-size: 200% 200%;
    animation: fireAnimation 3s linear infinite;
    opacity: 0.5;
    z-index: 1;
    border-radius: 50%;
    transform: rotate(45deg);
}

@keyframes fireAnimation {
    0% {
        background-position: 0% 50%;
        transform: rotate(0deg) scale(1);
    }
    25% {
        background-position: 50% 100%;
    }
    50% {
        background-position: 100% 50%;
        transform: rotate(180deg) scale(1.2);
    }
    75% {
        background-position: 50% 0%;
    }
    100% {
        background-position: 0% 50%;
        transform: rotate(360deg) scale(1);
    }
}

.register-image-content {
    position: relative;
    z-index: 2;
}
</style>