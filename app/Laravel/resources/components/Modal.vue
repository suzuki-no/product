<template>
  <div id="app">
    <div id="header">
      <div class="tab_category">
        <a href="javascript:void(0)" v-on:click="tabSelect=1" v-bind:class="[tabSelect === 1 ? 'select' : '']">タブ１</a>
        <a href="javascript:void(0)" v-on:click="tabSelect=2" v-bind:class="[tabSelect === 2 ? 'select' : '']">タブ２</a>
      </div>
      <div class="tab_content">
        <div v-show="tabSelect === 1" class="">tab-app1</div>
        <div v-show="tabSelect === 2" class="">tab-app2</div>
      </div>
      <div v-text="'test' + tabSelect"></div>
      <!--リンクタグを生成します。-->
      <div class="tab_category">
        <router-link to="/">top</router-link>
        <router-link to="/page2">about</router-link>
        <router-link to="/page3">contact</router-link>
      </div>
    </div>
    <!--上記のリンクタグで設定したコンポーネントが表示される場所です。-->
    <router-view></router-view>
  </div>
</template>

<style>
.tab_category a.router-link-exact-active{
  background-color: #eaeaea;
  border-bottom: transparent;
}
</style>
<script>
export default {
  data(){
    return {
      tabSelect: 1
    }
  }
}
</script>
