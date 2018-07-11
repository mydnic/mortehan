export default {
    getCurrentTravel() {
        return window.axios.get('/api/travel/current')
            .then(response => {
                return response.data;
            })
            .catch(e => {
                flash(e, 'danger');
            });
    }
}
