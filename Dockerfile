# Use an official PHP image
FROM php:8.2-apache  

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql  

# Enable mod_rewrite for Apache (optional, but recommended)
RUN a2enmod rewrite  

# Set working directory
WORKDIR /var/www/html  

# Copy project files to the container
COPY . .  

# Expose port 80
EXPOSE 80  

# Start Apache server
CMD ["apache2-foreground"]
