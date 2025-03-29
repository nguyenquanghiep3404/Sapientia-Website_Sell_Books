<?php include('./views/admin/layout/header.php'); ?>
<style>
    /* CSS chung */
    .preview-image {
        border: 2px solid #ddd;
        border-radius: 5px;
        padding: 3px;
    }

    /* Ảnh bìa */
    #coverPreview {
        max-width: 300px;
        max-height: 200px;
        object-fit: contain;
    }

    #galleryPreview img {
        border: 2px solid #dee2e6;
        border-radius: 5px;
        padding: 3px;
    }

    #galleryPreview img:hover {
        border-color: #0d6efd;
        cursor: pointer;
    }
</style>

<div class="page-content">
    <!-- Start Container Fluid -->
    <div class="container-xxl">
        <form method="post" enctype="multipart/form-data" class="row">
            <div class="col-xl-12 col-lg-8 ">
                <!-- Phần ảnh bìa -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm ảnh bìa</h4>
                    </div>
                    <div class="card-body">
                        <label class="form-label">Hình ảnh bìa</label>
                        <input type="file" class="form-control" name="book_image" id="coverInput" accept="image/*">
                        <img id="coverPreview" class="img-thumbnail mt-2" alt="Preview ảnh bìa" style="display: none;">
                    </div>
                </div>
                <!-- Phần Album ảnh -->
                <div class="card mt-3">
                    <div class="card-header">
                        <h4 class="card-title">Thêm ảnh album</h4>
                    </div>
                    <div class="card-body">
                        <label class="form-label">Hình ảnh sản phẩm</label>
                        <input type="file" class="form-control" name="gallery[]" id="galleryInput" accept="image/*" multiple>
                        <div id="galleryPreview" class="d-flex flex-wrap gap-2 mt-2"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thông tin sách</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Tên sách</label>
                                    <input type="text" name="book_title" id="product-name" class="form-control" placeholder="Nhập tên sách">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label for="product-categories" class="form-label">Danh mục sách</label>
                                <select name="category_id" class="form-control" id="product-categories" data-choices data-choices-groups data-placeholder="Select Categories" name="choices-single-groups">
                                    <option value="0" selected disabled>Chọn Danh Mục</option>
                                    <?php foreach ($listCategories as $cate) : ?>
                                        <option value="<?= $cate['category_id'] ?>"><?= $cate['category_name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Ngày xuất bản</label>
                                    <input type="date" id="product-brand" name="release_date" class="form-control">
                                </div>
                            </div>
                            <!-- <div class="col-lg-4">               
                                    <label for="gender" class="form-label">Nhà xuất bản</label>
                                    <select class="form-control" id="gender" data-choices data-choices-groups data-placeholder="Select Gender">
                                        <option value="">Select Gender</option>
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                        <option value="Other">Other</option>
                                    </select>
                            </div> -->
                            <!-- <div class="col-lg-4">               
                                    <label for="gender" class="form-label">Tác giả</label>
                                    <select class="form-control" id="gender" data-choices data-choices-groups data-placeholder="Select Gender">
                                        <option value="">Select Gender</option>
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                        <option value="Other">Other</option>
                                    </select>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="description" class="form-label">Mô tả</label>
                                    <textarea class="form-control bg-light-subtle" id="description" rows="7" name="description" placeholder="Nhập mô tả về sách"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Phần biến thể -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div id="variant_list">
                            <div class="variant-item card mb-3">
                                <div class="card-header d-flex justify-content-between align-items-center py-3">
                                    <h5 class="mb-0">Biến thể</h5>
                                    <button type="button" class="btn btn-sm btn-danger remove-variant" disabled>
                                        <i class="bx bx-trash"></i>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <select class="form-select" name="variant_format[]">
                                                    <option value="Bìa cứng">Bìa cứng</option>
                                                    <option value="Bìa mềm">Bìa mềm</option>
                                                    <option value="Ebook">Ebook</option>
                                                </select>
                                                <label>Định dạng</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <select class="form-select" name="variant_language[]">
                                                    <option value="Tiếng Việt">Tiếng Việt</option>
                                                    <option value="Tiếng Anh">Tiếng Anh</option>
                                                    <!-- Các ngôn ngữ khác -->
                                                </select>
                                                <label>Ngôn ngữ</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" name="variant_quantity[]" placeholder="Số lượng">
                                                <label>Số lượng</label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bx bx-dollar"></i></span>
                                                <input type="number" class="form-control" name="variant_price[]" placeholder="Giá gốc">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="bx bxs-discount"></i></span>
                                                <input type="number" class="form-control" name="variant_sale_price[]" placeholder="Giá khuyến mãi">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" id="addVariant" class="btn btn-outline-primary w-100 mt-3">
                            <i class="bx bx-plus"></i> Thêm biến thể
                        </button>
                    </div>
                </div>
                <!-- end biến thể -->
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <input
                                type="submit" name="themmoi"
                                class="btn btn-outline-secondary w-100"
                                value="Thêm Sách">
                            </input>
                        </div>
                        <div class="col-lg-2">
                            <a href="?action=list-book" class="btn btn-primary w-100">Huỷ</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End Container Fluid -->
</div>
<div>
    <?php var_dump($_POST) ?>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Image Preview Script -->
<script>
    // Xử lý ảnh bìa
    document.getElementById('coverInput').addEventListener('change', function(e) {
        const preview = document.getElementById('coverPreview');
        const file = e.target.files[0];

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.style.display = 'block';
                preview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    // Phần xử lý ALBUM ẢNH
    document.getElementById('galleryInput').addEventListener('change', function(e) {
        const galleryContainer = document.getElementById('galleryPreview');
        const files = e.target.files;

        // Reset preview mỗi lần chọn ảnh mới
        galleryContainer.innerHTML = '';

        // Kiểm tra xem có file nào được chọn không
        if (!files || files.length === 0) return;

        // Duyệt qua tất cả các file
        Array.from(files).forEach((file, index) => {
            // Chỉ xử lý file ảnh
            if (!file.type.startsWith('image/')) {
                console.warn(`File ${file.name} không phải là ảnh`);
                return;
            }

            const reader = new FileReader();

            reader.onload = function(e) {
                // Tạo các element cần thiết
                const imgWrapper = document.createElement('div');
                const img = document.createElement('img');
                const removeBtn = document.createElement('button');

                // Thiết lập style
                imgWrapper.className = 'position-relative me-2 mb-2';
                img.style.width = '150px';
                img.style.height = '150px';
                img.style.objectFit = 'cover';
                img.src = e.target.result;

                // Nút xóa ảnh
                removeBtn.className = 'btn btn-danger btn-sm position-absolute top-0 end-0';
                removeBtn.innerHTML = '×';
                removeBtn.onclick = () => {
                    imgWrapper.remove();
                    // Xóa file khỏi FileList (cần xử lý thêm DataTransfer)
                };

                // Thêm vào DOM
                imgWrapper.appendChild(img);
                imgWrapper.appendChild(removeBtn);
                galleryContainer.appendChild(imgWrapper);
            };

            reader.onerror = function(error) {
                console.error(`Lỗi đọc file ${file.name}:`, error);
            };

            reader.readAsDataURL(file);
        });
    });
    // Script quản lý biến thể
    document.getElementById('addVariant').addEventListener('click', cloneVariant);

    function cloneVariant() {
        const original = document.querySelector('.variant-item');
        const clone = original.cloneNode(true);

        clone.querySelectorAll('input').forEach(input => input.value = '');
        clone.querySelectorAll('select').forEach(select => select.selectedIndex = 0);

        document.getElementById('variant_list').appendChild(clone);
        updateRemoveButtons();
    }

    function updateRemoveButtons() {
        const variants = document.querySelectorAll('.variant-item');
        variants.forEach((variant, index) => {
            const btn = variant.querySelector('.remove-variant');
            btn.disabled = variants.length <= 1;
            btn.onclick = () => {
                variant.remove();
                if (variants.length === 1) cloneVariant();
                updateRemoveButtons();
            }
        });
    }

    updateRemoveButtons();
</script>
<?php include('./views/admin/layout/footer.php'); ?>