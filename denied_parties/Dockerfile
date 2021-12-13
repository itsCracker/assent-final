FROM vaultke/php7.4-fpm-nginx

RUN { \
	echo 'apc.shm_segments=1'; \
	echo 'apc.shm_size=256M'; \
	echo 'apc.num_files_hint=7000'; \
	echo 'apc.user_entries_hint=4096'; \
	echo 'apc.ttl=10'; \
	echo 'apc.user_ttl=10'; \
	echo 'apc.gc_ttl=5'; \
	echo 'apc.max_file_size=1M'; \
	echo 'apc.stat=1'; \
} > $PHP_INI_DIR/conf.d/apcu-recommended.ini


COPY nginx.vh.default.conf /etc/nginx/conf.d/default.conf
COPY docker-vars.ini /usr/local/etc/php/conf.d/docker-vars.ini


COPY . ./app
WORKDIR /var/www/html/app
RUN chmod -R 777 /var/www/html/app

#COPY env-example .env
#update composer
#RUN  composer update
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
CMD ["/entrypoint.sh"]
