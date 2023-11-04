<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteFinancialPlansCorpamagCorpomojana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #Eliminacion de  financial plans history corpomojana
        DB::table('financial_plans_history')
        ->join('pais_history', 'financial_plans_history.pai_history_id', '=', 'pais_history.id')
        ->whereIn('pais_history.id', [5,19])
        ->delete();
        #Eliminacion de recaudación de fondos
        DB::table('fundraisings')
        ->join('financial_plans', 'fundraisings.financial_plans_id', '=', 'financial_plans.id')
        ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')    
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [23])
        ->delete();
        #Eliminacion de  financial plans corpomojana
       DB::table('financial_plans')
       ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')
       ->where('pais.start_date', '>=', '2020-01-01')
       ->whereIn('pais.group_id', [23])
       ->delete();
         #Eliminacion de  financial plans history corpamag
       DB::table('financial_plans_history')
       ->join('pais_history', 'financial_plans_history.pai_history_id', '=', 'pais_history.id')
       ->whereIn('pais_history.id', [15,36])
       ->delete();
        #Eliminacion de recaudación de fondos
        DB::table('fundraisings')
        ->join('financial_plans', 'fundraisings.financial_plans_id', '=', 'financial_plans.id')
        ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')    
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [15])
        ->delete();
       #Eliminacion de  financial plans corpamag
       DB::table('financial_plans')
       ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')
       ->where('pais.start_date', '>=', '2020-01-01')
       ->whereIn('pais.group_id', [15])
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
