<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->unsignedBigInteger('strategic_line_id')->comment('Código línea estratégica');
            $table->unsignedBigInteger('national_program_id')->nullable()->comment('Código DNP Dominio');
            $table->longText('car_program')->nullable()->comment('Nombre programa');
            $table->smallInteger('weighing')->comment('Ponderación');
            $table->timestamps();

            $table->foreign('strategic_line_id')->references('id')->on('strategic_lines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
