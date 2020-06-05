require('dotenv').config()
const development = process.env.NODE_ENV !== 'production'

export default {
  srcDir: 'resources/nuxt',
  mode: 'spa',

  head: {
    titleTemplate: '%s - ' + process.env.APP_NAME,
    title: process.env.APP_NAME || '',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      {
        hid: 'description',
        name: 'description',
        content: process.env.APP_DESC || ''
      }
    ],
    link: [{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }]
  },

  loading: { color: '#fff' },
  css: [],
  plugins: [],
  modules: ['nuxt-laravel', '@nuxtjs/axios', '@nuxtjs/auth'],
  buildModules: [
    '@nuxtjs/dotenv',
    '@nuxtjs/eslint-module',
    'bootstrap-vue/nuxt'
  ],

  laravel: { publicDir: 'public_html' },
  bootstrapVue: { icons: true },
  router: { base: '/' },
  axios: { baseURL: development ? process.env.DEV_URL : undefined },
  build: { extend(config, ctx) {} },

  auth: {
    strategies: {
      local: {
        endpoints: {
          login: {
            url: '/api/login',
            method: 'post',
            withCredentials: true,
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Content-Type': 'application/json'
            }
          },
          logout: {
            url: '/api/logout',
            method: 'get',
            withCredentials: true,
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Content-Type': 'application/json'
            }
          },
          user: {
            url: '/api/user',
            method: 'get',
            propertyName: false,
            withCredentials: true,
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Content-Type': 'application/json'
            }
          }
        },
        tokenRequired: false,
        tokenType: false
      }
    }
  }
}
