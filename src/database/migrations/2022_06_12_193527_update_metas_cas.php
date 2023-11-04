<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMetasCas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //modificación meta objetivo producto de la act 2.1.2.6
        DB::table('objective_products')
        ->where([['id', '=', 6757]])
        ->update(['total_goal' => 407,
                  'goal_4_balance' => 128,
                  'goal_3_balance' => 112,
                  'goal_2_balance' => 96,
                  'goal_1_balance' => 71]);
        //modificación meta actividad 2.1.2.6
        DB::table('activities')
        ->where([['id', '=', 7303]])
        ->update(['goal' => 407,
                'goal_4' => 128,
                'goal_3' => 112,
                'goal_2' => 96,
                'goal_1' => 71]);
        //modificación meta objetivo producto de la act 3.1.1.2
        DB::table('objective_products')
        ->where([['id', '=', 6759]])
        ->update(['total_goal' => 4,
                  'goal_4_balance' => 1,
                  'goal_3_balance' => 1,
                  'goal_2_balance' => 1,
                  'goal_1_balance' => 1]);
        //modificación meta actividad 3.1.1.2
        DB::table('activities')
        ->where([['id', '=', 7305]])
        ->update(['goal' => 4,
                'goal_4' => 1,
                'goal_3' => 1,
                'goal_2' => 1,
                'goal_1' => 1]);
        //insertar indicador actividad 3.1.1.2 año 2
        DB::table('indicator_activities')->insert([
            'numerator' => null,
            'denominator' => 1,
            'weighing' => null,
            'result' => null,
            'result_completed' => null,
            'year' => 2,
            'variable_in' => 27,
            'indicator_id' => 17,
            'activities_id' => 7305,
            'variable_id' => 34,
            'evidence_id' => null,
            'created_at' => '2022-04-24 19:07:33',
            'updated_at' => '2022-04-24 19:07:33',
            ]);
            $idindact = DB::getPdo()->lastInsertId();
        //insertar indicador actividad 3.1.1.2 año 4
        DB::table('indicator_activities')->insert([
            'numerator' => null,
            'denominator' => 1,
            'weighing' => null,
            'result' => null,
            'result_completed' => null,
            'year' => 4,
            'variable_in' => 27,
            'indicator_id' => 17,
            'activities_id' => 7305,
            'variable_id' => 34,
            'evidence_id' => null,
            'created_at' => '2022-04-24 19:07:33',
            'updated_at' => '2022-04-24 19:07:33',
            ]);
            $idindact = DB::getPdo()->lastInsertId();
        //modificación meta objetivo producto de la act 3.1.1.3
        DB::table('objective_products')
        ->where([['id', '=', 6760]])
        ->update(['total_goal' => 4,
                  'goal_4_balance' => 1,
                  'goal_3_balance' => 1,
                  'goal_2_balance' => 1,
                  'goal_1_balance' => 1]);
        //modificación meta actividad 3.1.1.3
        DB::table('activities')
        ->where([['id', '=', 7306]])
        ->update(['goal' => 4,
                'goal_4' => 1,
                'goal_3' => 1,
                'goal_2' => 1,
                'goal_1' => 1]);
        //insertar indicador actividad 3.1.1.3 año 1
        DB::table('indicator_activities')->insert([
            'numerator' => null,
            'denominator' => 1,
            'weighing' => null,
            'result' => null,
            'result_completed' => null,
            'year' => 1,
            'variable_in' => 27,
            'indicator_id' => 7,
            'activities_id' => 7306,
            'variable_id' => 8,
            'evidence_id' => null,
            'created_at' => '2022-04-25 07:38:28',
            'updated_at' => '2022-04-25 07:38:28',
            ]);
        //insertar indicador actividad 3.1.1.3 año 3
        DB::table('indicator_activities')->insert([
            'numerator' => null,
            'denominator' => 1,
            'weighing' => null,
            'result' => null,
            'result_completed' => null,
            'year' => 3,
            'variable_in' => 27,
            'indicator_id' => 7,
            'activities_id' => 7306,
            'variable_id' => 8,
            'evidence_id' => null,
            'created_at' => '2022-04-25 07:38:28',
            'updated_at' => '2022-04-25 07:38:28',
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
