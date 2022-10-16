# Project overview

In this project I had to develop a single page, where users can fill out their data in a form and request a sample by hitting the download button

# Information about usage
  1. Project prerequisities:
  * First we have to check if our computer have PHP installed, if not, then install it by going to https://www.php.net/downloads
  * Once it is installed we have to change 2 fields by uncommenting them.
  * Where you've installed PHP, go inside the folder and look after the `php.ini` file
  * There uncomment the `;extension=fileinfo` and `;extension=php_pdo_mysql.dll` lines ( we need these uncommented to be able to create a Laravel project. This needs to be done only on fresh installs of PHP )
  * After that we have to download Composer from https://getcomposer.org/
  * Once downloaded we install Composer. We should be able to create, start Laravel apps now
  
  2. Configuring the project
  * Download the code or clone the project
  * We have to run `composer install` in the terminal to install dependencies ( on problem we might have to run also `composer dump-autoload` )
  * After that we have to set our database credentials in `.env` file, I've set mine as following:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=kpi
    DB_USERNAME=root
    DB_PASSWORD=
    ```
  * We have to create a table this way called `kpi` by using our database manager program ( here I used Xampp and in the brower I typed in the url `localhost`, then opened up my local database and there I've created the table )
  * We run then in the terminal the following 2 commands:
  * `php artisan migrate`
  * `php artisan db:seed`
  * After this is done we have to configure our mailing service in the `.env` file by providing the followings ( you can copy this from your Mailtrap https://mailtrap.io/ ):
    ```
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=your username
    MAIL_PASSWORD=your password
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS="hello@example.com"
    MAIL_FROM_NAME="${APP_NAME}"
    ```
  * After this we can run the local server by typing `php artisan serve` and we should be good to browse our page on http://127.0.0.1:8000/

# Technologies used
  * PHP
  * Laravel
  * Git
  * MySQL
  * HTML
  * CSS
  * Javascript
# Applications used
  * Github
  * GitKraken
  * Terminal
  * VSCode
  * Opera GX
  * Google Chrome
  * Xampp
  * Mailtrap
  * Composer
