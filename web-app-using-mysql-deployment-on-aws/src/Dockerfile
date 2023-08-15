FROM php:apache

# Reste de votre configuration
WORKDIR /var/www/html

RUN apt-get update -y && apt-get install -y libmariadb-dev

# Installer le pilote PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql