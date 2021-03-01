# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    start.sh                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: hfadyl <hfadyl@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/02/10 16:11:56 by hfadyl            #+#    #+#              #
#    Updated: 2020/02/12 01:21:17 by hfadyl           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

chown -R mysql: /var/lib/mysql
service mysql start
service php7.3-fpm start
mysql --user=root -e "CREATE USER 'hfadyl'@'localhost' IDENTIFIED BY '1337hfadyl';GRANT ALL PRIVILEGES ON * . * TO 'hfadyl'@'localhost';FLUSH PRIVILEGES;"
mysql --user=root -e "CREATE DATABASE wordpress; USE wordpress; source /tmp/wordpress.sql;"
chown -R www-data:www-data /var/www/html/wordpress/
apt update
service nginx start