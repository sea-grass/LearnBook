# LearnBook

A social networking app created with Laravel. Its purpose is to enable us to learn more about the PHP MVC framework.

The team will be adding in some useful links that they used to become familiar with Laravel and GIT.

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


