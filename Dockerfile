# Use PHP 7.4 with FPM to match your local environment
FROM php:7.4-fpm-alpine

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apk update && apk add --no-cache \
    build-base \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    oniguruma-dev \
    libxml2-dev \
    mysql-client \
    nginx \
    supervisor

# Install PHP extensions for PHP 7.4
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Create necessary directories
RUN mkdir -p /var/log/supervisor
RUN mkdir -p /var/www/html/storage/framework/{sessions,views,cache}
RUN mkdir -p /var/www/html/bootstrap/cache

# Copy configuration files first (for better caching)
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Copy application files
COPY . .

# Copy production environment file
COPY .env.production .env

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache
RUN chmod +x docker/startup.sh

# Install dependencies and optimize
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Expose port 8000
EXPOSE 8000

# Start supervisor to manage processes
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]