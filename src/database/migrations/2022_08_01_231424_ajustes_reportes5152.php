<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjustesReportes5152 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.report_gastos_total(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, father_id integer, codigo character varying, name character varying, presupuestado double precision, comprometido double precision, obligaciones double precision, pagos double precision, pre_nation double precision, com_nation double precision, obl_nation double precision, pag_nation double precision, pre_roy double precision, com_roy double precision, obl_roy double precision, pag_roy double precision, pre_fca double precision, com_fca double precision, obl_fca double precision, pag_fca double precision) 
        
        AS $$
                        declare 
                            --titles text default '';
                            --rec_film  record;	 
                            cur_codes cursor
                                for SELECT crcs.id as cost_sources_id, crcs.father_id, crcs.code,
                                    crcs.group_id, crfc.id as fin_cost, crfc.value_bugeted,
                                    crfc.value_comitted, crfc.value_required,
                                    crfc.value_paid, crfc.own,
                                    crfc.nation, crfc.royalties, crfc.funds, crfc.p_a_i_id
                                FROM
                                    cardinal.cost_sources as crcs
                                    INNER JOIN cardinal.financial_costs  as crfc ON crcs.id = crfc.cost_sources_id
                                    where crfc.p_a_i_id=p_paid and crfc.year=p_year;
                        
                        DECLARE cons_fid integer := 0;
                        DECLARE cons_ffid integer := 0;
                        DECLARE cons_fcode character varying;
                        DECLARE cons_fgid integer := 0;
                        DECLARE cons_fidfc integer := 0;
                        DECLARE cons_fvalue_bugeted double precision DEFAULT 0;
                        DECLARE cons_fvalue_comitted double precision DEFAULT 0;
                        DECLARE cons_fvalue_required double precision DEFAULT 0;
                        DECLARE cons_fvalue_paid double precision DEFAULT 0;
                        DECLARE cons_own boolean;
                        DECLARE cons_nation boolean; 
                        DECLARE cons_royalties boolean; 
                        DECLARE cons_funds boolean; 
                        
                        DECLARE cons_ffund_value double precision DEFAULT 0;
                        DECLARE cons_frecaudo double precision DEFAULT 0;
                        DECLARE len_code integer := 0;
                        DECLARE up_code character varying;
                        DECLARE id_code integer := 0;
                        
                        DECLARE cons2_id integer := 0;
                        DECLARE cons2_value double precision DEFAULT 0;
                        
                        begin
                        
                        --DROP TABLE temp_table;
                        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
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
                        inner join cardinal.groups grp on cs.group_id = grp.id
                        inner join cardinal.pais p on grp.id = p.group_id and p.id = p_paid
                        order by cs.code;
                        
                        -- open the cursor
                        open cur_codes;
                        
                        loop
                            -- fetch row into the film
                            fetch cur_codes into cons_fid,cons_ffid,cons_fcode,cons_fgid,cons_fidfc,cons_fvalue_bugeted,
                            cons_fvalue_comitted,cons_fvalue_required,cons_fvalue_paid,cons_own, cons_nation,cons_royalties,cons_funds ;
                            -- exit when no more row to fetch
                            exit when not found;
                        
                            -- build the output
                                len_code := CAST(char_length(REPLACE(cons_fcode,'.', '')) as integer);
                                --up_code := substring(cons_fcode, 1 , @len_code -2 );
                                IF cons_own is True THEN
                                update temp_table set 
                                    presupuestado=cons_fvalue_bugeted, 
                                    comprometido=cons_fvalue_comitted,
                                    obligaciones=cons_fvalue_required,
                                    pagos=cons_fvalue_paid
                                where temp_table.id=cons_fid and temp_table.code=cons_fcode;
                                up_code :=cons_fcode;
                                ELSEIF cons_nation is True THEN
                                    update temp_table set 
                                    pre_nation=cons_fvalue_bugeted, 
                                    com_nation=cons_fvalue_comitted,
                                    obl_nation=cons_fvalue_required,
                                    pag_nation=cons_fvalue_paid
                                where temp_table.id=cons_fid and temp_table.code=cons_fcode;
                                up_code :=cons_fcode;
                                ELSEIF cons_royalties is True THEN
                                    update temp_table set 
                                    pre_roy=cons_fvalue_bugeted, 
                                    com_roy=cons_fvalue_comitted,
                                    obl_roy=cons_fvalue_required,
                                    pag_roy=cons_fvalue_paid
                                where temp_table.id=cons_fid and temp_table.code=cons_fcode;
                                up_code :=cons_fcode;
                                ELSEIF cons_funds is True THEN
                                    update temp_table set 
                                    pre_fca=cons_fvalue_bugeted, 
                                    com_fca=cons_fvalue_comitted,
                                    obl_fca=cons_fvalue_required,
                                    pag_fca=cons_fvalue_paid
                                where temp_table.id=cons_fid and temp_table.code=cons_fcode;
                                up_code :=cons_fcode;
                                
                                END IF;
                                
                                LOOP
                                id_code := (select distinct cssb.father_id from cardinal.cost_sources as cssb where code=up_code and final_level=false);
                                IF cons_own is True THEN
                                update temp_table set presupuestado=(temp_table.presupuestado + cons_fvalue_bugeted),
                                comprometido=(temp_table.comprometido + cons_fvalue_comitted),
                                obligaciones=(temp_table.obligaciones + cons_fvalue_required),
                                pagos=(temp_table.pagos + cons_fvalue_paid)
                                where  temp_table.code=(select code from cardinal.cost_sources  where 
                                cost_sources.id=(select distinct cssb.father_id from cardinal.cost_sources as cssb where code=up_code and final_level=false));
                                
                                ELSEIF cons_nation is True THEN
                                update temp_table set pre_nation=(temp_table.pre_nation + cons_fvalue_bugeted),
                                com_nation=(temp_table.com_nation + cons_fvalue_comitted),
                                obl_nation=(temp_table.obl_nation + cons_fvalue_required),
                                pag_nation=(temp_table.pag_nation + cons_fvalue_paid)
                                where  temp_table.code=(select code from cardinal.cost_sources  where 
                                cost_sources.id=(select distinct cssb.father_id from cardinal.cost_sources as cssb where code=up_code and final_level=false));		  
                                
                                ELSEIF cons_royalties is True THEN
                                update temp_table set pre_roy=(temp_table.pre_roy + cons_fvalue_bugeted),
                                com_roy=(temp_table.com_roy + cons_fvalue_comitted),
                                obl_roy=(temp_table.obl_roy + cons_fvalue_required),
                                pag_roy=(temp_table.pag_roy + cons_fvalue_paid)
                                where  temp_table.code=(select code from cardinal.cost_sources  where 
                                cost_sources.id=(select distinct cssb.father_id from cardinal.cost_sources as cssb where code=up_code and final_level=false));
                                
                                ELSEIF cons_funds is True THEN
                                update temp_table set pre_fca=(temp_table.pre_fca + cons_fvalue_bugeted),
                                com_fca=(temp_table.com_fca + cons_fvalue_comitted),
                                obl_fca=(temp_table.obl_fca + cons_fvalue_required),
                                pag_fca=(temp_table.pag_fca + cons_fvalue_paid)
                                where  temp_table.code=(select code from cardinal.cost_sources  where 
                                cost_sources.id=(select distinct cssb.father_id from cardinal.cost_sources as cssb where code=up_code and final_level=false));  
                                
                                END IF;
                                
                                
                                
                                len_code := len_code-1;
                                up_code := (select code from cardinal.cost_sources where cost_sources.id=id_code);
                                EXIT WHEN len_code =0;
                                END LOOP;
                        end loop;
                        
                        -- close the cursor
                        close cur_codes;
                        
                        
                        
                        RETURN QUERY 
                        SELECT *
                        from temp_table; --where temp_table.father_id=5;
                        --   return titles;
                        DROP TABLE temp_table;
                        end;
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.cursor_test(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(father_id integer, codigo character varying, name character varying, id_plan double precision, proyectado double precision, funcionamiento double precision, inversion double precision, fca double precision, serv_deuda double precision, subtotal double precision) 
        
        AS $$
                        declare
                            --cursor de fuentes y plan financiero
                            cur_codes cursor
                                 for Select p.father_id,p.code,p.id_plan,sum(fnd.value), sum(p.proyectado),sum(p.funcionamiento),sum(p.inversion),sum(p.fca),sum(p.serv_deuda),sum(p.subtotal)
                                        from (select distinct fs.id,fp.id as id_plan, fs.father_id, fs.code, fs.name, fp.value as proyectado,
                                        fp.functioning as funcionamiento,fp.investment as inversion,fp.fund as fca, fp.debt_service as serv_deuda,
                                        (fp.functioning_balance+fp.investment_balance+fp.fund_balance+fp.debt_service_balance) as subtotal 
                                              from cardinal.financing_sources as fs
                                        inner JOIN cardinal.financial_plans as fp ON fs.id = fp.source_id                 
                                        where fp.year=p_year and fs.final_level=true and fp.p_a_i_id=p_paid
                                        group by fs.father_id,fs.code, fs.name,fp.value ,fs.id,fp.id,fp.functioning,fp.investment,fp.fund,fp.debt_service,subtotal
                                        order by fs.father_id asc) as p
                                        left JOIN cardinal.fundraisings as fnd ON fnd.financial_plans_id = p.id_plan
                                        Group by p.father_id,p.code, p.id_plan;
                            cur_costs cursor
                             for SELECT fnd.financial_plans_id, sum(fnd.value) FROM cardinal.fundraisings as fnd
                                    INNER JOIN cardinal.financial_plans as fp ON fnd.financial_plans_id = fp.id
                                    where fp.year=p_year  and fp.p_a_i_id=p_paid
                                    group by fnd.financial_plans_id;
                        
                        DECLARE cons_fid integer := 0;
                        DECLARE cons_ffund integer := 0;
                        DECLARE cons_ffund_value double precision DEFAULT 0;
                        DECLARE cons_fproy double precision DEFAULT 0;
                        DECLARE cons_ffun double precision DEFAULT 0;
                        DECLARE cons_finv double precision DEFAULT 0;
                        DECLARE cons_ffca double precision DEFAULT 0;
                        DECLARE cons_fserv double precision DEFAULT 0;
                        DECLARE cons_fcode character varying;
                        DECLARE cons_frecaudo double precision DEFAULT 0;
                        DECLARE len_code integer := 0;
                        DECLARE up_code character varying;
                        DECLARE id_code integer := 0;
                        
                        DECLARE cons2_id integer := 0;
                        DECLARE cons2_value double precision DEFAULT 0;
                        
                        begin
                         
                        --DROP TABLE temp_table;
                        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
                        select distinct ffs.father_id, ffs.code, ffs.name,
                        CAST(0 as double precision) as id_plan,
                        CAST(0 as double precision) as proyectado,
                        CAST(0 as double precision) as funcionamiento,
                        CAST(0 as double precision) as inversion,
                        CAST(0 as double precision) as fca,
                        CAST(0 as double precision) as serv_deuda,
                        CAST( 0 as double precision) as subtotal from cardinal.financing_sources as ffs
                        inner join cardinal.groups grp on ffs.group_id = grp.id
                        inner join cardinal.pais p on grp.id = p.group_id and p.id = p_paid
                        order by ffs.code;
                        
                           -- open the cursor
                           open cur_codes;
                            
                           loop
                            -- fetch row into the film
                              fetch cur_codes into cons_fid,cons_fcode,cons_ffund,cons_frecaudo,cons_fproy,cons_ffun,cons_finv,cons_ffca,cons_fserv,cons_ffund_value;
                            -- exit when no more row to fetch
                              exit when not found;
                        
                            -- build the output
                              if cons_fproy <> 0  then
                                   len_code := CAST(char_length(REPLACE(cons_fcode,'.', '')) as integer);
                                 --up_code := substring(cons_fcode, 1 , @len_code -2 );
                                 update temp_table set id_plan=cons_ffund,
                                 proyectado=cons_fproy,
                                 funcionamiento=cons_ffun,
                                  inversion=cons_finv,
                                  fca=cons_ffca,
                                  serv_deuda=cons_fserv,
                                  subtotal=cons_frecaudo
                                 where temp_table.father_id in (cons_fid) and temp_table.code in (cons_fcode);
                                 up_code :=cons_fcode;
                                LOOP
                                  id_code := (select distinct fssb.father_id from cardinal.financing_sources as fssb 
                                              inner join cardinal.groups grp on fssb.group_id = grp.id
                                              inner join cardinal.pais p on grp.id = p.group_id and p.id = p_paid
                                              --where final_level=false group by fssb.father_id
                                              where code=up_code and final_level=false group by fssb.father_id);
                                  update temp_table set proyectado=(temp_table.proyectado + cons_fproy),
                                  funcionamiento=(temp_table.funcionamiento + cons_ffun),
                                  inversion=(temp_table.inversion + cons_finv),
                                  fca=(temp_table.fca + cons_ffca),
                                  serv_deuda=(temp_table.serv_deuda + cons_fserv),
                                  subtotal=(temp_table.subtotal + cons_frecaudo)
                                  where  temp_table.code in (select code from cardinal.financing_sources where id in (select fssb.father_id from cardinal.financing_sources as fssb where code=up_code and final_level=false group by fssb.father_id));
                                  
                                  len_code := len_code-1;
                                  up_code := (select code from cardinal.financing_sources where id=id_code);
                                  EXIT WHEN len_code =0;
                                END LOOP;
                              end if;
                           end loop;
                          
                           -- close the cursor
                           close cur_codes;
                        RETURN QUERY
                        SELECT *
                        from temp_table; --where temp_table.father_id=5;
                        --   return table;
                        DROP TABLE temp_table;
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
        //
    }
}
