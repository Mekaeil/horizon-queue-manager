FROM php:8.1-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN docker-php-ext-configure pcntl --enable-pcntl \
  && docker-php-ext-install pcntl
RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apk add git

RUN git clone https://github.com/laravel/laravel.git

WORKDIR /var/www/html/laravel

# RUN cp .env.example .env

# Set custom environment variables
# RUN echo APP_NAME=Laravel_APP  >> .env
# RUN echo APP_ENV=local  >> .env
# RUN echo APP_KEY=  >> .env
# RUN echo APP_DEBUG=true  >> .env
# RUN echo APP_URL=http://localhost  >> .env

# RUN echo LOG_CHANNEL=stack >> .env
# RUN echo LOG_DEPRECATIONS_CHANNEL=null >> .env
# RUN echo LOG_LEVEL=debug >> .env

# RUN echo DB_CONNECTION=mysql >> .env
# RUN echo DB_HOST=127.0.0.1 >> .env
# RUN echo DB_PORT=3306 >> .env
# RUN echo DB_DATABASE=laravel >> .env
# RUN echo DB_USERNAME=root >> .env
# RUN echo DB_PASSWORD= >> .env

# RUN echo BROADCAST_DRIVER=log >> .env
# RUN echo CACHE_DRIVER=file >> .env
# RUN echo FILESYSTEM_DISK=local >> .env
# RUN echo QUEUE_CONNECTION=sync >> .env
# RUN echo SESSION_DRIVER=file >> .env
# RUN echo SESSION_LIFETIME=120 >> .env

# RUN echo MEMCACHED_HOST=127.0.0.1 >> .env

# RUN echo REDIS_HOST=127.0.0.1 >> .env
# RUN echo REDIS_PASSWORD=null >> .env
# RUN echo REDIS_PORT=6379 >> .env

# RUN echo MAIL_MAILER=smtp >> .env
# RUN echo MAIL_HOST=mailpit >> .env
# RUN echo MAIL_PORT=1025 >> .env
# RUN echo MAIL_USERNAME=null >> .env
# RUN echo MAIL_PASSWORD=null >> .env
# RUN echo MAIL_ENCRYPTION=null >> .env
# RUN echo MAIL_FROM_ADDRESS="hello@example.com" >> .env
# RUN echo MAIL_FROM_NAME="${APP_NAME}" >> .env

# RUN echo AWS_ACCESS_KEY_ID= >> .env
# RUN echo AWS_SECRET_ACCESS_KEY= >> .env
# RUN echo AWS_DEFAULT_REGION=us-east-1 >> .env
# RUN echo AWS_BUCKET= >> .env
# RUN echo AWS_USE_PATH_STYLE_ENDPOINT=false >> .env

# RUN echo PUSHER_APP_ID= >> .env
# RUN echo PUSHER_APP_KEY= >> .env
# RUN echo PUSHER_APP_SECRET= >> .env
# RUN echo PUSHER_HOST= >> .env
# RUN echo PUSHER_PORT=443 >> .env
# RUN echo PUSHER_SCHEME=https >> .env
# RUN echo PUSHER_APP_CLUSTER=mt1 >> .env

# RUN echo VITE_APP_NAME="${APP_NAME}" >> .env
# RUN echo VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}" >> .env
# RUN echo VITE_PUSHER_HOST="${PUSHER_HOST}" >> .env
# RUN echo VITE_PUSHER_PORT="${PUSHER_PORT}" >> .env
# RUN echo VITE_PUSHER_SCHEME="${PUSHER_SCHEME}" >> .env
# RUN echo VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}" >> .env

RUN composer install

# RUN php artisan key:generate

CMD ["php", "artisan", "serve", "--host=0.0.0.0"]

