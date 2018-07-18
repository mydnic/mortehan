export default {
    login(email, password) {
        return axios.post('/login', { email, password });
    },
    register(data) {
        return axios.post('/register', data);
    }
}
