WT-NMP - portable Nginx Mysql Php development stack for Windows
===============================================================
A portable, preconfigured, lightweight, fast and stable server stack for developing php mysql applications on windows, based on the excellent webserver Nginx. A lighter alternative to XAMPP and WAMP.

Copyright (C) 2013-2014 Dragoș Alexandru Ioniță
Copyright (C) 2013-2014 http://wtriple.com
All rights reserved.
http://wtriple.com/wtnmp/
https://sourceforge.net/projects/wtnmp
This software is a fork of nmp-server http://code.google.com/p/nmp-server/



Current Package contains:
-------------------------
- Nginx web server - 1.7.7
- Mysql database server - 5.6.22
- Php scripting language - 5.4.35 & 5.6.3
- Node.js server-side JavaScript engine
- HeidiSql.exe mysql database manager
- WinSCP SFTP client 
- Php Extensions: opcache, xdebug, xcache.
- MSmtp sendmail smtp client wrapper
- Composer.phar dependency manager for php 
- Adminer.php web based mysql database manager
- Reg.php regular expressions tester for both PHP and JavaScript
- wt-nmp.exe server manager


Features:
---------
- TRULY PORTABLE, you can zip it and take it with you, or you can move it to a different location on your filesystem. Configuration files are updated automatically after you move WT-NMP to a different machine/folder
- Easy to upgrade! Backups, configuration files, database data, included libraries and projects are persistent during upgrades (not overwritten)
- Lightning-fast web server. Optimized for best performance. Preconfigured servers for fast development
- Command line tools: mysql client, php console, node console, composer , npm, hosts commander
- For easy access, all configuration files are stored in one place: WT-NMP\conf and all log files are stored in one folder: WT-NMP\log
- Multiple PHP Versions and version switcher. Dynamic number of php-cgi processes
- The server manager runs minimized in the system tray and monitors, logs and restarts crashed servers
- Project setup, local virtual servers for projects, Upload, Sync and Browse with WinSCP
- Optional MySQL database daily backups can be enabled with --backup. Up to 7 backup files will be created per database per weekday




