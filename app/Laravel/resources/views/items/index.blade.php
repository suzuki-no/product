@extends('layout')
@section('title', '商品リスト')
@section('pageCss')
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
@endsection
@section('pageJs')
<script src="{{ asset('js/item.js')}}"></script>
@endsection
@section('content')
<div id="item-app">
    <div class="col_redo fsL b my5">1:<span>@{{operation_log}}</span></div>
    <div class="col_redo fsL b my5">2:<span v-text="operation_log"></span></div>
    <div class="col_redo fsL b my5">3:<span v-html="operation_log"></span></div>
    <item-heading class="col_redo fsL b my5"></item-heading>
    <div class="item_container">
      <div class="item_list">
        <div v-for="item in items" v-bind:key="item.item_id" class="item_tray">
            <div v-text="item.item_name"></div>
            <div class="_thumbnail" :itshde="item.item_short_depiction">
              <img :src="item.item_thumbnail" v-on:click.self="thumbnail" data-v-thum :data-id="item.item_id"/>
            </div>
        </div>
      </div>

      <div class="item_table">
        <table>
            <thead>
              <th>item Id</th><th>item Name</th>
            </thead>
            <tbody>
              @foreach ($items as $item)
              <tr>
                  <td>
                    <div>{{ $item->item_id }}</div>
                  </td>
                  <td>
                      <div>{{ $item->item_name }}</div>
                  </td>
              </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
