FROM php:8.3-fpm-alpine
EXPOSE 5173

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    TZ=UTC

# 作業ディレクトリを/var/www/htmlに設定
WORKDIR /var/www/html
COPY ./.env.laravel ./.env
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Package Install
RUN apk update \
    && apk add --no-cache $PHPIZE_DEPS \
           bash \
           curl \
           freetype-dev \
           git \
           icu-dev \
           libjpeg-turbo-dev \
           libpq-dev \
           libpng-dev \
           libwebp-dev \
           libzip-dev \
           npm \
           tzdata \
           zip \
           php83-common \
           php83-bcmath \
           php83-ctype \
           php83-fileinfo \
           php83-gd \
           php83-json \
           php83-mbstring  \
           php83-openssl \
           php83-mbstring  \
           php83-session  \
           php83-tokenizer  \
           php83-xml \
           python3 \
           py3-pip \
    && cp /usr/share/zoneinfo/$TZ /etc/localtime \
    && echo $TZ > /etc/timezone \
    && apk del tzdata \
    && docker-php-ext-configure gd --with-jpeg --with-webp --with-freetype \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo \
                              pdo_pgsql pgsql \
    && apk add --update linux-headers \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install zip \
    && pecl clear-cache \
    && cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
