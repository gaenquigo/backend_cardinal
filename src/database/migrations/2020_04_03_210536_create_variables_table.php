<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variables', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('category_name')->nullable()->comment('Nombre categoria');
            $table->boolean('phase_have')->nullable()->comment('Tiene fases');
            $table->string('category_weighing')->nullable()->comment('ponderación categoria');
            $table->string('numerator_name')->nullable()->comment('nombre numerador');
            $table->string('abbreviated_numerator')->nullable()->comment('nombre abreviado numerador');
            $table->unsignedBigInteger('numerator_in')->unsigned()->nullable()->comment('Numerador solicitud');
            $table->foreign('numerator_in')->references('id')->on('domains');
            $table->string('denominator_name')->nullable()->comment('Nombre denominador');
            $table->string('abbreviated_denominator')->nullable()->comment('Nombre abreviado denominador');
            $table->unsignedBigInteger('denominator_in')->unsigned()->nullable()->comment('Denominador solicitud');
            $table->foreign('denominator_in')->references('id')->on('domains');
            $table->string('name_weighing')->nullable()->comment('Nombre ponderador');
            $table->string('abbreviated_weighing')->nullable()->comment('Nombre ponderador abreviado');
            $table->unsignedBigInteger('weighing_in')->unsigned()->nullable()->comment('Ponderador solicitud');
            $table->foreign('weighing_in')->references('id')->on('domains');
            $table->unsignedBigInteger('indicator_id')->unsigned()->comment('Código indicador');
            $table->foreign('indicator_id')->references('id')->on('indicators');
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
        Schema::dropIfExists('variables');
    }
}
