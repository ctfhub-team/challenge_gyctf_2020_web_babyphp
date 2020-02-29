FROM ctfhub/base_web_nginx_mysql_php_56

COPY src /var/www/html
COPY _files/flag.sh /flag.sh

RUN sh -c 'mysqld_safe &' \
    && sleep 5s \
    && mysql -uroot -proot -e "source /var/www/html/db.sql" \
    && rm -f /var/www/html/db.sql \
    && chown -R www-data:www-data /var/www/html
