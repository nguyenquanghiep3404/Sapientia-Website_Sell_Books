<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sapientia | Website bán sách </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="Replace_with_your_PAGE_URL" />

    <!-- Add site Favicon -->
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
    /* --- Custom Styles with Red Theme --- */

/* 1. Color Variables */
:root {
  --primary-red: #D93644; /* Main red color */
  --primary-red-dark: #B82E39; /* Darker red for hover states */
  --primary-red-light: #F8D7DA; /* Light red for backgrounds */
  --accent-gold: #D4AF37; /* Gold accent color */
  --text-white: #FFFFFF;
  --text-dark: #212529;
  --text-gray: #6c757d;
  --bg-light: #F8F9FA;
  --bg-dark: #343A40;
}

/* 2. Global Styles */
body {
  font-family: 'Roboto', sans-serif;
  scroll-behavior: smooth;
}

/* 3. Animations and Effects */
.fade-in {
  animation: fadeIn 0.5s ease-in-out;
}

.slide-up {
  animation: slideUp 0.5s ease-in-out;
}

.pulse {
  animation: pulse 2s infinite;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes slideUp {
  from { transform: translateY(20px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}

@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.05); }
  100% { transform: scale(1); }
}

/* 4. Header Styling */
.header_top {
  background-color: var(--primary-red);
  padding: 10px 0;
  transition: all 0.3s ease;
}

.header_top .text-white,
.header_top a {
  color: var(--text-white) !important;
  font-weight: 500;
  transition: all 0.3s ease;
}

.header_top a:hover {
  color: var(--accent-gold) !important;
  text-decoration: none;
}

.header_social ul li a {
  transition: all 0.3s ease;
}

.header_social ul li a:hover {
  transform: translateY(-3px);
  color: var(--accent-gold) !important;
}

.free_shipping_text {
  position: relative;
  overflow: hidden;
}

.free_shipping_text p {
  position: relative;
  z-index: 2;
}

.free_shipping_text::after {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.1);
  transition: all 0.5s ease;
  z-index: 1;
}

.free_shipping_text:hover::after {
  left: 100%;
}

/* 5. Logo Styling */
.header_logo img {
  max-width: 160px;
  height: auto;
  transition: all 0.3s ease;
}

@media (max-width: 991px) {
  .header_logo img {
    max-width: 120px;
  }
}

@media (max-width: 767px) {
  .header_logo img {
    max-width: 100px;
  }
}

/* 6. Navigation Menu */
.main_menu nav ul li a {
  font-weight: 500;
  transition: all 0.3s ease;
  position: relative;
}

.main_menu nav ul li a::after {
  content: "";
  position: absolute;
  bottom: -5px;
  left: 50%;
  width: 0;
  height: 2px;
  background-color: var(--primary-red);
  transition: all 0.3s ease;
  transform: translateX(-50%);
}

.main_menu nav ul li a:hover::after,
.main_menu nav ul li a.active::after {
  width: 80%;
}

.main_menu nav ul li a.active,
.main_menu nav ul li a:hover {
  color: var(--primary-red);
}

/* 7. Search and Account Icons */
.header_account ul li a i.icons,
.shopping_cart a i.icons {
  color: var(--primary-red);
  transition: all 0.3s ease;
}

.header_account ul li a:hover i.icons,
.shopping_cart a:hover i.icons {
  color: var(--primary-red-dark);
  transform: scale(1.1);
}

.item_count {
  background-color: var(--primary-red);
  color: var(--text-white);
  border-radius: 50%;
  font-weight: bold;
  transition: all 0.3s ease;
}

.header_account ul li a:hover .item_count,
.shopping_cart a:hover .item_count {
  background-color: var(--primary-red-dark);
  transform: scale(1.1);
}

/* 8. Search Box */
.page_search_box {
  background-color: rgba(255, 255, 255, 0.98);
  box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
  border-radius: 0 0 10px 10px;
}

.page_search_box form {
  border-bottom: 2px solid var(--primary-red) !important;
}

