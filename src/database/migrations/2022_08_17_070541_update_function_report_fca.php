<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateFunctionReportFca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.fca(
            p_year integer,
            p_paid integer,
            p_aniorep integer,
            p_mesrep integer)
            RETURNS TABLE(father_id integer, codigo character varying, name character varying, id_plan double precision, recaudo double precision, liquidacion_fca double precision, porc_registrado double precision, code_new character varying, len_codigo double precision) AS $$
                declare 
                
                    cur_codes cursor
                         for select distinct fs.id,fp.id as id_plan, fs.father_id, fs.code, fs.name, EXTRACT(YEAR FROM fb.date) as anio,EXTRACT(MONTH FROM fb.date) as mes,
                                 SUM(fb.value) AS fundraising_value,fb.financial_plans_id,fp.source_id,fp.value,fp.year,fp.fund_percentage	
                                from cardinal.financing_sources as fs
                                inner JOIN cardinal.financial_plans as fp ON fs.id = fp.source_id 
                                INNER JOIN cardinal.fundraisings as fb ON fp.id = fb.financial_plans_id
                                where --fp.year=3 and 
                                fs.final_level=true and fp.p_a_i_id=p_paid
                                and fs.type_id=(select domains.id from cardinal.domains where domains.name='Propio')
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
                
                from cardinal.financing_sources as ffs
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
                        id_code := (select fssb.father_id from cardinal.financing_sources as fssb where code=up_code and group_id=p_paid and final_level=false);
                        --id_code := (select fssb.father_id from cardinal.financing_sources as fssb where code=up_code and final_level=false);
                        --id_code := (select fssb.father_id from cardinal.financing_sources as fssb where code=up_code and final_level=false group by fssb.father_id);
                          update temp_table set   
                          recaudo=(temp_recaudo + cons_frecaudo),
                          liquidacion_fca=(temp_liquidacion+ ((cons_frecaudo*cons_fundperc)/100)),
                          code_new=up_code,
                          len_codigo=len_code
                          
                          where  temp_table.code=up_code;
                          
                          --len_code := CAST(char_length(REPLACE(up_code,'.', '')) as integer);
                          
                          up_code := (select code from cardinal.financing_sources where id=id_code);
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
