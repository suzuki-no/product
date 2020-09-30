require('./app');
require('./navi');
import Vue from 'vue';
import Router from 'vue-router';
//import Home from '../views/router/Home.vue';

//Vue.use(Router);
/*
const WingsRouter Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: ()=>import('../views/router/About.vue')
    }
  ]
})
*/
//import VeeValidate from 'vee-validate';
//import VeeJa from 'vee-validate/dist/locale/ja';
/*
Vue.use(VeeValidate, {
  locale: 'ja',
  dictionary: {
    ja: VeeJa
  }
})
*/
Vue.component('my-hello',{
  props: {
    'yourName': {
      type: String,
      required: true,
      default: 'no name',
    }
  },
  template: `<div v-cloak>Hello!!,{{ yourName }}! GoodBye!!,{{ name41 }}</div>`,
  data: function(){
    return {
       name41: 'Vue.js',
    }
  }
});
Vue.component('my-counter',{
  props: ['init'],
  template: `<div v-cloak>現在値：{{ current }}
            <input type="button" v-on:click="onclik47(1)" value="増やす"/>
            <input type="button" v-on:click="onclik47(-1)" value="減らす"/></div>`,
  data: function(){
    return {
       current: this.init,
    }
  },
  methods: {
    onclik47: function(val){
      this.current = Number(this.current) + Number(val);
    }
  },
});
Vue.component('my-counter-2',{
  props: ['step'],
  template: `<button type="button" v-on:click="onclick412">{{ step }}</button>`,
  methods: {
    onclick412: function(){
      this.$emit('plus', Number(this.step));
    }
  },
});
Vue.component('my-child',{
  data: function(){
    return {
      message: '',
    }
  },
  template: `<p>子：{{ message }}</p>`,
  mounted() {
    this.$parent.comp417.message = '子から設定';
  },
});
Vue.component('my-hello-419',{
  props: ['yourName'],
  template: `<div>Hello!! <slot>guest</slot>!!</div>`,
});
Vue.component('my-slot',{
  template: `
  <div>
    <header>
      <slot name="header">DEFAULT HEADER</slot>
    </header>
    <div>
      <slot>DEFAULT MAIN</slot>
    </div>
    <footer>
      <slot name="footer">DEFAULT FOOTER</slot>
    </footer>
  </div>`,
});
Vue.component('my-book',{
  data: function(){
    return {
      book: {
        isbn: '123-456-789-0',
        title: 'さんぷる書籍',
        price: 2000,
        publish: 'さんぷる出版',
      }
    };
  },
  template: `
  <div>
    <slot v-bind:book="book">{{ book.title }}({{ book.publish }})</slot>
  </div>`,
});
Vue.component('banner-member',{
  template: `
  <div class="banner">
    <h3>TEST Banner! ver.1</h3>
    <p>member content...member content...member content...member content...</p>
  </div>`,
});
Vue.component('banner-new',{
  template: `
  <div class="banner">
    <h3>TEST Banner! ver.2</h3>
    <p>new content...new content...new content...new content...</p>
  </div>`,
});
Vue.component('banner-env',{
  template: `
  <div class="banner">
    <h3>TEST Banner! ver.3</h3>
    <p>env content...env content...env content...env content...</p>
  </div>`,
});
Vue.component('tab-member',{
  template: `
  <div class="tab">
    <p>test tab member<br>
      begin member vue.js</p>
      <label>名前：<input type="text" v-model="name"/></label>
      <input type="submit" value="登録">
    </p>
  </div>
  `,
  data: function(){
    return {
      name: '',
    }
  }
});
Vue.component('tab-new',{
  template: `
  <div class="tab">
    <p>test tab new<br>
      begin new vue.js</p>
    </p>
  </div>
  `,
});
Vue.component('tab-env',{
  template: `
  <div class="tab">
    <p>test tab env<br>
      begin env vue.js</p>
    </p>
  </div>
  `,
});
Vue.component('my-input',{
  props: ['value'],
  /*
  template: `
  <label>
    名前：<input type="text" v-bind:value="value" v-on:input="$emit('input', $event.target.value)"/>
  </label>
  `,
  */
  template: `
    <label>
      名前：
      <input type="text" v-model.lazy="internalValue" />
    </label>
  `,
  computed: {
    internalValue: {
      get(){
        return this.value;
      },
      set(newValue){
        if(this.value !== newValue){
          this.$emit('input', newValue);
        }
      },
    }
  }
});
Vue.component('my-input-572',{
  props: ['name'],
  model: {
    prop: 'name',
    event: 'change',
  },
  /*
  template: `
  <label>
    名前：
    <input type="text" v-bind:value="name" v-on:input="$emit('change', $event.target.value)"/>
  </label>
  `,
  */
  template: `
    <label>
      名前：
      <input type="text" v-model.lazy="internalValue" />
    </label>
  `,
  computed: {
    internalValue: {
      get(){
        return this.name;
      },
      set(newValue){
        if(this.name !== newValue){
          this.$emit('input', newValue);
        }
      },
    }
  }
});
Vue.component('my-input-59',{
  props: ['value'],
  template: `
  <label>
    名前：
    <input type="text" v-bind:value="value" v-on:input="$emit('update:value', $event.target.value)"/>
  </label>
  `,
});
Vue.component('my-hello-533',{
  data: function(){
    return { name533: 'Vue.js' }
  }
});
Vue.component('my-loading',{
  props: [ 'type' ],
  data: function(){
    return { src : 'loading.gif' }
  },
  render: function(h){
    switch(this.type){
      case 'text':
        return h('p', '...Now Loading...');
      case 'image':
        return h('img', {
          attrs: {
            src: this.src,
            alt: 'loading',
          },
          on: {
            error: () => { this.src = './img/noimage.jpg' }
          }
        });
      default:
        console.log('type属性はimage、textいずれか');
    }
  },
});
Vue.directive('setcolor', {
    bind: function(el, binding, vnode, oldVnode){
      el.style.backgroundColor = binding.value;
    },
    update: function(el, binding, vnode, oldVnode){
      if(binding.value === binding.oldValue) return;
      el.style.backgroundColor = binding.value;
    }
});
Vue.filter('trim', function(value){
  if(typeof value !== 'string'){
    return value;
  }
  return value.trim();
});
Vue.filter('nl2br', function(value){
  if(typeof value !== 'string'){
    return value;
  }
  return value.replace(/\r?\n/g, '<br>');
});
Vue.filter('truncate', function(value, len = 10, omit = '...'){
  if(typeof value !== 'string'){
    return value;
  }
  if(value.length <= len){
    return value;
  }else{
    return value.substring(0, len) + omit;
  }
});
Vue.filter('abs', function(value){
  return Math.abs(value);
});
Vue.filter('number', function(value, dec = 0){
  return value.toFixed(dec);
});

