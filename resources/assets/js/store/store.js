import Vue from 'vue';
import Vuex from 'vuex';
import StylesModule from './modules/styles/index';
import CustomersModule from './modules/customer/index'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        StylesModule,
        CustomersModule
    }
});