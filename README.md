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

Accessing Webserver, DB and Varnish from the outside:
* Point your web browser to: http://192.168.23.100/hello.php , you should see the output "hello!" coming directly from the nginx webserver.
* Point your web browser to: http://192.168.23.100:6081/hello.php , you should see the output "hello!" coming from the varnish cache. The http response will contain an X-Varnish header. The content will be cached for the default ttl of 120 seconds.
* Point you favorite SQL browser to 192.168.23.100 port 3306 , user root, no password to view and edit the mysql DB.

All the executable demos are are in the web folder, have a look:
```
$ cd PHP-Schulung-Demos.git
$ cd web
$ ls -lR
```

OPTIONAL: If you want to use the XDebug remote debugging feature on every request, ssh into the vagrant machine:
```
$ cd PHP-Schulung-Demos.git
$ cd vagrant
$ vagrant ssh
```
Once inside, edit the xdebug config
```
$ sudo vim /etc/php5/conf.d/xdebug.ini
```
and set this value:
```
xdebug.remote_autostart=1
```
Now XDebug will try to connect to a remote debugger (e.g. PHPStorm on your host system) on every request and ever command line php execution.