<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><use href="#mingcute--sad-line"/></svg>
<style>
    body {
        background-color: #fff9f9;
    }
    h2 {
        color: #d32f2f;
        font-weight: bold;
        padding: 15px 0;
        border-bottom: 2px solid #ffcdd2;
        margin-bottom: 20px;
    }
    .product-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        padding: 20px;
    }
    .product-item {
        border: 1px solid #ffcdd2;
        padding: 15px;
        width: 270px;
        background: white;
        border-radius: 8px;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .product-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(211, 47, 47, 0.1);
    }
    .product-item h3 {
        font-size: 18px;
        margin: 0 0 10px;
        color: #333;
    }
    .product-item p {
        font-size: 14px;
    }
    .current_price {
        color: #d32f2f;
        font-weight: bold;
        font-size: 16px;
    }
    .old_price {
        color: #757575;
        text-decoration: line-through;
        font-size: 14px;
        margin-left: 8px;
    }
    .btn-primary {
        background-color: #d32f2f;
        border-color: #d32f2f;
        padding: 8px 20px;
        border-radius: 4px;
    }
    .btn-primary:hover {
        background-color: #b71c1c;
        border-color: #b71c1c;
    }
    .text-danger {
        color: #d32f2f !important;
    }
    .product_name {
        color: #333;
        font-weight: 600;
    }
</style>

<?php include ('./views/client/layout/header.php'); ?>
<body>
    <div class="container">
        <h2 class="text-center mt-4 mb-3">Kết quả tìm kiếm: <?php echo ($keyword) ?> </h2>
        
        <?php if (!empty($results)): ?>
            <div class="product-list">
                <?php foreach ($results as $product): ?>
                    <div class="product-item">
                        <a href="?action=product-details&product_id=<?php echo $product['product_id']; ?>">
                            <img style="width:250px" src="<?php echo $product['image']; ?>" alt="">
                        </a>
                        <h4 class="product_name mt-3 text-center"><?php echo $product['name'] ?></h4>
                        <div class="price_box text-center">
                            <span class="current_price"><?php echo number_format($product['price'], 0, ',', '.'); ?>đ</span>
                            <span class="old_price"><?php echo number_format($product['sale_price'], 0, ',', '.'); ?>đ</span>
                        </div>
                        <div class="add_to_cart text-center mt-2">
                            <a class="btn btn-primary" href="?action=product-details&product_id=<?php echo $product['product_id']; ?>">Mua ngay</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-5">
                <p class="text-danger" style="font-size: 18px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <title>sad_line</title>
                        <g id="sad_line" fill="none" fill-rule="evenodd">
                            <path d="M24 0v24H0V0zM12.594 23.258l-.012.002-.071.035-.02.004-.014-.004-.071-.036c-.01-.003-.019 0-.024.006l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.016-.018m.264-.113-.014.002-.184.093-.01.01-.003.011.018.43.005.012.008.008.201.092c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.003-.011.018-.43-.003-.012-.01-.01z"/>
                            <path fill="#d32f2f" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2m0 2a8 8 0 1 0 0 16 8 8 0 0 0 0-16m0 9c1.267 0 2.427.473 3.308 1.25a1 1 0 1 1-1.324 1.5A2.985 2.985 0 0 0 12 15c-.761 0-1.455.282-1.984.75a1 1 0 1 1-1.323-1.5A4.985 4.985 0 0 1 12 13M8.5 8a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3m7 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3"/>
                        </g>
                    </svg>
                    Không tìm thấy sản phẩm nào.
                </p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>

<?php include './views/client/layout/miniCart.php' ?>
<?php include ('./views/client/layout/footer.php'); ?>