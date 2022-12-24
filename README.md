# Coffee Shop

## Coding style and standards 

the coding style is used was line coding and error control , and the standard of using safe , secure and portable codes

## Documentation

before starting to run the project 

## Requirements

- Php V8 or greater
- create your .env file 
- create your database
- Xampp or apache server

## after run these script 

    composer install
    cp .env.example .env or copy .env.example .env
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    php artisan storage:link
