<template>
  <div id="item-app">
   <p>ここはトップページです。</p>
   <div v-for="item in items" class="item_tray">
     <div v-text="item.item_name"></div>
   </div>
 </div>
</template>

<script>
export default {
  name: 'ItemApp',
  data() {
    return {
      items: {}
    }
  },
  methods: {
    fetchTasks() {
      axios.get('/api/modal-item-get').then((res)=>{
          this.items = res.data["item"];
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
