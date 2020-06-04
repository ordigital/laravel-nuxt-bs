# Laravel 7 + NuxtJS + BootstrapVue Starter pack

This is an upgraded and modified version of [m2sd/nuxt-laravel-starter](https://github.com/m2sd/nuxt-laravel-starter) with BootstrapVue instead of Vuetify and Laravel 7 with Sanctum SPA Auth.

**Features:**

- Laravel 7
- Sanctum SPA Auth
- public_html as public dir
- NuxtJS (pallares/laravel-nuxt)
- BootstrapVue
- DotEnv
- ESLint + VSCode support
- Jest

## Installation

- Clone and setup: 

```bash
$ git clone https://github.com/ordigital/laravel-nuxt-bs.git your-project
$ cd your-project
$ npm install
$ npm audit fix
$ composer install
$ php artisan key:generate
$ touch database/database.sqlite
$ php artisan migrate:fresh --seed
```
- Edit `.env` and change:
```bash
APP_NAME="Name of your app"
APP_DESC="Description of your app"
APP_URL=http://localhost:8000 # axios baseURL for production
DEV_URL=http://localhost:3000 # axios baseURL for development
```
- You can edit NuxtJS config in `nuxt.config.js` and NuxtJS project in `resources/nuxt`
- Run developement server:
```bash
$ npm run dev
```
- Open website and try to sign in as `alf@melmack.mm` using password `lucky`
- To build for production:
```bash
$ npm run build
$ php artisan serve
```
