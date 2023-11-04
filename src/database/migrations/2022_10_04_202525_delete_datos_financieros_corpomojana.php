<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteDatosFinancierosCorpomojana extends Migration
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
        ->whereIn('pais.id', [138])
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
        ->whereIn('pais.id', [138])
        ->where('evidence_advance.year', '=', 3)
        ->delete();
       #Eliminación de history de actividades_sources
       DB::table('activity_sources_history')
       ->join('activities_history', 'activity_sources_history.activity_history_id', '=', 'activities_history.id')
       ->join('objectives_history', 'activities_history.objective_history_id', '=', 'objectives_history.id')
       ->join('projects_history', 'objectives_history.project_history_id', '=', 'projects_history.id')
       ->join('programs_history', 'projects_history.program_history_id', '=', 'programs_history.id')
       ->join('strategic_lines_history', 'programs_history.strategic_line_history_id', '=', 'strategic_lines_history.id')
       ->join('pais_history', 'strategic_lines_history.pai_history_id', '=', 'pais_history.id')
       ->whereIn('pais_history.id', [5,19])
       ->delete();
       #Eliminacion de fuentes por actividad
       DB::table('activity_sources')
       ->join('activities', 'activity_sources.activity_id', '=', 'activities.id')
       ->join('objectives', 'activities.objective_id', '=', 'objectives.id')
       ->join('objective_products', 'objectives.id', '=', 'objective_products.objective_id')
       ->join('projects', 'objectives.project_id', '=', 'projects.id')
       ->join('programs', 'projects.program_id', '=', 'programs.id')
       ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
       ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
       ->whereIn('pais.id', [138])
       ->delete();
       #Eliminacion de  financial plans
       DB::table('financial_plans')
       ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')
       ->where('pais.start_date', '>', '2023-01-01')
       ->whereIn('pais.group_id', [23])
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
