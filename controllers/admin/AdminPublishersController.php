<?php

class AdminPublishersController
{
    private $modelPublisher;

    public function __construct()
    {
        $this->modelPublisher = new PublisherAdminModel();
    }

    // Hiển thị danh sách nhà xuất bản
    public function list()
    {
        $listPublishers = $this->modelPublisher->getAll();
        require_once './views/admin/publishers/list.php';
    }

    // Form thêm nhà xuất bản
    public function formAdd()
    {
        require_once './views/admin/publishers/add.php';
    }

    // Xử lý thêm nhà xuất bản
    public function postAdd()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $publisher_name = trim($_POST['publisher_name']);
            $errors         = [];

            // Validate tên nhà xuất bản
            if (empty($publisher_name)) {
                $errors['publisher_name'] = 'Tên nhà xuất bản không được để trống.';
            } elseif (strlen($publisher_name) > 255) {
                $errors['publisher_name'] = 'Tên nhà xuất bản không được vượt quá 255 ký tự.';
            }

            if (empty($errors)) {
                if ($this->modelPublisher->add($publisher_name)) {
                    header("Location: " . BASE_URL . '?act=list&type=publisher');
                    exit();
                } else {
                    $errors['db'] = 'Có lỗi khi thêm nhà xuất bản.';
                }
            }

            require_once './views/admin/publishers/add.php';
        }
    }

    // Form chỉnh sửa nhà xuất bản
    public function formEdit()
    {
        if (!isset($_GET['id_publisher']) || !is_numeric($_GET['id_publisher'])) {
            header("Location: " . BASE_URL . '?act=list&type=publisher');
            exit();
        }

        $publisher_id = $_GET['id_publisher'];
        $publisher    = $this->modelPublisher->getDetail($publisher_id);

        if ($publisher) {
            require_once './views/admin/publishers/edit.php';
        } else {
            header("Location: " . BASE_URL . '?act=list&type=publisher');
            exit();
        }
    }

    // Xử lý cập nhật nhà xuất bản
    public function postEdit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $publisher_id   = $_POST['publisher_id'];
            $publisher_name = trim($_POST['publisher_name']);
            $errors         = [];

            // Validate tên nhà xuất bản
            if (empty($publisher_name)) {
                $errors['publisher_name'] = 'Tên nhà xuất bản không được để trống.';
            } elseif (strlen($publisher_name) > 255) {
                $errors['publisher_name'] = 'Tên nhà xuất bản không được vượt quá 255 ký tự.';
            }

            if (empty($errors)) {
                if ($this->modelPublisher->update($publisher_id, $publisher_name)) {
                    header("Location: " . BASE_URL . '?act=list&type=publisher');
                    exit();
                } else {
                    $errors['db'] = 'Có lỗi khi cập nhật nhà xuất bản.';
                }
            }

            $publisher = ['publisher_id' => $publisher_id, 'publisher_name' => $publisher_name];
            require_once './views/admin/publishers/edit.php';
        }
    }

    // Xóa nhà xuất bản
    public function delete()
    {
        if (!isset($_GET['id_publisher']) || !is_numeric($_GET['id_publisher'])) {
            header("Location: " . BASE_URL . '?act=list&type=publisher');
            exit();
        }
        $publisher_id = $_GET['id_publisher'];
        $publisher    = $this->modelPublisher->getDetail($publisher_id);
        if ($publisher && $this->modelPublisher->destroy($publisher_id)) {
            header("Location: " . BASE_URL . '?act=list&type=publisher');
            exit();
        } else {
            header("Location: " . BASE_URL . "?act=list&type=publisher&error=delete_failed");
            exit();
        }
    }

    // Hiển thị chi tiết một nhà xuất bản
    public function showDetail()
    {
        if (!isset($_GET['id_publisher']) || !is_numeric($_GET['id_publisher'])) {
            header("Location: " . BASE_URL . '?act=list&type=publisher');
            exit();
        }

        $publisher_id = $_GET['id_publisher'];
        $publisher    = $this->modelPublisher->getDetail($publisher_id);

        if ($publisher) {
            require_once './views/admin/publishers/show.php';
        } else {
            header("Location: " . BASE_URL . '?act=list&type=publisher');
            exit();
        }
    }
}
