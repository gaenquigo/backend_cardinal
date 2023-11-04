<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedFca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.fca(
            p_year integer,
            p_paid integer,
            p_aniorep integer,
            p_mesrep integer)
            RETURNS TABLE(father_id integer, codigo character varying, name character varying, id_plan double precision, recaudo double precision, liquidacion_fca double precision, porc_registrado double precision, code_new character varying, len_codigo double precision) AS $$
        declare 
        
            cur_codes cursor
                 for select distinct fs.id,fp.id as id_plan, fs.father_id, fs.code, fs.name, EXTRACT(YEAR FROM fb.date) as anio,EXTRACT(MONTH FROM fb.date) as mes,
                         SUM(fb.value) AS fundraising_value,fb.financial_plans_id,fp.source_id,fp.value,fp.year,fp.fund_percentage	
                        from financing_sources as fs
                        inner JOIN public.financial_plans as fp ON fs.id = fp.source_id 
                        INNER JOIN public.fundraisings as fb ON fp.id = fb.financial_plans_id
                        where --fp.year=3 and 
                        fs.final_level=true and fp.p_a_i_id=p_paid
                        and fs.type_id=(select domains.id from domains where domains.name='Propio')
                        and EXTRACT(YEAR FROM fb.date) =p_aniorep  and EXTRACT(MONTH FROM fb.date)=p_mesrep
                        group by fs.id,fp.id, fs.father_id, fs.code, fs.name, EXTRACT(YEAR FROM fb.date),EXTRACT(MONTH FROM fb.date),
                                fb.financial_plans_id,fp.source_id,fp.value,fp.year,fp.fund_percentage
                        order by fs.father_id asc;
                 
        DECLARE cons_fid integer := 0;
        DECLARE cons_fid_plan integer := 0;
        DECLARE cons_ffather integer := 0;
        DECLARE cons_fcode character varying;
        DECLARE cons_fname character varying;
        DECLARE cons_anio double precision DEFAULT 0;
        DECLARE cons_mes double precision DEFAULT 0;
        DECLARE cons_frecaudo double precision DEFAULT 0;
        DECLARE cons_finplan_id integer := 0;
        DECLARE cons_fsource_id integer := 0;
        DECLARE cons_fpvalue double precision DEFAULT 0;
        DECLARE cons_fyear integer := 0;
        DECLARE cons_fundperc double precision DEFAULT 0;
        
        DECLARE temp_recaudo double precision DEFAULT 0;
        DECLARE temp_liquidacion double precision DEFAULT 0;
        
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
        CAST(0 as double precision) as recaudo,
        CAST(0 as double precision) as liquidacion_fca,
        CAST(0 as double precision) as porc_registrado,
        CAST(0 as character varying)  as code_new,
        CAST(0 as double precision) as len_codigo
        
        from public.financing_sources as ffs
        order by ffs.code;
        
           -- open the cursor
           open cur_codes;
            
           loop
            -- fetch row into the film
              fetch cur_codes into cons_fid,cons_fid_plan, cons_ffather,cons_fcode, cons_fname,cons_anio,cons_mes,cons_frecaudo,cons_finplan_id,cons_fsource_id,cons_fpvalue,cons_fyear,cons_fundperc;
              
        
            -- exit when no more row to fetch
              exit when not found;
        
            -- build the output
        
                len_code := CAST(char_length(cons_fcode) as integer);
                up_code :=cons_fcode;
                
                   --len_code := CAST(char_length(REPLACE(cons_fcode,'.', '')) as integer);
                 --up_code := substring(cons_fcode, 1 , @len_code -2 );
                 
                 update temp_table set id_plan=cons_fid_plan, recaudo= cons_frecaudo, porc_registrado= cons_fundperc, liquidacion_fca= ((cons_frecaudo*cons_fundperc)/100),
                 len_codigo=len_code
                 where temp_table.father_id=cons_ffather and temp_table.code=cons_fcode;
                 
                up_code := substring(cons_fcode, 1 , @len_code -2 ); 		 
                
                LOOP
                --id_code := up_code;	
                    
                --up_code := substring(up_code, 1 , CAST(char_length(up_code) as integer) -2);
                
                temp_recaudo := (select sum(temp_table.recaudo) from temp_table where temp_table.code=up_code);
                temp_liquidacion := (select sum(temp_table.liquidacion_fca) from temp_table where temp_table.code=up_code);
                --se busca el padre del código
                --id_code := (select fssb.father_id from financing_sources as fssb where code=up_code and group_id=p_paid and final_level=false);
                  id_code := (select fssb.father_id from financing_sources as fssb where code=up_code and final_level=false);
                  update temp_table set   
                  recaudo=(temp_recaudo + cons_frecaudo),
                  liquidacion_fca=(temp_liquidacion+ ((cons_frecaudo*cons_fundperc)/100)),
                  code_new=up_code,
                  len_codigo=len_code
                  
                  where  temp_table.code=up_code;
                  
                  --len_code := CAST(char_length(REPLACE(up_code,'.', '')) as integer);
                  
                  up_code := (select code from financing_sources where id=id_code);
                  len_code := len_code - 2;
                  
                  EXIT WHEN len_code <=2;
                  
                END LOOP;
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

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.fca_report(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, father_id integer, codigo character varying, name character varying, presupuestado double precision, comprometido double precision, obligaciones double precision, pagos double precision) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for SELECT crcs.id as cost_sources_id, crcs.father_id, crcs.code,
                     crcs.group_id, crfc.id as fin_cost, crfc.value_bugeted,
                     crfc.value_comitted, crfc.value_required, crfc.value_paid, crfc.own,
                     crfc.nation, crfc.royalties, crfc.funds, crfc.p_a_i_id
                FROM
                     public.cost_sources as crcs
                     INNER JOIN public.financial_costs  as crfc ON crcs.id = crfc.cost_sources_id
                     where crfc.own=p_own  and  crfc.nation=p_nation and 
                     crfc.royalties=p_royalties and crfc.funds=p_fund and 
                     crfc.p_a_i_id=p_paid and crfc.year=p_year;
        
        DECLARE cons_fid integer := 0;
        DECLARE cons_ffid integer := 0;
        DECLARE cons_fcode character varying;
        DECLARE cons_fgid integer := 0;
        DECLARE cons_fidfc integer := 0;
        DECLARE cons_fvalue_bugeted double precision DEFAULT 0;
        DECLARE cons_fvalue_comitted double precision DEFAULT 0;
        DECLARE cons_fvalue_required double precision DEFAULT 0;
        DECLARE cons_fvalue_paid double precision DEFAULT 0;
        
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
        CAST(0 as double precision) as presupuestado,
        CAST(0 as double precision) as comprometido,
        CAST(0 as double precision) as obligaciones,
        CAST(0 as double precision) as pagos
        from  public.cost_sources as cs 
        order by cs.code;
        
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_fid,cons_ffid,cons_fcode,cons_fgid,cons_fidfc,cons_fvalue_bugeted,cons_fvalue_comitted,cons_fvalue_required,cons_fvalue_paid;
            -- exit when no more row to fetch
              exit when not found;
        
            -- build the output
                   len_code := CAST(char_length(REPLACE(cons_fcode,'.', '')) as integer);
                 --up_code := substring(cons_fcode, 1 , @len_code -2 );
                 update temp_table set 
                 presupuestado=cons_fvalue_bugeted, 
                 comprometido=cons_fvalue_comitted,
                  obligaciones=cons_fvalue_required,
                  pagos=cons_fvalue_paid
                 where temp_table.id=cons_fid and temp_table.code=cons_fcode;
                 up_code :=cons_fcode;
                 
                LOOP
                  id_code := (select distinct cssb.father_id from cost_sources as cssb where code=up_code and final_level=false);
                  update temp_table set presupuestado=(temp_table.presupuestado + cons_fvalue_bugeted),
                  comprometido=(temp_table.comprometido + cons_fvalue_comitted),
                  obligaciones=(temp_table.obligaciones + cons_fvalue_required),
                  pagos=(temp_table.pagos + cons_fvalue_paid)
                  where  temp_table.code=(select code from cost_sources  where cost_sources.id=(select distinct cssb.father_id from cost_sources as cssb where code=up_code and final_level=false));
                  len_code := len_code-1;
                  up_code := (select code from cost_sources where cost_sources.id=id_code);
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
