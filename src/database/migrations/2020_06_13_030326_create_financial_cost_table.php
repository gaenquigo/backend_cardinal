<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_costs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->integer('year')->comment('Año');
            $table->float('value_bugeted')->comment('Valor presupuestado');
            $table->float('value_comitted')->nullable()->comment('Valor comprometido');
            $table->float('value_required')->nullable()->comment('Valor requerido');
            $table->float('value_paid')->nullable()->comment('Valor pagado');
            $table->boolean('own')->default(false)->comment('Propio');
            $table->boolean('nation')->default(false)->comment('Nación');
            $table->boolean('royalties')->default(false)->comment('Regalias');
            $table->boolean('funds')->default(false)->comment('Fondos');
            $table->boolean('functioning')->default(false)->comment('Valor presupuestado');
            $table->boolean('compensation')->default(false)->comment('Valor compesación');
            $table->boolean('debt_service')->default(false)->comment('Servicio a la deuda');
            $table->boolean('complete')->default(false)->comment('Terminado');
            $table->integer('version')->default(1)->comment('Versión Gastos');
            $table->unsignedBigInteger('cost_sources_id')->nullable()->comment('Código fuente de gastos');
            $table->foreign('cost_sources_id')->references('id')->on('cost_sources');
            $table->integer('p_a_i_id')->unsigned()->comment('Código PAI');
            $table->foreign('p_a_i_id')->references('id')->on('pais');
            $table->unsignedBigInteger('group_id')->comment('CAR Financial_cost');
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
        Schema::dropIfExists('financial_costs');
    }
}
