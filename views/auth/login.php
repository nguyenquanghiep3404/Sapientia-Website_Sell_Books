<h2>Đăng nhập</h2>
<?php if (isset($_SESSION['error'])): ?>
    <p style="color: red"><?= $_SESSION['error']; unset($_SESSION['error']); ?></p>
<?php endif; ?>
<form method="POST" action="?action=login_post">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <button type="submit">Đăng nhập</button>
</form>
<a href="?action=register">Đăng ký</a>
