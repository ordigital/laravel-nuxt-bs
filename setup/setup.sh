#!/bin/bash

mkdir ./.vscode
cp ./setup/settings.json ./.vscode
npm install
npm audit fix
php artisan key:generate
touch database/database.sqlite

echo "Start `npm run dev` or `npm run build`"

