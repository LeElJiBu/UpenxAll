# Usa la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instala las extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip git curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mysqli
    
# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copia los archivos de Laravel al contenedor
COPY . /var/www/html

# Instalar dependencias de Composer
RUN composer install --no-dev --optimize-autoloader


# Cambiar la propiedad de los archivos a www-data para Apache
RUN chown -R www-data:www-data /var/www/html

# Crear los directorios necesarios para Laravel (si no existen)
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Cambiar DocumentRoot para que apunte a /public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Habilitar mod_rewrite y ajustar configuraciones de Apache
RUN a2enmod rewrite
RUN echo "<Directory /var/www/html/public>" > /etc/apache2/conf-available/laravel.conf \
    && echo "  AllowOverride All" >> /etc/apache2/conf-available/laravel.conf \
    && echo "</Directory>" >> /etc/apache2/conf-available/laravel.conf \
    && a2enconf laravel.conf

# Exponer el puerto 80
EXPOSE 80

# Comando para iniciar Apache con Laravel
CMD ["apache2-foreground"]
