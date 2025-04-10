<?php include ('./views/admin/layout/header.php'); ?>
<div class="page-content">

<!-- Start Container Fluid -->
<div class="container-xxl">

     <div class="row">
          <div class="col-xl-3 col-lg-4">
               <div class="card">
                    <div class="card-body">
                         <div class="bg-light text-center rounded bg-light">
                              <img src="assets/images/product/p-1.png" alt="" class="avatar-xxl">
                         </div>
                         <div class="mt-3">
                              <h4>Chỉnh Sửa Tác Giả</h4>
                              <div class="row">
                                   <div class="col-lg-6 col-6">
                                        <p class="mb-1 mt-2">Trạng thái:</p>
                                        <h5 class="mb-0">Đang hoạt động</h5>
                                   </div>
                                   <div class="col-lg-6 col-6">
                                        <p class="mb-1 mt-2">ID:</p>
                                        <h5 class="mb-0"><?= htmlspecialchars($author['author_id'] ?? '') ?></h5>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="card-footer border-top">
                         <div class="row g-2">
                              <div class="col-lg-6">
                                   <button type="submit" form="editAuthorForm" class="btn btn-primary w-100">
                                        <iconify-icon icon="solar:pen-2-broken" class="me-1"></iconify-icon>
                                        Cập Nhật
                                   </button>
                              </div>
                              <div class="col-lg-6">
                                   <a href="<?= BASE_URL ?>index.php?action=author" class="btn btn-outline-secondary w-100">
                                        <iconify-icon icon="solar:undo-left-bold" class="me-1"></iconify-icon>
                                        Hủy
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <div class="col-xl-9 col-lg-8">
               <?php if (!isset($author) || empty($author)) : ?>
                    <div class="alert alert-danger">Không tìm thấy tác giả!</div>
               <?php else : ?>
                    <div class="card">
                         <div class="card-header">
                              <h4 class="card-title">Thông Tin Tác Giả</h4>
                         </div>
                         <div class="card-body">
                              <form action="<?= BASE_URL ?>index.php?action=postedit-author" method="POST" id="editAuthorForm">
                                   <input type="hidden" name="author_id" value="<?= htmlspecialchars($author['author_id']) ?>">
                                   
                                   <div class="row">
                                        <div class="col-lg-12">
                                             <div class="mb-3">
                                                  <label for="author_name" class="form-label">Tên Tác Giả <span class="text-danger">*</span></label>
                                                  <div class="input-group">
                                                       <span class="input-group-text bg-light-subtle">
                                                            <iconify-icon icon="solar:user-bold"></iconify-icon>
                                                       </span>
                                                       <input type="text" class="form-control <?= isset($errors['author_name']) ? 'is-invalid' : '' ?>" 
                                                              id="author_name" name="author_name" 
                                                              value="<?= htmlspecialchars($author['author_name']) ?>" required>
                                                  </div>
                                                  <?php if (isset($errors['author_name'])) : ?>
                                                       <div class="invalid-feedback d-block"><?= htmlspecialchars($errors['author_name']) ?></div>
                                                  <?php endif; ?>
                                             </div>
                                        </div>

                                        <div class="col-lg-12">
                                             <div class="mb-0">
                                                  <label for="bio" class="form-label">Tiểu Sử <span class="text-danger">*</span></label>
                                                  <textarea class="form-control bg-light-subtle <?= isset($errors['bio']) ? 'is-invalid' : '' ?>" 
                                                            id="bio" name="bio" rows="7"
                                                            required><?= htmlspecialchars($author['bio']) ?></textarea>
                                                  <?php if (isset($errors['bio'])) : ?>
                                                       <div class="invalid-feedback d-block"><?= htmlspecialchars($errors['bio']) ?></div>
                                                  <?php endif; ?>
                                             </div>
                                        </div>
                                        <div class="col-lg-12">
                                             <button type="submit" class="btn btn-primary w-100">Update</button>
                                        </div>
                                   </div>
                              </form>
                         </div>
                    </div>
               <?php endif; ?>
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
<?php include ('./views/admin/layout/footer.php'); ?>