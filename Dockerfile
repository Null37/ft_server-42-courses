FROM debian:buster
RUN mkdir /root/zero
WORKDIR /root/zero
COPY srcs/. /root/zero/
#all install you need in the server 
RUN bash install.sh
#run server and creat database mysql and user controll all data 
ENTRYPOINT service nginx start && \
service mysql start && \
service php7.3-fpm start && mysql -u root -e "CREATE DATABASE zer_db" && mysql -u root -e "CREATE DATABASE phpmyadmin" && \
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'zero'@'localhost' IDENTIFIED BY 'zero';" && \
mysql -u root zer_db < zer_db.sql && mysql -u root phpmyadmin < phpmyadmin.sql && \
service nginx restart && \
service mysql restart && \
service php7.3-fpm restart && tail -f /dev/null