<?php include './views/client/layout/headerHome.php' ?>

<!-- Thêm CSS trực tiếp vào file (hoặc chèn vào file CSS riêng) -->
<style>
    /* CSS cố định kích thước ảnh */
    .product_thumb {
        position: relative;
        padding-top: 125%; /* Tỷ lệ 4:5 */
        overflow: hidden;
        border-radius: 8px;
        background: #f5f5f5;
    }

    .product_thumb img.primary_img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
        transition: transform 0.3s ease;
    }

    .single_product {
        height: 100%;
        padding: 10px;
    }

    .product_content {
        padding: 15px 10px;
        min-height: 180px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .price_box {
        margin: 8px 0;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .product_thumb {
            padding-top: 150%; /* Tỷ lệ 3:4 cho tablet */
        }
    }

    @media (max-width: 768px) {
        .product_thumb {
            padding-top: 120%; /* Tỷ lệ 5:6 cho mobile */
        }
        
        .product_content {
            min-height: 160px;
            padding: 10px 5px;
        }
    }

    @media (max-width: 480px) {
        .product_thumb {
            padding-top: 130%;
        }
        
        .product_name {
            font-size: 15px;
        }
        
        .price_box span {
            font-size: 14px;
        }
    }
</style>

<!-- Các section sản phẩm (giữ nguyên cấu trúc) -->
<section class="product_section mb-96">
    <div class="container">
        <div class="product_header d-flex justify-content-between mb-50">
            <div class="section_title wow fadeInUp" data-wow-delay="0.1s">
                <h2>Sách mới</h2>
            </div>
        </div>
        <div class="product_container row">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="all" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": true,
                            "speed": 800,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <?php foreach ($listProductLastes as $product) : ?>
                            <?php if ($product->status == 1): ?>
                                <article class="col single_product wow fadeInUp" data-wow-delay="0.1s">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="<?= '?action=product-details&product_id=' . $product->product_id ?>">
                                                <img class="primary_img" src="<?= $product->image ?>"
                                                    alt="<?= $product->name ?>">
                                            </a>
                                            <div class="product_badge">
                                                <span>Mới</span>
                                            </div>
                                        </div>
                                        <div class="product_content text-center">
                                            <h4 class="product_name"><a href="<?= '?action=product-details&product_id=' . $product->product_id ?>"><?= $product->name ?></a>
                                            </h4>
                                            <div class="price_box">
                                                <?php if (!empty($product->sale_price) && $product->sale_price > 0): ?>
                                                    <span class="current_price"><?= number_format($product->sale_price, 0, ',', '.') ?>đ</span>
                                                    <span class="old_price"><?= number_format($product->price, 0, ',', '.') ?>đ</span>
                                                <?php else: ?>
                                                    <span class="current_price"><?= number_format($product->price, 0, ',', '.') ?>đ</span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="add_to_cart">
                                                <a class="btn btn-primary btn-hover-effect" href="<?= '?action=product-details&product_id=' . $product->product_id ?>">Mua ngay</a>
                                            </div>
                                        </div>
                                    </figure>
                                </article>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- banner section start -->
<section class="banner_section mb-109 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">

        <div class="banner_container d-flex">
            <figure class="single_banner position-relative">
                <img src="public/client/assets/img/bg/nbg1.png" alt="Banner">
                <figcaption class="banner_text position-absolute">
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<!-- banner section end -->

<!-- product section start -->
<section class="product_section mb-96">
    <div class="container">
        <div class="product_header d-flex justify-content-between mb-50">
            <div class="section_title wow fadeInUp" data-wow-delay="0.1s">
                <h2>Sách kinh tế</h2>
            </div>
            <div class="all_product wow fadeInUp" data-wow-delay="0.2s">
                <a href="?action=CategoryProductClient&id=25">Xem thêm</a>
            </div>


        </div>
        <div class="product_container row">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="all" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": true,
                            "speed": 800,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>

                        <!-- sản phẩm -->

                        <?php foreach ($kinhte as $product) : ?>

                            <?php if ($product->status == 1):   // Chỉ hiển thị sản phẩm có status == 1 
                            ?>
                                <article class="col single_product wow fadeInUp" data-wow-delay="0.1s">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="<?= '?action=product-details&product_id=' . $product->product_id ?>">
                                                <img class="primary_img" src="<?= $product->image ?>"
                                                    alt="<?= $product->name ?>">
                                            </a>
                                            <div class="product_badge">
                                                <span>Hot</span>
                                            </div>

                                        </div>
                                        <div class="product_content text-center">
                                            <!-- <div class="product_ratting">
                                                    <ul class="d-flex justify-content-center">
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                        <li><span>(4)</span></li>
                                                    </ul>
                                                </div> -->
                                            <h4 class="product_name"><a href="<?= '?action=product-details&product_id=' . $product->product_id ?>"><?= $product->name ?></a>
                                            </h4>
                                            <div class="price_box">
                                                <?php if (!empty($product->sale_price) && $product->sale_price > 0): ?>
                                                    <span class="current_price"><?= number_format($product->sale_price, 0, ',', '.') ?>đ</span>
                                                    <span class="old_price"><?= number_format($product->price, 0, ',', '.') ?>đ</span>
                                                <?php else: ?>
                                                    <span class="current_price"><?= number_format($product->price, 0, ',', '.') ?>đ</span>
                                                <?php endif; ?>
                                            </div>

                                            <div class="add_to_cart">
                                                <!-- <form action="?action=addToCart" method="POST"> -->
                                                <!-- <input type="hidden" name="product_id" value="<?php echo $product->product_id ?>">
                                                            <input type="hidden" name="quantity" value="1"> -->
                                                <a class="btn btn-primary btn-hover-effect" href="<?= '?action=product-details&product_id=' . $product->product_id ?>">Mua ngay</a>
                                                <!-- </form> -->
                                            </div>

                                        </div>
                                    </figure>
                                </article>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <!-- kết thúc sản phẩm -->

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- product section end -->

    </section>
    <!-- product section end -->
      <!-- banner section start -->
 <section class="banner_section mb-109 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">           
                <div class="banner_container d-flex">
                    <figure class="single_banner position-relative">
                        <img src="public/client/assets/img/bg/slide-2.jpg" alt="Sale Banner">
                    </figure>
                </div>
        </div>
    </section>
    
    <!-- banner section end -->

    <!-- product section start -->
    <section class="product_section mb-96">
        <div class="container">
            <div class="product_header d-flex justify-content-between mb-50">
                <div class="section_title wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Sách thiếu nhi</h2>
                </div>
                <div class="all_product wow fadeInUp" data-wow-delay="0.2s">
                    <a href="?action=CategoryProductClient&id=28">Xem thêm</a>
                </div>
            </div>
            <div class="product_container row">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all" role="tabpanel">
                        <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": true,
                            "speed": 800,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                            <!-- sản phẩm -->
                                
                            <?php foreach ($aolen as $product) : ?> 
                                <?php if ($product->status == 1):   // Chỉ hiển thị sản phẩm có status == 1 ?>
                                <article class="col single_product wow fadeInUp" data-wow-delay="0.1s">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="<?='?action=product-details&product_id='.$product->product_id?>">
                                                    <img class="primary_img" src="<?=$product->image ?>" alt="<?=$product->name ?>">
                                                </a>
                                                <div class="product_badge">
                                                <span>Sale</span>
                                            </div>
                                                
                                            </div>
                                            <div class="product_content text-center">
                                               
                                                <h4 class="product_name"><a href="<?='?action=product-details&product_id='.$product->product_id?>"><?= $product->name ?></a>
                                                </h4>
                                                <div class="price_box">
                                                <?php if (!empty($product->sale_price) && $product->sale_price > 0): ?>
                                                    <span class="current_price"><?= number_format($product->sale_price, 0, ',', '.') ?>đ</span>
                                                    <span class="old_price"><?= number_format($product->price, 0, ',', '.') ?>đ</span>
                                                <?php else: ?>
                                                    <span class="current_price"><?= number_format($product->price, 0, ',', '.') ?>đ</span>
                                                <?php endif; ?>
                                            </div>

                                                <div class="add_to_cart">
                                                        <!-- <form action="?action=addToCart" method="POST"> -->
                                                            <!-- <input type="hidden" name="product_id" value="<?php echo $product->product_id ?>">
                                                            <input type="hidden" name="quantity" value="1"> -->
                                                            <a class="btn btn-primary btn-hover-effect" href="<?='?action=product-details&product_id='.$product->product_id?>" >Mua ngay</a>
                                                        <!-- </form> -->
                                                    </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <?php endif; ?>
                                <?php endforeach; ?> 
                                <!-- kết thúc sản phẩm -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->

    






<?php include './views/client/layout/miniCart.php' ?>

<?php include './views/client/layout/footerHome.php' ?>