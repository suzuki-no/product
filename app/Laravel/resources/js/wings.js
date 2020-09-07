require('./app');
require('./navi');
import Vue from 'vue';

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
let MyHello ={
  template: `<div>Hello?,Vue.js!</div>`
};
let Wings = new Vue({
  el: '#wings-app',
  components: {
    'my-hello-local': MyHello
  },
  data: {
    category: 2,
    listelect: 217,
    compSelect: 42,
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
    }
  },
  computed: {
      randomc: function() {
        return Math.random();
      },
      expensiveBooks: function(){
        return this.list350.books.filter(function(b){
          return b.price >= 1500;
        })
      }
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
  },
  created() {
      let that =this;
      that.timer = setTimeout(function(){
        that.list223.author ='Now starting';
      }, 3000);
      this.delayFunc = _.debounce(this.getUpper, 2000);
  },
  beforeDestroy() {
      clearInterval(this.timer);
  },
  mounted() {
    this.$refs.child.message = '親から設定';
  },
});
/* global filter
Vue.filter('numberFormat', function(val){
  return Number(val).toLocaleString();
}); */
