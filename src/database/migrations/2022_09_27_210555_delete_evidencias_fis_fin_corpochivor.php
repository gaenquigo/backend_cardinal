<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteEvidenciasFisFinCorpochivor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         #Eliminacion de  evidencias por fuentes financieras
         DB::table('evidence_financial')
         ->join('activity_sources', 'evidence_financial.activity_source_id', '=', 'activity_sources.id')
         ->join('evidence_advance', 'evidence_financial.evidence_id', '=', 'evidence_advance.id')
         ->join('activities', 'evidence_advance.activity_id', '=', 'activities.id')
         ->join('objectives', 'activities.objective_id', '=', 'objectives.id')
         ->join('objective_products', 'objectives.id', '=', 'objective_products.objective_id')
         ->join('projects', 'objectives.project_id', '=', 'projects.id')
         ->join('programs', 'projects.program_id', '=', 'programs.id')
         ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
         ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
         ->whereIn('pais.id', [99])
         ->where('evidence_advance.year', '=', 3)
         ->delete();
         #Eliminacion de pagos por avances
         DB::table('payments')
         ->join('evidence_advance', 'payments.evidence_id', '=', 'evidence_advance.id')
         ->join('activities', 'evidence_advance.activity_id', '=', 'activities.id')
         ->join('objectives', 'activities.objective_id', '=', 'objectives.id')
         ->join('objective_products', 'objectives.id', '=', 'objective_products.objective_id')
         ->join('projects', 'objectives.project_id', '=', 'projects.id')
         ->join('programs', 'projects.program_id', '=', 'programs.id')
         ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
         ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
         ->whereIn('pais.id', [99])
         ->where('evidence_advance.year', '=', 3)
         ->delete();
         #Eliminacion de indicador actividad
        DB::table('indicator_activities')
        ->join('activities', 'indicator_activities.activities_id', '=', 'activities.id')
        ->join('objectives', 'activities.objective_id', '=', 'objectives.id')
        ->join('objective_products', 'objectives.id', '=', 'objective_products.objective_id')
        ->join('projects', 'objectives.project_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->whereIn('pais.id', [99])
        ->delete();
         #Eliminacion de evidencias por actividad
         DB::table('evidence_advance')
         ->join('activities', 'evidence_advance.activity_id', '=', 'activities.id')
         ->join('objectives', 'activities.objective_id', '=', 'objectives.id')
         ->join('objective_products', 'objectives.id', '=', 'objective_products.objective_id')
         ->join('projects', 'objectives.project_id', '=', 'projects.id')
         ->join('programs', 'projects.program_id', '=', 'programs.id')
         ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
         ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
         ->whereIn('pais.id', [99])
         ->where('evidence_advance.year', '=', 3)
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
