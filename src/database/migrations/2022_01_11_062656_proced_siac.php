<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedSiac extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.siac_by_cat(
            p_pai_id bigint,
            p_year integer,
            category character varying)
            RETURNS TABLE(id character varying, results character varying) AS $$
        declare
            num numeric;
            den numeric;
            tot numeric;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS siac_by_cat (
                id character varying,
                results character varying
            );
        
            num = (select
                        sum(SIRH_numerator.numerator) as sirh
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
                        indicators.abbreviated_name like 'PARSIAC'
                        and variables.category_name like category
                        and a1.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id) as SIRH_numerator);
                        
            den = (select
                        sum(SIRH_denominator.denominator) as sirh
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
                        indicators.abbreviated_name like 'PARSIAC'
                        and variables.category_name like category
                        and a1.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id) as SIRH_denominator);
            IF num is null THEN
                num = 0;
            END IF;
            IF den is null THEN
                den = 0;
            END IF;
            IF den = 0 THEN
                tot = 0;
            ELSE
                tot = num / den;
            END IF;
            IF tot > 1 THEN
                tot = 1;
            END IF;
            insert into siac_by_cat (
                id,
                results
            ) VALUES (
                'num',
                CAST(num as varchar)
            );
            insert into siac_by_cat (
                id,
                results
            ) VALUES (
                'den',
                CAST(den as varchar)
            );
            insert into siac_by_cat (
                id,
                results
            ) VALUES (
                category,
                CONCAT(CAST(ROUND(CAST(tot*100 as numeric), 2) as varchar), '%')
            );
                
        RETURN QUERY 
        SELECT *
        from siac_by_cat; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE siac_by_cat;
        
        end;
        
        $$ language plpgsql;");
		
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.siac_by_cat_tot(
            p_pai_id bigint,
            p_year integer,
            category character varying)
            RETURNS TABLE(id character varying, pond character varying, results character varying) AS $$
        declare
            reg Record; 
            num numeric;
            den numeric;
            pond numeric;
            tot numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS siac_by_cat_tot (
                id character varying,
                pond character varying,
                results character varying
            );
        
            for reg in
                (SELECT * from public.siac_by_cat(
                    p_pai_id, 
                    p_year, 
                    'SIRH'
                ) where siac_by_cat.id like 'SIRH'
                UNION ALL
                SELECT * from public.siac_by_cat(
                    p_pai_id, 
                    p_year, 
                    'SISAIRE'
                ) where siac_by_cat.id like 'SISAIRE'
                UNION ALL
                SELECT * from public.siac_by_cat(
                    p_pai_id, 
                    p_year, 
                    'SNIF'
                ) where siac_by_cat.id like 'SNIF'
                UNION ALL
                SELECT * from public.siac_by_cat(
                    p_pai_id, 
                    p_year, 
                    'RESPEL'
                ) where siac_by_cat.id like 'RESPEL'
                UNION ALL
                SELECT * from public.siac_by_cat(
                    p_pai_id, 
                    p_year, 
                    'SIUR'
                ) where siac_by_cat.id like 'SIUR')
                
                loop
                    pond = (select
                                indicator_activities.weighing as weighing
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
                                indicators.abbreviated_name like 'PARSIAC'
                                and variables.category_name like reg.id
                                and indicator_activities.weighing is not null
                                and indicator_activities.year = p_year
                                and strategic_lines.p_a_i_id = p_pai_id
                            limit 1);
                    IF pond is null THEN
                        pond = 0;
                    END IF;
                    tot = tot + CAST(SUBSTRING(reg.results, 1, LENGTH(reg.results) - 1 ) as numeric) * pond;
                    insert into siac_by_cat_tot (
                        id,
                        pond,
                        results
                    ) VALUES (
                        reg.id,
                        CONCAT(CAST(pond as varchar), '%'),
                        reg.results
                    );
                end loop;
                IF tot > 10000 THEN
                    tot = 10000;
                END IF;
                insert into siac_by_cat_tot (
                    id,
                    results
                ) VALUES (
                    'total',
                    CONCAT(CAST(ROUND(CAST(tot as numeric)/100, 2) as varchar), '%')
                );
                
        RETURN QUERY 
        SELECT *
        from siac_by_cat_tot; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE siac_by_cat_tot;
        
        end;
        
        $$ language plpgsql;");
		
		
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.siac_prog(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(program_name character varying) AS $$
        declare
            reg Record;
            cur_plan_siac cursor
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
                        indicators.abbreviated_name like 'PARSIAC'
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id;
        
            int_id integer := 1;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS siac_prog (
                program_name character varying
            );
        
            open cur_plan_siac;
                LOOP
                    FETCH cur_plan_siac INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF int_id = 1 THEN
                        program_name = reg.program_name;
                    ELSE
                        program_name = concat(program_name, ', ', reg.program_name);
                    END IF;
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                INSERT INTO siac_prog (
                        program_name
                    )
                    VALUES (
                        program_name
                    );
           close cur_plan_siac;
           
        RETURN QUERY 
        SELECT *
        from siac_prog; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE siac_prog;
        
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
