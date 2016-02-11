#!/usr/bin/env bash
export DEBIAN_FRONTEND=noninteractive

sudo aptitude update -q

debconf-set-selections <<< 'mysql-server mysql-server/root_password password'
debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password'
apt-get update
apt-get install -y mysql-server
sudo aptitude install -q -y -f mysql-client nginx php5-fpm php5-apc

sudo cp /vagrant/env/dev/php.ini /etc/php5/fpm/php.ini

DB=hexagonal_dev;
#echo "Creating new database $DB";
mysql -uroot -e "create database $DB";

# Install commonly used php packages
sudo aptitude install -q -y -f php5-mysql php5-curl php5-intl php-pear php5-imagick

# Nginx configuration
sudo cp /vagrant/env/dev/nginx_sites-available_hexagonal.dev /etc/nginx/sites-available/hexagonal.dev
sudo ln -s /etc/nginx/sites-available/hexagonal.dev /etc/nginx/sites-enabled/hexagonal.dev
sudo rm /etc/nginx/sites-enabled/default

# shared code
sudo mkdir /var/www
sudo ln -s /vagrant/www /var/www/hexagonal.dev

sudo service nginx restart

sudo service php5-fpm restart

curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

#node and less
sudo apt-get install --yes nodejs
sudo ln -s /usr/bin/nodejs /usr/bin/node
sudo apt-get install -y npm
npm install -g less
