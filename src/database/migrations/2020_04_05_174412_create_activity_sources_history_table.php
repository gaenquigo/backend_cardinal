<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitySourcesHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_sources_history', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->longText('history')->comment('JSON con la información previamente almacenada de la actividad');
            $table->unsignedBigInteger('activity_history_id')->comment('Código actividad');
            $table->unsignedBigInteger('parent_id')->comment('Identificador de la fuente de actividad padre');

            $table->timestamps();
            $table->foreign('activity_history_id')->references('id')->on('activities_history');
            $table->foreign('parent_id')->references('id')->on('activity_sources');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_sources_history');
    }
}
