<?php

use Illuminate\Support\Facades\Schema;
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

        /* 'nume', 'prenume', 'email', 'password', 'nr_matricol', 'an_studiu', 'telefon' */
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nume');
            $table->string('prenume');
            $table->string('email')->unique();
            $table->string('nr_matricol');
            $table->string('telefon');
            $table->integer('an_studiu');
            $table->string('password');
            $table->string('imagine_profil')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('id_cart')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('users', function($table) {
            $table->foreign('id_cart')->references('id')->on('carts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
