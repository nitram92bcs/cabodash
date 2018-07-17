<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;

class CreateAlimentoYMortalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimento_y_mortalidad', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('remesa_id')->unsigned();
            $table->decimal('cantidad', 9, 2);
            $table->enum('tipo', ['alimento', 'mortalidad']);
            $table->enum('tipo_alimento',['PI','PE'])->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->default(new Expression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('remesa_id')->references('id')->on('remesas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimento_y_mortalidad');
    }
}
