<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreatePagoVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('notas_ventas');
            $table->enum('metodo_pago', ['TRANS. ELEC.', 'CHECK', 'EFECTIVO', 'TD', 'TC'])->default('TRANS. ELEC.');
            $table->string('cuenta_pago');
            $table->string('referencia_pago');
            $table->timestamp('created_at')->default(new Expression('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('pago_ventas');
    }
}
