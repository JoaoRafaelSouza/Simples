FROM php:8.2-apache

# Instala dependências
RUN apt-get update && apt-get install -y \
    git unzip zip libzip-dev libpng-dev libjpeg-dev \
    libonig-dev libxml2-dev libicu-dev libpq-dev \
    libmagickwand-dev ghostscript libfreetype6-dev \
    libxslt-dev libjpeg62-turbo-dev \
    tesseract-ocr tesseract-ocr-por \
    && docker-php-ext-install pdo pdo_mysql zip gd \
    && apt-get clean

# Ativa o mod_rewrite do Apache
RUN a2enmod rewrite

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia a configuração personalizada do Apache
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do Laravel da pasta "petshop" no host para o container
COPY ./petshop/ /var/www/html/

# Ajusta permissões
RUN mkdir -p storage/framework storage/logs bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Instala dependências do Laravel
RUN composer install --no-interaction --prefer-dist --no-dev

# Expõe a porta padrão do Apache
EXPOSE 80