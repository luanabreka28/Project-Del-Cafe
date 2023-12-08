<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListAlternatifeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_alternatife', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_list_food');
            $table->string('description');
            $table->foreign('id_list_food')->references('id')->on('list_food');
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
        Schema::dropIfExists('list_alternatife');
    }
}