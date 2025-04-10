<!-- 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="card p-4 shadow-sm" style="max-width: 400px; width: 100%;">




<form action="?action=registerPost" method="POST">

    <h2 class="text-center mb-4">Đăng Ký</h2>



        <div class="form-group">

            <label for="name">Họ Và Tên</label>

            <input type="text" class="form-control bg-light" id="name" name="name" placeholder="Nhập họ và tên">

        </div>

        <div class="form-group">

            <label for="email">Email</label>

            <input type="email" class="form-control bg-light" id="email" name="email" placeholder="Nhập email">

        </div>

        <div class="form-group">

            <label for="name">Phone</label>

            <input type="text" class="form-control bg-light" id="phone" name="phone" placeholder="phone">

        </div>

        <div class="form-group">

            <label for="name">Địa chỉ</label>

            <input type="text" class="form-control bg-light" id="address" name="address" placeholder="nhập địa chỉ">

        </div>

        <div class="form-group position-relative">

            <label for="password">Mật Khẩu</label>

            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu">

            <span class="position-absolute" style="top: 50%; right: 10px;" onclick="togglePasswordVisibility('password', this)">

            </span>

        </div>

        <div class="form-group position-relative">

            <label for="confirm-password">Nhập Lại Mật Khẩu</label>

            <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Nhập lại mật khẩu">

            <span class="position-absolute" style="top: 50%; right: 10px;" onclick="togglePasswordVisibility('confirm-password', this)">

            </span>

        </div>

        <button type="submit" name="btn_dangky" class="btn btn-danger btn-block">Đăng Ký</button>

    <div class="text-center mt-3">

        <p class="mb-1">Bạn đã có tài khoản ? <a href="dang nhap.html" class="text-danger">Đăng Nhập Ngay</a></p>

        <a href="#" class="text-primary">Quên Mật Khẩu</a>

    </div>

</form> -->
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">


<!-- Mirrored from bootstrapdemos.wrappixel.com/spike/dist/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 17:33:54 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <!-- Core Css -->
  <link rel="stylesheet" href="https://bootstrapdemos.wrappixel.com/spike/dist/assets/css/styles.css" />
  <?php
  // Kiểm tra nếu có thông báo lỗi
  if (isset($_SESSION['login_error'])) {
      $error_message = $_SESSION['login_error'];
      unset($_SESSION['login_error']); // Xóa thông báo lỗi sau khi hiển thị
  } else {
      $error_message = '';
  }
  ?>
  <style>
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f8d7da;
            color: #721c24;
            padding: 20px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            display: none;
            z-index: 1000;
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
    </script>
  <title>Trang Đăng Nhập Codex. Mendoza</title>
</head>

