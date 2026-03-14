FROM php:8.4-apache

RUN docker-php-ext-install pdo pdo_pgsql
RUN  pecl  install  xdebug  \ 
    &&  docker-php-ext-enable  xdebug 
    
EXPOSE  80
