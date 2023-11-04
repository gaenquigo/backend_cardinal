<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBalanceMetasCvc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::transaction(function () {
            #actualización de las metas de las actividades
            DB::update('update cardinal.activities
            set goal = t1.goal/100,
            goal_1 = t1.goal_1/100,
            goal_2 = t1.goal_2/100,
            goal_3 = t1.goal_3/100,
            goal_4 = t1.goal_4/100
            from 
            (
                select act.id, act.goal, act.goal_1, act.goal_2, act.goal_3, act.goal_4
                from cardinal.pais p
                inner join cardinal.strategic_lines ls on p.id = ls.p_a_i_id
                inner join cardinal.programs prg on ls.id = prg.strategic_line_id
                inner join cardinal.projects pry on prg.id = pry.program_id
                inner join cardinal.objectives obj on pry.id = obj.project_id
                inner join cardinal.objective_products objprod on obj.id = objprod.objective_id
                inner join cardinal.activities act on obj.id = act.objective_id and objprod.id = act.product_id
                where p.id = 164
                and objprod.unit_goal = 71
                and act.id not in(13871,13872,13875,13876,13877,13878)
            ) as t1 where activities.id = t1.id');
            #actualización de las metas de los productos
            DB::update('update cardinal.objective_products
            set total_goal = t1.total_goal/100,
            goal_1_balance = t1.goal_1_balance/100,
            goal_2_balance = t1.goal_2_balance/100,
            goal_3_balance = t1.goal_3_balance/100,
            goal_4_balance = t1.goal_4_balance/100
            from 
            (
                select objprod.id, objprod.total_goal, objprod.goal_1_balance, objprod.goal_2_balance, objprod.goal_3_balance, objprod.goal_4_balance
                from cardinal.pais p
                inner join cardinal.strategic_lines ls on p.id = ls.p_a_i_id
                inner join cardinal.programs prg on ls.id = prg.strategic_line_id
                inner join cardinal.projects pry on prg.id = pry.program_id
                inner join cardinal.objectives obj on pry.id = obj.project_id
                inner join cardinal.objective_products objprod on obj.id = objprod.objective_id
                inner join cardinal.activities act on obj.id = act.objective_id and objprod.id = act.product_id
                where p.id = 164
                and objprod.unit_goal = 71
                and act.id not in(13871,13872,13875,13876,13877,13878)
            ) as t1 where objective_products.id = t1.id');
        });
        /*#Eliminacion de actividad
        $datos = DB::table('activities')
        ->join('objective_products as pt1', 'activities.product_id', '=', 'pt1.id')
        ->join('objectives', 'activities.objective_id', '=', 'objectives.id')
        ->join('objective_products', 'objectives.id', '=', 'objective_products.objective_id')
        ->join('projects', 'objectives.project_id', '=', 'projects.id')
        ->join('programs', 'projects.program_id', '=', 'programs.id')
        ->join('strategic_lines', 'programs.strategic_line_id', '=', 'strategic_lines.id')
        ->join('pais', 'strategic_lines.p_a_i_id', '=', 'pais.id')
        ->where('pais.id', '=', 164)
        ->where('objective_products.unit_goal', '=', 71)
        ->whereNotIn('activities.id', [13871,13872,13875,13876,13877,13878])
        ->first('activities.id');
        /*->update(['goal' => 'goal',
        'goal_1' => 'goal_1/100',
        'goal_2' => 'goal_2/100',
        'goal_3' => 'goal_3/100',
        'goal_4' => 'goal_4']);*/
        /*foreach ($datos as $dto) {
            dd($dto);
        }*/
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
