FROM php:8.0-apache as base

COPY ./index.php /var/www/html 
COPY ./file_upload.php /var/www/html


RUN mkdir /var/www/html/uploads
RUN chmod 777 /var/www/html/uploads
RUN chmod 777 /tmp

COPY ./flag.txt /etc/flag.txt
EXPOSE 80

