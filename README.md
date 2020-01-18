## DEPLOYMENT GUIDE HEROKU
> this guide is using git as deployment method

env cannot be uploaded so use reveal key in setting 

1. see laravel server requirement for this
    - for this project I added ext-gd and ext-mbstring for deployment. looked like this
        ```
        "require": {
            "php": "^7.2",
            "fideloper/proxy": "^4.0",
            "laravel/framework": "^6.2",
            "laravel/tinker": "^2.0",
            "ext-gd" : "*",
            "ext-mbstring" : "*"
        }
        ```
2. dont forget to composer update in local. **NOT** in the web console of heroku
3. after this step push project to git
4. deploy the branch in heroku
5. set up the db and config vars
6. to see example go to 
url : https://medium.com/@just1and0/how-to-setup-database-on-heroku-for-your-laravel-application-6a903c2c75c7 
7. Next go ```composer install``` in the heroku cli
8. migrate the table ```php artisan migrate```
9. if you want to seed the database ```php artisan migrate --seed``` or  just want to seed without migrate ```php artisan db:seed```
    > make sure the seed is for production **NOT** development e.g *faker*

