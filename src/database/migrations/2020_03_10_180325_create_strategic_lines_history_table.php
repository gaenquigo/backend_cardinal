<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrategicLinesHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strategic_lines_history', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->longText('history')->comment('JSON con la información previamente almacenada de la línea estratégica');
            $table->unsignedBigInteger('pai_history_id')->comment('Identificador PAI History');
            $table->unsignedBigInteger('parent_id')->comment('Identificador de la línea estratégica');
            $table->timestamps();
            $table->foreign('pai_history_id')->references('id')->on('pais_history');
            $table->foreign('parent_id')->references('id')->on('strategic_lines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('strategic_lines_history');
    }
}
