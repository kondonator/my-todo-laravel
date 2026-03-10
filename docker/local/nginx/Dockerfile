FROM nginx:1.25.3-alpine

RUN set -x ; \
  addgroup -g 82 -S www-data ; \
  adduser -u 82 -D -S -G www-data www-data -s /sbin/nologin -h /var/www/html && exit 0 ; exit 1 \

WORKDIR /var/www/html
