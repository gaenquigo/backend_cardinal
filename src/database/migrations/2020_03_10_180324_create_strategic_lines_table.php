<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategicLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategic_lines', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('name')->comment('Nombre Linea Estrategica');
            $table->smallInteger('weighing')->comment('Ponderación');
            $table->unsignedBigInteger('p_a_i_id')->comment('Código PAI');
            $table->foreign('p_a_i_id')->references('id')->on('pais');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('strategic_lines');
    }
}
