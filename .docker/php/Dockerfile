FROM php:7.4-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql

COPY ./ ./

RUN chown -R www-data storage

VOLUME [ "/var/www/html/storage" ]
