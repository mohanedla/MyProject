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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('serial');
            $table->string('name');
            $table->string('model');
            $table->string('brand')->nullable();
            $table->string('specification');
            $table->integer('admin_id')->references('id')->on('users');
            $table->integer('quantity');
            $table->string('size');
            $table->string('color');
            $table->float('price');
            $table->string('profile_image')->nullable();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('admins')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};