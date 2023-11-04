<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicator_activities', function (Blueprint $table) {

            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->float('numerator')->nullable()->comment('Valor numerador');
            $table->float('denominator')->nullable()->comment('Valor denominador');
            $table->float('weighing')->nullable()->comment('Valor ponderación');
            $table->float('result')->nullable()->comment('Valor resultado');
            $table->float('result_completed')->nullable()->comment('Valor resultado complementario');
            $table->integer('year')->nullable()->comment('Año');
            $table->unsignedBigInteger('variable_in')->unsigned()->nullable()->comment('Llave foranera, domains');
            $table->foreign('variable_in')->references('id')->on('domains');
            $table->unsignedBigInteger('indicator_id')->comment('Código indicador');
            $table->foreign('indicator_id')->references('id')->on('indicators');
            $table->unsignedBigInteger('activities_id')->comment('Código actividad');
            $table->foreign('activities_id')->references('id')->on('activities');            
            $table->unsignedBigInteger('variable_id')->comment('Código variable');
            $table->foreign('variable_id')->references('id')->on('variables');
            $table->unsignedBigInteger('evidence_id')->unsigned()->nullable()->comment('Llave foranera, evidence_advance');
            $table->foreign('evidence_id')->references('id')->on('evidence_advance');

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
        Schema::dropIfExists('indicator_activities');
    }
}
