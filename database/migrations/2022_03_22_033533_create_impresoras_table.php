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
            $table->string('modelo',50);
            $table->string('marca',50);
            $table->string('img',255);
            $table->text('Descripcion');
            $table->double('precio', $precision = 9, $scale = 2);
            $table->integer('stock');
            $table->timestamps();
        });

        Schema::create('consumibles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('modelo',50);
            $table->string('marca',50);
            $table->string('img',255);
            $table->string('descripcion');
            $table->double('presio',$precision = 9, $scale = 2);
            $table->string('stock');
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
        Schema::dropIfExists('impresoras');
    }
}
