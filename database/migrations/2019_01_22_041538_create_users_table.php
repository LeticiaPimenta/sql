<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('initial_role')->nullable();
            $table->string('profile_img')->nullable();
            $table->text('initial_message')->nullable();
            $table->text('raw_login_info')->nullable();
            $table->text('access_token')->nullable();
            $table->text('expiration_time')->nullable();
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}
