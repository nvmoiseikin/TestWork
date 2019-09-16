import Vue from 'vue';

import Popper from 'vue-popperjs';
import mydropdown from 'vue2-bootstrap-dropdown'
//import 'vue-popperjs/dist/css/vue-popper.css';

Vue.use(Popper);

import BootstrapVue from "bootstrap-vue";
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

Vue.use(BootstrapVue);

import Buefy from 'buefy';
import 'buefy/dist/buefy.css';

Vue.use(Buefy);

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import App from './App.vue';
import Home from './components/Home.vue';
import Solutions from './components/Solutions.vue';
import Services from './components/Services.vue';
import Nav from './components/Nav.vue';
const routes = [
    {
        name: 'Home',
        path: '/',
        component: Home
    },
    {
        name: 'Solutions',
        path: '/solutions',
        component: Solutions
    },
    {
        name: 'Services',
        path: '/services',
        component: Services
    }
];

const router = new VueRouter({ mode: 'hash', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');