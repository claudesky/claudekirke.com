memcached -u root &
php artisan migrate --force &&
php artisan optimize &&
touch /var/www/html/ready &&
php-fpm
