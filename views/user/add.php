<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Thêm người dùng</h2>
<form method="POST" action="?action=user_add_post">
    <input type="text" name="user_name" placeholder="Tên người dùng" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Mật khẩu" required>
    <input type="text" name="address" placeholder="Địa chỉ">
    <input type="tel" name="phone" placeholder="Số điện thoại">
    <button type="submit">Thêm</button>
</form>
</body>
</html>