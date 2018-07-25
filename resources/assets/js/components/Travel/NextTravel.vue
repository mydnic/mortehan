<template>
    <div>
        <div v-if="travel === null" class="box has-text-centered">
            Le prochain mortehan n'a pas encore été plannifié, reviens plus tard !
            <a @click="checkTravel">
                Re-vérifier
            </a>
        </div>
        <div v-else class="box">
            <div class="columns">
                <strong>
                    du {{ travel.start | moment }} au {{ travel.end | moment }}
                </strong>
            </div>
        </div>
    </div>
</template>

<script>
import { mapState } from 'vuex';
import moment from 'moment'

export default {
    computed: mapState(['travel']),
    methods: {
        checkTravel() {
            this.$store.dispatch('getCurrentTravel');
        }
    },
    filters: {
        moment: function (date) {
            return moment(date).format('D/MM');
        }
    }
}
</script>
