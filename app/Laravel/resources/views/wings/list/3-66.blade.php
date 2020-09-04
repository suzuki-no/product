<!--
  p107 データバインディング
-->
<h4>データバインディング</h4>
<form class="3_66">
  <label for="memo">メモ：</label>
  <input type="text" id="memo"v-bind="list366.attrs"/>
</form>
<div class="3_69" v-bind:text-content.prop="list369.text"></div>
<div class="3_70">
  <select v-model="list370.attr">
    <option value="height">高さ</option>
    <option value="width">幅</option>
  </select>：
  <input type="text" size="5" v-model="list370.size" /><br>
  <img src="https://wings.msn.to/image/wings.jpg" v-bind:[list370.attr]="list370.size"/>
</div>
<div class="3_72">
  <div>@{{ list372.message }}</div>
  <div v-html="list372.message"></div>
</div>
<div class="3_74">
  <form>
    <label for="name">氏名：</label>
    <input type="text" id="name" v-model.lazy="list374.name"/>
  </form>
  <div v-once v-cloak>初めまして@{{ list374.name }}</div>
  <div v-cloak>初めまして@{{ list374.name }}</div>
</div>
<div class="3_76" v-bind:style="[list376.color, list376.size]">Hello!! World!!</div>
<div class="3_82" v-bind:class="[list382.colorClass, list382.frameClass]">Hello!! World!!</div>
