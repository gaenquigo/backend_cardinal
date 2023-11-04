<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixAvancesCsb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        update cardinal.evidence_advance
        set value = 0
        where id = 19499;
        --
        update cardinal.activities
        set goal_3 = 0,
        goal_4 = 0,
        goal = 4
        where id = 14007;
        --
        update cardinal.activities
        set goal_2 = 0, 
        goal_3 = 2,
        goal_4 = 2,
        goal = 4
        where id = 16905;
        --
        update cardinal.activities
        set goal_3 = 0.5,
        goal_4 = 0.5,
        goal = 1
        where id = 16909;
        --
        update cardinal.objective_products
        set goal_2_balance = 2,
        total_goal = 4
        where id = 12250;
        --
        update cardinal.objective_products
        set goal_2_balance = 0,
        total_goal = 8
        where id = 14967;
        --
        update cardinal.objective_products
        set goal_3_balance = 0.5,
        goal_4_balance = 0.5,
        total_goal = 1,
        unit_goal = 58
        where id = 14970;
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
