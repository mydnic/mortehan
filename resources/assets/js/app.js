require('./bootstrap');

// Vue Router
import VueRouter from 'vue-router';
Vue.use(VueRouter);
import router from './routes';

// Global Components
Vue.component('notification', require('./components/Notification.vue'));
Vue.component('modal', require('./components/Modal.vue'));
Vue.component('check-animation', require('./components/CheckAnimation.vue'));

// App Instance
const app = new Vue({
    el: '#app',
    router: new VueRouter(router)
});