Installing & Upgrading:
-----------------------
 - [Download the latest installer](http://wtriple.com/wtnmp/). The installer produces a portable folder.
 - Choose any installation folder you want.
 - The installer also upgrades previous ZIP installations as long as you choose the same destination path.
 - Other PHP versions are available as [extra packages](http://sourceforge.net/projects/wtnmp/files/extras/)



Server Manager command line arguments:
--------------------------------------
__example shortcut:__ D:\Work\bin\wt-nmp.exe --debug --backup --phpCgiServers=2 

* -d	    _--debug_			Display debug messages
* -s	    _--startServers_		Starts all the servers in background and minimizes to systray
* -k	    _--killAll_			Kills all running servers and exits
* -b        _--backup_			Enables automatic daily backups
* -l	    _--latestPhp_		Forces the use of the latest PHP version
* -p=n	    _--phpCgiServers=n_		Forces the number of PHP-CGI Servers, between 1 and 9
* -j	    _--hideProjects_	Hides Projects list at startup	
* -n	    _--noUpdates_		Disables weekly Update checks	
* -w	    _--wwwDir="c:\Dir"__        Custom WWW folder path for projects






Portability:
------------
WT-NMP is portable, but it is better if you run the installer once on each new machine:
 
- The installer registers php, mysql, composer and node executables to PATH. If you move WT-NMP somewhere else on your file system, or to a new machine, those executables won`t be available globally anymore.
- So, if you need to copy/clone WT-NMP to a new machine, you should run the installer once, then overwrite the folder with the cloned folder





Issues:
------------
- Nginx: One of the reasons Nginx is so fast, it`s because it does not process .htaccess files. Therefore URL Rewriting and User Access must be set in nginx.conf.
- MySql 5.6 has a bug causing it to use too much memory: add table_definition_cache = 400 to mysql.ini
- PHP is configured in a very restrictive way, like on most hosting providers. Comment out disable_functions, disable_classes, open_basedir in conf/php.ini, if you need a more permissive PHP configuration.
- PHP Extensions: most of them are disabled by default, enable them in conf/php.ini (see bin/php-5.x.x/php.ini for opcache, xdebug, xcache)
- PHP MySql extension is disabled by default and is deprecated as of PHP 5.5.0, and will be removed in the future. Instead, the MySQLi or PDO_MySQL extension should be used. If you really want to enable mysql extension, add or uncomment in conf/php.ini: extension = php_mysql.dll
- PHP: Starting only one PHP-CGI server with wt-nmp.exe --phpCgiServers=1 will result in slow ajax requests since Nginx will not be able to process PHP scripts simultaneous.
- XCache PHP Extension: Disabled by default. Due to the limitations of php under windows, (only one process per CGI server, forcing wt-nmp to start more php-cgi servers instead of starting one server with more processes), the XCache PHP Extension will use different shared memory buffers for each php-cgi server. This will use more memory and will make XCache Variable Cache inconsistent between php processes. If you intend relay on it, you should use --phpCgiServers=1. XCache Opcode Cache will not be affected, but it will waste memory.
- OPCache PHP Extension: when enabled, only one php-cgi server can be safely started. Starting more PHP-CGI servers might return "Fatal Error Unable to reattach to base address"





***Release History***	| Nginx		| MySQL		| PHP				| Others
------------------------|---------------|---------------|-------------------------------|---------------
[wt-nmp-14.12](http://sourceforge.net/projects/wtnmp/files/wt-nmp-14/wt-nmp-14.12.exe/download)	| 1.7.7		| 5.6.22	| 5.4.35 & 5.6.3	| opcache xdebug xcache composer node.js npm winscp hostsFileEditor
[wt-nmp-14.11](http://sourceforge.net/projects/wtnmp/files/wt-nmp-14/wt-nmp-14.11.exe/download)	| 1.7.7		| 5.6.21	| 5.4.35 & 5.5.19 & 5.6.3	| opcache xdebug xcache composer node.js npm winscp hostsFileEditor
[wt-nmp-14.10](http://sourceforge.net/projects/wtnmp/files/wt-nmp-14/wt-nmp-14.10.exe/download)	| 1.7.6		| 5.6.21	| 5.4.34 & 5.5.18 & 5.6.2	| opcache xdebug xcache composer node.js npm winscp
[wt-nmp-14.09](http://sourceforge.net/projects/wtnmp/files/wt-nmp-14/wt-nmp-14.09.exe/download)	| 1.7.4		| 5.6.20	| 5.4.32 & 5.5.16	| opcache xdebug xcache composer node.js npm winscp
[wt-nmp-14.06](http://sourceforge.net/projects/wtnmp/files/wt-nmp-14/wt-nmp-14.06.exe/download)	| 1.7.1		| 5.6.19	| 5.4.29 & 5.5.13	| opcache xdebug xcache composer node.js npm winscp
[wt-nmp-14.05](http://sourceforge.net/projects/wtnmp/files/wt-nmp-14/wt-nmp-14.05.exe/download)	| 1.7.0		| 5.6.17	| 5.4.28 & 5.5.12	| opcache xdebug xcache	
[wt-nmp-14.03](http://sourceforge.net/projects/wtnmp/files/wt-nmp-14/wt-nmp-14.03.exe/download)	| 1.5.11		| 5.6.16	| 5.4.25 & 5.5.9	| opcache xdebug xcache	
[wt-nmp-14.01](http://sourceforge.net/projects/wtnmp/files/wt-nmp-14/wt-nmp-14.01.exe/download)	| 1.5.8		| 5.6.15	| 5.4.24 & 5.5.8	| opcache xdebug xcache	
[wt-nmp-13.12](http://sourceforge.net/projects/wtnmp/files/wt-nmp-13/wt-nmp-13.12.exe/download)		| 1.5.7		| 5.6.15	| 5.4.23 & 5.5.7	| opcache xdebug xcache	
[wt-nmp-13.10](http://sourceforge.net/projects/wtnmp/files/wt-nmp-13/wt-nmp-13.10.zip/download)		| 1.4.3		| 5.6.14	| 5.4.21 & 5.5.5	| opcache xdebug xcache	
[wt-nmp-13.09](http://sourceforge.net/projects/wtnmp/files/wt-nmp-13/wt-nmp-13.09.zip/download)		| 1.4.2		| 5.6.13	| 5.3.27 & 5.4.19 & 5.5.3	| opcache xdebug xcache	
[wt-nmp-13.07.31](http://sourceforge.net/projects/wtnmp/files/wt-nmp-13/wt-nmp-13.07.31.zip/download)		| 1.4.2		| 5.6.13	| 5.4.17	| xcache
[wt-nmp-13.06.09](http://sourceforge.net/projects/wtnmp/files/wt-nmp-13/wt-nmp-13.06.09.zip/download)		| 1.4.1		| 5.6.12	| 5.4.16	| xcache

 

Great Articles:
---------------
* [WordPress in a nutshell: WT-NMP](http://wpkrauts.com/2014/wordpress-in-a-nutshell-wt-nmp/)
* [WT-NMP How-Tos](http://wtriple.com/wtnmp/howtos.php)








