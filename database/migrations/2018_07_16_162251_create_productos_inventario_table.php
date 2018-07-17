<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreateProductosInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_inventario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('concepto');
            $table->enum('unidad',['Kg','Pieza','Caja','Saco G','Saco C','Paca','lote','Granel']);
            $table->decimal('monto', 9, 2);
            $table->decimal('cantidad', 9, 2);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->default(new Expression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_inventario');
    }
}
