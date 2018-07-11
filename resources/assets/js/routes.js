let routes = [
    // Home
    { path: '/', name: 'home', component: require('./views/Home') },
    { path: '/register', component: require('./views/auth/Register') },
    { path: '/login', component: require('./views/auth/Login') },

    // 404
    { path: '*', redirect: { name: 'home' } },
]

export default {
    routes,
    mode: 'history',
    linkActiveClass: 'is-active',
}
