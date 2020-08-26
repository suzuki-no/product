<template>
  <div id="about-app">
   <p>ここは予約ページです。</p>
   <div v-for="task in tasks" class="item_tray">
     <div v-text="task.name"></div>
   </div>
 </div>
</template>

<script>
export default {
  name: 'AboutApp',
  data() {
    return {
      tasks: {}
    }
  },
  methods: {
    fetchTasks() {
      axios.get('/api/modal-task-get').then((res)=>{
          this.tasks = res.data["task"];
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
