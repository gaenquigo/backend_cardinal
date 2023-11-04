<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedMizc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.mizc_acciones(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) AS $$
        declare
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
            tot integer;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS mizc_acciones (
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot double precision
            );
        
            _anio1 = (select count(anio_table.*) from (select distinct
                            activities.*
                        from activities
                        inner join objectives on objectives.id = activities.objective_id
                        inner join projects on projects.id = objectives.project_id
                        inner join programs on programs.id = projects.program_id
                        inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                        inner join pais on pais.id = strategic_lines.p_a_i_id
                          inner join indicator_activities on indicator_activities.activities_id = activities.id
                        inner join indicators on indicators.id = indicator_activities.indicator_id
                        where
                              indicators.abbreviated_name like 'ETAMIZC'
                            and strategic_lines.p_a_i_id = p_pai_id
                            and activities.goal_1 != 0) as anio_table);
            _anio2 = (select count(anio_table.*) from (select distinct
                            activities.*
                        from activities
                        inner join objectives on objectives.id = activities.objective_id
                        inner join projects on projects.id = objectives.project_id
                        inner join programs on programs.id = projects.program_id
                        inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                        inner join pais on pais.id = strategic_lines.p_a_i_id
                          inner join indicator_activities on indicator_activities.activities_id = activities.id
                        inner join indicators on indicators.id = indicator_activities.indicator_id
                        where
                              indicators.abbreviated_name like 'ETAMIZC'
                            and strategic_lines.p_a_i_id = p_pai_id
                            and activities.goal_2 != 0) as anio_table);
            _anio3 = (select count(anio_table.*) from (select distinct
                            activities.*
                        from activities
                        inner join objectives on objectives.id = activities.objective_id
                        inner join projects on projects.id = objectives.project_id
                        inner join programs on programs.id = projects.program_id
                        inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                        inner join pais on pais.id = strategic_lines.p_a_i_id
                          inner join indicator_activities on indicator_activities.activities_id = activities.id
                        inner join indicators on indicators.id = indicator_activities.indicator_id
                        where
                              indicators.abbreviated_name like 'ETAMIZC'
                            and strategic_lines.p_a_i_id = p_pai_id
                            and activities.goal_3 != 0) as anio_table);
            _anio4 = (select count(anio_table.*) from (select distinct
                            activities.*
                        from activities
                        inner join objectives on objectives.id = activities.objective_id
                        inner join projects on projects.id = objectives.project_id
                        inner join programs on programs.id = projects.program_id
                        inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                        inner join pais on pais.id = strategic_lines.p_a_i_id
                          inner join indicator_activities on indicator_activities.activities_id = activities.id
                        inner join indicators on indicators.id = indicator_activities.indicator_id
                        where
                              indicators.abbreviated_name like 'ETAMIZC'
                            and strategic_lines.p_a_i_id = p_pai_id
                            and activities.goal_4 != 0) as anio_table);
            tot = _anio1 + _anio2 + _anio3 + _anio4;
            insert into mizc_acciones (
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                _anio1,
                _anio2,
                _anio3,
                _anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from mizc_acciones; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE mizc_acciones;
        
        end;
        
        $$ language plpgsql;");
		
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.mizc_ejecucion_fisica(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id bigint, name character varying, tematica character varying, cuatrienal double precision, anual double precision, ponderacion double precision, ejecucion double precision, observaciones character varying) AS $$
        declare
            reg Record;
            id integer;
            name varchar;
            tematica varchar;
            evidence_tot numeric;
            goal_tot numeric;
            evidence_anio numeric;
            goal_anio numeric;
            cuatrienal numeric;
            anual numeric;
            ponderacion numeric;
            ejecucion numeric;
            observaciones varchar;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS mizc_ejecucion_fisica (
                id bigint,
                name character varying,
                tematica character varying,
                cuatrienal double precision,
                anual double precision,
                ponderacion double precision,
                ejecucion double precision,
                observaciones character varying
            );
        
            for reg in
                (select
                    gau_acciones.id as id,
                    gau_acciones.name as name,
                    string_agg(gau_acciones.tematica, ', ') as tematica
                from (select distinct
                    activities.id as id,
                    activities.name as name,
                    ody1.value as tematica
                from activities
                inner join objectives on objectives.id = activities.objective_id
                inner join projects on projects.id = objectives.project_id
                inner join programs on programs.id = projects.program_id
                inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                inner join pais on pais.id = strategic_lines.p_a_i_id
                inner join indicator_activities on indicator_activities.activities_id = activities.id
                inner join indicators on indicators.id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                --inner join activity_sources on activity_sources.activity_id = activities.id
                where
                    indicators.abbreviated_name like 'ETAMIZC'
                    --activities.name like '%%GAU%%'
                    and od1.variable_name like 'Temática'
                    and ody1.year = p_year
                    and strategic_lines.p_a_i_id = p_pai_id) as gau_acciones
                group by
                    gau_acciones.id,
                    gau_acciones.name)
                   loop
                    id = reg.id;
                    name = reg.name;
                    tematica = reg.tematica;
                    observaciones = (select
                                            string_agg(gau_acciones.observaciones, ', ') as observaciones
                                        from (select distinct
                                            activities.id as id,
                                            activities.name as name,
                                            ody1.value as observaciones
                                        from activities
                                        inner join objectives on objectives.id = activities.objective_id
                                        inner join projects on projects.id = objectives.project_id
                                        inner join programs on programs.id = projects.program_id
                                        inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                        inner join pais on pais.id = strategic_lines.p_a_i_id
                                        inner join indicator_activities on indicator_activities.activities_id = activities.id
                                        inner join indicators on indicators.id = indicator_activities.indicator_id
                                        inner join other_data_year ody1 on ody1.activity_id = activities.id
                                        inner join other_data od1 on od1.id = ody1.other_data_id
                                        --inner join activity_sources on activity_sources.activity_id = activities.id
                                        where
                                            indicators.abbreviated_name like 'ETAMIZC'
                                            --activities.name like '%%GAU%%'
                                            and activities.id = reg.id
                                            and od1.variable_name like 'Observaciones'
                                            and ody1.year = p_year
                                            and strategic_lines.p_a_i_id = p_pai_id) as gau_acciones
                                        group by
                                            gau_acciones.id,
                                            gau_acciones.name);
                    evidence_tot = (select
                                        sum(cuatrienal.value) as cuatrienal
                                    from (select distinct
                                        activities.id,
                                        evidence_advance.value
                                    from activities
                                    inner join objectives on objectives.id = activities.objective_id
                                    inner join projects on projects.id = objectives.project_id
                                    inner join programs on programs.id = projects.program_id
                                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                    inner join pais on pais.id = strategic_lines.p_a_i_id
                                    inner join indicator_activities on indicator_activities.activities_id = activities.id
                                    inner join indicators on indicators.id = indicator_activities.indicator_id
                                    inner join evidence_advance on evidence_advance.activity_id = activities.id
                                    where
                                        indicators.abbreviated_name like 'ETAMIZC'
                                        --activities.name like '%%GAU%%'
                                        and activities.id = reg.id
                                        and strategic_lines.p_a_i_id = p_pai_id) as cuatrienal);
                    goal_tot = (select distinct
                                    activities.goal
                                from activities
                                inner join objectives on objectives.id = activities.objective_id
                                inner join projects on projects.id = objectives.project_id
                                inner join programs on programs.id = projects.program_id
                                inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                inner join pais on pais.id = strategic_lines.p_a_i_id
                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                inner join indicators on indicators.id = indicator_activities.indicator_id
                                where
                                    indicators.abbreviated_name like 'ETAMIZC'
                                    --activities.name like '%%GAU%%'
                                    and activities.id = reg.id
                                    and strategic_lines.p_a_i_id = p_pai_id);
                    IF evidence_tot is null OR goal_tot = 0 THEN
                        cuatrienal = 0;
                    ELSE
                        cuatrienal = evidence_tot / goal_tot;
                    END IF;
                    
                    evidence_anio = (select
                                        sum(anual.value) as anual
                                    from (select distinct
                                        activities.id,
                                        evidence_advance.value
                                    from activities
                                    inner join objectives on objectives.id = activities.objective_id
                                    inner join projects on projects.id = objectives.project_id
                                    inner join programs on programs.id = projects.program_id
                                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                    inner join pais on pais.id = strategic_lines.p_a_i_id
                                    inner join indicator_activities on indicator_activities.activities_id = activities.id
                                    inner join indicators on indicators.id = indicator_activities.indicator_id
                                    inner join evidence_advance on evidence_advance.activity_id = activities.id
                                    where
                                        indicators.abbreviated_name like 'ETAMIZC'
                                        --activities.name like '%%GAU%%'
                                        and activities.id = reg.id
                                        and evidence_advance.year = p_year
                                        and strategic_lines.p_a_i_id = p_pai_id) as anual);
                    IF p_year = 1 THEN
                        goal_anio = (select distinct
                                        activities.goal_1
                                    from activities
                                    inner join objectives on objectives.id = activities.objective_id
                                    inner join projects on projects.id = objectives.project_id
                                    inner join programs on programs.id = projects.program_id
                                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                    inner join pais on pais.id = strategic_lines.p_a_i_id
                                    inner join indicator_activities on indicator_activities.activities_id = activities.id
                                    inner join indicators on indicators.id = indicator_activities.indicator_id
                                    where
                                         indicators.abbreviated_name like 'ETAMIZC'
                                        --activities.name like '%%GAU%%'
                                        and activities.id = reg.id
                                        and strategic_lines.p_a_i_id = p_pai_id);
                    ELSEIF p_year = 2 THEN
                        goal_anio = (select distinct
                                        activities.goal_2
                                    from activities
                                    inner join objectives on objectives.id = activities.objective_id
                                    inner join projects on projects.id = objectives.project_id
                                    inner join programs on programs.id = projects.program_id
                                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                    inner join pais on pais.id = strategic_lines.p_a_i_id
                                    inner join indicator_activities on indicator_activities.activities_id = activities.id
                                    inner join indicators on indicators.id = indicator_activities.indicator_id
                                    where
                                         indicators.abbreviated_name like 'ETAMIZC'
                                        --activities.name like '%%GAU%%'
                                        and activities.id = reg.id
                                        and strategic_lines.p_a_i_id = p_pai_id);
                    ELSEIF p_year = 3 THEN
                        goal_anio = (select distinct
                                        activities.goal_3
                                    from activities
                                    inner join objectives on objectives.id = activities.objective_id
                                    inner join projects on projects.id = objectives.project_id
                                    inner join programs on programs.id = projects.program_id
                                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                    inner join pais on pais.id = strategic_lines.p_a_i_id
                                    inner join indicator_activities on indicator_activities.activities_id = activities.id
                                    inner join indicators on indicators.id = indicator_activities.indicator_id
                                    where
                                         indicators.abbreviated_name like 'ETAMIZC'
                                        --activities.name like '%%GAU%%'
                                        and activities.id = reg.id
                                        and strategic_lines.p_a_i_id = p_pai_id);
                    ELSE
                        goal_anio = (select distinct
                                        activities.goal_4
                                    from activities
                                    inner join objectives on objectives.id = activities.objective_id
                                    inner join projects on projects.id = objectives.project_id
                                    inner join programs on programs.id = projects.program_id
                                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                    inner join pais on pais.id = strategic_lines.p_a_i_id
                                    inner join indicator_activities on indicator_activities.activities_id = activities.id
                                    inner join indicators on indicators.id = indicator_activities.indicator_id
                                    where
                                         indicators.abbreviated_name like 'ETAMIZC'
                                        --activities.name like '%%GAU%%'
                                        and activities.id = reg.id
                                        and strategic_lines.p_a_i_id = p_pai_id);
                    END IF;
                    IF evidence_anio is null OR goal_anio = 0 THEN
                        anual = 0;
                    ELSE
                        anual = evidence_anio / goal_anio;
                    END IF;
                    ponderacion = (select distinct
                                        indicator_activities.weighing
                                    from activities
                                    inner join objectives on objectives.id = activities.objective_id
                                    inner join projects on projects.id = objectives.project_id
                                    inner join programs on programs.id = projects.program_id
                                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                    inner join pais on pais.id = strategic_lines.p_a_i_id
                                    inner join indicator_activities on indicator_activities.activities_id = activities.id
                                    inner join indicators on indicators.id = indicator_activities.indicator_id
                                    where
                                        indicators.abbreviated_name like 'ETAMIZC'
                                           and indicator_activities.weighing is not null
                                        and activities.id = reg.id
                                        and indicator_activities.year = p_year
                                        and strategic_lines.p_a_i_id = p_pai_id
                                    order by weighing DESC
                                    limit 1);
                    IF ponderacion is null THEN
                        ponderacion = 0;
                    END IF;
                    IF cuatrienal > 1 THEN
                        cuatrienal = 1;
                    END IF;
                    IF anual > 1 THEN
                        anual = 1;
                    END IF;
                    ejecucion = anual * ponderacion;
                    insert into mizc_ejecucion_fisica (
                        id,
                        name,
                        tematica,
                        cuatrienal,
                        anual,
                        ponderacion,
                        ejecucion,
                        observaciones
                    ) VALUES (
                        id,
                        name,
                        tematica,
                        cuatrienal,
                        anual,
                        ponderacion,
                        ejecucion,
                        observaciones
                    );
                end loop;
                
        RETURN QUERY 
        SELECT *
        from mizc_ejecucion_fisica; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE mizc_ejecucion_fisica;
        
        end;
        
        $$ language plpgsql;");
		
		
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.mizc_ejecucion_fisica_tot(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(cuatrienal double precision, anual double precision, ponderacion double precision, ejecucion double precision) AS $$
        declare
            reg Record;
            id integer;
            name varchar;
            tematica varchar;
            evidence_tot numeric;
            goal_tot numeric;
            evidence_anio numeric;
            goal_anio numeric;
            cuatrienal numeric;
            anual numeric;
            ponderacion numeric;
            ejecucion numeric;
            observaciones varchar;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS mizc_ejecucion_fisica_tot (
                cuatrienal double precision,
                anual double precision,
                ponderacion double precision,
                ejecucion double precision
            );
        
            ponderacion = (select
                                sum(table1.ponderacion) as ponderacion
                            from
                            (SELECT
                                mizc_ejecucion_fisica.ponderacion
                            from public.mizc_ejecucion_fisica(
                                p_pai_id, 
                                p_year
                            )) as table1);
            ejecucion = (select
                                sum(table1.ejecucion) as ejecucion
                            from
                            (SELECT
                                mizc_ejecucion_fisica.ejecucion
                            from public.mizc_ejecucion_fisica(
                                p_pai_id, 
                                p_year
                            )) as table1);
            insert into mizc_ejecucion_fisica_tot (
                ponderacion,
                ejecucion
            ) VALUES (
                ponderacion,
                ejecucion
            );
                
        RETURN QUERY 
        SELECT *
        from mizc_ejecucion_fisica_tot; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE mizc_ejecucion_fisica_tot;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.mizc_prog(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(program_name character varying) AS $$
        declare
            reg Record;
            cur_plan_mizc cursor
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
                        indicators.abbreviated_name like 'ETAMIZC'
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id;
        
            int_id integer := 1;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS mizc_prog (
                program_name character varying
            );
        
            open cur_plan_mizc;
                LOOP
                    FETCH cur_plan_mizc INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF int_id = 1 THEN
                        program_name = reg.program_name;
                    ELSE
                        program_name = concat(program_name, ', ', reg.program_name);
                    END IF;
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                INSERT INTO mizc_prog (
                        program_name
                    )
                    VALUES (
                        program_name
                    );
           close cur_plan_mizc;
           
        RETURN QUERY 
        SELECT *
        from mizc_prog; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE mizc_prog;
        
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
