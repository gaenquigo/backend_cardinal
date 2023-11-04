<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteActibitySourceFinancialPlanCorpoorinoquia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
         /*Eliminar distribución fuentes por actividad*/
         delete from cardinal.activity_sources
         where id in(
             select acts.id from cardinal.pais p
             inner join cardinal.strategic_lines ls on p.id = ls.p_a_i_id
             inner join cardinal.programs prg on ls.id = prg.strategic_line_id
             inner join cardinal.projects pry on prg.id = pry.program_id
             inner join cardinal.objectives obj on pry.id = obj.project_id
             inner join cardinal.objective_products objprod on obj.id = objprod.objective_id
             inner join cardinal.activities act on obj.id = act.objective_id
             inner join cardinal.activity_sources acts on act.id = acts.activity_id
             where p.start_date >= '2020-01-01'
             and p.group_id in(26)
         );
         /*eliminar recaudos*/
         delete from cardinal.fundraisings
         where id in
             (
                select f.id from cardinal.fundraisings f
                inner join cardinal.financial_plans fp on f.financial_plans_id = fp.id
                inner join cardinal.pais p on fp.p_a_i_id = p.id
                where p.start_date >= '2020-01-01'
                and p.group_id = 26
             );
         /*eliminar el plan financiero*/
         delete from cardinal.financial_plans
         where id in
             (
                select fp.id from cardinal.financial_plans fp
                inner join cardinal.pais p on fp.p_a_i_id = p.id
                where p.start_date >= '2020-01-01'
                and p.group_id = 26
             );
            ");
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
