# syntax = docker/dockerfile:1.2
FROM php:7-apache

# copy all of the site code and static assets into the container
COPY index.php /var/www/html

# WHO OWN'S THESE HEAR ASSETS? MR WUB WUB WUB DUB ATAAA
RUN chown -R www-data:www-data /var/www/html
