@extends('layout')
@section('title', '商品詳細')
@section('pageCss')
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
@endsection
@section('pageJs')
<script src="{{ asset('js/item.js')}}"></script>
@endsection
@section('content')
<div id="header-navi">
  <div class="anchor_navi py10">
    <a href="/items/" class="_tag">Items</a>
    <a href="javascript:void(0)" class="_tag _current">Items details</a>
  </div>
</div>
<div id="item-app">
    <div class="item_container">
      <div class="item_table">
        <div class="_row _name _sepa">{{ $item->item_name }}</div>
        <div class="_row _desc _sepa">{{ $item->item_description }}</div>
        <div class="_thumbnail">
          <img src="{{ asset($item->item_image) }}" data-id="{{ $item->item_id }}" class="db"/>
        </div>
        <div class="_row _price _sepa">{{ $sell_price_intax }}</div>
        <div class="_row _stock _sepa">{{ $stock->current_count }}</div>
      </div>
    </div>
</div>
<div class="fsr0">
@json($stock)
</div>
@endsection
