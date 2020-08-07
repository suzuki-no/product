require('./app');
const itemApp = new Vue({
    el: '#item-app',
    data: {
        items: [],
        new_item: '',
        operation_log: '',
        set_item_status: false,
        set_item: false,
    },
    methods: {
        fetchitems: function(){
            axios.get('/api/item-get').then((res)=>{
                console.log("model",res.data);
                this.items = res.data["item"];
            });
        },
        thumbnail: function(e){
            let _targetId = e.target.getAttribute("data-id");
            console.log("!", _targetId);
            window.location.href = '/items/details?item_id='+_targetId;
            //window.location.href = '/items/details';
        },
        /*
        additem: function(){
          console.log("model",this.new_item);
          axios.post('/api/item-add',{
            name: this.new_item
          }).then((res)=>{
            this.items = res.data;
            this.new_item = '';
            this.operation_log ='タスクを登録しました';
            this.set_item_status = true;
            this.set_tase = true;
          });
        },
        deleteitem: function(item_id){
          console.log("data",item_id);
          axios.post('/api/item-del',{
            id: item_id
          }).then((res)=>{
            this.items = res.data;
            this.operation_log ='タスクを削除しました。';
            this.set_item_status = true;
            this.set_tase = false;
          });
        },
        */
    },
    created(){
        this.fetchitems();
    }
});
