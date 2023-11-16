import { createApp } from 'vue';
import App from '@/App.vue';

const app = createApp(App);

// pinia store
import { createPinia } from 'pinia';
const pinia = createPinia();
app.use(pinia);

import router from '@/router';
app.use(router);


import axios from 'axios';
const axiosInstance = axios.create({
    baseURL: import.meta.env.VITE_BASE_URL
    // baseURL: 'https://sahabatibadah.com/api'
    // baseURL: 'https://qaraa.hotamadev.com/api'
    // baseURL: 'http://127.0.0.1:8000/api'
});

axiosInstance.interceptors.request.use(config => {
    // get token from localStorage every time to get fresh data
    let userData = localStorage.getItem('api-token');

    if (userData !== null) {
        config.headers.Authorization = userData ? `Bearer ${userData}` : null;
    }

    return config;

});

app.provide('axios', axiosInstance);

import './global-components'


// main app css
import '@/assets/css/app.css';

// perfect scrollbar
import PerfectScrollbar from 'vue3-perfect-scrollbar';
app.use(PerfectScrollbar);

//vue-meta
import { createHead } from '@vueuse/head';
const head = createHead();
app.use(head);

// set default settings
import appSetting from '@/app-setting';
appSetting.init();

//vue-i18n
import i18n from '@/i18n';
app.use(i18n);

// tippy tooltips
import { TippyPlugin } from 'tippy.vue';
app.use(TippyPlugin);

//input mask
import Maska from 'maska';
app.use(Maska);

//markdown editor
import VueEasymde from 'vue3-easymde';
import 'easymde/dist/easymde.min.css';
app.use(VueEasymde);

// popper
import Popper from 'vue3-popper';
app.component('Popper', Popper);

// json to excel
import vue3JsonExcel from 'vue3-json-excel';
app.use(vue3JsonExcel);

app.mount('#app');
