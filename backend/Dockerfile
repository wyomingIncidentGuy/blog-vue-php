# Используем официальный образ PHP с FPM
FROM php:7.4-fpm

# Устанавливаем необходимые зависимости
RUN apt-get update && apt-get install -y \
    nginx \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    default-mysql-client \
    && docker-php-ext-install pdo_mysql mysqli

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем файлы проекта в контейнер
COPY ./www /var/www/html
COPY nginx.conf /etc/nginx/nginx.conf
COPY entrypoint.sh /entrypoint.sh
COPY composer.json /var/www/html/composer.json

# Устанавливаем зависимости проекта
WORKDIR /var/www/html
RUN composer install

# Делаем скрипт запуска исполняемым
RUN chmod +x /entrypoint.sh

# Открываем порты
EXPOSE 80

# Запускаем скрипт
CMD ["/entrypoint.sh"]
