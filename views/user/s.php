<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Sửa thông tin người dùng</h2>
<form method="POST" action="?action=user_edit_post">
    <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
    <input type="text" name="user_name" value="<?= $user['user_name'] ?>" required>
    <input type="email" name="email" value="<?= $user['email'] ?>" required>
    <input type="password" name="password" placeholder="Để trống nếu không muốn đổi">
    <input type="text" name="address" value="<?= $user['address'] ?>">
    <input type="tel" name="phone" value="<?= $user['phone'] ?>">
    <button type="submit">Cập nhật</button>
</form>
</body>
</html>