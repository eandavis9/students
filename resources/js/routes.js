import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router);

let routes = [
    {
        path: '/dashboard',
        name : 'dashboard',
        component: require('./views/Dashboard.vue').default
    },
    {
        path: '/users',
        component: require('./views/Profile.vue').default
    },
    {
        path: '/students',
        name : 'students',
        component: require('./views/Students.vue').default
    }
];

export default new Router({

	mode : 'history', 
	routes
})