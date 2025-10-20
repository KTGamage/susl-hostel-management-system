#!/bin/sh

echo "🚀 Starting application setup..."

# Wait a moment for services to start
sleep 3

# Check if we need to wait for database
if [ ! -z "$DB_HOST" ] && [ "$DB_HOST" != "127.0.0.1" ]; then
    echo "⏳ Waiting for database connection..."
    max_attempts=30
    attempt=1
    
    while [ $attempt -le $max_attempts ]; do
        if nc -z $DB_HOST $DB_PORT; then
            echo "✅ Database is ready!"
            break
        else
            echo "⏰ Attempt $attempt/$max_attempts: Database not ready, waiting..."
            sleep 2
        fi
        attempt=$((attempt + 1))
    done
    
    if [ $attempt -gt $max_attempts ]; then
        echo "❌ Database connection failed after $max_attempts attempts"
    fi
fi

# Run database migrations
echo "🔄 Running database migrations..."
php artisan migrate --force

# Clear and cache configuration
echo "⚙️ Caching configuration..."
php artisan config:clear
php artisan config:cache

# Clear and cache routes
echo "🛣️ Caching routes..."
php artisan route:clear
php artisan route:cache

# Clear and cache views
echo "👀 Caching views..."
php artisan view:clear
php artisan view:cache

# Set storage permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache

echo "✅ Application setup completed!"
echo "🌐 Starting web server..."