
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
const luna =  require('luna-sass/Framework/js/luna.js');


 window.Dropzone = require('dropzone');
// import Dropzone from 'dropzone'
 Dropzone.autoDiscover = false;

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));


const app = new Vue({
    el: '#app'
});

(function($, window, document){

    'use strict';


    $(document).Luna();


})(jQuery, window, document);
