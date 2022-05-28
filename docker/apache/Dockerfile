FROM php:7.3-apache

RUN apt-get update && apt-get install -y \
    # php-gd
    libfreetype6-dev \
    libpng-dev \
    libjpeg-dev \
    libwebp-dev \
    libxslt-dev \
    libbz2-dev \
    # php-intl
    libicu-dev \
    # php-zip
    libzip-dev \
    zlib1g-dev

RUN docker-php-ext-configure gd \
        --with-gd \
        --with-freetype-dir=/usr/include/ \
        --with-jpeg-dir=/usr/include/ \
        --with-webp-dir=/usr/include/ \
    && docker-php-ext-configure mysqli --with-mysqli \
    && docker-php-ext-configure pdo_mysql --with-pdo-mysql

RUN docker-php-ext-install -j$(nproc) \
    gd \
    bcmath \
    bz2 \
    calendar \
    ctype \
    mysqli \
    pdo_mysql \
    intl \
    mbstring \
    zip

# install xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN a2enmod rewrite

COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

#Здесь прописываем какой скрипт должен копироваться и запускатьcя при запуске данного образа
COPY ./entrypoint.sh /usr/local/bin/docker-php-entrypoint
RUN chmod +x /usr/local/bin/docker-php-entrypoint