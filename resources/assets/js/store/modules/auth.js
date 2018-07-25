export default {
    state: {
        isLoggedIn: !!localStorage.getItem('token'),
        token: localStorage.getItem('token'),
    },
    mutations: {
        login(state, token) {
            state.isLoggedIn = true;
            state.token = token;
            localStorage.setItem('token', token);
        },
        logout(state) {
            localStorage.removeItem('token');
            state.isLoggedIn = false;
            state.token = undefined;
        },
    },
    actions: {
        login({ commit }, token) {
            return commit('login', token);
        }
    },
}
