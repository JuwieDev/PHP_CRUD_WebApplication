# This is How to Run and Access PHP-CRUD Web Application __(Scholar Sphere System)__  :rocket:

A __Scholar Sphere System__ is a web application designed to revolutionize the way you manage and track scholars information. Powered by PHP with CRUD (Create, Read, Update, Delete) functionality, the system is built to provide efficient and user-friendly tools for administrators to effectively oversee and organize scholars' information.

## :computer: Interface: 
![visual](https://i.pinimg.com/originals/ec/7e/39/ec7e39d31e7ea5ab70d287bc97b4f06a.png?fbclid=IwAR38tjju9EXQomiDyH9nqAuPglG-AgZAquvG2MANz0MX88zEqxwTre4NC4Y)

---

## :hammer_and_wrench: Installation

### Requirements

- [Xampp](https://www.apachefriends.org/download.html)
- [Gitbash](https://git-scm.com/downloads) (*Optional: if you want to clone this project or Download ZIP*)
- [Workbench](https://dev.mysql.com/downloads/workbench/) (*Optional: if you don't want to use phpmyadmin*)

> You can [Clone](https://github.com/JoePilarmeo/PHP_CRUD_WebApplication.git) or [Download ZIP](https://github.com/JoePilarmeo/PHP_CRUD_WebApplication/archive/refs/heads/main.zip) to make the local copy of this project

 **Cloning a Repository**

Open gitbash and navigate htdocs by typing this code `cd C:/xampp/htdocs` and make a copy of it by typing this code `git clone https://github.com/JoePilarmeo/PHP_CRUD_WebApplication.git`

 **ZIP Download**

Extract this ZIP file in `cd C:/xampp/htdocs` directory 

### :open_file_folder: Now you have a local copy of this project! We are now going to prepare the database remotely, follow these steps:

1. First, open xampp and click "Start" under the "Apache" and "MySQL".

2. Create empty database and import the `webapp_databse.sql`

    *Using phpmyadmin*

    - Go to your browser and copy paste this url `http://localhost/phpmyadmin`.
    - After that create a new database at the right navigation panel click "New", input the database name `webapp_databse` and click "Create".
    - Click the "Import" window at the top, click the "Choose file", navigate the backup file in the local project that has this name `webapp_databse.sql` in folder of database and click "Import".

    *Using workbench*
    - Open the Mysql Workbench connect to your MySQL server.
    - In the Navigator panel, right-click on the MySQL server instance and select "Create Schema..." from the context menu.	
    - Enter the name of your schema then click the apply button
    - Click on "Server" in the top menu and select "Data Import".
    - In the "Data Import" window, select "Import from Self-Contained File" and select the backup file that has `webapp_databse.sql` in the database folder at the root directory of the project.
    -Now click the "Start Import".

3. After importing the `webapp_databse.sql` file, you need to update the database credentials in the config.php file to match your own database setup. The config.php file is located in the pages folder then config folder of this repository.
4. Open the config.php file and locate the following lines of code:

> config.php
```php

	define('ROOT_URL', '');
	define('DB_HOST', 'localhost'); //You can replace it your own database credentials 
	define('DB_USER', 'root'); //You can replace it your own database credentials 
	define('DB_PASS', 'root'); //You can replace it your own database credentials 
	define('DB_NAME', 'website_database.sql');

```

5. Now all needed are set, check the website now if it is running sucessfully copy paste this url to your web browser `http://localhost/PHP_CRUD_WebApplication/pages/dashboard`

## Created by:

### **[Francis Joe Pilarmeo](https://github.com/JoePilarmeo)** and **[Mark Jayson Riego](https://github.com/MJRiego)** from BSIT3-B1 :male_sign::alien:
