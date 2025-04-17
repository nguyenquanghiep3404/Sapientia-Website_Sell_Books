<?php
class commentModel
{
    public $conn;
    public function __construct()
    {
        $this->conn = connect_db();
    }

    public function allComment($product_id)
    {
        $sql = "SELECT * FROM `comment` WHERE `comment` . `product_id` = '$product_id'";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }

    public function all()
    {
        $sql = "SELECT * FROM `comment`";
        $data = $this->conn->query($sql);
        return $data->fetchAll();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `comment` WHERE `comment` . `comment_id` = {$id}";
        $this->conn->exec($sql);
    }
    // public function getUserName($name) 
    // {
    //     $sql = "SELECT * FROM `users` WHERE `users`.`name` = '$name' ";
    //     $data = $this->conn->query($sql);
    //     return $data->fetch();
    // }
    public function insert_comment($comment, $user_id, $product_id, $create_at, $name, $email, $rating)
    {
        $sql = "INSERT INTO `comment` (`comment`, `user_id`, `product_id` , `create_at`, `name`, `email`, `rating`) VALUES ('$comment', '$user_id', '$product_id', '$create_at', '$name', '$email', '$rating')";
        $this->conn->exec($sql);
    }
    public function hasPurchasedProduct($user_id, $product_id)
    {
        $sql = "SELECT COUNT(*) AS count 
            FROM orders 
            WHERE user_id = :user_id 
            AND product_id = :product_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':user_id' => $user_id,
            ':product_id' => $product_id
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] > 0;
    }
    public function hasCommented($user_id, $product_id)
    {
        $sql = "SELECT COUNT(*) AS count 
                FROM comment
                WHERE user_id = :user_id 
                AND product_id = :product_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            ':user_id' => $user_id,
            ':product_id' => $product_id
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['count'] > 0;
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
?>