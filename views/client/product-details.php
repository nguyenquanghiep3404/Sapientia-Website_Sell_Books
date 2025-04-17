<?php include('./views/client/layout/header.php'); ?>
<!-- <?php var_dump($variant) ?> -->
<?php
// Hiển thị thông báo lỗi nếu có
if (isset($_SESSION['error'])) {
    $error_message = $_SESSION['error'];
    unset($_SESSION['error']); // Xóa session error sau khi đã lấy
}
?>
<!-- Popup thông báo lỗi -->
<?php if (!empty($error_message)): ?>
    <div class="error-popup" id="errorPopup">
        <div class="error-content">
            <span class="close-btn" onclick="closeErrorPopup()">&times;</span>
            <p><?php echo htmlspecialchars($error_message); ?></p>
        </div>
    </div>
<?php endif; ?>

<style>
    .error-popup {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1000;
        min-width: 300px;
        background: #ffebee;
        border: 1px solid #ffcdd2;
        border-radius: 4px;
        padding: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        animation: slideIn 0.3s ease-out;
    }

    .error-content {
        position: relative;
        color: #d32f2f;
    }

    .close-btn {
        position: absolute;
        top: -10px;
        right: -10px;
        cursor: pointer;
        font-size: 20px;
        color: #d32f2f;
    }

    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
</style>
<script>
    // Tự động đóng thông báo sau 5 giây
    setTimeout(function () {
        const errorPopup = document.getElementById('errorPopup');
        if (errorPopup) {
            errorPopup.style.display = 'none';
        }
    }, 5000);

    // Hàm đóng thông báo khi click nút ×
    function closeErrorPopup() {
        const errorPopup = document.getElementById('errorPopup');
        if (errorPopup) {
            errorPopup.style.display = 'none';
        }
    }
