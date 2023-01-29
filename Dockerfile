from shinsenter/php:8.1-fpm

WORKDIR /usr/src
COPY . .

RUN composer install
EXPOSE 8000
CMD php artisan serve --host 0.0.0.0
