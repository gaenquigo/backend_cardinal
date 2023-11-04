<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMetasCar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //modificación meta objetivo producto 23.1 car
        DB::table('objective_products')
        ->where([['id', '=', 9263]])
        ->update(['total_goal' => 100,
                  'goal_1_balance' => 7,
                  'goal_4_balance' => 31]);
        //modificación meta actividad 23.1 car
        DB::table('activities')
        ->where([['id', '=', 10506]])
        ->update(['goal' => 100,
                'goal_1' => 7,
                'goal_4' => 31]);
        //modificación indicator_activities 23.1 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7475]])
        ->update(['denominator' => 7]);
        //modificación indicator_activities 23.1 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7478]])
        ->update(['denominator' => 31]);
        //**modificación meta objetivo producto 23.3 car**
        DB::table('objective_products')
        ->where([['id', '=', 9265]])
        ->update(['total_goal' => 100,
                  'goal_1_balance' => 10,
                  'goal_2_balance' => 35,
                  'goal_3_balance' => 35,
                  'goal_4_balance' => 20]);
        //modificación meta actividad 23.3 car
        DB::table('activities')
        ->where([['id', '=', 10508]])
        ->update(['goal' => 100,
                'goal_1' => 10,
                'goal_2' => 35,
                'goal_3' => 35,
                'goal_4' => 20]);
        //modificación indicator_activities 23.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7479]])
        ->update(['denominator' => 10]);
        //modificación indicator_activities 23.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7480]])
        ->update(['denominator' => 35]);
        //modificación indicator_activities 23.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7481]])
        ->update(['denominator' => 35]);
        //modificación indicator_activities 23.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7482]])
        ->update(['denominator' => 20]);
        //**modificación meta objetivo producto 05.4 car**
        DB::table('objective_products')
        ->where([['id', '=', 9281]])
        ->update(['total_goal' => 400,
                  'goal_1_balance' => 100,
                  'goal_2_balance' => 100,
                  'goal_3_balance' => 100,
                  'goal_4_balance' => 100]);
        //modificación meta actividad 05.4 car
        DB::table('activities')
        ->where([['id', '=', 10524]])
        ->update(['goal' => 400,
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100]);
        //insertar indicador actividad 05.4 año 1 car
        DB::table('indicator_activities')->insert([
            'numerator' => null,
            'denominator' => 100,
            'weighing' => null,
            'result' => null,
            'result_completed' => null,
            'year' => 1,
            'variable_in' => 27,
            'indicator_id' => 1411,
            'activities_id' => 10524,
            'variable_id' => 1418,
            'evidence_id' => null,
            'created_at' => '2022-06-16 17:25:55',
            'updated_at' => '2022-06-16 17:25:55',
            ]);
        //modificación indicator_activities 05.4 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7489]])
        ->update(['denominator' => 100]);
        //modificación indicator_activities 05.4 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7490]])
        ->update(['denominator' => 100]);
        //modificación indicator_activities 05.4 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7491]])
        ->update(['denominator' => 100]);
        //**modificación meta objetivo producto 05.6 car**
        DB::table('objective_products')
        ->where([['id', '=', 9283]])
        ->update(['total_goal' => 400,
                  'goal_1_balance' => 100,
                  'goal_2_balance' => 100,
                  'goal_3_balance' => 100,
                  'goal_4_balance' => 100]);
        //modificación meta actividad 05.6 car
        DB::table('activities')
        ->where([['id', '=', 10526]])
        ->update(['goal' => 400,
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100]);
        //modificación indicator_activities 05.6 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7492]])
        ->update(['denominator' => 100]);
        //modificación indicator_activities 05.6 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7493]])
        ->update(['denominator' => 100]);
        //modificación indicator_activities 05.6 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7494]])
        ->update(['denominator' => 100]);
        //modificación indicator_activities 05.6 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7495]])
        ->update(['denominator' => 100]);
        //**modificación meta objetivo producto 27.2 car** está igual, no se hace nada
        //**modificación meta objetivo producto 18.4 car** tiene diferente unidad de medida (%) y los nuevos valores son decimales
        //**modificación meta objetivo producto 30.4 car**
        DB::table('objective_products')
        ->where([['id', '=', 2640]])
        ->update(['total_goal' => 100,
                  'goal_1_balance' => 3,
                  'goal_2_balance' => 29,
                  'goal_3_balance' => 34,
                  'goal_4_balance' => 34]);
        //modificación meta actividad 05.6 car
        DB::table('activities')
        ->where([['id', '=', 10573]])
        ->update(['goal' => 100,
                'goal_1' => 3,
                'goal_2' => 29,
                'goal_3' => 34,
                'goal_4' => 34]);
        //modificación indicator_activities 05.6 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7504]])
        ->update(['denominator' => 3]);
        //modificación indicator_activities 05.6 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7505]])
        ->update(['denominator' => 29]);
        //modificación indicator_activities 05.6 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7506]])
        ->update(['denominator' => 34]);
        //modificación indicator_activities 05.6 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7507]])
        ->update(['denominator' => 34]);
        //**modificación meta objetivo producto 21.2 car**
        DB::table('objective_products')
        ->where([['id', '=', 9333]])
        ->update(['total_goal' => 100,
                  'goal_1_balance' => 10,
                  'goal_2_balance' => 30,
                  'goal_3_balance' => 30,
                  'goal_4_balance' => 30]);
        //modificación meta actividad 21.2 car
        DB::table('activities')
        ->where([['id', '=', 12703]])
        ->update(['goal' => 100,
                'goal_1' => 10,
                'goal_2' => 30,
                'goal_3' => 30,
                'goal_4' => 30]);
        //modificación indicator_activities 21.2 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7508]])
        ->update(['denominator' => 10]);
        //modificación indicator_activities 21.2 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7509]])
        ->update(['denominator' => 30]);
        //modificación indicator_activities 21.2 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7510]])
        ->update(['denominator' => 30]);
        //modificación indicator_activities 21.2 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7511]])
        ->update(['denominator' => 30]);
        //**modificación meta objetivo producto 21.3 car**
        DB::table('objective_products')
        ->where([['id', '=', 9334]])
        ->update(['total_goal' => 100,
                  'goal_1_balance' => 30,
                  'goal_2_balance' => 40,
                  'goal_3_balance' => 15,
                  'goal_4_balance' => 15]);
        //modificación meta actividad 21.2 car
        DB::table('activities')
        ->where([['id', '=', 12704]])
        ->update(['goal' => 100,
                'goal_1' => 30,
                'goal_2' => 40,
                'goal_3' => 15,
                'goal_4' => 15]);
        //modificación indicator_activities 21.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7512]])
        ->update(['denominator' => 30]);
        //modificación indicator_activities 21.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7513]])
        ->update(['denominator' => 40]);
        //modificación indicator_activities 21.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7514]])
        ->update(['denominator' => 15]);
        //modificación indicator_activities 21.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7515]])
        ->update(['denominator' => 15]);
       //**modificación meta objetivo producto 06.3 car**
       DB::table('objective_products')
       ->where([['id', '=', 9342]])
       ->update(['total_goal' => 100,
                 'goal_1_balance' => 0,
                 'goal_2_balance' => 20,
                 'goal_3_balance' => 50,
                 'goal_4_balance' => 30]);
       //modificación meta actividad 21.2 car
       DB::table('activities')
       ->where([['id', '=', 10579]])
       ->update(['goal' => 100,
               'goal_1' => 0,
               'goal_2' => 20,
               'goal_3' => 50,
               'goal_4' => 30]);
        //modificación indicator_activities 06.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7524]])
        ->update(['denominator' => 0]);
        //modificación indicator_activities 06.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7525]])
        ->update(['denominator' => 20]);
        //modificación indicator_activities 06.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7526]])
        ->update(['denominator' => 50]);
        //modificación indicator_activities 06.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7527]])
        ->update(['denominator' => 30]);
        //**modificación meta objetivo producto 03.2 car**
       DB::table('objective_products')
       ->where([['id', '=', 9363]])
       ->update(['total_goal' => 100,
                 'goal_1_balance' => 0,
                 'goal_2_balance' => 20,
                 'goal_3_balance' => 30,
                 'goal_4_balance' => 50]);
       //modificación meta actividad 03.2 car
       DB::table('activities')
       ->where([['id', '=', 10600]])
       ->update(['goal' => 100,
               'goal_1' => 0,
               'goal_2' => 20,
               'goal_3' => 30,
               'goal_4' => 50]);
        //modificación indicator_activities 03.2 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7536]])
        ->update(['denominator' => 0]);
        //modificación indicator_activities 03.2 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7537]])
        ->update(['denominator' => 20]);
        //modificación indicator_activities 03.2 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7538]])
        ->update(['denominator' => 30]);
        //modificación indicator_activities 03.2 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7539]])
        ->update(['denominator' => 50]);
        //**modificación meta objetivo producto 03.3 car**
        DB::table('objective_products')
       ->where([['id', '=', 9364]])
       ->update(['total_goal' => 100,
                 'goal_1_balance' => 10,
                 'goal_2_balance' => 20,
                 'goal_3_balance' => 40,
                 'goal_4_balance' => 30]);
        //modificación meta actividad 03.3 car
       DB::table('activities')
       ->where([['id', '=', 10601]])
       ->update(['goal' => 100,
               'goal_1' => 10,
               'goal_2' => 20,
               'goal_3' => 40,
               'goal_4' => 30]);
        //modificación indicator_activities 03.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7540]])
        ->update(['denominator' => 10]);
        //modificación indicator_activities 03.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7541]])
        ->update(['denominator' => 20]);
        //modificación indicator_activities 03.2 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7542]])
        ->update(['denominator' => 40]);
        //modificación indicator_activities 03.2 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7543]])
        ->update(['denominator' => 30]);
        //**modificación meta objetivo producto 16.1 car**
        DB::table('objective_products')
       ->where([['id', '=', 9378]])
       ->update(['total_goal' => 100,
                 'goal_1_balance' => 6,
                 'goal_2_balance' => 41,
                 'goal_3_balance' => 43]);
        //modificación meta actividad 03.3 car
        DB::table('activities')
        ->where([['id', '=', 10615]])
        ->update(['goal' => 100,
                'goal_1' => 6,
                'goal_2' => 41,
                'goal_3' => 43]);
        //modificación indicator_activities 16.1 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7544]])
        ->update(['denominator' => 6]);
        //modificación indicator_activities 03.3 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7545]])
        ->update(['denominator' => 41]);
        //modificación indicator_activities 03.2 car
        DB::table('indicator_activities')
        ->where([['id', '=', 7546]])
        ->update(['denominator' => 43]);
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
