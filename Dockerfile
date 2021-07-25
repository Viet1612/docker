FROM php:7.4-fpm

# Set working directory
WORKDIR /var/www

COPY ./www/html /var/www
# Copy existing application directory permissions
COPY --chown=www:www . /var/www
# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]