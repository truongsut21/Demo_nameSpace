# Sử dụng image PHP chính thức
FROM php:8.1-apache

# Sao chép mã nguồn của bạn vào container
COPY . /var/www/html/

# Cài đặt các extension PHP nếu cần thiết
RUN docker-php-ext-install mysqli pdo pdo_mysql
