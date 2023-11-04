<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixFinancialPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Se borran los planes financieros para los PAIS vigencia 2020 */
        DB::table('financial_plans')
        ->join('financing_sources', 'financial_plans.source_id', '=', 'financing_sources.id')
        ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')
        ->join('groups', 'pais.group_id', 'groups.id')
        ->where('groups.name', 'like', 'Corporación%')
        ->where('pais.start_date', '=', '2020-01-01')
        ->where('pais.approved', '=', FALSE)
        ->delete();
        /*Se actualizan las fuentes de financiación de último nivel */
        DB::table('financing_sources')->where('final_level', '=', TRUE)
                                      /*->where('group_id', '=', 3)*/
                                      ->update(['final_level' => FALSE]);
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
