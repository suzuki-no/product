@extends('layout')
@section('title', '商品リスト')
@section('pageCss')
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
@endsection
@section('pageJs')
<script src="{{ asset('js/modal.js')}}"></script>
@endsection
@section('content')
<h4>top/about/contact　のタブ切り替え時にそれぞれのcomponentで非同期処理でデータ取得してレンダリングする</h4>
<div id="modalapp">
</div>
@endsection
