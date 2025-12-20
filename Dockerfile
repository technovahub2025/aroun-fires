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

# Copy project files
COPY . .

# Install dependencies (production)
RUN composer install --optimize-autoloader --no-dev --no-interaction

# Change document root to public
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Fix permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Create storage link (for images/assets)
RUN php artisan storage:link || true

# Suppress Apache ServerName warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Create startup script to handle $PORT and runtime cache clear
RUN echo '#!/bin/bash\n\
# Handle Render $PORT\n\
if [ -n "$PORT" ]; then\n\
  sed -i "s/Listen 80/Listen $PORT/g" /etc/apache2/ports.conf\n\
  sed -i "s/:80/:$PORT/g" /etc/apache2/sites-available/000-default.conf\n\
fi\n\
# Clear caches on every start (safe for production)\n\
php artisan config:clear\n\
php artisan route:clear\n\
php artisan view:clear\n\
# Start Apache\n\
apache2-foreground' > /usr/local/bin/start.sh \
    && chmod +x /usr/local/bin/start.sh

# Use the startup script
CMD ["/usr/local/bin/start.sh"]