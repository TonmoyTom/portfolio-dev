Laravel 7 Application with Porfolio

  *Make sure you already have xampp installed (easy to use).

 *Clone this repository to your local machine or just download the zip from the above green button.

 *Install Composer first, then run this command in your command-line (you should be inside your project directory).

            composer install

Rename .env.example to .env and add your database.

            cp .env.example .env

Generate application key.

            php artisan key:generate

Create tables.

            php artisan migrate

Start the development server.

            php artisan serve
Usage

Flash Messages: use status key for success messages and error key for error messages.

