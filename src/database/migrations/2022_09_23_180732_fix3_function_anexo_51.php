<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fix3FunctionAnexo51 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.anexo_5_1(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, father_id integer, code character varying, name character varying, proyectado double precision, adicion double precision, reduccion double precision, funcionamiento double precision, inversion double precision, fca double precision, serv_deuda double precision, derechos_cobrar double precision, recaudo double precision) 
        AS $$
            DECLARE cur_ingrsos CURSOR
            FOR select * from
            (
            select fs.id, fs.father_id, fs.code, fs.name, fs.final_level,
                    cast(0 as double precision) as proyectado,
                    cast(0 as double precision) as funcionamiento, 
                    cast(0 as double precision) as inversion, 
                    cast(0 as double precision) as fca,
                    cast(0 as double precision) as serv_deuda, 
                    cast(0 as double precision) as recaudo, 
                    cast(0 as double precision) as derechos_cobrar, 
                    cast(0 as double precision) as adicion, 
                    cast(0 as double precision) as reduccion
            from cardinal.financing_sources fs
            where fs.group_id is null
            union
            select fs.id, fs.father_id, fs.code, fs.name, fs.final_level,
                    cast(0 as double precision) as proyectado,
                    cast(0 as double precision) as funcionamiento, 
                    cast(0 as double precision) as inversion, 
                    cast(0 as double precision) as fca,
                    cast(0 as double precision) as serv_deuda, 
                    cast(0 as double precision) as recaudo, 
                    cast(0 as double precision) as derechos_cobrar, 
                    cast(0 as double precision) as adicion, 
                    cast(0 as double precision) as reduccion
            from cardinal.financing_sources fs
            inner join cardinal.groups grp on fs.group_id = grp.id
            inner join cardinal.pais p on grp.id = p.group_id
            where p.id = p_paid
            and fs.final_level = false
            union
            select t.id, t.father_id, t.code, t.name, t.final_level, --t.idPai, t.idPlan, 
                    t.proyectado, t.funcionamiento, t.inversion, t.fca, t.serv_deuda, 
                    t.recaudo, t.derechos_cobrar, t.adicion, t.reduccion
            from (select fsin.id, fsin.father_id, fsin.code, fsin.name, fsin.final_level,
                            fpint.idPai, fpint.idPlan, fpint.proyectado, fpint.funcionamiento,
                            fpint.inversion, fpint.fca, fpint.serv_deuda, 
                            coalesce(fpint.recaudo,0) as recaudo, 
                            coalesce(fpint.derechos_cobrar,0) as derechos_cobrar,
                            coalesce(fpint.adicion,0) as adicion,
                            coalesce(fpint.reduccion,0) as reduccion
                    from cardinal.financing_sources fsin
                    inner join (select fp.id as idPlan, fp.p_a_i_id as idPai, fp.year, fp.source_id, fp.value as proyectado,
                                        fp.functioning as funcionamiento, fp.investment as inversion, fp.fund as fca, 
                                        fp.debt_service as serv_deuda, fnd.recaudo, fnd.derechos_cobrar,
                                        add_redd.adicion, add_redd.reduccion
                                    from cardinal.financial_plans fp
                                    left join lateral(select sum(coalesce(fnd.value,0)) as recaudo,
                                                    sum(coalesce(fnd.collections,0)) as derechos_cobrar
                                            from cardinal.fundraisings fnd
                                            where fnd.financial_plans_id = fp.id
                                            group by financial_plans_id) fnd on true
                                    left join lateral(select case when (q1.valor > fp.value and q1.valor > 0) then (q1.valor - fp.value)
                                                        else 0 end as adicion,
                                                        case when (fp.value > q1.valor and q1.valor > 0) then (fp.value - q1.valor)
                                                        else 0 end as reduccion
                                            from(
                                            select sum(cast(fph.history::json->>'value' as double precision)) as valor 
                                            from cardinal.novelty_pais np
                                            inner join cardinal.pais pint on np.pai_id = pint.id
                                            inner join cardinal.pais_history ph on np.pai_id = ph.parent_id
                                            inner join cardinal.financial_plans_history fph on ph.id = fph.pai_history_id
                                            inner join cardinal.financial_plans fpint on fph.parent_id = fpint.id and fpint.id = fp.id
                                            and fph.history::json->>'id' = cast(fpint.id as character varying)
                                            and fph.history::json->>'value' > cast(0 as character varying)
                                            group by fpint.id) q1) add_redd on true
                                    ) fpint on fsin.id = fpint.source_id
                    where fsin.final_level=true
                    and fpint.idPai = p_paid
                    and fpint.year = p_year
                    ) t
            ) q
            order by q.final_level desc, q.code desc;
            ------------------------Declaración de constantes para la consulta--------------------------------------
            DECLARE cons_index  integer := 0;
            DECLARE cons_proy double precision :=0;
            DECLARE cons_add double precision :=0;
            DECLARE cons_reduc double precision :=0;
            DECLARE cons_funct double precision :=0;
            DECLARE cons_inv double precision :=0;
            DECLARE cons_fca double precision :=0;
            DECLARE cons_serv double precision :=0;
            DECLARE cons_derch double precision :=0;
            DECLARE cons_recaud double precision :=0;
            BEGIN
                --se elimina la tabla temporal temp_anexo_51 si existe
                DROP TABLE IF EXISTS temp_anexo_51;
                --se crea la tabla temporal temp_anexo_51 si no existe;
                CREATE TEMP TABLE IF NOT EXISTS temp_anexo_51 AS
                select distinct fs.id,fs.father_id,fs.code,fs.name,
                        CAST(0 as double precision) as proyectado,
                        CAST( 0 as double precision) as adicion,
                        CAST( 0 as double precision) as reduccion,
                        CAST(0 as double precision) as funcionamiento,
                        CAST(0 as double precision) as inversion,
                        CAST(0 as double precision) as fca,
                        CAST(0 as double precision) as serv_deuda,
                        CAST( 0 as double precision) as derechos_cobrar,
                        CAST( 0 as double precision) as recaudo
                from cardinal.financing_sources as fs
                limit 0;
                --se recorre el cursor
                FOR registro IN cur_ingrsos LOOP
                        --se valida si el registro no es de último nivel
                    --y en caso afirmativo se realiza la sumatoria con su hijo
                    IF registro.final_level = false THEN
                        --se obtienen los valores de lo proyectado, funcionamiento, inversión, fca, 
                        --servicio a la deuda, recaudado, derechos por cobrar, adicion y reduccion
                        cons_proy := (select sum(ting.proyectado) from temp_anexo_51 ting where ting.father_id = registro.id);
                        cons_add := (select sum(ting.adicion) from temp_anexo_51 ting where ting.father_id = registro.id);
                        cons_reduc := (select sum(ting.reduccion) from temp_anexo_51 ting where ting.father_id = registro.id);
                        cons_funct := (select sum(ting.funcionamiento) from temp_anexo_51 ting where ting.father_id = registro.id);
                        cons_inv := (select sum(ting.inversion) from temp_anexo_51 ting where ting.father_id = registro.id);
                        cons_fca := (select sum(ting.fca) from temp_anexo_51 ting where ting.father_id = registro.id);
                        cons_serv := (select sum(ting.serv_deuda) from temp_anexo_51 ting where ting.father_id = registro.id);
                        cons_derch := (select sum(ting.derechos_cobrar) from temp_anexo_51 ting where ting.father_id = registro.id);
                        cons_recaud := (select sum(ting.recaudo) from temp_anexo_51 ting where ting.father_id = registro.id);
                        --se establece el nuevo valor para cada item del registro actual
                        registro.proyectado := registro.proyectado + cons_proy;
                        registro.adicion := registro.adicion + cons_add;
                        registro.reduccion := registro.reduccion + cons_reduc;
                        registro.funcionamiento := registro.funcionamiento + cons_funct;
                        registro.inversion := registro.inversion + cons_inv;
                        registro.fca := registro.fca + cons_fca;
                        registro.serv_deuda := registro.serv_deuda + cons_serv;
                        registro.derechos_cobrar := registro.derechos_cobrar + cons_derch;
                        registro.recaudo := registro.recaudo + cons_recaud;
                    END IF;
                    --se insertan los valores actualizados en la tabla temoporal temp_anexo_51
                    INSERT INTO temp_anexo_51(id,father_id,code,name,proyectado,adicion,
                                                reduccion,funcionamiento,inversion,fca,
                                                serv_deuda,derechos_cobrar,recaudo)
                                VALUES(
                                registro.id,registro.father_id,registro.code,registro.name,
                                registro.proyectado,registro.adicion,registro.reduccion,
                                registro.funcionamiento,registro.inversion,registro.fca,
                                registro.serv_deuda,registro.derechos_cobrar,registro.recaudo
                                );
                END LOOP;
                RETURN QUERY
                SELECT * FROM temp_anexo_51;
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
