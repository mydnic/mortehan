<template>
    <div>
        <app-nav></app-nav>
        <section class="section">
            <div class="container">
                <h1 class="title has-text-centered is-3">Confrérie Dictatoriale de Mortehan</h1>
                <next-travel></next-travel>
            </div>
        </section>
    </div>
</template>

<script>
import { mapState } from 'vuex';

export default {
    computed: mapState(['auth']),
    mounted() {
        if (!this.auth.isLoggedIn) {
            this.$router.push({ name: 'login' });
        }
    },
    components: {
        'next-travel': require('../components/Travel/NextTravel.vue')
    }
}
</script>
