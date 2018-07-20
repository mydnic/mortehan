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
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <div class="control">
                            <input type="email" class="input" id="email" v-model="email">
                        </div>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Mot de passe</label>
                        <div class="control">
                            <input type="password" class="input" id="password" v-model="password">
                        </div>
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
import auth from '../../api/auth';

export default {
    data() {
        return {
            name: undefined,
            email: undefined,
            password: undefined,
            password_confirmation: undefined,
            isLoading: false,
        }
    },
    methods: {
        register() {
            this.isLoading = true;
            auth.register(this.$data)
                .then(response => {
                    this.isLoading = false;
                    console.log(response.data);

                    this.$store.commit('login', response.data);
                    this.$router.push({ name: 'home' });
                    flash('T\'as réussi a créé ton compte, t\'es un bon toi !', 'success')
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
