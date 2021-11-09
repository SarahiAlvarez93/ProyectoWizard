<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buy_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->String('name',40);
            $table->decimal('price',$precision=8,$scale=2);
            $table->decimal('subtotal',$precision=8,$scale=2);
            $table->timestamps();

            $table->foreign('buy_id')->references('id')->on('buys')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('product_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_product');
    }
}
