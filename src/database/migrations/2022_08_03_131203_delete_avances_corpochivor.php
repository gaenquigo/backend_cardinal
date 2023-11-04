<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteAvancesCorpochivor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            /*Eliminar avances financieros*/
            delete from cardinal.evidence_financial
            where id in(
                select evdfn.id from cardinal.pais p
                inner join cardinal.strategic_lines ls on p.id = ls.p_a_i_id
                inner join cardinal.programs prg on ls.id = prg.strategic_line_id
                inner join cardinal.projects pry on prg.id = pry.program_id
                inner join cardinal.objectives obj on pry.id = obj.project_id
                inner join cardinal.objective_products objprod on obj.id = objprod.objective_id
                inner join cardinal.activities act on obj.id = act.objective_id
                inner join cardinal.evidence_advance evdad on act.id = evdad.activity_id
                inner join cardinal.evidence_financial evdfn on evdad.id = evdfn.evidence_id
                inner join cardinal.activity_sources acts on evdfn.activity_source_id = acts.id
                where p.start_date >= '2020-01-01'
                and p.group_id in(20)
            );
            --eliminacion de pagos por avances
            delete from cardinal.payments
            where id in(
                select pymet.id from cardinal.pais p
                inner join cardinal.strategic_lines ls on p.id = ls.p_a_i_id
                inner join cardinal.programs prg on ls.id = prg.strategic_line_id
                inner join cardinal.projects pry on prg.id = pry.program_id
                inner join cardinal.objectives obj on pry.id = obj.project_id
                inner join cardinal.objective_products objprod on obj.id = objprod.objective_id
                inner join cardinal.activities act on obj.id = act.objective_id
                --inner join cardinal.activity_sources acts on act.id = acts.activity_id
                --inner join cardinal.evidence_financial evdfn on acts.id = evdfn.activity_source_id
                inner join cardinal.evidence_advance evdad on act.id = evdad.activity_id
                inner join cardinal.payments pymet on evdad.id = pymet.evidence_id
                where p.start_date >= '2020-01-01'
                and p.group_id in(20)
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
