<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài đăng</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <a href="index.php?action=create" class="btn">Tạo bài đăng mới</a>
        <h1>Danh sách bài đăng</h1>


        <?php if (empty($posts)): ?>
        <div class="no-posts">Chưa có bài đăng nào. Hãy tạo bài đăng đầu tiên!</div>
        <?php else: ?>
        <?php foreach ($posts as $post): ?>
        <div class="post">
            <h2><?php echo htmlspecialchars($post['title']); ?></h2>
            <div class="post-content"><?php echo nl2br(htmlspecialchars(substr($post['content'], 0, 200))); ?><?php echo strlen($post['content']) > 200 ? '...' : ''; ?></div>
            <div class="post-date">Ngày đăng: <?php echo $post['created_at']; ?></div>
            <div class="post-actions">
                <a href="index.php?action=detail&id=<?php echo $post['id']; ?>" class="btn btn-view">Xem chi tiết</a>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>

</html>