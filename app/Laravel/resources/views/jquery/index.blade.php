@extends('layout')
@section('title', 'jQuery試験')
@section('pageCss')
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
@endsection
@section('pageJs')
<script src="https://cdn.jsdelivr.net/gh/jquery/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/underscore@1.9.1/underscore.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/backbone@1.4.0/backbone.min.js"></script>
<script src="{{ asset('js/jquery.utils.js') }}"></script>
<script src="{{ asset('js/jquery.main.js') }}"></script>
@endsection
@section('content')
<div id="jquery-app">
    <div id="contents">
    </div>
</div>
@endsection
