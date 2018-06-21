import Vue from 'vue';
import Vuex from 'vuex';
import StylesModule from './modules/styles/index';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        StylesModule
    }
});