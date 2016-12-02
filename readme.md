# sample-fb-login

**Note: I am using valet as the dev server.**

## Initialization
* Copy `.env.example` and rename it to `.env`. Make sure to reassign some of the variables to their values on your system.
* Create a `sample_fb_login` mysql database.
* Run `composer install && npm install && bower_install && gulp && gulp elements`.
* Run `php artisan migrate` to initialize the database.
