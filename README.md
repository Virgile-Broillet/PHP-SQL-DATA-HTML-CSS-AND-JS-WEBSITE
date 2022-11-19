# PHP-AND-SQL-DATA-WEBSITE

#########################################################
Help file for using the "serial-critical" site
BDW course - Databases and web programming
Fabien Duchateau, Université Claude Bernard Lyon 1 - 2022
#########################################################


To use this site on the EU server (bdw.univ-lyon1.fr), four steps:

- connect to PHPMyAdmin (http://bdw.univ-lyon1.fr/phpmyadmin), choose the "import" tab, and import the "bd.sql" file. This must create the tables in your comic.

- edit the file "inc/config-bd.php" and modify the values of the constants "USER", "MOTDEPASSE" and "BDD".

- send the "serial-critical" directory to the server (either with scp or rsync in command line, or with a graphical tool like FileZilla).

- open a browser and enter the url http://bdw.univ-lyon1.en/p1234567/serial-critique/


=========================================================


To use this site LOCALLY (on your machine with XAMPP or equivalent), four steps:

- connect to PHPMyAdmin (e.g., http://localhost/phpmyadmin), choose the "import" tab, and import the "bd.sql" file. This must create the tables in your comic.

- edit the file "inc/config-bd.php" and modify the values of the constants "USER", "MOTDEPASSE" and "BDD".

- Move the "serial-critical" directory to the XAMPP public directory (usually "xampp/htdocs/").

- open a browser and enter http://localhost/serial-critique/

