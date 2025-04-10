<?php include('./views/client/layout/header.php'); ?>

<!--slider area start-->
<section class="slider_section mb-63">
    <div class="slider_area slick_slider_activation" data-slick='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "arrows": true,
            "dots": true,
            "autoplay": false,
            "speed": 300,
            "infinite": true
        }'>
        <div class="single_slider d-flex align-items-center" data-bgimg="public/client/assets/img/slider/slider1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="slider_text">
                            <span style="color: #bab8b6; font-weight: normal; size: 35px;" class="text-white">Sản phẩm mới</span>
                            <h1 class="text-white fw-bold">FALL WINTER COLLECTION</h1>
                            <p class="text-white">Nhập mã “WINTER100" - Giảm thêm 100K cho đơn từ 950K </p>
                            <a class="btn btn-primary" href="shop.html">KHÁM PHÁ NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="public/client/assets/img/slider/slider2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="slider_text">

                            <h1 class="text-white fw-bold">PANTS COLLECTION</h1>
                            <p class="text-white">Nhập mã “WINTER100" - Giảm thêm 100K cho đơn từ 950K </p>
                            <a class="btn btn-primary" href="shop.html">KHÁM PHÁ NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center" data-bgimg="public/client/assets/img/slider/slider3.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="slider_text">

                            <h1 class="text-white fw-bold">KEEP WARM FOR WINTER</h1>
                            <p class="text-white">Nhập mã “WINTER50" - Giảm thêm 50K cho đơn từ 550K </p>
                            <a class="btn btn-primary" href="shop.html">KHÁM PHÁ NGAY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider area end-->

<!--shipping section start-->
<section class="shipping_section mb-102">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shipping_inner d-flex justify-content-between">
                    <div class="single_shipping d-flex align-items-center">
                        <div class="shipping_icon">
                            <i class="icon-cursor icons"></i>
                        </div>
                        <div class="shipping_text">
                            <h3>Miễn phí vẫn chuyển</h3>
                            <p>Cho đơn tổng 1 triệu đồng</p>
                        </div>
                    </div>
                    <div class="single_shipping d-flex align-items-center">
                        <div class="shipping_icon">
                            <i class="icon-reload icons"></i>
                        </div>
                        <div class="shipping_text">
                            <h3>Đổi trả</h3>
                            <p>Trong 3 ngày nguyên tem mác</p>
                        </div>
                    </div>
                    <div class="single_shipping d-flex align-items-center">
                        <div class="shipping_icon">
                            <i class="icon-lock icons"></i>
                        </div>
                        <div class="shipping_text">
                            <h3>100% Thanh toán bảo mật</h3>
                            <p>Thanh toán online</p>
                        </div>
                    </div>
                    <div class="single_shipping d-flex align-items-center">
                        <div class="shipping_icon">
                            <i class="icon-tag icons"></i>
                        </div>
                        <div class="shipping_text">
                            <h3>Giá siêu sốc</h3>
                            <p>Tốt nhất thị trường</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--shipping section end-->

<!-- bat dau moi -->
<!-- product section start -->
<section class="product_section mb-96">
    <div class="container">
        <div class="product_header d-flex justify-content-between  mb-50">
            <div class="section_title">
                <h2>Sản phẩm mới</h2>
            </div>

            <div class="all_product">
                <a href="shop.html">Xem thêm</a>
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
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tab-pane fade" id="clothings" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>



                    </div>
                </div>
                <div class="tab-pane fade" id="bags" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tab-pane fade" id="shoes" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                    </div>
                </div>
                <div class="tab-pane fade" id="accessories" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->


<!-- banner section start -->
<section class="banner_section mb-109">
    <div class="container">
        <div class="section_title mb-60">
            <h2>featured collections</h2>
        </div>
        <div class="banner_container d-flex">
            <figure class="single_banner position-relative mr-30 ">
                <img src="public/client/assets/img/bg/bg1.jpg" alt="">
                <figcaption class="banner_text position-absolute">
                    <h3>Zara Pattern <br> backpacks</h3>
                    <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                    <a class="btn btn-primary" href="shop.html">Shop Now</a>
                </figcaption>
            </figure>
            <figure class="single_banner position-relative">
                <img src="public/client/assets/img/bg/bg2.jpg" alt="">
                <figcaption class="banner_text position-absolute">
                    <h3 class="text-white">Basic Color Caps</h3>
                    <p class="text-white">Minimalist never cool, choose and make <br> the simple great again!</p>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<!-- banner section end -->

<!-- product section start -->
<section class="product_section mb-96">
    <div class="container">
        <div class="product_header d-flex justify-content-between  mb-50">
            <div class="section_title">
                <h2>Bán chạy nhất</h2>
            </div>

            <div class="all_product">
                <a href="shop.html">Xem thêm</a>
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
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tab-pane fade" id="clothings" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>



                    </div>
                </div>
                <div class="tab-pane fade" id="bags" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tab-pane fade" id="shoes" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                    </div>
                </div>
                <div class="tab-pane fade" id="accessories" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->

<!-- banner section start -->
<section class="banner_section banner_style2 mb-109">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <figure class="single_banner position-relative">
                    <img src="public/client/assets/img/bg/bg3.jpg" alt="">
                    <div class="banner_text position-absolute">
                        <h3>Minimalist <br> sneaker</h3>
                        <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                        <a class="btn btn-primary" href="shop.html">Shop Now</a>
                    </div>
                    <div class="banner_tag">
                        <span>new arrivals <br> women</span>
                    </div>
                </figure>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <figure class="single_banner position-relative">
                    <img src="public/client/assets/img/bg/bg4.jpg" alt="">
                    <div class="banner_text position-absolute text__style2">
                        <h3><span>50%</span> OFF <br> for Autumn</h3>
                        <p>Stretch, fresh-cool help you alway <br> comfortable</p>
                        <a class="btn btn-primary" href="shop.html">Shop Now</a>
                    </div>
                    <div class="banner_tag">
                        <span>mega sale</span>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- banner section end -->

