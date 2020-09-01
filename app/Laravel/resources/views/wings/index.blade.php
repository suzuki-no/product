@extends('layout')
@section('title', 'wingsプロジェクト サンプル実行')
@section('pageCss')
@endsection
@section('pageJs')
<script src="{{ asset('js/wings.js')}}"></script>
@endsection
@section('content')
<div class="p10">
<h2>これから始めるVue.js実践入門</h2>
<div id="wings-app">
    @include('wings.list.2-17')
    @include('wings.list.2-23')
    @include('wings.list.2-26')
    @include('wings.list.3-7')
    @include('wings.list.3-17')
</div>
@endsection
