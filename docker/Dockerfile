FROM php:8.4-cli-alpine3.20

WORKDIR /www/


# base packages

RUN apk update
RUN apk add git
RUN apk add bash
RUN apk add zip
RUN apk add mysql-client
RUN apk add mariadb-connector-c


#install-php-extensions
RUN curl -sSLf \
        -o /usr/local/bin/install-php-extensions \
        https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions && \
    chmod +x /usr/local/bin/install-php-extensions

#ext

RUN install-php-extensions gd
RUN install-php-extensions zip
RUN install-php-extensions bcmath
RUN install-php-extensions fileinfo
RUN install-php-extensions exif
RUN install-php-extensions redis
RUN install-php-extensions pdo
RUN install-php-extensions pdo_mysql
RUN install-php-extensions mysqli
RUN install-php-extensions ctype
RUN install-php-extensions mbstring
RUN install-php-extensions openssl
RUN install-php-extensions tokenizer
RUN install-php-extensions xml
RUN install-php-extensions opcache


COPY . /www/



CMD sleep infinity
