# Use the official PHP Apache image
FROM php:8.2-apache

# Enable mod_rewrite for URL rewriting
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy all project files to the container
COPY . /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
