<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo bài đăng mới</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <a href="index.php" class="btn-back">← Quay lại</a>
        <h1>Tạo bài đăng mới</h1>
        
        <form action="index.php?action=store" method="POST">
            <div class="form-group">
                <label for="title">Tiêu đề:</label>
                <input type="text" id="title" name="title" required>
            </div>
            
            <div class="form-group">
                <label for="content">Nội dung:</label>
                <textarea id="content" name="content" required></textarea>
            </div>
            
            <button type="submit" class="btn">Đăng bài</button>
        </form>
    </div>
</body>
</html>
