<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_item_stock', function (Blueprint $table) {

            $table->primary('item_id')->comment('商品ID');
            $table->primary('put_slot')->comment('入荷スロット');
            $table->timestamps('put_date')->comment('入荷日（予定）');
            $table->unsignedInteger('put_count')->comment('入荷数（予定）');
            $table->string('put_description')->comment('入荷説明');
            $table->unsignedInteger('current_count')->comment('現在の在庫数');
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
        Schema::dropIfExists('t_item_stock');
    }
}
