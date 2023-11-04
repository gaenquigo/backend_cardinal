<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteAvancesCorpoboyaca extends Migration
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
        ->whereIn('evidence_financial.id', [1885,
        1886,
        1887,
        1888,
        1903,
        1904,
        1905,
        1906,
        1907,
        1932,
        1933,
        1934,
        1935,
        1936,
        1953,
        1956,
        1957,
        1958,
        1959,
        1960,
        1976])
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
        ->whereIn('pais.group_id', [17])
        ->delete();
        #Eliminacion de fuentes por actividad
        DB::table('activity_sources')
        ->whereIn('activity_sources.id', [2057,
        2058,
        2059,
        2061,
        2057,
        2058,
        2059,
        2060,
        2061,
        2057,
        2058,
        2059,
        2060,
        2061,
        2061,
        2057,
        2058,
        2059,
        2060,
        2061,
        2061])
        ->delete();
        DB::table('activity_sources')
        ->where('activity_sources.source_id', '=', 5943)
        ->delete();
        #Eliminacion de financial plans
        DB::table('financial_plans')
       ->join('pais', 'financial_plans.p_a_i_id', '=', 'pais.id')
       ->where('financial_plans.source_id', '=', 1025)
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
