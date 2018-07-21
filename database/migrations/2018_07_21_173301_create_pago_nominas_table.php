<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreatePagoNominasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_nominas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomina_id')->unsigned()->nullable();
            $table->decimal('factor_trabajo', 3, 2);
            $table->decimal('total', 9, 2);
            $table->timestamp('created_at')->default(new Expression('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(new Expression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('nomina_id')->references('id')->on('nomina_empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_nominas');
    }
}
