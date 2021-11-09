<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employe_id');
            $table->unsignedBigInteger('suplier_id');
            $table->date('date');
            $table->decimal('total',$precision=8,$scale=2);
            $table->timestamps();

            $table->foreign('employe_id')->references('id')->on('employes')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('suplier_id')->references('id')->on('supliers')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buys');
    }
}
