import Vue from 'vue';
import router from './router';
import App from './components/App';
import Admin from './components/Admin';
import Vuetify from '../plugins/vuetify'
import { Form, HasError, AlertError } from 'vform'
import VueProgressBar from 'vue-progressbar'
import Swal from 'sweetalert2'
import 'animate.css'
import AOS from 'aos';
import 'aos/dist/aos.css';

//scroll
import VueSmoothScroll from 'vue2-smooth-scroll'
Vue.use(VueSmoothScroll,{
    duration: 200,
  updateHistory: false,
})

//form
window.Form = Form;
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

require('./bootstrap');

//filter
Vue.filter('upText', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1)
});

//progress bar
const options = {
    color: '#7dab4a',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
      speed: '0.2s',
      opacity: '0.6s',
      termination: 300
    },
    autoRevert: true,
    location: 'left',
    inverse: false
}
  
Vue.use(VueProgressBar, options);

//sweetalert
window.swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: 'top-start',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
window.toast = Toast;

window.Fire = new Vue();

const app = new Vue({
    created(){
        AOS.init()
    },
    el: '#app',
    components: {
        App,
        Admin
    },
    router,
    vuetify:Vuetify
});
