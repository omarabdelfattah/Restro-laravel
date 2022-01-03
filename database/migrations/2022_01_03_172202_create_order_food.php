<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderFood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_food', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');

            
            $table->unsignedBigInteger('food_id');
            $table->foreign('food_id')->references('id')->on('food')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('quantity');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_food');
    }
}
