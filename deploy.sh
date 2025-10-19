#!/bin/sh

echo "Deploying Laravel application..."

# Install dependencies
composer install --no-dev --optimize-autoloader

# Generate application key if not exists
if [ -z "$(grep APP_KEY=base64 .env)" ]; then
    php artisan key:generate
fi

# Run database migrations
php artisan migrate --force

# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Set storage permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache

echo "Deployment completed!"