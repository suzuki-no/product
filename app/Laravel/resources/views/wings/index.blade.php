@extends('layout')
@section('title', 'wingsプロジェクト サンプル実行')
@section('pageCss')
{{--<link rel="stylesheet" href="{{ asset('https://unpkg.com/element-ui/lib/theme-chalk/index.css')}}"></link>--}}
@endsection
@section('pageJs')
<script src="{{ asset('js/wings.js')}}"></script>
<script src="{{ asset('js/velocity.min.js')}}"></script>
{{--<script src="{{ asset('https://unpkg.com/element-ui/lib/index.js')}}"></script>--}}
@endsection
@section('content')
<div class="p10">
<h1>これから始めるVue.js実践入門</h1>
<div id="wings-app">
  <div class="tab_container">
      <div class="tab_category">
        <a href="javascript:void(0)" v-on:click="category=1" v-bind:class='{select:category === 1}'>list</a>
        <a href="javascript:void(0)" v-on:click="category=2" v-bind:class='{select:category === 2}'>comp</a>
        <a href="javascript:void(0)" v-on:click="category=3" v-bind:class='{select:category === 3}'>parts</a>
        <a href="javascript:void(0)" v-on:click="category=4" v-bind:class='{select:category === 4}'>router</a>
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
                <a href="javascript:void(0)" v-on:click="compSelect=47" v-bind:class='{select:compSelect === 47}'>47</a>
                <a href="javascript:void(0)" v-on:click="compSelect=419" v-bind:class='{select:compSelect === 419}'>419</a>
                <a href="javascript:void(0)" v-on:click="compSelect=51" v-bind:class='{select:compSelect === 51}'>51</a>
                <a href="javascript:void(0)" v-on:click="compSelect=511" v-bind:class='{select:compSelect === 511}'>511</a>
                <a href="javascript:void(0)" v-on:click="compSelect=533" v-bind:class='{select:compSelect === 533}'>533</a>
              </div>
              <div class="tab_content">
                <div v-show="compSelect === 42" class="fwB">@include('wings.comp.4-2')</div>
                <div v-show="compSelect === 47" class="fwB">@include('wings.comp.4-7')</div>
                <div v-show="compSelect === 419" class="fwB">@include('wings.comp.4-19')</div>
                <div v-show="compSelect === 51" class="fwB">@include('wings.comp.5-1')</div>
                <div v-show="compSelect === 511" class="fwB">@include('wings.comp.5-11')</div>
                <div v-show="compSelect === 533" class="fwB">@include('wings.comp.5-33')</div>
              </div>
          </div>
        </div>
        <div v-show="category === 3" class="fwB">
          <div class="tab_container">
              <div class="tab_category">
                <a href="javascript:void(0)" v-on:click="partsSelect=61" v-bind:class='{select:partsSelect === 61}'>61</a>
              </div>
              <div class="tab_content">
                <div v-show="partsSelect === 61" class="fwB">@include('wings.parts.6-1')</div>
              </div>
          </div>
        </div>
        {{--
        <div v-show="category === 4" class="fwB">
          <div class="tab_container">
              <div class="tab_category">
                <a href="javascript:void(0)" v-on:click="partsSelect=82" v-bind:class='{select:partsSelect === 82}'>82</a>
              </div>
              <div class="tab_content">
                <div v-show="partsSelect === 82" class="fwB">@include('wings.router.8-2')</div>
              </div>
          </div>
        </div>
        --}}
      </div>
  </div>

</div>
@endsection
