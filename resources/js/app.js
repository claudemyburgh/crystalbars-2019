
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
const luna =  require('luna-sass/Framework/js/luna.js');
import "babel-polyfill";


import TweenMax from 'gsap'
import ScrollMagic from 'scrollmagic'

require('animation.gsap');


require('isotope-layout/dist/isotope.pkgd.js');
require('imagesloaded');


// require('debug.addIndicators');


window.Vue = require('vue');



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('mail-chimp', require('./components/MailChimp.vue'));

// Vue.component('admin-gallary', require('./components/AdminGallary.vue'));


const app = new Vue({
    el: '#app',
});

(function($, window, document){

    'use strict';


    $(document).Luna();



    var controller = new ScrollMagic.Controller();

    if ( $('.hero').length ) {

        var parallax = new ScrollMagic.Scene({
            triggerElement: '.hero',
            triggerHook: 1,
            duration: "200%",

        })
        // .addIndicators()
        .setTween(TweenMax.from('.hero__video', 1, {y: "-40%", ease:Power0.easeNone}))
        .addTo(controller);

    }


    var $grid = $('.isotope').isotope({
        masonry: {
        }
    });

    $grid.imagesLoaded().progress( function() {
        $grid.isotope('layout');
    });





})(jQuery, window, document);
