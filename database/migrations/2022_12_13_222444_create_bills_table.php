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
            $table->integer('admin_id')->references('id')->on('users');
            $table->string('name');
            $table->string('quantity');
            $table->string('Unit_Price');
            $table->string('Total');
            $table->string('Unit_Price_DL');
            $table->string('Total_DL');
            $table->float('Totals');
            $table->float('Totals_Dl');
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