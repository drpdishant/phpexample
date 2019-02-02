FROM ubuntu:latest
MAINTAINER Dishant Pandya <drpdishant@gmail.com>

ENV DEBIAN_FRONTEND noninteractive

#Update & Upgrade

RUN apt-get update
RUN apt-get upgrade

#install dependencies

RUN apt-get install -y git wget

#run the script

RUN apt-get -y install apache2
RUN apt-get -y install php php-mysql
RUN apt-get install -y libapache2-mod-php
RUN a2enmod rewrite
RUN service apache2 restart

RUN git clone https://github.com/drpdishant/phpexample.git /var/www/html/phpexample

EXPOSE 80