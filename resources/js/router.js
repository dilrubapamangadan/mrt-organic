import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from "./components/admin/Dashboard"
import Category from "./components/admin/Category"
import Products from "./components/admin/Products"
import NotFound from "./components/NotFound"
import Index from "./components/index"

Vue.use(VueRouter);

const routes= [
        { 
            path: '/admin/dashboard', 
            name: 'Home',
            component:  Dashboard
        },
        { 
            path: '/admin/category',
            name: 'Category',
            component: Category 
        },
        { 
            path: '/admin/products', 
            name: 'Products',
            component: Products 
        },
        { 
            path: '/', 
            name: 'Home',
            component: Index 
        },
        { 
            path: '/x', 
            name: 'Home',
            component: Index 
        },
        {
            path: "/:catchAll(.*)",
            name: 'Not Found',
            component: NotFound,
        },
    ];

const router = new VueRouter({
    routes,
    mode: 'history'
});

router.beforeEach((to, from, next) => {
    document.title = `${ process.env.MIX_APP_NAME } - ${ to.name }`
    console.log(to);
    next()
})

export default router;