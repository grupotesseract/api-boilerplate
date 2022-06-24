FROM node:12
ARG uid=999
WORKDIR /app

RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add - \
  && echo "deb http://dl.yarnpkg.com/debian/ stable main" > /etc/apt/sources.list.d/yarn.list \
  && apt-get update \
  && apt-get install -y --no-install-recommends git yarn \
  && apt-get -y autoremove \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

EXPOSE 3000

ENTRYPOINT ["tail", "-f", "/dev/null"]
