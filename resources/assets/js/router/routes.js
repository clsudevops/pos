
import VueRouter from 'vue-router';
import supplierChildrenRoutes from './children/supplierChildrenRoutes';
import employeeChildrenRoutes from './children/employeeChildrenRoutes';

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
    },
    {
        path: '/transactions',
        component: require('../pages/admin/home/transactions')
    },
    {
        path: '/price-rules',
        component: require('../pages/admin/home/priceRules')
    },
    {
        path: '/suppliers',
        component: require('../pages/admin/home/suppliers'),
        children: supplierChildrenRoutes
    },
    {
        path: '/employees',
        component: require('../pages/admin/home/employees'),
        children: employeeChildrenRoutes
    }
];

export default new VueRouter({
    routes,
    mode:'hash',
    linkExactActiveClass: 'active',
    linkActiveClass: 'active',
});