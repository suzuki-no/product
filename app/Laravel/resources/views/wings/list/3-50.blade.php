<!--
  p93 配列処理
-->
<h4>配列処理</h4>
<div class="3_50">
  <table class="table" v-if="expensiveBooks.length">
    <th>No</th><th>ISBN</th><th>書名</th><th>価格</th>
    <tr v-for="(value, i) of expensiveBooks">
      <td class="px10">@{{ i+1 }}</td>
      <td class="px10">@{{ value.isbn }}</td>
      <td class="px10">@{{ value.title }}</td>
      <td class="px10">@{{ value.price }}</td>
    </tr>
  </table>
  <div v-else>商品がありません</div>
</div>
<div class="3_60">
  <template v-for="value of list360.songs">
    <header>@{{ value.title }}</header>
    <div>@{{ value.lyrics }}</div>
    <footer>@{{ value.composer }}作曲</footer>
  </template>
</div>
<div class="3_62">
  <form>
    <input type="button" value="変更"v-on:click="onclick"/>
  </form>
  <ul>
    <li v-for="item of list362.list" v-bind:key="item">@{{ item }}</li>
  </ul>
</div>
