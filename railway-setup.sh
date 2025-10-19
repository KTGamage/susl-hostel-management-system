#!/bin/bash

echo "Setting up Laravel application on Railway..."

# Generate application key
php artisan key:generate

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

echo "Laravel setup completed!"