<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedCursortest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.cursor_test(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(father_id integer, codigo character varying, name character varying, id_plan double precision, proyectado double precision, funcionamiento double precision, inversion double precision, fca double precision, serv_deuda double precision, subtotal double precision) AS $$
        declare 
        
            cur_codes cursor
                 for Select p.father_id,p.code,p.id_plan,sum(fnd.value), sum(p.proyectado),sum(p.funcionamiento),sum(p.inversion),sum(p.fca),sum(p.serv_deuda),sum(p.subtotal)
                        from (select distinct fs.id,fp.id as id_plan, fs.father_id, fs.code, fs.name, fp.value as proyectado,
                        fp.functioning as funcionamiento,fp.investment as inversion,fp.fund as fca, fp.debt_service as serv_deuda,
                        (fp.functioning_balance+fp.investment_balance+fp.fund_balance+fp.debt_service_balance) as subtotal from financing_sources as fs
                        inner JOIN public.financial_plans as fp ON fs.id = fp.source_id 				
                        where fp.year=p_year and fs.final_level=true and fp.p_a_i_id=p_paid
                        group by fs.father_id,fs.code, fs.name,fp.value ,fs.id,fp.id,fp.functioning,fp.investment,fp.fund,fp.debt_service,subtotal
                        order by fs.father_id asc) as p
                        left JOIN public.fundraisings as fnd ON fnd.financial_plans_id = p.id_plan
                        Group by p.father_id,p.code, p.id_plan;
                 
                 
                 
            --	 Select p.father_id,p.code,p.id_plan, sum(p.proyectado),sum(p.funcionamiento),sum(p.inversion),sum(p.fca),sum(p.serv_deuda),sum(p.subtotal)
            --			from (select distinct fs.id,fp.id as id_plan, fs.father_id, fs.code, fs.name, fp.value as proyectado,
            --			fp.functioning as funcionamiento,fp.investment as inversion,fp.fund as fca, fp.debt_service as serv_deuda,
            --		    (fp.functioning_balance+fp.investment_balance+fp.fund_balance+fp.debt_service_balance) as subtotal from financing_sources as fs
            --			FULL JOIN public.financial_plans as fp ON fs.id = fp.source_id
            --			where fp.year=p_year and fs.final_level=true and fp.p_a_i_id=p_paid
            --			group by fs.father_id,fs.code, fs.name,fp.value ,fs.id,fp.id,fp.functioning,fp.investment,fp.fund,fp.debt_service,subtotal
            -- 		    order by fs.father_id asc) as p
            --			Group by p.father_id,p.code, p.id_plan;
            cur_costs cursor
             for SELECT fnd.financial_plans_id, sum(fnd.value) FROM public.fundraisings as fnd
                    INNER JOIN public.financial_plans as fp ON fnd.financial_plans_id = fp.id
                    where fp.year=p_year
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
        CAST( 0 as double precision) as subtotal from public.financing_sources as ffs
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
                 where temp_table.father_id=cons_fid and temp_table.code=cons_fcode;
                 up_code :=cons_fcode;
                LOOP
                  id_code := (select distinct fssb.father_id from financing_sources as fssb where code=up_code and final_level=false);
                  update temp_table set proyectado=(temp_table.proyectado + cons_fproy),
                  funcionamiento=(temp_table.funcionamiento + cons_ffun),
                  inversion=(temp_table.inversion + cons_finv),
                  fca=(temp_table.fca + cons_ffca),
                  serv_deuda=(temp_table.serv_deuda + cons_fserv),
                  subtotal=(temp_table.subtotal + cons_frecaudo)
                  
                  where  temp_table.code=(select code from financing_sources  where id in (select fssb.father_id from financing_sources as fssb where code=up_code and final_level=false));
                  
                  len_code := len_code-1;
                  up_code := (select code from financing_sources where id=id_code);
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
