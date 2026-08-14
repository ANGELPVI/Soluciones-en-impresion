<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLineItemFieldsToCarritoTable extends Migration
{
    public function up()
    {
        Schema::table('carrito', function (Blueprint $table) {
            if (!Schema::hasColumn('carrito', 'product_type')) {
                $table->string('product_type', 30)->nullable()->after('userId');
            }

            if (!Schema::hasColumn('carrito', 'product_id')) {
                $table->unsignedBigInteger('product_id')->nullable()->after('product_type');
            }

            if (!Schema::hasColumn('carrito', 'titulo')) {
                $table->string('titulo', 180)->nullable()->after('product_id');
            }

            if (!Schema::hasColumn('carrito', 'imagen')) {
                $table->string('imagen', 500)->nullable()->after('titulo');
            }

            if (!Schema::hasColumn('carrito', 'precio_unitario')) {
                $table->decimal('precio_unitario', 12, 2)->nullable()->after('cantidad');
            }

            if (!Schema::hasColumn('carrito', 'created_at')) {
                $table->timestamps();
            }
        });
    }

    public function down()
    {
        Schema::table('carrito', function (Blueprint $table) {
            if (Schema::hasColumn('carrito', 'precio_unitario')) {
                $table->dropColumn('precio_unitario');
            }

            if (Schema::hasColumn('carrito', 'imagen')) {
                $table->dropColumn('imagen');
            }

            if (Schema::hasColumn('carrito', 'titulo')) {
                $table->dropColumn('titulo');
            }

            if (Schema::hasColumn('carrito', 'product_id')) {
                $table->dropColumn('product_id');
            }

            if (Schema::hasColumn('carrito', 'product_type')) {
                $table->dropColumn('product_type');
            }

            if (Schema::hasColumn('carrito', 'created_at')) {
                $table->dropTimestamps();
            }
        });
    }
}
