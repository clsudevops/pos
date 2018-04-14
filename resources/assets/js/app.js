require('./bootstrap');

import store from './store/store';
import router from './router/routes'; 

const app = new Vue({
    el: '#app',
    store,
    router:router,
    data: {
        active_hash: null,
    },
    methods: {
        scrollTo(hash, event) {
            var pos = $(hash).offset().top - 5; 
            var anchor = hash.split('#');

            $('html, body').animate({ scrollTop: pos }, 1000, function () { 
                window.location.hash = hash 
            }) 
            
            this.active_hash = hash;
        },
        
    },
    created() {
        if(typeof window.location.hash != 'undefined'){
            this.active_hash = window.location.hash;
        }
        $(document).ready(function () { $('body').bootstrapMaterialDesign(); });

        console.log(this.$route)
    }
});
