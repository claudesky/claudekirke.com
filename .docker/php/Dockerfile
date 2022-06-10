FROM node:alpine as node

WORKDIR /app

COPY package.json package-lock.json ./

RUN npm i

COPY public public

COPY resources resources

COPY webpack.mix.js tailwind.config.js ./

RUN npm run prod

FROM composer as composer

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install \
    --no-dev \
    --no-ansi \
    --no-interaction \
    --no-scripts \
    --no-progress \
    --optimize-autoloader

FROM php:8.1.6-fpm-alpine

ENV PATH="/var/www/html/:${PATH}"

WORKDIR /var/www/html

RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini

# Install PHP Extensions (igbinary & memcached)
RUN apk add --no-cache --update memcached libmemcached-libs zlib
RUN set -xe && \
    cd /tmp/ && \
    apk add --no-cache --update --virtual .phpize-deps $PHPIZE_DEPS && \
    apk add --no-cache --update --virtual .memcached-deps zlib-dev libmemcached-dev cyrus-sasl-dev && \
# Install igbinary (memcached's deps)
    pecl install igbinary && \
# Install memcached
    ( \
        pecl install --nobuild memcached && \
        cd "$(pecl config-get temp_dir)/memcached" && \
        phpize && \
        ./configure --enable-memcached-igbinary && \
        make -j$(nproc) && \
        make install && \
        cd /tmp/ \
    ) && \
# Enable PHP extensions
    docker-php-ext-enable igbinary memcached && \
    rm -rf /tmp/* && \
    apk del .memcached-deps .phpize-deps

RUN docker-php-ext-install pdo_mysql

COPY entrypoint.sh /
RUN chmod +x /entrypoint.sh

COPY artisan ./

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY --from=composer /app/vendor ./vendor
COPY --from=composer /app/composer.json /app/composer.lock ./

RUN mkdir -p storage/framework/views && chown www-data storage/framework/views

COPY bootstrap bootstrap
COPY --from=node /app/public public
COPY config config
COPY database database
COPY resources resources
COPY tests tests
COPY routes routes
COPY app app

RUN composer run --no-ansi --no-interaction post-autoload-dump

CMD ["/entrypoint.sh"]
