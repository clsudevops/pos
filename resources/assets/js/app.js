require('./bootstrap');

import store from './store/store';
import * as easings from 'vuetify/es5/util/easing-patterns'
import { mapGetters } from 'vuex';

const app = new Vue({
    el: '#app',
    store,
    data: {
        active_hash: null,
        remember: false,
        windowWidth: document.documentElement.clientWidth
    },
    computed: {
        ...mapGetters({
            sidenavIsVisible: 'StylesModule/getSidenavState'
        })
    },
    methods: {
        toggleNavDrawer() {
            if(this.sidenavIsVisible) {
                this.$store.commit('StylesModule/setSidenavState', false);
                document.getElementsByClassName('main-content')[0].style.marginLeft = 0;
            }
            else{
                this.$store.commit('StylesModule/setSidenavState', true)
                if(this.windowWidth > 768) {
                    document.getElementsByClassName('main-content')[0].style.marginLeft = '21.5rem';
                }
            }
        },
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
        },
        logout() {
            document.getElementById('logout-form').submit();
        },
        handleResize(event) {
            this.windowWidth = document.documentElement.clientWidth;
            if(this.windowWidth <= 768) {
                document.getElementsByClassName('main-content')[0].style.marginLeft = 0;
                if (this.sidenavIsVisible) {
                    this.$store.commit('StylesModule/setSidenavState', true);
                }
                else{
                    this.$store.commit('StylesModule/setSidenavState', false)
                }
            }
            else{
                if(this.sidenavIsVisible){
                    document.getElementsByClassName('main-content')[0].style.marginLeft = '21.5rem';
                }
                else{
                    document.getElementsByClassName('main-content')[0].style.marginLeft = 0;
                }
                // if (!this.sidenavIsVisible) {
                //     this.$store.commit('StylesModule/setSidenavState', true);
                // }
                // document.getElementsByClassName('main-content')[0].style.marginLeft = '21.5rem';
                // this.$store.commit('StylesModule/setSidenavState', true)
            }
        }
    },
    mounted () {
        window.addEventListener('resize', this.handleResize)
    }
});
