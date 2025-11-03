FROM ubuntu:latest
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update && \
    apt-get install -y software-properties-common curl git wget nano nginx && \
    add-apt-repository ppa:ondrej/php -y && \
    apt-get update && \
    apt-get install -y php8.1-fpm php8.1-pgsql php8.1-mbstring php8.1-xml php8.1-curl php8.1-cli unzip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer create-project yiisoft/yii2-app-basic /var/www/html/yii2-app --prefer-dist
RUN mv /var/www/html/yii2-app/* /var/www/html/ && \
    mv /var/www/html/yii2-app/.* /var/www/html/ 2>/dev/null || true && \
    rm -rf /var/www/html/yii2-app
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html
RUN sed -i 's/listen = .*/listen = 0.0.0.0:9000/' /etc/php/8.1/fpm/pool.d/www.conf
WORKDIR /var/www/html
EXPOSE 9000
CMD ["php-fpm8.1", "-F"]