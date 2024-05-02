# Base image
FROM php:8.3-fpm

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && \
    apt-get install -y \
    libpq-dev \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy Laravel project files
COPY . .

# Install Laravel dependencies
RUN composer install

RUN php artisan migrate

RUN php artisan db:seed

# Expose Laravel application on port 4200
EXPOSE 4200

# Start Laravel server
CMD php artisan serve --host=0.0.0.0 --port=4200
