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
RUN docker-php-ext-configure intl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

# Enable Apache mod_rewrite (for Laravel pretty URLs)
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install dependencies (production mode for Render)
RUN composer install --optimize-autoloader --no-dev --no-interaction

# Change Apache document root to Laravel's public folder
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Fix permissions for Laravel folders
RUN chown -R www-data:www-data storage bootstrap/cache

# Create storage link (for uploaded files/images)
RUN php artisan storage:link || true

# Clear and cache config/routes/views (helps on fresh deploy)
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Dynamic port binding: Render injects $PORT, fallback to 80 for local
RUN sed -i "s/Listen 80/Listen \${PORT:-80}/g" /etc/apache2/ports.conf \
    && sed -i "s/:80/:${PORT:-80}/g" /etc/apache2/sites-available/000-default.conf

# Expose port (for documentation — Render uses $PORT)
EXPOSE 80

# Start Apache in foreground
CMD apache2-foreground