<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMetasProductosCra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //modificación meta producto Servicio de delimitacion
        DB::table('objective_products')
        ->where([['id', '=', 10130]])
        ->update(['goal_3' => 0.1,
                  'goal_3_balance' => 0.1]);
        //modificación meta producto CAVF construido
        DB::table('objective_products')
        ->where([['id', '=', 10222]])
        ->update(['goal_3' => 0.1,
                  'goal_3_balance' => 0.1,
                  'goal_4' => 0.1,
                  'goal_4_balance' => 0.1]);
        //modificación meta producto Generación de reportes, diagnosticos, informes
        DB::table('objective_products')
        ->where([['id', '=', 10233]])
        ->update(['goal_3' => 3.1,
                  'goal_3_balance' => 3.1]);
        //modificación meta producto Servicios de información implementados
        DB::table('objective_products')
        ->where([['id', '=', 10237]])
        ->update(['goal_1' => 0.1,
                  'goal_1_balance' => 0.1]);
        //modificación meta producto Servicios tecnológicos implementados
        DB::table('objective_products')
        ->where([['id', '=', 10240]])
        ->update(['goal_2' => 0.1,
                  'goal_2_balance' => 0.1]);
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
