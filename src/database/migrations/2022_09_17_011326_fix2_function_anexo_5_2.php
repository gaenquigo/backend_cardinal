<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fix2FunctionAnexo52 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        DROP FUNCTION IF EXISTS cardinal.anexo_5_2_v2;
        CREATE OR REPLACE FUNCTION cardinal.anexo_5_2_v2(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, father_id integer, codigo character varying, name character varying, presupuestado double precision, comprometido double precision, obligaciones double precision, pagos double precision, pre_nation double precision, com_nation double precision, obl_nation double precision, pag_nation double precision, pre_roy double precision, com_roy double precision, obl_roy double precision, pag_roy double precision, pre_fca double precision, com_fca double precision, obl_fca double precision, pag_fca double precision) 
        AS $$
            DECLARE cur_cost CURSOR
            FOR select * from
            (
            select  distinct cs.id, cs.father_id, cs.code, cs.name, cs.final_level,
                    cast(0 as double precision) as presupuestado,
                    cast(0 as double precision) as comprometido,
                    cast(0 as double precision) as obligaciones,
                    cast(0 as double precision) as pagos,
                    cast(0 as double precision) as pre_nation,
                    cast(0 as double precision) as com_nation,
                    cast(0 as double precision) as obl_nation,
                    cast(0 as double precision) as pag_nation,
                    cast(0 as double precision) as pre_roy,
                    cast(0 as double precision) as com_roy,
                    cast(0 as double precision) as obl_roy,
                    cast(0 as double precision) as pag_roy,
                    cast(0 as double precision) as pre_fca,
                    cast(0 as double precision) as com_fca,
                    cast(0 as double precision) as obl_fca,
                    cast(0 as double precision) as pag_fca
            from cardinal.cost_sources cs
            where cs.final_level = false
            and cs.group_id is null
            union
            select t.id, t.father_id, t.code, t.name, t.final_level,
                    t.presupuestado,t.comprometido, t.obligaciones, t.pagos,
                    t.pre_nation, t.com_nation, t.obl_nation, t.pag_nation,
                    t.pre_roy, t.com_roy, t.obl_roy, t.pag_roy,
                    t.pre_fca, t.com_fca, t.obl_fca, t.pag_fca
            from (select csin.id, csin.father_id, csin.code, csin.name, csin.final_level,
                        q.presupuestado,q.comprometido, q.obligaciones, q.pagos,
                        q.pre_nation, q.com_nation, q.obl_nation, q.pag_nation,
                        q.pre_roy, q.com_roy, q.obl_roy, q.pag_roy,
                        q.pre_fca, q.com_fca, q.obl_fca, q.pag_fca
                from cardinal.cost_sources csin
                inner join cardinal.groups grp on csin.group_id = grp.id
                inner join cardinal.pais p on grp.id = p.group_id
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
                    group by fc.cost_sources_id) q on csin.id = q.source_id
                where p.id = p_paid
                and csin.final_level=true) t
                where t.presupuestado <> 0 or t.pre_nation <> 0 or t.pre_roy <> 0 or t.pre_fca <> 0) q
                order by q.final_level desc, q.code desc;
                ------------------------Declaración de constantes para la consulta--------------------------------------
                DECLARE cons_index  integer := 0;
                --propio
                DECLARE cons_presp double precision :=0;
                DECLARE cons_comp double precision :=0;
                DECLARE cons_oblig double precision :=0;
                DECLARE cons_pag double precision :=0;
                --nacion
            BEGIN
                --se elimina la tabla temporal temp_anexo_52 si existe
                DROP TABLE IF EXISTS temp_anexo_52;
                --DROP TABLE temp_anexo_52;
                CREATE TEMP TABLE IF NOT EXISTS temp_anexo_52 AS
                select distinct cs.id, cs.father_id, cs.code,cs.name, 
                --propios
                CAST(0 as double precision) as presupuestado,
                CAST(0 as double precision) as comprometido,
                CAST(0 as double precision) as obligaciones,
                CAST(0 as double precision) as pagos,
                --nation
                CAST(0 as double precision) as pre_nation,
                CAST(0 as double precision) as com_nation,
                CAST(0 as double precision) as obl_nation,
                CAST(0 as double precision) as pag_nation,
                --royalties
                CAST(0 as double precision) as pre_roy,
                CAST(0 as double precision) as com_roy,
                CAST(0 as double precision) as obl_roy,
                CAST(0 as double precision) as pag_roy,
                --funds
                CAST(0 as double precision) as pre_fca,
                CAST(0 as double precision) as com_fca,
                CAST(0 as double precision) as obl_fca,
                CAST(0 as double precision) as pag_fca
    
                from  cardinal.cost_sources as cs
                limit 0;
                /*inner join cardinal.groups grp on cs.group_id = grp.id
                inner join cardinal.pais p on grp.id = p.group_id and p.id = p_paid
                order by cs.code;*/
                --se recorre el cursor
                FOR registro IN cur_cost LOOP
                    --se valida si el registro no es de último nivel
                    --y en caso afirmativo se realiza la sumatoria con su hijo
                    IF registro.final_level = false THEN
                        --se obtienen los valores de lo presupuestado, comprometido, obgligado y pagado
                        --para los recursos propios
                        cons_presp := (select sum(tc.presupuestado) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_comp := (select sum(tc.comprometido) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_oblig := (select sum(tc.obligaciones) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_pag := (select sum(tc.pagos) from temp_anexo_52 tc where tc.father_id = registro.id);
                        registro.presupuestado := registro.presupuestado + cons_presp;
                        registro.comprometido := registro.comprometido + cons_comp;
                        registro.obligaciones := registro.obligaciones + cons_oblig;
                        registro.pagos := registro.pagos + cons_pag;
                        --se obtienen los valores de lo presupuestado, comprometido, obgligado y pagado
                        --para los recursos nacion
                        cons_presp := (select sum(tc.pre_nation) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_comp := (select sum(tc.com_nation) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_oblig := (select sum(tc.obl_nation) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_pag := (select sum(tc.pag_nation) from temp_anexo_52 tc where tc.father_id = registro.id);
                        registro.pre_nation := registro.pre_nation + cons_presp;
                        registro.com_nation := registro.com_nation + cons_comp;
                        registro.obl_nation := registro.obl_nation + cons_oblig;
                        registro.pag_nation := registro.pag_nation + cons_pag;
                        --se obtienen los valores de lo presupuestado, comprometido, obgligado y pagado
                        --para los recursos de regalías
                        cons_presp := (select sum(tc.pre_roy) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_comp := (select sum(tc.com_roy) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_oblig := (select sum(tc.obl_roy) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_pag := (select sum(tc.pag_roy) from temp_anexo_52 tc where tc.father_id = registro.id);
                        registro.pre_roy := registro.pre_roy + cons_presp;
                        registro.com_roy := registro.com_roy + cons_comp;
                        registro.obl_roy := registro.obl_roy + cons_oblig;
                        registro.pag_roy := registro.pag_roy + cons_pag;
                        --se obtienen los valores de lo presupuestado, comprometido, obgligado y pagado
                        --para los recursos del fca
                        cons_presp := (select sum(tc.pre_fca) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_comp := (select sum(tc.com_fca) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_oblig := (select sum(tc.obl_fca) from temp_anexo_52 tc where tc.father_id = registro.id);
                        cons_pag := (select sum(tc.pag_fca) from temp_anexo_52 tc where tc.father_id = registro.id);
                        registro.pre_fca := registro.pre_fca + cons_presp;
                        registro.com_fca := registro.com_fca + cons_comp;
                        registro.obl_fca := registro.obl_fca + cons_oblig;
                        registro.pag_fca := registro.pag_fca + cons_pag;
                    END IF;
                    INSERT INTO temp_anexo_52(id,father_id,code,name,
                                            presupuestado,comprometido,obligaciones,pagos,
                                            pre_nation,com_nation,obl_nation,pag_nation,
                                            pre_roy,com_roy,obl_roy,pag_roy,pre_fca,com_fca,
                                            obl_fca,pag_fca)
                                values(
                                registro.id, registro.father_id, registro.code, registro.name,
                                registro.presupuestado,registro.comprometido, registro.obligaciones, registro.pagos,
                                registro.pre_nation, registro.com_nation, registro.obl_nation, registro.pag_nation,
                                registro.pre_roy, registro.com_roy, registro.obl_roy, registro.pag_roy,
                                registro.pre_fca, registro.com_fca, registro.obl_fca, registro.pag_fca
                                );
                END LOOP;
                RETURN QUERY
                SELECT * FROM temp_anexo_52;
            END;
        $$ language plpgsql;");
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
