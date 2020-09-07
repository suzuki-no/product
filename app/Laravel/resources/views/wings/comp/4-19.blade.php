<!--
  p165 スロット
-->
<h2>スロット</h2>
<my-hello-419>Jane Doe</my-hello-419>
<!--
  p167 複数スロット
-->
<h2>複数スロット</h2>
<my-slot>
  <p>一緒に勉強しましょう。</p>
  <p>質問は掲示板へどうぞ。</p>
  <template v-slot:header>
    <h3>ようこそVue.js</h3>
  </template>
  <template v-slot:footer>
    <span>WINGS</span>
  </template>
</my-slot>
<!--
  p171  スコープスロット
-->
<h2>スコープスロット</h2>
<my-book>
  <template v-slot:default="slotProp">
    @{{ slotProp.book.title }}(@{{ slotProp.book.price }}円)
  </template>
</my-book>
