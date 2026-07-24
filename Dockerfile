# FROM php:8.2-apache
# COPY . /var/www/html/
# EXPOSE 80



FROM php:8.2-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Allow .htaccess overrides
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

COPY . /var/www/html/

EXPOSE 80