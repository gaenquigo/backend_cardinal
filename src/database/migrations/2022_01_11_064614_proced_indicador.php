<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedIndicador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_amenaz_totales(
            p_paid integer,
            p_year integer)
            RETURNS TABLE(total double precision) AS $$
        
        declare 
            reg Record;
            numerator double precision;
            denominator double precision;
            total double precision;
        
        begin
         
            CREATE TEMP TABLE IF NOT EXISTS ind_amenaz_totales (
                total double precision
            );
            
            for reg in
                (SELECT
                     *
                 from public.ind_tipo_3_amenazas(
                    p_year,
                    p_paid
                 ))
            loop
                numerator = reg.efau_cont_num + reg.efau_marin_num + reg.eflo_cont_num + reg.eflo_marin_num;
                denominator = reg.efau_cont_den + reg.efau_marin_den + reg.eflo_cont_den + reg.eflo_marin_den;
                /*IF p_year = 1 THEN
                    numerator = reg.meta_cont + reg.meta_marin;
                    denominator = reg.sup_cont + reg.sup_marin;
                ELSEIF p_year = 2 THEN
                    numerator = reg.hornum_2 + reg.hactnum_2;
                    denominator = reg.horden_2;
                ELSEIF p_year = 3 THEN
                    numerator = reg.hornum_3 + reg.hactnum_3;
                    denominator = reg.horden_3;
                ELSEIF p_year = 4 THEN
                    numerator = reg.hornum_4 + reg.hactnum_4;
                    denominator = reg.horden_4;
                END IF;*/
                raise notice 'num: %, den: %', numerator, denominator;
                IF denominator = 0 THEN
                    total = 0;
                ELSE
                    total = numerator / denominator;
                END IF;
            end loop;
            insert into ind_amenaz_totales (
                total
            ) VALUES (
                total
            );
            
        RETURN QUERY 
        SELECT *
        from ind_amenaz_totales;
        
        DROP TABLE ind_amenaz_totales;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_forestal_totales(
            p_paid integer,
            p_year integer)
            RETURNS TABLE(total double precision) AS $$
        
        declare 
            reg Record;
            numerator double precision;
            denominator double precision;
            total double precision;
        
        begin
         
            CREATE TEMP TABLE IF NOT EXISTS ind_forestal_totales (
                total double precision
            );
            
            for reg in
                (select 
                    COALESCE(sum(t.meta_or),0) as meta_or,
                    COALESCE(sum(t.meta_act),0)as meta_act, 
                    COALESCE(sum(t.horden_1),0) as horden_1,
                    COALESCE(sum(t.horden_2),0)as horden_2, 
                    COALESCE(sum(t.horden_3),0)as horden_3,
                    COALESCE(sum(t.horden_4),0) as horden_4, 
                    COALESCE(sum(t.hornum_1),0) as hornum_1, 
                    COALESCE(sum(t.hornum_2),0) as hornum_2,
                    COALESCE(sum(t.hornum_3),0) as hornum_3, 
                    COALESCE(sum(t.hornum_4),0) as hornum_4,
                    COALESCE(sum(t.hactnum_1),0) as hactnum_1, 
                    COALESCE(sum(t.hactnum_2),0) as hactnum_2,
                    COALESCE(sum(t.hactnum_3),0) as hactnum_3, 
                    COALESCE(sum(t.hactnum_4),0) as hactnum_4
        
                    from (SELECT
        
                    --	public.indicator_activities.year,
                    --public.activities.name,
                    --public.variables.category_name,
                    --count(resultado.id) FILTER (WHERE year=4) AS con_year_4
                    sum(public.indicator_activities.denominator ) 
                    filter (where public.variables.category_name='Hectáreas forestales a ser ordenadas en el Plan de Ordenación Forestal en el cuatrienio (ha)')
                    as meta_or,
        
                    sum(public.indicator_activities.denominator ) 
                    filter (where public.variables.category_name='Hectáreas forestales a ser actualizadas en el Plan de Ordenación Forestal en el cuatrienio (ha) -si aplica-')
                    as meta_act,
        
                    sum(public.indicator_activities.denominator ) filter (where public.indicator_activities.year=1) as horden_1,
                    sum(public.indicator_activities.denominator ) filter (where public.indicator_activities.year=2) as horden_2,
                    sum(public.indicator_activities.denominator ) filter (where public.indicator_activities.year=3) as horden_3,
                    sum(public.indicator_activities.denominator ) filter (where public.indicator_activities.year=4) as horden_4,
        
                    sum(public.indicator_activities.numerator ) 
                    filter (where public.indicator_activities.year=1 
                    AND public.variables.category_name='Hectáreas forestales a ser ordenadas en el Plan de Ordenación Forestal en el cuatrienio (ha)')
                    as hornum_1,
                    sum(public.indicator_activities.numerator ) 
                    filter (where public.indicator_activities.year=2 
                    AND public.variables.category_name='Hectáreas forestales a ser ordenadas en el Plan de Ordenación Forestal en el cuatrienio (ha)')
                    as hornum_2,
                    sum(public.indicator_activities.numerator ) 
                    filter (where public.indicator_activities.year=3
                    AND public.variables.category_name='Hectáreas forestales a ser ordenadas en el Plan de Ordenación Forestal en el cuatrienio (ha)')
                    as hornum_3,
                    sum(public.indicator_activities.numerator ) 
                    filter (where public.indicator_activities.year=4
                    AND public.variables.category_name='Hectáreas forestales a ser ordenadas en el Plan de Ordenación Forestal en el cuatrienio (ha)')
                    as hornum_4,
        
                    sum(public.indicator_activities.numerator) 
                    filter (where public.indicator_activities.year=1 
                    AND public.variables.category_name='Hectáreas forestales a ser actualizadas en el Plan de Ordenación Forestal en el cuatrienio (ha) -si aplica-')
                    as hactnum_1,
                    sum(public.indicator_activities.numerator) 
                    filter (where public.indicator_activities.year=2
                    AND public.variables.category_name='Hectáreas forestales a ser actualizadas en el Plan de Ordenación Forestal en el cuatrienio (ha) -si aplica-')
                    as hactnum_2,
                    sum(public.indicator_activities.numerator) 
                    filter (where public.indicator_activities.year=3
                    AND public.variables.category_name='Hectáreas forestales a ser actualizadas en el Plan de Ordenación Forestal en el cuatrienio (ha) -si aplica-')
                    as hactnum_3,
                    sum(public.indicator_activities.numerator) 
                    filter (where public.indicator_activities.year=4
                    AND public.variables.category_name='Hectáreas forestales a ser actualizadas en el Plan de Ordenación Forestal en el cuatrienio (ha) -si aplica-')
                    as hactnum_4
        
                            FROM
                         public.activities 
                         --inner JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
                         INNER JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
                         INNER JOIN public.variables ON public.indicator_activities.variable_id = public.variables.id
                         INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                         INNER JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id 
                         INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                         INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                         INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                         INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
        
                         where public.indicators.abbreviated_name = 'PAPOF' and
                         public.strategic_lines.p_a_i_id= p_paid
                         group by public.variables.category_name) as t)
            loop
                IF p_year = 1 THEN
                    numerator = reg.hornum_1 + reg.hactnum_1;
                denominator = reg.horden_1;
                ELSEIF p_year = 2 THEN
                    numerator = reg.hornum_2 + reg.hactnum_2;
                    denominator = reg.horden_2;
                ELSEIF p_year = 3 THEN
                    numerator = reg.hornum_3 + reg.hactnum_3;
                    denominator = reg.horden_3;
                ELSEIF p_year = 4 THEN
                    numerator = reg.hornum_4 + reg.hactnum_4;
                    denominator = reg.horden_4;
                END IF;
                raise notice 'num: %, den: %', numerator, denominator;
                IF denominator = 0 THEN
                    total = 0;
                ELSE
                    total = numerator / denominator;
                END IF;
            end loop;
            insert into ind_forestal_totales (
                total
            ) VALUES (
                total
            );
            
        RETURN QUERY 
        SELECT *
        from ind_forestal_totales;
        
        DROP TABLE ind_forestal_totales;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_invasoras_totales(
            p_paid integer,
            p_year integer)
            RETURNS TABLE(total double precision) AS $$
        
        declare 
            reg Record;
            numerator double precision;
            denominator double precision;
            total double precision;
        
        begin
         
            CREATE TEMP TABLE IF NOT EXISTS ind_invasoras_totales (
                total double precision
            );
            
            for reg in
                (SELECT
                     *
                 from public.ind_tipo_3_invasoras(
                    p_year,
                    p_paid
                 ))
            loop
                numerator = reg.efau_cont_num + reg.efau_marin_num + reg.eflo_cont_num + reg.eflo_marin_num;
                denominator = reg.efau_cont_den + reg.efau_marin_den + reg.eflo_cont_den + reg.eflo_marin_den;
                /*IF p_year = 1 THEN
                    numerator = reg.meta_cont + reg.meta_marin;
                    denominator = reg.sup_cont + reg.sup_marin;
                ELSEIF p_year = 2 THEN
                    numerator = reg.hornum_2 + reg.hactnum_2;
                    denominator = reg.horden_2;
                ELSEIF p_year = 3 THEN
                    numerator = reg.hornum_3 + reg.hactnum_3;
                    denominator = reg.horden_3;
                ELSEIF p_year = 4 THEN
                    numerator = reg.hornum_4 + reg.hactnum_4;
                    denominator = reg.horden_4;
                END IF;*/
                raise notice 'num: %, den: %', numerator, denominator;
                IF denominator = 0 THEN
                    total = 0;
                ELSE
                    total = numerator / denominator;
                END IF;
            end loop;
            insert into ind_invasoras_totales (
                total
            ) VALUES (
                total
            );
            
        RETURN QUERY 
        SELECT *
        from ind_invasoras_totales;
        
        DROP TABLE ind_invasoras_totales;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_planesap_totales(
            p_paid integer,
            p_year integer)
            RETURNS TABLE(total double precision) AS $$
        
        declare 
            reg Record;
            numerator double precision;
            denominator double precision;
            total double precision;
        
        begin
         
            CREATE TEMP TABLE IF NOT EXISTS ind_planesap_totales (
                total double precision
            );
            
            for reg in
                (SELECT
                     *
                 from public.ind_tipo_3_planesap(
                    p_year,
                    p_paid
                 ))
            loop
                numerator = reg.meta_cont + reg.meta_marin;
                denominator = reg.sup_cont + reg.sup_marin;
                /*IF p_year = 1 THEN
                    numerator = reg.meta_cont + reg.meta_marin;
                    denominator = reg.sup_cont + reg.sup_marin;
                ELSEIF p_year = 2 THEN
                    numerator = reg.hornum_2 + reg.hactnum_2;
                    denominator = reg.horden_2;
                ELSEIF p_year = 3 THEN
                    numerator = reg.hornum_3 + reg.hactnum_3;
                    denominator = reg.horden_3;
                ELSEIF p_year = 4 THEN
                    numerator = reg.hornum_4 + reg.hactnum_4;
                    denominator = reg.horden_4;
                END IF;*/
                raise notice 'num: %, den: %', numerator, denominator;
                IF denominator = 0 OR numerator is null THEN
                    total = 0;
                ELSE
                    total = numerator / denominator;
                END IF;
            end loop;
            insert into ind_planesap_totales (
                total
            ) VALUES (
                total
            );
            
        RETURN QUERY 
        SELECT *
        from ind_planesap_totales;
        
        DROP TABLE ind_planesap_totales;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_porh(
            p_year integer,
            p_paid integer,
            p_type integer)
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
             
             where public.indicators.abbreviated_name = 'PPORHA'
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
        CREATE OR REPLACE FUNCTION public.ind_pser(
            p_year integer,
            p_paid integer,
            p_type integer)
            RETURNS TABLE(id bigint, iyear double precision, num_year1 double precision, num_year2 double precision, num_year3 double precision, num_year4 double precision, den_year1 double precision, den_year2 double precision, den_year3 double precision, den_year4 double precision) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for  -- select * from variables where 
        --select * from indicator_activities
        --select * from activities where name like '%porh%'
        
        SELECT
             public.indicator_activities.year,
             sum(public.indicator_activities.numerator),
             sum(public.indicator_activities.denominator)
        FROM
             public.activities 
             --inner JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             INNER JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
            --AND public.evidence_advance.id = public.indicator_activities.evidence_id
             --AND public.activities.id = public.indicator_activities.activities_id
             --left join public.evidence_advance  on public.evidence_advance.id = public.indicator_activities.evidence_id
             INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
             INNER JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id
             INNER JOIN public.variables ON public.indicator_activities.variable_id = public.variables.id
             AND public.indicators.id = public.variables.indicator_id
        
        --     AND public.domains.id = public.indicators.calcule_type
        --     AND public.domains.id = public.indicators.unit_id
        --     AND public.domains.id = public.indicators.category_type
        --     AND public.domains.id = public.indicators.type
        --     AND public.domains.id = public.evidence_advance.state_id
             
             INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
             INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
             INNER JOIN public.programs ON public.projects.program_id = public.programs.id
             INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
             
             where public.indicators.abbreviated_name = 'PSER'
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
        DECLARE   cons_11  integer := 0;
        DECLARE   cons_12  character varying;
        DECLARE   cons_13  integer := 0;
        DECLARE   cons_14  integer := 0;
        DECLARE   cons_15  character varying;
        DECLARE   cons_16  integer := 0;
        DECLARE   cons_17  character varying;
        DECLARE   cons_18  integer := 0;
        DECLARE   cons_19  integer := 0;
        DECLARE   cons_20  integer := 0;
        DECLARE   cons_21  integer := 0;
        DECLARE   cons_22  double precision DEFAULT 0;
        DECLARE   cons_23  integer := 0;
        DECLARE   cons_24  integer := 0;
        DECLARE   cons_25  integer := 0;
        DECLARE   cons_26  double precision DEFAULT 0;
        DECLARE   cons_27  integer := 0;
        DECLARE   cons_28  integer := 0;
        DECLARE   cons_29  integer := 0;
        DECLARE   cons_30  integer := 0;
        DECLARE   cons_31  double precision DEFAULT 0;
        DECLARE   cons_32  integer := 0;
        DECLARE   cons_33  double precision DEFAULT 0;
        DECLARE   cons_34  integer := 0;
        DECLARE   cons_35  integer := 0;
        DECLARE   cons_36  integer := 0;
        DECLARE   cons_37  double precision DEFAULT 0;
        DECLARE   cons_38  boolean;--es payment true es pago, false es obligación
        DECLARE   cons_39  integer := 0;
        
        DECLARE   cons_40  integer := 0;
        DECLARE   cons_41  integer := 0;
        DECLARE   cons_42  integer := 0;
        DECLARE   cons_43  bigint := 0;
        DECLARE   cons_44  double precision := 0;
        DECLARE   cons_45  double precision := 0;
        DECLARE   cons_46  double precision := 0;
        DECLARE   cons_47  double precision := 0;
        DECLARE   cons_48  double precision := 0;
        DECLARE   cons_49  double precision := 0;
        DECLARE   cons_50  double precision := 0;
        DECLARE   cons_51  double precision := 0;
        DECLARE   cons_52  integer := 0;
        DECLARE   cons_53  integer := 0;
        DECLARE   cons_54  integer := 0;
        DECLARE   cons_55  character varying;
        DECLARE   cons_56  character varying;
        DECLARE   cons_57  character varying;
        DECLARE   cons_58  integer := 0;
        DECLARE   cons_59  boolean;
        DECLARE   cons_60  double precision := 0;
        DECLARE   cons_61  double precision := 0;
        DECLARE   cons_62  double precision := 0;
        DECLARE   cons_63  double precision := 0;
        DECLARE   cons_64  integer := 0;
        DECLARE   cons_65  integer := 0;
        DECLARE   cons_66  integer := 0;
        DECLARE   cons_67  integer := 0;
        DECLARE   cons_68  character varying;
        
        DECLARE   cons_69  integer := 0;
        DECLARE   cons_70  integer := 0;
        DECLARE   cons_71  bigint := 0;
        DECLARE   cons_72  character varying;
        DECLARE   cons_73  double precision  := 0;
        DECLARE   cons_74  double precision  := 0;
        DECLARE   cons_75  double precision  := 0;
        DECLARE   cons_76  double precision  := 0;
        DECLARE   cons_77  double precision := 0;
        DECLARE   cons_78  integer := 0;
        
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
             --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,cons_2,0,0,0,cons_3,0,0,0 );
            
            END IF;
            
                IF cons_1=2 THEN
             --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,0,cons_2,0,0,0,cons_3,0,0 );
            UPDATE temp_table SET  num_year2=cons_2, den_year2=cons_3 WHERE  temp_table.id=1;
            END IF;
            
                IF cons_1=3 THEN
                UPDATE temp_table SET  num_year3=cons_2, den_year3=cons_3 WHERE   temp_table.id=1;
             --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,0,0,cons_2,0,0,0,cons_3,0 );
            
            END IF;
            
                IF cons_1=4 THEN
             UPDATE temp_table SET num_year4=cons_2, den_year4=cons_3 WHERE  temp_table.id=1;
            --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,0,0,0,cons_2,0,0,0,cons_3 );
            
            END IF;
            
            
        
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
        CREATE OR REPLACE FUNCTION public.ind_pser_totales(
            p_year integer,
            p_paid integer,
            p_type integer)
            RETURNS TABLE(total double precision) AS $$
        declare 
            reg Record;
            numerator double precision;
            denominator double precision;
            total double precision;
        
        begin
         
            CREATE TEMP TABLE IF NOT EXISTS ind_pser_totales (
                total double precision
            );
            
            for reg in
                (select
                    *
                from ind_pser(
                    p_year,
                    p_paid,
                    1
                ))
            loop
                /*numerator = reg.num_year1 + reg.num_year2 + reg.num_year3 + reg.num_year4;
                denominator = reg.den_year1 + reg.den_year2 + reg.den_year3 + reg.den_year4;
                raise notice 'num: %, den: %', numerator, denominator;*/
                IF p_year = 1 THEN
                    numerator = reg.num_year1;
                    denominator = reg.den_year1;
                ELSEIF p_year = 2 THEN
                    numerator = reg.num_year2;
                    denominator = reg.den_year2;
                ELSEIF p_year = 3 THEN
                    numerator = reg.num_year3;
                    denominator = reg.den_year3;
                ELSEIF p_year = 4 THEN
                    numerator = reg.num_year4;
                    denominator = reg.den_year4;
                END IF;
                IF denominator = 0 THEN
                    total = 0;
                ELSE
                    total = numerator / denominator;
                END IF;
            end loop;
            insert into ind_pser_totales (
                total
            ) VALUES (
                total
            );
            
        RETURN QUERY 
        SELECT *
        from ind_pser_totales;
        
        DROP TABLE ind_pser_totales;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_psmv(
            p_year integer,
            p_paid integer,
            p_type integer)
            RETURNS TABLE(id bigint, iyear double precision, num_year1 double precision, num_year2 double precision, num_year3 double precision, num_year4 double precision, den_year1 double precision, den_year2 double precision, den_year3 double precision, den_year4 double precision) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for  -- select * from variables where 
        --select * from indicator_activities
        --select * from activities where name like '%porh%'
        
        SELECT
             public.indicator_activities.year,
             sum(public.indicator_activities.numerator),
             sum(public.indicator_activities.denominator)
        FROM
             public.activities inner JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             left JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
            --AND public.evidence_advance.id = public.indicator_activities.evidence_id
             --AND public.activities.id = public.indicator_activities.activities_id
             --left join public.evidence_advance  on public.evidence_advance.id = public.indicator_activities.evidence_id
             INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
             LEFT JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id
             AND public.domains.id = public.indicators.calcule_type
             AND public.domains.id = public.indicators.unit_id
             AND public.domains.id = public.indicators.category_type
             AND public.domains.id = public.indicators.type
             AND public.domains.id = public.evidence_advance.state_id
             
             INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
             INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
             INNER JOIN public.programs ON public.projects.program_id = public.programs.id
             INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
             
             where public.indicators.abbreviated_name = 'PPSMVCS'
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
        DECLARE   cons_11  integer := 0;
        DECLARE   cons_12  character varying;
        DECLARE   cons_13  integer := 0;
        DECLARE   cons_14  integer := 0;
        DECLARE   cons_15  character varying;
        DECLARE   cons_16  integer := 0;
        DECLARE   cons_17  character varying;
        DECLARE   cons_18  integer := 0;
        DECLARE   cons_19  integer := 0;
        DECLARE   cons_20  integer := 0;
        DECLARE   cons_21  integer := 0;
        DECLARE   cons_22  double precision DEFAULT 0;
        DECLARE   cons_23  integer := 0;
        DECLARE   cons_24  integer := 0;
        DECLARE   cons_25  integer := 0;
        DECLARE   cons_26  double precision DEFAULT 0;
        DECLARE   cons_27  integer := 0;
        DECLARE   cons_28  integer := 0;
        DECLARE   cons_29  integer := 0;
        DECLARE   cons_30  integer := 0;
        DECLARE   cons_31  double precision DEFAULT 0;
        DECLARE   cons_32  integer := 0;
        DECLARE   cons_33  double precision DEFAULT 0;
        DECLARE   cons_34  integer := 0;
        DECLARE   cons_35  integer := 0;
        DECLARE   cons_36  integer := 0;
        DECLARE   cons_37  double precision DEFAULT 0;
        DECLARE   cons_38  boolean;--es payment true es pago, false es obligación
        DECLARE   cons_39  integer := 0;
        
        DECLARE   cons_40  integer := 0;
        DECLARE   cons_41  integer := 0;
        DECLARE   cons_42  integer := 0;
        DECLARE   cons_43  bigint := 0;
        DECLARE   cons_44  double precision := 0;
        DECLARE   cons_45  double precision := 0;
        DECLARE   cons_46  double precision := 0;
        DECLARE   cons_47  double precision := 0;
        DECLARE   cons_48  double precision := 0;
        DECLARE   cons_49  double precision := 0;
        DECLARE   cons_50  double precision := 0;
        DECLARE   cons_51  double precision := 0;
        DECLARE   cons_52  integer := 0;
        DECLARE   cons_53  integer := 0;
        DECLARE   cons_54  integer := 0;
        DECLARE   cons_55  character varying;
        DECLARE   cons_56  character varying;
        DECLARE   cons_57  character varying;
        DECLARE   cons_58  integer := 0;
        DECLARE   cons_59  boolean;
        DECLARE   cons_60  double precision := 0;
        DECLARE   cons_61  double precision := 0;
        DECLARE   cons_62  double precision := 0;
        DECLARE   cons_63  double precision := 0;
        DECLARE   cons_64  integer := 0;
        DECLARE   cons_65  integer := 0;
        DECLARE   cons_66  integer := 0;
        DECLARE   cons_67  integer := 0;
        DECLARE   cons_68  character varying;
        
        DECLARE   cons_69  integer := 0;
        DECLARE   cons_70  integer := 0;
        DECLARE   cons_71  bigint := 0;
        DECLARE   cons_72  character varying;
        DECLARE   cons_73  double precision  := 0;
        DECLARE   cons_74  double precision  := 0;
        DECLARE   cons_75  double precision  := 0;
        DECLARE   cons_76  double precision  := 0;
        DECLARE   cons_77  double precision := 0;
        DECLARE   cons_78  integer := 0;
        
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
             --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,cons_2,0,0,0,cons_3,0,0,0 );
            
            END IF;
            
                IF cons_1=2 THEN
             --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,0,cons_2,0,0,0,cons_3,0,0 );
            UPDATE temp_table SET  num_year2=cons_2, den_year2=cons_3 WHERE  temp_table.id=1;
            END IF;
            
                IF cons_1=3 THEN
                UPDATE temp_table SET  num_year3=cons_2, den_year3=cons_3 WHERE   temp_table.id=1;
             --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,0,0,cons_2,0,0,0,cons_3,0 );
            
            END IF;
            
                IF cons_1=4 THEN
             UPDATE temp_table SET num_year4=cons_2, den_year4=cons_3 WHERE  temp_table.id=1;
            --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,0,0,0,cons_2,0,0,0,cons_3 );
            
            END IF;
            
        
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
        CREATE OR REPLACE FUNCTION public.ind_pueaa(
            p_year integer,
            p_paid integer,
            p_type integer)
            RETURNS TABLE(id bigint, iyear double precision, num_year1 double precision, num_year2 double precision, num_year3 double precision, num_year4 double precision, den_year1 double precision, den_year2 double precision, den_year3 double precision, den_year4 double precision) AS $$
        declare 
             --titles text default '';
             --rec_film  record;	 
            cur_codes cursor
                 for  -- select * from variables where 
        --select * from indicator_activities
        --select * from activities where name like '%porh%'
        
        SELECT
             public.indicator_activities.year,
             sum(public.indicator_activities.numerator),
             sum(public.indicator_activities.denominator)
        FROM
             public.activities inner JOIN public.evidence_advance ON public.activities.id = public.evidence_advance.activity_id
             left JOIN public.indicator_activities ON public.activities.id = public.indicator_activities.activities_id
            --AND public.evidence_advance.id = public.indicator_activities.evidence_id
             --AND public.activities.id = public.indicator_activities.activities_id
             --left join public.evidence_advance  on public.evidence_advance.id = public.indicator_activities.evidence_id
             INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
             LEFT JOIN public.domains ON public.indicator_activities.variable_in = public.domains.id
             AND public.domains.id = public.indicators.calcule_type
             AND public.domains.id = public.indicators.unit_id
             AND public.domains.id = public.indicators.category_type
             AND public.domains.id = public.indicators.type
             AND public.domains.id = public.evidence_advance.state_id
             
             INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
             INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
             INNER JOIN public.programs ON public.projects.program_id = public.programs.id
             INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
             
             where public.indicators.abbreviated_name = 'PPUEAACS'
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
        DECLARE   cons_11  integer := 0;
        DECLARE   cons_12  character varying;
        DECLARE   cons_13  integer := 0;
        DECLARE   cons_14  integer := 0;
        DECLARE   cons_15  character varying;
        DECLARE   cons_16  integer := 0;
        DECLARE   cons_17  character varying;
        DECLARE   cons_18  integer := 0;
        DECLARE   cons_19  integer := 0;
        DECLARE   cons_20  integer := 0;
        DECLARE   cons_21  integer := 0;
        DECLARE   cons_22  double precision DEFAULT 0;
        DECLARE   cons_23  integer := 0;
        DECLARE   cons_24  integer := 0;
        DECLARE   cons_25  integer := 0;
        DECLARE   cons_26  double precision DEFAULT 0;
        DECLARE   cons_27  integer := 0;
        DECLARE   cons_28  integer := 0;
        DECLARE   cons_29  integer := 0;
        DECLARE   cons_30  integer := 0;
        DECLARE   cons_31  double precision DEFAULT 0;
        DECLARE   cons_32  integer := 0;
        DECLARE   cons_33  double precision DEFAULT 0;
        DECLARE   cons_34  integer := 0;
        DECLARE   cons_35  integer := 0;
        DECLARE   cons_36  integer := 0;
        DECLARE   cons_37  double precision DEFAULT 0;
        DECLARE   cons_38  boolean;--es payment true es pago, false es obligación
        DECLARE   cons_39  integer := 0;
        
        DECLARE   cons_40  integer := 0;
        DECLARE   cons_41  integer := 0;
        DECLARE   cons_42  integer := 0;
        DECLARE   cons_43  bigint := 0;
        DECLARE   cons_44  double precision := 0;
        DECLARE   cons_45  double precision := 0;
        DECLARE   cons_46  double precision := 0;
        DECLARE   cons_47  double precision := 0;
        DECLARE   cons_48  double precision := 0;
        DECLARE   cons_49  double precision := 0;
        DECLARE   cons_50  double precision := 0;
        DECLARE   cons_51  double precision := 0;
        DECLARE   cons_52  integer := 0;
        DECLARE   cons_53  integer := 0;
        DECLARE   cons_54  integer := 0;
        DECLARE   cons_55  character varying;
        DECLARE   cons_56  character varying;
        DECLARE   cons_57  character varying;
        DECLARE   cons_58  integer := 0;
        DECLARE   cons_59  boolean;
        DECLARE   cons_60  double precision := 0;
        DECLARE   cons_61  double precision := 0;
        DECLARE   cons_62  double precision := 0;
        DECLARE   cons_63  double precision := 0;
        DECLARE   cons_64  integer := 0;
        DECLARE   cons_65  integer := 0;
        DECLARE   cons_66  integer := 0;
        DECLARE   cons_67  integer := 0;
        DECLARE   cons_68  character varying;
        
        DECLARE   cons_69  integer := 0;
        DECLARE   cons_70  integer := 0;
        DECLARE   cons_71  bigint := 0;
        DECLARE   cons_72  character varying;
        DECLARE   cons_73  double precision  := 0;
        DECLARE   cons_74  double precision  := 0;
        DECLARE   cons_75  double precision  := 0;
        DECLARE   cons_76  double precision  := 0;
        DECLARE   cons_77  double precision := 0;
        DECLARE   cons_78  integer := 0;
        
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
             --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,cons_2,0,0,0,cons_3,0,0,0 );
            
            END IF;
            
                IF cons_1=2 THEN
             --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,0,cons_2,0,0,0,cons_3,0,0 );
            UPDATE temp_table SET  num_year2=cons_2, den_year2=cons_3 WHERE  temp_table.id=1;
            END IF;
            
                IF cons_1=3 THEN
                UPDATE temp_table SET  num_year3=cons_2, den_year3=cons_3 WHERE   temp_table.id=1;
             --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,0,0,cons_2,0,0,0,cons_3,0 );
            
            END IF;
            
                IF cons_1=4 THEN
             UPDATE temp_table SET num_year4=cons_2, den_year4=cons_3 WHERE  temp_table.id=1;
            --INSERT INTO temp_table(id,iyear,num_year1,num_year2,num_year3,num_year4,den_year1,den_year2,den_year3,den_year4)
            --VALUES (index_tmp,cons_1,0,0,0,cons_2,0,0,0,cons_3 );
            
            END IF;
            
        
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
        CREATE OR REPLACE FUNCTION public.ind_restaura_totales(
            p_paid integer,
            p_year integer)
            RETURNS TABLE(total double precision) AS $$
        
        declare 
            reg Record;
            numerator double precision;
            denominator double precision;
            total double precision;
        
        begin
         
            CREATE TEMP TABLE IF NOT EXISTS ind_restaura_totales (
                total double precision
            );
            
            for reg in
                (SELECT
                     *
                 from public.ind_tipo_3_restauracion(
                    p_year,
                    p_paid
                 ))
            loop
                /*numerator = reg.efau_cont_num + reg.efau_marin_num + reg.eflo_cont_num + reg.eflo_marin_num;
                denominator = reg.den_year1 + reg.den_year2 + reg.den_year3 + reg.den_year4;*/
                IF p_year = 1 THEN
                    numerator = reg.arec_num_year1 + reg.areh_num_year1 + reg.ares_ec_num_year1;
                    denominator = reg.den_year1;
                ELSEIF p_year = 2 THEN
                    numerator = reg.arec_num_year2 + reg.areh_num_year2 + reg.ares_ec_num_year2;
                    denominator = reg.den_year2;
                ELSEIF p_year = 3 THEN
                    numerator = reg.arec_num_year3 + reg.areh_num_year3 + reg.ares_ec_num_year3;
                    denominator = reg.den_year3;
                ELSEIF p_year = 4 THEN
                    numerator = reg.arec_num_year4 + reg.areh_num_year4 + reg.ares_ec_num_year4;
                    denominator = reg.den_year4;
                END IF;
                raise notice 'num: %, den: %', numerator, denominator;
                IF denominator = 0 THEN
                    total = 0;
                ELSE
                    total = numerator / denominator;
                END IF;
            end loop;
            insert into ind_restaura_totales (
                total
            ) VALUES (
                total
            );
            
        RETURN QUERY 
        SELECT *
        from ind_restaura_totales;
        
        DROP TABLE ind_restaura_totales;
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ind_runap_totales(
            p_paid integer,
            p_year integer)
            RETURNS TABLE(total double precision) AS $$
        
        declare 
            reg Record;
            numerator double precision;
            denominator double precision;
            total double precision;
        
        begin
         
            CREATE TEMP TABLE IF NOT EXISTS ind_runap_totales (
                total double precision
            );
            
            for reg in
                (SELECT
                       sum(public.indicator_activities.denominator) FILTER (WHERE year=1) AS den_year1,
                       sum(public.indicator_activities.denominator) FILTER (WHERE year=2) AS den_year2,
                       sum(public.indicator_activities.denominator) FILTER (WHERE year=3) AS den_year3,
                       sum(public.indicator_activities.denominator) FILTER (WHERE year=4) AS den_year4,
                       sum(public.indicator_activities.numerator) FILTER (WHERE year=1) AS num_year1,
                       sum(public.indicator_activities.numerator) FILTER (WHERE year=2) AS num_year2,
                       sum(public.indicator_activities.numerator) FILTER (WHERE year=3) AS num_year3,
                       sum(public.indicator_activities.numerator) FILTER (WHERE year=4) AS num_year4
                    FROM public.variables 
                            INNER JOIN public.indicator_activities ON public.variables.id = public.indicator_activities.variable_id
                            INNER JOIN public.activities ON public.activities.id = public.indicator_activities.activities_id
                            -- INNER JOIN public.other_data_year ON public.indicator_activities.activities_id = public.other_data_year.activity_id
                            INNER JOIN public.indicators ON public.indicator_activities.indicator_id = public.indicators.id
                            AND public.indicators.id = public.variables.indicator_id
        
                            INNER JOIN public.objectives ON public.activities.objective_id = public.objectives.id
                            INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
                            INNER JOIN public.programs ON public.projects.program_id = public.programs.id
                            INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
                            --    INNER JOIN public.other_data ON public.indicators.id = public.other_data.indicator_id
                      --   AND public.other_data.id = public.other_data_year.other_data_id
                         where 
                         public.strategic_lines.p_a_i_id = p_paid
                        -- and  public.variables.category_name in ('Áreas Protegidas Continentales')
                         and public.indicators.abbreviated_name = 'PAPR')
            loop
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
            insert into ind_runap_totales (
                total
            ) VALUES (
                total
            );
            
        RETURN QUERY 
        SELECT *
        from ind_runap_totales;
        
        DROP TABLE ind_runap_totales;
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
