import localforage from 'localforage';

// Api's
import travel from '../api/travel';

// Store Object
export default {
    state: {
        isLoggedIn: !!localforage.getItem('token'),
        travel: undefined,
        token: localforage.getItem('token'),
    },
    mutations: {
        login(state, token) {
            console.log(token);

            localforage.setItem('token', token)
        },
        logout(state) {
            localforage.clear()
            console.log(localforage.getItem('token'));

            localforage.removeItem('token').then(function () {
                // Run this code once the key has been removed.
                console.log('Key is cleared!');
            }).catch(function (err) {
                // This code runs if there were any errors
                console.log(err);
            });

            localforage.removeItem('token', () => {
                console.log('dd');
            });

            console.log(localforage.getItem('token'));
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