</script>
<div class="breadcrumbs_area breadcrumbs_product">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="?action=client">Trang chủ</a></li>
                        <li><a
                                href="<?= '?action=CategoryProductClient&id=' . $product['category_id'] ?>"><?= $product['category_name'] ?></a>
                        </li>
                        <li><?= $product['name'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="product_details mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <?php
                // Thư viện ảnh
                $gallery = json_decode($product['gallery'], true);
                $mainImage = $product['image']; // Ảnh chính
                
                // Tạo mảng tất cả ảnh bao gồm ảnh chính và gallery
                $allImages = [];
                if (is_array($gallery)) {
                    $allImages = array_merge([$mainImage], $gallery);
                } else {
                    $allImages = [$mainImage];
                }
                ?>
                <div class="product_zoom_gallery">
                    <div class="zoom_gallery_inner">
                        <!-- Phần thumbnails -->
                        <div class="thumbnails-container">
                            <?php foreach ($allImages as $index => $image): ?>
                                <div class="zoom_tabimg_list <?= $index === 0 ? 'active' : '' ?>"
                                    data-index="<?= $index ?>" onclick="changeImage('<?= $image ?>', <?= $index ?>)">
                                    <img src="<?= $image ?>" alt="thumbnail">
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Phần ảnh chính -->
                        <div class="product_zoom_main_img">
                            <div class="large-img">
                                <img src="<?= $mainImage ?>" alt="Main Image" id="largeImage">
                                <?php if (count($allImages) > 1): ?>
                                    <button type="button" class="nav-btn prev-btn" onclick="navigateImage(-1)">❮</button>
                                    <button type="button" class="nav-btn next-btn" onclick="navigateImage(1)">❯</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .product_zoom_gallery {
                        position: relative;
                        margin-bottom: 20px;
                        width: 100%;
                    }

                    .zoom_gallery_inner {
                        display: flex;
                        gap: 20px;
                        height: 400px;
                        width: 100%;
                    }

                    .thumbnails-container {
                        display: flex;
                        flex-direction: column;
                        gap: 10px;
                        height: 400px;
                        overflow-y: auto;
                        width: 80px;
                        min-width: 80px;
                        padding-right: 10px;
                    }

                    .zoom_tabimg_list {
                        width: 70px;
                        height: 70px;
                        border: 2px solid #ddd;
                        border-radius: 4px;
                        overflow: hidden;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        flex-shrink: 0;
                    }

                    .zoom_tabimg_list.active {
                        border-color: #dc3545;
                    }

                    .zoom_tabimg_list img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                    }

                    .product_zoom_main_img {
                        flex: 1;
                        min-width: 0;
                        position: relative;
                    }

                    .large-img {
                        width: 100%;
                        height: 400px;
                        position: relative;
                        border: 1px solid #ddd;
                        border-radius: 8px;
                        overflow: hidden;
                    }

                    .large-img img {
                        width: 100%;
                        height: 100%;
                        object-fit: contain;
                    }

                    /* Tùy chỉnh thanh cuộn cho thumbnails */
                    .thumbnails-container::-webkit-scrollbar {
                        width: 6px;
                    }

                    .thumbnails-container::-webkit-scrollbar-track {
                        background: #f1f1f1;
                        border-radius: 3px;
                    }

                    .thumbnails-container::-webkit-scrollbar-thumb {
                        background: #dc3545;
                        border-radius: 3px;
                    }

                    .thumbnails-container::-webkit-scrollbar-thumb:hover {
                        background: #c82333;
                    }

                    /* Nút điều hướng */
                    .nav-btn {
                        position: absolute;
                        top: 50%;
                        transform: translateY(-50%);
                        background: rgba(0, 0, 0, 0.5);
                        color: white;
                        border: none;
                        padding: 15px;
                        cursor: pointer;
                        transition: opacity 0.3s ease;
                        z-index: 10;
                    }

                    .nav-btn:hover {
                        background: rgba(0, 0, 0, 0.7);
                    }

                    .prev-btn {
                        left: 10px;
                    }

                    .next-btn {
                        right: 10px;
                    }

                    @keyframes fadeIn {
                        from {
                            opacity: 0;
                        }
                        to {
                            opacity: 1;
                        }
                    }

                    #largeImage {
                        animation: fadeIn 0.3s ease;
                    }
                </style>

                <script>
                    // Khởi tạo biến toàn cục để lưu trữ thông tin ảnh
                    let currentImageIndex = 0;
                    const allImages = <?= json_encode($allImages) ?>;

                    // Hàm thay đổi ảnh chính
                    function changeImage(imageSrc, index) {
                        const largeImage = document.getElementById('largeImage');
                        if (largeImage) {
                            largeImage.src = imageSrc;
                            currentImageIndex = index;

                            // Cập nhật trạng thái active của thumbnails
                            document.querySelectorAll('.zoom_tabimg_list').forEach(thumb => {
                                thumb.classList.remove('active');
                            });

                            const activeThumb = document.querySelector(`.zoom_tabimg_list[data-index="${index}"]`);
                            if (activeThumb) {
                                activeThumb.classList.add('active');
                                activeThumb.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                            }
                        }
                    }

                    // Hàm điều hướng ảnh
                    function navigateImage(direction) {
                        if (!allImages || allImages.length <= 1) return;

                        let newIndex = currentImageIndex + direction;

                        // Xử lý loop around
                        if (newIndex >= allImages.length) {
                            newIndex = 0;
                        } else if (newIndex < 0) {
                            newIndex = allImages.length - 1;
                        }

                        changeImage(allImages[newIndex], newIndex);
                    }

                    // Thêm điều khiển bàn phím
                    document.addEventListener('keydown', function (e) {
                        if (e.key === 'ArrowLeft') {
                            navigateImage(-1);
                        } else if (e.key === 'ArrowRight') {
                            navigateImage(1);
                        }
                    });

                    // Khởi tạo gallery khi trang load xong
                    document.addEventListener('DOMContentLoaded', function () {
                        // Set ảnh đầu tiên là active
                        if (allImages && allImages.length > 0) {
                            changeImage(allImages[0], 0);
                        }
                    });
                </script>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="product_d_right">
                    <h1>
                        <div class="product-name"><?= $product['name'] ?></div>
                    </h1>
                    <div class="price_box">
                        <span class="current_price text-danger" id="variant_current_price"></span> <span
                            class="old_price" style="font-size:20px; text-decoration: line-through;"
                            id="variant_old_price"></span>
                    </div>

                    <div class="product_availalbe mb-3">
                        <ul class="d-flex">
                            <li><i class="icon-layers icons"></i> Số lượng còn: <span id="variant_quantity_display"
                                    class="font-weight-bold"></span> sản phẩm</li>
                            <li>Trạng thái: <span class="stock" id="variant_status"></span></li>
                        </ul>
                        <span style="color:rgb(148, 148, 148); font-size: 0.9em;">Hãy chọn định dạng để xem giá và số
                            lượng.</span>
                    </div>

                    <form action="?action=addToCart" method="post" id="add-to-cart-form">
                        <div class="product_variant">
                            <div class="filter__list widget_format d-flex align-items-center mb-3" style="gap: 10px;">
                                <h3 style="margin: 0 10px 0 0;">Định dạng:</h3>
                                <?php
                                // Sắp xếp các biến thể nếu cần, ví dụ: theo giá hoặc một thứ tự cụ thể
                                // usort($variant, function ($a, $b) { return $a['price'] <=> $b['price']; });
                                
                                $isFirstVariant = true; // Để chọn biến thể đầu tiên làm mặc định
                                if (!empty($variant) && is_array($variant)): // Kiểm tra $variant có tồn tại và là mảng không
                                    foreach ($variant as $index => $va):
                                        // Đảm bảo các key cần thiết tồn tại
                                        $variant_id = htmlspecialchars($va['variant_id'] ?? 'default_' . $index); // ID biến thể, có fallback
                                        $format = htmlspecialchars($va['format'] ?? 'N/A'); // Tên định dạng
                                        $price = htmlspecialchars($va['price'] ?? 0); // Giá
                                        $salePrice = htmlspecialchars($va['sale_price'] ?? $price); // Giá KM, dùng giá gốc nếu không có
                                        $quantity = htmlspecialchars($va['quantity'] ?? 0); // Số lượng tồn kho
                                
                                        $checked = $isFirstVariant ? 'checked' : ''; // Đánh dấu 'checked' cho radio đầu tiên
                                        ?>
                                        <div class="format-item">
                                            <input type="radio" name="variant_id" id="format_<?= $variant_id ?>"
                                                value="<?= $variant_id ?>" class="format-selector" data-price="<?= $price ?>"
                                                data-sale-price="<?= $salePrice ?>" data-quantity="<?= $quantity ?>"
                                                data-format-name="<?= $format ?>" <?= $checked ?> required> <label
                                                for="format_<?= $variant_id ?>"
                                                class="format-label btn btn-outline-primary btn-sm"> <?= $format ?>
                                            </label>
                                        </div>
                                        <?php
                                        $isFirstVariant = false; // Chỉ chọn mục đầu tiên
                                    endforeach;
                                else:
                                    // Thông báo nếu không có biến thể nào
                                    echo "<p>Sản phẩm hiện chưa có định dạng nào.</p>";
                                endif;
                                ?>
                            </div>

                            <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">

                            <div class="variant_quantity_btn d-flex align-items-center mb-3">
                                <label for="quantity" style="margin-right: 10px;">Số lượng:</label>
                                <button id="decrement" type="button" class="btn btn-secondary btn-sm">-</button>
                                <input type="number" name="quantity" id="quantity" value="1" min="1"
                                    class="form-control form-control-sm mx-2" style="width: 60px; text-align: center;">
                                <button id="increment" type="button" class="btn btn-secondary btn-sm">+</button>
                            </div>

                            <button type="submit" name="add_to_cart" class="btn btn-danger"> <i
                                    class="ion-android-cart"></i> Thêm vào giỏ hàng
                            </button>

                        </div>
                    </form>
                    <div class="product_sku mt-3">
                        <p><span>SKU: </span> <?= htmlspecialchars($product['product_id']) ?></p>
                    </div>
                    <div class="product_tags d-flex">
                        <span>Tags: </span>
                        <ul class="d-flex">
                            <li><a href="#">sách,</a></li>
                            <li><a href="#">tâm lý,</a></li>
                            <li><a href="#">kỹ năng sống</a></li>
                        </ul>
                    </div>
                    <div class="priduct_social d-flex mt-2">
                        <span>Chia sẻ: </span>
                        <ul>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                    <div class="product_desc mt-3">
                        <p><?= nl2br(htmlspecialchars($product['description'])) ?></p>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="product_d_inner">
                    <div class="product_info_button border-bottom">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                    aria-selected="true">Đánh giá & Bình luận</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="reviews" role="tabpanel">
                            <div class="reviews_wrapper">
                                <!-- Phần Đánh giá -->
                                <div class="mb-4">
                                    <h3 class="mb-4 border-bottom pb-2 text-danger"><i class="fas fa-star mr-2"></i>Đánh
                                        giá sản phẩm</h3>

                                    <?php if (!empty($allComment) && is_array($allComment)): ?>
                                        <?php foreach ($allComment as $item): ?>
                                            <?php if (!empty($item['rating'])): ?>
                                                <div class="card mb-3 border-danger">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-start">
                                                            <div class="mr-3">
                                                                <div class="avatar rounded-circle bg-danger text-white d-flex align-items-center justify-content-center"
                                                                    style="width: 45px; height: 45px;">
                                                                    <?= strtoupper(substr($item['name'], 0, 1)) ?>
                                                                </div>
                                                            </div>
                                                            <div class="w-100">
                                                                <div class="d-flex justify-content-between align-items-center mb-2">
                                                                    <h5 class="mb-0"><?= htmlspecialchars($item['name']) ?></h5>
                                                                    <small
                                                                        class="text-muted"><?= date("d/m/Y H:i", strtotime($item['create_at'])) ?></small>
                                                                </div>
                                                                <div class="star_rating mb-2">
                                                                    <?php
                                                                    $rating = (int) $item['rating'];
                                                                    for ($i = 1; $i <= 5; $i++) {
                                                                        $color = $i <= $rating ? 'text-warning' : 'text-secondary';
                                                                        echo "<i class='fas fa-star {$color}'></i>";
                                                                    }
                                                                    ?>
                                                                </div>
                                                                <p class="mb-0"><?= nl2br(htmlspecialchars($item['comment'])) ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <div class="alert alert-info">Chưa có đánh giá nào</div>
                                    <?php endif; ?>

                                    <!-- Form Đánh giá -->
                                    <div class="card border-danger">
                                        <div class="card-header bg-danger text-white">
                                            <h5 class="mb-0"><i class="fas fa-edit mr-2"></i>Viết đánh giá</h5>
                                        </div>
                                        <div class="card-body">
                                            <form
                                                action="?action=createComment&product_id=<?= $product['product_id'] ?>"
                                                method="POST">
                                                <div class="form-group">
                                                    <label>Xếp hạng:</label>
                                                    <div class="rating-stars">
                                                        <?php for ($i = 5; $i >= 1; $i--): ?>
                                                            <input type="radio" id="star<?= $i ?>" name="rating"
                                                                value="<?= $i ?>" required>
                                                            <label for="star<?= $i ?>"><i class="fas fa-star"></i></label>
                                                        <?php endfor; ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="review_comment">Nội dung đánh giá</label>
                                                    <textarea name="comment" class="form-control" rows="4"
                                                        required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-danger btn-block"><i
                                                        class="fas fa-paper-plane mr-2"></i>Gửi đánh giá</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include './views/client/layout/miniCart.php' ?>
