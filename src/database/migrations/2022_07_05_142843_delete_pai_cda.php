<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeletePaiCda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #Eliminacion de other_data
        DB::table('other_data_year')
        ->join('activities', 'other_data_year.activity_id', '=', 'activities.id')
        ->join('objectives', 'activities.objective_id', '=', 'objectives.id')
        ->join('objective_products', 'objectives.id', '=', 'objective_products.objective_id')
        ->join('projects', 'objectives.project_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
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
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
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
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
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
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
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
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
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
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminación de history de actividades
        DB::table('activities_history')
        ->join('activities', 'activities_history.parent_id', '=', 'activities.id')
        ->join('objectives', 'activities.objective_id', '=', 'objectives.id')
        ->join('objective_products', 'objectives.id', '=', 'objective_products.objective_id')
        ->join('projects', 'objectives.project_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de actividad
        DB::table('activities')
        ->join('objectives', 'activities.objective_id', '=', 'objectives.id')
        ->join('objective_products', 'objectives.id', '=', 'objective_products.objective_id')
        ->join('projects', 'objectives.project_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de objetives_productos_history
        DB::table('objective_products_history')
        ->join('objective_products', 'objective_products_history.parent_id', '=', 'objective_products.id')
        ->join('objectives', 'objective_products.objective_id', '=', 'objectives.id')
        ->join('projects', 'objectives.project_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de objetives_productos
        DB::table('objective_products')
        ->join('objectives', 'objective_products.objective_id', '=', 'objectives.id')
        ->join('projects', 'objectives.project_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de objetives_history
        DB::table('objectives_history')
        ->join('objectives', 'objectives_history.parent_id', '=', 'objectives.id')
        ->join('projects', 'objectives.project_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de objetives
        DB::table('objectives')
        ->join('projects', 'objectives.project_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de proyectos_history
        DB::table('projects_history')
        ->join('projects', 'projects_history.parent_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de proyectos
        DB::table('projects')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de programas_history
        DB::table('programs_history')
        ->join('programs', 'programs_history.parent_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de programas
        DB::table('programs')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de lineas_history
        DB::table('strategic_lines_history')
        ->join('strategic_lines', 'strategic_lines_history.parent_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de lineas
        DB::table('strategic_lines')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de recaudación de fondos
        DB::table('fundraisings')
        ->join('financial_plans', 'fundraisings.financial_plans_id', '=', 'financial_plans.id')
        ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')    
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de  financial plans
        DB::table('financial_plans')
        ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de  financial cost
        DB::table('financial_costs')
        ->join('pais', 'financial_costs.p_a_i_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de de archivo aprovación pais
        DB::table('files')
        ->join('approve_pais', 'files.approve_p_a_i_id', '=', 'approve_pais.id')
        ->join('pais', 'approve_pais.pai_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de approvación pais
        DB::table('approve_pais')
        ->join('pais', 'approve_pais.pai_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de implementaciones pais
        DB::table('implementations')
        ->join('pais', 'implementations.p_a_i_s_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de logs de IoP pais
        DB::table('pais_interoperability_logs')
        ->join('pais', 'pais_interoperability_logs.pai_id', '=', 'pais.id')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de  pais_history
        DB::table('pais_history')
        ->join('pais', 'pais_history.parent_id', '=', 'pais.id')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
        ->delete();
        #Eliminacion de  pais
        DB::table('pais')
        ->where('pais.start_date', '>=', '2020-01-01')
        ->whereIn('pais.group_id', [8])
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
