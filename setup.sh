#!/bin/bash

mkdir -p ./.vscode
cp ./setup/settings.json ./.vscode
cp ./setup/.env ./
npm install
npm audit fix
php artisan key:generate
touch database/database.sqlite

echo "Start by 'npm run dev' or 'npm run build'"

