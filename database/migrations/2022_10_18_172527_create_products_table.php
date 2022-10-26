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
            $table->string('model');
            $table->string('specification');
            $table->string('collection');
            $table->integer('admin_id')->references('id')->on('users');
            $table->integer('brand_id')->references('id')->on('brands');
            $table->integer('category_id')->references('id')->on('categories');
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