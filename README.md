****[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/NffXZCaO)
# Todo-laravel

TODO: Write a project description
# Installation
This installation is meant to happen after cloning this repository using PhpStorm IDE, but as long as the terminal being used is Ubuntu, it should work properly:
- sudo apt install composer
- cd Expenses
- composer install
- You will have to modify the .env file to match your database configuration:
  - You can create a copy of the file [.env.example](./Expenses/.env.example) at [Expenses](./Expenses) and rename it to ".env".
- php artisan key:generate
- php artisan migrate para crear la base de datos
---
- any problems? sudo apt-get install php-xml
- php artisan serve
- php artisan serve
- any problems? sudo apt-get install php-sqlite3
- php artisan serve
- any problems? php artisan migrate
- php artisan serve
- Should be working already but any problem:
  - composer require laravel/breeze --dev
  - php artisan breeze:install blade
- npm run dev
- It should totally be working but any problem:
  - php artisan make:model -mrc Gasto
