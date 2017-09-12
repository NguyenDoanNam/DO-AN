<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::create('product_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_products')->unsigned();
            $table->foreign('id_products')->references('id')->on('products');
             $table->string('color',191)->nullable();
            $table->string('size',10)->nullable();
             $table->integer('quantity');
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
