FROM php:7.4-apache

VOLUME /data

COPY ./index.php /var/www/html/
