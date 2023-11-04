<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovePAISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approve_pais', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->date('date')->comment('Fecha aprobación');
            $table->string('file')->comment('Archivo');
            $table->string('resolution_number')->comment('Número resolución');
            $table->unsignedBigInteger('pai_id')->comment('Código PAI');
            $table->foreign('pai_id')->references('id')->on('pais');
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
        Schema::dropIfExists('approve_pais');
    }
}
