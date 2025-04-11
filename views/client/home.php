<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Sapientia | Website bán sách </title>
    <meta name="description"
        content="Uthr Fashion eCommerce Bootstrap 5 Template is an innovative and modern e-commerce online store website template." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />
    <!-- Add site Favicon -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=add_shopping_cart" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS
    ========================= -->
    <link rel="stylesheet" href="public/client/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="public/client/assets/css/slick.css">
    <link rel="stylesheet" href="public/client/assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="public/client/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="public/client/assets/css/font.awesome.css">
    <link rel="stylesheet" href="public/client/assets/css/animate.css">
    <link rel="stylesheet" href="public/client/assets/css/nice-select.css">
    <link rel="stylesheet" href="public/client/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="public/client/assets/css/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="public/client/assets/css/style.css">

    <!--modernizr min js here-->
    <script src="public/client/assets/js/vendor/modernizr-3.7.1.min.js"></script>


    <!-- Structured Data  -->
    <script type="application/ld+json">
        {

            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Replace_with_your_site_title",
            "url": "Replace_with_your_site_URL"

        }
    </script>
<style>
    /* --- Custom Styles Based on Logo --- */

/* 1. Định nghĩa biến màu chủ đạo (Nên đặt ở đầu file hoặc trong :root) */
:root {
  --primary-red: #D93644; /* Màu đỏ từ logo */
  --logo-white: #FFFFFF;
  --logo-black: #212529; /* Hoặc #000000 nếu muốn đen tuyền */
  --logo-hover-red: #b82e39; /* Màu đỏ đậm hơn một chút cho hover */
}

/* 2. Responsive Logo Styling */
.header_logo img {
  max-width: 160px; /* Kích thước tối đa ban đầu cho logo, bạn có thể điều chỉnh */
  height: auto;     /* Giữ đúng tỷ lệ khung hình */
  display: block;   /* Loại bỏ khoảng trắng thừa bên dưới ảnh */
  transition: max-width 0.3s ease; /* Hiệu ứng chuyển động mượt khi thay đổi kích thước */
}

/* Điều chỉnh kích thước logo cho màn hình nhỏ hơn (ví dụ: mobile) */
@media (max-width: 991px) { /* Điểm dừng của Bootstrap cho lg */
  .header_logo img {
    max-width: 85px; /* Giảm kích thước trên màn hình nhỏ hơn */
  }
}
@media (max-width: 767px) { /* Điểm dừng của Bootstrap cho md */
  .header_logo img {
    max-width: 70px; /* Giảm thêm nếu cần */
  }
}


/* 3. Áp dụng màu chủ đạo cho các thành phần */

