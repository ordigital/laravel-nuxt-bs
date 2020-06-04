# laravel-nuxt-bs

This is an upgraded and modified version of [m2sd/nuxt-laravel-starter](https://github.com/m2sd/nuxt-laravel-starter) with BootstrapVue instead of Vuetify and Laravel 7.

**Features:**

- Laravel 7
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
$ php artisan key:generate
```

- Edit `.env` to change APP_NAME and APP_DESC.

- Run developement server:
```bash
$ npm run dev
```
- Build for production:
```bash
$ npm run build
$ php artisan serve
```