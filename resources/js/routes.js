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
        path: '/profile',
        component: require('./views/Profile.vue').default
    },
    {
        path: '/students',
        name : 'students',
        component: require('./views/Students.vue').default
    },
    {
        path: '/students/:student',
        name : 'edit_student',
        props : true,
        component: require('./components/students/Edit.vue').default
    },
    {

        path : '/grades',
        name : 'grades',
        component : require('./views/Grades.vue').default
    }
];

export default new Router({

	mode : 'history', 
	routes
})