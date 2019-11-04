import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import './plugins/axios'

/**
 * scss
 */
import './main.scss';

Vue.config.productionTip = false;

new Vue({
    router,
    store,
    created() {
        axios.defaults.headers.common[ 'Accept' ] = 'application/json';
    },
    render: h => h(App)
}).$mount('#app');
