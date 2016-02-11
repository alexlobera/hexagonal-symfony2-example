# Workshop about Hexagonal Architecture and Symfony2

This repo is a simple exercise to implement Hexagonal Architecture into a Symfony2 project, and decouple Symfony2 from the app

Install
=======

You need to have:

 * [Vagrant](https://www.vagrantup.com/downloads.html)
 * [Virtualbox](https://www.virtualbox.org/wiki/Downloads)

```
$ git clone https://github.com/alexlbr/hexagonal-symfony2-example.git
```

```
$ cd env
```

```
$ vagrant up
```

```
$ vagrant ssh
```

```
$ cd /vagrant/www/
```

```
$ php app/console demo:greet
```

Usage
=====

The source code of the web is under (wherever you cloned the repo)/www and it's mapped to the Vagrant machine.

Type in your web browswer http://10.37.4.58/
No route found for "GET /" (of course you have to implement it!)

Edit the code under www in your host machine, save and check the browser again