# Use an official PHP runtime as a parent image with Apache
FROM php:8.0-apache

# Set working directory
WORKDIR /var/www/html

# Copy the phpMyAdmin files into the container at /var/www/html
COPY . /var/www/html

# Install additional PHP extensions that phpMyAdmin may require
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose port 80
EXPOSE 89