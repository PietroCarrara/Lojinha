#!/bin/bash

# Wait for mysql
while [[ $(mysqladmin ping --silent) != "mysqld is alive" ]]; do
	printf .
	lf=$'\n'
	sleep 1
done
printf "$lf"

if [ "$MYSQL_USER" ] && [ "$MYSQL_PASSWORD" ]; then
	mysql -uadmin -u root -e "DELETE FROM mysql.user WHERE user != '$MYSQL_USER'"
	mysql -uadmin -u root -e "FLUSH PRIVILEGES"
	mysql -uadmin -u "$MYSQL_USER" -p"$MYSQL_PASSWORD" -e "CREATE DATABASE $MYSQL_USER"
else
	echo "Fail"
	exit 1
fi
