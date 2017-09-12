<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')->on('ec_users');
             $table->integer('id_payment')->unsigned();
            $table->foreign('id_payment')->references('id')->on('payment');
            $table->integer('id_shipper')->unsigned();
            $table->foreign('id_shipper')->references('id')->on('shipper');
            $table->dateTime('order_date');
            $table->dateTime('payment_date');
            $table->dateTime('ship_date');
             $table->text('address');
             $table->tinyInteger('status');

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