.page_search_box form button {
  color: var(--primary-red);
}

.search_close i {
  color: var(--primary-red);
  transition: all 0.3s ease;
}

.search_close i:hover {
  transform: rotate(90deg);
}

/* 9. Slider/Carousel */
.slider_section {
  margin-bottom: 60px;
}

.single_slider {
  position: relative;
  overflow: hidden;
  min-height: 60vh !important;
}

.single_slider::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
 
  z-index: 1;
}

.slider_text {
  position: relative;
  z-index: 2;
  animation: fadeIn 1s ease-in-out;
}

.slider_text h1 {
  font-size: 3.5rem;
  font-weight: 700;
  margin-bottom: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  animation: slideUp 0.8s ease-in-out;
}

.slider_text p {
  font-size: 1.2rem;
  margin-bottom: 30px;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
  animation: slideUp 1s ease-in-out;
}

.slider_text .btn-primary {
  background-color: var(--primary-red);
  border-color: var(--primary-red);
  padding: 10px 25px;
  font-weight: 500;
  border-radius: 30px;
  transition: all 0.3s ease;
  animation: slideUp 1.2s ease-in-out;
  box-shadow: 0 4px 15px rgba(217, 54, 68, 0.3);
}

.slider_text .btn-primary:hover {
  background-color: var(--text-white);
  border-color: var(--text-white);
  color: var(--primary-red);
  transform: translateY(-3px);
  box-shadow: 0 6px 20px rgba(217, 54, 68, 0.4);
}

/* 10. Shipping Section */
.shipping_section {
  margin-bottom: 80px;
}

.shipping_inner {
  background-color: var(--bg-light);
  border-radius: 10px;
  padding: 30px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
}

.single_shipping {
  transition: all 0.3s ease;
  padding: 15px;
  border-radius: 8px;
}

.single_shipping:hover {
  background-color: white;
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
}

.shipping_icon i {
  color: var(--primary-red);
  font-size: 2.5rem;
  margin-right: 15px;
  transition: all 0.3s ease;
}

.single_shipping:hover .shipping_icon i {
  transform: scale(1.1);
}

.shipping_text h3 {
  font-size: 1.2rem;
  font-weight: 600;
  margin-bottom: 5px;
  color: var(--text-dark);
}

.shipping_text p {
  font-size: 0.9rem;
  color: var(--text-gray);
  margin: 0;
}

/* 11. Product Sections */
.product_section {
  margin-bottom: 80px;
}

.section_title h2 {
  position: relative;
  font-weight: 700;
  margin-bottom: 0;
  padding-bottom: 10px;
  display: inline-block;
}

.section_title h2::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 60%;
  height: 3px;
  background-color: var(--primary-red);
}

.all_product a {
  color: var(--primary-red);
  font-weight: 500;
  transition: all 0.3s ease;
  position: relative;
}

.all_product a::after {
  content: "→";
  margin-left: 5px;
  transition: all 0.3s ease;
}

.all_product a:hover {
  color: var(--primary-red-dark);
}

.all_product a:hover::after {
  margin-left: 10px;
}

