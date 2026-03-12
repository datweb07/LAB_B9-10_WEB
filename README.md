# Hướng dẫn cài đặt và chạy

## Bước 1: Tạo database

1. Mở phpMyAdmin hoặc MySQL command line
2. Chạy file SQL:
```sql
CREATE DATABASE db_post;
USE db_post;

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Bước 2: Cấu hình database

Mở file `config/config.php` và cập nhật thông tin kết nối database của bạn:
- HOST: localhost
- DB: db_post
- USER: root (hoặc username của bạn)
- PASSWORD: 123456 (hoặc password của bạn)

## Bước 3: Chạy ứng dụng

Có 2 cách để chạy:

### Cách 1: Sử dụng PHP Built-in Server
```bash
cd public
php -S localhost:8000
```

Sau đó truy cập: http://localhost:8000

### Cách 2: Sử dụng XAMPP/WAMP
1. Copy thư mục dự án vào htdocs (XAMPP) hoặc www (WAMP)
2. Truy cập: http://localhost/LAB_WEB_B9+10/public/

## Cấu trúc dự án (MVC + OOP)

```
LAB_WEB_B9+10/
├── config/
│   ├── config.php          # Cấu hình database
│   └── db_module.php        # Class Database (OOP)
├── database/
│   └── db_post.sql          # File SQL tạo database
├── public/
│   └── index.php            # Router (điểm vào)
└── src/
    ├── controllers/
    │   └── PostController.php  # Controller xử lý logic
    ├── models/
    │   └── PostModel.php       # Model tương tác database
    └── views/
        ├── Home/
        │   └── index.php       # View hiển thị danh sách posts
        └── CreatePost/
            └── create.php      # View form tạo post
```

## Chức năng

- Xem danh sách bài đăng
- Tạo bài đăng mới
- UI đơn giản, dễ sử dụng
