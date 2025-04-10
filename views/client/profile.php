<?php include './views/client/layout/header.php' ?>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
 
<div class="container my-4">
    <div class="breadcrumb">
        <a href="?action=client" onclick="saveClick('Trang chủ')">Trang chủ</a> /
        <span class="text-muted">Thông tin cá nhân</span>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h5>Trung tâm cá nhân</h5>
                </div>
                <div class="card-body p-2">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Tài khoản của tôi</strong>
                            <ul class="list-unstyled ms-3">
                                <li><a href="?act=profile" onclick="saveClick('Thông tin của tôi')">Thông tin của tôi</a></li>
                                <li><a href="?act=changePass" onclick="saveClick('Thông tin của tôi')">Đổi mật khẩu</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <strong>Đơn hàng của tôi</strong>
                            <ul class="list-unstyled ms-3">
                                <li><a href="?action=historic" onclick="saveClick('Tất cả các đơn hàng')">Tất cả các đơn hàng</a></li>
                                <!-- <li><a href="#" onclick="saveClick('Đơn hàng xử lý')">Đơn hàng đang xử lý</a></li>
                                <li><a href="#" onclick="saveClick('Đơn hàng chờ lấy hàng')">Đơn hàng chờ lấy hàng</a></li>
                                <li><a href="#" onclick="saveClick('Đơn hàng đang giao')">Đơn hàng đang giao</a></li>
                                <li><a href="#" onclick="saveClick('Đơn hàng đã giao')">Đơn hàng đã giao</a></li>
                                <li><a href="#" onclick="saveClick('Đơn hàng đã hủy')">Đơn hàng đã hủy</a></li>
                                <li><a href="#" onclick="saveClick('Đơn hàng trả lại')">Đơn hàng trả lại</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-success text-white text-center">
                    <h5>THÔNG TIN NGƯỜI DÙNG</h5>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Tên đăng nhập:</label>
                            <input type="text" id="username" name="name" class="form-control" value="<?= $show['name'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?= $show['email'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại:</label>
                            <input type="tel" id="phone" name="phone" class="form-control" value="<?= $show['phone'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ:</label>
                            <input type="text" id="address" name="address" class="form-control" value="<?= $show['address'] ?>">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="btn_update" class="btn btn-primary">LƯU</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './views/client/layout/footer.php' ?>