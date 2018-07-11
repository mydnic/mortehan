<template>
    <div>
        <section class="hero is-fullheight">
            <div class="hero-body">
                <div class="container">
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
                        <label for="password_confirmation" class="label">Password Confirmation</label>
                        <div class="control">
                            <input type="password" class="input" id="password_confirmation" v-model="passwordConfirmation">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: undefined,
            password: undefined,
            passwordConfirmation: undefined,
        }
    }
}
</script>
