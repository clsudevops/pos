window.Vue = require('vue');
window.Vuetify = require('vuetify');
window._ = require('lodash');
window.Popper = require('popper.js').default;
import VueRouter from 'vue-router';
import VSelect from 'vue-select';
// import Vuetify from 'vuetify'
// import 'vuetify/dist/vuetify.min.css'

Vue.use(VueRouter);
// Vue.use(Vuetify);
/**
 * Adding Global Components
 */
Vue.component('jumbotron', require('./components/home/jumbotron'));
Vue.component('featured-products', require('./components/home/products'));
Vue.component('contact-us', require('./components/home/contact-us'));
Vue.component('navigation-drawer', require('./components/layouts/navigation-drawer'));

Vue.component('sidebar', require('./components/sidebar.vue'));
Vue.component('info-card',require('./components/admin/dashboard/infocard.vue'));
Vue.component('sales-chart-box', require('./components/admin/dashboard/salesChartBox'));
Vue.component('v-select', VSelect);
/**
 * ADMIN 
 */
Vue.component('dashboard', require('./pages/admin/dashboard.vue'));
Vue.component('customers-data-table', require('./components/admin/customers/customersDataTable.vue'));
Vue.component('customer-form', require('./components/admin/customers/customerForm.vue'));
Vue.component('items-data-table', require('./components/admin/items/itemsDataTable.vue'));
Vue.component('item-form', require('./components/admin/items/itemForm.vue'));
Vue.component('transactions-data-table', require('./components/admin/transactions/transactionsDataTable.vue'));
Vue.component('price-rules-data-table', require('./components/admin/prices/priceRulesDataTable.vue'));
Vue.component('price-form', require('./components/admin/prices/priceForm.vue'));
Vue.component('suppliers-data-table', require('./components/admin/suppliers/suppliersDataTable.vue'));
Vue.component('supplier-form', require('./components/admin/suppliers/suppliersForm.vue'));
Vue.component('sales-data-table', require('./components/admin/sales/salesDataTable.vue'));
Vue.component('sales-form', require('./components/admin/sales/salesForm.vue'));
Vue.component('expenses-data-table', require('./components/admin/expenses/expensesDataTable.vue'));
Vue.component('expense-form', require('./components/admin/expenses/expensesForm.vue'));
Vue.component('employees-data-table', require('./components/admin/employees/employeesDataTable.vue'));
Vue.component('employee-form', require('./components/admin/employees/employeeForm.vue'));
Vue.component('stores-data-table', require('./components/admin/stores/storesDataTable.vue'))
Vue.component('store-form', require('./components/admin/stores/storeForm.vue'));

try {
    window.$ = window.jQuery = require('jquery');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
