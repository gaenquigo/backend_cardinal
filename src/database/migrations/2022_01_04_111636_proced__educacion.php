<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedEducacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.educa_acciones(
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
            CREATE TEMP TABLE IF NOT EXISTS educa_acciones (
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
                              indicators.abbreviated_name like 'ETAEA'
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
                              indicators.abbreviated_name like 'ETAEA'
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
                              indicators.abbreviated_name like 'ETAEA'
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
                              indicators.abbreviated_name like 'ETAEA'
                            and strategic_lines.p_a_i_id = p_pai_id
                            and activities.goal_4 != 0) as anio_table);
            tot = _anio1 + _anio2 + _anio3 + _anio4;
            insert into educa_acciones (
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
        from educa_acciones; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE educa_acciones;
        
        end;
        $$ language plpgsql;");
		
		DB::unprepared("
        CREATE OR REPLACE FUNCTION public.educa_ejecucion_fisica(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id bigint, name character varying, observaciones character varying, cuatrienal double precision, anual double precision, presupuesto_ini double precision, presupuesto_def double precision, compromisos double precision, payment double precision)  AS $$
        declare
            reg Record;
            reg1 Record;
            id integer;
            name varchar;
            observaciones varchar;
            evidence_tot numeric;
            goal_tot numeric;
            evidence_anio numeric;
            goal_anio numeric;
            cuatrienal numeric;
            anual numeric;
            presupuesto_ini numeric;
            presupuesto_def numeric;
            compromisos numeric;
            payment numeric;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS educa_ejecucion_fisica (
                id bigint,
                name character varying,
                observaciones character varying,
                cuatrienal double precision,
                anual double precision,
                presupuesto_ini double precision,
                presupuesto_def double precision,
                compromisos double precision,
                payment double precision
            );
        
            for reg in
                (select
                    negoc_acciones.id as id,
                    negoc_acciones.name as name,
                    string_agg(negoc_acciones.observaciones, ', ') as observaciones
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
                    indicators.abbreviated_name like 'ETAEA'
                    --activities.name like '%%GAU%%'
                    and od1.variable_name like 'Observaciones'
                    and ody1.year = p_year
                    and strategic_lines.p_a_i_id = p_pai_id) as negoc_acciones
                group by
                    negoc_acciones.id,
                    negoc_acciones.name)
                   loop
                    id = reg.id;
                    name = reg.name;
                    observaciones = reg.observaciones;
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
                                        indicators.abbreviated_name like 'ETAEA'
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
                                    indicators.abbreviated_name like 'ETAEA'
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
                                        indicators.abbreviated_name like 'ETAEA'
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
                                         indicators.abbreviated_name like 'ETAEA'
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
                                         indicators.abbreviated_name like 'ETAEA'
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
                                         indicators.abbreviated_name like 'ETAEA'
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
                                         indicators.abbreviated_name like 'ETAEA'
                                        --activities.name like '%%GAU%%'
                                        and activities.id = reg.id
                                        and strategic_lines.p_a_i_id = p_pai_id);
                    END IF;
                    IF evidence_anio is null OR goal_anio = 0 THEN
                        anual = 0;
                    ELSE
                        anual = evidence_anio / goal_anio;
                    END IF;
                    presupuesto_ini = 0;
                    for reg1 in (select distinct
                                    activity_sources.id
                                from activities
                                inner join objectives on objectives.id = activities.objective_id
                                inner join projects on projects.id = objectives.project_id
                                inner join programs on programs.id = projects.program_id
                                inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                inner join pais on pais.id = strategic_lines.p_a_i_id
                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                inner join indicators on indicators.id = indicator_activities.indicator_id
                                inner join activity_sources on activity_sources.activity_id = activities.id
                                inner join activity_sources_history on activity_sources_history.parent_id = activity_sources.id
                                where
                                    indicators.abbreviated_name like 'ETAEA'
                                    and activities.id = reg.id
                                    and strategic_lines.p_a_i_id = p_pai_id
                                    and activity_sources.age = p_year)
                    loop
                        presupuesto_ini = presupuesto_ini + (select
                                                                    CAST(total_table.value as double precision)
                                                                from (select
                                                                    CAST(history_table.history as json) ->> 'value' as value
                                                                from(select distinct
                                                                    activity_sources_history.history as history,
                                                                    activity_sources_history.updated_at as updated_at
                                                                from activities
                                                                inner join objectives on objectives.id = activities.objective_id
                                                                inner join projects on projects.id = objectives.project_id
                                                                inner join programs on programs.id = projects.program_id
                                                                inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                                                inner join pais on pais.id = strategic_lines.p_a_i_id
                                                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                                                inner join indicators on indicators.id = indicator_activities.indicator_id
                                                                inner join activity_sources on activity_sources.activity_id = activities.id
                                                                inner join activity_sources_history on activity_sources_history.parent_id = activity_sources.id
                                                                where
                                                                    activity_sources.id = reg1.id
                                                                order by updated_at ASC
                                                                limit 1) as history_table) as total_table);
                    end loop;
                    presupuesto_def = (select
                                            sum(presupuesto_table.presupuesto_def) as presupuesto_def
                                        from
                                        (select distinct
                                            activities.id as id,
                                            activity_sources.value as presupuesto_def
                                        from activities
                                        inner join objectives on objectives.id = activities.objective_id
                                        inner join projects on projects.id = objectives.project_id
                                        inner join programs on programs.id = projects.program_id
                                        inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                        inner join pais on pais.id = strategic_lines.p_a_i_id
                                        inner join indicator_activities on indicator_activities.activities_id = activities.id
                                        inner join indicators on indicators.id = indicator_activities.indicator_id
                                        inner join activity_sources on activity_sources.activity_id = activities.id
                                        where
                                             indicators.abbreviated_name like 'ETAEA'
                                            --activities.name like '%%GAU%%'
                                            and activities.id = reg.id
                                            and strategic_lines.p_a_i_id = p_pai_id
                                            and activity_sources.age = p_year) as presupuesto_table
                                        group by
                                            presupuesto_table.id);
                    compromisos = (select
                                        sum(compromiso_table.compromiso) as compromiso
                                    from
                                    (select distinct
                                        activities.id as id,
                                         evidence_financial.id as evidence_financial,
                                        evidence_financial.value as compromiso
                                    from activities
                                    inner join objectives on objectives.id = activities.objective_id
                                    inner join projects on projects.id = objectives.project_id
                                    inner join programs on programs.id = projects.program_id
                                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                    inner join pais on pais.id = strategic_lines.p_a_i_id
                                    inner join indicator_activities on indicator_activities.activities_id = activities.id
                                    inner join indicators on indicators.id = indicator_activities.indicator_id
                                    inner join activity_sources on activity_sources.activity_id = activities.id
                                    inner join evidence_financial on evidence_financial.activity_source_id = activity_sources.id
                                    where
                                         indicators.abbreviated_name like 'ETAEA'
                                        --activities.name like '%%GAU%%'
                                        and activities.id = reg.id
                                        and strategic_lines.p_a_i_id = p_pai_id
                                        and activity_sources.age = p_year) as compromiso_table
                                    group by
                                        compromiso_table.id);
                    payment = (select
                                    sum(payment_table.payment) as payment
                                from
                               (select distinct
                                    evidence_advance.activity_id as id,
                                    payments.value as payment
                                from evidence_advance
                                inner join payments on payments.evidence_id = evidence_advance.id and payments.payment = true
                                where
                                    evidence_advance.activity_id = reg.id
                                    and evidence_advance.year = p_year) as payment_table
                                group by
                                    payment_table.id);
                    IF presupuesto_def is null THEN
                        presupuesto_def = 0;
                    END IF;
                    IF presupuesto_ini = 0 THEN
                        presupuesto_ini = presupuesto_def;
                    END IF;
                    IF compromisos is null THEN
                        compromisos = 0;
                    END IF;
                    IF payment is null THEN
                        payment = 0;
                    END IF;
                    
                    IF cuatrienal > 1 THEN
                        cuatrienal = 1;
                    END IF;
                    IF anual > 1 THEN
                        anual = 1;
                    END IF;
                    --ejecucion = anual * ponderacion;
                    insert into educa_ejecucion_fisica (
                        id,
                        name,
                        observaciones,
                        cuatrienal,
                        anual,
                        presupuesto_ini,
                        presupuesto_def,
                        compromisos,
                        payment
                    ) VALUES (
                        id,
                        name,
                        observaciones,
                        cuatrienal,
                        anual,
                        presupuesto_ini,
                        presupuesto_def,
                        compromisos,
                        payment
                    );
                end loop;
                
        RETURN QUERY 
        SELECT *
        from educa_ejecucion_fisica; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE educa_ejecucion_fisica;
        
        end;
        $$ language plpgsql;");
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.educa_ejecucion_fisica_tot(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(presupuesto_ini double precision, presupuesto_def double precision, compromiso double precision, payment double precision) AS $$
        declare
            reg Record;
            id integer;
            name varchar;
            tematica varchar;
            presupuesto_ini numeric;
            presupuesto_def numeric;
            compromiso numeric;
            payment numeric;
            presupuesto_ini_tot numeric = 0;
            presupuesto_def_tot numeric = 0;
            compromiso_tot numeric = 0;
            payment_tot numeric = 0;
            ponderacion numeric;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS educa_ejecucion_fisica_tot (
                presupuesto_ini double precision,
                presupuesto_def double precision,
                compromiso double precision,
                payment double precision
            );
            
            presupuesto_ini_tot = (select
                                        sum(table1.presupuesto_ini) as presupuesto_ini
                                    from
                                    (SELECT
                                        educa_ejecucion_fisica.presupuesto_ini
                                    from public.educa_ejecucion_fisica(
                                        p_pai_id, 
                                        p_year
                                    )) as table1);
            presupuesto_def_tot = (select
                                        sum(table1.presupuesto_def) as presupuesto_def
                                    from
                                    (SELECT
                                        educa_ejecucion_fisica.presupuesto_def
                                    from public.educa_ejecucion_fisica(
                                        p_pai_id, 
                                        p_year
                                    )) as table1);
            compromiso_tot = (select
                                        sum(table1.compromisos) as compromisos
                                    from
                                    (SELECT
                                        educa_ejecucion_fisica.compromisos
                                    from public.educa_ejecucion_fisica(
                                        p_pai_id, 
                                        p_year
                                    )) as table1);	
            payment_tot = (select
                                        sum(table1.payment) as payment
                                    from
                                    (SELECT
                                        educa_ejecucion_fisica.payment
                                    from public.educa_ejecucion_fisica(
                                        p_pai_id, 
                                        p_year
                                    )) as table1);
            insert into educa_ejecucion_fisica_tot (
                presupuesto_ini,
                presupuesto_def,
                compromiso,
                payment
            ) VALUES (
                presupuesto_ini_tot,
                presupuesto_def_tot,
                compromiso_tot,
                payment_tot
            );
                
        RETURN QUERY 
        SELECT *
        from educa_ejecucion_fisica_tot; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE educa_ejecucion_fisica_tot;
        
        end;
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.educa_ejecucion_presupuesto(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id bigint, ponderacion double precision, anual double precision, comp_pres double precision, pago_pres double precision, observaciones character varying) AS $$
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
            presupuesto_ini numeric;
            presupuesto_def numeric;
            compromisos numeric;
            payment numeric;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS educa_ejecucion_presupuesto (
                id bigint,
                ponderacion double precision,
                anual double precision,
                comp_pres double precision,
                pago_pres double precision,
                observaciones character varying
            );
        
            for reg in
                (select
                    negoc_acciones.id as id,
                    negoc_acciones.name as name,
                    string_agg(negoc_acciones.observaciones, ', ') as observaciones
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
                    indicators.abbreviated_name like 'ETAEA'
                    --activities.name like '%%GAU%%'
                    and od1.variable_name like 'Observaciones'
                    and ody1.year = p_year
                    and strategic_lines.p_a_i_id = p_pai_id) as negoc_acciones
                group by
                    negoc_acciones.id,
                    negoc_acciones.name)
                   loop
                    id = reg.id;
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
                                        indicators.abbreviated_name like 'ETAEA'
                                           and indicator_activities.weighing is not null
                                        and activities.id = reg.id
                                        and indicator_activities.year = p_year
                                        and strategic_lines.p_a_i_id = p_pai_id
                                    order by weighing DESC
                                    limit 1);
                    IF ponderacion is null THEN
                        ponderacion = 0;
                    END IF;
                    observaciones = reg.observaciones;
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
                                        indicators.abbreviated_name like 'ETAEA'
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
                                         indicators.abbreviated_name like 'ETAEA'
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
                                         indicators.abbreviated_name like 'ETAEA'
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
                                         indicators.abbreviated_name like 'ETAEA'
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
                                         indicators.abbreviated_name like 'ETAEA'
                                        --activities.name like '%%GAU%%'
                                        and activities.id = reg.id
                                        and strategic_lines.p_a_i_id = p_pai_id);
                    END IF;
                    IF evidence_anio is null OR goal_anio = 0 THEN
                        anual = 0;
                    ELSE
                        anual = evidence_anio / goal_anio;
                    END IF;
                    presupuesto_def = (select
                                            sum(presupuesto_table.presupuesto_def) as presupuesto_def
                                        from
                                        (select distinct
                                            activities.id as id,
                                            activity_sources.value as presupuesto_def
                                        from activities
                                        inner join objectives on objectives.id = activities.objective_id
                                        inner join projects on projects.id = objectives.project_id
                                        inner join programs on programs.id = projects.program_id
                                        inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                        inner join pais on pais.id = strategic_lines.p_a_i_id
                                        inner join indicator_activities on indicator_activities.activities_id = activities.id
                                        inner join indicators on indicators.id = indicator_activities.indicator_id
                                        inner join activity_sources on activity_sources.activity_id = activities.id
                                        where
                                             indicators.abbreviated_name like 'ETAEA'
                                            --activities.name like '%%GAU%%'
                                            and activities.id = reg.id
                                            and strategic_lines.p_a_i_id = p_pai_id
                                            and activity_sources.age = p_year) as presupuesto_table
                                        group by
                                            presupuesto_table.id);
                    compromisos = (select
                                        sum(compromiso_table.compromiso) as compromiso
                                    from
                                    (select distinct
                                        activities.id as id,
                                         evidence_financial.id as evidence_financial,
                                        evidence_financial.value as compromiso
                                    from activities
                                    inner join objectives on objectives.id = activities.objective_id
                                    inner join projects on projects.id = objectives.project_id
                                    inner join programs on programs.id = projects.program_id
                                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                    inner join pais on pais.id = strategic_lines.p_a_i_id
                                    inner join indicator_activities on indicator_activities.activities_id = activities.id
                                    inner join indicators on indicators.id = indicator_activities.indicator_id
                                    inner join activity_sources on activity_sources.activity_id = activities.id
                                    inner join evidence_financial on evidence_financial.activity_source_id = activity_sources.id
                                    where
                                         indicators.abbreviated_name like 'ETAEA'
                                        --activities.name like '%%GAU%%'
                                        and activities.id = reg.id
                                        and strategic_lines.p_a_i_id = p_pai_id
                                        and activity_sources.age = p_year) as compromiso_table
                                    group by
                                        compromiso_table.id);
                    payment = (select
                                    sum(payment_table.payment) as payment
                                from
                               (select distinct
                                    activities.id as id,
                                    payments.value as payment
                                from activities
                                inner join objectives on objectives.id = activities.objective_id
                                inner join projects on projects.id = objectives.project_id
                                inner join programs on programs.id = projects.program_id
                                inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                inner join pais on pais.id = strategic_lines.p_a_i_id
                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                inner join indicators on indicators.id = indicator_activities.indicator_id
                                inner join activity_sources on activity_sources.activity_id = activities.id
                                inner join evidence_financial on evidence_financial.activity_source_id = activity_sources.id
                                inner join evidence_advance on evidence_advance.activity_id = activities.id
                                inner join payments on payments.evidence_id = evidence_advance.id and payments.payment = true
                                where
                                    indicators.abbreviated_name like 'ETAEA'
                                    --activities.name like '%%GAU%%'
                                    and activities.id = reg.id
                                    and strategic_lines.p_a_i_id = p_pai_id
                                    and activity_sources.age = p_year) as payment_table
                                group by
                                    payment_table.id);
                    IF presupuesto_def is null THEN
                        presupuesto_def = 0;
                    END IF;
                    IF compromisos is null THEN
                        compromisos = 0;
                    END IF;
                    IF payment is null THEN
                        payment = 0;
                    END IF;
                    IF anual > 1 THEN
                        anual = 1;
                    END IF;
                    IF presupuesto_def = 0 THEN
                        comp_pres = 0;
                        pago_pres = 0;
                    ELSE
                        comp_pres = compromisos / presupuesto_def;
                        pago_pres = payment / presupuesto_def;
                    END IF;
                    --ejecucion = anual * ponderacion;
                    insert into educa_ejecucion_presupuesto (
                        id,
                        ponderacion,
                        anual,
                        comp_pres,
                        pago_pres,
                        observaciones
                    ) VALUES (
                        id,
                        ponderacion,
                        anual,
                        comp_pres,
                        pago_pres,
                        observaciones
                    );
                end loop;
                
        RETURN QUERY 
        SELECT *
        from educa_ejecucion_presupuesto; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE educa_ejecucion_presupuesto;
        
        end;
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.educa_ejecucion_presupuesto_tot(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id bigint, ponderacion double precision, anual double precision, comp_pres double precision, pago_pres double precision) AS $$
        declare
            reg Record;
            id integer;
            ponderacion numeric = 0;
            anual numeric = 0;
            comp_pres numeric = 0;
            pago_pres numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS educa_ejecucion_presupuesto_tot (
                id bigint,
                ponderacion double precision,
                anual double precision,
                comp_pres double precision,
                pago_pres double precision
            );
        
            for reg in
                (SELECT * from public.educa_ejecucion_presupuesto(
                    p_pai_id, 
                    p_year
                ))
                   loop
                    id = reg.id;
                    ponderacion = ponderacion + reg.ponderacion;
                    anual = anual + (reg.ponderacion * reg.anual);
                    comp_pres = comp_pres + (reg.ponderacion * reg.comp_pres);
                    pago_pres = pago_pres + (reg.ponderacion * reg.pago_pres);
                    RAISE NOTICE 'anual %, comp_pres %, anualT %, comp_presT %', reg.anual, reg.comp_pres, anual, comp_pres;
                end loop;
            insert into educa_ejecucion_presupuesto_tot (
                id,
                ponderacion,
                anual,
                comp_pres,
                pago_pres
            ) VALUES (
                id,
                ponderacion,
                anual,
                comp_pres,
                pago_pres
            );
                
        RETURN QUERY 
        SELECT *
        from educa_ejecucion_presupuesto_tot; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE educa_ejecucion_presupuesto_tot;
        
        end;
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.educa_presupuesto_def_tot(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision, tot double precision) AS $$
        declare
            reg Record;
            anio1 numeric;
            anio2 numeric;
            anio3 numeric;
            anio4 numeric;
            tot numeric;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS educa_presupuesto_def_tot (
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision,
                tot  double precision
            );
            
            anio1 = (select
                            sum(educa_ejecucion_fisica.presupuesto_def)
                        from educa_ejecucion_fisica(
                            p_pai_id,
                            1
                        ));
            anio2 = (select
                            sum(educa_ejecucion_fisica.presupuesto_def)
                        from educa_ejecucion_fisica(
                            p_pai_id,
                            2
                        ));
            anio3 = (select
                            sum(educa_ejecucion_fisica.presupuesto_def)
                        from educa_ejecucion_fisica(
                            p_pai_id,
                            3
                        ));
            anio4 = (select
                            sum(educa_ejecucion_fisica.presupuesto_def)
                        from educa_ejecucion_fisica(
                            p_pai_id,
                            4
                        ));
            tot = anio1 + anio2 + anio3 + anio4;
            insert into educa_presupuesto_def_tot (
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            ) VALUES (
                anio1,
                anio2,
                anio3,
                anio4,
                tot
            );
                
        RETURN QUERY 
        SELECT *
        from educa_presupuesto_def_tot; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE educa_presupuesto_def_tot;
        
        end;
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.educa_prog(
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
                        indicators.abbreviated_name like 'ETAEA'
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id;
        
            int_id integer := 1;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS educa_prog (
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
                INSERT INTO educa_prog (
                        program_name
                    )
                    VALUES (
                        program_name
                    );
           close cur_plan_educa;
           
        RETURN QUERY 
        SELECT *
        from educa_prog; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE educa_prog;
        
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