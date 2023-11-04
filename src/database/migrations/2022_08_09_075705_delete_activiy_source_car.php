<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteActiviySourceCar extends Migration
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
             and p.group_id in(3)
         );
         /*actualizar el plan financiero*/
         update cardinal.financial_plans
             set investment_balance = t1.investment
             from 
             (
                 SELECT fp.id, fp.investment
                 FROM cardinal.financing_sources fs
                 INNER JOIN cardinal.financial_plans fp on fs.id = fp.source_id
                 WHERE fs.group_id = 3
                 AND fp.year = 3
             ) as t1 where financial_plans.id = t1.id"
             );
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
