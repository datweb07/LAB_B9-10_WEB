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
