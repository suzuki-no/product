require('./app');
require('./navi');
import Vue from 'vue';
let Wings = new Vue({
  el: '#wings-app',
  data: {
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
  },
  computed: {
      randomc: function() {
        return Math.random();
      }
  },
  watch: {
    'list226.name': function(newValue, oldValue) {
      this.delayFunc();
    },
  },/* local filter
  filters: {
      numberFormat: function(value){
        return Number(value).toLocaleString();
      },
  },*/
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
});
/* global filter */
Vue.filter('numberFormat', function(val){
  return Number(val).toLocaleString();
});
