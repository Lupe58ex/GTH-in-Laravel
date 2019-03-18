
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Buefy from 'buefy'
Vue.use(Buefy, {
    defaultIconPack: 'fas'
})
import VeeValidate, { Validator } from 'vee-validate';
import es from 'vee-validate/dist/locale/es';
Vue.use(VeeValidate, {
    events: ''
});
Validator.localize('es', es);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('schedule-create-component', require('./components/schedules/ScheduleCreateComponent.vue').default);
Vue.component('employee-create-component', require('./components/employees/EmployeeCreateComponent.vue').default);
Vue.component('employee_schedule-create-component', require('./components/employee_schedules/Employee_scheduleCreateComponent.vue').default);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
    data: {
        showNav: false
    }
});
