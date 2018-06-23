import Vue from 'vue';
import Vuex from 'vuex';
import StylesModule from './modules/styles/index';
import CustomersModule from './modules/customer/index'
import ProductsModule from './modules/product/index'
import EmployeesModule from './modules/employee/index'
import ExpensesModule from './modules/expense/index'
import PriceRulesModule from './modules/price-rules/index'
import SalesModule from './modules/sales/index'
import SuppliersModule from './modules/supplier/index'
import TransactionsModule from './modules/transaction/index'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        StylesModule,
        CustomersModule,
        ProductsModule, 
        EmployeesModule, 
        ExpensesModule, 
        PriceRulesModule, 
        SalesModule, 
        SuppliersModule, 
        TransactionsModule
    }
});