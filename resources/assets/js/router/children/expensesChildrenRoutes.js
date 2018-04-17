export default [
    {
        path: '',
        component: require('../../components/admin/expenses/expensesDataTable')
    },
    {
        path: 'create',
        component: require('../../components/admin/expenses/expensesForm')
    },
    {
        path: 'edit',
        component: require('../../components/admin/expenses/expensesForm')
    }
];