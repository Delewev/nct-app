/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('admin-component', require('./components/Admin.vue').default);
Vue.component('fest-component', require('./components/Fest.vue').default);
Vue.component('feststore-component', require('./components/FestStore.vue').default);
Vue.component('home-component', require('./components/Home.vue').default);
Vue.component('admin-content-component', require('./components/Admin/AdminContent.vue').default);
Vue.component('fest-content-component', require('./components/FestContent.vue').default);
Vue.component('user-component', require('./components/User.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
