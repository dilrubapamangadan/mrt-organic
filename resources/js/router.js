import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from "./components/admin/Dashboard"
import Category from "./components/admin/Category"
import Products from "./components/admin/Products"

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path: '/dashboard', component:  Dashboard},
        { path: '/category', component: Category },
        { path: '/products', component: Products }
    ],
    mode: 'history'
});