<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedRedes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.redes_agua(
            p_pai_id bigint,
            p_year integer,
            category_weight character varying)
            RETURNS TABLE(ponderator double precision, denominator double precision, numerator double precision, tot double precision) AS $$
        declare
            reg Record;
            id integer;
            ponderator numeric;
            denominator numeric;
            numerator numeric;
            tot numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS redes_agua (
                ponderator double precision,
                denominator double precision,
                numerator double precision,
                tot double precision
            );
        
            ponderator = (select distinct
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
                                indicators.abbreviated_name like 'PREMO'
                                and variables.category_weighing like category_weight
                                and a1.year = p_year
                                and strategic_lines.p_a_i_id = p_pai_id
                            limit 1);
            denominator = (select
                                sum(redes_table.denominator) as denominator
                            from
                            (select distinct
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
                                indicators.abbreviated_name like 'PREMO'
                                and variables.category_weighing like category_weight
                                and a1.year = p_year
                                and strategic_lines.p_a_i_id = p_pai_id) as redes_table);
            numerator = (select
                                sum(redes_table.numerator) as numerator
                            from
                            (select distinct
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
                                indicators.abbreviated_name like 'PREMO'
                                and variables.category_weighing like category_weight
                                and a1.year = p_year
                                and strategic_lines.p_a_i_id = p_pai_id) as redes_table);
            IF ponderator is null THEN
                ponderator = 0;
            END IF;
            IF numerator is null THEN
                numerator = 0;
            END IF;
            IF denominator is null THEN
                denominator = 0;
            END IF;
            IF denominator = 0 THEN
                tot = 0;
            ELSE
                tot = numerator / denominator;
            END IF;
            IF tot > 1 THEN
                tot = 1;
            END IF;
            insert into redes_agua (
                ponderator,
                denominator,
                numerator,
                tot
            ) VALUES (
                ponderator,
                denominator,
                numerator,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from redes_agua; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE redes_agua;
        
        end;
        
        $$ language plpgsql;");
		
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.redes_agua_tot(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(tot double precision) AS $$
        declare
            reg Record;
            tot numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS redes_agua_tot (
                tot double precision
            );
        
            for reg in
                (SELECT
                        redes_agua.ponderator,
                        redes_agua.tot
                    from public.redes_agua(
                        p_pai_id,
                        p_year,
                        '%%PREMOAGt%%'
                    )
                    UNION ALL
                    SELECT
                        redes_agua.ponderator,
                        redes_agua.tot
                    from public.redes_agua(
                        p_pai_id,
                        p_year,
                        '%%PREMOARt%%'
                    )
                    UNION ALL
                    SELECT
                        redes_agua.ponderator,
                        redes_agua.tot
                    from public.redes_agua(
                        p_pai_id,
                        p_year,
                        '%%PREMOOt%%'
                    ))
                loop
                    tot = tot + reg.ponderator * reg.tot;
                end loop;
            IF tot > 100 THEN
                tot = 100;
            END IF;
            insert into redes_agua_tot (
                tot
            ) VALUES (
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from redes_agua_tot; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE redes_agua_tot;
        
        end;
        
        $$ language plpgsql;");
		
		
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.redes_prog(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(program_name character varying) AS $$
        declare
            reg Record;
            cur_plan_pomcas cursor
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
                        indicators.abbreviated_name like 'PREMO'
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id;
        
            int_id integer := 1;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table1 (
                program_name character varying
            );
        
            open cur_plan_pomcas;
                LOOP
                    FETCH cur_plan_pomcas INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF int_id = 1 THEN
                        program_name = reg.program_name;
                    ELSE
                        program_name = concat(program_name, ', ', reg.program_name);
                    END IF;
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                INSERT INTO temp_table1 (
                        program_name
                    )
                    VALUES (
                        program_name
                    );
           close cur_plan_pomcas;
           
        RETURN QUERY 
        SELECT *
        from temp_table1; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table1;
        
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
