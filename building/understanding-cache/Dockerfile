FROM php:7.2-apache

# Ponemos primero el Run de las extensiones a causa de que normalmente no cambiaran
RUN pecl install xdebug-2.6.0 \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install pdo pdo_mysql

# Ponemos segundo el copy de las extensiones a causa de que normalmente cambiara poco
COPY php.ini /usr/local/etc/php/php.ini
# Ponemos por ultimo el index.php a causa de que cambiara mucho
COPY index.php /var/www/html/