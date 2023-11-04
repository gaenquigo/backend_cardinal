<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectivesHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectives_history', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->longText('history')->comment('JSON con la información previamente almacenada del objectivo');
            $table->unsignedBigInteger('project_history_id')->comment('Código proyecto');
            $table->unsignedBigInteger('parent_id')->comment('Identificador del objetivo padre');
            $table->timestamps();

            $table->foreign('project_history_id')->references('id')->on('projects_history');
            $table->foreign('parent_id')->references('id')->on('objectives');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objectives_history');
    }
}
