# Laravel REST API

## Endpoints

| URL          | HTTP method | Auth | JSON Response     |
| ------------ | ----------- | ---- | ----------------- |
| /users/login | POST        |      | user's token      |
| /users       | GET         | Y    | all users         |
| /products    | GET         |      | all products      |
| /products    | POST        | Y    | new product added |
| /products    | PATCH       | Y    | edited product    |
| /products    | DELETE      | Y    | id                |

## Steps

1. `composer create-project laravel/laravel laravel-rest-api`
2. `cd laravel-rest-api`
3. `php artisan serve`
4. Edit `.env`, set up mysql database
5. `php artisan install:api`
6. Change User seed && `php artisan db:seed`
7. `php artisan make:controller UsersController`
