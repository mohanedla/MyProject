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
            $table->string('model')->nullable();
            $table->string('specification');
            $table->string('collection');
            $table->integer('admin_id')->references('id')->on('users');
            $table->integer('brand_id')->references('id')->on('brands');
            $table->string('category');
            $table->integer('quantity');
            $table->float('price');
            $table->string('profile_image')->nullable();
            $table->string('all_images')->nullable();

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