FROM ubuntu:18.04
ENV TZ=UTC

WORKDIR /var/www/html
RUN useradd -ms /bin/bash -u 1337 vessel \
  && ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone \
  && apt-get update \
  && apt-get install -y --no-install-recommends gnupg gosu \
  && gosu nobody true \
  && echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu bionic main" \
    > /etc/apt/sources.list.d/ppa_ondrej_php.list \
  && echo "deb http://ppa.launchpad.net/nginx/development/ubuntu bionic main" \
    > /etc/apt/sources.list.d/ppa_nginx_mainline.list \
  && export APT_KEY_DONT_WARN_ON_DANGEROUS_USAGE=true \
  && apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys E5267A6C \
  && apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys C300EE8C \
  && apt-get update

RUN apt-get install -y --no-install-recommends \
    curl \
    libssl1.0-dev \
    nginx \
    supervisor \
    unzip \
    wkhtmltopdf \
    zip \
    php7.3-bcmath \
    php7.3-cli \
    php7.3-curl \
    php7.3-fpm \
    php7.3-gd \
    php7.3-gmp \
    php7.3-igbinary \
    php7.3-imap \
    php7.3-intl \
    php7.3-ldap \
    php7.3-mbstring \
    php7.3-memcached \
    php7.3-msgpack \
    php7.3-pgsql \
    php7.3-readline \
    php7.3-soap \
    php7.3-xdebug \
    php7.3-xml \
    php7.3-zip \
  && php -r "readfile('http://getcomposer.org/installer');" \
    | php -- --install-dir=/usr/bin/ --filename=composer \
  && mkdir /run/php \
  && apt-get -y autoremove \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* \
  && echo "daemon off;" >> /etc/nginx/nginx.conf \
  && ln -sf /dev/stdout /var/log/nginx/access.log \
  && ln -sf /dev/stderr /var/log/nginx/error.log

COPY h5bp /etc/nginx/h5bp
COPY default /etc/nginx/sites-available/default
COPY php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf
COPY xdebug.ini /etc/php/7.3/mods-available/xdebug.ini
COPY vessel.ini /etc/php/7.3/fpm/conf.d/99-vessel.ini
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY start-container /usr/local/bin/start-container
RUN chmod +x /usr/local/bin/start-container

EXPOSE 80

ENTRYPOINT ["start-container"]
