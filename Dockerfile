FROM php:8.1.0-apache

# Copier les fichiers de l'application Laravel dans le conteneur
COPY . /var/www/html

# Installer les dépendances
#RUN add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN apt install --no-install-recommends php8.1
RUN apt-get install -y php8.1-cli php8.1-common php8.1-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath
RUN -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer
RUN cd /var/www/html/
RUN docker-php-ext-install pdo pdo_mysql
RUN chown -R www-data.www-data /var/www/html
RUN chmod -R 755 /var/www/html
#RUN chmod -R 777 /var/www/html
#RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache


# Activer le module Apache mod_rewrite
RUN a2enmod rewrite
