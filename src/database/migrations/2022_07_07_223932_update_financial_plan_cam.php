<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFinancialPlanCam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //actualización de plan financiero cam
        DB::table('financial_plans')
        ->where([['id', '=', 4729]])
        ->update(['investment_percentage' => 90.0000000297,
                  'investment' => 1212046159,
                  'investment_balance' => 1212046159]);
        #Eliminación activiti_sources
        DB::table('activity_sources')
        ->where('activity_sources.source_id', [4621])
        ->delete();
        #Eliminacion de financial plans
        DB::table('financial_plans')
        ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')
        ->where('pais.id', [156])
        ->whereIn('financial_plans.source_id', [1524])
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
