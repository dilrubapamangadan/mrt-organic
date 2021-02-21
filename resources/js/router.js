import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from "./components/admin/Dashboard"
import Category from "./components/admin/Category"
import Products from "./components/admin/Products"
import NotFound from "./components/NotFound"
import Index from "./components/index"

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path: '/admin/dashboard', component:  Dashboard},
        { path: '/admin/category', component: Category },
        { path: '/admin/products', component: Products },
        { path: '/', component: Index },
        {
            path: "/:catchAll(.*)",
            component: NotFound,
        },
    ],
    mode: 'history'
});