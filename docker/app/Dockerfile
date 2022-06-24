FROM ubuntu:20.04
WORKDIR /app
ENV TZ=UTC

RUN export APT_KEY_DONT_WARN_ON_DANGEROUS_USAGE=true \
  && useradd -ms /bin/sh -u 1337 tesseract \
  && ln -snf /usr/share/zoneinfo/${TZ} /etc/localtime && echo ${TZ} >/etc/timezone \
  && apt-get update \
  && apt-get install -y --no-install-recommends gnupg gosu \
  && gosu nobody true \
  && echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu focal main" >/etc/apt/sources.list.d/ppa_ondrej_php.list \
  && apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys E5267A6C >/dev/null 2>&1 \
  && apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys C300EE8C >/dev/null 2>&1 \
  && apt-get update

RUN apt-get install -y --no-install-recommends \
    ca-certificates curl libfontconfig1 libjpeg62 libreoffice libssl-dev libx11-dev libxrender1 libxtst6 \
    nginx php7.2-bcmath php7.2-cli php7.2-curl php7.2-fpm php7.2-gd php7.2-gmp php7.2-igbinary \
    php7.2-imap php7.2-intl php7.2-ldap php7.2-mbstring php7.2-memcached php7.2-msgpack \
    php7.2-pgsql php7.2-readline php7.2-soap php7.2-xdebug php7.2-xml php7.2-zip \
    supervisor unzip zip \
  && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer \
  && ln -sf /dev/stdout /var/log/nginx/access.log \
  && ln -sf /dev/stderr /var/log/nginx/error.log \
  && mkdir -p /run/php \
  && apt-get -y autoremove \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* /var/tmp/* /tmp/*

COPY h5bp /etc/nginx/h5bp
COPY default /etc/nginx/sites-available/default
COPY php-fpm.conf /etc/php/7.2/fpm/php-fpm.conf
COPY xdebug.ini /etc/php/7.2/mods-available/xdebug.ini
COPY tesseract.ini /etc/php/7.2/fpm/conf.d/99-tesseract.ini
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY start-container /usr/local/bin/start-container
RUN chmod +x /usr/local/bin/start-container

EXPOSE 80
ENTRYPOINT ["start-container"]
