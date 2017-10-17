
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('form_post', require('./components/Form.vue'));
Vue.component('posts', require('./components/Posts.vue'));

const app = new Vue({
    el: '#app',
    data: {
        title: '',
        text: '',
    }
});

const form = new Vue({
    el: '#form',
    data: {
        title: '',
        text: '',
    },
    methods: {
        sendForm: function()
        {
            this.title = this.$refs.title.value
            this.text = this.$refs.text.value
        }
    }
});
