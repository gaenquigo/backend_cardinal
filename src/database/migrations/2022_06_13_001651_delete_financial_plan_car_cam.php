<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteFinancialPlanCarCam extends Migration
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
        ->whereIn('pais.group_id', [2, 3])
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
