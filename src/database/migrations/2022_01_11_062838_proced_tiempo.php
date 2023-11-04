<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedTiempo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.tiempo_prom_den(
            p_pai_id bigint,
            p_year integer,
            abbreviated_den character varying)
            RETURNS TABLE(id character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) AS $$
        declare
            reg Record;
            id integer;
            anio1 numeric;
            anio2 numeric;
            anio3 numeric;
            anio4 numeric;
            tot numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS tiempo_prom_den (
                id character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            anio1 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        a1.denominator as denominator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like 'Tx'
                        and variables.abbreviated_denominator like abbreviated_den
                        and a1.year = 1
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio2 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        a1.denominator as denominator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like 'Tx'
                        and variables.abbreviated_denominator like abbreviated_den
                        and a1.year = 2
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio3 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        a1.denominator as denominator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like 'Tx'
                        and variables.abbreviated_denominator like abbreviated_den
                        and a1.year = 3
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio4 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        a1.denominator as denominator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like 'Tx'
                        and variables.abbreviated_denominator like abbreviated_den
                        and a1.year = 4
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            IF anio1 is null THEN
                anio1 = 0;
            END IF;
            IF anio2 is null THEN
                anio2 = 0;
            END IF;
            IF anio3 is null THEN
                anio3 = 0;
            END IF;
            IF anio4 is null THEN
                anio4 = 0;
            END IF;
            tot = anio1 + anio2 + anio3 + anio4;
            insert into tiempo_prom_den (
                id,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                abbreviated_den,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from tiempo_prom_den; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE tiempo_prom_den;
        
        end;
        
        $$ language plpgsql;");
		
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.tiempo_prom_num(
            p_pai_id bigint,
            p_year integer,
            abbreviated_num character varying)
            RETURNS TABLE(id character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) AS $$
        declare
            reg Record;
            id integer;
            anio1 numeric;
            anio2 numeric;
            anio3 numeric;
            anio4 numeric;
            tot numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS tiempo_prom_num (
                id character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            anio1 = (select
                        sum(numerator_table.numerator) as numerator
                    from (select
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        a1.numerator as numerator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like 'Tx'
                        and variables.abbreviated_denominator like abbreviated_num
                        and a1.year = 1
                        and strategic_lines.p_a_i_id = p_pai_id) as numerator_table);
            anio2 = (select
                        sum(numerator_table.numerator) as numerator
                    from (select
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        a1.numerator as numerator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like 'Tx'
                        and variables.abbreviated_denominator like abbreviated_num
                        and a1.year = 2
                        and strategic_lines.p_a_i_id = p_pai_id) as numerator_table);
            anio3 = (select
                        sum(numerator_table.numerator) as numerator
                    from (select
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        a1.numerator as numerator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like 'Tx'
                        and variables.abbreviated_denominator like abbreviated_num
                        and a1.year = 3
                        and strategic_lines.p_a_i_id = p_pai_id) as numerator_table);
            anio4 = (select
                        sum(numerator_table.numerator) as numerator
                    from (select
                        activities.id as id,
                        activities.name as name,
                        variables.category_name as category,
                        a1.numerator as numerator
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join indicator_activities a1 on a1.activities_id = activities.id
                    inner join indicators on indicators.id = a1.indicator_id
                    inner join variables on variables.id = a1.variable_id
                    where
                        indicators.abbreviated_name like 'Tx'
                        and variables.abbreviated_denominator like abbreviated_num
                        and a1.year = 4
                        and strategic_lines.p_a_i_id = p_pai_id) as numerator_table);
            IF anio1 is null THEN
                anio1 = 0;
            END IF;
            IF anio2 is null THEN
                anio2 = 0;
            END IF;
            IF anio3 is null THEN
                anio3 = 0;
            END IF;
            IF anio4 is null THEN
                anio4 = 0;
            END IF;
            tot = anio1 + anio2 + anio3 + anio4;
            insert into tiempo_prom_num (
                id,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                abbreviated_num,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from tiempo_prom_num; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE tiempo_prom_num;
        
        end;
        
        $$ language plpgsql;");
		
		
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.tiempo_prom_prog(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(program_name character varying) AS $$
        declare
            reg Record;
            cur_tiempo_prom_prog cursor
                for select distinct
                        programs.car_program as program_name
                    from activities
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join pais on pais.id = strategic_lines.p_a_i_id
                    inner join groups on groups.id = pais.group_id
                    inner join indicator_activities on indicator_activities.activities_id = activities.id
                    inner join indicators on indicators.id = indicator_activities.indicator_id
                    inner join variables on variables.id = indicator_activities.variable_id
                    where
                        indicators.abbreviated_name like 'Tx'
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id;
        
            int_id integer := 1;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS tiempo_prom_prog (
                program_name character varying
            );
        
            open cur_tiempo_prom_prog;
                LOOP
                    FETCH cur_tiempo_prom_prog INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF int_id = 1 THEN
                        program_name = reg.program_name;
                    ELSE
                        program_name = concat(program_name, ', ', reg.program_name);
                    END IF;
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                INSERT INTO tiempo_prom_prog (
                        program_name
                    )
                    VALUES (
                        program_name
                    );
           close cur_tiempo_prom_prog;
           
        RETURN QUERY 
        SELECT *
        from tiempo_prom_prog; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE tiempo_prom_prog;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.tiempo_prom_subtot(
            p_pai_id bigint,
            p_year integer,
            abbreviated_var character varying)
            RETURNS TABLE(id character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) AS $$
        declare
            reg Record;
            id integer;
            anio1 numeric;
            anio2 numeric;
            anio3 numeric;
            anio4 numeric;
            tot numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS tiempo_prom_subtot (
                id character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            for reg in
                (SELECT * from public.tiempo_prom_den(
                    p_pai_id, 
                    p_year, 
                    abbreviated_var
                ))
                loop
                    IF reg.anio1 = 0 THEN
                        anio1 = 0;
                    ELSE
                        anio1 = (SELECT tiempo_prom_num.anio1 from public.tiempo_prom_num(
                            p_pai_id, 
                            p_year, 
                            abbreviated_var
                        )) / reg.anio1;
                    END IF;
                    IF reg.anio2 = 0 THEN
                        anio2 = 0;
                    ELSE
                        anio2 = (SELECT tiempo_prom_num.anio2 from public.tiempo_prom_num(
                            p_pai_id, 
                            p_year, 
                            abbreviated_var
                        )) / reg.anio2;
                    END IF;
                    IF reg.anio3 = 0 THEN
                        anio3 = 0;
                    ELSE
                        anio3 = (SELECT tiempo_prom_num.anio3 from public.tiempo_prom_num(
                            p_pai_id, 
                            p_year, 
                            abbreviated_var
                        )) / reg.anio3;
                    END IF;
                    IF reg.anio4 = 0 THEN
                        anio4 = 0;
                    ELSE
                        anio4 = (SELECT tiempo_prom_num.anio4 from public.tiempo_prom_num(
                            p_pai_id, 
                            p_year, 
                            abbreviated_var
                        )) / reg.anio4;
                    END IF;
                    IF reg.tot = 0 THEN
                        tot = 0;
                    ELSE
                        tot = (SELECT tiempo_prom_num.tot from public.tiempo_prom_num(
                            p_pai_id, 
                            p_year, 
                            abbreviated_var
                        )) / reg.tot;
                    END IF;
                end loop;
            IF anio1 > 1 THEN
                anio1 = 1;
            END IF;
            IF anio2 > 1 THEN
                anio2 = 1;
            END IF;
            IF anio3 > 1 THEN
                anio3 = 1;
            END IF;
            IF anio4 > 1 THEN
                anio4 = 1;
            END IF;
            IF tot > 1 THEN
                tot = 1;
            END IF;
            insert into tiempo_prom_subtot (
                id,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                abbreviated_var,
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from tiempo_prom_subtot; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE tiempo_prom_subtot;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.tiempo_prom_tot(
            p_pai_id bigint,
            p_year integer,
            abbreviated_var character varying)
            RETURNS TABLE(id character varying, seguimiento double precision, ponderador double precision, seg_pond double precision) AS $$
        declare
            reg Record;
            id integer;
            seguimiento numeric;
            ponderador numeric;
            seg_pond numeric;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS tiempo_prom_tot (
                id character varying,
                seguimiento double precision,
                ponderador double precision,
                seg_pond double precision
            );
        
            IF p_year = 1 THEN
                seguimiento = (SELECT
                                    tiempo_prom_subtot.anio1
                                from public.tiempo_prom_subtot(
                                    p_pai_id, 
                                    p_year, 
                                    abbreviated_var
                                ));
            ELSEIF p_year = 2 THEN
                seguimiento = (SELECT
                                    tiempo_prom_subtot.anio2
                                from public.tiempo_prom_subtot(
                                    p_pai_id, 
                                    p_year, 
                                    abbreviated_var
                                ));
            ELSEIF p_year = 3 THEN
                seguimiento = (SELECT
                                    tiempo_prom_subtot.anio3
                                from public.tiempo_prom_subtot(
                                    p_pai_id, 
                                    p_year, 
                                    abbreviated_var
                                ));
            ELSE
                seguimiento = (SELECT
                                    tiempo_prom_subtot.anio4
                                from public.tiempo_prom_subtot(
                                    p_pai_id, 
                                    p_year, 
                                    abbreviated_var
                                ));
            END IF;
            ponderador = (select distinct
                            a1.weighing as ponderator
                        from activities
                        inner join objectives on objectives.id = activities.objective_id
                        inner join projects on projects.id = objectives.project_id
                        inner join programs on programs.id = projects.program_id
                        inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                        inner join pais on pais.id = strategic_lines.p_a_i_id
                        inner join indicator_activities a1 on a1.activities_id = activities.id
                        inner join indicators on indicators.id = a1.indicator_id
                        inner join variables on variables.id = a1.variable_id
                        where
                            indicators.abbreviated_name like 'Tx'
                            and variables.abbreviated_denominator like abbreviated_var
                            and a1.year = p_year
                            and strategic_lines.p_a_i_id = p_pai_id
                        limit 1);
            seg_pond = seguimiento * ponderador;
            insert into tiempo_prom_tot (
                id,
                seguimiento,
                ponderador,
                seg_pond
            ) VALUES (
                abbreviated_var,
                seguimiento,
                ponderador,
                seg_pond
            );
                
        RETURN QUERY 
        SELECT *
        from tiempo_prom_tot; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE tiempo_prom_tot;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.tiempo_prom_tot_promedio(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(seguimiento double precision) AS $$
        declare
            reg Record;
            id integer;
            NLA numeric;
            NCAS numeric;
            NPV numeric;
            NAF numeric;
            NPE numeric;
            seguimiento numeric;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS tiempo_prom_tot_promedio (
                seguimiento double precision
            );
        
            NLA = (SELECT tiempo_prom_tot.seguimiento from public.tiempo_prom_tot(
                p_pai_id, 
                p_year, 
                'NLA'
            ));
            NCAS = (SELECT tiempo_prom_tot.seguimiento from public.tiempo_prom_tot(
                p_pai_id, 
                p_year,
                'NCAS'
            ));
            NPV = (SELECT tiempo_prom_tot.seguimiento from public.tiempo_prom_tot(
                p_pai_id, 
                p_year,
                'NPV'
            ));
            NAF = (SELECT tiempo_prom_tot.seguimiento from public.tiempo_prom_tot(
                p_pai_id, 
                p_year,
                'NAF'
            ));
            NPE = (SELECT tiempo_prom_tot.seguimiento from public.tiempo_prom_tot(
                p_pai_id, 
                p_year,
                'NPE'
            ));
            
            seguimiento = (NLA + NCAS + NPV + NAF + NPE) / 5;
            
            insert into tiempo_prom_tot_promedio (
                seguimiento
            ) VALUES (
                seguimiento
            );
                
        RETURN QUERY 
        SELECT *
        from tiempo_prom_tot_promedio; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE tiempo_prom_tot_promedio;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.tot_pomcas(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, tipo_de_plan character varying, ponderacion double precision, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            int_id integer := 0;
            ponderacion integer := 0; 
            ponderacion_tot integer := 0;
            anio1_tot integer := 0;
            anio2_tot integer := 0;
            anio3_tot integer := 0;
            anio4_tot integer := 0;
            result_anio1 integer := 0;
            result_anio2 integer := 0;
            result_anio3 integer := 0;
            result_anio4 integer := 0;
            reg Record;		
            cur_den cursor
                for select den_pomcas.tipo_de_plan,
                        sum(den_pomcas.anio1) as anio1,
                        sum(den_pomcas.anio2) as anio2,
                        sum(den_pomcas.anio3) as anio3,
                        sum(den_pomcas.anio4) as anio4
                    from public.den_pomcas(
                        p_group_name,
                        p_pai_id,
                        p_year
                    )
                    --where tipo_de_plan in ('POMCAS','PMA','PMM')
                    group by den_pomcas.tipo_de_plan;
                    
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table2 (
                id_plan bigint,
                tipo_de_plan character varying,
                ponderacion double precision,
                --cuenca character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
                    
            --select * from temp_table2
        /*	open cur_plan;
                LOOP
                    FETCH cur_plan INTO reg;
                    EXIT WHEN NOT FOUND;
                    INSERT INTO temp_table2 (id_plan, tipo_de_plan)
                    VALUES (int_id, reg.tipo_de_plan);
                    int_id = int_id + 1;
                END LOOP;
           close cur_plan; */
           
           open cur_den;
                   int_id = 0;
                LOOP
                    FETCH cur_den INTO reg;
                    EXIT WHEN NOT FOUND;
                    ponderacion = (select distinct
                        --ody1.value as tipo_de_plan,
                        indicator_activities.weighing as Weighing
                    from indicators
                    inner join indicator_activities on indicator_activities.indicator_id = indicators.id
                    inner join activities on activities.id = indicator_activities.activities_id
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join groups on groups.id = indicators.group_id
                    inner join other_data od1 on od1.indicator_id = indicators.id
                    inner join other_data_year ody1 on ody1.other_data_id = od1.id
                    where indicators.name like '%%POMCAS%%'
                        and ody1.value like reg.tipo_de_plan
                        and indicator_activities.year = 1
                        and od1.variable_name like 'Tipo de plan'
                        and groups.name like p_group_name
                        and strategic_lines.p_a_i_id = p_pai_id
                    order by indicator_activities.weighing DESC
                    limit 1);
                    insert into temp_table2 (id_plan,tipo_de_plan,ponderacion)
                    values (int_id,reg.tipo_de_plan,ponderacion);
                    
                    ponderacion_tot = ponderacion_tot + ponderacion;
                    
                    result_anio1 = (SELECT sum(num_pomcas.anio1)
                    from public.num_pomcas(
                        p_group_name,
                        p_pai_id,
                        p_year
                    )
                    where num_pomcas.tipo_de_plan like reg.tipo_de_plan
                    group by num_pomcas.tipo_de_plan);
                    
                    result_anio2 = (SELECT sum(num_pomcas.anio2)
                    from public.num_pomcas(
                        p_group_name,
                        p_pai_id,
                        p_year
                    )
                    where num_pomcas.tipo_de_plan like reg.tipo_de_plan
                    group by num_pomcas.tipo_de_plan);
                    
                    result_anio3 = (SELECT sum(num_pomcas.anio3)
                    from public.num_pomcas(
                        p_group_name,
                        p_pai_id,
                        p_year
                    )
                    where num_pomcas.tipo_de_plan like reg.tipo_de_plan
                    group by num_pomcas.tipo_de_plan);
                    
                    result_anio4 = (SELECT sum(num_pomcas.anio4)
                    from public.num_pomcas(
                        p_group_name,
                        p_pai_id,
                        p_year
                    )
                    where num_pomcas.tipo_de_plan like reg.tipo_de_plan
                    group by num_pomcas.tipo_de_plan);
                    
                    UPDATE temp_table2
                    SET anio1 = 100*result_anio1/reg.anio1,
                        anio2 = 100*result_anio2/reg.anio2,
                        anio3 = 100*result_anio3/reg.anio3,
                        anio4 = 100*result_anio4/reg.anio4
                    WHERE temp_table2.tipo_de_plan like reg.tipo_de_plan;
                    
                    anio1_tot = anio1_tot + (ponderacion * result_anio1);
                    anio2_tot = anio2_tot + (ponderacion * result_anio2);
                    anio3_tot = anio3_tot + (ponderacion * result_anio3);
                    anio4_tot = anio4_tot + (ponderacion * result_anio4);
                    int_id = int_id + 1;
                END LOOP;
                insert into temp_table2 (id_plan,tipo_de_plan,ponderacion)
                values (int_id,'total',ponderacion_tot);
                UPDATE temp_table2
                SET anio1 = anio1_tot,
                    anio2 = anio2_tot,
                    anio3 = anio3_tot,
                    anio4 = anio4_tot
                WHERE temp_table2.id_plan = int_id;
            close cur_den;
           
        RETURN QUERY 
        SELECT *
        from temp_table2; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table2;
        
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
