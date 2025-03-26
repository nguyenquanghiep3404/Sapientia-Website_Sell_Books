<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Thêm mới sách</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <label for="">Chọn danh mục</label>
            <select name="category_id" id="">
                <option value="0" selected disabled>Chọn Danh Mục</option>
                <?php foreach ($listCategories as $cate) :?>
                    <option value="<?= $cate['category_id'] ?>"><?= $cate['category_name'] ?></option>
                <?php endforeach; ?> 
            </select>
        </div>
        <div>
            <label for="name">Tên sách</label>
            <input type="text" name="book_title" >
        </div>
        <div>
            <label for=""> Hình ảnh</label>
            <input type="file" name="book_image" >
        </div>
        <div>
            <label for="">Bộ sưu tập</label>
            <input type="file" name="gallery[]" multiple>
        </div>
        <div> 
            <label for="">Mô tả sách</label>
            <input type="text" name="description">
        </div>
        <div>
            <label for="">Ngày xuất bản</label>
            <input type="date" name="release_date">
        </div>
        <div> 
            <label for="" name="">Giá</label>
            <input type="text" name="book_price">
        </div>
        <div>
            <label for="">Giá Sale</label> 
            <input type="text" name="book_sale_price">
        </div>
        <div>
            <input type="submit" name="themmoi" value="Thêm mới sách">
        </div>
    </form>
    <!-- <?php echo "<pre>";
print_r($_FILES);
echo "</pre>";
exit();
 ?> -->
    
</body>
</html>