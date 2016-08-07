<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CSetting extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 255);
            $table->string('name', 255);
            $table->text('value');
            $table->string('type', 255);
            $table->string('order', 255);
            $table->string('description', 255);
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
        Schema::drop('c_setting');
    }

}
