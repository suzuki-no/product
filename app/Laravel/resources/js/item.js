require('./app');
require('./navi');
import Vue from 'vue';
const ItemAppModel = new Vue();
//import PopupTempl from '../components/Popup.vue';
Vue.component('Popup',{
  data: function() {
      return {
          showModal: false,
          item: {
            item_name: '',
            item_desc: '',
          }
      }
  },
  template: `
    <transition name="modal_window" appear>
      <div class="modal_window _outer" v-show="showModal" v-on:click.self="closeAction">
        <div class="modal_window _inner">
          <div>
            <p>モーダルサンプルです。</p>
            <p v-text="item.item_name"></p>
            <p v-text="item.item_description"></p>
          </div>
          <div>
            <a class="close" href="javascript:void(0)" v-on:click.self="closeAction">×</a>
          </div>
        </div>
      </div>
    </transition>
  `,
  methods: {
      openAction: function (_obj) {
          this.showModal = true;
          this.item =_obj;
      },
      closeAction: function (e) {
          this.showModal = false;
      },
  },
  mounted: function() {
      this.$nextTick(function () {
          ItemAppModel.$on('open-modal', this.openAction);
      }.bind(this));
  }
});

const ItemApp = new Vue({
    el: '#item-app',
    data: {
        tests: [],
        samples: [],
        protos: [],
        new_item: '',
        operation_log: '',
        set_item_status: false,
        set_item: false,
        tabSelect: 1,
        popupItemName: 'testtest',
        popupItemDesc: 'test',
        url: '/items/details?ii=',
    },
    /*
    components: {
      Popup : PopupTempl,
    },
    */
    methods: {
        fetchitems: function(){
            axios.get('/api/item-get').then((res)=>{
                console.log("model",res.data);
                this.tests = res.data["test"];
                this.samples = res.data["sample"];
                this.protos = res.data["proto"];
            });
        },
        thumbnail: function(value){
            let _target = this.url+"?ii="+value;
            console.log("!",_target)
            window.location.href = _target;
            /*
            let _targetId = e.target.getAttribute("data-id");
            window.location.href = '/items/details?item_id='+_targetId;
            */
        },
        showAction: function(value){
          ItemAppModel.$emit('open-modal', value);
        },
    },
    created(){
        this.fetchitems();
    }
});
require('./tab');
