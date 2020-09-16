<!--
  p178 コンポーネント応用
-->
<h2>コンポーネント応用</h2>
<div class="5_1">
  <component v-bind:is="currentBanner"/>
  <banner-member></banner-member>
</div>
<div class="5_4" id="container">
  <ul>
    <li v-for="tab in tabNames">
      <a href="#" v-on:click.prevent="onclick54(tab)">@{{ comp54.tabs[tab] }}</a>
    </li>
  </ul>
  <keep-alive include="tab-member">
    <component v-bind:is="currentTab"/>
  </keep-alive>
</div>
<h2>v-model双方向データバインディング</h2>
<div class="5_7">
    <my-input v-model="comp57.message"></my-input>
    <p>入力値comp57： @{{ comp57.message }}</p>
</div>
<div class="5_7_2">
    <my-input-572 v-model="comp572.message"></my-input-572>
    <p>入力値comp572： @{{ comp572.message }}</p>
</div>
<div class="5_9">
    <my-input-59 v-bind:value.sync="comp59.message"></my-input-59>
    <p>入力値comp59： @{{ comp59.message }}</p>
</div>
