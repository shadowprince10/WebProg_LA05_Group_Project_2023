<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     // in Laravel, the table can't have multiple primary keys
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('orderDetailsID');
            $table->integer('price');
            $table->decimal('disc', 10, 2); // 10 means there are 10 digits in total, including both digits before and after the decimal point and 2 means the numbers behind the decimal point are precised up to 2 decimal places
            $table->integer('orderQuantity');
            $table->unsignedBigInteger('orderID');
            $table->foreign('orderID')->references('orderID')->on('orders');
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
        Schema::dropIfExists('order_details');
    }
};
