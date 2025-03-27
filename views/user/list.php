<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Danh sách người dùng</h2>
<a href="?action=user_add">Thêm người dùng</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($listUsers as $user): ?>
    <tr>
        <td><?= $user['user_id'] ?></td>
        <td><?= $user['user_name'] ?></td>
        <td><?= $user['email'] ?></td>
        <td><?= $user['address'] ?></td>
        <td><?= $user['phone'] ?></td>
        <td>
            <a href="?action=user_edit&id_user=<?= $user['user_id'] ?>">Sửa</a>
            <a href="?action=user_delete&id_user=<?= $user['user_id'] ?>" onclick="return confirm('Xóa người dùng này?')">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>