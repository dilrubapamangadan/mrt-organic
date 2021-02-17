import Vue from 'vue';
import router from './router';
import App from './components/App';
import Vuetify from '../plugins/vuetify'
import { Form, HasError, AlertError } from 'vform'

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

require('./bootstrap');

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router,
    vuetify:Vuetify
});
