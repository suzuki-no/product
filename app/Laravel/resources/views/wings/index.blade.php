@extends('layout')
@section('title', 'wingsプロジェクト サンプル実行')
@section('pageCss')
@endsection
@section('pageJs')
<script src="{{ asset('js/wings.js')}}"></script>
@endsection
@section('content')
<div class="p10">
<h1>これから始めるVue.js実践入門</h1>
<div id="wings-app">
  <div class="tab_container">
      <div class="tab_category">
        <a href="javascript:void(0)" v-on:click="tabSelect=217" v-bind:class='{select:tabSelect === 217}'>217</a>
        <a href="javascript:void(0)" v-on:click="tabSelect=223" v-bind:class='{select:tabSelect === 223}'>223</a>
        <a href="javascript:void(0)" v-on:click="tabSelect=226" v-bind:class='{select:tabSelect === 226}'>226</a>
        <a href="javascript:void(0)" v-on:click="tabSelect=37" v-bind:class='{select:tabSelect === 37}'>37</a>
        <a href="javascript:void(0)" v-on:click="tabSelect=317" v-bind:class='{select:tabSelect === 317}'>317</a>
        <a href="javascript:void(0)" v-on:click="tabSelect=341" v-bind:class='{select:tabSelect === 341}'>341</a>
        <a href="javascript:void(0)" v-on:click="tabSelect=350" v-bind:class='{select:tabSelect === 350}'>350</a>
        <a href="javascript:void(0)" v-on:click="tabSelect=366" v-bind:class='{select:tabSelect === 366}'>366</a>
        <a href="javascript:void(0)" v-on:click="tabSelect=393" v-bind:class='{select:tabSelect === 393}'>393</a>
      </div>
      <div class="tab_content">
        <div v-show="tabSelect === 217" class="fwB">@include('wings.list.2-17')</div>
        <div v-show="tabSelect === 223" class="fwB">@include('wings.list.2-23')</div>
        <div v-show="tabSelect === 226" class="fwB">@include('wings.list.2-26')</div>
        <div v-show="tabSelect === 37" class="fwB">@include('wings.list.3-7')</div>
        <div v-show="tabSelect === 317" class="fwB">@include('wings.list.3-17')</div>
        <div v-show="tabSelect === 341" class="fwB">@include('wings.list.3-41')</div>
        <div v-show="tabSelect === 350" class="fwB">@include('wings.list.3-50')</div>
        <div v-show="tabSelect === 366" class="fwB">@include('wings.list.3-66')</div>
        <div v-show="tabSelect === 393" class="fwB">@include('wings.list.3-93')</div>
      </div>
  </div>
</div>
@endsection
