<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitySourcesTable extends Migration
{
    //TODO: Cambiar Source_id por financial_plans_id
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_sources', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->unsignedBigInteger('activity_id')->comment('Código actividad');
            $table->unsignedBigInteger('source_id')->comment('Código Fuente de Financiación');
            $table->float('value')->comment('Valor');
            $table->float('evidence_balance')->comment('Saldo de Evidencias');            
            $table->float('goal')->comment('Meta');
            $table->integer('age')->comment('Año');
            $table->timestamps();
            $table->foreign('source_id')->references('id')->on('financial_plans');
            $table->foreign('activity_id')->references('id')->on('activities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_sources');
    }
}
