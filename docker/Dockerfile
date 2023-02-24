FROM php:7.4-fpm

RUN apt-get update && \
    apt-get install -y libpq-dev
RUN docker-php-ext-install pdo pgsql pdo_pgsql 


RUN apt-get clean && rm -rf /var/lib/apt/lists/*

COPY . /var/www
WORKDIR /var/www



EXPOSE 80
