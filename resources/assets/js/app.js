
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('sidenav', require('./components/SideNav.vue'));

Vue.component('dashboard', require('./components/Dashboard.vue'));
Vue.component('calendar', require('./components/Calendar.vue'));
Vue.component('leads', require('./components/Leads.vue'));
Vue.component('clients', require('./components/Clients.vue'));

Vue.component('v-select', VueSelect.VueSelect);

const app = new Vue({
    el: '#app'
});
