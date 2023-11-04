<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvidenceAdvanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidence_advance', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->integer('year')->comment('año a reportar');
            $table->float('value')->comment('Valor meta');
            $table->date('date_report')->comment('Fecha reporte');
            $table->string('type')->nullable()->comment('Tipo evidencia/avance');
            $table->string('how_is_done')->nullable()->comment('Como se realizo evidencia');
            $table->string('contract_number')->nullable()->comment('Numero contrato');
            $table->longText('description')->nullable()->comment('Descripción de la evidencia/avance');
            $table->unsignedBigInteger('state_id')->nullable()->comment('Código estado, dominio');
            $table->foreign('state_id')->references('id')->on('domains');
            $table->integer('value_state')->nullable()->comment('Valor');
            $table->unsignedBigInteger('evidence_advance_id')->nullable();
            $table->foreign('evidence_advance_id')->references('id')->on('evidence_advance');
            $table->unsignedBigInteger('activity_id')->comment('Código atividad');
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->boolean('rezago')->default(false)->comment('rezago');
            $table->timestamps();
//            $table->unique(['contract_number', 'year'], 'contract_number_year_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evidence_advance');
    }
}
