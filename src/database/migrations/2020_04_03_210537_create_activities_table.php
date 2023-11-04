<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->unsignedBigInteger('objective_id')->comment('Código Objetivo');
            $table->unsignedBigInteger('product_id')->nullable()->comment('Código producto-objetivo');
            $table->longText('name')->comment('Nombre Actividad');
            $table->float('goal')->nullable()->comment('Meta total');
            $table->float('goal_1')->nullable()->comment('Meta año 1');
            $table->float('goal_2')->nullable()->comment('Meta año 2');
            $table->float('goal_3')->nullable()->comment('Meta año 3');
            $table->float('goal_4')->nullable()->comment('Meta año 4');
            $table->unsignedBigInteger('ocde_category_id')->nullable()->comment('Código OCDE');
            $table->unsignedBigInteger('ocde_indicator_id')->nullable()->comment('Categoria OCDE');
            $table->integer('weighing')->comment('Ponderación');
            $table->string('answer_sentence')->nullable()->comment('Respuesta sentencia');
            $table->integer('geometry')->nullable()->comment('Geometria geo');
            $table->timestamps();
            $table->foreign('objective_id')->references('id')->on('objectives');
            $table->foreign('ocde_category_id')->references('id')->on('domains');
            $table->foreign('ocde_indicator_id')->references('id')->on('domains');
            $table->unsignedBigInteger('indicator_id')->nullable()->comment('Código Indicador');
            $table->unsignedBigInteger('variable_id')->nullable()->comment('Código Categoria Indicador');
            $table->foreign('indicator_id')->references('id')->on('indicators');
            $table->foreign('variable_id')->references('id')->on('variables');
            //$table->foreign('product_id')->references('id')->on('domains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
