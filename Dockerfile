# Gunakan image PHP CLI
FROM php:8.2-cli

# Install sistem dependency
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install ekstensi PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www

# Copy semua file project ke dalam container
COPY . .

# Install dependency Laravel (tanpa dev)
RUN composer install --no-dev --optimize-autoloader

# Siapkan .env dan APP_KEY kalau belum ada
RUN cp .env.example .env && php artisan key:generate

# Expose port (Render nanti auto detect)
EXPOSE 8000

# Jalankan PHP built-in server, arahkan ke folder public
# ${PORT:-8000} artinya kalau Render kasih ENV PORT dipakai itu, kalau tidak ya 8000
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-8000} -t public public/index.php"]
