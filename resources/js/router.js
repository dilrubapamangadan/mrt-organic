import Vue from 'vue';
import VueRouter from 'vue-router';
import ExampleComponent from "./components/ExampleComponent"
import Home from "./components/admin/Home"

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path: '/', component: ExampleComponent },
        { path: '/test', component: Home }
    ],
    mode: 'history'
});