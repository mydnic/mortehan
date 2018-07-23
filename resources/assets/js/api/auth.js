export default {
    login(data) {
        return axios.post('/api/login', data);
    },
    register(data) {
        return axios.post('/register', data);
    }
}
