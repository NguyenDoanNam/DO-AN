<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
            $table->integer('id_brand')->unsigned();
            $table->foreign('id_brand')->references('id')->on('brand');
            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('category');
            $table->text('desciption')->nullable();
            $table->integer('quantity');
            $table->integer('price_unit');
            $table->integer('discount');
            $table->integer('ranking');
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
        Schema::dropIfExists('users');
    }
}
