export default {
    state: {
        isLoggedIn: !!localStorage.getItem('token'),
        token: localStorage.getItem('token'),
    },
    mutations: {
        login(state, token) {
            console.log(token);

            localStorage.setItem('token', token)
        },
        logout(state) {

            localStorage.removeItem('token');

            console.log(localStorage.getItem('token'));
        },
    },
}
