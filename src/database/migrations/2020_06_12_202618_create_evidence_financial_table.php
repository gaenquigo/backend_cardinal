<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvidenceFinancialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidence_financial', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->double('value')->comment('Valor');
            $table->unsignedBigInteger('activity_source_id')->comment('Código fuente de actividad');
            $table->foreign('activity_source_id')->references('id')->on('activity_sources');
            $table->unsignedBigInteger('evidence_id')->comment('Código evidencia');
            $table->foreign('evidence_id')->references('id')->on('evidence_advance');
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
        Schema::dropIfExists('evidence_financial');
    }
}
