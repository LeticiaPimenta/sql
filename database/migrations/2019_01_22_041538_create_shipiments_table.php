<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipimentsTable extends Migration
{

    public function up()
    {
        Schema::create('shipiments', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('origin_country')->nullable();
            $table->text('origin_city')->nullable();
            $table->text('destiny_country')->nullable();
            $table->text('destiny_city')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('shipiments');
    }
}
