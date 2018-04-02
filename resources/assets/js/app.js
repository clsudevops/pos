
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
        active_hash: null
    },
    methods: {
        scrollTo(hash, event) {
            var pos = $(hash).offset().top - 5; 
            var anchor = hash.split('#');

            $('html, body').animate({ scrollTop: pos }, 1000, function () { 
                window.location.hash = hash 
            }) 
            
            this.active_hash = hash;
            // console.log($('ul.navbar-nav li a[href="' + anchor[1] + '"]').addClass('active'));
        }
    },
    created() {
        if(typeof window.location.hash != 'undefined'){
            this.active_hash = window.location.hash;
        }
        
    }
});
