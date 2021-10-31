import Vue from 'vue';
import vuetify from './vuetify';

import App from './components/Index.vue';

new Vue({
  render: (h) => h(App),
  vuetify,
}).$mount('#app');
