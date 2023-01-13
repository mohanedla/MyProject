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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->references('id')->on('orders');
            $table->integer('product_id')->references('id')->on('products');
            $table->integer('color_id')->references('id')->on('colors');
            $table->integer('size_id')->references('id')->on('sizes');
            $table->string('name');
            $table->integer('quantity');
            $table->string('profile_image')->nullable();
            $table->float('price');
            $table->float('total');
            $table->float('price_dl');
            $table->float('total_dl');
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
        Schema::dropIfExists('bills');
    }
};
