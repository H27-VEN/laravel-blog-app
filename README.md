This is blog application made using laravel.

# Installation

To install this on your machine just clone the repository

`git clone https://github.com/H27-VEN/laravel-blog-app.git `

Add the repository to the web server, Apache is what I have used and recommend the same 

put this repo inside the *document root* which is usually htdocs

Now open the app directory in your favourite IDE and configure `.env` file with database you want to use

after configuring .env file just run the following commands

CD into the root directory

`> cd laravel-blog-app`

Let composer install all the necessary dependencies

`laravel-blog-app> composer install`

After composer is done installing dependencies Run php artisan to set up database tables.

`laravel-blog-app> php artisan migrate`

and then finally run

`laravel-blog-app> php artisan app:install`

to complete the installation.

happy hacking









