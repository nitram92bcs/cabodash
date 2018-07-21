<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreatePagoContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contrato_id')->unsigned()->nullable();
            $table->string('abonos');
            $table->decimal('total', 9, 2);
            $table->enum('status', ['pendiente', 'parcial', 'pagado'])->default('pendiente');
            $table->decimal('balance', 9, 2);
            $table->timestamp('created_at')->default(new Expression('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(new Expression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('contrato_id')->references('id')->on('contratos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_contratos');
    }
}