/* Nút chính (Primary Button) */
.btn-primary {
  background-color: var(--primary-red);
  border-color: var(--primary-red);
  color: var(--logo-white); /* Đảm bảo chữ trên nút có màu trắng */
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active {
  background-color: var(--logo-hover-red); /* Màu đậm hơn khi hover/focus */
  border-color: var(--logo-hover-red);
  color: var(--logo-white);
}

/* Link menu đang active hoặc khi hover */
.main_menu nav ul li a.active,
.main_menu nav ul li a:hover {
  color: var(--primary-red);
}

/* Màu nền header top (Nếu bạn muốn đổi màu nền đen hiện tại) */
/* Bỏ comment dòng dưới nếu muốn đổi màu header top thành màu đỏ */

.header_top {
  background-color: var(--primary-red);
}
.header_top .text-white,
.header_top a {
  color: var(--logo-white) !important; /* Ghi đè để đảm bảo chữ vẫn trắng */
}
.header_top a:hover {
    opacity: 0.8; /* Giảm độ mờ khi hover link trên nền đỏ */
}


/* Màu chữ tiêu đề trong Slider (Nếu muốn đổi từ trắng sang màu khác) */
/* .slider_text h1 { color: var(--primary-red) !important; } */

/* Màu icon (Ví dụ: icon giỏ hàng, tài khoản) */
.header_account ul li a i.icons,
.shopping_cart a i.icons {
   color: var(--primary-red); /* Áp dụng màu đỏ cho icon nếu muốn */
}
.header_account ul li a:hover i.icons,
.shopping_cart a:hover i.icons {
  color: var(--logo-hover-red); /* Đổi màu khi hover */
}

/* Số lượng item trong giỏ hàng/yêu thích */
.item_count {
    background-color: var(--primary-red);
    color: var(--logo-white);
    /* Tinh chỉnh thêm padding, border-radius nếu cần */
}


/* Thêm các quy tắc CSS khác để áp dụng màu đỏ (var(--primary-red))
   cho các thành phần khác bạn muốn làm nổi bật (ví dụ: tiêu đề section,
   đường kẻ, màu link,...) dựa trên cấu trúc class của template bạn đang dùng.
   Bạn cần kiểm tra code HTML và CSS hiện tại để xác định đúng các class cần ghi đè.
*/

/* Ví dụ: Màu chữ cho phần shipping info */
.shipping_text h3 {
  /* color: var(--primary-red); */ /* Bỏ comment nếu muốn đổi màu tiêu đề shipping */
}

/* Ví dụ: Màu icon trong phần shipping */
.shipping_icon i {
   /* color: var(--primary-red); */ /* Bỏ comment nếu muốn đổi màu icon shipping */
}
</style>
</head>

<body>

    <!--offcanvas menu area start-->
    <div class="body_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="offcanvas_menu_wrapper">

                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="header_contact_info">
                            <ul class="d-flex">
                                <li class="text-white"> <i class="icons icon-phone"></i> <a href="tel:+05483716566">+054
                                        8371 65 66</a></li>
                                <li class="text-white"> <i class="icon-envelope-letter icons"></i> <a
                                        href="#">uthrstore@domain.com</a></li>
                            </ul>
                        </div>
                        <div class="header_social d-flex">
                            <span>Follow us</span>
                            <ul class="d-flex">
                                <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-youtube icons"></i></a></li>
                                <li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
                            </ul>
                        </div>

                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop.html">Shop</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="product-details.html"> Product Details</a>
                                </li>
                                <li><a href="#">sale</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>

                                </li>
                                <li><a href="#">buy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <!--header area start-->
    <header class="header_section header_transparent">
        <div class="header_top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header_top_inner d-flex justify-content-between align-items-center">
                            <div class="header_contact_info">
                                <ul class="d-flex">
                                    <li class="text-white"> <i class="icons icon-phone"></i> <a
                                            href="tel:+05483716566">18001888</a></li>
                                    <li class="text-white"> <i class="icon-envelope-letter icons"></i> <a
                                            href="#">codex.mendoza@cm.com</a></li>
                                </ul>
                            </div>
                            <div class="free_shipping_text">
                                <p class="text-white">Miễn phí vận chuyển trên toàn quốc cho đơn hàng trên 1 triệu đồng
                                    <a href="#">Tìm hiểu thêm</a>
                                </p>
                            </div>
                            <div class="header_top_sidebar d-flex align-items-center">
                                <div class="header_social d-flex">
                                    <span>Follow us</span>
                                    <ul class="d-flex">
                                        <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-youtube icons"></i></a></li>
                                        <li><a href="#"><i class="icon-social-pinterest icons"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header_container d-flex justify-content-between align-items-center">
                            <div class="canvas_open">
                                <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                            </div>
                            <div class="header_logo">



                                <a class="sticky_none" href="?action=client"><img src="public/client/assets/img/logo/logo.png"
                                      ></a>

                            </div>
                            <!--main menu start-->
                            <div class="main_menu d-none d-lg-block">
                                <nav>
                                    <ul class="d-flex">
                                        <li><a class="active" href="?action=client">Trang chủ</a> </li>
                                        <li><a href="shop.html">Giới thiệu</a></li>
                                        <li>
                                            <a href="?action=CategoryProductClient">SÁCH</a
                                            <ul class="sub_menu">
                                                <li>
                                                    <a class="category-title" href="?action=CategoryProductClient"
                                                        style="font-size: 20px; text-decoration: underline;">Sách</a>
                                                    <ul class="category-menu">
                                                        <ul class="widget_dropdown_categories collapse show" id="men">
                                                            <?php foreach ($listCategories as $category): ?>
                                                                <li><a
                                                                        href="<?= '?action=CategoryProductClient&id=' . $category['category_id'] ?>"><?php echo $category['name']; ?></a>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </li>
                                    <li><a href="#">Cửa hàng</a></li>
                                    <li><a href="#">Liên Hệ</a></li>
                                    <li><a href="blog.html">Tin tức</a>
                                        <ul class="sub_menu">
                                            <li><a href="blog.html">Blog Pages</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">tuyển dụng</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header_account">
                                <ul class="d-flex">
                                    <li class="header_search"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                                    <li class="account_link"><a href="#"><i class="icon-user icons"></i></a>
                                        <ul class="dropdown_account_link">
                                            <?php if (isset($_SESSION['name'])) { ?>
                                                <li><a href="?action=profile">Xin Chào
                                                        <?= ($_SESSION['name']['name']) ?>!</a></li>
                                                <li><a href="?action=profile">Quản Lý Tài Khoản</a></li>
                                                <?php
                                                if ($_SESSION['role_id'] == 0) { // Quản trị viên
                                                    ?>
                                                    <li><a href="?action=admin">Truy Cập Trang Admin</a></li>
                                                    <?php
                                                } elseif ($_SESSION['role_id'] == 1) { // Người dùng thông thường
                                                    ?>

                                                    <?php
                                                }
                                                ?>

                                                <li><a href="?action=logout">Đăng Xuất</a></li>
                                            <?php } else { ?>
                                                <li><a href="?action=login">Đăng Nhập</a></li>
                                                <li><a href="?action=register">Đăng Kí</a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="icon-heart icons"></i></a> <span
                                            class="item_count">2</span></li>
                                    <li class="shopping_cart"><a href="#"><i class="icon-basket-loaded icons"></i></a>

                                        <span class="item_count">
                                            <?php
                                            if (isset($_SESSION["myCart"])) {
                                                echo count($_SESSION["myCart"]);
                                            } else {
                                                echo 0;
                                            }
                                            ?>
                                        </span>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page search box -->
        <div class="page_search_box" style="height: 40%;">
            <div class="search_close">
                <i class="ion-close-round"></i>
            </div>
            <form class="border-bottom" action="?action=timkiemsanpham" method="POST">
                <input class="border-0" name="kyw" placeholder="Tìm kiếm sách..." type="text">
                <button type="submit"><span class="icon-magnifier icons"></span></button>
            </form>
        </div>

    </header>
    <!--header area end-->


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
            <div class="single_slider d-flex align-items-center"
                data-bgimg="public/client/assets/img/bg/nbg3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span style="color: #bab8b6; font-weight: normal; size: 35px;" class="text-white">SÁCH MỚI</span>
                                <h1 class="text-white fw-bold">FALL WINTER COLLECTION</h1>
                                <p class="text-white">Nhập mã “WINTER100" - Giảm thêm 100K cho đơn từ 950K </p>
                                <a class="btn btn-primary" href="shop.html">KHÁM PHÁ NGAY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center"
                data-bgimg="public/client/assets/img/bg/nbg4.png">
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
            <div class="single_slider d-flex align-items-center"
                data-bgimg="public/client/assets/img/bg/nbg5.png">
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
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                                <!-- <?php echo "<pre>";
                                                                    print_r($listProductLastes);  
                                                                    ?> -->
                                <!-- Sách -->
                                
                                <?php foreach ($listProductLastes as $product) : ?> 
                                    <?php if ($product->status == 1):   // Chỉ hiển thị Sách có status == 1 ?>
                                    <article class="col single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="<?='?action=product-details&product_id='.$product->product_id?>">
                                                    <img class="primary_img" src="<?=$product->image ?>"
                                                        alt="consectetur">
                                                </a>
                                                
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
                                                <h4 class="product_name"><a href="###"><?= $product->name ?></a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price"><?= number_format($product->sale_price, 0, ',', '.') ?>đ</span>
                                                    <span class="old_price"><?= number_format($product->price , 0, ',', '.')?>đ</span>
                                                </div>

                                                    <div class="add_to_cart">
                                                        <!-- <form action="?action=addToCart" method="POST"> -->
                                                            <!-- <input type="hidden" name="product_id" value="<?php echo $product->product_id ?>">
                                                            <input type="hidden" name="quantity" value="1"> -->
                                                            <a class="btn btn-primary" href="<?='?action=product-details&product_id='.$product->product_id?>" >Mua ngay</a>
                                                        <!-- </form> -->
                                                    </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <?php endif; ?>
                                <?php endforeach; ?> 
                                <!-- kết thúc sách -->

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
            
            <div class="banner_container d-flex">
                <figure class="single_banner position-relative">
                    <img src="public/client/assets/img/bg/nbg1.png" alt="">
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
            <div class="product_header d-flex justify-content-between  mb-50">
                <div class="section_title">
                    <h2>Sách</h2>
                </div>
                <div class="all_product">
                        <a href="?action=CategoryProductClient&id=14">Xem thêm</a>
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
                            
                            <!-- Sách -->
                                
                            <?php foreach ($aophao as $product) : ?> 
                                    
                                    <?php if ($product->status == 1):   // Chỉ hiển thị Sách có status == 1 ?>
                                    <article class="col single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="<?='?action=product-details&product_id='.$product->product_id?>">
                                                    <img class="primary_img" src="<?=$product->image ?>"
                                                        alt="consectetur">
                                                </a>
                                                
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
                                                <h4 class="product_name"><a href="###"><?= $product->name ?></a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price"><?= number_format($product->price, 0, ',', '.') ?>đ</span>
                                                    <span class="old_price"><?= number_format($product->sale_price , 0, ',', '.')?>đ</span>
                                                </div>

                                                <div class="add_to_cart">
                                                        <!-- <form action="?action=addToCart" method="POST"> -->
                                                            <!-- <input type="hidden" name="product_id" value="<?php echo $product->product_id ?>">
                                                            <input type="hidden" name="quantity" value="1"> -->
                                                            <a class="btn btn-primary" href="<?='?action=product-details&product_id='.$product->product_id?>" >Mua ngay</a>
                                                        <!-- </form> -->
                                                    </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <?php endif; ?>
                                <?php endforeach; ?> 
                                <!-- kết thúc sách -->
                            
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
                <div class="banner_container d-flex">
                    <figure class="single_banner position-relative">
                        <img src="public/client/assets/img/bg/Sale_1366x532_061124_1.webp" alt="">
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
                    <h2>Sách</h2>
                </div>
                <div class="all_product">
                        <a href="?action=CategoryProductClient&id=17">Xem thêm</a>
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
                            <!-- Sách -->
                                
                            <?php foreach ($aolen as $product) : ?> 
                                    <?php if ($product->status == 1):   // Chỉ hiển thị Sách có status == 1 ?>
                                    <article class="col single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="<?='?action=product-details&product_id='.$product->product_id?>">
                                                    <img class="primary_img" src="<?=$product->image ?>"
                                                        alt="consectetur">
                                                </a>
                                                
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
                                                <h4 class="product_name"><a href="###"><?= $product->name ?></a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price"><?= number_format($product->price, 0, ',', '.') ?>đ</span>
                                                    <span class="old_price"><?= number_format($product->sale_price , 0, ',', '.')?>đ</span>
                                                </div>

                                                <div class="add_to_cart">
                                                        <!-- <form action="?action=addToCart" method="POST"> -->
                                                            <!-- <input type="hidden" name="product_id" value="<?php echo $product->product_id ?>">
                                                            <input type="hidden" name="quantity" value="1"> -->
                                                            <a class="btn btn-primary" href="<?='?action=product-details&product_id='.$product->product_id?>" >Mua ngay</a>
                                                        <!-- </form> -->
                                                    </div>

                                            </div>
                                        </figure>
                                    </article>
                                    <?php endif; ?>
                                <?php endforeach; ?> 
                                <!-- kết thúc sách -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->
     <!--footer area start-->
<footer class="footer_widgets newsletter_padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="footer_widget_list">
                        <div class="footer_logo">
                            <a href="#"><img src="public/client/assets/img/logo/logo.png" ></a>
                        </div>
                        <div class="footer_contact">
                            <div class="footer_contact_list">
                                <span>Địa chỉ</span>
                                <p>Tòa nhà FPT Polytechnic, đường Trịnh Văn Bô, Phương Canh, Nam Từ Liêm, Hà Nội.</p>
                            </div>
                            <div class="footer_contact_list">
                                <span>24/7 hotline:</span>
                                <a href="tel:(+99)0521282399">18001888</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="footer_widget_list text-right">
                        <div class="footer_menu">
                            <ul class="d-flex justify-content-end">
                                <li><a href="index.html">Trang chủ</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="product-details.html">Product</a></li>
                                <li><a href="#">pages</a></li>
                                <li><a href="blog.html">Blog</a></li>
                            </ul>
                        </div>
                        <div class="footer_social">
                            <ul class="d-flex justify-content-end">
                                <li><a href="https://twitter.com" data-tippy="Twitter" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com" data-tippy="Facebook" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-facebook"></i></a></li>
                                <li><a href="https://www.google.com" data-tippy="googleplus" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-googleplus-outline"></i></a></li>
                                <li><a href="https://www.instagram.com" data-tippy="Instagram" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-instagram-outline"></i></a></li>
                                <li><a href="https://www.youtube.com" data-tippy="Youtube" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="copyright_right">
                            <p>©2025 <span>Sapientia</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    
    <!-- JS
============================================ -->

<script src="public/client/assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="public/client/assets/js/vendor/popper.js"></script>
    <script src="public/client/assets/js/vendor/bootstrap.min.js"></script>
    <script src="public/client/assets/js/slick.min.js"></script>
    <script src="public/client/assets/js/wow.min.js"></script>
    <script src="public/client/assets/js/jquery.scrollup.min.js"></script>
    <script src="public/client/assets/js/images-loaded.min.js"></script>
    <script src="public/client/assets/js/isotope.pkgd.min.js"></script>
    <script src="public/client/assets/js/jquery.nice-select.js"></script>
    <script src="public/client/assets/js/tippy-bundle.umd.js"></script>
    <script src="public/client/assets/js/jquery-ui.min.js"></script>
    <script src="public/client/assets/js/jquery.instagramFeed.min.js"></script>
    <script src="public/client/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="public/client/assets/js/mailchimp-ajax.js"></script>

    <!-- Main JS -->
    <script src="public/client/assets/js/main.js"></script>



</body>

</html>
