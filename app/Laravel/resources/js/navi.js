/* jsでやる場合
var _navButton$ =document.querySelector('.nav_button'),
    _navWrapper$ =document.getElementById('nav-weapper'),
    _navBtn$ =document.getElementById('nav-button'),
    _sC$ =document.querySelector('.swiper-container'),
    _targetClass ="nav_open",
    _navObj ={
      navClassToggle: function(){
          if (_navWrapper$.classList.contains(_targetClass)) {
            _navObj.navMenuCloseAction();
          } else {
            _navObj.navMenuOpenAction();
          }
      },
      navMenuOpenAction: function(){
          _navWrapper$.classList.add(_targetClass);
      },
      navMenuCloseAction: function(){
          _navWrapper$.classList.remove(_targetClass);
      },
    };
_navButton$.addEventListener('click', function(){
  _navButton$.classList.toggle('is_active');
});
_navBtn$.addEventListener('click', _navObj.navClassToggle);
*/
const naviApp = new Vue({
    el: '#navi-app',
    data: {
        naviAnker: [],
        nabibutton: false,
    },
    methods: {
        initialize: function() {
          this.naviAnker = [
            {
              'tag': 'ホーム',
              'class': 'home',
              'href': '/items'
            },
            {
              'tag': '個人情報',
              'class': 'personal',
              'href': '/items'
            },
          ];
        },
        /*
        v-on:click="nabiButton" でやる場合はこっち
        nabiButton: function(){
          this.nabibutton = !this.nabibutton ? true : false;
        },
        */
    },
    created(){
      this.initialize();
    }
});
