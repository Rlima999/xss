# Origin image
FROM ubuntu:16.04

# Meta Information
MAINTAINER Pedro Tarrinho "tarrinho@pt4.tech"

# update
RUN apt update

# Setup Server Environment
RUN apt install -y \
    apache2 \
    php \
    libapache2-mod-php

COPY search_google_pt/index.php /var/www/html/
COPY search_google_pt/google.jpg /var/www/html/
COPY search_google_pt/google.css /var/www/html/
COPY search_google_pt/font.css.js /var/www/html/
COPY search_google_pt/lente.png /var/www/html/
RUN rm /var/www/html/index.html

# Entry point

#ENTRYPOINT service apache2 start && /bin/bash
CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]
