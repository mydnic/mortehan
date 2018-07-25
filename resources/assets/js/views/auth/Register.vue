<template>
    <div>
        <section class="hero is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <div class="has-text-right">
                        T'as déjà un compte ?
                        <router-link to="/login">
                            Connectes toi
                        </router-link>
                    </div>
                    <div class="field">
                        <label for="name" class="label">Nom</label>
                        <div class="control">
                            <input type="text" class="input" id="name" v-model="name">
                        </div>
                        <p class="help is-danger" v-if="errors.name" v-text="errors.name[0]"></p>
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <div class="control">
                            <input type="email" class="input" id="email" v-model="email">
                        </div>
                        <p class="help is-danger" v-if="errors.email" v-text="errors.email[0]"></p>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Mot de passe</label>
                        <div class="control">
                            <input type="password" class="input" id="password" v-model="password">
                        </div>
                        <p class="help is-danger" v-if="errors.password" v-text="errors.password[0]"></p>
                    </div>
                    <div class="field">
                        <label for="password_confirmation" class="label">Confirmation du mot de passe</label>
                        <div class="control">
                            <input type="password" class="input" id="password_confirmation" v-model="password_confirmation">
                        </div>
                    </div>
                    <div class="field">
                        <button
                            class="button is-primary"
                            @click="register"
                            :class="{'is-loading': isLoading}"
                            :disabled="isLoading"
                        >
                            Crée ton compte
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { mapState } from 'vuex';
import auth from '../../api/auth';

export default {
    computed: mapState(['auth']),
    data() {
        return {
            name: undefined,
            email: undefined,
            password: undefined,
            password_confirmation: undefined,
            errors: [],
            isLoading: false,
        }
    },
    created () {
        if (this.auth.isLoggedIn) {
            this.$router.push({ name: 'home' });
        }
    },
    methods: {
        register() {
            this.isLoading = true;
            this.errors = [];

            auth.register({
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation,
            })
                .then(response => {
                    this.isLoading = false;

                    this.$store.dispatch('login', response.data.api_token).then(() => {
                        this.$router.push({ name: 'home' });
                        flash('T\'as réussi a créé ton compte, t\'es un bon toi !', 'success')
                    })
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