/* 12. Product Cards */
.single_product {
  border-radius: 10px;
  overflow: hidden;
  transition: all 0.3s ease;
  margin-bottom: 20px;
  background-color: white;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.single_product:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.product_thumb {
  position: relative;
  overflow: hidden;
}

.product_thumb img {
  transition: all 0.5s ease;
}

.single_product:hover .product_thumb img {
  transform: scale(1.05);
}

.product_content {
  padding: 20px 15px;
}

.product_name a {
  color: var(--text-dark);
  font-weight: 500;
  transition: all 0.3s ease;
  display: block;
  margin-bottom: 10px;
  height: 40px;
  overflow: hidden;
}

.product_name a:hover {
  color: var(--primary-red);
}

.price_box {
  margin-bottom: 15px;
}

.current_price {
  font-size: 1.1rem;
  font-weight: 700;
  color: var(--primary-red);
  margin-right: 10px;
}

.old_price {
  font-size: 0.9rem;
  color: var(--text-gray);
  text-decoration: line-through;
}

.add_to_cart .btn-primary {
  background-color: var(--primary-red);
  border-color: var(--primary-red);
  border-radius: 30px;
  padding: 8px 20px;
  font-weight: 500;
  transition: all 0.3s ease;
  width: 100%;
}

.add_to_cart .btn-primary:hover {
  background-color: var(--primary-red-dark);
  border-color: var(--primary-red-dark);
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(217, 54, 68, 0.3);
}

/* 13. Banner Sections */
.banner_section {
  margin-bottom: 80px;
}

.single_banner {
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease;
}

.single_banner:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.single_banner img {
  transition: all 0.5s ease;
  width: 100%;
  border-radius: 10px;
}

.single_banner:hover img {
  transform: scale(1.02);
}

/* 14. Footer */
footer {
  background-color: var(--bg-light);
  padding-top: 60px;
}

.footer_logo img {
  max-width: 160px;
  margin-bottom: 20px;
}

.footer_contact_list {
  margin-bottom: 15px;
}

.footer_contact_list span {
  font-weight: 600;
  color: var(--primary-red);
  display: block;
  margin-bottom: 5px;
}

.footer_contact_list p,
.footer_contact_list a {
  color: var(--text-gray);
  transition: all 0.3s ease;
}

.footer_contact_list a:hover {
  color: var(--primary-red);
}

.footer_menu ul li {
  margin-left: 20px;
}

.footer_menu ul li a {
  color: var(--text-dark);
  font-weight: 500;
  transition: all 0.3s ease;
}

.footer_menu ul li a:hover {
  color: var(--primary-red);
}

.footer_social ul li {
  margin-left: 15px;
}

.footer_social ul li a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  background-color: white;
  border-radius: 50%;
  color: var(--text-dark);
  transition: all 0.3s ease;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.footer_social ul li a:hover {
  background-color: var(--primary-red);
  color: white;
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(217, 54, 68, 0.3);
}

.copyright_right p {
  margin-top: 20px;
  color: var(--text-gray);
}

.copyright_right p span {
  color: var(--primary-red);
  font-weight: 600;
}

/* 15. Responsive Adjustments */
@media (max-width: 991px) {
  .slider_text h1 {
    font-size: 2.5rem;
  }
  
  .slider_text p {
    font-size: 1rem;
  }
  
  .shipping_inner {
    flex-wrap: wrap;
  }
  
  .single_shipping {
    width: 50%;
    margin-bottom: 20px;
  }
}

@media (max-width: 767px) {
  .slider_text h1 {
    font-size: 2rem;
  }
  
  .single_shipping {
    width: 100%;
  }
  
  .footer_widget_list.text-right {
    text-align: left !important;
  }
  
  .footer_menu ul,
  .footer_social ul {
    justify-content: flex-start !important;
  }
  
  .footer_menu ul li,
  .footer_social ul li {
    margin-left: 0;
    margin-right: 20px;
  }
}

/* 16. Custom Animations for Product Sliders */
.slick-slide {
  opacity: 0;
  transform: scale(0.9);
  transition: all 0.5s ease;
}

.slick-active {
  opacity: 1;
  transform: scale(1);
}

/* 17. Custom Hover Effects */
.btn-hover-effect {
  position: relative;
  overflow: hidden;
}

.btn-hover-effect::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.2);
  transition: all 0.5s ease;
  z-index: 1;
}

.btn-hover-effect:hover::before {
  left: 100%;
}

/* 18. Product Badge */
.product_badge {
  position: absolute;
  top: 10px;
  left: 10px;
  background-color: var(--primary-red);
  color: white;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 0.8rem;
  font-weight: 600;
  z-index: 5;
  box-shadow: 0 3px 10px rgba(217, 54, 68, 0.3);
}

/* 19. Custom Scrollbar */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
  background: var(--primary-red);
  border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
  background: var(--primary-red-dark);
}

