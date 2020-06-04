#!/bin/bash
npm install && npm audit fix
composer install
php artisan key:generate
touch database/database.sqlite
php artisan migrate:fresh --seed
