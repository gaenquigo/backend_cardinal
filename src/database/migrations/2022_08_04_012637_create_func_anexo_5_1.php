<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncAnexo51 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.cursor_test2(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(father_id integer, codigo character varying, name character varying, id_plan double precision, proyectado double precision, funcionamiento double precision, inversion double precision, fca double precision, serv_deuda double precision, subtotal double precision) 
            AS $$
            begin
                RETURN QUERY
                with recursive anexo_5_1 as (
                   select fs.id, fs.father_id, fs.code, fs.name, fs.final_level,
                          fs.id as root_id
                   from cardinal.financing_sources fs
                   inner join cardinal.groups grp on fs.group_id = grp.id
                   inner join cardinal.pais p on grp.id = p.group_id
                   where p.id = p_paid
                   --and fs.final_level = false 
                   union all
                   select t.id, t.father_id, t.code, t.name, t.final_level, a.root_id
                   from (select fsin.id, fsin.father_id, fsin.code, fsin.name, fsin.final_level 
                         from cardinal.financing_sources fsin
                         where fsin.final_level=true) t
                   inner join anexo_5_1 a on a.id = t.father_id
                )
                select  distinct a.father_id, a.code as codigo, a.name,
                        case when q.idPlan is null then 0 else cast(q.idPlan as double precision) end as idPlan,
                        case when a.root_id = a.id then sum(coalesce(q.value,0)) over (partition by a.root_id) else q.value end as proyectado,
                        case when a.root_id = a.id then sum(coalesce(q.funcionamiento,0)) over (partition by a.root_id) else q.funcionamiento end as funcionamiento,
                        case when a.root_id = a.id then sum(coalesce(q.inversion,0)) over (partition by a.root_id) else q.inversion end as inversion,
                        case when a.root_id = a.id then sum(coalesce(q.fca,0)) over (partition by a.root_id) else q.fca end as fca,
                        case when a.root_id = a.id then sum(coalesce(q.serv_deuda,0)) over (partition by a.root_id) else q.serv_deuda end as serv_deuda,
                        coalesce(q.subtotal,0) as subtotal--, recaudo
                from anexo_5_1 a
                left join (select fp.id as IdPlan, fp.source_id, fp.value, fp.functioning as funcionamiento, 
                           fp.investment as inversion, fp.fund as fca, fp.debt_service as serv_deuda, 
                           fnd.recaudo as subtotal
                           from cardinal.financial_plans fp
                           left join (select financial_plans_id, sum(value) as recaudo
                                      from cardinal.fundraisings 
                                     group by financial_plans_id) fnd on fnd.financial_plans_id = fp.id
                           where fp.p_a_i_id = p_paid
                           and fp.year = p_year) q on a.id = q.source_id
                order by father_id;
            end;
        $$ language plpgsql;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
