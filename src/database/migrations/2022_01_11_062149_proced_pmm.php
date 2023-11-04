<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedPmm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pmm_den(
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
                    and variables.category_name like '%%PMM%%'
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
                    and variables.category_name like '%%PMM%%'
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
                    and variables.category_name like '%%PMM%%'
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
                        and variables.category_name like '%%PMM%%'
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
        CREATE OR REPLACE FUNCTION public.pmm_den(
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
                    and variables.category_name like '%%PMM%%'
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
                    and variables.category_name like '%%PMM%%'
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
                    and variables.category_name like '%%PMM%%'
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
                        and variables.category_name like '%%PMM%%'
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
        CREATE OR REPLACE FUNCTION public.pmm_den_ejec(
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
                    and variables.category_name like '%%PMM%%'
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
        CREATE OR REPLACE FUNCTION public.pmm_num(
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
                    and variables.category_name like '%%PMM%%'
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
                    and variables.category_name like '%%PMM%%'
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
                    and variables.category_name like '%%PMM%%'
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
                        and variables.category_name like '%%PMM%%'
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
        CREATE OR REPLACE FUNCTION public.pmm_num(
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
                    and variables.category_name like '%%PMM%%'
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
                    and variables.category_name like '%%PMM%%'
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
                    and variables.category_name like '%%PMM%%'
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
                        and variables.category_name like '%%PMM%%'
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
        CREATE OR REPLACE FUNCTION public.pmm_num_ejec(
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
                    and variables.category_name like '%%PMM%%'
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
        CREATE OR REPLACE FUNCTION public.pmm_weigh(
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
                    and variables.category_name like '%%PMM%%'
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
        CREATE OR REPLACE FUNCTION public.pmm_weigh(
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
                    and variables.category_name like '%%PMM%%'
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
        CREATE OR REPLACE FUNCTION public.pmm_weigh_ejec(
            p_pai_id bigint,
            p_year integer,
            anio integer)
            RETURNS double precision AS $$
        declare weigh double precision;
        begin
        
        weigh = (select
                    indicator_activities.weighing as pmm_weigh
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
                    and variables.category_name like '%%PMM%%'
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
