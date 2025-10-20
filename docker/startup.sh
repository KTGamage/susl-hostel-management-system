#!/bin/sh

echo "Starting application setup..."

# Wait for database to be ready (if using external DB)
echo "Waiting for database connection..."
sleep 5

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force

# Cache configuration
echo "Caching configuration..."
php artisan config:cache

# Cache routes
echo "Caching routes..."
php artisan route:cache

# Cache views
echo "Caching views..."
php artisan view:cache

# Set storage permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache

echo "Application setup completed!"
echo "Starting server..."