
FROM php:8.2-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
ENV APACHE_DOCUMENT_ROOT /var/www/html
RUN a2enmod rewrite

