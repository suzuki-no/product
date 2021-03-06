require('./app');
const todoApp = new Vue({
    el: '#todo-app',
    data: {
        todos: [],
        new_todo: ''
    },
    methods: {
        fetchTodos: function(){
            axios.get('/api/todo-get').then((res)=>{
                this.todos = res.data
            });
        },
        addTodo: function(){
          console.log("model",this.new_todo);
          axios.post('/api/todo-add',{
            title: this.new_todo
          }).then((res)=>{
            this.todos = res.data;
            this.new_todo = '';
          });
        },
        deleteTodo: function(task_id){
          console.log("data",task_id);
          axios.post('/api/todo-del',{
            id: task_id
          }).then((res)=>{
            this.todos = res.data;
          });
        },
    },
    created(){
        this.fetchTodos();
    }
});
