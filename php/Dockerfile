FROM php:7.4-fpm
COPY ./html/ /var/www/html/

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    libzip-dev \
    unzip \
    git \
    libonig-dev \
    curl \
    cron

RUN apt-get install -y libicu-dev\
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl\
&& docker-php-ext-install pdo_mysql mbstring zip exif pcntl\
&& docker-php-ext-configure gd --with-freetype --with-jpeg\
&& docker-php-ext-install gd

COPY ./custom.ini /usr/local/etc/php/conf.d/php.ini
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/

RUN echo "* * * * *  root /usr/local/bin/php /var/www/html/protected/yii queue/run >/dev/null 2>&1" >> /etc/crontab
RUN echo "* * * * *  root /usr/local/bin/php /var/www/html/protected/yii cron/run >/dev/null 2>&1" >> /etc/crontab

EXPOSE 9000
CMD cron && docker-php-entrypoint php-fpm

