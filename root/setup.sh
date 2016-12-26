#!/bin/sh

apk --no-cache --update add php7 php7-curl php7-pdo_mysql mysql mysql-client

ln -s /usr/bin/php7 /usr/bin/php

mkdir -p /run/mysqld
mysql_install_db --user=root 2> /dev/null

/usr/share/mysql/mysql.server start --user=root
mysql < /root/autocreate.sql
mysql < /root/clear.sql
/usr/share/mysql/mysql.server stop --user=root
