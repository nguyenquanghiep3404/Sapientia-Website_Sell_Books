<?php include('./views/admin/layout/header.php'); ?>
<style>
    .preview-image {
        border: 2px solid #ddd;
        border-radius: 5px;
        padding: 3px;
    }

    #coverPreview {
        max-width: 300px;
        max-height: 200px;
        object-fit: contain;
    }

    #galleryPreview img {
        max-width: 150px;
        max-height: 150px;
        object-fit: cover;
        margin: 5px;
    }

    .existing-gallery img:hover {
        border-color: #0d6efd;
        cursor: pointer;
    }
</style>

<div class="page-content">
    <div class="container-xxl">
        <form method="post" enctype="multipart/form-data" class="row">
            <div class="col-xl-12 col-lg-8">
                <!-- Phần ảnh bìa -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ảnh bìa</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Ảnh hiện tại</label>
                            <div>
                                <?php if (!empty($one[0]['book_image'])): ?>
                                    <img src="<?= htmlspecialchars($one[0]['book_image']) ?>" class="img-thumbnail mb-2"
                                        style="max-width: 300px;">
                                <?php endif; ?>
                            </div>
                            <label class="form-label">Cập nhật ảnh mới</label>
                            <input type="file" class="form-control" name="book_image" id="coverInput" accept="image/*">
                            <img id="coverPreview" class="img-thumbnail mt-2" alt="Preview ảnh bìa"
                                style="display: none;">
                        </div>
                    </div>
                </div>

                <!-- Phần Album ảnh -->
                <div class="card mt-3">
                    <div class="card-header">
                        <h4 class="card-title">Album ảnh</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Ảnh hiện tại</label>
                            <div class="existing-gallery d-flex flex-wrap gap-2">
                                <?php
                                $existingGallery = isset($one[0]['gallery']) ? json_decode($one[0]['gallery'], true) : [];
                                foreach ($existingGallery as $image): ?>
                                    <div class="position-relative">
                                        <img src="<?= htmlspecialchars($image) ?>" class="img-thumbnail"
                                            style="width: 150px; height: 150px;">
                                        <input type="hidden" name="existing_gallery[]"
                                            value="<?= htmlspecialchars($image) ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <label class="form-label mt-3">Thêm ảnh mới</label>
                            <input type="file" class="form-control" name="gallery[]" id="galleryInput" accept="image/*"
                                multiple>
                            <div id="galleryPreview" class="d-flex flex-wrap gap-2 mt-2"></div>
                        </div>
                    </div>
                </div>

                <!-- Thông tin sách -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thông tin sách</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Tên sách</label>
                                    <input type="text" name="book_title" class="form-control"
                                        value="<?= htmlspecialchars($one[0]['book_title'] ?? '') ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">Danh mục</label>
                                <select name="category_id" class="form-control">
                                    <option value="">Chọn danh mục</option>
                                    <?php foreach ($listCategories as $cate): ?>
                                        <option value="<?= $cate['category_id'] ?>"
                                            <?= $cate['category_id'] == ($one[0]['category_id'] ?? '') ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($cate['category_name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Ngày xuất bản</label>
                                    <input type="date" name="release_date" class="form-control"
                                        value="<?= htmlspecialchars($one[0]['release_date'] ?? '') ?>">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mô tả</label>
                            <textarea class="form-control" name="description" rows="7"><?=
                                htmlspecialchars($one[0]['description'] ?? '') ?></textarea>
                        </div>
                    </div>
                </div>

                <!-- Biến thể sách -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Quản lý biến thể</h5>
                        <div id="variant_list">
                            <?php
                            // Lấy danh sách biến thể từ biến $one mà Controller đã truyền vào
                            // Sử dụng ?? [] để tránh lỗi nếu $one không có key 'variants' hoặc $one là null
                            $existingVariants = $one['variants'] ?? [];
                            ?>

                            <?php // --- PHẦN LẶP QUA CÁC BIẾN THỂ HIỆN CÓ --- ?>
                            <?php if (!empty($existingVariants)): ?>
                                <?php foreach ($existingVariants as $variant): ?>
                                    <div class="variant-item card mb-3"> <?php // Đây là khối cho một biến thể hiện có ?>
                                        <div
                                            class="card-header d-flex justify-content-between align-items-center py-2 bg-light">
                                            <h6 class="mb-0">Biến thể hiện có
                                                #<?= htmlspecialchars($variant['book_variant_id']) // Hiển thị ID biến thể ?>
                                            </h6>
                                            <button type="button" class="btn btn-sm btn-outline-danger remove-variant"
                                                title="Xóa biến thể này">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <?php // Input ẩn chứa ID của biến thể này, dùng để Controller biết update biến thể nào ?>
                                            <input type="hidden" name="variant_id[]"
                                                value="<?= htmlspecialchars($variant['book_variant_id']) ?>">

                                            <div class="row g-3">
                                                <?php // --- Các input cho biến thể hiện có --- ?>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <?php // Tên input là variant_format[] ?>
                                                        <select class="form-select" name="variant_format[]">
                                                            <?php // So sánh với $variant['format'] để chọn đúng option ?>
                                                            <option value="Bìa cứng" <?= ($variant['format'] == 'Bìa cứng') ? 'selected' : '' ?>>Bìa cứng</option>
                                                            <option value="Bìa mềm" <?= ($variant['format'] == 'Bìa mềm') ? 'selected' : '' ?>>Bìa mềm</option>
                                                            <option value="Ebook" <?= ($variant['format'] == 'Ebook') ? 'selected' : '' ?>>Ebook</option>
                                                        </select>
                                                        <label>Định dạng</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <?php // Tên input là variant_language[] ?>
                                                        <select class="form-select" name="variant_language[]">
                                                            <?php // So sánh với $variant['language'] để chọn đúng option ?>
                                                            <option value="Tiếng Việt" <?= ($variant['language'] == 'Tiếng Việt') ? 'selected' : '' ?>>Tiếng Việt</option>
                                                            <option value="Tiếng Anh" <?= ($variant['language'] == 'Tiếng Anh') ? 'selected' : '' ?>>Tiếng Anh</option>
                                                            <option value="Tiếng Pháp" <?= ($variant['language'] == 'Tiếng Pháp') ? 'selected' : '' ?>>Tiếng Pháp</option>
                                                            <option value="Tiếng Ý" <?= ($variant['language'] == 'Tiếng Ý') ? 'selected' : '' ?>>Tiếng Ý</option>
                                                            <option value="Tiếng Trung" <?= ($variant['language'] == 'Tiếng Trung') ? 'selected' : '' ?>>Tiếng Trung</option>
                                                        </select>
                                                        <label>Ngôn ngữ</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <?php // Tên input là variant_quantity[] ?>
                                                        <input type="number" class="form-control" name="variant_quantity[]"
                                                            value="<?= htmlspecialchars($variant['quantity'] ?? 0) ?>" min="0">
                                                        <label>Số lượng</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Giá gốc</label>
                                                    <div class="input-group">
                                                        <?php // Tên input là variant_price[] ?>
                                                        <input type="number" class="form-control" name="variant_price[]"
                                                            value="<?= htmlspecialchars($variant['book_price'] ?? '') ?>"
                                                            step="1000" min="0">
                                                        <span class="input-group-text">đ</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Giá khuyến mãi (nếu có)</label>
                                                    <div class="input-group">
                                                        <?php // Tên input là variant_sale_price[] ?>
                                                        <input type="number" class="form-control" name="variant_sale_price[]"
                                                            value="<?= htmlspecialchars($variant['book_sale_price'] ?? '') ?>"
                                                            step="1000" min="0">
                                                        <span class="input-group-text">đ</span>
                                                    </div>
                                                </div>
                                            </div> <?php // Kết thúc .row.g-3 ?>
                                        </div> <?php // Kết thúc .card-body ?>
                                    </div> <?php // Kết thúc .variant-item ?>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-muted text-center">Sách này hiện chưa có biến thể nào.</p>
                            <?php endif; ?>
                            <?php // --- KẾT THÚC PHẦN LẶP BIẾN THỂ HIỆN CÓ --- ?>
                        </div> <?php // Kết thúc #variant_list ?>

                        <div id="variant_template" class="variant-item card mb-3" style="display: none;">
                            <div class="card-header d-flex justify-content-between align-items-center py-2 bg-light">
                                <h6 class="mb-0">Biến thể mới</h6>
                                <button type="button" class="btn btn-sm btn-outline-danger remove-variant"
                                    title="Xóa biến thể này">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </div>
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" name="new_variant_format[]">
                                                <option value="Bìa cứng">Bìa cứng</option>
                                                <option value="Bìa mềm">Bìa mềm</option>
                                                <option value="Ebook">Ebook</option>
                                            </select>
                                            <label>Định dạng</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select class="form-select" name="new_variant_language[]">
                                                <option value="Tiếng Việt">Tiếng Việt</option>
                                                <option value="Tiếng Anh">Tiếng Anh</option>
                                                <option value="Tiếng Pháp">Tiếng Pháp</option>
                                                <option value="Tiếng Ý">Tiếng Ý</option>
                                                <option value="Tiếng Trung">Tiếng Trung</option>
                                            </select>
                                            <label>Ngôn ngữ</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="new_variant_quantity[]"
                                                value="1" min="0">
                                            <label>Số lượng</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Giá gốc</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="new_variant_price[]"
                                                value="" step="1000" min="0" placeholder="Nhập giá gốc">
                                            <span class="input-group-text">đ</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Giá khuyến mãi (nếu có)</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="new_variant_sale_price[]"
                                                value="" step="1000" min="0" placeholder="Nhập giá sale">
                                            <span class="input-group-text">đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="addVariant" class="btn btn-outline-primary w-100 mt-3">
                            <i class="bx bx-plus"></i> Thêm biến thể mới
                        </button>
                    </div> <?php // Kết thúc .card-body chính ?>
                </div> <?php // Kết thúc .card ?>
                <!-- Nút submit -->
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <input type="submit" name="capnhat" class="btn btn-primary w-100" value="Cập nhật">
                        </div>
                        <div class="col-lg-2">
                            <a href="?action=list-book" class="btn btn-outline-secondary w-100">Huỷ</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    // --- Phần xử lý ảnh bìa và gallery giữ nguyên ---
    // Xử lý ảnh bìa
    document.getElementById('coverInput').addEventListener('change', function (e) {
        const preview = document.getElementById('coverPreview');
        const file = e.target.files[0];

        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.style.display = 'block';
                preview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        } else {
            // Ẩn preview nếu không chọn file hoặc file không phải ảnh
            preview.style.display = 'none';
            preview.src = ''; // Xóa src cũ
        }
    });

    // Phần xử lý ALBUM ẢNH
    // --- (Code xử lý gallery giữ nguyên như bạn đã cung cấp) ---
    document.getElementById('galleryInput').addEventListener('change', function (e) {
        const galleryContainer = document.getElementById('galleryPreview');
        const files = e.target.files;

        // Không reset preview khi chọn thêm ảnh, chỉ cần xóa các ảnh đã bị gỡ bỏ trước đó (nếu có)
        // galleryContainer.innerHTML = ''; // Bỏ dòng này nếu muốn giữ ảnh preview cũ khi chọn thêm

        if (!files || files.length === 0) return;

        Array.from(files).forEach((file) => {
            if (!file.type.startsWith('image/')) {
                console.warn(`File ${file.name} không phải là ảnh`);
                return;
            }

            const reader = new FileReader();

            reader.onload = function (e) {
                const imgWrapper = document.createElement('div');
                const img = document.createElement('img');
                const removeBtn = document.createElement('button');

                imgWrapper.className = 'position-relative me-2 mb-2 d-inline-block'; // Thêm d-inline-block
                img.className = 'img-thumbnail'; // Thêm class thumbnail
                img.style.width = '150px';
                img.style.height = '150px';
                img.style.objectFit = 'cover';
                img.src = e.target.result;
                img.alt = file.name; // Thêm alt text

                removeBtn.type = 'button'; // Quan trọng: để không submit form
                removeBtn.className = 'btn btn-danger btn-sm position-absolute top-0 end-0 m-1 p-0 lh-1'; // Style nút xóa
                removeBtn.innerHTML = '<i class="bx bx-x fs-sm"></i>'; // Dùng icon X nhỏ
                removeBtn.style.width = '20px'; // Kích thước nút xóa
                removeBtn.style.height = '20px';
                removeBtn.title = 'Xóa ảnh này'; // Thêm title

                // Lưu trữ tham chiếu đến file gốc (quan trọng để xóa khỏi input)
                imgWrapper.fileRef = file;

                removeBtn.onclick = () => {
                    imgWrapper.remove();
                    // Cập nhật FileList trong input (phần này phức tạp hơn)
                    removeFileFromInput(document.getElementById('galleryInput'), file);
                };

                imgWrapper.appendChild(img);
                imgWrapper.appendChild(removeBtn);
                galleryContainer.appendChild(imgWrapper);
            };

            reader.onerror = function (error) {
                console.error(`Lỗi đọc file ${file.name}:`, error);
            };

            reader.readAsDataURL(file);
        });
    });

    // Hàm xóa file khỏi input file (cần thiết khi xóa preview)
    function removeFileFromInput(fileInput, fileToRemove) {
        const dataTransfer = new DataTransfer();
        const files = Array.from(fileInput.files);

        files.forEach(file => {
            // Chỉ thêm lại những file không phải là file cần xóa
            if (file !== fileToRemove) {
                dataTransfer.items.add(file);
            }
        });

        // Gán lại danh sách file mới vào input
        fileInput.files = dataTransfer.files;
    }

    // Xóa ảnh gallery hiện có (cần thêm nút xóa cho ảnh hiện có)
    document.querySelectorAll('.existing-gallery .position-relative').forEach(wrapper => {
        const removeBtn = document.createElement('button');
        const hiddenInput = wrapper.querySelector('input[name="existing_gallery[]"]');
        const imgSrc = hiddenInput.value;

        removeBtn.type = 'button';
        removeBtn.className = 'btn btn-danger btn-sm position-absolute top-0 end-0 m-1 p-0 lh-1';
        removeBtn.innerHTML = '<i class="bx bx-x fs-sm"></i>';
        removeBtn.style.width = '20px';
        removeBtn.style.height = '20px';
        removeBtn.title = 'Xóa ảnh này khỏi gallery';

        removeBtn.onclick = () => {
            if (confirm(`Bạn chắc chắn muốn xóa ảnh ${imgSrc.split('/').pop()} khỏi gallery? Hành động này sẽ xóa ảnh khỏi danh sách khi bạn cập nhật.`)) {
                wrapper.remove(); // Xóa cả div chứa ảnh và input hidden
            }
        };
        wrapper.appendChild(removeBtn);
    });



    // === Script quản lý biến thể (ĐÃ SỬA) ===
    document.getElementById('addVariant').addEventListener('click', addVariantFromTemplate);

    function addVariantFromTemplate() {
        const template = document.getElementById('variant_template');
        if (!template) {
            console.error('Không tìm thấy template biến thể!');
            return;
        }
        const clone = template.cloneNode(true); // Clone template

        // Quan trọng: Bỏ thuộc tính ID và style display none để nó hiển thị
        clone.id = '';
        clone.style.display = 'block'; // Hoặc dùng class để quản lý hiển thị

        document.getElementById('variant_list').appendChild(clone); // Thêm vào danh sách
        updateRemoveButtons(); // Cập nhật trạng thái nút xóa
    }

    function updateRemoveButtons() {
        const variants = document.querySelectorAll('#variant_list .variant-item'); // Chỉ tìm trong #variant_list
        variants.forEach((variant) => {
            const btn = variant.querySelector('.remove-variant');
            if (btn) { // Kiểm tra nút có tồn tại không
                // Cho phép xóa nếu có nhiều hơn 0 biến thể (kể cả khi chỉ còn 1)
                btn.disabled = false; // Luôn cho phép xóa (nếu cần giữ lại ít nhất 1, dùng variants.length <= 1)

                // Gán lại sự kiện onclick để đảm bảo nó hoạt động đúng sau khi clone
                btn.onclick = () => {
                    // Hỏi xác nhận trước khi xóa
                    if (confirm('Bạn chắc chắn muốn xóa biến thể này?')) {
                        variant.remove();
                        // Không cần gọi lại updateRemoveButtons ở đây vì không còn logic phức tạp
                        // Nếu bạn có logic disable nút khi còn 1 item thì gọi lại: updateRemoveButtons();
                    }
                }
            }
        });

        // Nếu muốn disable nút xóa của item cuối cùng (khi chỉ còn 1)
        /*
        if (variants.length === 1) {
            const lastBtn = variants[0].querySelector('.remove-variant');
            if (lastBtn) {
                lastBtn.disabled = true;
            }
        }
        */
    }

    // Gọi lần đầu để gán sự kiện cho các nút xóa hiện có (nếu có)
    updateRemoveButtons();
</script>


<?php include('./views/admin/layout/footer.php'); ?>