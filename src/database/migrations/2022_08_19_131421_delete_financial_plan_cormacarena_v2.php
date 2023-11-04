<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteFinancialPlanCormacarenaV2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
       ->whereIn('pais.group_id', [13])
       ->delete();
        DB::table('financial_plans')
       ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')
       ->where('pais.start_date', '>=', '2020-01-01')
       ->whereIn('pais.group_id', [13])
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
