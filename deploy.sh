#!/bin/sh

echo "Running deployment tasks..."

# Wait for database to be ready (if using external DB)
echo "Waiting for database connection..."
sleep 10

# Run database migrations
php artisan migrate --force

# Clear and cache config
php artisan config:clear
php artisan config:cache

# Clear and cache routes
php artisan route:clear
php artisan route:cache

# Clear and cache views
php artisan view:clear
php artisan view:cache

# Cache events
php artisan event:cache

# Set storage permissions
chmod -R 775 storage bootstrap/cache

echo "Deployment tasks completed!"