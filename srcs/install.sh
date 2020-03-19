#!/bin/bash
apt-get -y update
apt-get -y upgrade
apt-get install -y nginx wget lsb-release gnupg unzip
apt-get -y update
apt-get -y upgrade
###what###
#echo "doemon off;" >> /etc/nginx/nginx.conf
#supervisord 
#apt-get -y install supervisor
#apt-get -y update && apt-get -y upgrade
#install package mysql
wget http://repo.mysql.com/mysql-apt-config_0.8.13-1_all.deb
#insyall package phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.zip
unzip phpMyAdmin-5.0.1-all-languages.zip
#move phpmyadmin to /var/www/html
mv phpMyAdmin-5.0.1-all-languages /var/www/html/phpmyadmin
rm -fr phpMyAdmin-5.0.1-all-languages.zip
mv /var/www/html/phpmyadmin/config.sample.inc.php /var/www/html/phpmyadmin/config.inc.php
#edit default php
mv default /etc/nginx/sites-available/default
#install php
apt-get -y update
apt-get -y install php7.3-fpm php-mysql
#end php
apt-get -y update
apt-get -y upgrade
#install wordpress
wget https://wordpress.org/latest.zip
#unzip this package
unzip latest.zip
rm latest.zip
#inject wordpress
mv wordpress /var/www/html/
#change wordpress is localhost in my server
#enter the file wordpress
cd /var/www/html/wordpress/
#run this command for move all file to /var/www/html/
mv * /var/www/html/
#end
#back to home
cd
cd zero
#edit in cache the system to slect
mv config.dat /var/cache/debconf/
mv passwords.dat /var/cache/debconf/
#end
#install ssl
mkdir /etc/nginx/ssl
chmod +x /etc/nginx/ssl
apt-get -y update
apt-get -y install golang git
cd
cd zero
git clone https://github.com/FiloSottile/mkcert && cd mkcert
go build -ldflags "-X main.Version=$(git describe --tags)"
./mkcert install
./mkcert localhost
mv localhost-key.pem /etc/nginx/ssl/
mv localhost.pem /etc/nginx/ssl/
cd
cd zero
#end
#incstall mysql
DEBIAN_FRONTEND=noninteractive dpkg -i mysql-apt-config_0.8.13-1_all.deb
DEBIAN_FRONTEND=noninteractive apt-get -y update
DEBIAN_FRONTEND=noninteractive apt-get -y upgrade
DEBIAN_FRONTEND=noninteractive apt-get -y install  mysql-server
apt-get -y update && apt-get -y upgrade
#for error in phpmyadmin
apt-get -y install php-mbstring
mv config.inc.php /var/www/html/phpmyadmin/
mkdir /var/www/html/phpmyadmin/tmp
chmod 777 /var/www/html/phpmyadmin/tmp
#end
#wordpress file
mv wp-config.php /var/www/html/ 