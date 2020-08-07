<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->primary('item_id')->comment('商品ID');
            $table->char('item_kind')->comment('商品種別');
            $table->char('item_tag')->comment('商品目印');
            $table->string('item_name')->comment('商品名');
            $table->string('item_image')->comment('商品展示画像');
            $table->string('item_thumbnail')->comment('商品サムネイル画像');
            $table->string('item_description')->comment('商品説明展示画像用');
            $table->string('item_short_depiction')->comment('商品説明サムネイル用');
            $table->unsignedInteger('sell_price')->comment('商品単価税抜き');
            $table->char('sell_discount')->comment('商品値引きタイプ');
            $table->char('sell_status')->comment('商品販売状態');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
