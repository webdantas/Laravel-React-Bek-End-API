# Backend Serve Configuration

Clone this repo and `cd` into it directory.

### You need to setup all your environment

    cp .env.example .env (make your confs)
    run the script database import
    composer update && composer install
    php artisan key:generate
    php artisan migrate
    php artisan serve
