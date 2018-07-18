<template>
    <div>
        <section class="hero is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <div class="has-text-right">
                        T'as pas de compte ?
                        <router-link to="/register">
                            Crées en un
                        </router-link>
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <div class="control">
                            <input type="email" class="input" id="email" v-model="email">
                        </div>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <div class="control">
                            <input type="password" class="input" id="password" v-model="password">
                        </div>
                    </div>
                    <div class="field">
                        <button class="button" @click="login">
                            Se connecter
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import auth from '../../api/auth.js'
export default {
    data() {
        return {
            email: undefined,
            password: undefined,
        }
    },
    methods: {
        login() {
            this.auth.login(this.email, this.password)
            .then(response => {
                this.$store.commit('login', response.token);
            })
        }
    }
}
</script>
