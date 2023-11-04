<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertIndActCvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creacióin de asociación indicador_actividad
        DB::table('indicator_activities')->insert([
            'numerator' => null,
            'denominator' =>6,
            'weighing' => null,
            'result' => null,
            'result_completed' => null,
            'year' => 2,
            'variable_in' => 27,
            'indicator_id' => 21,
            'activities_id' => 12528,
            'variable_id' => 48,
            'created_at' => '2022-07-01 12:48:49',
            'updated_at' => '2022-07-01 12:48:49',
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('indicator_activities')->insert([
            'numerator' => null,
            'denominator' =>3,
            'weighing' => null,
            'result' => null,
            'result_completed' => null,
            'year' => 3,
            'variable_in' => 27,
            'indicator_id' => 21,
            'activities_id' => 12528,
            'variable_id' => 48,
            'created_at' => '2022-07-01 12:48:49',
            'updated_at' => '2022-07-01 12:48:49',
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('indicator_activities')->insert([
            'numerator' => null,
            'denominator' =>3,
            'weighing' => null,
            'result' => null,
            'result_completed' => null,
            'year' => 4,
            'variable_in' => 27,
            'indicator_id' => 21,
            'activities_id' => 12528,
            'variable_id' => 48,
            'created_at' => '2022-07-01 12:48:49',
            'updated_at' => '2022-07-01 12:48:49',
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
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
