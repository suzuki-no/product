<!--
  p225 部品化
-->
<h2>部品化</h2>
<h4>6_1</h4>
<div class="6_1">
  <p>test project.<span v-setcolor="parts61.color">here the color is set from the directive.</span>test project.</p>
</div>
<h4>6_3</h4>
<div class="6_3">
  <select v-model="parts63.color">
    <option v-for="option in parts63.options" v-bind:key="option.val" v-bind:value="option.val">@{{ option.name }}</option>
  </select>
  <p>test project.<span v-setcolor="parts63.color">here the color is set from the directive.</span>test project.</p>
</div>
<h4>6_6</h4>
<div class="6_6">
  <label>自由欄：<input type="text" v-model="parts66.free"/></label>
  <select v-model="parts66.color">
    <option v-for="option in parts66.options" v-bind:key="option.val" v-bind:value="option.val">@{{ option.name }}</option>
  </select>
  <p>test project.<span v-setcolor="parts66.color">here the color is set from the directive.</span>test project.</p>
</div>
<h4>6_16</h4>
<div class="6_16">
  <div v-bind:title="parts616.str | trim">str：「@{{ parts616.str | trim }}」</div>
</div>
<h4>6_18</h4>
<div class="6_18">
  <textarea v-model="parts618.memo" cols="30" rows="10"></textarea>
  <div v-bind:inner-html.prop="parts618.memo | nl2br"></div>
</div>
<h4>6_20</h4>
<div class="6_20">
  <textarea v-model="parts620.memo" cols="30" rows="10"></textarea>
  <div>@{{ parts620.memo | truncate }}</div>
  <div>@{{ parts620.memo | truncate(20, '~') }}</div>
</div>
<h4>6_22</h4>
<div class="6_22">
  <input type="number" v-model="parts622.num"></input>
  <div>元の数字：@{{ parts622.num }}</div>
  <div>後の数字：@{{ parts622.num | abs | number(2) }}</div>
</div>
