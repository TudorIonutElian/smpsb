/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import VueRouter from 'vue-router'

Vue.use(VueRouter)


import Home from './components/ExampleComponent.vue';
import About from './components/AboutComponent.vue';
import Emitenti from './components/EmitentiComponent.vue';
import EmitentiAdaugare from './components/Emitenti/EmitentAdaugare.vue';
import TipuriActe from './components/Acte/Acte';

const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    { path: '/', component: Home },
    { path: '/about', component: About},
    { path: '/emitenti', component: Emitenti},
    { path: '/emitenti-adaugare', component: EmitentiAdaugare},
    { path: '/acte', component: TipuriActe}
  ]
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router: router
});
