<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedIndicadortipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_1(
            p_year integer,
            p_paid integer,
            p_type character varying)
            RETURNS TABLE(id bigint, iyear double precision, num_year1 double precision, num_year2 double precision, num_year3 double precision, num_year4 double precision, den_year1 double precision, den_year2 double precision, den_year3 double precision, den_year4 double precision) AS $$
        declare  
            cur_codes cursor
                 for  SELECT
             public.indicator_activities.year,
             sum(public.indicator_activities.numerator),
             sum(public.indicator_activities.denominator)
                FROM
             public.activities 
             --inner JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
             INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
             INNER JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id 
             INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
             INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
             INNER JOIN public.programs ON public.projects.program_id = public.programs.id
             INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
             
             where public.indicators.abbreviated_name = p_type
             and public.strategic_lines.p_a_i_id=p_paid
             group by public.indicator_activities.year;
                 
        
        DECLARE   cons_1   double precision := 0;
        DECLARE   cons_2   double precision := 0;
        DECLARE   cons_3   double precision := 0;
        DECLARE   cons_4  character varying;
        DECLARE   cons_5  integer := 0;
        DECLARE   cons_6  integer := 0;
        DECLARE   cons_7  integer := 0;
        DECLARE   cons_8  character varying;
        DECLARE   cons_9  integer := 0;
        DECLARE   cons_10  integer := 0;
        
        DECLARE   cons_pago double precision := 0;
        DECLARE   cons_oblig double precision := 0;
        DECLARE   id_prod_tmp integer :=0;
        DECLARE   id_proy_tmp integer :=0;
        DECLARE   id_prog_tmp integer :=0;
        DECLARE   id_obj_tmp integer :=0;
        
        DECLARE   index_tmp  integer := 0;
        DECLARE cons_fid integer := 0;
        DECLARE cons_ffid integer := 0;
        DECLARE cons_fcode character varying;
        DECLARE cons_fgid integer := 0;
        DECLARE cons_fidfc integer := 0;
        
        DECLARE len_code integer := 0;
        DECLARE up_code character varying;
        DECLARE id_code integer := 0;
        
        DECLARE cons2_id integer := 0;
        DECLARE cons2_value double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST(0 as double precision) as iyear,
        CAST(0 as double precision) as num_year1,
        CAST(0 as double precision) as num_year2,
        CAST(0 as double precision) as num_year3,
        CAST(0 as double precision) as num_year4,
        CAST(0 as double precision) as den_year1,
        CAST(0 as double precision) as den_year2,
        CAST(0 as double precision) as den_year3,
        CAST(0 as double precision) as den_year4
        
        from  public.activities act 
        order by act.id
        limit 1;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2,cons_3;
        
            -- exit when no more row to fetch
              exit when not found;
        
            index_tmp := index_tmp+1;	
        
            IF cons_2 is NULL THEN
            cons_2:=0;
            END IF;
            IF cons_3 is NULL THEN
            cons_3:=0;
            
            END IF;
            IF cons_1=1 THEN
        
            UPDATE temp_table SET   num_year1=cons_2, den_year1=cons_3 WHERE  temp_table.id=1;
            END IF;
            
            IF cons_1=2 THEN
            UPDATE temp_table SET  num_year2=cons_2, den_year2=cons_3 WHERE  temp_table.id=1;
            END IF;
            
            IF cons_1=3 THEN
                UPDATE temp_table SET  num_year3=cons_2, den_year3=cons_3 WHERE   temp_table.id=1;
            END IF;
            
            IF cons_1=4 THEN
                 UPDATE temp_table SET num_year4=cons_2, den_year4=cons_3 WHERE  temp_table.id=1;
            END IF;
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id_activity integer, name character varying, category_name character varying, year integer, presp_ini double precision, presp_def double precision, comprometido double precision, pagos double precision, obligaciones double precision, tipo_accion character varying, area_int character varying, observaciones character varying) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for select resultado.id, resultado.name, resultado.category_name,resultado.year, sum(resultado.presp_def) as presp_def from (SELECT DISTINCT
        
                      public.activities.id,
                      public.activities.name,
                      public.variables.category_name,
                     public.indicator_activities.year,
                      public.activity_sources.value as presp_def
                FROM
                     public.activities INNER JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
                     AND public.activities.id = public.indicator_activities.activities_id
                     LEFT JOIN public.evidence_advance ON public.indicator_activities.evidence_id = public.evidence_advance.id
                     INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                     INNER JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id
                     INNER JOIN public.variables ON public.indicator_activities.variable_id = public.variables.id
                     INNER JOIN public.activity_sources ON public.activities.id = public.activity_sources.activity_id
                     LEFT JOIN public.evidence_financial ON public.activity_sources.id = public.evidence_financial.activity_source_id
                     INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                     INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                     INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                     INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                WHERE
                     public.indicators.abbreviated_name = 'PSER'
                     and public.strategic_lines.p_a_i_id = p_paid
                     and public.indicator_activities.year=p_year
                     and public.activity_sources.age=p_year
                    GROUP BY  public.activities.id,	 public.variables.category_name,
                         public.indicator_activities.year,public.activity_sources.value
        ) as resultado
        
        group by resultado.id, resultado.name, resultado.category_name,resultado.year;
            
        
            
            cur_costs cursor
             for SELECT fnd.financial_plans_id, sum(fnd.value) FROM public.fundraisings as fnd
                    INNER JOIN public.financial_plans as fp ON fnd.financial_plans_id = fp.id
                    where fp.year=p_year
                    group by fnd.financial_plans_id;
        
        DECLARE cons_id_act integer := 0;
        DECLARE cons_name character varying;
        DECLARE cons_cat_name character varying;
        DECLARE cons_year integer := 0;
        DECLARE cons_presp_def double precision DEFAULT 0;
        DECLARE cons_compromisos double precision DEFAULT 0;
        DECLARE cons_pagos double precision DEFAULT 0;
        DECLARE cons_obligaciones double precision DEFAULT 0;
        DECLARE cons_tipo_accion character varying;
        DECLARE cons_area_int character varying;
        DECLARE cons_observaciones character varying;
        DECLARE presupuesto_ini double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select  
        CAST(0 as integer) as id_activity,
        CAST('' as character varying) as name,
        CAST('' as character varying) as category_name,
        CAST(0 as integer) as year,
        CAST(0 as double precision) as presp_ini,
        CAST(0 as double precision) as presp_def,
        CAST(0 as double precision) as comprometido,
        CAST(0 as double precision) as pagos,
        CAST(0 as double precision) as obligaciones,
        CAST(0 as character varying) as tipo_accion,
        CAST(0 as character varying) as area_int,
        CAST(0 as character varying) as observaciones
        
        from public.financing_sources as ffs limit 0;
        
           -- open the cursor
           open cur_codes;
            
           loop
            -- fetch row into the film
              fetch cur_codes into cons_id_act, cons_name, cons_cat_name, cons_year,cons_presp_def ;
            -- exit when no more row to fetch
              exit when not found;
        
            -- build the output
            
            presupuesto_ini = (SELECT  public.budget_from_history(p_year,cons_id_act,p_paid));
            IF presupuesto_ini is NULL THEN 
            presupuesto_ini:= cons_presp_def;
            END IF;
            cons_compromisos:=(SELECT
             sum (public.evidence_financial.value) as comprometido
                FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act 
        AND public.evidence_advance.year=p_year);
        
            cons_pagos:=(SELECT sum(value)
        FROM  payments
        WHERE evidence_id
              IN (SELECT distinct
            evidence_advance.id
        FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act
        AND public.evidence_advance.year=p_year)
            AND payment=True
            );
            
                cons_obligaciones:=(SELECT sum(value)
        FROM  payments
        WHERE evidence_id
              IN (SELECT distinct
            evidence_advance.id
        FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act
        AND public.evidence_advance.year=p_year )
            );
        
        cons_tipo_accion:=(SELECT
                           string_agg(public.other_data_year.value, ', ')
            -- public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Tipo de acción'-- limit 1
                          );
        cons_area_int:=(SELECT
                        string_agg(public.other_data_year.value, ', ')
             --public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Área de intervención (ha)' --limit 1
                       );
        cons_observaciones:=(SELECT
                             string_agg(public.other_data_year.value, ', ')
            -- public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Observaciones'  --limit 1 
                            );
        
                  INSERT INTO temp_table(id_activity, name,category_name,year,presp_ini,presp_def, comprometido,pagos,obligaciones,tipo_accion,area_int,observaciones)VALUES 
            (cons_id_act, cons_name, cons_cat_name, cons_year,presupuesto_ini,cons_presp_def,cons_compromisos,cons_pagos,cons_obligaciones,cons_tipo_accion,cons_area_int,cons_observaciones);
        
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
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_amen_comp(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id_activity integer, name character varying, category_name character varying, year integer, presp_ini double precision, presp_def double precision, comprometido double precision, pagos double precision, obligaciones double precision, tipo_cont_marin character varying, flo_fau character varying, observaciones character varying, nombre_cient character varying) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for select resultado.id, resultado.name, resultado.category_name,resultado.year, sum(resultado.presp_def) as presp_def from (SELECT DISTINCT
        
                      public.activities.id,
                      public.activities.name,
                      public.variables.category_name,
                     public.indicator_activities.year,
                      public.activity_sources.value as presp_def
                FROM
                     public.activities INNER JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
                     AND public.activities.id = public.indicator_activities.activities_id
                     LEFT JOIN public.evidence_advance ON public.indicator_activities.evidence_id = public.evidence_advance.id
                     INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                     INNER JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id
                     INNER JOIN public.variables ON public.indicator_activities.variable_id = public.variables.id
                     INNER JOIN public.activity_sources ON public.activities.id = public.activity_sources.activity_id
                     LEFT JOIN public.evidence_financial ON public.activity_sources.id = public.evidence_financial.activity_source_id
                     INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                     INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                     INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                     INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                WHERE
                     public.indicators.abbreviated_name = 'PEAMME'
                     and public.strategic_lines.p_a_i_id = p_paid
                     and public.indicator_activities.year=p_year
                     and public.activity_sources.age=p_year
                    GROUP BY  public.activities.id,	 public.variables.category_name,
                         public.indicator_activities.year,public.activity_sources.value
        ) as resultado
        
        group by resultado.id, resultado.name, resultado.category_name,resultado.year;
            
        
            
            cur_costs cursor
             for SELECT fnd.financial_plans_id, sum(fnd.value) FROM public.fundraisings as fnd
                    INNER JOIN public.financial_plans as fp ON fnd.financial_plans_id = fp.id
                    where fp.year=p_year
                    group by fnd.financial_plans_id;
        
        DECLARE cons_id_act integer := 0;
        DECLARE cons_name character varying;
        DECLARE cons_cat_name character varying;
        DECLARE cons_year integer := 0;
        DECLARE cons_presp_def double precision DEFAULT 0;
        DECLARE cons_compromisos double precision DEFAULT 0;
        DECLARE cons_pagos double precision DEFAULT 0;
        DECLARE cons_obligaciones double precision DEFAULT 0;
        DECLARE cons_tipo_cont_marin character varying;
        DECLARE cons_flo_fau character varying;
        DECLARE cons_observaciones character varying;
        DECLARE cons_nombre_cient character varying;
        DECLARE presupuesto_ini double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select  
        CAST(0 as integer) as id_activity,
        CAST('' as character varying) as name,
        CAST('' as character varying) as category_name,
        CAST(0 as integer) as year,
        CAST(0 as double precision) as presp_ini,
        CAST(0 as double precision) as presp_def,
        CAST(0 as double precision) as comprometido,
        CAST(0 as double precision) as pagos,
        CAST(0 as double precision) as obligaciones,
        CAST(0 as character varying) as tipo_cont_marin,
        CAST(0 as character varying) as flo_fau,
        CAST(0 as character varying) as observaciones,
        CAST(0 as character varying) as nombre_cient
        
        from public.financing_sources as ffs limit 0;
        
           -- open the cursor
           open cur_codes;
            
           loop
            -- fetch row into the film
              fetch cur_codes into cons_id_act, cons_name, cons_cat_name, cons_year,cons_presp_def ;
            -- exit when no more row to fetch
              exit when not found;
        
            -- build the output
            
            presupuesto_ini = (SELECT  public.budget_from_history(p_year,cons_id_act,p_paid));
            
                IF presupuesto_ini is NULL THEN 
            presupuesto_ini:= cons_presp_def;
            END IF;
        
            cons_compromisos:=(SELECT
                                sum (public.evidence_financial.value) as comprometido
                                FROM
                                public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
                                INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
                                INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
                                AND public.activities.id = public.indicator_activities.activities_id
                                where public.evidence_advance.activity_id=cons_id_act 
                                AND public.evidence_advance.year=p_year);
        
            cons_pagos:=(SELECT sum(value)
                            FROM  payments
                            WHERE evidence_id
                            IN (SELECT distinct
                            evidence_advance.id
                            FROM
                            public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
                            INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
                            INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
                            AND public.activities.id = public.indicator_activities.activities_id
                            where public.evidence_advance.activity_id=cons_id_act
                            AND public.evidence_advance.year=p_year)
                            AND payment=True
                            );
            
                cons_obligaciones:=(SELECT sum(value)
                        FROM  payments
                        WHERE evidence_id
                        IN (SELECT distinct
                        evidence_advance.id
                        FROM
                        public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
                        INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
                        INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
                        AND public.activities.id = public.indicator_activities.activities_id
                        where public.evidence_advance.activity_id=cons_id_act
                        AND public.evidence_advance.year=p_year)
                        );
        
        cons_tipo_cont_marin:=(SELECT
                                    string_agg(public.other_data_year.value, ', ')
                                    --public.other_data_year.value
                                    FROM
                                    public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                    where     public.other_data_year.activity_id=cons_id_act 
                                    and  public.other_data_year.year=p_year
                                    and public.other_data.variable_name='Tipo (Continental o marina)');
        
        cons_flo_fau:=(SELECT
                            string_agg(public.other_data_year.value, ', ')
                            --public.other_data_year.value
                            FROM
                            public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                            where     public.other_data_year.activity_id=cons_id_act 
                            and  public.other_data_year.year=p_year
                            and public.other_data.variable_name='Tipo (Flora o fauna)');
        
        cons_observaciones:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_id_act 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Observaciones');
        
        cons_nombre_cient:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                --public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_id_act 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Nombre (común y/o científico)');
        
                  INSERT INTO temp_table(id_activity, name,category_name,year,presp_ini,presp_def, comprometido,pagos,obligaciones,tipo_cont_marin,flo_fau,observaciones,nombre_cient)VALUES 
            (cons_id_act, cons_name, cons_cat_name, cons_year,presupuesto_ini,cons_presp_def,cons_compromisos,cons_pagos,cons_obligaciones,
             cons_tipo_cont_marin,cons_flo_fau,cons_observaciones,cons_nombre_cient);
        
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
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_amenazas(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, efau_cont_num double precision, efau_cont_den double precision, efau_marin_num double precision, efau_marin_den double precision, eflo_cont_num double precision, eflo_cont_den double precision, eflo_marin_num double precision, eflo_marin_den double precision) AS $$
        declare  
            cur_codes cursor
                 for   
        select category_name, sum(numerador) as numerador, sum(denominador)  as denominador from (SELECT
                            distinct
                            public.variables.category_name,
                            sum(public.indicator_activities.numerator) as numerador,
                            sum(public.indicator_activities.denominator) as denominador
                            
                    FROM
                         public.variables 
                         INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                         INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                         INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                         AND public.indicators.id = public.variables.indicator_id
                         INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                         INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                         INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                         INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                     where 
                         public.strategic_lines.p_a_i_id =p_paid
                         and public.indicators.abbreviated_name = 'PEAMME'
                         and public.indicator_activities.year=p_year																			  
                        -- and public.variables.category_name in ('Áreas Protegidas Continentales','Áreas protegidas marinas, costeras e insulares')
                         
                         group by      public.variables.category_name) as resultado
                         
                         group by category_name;
                         
                         
        DECLARE   cons_1  character varying;
        DECLARE   cons_2   double precision := 0;
        DECLARE   cons_3   double precision := 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST(0 as double precision) as efau_cont_num,
        CAST(0 as double precision) as efau_cont_den,
        CAST(0 as double precision) as efau_marin_num,
        CAST(0 as double precision) as efau_marin_den,
        CAST(0 as double precision) as eflo_cont_num,
        CAST(0 as double precision) as eflo_cont_den,
        CAST(0 as double precision) as eflo_marin_num,
        CAST(0 as double precision) as eflo_marin_den
        
        from  public.activities act 
        order by act.id
        limit 1;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2,cons_3;
        
            -- exit when no more row to fetch
              exit when not found;
        
            IF cons_2 is NULL THEN
            cons_2:=0;
            END IF;
            IF cons_3 is NULL THEN
            cons_3:=0;
            END IF;
            
            IF cons_1='Especies de fauna amenazadas continentales' THEN
            UPDATE temp_table SET  efau_cont_num=cons_2, efau_cont_den=cons_3
            WHERE  temp_table.id=1;
            END IF;
            IF cons_1='Especies de fauna amenazadas marinas' THEN
            UPDATE temp_table SET  efau_marin_num=cons_2, efau_marin_den=cons_3
            WHERE  temp_table.id=1;
            END IF;
            IF cons_1='Especies de flora amenazadas continentales' THEN
            UPDATE temp_table SET  eflo_cont_num=cons_2, eflo_cont_den=cons_3
            WHERE  temp_table.id=1;
            END IF;
            IF cons_1='Especies de flora amenazadas marinas' THEN
            UPDATE temp_table SET  eflo_marin_num=cons_2, eflo_marin_den=cons_3
            WHERE  temp_table.id=1;
            END IF;
            
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_inva_comp(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id_activity integer, name character varying, category_name character varying, year integer, presp_ini double precision, presp_def double precision, comprometido double precision, pagos double precision, obligaciones double precision, tipo_cont_marin character varying, flo_fau character varying, observaciones character varying, nombre_cient character varying) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for select resultado.id, resultado.name, resultado.category_name,resultado.year, sum(resultado.presp_def) as presp_def from (SELECT DISTINCT
        
                      public.activities.id,
                      public.activities.name,
                      public.variables.category_name,
                     public.indicator_activities.year,
                      public.activity_sources.value as presp_def
                FROM
                     public.activities INNER JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
                     AND public.activities.id = public.indicator_activities.activities_id
                     LEFT JOIN public.evidence_advance ON public.indicator_activities.evidence_id = public.evidence_advance.id
                     INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                     INNER JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id
                     INNER JOIN public.variables ON public.indicator_activities.variable_id = public.variables.id
                     INNER JOIN public.activity_sources ON public.activities.id = public.activity_sources.activity_id
                     LEFT JOIN public.evidence_financial ON public.activity_sources.id = public.evidence_financial.activity_source_id
                     INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                     INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                     INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                     INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                WHERE
                     public.indicators.abbreviated_name = 'PEIME'
                     and public.strategic_lines.p_a_i_id = p_paid
                     and public.indicator_activities.year=p_year
                     and public.activity_sources.age=p_year
                    GROUP BY  public.activities.id,	 public.variables.category_name,
                         public.indicator_activities.year,public.activity_sources.value
        ) as resultado
        
        group by resultado.id, resultado.name, resultado.category_name,resultado.year;
            
        
            
            cur_costs cursor
             for SELECT fnd.financial_plans_id, sum(fnd.value) FROM public.fundraisings as fnd
                    INNER JOIN public.financial_plans as fp ON fnd.financial_plans_id = fp.id
                    where fp.year=p_year
                    group by fnd.financial_plans_id;
        
        DECLARE cons_id_act integer := 0;
        DECLARE cons_name character varying;
        DECLARE cons_cat_name character varying;
        DECLARE cons_year integer := 0;
        DECLARE cons_presp_def double precision DEFAULT 0;
        DECLARE cons_compromisos double precision DEFAULT 0;
        DECLARE cons_pagos double precision DEFAULT 0;
        DECLARE cons_obligaciones double precision DEFAULT 0;
        DECLARE cons_tipo_cont_marin character varying;
        DECLARE cons_flo_fau character varying;
        DECLARE cons_observaciones character varying;
        DECLARE cons_nombre_cient character varying;
        DECLARE presupuesto_ini double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select  
        CAST(0 as integer) as id_activity,
        CAST('' as character varying) as name,
        CAST('' as character varying) as category_name,
        CAST(0 as integer) as year,
        CAST(0 as double precision) as presp_ini,
        CAST(0 as double precision) as presp_def,
        CAST(0 as double precision) as comprometido,
        CAST(0 as double precision) as pagos,
        CAST(0 as double precision) as obligaciones,
        CAST(0 as character varying) as tipo_cont_marin,
        CAST(0 as character varying) as flo_fau,
        CAST(0 as character varying) as observaciones,
        CAST(0 as character varying) as nombre_cient
        
        from public.financing_sources as ffs limit 0;
        
           -- open the cursor
           open cur_codes;
            
           loop
            -- fetch row into the film
              fetch cur_codes into cons_id_act, cons_name, cons_cat_name, cons_year,cons_presp_def ;
            -- exit when no more row to fetch
              exit when not found;
        
            -- build the output
            
            presupuesto_ini = (SELECT  public.budget_from_history(p_year,cons_id_act,p_paid));
            IF presupuesto_ini is NULL THEN 
            presupuesto_ini:= cons_presp_def;
            END IF;
            
            
            cons_compromisos:=(SELECT
             sum (public.evidence_financial.value) as comprometido
                FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act 
        AND public.evidence_advance.year=p_year);
        
            cons_pagos:=(SELECT sum(value)
        FROM  payments
        WHERE evidence_id
              IN (SELECT distinct
            evidence_advance.id
        FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act
        AND public.evidence_advance.year=p_year)
            AND payment=True
            );
            
                cons_obligaciones:=(SELECT sum(value)
        FROM  payments
        WHERE evidence_id
              IN (SELECT distinct
            evidence_advance.id
        FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act
        AND public.evidence_advance.year=p_year)
            );
        
        cons_tipo_cont_marin:=(SELECT
                               string_agg(public.other_data_year.value, ', ')
             --public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Tipo (Continental o marina)');
            
        cons_flo_fau:=(SELECT
                       string_agg(public.other_data_year.value, ', ')
            -- public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Tipo (Flora o fauna)');
        
        cons_observaciones:=(SELECT
                             string_agg(public.other_data_year.value, ', ')
           --  public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Observaciones');
        
        cons_nombre_cient:=(SELECT
                            string_agg(public.other_data_year.value, ', ')
            -- public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Nombre (común y/o científico)');
        
                  INSERT INTO temp_table(id_activity, name,category_name,year,presp_ini, presp_def, comprometido,pagos,obligaciones,tipo_cont_marin,flo_fau,observaciones,nombre_cient)VALUES 
            (cons_id_act, cons_name, cons_cat_name, cons_year,presupuesto_ini,cons_presp_def,cons_compromisos,cons_pagos,cons_obligaciones,
             cons_tipo_cont_marin,cons_flo_fau,cons_observaciones,cons_nombre_cient);
        
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
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_invasoras(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, efau_cont_num double precision, efau_cont_den double precision, efau_marin_num double precision, efau_marin_den double precision, eflo_cont_num double precision, eflo_cont_den double precision, eflo_marin_num double precision, eflo_marin_den double precision) AS $$
        declare  
            cur_codes cursor
                 for   
        select category_name, sum(numerador) as numerador, sum(denominador)  as denominador from (SELECT
                            distinct
                            public.variables.category_name,
                            sum(public.indicator_activities.numerator) as numerador,
                            sum(public.indicator_activities.denominator) as denominador
                            
                    FROM
                         public.variables 
                         INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                         INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                         INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                         AND public.indicators.id = public.variables.indicator_id
                         INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                         INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                         INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                         INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                     where 
                         public.strategic_lines.p_a_i_id =p_paid
                         and public.indicators.abbreviated_name = 'PEIME'
                        and public.indicator_activities.year=p_year																		  
                        -- and public.variables.category_name in ('Áreas Protegidas Continentales','Áreas protegidas marinas, costeras e insulares')
                         
                         group by      public.variables.category_name) as resultado
                         
                         group by category_name;
                         
                         
        DECLARE   cons_1  character varying;
        DECLARE   cons_2   double precision := 0;
        DECLARE   cons_3   double precision := 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST(0 as double precision) as efau_cont_num,
        CAST(0 as double precision) as efau_cont_den,
        CAST(0 as double precision) as efau_marin_num,
        CAST(0 as double precision) as efau_marin_den,
        CAST(0 as double precision) as eflo_cont_num,
        CAST(0 as double precision) as eflo_cont_den,
        CAST(0 as double precision) as eflo_marin_num,
        CAST(0 as double precision) as eflo_marin_den
        
        from  public.activities act 
        order by act.id
        limit 1;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2,cons_3;
        
            -- exit when no more row to fetch
              exit when not found;
        
            IF cons_2 is NULL THEN
            cons_2:=0;
            END IF;
            IF cons_3 is NULL THEN
            cons_3:=0;
            END IF;
            
            IF cons_1='Especies de fauna invasoras continentales' THEN
            UPDATE temp_table SET  efau_cont_num=cons_2, efau_cont_den=cons_3
            WHERE  temp_table.id=1;
            END IF;
            IF cons_1='Especies de fauna invasoras marinas' THEN
            UPDATE temp_table SET  efau_marin_num=cons_2, efau_marin_den=cons_3
            WHERE  temp_table.id=1;
            END IF;
            IF cons_1='Especies de flora invasoras continentales' THEN
            UPDATE temp_table SET  eflo_cont_num=cons_2, eflo_cont_den=cons_3
            WHERE  temp_table.id=1;
            END IF;
            IF cons_1='Especies de flora invasoras marinas' THEN
            UPDATE temp_table SET  eflo_marin_num=cons_2, eflo_marin_den=cons_3
            WHERE  temp_table.id=1;
            END IF;
            
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_param_comp(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, act_name character varying, nom_par character varying, est_av character varying, act_adm character varying) AS $$
        declare  
            cur_codes cursor
                         for SELECT  DISTINCT
                    public.activities.id,
                    public.activities.name
        
                FROM
                     public.variables 
                        INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                        INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                        INNER JOIN public.other_data_year ON public.indicator_activities.activities_id = public.other_data_year.activity_id
                        INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                        AND public.indicators.id = public.variables.indicator_id
                        INNER JOIN public.other_data ON public.indicators.id = public.other_data.indicator_id	 	 
                        INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                        INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                        INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                        INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
        
                     AND public.other_data.id = public.other_data_year.other_data_id
                     where  public.strategic_lines.p_a_i_id =p_paid AND
                      public.indicators.abbreviated_name = 'PPDZRU'
                     AND public.indicator_activities.year=p_year
                     AND public.other_data_year.year=p_year;
             
        
        DECLARE   cons_1   integer := 0;
        DECLARE   cons_2   character varying;
        DECLARE   cons_3   character varying;
        
        DECLARE   cons_act_adm   character varying;
        DECLARE   cons_nom_par character varying;
        DECLARE   cons_est_av character varying;
        DECLARE   index_tmp  integer := 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST('0' as character varying) as act_name,
        CAST('0' as character varying) as nom_par,
        CAST('0' as character varying)  as est_av,
        CAST('0' as character varying)  as act_adm
        
                        
        from  public.activities act 
        order by act.id
        limit 0;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2;
        
            -- exit when no more row to fetch
              exit when not found;
        
            index_tmp := index_tmp+1;	
            
        cons_nom_par:=(SELECT
                           string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                        FROM
                         public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                        where     public.other_data_year.activity_id=cons_1 
                        and  public.other_data_year.year=p_year
                        and public.other_data.variable_name='Nombre del páramo');
            
        cons_est_av:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_1 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Estado de avance');
            
        cons_act_adm:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_1 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Acto administrativo');
            
            
            
        
                insert into temp_table(id,act_name,nom_par,est_av,act_adm)
                values(cons_1,cons_2,cons_nom_par,cons_est_av,cons_act_adm);
        
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_petacc_comp(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, act_name character varying, acc character varying, nom_ent character varying, num_ent character varying, observaciones character varying) AS $$
        declare  
            cur_codes cursor
                         for SELECT  DISTINCT
                    public.activities.id,
                    public.activities.name
        
                FROM
                     public.variables 
                        INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                        INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                        INNER JOIN public.other_data_year ON public.indicator_activities.activities_id = public.other_data_year.activity_id
                        INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                        AND public.indicators.id = public.variables.indicator_id
                        INNER JOIN public.other_data ON public.indicators.id = public.other_data.indicator_id	 	 
                        INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                        INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                        INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                        INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
        
                     AND public.other_data.id = public.other_data_year.other_data_id
                     where  public.strategic_lines.p_a_i_id =p_paid AND
                      public.indicators.abbreviated_name = 'PETACC'
                     AND public.indicator_activities.year=p_year
                     AND public.other_data_year.year=p_year;
             
        
        DECLARE   cons_1   integer := 0;
        DECLARE   cons_2   character varying;
        DECLARE   cons_3   character varying;
        
        DECLARE   cons_acc   character varying;
        DECLARE   cons_nom_ent  character varying;
        DECLARE   cons_num_ent  character varying;
        DECLARE   cons_observaciones character varying;
        DECLARE   index_tmp  integer := 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST('0' as character varying) as act_name,
        CAST('0' as character varying) as acc,
        CAST('0' as character varying) as nom_ent,
        CAST('0' as character varying)  as num_ent,
        CAST('0' as character varying)  as observaciones
        
                                
        from  public.activities act 
        order by act.id
        limit 0;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2;
        
            -- exit when no more row to fetch
              exit when not found;
        
            index_tmp := index_tmp+1;	
            
        cons_acc:=(SELECT
                           string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                        FROM
                         public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                        where     public.other_data_year.activity_id=cons_1 
                        and  public.other_data_year.year=p_year
                        and public.other_data.variable_name='Acciones');
            
        cons_nom_ent:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_1 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Nombres de entidades territoriales');
        
        cons_num_ent:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_1 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Número de entes territoriales');
        
        cons_observaciones:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_1 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Observaciones');
            
            
            
        
                insert into temp_table(id,act_name,acc,nom_ent,num_ent,observaciones)
                values(cons_1,cons_2,cons_acc,cons_nom_ent,cons_num_ent,cons_observaciones);
        
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_planesap(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, sup_cont double precision, sup_marin double precision, meta_cont double precision, meta_marin double precision) AS $$
        declare  
            cur_codes cursor
                 for select category_name, sum(numerador), sum(denominador) from (SELECT
                            distinct
                            public.variables.category_name,
                            sum(public.indicator_activities.numerator) as numerador,
                            sum(public.indicator_activities.denominator) as denominador
                            
                    FROM
                         public.variables 
                         INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                         INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                         INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                         AND public.indicators.id = public.variables.indicator_id
                         INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                         INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                         INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                         INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                     where 
                            public.strategic_lines.p_a_i_id =p_paid
                            and public.indicators.abbreviated_name = 'PAPME'
                            and public.indicator_activities.year=p_year
                            --and public.activity_sources.age=p_year
                        -- and public.variables.category_name in ('Áreas Protegidas Continentales','Áreas protegidas marinas, costeras e insulares')
                         
                         group by      public.variables.category_name) as resultado
                         
                         group by category_name;
        
        DECLARE   cons_1   character varying;
        DECLARE   cons_2   double precision := 0;
        DECLARE   cons_3   double precision := 0;
        
        DECLARE   index_tmp  integer := 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST(0 as double precision) as sup_cont,
        CAST(0 as double precision) as sup_marin,
        CAST(0 as double precision) as meta_cont,
        CAST(0 as double precision) as meta_marin
        
        from  public.activities act 
        order by act.id
        limit 1;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2,cons_3;
        
            -- exit when no more row to fetch
              exit when not found;
        
            index_tmp := index_tmp+1;	
        
            IF cons_1='Continentales' THEN
            UPDATE temp_table SET   sup_cont=cons_3, meta_cont=cons_2 WHERE  temp_table.id=1;
            END IF;
            IF cons_1='Marinas, costeras e insulares' THEN
            UPDATE temp_table SET   sup_marin=cons_3, meta_marin=cons_2 WHERE  temp_table.id=1;
            
            END IF;
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_planesap_comp(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id_activity integer, name character varying, category_name character varying, year integer, presp_ini double precision, presp_def double precision, comprometido double precision, pagos double precision, obligaciones double precision, tipo_accion character varying, area_int character varying, observaciones character varying) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for select resultado.id, resultado.name, resultado.category_name,resultado.year, sum(resultado.presp_def) as presp_def from (SELECT DISTINCT
        
                      public.activities.id,
                      public.activities.name,
                      public.variables.category_name,
                     public.indicator_activities.year,
                      public.activity_sources.value as presp_def
                FROM
                     public.activities INNER JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
                     AND public.activities.id = public.indicator_activities.activities_id
                     LEFT JOIN public.evidence_advance ON public.indicator_activities.evidence_id = public.evidence_advance.id
                     INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                     INNER JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id
                     INNER JOIN public.variables ON public.indicator_activities.variable_id = public.variables.id
                     INNER JOIN public.activity_sources ON public.activities.id = public.activity_sources.activity_id
                     LEFT JOIN public.evidence_financial ON public.activity_sources.id = public.evidence_financial.activity_source_id
                     INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                     INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                     INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                     INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                WHERE
                     public.indicators.abbreviated_name = 'PAPME'
                     and public.strategic_lines.p_a_i_id = p_paid
                     and public.indicator_activities.year=p_year
                     and public.activity_sources.age=p_year
                    GROUP BY  public.activities.id,	 public.variables.category_name,
                         public.indicator_activities.year,public.activity_sources.value
        ) as resultado
        
        group by resultado.id, resultado.name, resultado.category_name,resultado.year;
            
        
            
            cur_costs cursor
             for SELECT fnd.financial_plans_id, sum(fnd.value) FROM public.fundraisings as fnd
                    INNER JOIN public.financial_plans as fp ON fnd.financial_plans_id = fp.id
                    where fp.year=p_year
                    group by fnd.financial_plans_id;
        
        DECLARE cons_id_act integer := 0;
        DECLARE cons_name character varying;
        DECLARE cons_cat_name character varying;
        DECLARE cons_year integer := 0;
        DECLARE cons_presp_def double precision DEFAULT 0;
        DECLARE cons_compromisos double precision DEFAULT 0;
        DECLARE cons_pagos double precision DEFAULT 0;
        DECLARE cons_obligaciones double precision DEFAULT 0;
        DECLARE cons_tipo_accion character varying;
        DECLARE cons_area_int character varying;
        DECLARE cons_observaciones character varying;
        DECLARE presupuesto_ini double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select  
        CAST(0 as integer) as id_activity,
        CAST('' as character varying) as name,
        CAST('' as character varying) as category_name,
        CAST(0 as integer) as year,
        CAST(0 as double precision) as presp_ini,
        CAST(0 as double precision) as presp_def,
        CAST(0 as double precision) as comprometido,
        CAST(0 as double precision) as pagos,
        CAST(0 as double precision) as obligaciones,
        CAST(0 as character varying) as tipo_accion,
        CAST(0 as character varying) as area_int,
        CAST(0 as character varying) as observaciones
        
        from public.financing_sources as ffs limit 0;
        
           -- open the cursor
           open cur_codes;
            
           loop
            -- fetch row into the film
              fetch cur_codes into cons_id_act, cons_name, cons_cat_name, cons_year,cons_presp_def ;
            -- exit when no more row to fetch
              exit when not found;
        
            -- build the output
            
            presupuesto_ini = (SELECT  public.budget_from_history(p_year,cons_id_act,p_paid));
            
            IF presupuesto_ini is NULL THEN 
            presupuesto_ini:= cons_presp_def;
            END IF;
        
            cons_compromisos:=(SELECT
             sum (public.evidence_financial.value) as comprometido
                FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act 
        AND public.evidence_advance.year=p_year);
        
            cons_pagos:=(SELECT sum(value)
        FROM  payments
        WHERE evidence_id
              IN (SELECT distinct
            evidence_advance.id
        FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act
        AND public.evidence_advance.year=p_year)
            AND payment=True
            );
            
                cons_obligaciones:=(SELECT sum(value)
        FROM  payments
        WHERE evidence_id
              IN (SELECT distinct
            evidence_advance.id
        FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act
        AND public.evidence_advance.year=p_year)
            );
        
        cons_tipo_accion:=(SELECT
                           string_agg(public.other_data_year.value, ', ')
            -- public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Tipo (continental, marina, costera, insular)');
        cons_area_int:=(SELECT
                        string_agg(public.other_data_year.value, ', ')
           --  public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Nombre de AP');
        
        cons_cat_name:=(SELECT
                        string_agg(public.other_data_year.value, ', ')
           --  public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Categoría de AP');
        
        cons_observaciones:=(SELECT
                string_agg(public.other_data_year.value, ', ')			 
             --public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Observaciones');
        
                  INSERT INTO temp_table(id_activity, name,category_name,year,presp_ini, presp_def, comprometido,pagos,obligaciones,tipo_accion,area_int,observaciones)VALUES 
            (cons_id_act, cons_name, cons_cat_name, cons_year,presupuesto_ini, cons_presp_def,cons_compromisos,cons_pagos,cons_obligaciones,cons_tipo_accion,cons_area_int,cons_observaciones);
        
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
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_pot_comp(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, act_name character varying, nom_mun character varying, num_mun character varying, observaciones character varying) AS $$
        declare  
            cur_codes cursor
                         for SELECT  DISTINCT
                    public.activities.id,
                    public.activities.name
        
                FROM
                     public.variables 
                        INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                        INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                        INNER JOIN public.other_data_year ON public.indicator_activities.activities_id = public.other_data_year.activity_id
                        INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                        AND public.indicators.id = public.variables.indicator_id
                        INNER JOIN public.other_data ON public.indicators.id = public.other_data.indicator_id	 	 
                        INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                        INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                        INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                        INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
        
                     AND public.other_data.id = public.other_data_year.other_data_id
                     where  public.strategic_lines.p_a_i_id =p_paid AND
                      public.indicators.abbreviated_name = 'PMAPOT'
                     AND public.indicator_activities.year=p_year
                     AND public.other_data_year.year=p_year;
             
        
        DECLARE   cons_1   integer := 0;
        DECLARE   cons_2   character varying;
        DECLARE   cons_3   character varying;
        
        DECLARE   cons_nom_mun   character varying;
        DECLARE   cons_num_mun  character varying;
        DECLARE   cons_observaciones character varying;
        DECLARE   index_tmp  integer := 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST('0' as character varying) as act_name,
        CAST('0' as character varying) as nom_mun,
        CAST('0' as character varying)  as num_mun,
        CAST('0' as character varying)  as observaciones
        
                                
        from  public.activities act 
        order by act.id
        limit 0;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2;
        
            -- exit when no more row to fetch
              exit when not found;
        
            index_tmp := index_tmp+1;	
            
        cons_nom_mun:=(SELECT
                           string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                        FROM
                         public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                        where     public.other_data_year.activity_id=cons_1 
                        and  public.other_data_year.year=p_year
                        and public.other_data.variable_name='Nombres de municipios');
            
        cons_num_mun:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_1 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Número de municipios');
            
        cons_observaciones:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_1 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Observaciones');
            
            
            
        
                insert into temp_table(id,act_name,nom_mun,num_mun,observaciones)
                values(cons_1,cons_2,cons_nom_mun,cons_num_mun,cons_observaciones);
        
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_res_comp(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, act_name character varying, nom_area character varying, num_mun character varying, sup character varying, est_av character varying, act_adm character varying) AS $$
        declare  
            cur_codes cursor
                         for SELECT  DISTINCT
                    public.activities.id,
                    public.activities.name
        
                FROM
                     public.variables 
                        INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                        INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                        INNER JOIN public.other_data_year ON public.indicator_activities.activities_id = public.other_data_year.activity_id
                        INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                        AND public.indicators.id = public.variables.indicator_id
                        INNER JOIN public.other_data ON public.indicators.id = public.other_data.indicator_id	 	 
                        INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                        INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                        INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                        INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
        
                     AND public.other_data.id = public.other_data_year.other_data_id
                     where  public.strategic_lines.p_a_i_id =p_paid AND
                      public.indicators.abbreviated_name = 'PAPOF'
                     AND public.indicator_activities.year=p_year
                     AND public.other_data_year.year=p_year;
             
        
        DECLARE   cons_1   integer := 0;
        DECLARE   cons_2   character varying;
        DECLARE   cons_3   character varying;
        
        DECLARE   cons_nom_area   character varying;
        DECLARE   cons_nom_mun   character varying;
        DECLARE   cons_sup  character varying;
        DECLARE   cons_est_av character varying;
        DECLARE   cons_act_adm character varying;
        
        DECLARE   index_tmp  integer := 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST('0' as character varying) as act_name,
        CAST('0' as character varying) as nom_area,
        CAST('0' as character varying)  as nom_mun,
        CAST('0' as character varying)  as sup,
        CAST('0' as character varying)  as est_av,
        CAST('0' as character varying)  as act_adm
        
                                
        from  public.activities act 
        order by act.id
        limit 0;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2;
        
            -- exit when no more row to fetch
              exit when not found;
        
            index_tmp := index_tmp+1;	
        
        cons_nom_area:=(SELECT
                           string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                        FROM
                         public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                        where     public.other_data_year.activity_id=cons_1 
                        and  public.other_data_year.year=p_year
                        and public.other_data.variable_name='Nombre del área a ser ordenada');
        
        cons_nom_mun:=(SELECT
                           string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                        FROM
                         public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                        where     public.other_data_year.activity_id=cons_1 
                        and  public.other_data_year.year=p_year
                        and public.other_data.variable_name='Municipios donde se ubica');
            
        cons_sup:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_1 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Superficie (ha)');
            
        cons_est_av:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_1 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Estado de avance (a)');
                                
        cons_act_adm:=(SELECT
                                string_agg(public.other_data_year.value, ', ')
                                -- public.other_data_year.value
                                FROM
                                public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                where     public.other_data_year.activity_id=cons_1 
                                and  public.other_data_year.year=p_year
                                and public.other_data.variable_name='Acto administrativo de adopción');
            
            
            
        
                insert into temp_table(id,act_name,nom_area,nom_mun,sup,est_av,act_adm)
                values(cons_1,cons_2,cons_nom_area,cons_nom_mun,cons_sup,cons_est_av,cons_act_adm);
        
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_rest_comp(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id_activity integer, name character varying, category_name character varying, year integer, presp_ini double precision, presp_def double precision, comprometido double precision, pagos double precision, obligaciones double precision, tipo_accion character varying, area_int character varying, observaciones character varying) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for select resultado.id, resultado.name, resultado.category_name,resultado.year, sum(resultado.presp_def) as presp_def from (SELECT DISTINCT
        
                      public.activities.id,
                      public.activities.name,
                      public.variables.category_name,
                     public.indicator_activities.year,
                      public.activity_sources.value as presp_def
                FROM
                     public.activities INNER JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
                     AND public.activities.id = public.indicator_activities.activities_id
                     LEFT JOIN public.evidence_advance ON public.indicator_activities.evidence_id = public.evidence_advance.id
                     INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                     INNER JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id
                     INNER JOIN public.variables ON public.indicator_activities.variable_id = public.variables.id
                     INNER JOIN public.activity_sources ON public.activities.id = public.activity_sources.activity_id
                     LEFT JOIN public.evidence_financial ON public.activity_sources.id = public.evidence_financial.activity_source_id
                     INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                     INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                     INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                     INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                WHERE
                     public.indicators.abbreviated_name = 'PAERRR'
                     and public.strategic_lines.p_a_i_id = p_paid
                     and public.indicator_activities.year=p_year
                     and public.activity_sources.age=p_year
                    GROUP BY  public.activities.id,	 public.variables.category_name,
                         public.indicator_activities.year,public.activity_sources.value
        ) as resultado
        
        group by resultado.id, resultado.name, resultado.category_name,resultado.year;
            
        
            
            cur_costs cursor
             for SELECT fnd.financial_plans_id, sum(fnd.value) FROM public.fundraisings as fnd
                    INNER JOIN public.financial_plans as fp ON fnd.financial_plans_id = fp.id
                    where fp.year=p_year
                    group by fnd.financial_plans_id;
        
        DECLARE cons_id_act integer := 0;
        DECLARE cons_name character varying;
        DECLARE cons_cat_name character varying;
        DECLARE cons_year integer := 0;
        DECLARE cons_presp_def double precision DEFAULT 0;
        DECLARE cons_compromisos double precision DEFAULT 0;
        DECLARE cons_pagos double precision DEFAULT 0;
        DECLARE cons_obligaciones double precision DEFAULT 0;
        DECLARE cons_tipo_accion character varying;
        DECLARE cons_area_int character varying;
        DECLARE cons_observaciones character varying;
        DECLARE presupuesto_ini double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select  
        CAST(0 as integer) as id_activity,
        CAST('' as character varying) as name,
        CAST('' as character varying) as category_name,
        CAST(0 as integer) as year,
        CAST(0 as double precision) as presp_ini,
        CAST(0 as double precision) as presp_def,
        CAST(0 as double precision) as comprometido,
        CAST(0 as double precision) as pagos,
        CAST(0 as double precision) as obligaciones,
        CAST(0 as character varying) as tipo_accion,
        CAST(0 as character varying) as area_int,
        CAST(0 as character varying) as observaciones
        
        from public.financing_sources as ffs limit 0;
        
           -- open the cursor
           open cur_codes;
            
           loop
            -- fetch row into the film
              fetch cur_codes into cons_id_act, cons_name, cons_cat_name, cons_year,cons_presp_def ;
            -- exit when no more row to fetch
              exit when not found;
        
            -- build the output
            
            presupuesto_ini = (SELECT  public.budget_from_history(p_year,cons_id_act,p_paid));
            IF presupuesto_ini is NULL THEN 
            presupuesto_ini:= cons_presp_def;
            END IF;
            
            cons_compromisos:=(SELECT
             sum (public.evidence_financial.value) as comprometido
                FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act 
        AND public.evidence_advance.year=p_year);
        
            cons_pagos:=(SELECT sum(value)
        FROM  payments
        WHERE evidence_id
              IN (SELECT distinct
            evidence_advance.id
        FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act
        AND public.evidence_advance.year=p_year)
            AND payment=True
            );
            
                cons_obligaciones:=(SELECT sum(value)
        FROM  payments
        WHERE evidence_id
              IN (SELECT distinct
            evidence_advance.id
        FROM
             public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
             INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
             AND public.activities.id = public.indicator_activities.activities_id
        where public.evidence_advance.activity_id=cons_id_act
        AND public.evidence_advance.year=p_year)
            );
        
        cons_tipo_accion:=(SELECT
             string_agg(public.other_data_year.value, ', ')
                           --public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Tipo de acción (restauración, rehabilitación o recuperación)');
        cons_area_int:=(SELECT
             string_agg(public.other_data_year.value, ', ')
                        --public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Área en restauración, rehabilitación o recuperación (ha)');
        
        cons_observaciones:=(SELECT
                             string_agg(public.other_data_year.value, ', ')
            -- public.other_data_year.value
        FROM
             public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
            where     public.other_data_year.activity_id=cons_id_act 
            and  public.other_data_year.year=p_year
            and public.other_data.variable_name='Observaciones');
        
                  INSERT INTO temp_table(id_activity, name,category_name,year,presp_ini,presp_def, comprometido,pagos,obligaciones,tipo_accion,area_int,observaciones)VALUES 
            (cons_id_act, cons_name, cons_cat_name, cons_year,presupuesto_ini,cons_presp_def,cons_compromisos,cons_pagos,cons_obligaciones,cons_tipo_accion,cons_area_int,cons_observaciones);
        
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
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_restauracion(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, iyear double precision, arec_num_year1 double precision, arec_num_year2 double precision, arec_num_year3 double precision, arec_num_year4 double precision, areh_num_year1 double precision, areh_num_year2 double precision, areh_num_year3 double precision, areh_num_year4 double precision, ares_ec_num_year1 double precision, ares_ec_num_year2 double precision, ares_ec_num_year3 double precision, ares_ec_num_year4 double precision, den_year1 double precision, den_year2 double precision, den_year3 double precision, den_year4 double precision) AS $$
        declare  
            cur_codes cursor
                 for   SELECT
                            distinct
                            public.variables.category_name,
           sum(public.indicator_activities.denominator) FILTER (WHERE year=1) AS den_year_1,
           sum(public.indicator_activities.denominator) FILTER (WHERE year=2) AS den_year_2,
           sum(public.indicator_activities.denominator) FILTER (WHERE year=3) AS den_year_3,
           sum(public.indicator_activities.denominator) FILTER (WHERE year=4) AS den_year_4,
           sum(public.indicator_activities.numerator) FILTER (WHERE year=1) AS num_year_1,
           sum(public.indicator_activities.numerator) FILTER (WHERE year=2) AS num_year_2,
           sum(public.indicator_activities.numerator) FILTER (WHERE year=3) AS num_year_3,
           sum(public.indicator_activities.numerator) FILTER (WHERE year=4) AS num_year_4
                            
                    FROM
                         public.variables 
                         INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                         INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                         INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                         AND public.indicators.id = public.variables.indicator_id
                         INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                         INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                         INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                         INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                     where 
                         public.strategic_lines.p_a_i_id =p_paid and
                          public.indicators.abbreviated_name = 'PAERRR'
                        -- and public.variables.category_name in ('Áreas Protegidas Continentales','Áreas protegidas marinas, costeras e insulares')
                         group by      public.variables.category_name;
                        -- public.strategic_lines.p_a_i_id =1
                        --public.indicators.abbreviated_name = 'PAERRR'
                        -- and public.variables.category_name in ('Áreas Protegidas Continentales','Áreas protegidas marinas, costeras e insulares')
                             
        
        DECLARE   cons_1  character varying;
        DECLARE   cons_2   double precision := 0;
        DECLARE   cons_3   double precision := 0;
        DECLARE   cons_4   double precision := 0;
        DECLARE   cons_5   double precision := 0;
        DECLARE   cons_6   double precision := 0;
        DECLARE   cons_7   double precision := 0;
        DECLARE   cons_8   double precision := 0;
        DECLARE   cons_9   double precision := 0;
        
        DECLARE   cons_total_den_1   double precision := 0;
        DECLARE   cons_total_den_2   double precision := 0;
        DECLARE   cons_total_den_3   double precision := 0;
        DECLARE   cons_total_den_4   double precision := 0;
        
        DECLARE   cons_10  integer := 0;
        
        DECLARE   cons_pago double precision := 0;
        DECLARE   cons_oblig double precision := 0;
        DECLARE   id_prod_tmp integer :=0;
        DECLARE   id_proy_tmp integer :=0;
        DECLARE   id_prog_tmp integer :=0;
        DECLARE   id_obj_tmp integer :=0;
        
        DECLARE   index_tmp  integer := 0;
        DECLARE cons_fid integer := 0;
        DECLARE cons_ffid integer := 0;
        DECLARE cons_fcode character varying;
        DECLARE cons_fgid integer := 0;
        DECLARE cons_fidfc integer := 0;
        
        DECLARE len_code integer := 0;
        DECLARE up_code character varying;
        DECLARE id_code integer := 0;
        
        DECLARE cons2_id integer := 0;
        DECLARE cons2_value double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST(0 as double precision) as iyear,
        CAST(0 as double precision) as arec_num_year1,
        CAST(0 as double precision) as arec_num_year2,
        CAST(0 as double precision) as arec_num_year3,
        CAST(0 as double precision) as arec_num_year4,
        CAST(0 as double precision) as areh_num_year1,
        CAST(0 as double precision) as areh_num_year2,
        CAST(0 as double precision) as areh_num_year3,
        CAST(0 as double precision) as areh_num_year4,
        CAST(0 as double precision) as ares_ec_num_year1,
        CAST(0 as double precision) as ares_ec_num_year2,
        CAST(0 as double precision) as ares_ec_num_year3,
        CAST(0 as double precision) as ares_ec_num_year4,
        CAST(0 as double precision) as den_year1,
        CAST(0 as double precision) as den_year2,
        CAST(0 as double precision) as den_year3,
        CAST(0 as double precision) as den_year4
        
        from  public.activities act 
        order by act.id
        limit 1;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2,cons_3,cons_4,cons_5,cons_6,cons_7,cons_8,cons_9;
        
            -- exit when no more row to fetch
              exit when not found;
        
            index_tmp := index_tmp+1;	
        
            IF cons_2 is NULL THEN
            cons_2:=0;
            END IF;
            IF cons_3 is NULL THEN
            cons_3:=0;
            END IF;
            IF cons_4 is NULL THEN
            cons_4:=0;
            END IF;
            IF cons_5 is NULL THEN
            cons_5:=0;
            END IF;
            IF cons_6 is NULL THEN
            cons_6:=0;
            END IF;
            IF cons_7 is NULL THEN
            cons_7:=0;
            END IF;
            IF cons_8 is NULL THEN
            cons_8:=0;
            END IF;
            IF cons_9 is NULL THEN
            cons_9:=0;
            END IF;
            
            
            index_tmp := index_tmp+1;	
            cons_total_den_1:= cons_total_den_1+	cons_2;
            cons_total_den_2:= cons_total_den_2+	cons_3;
            cons_total_den_3:= cons_total_den_3+	cons_4;
            cons_total_den_4:= cons_total_den_4+	cons_5;
            
            IF cons_1='Áreas de ecosistemas en recuperación' THEN
            UPDATE temp_table SET  den_year1=cons_total_den_1,den_year2=cons_total_den_2,den_year3=cons_total_den_3,den_year4=cons_total_den_4,
            arec_num_year1=cons_6, arec_num_year2=cons_7,arec_num_year3=cons_8,arec_num_year4=cons_9
            WHERE  temp_table.id=1;
            END IF;
            IF cons_1='Áreas de ecosistemas en rehabilitación' THEN
            UPDATE temp_table SET  den_year1=cons_total_den_1,den_year2=cons_total_den_2,den_year3=cons_total_den_3,den_year4=cons_total_den_4,
            areh_num_year1=cons_6, areh_num_year2=cons_7,areh_num_year3=cons_8,areh_num_year4=cons_9
            WHERE  temp_table.id=1;
            END IF;
            IF cons_1='Áreas de ecosistemas en restauración ecológica' THEN
            UPDATE temp_table SET  den_year1=cons_total_den_1,den_year2=cons_total_den_2,den_year3=cons_total_den_3,den_year4=cons_total_den_4,
            ares_ec_num_year1=cons_6, ares_ec_num_year2=cons_7,ares_ec_num_year3=cons_8,ares_ec_num_year4=cons_9
            WHERE  temp_table.id=1;
            END IF;
            
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_runap(
            p_paid integer)
            RETURNS TABLE(id bigint, sup_cont double precision, sup_marin double precision, meta_cont double precision, meta_marin double precision) AS $$
        declare  
            cur_codes cursor
                 for select category_name, sum(numerador), sum(denominador) from (SELECT
                            distinct
                            public.variables.category_name,
                            sum(public.indicator_activities.numerator) as numerador,
                            sum(public.indicator_activities.denominator) as denominador
                            
                    FROM
                         public.variables 
                         INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                         INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                         INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                         AND public.indicators.id = public.variables.indicator_id
                         INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                         INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                         INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                         INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                     where 
                         public.strategic_lines.p_a_i_id =p_paid
                         and public.indicators.abbreviated_name = 'PAPR'
                         and public.variables.category_name in ('Áreas Protegidas Continentales','Áreas protegidas marinas, costeras e insulares')
                         
                         group by      public.variables.category_name) as resultado
                         
                         group by category_name;
        
        DECLARE   cons_1   character varying;
        DECLARE   cons_2   double precision := 0;
        DECLARE   cons_3   double precision := 0;
        
        DECLARE   index_tmp  integer := 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST(0 as double precision) as sup_cont,
        CAST(0 as double precision) as sup_marin,
        CAST(0 as double precision) as meta_cont,
        CAST(0 as double precision) as meta_marin
        
        from  public.activities act 
        order by act.id
        limit 1;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2,cons_3;
        
            -- exit when no more row to fetch
              exit when not found;
        
            index_tmp := index_tmp+1;	
        
            IF cons_1='Áreas Protegidas Continentales' THEN
            UPDATE temp_table SET   sup_cont=cons_3, meta_cont=cons_2 WHERE  temp_table.id=1;
            END IF;
            IF cons_1='Áreas protegidas marinas, costeras e insulares' THEN
            UPDATE temp_table SET   sup_marin=cons_3, meta_marin=cons_2 WHERE  temp_table.id=1;
            
            END IF;
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_runap_comp(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, area_prot character varying, tipo character varying, categoria character varying, sup_act_adm character varying, sup_sh character varying, est_avanc character varying, act_adm_dec character varying) AS $$
        declare  
            cur_codes cursor
                         for  SELECT
                    public.activities.id,
                     public.other_data.variable_name,
                     public.other_data_year.value
        
                FROM
                     public.variables 
                        INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                        INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                        LEFT JOIN public.evidence_advance ON public.indicator_activities.evidence_id = public.evidence_advance.id
                        INNER JOIN public.other_data_year ON public.indicator_activities.activities_id = public.other_data_year.activity_id
                        INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                        AND public.indicators.id = public.variables.indicator_id
                        INNER JOIN public.other_data ON public.indicators.id = public.other_data.indicator_id	 	 
                        INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                        INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                        INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                        INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
        
                     AND public.other_data.id = public.other_data_year.other_data_id
                     where  public.strategic_lines.p_a_i_id =p_paid AND
                      public.indicators.abbreviated_name = 'PAPR'
                     AND public.indicator_activities.year=p_year
                     AND public.other_data_year.year=p_year;
             
        
        DECLARE   cons_1   integer := 0;
        DECLARE   cons_2   character varying;
        DECLARE   cons_3   character varying;
        
        DECLARE   cons_area_prot   character varying;
        DECLARE   cons_tipo  character varying;
        DECLARE   cons_categoria   character varying;
        DECLARE   cons_sup_act_adm   character varying;
        DECLARE   cons_sup_sh   character varying;
        DECLARE   cons_est_avanc   character varying;
        DECLARE   cons_act_adm_dec   character varying;
        DECLARE   index_tmp  integer := 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST('0' as character varying) as area_prot,
        CAST('0' as character varying)  as tipo,
        CAST('0' as character varying)  as categoria,
        CAST('0' as character varying)  as sup_act_adm,
        CAST('0' as character varying)  as sup_sh,
        CAST('0' as character varying)  as est_avanc,
        CAST('0' as character varying)  as act_adm_dec
        
                                
        from  public.activities act 
        order by act.id
        limit 0;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2,cons_3;
        
            -- exit when no more row to fetch
              exit when not found;
        
            index_tmp := index_tmp+1;	
        
            IF cons_2 = 'Nombre de área protegida' THEN
                  cons_area_prot :=cons_3;
            ELSEIF cons_2 = 'Tipo (continental, marina, costera, insular)' THEN
                  cons_tipo :=cons_3;
            ELSEIF cons_2 = 'Categoría' THEN
                  cons_categoria :=cons_3;
            ELSEIF cons_2 = 'Superficie en acto administrativo (ha)' THEN
                  cons_sup_act_adm :=cons_3;
            ELSEIF cons_2 = 'Superficie en shape (ha)(a)' THEN
                  cons_sup_sh :=cons_3;
            ELSEIF cons_2 = 'Estado de avance (b)' THEN
                  cons_est_avanc :=cons_3;
            ELSEIF cons_2 = 'Acto administrativo de declaratoria' THEN
                  cons_act_adm_dec :=cons_3;
            END IF;
            
            IF (select temp_table.id from temp_table where temp_table.id=cons_1)= cons_1 THEN
                UPDATE temp_table SET area_prot=cons_area_prot,tipo=cons_tipo,categoria=cons_categoria,sup_act_adm=cons_sup_act_adm,
                sup_sh=cons_sup_sh,est_avanc=cons_est_avanc,act_adm_dec=cons_act_adm_dec where temp_table.id=cons_1;
            ELSE
                insert into temp_table(id,area_prot,tipo,categoria,sup_act_adm,sup_sh,est_avanc,act_adm_dec)
                values(cons_1,cons_area_prot,cons_tipo,cons_categoria,cons_sup_act_adm,cons_sup_sh,cons_est_avanc,cons_act_adm_dec);
            END IF;
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_runap_resumen(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, iyear double precision, num_year1 double precision, num_year2 double precision, num_year3 double precision, num_year4 double precision, den_year1 double precision, den_year2 double precision, den_year3 double precision, den_year4 double precision) AS $$
        declare  
            cur_codes cursor
                 for   SELECT
                            distinct
                              public.indicator_activities.year,
                            SUM(public.activities.goal) AS goal,
                            SUM(public.indicator_activities.denominator) as denominador
                            
                    FROM
                         public.variables 
                         INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                         INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                         INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                         AND public.indicators.id = public.variables.indicator_id
                         INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                         INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                         INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                         INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                     where 
                         public.strategic_lines.p_a_i_id =p_paid
                         and public.indicators.abbreviated_name = 'PAPR'
                         and public.variables.category_name in ('Áreas Protegidas Continentales','Áreas protegidas marinas, costeras e insulares')
                         
                         group by  public.indicator_activities.year;
                 
        
        DECLARE   cons_1   double precision := 0;
        DECLARE   cons_2   double precision := 0;
        DECLARE   cons_3   double precision := 0;
        DECLARE   cons_4  character varying;
        DECLARE   cons_5  integer := 0;
        DECLARE   cons_6  integer := 0;
        DECLARE   cons_7  integer := 0;
        DECLARE   cons_8  character varying;
        DECLARE   cons_9  integer := 0;
        DECLARE   cons_10  integer := 0;
        
        DECLARE   cons_pago double precision := 0;
        DECLARE   cons_oblig double precision := 0;
        DECLARE   id_prod_tmp integer :=0;
        DECLARE   id_proy_tmp integer :=0;
        DECLARE   id_prog_tmp integer :=0;
        DECLARE   id_obj_tmp integer :=0;
        
        DECLARE   index_tmp  integer := 0;
        DECLARE cons_fid integer := 0;
        DECLARE cons_ffid integer := 0;
        DECLARE cons_fcode character varying;
        DECLARE cons_fgid integer := 0;
        DECLARE cons_fidfc integer := 0;
        
        DECLARE len_code integer := 0;
        DECLARE up_code character varying;
        DECLARE id_code integer := 0;
        
        DECLARE cons2_id integer := 0;
        DECLARE cons2_value double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST(0 as double precision) as iyear,
        CAST(0 as double precision) as num_year1,
        CAST(0 as double precision) as num_year2,
        CAST(0 as double precision) as num_year3,
        CAST(0 as double precision) as num_year4,
        CAST(0 as double precision) as den_year1,
        CAST(0 as double precision) as den_year2,
        CAST(0 as double precision) as den_year3,
        CAST(0 as double precision) as den_year4
        
        from  public.activities act 
        order by act.id
        limit 1;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2,cons_3;
        
            -- exit when no more row to fetch
              exit when not found;
        
            index_tmp := index_tmp+1;	
        
            IF cons_2 is NULL THEN
            cons_2:=0;
            END IF;
            IF cons_3 is NULL THEN
            cons_3:=0;
            
            END IF;
            IF cons_1=1 THEN
        
            UPDATE temp_table SET   num_year1=cons_2, den_year1=cons_3 WHERE  temp_table.id=1;
            END IF;
            
            IF cons_1=2 THEN
            UPDATE temp_table SET  num_year2=cons_2, den_year2=cons_3 WHERE  temp_table.id=1;
            END IF;
            
            IF cons_1=3 THEN
                UPDATE temp_table SET  num_year3=cons_2, den_year3=cons_3 WHERE   temp_table.id=1;
            END IF;
            
            IF cons_1=4 THEN
                 UPDATE temp_table SET num_year4=cons_2, den_year4=cons_3 WHERE  temp_table.id=1;
            END IF;
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_sancionatorio(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id bigint, iyear double precision, arec_num_year1 double precision, arec_num_year2 double precision, arec_num_year3 double precision, arec_num_year4 double precision, areh_num_year1 double precision, areh_num_year2 double precision, areh_num_year3 double precision, areh_num_year4 double precision, den_year1 double precision, den_year2 double precision, den_year3 double precision, den_year4 double precision) AS $$
        declare  
            cur_codes cursor
                 for   SELECT
                            distinct
                            public.variables.category_name,
           sum(public.indicator_activities.denominator) FILTER (WHERE year=1) AS den_year_1,
           sum(public.indicator_activities.denominator) FILTER (WHERE year=2) AS den_year_2,
           sum(public.indicator_activities.denominator) FILTER (WHERE year=3) AS den_year_3,
           sum(public.indicator_activities.denominator) FILTER (WHERE year=4) AS den_year_4,
           sum(public.indicator_activities.numerator) FILTER (WHERE year=1) AS num_year_1,
           sum(public.indicator_activities.numerator) FILTER (WHERE year=2) AS num_year_2,
           sum(public.indicator_activities.numerator) FILTER (WHERE year=3) AS num_year_3,
           sum(public.indicator_activities.numerator) FILTER (WHERE year=4) AS num_year_4
                            
                    FROM
                         public.variables 
                         INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                         INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                         INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                         AND public.indicators.id = public.variables.indicator_id
                         INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                         INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                         INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                         INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                     where 
                         public.strategic_lines.p_a_i_id =p_paid and
                          public.indicators.abbreviated_name = 'PPSR'
                        -- and public.variables.category_name in ('Áreas Protegidas Continentales','Áreas protegidas marinas, costeras e insulares')
                         group by      public.variables.category_name;
                        -- public.strategic_lines.p_a_i_id =1
                        --public.indicators.abbreviated_name = 'PAERRR'
                        -- and public.variables.category_name in ('Áreas Protegidas Continentales','Áreas protegidas marinas, costeras e insulares')
                             
        
        DECLARE   cons_1  character varying;
        DECLARE   cons_2   double precision := 0;
        DECLARE   cons_3   double precision := 0;
        DECLARE   cons_4   double precision := 0;
        DECLARE   cons_5   double precision := 0;
        DECLARE   cons_6   double precision := 0;
        DECLARE   cons_7   double precision := 0;
        DECLARE   cons_8   double precision := 0;
        DECLARE   cons_9   double precision := 0;
        
        DECLARE   cons_total_den_1   double precision := 0;
        DECLARE   cons_total_den_2   double precision := 0;
        DECLARE   cons_total_den_3   double precision := 0;
        DECLARE   cons_total_den_4   double precision := 0;
        
        DECLARE   cons_10  integer := 0;
        
        DECLARE   cons_pago double precision := 0;
        DECLARE   cons_oblig double precision := 0;
        DECLARE   index_tmp  integer := 0;
        
        DECLARE len_code integer := 0;
        DECLARE up_code character varying;
        DECLARE id_code integer := 0;
        
        DECLARE cons2_id integer := 0;
        DECLARE cons2_value double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select 
        CAST(1 as bigint) as id,
        CAST(0 as double precision) as iyear,
        CAST(0 as double precision) as arec_num_year1,
        CAST(0 as double precision) as arec_num_year2,
        CAST(0 as double precision) as arec_num_year3,
        CAST(0 as double precision) as arec_num_year4,
        CAST(0 as double precision) as areh_num_year1,
        CAST(0 as double precision) as areh_num_year2,
        CAST(0 as double precision) as areh_num_year3,
        CAST(0 as double precision) as areh_num_year4,
        CAST(0 as double precision) as den_year1,
        CAST(0 as double precision) as den_year2,
        CAST(0 as double precision) as den_year3,
        CAST(0 as double precision) as den_year4
        
        from  public.activities act 
        order by act.id
        limit 1;
           -- open the cursor
           open cur_codes;
        
           loop
            -- fetch row into the film
              fetch cur_codes into cons_1,cons_2,cons_3,cons_4,cons_5,cons_6,cons_7,cons_8,cons_9;
        
            -- exit when no more row to fetch
              exit when not found;
        
            index_tmp := index_tmp+1;	
        
            IF cons_2 is NULL THEN
            cons_2:=0;
            END IF;
            IF cons_3 is NULL THEN
            cons_3:=0;
            END IF;
            IF cons_4 is NULL THEN
            cons_4:=0;
            END IF;
            IF cons_5 is NULL THEN
            cons_5:=0;
            END IF;
            IF cons_6 is NULL THEN
            cons_6:=0;
            END IF;
            IF cons_7 is NULL THEN
            cons_7:=0;
            END IF;
            IF cons_8 is NULL THEN
            cons_8:=0;
            END IF;
            IF cons_9 is NULL THEN
            cons_9:=0;
            END IF;
            
            
            index_tmp := index_tmp+1;	
            cons_total_den_1:= cons_total_den_1+	cons_2;
            cons_total_den_2:= cons_total_den_2+	cons_3;
            cons_total_den_3:= cons_total_den_3+	cons_4;
            cons_total_den_4:= cons_total_den_4+	cons_5;
            
            IF cons_1='Actos administrativos de cesación de procedimiento' THEN
            UPDATE temp_table SET  den_year1=cons_total_den_1,den_year2=cons_total_den_2,den_year3=cons_total_den_3,den_year4=cons_total_den_4, arec_num_year1=cons_6, arec_num_year2=cons_7,arec_num_year3=cons_8,arec_num_year4=cons_9
            WHERE  temp_table.id=1;
            END IF;
            IF cons_1='Actos administrativos de determinación de la responsabilidad' THEN
            UPDATE temp_table SET  den_year1=cons_total_den_1,den_year2=cons_total_den_2,den_year3=cons_total_den_3,den_year4=cons_total_den_4,areh_num_year1=cons_6, areh_num_year2=cons_7,areh_num_year3=cons_8,areh_num_year4=cons_9
            WHERE  temp_table.id=1;
            END IF;
        
            
           end loop;
          
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; 
        --   return titles;
        DROP TABLE temp_table;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_tipo_3_sector_comp(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id_activity integer, name character varying, category_name character varying, year integer, presp_ini double precision, presp_def double precision, comprometido double precision, pagos double precision, obligaciones double precision, tematica character varying, sectores character varying) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for select resultado.id, resultado.name, resultado.category_name,resultado.year, sum(resultado.presp_def) as presp_def from (SELECT DISTINCT
        
                      public.activities.id,
                      public.activities.name,
                      public.variables.category_name,
                     public.indicator_activities.year,
                      public.activity_sources.value as presp_def
                FROM
                     public.activities INNER JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
                     AND public.activities.id = public.indicator_activities.activities_id
                     LEFT JOIN public.evidence_advance ON public.indicator_activities.evidence_id = public.evidence_advance.id
                     INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                     INNER JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id
                     INNER JOIN public.variables ON public.indicator_activities.variable_id = public.variables.id
                     INNER JOIN public.activity_sources ON public.activities.id = public.activity_sources.activity_id
                     LEFT JOIN public.evidence_financial ON public.activity_sources.id = public.evidence_financial.activity_source_id
                     INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                     INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                     INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                     INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                WHERE
                     public.indicators.abbreviated_name = 'PSA'
                     and public.strategic_lines.p_a_i_id = p_paid
                     and public.indicator_activities.year=p_year
                     and public.activity_sources.age=p_year
                    GROUP BY  public.activities.id,	 public.variables.category_name,
                         public.indicator_activities.year,public.activity_sources.value
        ) as resultado
        
        group by resultado.id, resultado.name, resultado.category_name,resultado.year;
            
        
            
            cur_costs cursor
             for SELECT fnd.financial_plans_id, sum(fnd.value) FROM public.fundraisings as fnd
                    INNER JOIN public.financial_plans as fp ON fnd.financial_plans_id = fp.id
                    where fp.year=p_year
                    group by fnd.financial_plans_id;
        
        DECLARE cons_id_act integer := 0;
        DECLARE cons_name character varying;
        DECLARE cons_cat_name character varying;
        DECLARE cons_year integer := 0;
        DECLARE cons_presp_def double precision DEFAULT 0;
        DECLARE cons_compromisos double precision DEFAULT 0;
        DECLARE cons_pagos double precision DEFAULT 0;
        DECLARE cons_obligaciones double precision DEFAULT 0;
        DECLARE cons_tematica character varying;
        DECLARE cons_sectores character varying;
        DECLARE presupuesto_ini double precision DEFAULT 0;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select  
        CAST(0 as integer) as id_activity,
        CAST('' as character varying) as name,
        CAST('' as character varying) as category_name,
        CAST(0 as integer) as year,
        CAST(0 as double precision) as presp_ini,
        CAST(0 as double precision) as presp_def,
        CAST(0 as double precision) as comprometido,
        CAST(0 as double precision) as pagos,
        CAST(0 as double precision) as obligaciones,
        CAST(0 as character varying) as tematica,
        CAST(0 as character varying) as sectores
        
        from public.financing_sources as ffs limit 0;
        
           -- open the cursor
           open cur_codes;
            
           loop
            -- fetch row into the film
              fetch cur_codes into cons_id_act, cons_name, cons_cat_name, cons_year,cons_presp_def ;
            -- exit when no more row to fetch
              exit when not found;
        
            -- build the output
            presupuesto_ini = (SELECT  public.budget_from_history(p_year,cons_id_act,p_paid));
            
            IF presupuesto_ini is NULL THEN 
            presupuesto_ini:= cons_presp_def;
            END IF;
            
            cons_compromisos:=(SELECT
                                sum (public.evidence_financial.value) as comprometido
                                FROM
                                public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
                                INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
                                INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
                                AND public.activities.id = public.indicator_activities.activities_id
                                where public.evidence_advance.activity_id=cons_id_act 
                                AND public.evidence_advance.year=p_year);
        
            cons_pagos:=(SELECT sum(value)
                            FROM  payments
                            WHERE evidence_id
                            IN (SELECT distinct
                            evidence_advance.id
                            FROM
                            public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
                            INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
                            INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
                            AND public.activities.id = public.indicator_activities.activities_id
                            where public.evidence_advance.activity_id=cons_id_act
                            AND public.evidence_advance.year=p_year)
                            AND payment=True
                            );
            
                cons_obligaciones:=(SELECT sum(value)
                        FROM  payments
                        WHERE evidence_id
                        IN (SELECT distinct
                        evidence_advance.id
                        FROM
                        public.activities INNER JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
                        INNER JOIN public.evidence_financial ON public.evidence_advance.id = public.evidence_financial.evidence_id
                        INNER JOIN public.indicator_activities ON public.evidence_advance.id = public.indicator_activities.evidence_id
                        AND public.activities.id = public.indicator_activities.activities_id
                        where public.evidence_advance.activity_id=cons_id_act
                        AND public.evidence_advance.year=p_year)
                        );
        
        cons_tematica:=(SELECT
                                    string_agg(public.other_data_year.value, ', ')
                                    --public.other_data_year.value
                                    FROM
                                    public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                                    where     public.other_data_year.activity_id=cons_id_act 
                                    and  public.other_data_year.year=p_year
                                    and public.other_data.variable_name='Temática');
        
        cons_sectores:=(SELECT
                            string_agg(public.other_data_year.value, ', ')
                            --public.other_data_year.value
                            FROM
                            public.other_data INNER JOIN public.other_data_year ON public.other_data.id = public.other_data_year.other_data_id
                            where     public.other_data_year.activity_id=cons_id_act 
                            and  public.other_data_year.year=p_year
                            and public.other_data.variable_name='Sectores');
        
                  INSERT INTO temp_table(id_activity, name,category_name,year,presp_ini,presp_def, comprometido,pagos,obligaciones,tematica,sectores)VALUES 
            (cons_id_act, cons_name, cons_cat_name, cons_year,presupuesto_ini,cons_presp_def,cons_compromisos,cons_pagos,cons_obligaciones,
             cons_tematica,cons_sectores);
        
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
        CREATE OR REPLACE FUNCTION public.ind_totales(
            p_pai_id integer,
            p_year integer,
            type_indicator character varying)
            RETURNS TABLE(total double precision) AS $$
        declare
            reg Record;
            numerator double precision;
            denominator double precision;
            total double precision;
            
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS ind_totales (
                total double precision
            );
            
            for reg in
                (select
                    *
                from ind_tipo_1(
                    p_year,
                    p_pai_id,
                    type_indicator
                ))
            loop
                /*numerator = reg.num_year1 + reg.num_year2 + reg.num_year3 + reg.num_year4;
                denominator = reg.den_year1 + reg.den_year2 + reg.den_year3 + reg.den_year4;
                raise notice 'num: %, den: %', type_indicator, p_pai_id;
                IF denominator = 0 THEN
                    total = 0;
                ELSE
                    total = numerator / denominator;
                END IF;*/
                IF p_year = 1 THEN
                    numerator = reg.num_year1;
                    denominator = reg.den_year1;
                ELSEIF p_year = 2 THEN
                    numerator = reg.num_year2;
                    denominator = reg.den_year2;
                ELSEIF p_year = 3 THEN
                    numerator = reg.num_year2;
                    denominator = reg.den_year3;
                ELSEIF p_year = 4 THEN
                    numerator = reg.num_year4;
                    denominator = reg.den_year4;
                END IF;
                raise notice 'num: %, den: %', numerator, denominator;
                IF denominator = 0 OR denominator is null OR numerator = 0 OR numerator is null THEN
                    total = 0;
                ELSE
                    total = numerator / denominator;
                END IF;
            end loop;
            
            IF total > 1 THEN
                total = 1;
            END IF;
            
            insert into ind_totales (
                total
            ) VALUES (
                total
            );
                
        RETURN QUERY 
        SELECT *
        from ind_totales; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE ind_totales;
        
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
