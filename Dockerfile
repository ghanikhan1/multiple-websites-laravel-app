# Use the official PHP image with Apache
FROM php:8.2-apache

# Install necessary extensions and dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    nodejs \
    npm \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /var/www/html

# Copy Laravel project files
COPY . /var/www/html

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-plugins --no-scripts

# Set Apache Document Root to Laravel's public folder
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Enable Apache Rewrite Module (Required for Laravel)
RUN a2enmod rewrite

# Install JavaScript dependencies and build assets
RUN npm install && npm run build

# Set permissions for storage and cache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

# Expose port 80 for HTTP traffic
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
