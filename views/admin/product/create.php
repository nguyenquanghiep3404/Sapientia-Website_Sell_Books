<style>
    #file-info {
        display: none;
    }

    input[type="file"] {
        display: block; /* Make file inputs visible */
        margin-bottom: 10px;
    }

    .form-group label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-dark {
        background-color: #343a40;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn-dark:hover {
        background-color: #1d2124;
    }

    .variant_item {
        border: 1px solid #eee;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 4px;
        background-color: #f9f9f9;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 10px;
        align-items: center;
    }

    .variant_item label {
        margin-bottom: 0;
    }

    .remove_variant {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 8px 12px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .remove_variant:hover {
        background-color: #c82333;
    }

    #add_variant {
        margin-top: 10px;
    }

    .container {
        background-color: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h3 {
        color: #333;
        margin-bottom: 20px;
    }

    .err {
        font-size: 0.9em;
    }
</style>

<?php include('./views/admin/layout/header.php'); ?>
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
                            <?php if ($_SESSION['role_id'] == 0) { // Quản trị viên ?>
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
            <h3 class="text-center">Thêm Sản Phẩm</h3>
            <form method="post" style="width:1000px; margin:0 auto;" class="mt-3 mb-5" enctype="multipart/form-data"
                onsubmit="return validateForm()">
                <div class="form-group mb-3">
                    <label for="category_id">Tên Danh Mục</label>
                    <select class="form-control" name="category_id" id="category_id">
                        <option value="0" selected disabled>Chọn Danh Mục</option>
                        <?php foreach ($listCategories as $cate): ?>
                            <option value="<?= $cate['category_id'] ?>"><?= $cate['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <span class="err text-danger" id="categoryErr"></span>
                </div>

                <div class="form-group mb-3">
                    <label for="name">Tên Sách</label>
                    <input type="text" name="product_name" id="name" class="form-control">
                    <span class="err text-danger" id="nameErr"></span>
                </div>
                <div class="form-group mb-3">
                    <label for="img">Ảnh Bìa</label>
                    <input type="file" name="product_image" id="img" class="form-control">
                    <span class="err text-danger" id="imgErr"></span>
                </div>
                <div class="form-group mb-3">
                    <label for="gallery">Bộ sưu tập (Chọn ít nhất 1 ảnh)</label>
                    <input type="file" name="product_gallery[]" id="gallery" class="form-control" multiple>
                    <span class="err text-danger" id="galleryErr"></span>
                </div>

                <div class="form-group mb-3">
                    <label for="product_description"> Mô Tả</label>
                    <input type="text" name="product_description" id="product_description" class="form-control">
                    <span class="err text-danger" id="infoErr"></span>
                </div>
                <div id="variant_list">
                    <div class="variant_item mb-3">
                        <label>Định dạng</label>
                        <select class="form-select" name="variant_format[]">
                            <option value="">Chọn định dạng</option>
                            <option value="Bìa cứng">Bìa cứng</option>
                            <option value="Bìa mềm">Bìa mềm</option>
                            <option value="Ebook">Ebook</option>
                        </select>
                        <span class="err text-danger" id="variantFormatErr0"></span>

                        <label>Ngôn ngữ</label>
                        <select class="form-select" name="variant_language[]">
                            <option value="">Chọn ngôn ngữ</option>
                            <option value="Tiếng Việt">Tiếng Việt</option>
                            <option value="Tiếng Anh">Tiếng Anh</option>
                            <option value="Tiếng Pháp">Tiếng Pháp</option>
                            <option value="Tiếng Ý">Tiếng Ý</option>
                            <option value="Tiếng Trung">Tiếng Trung</option>
                            </select>
                        <span class="err text-danger" id="variantLanguageErr0"></span>

                        <label>Số Lượng</label>
                        <input type="number" name="variant_quantity[]" class="form-control variant_quantity"
                            placeholder="Số lượng" min="0">
                        <span class="err text-danger" id="variantQuantityErr0"></span>

                        <label>Giá</label>
                        <input type="number" min="0" name="product_price[]" class="form-control product_price"
                            placeholder="Giá">
                        <span class="err text-danger" id="productPriceErr0"></span>

                        <label>Giá khuyến mãi</label>
                        <input type="number" min="0" name="product_sale_price[]"
                            class="form-control product_sale_price" placeholder="Giá khuyến mãi">

                        <button type="button" class="remove_variant">Xóa</button>
                    </div>
                </div>
                <button type="button" id="add_variant" class="btn btn-primary mt-3">Thêm Biến Thể</button>
                <div class="form-group mb-3">
                    <input type="submit" name="themmoi" value="Thêm Sản Phẩm Mới" class="btn btn-dark px-5">
                </div>
            </form>
        </div>
    </main>


</section>
<script>
    const productForm = document.querySelector('form'); // Get the form element

    function validateForm() {
        // Reset errors
        resetErrors();
        let isValid = true;

        // Validate category
        var category = document.getElementById('category_id');
        if (category.value === '0') {
            displayError('categoryErr', 'Vui lòng chọn danh mục');
            isValid = false;
        }

        // Validate name
        var name = document.getElementById('name');
        if (name.value.trim() === '') {
            displayError('nameErr', 'Vui lòng nhập tên sản phẩm');
            isValid = false;
        }

        // Validate image
        var img = document.getElementById('img');
        if (img.files.length === 0) {
            displayError('imgErr', 'Vui lòng chọn hình ảnh bìa');
            isValid = false;
        }

        // Validate gallery (at least one image)
        var gallery = document.getElementById('gallery');
        if (gallery.files.length === 0) {
            displayError('galleryErr', 'Vui lòng chọn ít nhất một ảnh cho bộ sưu tập');
            isValid = false;
        }

        // Validate description
        var product_description = document.getElementById('product_description');
        if (product_description.value.trim() === '') {
            displayError('infoErr', 'Vui lòng nhập mô tả');
            isValid = false;
        }

        // Validate variants
        const variantItems = document.querySelectorAll('.variant_item');
        if (variantItems.length === 0) {
            alert('Vui lòng thêm ít nhất một biến thể cho sản phẩm.');
            isValid = false;
        }

        variantItems.forEach((variant, index) => {
            const formatSelect = variant.querySelector('select[name="variant_format[]"]');
            const languageSelect = variant.querySelector('select[name="variant_language[]"]');
            const quantityInput = variant.querySelector('input[name="variant_quantity[]"]');
            const priceInput = variant.querySelector('input[name="product_price[]"]');

            const variantIndex = index; // Use the loop index

            if (formatSelect.value === '') {
                displayError(`variantFormatErr${variantIndex}`, 'Vui lòng chọn định dạng', variant);
                isValid = false;
            }
            if (languageSelect.value === '') {
                displayError(`variantLanguageErr${variantIndex}`, 'Vui lòng chọn ngôn ngữ', variant);
                isValid = false;
            }
            if (quantityInput.value.trim() === '' || isNaN(quantityInput.value) || parseInt(quantityInput.value) <= 0) {
                displayError(`variantQuantityErr${variantIndex}`, 'Vui lòng nhập số lượng hợp lệ', variant);
                isValid = false;
            }
            if (priceInput.value.trim() === '' || isNaN(priceInput.value) || parseFloat(priceInput.value) < 0) {
                displayError(`productPriceErr${variantIndex}`, 'Vui lòng nhập giá hợp lệ', variant);
                isValid = false;
            }
        });

        return isValid;
    }

    // Function to reset error messages within a specific element or globally
    function resetErrors(container = document) {
        const errorElements = container.getElementsByClassName('err');
        for (const element of errorElements) {
            element.innerText = '';
        }
    }

    // Function to display error message within a specific element
    function displayError(elementId, message, container = document) {
        const errorElement = container.getElementById(elementId);
        if (errorElement) {
            errorElement.innerText = message;
        }
    }

    document.querySelectorAll('input[type="number"]').forEach(input => {
        input.addEventListener('input', function () {
            if (this.value < 0) {
                this.value = 0;
            }
        });
    });

    document.getElementById('add_variant').addEventListener('click', function () {
        const variantList = document.getElementById('variant_list');
        const originalVariant = document.querySelector('.variant_item');
        if (originalVariant) {
            const newVariant = originalVariant.cloneNode(true);

            // Reset values in the new variant
            newVariant.querySelectorAll('input[type="number"]').forEach(input => input.value = '');
            newVariant.querySelectorAll('select').forEach(select => select.value = '');

            // Update error span IDs to be unique
            const index = variantList.children.length;
            newVariant.querySelectorAll('.err').forEach(span => {
                const originalId = span.id;
                if (originalId) {
                    const newId = originalId.replace(/\d+$/, index); // Replace any number at the end with the new index
                    span.id = newId;
                }
                span.innerText = ''; // Clear any previous error messages
            });

            variantList.appendChild(newVariant);
            updateRemoveButtons(); // Update the state of remove buttons
        } else {
            const variantList = document.getElementById('variant_list');
            const newVariantDiv = document.createElement('div');
            newVariantDiv.classList.add('variant_item', 'mb-3');
            newVariantDiv.innerHTML = `
                <label>Định dạng</label>
                <select class="form-select" name="variant_format[]">
                    <option value="">Chọn định dạng</option>
                    <option value="Bìa cứng">Bìa cứng</option>
                    <option value="Bìa mềm">Bìa mềm</option>
                    <option value="Ebook">Ebook</option>
                </select>
                <span class="err text-danger" id="variantFormatErr${variantList.children.length}"></span>

                <label>Ngôn ngữ</label>
                <select class="form-select" name="variant_language[]">
                    <option value="">Chọn ngôn ngữ</option>
                    <option value="Tiếng Việt">Tiếng Việt</option>
                    <option value="Tiếng Anh">Tiếng Anh</option>
                    <option value="Tiếng Pháp">Tiếng Pháp</option>
                    <option value="Tiếng Ý">Tiếng Ý</option>
                    <option value="Tiếng Trung">Tiếng Trung</option>
                    </select>
                <span class="err text-danger" id="variantLanguageErr${variantList.children.length}"></span>

                <label>Số Lượng</label>
                <input type="number" name="variant_quantity[]" class="form-control variant_quantity"
                    placeholder="Số lượng" min="0">
                <span class="err text-danger" id="variantQuantityErr${variantList.children.length}"></span>

                <label>Giá</label>
                <input type="number" min="0" name="product_price[]" class="form-control product_price"
                    placeholder="Giá">
                <span class="err text-danger" id="productPriceErr${variantList.children.length}"></span>

                <label>Giá khuyến mãi</label>
                <input type="number" min="0" name="product_sale_price[]"
                    class="form-control product_sale_price" placeholder="Giá khuyến mãi">

                <button type="button" class="remove_variant">Xóa</button>
            `;
            variantList.appendChild(newVariantDiv);
            updateRemoveButtons(); // Update the state of remove buttons
        }
    });

    document.getElementById('variant_list').addEventListener('click', function (e) {
        if (e.target.classList.contains('remove_variant')) {
            const variantList = document.getElementById('variant_list');
            if (variantList.children.length > 1) {
                e.target.parentElement.remove();
                updateRemoveButtons(); // Update the state of remove buttons after removal
            } else {
                alert('Bạn phải giữ lại ít nhất một biến thể.');
            }
        }
    });

    function updateRemoveButtons() {
        const variantList = document.getElementById('variant_list');
        const removeButtons = variantList.querySelectorAll('.remove_variant');
        if (variantList.children.length === 1) {
            removeButtons.forEach(button => {
                button.disabled = true;
                button.style.backgroundColor = '#6c757d'; // Grey out the button
                button.style.cursor = 'not-allowed';
            });
        } else {
            removeButtons.forEach(button => {
                button.disabled = false;
                button.style.backgroundColor = '#dc3545'; // Restore original color
                button.style.cursor = 'pointer';
            });
        }
    }

    // Call updateRemoveButtons initially to disable if only one variant exists
    updateRemoveButtons();

    // Prevent form submission if validation fails
    productForm.addEventListener('submit', function(event) {
        if (!validateForm()) {
            event.preventDefault(); // Prevent the default form submission
        }
    });
</script>

<?php include('./views/admin/layout/footer.php'); ?>