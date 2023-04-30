# Image Menggunakan PHP 8.1.
FROM php:8.1-apache

# Copy web content
COPY ./websites/ /var/www/html/

# Set Ownership & Permissions
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R u=rwX,g=rX,o= /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Install Mysqli
RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN docker-php-ext-install mysqli

# Import Database
COPY dbRedlockWeb.sql /docker-entrypoint-initdb.d/dbRedlockWeb.sql