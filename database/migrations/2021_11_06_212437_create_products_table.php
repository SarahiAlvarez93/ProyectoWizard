<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->String('name',30);
            $table->decimal('price',$precision=8,$scale=2);
            $table->String('brand',40);
            $table->String('gender',20);
            $table->String('categorie',20);
            $table->String('description',200);
            $table->integer('stock');
            $table->integer('stock_min');
            $table->integer('stock_max');
            $table->String('image1',20);
            $table->String('image2',20);
            $table->String('image3',20);
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
        Schema::dropIfExists('products');
    }
}
