FROM php:8.2-apache

# Install system dependencies
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

# Install PHP extensions
RUN docker-php-ext-configure intl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

# Enable rewrite module
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy code
COPY . .

# Install dependencies
RUN composer install --optimize-autoloader --no-dev --no-interaction

# Change document root to public
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Fix permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Create storage link
RUN php artisan storage:link || true

# Clear and cache config (helps on fresh deploy)
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Create a startup script to handle $PORT safely
RUN echo '#!/bin/bash\n\
if [ -n "$PORT" ]; then\n\
  sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf\n\
  sed -i "s/:80/:$PORT/g" /etc/apache2/sites-available/000-default.conf\n\
fi\n\
apache2-foreground' > /usr/local/bin/start-apache.sh \
    && chmod +x /usr/local/bin/start-apache.sh

# Use the startup script
CMD ["/usr/local/bin/start-apache.sh"]