<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformesFcaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informesfca', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->comment('Fecha Aprobación');
            $table->string('file')->comment('Archivo');
            $table->string('filePago')->nullable()->comment('Archivo de pago');
            $table->boolean('status')->nullable()->default(false)->comment('Estado');
            $table->boolean('archivoPago')->nullable()->default(false)->comment('Archivo Pago'); 
            $table->unsignedBigInteger('pai_id')->nullable()->comment('Código PAI');
            $table->foreign('pai_id')->references('id')->on('pais');
            $table->unsignedBigInteger('group_id')->comment('CAR PAI');
            $table->foreign('group_id')->references('id')->on('groups');
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
        Schema::dropIfExists('informesfca');
    }
}