/* 20. Loading Animation */
.loading-animation {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}

.loading-animation div {
  position: absolute;
  top: 33px;
  width: 13px;
  height: 13px;
  border-radius: 50%;
  background: var(--primary-red);
  animation-timing-function: cubic-bezier(0, 1, 1, 0);
}

.loading-animation div:nth-child(1) {
  left: 8px;
  animation: loading1 0.6s infinite;
}

.loading-animation div:nth-child(2) {
  left: 8px;
  animation: loading2 0.6s infinite;
}

.loading-animation div:nth-child(3) {
  left: 32px;
  animation: loading2 0.6s infinite;
}

.loading-animation div:nth-child(4) {
  left: 56px;
  animation: loading3 0.6s infinite;
}

@keyframes loading1 {
  0% { transform: scale(0); }
  100% { transform: scale(1); }
}

@keyframes loading2 {
  0% { transform: translate(0, 0); }
  100% { transform: translate(24px, 0); }
}

@keyframes loading3 {
  0% { transform: scale(1); }
  100% { transform: scale(0); }
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
                            <li class="text-white"> <i class="icons icon-phone"></i> <a href="tel:+05483716566">+054 8371 65 66</a></li>
                            <li class="text-white"> <i class="icon-envelope-letter icons"></i> <a href="#">uthrstore@domain.com</a></li>
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
                                <a href="product-details.html"> Book Details</a>
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
<header class="header_section border-bottom">
    

    <div class="main_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header_container d-flex justify-content-between align-items-center">
                        <div class="canvas_open">
                            <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                        </div>
                        <div class="header_logo">
                            <a class="sticky_none" href="?action=client"><img src="public/client/assets/img/logo/logo.png" width="150px" ></a>
                        </div>
                        <!--main menu start-->
                        <div class="main_menu d-none d-lg-block">
                            <nav>
                                <ul class="d-flex">
                                    <li><a href="?action=client">Trang chủ</a> </li>
                                    <li><a href="###">Giới thiệu</a></li>
                                    <li><a href="?action=CategoryProductClient">Sách</a>
                                        <ul class="sub_menu">
                                            <li>
                                            <a class="category-title" href="?action=CategoryProductClient" style="font-size: 20px; text-decoration: underline;">DANH MỤC SÁCH</a>
                                            <ul class="category-menu">
                                                    <ul class="widget_dropdown_categories collapse show" id="men">
                                                        <?php foreach ($listCategories as $category): ?>
                                                            <li><a href="<?= '?action=CategoryProductClient&id='.$category['category_id'] ?>"><?php echo $category['name']; ?></a></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                            </li>
                                        </ul></li>
                                    <li><a href="###">Cửa hàng</a></li>
                                    <li><a href="###">Liên Hệ</a>
                                        <ul class="sub_menu">
                                            <li><a href="cart.html">Cart Pages</a></li>
                                            <li><a href="checkout.html">Checkout Pages</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Tin Tức</a>
                                        <ul class="sub_menu">
                                            <li><a href="blog.html">Blog Pages</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Tuyển Dụng</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header_account">
                            <ul class="d-flex">
                                <li class="header_search"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                                <li class="account_link"><a href="#"><i class="icon-user icons"></i></a>
                                <ul class="dropdown_account_link">
                                        <?php if (isset($_SESSION['name'])) { ?>
                                            <li><a href="?action=profile">Xin Chào <?=  ($_SESSION['name']['name']) ?>!</a></li>
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
                                <li><a href="#"><i class="icon-heart icons"></i></a> <span class="item_count">2</span></li>
                                <li class="shopping_cart"><a href="#"><i class="icon-basket-loaded icons"></i></a>
                                <span class="item_count">
                                   <?php 
                                   if(isset($_SESSION["myCart"]) ){
                                    echo count($_SESSION["myCart"]);
                                   }else{
                                    echo 0;
                                   }
                                   ?> 
                                </span></li>
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
<?php include './views/client/layout/miniCart.php' ?>