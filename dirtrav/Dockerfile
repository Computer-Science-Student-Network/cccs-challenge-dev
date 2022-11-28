FROM nginx:alpine
RUN mkdir /var/www
RUN mkdir /var/www/coolthings
RUN mkdir /var/www/html

COPY ./flag.txt /var/www/flag.txt
COPY ./default /etc/nginx/conf.d/default.conf
COPY ./index.html /var/www/html/index.html


COPY ./default /var/www/coolthings/default.conf
CMD ["nginx", "-g", "daemon off;"]

EXPOSE 80
