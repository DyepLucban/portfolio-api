FROM php:7.4-apache

RUN apt-get update && apt-get install -y libmagickwand-dev vim \
    && docker-php-ext-install pdo pdo_mysql mysqli \
    && pecl install imagick \
	&& docker-php-ext-enable imagick

# ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
# RUN sed -ri -e 's!/var/www/html/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
# RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
# RUN sed -i '/<Directory \/var\/www\/html\/public\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
# RUN a2enmod rewrite headers
# COPY .config/ /etc/apache2/sites-available/
# RUN a2ensite app.conf
