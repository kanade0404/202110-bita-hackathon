require('./bootstrap');

import Vue from 'vue';
import App from './components/ExampleComponent.vue';

new Vue({
    render: (h) => h(App),
}).$mount('#app');
