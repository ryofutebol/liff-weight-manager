# 案件やリモート環境に応じてPHPバージョンは変える
FROM php:7.3-apache

# ここで必要なものをインストール
RUN apt-get update \
 && apt-get install -y --no-install-recommends \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libmcrypt-dev \
    libicu-dev \
 && apt-get -y clean \
 && rm -rf /var/lib/apt/lists/* \
 && a2enmod rewrite headers


RUN docker-php-ext-install -j$(nproc) intl mbstring mysqli pdo_mysql opcache && docker-php-ext-enable mysqli

# Xdebugのインストール
RUN pecl install xdebug \
 && docker-php-ext-enable xdebug
   
# 予め docker cp コマンドで /usr/local/etc/php/php.ini-development ファイルをphp.iniとして持ってくる
# php.ini-production ではなく php.ini-development の方を持ってきた理由は、
# エラー出力関係が有効になっているから（例：display_errors = On）
COPY ./php/php.ini /usr/local/etc/php/php.ini

# /etc/apache2/sites-available/000-default.conf を予めホストにコピーしておいてDocumentRootを変更してコピーする
COPY ./apache/000-default.conf /etc/apache2/sites-available/000-default.conf