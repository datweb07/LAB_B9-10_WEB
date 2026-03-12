<?php
require_once __DIR__ . '/../src/controllers/PostController.php';

$link = null;
taoKetNoi($link);

if ($link){
    echo "Kết nối thành công đến cơ sở dữ liệu !";
    mysqli_close($link);
}

$controller = new PostController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    default:
        header("HTTP/1.0 404 Not Found");
        echo "404 - Trang không tồn tại";
        break;
}
?>
