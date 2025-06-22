FROM php:8.2-apache

# Copy project files to Apache's root folder
COPY . /var/www/html/

# Expose default port
EXPOSE 80
