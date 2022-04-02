<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpresorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            
        Schema::create('impresoras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('modelo');
            $table->string('marca');
            $table->text('Descripcion');
            $table->integer('precio');
            $table->integer('stock');
            $table->timestamps();
        });

        Schema::create('driver', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreDriver');
            $table->string('fechaLansamiento');
            $table->string('peso');
            $table->string('ruta');
            $table->string('sistemas');
            $table->unsignedBigInteger('impresorasId');
            $table->foreign('impresorasId')->references('id')->on('impresoras');
            $table->timestamps();
        });

        Schema::create('firmware', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firmware');
            $table->string('fechaLansamiento');
            $table->string('peso');
            $table->string('ruta');
            $table->double('presio');
            $table->unsignedBigInteger('impresoraId');
            $table->foreign('impresoraId')->references('id')->on('impresoras');
            $table->timestamps();
        });

        Schema::create('manualService', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreManual');
            $table->string('fechaLansamiento');
            $table->string('peso');
            $table->string('ruta');
            $table->double('presio');
            $table->unsignedBigInteger('impresoraId');
            $table->foreign('impresoraId')->references('id')->on('impresoras');
            $table->timestamps();
        });

        Schema::create('consumibles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('modelo');
            $table->string('marca');
            $table->string('descripcion');
            $table->double('presio');
            $table->string('stock');
            $table->string('rutaImg');
            $table->unsignedBigInteger('impresoraId');
            $table->foreign('impresoraId')->references('id')->on('impresoras');
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
        Schema::dropIfExists('consumibles');
        Schema::dropIfExists('manualService');
        Schema::dropIfExists('firmware');
        Schema::dropIfExists('driver');
        Schema::dropIfExists('impresoras');
    }
}
