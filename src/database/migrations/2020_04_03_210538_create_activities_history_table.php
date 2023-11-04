<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities_history', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->longText('history')->comment('JSON con la información previamente almacenada de la actividad');
            $table->unsignedBigInteger('objective_history_id')->comment('Código Objetivo');
            $table->unsignedBigInteger('parent_id')->comment('Identificado de la actividad padre');

            $table->timestamps();
            $table->foreign('objective_history_id')->references('id')->on('objectives_history');
            $table->foreign('parent_id')->references('id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities_history');
    }
}
