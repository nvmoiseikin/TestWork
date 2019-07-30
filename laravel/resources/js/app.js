import Vue from 'vue';

import BootstrapVue from "bootstrap-vue"
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap-vue/dist/bootstrap-vue.css"

Vue.use(BootstrapVue)

import Buefy from 'buefy'
import 'buefy/dist/buefy.css'

Vue.use(Buefy)

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import App from './App.vue';
import Example from './components/ExampleComponent.vue';
import Home from './components/Home.vue';
import Nav from './components/Nav.vue';
const routes = [
    {
        name: 'Home',
        path: '/',
        component: Home
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');