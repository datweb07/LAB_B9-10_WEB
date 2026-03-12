<?php
require_once __DIR__ . '/../models/PostModel.php';

class PostController {
    private $postModel;

    public function __construct() {
        $this->postModel = new PostModel();
    }

    public function index() {
        $posts = $this->postModel->getAllPosts();
        require_once __DIR__ . '/../views/Home/index.php';
    }

    public function home() {
        // Alias cho index - hiển thị tất cả bài viết
        $this->index();
    }

    public function detail() {
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            $post = $this->postModel->getPostById($id);
            
            if ($post) {
                require_once __DIR__ . '/../views/Post/DetailPost.php';
            } else {
                echo "Bài viết không tồn tại!";
            }
        } else {
            header('Location: index.php');
            exit;
        }
    }

    public function create() {
        require_once __DIR__ . '/../views/Post/CreatePost.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $content = $_POST['content'] ?? '';
            
            if (!empty($title) && !empty($content)) {
                $this->postModel->createPost($title, $content);
                header('Location: index.php');
                exit;
            }
        }
        header('Location: index.php?action=create');
        exit;
    }
}
?>
