<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <router-link to="/" class="navbar-item">
                <img src="/img/icon.jpg" alt="Mortehan" height="28">
            </router-link>
        </div>
        <div class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">
                        <i class="fas fa-user"></i>
                    </a>

                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="">
                            Test
                        </a>
                        <hr class="dropdown-divider">
                        <a class="navbar-item" @click="logout">
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    methods: {
        logout() {
            this.$store.commit('logout');
        }
    }
}
</script>
