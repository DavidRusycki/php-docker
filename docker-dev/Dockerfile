FROM php:8.4-apache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chmod +x /usr/local/bin/composer

RUN apt-get update && \
    apt-get install -y libpq-dev 

RUN docker-php-ext-install pdo pdo_pgsql

RUN  pecl  install  xdebug  \ 
    &&  docker-php-ext-enable  xdebug 
    
EXPOSE  80
