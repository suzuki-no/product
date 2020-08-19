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
    <div id="tab-app" class="tab_container" v-pre>
        <div class="tab_category">
          <a href="javascript:void(0)" v-on:click="tabSelect=1" v-bind:class="[tabSelect === 1 ? 'select' : '']">タブ１</a>
          <a href="javascript:void(0)" v-on:click="tabSelect=2" v-bind:class="[tabSelect === 2 ? 'select' : '']">タブ２</a>
        </div>
        <div class="tab_content">
          <div v-show="tabSelect === 1" class="">tab-app1</div>
          <div v-show="tabSelect === 2" class="">tab-app2</div>
        </div>
    </div>
    <div class="tab_container">
        <div class="tab_category">
          <a href="javascript:void(0)" v-on:click="tabSelect=1" v-bind:class="[tabSelect === 1 ? 'select' : '']">タブ１</a>
          <a href="javascript:void(0)" v-on:click="tabSelect=2" v-bind:class="[tabSelect === 2 ? 'select' : '']">タブ２</a>
          <a href="javascript:void(0)" v-on:click="tabSelect=3" v-bind:class="[tabSelect === 3 ? 'select' : '']">タブ３</a>
        </div>
        <div class="tab_content">
          <div v-show="tabSelect === 1" class="fwb">コンテンツ１</div>
          <div v-show="tabSelect === 2" class="fwb">コンテンツ２</div>
          <div v-show="tabSelect === 3" class="fwb">コンテンツ３</div>
        </div>
    </div>

    <div class="item_container">
      <div v-show="tabSelect === 1" class="item_list">
        <div v-for="item in items" v-bind:key="item.item_id" class="item_tray">
            <div v-text="item.item_name"></div>
            <div class="_thumbnail" :itshde="item.item_short_depiction">
              <a href="javascript:void(0)" v-on:click="thumbnail(item.item_id)">
                <img :src="item.item_thumbnail" data-v-thum :data-id="item.item_id" />
              </a>
            </div>
            <button type="button" v-on:click="showModal=!showModal" :data-item-name="item.item_name" :data-item-desc="item.item_description">詳細
            </button>
            <button type="button" v-on:click="showAction(item)">詳細
            </button>
        </div>
      </div>
      <div v-show="tabSelect === 2" class="item_list">
        <div v-for="item in items" v-bind:key="item.item_id" class="item_tray">
            <div v-text="item.item_name"></div>
            <div class="_thumbnail" :itshde="item.item_short_depiction">
              <img :src="item.item_thumbnail" v-on:click.self="thumbnail" data-v-thum :data-id="item.item_id"/>
            </div>
        </div>
      </div>
      <div v-show="tabSelect === 3" class="item_list">
        <div v-for="item in items" v-bind:key="item.item_id" class="item_tray">
            <div v-text="item.item_name"></div>
            <div class="_thumbnail" :itshde="item.item_short_depiction">
              <img :src="item.item_thumbnail" v-on:click.self="thumbnail" data-v-thum :data-id="item.item_id"/>
            </div>
        </div>
      </div>
      <div v-text="popupItemName"></div>
      <div v-text="popupItemDesc"></div>
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
    {{--
    <template>
      <div>
        <transition name="modal_window">
          <div class="modal_window _outer" v-if='showModal'>
            <div class="modal_window _inner">
              <p>モーダルサンプルです。</p>
              <a class="close" href="#" v-on:click='click01'>×</a>
            </div>
          </div>
        </transition>
      </div>
    </template>
    --}}
    <Popup id="popup-templ"></Popup>
    {{--
      <div id="popup-templ">
        <transition name="modal_window" appear>
        <div class="modal_window _outer" v-show="showModal" v-on:click.self="closeModal">
          <div class="modal_window _inner">
            <div>
              <p>モーダルサンプルです。</p>
              <p id="set-text"></p>
              <p v-text="popupItemName"></p>
            </div>
            <a class="close" href="javascript:void(0)" v-on:click.self="closeModal">×</a>
          </div>
        </div>
      </transition>
    </div>
    --}}
</div>
@endsection
