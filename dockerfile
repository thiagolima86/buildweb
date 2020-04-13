FROM php:7.2-apache
WORKDIR /var/www/html
RUN docker-php-ext-install mysqli
#RUN apt-get update && apt-get install -y php-pear php7.2-curl php7.2-dev php7.2-gd php7.2-mbstring php7.2-zip php7.2-mysql php7.2-xml
RUN a2enmod rewrite && service apache2 restart