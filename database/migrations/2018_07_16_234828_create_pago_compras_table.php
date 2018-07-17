<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreatePagoComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_compras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('notas_compras');
            $table->enum('metodo_pago', ['TRANS. ELEC.', 'CHECK', 'EFECTIVO', 'TD', 'TC'])->default('TRANS. ELEC.');
            $table->string('cuenta_pago');
            $table->string('referencia_pago');
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
        Schema::dropIfExists('pago_compras');
    }
}
