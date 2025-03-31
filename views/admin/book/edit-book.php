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
                                    <img src="<?= htmlspecialchars($one[0]['book_image']) ?>" 
                                         class="img-thumbnail mb-2" 
                                         style="max-width: 300px;">
                                <?php endif; ?>
                            </div>
                            <label class="form-label">Cập nhật ảnh mới</label>
                            <input type="file" class="form-control" name="book_image" id="coverInput" accept="image/*">
                            <img id="coverPreview" class="img-thumbnail mt-2" alt="Preview ảnh bìa" style="display: none;">
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
                                        <img src="<?= htmlspecialchars($image) ?>" 
                                             class="img-thumbnail" 
                                             style="width: 150px; height: 150px;">
                                        <input type="hidden" name="existing_gallery[]" value="<?= htmlspecialchars($image) ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <label class="form-label mt-3">Thêm ảnh mới</label>
                            <input type="file" class="form-control" name="gallery[]" id="galleryInput" 
                                   accept="image/*" multiple>
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
                        <div id="variant_list">
                            <?php if (!empty($bookVariants)): ?>
                                <?php foreach ($bookVariants as $variant): ?>
                                    <div class="variant-item card mb-3">
                                        <div class="card-header d-flex justify-content-between align-items-center py-3">
                                            <h5 class="mb-0">Biến thể #<?= $variant['variant_id'] ?></h5>
                                            <button type="button" class="btn btn-sm btn-danger remove-variant">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <input type="hidden" name="variant_id[]" 
                                                   value="<?= $variant['variant_id'] ?>">
                                            <div class="row g-3">
                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <select class="form-select" name="variant_format[]">
                                                            <option value="Bìa cứng" <?= $variant['format'] == 'Bìa cứng' ? 'selected' : '' ?>>Bìa cứng</option>
                                                            <option value="Bìa mềm" <?= $variant['format'] == 'Bìa mềm' ? 'selected' : '' ?>>Bìa mềm</option>
                                                            <option value="Ebook" <?= $variant['format'] == 'Ebook' ? 'selected' : '' ?>>Ebook</option>
                                                        </select>
                                                        <label>Định dạng</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <select class="form-select" name="variant_language[]">
                                                            <option value="Tiếng Việt" <?= $variant['language'] == 'Tiếng Việt' ? 'selected' : '' ?>>Tiếng Việt</option>
                                                            <option value="Tiếng Anh" <?= $variant['language'] == 'Tiếng Anh' ? 'selected' : '' ?>>Tiếng Anh</option>
                                                        </select>
                                                        <label>Ngôn ngữ</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input type="number" class="form-control" 
                                                               name="variant_quantity[]" 
                                                               value="<?= $variant['quantity'] ?>">
                                                        <label>Số lượng</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="bx bx-dollar"></i></span>
                                                        <input type="number" class="form-control" 
                                                               name="variant_price[]" 
                                                               value="<?= $variant['book_price'] ?>">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="bx bxs-discount"></i></span>
                                                        <input type="number" class="form-control" 
                                                               name="variant_sale_price[]" 
                                                               value="<?= $variant['book_sale_price'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <button type="button" id="addVariant" class="btn btn-outline-primary w-100 mt-3">
                            <i class="bx bx-plus"></i> Thêm biến thể
                        </button>
                    </div>
                </div>

                <!-- Nút submit -->
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <input type="submit" name="capnhat" 
                                   class="btn btn-primary w-100" 
                                   value="Cập nhật">
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
    // Image Preview Handlers
    document.getElementById('coverInput').addEventListener('change', function(e) {
        const preview = document.getElementById('coverPreview');
        const file = e.target.files[0];
        if (file) {
            preview.style.display = 'block';
            preview.src = URL.createObjectURL(file);
        }
    });

    document.getElementById('galleryInput').addEventListener('change', function(e) {
        const previewContainer = document.getElementById('galleryPreview');
        previewContainer.innerHTML = '';
        Array.from(e.target.files).forEach(file => {
            const img = document.createElement('img');
            img.className = 'img-thumbnail';
            img.src = URL.createObjectURL(file);
            previewContainer.appendChild(img);
        });
    });

    // Variant Management
    const variantTemplate = document.querySelector('.variant-item').cloneNode(true);
    document.getElementById('addVariant').addEventListener('click', () => {
        const newVariant = variantTemplate.cloneNode(true);
        newVariant.querySelectorAll('input').forEach(input => input.value = '');
        newVariant.querySelectorAll('select').forEach(select => select.selectedIndex = 0);
        document.getElementById('variant_list').appendChild(newVariant);
        updateRemoveButtons();
    });

    function updateRemoveButtons() {
        document.querySelectorAll('.remove-variant').forEach(btn => {
            btn.onclick = function() {
                this.closest('.variant-item').remove();
                updateRemoveButtons();
            }
        });
    }
    updateRemoveButtons();
</script>

<?php include('./views/admin/layout/footer.php'); ?>