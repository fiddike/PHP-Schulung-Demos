PHP-Schulung-Demos
==================

Original location: https://github.com/timon-schroeter/PHP-Schulung-Demos

This repos was created to support a PHP Training given in German, see:
* PHP Training Website: German: [PHP Schulung](http://www.php-schulung.de/)
* Symfony Training Website: English: [Symfony Training](http://www.php-schulung.de/en/symfony-training/)
* Symfony Training Website: German: [Symfony Schulung](http://www.php-schulung.de/symfony-schulung/)


Clone using:
```
$ git clone git@github.com:timon-schroeter/PHP-Schulung-Demos.git PHP-Schulung-Demos.git
```
Build and start Vagrant machine:
```
$ cd PHP-Schulung-Demos.git
$ cd vagrant
$ vagrant up
```

Accessing Webserver and DB from the outside:
* Point your web browser to: http://192.168.23.100/hello.php , you should see the output "hello!".
* Point you favorite SQL browser to 192.168.23.100 port 3306 , user root, no password to view and edit the mysql DB.

All the executable demos are are in the web folder, have a look:
```
$ cd PHP-Schulung-Demos.git
$ cd web
$ ls -lR
```

