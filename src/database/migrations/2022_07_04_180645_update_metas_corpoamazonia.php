<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMetasCorpoamazonia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //modificación meta objetivo producto corpoamazonia
        DB::table('objective_products')
        ->where([['id', '=', 7081]])
        ->update(['total_goal' => 31,
                  'goal_1_balance' => 10]);
        //modificación meta actividad corpoamazonia
        DB::table('activities')
        ->where([['id', '=', 7695]])
        ->update(['goal' => 31,
                'goal_1' => 10]);
         //insertar indicador actividad año 1 corpoamazonia
         DB::table('indicator_activities')->insert([
            'numerator' => null,
            'denominator' => 10,
            'weighing' => null,
            'result' => null,
            'result_completed' => null,
            'year' => 1,
            'variable_in' => 27,
            'indicator_id' => 5,
            'activities_id' => 7695,
            'variable_id' => 5,
            'evidence_id' => null,
            'created_at' => '2022-05-19 10:22:33',
            'updated_at' => '2022-05-19 10:22:33 ',
            ]);
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
