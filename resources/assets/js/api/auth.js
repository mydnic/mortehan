export default {
    login(email, password) {
        return axios.post('/login', { email, password });
    }
}