<!-- product section start -->
<section class="product_section mb-96">
    <div class="container">
        <div class="product_header d-flex justify-content-between  mb-50">
            <div class="section_title">
                <h2>Sản phẩm chạy bộ</h2>
            </div>

            <div class="all_product">
                <a href="shop.html">Xem thêm</a>
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
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <!-- Để nguyên -->
                                    <div class="product_action">
                                        <ul>
                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Thêm vào giỏ hàng" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left">
                                                    <span class="material-symbols-outlined">add_shopping_cart</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#">Mua ngay</a>
                                    </div>

                                </div>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tab-pane fade" id="clothings" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>



                    </div>
                </div>
                <div class="tab-pane fade" id="bags" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
                <div class="tab-pane fade" id="shoes" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                    </div>
                </div>
                <div class="tab-pane fade" id="accessories" role="tabpanel">
                    <div class="product_slick slick_slider_activation" data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true ,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(4)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$62.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a title="Add To Cart" class="btn btn-primary" href="#">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(6)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Make Thing Happen
                                            T-Shirts</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$38.00</span>

                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>

                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product1.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(12)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic Joggin Shorts</a>
                                    </h4>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product2.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-20%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(14)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$38.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product3.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_label">
                                        <span>-18%</span>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(2)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Basic White Simple
                                            Sneaker</a></h4>
                                    <div class="price_box">
                                        <span class="current_price">$43.00</span>
                                        <span class="old_price">$46.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="col single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="product-details.html">
                                        <img class="primary_img" src="public/client/assets/img/product/product4.jpg"
                                            alt="consectetur">
                                    </a>
                                    <div class="product_action">
                                        <ul>
                                            <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-heart icons"></i></a></li>

                                            <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                    data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                    data-tippy-delay="50" data-tippy-arrow="true"
                                                    data-tippy-placement="left"><i
                                                        class="icon-size-fullscreen icons"></i></a></li>
                                            <li class="compare"><a data-tippy="Compare" href="#"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="left"><i
                                                        class="icon-refresh icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <figcaption class="product_content text-center">
                                    <div class="product_ratting">
                                        <ul class="d-flex justify-content-center">
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><a href="#"><i class="ion-android-star"></i></a></li>
                                            <li><span>(8)</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="product_name"><a href="product-details.html">Simple Rounded
                                            Sunglasses</a></h4>
                                    <div class="price_box">
                                        <span class="text-black">$42.00</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                            data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                            data-tippy-placement="top">Add To Cart</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->

<!-- blog section start -->
<section class="blog_section mb-140">
    <div class="container">
        <div class="product_header border-top d-flex justify-content-between  mb-60">
            <div class="section_title">
                <h2>press & look</h2>
            </div>
            <div class="all_articles">
                <a href="blog.html">All articles</a>
            </div>
        </div>
        <div class="blog_container row">
            <div class="blog_slick slick_slider_activation" data-slick='{
                        "slidesToShow": 3,
                        "slidesToScroll": 1,
                        "arrows": false,
                        "dots": false,
                        "autoplay": false,
                        "speed": 300,
                        "infinite": true,
                        "responsive":[
                          {"breakpoint":992, "settings": { "slidesToShow": 2 } },
                          {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                          {"breakpoint":576, "settings": { "slidesToShow": 1 } }
                        ]
                    }'>
                <article class="col single_blog">
                    <figure>
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="public/client/assets/img/blog/blog1.jpg" alt=""></a>
                        </div>
                        <figcaption class="blog_content">
                            <div class="blog_meta">
                                <ul class="d-flex">
                                    <li><span class="meta_tag">News</span></li>
                                    <li><span>May 25, 2020</span></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg
                                    Show</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="col single_blog">
                    <figure>
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="public/client/assets/img/blog/blog2.jpg" alt=""></a>
                        </div>
                        <figcaption class="blog_content">
                            <div class="blog_meta">
                                <ul class="d-flex">
                                    <li><span class="meta_tag">News</span></li>
                                    <li><span>May 25, 2020</span></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Basic colord mixed - trendind 2020</a></h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="col single_blog">
                    <figure>
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="public/client/assets/img/blog/blog3.jpg" alt=""></a>
                        </div>
                        <figcaption class="blog_content">
                            <div class="blog_meta">
                                <ul class="d-flex">
                                    <li><span class="meta_tag">News</span></li>
                                    <li><span>May 25, 2020</span></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Calvin Klein Shoes Collection 2020, Activites Summer</a>
                            </h3>
                        </figcaption>
                    </figure>
                </article>
                <article class="col single_blog">
                    <figure>
                        <div class="blog_thumb">
                            <a href="blog-details.html"><img src="public/client/assets/img/blog/blog1.jpg" alt=""></a>
                        </div>
                        <figcaption class="blog_content">
                            <div class="blog_meta">
                                <ul class="d-flex">
                                    <li><span class="meta_tag">News</span></li>
                                    <li><span>May 25, 2020</span></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Five things you only know if you’re at Chanel's Hamburg
                                    Show</a></h3>
                        </figcaption>
                    </figure>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- blog section end -->

<?php include('./views/client/layout/footer.php'); ?>