<?php

class AdminAuthorsController
{
    private $modelAuthor;

    public function __construct()
    {
        $this->modelAuthor = new AuthorAdminModel();
    }

    // Hiển thị danh sách tác giả
    public function list()
    {
        $listAuthors = $this->modelAuthor->getAll();
        require_once './views/admin/authors/list.php';
    }

    // Form thêm tác giả
    public function formAdd()
    {
        require_once './views/admin/authors/add.php';
    }

    // Xử lý thêm tác giả
    public function postAdd()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $author_name = isset($_POST['author_name']) ? trim($_POST['author_name']) : '';
            $bio = isset($_POST['bio']) ? trim($_POST['bio']) : '';

            $errors      = [];

            // Validate tên tác giả
            if (empty($author_name)) {
                $errors['author_name'] = 'Tên tác giả không được để trống.';
            } elseif (strlen($author_name) > 255) {
                $errors['author_name'] = 'Tên tác giả không được vượt quá 255 ký tự.';
            }

            // Validate tiểu sử
            if (empty($bio)) {
                $errors['bio'] = 'Tiểu sử không được để trống.';
            }

            if (empty($errors)) {
                if ($this->modelAuthor->add($author_name, $bio)) {
                    header("Location: " . BASE_URL . 'index.php?action=author');

                    exit();
                } else {
                    $errors['db'] = 'Có lỗi khi thêm tác giả.';
                }
            }

            require_once './views/admin/authors/add.php';
        }
    }

    // Form chỉnh sửa tác giả
    public function formEdit()
    {
        if (!isset($_GET['id_author']) || !is_numeric($_GET['id_author'])) {
            header("Location: " . BASE_URL . '/index.php?action=author');
            exit();
        }

        $author_id = $_GET['id_author'];
        $author    = $this->modelAuthor->getDetail($author_id);

        if ($author) {
            require_once './views/admin/authors/edit.php';
        } else {
            header("Location: " . BASE_URL . '/index.php?action=author');
            exit();
        }
    }

    // Xử lý cập nhật tác giả
    public function postEdit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $author_id   = $_POST['author_id'];
            $author_name = trim($_POST['author_name']);
            $bio         = trim($_POST['bio']);
            $errors      = [];

            // Validate tên tác giả
            if (empty($author_name)) {
                $errors['author_name'] = 'Tên tác giả không được để trống.';
            } elseif (strlen($author_name) > 255) {
                $errors['author_name'] = 'Tên tác giả không được vượt quá 255 ký tự.';
            }

            // Validate tiểu sử
            if (empty($bio)) {
                $errors['bio'] = 'Tiểu sử không được để trống.';
            }

            if (empty($errors)) {
                if ($this->modelAuthor->update($author_id, $author_name, $bio)) {
                    header("Location: " . BASE_URL . '/index.php?action=author');

                    exit();
                } else {
                    $errors['db'] = 'Có lỗi khi cập nhật tác giả.';
                }
            }

            $author = ['author_id' => $author_id, 'author_name' => $author_name, 'bio' => $bio];
            require_once './views/admin/authors/edit.php';
        }
    }

    // Xóa tác giả
    public function delete()
    {
        if (!isset($_GET['id_author']) || !is_numeric($_GET['id_author'])) {
            header("Location: " . BASE_URL . '/index.php?action=author');
            exit();
        }
        $author_id = $_GET['id_author'];
        $author    = $this->modelAuthor->getDetail($author_id);
        if ($author && $this->modelAuthor->destroy($author_id)) {
            header("Location: " . BASE_URL . '/index.php?action=author');

            exit();
        } else {
            header("Location: " . BASE_URL . "/index.php?action=author&error=delete_failed");
            exit();
        }
    }

    // Hiển thị chi tiết một tác giả
    public function showDetail()
    {
        if (!isset($_GET['id_author']) || !is_numeric($_GET['id_author'])) {
            header("Location: " . BASE_URL . '/index.php?action=author');
            exit();
        }

        $author_id = $_GET['id_author'];
        $author    = $this->modelAuthor->getDetail($author_id);

        if ($author) {
            require_once './views/admin/authors/show.php';
        } else {
            header("Location: " . BASE_URL . '/index.php?action=author');

            exit();
        }
    }
}
