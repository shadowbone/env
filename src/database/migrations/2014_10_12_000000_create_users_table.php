<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_users', function (Blueprint $table) {
            $table->string('id', 32);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('user_name');
            $table->string('password', 60);
            $table->string('facebook_id', 16);
            $table->boolean('status');
            $table->rememberToken();
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
        Schema::drop('users');
    }

}
