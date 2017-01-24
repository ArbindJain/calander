
## Installation

This is just local installation using something like MAMP/WAMP or xampp. Of course you are free to use homestead if you like.

1. clone the repo and cd into it
2. `composer install`
3. make sure db is running and credentials are setup in `config\database.php` (or in your `.env` file).
4. If you have no `.env` file you can use the example one. Just rename `.env.example` to `.env`. Enter your db credentials here.
5. `php artisan key:generate`
6. `php artisan migrate`
7. `php artisan db:seed`
8. (Optional) Run `vendor/bin/phpunit` to run some functional tests I have written. Have a look at them in the `tests/functional` folder.
9. `php artisan serve`
10. Visit [localhost:8000](http://localhost:8000) in your browser
