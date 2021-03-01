# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: hfadyl <hfadyl@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/02/02 18:15:31 by hfadyl            #+#    #+#              #
#    Updated: 2020/02/12 16:48:08 by hfadyl           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster
RUN apt-get update
RUN apt-get install -y nginx php-fpm wget unzip lsb-release gnupg php-mysql
COPY src/install.sh /tmp
COPY src/phpmyadmin /var/www/html/phpmyadmin
COPY src/default /etc/nginx/sites-available/default
COPY src/nginx-selfsigned.crt /etc/ssl/certs/nginx-selfsigned.crt
COPY src/nginx-selfsigned.key /etc/ssl/private/nginx-selfsigned.key
COPY src/wordpress /var/www/html/
COPY src/start.sh /tmp
COPY src/wordpress.sql /tmp
RUN apt-get update
RUN bash /tmp/install.sh
CMD sh /tmp/start.sh
EXPOSE 80 443
RUN echo "daemon off;" >> /etc/nginx/nginx.conf