<body>
<div class="popup" id="popup"></div>
  <!-- Preloader -->
  <div class="preloader">
    <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper" class="p-0 bg-white auth-customizer-none">
    <div class="auth-login position-relative overflow-hidden d-flex align-items-center justify-content-center px-7 px-xxl-0 rounded-3 h-n20">
      <div class="auth-login-shape position-relative w-100">
        <div class="auth-login-wrapper card mb-0 container position-relative z-1 h-100 mh-n100" data-simplebar>
          <div class="card-body">
            <a href="https://bootstrapdemos.wrappixel.com/spike/dist/main/index.html" class="">
              <img src="public/client/assets/img/logo/logo.png" class="light-logo" alt="Logo-Dark" />
              <img src="public/client/assets/img/logo/logo.png" class="dark-logo" alt="Logo-light" />

            </a>
            <div class="row align-items-center justify-content-around pt-6 pb-5">
              <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                <div class="text-center text-lg-start">
                  <img src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/images/backgrounds/login-security.png" alt="spike-img" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-6 col-xl-5">
                <h2 class="mb-6 fs-8 fw-bolder">Chào mừng bạn đã tới Codex. Mendoza</h2>
                <div class="position-relative text-center my-7">

                </div>
                <form action="?action=registerPost" method="POST">
                  <div class="mb-7">
                    <label for="email" class="form-label fw-bold">Tên Đăng ký</label>
                    <input type="text" class="form-control py-6" name="name" id="name" aria-describedby="emailHelp" placeholder="Nhập tên đăng ký">
                    
                  </div>

                  <div class="mb-7">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="text" class="form-control py-6" name="email" id="email" aria-describedby="emailHelp" placeholder="Nhập email">
                    
                  </div>
                  
                  <div class="mb-7">
                    <label for="email" class="form-label fw-bold">Phone</label>
                    <input type="text" class="form-control py-6" name="phone" id="phone" aria-describedby="emailHelp" placeholder="Nhập phone">
                    
                  </div>
                  
                  <div class="mb-7">
                    <label for="email" class="form-label fw-bold">Address</label>
                    <input type="text" class="form-control py-6" name="address" id="address" aria-describedby="emailHelp" placeholder="Nhập email">
                    
                  </div>

                  <div class="mb-9">
                    <label for="password" name="password" class="form-label fw-bold">Mật Khẩu</label>
                    <input type="password" class="form-control py-6" id="password" name="password" placeholder="Nhập mật khẩu của bạn">

                  </div>

                  <div class="d-md-flex align-items-center justify-content-between mb-7 pb-1">
                   
                  </div>
                  <button type="submit"  name="btn-login" class="btn btn-primary w-100 mb-7 rounded-pill">Đăng Nhập</button>
                  <div class="d-flex align-items-center">
                    <p class="fs-3 mb-0 fw-medium">Bạn chưa có tài khoản?</p>
                    <a class="text-primary fw-bold ms-2 fs-3" href="?action=register">Tạo Tài khoản</a>
                  </div>
                  <a href="?action=client" class="text-primary">Quay về Trang chủ</a>
                </form>
                <!-- phan hien thong bao -->
                <?php if (!empty($error_message)): ?>
                    <script>
                        // Hiển thị popup nếu có thông báo lỗi
                        showPopup("<?= htmlspecialchars($error_message) ?>");
                    </script>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <script>
  function handleColorTheme(e) {
    document.documentElement.setAttribute("data-color-theme", e);
  }
</script>
        <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          <i class="icon ti ti-settings fs-7"></i>
        </button>

        <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
            <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
              Settings
            </h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body h-n80" data-simplebar>
            <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="light-layout">
                <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
              </label>

              <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="dark-layout">
                <i class="icon ti ti-moon fs-7 me-2"></i>Dark
              </label>
            </div>

            <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="ltr-layout">
                <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
              </label>

              <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="rtl-layout">
                <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
              </label>
            </div>

            <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

            <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
              <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>

              <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>

              <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>

              <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>

              <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>

              <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>
            </div>

            <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <div>
                <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
                <label class="btn p-9 btn-outline-primary" for="vertical-layout">
                  <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
                </label>
              </div>
              <div>
                <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
                <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
                  <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
                </label>
              </div>
            </div>

            <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="boxed-layout">
                <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
              </label>

              <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="full-layout">
                <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
              </label>
            </div>

            <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <a href="javascript:void(0)" class="fullsidebar">
                <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
                <label class="btn p-9 btn-outline-primary" for="full-sidebar">
                  <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
                </label>
              </a>
              <div>
                <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar" autocomplete="off" />
                <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
                  <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
                </label>
              </div>
            </div>

            <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="card-with-border">
                <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
              </label>

              <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="card-without-border">
                <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
  </div>
  <!-- Import Js Files -->
  <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/js/theme/app.init.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/js/theme/theme.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/js/theme/app.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/spike/dist/assets/js/theme/feather.min.js"></script>

  <!-- solar icons -->
  <script src="public/client/assets/cdn.jsdelivr.net/npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
</body>


<!-- Mirrored from bootstrapdemos.wrappixel.com/spike/dist/main/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Dec 2024 17:33:55 GMT -->
</html>