<template>
    <div class="modal is-active">
        <div class="modal-background" @click="$emit('close')"></div>
        <slot></slot>
        <button class="modal-close is-large" @click="$emit('close')"></button>
    </div>
</template>

<script>
export default {
}
</script>
