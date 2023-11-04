<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteYearFinancialPlanCodechoco extends Migration
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
       ->where('activity_sources.age', '=', 1)
       ->whereIn('pais.group_id', [10])
       ->delete();
        DB::table('financial_plans')
       ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')
       ->where('pais.start_date', '>=', '2020-01-01')
       ->where('financial_plans.year', '=', 1)
       ->whereIn('pais.group_id', [10])
       ->update(['value' => 0,
                'investment_percentage' => 0,
                'investment' => 0,
                'investment_balance' => 0,
                'functioning_percentage' => 0,
                'functioning' => 0,
                'functioning_balance' => 0,
                'debt_service_percentage' => 0,
                'debt_service' => 0,
                'debt_service_balance' => 0,
                'fund_percentage' => 0,
                'fund' => 0,
                'fund_balance' => 0]);
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
