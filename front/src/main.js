import Vue from 'vue'
import './plugins/axios'
import config from './config'
import App from './App.vue'
import router from './router'
import store from './store'

/**
 * scss
 */
import './main.scss';

Vue.config.productionTip = false;
Vue.prototype.$appConf = config;

new Vue({
    router,
    store,
    created() {
        axios.defaults.headers.common['Accept'] = 'application/json';
        axios.defaults.baseURL = this.$appConf.apiUrl;
    },
    render: h => h(App)
}).$mount('#app');
