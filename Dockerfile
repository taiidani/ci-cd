FROM php:7.1-apache

ENV IN_IMAGE=true

COPY . /var/www/html/
