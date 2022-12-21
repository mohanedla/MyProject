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
            $table->string('profile_image')->nullable();
            $table->string('name');
            $table->integer('quantity');
            $table->float('Unit_Price');
            $table->float('Total_$');
            $table->float('Unit_Price');
            $table->float('Total_DL');


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
