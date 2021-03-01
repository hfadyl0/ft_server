# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    install.sh                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: hfadyl <hfadyl@student.42.fr>              +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/02/11 00:09:29 by hfadyl            #+#    #+#              #
#    Updated: 2020/02/11 01:07:52 by hfadyl           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

export	DEBIAN_FRONTEND="noninteractive"
apt-get update
apt-get -y upgrade
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | debconf-set-selections
wget http://repo.mysql.com/mysql-apt-config_0.8.13-1_all.deb
dpkg -i mysql-apt-config_0.8.13-1_all.deb
apt-get update
apt-get install -y mysql-server