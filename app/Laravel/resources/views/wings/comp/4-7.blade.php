<!--
  p152 親->子伝達
-->
<h2>親->子伝達</h2>
<my-counter init="0"></my-counter>

<!--
  p159 子->親伝達
-->
<h2>子->親伝達</h2>
<p v-cloak>現在値：@{{ comp412.current }}</p>
<my-counter-2 step="1" v-on:plus="onplus"></my-counter-2>
<my-counter-2 step="2" v-on:plus="onplus"></my-counter-2>
<my-counter-2 step="-1" v-on:plus="onplus"></my-counter-2>

<!--
  p164 親<-|->子伝達
-->
<h2>親<-|->子伝達</h2>
<p v-cloak>親：@{{ comp417.message }}</p>
<my-child ref="child"></my-child>
