<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionAnexo52 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.anexo_5_2(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, father_id integer, codigo character varying, name character varying, presupuestado double precision, comprometido double precision, obligaciones double precision, pagos double precision, pre_nation double precision, com_nation double precision, obl_nation double precision, pag_nation double precision, pre_roy double precision, com_roy double precision, obl_roy double precision, pag_roy double precision, pre_fca double precision, com_fca double precision, obl_fca double precision, pag_fca double precision) 
            AS $$
            begin
                RETURN QUERY
                with recursive anexo_5_2 as (
                select cs.id, cs.father_id, cs.code, cs.name, cs.final_level,
                        cs.id as root_id
                from cardinal.cost_sources cs
                union all
                select t.id, t.father_id, t.code, t.name, t.final_level, a.root_id
                from (select csin.id, csin.father_id, csin.code, csin.name, csin.final_level 
                        from cardinal.cost_sources csin
                        inner join cardinal.groups grp on csin.group_id = grp.id
                        inner join cardinal.pais p on grp.id = p.group_id
                        where p.id = p_paid
                        and csin.final_level=true) t
                inner join anexo_5_2 a on a.id = t.father_id
                )
                select distinct a.id, a.father_id, a.code as codigo, a.name,
                    q.presupuestado, q.comprometido, q.obligaciones, q.pagos,
                    q.pre_nation, q.com_nation, q.obl_nation, q.pag_nation,
                    q.pre_roy, q.com_roy, q.obl_roy, q.pag_roy,
                    q.pre_fca, q.com_fca, q.obl_fca, q.pag_fca
                from anexo_5_2 a
                left join (select fc.cost_sources_id as source_id, 
                            sum(fcin.presupuestado) as presupuestado, sum(fcin.comprometido) as comprometido, 
                            sum(fcin.obligaciones) as obligaciones, sum(fcin.pagos) as pagos,
                            sum(fcin.pre_nation) as pre_nation, sum(fcin.com_nation) as com_nation, 
                            sum(fcin.obl_nation) as obl_nation, sum(fcin.pag_nation) as pag_nation,
                            sum(fcin.pre_roy) as pre_roy, sum(fcin.com_roy) as com_roy, 
                            sum(fcin.obl_roy) as obl_roy, sum(fcin.pag_roy) as pag_roy,
                            sum(fcin.pre_fca) as pre_fca, sum(fcin.com_fca) as com_fca, 
                            sum(fcin.obl_fca) as obl_fca, sum(fcin.pag_fca) as pag_fca
                            from cardinal.financial_costs fc
                            inner join lateral(
                            select 
                                    --recursos propios
                                    case when fcin.own = true then fcin.value_bugeted else 0 end as presupuestado,
                                    case when fcin.own = true then fcin.value_comitted else 0 end as comprometido,
                                    case when fcin.own = true then fcin.value_required else 0 end as obligaciones,
                                    case when fcin.own = true then fcin.value_paid else 0 end as pagos,
                                    --recursos nacion
                                    case when fcin.nation = true then fcin.value_bugeted else 0 end as pre_nation,
                                    case when fcin.nation = true then fcin.value_comitted else 0 end as com_nation,
                                    case when fcin.nation = true then fcin.value_required else 0 end as obl_nation,
                                    case when fcin.nation = true then fcin.value_paid else 0 end as pag_nation,
                                    --recursos de regalias
                                    case when fcin.royalties = true then fcin.value_bugeted else 0 end as pre_roy,
                                    case when fcin.royalties = true then fcin.value_comitted else 0 end as com_roy,
                                    case when fcin.royalties = true then fcin.value_required else 0 end as obl_roy,
                                    case when fcin.royalties = true then fcin.value_paid else 0 end as pag_roy,
                                    --recursos de fca
                                    case when fcin.funds = true then fcin.value_bugeted else 0 end as pre_fca,
                                    case when fcin.funds = true then fcin.value_comitted else 0 end as com_fca,
                                    case when fcin.funds = true then fcin.value_required else 0 end as obl_fca,
                                    case when fcin.funds = true then fcin.value_paid else 0 end as pag_fca
                            from cardinal.financial_costs fcin where fcin.id = fc.id) fcin on true
                            where fc.p_a_i_id = p_paid 
                            and fc.year = p_year
                            group by fc.cost_sources_id) q on a.id = q.source_id
                where q.presupuestado <> 0 or q.pre_nation <> 0 or q.pre_roy <> 0 or q.pre_fca <> 0
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
