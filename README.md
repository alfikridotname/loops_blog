
# Loops Blog Project
> *For Test Fullstack Web Developer.*

## Getting Started
This application can be installed on local server and online server with these specifications :

#### Server Requirements
1. PHP >= 8.3.0 (and meet [Laravel 9.x server requirements](https://laravel.com/docs/8.x/deployment#server-requirements)),
2. MySQL or MariaDB database,

#### Installation Steps

1. Clone the repo : `https://github.com/alfikridotname/loops_blog`
2. `$ cd loops_blog`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Create new MySQL database for this application
7. Set database credentials on `.env` file
8. `$ php artisan migrate --seed`
9. `$ php artisan serve`
11. Visit `http://localhost:8000` via web browser
12. Done
