<?php

class AdminCategoriesController
{
    private $modelCategory;

    public function __construct()
    {
        $this->modelCategory = new CategoryAdminModel();
    }

    // Hiển thị danh sách danh mục
    public function list()
    {
        $listCategory = $this->modelCategory->getAll();
        require_once './views/admin/category/list.php';
    }

    // Form thêm danh mục
    public function formAdd()
    {
        require_once './views/admin/category/add.php';
    }

    // Xử lý thêm danh mục
    // Xử lý thêm danh mục
    public function postAdd()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_name = trim($_POST['category_name']);
            $description   = trim($_POST['description']);
            $errors        = [];

            // Validate tên danh mục
            if (empty($category_name)) {
                $errors['category_name'] = 'Tên danh mục không được để trống.';
            } elseif (strlen($category_name) > 255) {
                $errors['category_name'] = 'Tên danh mục không được vượt quá 255 ký tự.';
            }

            // Validate mô tả
            if (empty($description)) {
                $errors['description'] = 'Mô tả không được để trống.';
            }

            if (empty($errors)) {
                if ($this->modelCategory->add($category_name, $description)) {
                    header("Location: " . BASE_URL . '?action=category');
                    exit();
                } else {
                    $errors['db'] = 'Có lỗi khi thêm danh mục.';
                }
            }

            require_once './views/admin/category/add.php';
        }
    }

    // Form chỉnh sửa danh mục
    public function formEdit()
    {
        if (!isset($_GET['id_cate']) || !is_numeric($_GET['id_cate'])) {
            header("Location: " . BASE_URL . '?action=category');
            exit();
        }

        $category_id = $_GET['id_cate'];
        $categories = $this->modelCategory->getDetail($category_id);

        if ($categories) {
            require_once './views/admin/category/edit.php';
        } else {
            header("Location: " . BASE_URL . '?action=category');
            exit();
        }
    }

    // Xử lý cập nhật danh mục
    // Xử lý cập nhật danh mục
    public function postEdit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category_id   = $_POST['category_id'];
            $category_name = trim($_POST['category_name']);
            $description   = trim($_POST['description']);
            $errors        = [];

            // Validate tên danh mục
            if (empty($category_name)) {
                $errors['category_name'] = 'Tên danh mục không được để trống.';
            } elseif (strlen($category_name) > 255) {
                $errors['category_name'] = 'Tên danh mục không được vượt quá 255 ký tự.';
            }

            // Validate mô tả
            if (empty($description)) {
                $errors['description'] = 'Mô tả không được để trống.';
            }

            if (empty($errors)) {
                if ($this->modelCategory->update($category_id, $category_name, $description)) {
                    header("Location: " . BASE_URL . '?action=category');
                    exit();
                } else {
                    $errors['db'] = 'Có lỗi khi cập nhật danh mục.';
                }
            }

            $categories = ['category_id' => $category_id, 'category_name' => $category_name, 'description' => $description];
            require_once './views/admin/category/edit.php';
        }
    }


    // Xóa danh mục
    public function delete()
    {
        if (!isset($_GET['id_cate']) || !is_numeric($_GET['id_cate'])) {
            header("Location: " . BASE_URL . '?action=category');
            exit();
        }
        $category_id = $_GET['id_cate'];
        $categories  = $this->modelCategory->getDetail($category_id);
        if ($categories && $this->modelCategory->destroy($category_id)) {
            header("Location: " . BASE_URL . '?action=category');
            exit();
        } else {
            header("Location: " . BASE_URL . "?action=categoryt&error=delete_failed");
            exit();
        }
    }
    // Hiển thị chi tiết một danh mục
    public function showDetail()
    {
        if (!isset($_GET['id_cate']) || !is_numeric($_GET['id_cate'])) {
            header("Location: " . BASE_URL . '?action=category');
            exit();
        }

        $category_id = $_GET['id_cate'];
        $category = $this->modelCategory->getDetail($category_id);

        if ($category) {
            require_once './views/admin/category/show.php';
        } else {
            header("Location: " . BASE_URL . '?action=category');
            exit();
        }
    }
}
