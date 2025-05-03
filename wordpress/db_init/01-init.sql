-- Создать дополнительного пользователя wpuser с полными правами
CREATE USER IF NOT EXISTS 'wpuser'@'%' IDENTIFIED BY 'wppassword';
GRANT ALL PRIVILEGES ON wpdb.* TO 'wpuser'@'%';
FLUSH PRIVILEGES;