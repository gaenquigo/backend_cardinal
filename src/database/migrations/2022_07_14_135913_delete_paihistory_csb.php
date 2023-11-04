<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeletePaihistoryCsb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                #Eliminación de history de actividades
                DB::table('activities_history')
                ->join('objectives_history', 'activities_history.objective_history_id', '=', 'objectives_history.id')
                ->join('projects_history', 'objectives_history.project_history_id', '=', 'projects_history.id')
                ->join('programs_history', 'projects_history.program_history_id', '=', 'programs_history.id')
                ->join('strategic_lines_history', 'programs_history.strategic_line_history_id', '=', 'strategic_lines_history.id')
                ->join('pais_history', 'strategic_lines_history.pai_history_id', '=', 'pais_history.id')
                ->where('pais_history.id', '=', 14)
                ->delete();
                #Eliminacion de objetives_productos_history
                DB::table('objective_products_history')
                ->join('objectives_history', 'objective_products_history.objective_history_id', '=', 'objectives_history.id')
                ->join('projects_history', 'objectives_history.project_history_id', '=', 'projects_history.id')
                ->join('programs_history', 'projects_history.program_history_id', '=', 'programs_history.id')
                ->join('strategic_lines_history', 'programs_history.strategic_line_history_id', '=', 'strategic_lines_history.id')
                ->join('pais_history', 'strategic_lines_history.pai_history_id', '=', 'pais_history.id')
                ->where('pais_history.id', '=', 14)
                ->delete();
                #Eliminacion de objetives_history
                DB::table('objectives_history')
                ->join('projects_history', 'objectives_history.project_history_id', '=', 'projects_history.id')
                ->join('programs_history', 'projects_history.program_history_id', '=', 'programs_history.id')
                ->join('strategic_lines_history', 'programs_history.strategic_line_history_id', '=', 'strategic_lines_history.id')
                ->join('pais_history', 'strategic_lines_history.pai_history_id', '=', 'pais_history.id')
                ->where('pais_history.id', '=', 14)
                ->delete();
                #Eliminacion de proyectos_history
                DB::table('projects_history')
                ->join('programs_history', 'projects_history.program_history_id', '=', 'programs_history.id')
                ->join('strategic_lines_history', 'programs_history.strategic_line_history_id', '=', 'strategic_lines_history.id')
                ->join('pais_history', 'strategic_lines_history.pai_history_id', '=', 'pais_history.id')
                ->where('pais_history.id', '=', 14)
                ->delete();
                #Eliminacion de programas_history
                DB::table('programs_history')
                ->join('strategic_lines_history', 'programs_history.strategic_line_history_id', '=', 'strategic_lines_history.id')
                ->join('pais_history', 'strategic_lines_history.pai_history_id', '=', 'pais_history.id')
                ->where('pais_history.id', '=', 14)
                ->delete();
                #Eliminacion de lineas_history
                 DB::table('strategic_lines_history')
                 ->join('pais_history', 'strategic_lines_history.pai_history_id', '=', 'pais_history.id')
                 ->where('pais_history.id', '=', 14)
                 ->delete();
                #Eliminacion de  pais_history
                DB::table('pais_history')
                ->where('pais_history.id', '=', 14)
                ->delete();
                #eliminación novedad corpoboyaca
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
