FROM php:8.1-apache
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug && a2enmod rewrite