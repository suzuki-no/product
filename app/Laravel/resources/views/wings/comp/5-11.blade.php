<!--
  p190 アニメーション機能
-->
<h2>アニメーション機能</h2>
<div class="5_11">
  <input type="button" value="表示／非表示" v-on:click="onclick511" />
  <transition>
    <div id="panel-511" v-show="comp511.flag">WINGS Vue.js</div>
  </transition>
</div>
<div class="5_18">
  <input type="button" value="表示／非表示" v-on:click="onclick518" />
  <transition>
    <div id="panel-518" v-if="comp518.flag" key="p1">表示中</div>
    <div id="empty-518" v-else key="p2">非表示</div>
  </transition>
</div>
<div class="5_19 pR">
  <input type="button" value="切り替え" v-on:click="onclick519" />
  <transition mode="out-in" name="comp519">
    <div id="panel-519" v-bind:key="comp519.id" >@{{ comp519.panels[comp519.id] }}</div>
  </transition>
</div>
<div class="5_24">
  <input type="button" value="切り替え" v-on:click="onclick524" />
  <transition enter-active-class="animated rollIn" leave-active-class="animated rollOut">
    <div id="panel-524" v-show="comp524.flag">WINGS Vue.js</div>
  </transition>
</div>
<div class="5_25">
  <input type="button" value="切り替え" v-on:click="onclick525" />
  <transition v-bind:css="false" v-on:enter="onenter525" v-on:leave="onleave525">
    <div id="panel-525" v-show="comp525.flag">WINGS Vue.js</div>
  </transition>
</div>

<link rel="stylesheet" href="{{ asset('css/wings.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
