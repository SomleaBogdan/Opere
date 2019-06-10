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
            $table->string('nr_matricol')->unique();
            $table->string('telefon')->unique();
            $table->integer('an_studiu');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
