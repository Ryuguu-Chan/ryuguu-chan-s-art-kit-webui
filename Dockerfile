FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    && docker-php-ext-configure gd \
    && docker-php-ext-install gd

COPY webgui /var/www/html
EXPOSE 8080
