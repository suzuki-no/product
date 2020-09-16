<!--
  p225 部品化
-->
<h2>部品化</h2>
<div class="6_1">
  <p>test project.<span v-setcolor="parts61.color">here the color is set from the directive.</span>test project.</p>
</div>
<div class="6_3">
  <select v-model="parts63.color">
    <option v-for="option in parts63.options" v-bind:key="option.val" v-bind:value="option.val">@{{ option.name }}</option>
  </select>
  <p>test project.<span v-setcolor="parts63.color">here the color is set from the directive.</span>test project.</p>
</div>
