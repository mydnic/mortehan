// Api's
import travel from '../api/travel';

// Store Object
export default {
    state: {
        isLoggedIn: !!localStorage.getItem('token'),
        travel: undefined,
    },
    mutations: {
        login(state, user) {
            state.isLoggedIn = true;
        },
        logout(state) {
            state.isLoggedIn = false;
        },
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
