<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_food', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_list_day');
            $table->string('name_food');
            $table->string('description');
            $table->string('image');
            $table->string('image_background');
            $table->string('price');
            $table->time('start');
            $table->time('end');
            $table->timestamps();
            $table->foreign('id_list_day')->references('id')->on('list_day');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_food');
    }
}