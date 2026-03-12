<?php
require_once __DIR__ . '/../../config/db_module.php';
require_once __DIR__ . '/Post.php';

class PostModel extends Post {
    
    public function getAllPosts() {
        $link = null;
        taoKetNoi($link);
        
        $sql = "SELECT * FROM posts ORDER BY created_at DESC";
        $result = chayTruyVanTraVeDL($link, $sql);
        
        $posts = [];
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $posts[] = $row;
            }
        }
        
        giaiPhongBoNho($link, $result);
        return $posts;
    }

    public function createPost($title, $content) {
        $link = null;
        taoKetNoi($link);
        
        $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
        $result = chayTruyVanKhongTraVeDL($link, $sql);
        
        giaiPhongBoNho($link, null);
        return $result;
    }

    public function getPostById($id) {
        $link = null;
        taoKetNoi($link);
        
        $sql = "SELECT * FROM posts WHERE id = $id";
        $result = chayTruyVanTraVeDL($link, $sql);
        
        $post = null;
        if ($result && mysqli_num_rows($result) > 0) {
            $post = mysqli_fetch_assoc($result);
        }
        
        giaiPhongBoNho($link, $result);
        return $post;
    }
}
?>
