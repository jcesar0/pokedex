FROM php:8.1-fpm

RUN apt-get update

RUN apt-get -y install bash \
    nano \
    autoconf \
    libpng-dev \
    g++ \
    make \
    libcurl4-openssl-dev \
    libonig-dev \
    openssl \
    libssl-dev \
    git \
    libzip-dev

RUN docker-php-ext-install gd \
    fileinfo \
    curl \
    mbstring \
    pdo \
    pdo_mysql \
    gd \
    zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
