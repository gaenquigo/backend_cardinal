<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteFinancialPlanCda extends Migration
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
       ->where('pais.id', [168])
       ->whereIn('financial_plans.source_id', [3401, 3402, 3403, 3405, 3412, 3406, 3407, 3408, 3409, 3410, 3411, 3414, 3415, 3416])
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