<?php include('./views/client/layout/footer.php'); ?>
<style>
    .avatar {
        font-weight: 600;
        font-size: 1.2em;
    }

    .rating-stars {
        display: flex;
        flex-direction: row-reverse;
        justify-content: flex-end;
    }

    .rating-stars input[type="radio"] {
        display: none;
    }

    .rating-stars label {
        font-size: 1.5em;
        color: #ddd;
        cursor: pointer;
        transition: color 0.2s;
        margin-right: 5px;
    }

    .rating-stars input[type="radio"]:checked~label,
    .rating-stars label:hover,
    .rating-stars label:hover~label {
        color: #ffc107;
    }

    .rating-stars input[type="radio"]:checked~label {
        color: #ffc107;
    }

    .card-header {
        border-radius: 0.25rem 0.25rem 0 0 !important;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        transition: all 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .text-danger {
        color: #dc3545 !important;
    }

    .border-danger {
        border-color: #dc3545 !important;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Lấy các phần tử DOM cần thiết
        const form = document.getElementById('add-to-cart-form');
        const decrementButton = document.getElementById("decrement");
        const incrementButton = document.getElementById("increment");
        const quantityInput = document.getElementById("quantity");
        const quantityDisplay = document.getElementById('variant_quantity_display'); // Hiển thị số lượng tồn
        const currentPriceDisplay = document.getElementById('variant_current_price'); // Hiển thị giá hiện tại
        const oldPriceDisplay = document.getElementById('variant_old_price'); // Hiển thị giá cũ (nếu có KM)
        const statusDisplay = document.getElementById('variant_status'); // Hiển thị trạng thái (còn/hết hàng)
        const formatInputs = document.querySelectorAll('.format-selector'); // Các nút radio chọn định dạng
        const addToCartButton = form.querySelector('button[type="submit"]'); // Nút thêm vào giỏ hàng

        // Hàm trợ giúp để định dạng tiền tệ (Việt Nam Đồng)
        function formatNumber(number) {
            if (isNaN(number)) return 'N/A'; // Xử lý số không hợp lệ
            // Đảm bảo nó được coi là số để định dạng
            const num = Number(number);
            return new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(num);
        }

        // Hàm chính để cập nhật thông tin chi tiết dựa trên biến thể được chọn
        function updateVariantDetails() {
            // Tìm nút radio định dạng đang được chọn
            const selectedFormatInput = document.querySelector('input[name="variant_id"]:checked');

            // Trường hợp không có biến thể nào được chọn (ít khi xảy ra với radio + required)
            if (!selectedFormatInput) {
                currentPriceDisplay.textContent = 'Chọn định dạng';
                oldPriceDisplay.textContent = '';
                oldPriceDisplay.style.display = 'none'; // Ẩn giá cũ
                quantityDisplay.textContent = 'N/A';
                statusDisplay.textContent = 'Chưa chọn';
                statusDisplay.className = 'stock text-muted'; // Class CSS cho trạng thái
                quantityInput.max = 0; // Số lượng tối đa là 0
                quantityInput.value = 1; // Reset về 1
                quantityInput.disabled = true; // Vô hiệu hóa input số lượng
                decrementButton.disabled = true; // Vô hiệu hóa nút giảm
                incrementButton.disabled = true; // Vô hiệu hóa nút tăng
                addToCartButton.disabled = true; // Vô hiệu hóa nút thêm giỏ hàng
                return; // Kết thúc hàm
            }

            // Lấy dữ liệu từ thuộc tính data-* của radio được chọn
            const price = parseFloat(selectedFormatInput.getAttribute('data-price'));
            const salePrice = parseFloat(selectedFormatInput.getAttribute('data-sale-price'));
            const availableQuantity = parseInt(selectedFormatInput.getAttribute('data-quantity'));

            // --- Cập nhật hiển thị giá ---
            if (!isNaN(price)) { // Kiểm tra giá có hợp lệ không
                // Kiểm tra có giá KM hợp lệ và thấp hơn giá gốc không
                if (!isNaN(salePrice) && salePrice < price) {
                    currentPriceDisplay.textContent = formatNumber(salePrice); // Hiển thị giá KM là giá hiện tại
                    oldPriceDisplay.textContent = formatNumber(price);      // Hiển thị giá gốc là giá cũ
                    oldPriceDisplay.style.display = 'inline';             // Hiển thị phần giá cũ
                } else {
                    currentPriceDisplay.textContent = formatNumber(price); // Hiển thị giá gốc là giá hiện tại
                    oldPriceDisplay.textContent = '';                   // Xóa giá cũ
                    oldPriceDisplay.style.display = 'none';              // Ẩn phần giá cũ
                }
            } else {
                currentPriceDisplay.textContent = 'Liên hệ'; // Dự phòng nếu giá không hợp lệ
                oldPriceDisplay.textContent = '';
                oldPriceDisplay.style.display = 'none';
            }

            // --- Cập nhật số lượng và trạng thái ---
            if (!isNaN(availableQuantity)) { // Kiểm tra số lượng có hợp lệ không
                quantityDisplay.textContent = availableQuantity; // Hiển thị số lượng tồn
                quantityInput.max = availableQuantity; // Đặt số lượng tối đa cho input

                if (availableQuantity > 0) { // Nếu còn hàng
                    statusDisplay.textContent = 'Còn hàng';
                    // Sử dụng class màu xanh của Bootstrap + in đậm
                    statusDisplay.className = 'stock text-success font-weight-bold';
                    quantityInput.disabled = false; // Cho phép nhập số lượng
                    addToCartButton.disabled = false; // Cho phép thêm vào giỏ
                } else { // Nếu hết hàng
                    statusDisplay.textContent = 'Hết hàng';
                    // Sử dụng class màu đỏ của Bootstrap + in đậm
                    statusDisplay.className = 'stock text-danger font-weight-bold';
                    quantityInput.disabled = true; // Vô hiệu hóa nhập số lượng
                    addToCartButton.disabled = true; // Vô hiệu hóa thêm vào giỏ
                }
            } else {
                // Dự phòng nếu số lượng không hợp lệ
                quantityDisplay.textContent = 'N/A';
                quantityInput.max = 0;
                statusDisplay.textContent = 'Không xác định';
                statusDisplay.className = 'stock text-warning font-weight-bold'; // Màu vàng cảnh báo
                quantityInput.disabled = true;
                addToCartButton.disabled = true;
            }

            // --- Kiểm tra và điều chỉnh ô nhập số lượng hiện tại ---
            let currentInputQuantity = parseInt(quantityInput.value);

            // Nếu hết hàng (tồn kho <= 0), buộc số lượng là 1 (nhưng input vẫn bị vô hiệu hóa)
            if (availableQuantity <= 0) {
                quantityInput.value = 1;
            } else {
                // Đảm bảo số lượng ít nhất là 1
                if (isNaN(currentInputQuantity) || currentInputQuantity < 1) {
                    quantityInput.value = 1;
                    currentInputQuantity = 1; // Cập nhật giá trị để kiểm tra nút +/-
                }
                // Đảm bảo số lượng không vượt quá tồn kho
                else if (currentInputQuantity > availableQuantity) {
                    quantityInput.value = availableQuantity;
                    currentInputQuantity = availableQuantity; // Cập nhật giá trị để kiểm tra nút +/-
                }
            }

            // --- Cập nhật trạng thái các nút Tăng/Giảm số lượng ---
            // Vô hiệu hóa nút Giảm nếu input bị vô hiệu hóa hoặc số lượng là 1
            decrementButton.disabled = quantityInput.disabled || (currentInputQuantity <= 1);
            // Vô hiệu hóa nút Tăng nếu input bị vô hiệu hóa hoặc số lượng bằng tối đa
            incrementButton.disabled = quantityInput.disabled || (currentInputQuantity >= availableQuantity);
        }

        // --- Trình Lắng Nghe Sự Kiện ---

        // Khi lựa chọn định dạng thay đổi
        formatInputs.forEach(function (input) {
            input.addEventListener('change', function () {
                // Reset số lượng về 1 khi đổi định dạng để trải nghiệm người dùng tốt hơn
                quantityInput.value = 1;
                updateVariantDetails(); // Gọi hàm cập nhật chính
            });
        });

        // Khi nhấn nút Giảm số lượng
        decrementButton.addEventListener("click", function () {
            let currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) { // Chỉ giảm nếu lớn hơn 1
                quantityInput.value = currentQuantity - 1;
                updateVariantDetails(); // Cập nhật lại hiển thị và trạng thái nút
            }
        });

        // Khi nhấn nút Tăng số lượng
        incrementButton.addEventListener("click", function () {
            let currentQuantity = parseInt(quantityInput.value);
            const maxQuantity = parseInt(quantityInput.max); // Lấy số lượng tối đa từ thuộc tính max
            // Chỉ tăng nếu chưa đạt tối đa
            if (!isNaN(maxQuantity) && currentQuantity < maxQuantity) {
                quantityInput.value = currentQuantity + 1;
                updateVariantDetails(); // Cập nhật lại trạng thái nút
            }
        });

        // Khi người dùng tự nhập số lượng (sự kiện 'change' hoặc 'input')
        quantityInput.addEventListener('change', function () { // 'change' kích hoạt khi mất focus hoặc nhấn Enter
            updateVariantDetails(); // Kiểm tra lại sau khi người dùng có thể đã thay đổi giá trị
        });
        quantityInput.addEventListener('input', function () { // 'input' kích hoạt ngay khi có thay đổi
            // Kiểm tra cơ bản ngay lập tức để ngăn số âm hoặc vượt quá max (tránh hiển thị lỗi tạm thời)
            const max = parseInt(this.max);
            if (parseInt(this.value) < 1) { // Nếu nhỏ hơn 1
                this.value = 1; // Đặt lại là 1
            } else if (!isNaN(max) && parseInt(this.value) > max) { // Nếu lớn hơn max
                this.value = max; // Đặt lại là max
            }
            // Để hàm cập nhật chính xử lý việc kiểm tra cuối cùng và trạng thái nút
            updateVariantDetails();
        });

        // --- Cập Nhật Ban Đầu Khi Tải Trang ---
        // Đảm bảo có ít nhất một biến thể trước khi cố gắng cập nhật
        if (formatInputs.length > 0) {
            updateVariantDetails(); // Gọi hàm cập nhật lần đầu
        } else {
            // Xử lý trường hợp mảng $variant trống - hiển thị thông báo phù hợp
            currentPriceDisplay.textContent = 'Sản phẩm không có sẵn';
            oldPriceDisplay.style.display = 'none';
            quantityDisplay.textContent = '0';
            statusDisplay.textContent = 'Không có sẵn';
            statusDisplay.className = 'stock text-danger font-weight-bold';
            quantityInput.disabled = true;
            decrementButton.disabled = true;
            incrementButton.disabled = true;
            addToCartButton.disabled = true;
            // Thêm thông báo vào khu vực chọn định dạng nếu có
            if (document.querySelector('.widget_format')) {
                document.querySelector('.widget_format').innerHTML += '<p class="text-danger">Sản phẩm này hiện không có định dạng nào để bán.</p>';
            }
        }
    });
