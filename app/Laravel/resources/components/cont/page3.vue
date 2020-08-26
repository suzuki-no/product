<template>
  <div id="contact-app">
   <p>ここは連絡ページです。</p>
   <div v-for="todo in todos" class="item_tray">
     <div v-text="todo.title"></div>
   </div>
 </div>
</template>

<script>
export default {
  name: 'ContactApp',
  data() {
    return {
      todos: {}
    }
  },
  methods: {
    fetchTasks() {
      axios.get('/api/modal-todo-get').then((res)=>{
          this.todos = res.data["todo"];
      });
    }
  },
  created(){
      this.fetchTasks();
  }
}
</script>

<style>
</style>
