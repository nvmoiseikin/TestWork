import Vue from 'vue';

import Popper from 'vue-popperjs';
import mydropdown from 'vue2-bootstrap-dropdown'
//import 'vue-popperjs/dist/css/vue-popper.css';

Vue.use(Popper);

import BootstrapVue from "bootstrap-vue";
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

Vue.use(BootstrapVue);

import FontAwesomeIcon from '@fortawesome/fontawesome'

Vue.use(FontAwesomeIcon);

/*router */
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

/* modal popup */
import VModal from 'vue-js-modal'
Vue.use(VModal)

/* video player */
import VueVideoPlayer from 'vue-video-player'
import 'video.js/dist/video-js.css'
Vue.use(VueVideoPlayer);

import App from './App.vue';
import Home from './components/Home.vue';
import Solutions from './components/Solutions.vue';
import Services from './components/Services.vue';
import About from './components/About.vue';
import Contact from './components/Contacts.vue';
import SolutionsComponent from './components/SolutionsComponent.vue';
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
    },
    {
        name: 'SolutionsComponent',
        path: '/solutions/:componentName(.*)',
        component: SolutionsComponent
    },
    {
        path: '/about',
        component: About
    },
    {
        path: '/contacts',
        component: Contact
    }

];
    Vue.config.productionTip = false;
    Vue.config.devtools = false;
    Vue.config.debug = false;
    Vue.config.silent = true;

const router = new VueRouter({ mode: 'hash', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');