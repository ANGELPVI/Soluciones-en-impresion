<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosOficinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('productos_oficina', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nombre', 100);
        $table->string('marca', 50);
        $table->string('categoria', 50);
        $table->string('img', 255);
        $table->text('descripcion');
        $table->double('precio', 9, 2);
        $table->integer('stock');
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
        Schema::dropIfExists('productos_oficina');
    }
}
