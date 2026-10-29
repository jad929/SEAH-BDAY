FROM php:8.2-apache

WORKDIR /var/www/html

RUN set -eux; \
    apt-get update; \
    DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
        git \
        curl \
        unzip \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        libzip-dev \
        zip; \
    docker-php-ext-configure gd; \
    docker-php-ext-install pdo_sqlite mbstring exif gd zip; \
    a2enmod rewrite headers; \
    curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php; \
    php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer; \
    rm -f /tmp/composer-setup.php; \
    rm -rf /var/lib/apt/lists/*

COPY . /var/www/html

RUN set -eux; \
    sed -i 's#DocumentRoot /var/www/html#DocumentRoot /var/www/html/public#' /etc/apache2/sites-available/000-default.conf; \
    sed -i 's#/var/www/html#/var/www/html/public#' /etc/apache2/sites-available/000-default.conf; \
    composer install --no-interaction --no-progress --no-ansi --no-dev --optimize-autoloader; \
    chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public; \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["apache2-foreground"]
