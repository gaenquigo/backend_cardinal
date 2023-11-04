<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('history')->comment('JSON con la información previamente almacenada del proyecto');
            $table->unsignedBigInteger('program_history_id')->comment('Código Programa');
            $table->unsignedBigInteger('parent_id')->comment('Identificador del proyecto');
            $table->timestamps();

            $table->foreign('program_history_id')->references('id')->on('programs_history');
            $table->foreign('parent_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_history');
    }
}
