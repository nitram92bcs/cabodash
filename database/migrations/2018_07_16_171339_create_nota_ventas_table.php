<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreateNotaVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned()->default(1);
            $table->string('ventas');
            $table->decimal('subtotal', 9, 2);
            $table->decimal('descuento', 3, 2)->default('0.00');
            $table->decimal('total', 9, 2);
            $table->enum('status', ['pendiente', 'parcial', 'pagado'])->default('pendiente');
            $table->decimal('balance', 9, 2);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->default(new Expression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_ventas');
    }
}
