<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialCostHistorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_cost_historys', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->unsignedBigInteger('financial_costs_id')->comment('Código fuente gastos');
            $table->foreign('financial_costs_id')->references('id')->on('financial_costs');
            $table->unsignedBigInteger('noveltyGastos_id')->comment('Código novedades');
            $table->foreign('noveltyGastos_id')->references('id')->on('novelty_pais');
            $table->string('financialCost_history', 20000)->comment('Json novedades gastos');
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
        Schema::dropIfExists('financial_cost_historys');
    }
}
