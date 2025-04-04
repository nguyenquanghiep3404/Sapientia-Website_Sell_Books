<h2>Đăng ký</h2>
<?php if (isset($_SESSION['error'])): ?>
    <p style="color: red"><?= $_SESSION['error']; unset($_SESSION['error']); ?></p>
<?php endif; ?>
<form method="POST" action="?action=register_post">
    <input type="text" name="user_name" placeholder="Tên người dùng" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <input type="text" name="address" placeholder="Địa chỉ">
    <input type="text" name="phone" placeholder="Số điện thoại">
    <button type="submit">Đăng ký</button>
</form>
<a href="?action=login">Đăng nhập</a>
