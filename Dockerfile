FROM php:7-apache

# copy all of the site code and static assets into the container
COPY index.php /var/www/html
RUN chown -R www-data:www-data /var/www/html
