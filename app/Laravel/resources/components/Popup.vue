<!--
  popup template
-->
<template>
  <div>
    <transition name="modal_window" appear>
      <div class="modal_window _outer" v-show="showModal" v-on:click.self="closeAction">
        <div class="modal_window _inner">
          <div>
            <p>モーダルサンプルです。</p>
            <p v-text="item.item_name"></p>
            <p v-text="item.item_description"></p>
          </div>
          <div>
            <a class="close" href="javascript:void(0)" v-on:click.self="closeAction">×</a>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>
