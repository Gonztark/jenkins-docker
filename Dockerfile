FROM nginx:stable

COPY . /var/www
COPY ./docker/app.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www