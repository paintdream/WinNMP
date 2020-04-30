WT-NMP - portable Nginx Mysql Php development stack for Windows
===============================================================
A portable, preconfigured, lightweight, fast and stable server stack for developing php mysql applications on windows, based on the excellent webserver Nginx. A lighter alternative to XAMPP and WAMP.


Changelog:
----------

* wt-nmp-14.12:
 - added Check Configuration Syntax buttons for nginx and mysql
 - added a workaround for mysql slow connections ipv6 issue
 - integrated Local Virtual Servers using Hosts Commander and Nginx
 - implemented --wwwDir argument Custom WWW folder 
 - fixed support for multiple installations pointing to the same project folder
 - improved project settings dialog
 - removed php-5.5. It is now available only as an [extra package](http://sourceforge.net/projects/wtnmp/files/extras/)

* wt-nmp-14.11 :
 - fixed several server manager issues
 - added HostsFileEditor
 - added the latest versions of Nginx, HeidiSql, PHP

* wt-nmp-14.10 :
 - fixed show server manager bug
 - added support for php-5.6.x

* wt-nmp-14.09 :
 - cloned php.ini in php bin directory, for composer
 - added the latest versions of Nginx, MySQL, PHP

* wt-nmp-14.05 :
 - wt-nmp.exe server manager now runs minimized in the system tray and monitors and restarts crashed servers
 - added the latest versions of Nginx, MySQL, PHP, adminer
 - added Composer.phar, Node.js, NPM, and WinSCP
 - implemented Update Checker and Project List 
 - implemented Project Upload, Sync and Browse with WinSCP
 - multiple upgrades and fixes.

* wt-nmp-14.03 :
 - added the latest versions of Nginx, MySQL, PHP, adminer

* wt-nmp-14.01 :
 - added the latest versions of Nginx, MySQL, PHP
 - server manager remembers the last php version and number of php processes used
 - better support for multiple development environments on the same OS

* wt-nmp-13.12 :
 - Start servers with windows checkbox
 - Installer 

* wt-nmp-13.10 : 
 - added the latest versions of Nginx, MySQL, PHP
 - added command line option -l --latestPhp
 - changed mysql connection string from 'localhost' to '127.0.0.1' to prevent 1 second delay on windows 8

* wt-nmp-13.09 : 
 - added PHP 5.5.3 allongside 5.4.19 and 5.3.27
 - added opcache xdebug Php Extensions
 - in the server manager you can choose from multiple PHP versions
 - added PSPad free text editor

* wt-nmp-13.07.31 : 
 - added the latest versions of Nginx, MySQL, PHP, XCache
 - Xcache is loaded but disabled by default
 - added msmtp (sendmail alternative for windows) and php mail() tester
 - Fixed a few config bugs

* wt-nmp-13.06.09 : 
 - WT-NMP is now truly portable, the wt-nmp.exe server manager updates configuration files automatically after mooving to a new location
 - MySQL data dir is moved from distribution dir mysql-*/data to wt-nmp basedir in order for database data to be persistent during upgrades
 - removed command line option -w --warningsDisabled
 - renamed command line option -p --phpProcesses to -p --phpCgiServers
 - renamed nginx additional config files to nginx.*.conf
 - moved all executables in /bin
 - added a few icons to the server manager
 - added MySQL Database daily backups --backup

* wt-nmp-13.04.23 : 
 - added the latest versions of Nginx, MySQL, PHP
 - wt-nmp.exe now has a debug logBox and close button
 - all configuration files were moved to C:/wt-nmp/conf to allow easy upgrades
 - reg.php has a new look.