</script>

<style>
    /* Định dạng cho label của định dạng được chọn */
    .format-selector:checked+.format-label {
        background-color: #dc3545;
        /* Màu đỏ của Bootstrap (danger) */
        color: white;
        /* Chữ trắng */
        border-color: #dc3545;
        /* Viền cùng màu */
    }

    /* Định dạng chung cho label định dạng */
    .format-label {
        cursor: pointer;
        /* Con trỏ thành hình bàn tay */
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        /* Hiệu ứng chuyển đổi mượt */
        /* Thêm padding nếu không dùng style nút Bootstrap */
        /* padding: 5px 10px; */
        /* border-radius: 4px; */
    }

    /* Ẩn nút radio gốc */
    .format-selector {
        display: none;
    }

    /* Định dạng cho nút thêm giỏ hàng khi bị vô hiệu hóa */
    button[name="add_to_cart"]:disabled {
        background-color: #6c757d;
        /* Màu xám của Bootstrap (secondary) */
        cursor: not-allowed;
        /* Con trỏ không cho phép */
        opacity: 0.65;
        /* Giảm độ sáng */
    }

    /* Giữ lại style gốc cho nút số lượng nếu bạn muốn */
    .variant_quantity_btn input[type="number"] {
        /* width: 60px; */
        /* Đã đặt inline */
        text-align: center;
        /* Căn giữa chữ */
        font-size: 1rem;
        /* Cỡ chữ khớp Bootstrap mặc định */
        /* border: 1px solid #ced4da; */
        /* Viền Bootstrap mặc định */
        /* border-radius: .25rem; */
        /* Bo góc Bootstrap mặc định */
        /* padding: .375rem .75rem; */
        /* Padding Bootstrap mặc định */
        outline: none;
        /* Bỏ viền xanh khi focus */
        -moz-appearance: textfield;
        /* Loại bỏ mũi tên trong Firefox */
    }

    /* Loại bỏ mũi tên tăng giảm trong Chrome/Safari/Edge */
    .variant_quantity_btn input[type="number"]::-webkit-inner-spin-button,
    .variant_quantity_btn input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Điều chỉnh kích thước nút +/- nếu cần */
    .variant_quantity_btn .btn-sm {
        width: 30px;
        /* Làm nút vuông */
        height: calc(1.5em + .5rem + 2px);
        /* Khớp chiều cao form-control-sm */
        padding: .25rem 0;
        /* Chỉnh padding */
        display: flex;
        /* Căn giữa nội dung nút */
        align-items: center;
        justify-content: center;
    }

    /* Căn chỉnh label "Số lượng:" theo chiều dọc */
    .variant_quantity_btn label {
        margin-bottom: 0;
    }

    /* Định dạng màu chữ cho trạng thái */
    .stock.text-success {
        color: #28a745 !important;
    }

    /* Còn hàng */
    .stock.text-danger {
        color: #dc3545 !important;
    }

    /* Hết hàng */
    .stock.text-warning {
        color: #ffc107 !important;
    }

    /* Không xác định */
    .stock.text-muted {
        color: #6c757d !important;
    }

    /* Chưa chọn */
</style>