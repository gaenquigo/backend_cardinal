<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedPomcas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_den(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, category_name character varying, tipo_de_plan character varying, codigo character varying, cuenca character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table2 (
                id_plan bigint,
                category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.denominator) as anio1
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = p_year
                    and ody2.year = p_year
                    and ody3.year = p_year
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.denominator is not null
                    and indicator_activities.year = 1
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio1 is null THEN
                        _anio1 = 0;
                    ELSE
                        _anio1 = reg.anio1;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            _anio1,
                            0,
                            0,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            anio1 = _anio1
                            --anio2 = 0,
                            --anio3 = 0,
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
            --CREATE TEMP TABLE IF NOT EXISTS anio1 AS
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.denominator) as anio2
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = p_year
                    and ody2.year = p_year
                    and ody3.year = p_year
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.denominator is not null
                    and indicator_activities.year = 2
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio2 is null THEN
                        _anio2 = 0;
                    ELSE
                        _anio2 = reg.anio2;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            _anio2,
                            0,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            anio2 = _anio2
                            --anio3 = 0,
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.denominator) as anio3
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = p_year
                    and ody2.year = p_year
                    and ody3.year = p_year
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.denominator is not null
                    and indicator_activities.year = 3
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio3 is null THEN
                        _anio3 = 0;
                    ELSE
                        _anio3 = reg.anio3;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            0,
                            _anio3,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            --anio2 = 0,
                            anio3 = _anio3
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
            for reg in
                (select
                        --indicator_activities.id as indicator_activities_id,
                        activities.id as indicator_activities_id,
                         variables.category_name,
                        activities.name,
                        --ody1.year as other_data_year,
                        --indicator_activities.year as indicatyor_acivities_year,
                        ody1.value as tipo_de_plan,
                        ody2.value as codigo,
                        ody3.value as cuenca,
                        sum(indicator_activities.denominator) as anio4
                        --ody4.value as area,
                        --ody5.value as estado
                        --ody6.value as estado2
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
                    --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    inner join other_data_year ody2 on ody2.activity_id = activities.id
                    inner join other_data od2 on od2.id = ody2.other_data_id
                    inner join other_data_year ody3 on ody3.activity_id = activities.id
                    inner join other_data od3 on od3.id = ody3.other_data_id
                    /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                    inner join other_data od4 on od4.id = ody4.other_data_id
                    inner join other_data_year ody5 on ody5.activity_id = activities.id
                    inner join other_data od5 on od5.id = ody5.other_data_id*/
                    --inner join other_data_year ody6 on ody6.activity_id = activities.id
                    --inner join other_data od6 on od6.id = ody6.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%POMCAS%%'
                        and od1.variable_name like 'Tipo de plan'
                        and od2.variable_name like 'Código'
                        and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                        --and od4.variable_name like 'Área'
                        --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                        --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                        and ody1.year = p_year
                        and ody2.year = p_year
                        and ody3.year = p_year
                        --and ody4.year = 4
                        --and ody5.year = 4
                        --and ody6.year = 2
                        --and ody1.value is not null
                        --and ody2.value is not null
                        --and ody3.value is not null
                        --and ody4.value is not null
                        --and ody5.value is not null
                        --and ody6.value is not null
                         --and indicator_activities.denominator is not null
                        and indicator_activities.year = 4
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by
                         activities.id,
                         variables.category_name,
                        activities.name,
                        ody1.value,
                        ody2.value,
                        ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio4 is null THEN
                        _anio4 = 0;
                    ELSE
                        _anio4 = reg.anio4;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            0,
                            0,
                            _anio4
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            --anio2 = 0,
                            --anio3 = 0,
                            anio4 = _anio4
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
        RETURN QUERY 
        SELECT *
        from temp_table2; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table2;
        
        end;
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_den_ejec(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 double precision;
            _anio2 double precision;
            _anio3 double precision;
            _anio4 double precision;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table2 (
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            for reg in
                (select distinct
                    activities.id as indicator_activities_id
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
                    indicators.abbreviated_name like 'PPEE'
                    and variables.category_name like '%%POMCAS%%'
                    and strategic_lines.p_a_i_id = p_pai_id)
                   loop
                    _anio1 = (select
                                    sum(indicator_activities.denominator) as anio1
                                from activities
                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                where
                                    indicator_activities.activities_id = reg.indicator_activities_id
                                    and indicator_activities.year = 1);
                    _anio2 = (select
                                    sum(indicator_activities.denominator) as anio2
                                from activities
                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                where
                                    indicator_activities.activities_id = reg.indicator_activities_id
                                    and indicator_activities.year = 2);
                    _anio3 = (select
                                    sum(indicator_activities.denominator) as anio3
                                from activities
                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                where
                                    indicator_activities.activities_id = reg.indicator_activities_id
                                    and indicator_activities.year = 3);
                    _anio4 = (select
                                    sum(indicator_activities.denominator) as anio4
                                from activities
                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                where
                                    indicator_activities.activities_id = reg.indicator_activities_id
                                    and indicator_activities.year = 4);
                    IF _anio1 is null THEN
                        _anio1 = 0;
                    END IF;
                    IF _anio2 is null THEN
                        _anio2 = 0;
                    END IF;
                    IF _anio3 is null THEN
                        _anio3 = 0;
                    END IF;
                    IF _anio4 is null THEN
                        _anio4 = 0;
                    END IF;
                    insert into temp_table2 (
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        _anio1,
                        _anio2,
                        _anio3,
                        _anio4
                    );
                end loop;
                
        RETURN QUERY 
        SELECT *
        from temp_table2; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table2;
        
        end;
        
        $$ language plpgsql;");
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_den_tot(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, category_name character varying, tipo_de_plan character varying, codigo character varying, cuenca character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table2 (
                id_plan bigint,
                category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.denominator) as anio1
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = 1
                    and ody2.year = 1
                    and ody3.year = 1
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.denominator is not null
                    and indicator_activities.year = 1
                    and groups.name like p_group_name
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio1 is null THEN
                        _anio1 = 0;
                    ELSE
                        _anio1 = reg.anio1;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            _anio1,
                            0,
                            0,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            anio1 = _anio1
                            --anio2 = 0,
                            --anio3 = 0,
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
            --CREATE TEMP TABLE IF NOT EXISTS anio1 AS
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.denominator) as anio2
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = 2
                    and ody2.year = 2
                    and ody3.year = 2
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.denominator is not null
                    and indicator_activities.year = 2
                    and groups.name like p_group_name
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio2 is null THEN
                        _anio2 = 0;
                    ELSE
                        _anio2 = reg.anio2;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            _anio2,
                            0,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            anio2 = _anio2
                            --anio3 = 0,
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.denominator) as anio3
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = 3
                    and ody2.year = 3
                    and ody3.year = 3
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.denominator is not null
                    and indicator_activities.year = 3
                    and groups.name like p_group_name
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio3 is null THEN
                        _anio3 = 0;
                    ELSE
                        _anio3 = reg.anio3;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            0,
                            _anio3,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            --anio2 = 0,
                            anio3 = _anio3
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
            for reg in
                (select
                        --indicator_activities.id as indicator_activities_id,
                        activities.id as indicator_activities_id,
                         variables.category_name,
                        activities.name,
                        --ody1.year as other_data_year,
                        --indicator_activities.year as indicatyor_acivities_year,
                        ody1.value as tipo_de_plan,
                        ody2.value as codigo,
                        ody3.value as cuenca,
                        sum(indicator_activities.denominator) as anio4
                        --ody4.value as area,
                        --ody5.value as estado
                        --ody6.value as estado2
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
                    --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    inner join other_data_year ody2 on ody2.activity_id = activities.id
                    inner join other_data od2 on od2.id = ody2.other_data_id
                    inner join other_data_year ody3 on ody3.activity_id = activities.id
                    inner join other_data od3 on od3.id = ody3.other_data_id
                    /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                    inner join other_data od4 on od4.id = ody4.other_data_id
                    inner join other_data_year ody5 on ody5.activity_id = activities.id
                    inner join other_data od5 on od5.id = ody5.other_data_id*/
                    --inner join other_data_year ody6 on ody6.activity_id = activities.id
                    --inner join other_data od6 on od6.id = ody6.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%POMCAS%%'
                        and od1.variable_name like 'Tipo de plan'
                        and od2.variable_name like 'Código'
                        and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                        --and od4.variable_name like 'Área'
                        --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                        --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                        and ody1.year = 4
                        and ody2.year = 4
                        and ody3.year = 4
                        --and ody4.year = 4
                        --and ody5.year = 4
                        --and ody6.year = 2
                        --and ody1.value is not null
                        --and ody2.value is not null
                        --and ody3.value is not null
                        --and ody4.value is not null
                        --and ody5.value is not null
                        --and ody6.value is not null
                         --and indicator_activities.denominator is not null
                        and indicator_activities.year = 4
                        and groups.name like p_group_name
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by
                         activities.id,
                         variables.category_name,
                        activities.name,
                        ody1.value,
                        ody2.value,
                        ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio4 is null THEN
                        _anio4 = 0;
                    ELSE
                        _anio4 = reg.anio4;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            0,
                            0,
                            _anio4
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            --anio2 = 0,
                            --anio3 = 0,
                            anio4 = _anio4
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
        RETURN QUERY 
        SELECT *
        from temp_table2; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table2;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_ejec(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(pomcas_ejec_id bigint, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            anio1 integer := 0;
            anio2 integer := 0;
            anio3 integer := 0;
            anio4 integer := 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table2 (
                pomcas_ejec_id bigint,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            for reg in
            (select
                sum(ia1.denominator) as denominator_POMCAS_anio1,
                sum(ia1.numerator) as numerator_POMCAS_anio1,
                sum(ia2.denominator) as denominator_POMCAS_anio2,
                sum(ia2.numerator) as numerator_POMCAS_anio2,
                sum(ia3.denominator) as denominator_POMCAS_anio3,
                sum(ia3.numerator) as numerator_POMCAS_anio3,
                sum(ia4.denominator) as denominator_POMCAS_anio4,
                sum(ia4.numerator) as numerator_POMCAS_anio4
            from activities
            inner join objectives on objectives.id = activities.objective_id
            inner join projects on projects.id = objectives.project_id
            inner join programs on programs.id = projects.program_id
            inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
            inner join pais on pais.id = strategic_lines.p_a_i_id
            inner join groups on groups.id = pais.group_id
            inner join indicator_activities ia1 on ia1.activities_id = activities.id
            inner join indicator_activities ia2 on ia2.activities_id = activities.id
            inner join indicator_activities ia3 on ia3.activities_id = activities.id
            inner join indicator_activities ia4 on ia4.activities_id = activities.id
            inner join indicators on indicators.id = ia1.indicator_id
            where
                indicators.abbreviated_name like 'PAFP'
                and activities.name like '%%POMCAS%%'
                and ia1.year = 1
                and ia2.year = 2
                and ia3.year = 3
                and ia4.year = 4
                and groups.name like p_group_name
                and strategic_lines.p_a_i_id = p_pai_id)
                   loop
                    if reg.denominator_POMCAS_anio1 is null then
                        anio1 = 0;
                    else
                        anio1 = reg.denominator_POMCAS_anio1;
                    end if;
                    
                    if reg.denominator_POMCAS_anio2 is null then
                        anio2 = 0;
                    else
                        anio2 = reg.denominator_POMCAS_anio2;
                    end if;
                    
                    if reg.denominator_POMCAS_anio3 is null then
                        anio3 = 0;
                    else
                        anio3 = reg.denominator_POMCAS_anio3;
                    end if;
                    
                    if reg.denominator_POMCAS_anio4 is null then
                        anio4 = 0;
                    else
                        anio4 = reg.denominator_POMCAS_anio4;
                    end if;
                    
                    insert into temp_table2 (
                        pomcas_ejec_id,
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        int_id,
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    );
                    int_id = int_id + 1;
                    
                    if reg.numerator_POMCAS_anio1 is null then
                        anio1 = 0;
                    else
                        anio1 = reg.numerator_POMCAS_anio1;
                    end if;
                    
                    if reg.numerator_POMCAS_anio2 is null then
                        anio2 = 0;
                    else
                        anio2 = reg.numerator_POMCAS_anio2;
                    end if;
                    
                    if reg.numerator_POMCAS_anio3 is null then
                        anio3 = 0;
                    else
                        anio3 = reg.numerator_POMCAS_anio3;
                    end if;
                    
                    if reg.numerator_POMCAS_anio4 is null then
                        anio4 = 0;
                    else
                        anio4 = reg.numerator_POMCAS_anio4;
                    end if;
                    
                    insert into temp_table2 (
                        pomcas_ejec_id,
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        int_id,
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    );
                    int_id = int_id + 1;
                end loop;
                
            for reg in
            (select
                sum(ia1.denominator) as denominator_POMCAS_anio1,
                sum(ia1.numerator) as numerator_POMCAS_anio1,
                sum(ia2.denominator) as denominator_POMCAS_anio2,
                sum(ia2.numerator) as numerator_POMCAS_anio2,
                sum(ia3.denominator) as denominator_POMCAS_anio3,
                sum(ia3.numerator) as numerator_POMCAS_anio3,
                sum(ia4.denominator) as denominator_POMCAS_anio4,
                sum(ia4.numerator) as numerator_POMCAS_anio4
            from activities
            inner join objectives on objectives.id = activities.objective_id
            inner join projects on projects.id = objectives.project_id
            inner join programs on programs.id = projects.program_id
            inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
            inner join pais on pais.id = strategic_lines.p_a_i_id
            inner join groups on groups.id = pais.group_id
            inner join indicator_activities ia1 on ia1.activities_id = activities.id
            inner join indicator_activities ia2 on ia2.activities_id = activities.id
            inner join indicator_activities ia3 on ia3.activities_id = activities.id
            inner join indicator_activities ia4 on ia4.activities_id = activities.id
            inner join indicators on indicators.id = ia1.indicator_id
            where
                indicators.abbreviated_name like 'PAFP'
                and activities.name like '%%PMA%%'
                and ia1.year = 1
                and ia2.year = 2
                and ia3.year = 3
                and ia4.year = 4
                and groups.name like p_group_name
                and strategic_lines.p_a_i_id = p_pai_id)
                   loop
                    insert into temp_table2 (
                        pomcas_ejec_id,
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        int_id,
                        reg.denominator_POMCAS_anio1,
                        reg.denominator_POMCAS_anio2,
                        reg.denominator_POMCAS_anio3,
                        reg.denominator_POMCAS_anio4
                    );
                    int_id = int_id + 1;
                    insert into temp_table2 (
                        pomcas_ejec_id,
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        int_id,
                        reg.numerator_POMCAS_anio1,
                        reg.numerator_POMCAS_anio2,
                        reg.numerator_POMCAS_anio3,
                        reg.numerator_POMCAS_anio4
                    );
                    int_id = int_id + 1;
                end loop;
                
            for reg in
            (select
                sum(ia1.denominator) as denominator_POMCAS_anio1,
                sum(ia1.numerator) as numerator_POMCAS_anio1,
                sum(ia2.denominator) as denominator_POMCAS_anio2,
                sum(ia2.numerator) as numerator_POMCAS_anio2,
                sum(ia3.denominator) as denominator_POMCAS_anio3,
                sum(ia3.numerator) as numerator_POMCAS_anio3,
                sum(ia4.denominator) as denominator_POMCAS_anio4,
                sum(ia4.numerator) as numerator_POMCAS_anio4
            from activities
            inner join objectives on objectives.id = activities.objective_id
            inner join projects on projects.id = objectives.project_id
            inner join programs on programs.id = projects.program_id
            inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
            inner join pais on pais.id = strategic_lines.p_a_i_id
            inner join groups on groups.id = pais.group_id
            inner join indicator_activities ia1 on ia1.activities_id = activities.id
            inner join indicator_activities ia2 on ia2.activities_id = activities.id
            inner join indicator_activities ia3 on ia3.activities_id = activities.id
            inner join indicator_activities ia4 on ia4.activities_id = activities.id
            inner join indicators on indicators.id = ia1.indicator_id
            where
                indicators.abbreviated_name like 'PAFP'
                and activities.name like '%%PMM%%'
                and ia1.year = 1
                and ia2.year = 2
                and ia3.year = 3
                and ia4.year = 4
                and groups.name like p_group_name
                and strategic_lines.p_a_i_id = p_pai_id)
                   loop
                    insert into temp_table2 (
                        pomcas_ejec_id,
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        int_id,
                        reg.denominator_POMCAS_anio1,
                        reg.denominator_POMCAS_anio2,
                        reg.denominator_POMCAS_anio3,
                        reg.denominator_POMCAS_anio4
                    );
                    int_id = int_id + 1;
                    insert into temp_table2 (
                        pomcas_ejec_id,
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        int_id,
                        reg.numerator_POMCAS_anio1,
                        reg.numerator_POMCAS_anio2,
                        reg.numerator_POMCAS_anio3,
                        reg.numerator_POMCAS_anio4
                    );
                    int_id = int_id + 1;
                end loop;	
                
        RETURN QUERY 
        SELECT *
        from temp_table2; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table2;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_ejecucion(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id bigint, name character varying, plan character varying, presupuesto_ini double precision, presupuesto_def double precision, compromiso double precision, payment double precision) AS $$
        declare
            reg Record;
            reg1 Record;
            id integer;
            name varchar;
            plan varchar;
            presupuesto_ini numeric;
            presupuesto_def numeric;
            compromiso numeric;
            payment numeric;
            presupuesto_def_tot numeric = 0;
            compromiso_tot numeric = 0;
            payment_tot numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS pomcas_ejecucion (
                id bigint,
                name character varying,
                plan character varying,
                presupuesto_ini double precision,
                presupuesto_def double precision,
                compromiso double precision,
                payment double precision
            );
        
            for reg in
            (select
                pomcas_plan.id as id,
                pomcas_plan.name as name,
                string_agg(pomcas_plan.tipo_de_plan, ', ') as tipo_de_plan
            from
            (select distinct
                activities.id as id,
                activities.name as name,
                ody1.value as tipo_de_plan
            from activities
            inner join objectives on objectives.id = activities.objective_id
            inner join projects on projects.id = objectives.project_id
            inner join programs on programs.id = projects.program_id
            inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
            inner join pais on pais.id = strategic_lines.p_a_i_id
            inner join indicator_activities on indicator_activities.activities_id = activities.id
            inner join indicators on indicators.id = indicator_activities.indicator_id
            inner join variables on variables.id = indicator_activities.variable_id
            inner join other_data_year ody1 on ody1.activity_id = activities.id
            inner join other_data od1 on od1.id = ody1.other_data_id
            inner join activity_sources on activity_sources.activity_id = activities.id
            where
                indicators.abbreviated_name like 'PPEE'
                and variables.category_name like '%%POMCAS%%'
                and strategic_lines.p_a_i_id = p_pai_id
                and ody1.year = p_year) as pomcas_plan
            group by
                pomcas_plan.id,
                pomcas_plan.name
            UNION ALL
            select
                pma_plan.id as id,
                pma_plan.name as name,
                string_agg(pma_plan.tipo_de_plan, ', ') as tipo_de_plan
            from
            (select distinct
                activities.id as id,
                activities.name as name,
                ody1.value as tipo_de_plan
            from activities
            inner join objectives on objectives.id = activities.objective_id
            inner join projects on projects.id = objectives.project_id
            inner join programs on programs.id = projects.program_id
            inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
            inner join pais on pais.id = strategic_lines.p_a_i_id
            inner join indicator_activities on indicator_activities.activities_id = activities.id
            inner join indicators on indicators.id = indicator_activities.indicator_id
            inner join variables on variables.id = indicator_activities.variable_id
            inner join other_data_year ody1 on ody1.activity_id = activities.id
            inner join other_data od1 on od1.id = ody1.other_data_id
            inner join activity_sources on activity_sources.activity_id = activities.id
            where
                indicators.abbreviated_name like 'PPEE'
                and variables.category_name like '%%PMA%%'
                and strategic_lines.p_a_i_id = p_pai_id
                and ody1.year = p_year) as pma_plan
            group by
                pma_plan.id,
                pma_plan.name
            UNION ALL
            select
                pmm_plan.id as id,
                pmm_plan.name as name,
                string_agg(pmm_plan.tipo_de_plan, ', ') as tipo_de_plan
            from
            (select distinct
                activities.id as id,
                activities.name as name,
                ody1.value as tipo_de_plan
            from activities
            inner join objectives on objectives.id = activities.objective_id
            inner join projects on projects.id = objectives.project_id
            inner join programs on programs.id = projects.program_id
            inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
            inner join pais on pais.id = strategic_lines.p_a_i_id
            inner join indicator_activities on indicator_activities.activities_id = activities.id
            inner join indicators on indicators.id = indicator_activities.indicator_id
            inner join variables on variables.id = indicator_activities.variable_id
            inner join other_data_year ody1 on ody1.activity_id = activities.id
            inner join other_data od1 on od1.id = ody1.other_data_id
            inner join activity_sources on activity_sources.activity_id = activities.id
            where
                indicators.abbreviated_name like 'PPEE'
                and variables.category_name like '%%PMM%%'
                and strategic_lines.p_a_i_id = p_pai_id
                and ody1.year = p_year) as pmm_plan
            group by
                pmm_plan.id,
                pmm_plan.name)
                   loop
                    id = reg.id;
                    name = reg.name;
                    plan = reg.tipo_de_plan;
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
                                    indicators.abbreviated_name like 'PPEE'
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
                                        inner join variables on variables.id = indicator_activities.variable_id
                                        inner join activity_sources on activity_sources.activity_id = activities.id
                                        where
                                            indicators.abbreviated_name like 'PPEE'
                                            and activities.id = reg.id
                                            and strategic_lines.p_a_i_id = p_pai_id
                                            and activity_sources.age = p_year) as presupuesto_table
                                        group by
                                            presupuesto_table.id);
                    compromiso = (select
                                        sum(compromiso_table.compromiso) as compromiso
                                    from
                                    (select distinct
                                        activities.id as id,
                                        evidence_financial.value as compromiso
                                    from activities
                                    inner join objectives on objectives.id = activities.objective_id
                                    inner join projects on projects.id = objectives.project_id
                                    inner join programs on programs.id = projects.program_id
                                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                                    inner join pais on pais.id = strategic_lines.p_a_i_id
                                    inner join indicator_activities on indicator_activities.activities_id = activities.id
                                    inner join indicators on indicators.id = indicator_activities.indicator_id
                                    inner join variables on variables.id = indicator_activities.variable_id
                                    inner join activity_sources on activity_sources.activity_id = activities.id
                                    inner join evidence_financial on evidence_financial.activity_source_id = activity_sources.id
                                    where
                                        indicators.abbreviated_name like 'PPEE'
                                        and activities.id = reg.id
                                        and strategic_lines.p_a_i_id = p_pai_id
                                        and activity_sources.age = p_year) as compromiso_table
                                    group by
                                        compromiso_table.id);
                    payment = (select
                                    sum(payment_table.payment) as payment
                                from
                               (select
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
                    IF compromiso is null THEN
                        compromiso = 0;
                    END IF;
                    IF payment is null THEN
                        payment = 0;
                    END IF;
                    presupuesto_def_tot = presupuesto_def_tot + presupuesto_def;
                    compromiso_tot = compromiso_tot + compromiso;
                    payment_tot = payment_tot + payment;
                    insert into pomcas_ejecucion (
                        id,
                        name,
                        plan,
                        presupuesto_ini,
                        presupuesto_def,
                        compromiso,
                        payment
                    ) VALUES (
                        id,
                        name,
                        plan,
                        presupuesto_ini,
                        presupuesto_def,
                        compromiso,
                        payment
                    );
                end loop;	
                /*insert into pomcas_ejecucion (
                    presupuesto_ini,
                    presupuesto_def,
                    compromiso,
                    payment
                ) VALUES (
                    presupuesto_ini,
                    presupuesto_def_tot,
                    compromiso_tot,
                    payment_tot
                );*/
                
        RETURN QUERY 
        SELECT *
        from pomcas_ejecucion; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE pomcas_ejecucion;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_ejecucion_total(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(presupuesto_ini double precision, presupuesto_def double precision, compromiso double precision, payment double precision) AS $$
        declare
            reg Record;
            id integer;
            name varchar;
            plan varchar;
            presupuesto_ini numeric = 0;
            presupuesto_def numeric;
            compromiso numeric;
            payment numeric;
            presupuesto_ini_tot numeric = 0;
            presupuesto_def_tot numeric = 0;
            compromiso_tot numeric = 0;
            payment_tot numeric = 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS pomcas_ejecucion_total (
                presupuesto_ini double precision,
                presupuesto_def double precision,
                compromiso double precision,
                payment double precision
            );
        
            for reg in
            (SELECT * from public.pomcas_ejecucion(
                p_pai_id, 
                p_year
            ))
                   loop
                    presupuesto_ini_tot = presupuesto_ini_tot + reg.presupuesto_ini;
                    presupuesto_def_tot = presupuesto_def_tot + reg.presupuesto_def;
                    compromiso_tot = compromiso_tot + reg.compromiso;
                    payment_tot = payment_tot + reg.payment;
                end loop;	
                insert into pomcas_ejecucion_total (
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
        from pomcas_ejecucion_total; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE pomcas_ejecucion_total;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_gen(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, activities_id bigint, denominator bigint, numerator bigint, tipo_de_plan character varying, codigo character varying, cuenca character varying, area character varying, estado character varying, estado_p character varying) AS $$
        declare
            reg Record;
            cur_plan_pomcas cursor
                for select * from (select distinct
                        activities.id as activities_id,
                        activities.name,
                        indicator_activities.denominator,
                        indicator_activities.numerator,
                        string_agg(ody1.value, ', ') as tipo_de_plan
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%POMCAS%%'
                        and od1.variable_name like 'Tipo de plan'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, activities.name, indicator_activities.denominator, indicator_activities.numerator) as table1
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as codigo
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%POMCAS%%'
                        and od1.variable_name like 'Código'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table2 on table2.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as cuenca
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%POMCAS%%'
                        and od1.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table3 on table3.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as area
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%POMCAS%%'
                        and od1.variable_name like 'Área'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table4 on table4.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as estado
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%POMCAS%%'
                        and od1.variable_name like '%%Estado de avance a 31 de diciembre%%' and od1.variable_name not like '%%(%)%%'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table5 on table5.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as estado_p
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%POMCAS%%'
                        and od1.variable_name like '%%Estado de avance a 31 de diciembre%%' and od1.variable_name like '%%(%)%%'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table6 on table6.activities_id = table1.activities_id;
                        
            cur_plan_pma cursor
                for select * from (select distinct
                        activities.id as activities_id,
                        activities.name,
                        indicator_activities.denominator,
                        indicator_activities.numerator,
                        string_agg(ody1.value, ', ') as tipo_de_plan
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMA%%'
                        and od1.variable_name like 'Tipo de plan'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, activities.name, indicator_activities.denominator, indicator_activities.numerator) as table1
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as codigo
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMA%%'
                        and od1.variable_name like 'Código'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table2 on table2.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as cuenca
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMA%%'
                        and od1.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table3 on table3.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as area
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMA%%'
                        and od1.variable_name like 'Área'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table4 on table4.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as estado
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMA%%'
                        and od1.variable_name like '%%Estado de avance a 31 de diciembre%%' and od1.variable_name not like '%%(%)%%'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table5 on table5.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as estado_p
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMA%%'
                        and od1.variable_name like '%%Estado de avance a 31 de diciembre%%' and od1.variable_name like '%%(%)%%'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table6 on table6.activities_id = table1.activities_id;
                        
            cur_plan_pmm cursor
                for select * from (select distinct
                        activities.id as activities_id,
                        activities.name,
                        indicator_activities.denominator,
                        indicator_activities.numerator,
                        string_agg(ody1.value, ', ') as tipo_de_plan
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMM%%'
                        and od1.variable_name like 'Tipo de plan'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, activities.name, indicator_activities.denominator, indicator_activities.numerator) as table1
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as codigo
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMM%%'
                        and od1.variable_name like 'Código'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table2 on table2.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as cuenca
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMM%%'
                        and od1.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table3 on table3.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as area
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMM%%'
                        and od1.variable_name like 'Área'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table4 on table4.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as estado
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMM%%'
                        and od1.variable_name like '%%Estado de avance a 31 de diciembre%%' and od1.variable_name not like '%%(%)%%'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table5 on table5.activities_id = table1.activities_id
                    inner join
                    (select distinct
                        activities.id as activities_id,
                        string_agg(ody1.value, ', ') as estado_p
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
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%PMM%%'
                        and od1.variable_name like '%%Estado de avance a 31 de diciembre%%' and od1.variable_name like '%%(%)%%'
                        and ody1.year = p_year
                        and indicator_activities.denominator is not null
                        and indicator_activities.year = p_year
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by activities.id, indicator_activities.denominator) as table6 on table6.activities_id = table1.activities_id;
        
            int_id integer := 1;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table1 (
                id_plan bigint,
                activities_id bigint,
                denominator bigint,
                numerator bigint,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,
                area character varying,
                estado character varying,
                estado_p character varying
            );
        
            open cur_plan_pomcas;
                LOOP
                    FETCH cur_plan_pomcas INTO reg;
                    EXIT WHEN NOT FOUND;
                    INSERT INTO temp_table1 (
                        id_plan,
                        activities_id,
                        denominator,
                        numerator,
                        tipo_de_plan,
                        codigo,
                        cuenca,
                        area,
                        estado,
                        estado_p
                    )
                    VALUES (
                        int_id,
                        reg.activities_id,
                        reg.denominator,
                        reg.numerator,
                        reg.tipo_de_plan,
                        reg.codigo,
                        reg.cuenca,
                        reg.area,
                        reg.estado,
                        reg.estado_p
                    );
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
           close cur_plan_pomcas;
           
           open cur_plan_pma;
                LOOP
                    FETCH cur_plan_pma INTO reg;
                    EXIT WHEN NOT FOUND;
                    INSERT INTO temp_table1 (
                        id_plan,
                        activities_id,
                        denominator,
                        numerator,
                        tipo_de_plan,
                        codigo,
                        cuenca,
                        area,
                        estado,
                        estado_p
                    )
                    VALUES (
                        int_id,
                        reg.activities_id,
                        reg.denominator,
                        reg.numerator,
                        reg.tipo_de_plan,
                        reg.codigo,
                        reg.cuenca,
                        reg.area,
                        reg.estado,
                        reg.estado_p
                    );
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
           close cur_plan_pma;
           
           open cur_plan_pmm;
                LOOP
                    FETCH cur_plan_pmm INTO reg;
                    EXIT WHEN NOT FOUND;
                    INSERT INTO temp_table1 (
                        id_plan,
                        activities_id,
                        denominator,
                        numerator,
                        tipo_de_plan,
                        codigo,
                        cuenca,
                        area,
                        estado,
                        estado_p
                    )
                    VALUES (
                        int_id,
                        reg.activities_id,
                        reg.denominator,
                        reg.numerator,
                        reg.tipo_de_plan,
                        reg.codigo,
                        reg.cuenca,
                        reg.area,
                        reg.estado,
                        reg.estado_p
                    );
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
           close cur_plan_pmm;
           
        RETURN QUERY 
        SELECT *
        from temp_table1; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table1;
        
        end;
        
        $$ language plpgsql;");
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_num(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, category_name character varying, tipo_de_plan character varying, codigo character varying, cuenca character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table2 (
                id_plan bigint,
                category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.numerator) as anio1
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = p_year
                    and ody2.year = p_year
                    and ody3.year = p_year
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.denominator is not null
                    and indicator_activities.year = 1
                    --and groups.name like p_group_name
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio1 is null THEN
                        _anio1 = 0;
                    ELSE
                        _anio1 = reg.anio1;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            _anio1,
                            0,
                            0,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            anio1 = _anio1
                            --anio2 = 0,
                            --anio3 = 0,
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
            --CREATE TEMP TABLE IF NOT EXISTS anio1 AS
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.numerator) as anio2
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = p_year
                    and ody2.year = p_year
                    and ody3.year = p_year
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.denominator is not null
                    and indicator_activities.year = 2
                    --and groups.name like p_group_name
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio2 is null THEN
                        _anio2 = 0;
                    ELSE
                        _anio2 = reg.anio2;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            _anio2,
                            0,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            anio2 = _anio2
                            --anio3 = 0,
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.numerator) as anio3
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = p_year
                    and ody2.year = p_year
                    and ody3.year = p_year
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.denominator is not null
                    and indicator_activities.year = 3
                    --and groups.name like p_group_name
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio3 is null THEN
                        _anio3 = 0;
                    ELSE
                        _anio3 = reg.anio3;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            0,
                            _anio3,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            --anio2 = 0,
                            anio3 = _anio3
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
            for reg in
                (select
                        --indicator_activities.id as indicator_activities_id,
                        activities.id as indicator_activities_id,
                         variables.category_name,
                        activities.name,
                        --ody1.year as other_data_year,
                        --indicator_activities.year as indicatyor_acivities_year,
                        ody1.value as tipo_de_plan,
                        ody2.value as codigo,
                        ody3.value as cuenca,
                        sum(indicator_activities.numerator) as anio4
                        --ody4.value as area,
                        --ody5.value as estado
                        --ody6.value as estado2
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
                    --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    inner join other_data_year ody2 on ody2.activity_id = activities.id
                    inner join other_data od2 on od2.id = ody2.other_data_id
                    inner join other_data_year ody3 on ody3.activity_id = activities.id
                    inner join other_data od3 on od3.id = ody3.other_data_id
                    /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                    inner join other_data od4 on od4.id = ody4.other_data_id
                    inner join other_data_year ody5 on ody5.activity_id = activities.id
                    inner join other_data od5 on od5.id = ody5.other_data_id*/
                    --inner join other_data_year ody6 on ody6.activity_id = activities.id
                    --inner join other_data od6 on od6.id = ody6.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%POMCAS%%'
                        and od1.variable_name like 'Tipo de plan'
                        and od2.variable_name like 'Código'
                        and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                        --and od4.variable_name like 'Área'
                        --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                        --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                        and ody1.year = p_year
                        and ody2.year = p_year
                        and ody3.year = p_year
                        --and ody4.year = 4
                        --and ody5.year = 4
                        --and ody6.year = 2
                        --and ody1.value is not null
                        --and ody2.value is not null
                        --and ody3.value is not null
                        --and ody4.value is not null
                        --and ody5.value is not null
                        --and ody6.value is not null
                         --and indicator_activities.denominator is not null
                        and indicator_activities.year = 4
                        --and groups.name like p_group_name
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by
                         activities.id,
                         variables.category_name,
                        activities.name,
                        ody1.value,
                        ody2.value,
                        ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio4 is null THEN
                        _anio4 = 0;
                    ELSE
                        _anio4 = reg.anio4;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            0,
                            0,
                            _anio4
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            --anio2 = 0,
                            --anio3 = 0,
                            anio4 = _anio4
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
        RETURN QUERY 
        SELECT *
        from temp_table2; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table2;
        
        end;
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_num(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, category_name character varying, tipo_de_plan character varying, codigo character varying, cuenca character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 double precision;
            _anio2 double precision;
            _anio3 double precision;
            _anio4 double precision;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table2 (
                id_plan bigint,
                category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            for reg in
                (select * from (select
                    table1A.indicator_activities_id as indicator_activities_id,
                    table1A.category_name,
                    table1A.name,
                    sum(table1A.numerator) as anio1,
                    table1A.tipo_de_plan as tipo_de_plan
                from (select * from (select distinct
                    activities.id as indicator_activities_id,
                    variables.category_name,
                    activities.name,
                    indicator_activities.numerator as numerator,
                    string_agg(ody1.value, ', ') as tipo_de_plan
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 1
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, variables.category_name, activities.name, indicator_activities.numerator) as tableA) as table1A group by table1A.indicator_activities_id, table1A.category_name, table1A.name, table1A.tipo_de_plan) as table1
                inner join
                (select distinct
                    activities.id as indicator_activities_id,
                    string_agg(ody1.value, ', ') as codigo
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Código'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 1
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, indicator_activities.numerator) as table2 on table2.indicator_activities_id = table1.indicator_activities_id
                inner join
                (select distinct
                    activities.id as indicator_activities_id,
                    string_agg(ody1.value, ', ') as cuenca
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 1
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, indicator_activities.numerator) as table3 on table3.indicator_activities_id = table1.indicator_activities_id)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' anio1: %', reg.anio1;
                    IF reg.anio1 is null THEN
                        _anio1 = 0;
                    ELSE
                        _anio1 = reg.anio1;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            _anio1,
                            0,
                            0,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            anio1 = _anio1
                            --anio2 = 0,
                            --anio3 = 0,
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
            --CREATE TEMP TABLE IF NOT EXISTS anio1 AS
            for reg in
                (select * from (select
                    table1A.indicator_activities_id as indicator_activities_id,
                    table1A.category_name,
                    table1A.name,
                    sum(table1A.numerator) as anio2,
                    table1A.tipo_de_plan as tipo_de_plan
                from (select * from (select distinct
                    activities.id as indicator_activities_id,
                    variables.category_name,
                    activities.name,
                    indicator_activities.numerator as numerator,
                    string_agg(ody1.value, ', ') as tipo_de_plan
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 2
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, variables.category_name, activities.name, indicator_activities.numerator) as tableA) as table1A group by table1A.indicator_activities_id, table1A.category_name, table1A.name, table1A.tipo_de_plan) as table1
                inner join
                (select distinct
                    activities.id as indicator_activities_id,
                    string_agg(ody1.value, ', ') as codigo
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Código'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 2
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, indicator_activities.numerator) as table2 on table2.indicator_activities_id = table1.indicator_activities_id
                inner join
                (select distinct
                    activities.id as indicator_activities_id,
                    string_agg(ody1.value, ', ') as cuenca
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 2
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, indicator_activities.numerator) as table3 on table3.indicator_activities_id = table1.indicator_activities_id)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' anio2: %', reg.anio2;
                    IF reg.anio2 is null THEN
                        _anio2 = 0;
                    ELSE
                        _anio2 = reg.anio2;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            _anio2,
                            0,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            anio2 = _anio2
                            --anio3 = 0,
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
            for reg in
                (select * from (select
                    table1A.indicator_activities_id as indicator_activities_id,
                    table1A.category_name,
                    table1A.name,
                    sum(table1A.numerator) as anio3,
                    table1A.tipo_de_plan as tipo_de_plan
                from (select * from (select distinct
                    activities.id as indicator_activities_id,
                    variables.category_name,
                    activities.name,
                    indicator_activities.numerator as numerator,
                    string_agg(ody1.value, ', ') as tipo_de_plan
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 3
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, variables.category_name, activities.name, indicator_activities.numerator) as tableA) as table1A group by table1A.indicator_activities_id, table1A.category_name, table1A.name, table1A.tipo_de_plan) as table1
                inner join
                (select distinct
                    activities.id as indicator_activities_id,
                    string_agg(ody1.value, ', ') as codigo
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Código'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 3
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, indicator_activities.numerator) as table2 on table2.indicator_activities_id = table1.indicator_activities_id
                inner join
                (select distinct
                    activities.id as indicator_activities_id,
                    string_agg(ody1.value, ', ') as cuenca
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 3
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, indicator_activities.numerator) as table3 on table3.indicator_activities_id = table1.indicator_activities_id)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' anio3: %', reg.anio3;
                    IF reg.anio3 is null THEN
                        _anio3 = 0;
                    ELSE
                        _anio3 = reg.anio3;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            0,
                            _anio3,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            --anio2 = 0,
                            anio3 = _anio3
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
            for reg in
                (select * from (select
                    table1A.indicator_activities_id as indicator_activities_id,
                    table1A.category_name,
                    table1A.name,
                    sum(table1A.numerator) as anio4,
                    table1A.tipo_de_plan as tipo_de_plan
                from (select * from (select distinct
                    activities.id as indicator_activities_id,
                    variables.category_name,
                    activities.name,
                    indicator_activities.numerator as numerator,
                    string_agg(ody1.value, ', ') as tipo_de_plan
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 4
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, variables.category_name, activities.name, indicator_activities.numerator) as tableA) as table1A group by table1A.indicator_activities_id, table1A.category_name, table1A.name, table1A.tipo_de_plan) as table1
                inner join
                (select distinct
                    activities.id as indicator_activities_id,
                    string_agg(ody1.value, ', ') as codigo
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Código'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 4
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, indicator_activities.numerator) as table2 on table2.indicator_activities_id = table1.indicator_activities_id
                inner join
                (select distinct
                    activities.id as indicator_activities_id,
                    string_agg(ody1.value, ', ') as cuenca
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
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    and ody1.year = p_year
                    and indicator_activities.numerator is not null
                    and indicator_activities.year = 4
                    and strategic_lines.p_a_i_id = p_pai_id
                group by activities.id, indicator_activities.numerator) as table3 on table3.indicator_activities_id = table1.indicator_activities_id)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' anio4: %', reg.anio4;
                    IF reg.anio4 is null THEN
                        _anio4 = 0;
                    ELSE
                        _anio4 = reg.anio4;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            0,
                            0,
                            _anio4
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            --anio2 = 0,
                            --anio3 = 0,
                            anio4 = _anio4
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
        RETURN QUERY 
        SELECT *
        from temp_table2; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table2;
        
        end;
        
        $$ language plpgsql;");
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_num_ejec(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 double precision;
            _anio2 double precision;
            _anio3 double precision;
            _anio4 double precision;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table2 (
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            for reg in
                (select distinct
                    activities.id as indicator_activities_id
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
                    indicators.abbreviated_name like 'PPEE'
                    and variables.category_name like '%%POMCAS%%'
                    and strategic_lines.p_a_i_id = p_pai_id)
                   loop
                    _anio1 = (select
                                    sum(indicator_activities.numerator) as anio1
                                from activities
                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                where
                                    indicator_activities.activities_id = reg.indicator_activities_id
                                    and indicator_activities.year = 1);
                    _anio2 = (select
                                    sum(indicator_activities.numerator) as anio2
                                from activities
                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                where
                                    indicator_activities.activities_id = reg.indicator_activities_id
                                    and indicator_activities.year = 2);
                    _anio3 = (select
                                    sum(indicator_activities.numerator) as anio3
                                from activities
                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                where
                                    indicator_activities.activities_id = reg.indicator_activities_id
                                    and indicator_activities.year = 3);
                    _anio4 = (select
                                    sum(indicator_activities.numerator) as anio4
                                from activities
                                inner join indicator_activities on indicator_activities.activities_id = activities.id
                                where
                                    indicator_activities.activities_id = reg.indicator_activities_id
                                    and indicator_activities.year = 4);
                    IF _anio1 is null THEN
                        _anio1 = 0;
                    END IF;
                    IF _anio2 is null THEN
                        _anio2 = 0;
                    END IF;
                    IF _anio3 is null THEN
                        _anio3 = 0;
                    END IF;
                    IF _anio4 is null THEN
                        _anio4 = 0;
                    END IF;
                    insert into temp_table2 (
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        _anio1,
                        _anio2,
                        _anio3,
                        _anio4
                    );
                end loop;
                
        RETURN QUERY 
        SELECT *
        from temp_table2; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table2;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_num_table(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, category_name character varying, tipo_de_plan character varying, codigo character varying, cuenca character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS pomcas_num_table (
                id_plan bigint,
                category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            for reg in
                (SELECT * from public.pomcas_num(
                    p_group_name,
                    p_pai_id,
                    p_year
                )
                UNION ALL
                SELECT * from public.pma_num(
                    p_group_name,
                    p_pai_id,
                    p_year
                )
                UNION ALL
                SELECT * from public.pmm_num(
                    p_group_name,
                    p_pai_id,
                    p_year
                ))
                   loop
                    IF reg.anio1 > 100 THEN
                        _anio1 = 100;
                    ELSE
                        _anio1 = reg.anio1;
                    END IF;
                    IF reg.anio2 > 100 THEN
                        _anio2 = 100;
                    ELSE
                        _anio2 = reg.anio2;
                    END IF;
                    IF reg.anio3 > 100 THEN
                        _anio3 = 100;
                    ELSE
                        _anio3 = reg.anio3;
                    END IF;
                    IF reg.anio4 > 100 THEN
                        _anio4 = 100;
                    ELSE
                        _anio4 = reg.anio4;
                    END IF;
                    insert into pomcas_num_table (
                        id_plan,
                        category_name,
                        tipo_de_plan,
                        codigo,
                        cuenca,
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        reg.id_plan,
                        reg.category_name,
                        reg.tipo_de_plan,
                        reg.codigo,
                        reg.cuenca,
                        _anio1,
                        _anio2,
                        _anio3,
                        _anio4
                    );
                end loop;
                
        RETURN QUERY 
        SELECT *
        from pomcas_num_table; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE pomcas_num_table;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_num_table(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, category_name character varying, tipo_de_plan character varying, codigo character varying, cuenca character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 double precision;
            _anio2 double precision;
            _anio3 double precision;
            _anio4 double precision;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS pomcas_num_table (
                id_plan bigint,
                category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            for reg in
                (SELECT * from public.pomcas_num(
                    p_pai_id,
                    p_year
                )
                UNION ALL
                SELECT * from public.pma_num(
                    p_pai_id,
                    p_year
                )
                UNION ALL
                SELECT * from public.pmm_num(
                    p_pai_id,
                    p_year
                ))
                   loop
                    IF reg.anio1 > 100 THEN
                        _anio1 = 100;
                    ELSE
                        _anio1 = reg.anio1;
                    END IF;
                    IF reg.anio2 > 100 THEN
                        _anio2 = 100;
                    ELSE
                        _anio2 = reg.anio2;
                    END IF;
                    IF reg.anio3 > 100 THEN
                        _anio3 = 100;
                    ELSE
                        _anio3 = reg.anio3;
                    END IF;
                    IF reg.anio4 > 100 THEN
                        _anio4 = 100;
                    ELSE
                        _anio4 = reg.anio4;
                    END IF;
                    insert into pomcas_num_table (
                        id_plan,
                        category_name,
                        tipo_de_plan,
                        codigo,
                        cuenca,
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        reg.id_plan,
                        reg.category_name,
                        reg.tipo_de_plan,
                        reg.codigo,
                        reg.cuenca,
                        _anio1,
                        _anio2,
                        _anio3,
                        _anio4
                    );
                end loop;
                
        RETURN QUERY 
        SELECT *
        from pomcas_num_table; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE pomcas_num_table;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_num_tot(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, category_name character varying, tipo_de_plan character varying, codigo character varying, cuenca character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table2 (
                id_plan bigint,
                category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.numerator) as anio1
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = 1
                    and ody2.year = 1
                    and ody3.year = 1
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.numerator is not null
                    and indicator_activities.year = 1
                    and groups.name like p_group_name
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio1 is null THEN
                        _anio1 = 0;
                    ELSE
                        _anio1 = reg.anio1;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            _anio1,
                            0,
                            0,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            anio1 = _anio1
                            --anio2 = 0,
                            --anio3 = 0,
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
            --CREATE TEMP TABLE IF NOT EXISTS anio1 AS
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.numerator) as anio2
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = 2
                    and ody2.year = 2
                    and ody3.year = 2
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.numerator is not null
                    and indicator_activities.year = 2
                    and groups.name like p_group_name
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio2 is null THEN
                        _anio2 = 0;
                    ELSE
                        _anio2 = reg.anio2;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            _anio2,
                            0,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            anio2 = _anio2
                            --anio3 = 0,
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
            for reg in
                (select
                    --indicator_activities.id as indicator_activities_id,
                    activities.id as indicator_activities_id,
                     variables.category_name,
                    activities.name,
                    --ody1.year as other_data_year,
                    --indicator_activities.year as indicatyor_acivities_year,
                    ody1.value as tipo_de_plan,
                    ody2.value as codigo,
                    ody3.value as cuenca,
                    sum(indicator_activities.numerator) as anio3
                    --ody4.value as area,
                    --ody5.value as estado
                    --ody6.value as estado2
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
                --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                inner join other_data_year ody1 on ody1.activity_id = activities.id
                inner join other_data od1 on od1.id = ody1.other_data_id
                inner join other_data_year ody2 on ody2.activity_id = activities.id
                inner join other_data od2 on od2.id = ody2.other_data_id
                inner join other_data_year ody3 on ody3.activity_id = activities.id
                inner join other_data od3 on od3.id = ody3.other_data_id
                /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                inner join other_data od4 on od4.id = ody4.other_data_id
                inner join other_data_year ody5 on ody5.activity_id = activities.id
                inner join other_data od5 on od5.id = ody5.other_data_id*/
                --inner join other_data_year ody6 on ody6.activity_id = activities.id
                --inner join other_data od6 on od6.id = ody6.other_data_id
                where
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and od1.variable_name like 'Tipo de plan'
                    and od2.variable_name like 'Código'
                    and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                    --and od4.variable_name like 'Área'
                    --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                    --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                    and ody1.year = 3
                    and ody2.year = 3
                    and ody3.year = 3
                    --and ody4.year = 4
                    --and ody5.year = 4
                    --and ody6.year = 2
                    --and ody1.value is not null
                    --and ody2.value is not null
                    --and ody3.value is not null
                    --and ody4.value is not null
                    --and ody5.value is not null
                    --and ody6.value is not null
                     --and indicator_activities.numerator is not null
                    and indicator_activities.year = 3
                    and groups.name like p_group_name
                    and strategic_lines.p_a_i_id = p_pai_id
                group by
                     activities.id,
                     variables.category_name,
                    activities.name,
                    ody1.value,
                    ody2.value,
                    ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio3 is null THEN
                        _anio3 = 0;
                    ELSE
                        _anio3 = reg.anio3;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            0,
                            _anio3,
                            0
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            --anio2 = 0,
                            anio3 = _anio3
                            --anio4 = 0
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
            for reg in
                (select
                        --indicator_activities.id as indicator_activities_id,
                        activities.id as indicator_activities_id,
                         variables.category_name,
                        activities.name,
                        --ody1.year as other_data_year,
                        --indicator_activities.year as indicatyor_acivities_year,
                        ody1.value as tipo_de_plan,
                        ody2.value as codigo,
                        ody3.value as cuenca,
                        sum(indicator_activities.numerator) as anio4
                        --ody4.value as area,
                        --ody5.value as estado
                        --ody6.value as estado2
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
                    --inner join other_data od1 on od1.indicator_id = indicator_activities.indicator_id
                    inner join other_data_year ody1 on ody1.activity_id = activities.id
                    inner join other_data od1 on od1.id = ody1.other_data_id
                    inner join other_data_year ody2 on ody2.activity_id = activities.id
                    inner join other_data od2 on od2.id = ody2.other_data_id
                    inner join other_data_year ody3 on ody3.activity_id = activities.id
                    inner join other_data od3 on od3.id = ody3.other_data_id
                    /*inner join other_data_year ody4 on ody4.activity_id = activities.id
                    inner join other_data od4 on od4.id = ody4.other_data_id
                    inner join other_data_year ody5 on ody5.activity_id = activities.id
                    inner join other_data od5 on od5.id = ody5.other_data_id*/
                    --inner join other_data_year ody6 on ody6.activity_id = activities.id
                    --inner join other_data od6 on od6.id = ody6.other_data_id
                    where
                        indicators.abbreviated_name like 'PAFP'
                        and variables.category_name like '%%POMCAS%%'
                        and od1.variable_name like 'Tipo de plan'
                        and od2.variable_name like 'Código'
                        and od3.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                        --and od4.variable_name like 'Área'
                        --and od5.variable_name like '%%Estado de avance a 31 de diciembre%%'
                        --and od6.variable_name like '%%Estado de avance a 31 de diciembre%%' and od6.variable_name like '%%(%)%%'
                        and ody1.year = 4
                        and ody2.year = 4
                        and ody3.year = 4
                        --and ody4.year = 4
                        --and ody5.year = 4
                        --and ody6.year = 2
                        --and ody1.value is not null
                        --and ody2.value is not null
                        --and ody3.value is not null
                        --and ody4.value is not null
                        --and ody5.value is not null
                        --and ody6.value is not null
                         --and indicator_activities.numerator is not null
                        and indicator_activities.year = 4
                        and groups.name like p_group_name
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by
                         activities.id,
                         variables.category_name,
                        activities.name,
                        ody1.value,
                        ody2.value,
                        ody3.value)
                   loop
                    register = (select count(*) from temp_table2 where temp_table2.id_plan = reg.indicator_activities_id);
                    RAISE NOTICE ' register: %', register;
                    IF reg.anio4 is null THEN
                        _anio4 = 0;
                    ELSE
                        _anio4 = reg.anio4;
                    END IF;
                    IF reg.tipo_de_plan is null THEN
                        _tipo_de_plan = '';
                    ELSE
                        _tipo_de_plan = reg.tipo_de_plan;
                    END IF;
                    IF reg.codigo is null THEN
                        _codigo = '';
                    ELSE
                        _codigo = reg.codigo;
                    END IF;
                    IF reg.cuenca is null THEN
                        _cuenca = '';
                    ELSE
                        _cuenca = reg.cuenca;
                    END IF;
                    IF register = 0 THEN
                        insert into temp_table2 (
                            id_plan,
                            category_name,
                            tipo_de_plan,
                            codigo,
                            cuenca,
                            anio1,
                            anio2,
                            anio3,
                            anio4
                        ) VALUES (
                            reg.indicator_activities_id,
                            reg.category_name,
                            _tipo_de_plan,
                            _codigo,
                            _cuenca,
                            0,
                            0,
                            0,
                            _anio4
                        );
                    ELSE
                        UPDATE temp_table2 SET
                            --id_plan = reg.indicator_activities_id,
                            --category_name = reg.category_name,
                            --tipo_de_plan = _tipo_de_plan,
                            --codigo = _codigo,
                            --cuenca = _cuenca,
                            --anio1 = 0,
                            --anio2 = 0,
                            --anio3 = 0,
                            anio4 = _anio4
                        WHERE temp_table2.id_plan = reg.indicator_activities_id;
                    END IF;
                    RAISE NOTICE ' num_rows: %', reg.name;
                end loop;
                
        RETURN QUERY 
        SELECT *
        from temp_table2; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table2;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_prog(
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
                        indicators.abbreviated_name like 'PAFP'
                        and indicator_activities.denominator is not null
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

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_prog_ejec(
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
                        indicators.abbreviated_name like 'PPEE'
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

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_res(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, tipo_de_plan character varying, codigo character varying, cuenca character varying, anio1 character varying, anio2 character varying, anio3 character varying, anio4 character varying) AS $$
        declare
            int_id integer := 0;
            result_anio1 character varying := 0;
            result_anio2 character varying := 0;
            result_anio3 character varying := 0;
            result_anio4 character varying := 0;
            reg Record;			
            cur_den cursor
                for SELECT * from public.pomcas_den(
                        p_pai_id, 
                        p_year
                    )
                    union all
                    SELECT * from public.pma_den(
                        p_group_name,
                        p_pai_id, 
                        p_year
                    )
                    union all
                    SELECT * from public.pmm_den(
                        p_group_name,
                        p_pai_id, 
                        p_year
                    );
                    
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table3 (
                id_plan bigint,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,
                anio1 character varying,
                anio2 character varying,
                anio3 character varying,
                anio4 character varying
            );
           
           open cur_den;
                   int_id = 0;
                LOOP
                    FETCH cur_den INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF reg.anio1 is null OR reg.anio1 = 0 THEN
                        result_anio1 = '0';
                    ELSE
                        result_anio1 = 100*(
                            SELECT pomcas_table.anio1 from (
                                SELECT * from public.pomcas_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                                union all
                                SELECT * from public.pma_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                                union all
                                SELECT * from public.pmm_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                            ) as pomcas_table
                            where pomcas_table.id_plan = reg.id_plan
                        )/reg.anio1;
                        IF result_anio1 is null THEN
                            result_anio1 = '0';
                        ELSIF CAST(result_anio1 as double precision) > 100 THEN
                            result_anio1 = 100;
                        ELSE
                            result_anio1 = result_anio1;
                        END IF;
                    END IF;
                    IF reg.anio2 is null OR reg.anio2 = 0 THEN
                        result_anio2 = '0';
                    ELSE
                        result_anio2 = 100*(
                            SELECT pomcas_table.anio2 from (
                                SELECT * from public.pomcas_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                                union all
                                SELECT * from public.pma_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                                union all
                                SELECT * from public.pmm_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                            ) as pomcas_table
                            where pomcas_table.id_plan = reg.id_plan
                        )/reg.anio2;
                        IF result_anio2 is null THEN
                            result_anio2 = '0';
                        ELSIF CAST(result_anio2 as double precision) > 100 THEN
                            result_anio2 = 100;
                        ELSE
                            result_anio2 = result_anio2;
                        END IF;
                    END IF;
                    IF reg.anio3 is null OR reg.anio3 = 0 THEN
                        result_anio3 = '0';
                    ELSE
                        result_anio3 = 100*(
                            SELECT pomcas_table.anio3 from (
                                SELECT * from public.pomcas_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                                union all
                                SELECT * from public.pma_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                                union all
                                SELECT * from public.pmm_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                            ) as pomcas_table
                            where pomcas_table.id_plan = reg.id_plan
                        )/reg.anio3;
                        IF result_anio3 is null THEN
                            result_anio3 = '0';
                        ELSIF CAST(result_anio3 as double precision) > 100 THEN
                            result_anio3 = 100;
                        ELSE
                            result_anio3 = result_anio3;
                        END IF;
                    END IF;
                    IF reg.anio4 is null OR reg.anio4 = 0 THEN
                        result_anio4 = '0';
                    ELSE
                        result_anio4 = 100*(
                            SELECT pomcas_table.anio4 from (
                                SELECT * from public.pomcas_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                                union all
                                SELECT * from public.pma_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                                union all
                                SELECT * from public.pmm_num(
                                    p_group_name,
                                    p_pai_id, 
                                    p_year
                                )
                            ) as pomcas_table
                            where pomcas_table.id_plan = reg.id_plan
                        )/reg.anio4;
                        IF result_anio4 is null THEN
                            result_anio4 = '0';
                        ELSIF CAST(result_anio4 as double precision) > 100 THEN
                            result_anio4 = 100;
                        ELSE
                            result_anio4 = result_anio4;
                        END IF;
                    END IF;
                    insert into temp_table3 (
                        id_plan,
                        tipo_de_plan,
                        codigo,
                        cuenca,
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    )
                    values ( 
                        reg.id_plan,
                        reg.tipo_de_plan,
                        reg.codigo,
                        reg.cuenca,
                        CAST(result_anio1 as varchar),
                        CAST(result_anio2 as varchar),
                        CAST(result_anio3 as varchar),
                        CAST(result_anio4 as varchar)
                        /*CONCAT(CAST(ROUND(CAST(result_anio1 AS NUMERIC),2) AS varchar), '%'),
                        CONCAT(CAST(ROUND(CAST(result_anio2 AS NUMERIC),2) AS varchar), '%'),
                        CONCAT(CAST(ROUND(CAST(result_anio3 AS NUMERIC),2) AS varchar), '%'),
                        CONCAT(CAST(ROUND(CAST(result_anio4 AS NUMERIC),2) AS varchar), '%')*/
                    );
                    --WHERE temp_table2.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
            close cur_den;
           
        RETURN QUERY 
        SELECT *
        from temp_table3; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table3;
        
        end;
        
        $$ language plpgsql;");
		
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_tot(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
            tot_rows integer := 0;
            total_pomcas1 double precision := 0;
            total_pomcas2 double precision := 0;
            total_pomcas3 double precision := 0;
            total_pomcas4 double precision := 0;
            
            cur_pomcas_tot_den cursor
                for SELECT * from public.pomcas_tot_den(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    );
                    
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table4 (
                /*id_plan bigint,
                category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,*/
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            open cur_pomcas_tot_den;
                LOOP
                    FETCH cur_pomcas_tot_den INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = (SELECT tab_aux.anio1 from (SELECT pomcas_tot_num.id_plan, pomcas_tot_num.anio1 from public.pomcas_tot_num(
                                    p_group_name, 
                                    p_pai_id, 
                                    p_year
                                )) as tab_aux where tab_aux.id_plan = reg.id_plan);
                    total_pomcas2 = (SELECT tab_aux.anio2 from (SELECT pomcas_tot_num.id_plan, pomcas_tot_num.anio2 from public.pomcas_tot_num(
                                    p_group_name, 
                                    p_pai_id, 
                                    p_year
                                )) as tab_aux where tab_aux.id_plan = reg.id_plan);
                    total_pomcas3 = (SELECT tab_aux.anio3 from (SELECT pomcas_tot_num.id_plan, pomcas_tot_num.anio3 from public.pomcas_tot_num(
                                    p_group_name, 
                                    p_pai_id, 
                                    p_year
                                )) as tab_aux where tab_aux.id_plan = reg.id_plan);
                    total_pomcas4 = (SELECT tab_aux.anio4 from (SELECT pomcas_tot_num.id_plan, pomcas_tot_num.anio4 from public.pomcas_tot_num(
                                    p_group_name, 
                                    p_pai_id, 
                                    p_year
                                )) as tab_aux where tab_aux.id_plan = reg.id_plan);
                    RAISE NOTICE 'total_pomcas1: %, total_pomcas2: %', total_pomcas1, reg.anio1;
                    IF reg.anio1 = 0 THEN
                        total_pomcas1 = 0;
                    ELSE
                        total_pomcas1 = total_pomcas1 / reg.anio1;
                    END IF;
                    IF reg.anio2 = 0 THEN
                        total_pomcas2 = 0;
                    ELSE
                        total_pomcas2 = total_pomcas2 / reg.anio2;
                        END IF;
                    IF reg.anio3 = 0 THEN
                        total_pomcas3 = 0;
                    ELSE
                        total_pomcas3 = total_pomcas3 / reg.anio3;
                    END IF;
                    IF reg.anio4 = 0 THEN
                        total_pomcas4 = 0;
                    ELSE
                        total_pomcas4 = total_pomcas4 / reg.anio4;
                    END IF;
                    int_id = int_id + 1;
                    
                    insert into temp_table4 (
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        total_pomcas1,
                        total_pomcas2,
                        total_pomcas3,
                        total_pomcas4
                    );
                END LOOP;
                /*insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );*/
               close cur_pomcas_tot_den;
           
               /*open cur_plan_pma_tot;
                tot_rows = (SELECT count(*) from public.pma_den(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pma_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
               close cur_plan_pma_tot;
                
            open cur_plan_pmm_tot;
                tot_rows = (SELECT count(*) from public.pmm_den(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pmm_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
               close cur_plan_pmm_tot;*/
            
        RETURN QUERY 
        SELECT *
        from temp_table4; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table4;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_tot(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
            tot_rows integer := 0;
            total_pomcas1 double precision := 0;
            total_pomcas2 double precision := 0;
            total_pomcas3 double precision := 0;
            total_pomcas4 double precision := 0;
            
            cur_pomcas_tot_den cursor
                for SELECT * from public.pomcas_tot_den(
                        p_pai_id, 
                        p_year
                    );
                    
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table4 (
                /*id_plan bigint,
                category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,*/
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            open cur_pomcas_tot_den;
                LOOP
                    FETCH cur_pomcas_tot_den INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = (SELECT tab_aux.anio1 from (SELECT pomcas_tot_num.id_plan, pomcas_tot_num.anio1 from public.pomcas_tot_num(
                                    p_pai_id, 
                                    p_year
                                )) as tab_aux where tab_aux.id_plan = reg.id_plan);
                    total_pomcas2 = (SELECT tab_aux.anio2 from (SELECT pomcas_tot_num.id_plan, pomcas_tot_num.anio2 from public.pomcas_tot_num(
                                    p_pai_id, 
                                    p_year
                                )) as tab_aux where tab_aux.id_plan = reg.id_plan);
                    total_pomcas3 = (SELECT tab_aux.anio3 from (SELECT pomcas_tot_num.id_plan, pomcas_tot_num.anio3 from public.pomcas_tot_num(
                                    p_pai_id, 
                                    p_year
                                )) as tab_aux where tab_aux.id_plan = reg.id_plan);
                    total_pomcas4 = (SELECT tab_aux.anio4 from (SELECT pomcas_tot_num.id_plan, pomcas_tot_num.anio4 from public.pomcas_tot_num(
                                    p_pai_id, 
                                    p_year
                                )) as tab_aux where tab_aux.id_plan = reg.id_plan);
                    RAISE NOTICE 'total_pomcas1: %, total_pomcas2: %', total_pomcas1, reg.anio1;
                    IF reg.anio1 = 0 THEN
                        total_pomcas1 = 0;
                    ELSE
                        total_pomcas1 = total_pomcas1 / reg.anio1;
                    END IF;
                    IF reg.anio2 = 0 THEN
                        total_pomcas2 = 0;
                    ELSE
                        total_pomcas2 = total_pomcas2 / reg.anio2;
                        END IF;
                    IF reg.anio3 = 0 THEN
                        total_pomcas3 = 0;
                    ELSE
                        total_pomcas3 = total_pomcas3 / reg.anio3;
                    END IF;
                    IF reg.anio4 = 0 THEN
                        total_pomcas4 = 0;
                    ELSE
                        total_pomcas4 = total_pomcas4 / reg.anio4;
                    END IF;
                    int_id = int_id + 1;
                    
                    insert into temp_table4 (
                        anio1,
                        anio2,
                        anio3,
                        anio4
                    ) VALUES (
                        total_pomcas1,
                        total_pomcas2,
                        total_pomcas3,
                        total_pomcas4
                    );
                END LOOP;
                /*insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );*/
               close cur_pomcas_tot_den;
           
               /*open cur_plan_pma_tot;
                tot_rows = (SELECT count(*) from public.pma_den(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pma_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
               close cur_plan_pma_tot;
                
            open cur_plan_pmm_tot;
                tot_rows = (SELECT count(*) from public.pmm_den(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pmm_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    int_id = int_id + 1;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
               close cur_plan_pmm_tot;*/
            
        RETURN QUERY 
        SELECT *
        from temp_table4; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table4;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_tot_den(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
            tot_rows integer := 0;
            total_pomcas1 integer := 0;
            total_pomcas2 integer := 0;
            total_pomcas3 integer := 0;
            total_pomcas4 integer := 0;
            
            cur_plan_pomcas_tot cursor
                for SELECT * from public.pomcas_den_tot(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pma_tot cursor
                for SELECT * from public.pma_den(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pmm_tot cursor
                for SELECT * from public.pmm_den(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    );
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table3 (
                id_plan bigint,
                /*category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,*/
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            open cur_plan_pomcas_tot;
                tot_rows = (SELECT count(*) from public.pomcas_den(
                        p_pai_id, 
                        p_year
                    ));
                LOOP
                    FETCH cur_plan_pomcas_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pomcas_tot;
           
               open cur_plan_pma_tot;
                tot_rows = (SELECT count(*) from public.pma_den(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pma_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pma_tot;
                
            open cur_plan_pmm_tot;
                tot_rows = (SELECT count(*) from public.pmm_den(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pmm_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pmm_tot;
            
        RETURN QUERY 
        SELECT *
        from temp_table3; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table3;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_tot_den(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
            tot_rows integer := 0;
            total_pomcas1 integer := 0;
            total_pomcas2 integer := 0;
            total_pomcas3 integer := 0;
            total_pomcas4 integer := 0;
            
            cur_plan_pomcas_tot cursor
                for SELECT * from public.pomcas_den(
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pma_tot cursor
                for SELECT * from public.pma_den(
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pmm_tot cursor
                for SELECT * from public.pmm_den(
                        p_pai_id, 
                        p_year
                    );
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table3 (
                id_plan bigint,
                /*category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,*/
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            open cur_plan_pomcas_tot;
                tot_rows = (SELECT count(*) from public.pomcas_den(
                        p_pai_id, 
                        p_year
                    ));
                LOOP
                    FETCH cur_plan_pomcas_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pomcas_tot;
           
               open cur_plan_pma_tot;
                tot_rows = (SELECT count(*) from public.pma_den(
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pma_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pma_tot;
                
            open cur_plan_pmm_tot;
                tot_rows = (SELECT count(*) from public.pmm_den(
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pmm_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pmm_tot;
            
        RETURN QUERY 
        SELECT *
        from temp_table3; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table3;
        
        end;
        
        $$ language plpgsql;");
				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_tot_ejec(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
            tot_rows integer := 0;
            total_pomcas1 double precision := 0;
            total_pomcas2 double precision := 0;
            total_pomcas3 double precision := 0;
            total_pomcas4 double precision := 0;
            
            cur_plan_pomcas_tot cursor
                for SELECT
                        sum(pomcas_den_ejec.anio1) as anio1,
                        sum(pomcas_den_ejec.anio2) as anio2,
                        sum(pomcas_den_ejec.anio3) as anio3,
                        sum(pomcas_den_ejec.anio4) as anio4
                    from public.pomcas_den_ejec(
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pma_tot cursor
                for SELECT
                        sum(pma_den_ejec.anio1) as anio1,
                        sum(pma_den_ejec.anio2) as anio2,
                        sum(pma_den_ejec.anio3) as anio3,
                        sum(pma_den_ejec.anio4) as anio4
                    from public.pma_den_ejec(
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pmm_tot cursor
                for SELECT
                        sum(pmm_den_ejec.anio1) as anio1,
                        sum(pmm_den_ejec.anio2) as anio2,
                        sum(pmm_den_ejec.anio3) as anio3,
                        sum(pmm_den_ejec.anio4) as anio4
                    from public.pmm_den_ejec(
                        p_pai_id, 
                        p_year
                    );
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table3 (
                --id_plan bigint,
                /*category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,*/
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            open cur_plan_pomcas_tot;
                tot_rows = (SELECT count(*) from public.pomcas_den(
                        p_pai_id, 
                        p_year
                    ));
                LOOP
                    FETCH cur_plan_pomcas_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF reg.anio1 = 0 THEN
                        total_pomcas1 = 0;
                    ELSE
                        total_pomcas1 = (SELECT sum(pomcas_num_ejec.anio1) from public.pomcas_num_ejec(
                                            p_pai_id, 
                                            1
                                        )) / reg.anio1;
                    END IF;
                    IF reg.anio2 = 0 THEN
                        total_pomcas2 = 0;
                    ELSE
                        total_pomcas2 = (SELECT sum(pomcas_num_ejec.anio2) from public.pomcas_num_ejec(
                                            p_pai_id, 
                                            2
                                        )) / reg.anio2;
                    END IF;
                    IF reg.anio3 = 0 THEN
                        total_pomcas3 = 0;
                    ELSE
                        total_pomcas3 = (SELECT sum(pomcas_num_ejec.anio3) from public.pomcas_num_ejec(
                                            p_pai_id, 
                                            3
                                        )) / reg.anio3;
                    END IF;
                    IF reg.anio4 = 0 THEN
                        total_pomcas4 = 0;
                    ELSE
                        total_pomcas4 = (SELECT sum(pomcas_num_ejec.anio4) from public.pomcas_num_ejec(
                                            p_pai_id, 
                                            4
                                        )) / reg.anio4;
                    END IF;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pomcas_tot;
           
               open cur_plan_pma_tot;
                tot_rows = (SELECT count(*) from public.pma_den_ejec(
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pma_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF reg.anio1 = 0 THEN
                        total_pomcas1 = 0;
                    ELSE
                        total_pomcas1 = (SELECT sum(pma_num_ejec.anio1) from public.pma_num_ejec(
                                            p_pai_id, 
                                            1
                                        )) / reg.anio1;
                    END IF;
                    IF reg.anio2 = 0 THEN
                        total_pomcas2 = 0;
                    ELSE
                        total_pomcas2 = (SELECT sum(pma_num_ejec.anio2) from public.pma_num_ejec(
                                            p_pai_id, 
                                            2
                                        )) / reg.anio2;
                    END IF;
                    IF reg.anio3 = 0 THEN
                        total_pomcas3 = 0;
                    ELSE
                        total_pomcas3 = (SELECT sum(pma_num_ejec.anio3) from public.pma_num_ejec(
                                            p_pai_id, 
                                            3
                                        )) / reg.anio3;
                    END IF;
                    IF reg.anio4 = 0 THEN
                        total_pomcas4 = 0;
                    ELSE
                        total_pomcas4 = (SELECT sum(pma_num_ejec.anio4) from public.pma_num_ejec(
                                            p_pai_id, 
                                            4
                                        )) / reg.anio4;
                    END IF;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pma_tot;
                
            open cur_plan_pmm_tot;
                tot_rows = (SELECT count(*) from public.pmm_den(
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pmm_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF reg.anio1 = 0 THEN
                        total_pomcas1 = 0;
                    ELSE
                        total_pomcas1 = (SELECT sum(pmm_num_ejec.anio1) from public.pmm_num_ejec(
                                            p_pai_id, 
                                            1
                                        )) / reg.anio1;
                    END IF;
                    IF reg.anio2 = 0 THEN
                        total_pomcas2 = 0;
                    ELSE
                        total_pomcas2 = (SELECT sum(pmm_num_ejec.anio2) from public.pmm_num_ejec(
                                            p_pai_id, 
                                            2
                                        )) / reg.anio2;
                    END IF;
                    IF reg.anio3 = 0 THEN
                        total_pomcas3 = 0;
                    ELSE
                        total_pomcas3 = (SELECT sum(pmm_num_ejec.anio3) from public.pmm_num_ejec(
                                            p_pai_id, 
                                            3
                                        )) / reg.anio3;
                    END IF;
                    IF reg.anio4 = 0 THEN
                        total_pomcas4 = 0;
                    ELSE
                        total_pomcas4 = (SELECT sum(pmm_num_ejec.anio4) from public.pmm_num_ejec(
                                            p_pai_id, 
                                            4
                                        )) / reg.anio4;
                    END IF;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pmm_tot;
            
        RETURN QUERY 
        SELECT *
        from temp_table3; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table3;
        
        end;
        
        $$ language plpgsql;");
        				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_tot_ejec_round(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
            tot_rows integer := 0;
            total_pomcas1 double precision := 0;
            total_pomcas2 double precision := 0;
            total_pomcas3 double precision := 0;
            total_pomcas4 double precision := 0;
            
            cur_plan_pomcas_tot cursor
                for SELECT
                        sum(pomcas_den_ejec.anio1) as anio1,
                        sum(pomcas_den_ejec.anio2) as anio2,
                        sum(pomcas_den_ejec.anio3) as anio3,
                        sum(pomcas_den_ejec.anio4) as anio4
                    from public.pomcas_den_ejec(
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pma_tot cursor
                for SELECT
                        sum(pma_den_ejec.anio1) as anio1,
                        sum(pma_den_ejec.anio2) as anio2,
                        sum(pma_den_ejec.anio3) as anio3,
                        sum(pma_den_ejec.anio4) as anio4
                    from public.pma_den_ejec(
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pmm_tot cursor
                for SELECT
                        sum(pmm_den_ejec.anio1) as anio1,
                        sum(pmm_den_ejec.anio2) as anio2,
                        sum(pmm_den_ejec.anio3) as anio3,
                        sum(pmm_den_ejec.anio4) as anio4
                    from public.pmm_den_ejec(
                        p_pai_id, 
                        p_year
                    );
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table3 (
                --id_plan bigint,
                /*category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,*/
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            open cur_plan_pomcas_tot;
                tot_rows = (SELECT count(*) from public.pomcas_den(
                        p_pai_id, 
                        p_year
                    ));
                LOOP
                    FETCH cur_plan_pomcas_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF reg.anio1 = 0 THEN
                        total_pomcas1 = 0;
                    ELSE
                        total_pomcas1 = (SELECT sum(pomcas_num_ejec.anio1) from public.pomcas_num_ejec(
                                            p_pai_id, 
                                            1
                                        )) / reg.anio1;
                    END IF;
                    IF reg.anio2 = 0 THEN
                        total_pomcas2 = 0;
                    ELSE
                        total_pomcas2 = (SELECT sum(pomcas_num_ejec.anio2) from public.pomcas_num_ejec(
                                            p_pai_id, 
                                            2
                                        )) / reg.anio2;
                    END IF;
                    IF reg.anio3 = 0 THEN
                        total_pomcas3 = 0;
                    ELSE
                        total_pomcas3 = (SELECT sum(pomcas_num_ejec.anio3) from public.pomcas_num_ejec(
                                            p_pai_id, 
                                            3
                                        )) / reg.anio3;
                    END IF;
                    IF reg.anio4 = 0 THEN
                        total_pomcas4 = 0;
                    ELSE
                        total_pomcas4 = (SELECT sum(pomcas_num_ejec.anio4) from public.pomcas_num_ejec(
                                            p_pai_id, 
                                            4
                                        )) / reg.anio4;
                    END IF;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                IF total_pomcas1 > 1 THEN
                    total_pomcas1 = 1;
                END IF;
                IF total_pomcas2 > 1 THEN
                    total_pomcas2 = 1;
                END IF;
                IF total_pomcas2 > 1 THEN
                    total_pomcas3 = 1;
                END IF;
                IF total_pomcas3 > 1 THEN
                    total_pomcas4 = 1;
                END IF;
                insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pomcas_tot;
           
               open cur_plan_pma_tot;
                tot_rows = (SELECT count(*) from public.pma_den_ejec(
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pma_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF reg.anio1 = 0 THEN
                        total_pomcas1 = 0;
                    ELSE
                        total_pomcas1 = (SELECT sum(pma_num_ejec.anio1) from public.pma_num_ejec(
                                            p_pai_id, 
                                            1
                                        )) / reg.anio1;
                    END IF;
                    IF reg.anio2 = 0 THEN
                        total_pomcas2 = 0;
                    ELSE
                        total_pomcas2 = (SELECT sum(pma_num_ejec.anio2) from public.pma_num_ejec(
                                            p_pai_id, 
                                            2
                                        )) / reg.anio2;
                    END IF;
                    IF reg.anio3 = 0 THEN
                        total_pomcas3 = 0;
                    ELSE
                        total_pomcas3 = (SELECT sum(pma_num_ejec.anio3) from public.pma_num_ejec(
                                            p_pai_id, 
                                            3
                                        )) / reg.anio3;
                    END IF;
                    IF reg.anio4 = 0 THEN
                        total_pomcas4 = 0;
                    ELSE
                        total_pomcas4 = (SELECT sum(pma_num_ejec.anio4) from public.pma_num_ejec(
                                            p_pai_id, 
                                            4
                                        )) / reg.anio4;
                    END IF;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                IF total_pomcas1 > 1 THEN
                    total_pomcas1 = 1;
                END IF;
                IF total_pomcas2 > 1 THEN
                    total_pomcas2 = 1;
                END IF;
                IF total_pomcas2 > 1 THEN
                    total_pomcas3 = 1;
                END IF;
                IF total_pomcas3 > 1 THEN
                    total_pomcas4 = 1;
                END IF;
                insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pma_tot;
                
            open cur_plan_pmm_tot;
                tot_rows = (SELECT count(*) from public.pmm_den(
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pmm_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF reg.anio1 = 0 THEN
                        total_pomcas1 = 0;
                    ELSE
                        total_pomcas1 = (SELECT sum(pmm_num_ejec.anio1) from public.pmm_num_ejec(
                                            p_pai_id, 
                                            1
                                        )) / reg.anio1;
                    END IF;
                    IF reg.anio2 = 0 THEN
                        total_pomcas2 = 0;
                    ELSE
                        total_pomcas2 = (SELECT sum(pmm_num_ejec.anio2) from public.pmm_num_ejec(
                                            p_pai_id, 
                                            2
                                        )) / reg.anio2;
                    END IF;
                    IF reg.anio3 = 0 THEN
                        total_pomcas3 = 0;
                    ELSE
                        total_pomcas3 = (SELECT sum(pmm_num_ejec.anio3) from public.pmm_num_ejec(
                                            p_pai_id, 
                                            3
                                        )) / reg.anio3;
                    END IF;
                    IF reg.anio4 = 0 THEN
                        total_pomcas4 = 0;
                    ELSE
                        total_pomcas4 = (SELECT sum(pmm_num_ejec.anio4) from public.pmm_num_ejec(
                                            p_pai_id, 
                                            4
                                        )) / reg.anio4;
                    END IF;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                IF total_pomcas1 > 1 THEN
                    total_pomcas1 = 1;
                END IF;
                IF total_pomcas2 > 1 THEN
                    total_pomcas2 = 1;
                END IF;
                IF total_pomcas2 > 1 THEN
                    total_pomcas3 = 1;
                END IF;
                IF total_pomcas3 > 1 THEN
                    total_pomcas4 = 1;
                END IF;
                insert into temp_table3 (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pmm_tot;
            
        RETURN QUERY 
        SELECT *
        from temp_table3; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table3;
        
        end;
        
        $$ language plpgsql;");
        				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_tot_num(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
            tot_rows integer := 0;
            total_pomcas1 integer := 0;
            total_pomcas2 integer := 0;
            total_pomcas3 integer := 0;
            total_pomcas4 integer := 0;
            
            cur_plan_pomcas_tot cursor
                for SELECT * from public.pomcas_num_tot(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pma_tot cursor
                for SELECT * from public.pma_num(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pmm_tot cursor
                for SELECT * from public.pmm_num(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    );
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table3 (
                id_plan bigint,
                /*category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,*/
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            open cur_plan_pomcas_tot;
                tot_rows = (SELECT count(*) from public.pomcas_den(
                        p_pai_id, 
                        p_year
                    ));
                LOOP
                    FETCH cur_plan_pomcas_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pomcas_tot;
           
               open cur_plan_pma_tot;
                tot_rows = (SELECT count(*) from public.pma_den(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pma_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pma_tot;
                
            open cur_plan_pmm_tot;
                tot_rows = (SELECT count(*) from public.pmm_den(
                        p_group_name, 
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pmm_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pmm_tot;
            
        RETURN QUERY 
        SELECT *
        from temp_table3; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table3;
        
        end;
        
        $$ language plpgsql;");
        				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_tot_num(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            reg Record;
            reg_anio1 Record;
            int_id integer := 1;
            anio integer := 1;
            num_rows integer := 0; 
            loop_rows integer := 1;
            register integer := 0;
            _tipo_de_plan character varying;
            _codigo varchar;
            _cuenca varchar;
            _anio1 integer;
            _anio2 integer;
            _anio3 integer;
            _anio4 integer;
            tot_rows integer := 0;
            total_pomcas1 integer := 0;
            total_pomcas2 integer := 0;
            total_pomcas3 integer := 0;
            total_pomcas4 integer := 0;
            
            cur_plan_pomcas_tot cursor
                for SELECT * from public.pomcas_num(
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pma_tot cursor
                for SELECT * from public.pma_num(
                        p_pai_id, 
                        p_year
                    );
                    
            cur_plan_pmm_tot cursor
                for SELECT * from public.pmm_num(
                        p_pai_id, 
                        p_year
                    );
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table3 (
                id_plan bigint,
                /*category_name character varying,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,*/
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
        
            open cur_plan_pomcas_tot;
                tot_rows = (SELECT count(*) from public.pomcas_den(
                        p_pai_id, 
                        p_year
                    ));
                LOOP
                    FETCH cur_plan_pomcas_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pomcas_tot;
           
               open cur_plan_pma_tot;
                tot_rows = (SELECT count(*) from public.pma_den(
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pma_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pma_tot;
                
            open cur_plan_pmm_tot;
                tot_rows = (SELECT count(*) from public.pmm_den(
                        p_pai_id, 
                        p_year
                    ));
                total_pomcas1 = 0;
                total_pomcas2 = 0;
                total_pomcas3 = 0;
                total_pomcas4 = 0;
                LOOP
                    FETCH cur_plan_pmm_tot INTO reg;
                    EXIT WHEN NOT FOUND;
                    total_pomcas1 = total_pomcas1 + reg.anio1;
                    total_pomcas2 = total_pomcas2 + reg.anio2;
                    total_pomcas3 = total_pomcas3 + reg.anio3;
                    total_pomcas4 = total_pomcas4 + reg.anio4;
                    --RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
                insert into temp_table3 (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    total_pomcas1,
                    total_pomcas2,
                    total_pomcas3,
                    total_pomcas4
                );
                int_id = int_id + 1;
               close cur_plan_pmm_tot;
            
        RETURN QUERY 
        SELECT *
        from temp_table3; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table3;
        
        end;
        
        $$ language plpgsql;");
        				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_totales(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, anio1 character varying, anio2 character varying, anio3 character varying, anio4 character varying) AS $$
        declare
            int_id integer := 1;
            anio integer := 1;
            result_anio1 double precision := 0;
            result_anio2 double precision := 0;
            result_anio3 double precision := 0;
            result_anio4 double precision := 0;
            pomcas_weigh double precision := 0;
            pma_weigh double precision := 0;
            pmm_weigh double precision := 0;
            reg Record;			
            cur_totales cursor
                for SELECT * from public.pomcas_tot(
                    p_group_name,
                    p_pai_id, 
                    p_year
                );
            
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS pomcas_totales (
                id_plan bigint,
                --tipo_de_plan character varying,
                --codigo character varying,
                --cuenca character varying,
                anio1 character varying,
                anio2 character varying,
                anio3 character varying,
                anio4 character varying
            );
                
           open cur_totales;
                LOOP
                    FETCH cur_totales INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF int_id = 1 THEN
                        IF pomcas_weigh is null THEN
                            result_anio1 = result_anio1 + 0;
                            result_anio2 = result_anio2 + 0;
                            result_anio3 = result_anio3 + 0;
                            result_anio4 = result_anio4 + 0;
                        ELSE
                            result_anio1 = result_anio1 + reg.anio1*(SELECT public.pomcas_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                1
                                                            ));
                            result_anio2 = result_anio2 + reg.anio2*(SELECT public.pomcas_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                2
                                                            ));
                            result_anio3 = result_anio3 + reg.anio3*(SELECT public.pomcas_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                3
                                                            ));
                            result_anio4 = result_anio4 + reg.anio4*(SELECT public.pomcas_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                4
                                                            ));
                        END IF;
                        int_id = int_id + 1;
                        RAISE NOTICE 'total1: %, total2: %', reg.anio1, pomcas_weigh;
                        RAISE NOTICE 'totales1: %', result_anio1;
                    ELSIF int_id = 2 THEN
                        IF pma_weigh is null THEN
                            result_anio1 = result_anio1 + 0;
                            result_anio2 = result_anio2 + 0;
                            result_anio3 = result_anio3 + 0;
                            result_anio4 = result_anio4 + 0;
                        ELSE
                            result_anio1 = result_anio1 + reg.anio1*(SELECT public.pma_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                1
                                                            ));
                            result_anio2 = result_anio2 + reg.anio2*(SELECT public.pma_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                2
                                                            ));
                            result_anio3 = result_anio3 + reg.anio3*(SELECT public.pma_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                3
                                                            ));
                            result_anio4 = result_anio4 + reg.anio4*(SELECT public.pma_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                4
                                                            ));
                        END IF;
                        int_id = int_id + 1;
                        RAISE NOTICE 'total1: %, total2: %', reg.anio1, pomcas_weigh;
                        RAISE NOTICE 'totales1: %', result_anio1;
                    ELSE
                        IF pmm_weigh is null THEN
                            result_anio1 = result_anio1 + 0;
                            result_anio2 = result_anio2 + 0;
                            result_anio3 = result_anio3 + 0;
                            result_anio4 = result_anio4 + 0;
                        ELSE
                            result_anio1 = result_anio1 + reg.anio1*(SELECT public.pmm_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                1
                                                            ));
                            result_anio2 = result_anio2 + reg.anio2*(SELECT public.pmm_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                2
                                                            ));
                            result_anio3 = result_anio3 + reg.anio3*(SELECT public.pmm_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                3
                                                            ));
                            result_anio4 = result_anio4 + reg.anio4*(SELECT public.pmm_weigh(
                                                                p_group_name, 
                                                                p_pai_id, 
                                                                p_year, 
                                                                4
                                                            ));
                        END IF;
                        int_id = int_id + 1;
                    END IF;
                END LOOP;
                insert into pomcas_totales (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    result_anio1/100,
                    result_anio2/100,
                    result_anio3/100,
                    result_anio4/100
                );
            close cur_totales;
           
        RETURN QUERY 
        SELECT *
        from pomcas_totales; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE pomcas_totales;
        
        end;
        
        $$ language plpgsql;");
        				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_totales(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, anio1 character varying, anio2 character varying, anio3 character varying, anio4 character varying) AS $$
        declare
            int_id integer := 1;
            anio integer := 1;
            result_anio1 double precision := 0;
            result_anio2 double precision := 0;
            result_anio3 double precision := 0;
            result_anio4 double precision := 0;
            pomcas_weigh double precision := 0;
            pma_weigh double precision := 0;
            pmm_weigh double precision := 0;
            reg Record;			
            cur_totales cursor
                for SELECT * from public.pomcas_tot(
                    p_pai_id, 
                    p_year
                );
            
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS pomcas_totales (
                id_plan bigint,
                --tipo_de_plan character varying,
                --codigo character varying,
                --cuenca character varying,
                anio1 character varying,
                anio2 character varying,
                anio3 character varying,
                anio4 character varying
            );
                
           open cur_totales;
                LOOP
                    FETCH cur_totales INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF int_id = 1 THEN
                        IF pomcas_weigh is null THEN
                            result_anio1 = result_anio1 + 0;
                            result_anio2 = result_anio2 + 0;
                            result_anio3 = result_anio3 + 0;
                            result_anio4 = result_anio4 + 0;
                        ELSE
                            result_anio1 = result_anio1 + reg.anio1*(SELECT public.pomcas_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                1
                                                            ));
                            result_anio2 = result_anio2 + reg.anio2*(SELECT public.pomcas_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                2
                                                            ));
                            result_anio3 = result_anio3 + reg.anio3*(SELECT public.pomcas_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                3
                                                            ));
                            result_anio4 = result_anio4 + reg.anio4*(SELECT public.pomcas_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                4
                                                            ));
                        END IF;
                        int_id = int_id + 1;
                        RAISE NOTICE 'total1: %, total2: %', reg.anio1, pomcas_weigh;
                        RAISE NOTICE 'totales1: %', result_anio1;
                    ELSIF int_id = 2 THEN
                        IF pma_weigh is null THEN
                            result_anio1 = result_anio1 + 0;
                            result_anio2 = result_anio2 + 0;
                            result_anio3 = result_anio3 + 0;
                            result_anio4 = result_anio4 + 0;
                        ELSE
                            result_anio1 = result_anio1 + reg.anio1*(SELECT public.pma_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                1
                                                            ));
                            result_anio2 = result_anio2 + reg.anio2*(SELECT public.pma_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                2
                                                            ));
                            result_anio3 = result_anio3 + reg.anio3*(SELECT public.pma_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                3
                                                            ));
                            result_anio4 = result_anio4 + reg.anio4*(SELECT public.pma_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                4
                                                            ));
                        END IF;
                        int_id = int_id + 1;
                        RAISE NOTICE 'total1: %, total2: %', reg.anio1, pomcas_weigh;
                        RAISE NOTICE 'totales1: %', result_anio1;
                    ELSE
                        IF pmm_weigh is null THEN
                            result_anio1 = result_anio1 + 0;
                            result_anio2 = result_anio2 + 0;
                            result_anio3 = result_anio3 + 0;
                            result_anio4 = result_anio4 + 0;
                        ELSE
                            result_anio1 = result_anio1 + reg.anio1*(SELECT public.pmm_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                1
                                                            ));
                            result_anio2 = result_anio2 + reg.anio2*(SELECT public.pmm_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                2
                                                            ));
                            result_anio3 = result_anio3 + reg.anio3*(SELECT public.pmm_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                3
                                                            ));
                            result_anio4 = result_anio4 + reg.anio4*(SELECT public.pmm_weigh(
                                                                p_pai_id, 
                                                                p_year, 
                                                                4
                                                            ));
                        END IF;
                        int_id = int_id + 1;
                    END IF;
                END LOOP;
                insert into pomcas_totales (
                    id_plan,
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    int_id,
                    result_anio1/100,
                    result_anio2/100,
                    result_anio3/100,
                    result_anio4/100
                );
            close cur_totales;
           
        RETURN QUERY 
        SELECT *
        from pomcas_totales; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE pomcas_totales;
        
        end;
        
        $$ language plpgsql;");
        				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_totales_ejec(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        declare
            int_id integer := 1;
            anio integer := 1;
            result_anio1 double precision := 0;
            result_anio2 double precision := 0;
            result_anio3 double precision := 0;
            result_anio4 double precision := 0;
            pomcas_weigh double precision := 0;
            pma_weigh double precision := 0;
            pmm_weigh double precision := 0;
            reg Record;			
            cur_totales cursor
                for SELECT * from public.pomcas_tot_ejec(
                    p_pai_id, 
                    p_year
                );
            
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS pomcas_totales (
                --tipo_de_plan character varying,
                --codigo character varying,
                --cuenca character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
                
           open cur_totales;
                LOOP
                    FETCH cur_totales INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF int_id = 1 THEN
                        IF pomcas_weigh is null THEN
                            result_anio1 = result_anio1 + 0;
                            result_anio2 = result_anio2 + 0;
                            result_anio3 = result_anio3 + 0;
                            result_anio4 = result_anio4 + 0;
                        ELSE
                            result_anio1 = result_anio1 + reg.anio1*(SELECT public.pomcas_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                1
                                                            ));
                            result_anio2 = result_anio2 + reg.anio2*(SELECT public.pomcas_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                2
                                                            ));
                            result_anio3 = result_anio3 + reg.anio3*(SELECT public.pomcas_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                3
                                                            ));
                            result_anio4 = result_anio4 + reg.anio4*(SELECT public.pomcas_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                4
                                                            ));
                        END IF;
                        int_id = int_id + 1;
                        RAISE NOTICE 'total1: %, total2: %', reg.anio1, pomcas_weigh;
                        RAISE NOTICE 'totales1: %', result_anio1;
                    ELSIF int_id = 2 THEN
                        IF pma_weigh is null THEN
                            result_anio1 = result_anio1 + 0;
                            result_anio2 = result_anio2 + 0;
                            result_anio3 = result_anio3 + 0;
                            result_anio4 = result_anio4 + 0;
                        ELSE
                            result_anio1 = result_anio1 + reg.anio1*(SELECT public.pma_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                1
                                                            ));
                            result_anio2 = result_anio2 + reg.anio2*(SELECT public.pma_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                2
                                                            ));
                            result_anio3 = result_anio3 + reg.anio3*(SELECT public.pma_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                3
                                                            ));
                            result_anio4 = result_anio4 + reg.anio4*(SELECT public.pma_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                4
                                                            ));
                        END IF;
                        int_id = int_id + 1;
                        RAISE NOTICE 'total1: %, total2: %', reg.anio1, pomcas_weigh;
                        RAISE NOTICE 'totales1: %', result_anio1;
                    ELSE
                        IF pmm_weigh is null THEN
                            result_anio1 = result_anio1 + 0;
                            result_anio2 = result_anio2 + 0;
                            result_anio3 = result_anio3 + 0;
                            result_anio4 = result_anio4 + 0;
                        ELSE
                            result_anio1 = result_anio1 + reg.anio1*(SELECT public.pmm_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                1
                                                            ));
                            result_anio2 = result_anio2 + reg.anio2*(SELECT public.pmm_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                2
                                                            ));
                            result_anio3 = result_anio3 + reg.anio3*(SELECT public.pmm_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                3
                                                            ));
                            result_anio4 = result_anio4 + reg.anio4*(SELECT public.pmm_weigh_ejec(
                                                                p_pai_id, 
                                                                p_year, 
                                                                4
                                                            ));
                        END IF;
                        int_id = int_id + 1;
                    END IF;
                END LOOP;
                IF result_anio1 > 100 THEN
                    result_anio1 = 100;
                END IF;
                IF result_anio2 > 100 THEN
                    result_anio2 = 100;
                END IF;
                IF result_anio3 > 100 THEN
                    result_anio3 = 100;
                END IF;
                IF result_anio4 > 100 THEN
                    result_anio4 = 100;
                END IF;
                insert into pomcas_totales (
                    anio1,
                    anio2,
                    anio3,
                    anio4
                ) VALUES (
                    result_anio1,
                    result_anio2,
                    result_anio3,
                    result_anio4
                );
            close cur_totales;
           
        RETURN QUERY 
        SELECT *
        from pomcas_totales; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE pomcas_totales;
        
        end;
        
        $$ language plpgsql;");
        				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_totales_ejec_anio(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(total double precision) AS $$
        declare
            total double precision := 0;
        
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS pomcas_totales_ejec_anio (
                total double precision
            );
                
            IF p_year = 1 THEN
                total = (select
                            pomcas_totales_ejec.anio1
                        from public.pomcas_totales_ejec(
                            p_pai_id,
                            p_year
                        ));
            ELSEIF p_year = 2 THEN
                total = (select
                            pomcas_totales_ejec.anio2
                        from public.pomcas_totales_ejec(
                            p_pai_id,
                            p_year
                        ));
            ELSEIF p_year = 3 THEN
                total = (select
                            pomcas_totales_ejec.anio3
                        from public.pomcas_totales_ejec(
                            p_pai_id,
                            p_year
                        ));
            ELSEIF p_year = 4 THEN
                total = (select
                            pomcas_totales_ejec.anio4
                        from public.pomcas_totales_ejec(
                            p_pai_id,
                            p_year
                        ));
            END IF;
            IF total > 100 THEN
                total = 100;
            END IF;
            insert into pomcas_totales_ejec_anio (
                total
            ) VALUES (
                total
            );
           
        RETURN QUERY 
        SELECT *
        from pomcas_totales_ejec_anio; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE pomcas_totales_ejec_anio;
        
        end;
        
        $$ language plpgsql;");
        				
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_totales_form_anio(
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(total double precision)  AS $$
        declare
            total double precision := 0;
        
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS pomcas_totales_form_anio (
                total double precision
            );
                
            IF p_year = 1 THEN
                total = (select
                            pomcas_totales.anio1
                        from public.pomcas_totales(
                            p_pai_id,
                            p_year
                        ));
            ELSEIF p_year = 2 THEN
                total = (select
                            pomcas_totales.anio2
                        from public.pomcas_totales(
                            p_pai_id,
                            p_year
                        ));
            ELSEIF p_year = 3 THEN
                total = (select
                            pomcas_totales.anio3
                        from public.pomcas_totales(
                            p_pai_id,
                            p_year
                        ));
            ELSEIF p_year = 4 THEN
                total = (select
                            pomcas_totales.anio4
                        from public.pomcas_totales(
                            p_pai_id,
                            p_year
                        ));
            END IF;
            IF total > 100 THEN
                total = 100;
            END IF;
            
            insert into pomcas_totales_form_anio (
                total
            ) VALUES (
                total
            );
           
        RETURN QUERY 
        SELECT *
        from pomcas_totales_form_anio; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE pomcas_totales_form_anio;
        
        end;
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_weigh(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer,
            anio integer)
            RETURNS integer AS $$
        declare weigh integer;
        begin
        
        weigh = (select
                    indicator_activities.weighing as pomcas_weigh
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
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and indicator_activities.weighing is not null
                    and indicator_activities.year = anio
                    and groups.name like p_group_name
                    and strategic_lines.p_a_i_id = p_pai_id
                limit 1);
                
                IF weigh is null THEN
                    weigh = 0;
                END IF;
        RETURN weigh;
        end;
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_weigh(
            p_pai_id bigint,
            p_year integer,
            anio integer)
            RETURNS integer AS $$
        declare weigh integer;
        begin
        
        weigh = (select
                    indicator_activities.weighing as pomcas_weigh
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
                    indicators.abbreviated_name like 'PAFP'
                    and variables.category_name like '%%POMCAS%%'
                    and indicator_activities.weighing is not null
                    and indicator_activities.year = anio
                    and strategic_lines.p_a_i_id = p_pai_id
                limit 1);
                
                IF weigh is null THEN
                    weigh = 0;
                END IF;
        RETURN weigh;
        end;
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pomcas_weigh_ejec(
            p_pai_id bigint,
            p_year integer,
            anio integer)
            RETURNS double precision AS $$
        declare weigh double precision;
        begin
        
        weigh = (select
                    indicator_activities.weighing as pomcas_weigh
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
                    indicators.abbreviated_name like 'PPEE'
                    and variables.category_name like '%%POMCAS%%'
                    and indicator_activities.weighing is not null
                    and indicator_activities.year = anio
                    and strategic_lines.p_a_i_id = p_pai_id
                limit 1);
                
                IF weigh is null THEN
                    weigh = 0;
                END IF;
        RETURN weigh;
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
