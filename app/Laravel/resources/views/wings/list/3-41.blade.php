<!--
  p84 制御系ディレクティブ
-->
<h4>制御系ディレクティブ</h4>
<div>
  <form class="3_41">
    <div>
      <label for="show">表示／非表示</label>
      <input type="checkbox" id="show" v-model="list341.show" />
    </div>
  </form>
  <div class="3_41">
    <div id="panel" v-if="list341.show">
      <div class="fwB">表示される</div>
    </div>
    <div v-else>
      <div class="fwB">非表示です</div>
    </div>
    <div v-show="list341.show">
      <div class="fwB">表示される2</div>
    </div>
  </div>
  <form class="3_44">
    <div>
      <label for="show">祝日</label>
      <select id="holiday" v-model="list344.holiday">
        <option value="">祝日を選択してください</option>
        <option value="new">元旦</option>
        <option value="child">こどもの日</option>
        <option value="culture">文化の日</option>
        <option value="labor">勤労感謝の日</option>
      </select>
    </div>
  </form>
  <div class="3_44">
    <div v-if="list344.holiday === 'new'">1月1日</div>
    <div v-else-if="list344.holiday === 'child'">5月5日</div>
    <div v-else-if="list344.holiday === 'culture'">11月3日</div>
    <div v-else-if="list344.holiday === 'labor'">11月23日</div>
    <div v-else>何も選択されていません。</div>
  </div>
  <div class="3_46">
    <fieldset>
      <label>支払方法</label>
      <br>
      <span>クレジットカード：</span>
      <input type="radio" name="pay" value="credit" v-model="list346.pay"/>
      <span>銀行振込：</span>
      <input type="radio" name="pay" value="bank" v-model="list346.pay"/>
      <hr>
      <div v-if="list346.pay ==='credit'">
        <span>カード番号：</span>
        <input type="text" key="credit"/>
      </div>
      <div v-else-if="list346.pay ==='bank'">
        <span>口座番号：</span>
        <input type="text" key="bank"/>
      </div>
    </fieldset>
  </div>
</div>
