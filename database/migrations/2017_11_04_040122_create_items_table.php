<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->integer('color_id');
            $table->integer('size_id');
            $table->integer('unit_id');
            $table->string('item_name');
            $table->string('item_code');
            $table->string('minimum_stock_amount');
            $table->float('purchase_cost',10,2);
            $table->float('vat',10,2);
            $table->float('other_cost',10,2);
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
