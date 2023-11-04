<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteFinancialPlanBoyacaAndCdmb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #Eliminacion de  financial plans
        DB::table('financial_plans')
        ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [ 9, 17])
        ->delete();
        #Eliminacion de  financial cost
        DB::table('financial_costs')
        ->join('pais', 'financial_costs.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [ 9, 17])
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
