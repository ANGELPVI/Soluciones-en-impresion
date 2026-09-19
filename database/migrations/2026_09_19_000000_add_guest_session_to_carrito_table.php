<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddGuestSessionToCarritoTable extends Migration
{
    public function up()
    {
        Schema::table('carrito', function (Blueprint $table) {
            $table->string('session_id', 100)->nullable()->after('userId')->index();
        });

        // MySQL permite que una columna con llave foránea sea nullable.
        // Usamos SQL directo para no requerir doctrine/dbal solo por este cambio.
        DB::statement('ALTER TABLE `carrito` MODIFY `userId` BIGINT UNSIGNED NULL');
    }

    public function down()
    {
        DB::statement('ALTER TABLE `carrito` MODIFY `userId` BIGINT UNSIGNED NOT NULL');

        Schema::table('carrito', function (Blueprint $table) {
            $table->dropColumn('session_id');
        });
    }
}
