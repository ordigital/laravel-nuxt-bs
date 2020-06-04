<template>
  <div>
    <b-container>
      <b-row class="w-100">
        <b-col cols="6" class="mx-auto my-5">
          <b-card header="Login">
            <div v-if="!user">
              <b-form-group label="Email address:" label-for="login">
                <b-form-input
                  id="login"
                  v-model="form.email"
                  type="email"
                  required
                ></b-form-input>
              </b-form-group>

              <b-form-group label="Password:" label-for="password">
                <b-form-input
                  id="password"
                  v-model="form.password"
                  type="password"
                  required
                ></b-form-input>
              </b-form-group>

              <b-button
                variant="primary"
                class="mx-auto d-block px-3"
                @click="login()"
              >
                Login
              </b-button>
            </div>
            <div v-else>
              <h2 class="text-center text-success">User logged in.</h2>
              <hr />
              <b-row>
                <b-col>e-mail:</b-col><b-col>{{ user.email }}</b-col>
              </b-row>
              <b-row>
                <b-col>name:</b-col><b-col>{{ user.name }}</b-col>
              </b-row>
              <hr />
              <b-button
                variant="primary"
                class="mx-auto d-block px-3"
                @click="logout()"
              >
                Logout
              </b-button>
            </div>
          </b-card>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {
  name: 'Login',
  data() {
    return {
      form: {
        email: null,
        password: null
      }
    }
  },

  computed: {
    user() {
      return this.$auth.user
    }
  },

  methods: {
    login() {
      this.$axios
        .get('/sanctum/csrf-cookie', {
          headers: { 'X-Requested-With': 'XMLHttpRequest' },
          withCredentials: true
        })
        .then(
          function() {
            this.$auth.loginWith('local', {
              data: {
                email: this.form.email,
                password: this.form.password
              }
            })
          }.bind(this)
        )
    },

    logout() {
      this.$auth.logout()
    }
  }
}
</script>
