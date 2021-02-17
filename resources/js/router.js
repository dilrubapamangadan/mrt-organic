import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent"
import Home from "./components/admin/Home"
import Category from "./components/admin/Category"

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path: '/dashboard', component:  Home},
        { path: '/category', component: Category },
        { path: '/products', component: Home }
    ],
    mode: 'history'
});