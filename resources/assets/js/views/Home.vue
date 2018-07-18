<template>
    <div>
        <section class="hero is-fullheight">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Hello Bro
                    </h1>
                    <router-link to="/login" class="button is-large">
                        Connexion
                    </router-link>
                    <router-link to="/register" class="button is-large">
                        Créer un compte
                    </router-link>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import { mapState } from 'vuex';

export default {
    computed: mapState(['isLoggedIn']),
    mounted() {
        if (!this.isLoggedIn) {
            this.$router.push({ name: 'login' });
        }
    }
}
</script>
