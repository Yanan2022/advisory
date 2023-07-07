FROM php:8.4-apache

# Copier les fichiers de l'application Laravel dans le conteneur
COPY . /var/www/html

# Installer les dépendances
RUN docker-php-ext-install pdo pdo_mysql
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Activer le module Apache mod_rewrite
RUN a2enmod rewrite
