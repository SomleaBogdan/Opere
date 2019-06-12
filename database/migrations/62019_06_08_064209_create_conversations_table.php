<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titlu_mesaj');
            $table->boolean('citit');
            $table->bigInteger('id_expeditor')->unsigned();
            $table->bigInteger('id_destinatar')->unsigned();
            $table->timestamps();
        });

        Schema::table('conversations', function($table) {
            $table->foreign('id_expeditor')->references('id')->on('users');
            $table->foreign('id_destinatar')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversations');
    }
}
