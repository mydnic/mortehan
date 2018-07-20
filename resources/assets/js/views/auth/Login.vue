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
                        <p class="help is-danger" v-if="errors.email" v-text="errors.email[0]"></p>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <div class="control">
                            <input type="password" class="input" id="password" v-model="password">
                        </div>
                    </div>
                    <div class="field">
                        <button
                            class="button is-primary"
                            @click="login"
                            :class="{'is-loading': isLoading}"
                            :disabled="isLoading"
                        >
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
            errors: [],
            isLoading: false,
        }
    },
    methods: {
        login() {
            this.isLoading = true;
            auth.login({
                email: this.email,
                password: this.password
            })
                .then(response => {
                    this.isLoading = false;
                    flash('Success coucuou', 'success');
                    this.$store.commit('login', response.token);
                })
                .catch(error => {
                    this.isLoading = false;
                    this.errors = error.response.data.errors;
                    flash(error.response.data.message, 'danger');
                })
        }
    }
}
</script>
