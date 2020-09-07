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
        <a href="javascript:void(0)" v-on:click="category=1" v-bind:class='{select:category === 1}'>list</a>
        <a href="javascript:void(0)" v-on:click="category=2" v-bind:class='{select:category === 2}'>comp</a>
      </div>
      <div class="tab_content">
        <div v-show="category === 1" class="fwB">
          <div class="tab_container">
              <div class="tab_category">
                <a href="javascript:void(0)" v-on:click="listelect=217" v-bind:class='{select:listelect === 217}'>217</a>
                <a href="javascript:void(0)" v-on:click="listelect=223" v-bind:class='{select:listelect === 223}'>223</a>
                <a href="javascript:void(0)" v-on:click="listelect=226" v-bind:class='{select:listelect === 226}'>226</a>
                <a href="javascript:void(0)" v-on:click="listelect=37" v-bind:class='{select:listelect === 37}'>37</a>
                <a href="javascript:void(0)" v-on:click="listelect=317" v-bind:class='{select:listelect === 317}'>317</a>
                <a href="javascript:void(0)" v-on:click="listelect=341" v-bind:class='{select:listelect === 341}'>341</a>
                <a href="javascript:void(0)" v-on:click="listelect=350" v-bind:class='{select:listelect === 350}'>350</a>
                <a href="javascript:void(0)" v-on:click="listelect=366" v-bind:class='{select:listelect === 366}'>366</a>
                <a href="javascript:void(0)" v-on:click="listelect=393" v-bind:class='{select:listelect === 393}'>393</a>
              </div>
              <div class="tab_content">
                <div v-show="listelect === 217" class="fwB">@include('wings.list.2-17')</div>
                <div v-show="listelect === 223" class="fwB">@include('wings.list.2-23')</div>
                <div v-show="listelect === 226" class="fwB">@include('wings.list.2-26')</div>
                <div v-show="listelect === 37" class="fwB">@include('wings.list.3-7')</div>
                <div v-show="listelect === 317" class="fwB">@include('wings.list.3-17')</div>
                <div v-show="listelect === 341" class="fwB">@include('wings.list.3-41')</div>
                <div v-show="listelect === 350" class="fwB">@include('wings.list.3-50')</div>
                <div v-show="listelect === 366" class="fwB">@include('wings.list.3-66')</div>
                <div v-show="listelect === 393" class="fwB">@include('wings.list.3-93')</div>
              </div>
          </div>
        </div>
        <div v-show="category === 2" class="fwB">
          <div class="tab_container">
              <div class="tab_category">
                <a href="javascript:void(0)" v-on:click="compSelect=42" v-bind:class='{select:compSelect === 42}'>42</a>
              </div>
              <div class="tab_content">
                <div v-show="compSelect === 42" class="fwB">@include('wings.comp.4-2')</div>
              </div>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
