<!--
  p125 より高度なイベント処理
-->
<h2>より高度なイベント処理</h2>
<form class="3_93" v-on:submit="onsubmit">
 <label for="email"></label>
 <input id="email" name="email" type="email"/>
 <input type="submit" value="送信"/>
</form>

<div class="3_95">
  <input type="button" value="結果表示(一回のみ)" v-on:click.once="onclick395"/>
  <p>ランダム数値：@{{ list395.result }}</p>
</div>

<div class="3_97">
  <div v-on:click="onParentClick('parent')" >Click here!!>> parent div
    <div v-on:click.self="onCurrentClick('current')" >Click here!!>> current div
      <div v-on:click.self="onChildClick('child')" >Click here!!>> child div
      </div>
    </div>
  </div>
  <div v-html="list397.consoleLog"></div>
</div>
