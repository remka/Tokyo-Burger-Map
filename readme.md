# Tokyo Burger Map WIP site

This is both an exercise and way to (re)build the Tokyo Burger Map website based on the PHP framework, Laravel.

## To install this

* Clone the repository `git clone https://github.com/remka/Tokyo-Burger-Map.git`
* Create and .env file with your own local settings
* cd to the folder, and run `composer update` from the console. It should install dependencies.
* Create the migrations with `php artisan migrate`
* Seed the database with the default values. `php artisan db:seed` gives me an error, so I manually seed each of them by hand for now.
ie. `php artisan db:seed --class=PermissionTableSeeder` etc.
