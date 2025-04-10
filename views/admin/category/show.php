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
                              <h4 class="text-center">Chi Tiết Danh Mục</h4>
                              <div class="d-flex justify-content-center mt-2">
                                   <span class="badge bg-success">Đang hoạt động</span>
                              </div>
                         </div>
                    </div>
                    <div class="card-footer border-top">
                         <div class="row g-2">
                              <div class="col-lg-6">
                                   <a href="<?= BASE_URL . 'index.php?action=category' ?>" class="btn btn-secondary w-100">
                                        <iconify-icon icon="solar:undo-left-bold" class="me-1"></iconify-icon>Quay lại</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <div class="col-xl-9 col-lg-8">
               <?php if (!isset($category) || empty($category)) : ?>
                    <div class="alert alert-danger">Không tìm thấy danh mục!</div>
               <?php else : ?>
                    <div class="card">
                         <div class="card-header">
                              <h4 class="card-title">Thông Tin Chi Tiết</h4>
                         </div>
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-lg-12">
                                        <div class="mb-4">
                                             <h5 class="mb-3">Tên Danh Mục</h5>
                                             <div class="p-3 bg-light-subtle rounded">
                                                  <p class="mb-0 fs-16"><?= htmlspecialchars($category['category_name'] ?? 'Không có dữ liệu') ?></p>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-lg-12">
                                        <div class="mb-4">
                                             <h5 class="mb-3">Mô Tả</h5>
                                             <div class="p-3 bg-light-subtle rounded">
                                                  <p class="mb-0 fs-16"><?= htmlspecialchars($category['description'] ?? 'Không có mô tả') ?></p>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-lg-6">
                                        <div class="mb-4">
                                             <h5 class="mb-3">Ngày Tạo</h5>
                                             <div class="p-3 bg-light-subtle rounded">
                                                  <p class="mb-0 fs-16"><?= htmlspecialchars($category['created_at'] ?? 'Chưa cập nhật') ?></p>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="col-lg-6">
                                        <div class="mb-4">
                                             <h5 class="mb-3">Ngày Cập Nhật</h5>
                                             <div class="p-3 bg-light-subtle rounded">
                                                  <p class="mb-0 fs-16"><?= htmlspecialchars($category['updated_at'] ?? 'Chưa cập nhật') ?></p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
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