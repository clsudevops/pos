export default [
    {
        path:'',
        component: require('../../components/admin/suppliers/suppliersDataTable')
    },
    {
        path:'create',
        component: require('../../components/admin/suppliers/suppliersForm'),
        // meta: {
        //     forAuthUsers: true,
        //     forAdmin: true
        // },
    },
    {
        path: 'edit/:supplierId',
        component: require('../../components/admin/suppliers/suppliersForm'),
        // meta: {
        //     forAuthUsers: true,
        //     forAdmin: true
        // },
    }
];