<!--
  p67 フォーム
-->
<h2>入力フォーム</h2>
<div>
  <form>
    <div class="3_17">
      <input type="datetime-local" id="date" v-model="list317.date" />
      <label for="name">氏名：</label>
      <input type="text" id="name" v-model.lazy="list317.myName" />
    </div>
    <div class="3_19">
      <label for="dog">いぬ</label>
      <input type="radio" id="dog" value="いぬ" v-model="list319.pet" />
      <label for="cat">ねこ</label>
      <input type="radio" id="cat" value="ねこ" v-model="list319.pet" />
      <label for="rabbit">うさぎ</label>
      <input type="radio" id="rabbit" value="うさぎ" v-model="list319.pet" />
    </div>
    <div class="3_21">
      <label for="agree">同意：</label>
      <input type="checkbox" id="agree" v-model="list321.agree" />
    </div>
    <div class="3_23">
      <label for="windows">windows</label>
      <input type="checkbox" id="windows" value="windows" v-model="list323.os" />
      <label for="macOS">macOS</label>
      <input type="checkbox" id="macOS" value="macOS" v-model="list323.os" />
      <label for="linax">linax</label>
      <input type="checkbox" id="linax" value="linax" v-model="list323.os" />
    </div>
    <div class="3_25">
      <select id="smartphone" v-model="list325.smartphone">
        <option value="">スマホ</option>
        <option>iPhone 6</option>
        <option>iPhone 6SE</option>
        <option>iPhone 8</option>
        <option>iPhone 8SE</option>
        <option>iPhone X</option>
        <option>AQUOS R</option>
        <option>AQUOS R2</option>
        <option>AQUOS R3</option>
        <option>AQUOS 0</option>
      </select>
    </div>
    <div class="3_27">
      <select v-model="list327.smartphones" multiple size="5">
        <option>iPhone 6</option>
        <option>iPhone 6SE</option>
        <option>iPhone 8</option>
        <option>iPhone 8SE</option>
        <option>iPhone X</option>
        <option>AQUOS R</option>
        <option>AQUOS R2</option>
        <option>AQUOS R3</option>
        <option>AQUOS 0</option>
      </select>
    </div>
    <div class="3_29">
      <label for="million">百万：</label>
      <input type="radio" id="million" v-model="list329.unit" v-on:change="onchange"
        v-bind:value="{name: '百万', size: 1000000}"/>
      <label for="billion">十億：</label>
      <input type="radio" id="billion" v-model="list329.unit" v-on:change="onchange"
        v-bind:value="{name: '十億', size: 1000000000}"/>
      <label for="trillion">一兆：</label>
      <input type="radio" id="trillion" v-model="list329.unit" v-on:change="onchange"
        v-bind:value="{name: '一兆', size: 1000000000000}"/>
    </div>
  </form>
  <div class="">
    <p>こんにちは、@{{ list317.myName }}さん！ @{{ list317.date }}</p>
    <p>あなたが好きなペットは、@{{ list319.pet }}ですね。</p>
    <p>解釈一致：@{{ list321.agree }}</p>
    <p>OS：@{{ list323.os }}</p>
    <p>スマホ：@{{ list325.smartphone }}</p>
    <p>スマホ：@{{ list327.smartphones }}</p>
    <p>お値段：@{{ list329.unit.size|numberFormat }}</p>
  </div>
</div>
