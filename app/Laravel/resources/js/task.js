require('./app');
const taskApp = new Vue({
    el: '#task-app',
    data: {
        tasks: [],
        todos: [],
        new_task: '',
        operation_log: '',
        set_task_status: false,
        set_task: false,
    },
    methods: {
        fetchTasks: function(){
            axios.get('/api/task-get').then((res)=>{
                console.log("model",res.data);
                this.tasks = res.data["task"];
                this.todos = res.data["todo"];
            });
        },
        addTask: function(){
          console.log("model",this.new_task);
          axios.post('/api/task-add',{
            name: this.new_task
          }).then((res)=>{
            this.tasks = res.data;
            this.new_task = '';
            this.operation_log ='タスクを登録しました';
            this.set_task_status = true;
            this.set_tase = true;
          });
        },
        deleteTask: function(task_id){
          console.log("data",task_id);
          axios.post('/api/task-del',{
            id: task_id
          }).then((res)=>{
            this.tasks = res.data;
            this.operation_log ='タスクを削除しました。';
            this.set_task_status = true;
            this.set_tase = false;
          });
        },
    },
    created(){
        this.fetchTasks();
    }
});
Vue.component('task-heading', {
  render: function (createElement) {
    template: '<strong>Hello</strong>';
    throw new Error('err213')
  },
  renderError : function(ce, err) {
    return ce('pre', { style: { color: 'red' }}, err.stack)
  },
  props: [ 'level' ]
});
Vue.nextTick(
  (render)=>{
    template: '<strong>Bye!</strong>';
  },
)
