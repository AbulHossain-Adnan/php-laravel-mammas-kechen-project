<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIteemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iteems', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('catugory_id');
          $table->string('name');
          $table->string('title');
          $table->integer('price');
           $table->foreign('catugory_id')->references('id')->on('catugoris');
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
        Schema::dropIfExists('iteems');
    }
}
