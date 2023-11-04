<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMetasCorpocesar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('objective_products')
        ->where([['id', '=', 12989]])
        ->update(['goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'total_goal' => 875]);
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
