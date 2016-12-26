FROM alpine:edge
MAINTAINER NaruseJun <books@narusejun.com>

EXPOSE 8080
ENTRYPOINT ["sh", "/root/start.sh"]

COPY srv /srv
COPY root /root
COPY user.ini /etc/php7/conf.d/user.ini
COPY .git/refs/heads/master /root/sha

RUN sh /root/setup.sh
