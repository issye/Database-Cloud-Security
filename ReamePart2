Written By: Zulaikha

PART 1: SOFTWARE TO DOWNLOAD (EVERYONE)

**download any code editor to see the code , i use VS code**
1️) Download & Install XAMPP
- after you download xampp , open it and download Apache.
whenever you want to use the website , click start on Apache and it must turn green.

2) Install SQL SERVER (if not already installed) 
  ( this is crucial if you guys cannot run the website because the error says " could not find driver")
a. Microsoft official page
https://learn.microsoft.com/en-us/sql/connect/php/download-drivers-php-sql-server

b. scroll down to:
   Microsoft Drivers 5.11+(or latest) and download it.

c.extract the zip file and open php_8.2
  - find the file name and copy it (php_sqlsrv_82_ts_x64.dll and php_pdo_sqlsrv_82_ts_x64.dll)
  - Paste both file into your C:\xampp\php\ext\
  -open Xampp Application , start the Apache and click config -> PHP(php.ini)
  - at the very bottom line paste this :
    extension=php_sqlsrv_82_ts_x64.dll
    extension=php_pdo_sqlsrv_82_ts_x64.dll

3) open http://localhost/phpinfo.php
  -scroll down and confirm that sqlsrv and pdo_sqlsrv is there.
- Try open the website of our system again and it should works from now on.

HOW TO RUN OUR WEBSITE
a. download the zip file (pawsecure) ive uploaded in here and extract it.
b. place the folder inside your C:\xampp\htdocs\

please run issye's sql script in ssms , this must be executed before running the website.

Features :
2 dashboard for recept , vet

recept : edit/delete/ add pets , can see the pet records
vet : edit/delete/ add pets , can see the pet records and audit logs

********* SPECIFICALLY FOR TASNEEM PART *******
1) i used login.php sets session variable 
$_SESSION['user_id']
$_SESSION['role']

2) after login redirect it into two , which is if its vet , they should see vet dashboard only.
3) use same database : vet_clinic
4) use same database user: vet_app_user

ps : the website is fully working but it doesnt connect to database yet (tasneem part) so it doesnt save in the database whether you add edit delete on the website.
                       
