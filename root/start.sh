#!/bin/sh

/usr/share/mysql/mysql.server start --user=root
php -S 0.0.0.0:8080 -t /srv
