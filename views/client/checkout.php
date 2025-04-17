<?php include('./views/client/layout/header.php'); ?>

<!-- Custom CSS for checkout page -->
<style>
    :root {
        --primary-red: #C92027;
        --primary-red-dark: #a51a1f;
        --primary-red-light: #e63e44;
        --light-gray: #f8f9fa;
    }
    
    /* Breadcrumbs styling */
    .breadcrumbs_area {
        background-color: var(--light-gray);
        padding: 30px 0;
        border-bottom: 1px solid #eee;
    }
    
    .checkout-steps {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }
    
    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        z-index: 1;
    }
    
    .step-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        transition: all 0.3s ease;
    }
    
    .step.active .step-icon {
        background-color: var(--primary-red);
        color: white;
        transform: scale(1.1);
        box-shadow: 0 4px 10px rgba(201, 32, 39, 0.3);
    }
    
    .step p {
        font-size: 14px;
        font-weight: 500;
        color: #777;
        margin: 0;
        transition: all 0.3s ease;
    }
    
    .step.active p {
        color: var(--primary-red);
        font-weight: 600;
    }
    
    .dotline {
        flex: 1;
        height: 3px;
        background-color: #ddd;
        margin: 0 15px;
        position: relative;
        top: -25px;
        z-index: 0;
    }
    
    .dotline.active {
        background-color: var(--primary-red);
    }
    
    /* Form styling */
    .checkout_form {
        padding: 40px 0;
    }
    
    .checkout_form h3 {
        color: #333;
        font-weight: 600;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }
    
    .checkout_form h3:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background-color: var(--primary-red);
    }
    
    .form-control:focus {
        border-color: var(--primary-red);
        box-shadow: 0 0 0 0.2rem rgba(201, 32, 39, 0.25);
    }
    
    /* Order summary styling */
    .order_table_right {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .order_table_right:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        transform: translateY(-5px);
    }
    
    .order_table_right h3 {
        background-color: var(--primary-red);
        color: white;
        padding: 15px 20px;
        margin: 0;
        font-weight: 600;
    }
    
    .order_table {
        background-color: white !important;
        padding: 20px;
    }
    
    .order_table table {
        width: 100%;
    }
    
    .order_table th, .order_table td {
        padding: 12px 0;
        border-bottom: 1px solid #eee;
    }
    
    .order_table tfoot tr:last-child {
        font-weight: 700;
        color: var(--primary-red);
        font-size: 18px;
    }
    
    /* Payment method styling */
    .panel-default {
        border: 1px solid #eee;
        border-radius: 6px;
        padding: 15px;
        margin-bottom: 15px;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .panel-default:hover {
        border-color: var(--primary-red);
        background-color: #fff9f9;
    }
    
    .panel_radio {
        position: relative;
        display: inline-block;
        margin-right: 10px;
    }
    
    .panel_radio input[type="radio"] {
        opacity: 0;
        position: absolute;
    }
    
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #eee;
        border-radius: 50%;
        border: 1px solid #ddd;
    }
    
    .panel_radio input[type="radio"]:checked ~ .checkmark {
        background-color: white;
        border: 2px solid var(--primary-red);
    }
    
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }
    
    .panel_radio input[type="radio"]:checked ~ .checkmark:after {
        display: block;
        top: 3px;
        left: 3px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: var(--primary-red);
    }
    
    /* Button styling */
    .btn-primary {
        background-color: var(--primary-red);
        border-color: var(--primary-red);
        padding: 12px 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(201, 32, 39, 0.3);
    }
    
    .btn-primary:hover {
        background-color: var(--primary-red-dark);
        border-color: var(--primary-red-dark);
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(201, 32, 39, 0.4);
    }
    
    .btn-primary:active {
        transform: translateY(0);
        box-shadow: 0 2px 5px rgba(201, 32, 39, 0.4);
    }
    
    .place_order_btn {
        margin-top: 20px;
        text-align: center;
    }
    
    /* Animation effects */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    .animate-fade-in {
        animation: fadeIn 0.5s ease forwards;
    }
    
    .delay-1 { animation-delay: 0.1s; }
    .delay-2 { animation-delay: 0.2s; }
    .delay-3 { animation-delay: 0.3s; }
    .delay-4 { animation-delay: 0.4s; }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .checkout-steps {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .step {
            flex-direction: row;
            margin-bottom: 15px;
            width: 100%;
        }
        
        .step-icon {
            margin-right: 15px;
            margin-bottom: 0;
        }
        
        .dotline {
            display: none;
        }
    }
</style>
<!-- <?php var_dump($_SESSION['myCart']);
 var_dump($_SESSION['name'])?> -->
<!--breadcrumbs area start-->
<div class="breadcrumbs_area breadcrumbs_other">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content text-center">
                    <h3 class="animate-fade-in">Trang Thanh Toán</h3>
                    
                    <div class="checkout-steps animate-fade-in delay-1">
                        <div class="step">
                            <div class="step-icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <p>GIỎ HÀNG</p>
                        </div>
                        
                        <div class="dotline active"></div>
                        
                        <div class="step active">
                            <div class="step-icon">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            <p>THANH TOÁN</p>
                        </div>
                        
                        <div class="dotline"></div>
                        
                        <div class="step">
                            <div class="step-icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <p>HOÀN THÀNH ĐƠN HÀNG</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--Checkout page section-->
