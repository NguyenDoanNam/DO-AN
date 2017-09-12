<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImportProductDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('import_product_details', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('id_import_products')->unsigned();
            $table->foreign('id_import_products')->references('id')->on('import_products');
            $table->integer('id_product_details')->unsigned();
            $table->foreign('id_product_details')->references('id')->on('product_details');
             $table->integer('quantity');
              $table->integer('price_import');
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
