 <!-- banner section start -->
 <section class="banner_section mb-109 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">           
                <div class="banner_container d-flex">
                    <figure class="single_banner position-relative">
                        <img src="public/client/assets/img/bg/Sale_1366x532_061124_1.webp" alt="Sale Banner">
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
                    <h2>Sản phẩm áo len</h2>
                </div>
                <div class="all_product wow fadeInUp" data-wow-delay="0.2s">
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
                                                <h4 class="product_name"><a href="<?='?action=product-details&product_id='.$product->product_id?>"><?= $product->name ?></a>
                                                </h4>
                                                <div class="price_box">
                                                    <span class="current_price"><?= number_format($product->price, 0, ',', '.') ?>đ</span>
                                                    <span class="old_price"><?= number_format($product->sale_price , 0, ',', '.')?>đ</span>
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
     <!--footer area start-->
<footer class="footer_widgets newsletter_padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="footer_widget_list">
                        <div class="footer_logo">
                            <a href="#"><img src="public/client/assets/img/logo/logo.png" alt="Sapientia Logo"></a>
                        </div>
                        <div class="footer_contact">
                            <div class="footer_contact_list">
                                <span>Địa chỉ</span>
                                <p>Tòa nhà FPT Polytechnic, đường Trịnh Văn Bô, Phương Canh, Nam Từ Liêm, Hà Nội.</p>
                            </div>
                            <div class="footer_contact_list">
                                <span>24/7 hotline:</span>
                                <a href="tel:18001888">18001888</a>
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
                                <li><a href="https://twitter.com" data-tippy="Twitter" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com" data-tippy="Facebook" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="https://www.google.com" data-tippy="googleplus" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i class="ion-social-googleplus-outline"></i></a></li>
                                <li><a href="https://www.instagram.com" data-tippy="Instagram" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i class="ion-social-instagram-outline"></i></a></li>
                                <li><a href="https://www.youtube.com" data-tippy="Youtube" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="copyright_right">
                            <p>©2025 <span>Sapientia</span></p>
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

    <!-- Custom JS -->
    <script>
        // Initialize WOW.js for animations
        new WOW().init();
        
        // Page loader
        $(window).on('load', function() {
            setTimeout(function() {
                $("#page-loader").fadeOut(500);
            }, 800);
        });
        
        // Add hover effect to buttons
        $('.btn').addClass('btn-hover-effect');
        
        // Enhanced product hover effects
        $('.single_product').hover(
            function() {
                $(this).find('.product_badge').addClass('pulse');
            },
            function() {
                $(this).find('.product_badge').removeClass('pulse');
            }
        );
        
        // Smooth scroll
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && 
                location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 100
                    }, 800);
                }
            }
        });
        
        // Enhanced slider animations
        $('.slick_slider_activation').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            // Remove animation classes from current slide
            $(slick.$slides[currentSlide]).find('.animate__animated').each(function() {
                $(this).removeClass('animate__fadeInDown animate__fadeInUp');
            });
            
            // Add animation classes to next slide with delay
            setTimeout(function() {
                $(slick.$slides[nextSlide]).find('.animate__animated').each(function(index) {
                    var animationClass = $(this).data('animation') || 'animate__fadeInUp';
                    $(this).addClass(animationClass);
                });
            }, 100);
        });
    </script>
</body>
</html>