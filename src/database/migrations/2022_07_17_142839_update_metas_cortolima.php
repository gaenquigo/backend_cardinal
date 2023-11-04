<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMetasCortolima extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('objective_products')
        ->where([['id', '=', 10678]])
        ->update(['goal_1' => 0,
                'goal_2' => 0,
                'total_goal' => 3700]);
        DB::table('activities')
        ->where([['id', '=', 12069]])
        ->update(['goal_3' => 0,
                'goal_4' => 0,
                'goal' => 3700]);
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
