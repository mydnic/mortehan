export default {
    getCurrentTravel() {
        return axios.get('/api/travel/current');
    }
}
