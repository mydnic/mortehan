<template>
    <div class="image-input">
        <input type="file" @change="updatePreview" :name="name">
        <div :style="'background-image: url(' + previewImage + ')'">
            <font-awesome-icon icon="camera" size="2x" />
        </div>
    </div>
</template>

<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

export default {
    props: ['imageSrc', 'name'],
    data() {
        return {
            previewImage: undefined,
        }
    },
    mounted() {
        this.previewImage = this.imageSrc;
    },
    methods: {
        updatePreview(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = (e) => {
                    this.previewImage = e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    },
    components: {
        FontAwesomeIcon,
    }
}
</script>

<style scoped lang="scss">
.image-input {
    position: relative;
    overflow: hidden;
    color: #7f7f7f;
    display: -webkit-inline-box;
    border: none;
    background-color: transparent;
    border-radius: 111px;
    padding: 0px;
    width: 150px;
    height: 150px;
    &:hover {
        background-color: #E7E7E7;
        svg {
            display: block;
        }
     }
    div {
        position: absolute;
        background-position: center;
        background-repeat: no-repeat;
        right: 0;
        top: 0;
        bottom: 0;
        background-size: cover;
        left: 0;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        svg {
            display: none;
        }
    }
    img {
        max-width: 100%;
        min-width: 50%;
    }
    input[type=file] {
        position: absolute;
        top: 0;
        z-index: 2;
        bottom: 0;
        right: 0;
        left: 0;
        margin: 0;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
        width: 100%;
    }
}
</style>
