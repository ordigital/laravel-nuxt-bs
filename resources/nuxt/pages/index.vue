<template>
  <div class="container">
    <div>
      <Logo />
      <h1 class="title">Laravel-nuxt-bs</h1>
      <h2 class="subtitle">
        Laravel 7 + Nuxt + Bootstrap-vue
      </h2>
      <b-button variant="primary" class="text-white" to="/login" nuxt>
        <span v-if="$auth.user">Welcome {{ $auth.user.name }}!</span>
        <span v-else>Click to sign in!</span>
      </b-button>
    </div>
  </div>
</template>

<script>
import Logo from '~/components/Logo.vue'

export default {
  components: { Logo }
}
</script>

<style>
.container {
  margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.title {
  font-family: 'Quicksand', 'Source Sans Pro', -apple-system, BlinkMacSystemFont,
    'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  display: block;
  font-weight: 300;
  font-size: 100px;
  color: #35495e;
  letter-spacing: 1px;
}

.subtitle {
  font-weight: 300;
  font-size: 42px;
  color: #526488;
  word-spacing: 5px;
  padding-bottom: 15px;
}

.links {
  padding-top: 15px;
}
</style>
