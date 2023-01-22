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
        Schema::create('carts', function (Blueprint $table) 
        {
            $table->id();
            $table->integer('product_id');
            $table->integer('user_id');
            $table->integer('color_id');
            $table->integer('size_id')->nullable();
            $table->string('image')->nullable();
            $table->string('name');
            $table->integer('qty');
            $table->float('price')->nullable();
            $table->float('Total_$')->nullable();
            $table->float('Unit_Price_DL')->nullable();
            $table->float('Total_DL')->nullable();


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
        Schema::dropIfExists('carts');
    }
};
