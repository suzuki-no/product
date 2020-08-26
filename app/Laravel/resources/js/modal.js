require('./app');
require('./navi');
import Vue from 'vue';
import Router from 'vue-router';
import Modal from '../components/Modal.vue';
import page1 from '../components/cont/page1';
import page2 from '../components/cont/page2';
import page3 from '../components/cont/page3';

Vue.use(Router);

const router = new Router({
  routes: [
    {
      path: '/',
      component: page1
    },
    {
      path: '/page2',
      component: page2
    },
    {
      path: '/page3',
      component: page3
    }
  ]
});

new Vue({
  el: '#modalapp',
  router,   /*Vueをインスタンス化する際にrouterを渡す*/
  render: h => h(Modal),
})
