<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs_history', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->longText('history')->comment('JSON con la información previamente almacenada del programa');
            $table->unsignedBigInteger('strategic_line_history_id')->comment('Código línea estratégica');
            $table->unsignedBigInteger('parent_id')->comment('Identificador del padre');
            $table->timestamps();
            
            $table->foreign('strategic_line_history_id')->references('id')->on('strategic_lines_history');
            $table->foreign('parent_id')->references('id')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs_history');
    }
}
