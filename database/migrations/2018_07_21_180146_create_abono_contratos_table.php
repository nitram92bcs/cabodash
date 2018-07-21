<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreateAbonoContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abono_contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contrato_id')->unsigned();
            $table->decimal('abono', 9, 2);
            $table->string('comentarios');
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
        Schema::dropIfExists('abono_contratos');
    }
}
