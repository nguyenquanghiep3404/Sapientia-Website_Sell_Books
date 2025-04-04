<?php include('./views/admin/layout/header.php'); ?>

<div class="page-content">

<!-- Start Container Fluid -->
<div class="container-xxl">

     <div class="row">
          <div class="col-lg-12">
               <div class="card">
                    <div class="card-header">
                         <h4 class="card-title">Sửa thông tin người dùng</h4>
                    </div>
                    <div class="card-body">
                         <form method="POST" action="?action=user_edit_post">
                              <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
                              <div class="row">
                                   <div class="col-lg-6">
                                        <div class="mb-3">
                                             <label class="form-label">Tên người dùng</label>
                                             <input type="text" class="form-control" name="user_name" 
                                                  value="<?= $user['user_name'] ?>" required>
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="mb-3">
                                             <label class="form-label">Email</label>
                                             <input type="email" class="form-control" name="email"
                                                  value="<?= $user['email'] ?>" required>
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="mb-3">
                                             <label class="form-label">Mật khẩu mới</label>
                                             <input type="password" class="form-control" name="password" 
                                                  placeholder="Để trống nếu không đổi">
                                        </div>
                                   </div>
                                   <div class="col-lg-6">
                                        <div class="mb-3">
                                             <label class="form-label">Số điện thoại</label>
                                             <input type="tel" class="form-control" name="phone"
                                                  value="<?= $user['phone'] ?>">
                                        </div>
                                   </div>
                                   <div class="col-12">
                                        <div class="mb-3">
                                             <label class="form-label">Địa chỉ</label>
                                             <input type="text" class="form-control" name="address"
                                                  value="<?= $user['address'] ?>">
                                        </div>
                                   </div>
                              </div>
                              <div class="card-footer border-top">
                                   <a href="?action=user" class="btn btn-soft-primary">Quay lại</a>
                                   <button type="submit" class="btn btn-primary">Cập nhật thông tin</button>
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