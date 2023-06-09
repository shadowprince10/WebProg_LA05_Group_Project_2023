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
    public function up()
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->increments('courierID');
            $table->string('name');
            $table->decimal('rating', $precision = 1, $scale = 2);;
            $table->string('vehicleNumber');
            $table->unsignedBigInteger('shippingID');
            $table->foreign('shippingID')->references('shippingID')->on('shipping');
            $table->unsignedBigInteger('productID');
            $table->foreign('productID')->references('productID')->on('products');
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
        Schema::dropIfExists('couriers');
    }
};
