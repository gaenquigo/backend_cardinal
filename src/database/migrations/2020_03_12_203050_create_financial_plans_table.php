<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_plans', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->integer('p_a_i_id')->unsigned()->comment('Código PAI');
            $table->foreign('p_a_i_id')->references('id')->on('pais');
            $table->integer('source_id')->unsigned()->comment('Código fuente de financiación');
            $table->foreign('source_id')->references('id')->on('financing_sources');
            $table->float('value')->nullable()->comment('Valor total');
            $table->float('investment_percentage')->nullable()->comment('Porcentaje inversión');
            $table->float('investment')->nullable()->comment('Valor inversión');
            $table->float('investment_balance')->nullable()->comment('Saldo inversión');
            $table->float('functioning_percentage')->nullable()->comment('Porcentaje Funcionamiento');
            $table->float('functioning')->nullable()->comment('Valor funcionamiento');
            $table->float('functioning_balance')->nullable()->comment('Saldo funcionamiento');
            $table->float('debt_service_percentage')->nullable()->comment('Porcentaje servicio a la deuda');
            $table->float('debt_service')->nullable()->comment('Valor servicio');
            $table->float('debt_service_balance')->nullable()->comment('Saldo servicio');
            $table->float('fund_percentage')->nullable()->comment('Porcentaje regalias');
            $table->float('fund')->nullable()->comment('Valor regalias');
            $table->float('fund_balance')->nullable()->comment('Saldo regalias');
            $table->integer('year')->nullable()->comment('Año');
           
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
        Schema::dropIfExists('financial_plans');
    }
}
