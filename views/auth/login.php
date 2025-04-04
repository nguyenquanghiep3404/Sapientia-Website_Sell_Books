<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
     <meta charset="utf-8" />
     <title>Đăng nhập | Hệ thống quản lý</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="Hệ thống quản lý" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <link rel="shortcut icon" href="public/admin/assets_admin/images/favicon.ico">
     <link href="public/admin/assets_admin/css/vendor.min.css" rel="stylesheet" type="text/css" />
     <link href="public/admin/assets_admin/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="public/admin/assets_admin/css/app.min.css" rel="stylesheet" type="text/css" />
     <script src="public/admin/assets_admin/js/config.js"></script>
</head>

<body class="h-100">
     <div class="d-flex flex-column h-100 p-3">
          <div class="d-flex flex-column flex-grow-1">
               <div class="row h-100">
                    <div class="col-xxl-7">
                         <div class="row justify-content-center h-100">
                              <div class="col-lg-6 py-lg-5">
                                   <div class="d-flex flex-column h-100 justify-content-center">
                                        <div class="auth-logo mb-4">
                                             <a href="index.html" class="logo-dark">
                                                  <img src="public/admin/assets_admin/images/logo-dark.png" height="24" alt="logo dark">
                                             </a>
                                             <a href="index.html" class="logo-light">
                                                  <img src="public/admin/assets_admin/images/logo-light.png" height="24" alt="logo light">
                                             </a>
                                        </div>

                                        <h2 class="fw-bold fs-24">Đăng nhập</h2>

                                        <?php if (isset($_SESSION['error'])): ?>
                                            <div class="alert alert-danger"><?= $_SESSION['error']; unset($_SESSION['error']); ?></div>
                                        <?php endif; ?>

                                        <p class="text-muted mt-1 mb-4">Vui lòng nhập thông tin đăng nhập</p>

                                        <div class="mb-5">
                                             <form method="POST" action="?action=login_post" class="authentication-form">
                                                  <div class="mb-3">
                                                       <label class="form-label">Email</label>
                                                       <input type="email" name="email" class="form-control" 
                                                            placeholder="Nhập email" required>
                                                  </div>
                                                  <div class="mb-3">
                                                       <label class="form-label">Mật khẩu</label>
                                                       <input type="password" name="password" class="form-control" 
                                                            placeholder="Nhập mật khẩu" required>
                                                  </div>

                                                  <div class="mb-1 text-center d-grid">
                                                       <button class="btn btn-soft-primary" type="submit">Đăng nhập</button>
                                                  </div>
                                             </form>

                                             <p class="mt-3 fw-semibold no-span">Hoặc đăng nhập bằng</p>

                                             <div class="d-grid gap-2">
                                                  <a href="javascript:void(0);" class="btn btn-soft-dark"><i class="bx bxl-google fs-20 me-1"></i> Google</a>
                                                  <a href="javascript:void(0);" class="btn btn-soft-primary"><i class="bx bxl-facebook fs-20 me-1"></i> Facebook</a>
                                             </div>
                                        </div>

                                        <p class="text-center">Chưa có tài khoản?  
                                            <a href="?action=register" class="text-primary fw-bold ms-1">Đăng ký ngay</a>
                                        </p>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-xxl-5 d-none d-xxl-flex">
                         <div class="card h-100 mb-0 overflow-hidden">
                              <div class="d-flex flex-column h-100">
                                   <img src="public/admin/assets_admin/images/small/img-10.jpg" alt="" class="w-100 h-100">
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <script src="public/admin/assets_admin/js/vendor.js"></script>
     <script src="public/admin/assets_admin/js/app.js"></script>
</body>
</html>