<div class="checkout_section" id="accordion">
    <div class="container">
        <div class="checkout_form">
            <div class="row">
                <div class="col-lg-7 col-md-6 animate-fade-in delay-2">
                    <form action="?action=createOrederDetails" method="POST">
                        <h3>Điền thông tin</h3>
                        <div class="form-group mb-4">
                            <label for="name">Tên <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $showCheckout['name'] ?>" >
                        </div>
                        <div class="form-group mb-4">
                            <label for="address">Địa chỉ người nhận <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" value="<?= $showCheckout['address'] ?>" >
                        </div>
                        <div class="form-group mb-4">
                            <label for="email">Địa chỉ email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $showCheckout['email'] ?>" >
                        </div>
                        <div class="form-group mb-4">
                            <label for="phone">Số điện thoại <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?= $showCheckout['phone'] ?>" >
                        </div>
                        <!-- <div class="form-group mb-4">
                            <label for="note">Ghi chú</label>
                            <textarea class="form-control" id="note" name="note" rows="4"></textarea>
                        </div> -->
                </div>
                <div class="col-lg-5 col-md-6 animate-fade-in delay-3">
                    <div class="order_table_right">
                        <h3>Đơn hàng của bạn</h3>
                        <div class="order_table table-responsive">
                            <?php $cartTotal = 0 ?>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th class="text-right">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($_SESSION['myCart'] as $index => $order): ?>
                                      <?php $cartTotal += $order['price'] * $order['quantity']; ?>
                                        <tr class="product-row">
                                            <td>
                                                <input type="hidden" name="" value="<?= $order['name'] ?>">
                                                <span><?= $order['name'] ?></span>
                                                <small class="d-block text-muted">Số lượng: <?= $order['quantity'] ?></small>
                                            </td>
                                            <td class="text-right">
                                                <input type="hidden" name="" value="<?= $order['price'] * $order['quantity'] ?>">
                                                <span><?= number_format($order['price'] * $order['quantity'], 0, ',', '.') ?>đ</span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Tổng tiền hàng</td>
                                        <td class="text-right">
                                            <input type="hidden" name="" value="<?= $cartTotal ?>">
                                            <span><?= number_format($cartTotal, 0, ',', '.') ?>đ</span>
                                        </td>
                                    </tr>
                                    <tr class="order_total">
                                        <th>Tổng thanh toán</th>
                                        <td class="text-right">
                                            <input type="hidden" name="" value="<?= $cartTotal ?>">
                                            <span><?= number_format($cartTotal, 0, ',', '.') ?>đ</span>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            
                            <div class="payment-methods mt-4">
                                <h5 class="mb-3">Phương thức thanh toán</h5>
                                <div class="panel-default">
                                    <div class="panel_radio">
                                        <input id="payment1" name="check_method" type="radio" value="cod" checked />
                                        <span class="checkmark"></span>
                                    </div>
                                    <label for="payment1" data-toggle="collapse" data-target="#panel1">
                                        <strong>Thanh toán bằng tiền mặt</strong>
                                    </label>
                                    <div id="panel1" class="collapse show one" data-parent="#accordion">
                                        <div class="card-body1 mt-2">
                                            <p class="text-muted">Thanh toán trực tiếp khi nhận hàng.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-default">
                                    <div class="panel_radio">
                                        <input id="payment5" name="check_method" type="radio" value="vnpay" />
                                        <span class="checkmark"></span>
                                    </div>
                                    <label for="payment5" data-toggle="collapse" data-target="#method5">
                                        <strong>Thanh toán qua VNPAY</strong>
                                    </label>
                                    <div id="method5" class="collapse five" data-parent="#accordion">
                                        <div class="card-body1 mt-2">
                                            <p class="text-muted">Thanh toán trực tuyến an toàn qua VNPAY.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="panel-default">
                                    <div class="panel_radio">
                                        <input id="payment5" name="check_method" type="radio" value="qr" />
                                        <span class="checkmark"></span>
                                    </div>
                                    <label for="payment5" data-toggle="collapse" data-target="#method5">
                                        <strong>Thanh toán qua Qr CODE </strong>
                                    </label>
                                    <div id="method5" class="collapse five" data-parent="#accordion">
                                        <div class="card-body1 mt-2">
                                            <p class="text-muted">Quét mã trực tuyến an toàn qua VietQR.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place_order_btn animate-fade-in delay-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                <i class="fa fa-lock mr-2"></i> Thanh toán
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Checkout page section end-->

<!-- Add Bootstrap and Font Awesome if not already included -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- Add custom JavaScript for animations and interactions -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add hover effect to product rows
        const productRows = document.querySelectorAll('.product-row');
        productRows.forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.style.backgroundColor = '#fff9f9';
                this.style.transition = 'background-color 0.3s ease';
            });
            row.addEventListener('mouseleave', function() {
                this.style.backgroundColor = 'transparent';
            });
        });
        
        // Payment method selection enhancement
        const paymentMethods = document.querySelectorAll('.panel-default');
        paymentMethods.forEach(method => {
            method.addEventListener('click', function() {
                const radio = this.querySelector('input[type="radio"]');
                radio.checked = true;
                
                // Trigger the collapse toggle
                const targetId = radio.getAttribute('data-target');
                if (targetId) {
                    const targetElement = document.querySelector(targetId);
                    // Handle collapse logic here if needed
                }
            });
        });
        
        // Form validation enhancement
        const form = document.querySelector('form');
        const inputs = form.querySelectorAll('input[required]');
        
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.classList.add('is-invalid');
                } else {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                }
            });
        });
    });
</script>

<?php include('./views/client/layout/footer.php'); ?>
<?php include './views/client/layout/miniCart.php' ?>
