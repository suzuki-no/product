@extends('layout')
@section('title', 'Vanilla JS')
@section('pageCss')
@endsection
@section('pageJs')
<script src="{{ asset('js/vanilla.utils.js') }}"></script>
<script src="{{ asset('js/vanilla.min.js') }}"></script>
@endsection
@section('content')
<h4>画面遷移後AJAXでデータを取得してレンダリングする基本的な処理</h4>
<p>ナビメニューもvanilla用にjsを用意</p>
<div id="vanilla-app">
    <div id="contents">
    </div>
</div>
@endsection
