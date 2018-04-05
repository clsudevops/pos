
import VueRouter from 'vue-router';

let routes = [
    {
        path:'/dashboard',
        component: require('../pages/admin/home/dashboard')
    },
    {
        path: '/customers',
        component: require('../pages/admin/home/customers')
    },
    {
        path: '/items',
        component: require('../pages/admin/home/items')
    }
];

export default new VueRouter({
    routes,
    mode:'hash',
    linkExactActiveClass: 'active',
    linkActiveClass: 'active',
});