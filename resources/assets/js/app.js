require('./bootstrap');

import store from './store/store';
import * as easings from 'vuetify/es5/util/easing-patterns'

const app = new Vue({
    el: '#app',
    store,
    data: {
        active_hash: null,
    },
    methods: {
        scrollTo(hash, event) {
            var options = {
                duration: 1000,
                offset: 5,
                easing: 'easeInOutCubic',
                easings: Object.keys(easings)
            }

            this.$vuetify.goTo(hash, options);
        },
        openFile(element) {
            document.getElementById(element).click();
        },
        setInputFile(element) {
            document.getElementById('inputFile').value = document.getElementById(element).files[0].name
        }
    },
    created() {
        if(typeof window.location.hash != 'undefined'){
            this.active_hash = window.location.hash;
        }
        $(document).ready(function () { $('body').bootstrapMaterialDesign(); });
    }
});
