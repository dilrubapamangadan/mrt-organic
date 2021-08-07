import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from "./components/admin/Dashboard"
import Category from "./components/admin/Category"
import CategoryForm from "./components/admin/CategoryForm"
import Products from "./components/admin/Products"
import Enquiry from "./components/admin/Enquiry"
import ProductsForm from "./components/admin/ProductsForm"
import NotFound from "./components/NotFound"
import Index from "./components/index"
import Contact from "./components/contact"
import About from "./components/about"
import ProductList from "./components/productList"
import CategoryList from "./components/categoryList"
import ProductDetails from "./components/productDetails"

Vue.use(VueRouter);

const routes= [
        { 
            path: '/admin/dashboard', 
            name: 'Dashboard',
            component:  Dashboard
        },
        { 
            path: '/admin/enquiry', 
            name: 'Enquiry',
            component: Enquiry 
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
            name: 'Manage Products',
            component: Products 
        },
        { 
            path: '/', 
            name: 'Home',
            component: Index 
        },
        { 
            path: '/contact', 
            name: 'Contact',
            component: Contact 
        },
        { 
            path: '/products/:slug', 
            name: 'Products',
            component: ProductList 
        },
        { 
            path: '/product/:slug', 
            name: 'Product',
            component: ProductDetails 
        },
        { 
            path: '/categories/:slug',
            name: 'Categories',
            component: CategoryList 
        },
        { 
            path: '/about', 
            name: 'About',
            component: About 
        },
        { 
            path: '/admin/category/add', 
            name: 'Category Add',
            component: CategoryForm 
        },
        {  
            path: '/admin/category/edit/:id', 
            name: 'Category Edit',
            component: CategoryForm 
        },
        {
            path: "/:catchAll(.*)",
            name: 'Not Found',
            component: NotFound,
        }
    ];

const router = new VueRouter({
    routes,
    mode: 'history',
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
          return savedPosition
        } else {
          return { x: 0, y: 0 }
        }
      }
});

router.beforeEach((to, from, next) => {
    if(to.name == 'Products' || to.name == 'Product'){
        var name = to.params.tag;
        // name = name.replace(/-/g, " ").toUpperCase();
        document.title = name;
    }else{
        document.title = `${ process.env.MIX_APP_NAME } - ${ to.name }`
    }
    next()
})

export default router;