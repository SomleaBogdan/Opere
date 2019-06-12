<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nume_produs');
            $table->string('descriere_produs');
            $table->string('imagine_produs');
            $table->double('pret_produs');
            $table->bigInteger('owner_id')->unsigned();

            $table->timestamps();
        });
    
        Schema::table('announces', function($table) {
            $table->foreign('owner_id')->references('id')->on('users');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('announces');
    }
}
