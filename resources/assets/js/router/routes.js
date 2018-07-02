
import VueRouter from 'vue-router';
import supplierChildrenRoutes from './children/supplierChildrenRoutes';
import employeeChildrenRoutes from './children/employeeChildrenRoutes';
import expensesChildrenRoutes from './children/expensesChildrenRoutes';

let routes = [
    {
        path:'/dashboard',
        component: require('../pages/admin/dashboard')
    },
    {
        path: '/customers',
        component: require('../pages/admin/customers')
    },
    {
        path: '/items',
        component: require('../pages/admin/items')
    },
    {
        path: '/transactions',
        component: require('../pages/admin/transactions')
    },
    {
        path: '/price-rules',
        component: require('../pages/admin/priceRules')
    },
    {
        path: '/suppliers',
        component: require('../pages/admin/suppliers'),
        children: supplierChildrenRoutes
    },
    {
        path: '/employees',
        component: require('../pages/admin/employees'),
        children: employeeChildrenRoutes
    },
    {
        path: '/expenses',
        component: require('../pages/admin/expenses'),
        children: expensesChildrenRoutes
    }
];

export default new VueRouter({
    routes,
    mode:'history',
    linkExactActiveClass: 'active',
    linkActiveClass: 'active',
});