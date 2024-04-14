<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->string('email',150)->unique();
            $table->string('password');
            $table->string('telefono',20)->unique();
            $table->string('estado',100);
            $table->string('ciudad',100);
            $table->integer('cp');
            $table->string('colonia',100);
            $table->string('calle',100);
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
