FROM php:7.2.6-apache

COPY . /var/www/html
COPY ./vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

# RUN chown -R www-data:www-data /var/www/html \
#     && a2enmod rewrite && service apache2 restart