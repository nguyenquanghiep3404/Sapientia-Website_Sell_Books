<?php include('./views/admin/layout/header.php'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<style>
    /* Giữ nguyên các phần CSS cơ bản từ bản gốc */
    /* ... (phần CSS giữ nguyên như trong file gốc) ... */
    
    .avatar-preview {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #ddd;
        margin-bottom: 15px;
    }
    
    .role-badge {
        display: inline-block;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 0.85em;
    }
    
    .role-admin { background: #dc3545; color: white; }
    .role-user { background: #28a745; color: white; }
</style>

<section id="sidebar">
    <!-- Giữ nguyên phần sidebar như trong file gốc -->
    <!-- ... -->
</section>

<section id="content">
    <nav>
        <!-- Giữ nguyên phần nav như trong file gốc -->
        <!-- ... -->
    </nav>
    <main class="my-5">
        <div class="container">
            <h3 class="text-center mb-4">Chỉnh Sửa Người Dùng: <?= htmlspecialchars($user['name']) ?></h3>

            <form action="?action=editUser&id=<?= $user['user_id'] ?>" method="POST" enctype="multipart/form-data" style="max-width: 700px; margin: 0 auto;">
                <!-- Phần Avatar -->
                <!-- <div class="form-group mb-4 text-center">
                    <label for="avatar" class="d-block mb-3">
                        <?php if ($user['avatar']): ?>
                            <img src="<?= htmlspecialchars($user['avatar']) ?>" class="avatar-preview" alt="Avatar">
                        <?php else: ?>
                            <div class="avatar-preview bg-light d-flex align-items-center justify-content-center">
                                <i class="fas fa-user fa-3x text-secondary"></i>
                            </div>
                        <?php endif; ?>
                    </label>
                    <input type="file" name="avatar" id="avatar" class="form-control-file" accept="image/*">
                </div> -->

                <!-- Thông tin cơ bản -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="name">Họ và tên</label>
                            <input type="text" name="name" id="name" class="form-control" 
                                   value="<?= htmlspecialchars($user['name']) ?>" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" 
                                   value="<?= htmlspecialchars($user['email']) ?>" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="phone">Số điện thoại</label>
                            <input type="tel" name="phone" id="phone" class="form-control" 
                                   pattern="[0-9]{10}" value="<?= htmlspecialchars($user['phone']) ?>" required>
                            <small class="form-text text-muted">Ví dụ: 0912345678</small>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="role_id">Vai trò</label>
                            <select name="role_id" id="role_id" class="form-control">
                                <option value="0" <?= $user['role_id'] == 0 ? 'selected' : '' ?>>Quản trị viên</option>
                                <option value="1" <?= $user['role_id'] == 1 ? 'selected' : '' ?>>Người dùng</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="address">Địa chỉ</label>
                    <textarea name="address" id="address" class="form-control" 
                              rows="3"><?= htmlspecialchars($user['address']) ?></textarea>
                </div>

                <div class="form-group mb-4">
                    <label for="password">Mật khẩu mới</label>
                    <input type="password" name="password" id="password" class="form-control">
                    <small class="form-text text-muted">Để trống nếu không đổi mật khẩu</small>
                </div>
                <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">


                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-dark px-4"><i class="fas fa-save"></i> Cập nhật</button>
                    <a href="?action=all_register" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Quay lại</a>
                </div>
            </form>
        </div>
    </main>
</section>

<script>
    // Xử lý preview avatar
    document.getElementById('avatar').addEventListener('change', function(e) {
        const reader = new FileReader();
        reader.onload = function() {
            document.querySelector('.avatar-preview').src = reader.result;
        }
        reader.readAsDataURL(e.target.files[0]);
    });

    // Validate số điện thoại
    document.getElementById('phone').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
    });
</script>

<?php include('./views/admin/layout/footer.php'); ?>