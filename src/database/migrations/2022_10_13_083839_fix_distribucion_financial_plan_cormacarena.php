<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixDistribucionFinancialPlanCormacarena extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        --
        update cardinal.financial_plans
        set source_id = 2950
        where source_id = 2982
        and p_a_i_id = 74;
        --
        update cardinal.activity_sources
        set value = 17200000,
        evidence_balance = 17200000
        where id = 13649;
        update cardinal.activity_sources
        set value = 88000000,
        evidence_balance = 88000000
        where id = 13669;
        ");
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
