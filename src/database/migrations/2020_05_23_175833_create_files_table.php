<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->string('file_url')->comment('URL archivo');
            $table->string('name')->comment('Nombre');
            $table->string('type')->comment('Tipo');
            $table->string('size')->comment('Tamaño');
            $table->unsignedBigInteger('indicator_id')->nullable()->comment('Código indicador');
            $table->foreign('indicator_id')->references('id')->on('indicators');
            $table->unsignedBigInteger('p_a_i_id')->nullable()->comment('Código PAI');
            // $table->foreign('p_a_i_id')->references('id')->on('pais');
            $table->unsignedBigInteger('approve_p_a_i_id')->nullable()->comment('Código aprobación PAI');
            $table->foreign('approve_p_a_i_id')->references('id')->on('approve_pais');
            $table->unsignedBigInteger('noveltyGastos_id')->nullable()->comment('Código novedad gastos');
            $table->foreign('noveltyGastos_id')->references('id')->on('novelty_pais');
            $table->unsignedBigInteger('reports_id')->nullable()->comment('Código Aprobacion de archivos');
            $table->foreign('reports_id')->references('id')->on('approval_reports');
            $table->unsignedBigInteger('reportsHistorical_id')->nullable()->comment('Código reporte historical pais');
            $table->foreign('reportsHistorical_id')->references('id')->on('historical_Pais');
            $table->unsignedBigInteger('informesfca_id')->nullable()->comment('Código reporte reporte FCA');
            $table->foreign('informesfca_id')->references('id')->on('informesfca');
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
        Schema::dropIfExists('files');
    }
}
