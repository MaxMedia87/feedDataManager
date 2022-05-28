FROM php:7.3-cli-alpine

RUN apk update && apk add autoconf g++ make \
    && pecl install xdebug-2.9.0 \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable xdebug

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

RUN apk add unzip

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

COPY ./conf.d /usr/local/etc/php/conf.d

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet

# Задаем пользователя и группу иначе все процессы будут по умолчанию от root пользователя
RUN addgroup -g 1000 app && adduser -u 1000 -G app -s /bin/sh -D app

WORKDIR /var/www/html

#Запуск процессов от пользователя
USER app