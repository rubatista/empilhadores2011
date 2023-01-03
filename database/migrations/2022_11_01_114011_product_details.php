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
        Schema::create('product_details', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->bigInteger('product_id');
            $table->string('condition')->nullable();
            $table->string('hours')->nullable();
            $table->string('fuel')->nullable();
            $table->string('brand')->nullable();
            $table->string('rated_capacity')->nullable();
            $table->string('lifting_height')->nullable();
            $table->string('color')->nullable();
            $table->string('options')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_details');
    }
};
