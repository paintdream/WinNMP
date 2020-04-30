WT-NMP - portable Nginx Mysql Php development stack for Windows
===============================================================
A portable, preconfigured, lightweight, fast and stable server stack for developing php mysql applications on windows, based on the excellent webserver Nginx. A lighter alternative to XAMPP and WAMP.

{:toc}


### How to create a new Project

  ![New Project](http://wtriple.com/wtnmp/how-tos/1new.png)

 - Open *WT-NMP Server Manager* by clicking the taskbar or desktop icon, then click on `New Project` icon, choose a project name, hit Enter or click `Save Project`. 
 - Set the project `Live Url` if any. This should point to the production version of your project, hosted on a remote server.
 - Check `Enable Local Virtual Server` if you want to use a local test domain name like `http://projectname.local`. This is useful to test SEF links and other Nginx rewrite rules.
 - Optionally, choose your hosting provider and configure the remote connection. If you use [Wtriple Managed Nginx Hosting](http://wtriple.com/hosting) most of the settings will be locked to defaults. 
 - Save the project settings.
 - Go to your `c:\pathTo\WWW\projectname` folder and create your project files. If you want to use composer to create your project skip to ***How to use composer.bat***
 - Browse [http://localhost](http://localhost) or `http://projectname.local` or in the server manager window click on any of the `Home` icons
 - Use `HeidiSql` or `Adminer` to create the project`s database
 - Test your project using different PHP versions
 - Upload or Sync the project files to the remote server, as explained below.

  ![Edit Project](http://wtriple.com/wtnmp/how-tos/2edit.png)




### How to upload files or synchronize your project to a server using WinSCP:

  ![Project Buttons](http://wtriple.com/wtnmp/how-tos/5project.png)

 - Open *WT-NMP Server Manager*
 - Select your project, click on `Project Setup` icon, setup the remote connection and Save.
 - Return to the project list and click on `Upload`, `Synchronize` or `Browse` icons. A WinSCP dialog will open.

  ![Sync with WinSCP](http://wtriple.com/wtnmp/how-tos/7sync.png)

  ![Browse Files with WinSCP](http://wtriple.com/wtnmp/how-tos/10browse.png)




### How to use composer.bat to download and keep updated various PHP frameworks and components. 

  ![Composer](http://wtriple.com/wtnmp/how-tos/4composer.png)

[Composer](https://getcomposer.org/) is a tool for dependency management in PHP. After you created a new project in `c:\pathTo\WWW\projectname`, in a command line window, run commands like:

	
	composer create-project symfony/framework-standard-edition c:\pathTo\WWW\projectname 2.4.*

	cd c:\pathTo\WWW
	composer create-project silverstripe/installer projectname 3.1.*

	cd c:\pathTo\WWW
	composer create-project laravel/laravel projectname --prefer-dist


             

### How to Debug Configuration Files:

After changing the configuration files, one server might refuse start. In order to find out the reason, you need to Check Configuration Syntax:

 - In the *WT-NMP Server Manager* window, use the Check Configuration Syntax buttons to see the start up errors for Nginx and MySql
 - For PHP, if there are any startup errors, they will be shown as alert messages.
 - Also check the server logs in WT-NMP/log
 - To see the commands used to start each service, Kill all servers and restart with ``` wt-nmp.exe --debug``` ( Display debug messages )
 - If nothing works, delete that configuration file, or from *c:\pathTo\WT-NMP\conf* `nginx.conf, mysql.ini, php.ini` , kill all servers and restart wt-nmp.exe. The Server Manager will copy the default configuration files to WT-NMP\conf.




### How to Clone/Sync WT-NMP to a new machine:

 - If you move WT-NMP to a new machine without running the installer, PHP 5.5 and later might refuse to start, because it requires Visual C++ Redistributable for Visual Studio 2012. You can [install it manually from here](http://www.microsoft.com/en-us/download/details.aspx?id=30679). It will not run on windows XP.
 - Run wt-nmp installer once on the new machine, then overwrite/sync the whole WT-NMP folder with the cloned one.
 - For example, sync-ing your work from `C:\MyWork\WT-NMP` on Machine1 to `D:\WT-NMP` on Machine2 should be done by running the installer once on Macine2 (and choosing `D:\WT-NMP` as destination) then overwriting `D:\WT-NMP` each time you need to sync your work.




### How to allow access from LAN and Internet to your local project:

In the *WT-NMP Server Manager* window, go to `Project Setup`, check `Enable Local Virtual Server`, then Save. 

Edit `WT-NMP\conf\domains.d\projectName.conf` directly or go to `Project Setup` and click on `Edit Nginx Local Virtual Server Configuration File` icon.

  ![Browse Files with WinSCP](http://wtriple.com/wtnmp/how-tos/11lan.png)

Modify like this:

		server {
			# listen		127.0.0.1:80;
			listen			*:80;
		    server_name     projectName.local;
		    server_name     projectName.com;
		    server_name     projectName.myDomain.com;

			## Access Restrictions
			allow			all;
			# deny			all;

Now `Kill` Nginx, `Start` Nginx or `Check Nginx Configuration Syntax`.




### How to add additional local test server names to my project:

  ![Hosts File Editor](http://wtriple.com/wtnmp/how-tos/3hosts.png)

You can always use different/multiple server names for your `Local Virtual Server`. Use Hosts File Editor (the third icon) to add extra local server names like:
    
    127.0.0.1    projectName.dev 
    127.0.0.1    projectName.test 
    127.0.0.1    www.projectName.xyz

Then Edit `conf\domains.d\projectName.conf` and add

    server_name projectName.dev projectName.test www.projectName.xyz;




### Set a custom root subfolder for my Local Virtual Server

Your project's Nginx settings are stored in `conf\domains.d\myProject.conf`. This file`s root directive is automatically modified by the *WT-NMP Server manager* for portability.

If you want to use a custom root folder for your project, for example `WWW\myProject\public` you need to rename the `.conf` file before modifying the root directive, to avoid having it reset each time WT-NMP starts, then modify: `root C:\PathTo\WWW\myProject\public";`

	myProject.conf -> myProject.locked.conf




### How to setup a multiple development environment

If you only need to test your projects with different Php versions with the same configuration, you should read ***How to Install Extras***

If you want to rapidly test your projects with different Nginx, MySql and PHP versions and combinations, and different configurations, you can create a multiple development environment, where multiple installations of WT-NMP point to the same projects folder.

Use the [wt-nmp-multiple.bat](http://wtriple.com/wtnmp/wt-nmp-multiple.txt "Multiple development environment Script") script. You must save this script in the same folder with [wt-nmp-14.12.exe](https://sourceforge.net/projects/wtnmp/files/latest/download) installer (or newer) and execute it. This will install 3 versions of WT-NMP in c:\Work and 3 Icons on the desktop.

Or install manually: you must run WT-NMP installer 14.12 or later multiple times and choose different destinations each time:

	C:\Work\WT-NMP Old
	C:\Work\WT-NMP Test
	C:\Work\WT-NMP
 
You should now create 3 desktop icons pointing to each copy of wt-nmp.exe. Edit each shortcut target and add `--wwwDir="C:\Work\WWW"`  

Clicking each icon means switching between environments. Now you can customize the configuration of each of this installations: Edit `C:\Work\WT-NMP***\conf\*`

If you need an older version of nginx, mysql or php for `WT-NMP Old` please refer to ***How to Install Extras***

If you download a newer installer it will upgrade only the last installed stack, `C:\Work\WT-NMP`




### How to Install Extras:

Let`s say you want to use Nginx 1.2.x instead of the currently installed version, or PHP 5.3.x

 - Kill All servers, [Download the extra package](http://sourceforge.net/projects/wtnmp/files/extras/)
 - For Nginx, delete c:\pathTo\WT-NMP\bin\nginx-*
 - For MySql, delete c:\pathTo\WT-NMP\bin\mysql-*  
 - For PHP it`s ok to keep multiple versions.
 - Unzip the extra package in c:\pathTo\WT-NMP\


