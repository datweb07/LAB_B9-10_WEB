<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($post['title']); ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <a href="index.php" class="btn">← Quay lại danh sách</a>
        
        <div class="post-detail">
            <h1><?php echo htmlspecialchars($post['title']); ?></h1>
            <div class="post-meta">
                <span class="post-date">Ngày đăng: <?php echo $post['created_at']; ?></span>
                <?php if (!empty($post['updated_at'])): ?>
                <span class="post-date">Cập nhật: <?php echo $post['updated_at']; ?></span>
                <?php endif; ?>
            </div>
            <div class="post-content-full">
                <?php echo nl2br(htmlspecialchars($post['content'])); ?>
            </div>
        </div>

        <div class="post-actions">
            <a href="index.php?action=edit&id=<?php echo $post['id']; ?>" class="btn btn-edit">Chỉnh sửa</a>
            <a href="index.php?action=delete&id=<?php echo $post['id']; ?>" class="btn btn-delete" onclick="return confirm('Bạn có chắc muốn xóa bài viết này?')">Xóa</a>
        </div>
    </div>
</body>

</html>
