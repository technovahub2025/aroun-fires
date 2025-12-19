FROM php:8.2-apache

# Install system dependencies including ICU for intl extension
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    libicu-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install required PHP extensions for Laravel
# intl is now possible because libicu-dev is installed
RUN docker-php-ext-configure intl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

# Enable Apache mod_rewrite (for Laravel pretty URLs)
RUN a2enmod rewrite

# Change Apache document root to Laravel's public folder
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy your Laravel code into the container
COPY . .

# Fix permissions for Laravel folders
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port 80
EXPOSE 80