<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedAutorizaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.autorizaciones_den(
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
            CREATE TEMP TABLE IF NOT EXISTS autorizaciones_den (
                id character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            anio1 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select distinct
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
                        indicators.abbreviated_name like 'PTAACS'
                        and variables.abbreviated_denominator like abbreviated_den
                        and a1.year = 1
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio2 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select distinct
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
                        indicators.abbreviated_name like 'PTAACS'
                        and variables.abbreviated_denominator like abbreviated_den
                        and a1.year = 2
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio3 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select distinct
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
                        indicators.abbreviated_name like 'PTAACS'
                        and variables.abbreviated_denominator like abbreviated_den
                        and a1.year = 3
                        and strategic_lines.p_a_i_id = p_pai_id) as denominator_table);
            anio4 = (select
                        sum(denominator_table.denominator) as denominator
                    from (select distinct
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
                        indicators.abbreviated_name like 'PTAACS'
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
            insert into autorizaciones_den (
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
        from autorizaciones_den; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE autorizaciones_den;
        
        end;
        $$ language plpgsql;
        ");

        DB::unprepared("CREATE OR REPLACE FUNCTION public.autorizaciones_num(
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
            CREATE TEMP TABLE IF NOT EXISTS autorizaciones_num (
                id character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            anio1 = (select
                        sum(numerator_table.numerator) as numerator
                    from (select distinct
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
                        indicators.abbreviated_name like 'PTAACS'
                        and variables.abbreviated_denominator like abbreviated_num
                        and a1.year = 1
                        and strategic_lines.p_a_i_id = p_pai_id) as numerator_table);
            anio2 = (select
                        sum(numerator_table.numerator) as numerator
                    from (select distinct
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
                        indicators.abbreviated_name like 'PTAACS'
                        and variables.abbreviated_denominator like abbreviated_num
                        and a1.year = 2
                        and strategic_lines.p_a_i_id = p_pai_id) as numerator_table);
            anio3 = (select
                        sum(numerator_table.numerator) as numerator
                    from (select distinct
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
                        indicators.abbreviated_name like 'PTAACS'
                        and variables.abbreviated_denominator like abbreviated_num
                        and a1.year = 3
                        and strategic_lines.p_a_i_id = p_pai_id) as numerator_table);
            anio4 = (select
                        sum(numerator_table.numerator) as numerator
                    from (select distinct
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
                        indicators.abbreviated_name like 'PTAACS'
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
            insert into autorizaciones_num (
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
        from autorizaciones_num; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE autorizaciones_num;
        
        end;
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.autorizaciones_prog(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(program_name character varying) AS $$
        
        declare
            reg Record;
            cur_plan_educa cursor
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
                        indicators.abbreviated_name like 'PTAACS'
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id;
        
            int_id integer := 1;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS autorizaciones_prog (
                program_name character varying
            );
        
            open cur_plan_educa;
                LOOP
                    FETCH cur_plan_educa INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF int_id = 1 THEN
                        program_name = reg.program_name;
                    ELSE
                        program_name = concat(program_name, ', ', reg.program_name);
                    END IF;
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                INSERT INTO autorizaciones_prog (
                        program_name
                    )
                    VALUES (
                        program_name
                    );
           close cur_plan_educa;
           
        RETURN QUERY 
        SELECT *
        from autorizaciones_prog; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE autorizaciones_prog;
        
        end;
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.autorizaciones_subtot(
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
            CREATE TEMP TABLE IF NOT EXISTS autorizaciones_subtot (
                id character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            for reg in
                (SELECT * from public.autorizaciones_den(
                    p_pai_id, 
                    p_year, 
                    abbreviated_var
                ))
                loop
                    IF reg.anio1 = 0 THEN
                        anio1 = 0;
                    ELSE
                        anio1 = (SELECT autorizaciones_num.anio1 from public.autorizaciones_num(
                            p_pai_id, 
                            p_year, 
                            abbreviated_var
                        )) / reg.anio1;
                    END IF;
                    IF reg.anio2 = 0 THEN
                        anio2 = 0;
                    ELSE
                        anio2 = (SELECT autorizaciones_num.anio2 from public.autorizaciones_num(
                            p_pai_id, 
                            p_year, 
                            abbreviated_var
                        )) / reg.anio2;
                    END IF;
                    IF reg.anio3 = 0 THEN
                        anio3 = 0;
                    ELSE
                        anio3 = (SELECT autorizaciones_num.anio3 from public.autorizaciones_num(
                            p_pai_id, 
                            p_year, 
                            abbreviated_var
                        )) / reg.anio3;
                    END IF;
                    IF reg.anio4 = 0 THEN
                        anio4 = 0;
                    ELSE
                        anio4 = (SELECT autorizaciones_num.anio4 from public.autorizaciones_num(
                            p_pai_id, 
                            p_year, 
                            abbreviated_var
                        )) / reg.anio4;
                    END IF;
                    IF reg.tot = 0 THEN
                        tot = 0;
                    ELSE
                        tot = (SELECT autorizaciones_num.tot from public.autorizaciones_num(
                            p_pai_id, 
                            p_year, 
                            abbreviated_var
                        )) / reg.tot;
                    END IF;
                end loop;
            insert into autorizaciones_subtot (
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
        from autorizaciones_subtot; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE autorizaciones_subtot;
        
        end;
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.autorizaciones_tot(
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
            CREATE TEMP TABLE IF NOT EXISTS autorizaciones_tot (
                id character varying,
                seguimiento double precision,
                ponderador double precision,
                seg_pond double precision
            );
        
            IF p_year = 1 THEN
                seguimiento = (SELECT
                                    autorizaciones_subtot.anio1
                                from public.autorizaciones_subtot(
                                    p_pai_id, 
                                    p_year, 
                                    abbreviated_var
                                ));
            ELSEIF p_year = 2 THEN
                seguimiento = (SELECT
                                    autorizaciones_subtot.anio2
                                from public.autorizaciones_subtot(
                                    p_pai_id, 
                                    p_year, 
                                    abbreviated_var
                                ));
            ELSEIF p_year = 3 THEN
                seguimiento = (SELECT
                                    autorizaciones_subtot.anio3
                                from public.autorizaciones_subtot(
                                    p_pai_id, 
                                    p_year, 
                                    abbreviated_var
                                ));
            ELSE
                seguimiento = (SELECT
                                    autorizaciones_subtot.anio4
                                from public.autorizaciones_subtot(
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
                            indicators.abbreviated_name like 'PTAACS'
                            and variables.abbreviated_denominator like abbreviated_var
                            and a1.year = p_year
                            and strategic_lines.p_a_i_id = p_pai_id
                        limit 1);
            seg_pond = seguimiento * ponderador;
            insert into autorizaciones_tot (
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
        from autorizaciones_tot; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE autorizaciones_tot;
        
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