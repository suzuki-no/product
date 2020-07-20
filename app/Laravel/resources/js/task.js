require('./app');
const taskApp = new Vue({
    el: '#task-app',
    data: {
        tasks: [],
        todos: [],
        new_task: ''
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
          });
        },
        deleteTask: function(task_id){
          console.log("data",task_id);
          axios.post('/api/task-del',{
            id: task_id
          }).then((res)=>{
            this.tasks = res.data;
          });
        },
    },
    created(){
        this.fetchTasks();
    }
});
