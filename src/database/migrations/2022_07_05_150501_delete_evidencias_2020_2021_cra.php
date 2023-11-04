<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteEvidencias20202021Cra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #Eliminacion de evidencias para el indicador por actividad
        DB::table('indicator_activities')
        ->join('evidence_advance', 'indicator_activities.evidence_id', '=', 'evidence_advance.id')
        ->join('activities', 'evidence_advance.activity_id', '=', 'activities.id')
        ->join('objectives', 'activities.objective_id', '=', 'objectives.id')
        ->join('objective_products', 'objectives.id', '=', 'objective_products.objective_id')
        ->join('projects', 'objectives.project_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.id', '=', 121)
        ->whereIn('evidence_advance.year', [1,2])
        ->update(['evidence_id' => null]);
        #Eliminacion de evidencias por actividad
        DB::table('evidence_advance')
        ->join('activities', 'evidence_advance.activity_id', '=', 'activities.id')
        ->join('objectives', 'activities.objective_id', '=', 'objectives.id')
        ->join('objective_products', 'objectives.id', '=', 'objective_products.objective_id')
        ->join('projects', 'objectives.project_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.id', '=', 121)
        ->whereIn('evidence_advance.year', [1,2])
        ->delete();
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
