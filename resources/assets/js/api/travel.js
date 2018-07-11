export default {
    getCurrentTravel() {
        return window.axios.get('/api/travel/current');
    }
}
