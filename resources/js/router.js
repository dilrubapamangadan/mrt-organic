import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent"
import Home from "./components/admin/Home"

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path: '/dashboard', component:  Home},
        { path: '/category', component: Home },
        { path: '/products', component: Home }
    ],
    mode: 'history'
});