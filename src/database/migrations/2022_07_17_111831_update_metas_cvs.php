<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMetasCvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('objective_products')
        ->where([['id', '=', 10975]])
        ->update(['goal_1' => 0,
                'goal_2' => 0,
                'goal_4' => 0,
                'total_goal' => 17290]);
        DB::table('objective_products')
        ->where([['id', '=', 10982]])
        ->update(['goal_2' => 0]);
        DB::table('objective_products')
        ->where([['id', '=', 10998]])
        ->update(['goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'total_goal' => 2695]);
        DB::table('objective_products')
        ->where([['id', '=', 11001]])
        ->update(['goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'total_goal' => 3399790]);
        DB::table('objective_products')
        ->where([['id', '=', 11032]])
        ->update(['goal_1' => 0,
                'total_goal' => 1314]);      
        DB::table('objective_products')
        ->where([['id', '=', 11034]])
        ->update(['goal_1' => 0,
                'goal_2' => 0]);
        //update actividad indicador
        DB::table('activities')
        ->where([['id', '=', 12528]])
        ->update(['indicator_id' => 21,
                'variable_id' => 48]);
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
