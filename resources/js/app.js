import Vue from 'vue';
import router from './router';
import App from './components/App';
import Vuetify from '../plugins/vuetify'

require('./bootstrap');

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router,
    vuetify:Vuetify
});
