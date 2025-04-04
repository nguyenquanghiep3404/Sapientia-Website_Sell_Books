<?php include('./views/admin/layout/header.php'); ?>

<div class="page-content">
    <!-- Start Container Fluid -->
    <div class="container-xxl">
        <div class="card overflow-hiddenCoupons">
            <!-- Thêm nút và tiêu đề -->
            <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                <h2 class="mb-0">Danh sách người dùng</h2>
                <a href="?action=user_add" class="btn btn-soft-primary">
                    <iconify-icon icon="solar:user-plus-bold" class="align-middle"></iconify-icon> 
                    Thêm người dùng
                </a>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover table-centered">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Điện thoại</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listUsers as $user): ?>
                            <tr>
                                <td><?= $user['user_id'] ?></td>
                                <td><?= $user['user_name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['address'] ?></td>
                                <td><?= $user['phone'] ?></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <!-- Nút Sửa -->
                                        <a href="?action=user_edit&id_user=<?= $user['user_id'] ?>" 
                                           class="btn btn-soft-primary btn-sm"
                                           title="Sửa">
                                            <iconify-icon icon="solar:pen-2-broken"></iconify-icon>
                                        </a>
                                        
                                        <!-- Nút Xóa -->
                                        <a href="?action=user_delete&id_user=<?= $user['user_id'] ?>" 
                                           class="btn btn-soft-danger btn-sm"
                                           title="Xóa"
                                           onclick="return confirm('Bạn chắc chắn muốn xóa người dùng này?')">
                                            <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"></iconify-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>

            <!-- Phân trang -->
            <div class="row g-0 align-items-center justify-content-between text-center text-sm-start p-3 border-top">
                <div class="col-sm">
                    <div class="text-muted">
                        Hiển thị <span class="fw-semibold">10</span> của <span class="fw-semibold">59</span> Kết quả
                    </div>
                </div>
                <div class="col-sm-auto mt-3 mt-sm-0">
                    <ul class="pagination m-0">
                        <li class="page-item">
                            <a href="#" class="page-link"><i class='bx bx-left-arrow-alt'></i></a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link"><i class='bx bx-right-arrow-alt'></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- end card -->
    </div>
    <!-- End Container Fluid -->

    <!-- ========== Footer Start ========== -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <script>document.write(new Date().getFullYear())</script> &copy; Larkon. Crafted by 
                    <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> 
                    <a href="https://1.envato.market/techzaa" class="fw-bold footer-text" target="_blank">Techzaa</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== Footer End ========== -->
</div>
<?php include('./views/admin/layout/footer.php'); ?>