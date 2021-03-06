require('./bootstrap');

import {App, plugin} from '@inertiajs/inertia-vue';
import Vue from 'vue';
import {InertiaProgress} from '@inertiajs/progress';
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';
import VueMeta from 'vue-meta';
import VueRecaptcha from 'vue-recaptcha';

// inertia
InertiaProgress.init();
Vue.use(plugin);

// vue-meta
Vue.use(VueMeta);

// ziggy route
Vue.mixin({methods: {route}});

// uikit
UIkit.use(Icons);
window.UIkit = UIkit;

// laravel to vue translation
Vue.prototype.translate = require('./VueTranslation/Translation').default.translate;

// global components
Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('alert-component', require('./components/AlertComponent.vue').default);
Vue.component('share-component', require('./components/ShareComponent.vue').default);
Vue.component('VueRecaptcha', VueRecaptcha);
// // const files = require.context('./', true, /\.vue$/i)
// // files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const el = document.getElementById('app');
new Vue({
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default
    },
  }),
}).$mount(el);
