FROM alpine:edge
MAINTAINER NaruseJun <books@narusejun.com>

EXPOSE 8080
ENTRYPOINT ["sh", "/root/start.sh"]

COPY srv /srv
COPY root /root

RUN sh /root/setup.sh

COPY user.ini /etc/php7/conf.d/user.ini
COPY default.conf /etc/nginx/conf.d/default.conf

COPY .git/refs/heads/master /etc/version
