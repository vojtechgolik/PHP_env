FROM php:8.2-apache

RUN a2enmod rewrite

WORKDIR /var/www/html

COPY index.php .

EXPOSE 8080

RUN sed -i 's/Listen 80/Listen 8080/g' /etc/apache2/ports.conf
RUN sed -i 's/:80/:8080/g' /etc/apache2/sites-enabled/000-default.conf 