<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Sách</th>
                <th>Ảnh</th>
                <th>Nhà xuất bản</th>
                <th>Tác giả</th>
                <th>Ngày xuất bản</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Giá sale</th>
                <th>Ngày Nhập</th>
                <th>Ngày chỉnh sửa</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listBook as $book): ?>
               <tr>
                <td><?= $book['book_id'] ?></td>
                <td><?= $book['book_title'] ?></td>
                <td><div style="height: 60px; width: 60px">
                            <img style="max-height:100%; max-width:100%;" src="<?=  $book['book_image'] ?>">
                        </div></td>
                <td>null</td>
                <td>null</td>
                <td><?= $book['release_date'] ?></td>
                <td><?= $book['category_name'] ?></td>
                <td><?= number_format($book['book_price'],0,',','.');  ?> đ</td>
                <td><?= number_format($book['book_sale_price'],0,',','.');  ?> đ</td>
                <td><?= date("d/m/Y", strtotime($book['created_at'])) ?></td>
                <td><?= date("d/m/Y", strtotime($book['updated_at'])) ?></td>
                <td><?= $book['status'] ?></td>
               </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- <?php
    var_dump($listBook) ?> -->
</body>
</html>