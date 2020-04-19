FROM ubuntu:latest

ENV DEBIAN_FRONTEND=noninteractive

#Update & Upgrade

RUN apt-get update
RUN apt-get -y install apt-utils
RUN apt-get -y dist-upgrade
#install dependencies

RUN apt-get -y install git wget

#run the script

RUN apt-get -y install apache2 php php-mysql libapache2-mod-php
RUN a2enmod rewrite
RUN service apache2 restart

RUN rm -rf /var/www/html/*
COPY . /var/www/html
EXPOSE 80

CMD apachectl -D FOREGROUND