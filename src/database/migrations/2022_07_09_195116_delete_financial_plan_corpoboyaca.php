<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteFinancialPlanCorpoboyaca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #Eliminacion de financial plans
        DB::table('financial_plans')
       ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')
       ->where('pais.id', '=', 111)
       ->whereIn('financial_plans.source_id', [1052])
       ->delete();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
