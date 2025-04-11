<?php include('./views/admin/layout/header.php'); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<style>
    /* Basic styling for better appearance */


    #sidebar .brand img {
        width: 100px;
        margin-bottom: 20px;
    }





    #content nav {
        background: #e0f2f7;
        /* Light cyan background for navbar */
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    #content nav .form-input {
        background: white;
    }

    #content nav .notification .num {
        background: #f44336;
        /* Red for notification number */
        color: white;
    }

    .header_account .dropdown_account_link {
        background: white;
        border: 1px solid #ddd;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .header_account .dropdown_account_link li a:hover {
        background: #f5f5f5;
    }

    main {
        padding: 20px;
        background: #f9f9f9;
        /* Light gray background for main content */
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    .form-control {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 10px;
    }

    .btn-dark {
        background-color: #333;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color: #555;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 8px 15px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 0.9em;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    .variant_item {
        border: 1px solid #ddd;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 4px;
        background-color: #f8f9fa;
    }

    .variant_item label {
        margin-top: 10px;
    }

    .variant_item select,
    .variant_item input[type="number"],
    .variant_item input[type="text"] {
        margin-bottom: 10px;
    }

    #add_variant {
        margin-top: 20px;
    }

    .d-flex.flex-wrap.gap-2 img {
        border: 1px solid #ccc;
        padding: 5px;
        border-radius: 4px;
        background-color: white;
    }

    /* Hover effect for sidebar links */
    #sidebar .side-menu li a {
        transition: background-color 0.3s ease;
    }

    /* Animation for the main heading */
    main h3 {
        animation: fadeInUp 0.5s ease-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<section id="sidebar">
    <a href="index.php" class="brand">
        <img src="../uploads/logo_owenstore.svg" alt="">
    </a>
    <ul class="side-menu top">
        <li>
            <a href="index.php?action=admin">
                <i class='bx bxs-home'></i>
                <span class="text">Trang Chủ</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=home-dm">
                <i class='bx bxs-category-alt'></i>
                <span class="text">Danh Mục</span>
            </a>
        </li>
        <li class="active">
            <a href="index.php?action=product">
                <i class='bx bxs-window-alt'></i>
                <span class="text">Sản Phẩm</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=listOrders">
                <i class='bx bxs-calendar-check'></i>
                <span class="text">Đơn Hàng</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=showComment">
                <i class='bx bxs-chat'></i>
                <span class="text">Phản Hồi</span>
            </a>
        </li>
        <li>
            <a href="index.php?action=all_register">
                <i class='bx bxs-group'></i>
                <span class="text">Tài Khoản</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="index.php?action=logout" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Đăng Xuất</span>
            </a>
        </li>
    </ul>
</section>

<section id="content">
    <nav>
        <i class='bx bx-menu'></i>
        <a href="?action=admin" class="nav-link">Trang Chủ</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Tìm Kiếm...">
                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <span class="num">8</span>
        </a>
        <div class="header_account">
            <ul class="d-flex">
                <li class="header_search"><a href="#"><i class="icon-magnifier icons"></i></a></li>
                <li class="account_link">
                    <a href="#"><i class="icon-user icons"></i> Tài Khoản</a>
                    <ul class="dropdown_account_link">
                        <?php if (isset($_SESSION['name'])) { ?>
                            <li><a href="?action=profile"><i class="fas fa-user-circle"></i> Xin Chào
                                    <?= ($_SESSION['name']['name']) ?>!</a></li>
                            <li><a href="?action=profile"><i class="fas fa-user-cog"></i> Quản Lý Tài Khoản</a></li>
                            <?php if ($_SESSION['role_id'] == 0) { // Quản trị viên 
                            ?>
                                <li><a href="?action=admin"><i class="fas fa-tools"></i> Truy Cập Trang Admin</a></li>
                            <?php } ?>
                            <li><a href="?action=logout"><i class="fas fa-sign-out-alt"></i> Đăng Xuất</a></li>
                        <?php } else { ?>
                            <li><a href="?action=login"><i class="fas fa-sign-in-alt"></i> Đăng Nhập</a></li>
                            <li><a href="?action=register"><i class="fas fa-user-plus"></i> Đăng Kí</a></li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <main class="my-5">
        <div class="container">
            <h3 class="text-center mb-4"> Chỉnh Sửa Sản Phẩm: <?= $one[0]['name'] ?></h3>

            <form action="?action=product-form-edit&id=<?= $one[0]['product_id'] ?>" method="post"
                enctype="multipart/form-data" style="max-width: 900px; margin: 0 auto;" class="mt-3 mb-5">

                <div class="form-group mb-3">
                    <label for="category_id">Tên Danh Mục</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <?php
                        if (isset($listCategories)) {
                            foreach ($listCategories as $cate) {
                                $selected = ($cate['category_id'] == $one[0]['category_id']) ? 'selected' : '';
                                echo '<option value="' . $cate['category_id'] . '" ' . $selected . '>' . $cate['name'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="name">Tên Sản Phẩm</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="<?= htmlspecialchars($one[0]['name']) ?>">
                </div>

                <div class="form-group mb-3">
                    <label for="image">Hình Ảnh Hiện Tại</label>
                    <?php if (!empty($one[0]['image'])): ?>
                        <img src="<?= htmlspecialchars($one[0]['image']) ?>" alt="Ảnh sản phẩm"
                            class="img-thumbnail d-block mb-2" width="150">
                    <?php else: ?>
                        <p>Không có hình ảnh hiện tại.</p>
                    <?php endif; ?>
                    <label for="image">Chọn Hình Ảnh Mới (nếu cần)</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="gallery">Gallery Hiện Tại</label>
                    <div class="d-flex flex-wrap gap-2 mb-2">
                        <?php
                        $gallery_images = json_decode($one[0]['gallery'], true); // Giải mã JSON thành mảng
                        if (!empty($gallery_images)) {
                            foreach ($gallery_images as $gallery_image) {
                                echo '<img src="' . htmlspecialchars($gallery_image) . '" alt="Ảnh gallery" class="img-thumbnail" width="100">';
                            }
                        } else {
                            echo '<p>Không có ảnh trong gallery.</p>';
                        }
                        ?>
                    </div>
                    <label for="gallery">Thêm Ảnh Mới vào Gallery (chọn nhiều ảnh)</label>
                    <input type="file" name="product_gallery[]" id="gallery" class="form-control" multiple>
                </div>

                <div class="form-group mb-3">
                    <label for="product_description">Mô tả sản phẩm</label>
                    <textarea id="product_description" name="product_description" class="form-control"
                        rows="5"><?= htmlspecialchars($one[0]['description']) ?></textarea>
                </div>

                <div class="form-group mb-3">
                    <h4>Biến Thể Hiện Tại</h4>
                    <div id="variant_list">
                        <?php if (!empty($variant) && is_array($variant)): ?>
                            <?php foreach ($variant as $variants): ?>
                                <div class="variant_item mb-3">
                                    <label>Định dạng</label>
                                    <input type="text" name="variant_format[]" class="form-control"
                                        value="<?= htmlspecialchars($variants['format'] ?? '') ?>">

                                    <input type="number" name="variant_quantity[]" class="form-control"
                                        value="<?= htmlspecialchars($variants['quantity'] ?? '') ?>">

                                    <input type="number" min="0" name="product_price[]" class="form-control"
                                        value="<?= htmlspecialchars($variants['price'] ?? '') ?>" placeholder="Giá">

                                    <input type="number" min="0" name="product_sale_price[]" class="form-control"
                                        value="<?= htmlspecialchars($variants['sale_price'] ?? '') ?>" placeholder="Giá khuyến mãi">

                                    <input type="hidden" name="variant_id[]"
                                        value="<?= htmlspecialchars($variants['product_variant_id'] ?? '') ?>">

                                    <a href="?action=product-form-edit&id=<?= htmlspecialchars($id ?? '') ?>&delete_variant=<?= htmlspecialchars($variants['product_variant_id'] ?? '') ?>"
                                        class="btn btn-danger btn-sm mt-2"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa biến thể này?')">
                                        <i class="fas fa-trash-alt"></i> Xóa
                                    </a>


                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>Không có biến thể nào cho sản phẩm này.</p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <h4>Thêm Biến Thể Mới</h4>
                    <div id="new-variants-container">
                    </div>
                    <button type="button" id="add_variant" class="btn btn-primary mt-3"><i class="fas fa-plus"></i> Thêm
                        Biến Thể</button>
                    <small class="form-text text-muted">Bấm nút để thêm một bộ tùy chọn biến thể mới.</small>
                </div>

                <div class="form-group mb-3">
                    <button type="submit" name="capnhat" class="btn btn-dark px-4"><i class="fas fa-save"></i> Cập Nhật
                        Sản Phẩm</button>
                    <a href="?action=product" class="btn btn-secondary ml-2"><i class="fas fa-arrow-left"></i> Quay
                        Lại</a>
                </div>
            </form>
        </div>
    </main>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addVariantButton = document.getElementById('add_variant');
        const newVariantsContainer = document.getElementById('new-variants-container');

        addVariantButton.addEventListener('click', function() {
            const newVariantItem = document.createElement('div');
            newVariantItem.classList.add('variant_item', 'mb-3');

            newVariantItem.innerHTML = `
                <label>Phân loại</label>
                    <input type="text" name="new_variant_format[]" class="form-control variant_format"
                            placeholder="Phân loại">
                <label>Số Lượng</label>
                <input type="number" name="new_variant_quantity[]" class="form-control" placeholder="Số lượng" value="0" min="0">

                <label>Giá</label>
                <input type="number" min="0" name="new_product_price[]" class="form-control" placeholder="Giá" value="0">

                <label>Giá khuyến mãi</label>
                <input type="number" min="0" name="new_product_sale_price[]" class="form-control" placeholder="Giá khuyến mãi" value="0">

                <button type="button" class="btn btn-danger btn-sm mt-2 remove_new_variant"><i class="fas fa-times"></i> Xóa</button>
            `;

            newVariantsContainer.appendChild(newVariantItem);
        });

        newVariantsContainer.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove_new_variant')) {
                e.target.parentElement.remove();
            }
        });

        // Ensure quantity and price inputs are not negative
        document.querySelectorAll('input[type="number"]').forEach(input => {
            input.addEventListener('input', function() {
                if (this.value < 0) {
                    this.value = 0;
                }
            });
        });
    });
</script>
<?php include('./views/admin/layout/footer.php'); ?>