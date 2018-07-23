// Api's
import travel from '../api/travel';

// Store Modules
import auth from './modules/auth'

// Store Object
export default {
    state: {
        travel: undefined,
    },
    modules: {
        auth,
    },
    mutations: {
        setTravel(state, travel) {
            state.travel = travel;
        }
    },
    actions: {
        getCurrentTravel() {
            return travel.getCurrentTravel()
                .then(travel => {
                    return travel;
                })
        }
    }
}
