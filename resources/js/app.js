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

/*************************
** Import for Emitenti ***
*************************/

import Emitenti from './components/Emitenti/Emitenti.vue';
import EmitentiAdaugare from './components/Emitenti/EmitentAdaugare.vue';
import EmitentActe from './components/Emitenti/EmitentActe.vue';
import EmitentiRadiere from './components/Emitenti/EmitentiRadiere.vue';

/****************************
*** Import for TipuriActe ***
****************************/
import TipuriActe from './components/TipuriActe/TipuriActe';

/****************************
*** Import for Acte       ***
****************************/
import Acte from './components/Acte/Acte';
import ActeAdaugare from './components/Acte/ActeAdaugare.vue';


const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    { path: '/', component: Home },
    { path: '/about', component: About},

    // Routes pentru EMITENTI
    { path: '/emitenti', component: Emitenti},
    { path: '/emitenti/:id/acte', component: EmitentActe},
    { path: '/emitenti-adaugare', component: EmitentiAdaugare},
    { path: '/emitenti-radiere', component: EmitentiRadiere},


    { path: '/tipuri-acte', component: TipuriActe},

    // Routes pentru ACTR
    { path: '/acte', component: Acte},
    { path: '/acte-adaugare', component: ActeAdaugare}
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
