FROM php:8.2-apache

RUN a2enmod rewrite headers \
    && sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

COPY . /var/www/html/

RUN mkdir -p /var/www/html/includes/cache \
    && chown -R www-data:www-data /var/www/html/includes/cache

EXPOSE 80
