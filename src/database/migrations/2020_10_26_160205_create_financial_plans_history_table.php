<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialPlansHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_plans_history', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('Llave primaria, autonumerico');
            $table->longText('history')->comment('JSON con la información previamente almacenada del plan financiero');
            $table->unsignedBigInteger('pai_history_id')->comment('Identificador PAI History');
            $table->unsignedBigInteger('parent_id')->comment('Identificador del pla financiero padre');
            $table->timestamps();
            $table->foreign('pai_history_id')->references('id')->on('pais_history');
            $table->foreign('parent_id')->references('id')->on('financial_plans');                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financial_plans_history');
    }
}
