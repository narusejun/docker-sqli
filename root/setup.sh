#!/bin/sh

apk --no-cache --update add nginx php7 php7-fpm php7-curl php7-pdo_mysql mysql mysql-client

mkdir -p /run/nginx
mkdir -p /run/mysqld
ln -s /usr/bin/php7 /usr/bin/php

mysql_install_db --user=root 2> /dev/null
/usr/share/mysql/mysql.server start --user=root
mysql < /root/database.sql
mysql < /root/clear.sql
mysql < /root/ctf.sql
/usr/share/mysql/mysql.server stop --user=root
