FROM public.ecr.aws/w4p5g2f0/php-fpm:7.4-nginx-ubuntu20

ENV STORAGE_PATH /var/www/storage
ENV TMP_STORAGE_PATH /var/tmp_storage
ENV SHARED_TMP_STORAGE_PATH /var/shared_tmp_storage

# Instala paquetes
RUN apt-get update \
  && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
  cron \
  php-mbstring php-pgsql php-zip php-curl php-xml \
  #  Hace limpieza
  && apt-get clean && rm -rf /var/tmp/* /var/lib/apt/lists/* /tmp/* \
  # Configura modulos de PHP
  && rm -f /etc/php/7.4/fpm/conf.d/*opcache* /etc/php/7.4/fpm/conf.d/*xdebug* \
  # Configuracion de PHP
  && sed -i 's/;date\.timezone =/date.timezone = America\/Bogota/' /etc/php/7.4/fpm/php.ini \
  && sed -i 's/max_execution_time = ../max_execution_time = 60/' /etc/php/7.4/fpm/php.ini \
  && sed -i 's/max_input_time = ../max_input_time = 60/' /etc/php/7.4/fpm/php.ini \
  && sed -i 's/memory_limit = ...M/memory_limit = 512M/' /etc/php/7.4/fpm/php.ini \
  && sed -i 's/post_max_size = .M/post_max_size = 50M/' /etc/php/7.4/fpm/php.ini \
  && sed -i 's/upload_max_filesize = .M/upload_max_filesize = 50M/' /etc/php/7.4/fpm/php.ini \
  && sed -i 's/short_open_tag = Off/short_open_tag = On/' /etc/php/7.4/fpm/php.ini \
  && sed -i 's/short_open_tag = Off/short_open_tag = On/' /etc/php/7.4/cli/php.ini \
  # Configuracion del pool PHP
  && sed -i 's/^;ping\.path = \/ping/ping.path = \/hcheck/' /etc/php/7.4/fpm/pool.d/www.conf

# Copia archivos del sistema de archivos local al contenedor
COPY etc /etc
COPY tmp /tmp
#COPY home /home 
#COPY filter_env_vars.sh /
#COPY crontab /app/crontab
#RUN crontab /app/crontab
COPY src /var/www
#COPY ./storage/oauth-private.key /var/www/storage/
#COPY ./storage/oauth-public.key /var/www/storage/
WORKDIR /var/www
RUN apt upgrade php7.4-cli -y
RUN composer install
# Ejecucion de contenedor
COPY docker-entrypoint.sh /
RUN chmod u+x /docker-entrypoint.sh

VOLUME ["${STORAGE_PATH}"]
ENTRYPOINT ["/docker-entrypoint.sh"]
CMD ["supervisord", "-c", "/etc/supervisor/supervisord.conf"]
