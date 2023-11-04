<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMetasCorpoguavio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        //modificación meta objetivo producto Servicio de divulgación de la incorporación de consideraciones ambientales en la planificación sectorial
        DB::table('objective_products')
        ->where([['id', '=', 9398]])
        ->update(['total_goal' => 101,
                  'goal_1_balance' => 28]);
        //modificación meta actividad Acompañar y asistir a titulares que requieran asesoría técnica y/o jurídica en procesos pertinentes para gestionar su legalización en materia ambiental.
        DB::table('activities')
        ->where([['id', '=', 10649]])
        ->update(['goal' => 32,
                'goal_1' => 15]);
        //modificación indicador actividad
        DB::table('indicator_activities')
        ->where([['id', '=', 2733]])
        ->update(['denominator' => 15]);
        //modificación meta objetivo producto Servicio de asistencia técnica en el marco de la formulación e implementación de proyectos demostrativos para la reducción de impactos ambientales de la minería
        DB::table('objective_products')
        ->where([['id', '=', 9399]])
        ->update(['total_goal' => 147,
                  'goal_1_balance' => 4]);
        //modificación meta actividad Socialización de los resultados obtenidos en asuntos ambientales en el sector minero energético con grupos de interés identificados y priorizados en los municipios de la jurisdicción de Corpoguavio.
        DB::table('activities')
        ->where([['id', '=', 10651]])
        ->update(['goal' => 63,
                'goal_1' => 3]);
        //modificación indicador actividad
        DB::table('indicator_activities')
        ->where([['id', '=', 2741]])
        ->update(['denominator' => 3]);
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
