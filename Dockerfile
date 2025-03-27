# Usa la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instala las extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mysqli

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia los archivos de Laravel al contenedor
COPY . /var/www/html

# Instala las dependencias de Composer
RUN composer install --no-dev --optimize-autoloader

# Crea los directorios necesarios para Laravel (si no existen)
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache


# Configura Apache para permitir .htaccess y reescritura
RUN echo "<Directory /var/www/html>" > /etc/apache2/conf-available/laravel.conf \
    && echo "  AllowOverride All" >> /etc/apache2/conf-available/laravel.conf \
    && echo "</Directory>" >> /etc/apache2/conf-available/laravel.conf \
    && a2enconf laravel.conf

# Cambiar DocumentRoot a la carpeta public de Laravel
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Habilita mod_rewrite para permitir la reescritura de URLs
RUN a2enmod rewrite

# Expone el puerto 80
EXPOSE 80

# Comando para iniciar Apache con Laravel
CMD ["apache2-foreground"]
