<?php include('./views/admin/layout/header.php'); ?>

<div class="page-content">

<!-- Start Container Fluid -->
<div class="container-xxl">

     <div class="row">
          <div class="col-lg-12">
               <div class="card">
                    <div class="card-header">
                         <h4 class="card-title">Thêm người dùng mới</h4>
                    </div>
                    <div class="card-body">
                         <form method="POST" action="?action=user_add_post">
                              <div class="row">
                                   <div class="col-lg-6">
                                        <div class="mb-3">
                                             <label for="user_name" class="form-label">Tên người dùng</label>
                                             <input type="text" class="form-control" id="user_name" name="user_name" 
                                                  placeholder="Nhập tên người dùng" required>
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="mb-3">
                                             <label for="email" class="form-label">Email</label>
                                             <input type="email" class="form-control" id="email" name="email" 
                                                  placeholder="Nhập địa chỉ email" required>
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="mb-3">
                                             <label for="password" class="form-label">Mật khẩu</label>
                                             <input type="password" class="form-control" id="password" name="password" 
                                                  placeholder="Nhập mật khẩu" required>
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="mb-3">
                                             <label for="phone" class="form-label">Số điện thoại</label>
                                             <input type="tel" class="form-control" id="phone" name="phone" 
                                                  placeholder="Nhập số điện thoại">
                                        </div>
                                   </div>
                                   <div class="col-12">
                                        <div class="mb-3">
                                             <label for="address" class="form-label">Địa chỉ</label>
                                             <input type="text" class="form-control" id="address" name="address" 
                                                  placeholder="Nhập địa chỉ">
                                        </div>
                                   </div>
                              </div>
                              <div class="card-footer border-top">
                                   <a href="?action=user" class="btn btn-soft-primary">Quay lại</a>
                                   <button type="submit" class="btn btn-primary">Thêm người dùng</button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>

</div>
<!-- End Container Fluid -->

<!-- ========== Footer Start ========== -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <script>document.write(new Date().getFullYear())</script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                    href="https://1.envato.market/techzaa" class="fw-bold footer-text" target="_blank">Techzaa</a>
            </div>
        </div>
    </div>
</footer>
<!-- ========== Footer End ========== -->

</div>
<?php include('./views/admin/layout/footer.php'); ?>