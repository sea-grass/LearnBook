# LearnBook

A social networking app created with Laravel. Its purpose is to enable us to learn more about the PHP MVC framework.

The team will be adding in some useful links that they used to become familiar with Laravel and GIT.

## IMPORTANT ##
https://github.com/laravel/laravel/blob/master/.gitignore for the main gitignore file

# 1. Getting GIT to ignore specific files:
    http://git-scm.com/docs/gitignore

# 2. Creating a database for Eloquent:
    CREATE DATABASE `LearnBook` DEFAULT CHARACTER SET='utf8' DEFAULT COLLATE='utf8_unicode_ci';

    After the DB is created, enter the correct information in database.php

# 3. It is time to make a users table for authentication:
    http://laravelbook.com/laravel-migrations-managing-databases/
    http://laravel.com/docs/schema

    The command to create a basic users table is:
        php artisan migrate:make create_users_table --table users --create

    Once the migration is created (see the one for creating users), enter:
        php artisan migrate to migrate the new table into the DB

# 4. Time to seed the newly added table with some data:
    php artisan db:seed after creating a new seed within database/seeds
    called UserTableSeeder.php

# 5. Downloaded Twitter Bootstrap using composer update command after updating composer.json