let MyHello ={
  template: `<div>Hello?,Vue.js!</div>`
};
let Wings = new Vue({
  el: '#wings-app',
  components: {
    'my-hello-local': MyHello
  },
  data: {
    category: 3,
    listelect: 217,
    compSelect: 42,
    partsSelect: 61,
    list223: {
      author: 'Loding...',
    },
    list226: {
      upperName: '',
      name: '',
    },
    list37: {
      path: './img/test/thum/sampl2.jpg',
    },
    list317: {
      myName: '匿名',
      date: '',
    },
    list319: {
      pet: '？？？',
    },
    list321: {
      agree: false,
    },
    list323: {
      os: [],
    },
    list325: {
      smartphone: '',
    },
    list327: {
      smartphones: [],
    },
    list329: {
      unit: {},
    },
    list341: {
      show: true,
    },
    list344: {
      holiday: '',
    },
    list346: {
      pay: 'credit',
    },
    list350: {
      books: [
        {
          isbn: '123-456-789-12',
          title: 'タイトル１',
          price: 2800,
        },
        {
          isbn: '123-456-789-14',
          title: 'タイトル２',
          price: 3600,
        },
        {
          isbn: '123-456-789-16',
          title: 'タイトル３',
          price: 1200,
        },
        {
          isbn: '123-456-789-18',
          title: 'タイトル４',
          price: 2400,
        },
        {
          isbn: '123-456-789-20',
          title: 'タイトル５',
          price: 3100,
        },
      ]
    },
    list360: {
      songs: [
        {
          title: 'タイトル１',
          lyrics: 'testtest',
          composer: 'sample',
        },
        {
          title: 'タイトル２',
          lyrics: 'testtest',
          composer: 'sample',
        },
        {
          title: 'タイトル３',
          lyrics: 'testtest',
          composer: 'sample',
        },
        {
          title: 'タイトル４',
          lyrics: 'testtest',
          composer: 'sample',
        },
      ]
    },
    list362: {
      list: ['赤色','緑色','青色']
    },
    list366: {
      attrs: {
        size: 20,
        maxlength: 14,
        required: true,
      }
    },
    list369: {
      text: 'Hello!! World!!',
    },
    list370: {
      attr: 'width',
      size: 100,
    },
    list372: {
      message: `<h6>wings</h6>
      <img src="https://www.web-deli.com/image/linkbanner_l.gif" alt="log" />
      `
    },
    list374: {
      name: '匿名',
    },
    list376: {
      color: {
        backgroundColor: 'aqua',
        color: 'red',
        tapHighlightColor: 'aqua',
      },
      size: {
        fontSize: '1.5em',
      }
    },
    list382: {
      colorClass: 'color',
      frameClass: 'frame',
      isChange: true,
    },
    list395: {
      result: '--',
    },
    list397: {
      consoleLog: '',
    },
    comp412: {
      current: 0,
    },
    comp417: {
      message: '',
    },
    comp51: {
      current: 0,
      components: ['member','new','env'],
    },
    comp54: {
      current: 'member',
      tabs: {
        'member': 'メンバー',
        'new': '新着',
        'env': '設定'
      },
    },
    comp57: {
      message: '匿名',
    },
    comp572: {
      message: '匿名',
    },
    comp59: {
      message: '匿名',
    },
    comp511: {
      flag: true,
    },
    comp518: {
      flag: true,
    },
    comp519: {
      id: 0,
      panels: [
        'panels test display 1...,panels test display 1...,panels test display 1...',
        'panels test display 2...,panels test display 2...,panels test display 2...',
        'panels test display 3...,panels test display 3...,panels test display 3...',
      ]
    },
    comp524: {
      flag: true,
    },
    comp525: {
      flag: true,
    },
    parts61:{
      color: '#ff0',
    },
    parts63:{
      color: '#f00',
      options: [
        {val: 'yellow', name: '黄色'},
        {val: '#f00', name: '赤色'},
        {val: 'rgba(0, 255, 255, .8)', name: '青色'},
      ]
    },
    parts66:{
      free: '',
      color: 'yellow',
      options: [
        {val: 'yellow', name: '黄色'},
        {val: 'red', name: '赤色'},
        {val: 'blue', name: '青色'},
      ]
    },
    parts616:{
      str: ' WINGS PROJECT',
    },
    parts618:{
      memo: '',
    },
    parts620:{
      memo: '',
    },
    parts622:{
      num: 0,
    },
    parts624:{
      num: 0,
    },
  },
  computed: {
      randomc: function() {
        return Math.random();
      },
      expensiveBooks: function(){
        return this.list350.books.filter(function(b){
          return b.price >= 1500;
        })
      },
      currentBanner: function() {
        return 'banner-' + this.comp51.components[this.comp51.current];
      },
      tabNames: function(){
        return Object.keys(this.comp54.tabs);
      },
      currentTab: function(){
        return 'tab-' + this.comp54.current;
      },
  },
  watch: {
    'list226.name': function(newValue, oldValue) {
      this.delayFunc();
    },
  },/* local filter */
  filters: {
      numberFormat: function(value){
        return Number(value).toLocaleString();
      },
  },
  methods: {
    getUpper: function(){
      this.list226.upperName = this.list226.name.toUpperCase();
    },
    onerror: function(){
      this.list37.path = './img/noimage.jpg';
    },
    onchange: function(value){
      console.log(this.list329.unit.name +'：'+this.list329.unit.size);
    },
    onclick: function(){
      if(this.list362.list[1] === '緑色'){
        Vue.set(this.list362.list, 1, '黄色');
      }else{
        Vue.set(this.list362.list, 1, '緑色');
      }
    },
    onclick395: function(){
      this.list395.result = Math.floor(Math.random()*100)+1;
    },
    onsubmit: function(e){
      if(!confirm('送信してもよいですか')){
        e.preventDefalt();
        return;
      }
    },
    onParentClick: function(val){
      console.log(val+" run");
      this.list397.consoleLog = this.list397.consoleLog+'<p class="m0 fwN">'+val+' run</p>';
    },
    onCurrentClick: function(val){
      console.log(val+" run");
      this.list397.consoleLog = this.list397.consoleLog+'<p class="m0 fwN">'+val+' run</p>';
    },
    onChildClick: function(val){
      console.log(val+" run");
      this.list397.consoleLog = this.list397.consoleLog+'<p class="m0 fwN">'+val+' run</p>';
    },
    onplus: function(val){
      this.comp412.current +=val;
    },
    onclick54: function(val){
      this.comp54.current = val;
    },
    onclick511: function(){
      this.comp511.flag = !this.comp511.flag;
    },
    onclick518: function(){
      this.comp518.flag = !this.comp518.flag;
    },
    onclick519: function(){
      this.comp519.id = (this.comp519.id + 1) % this.comp519.panels.length;
    },
    onclick524: function(){
      this.comp524.flag = !this.comp524.flag;
    },
    onclick525: function(){
      this.comp525.flag = !this.comp525.flag;
    },
    onenter525: function(el, done){
      Velocity(el, { opacity: 1 }, { duration: 1000, complete: done });
    },
    onleave525: function(el, done){
      Velocity(el, { opacity: 0 }, { duration: 1000, complete: done });
    },
  },
  created() {
      let that =this;
      that.timer = setTimeout(function(){
        that.list223.author ='Now starting';
      }, 3000);
      that.interval = setInterval(function () {
        that.comp51.current = (that.comp51.current + 1) % that.comp51.components.length;
      }, 3000);
      this.delayFunc = _.debounce(this.getUpper, 2000);
  },
  beforeDestroy() {
      clearTimeout(this.timer);
      clearInterval(this.interval);
  },
  mounted() {
    this.$refs.child.message = '親から設定';
  },
});
/* global filter
Vue.filter('numberFormat', function(val){
  return Number(val).toLocaleString();
}); */
