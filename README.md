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
    - if you're using node dependency don't forget to add heroku buildpacks : ```add heroku/nodejs```
2. dont forget to composer update in local. **NOT** in the web console of heroku
3. add ```"postinstall" : "npm run prod"``` in ```package.json``` scripts:
    ```
    "scripts":{
        "postinstall" : "npm run prod"
    }
    ```
    npm task named "postinstall" will run during heroku deployments
3. after this step push project to git
4. deploy the branch in heroku
5. set up the db and config vars
1. in config vars add
```NPM_CONFIG_PRODUCTION=false``` will install all dev depedency on package.json script
6. to see example go to 
url : https://medium.com/@just1and0/how-to-setup-database-on-heroku-for-your-laravel-application-6a903c2c75c7 
7. Next go ```composer install``` in the heroku cli
8. migrate the table ```php artisan migrate```
9. if you want to seed the database ```php artisan migrate --seed``` or  just want to seed without migrate ```php artisan db:seed```
    > make sure the seed is for production **NOT** development e.g *faker*
