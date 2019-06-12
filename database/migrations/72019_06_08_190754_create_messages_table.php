<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titlu_mesaj');
            $table->string('continut_mesaj');
            $table->bigInteger('id_conversatie')->unsigned();
            $table->bigInteger('id_expeditor')->unsigned();
            $table->timestamps();
        });

        Schema::table('messages', function($table) {
            $table->foreign('id_conversatie')->references('id')->on('conversations');
            $table->foreign('id_expeditor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
