import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from "./components/admin/Dashboard"
import Category from "./components/admin/Category"
import CategoryForm from "./components/admin/CategoryForm"
import Products from "./components/admin/Products"
import ProductsForm from "./components/admin/ProductsForm"
import NotFound from "./components/NotFound"
import Index from "./components/index"

Vue.use(VueRouter);

const routes= [
        { 
            path: '/admin/dashboard', 
            name: 'Dashboard',
            component:  Dashboard
        },
        { 
            path: '/admin/category',
            name: 'Category',
            component: Category 
        },
        { 
            path: '/admin/product/add', 
            name: 'Products Add',
            component: ProductsForm 
        },
        { 
            path: '/admin/product/:id', 
            name: 'Products Edit',
            component: ProductsForm 
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
            path: '/category/add', 
            name: 'Category Add',
            component: CategoryForm 
        },
        { 
            path: '/admin/category/:id', 
            name: 'Category Edit',
            component: CategoryForm 
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
    next()
})

export default router;