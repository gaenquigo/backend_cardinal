<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedDenpomcas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.den_pomcas(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, tipo_de_plan character varying, codigo character varying, cuenca character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        
        declare
            int_id integer := 0;
            result_anio integer := 0;
            reg Record;
            cur_plan cursor
                for select distinct
                        ody1.id as id_plan,
                        ody1.value as tipo_de_plan
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
                        and indicator_activities.year = p_year
                        and od1.variable_name like 'Tipo de plan'
                        and groups.name like p_group_name
                        and strategic_lines.p_a_i_id = p_pai_id;
                        
            cur_codigo cursor
                for select distinct
                        ody1.id as id_codigo,
                        ody1.value as codigo
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
                        and indicator_activities.year = p_year
                        and od1.variable_name like 'Código'
                        and groups.name like p_group_name
                        and strategic_lines.p_a_i_id = p_pai_id;
                        
            cur_cuenca cursor
                for select distinct
                        ody1.id as id_cuenca,
                        ody1.value as cuenca
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
                        and indicator_activities.year = p_year
                        and od1.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                        and groups.name like p_group_name
                        and strategic_lines.p_a_i_id = p_pai_id;
                        
            cur_anio1 cursor
                for select distinct
                        ody1.id as id_plan,
                        sum(ia1.denominator) as anio
                    --sum(ia2.denominator) as Anio_2
                    from indicators
                    inner join indicator_activities ia1 on ia1.indicator_id = indicators.id
                    --inner join indicator_activities ia2 on ia2.indicator_id = indicators.id
                    inner join activities on activities.id = ia1.activities_id
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join groups on groups.id = indicators.group_id
                    inner join other_data od1 on od1.indicator_id = indicators.id
                    inner join other_data_year ody1 on ody1.other_data_id = od1.id
                    where indicators.name like '%%POMCAS%%'
                        and od1.variable_name like 'Tipo de plan'
                        and ia1.year = 1
                        and groups.name like p_group_name
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by ody1.id;
            
            cur_anio2 cursor
                for select distinct
                        ody1.id as id_plan,
                        sum(ia1.denominator) as anio
                    --sum(ia2.denominator) as Anio_2
                    from indicators
                    inner join indicator_activities ia1 on ia1.indicator_id = indicators.id
                    --inner join indicator_activities ia2 on ia2.indicator_id = indicators.id
                    inner join activities on activities.id = ia1.activities_id
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join groups on groups.id = indicators.group_id
                    inner join other_data od1 on od1.indicator_id = indicators.id
                    inner join other_data_year ody1 on ody1.other_data_id = od1.id
                    where indicators.name like '%%POMCAS%%'
                        and od1.variable_name like 'Tipo de plan'
                        and ia1.year = 2
                        and groups.name like p_group_name
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by ody1.id;
                    
            cur_anio3 cursor
                for select distinct
                        ody1.id as id_plan,
                        sum(ia1.denominator) as anio
                    --sum(ia2.denominator) as Anio_2
                    from indicators
                    inner join indicator_activities ia1 on ia1.indicator_id = indicators.id
                    --inner join indicator_activities ia2 on ia2.indicator_id = indicators.id
                    inner join activities on activities.id = ia1.activities_id
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join groups on groups.id = indicators.group_id
                    inner join other_data od1 on od1.indicator_id = indicators.id
                    inner join other_data_year ody1 on ody1.other_data_id = od1.id
                    where indicators.name like '%%POMCAS%%'
                        and od1.variable_name like 'Tipo de plan'
                        and ia1.year = 3
                        and groups.name like p_group_name
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by ody1.id;
            
            cur_anio4 cursor
                for select distinct
                        ody1.id as id_plan,
                        sum(ia1.denominator) as anio
                    --sum(ia2.denominator) as Anio_2
                    from indicators
                    inner join indicator_activities ia1 on ia1.indicator_id = indicators.id
                    --inner join indicator_activities ia2 on ia2.indicator_id = indicators.id
                    inner join activities on activities.id = ia1.activities_id
                    inner join objectives on objectives.id = activities.objective_id
                    inner join projects on projects.id = objectives.project_id
                    inner join programs on programs.id = projects.program_id
                    inner join strategic_lines on strategic_lines.id = programs.strategic_line_id
                    inner join groups on groups.id = indicators.group_id
                    inner join other_data od1 on od1.indicator_id = indicators.id
                    inner join other_data_year ody1 on ody1.other_data_id = od1.id
                    where indicators.name like '%%POMCAS%%'
                        and od1.variable_name like 'Tipo de plan'
                        and ia1.year = 4
                        and groups.name like p_group_name
                        and strategic_lines.p_a_i_id = p_pai_id
                    group by ody1.id;
                    
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table1 (
                id_plan bigint,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,
                anio1 double precision,
                anio2 double precision,
                anio3 double precision,
                anio4 double precision
            );
            
            open cur_plan;
                LOOP
                    FETCH cur_plan INTO reg;
                    EXIT WHEN NOT FOUND;
                    INSERT INTO temp_table1 (id_plan, tipo_de_plan)
                    VALUES (int_id, reg.tipo_de_plan);
                    int_id = int_id + 1;
                    RAISE NOTICE ' ID: %, Tipo: %', reg.id_plan, reg.tipo_de_plan;
                END LOOP;
           close cur_plan;
           
           open cur_codigo;
                   int_id = 0;
                   LOOP
                    FETCH cur_codigo INTO reg;
                    EXIT WHEN NOT FOUND;
                    UPDATE temp_table1
                    SET codigo = reg.codigo
                    WHERE temp_table1.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
           close cur_codigo;
           
           open cur_cuenca;
                   int_id = 0;
                   LOOP
                    FETCH cur_cuenca INTO reg;
                    EXIT WHEN NOT FOUND;
                    UPDATE temp_table1
                    SET cuenca = reg.cuenca
                    WHERE temp_table1.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
           close cur_cuenca;
           
           open cur_anio1;
                int_id = 0;
                LOOP
                    FETCH cur_anio1 INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF reg.anio is null THEN
                        result_anio = 0;
                    ELSEIF reg.anio > 100 THEN
                        result_anio = 100;
                    ELSE result_anio = reg.anio;
                    END IF;
                    UPDATE temp_table1
                    SET anio1 = result_anio
                    WHERE temp_table1.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
           close cur_anio1;
           
           open cur_anio2;
                   int_id = 0;
                   LOOP
                    FETCH cur_anio2 INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF reg.anio is null THEN
                        result_anio = 0;
                    ELSEIF reg.anio > 100 THEN
                        result_anio = 100;
                    ELSE result_anio = reg.anio;
                    END IF;
                    UPDATE temp_table1
                    SET anio2 = result_anio
                    WHERE temp_table1.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
           close cur_anio2;
           
           open cur_anio3;
                   int_id = 0;
                   LOOP
                    FETCH cur_anio3 INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF reg.anio is null THEN
                        result_anio = 0;
                    ELSEIF reg.anio > 100 THEN
                        result_anio = 100;
                    ELSE result_anio = reg.anio;
                    END IF;
                    UPDATE temp_table1
                    SET anio3 = result_anio
                    WHERE temp_table1.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
           close cur_anio3;
           
           open cur_anio4;
                   int_id = 0;
                   LOOP
                    FETCH cur_anio4 INTO reg;
                    EXIT WHEN NOT FOUND;
                    IF reg.anio is null THEN
                        result_anio = 0;
                    ELSEIF reg.anio > 100 THEN
                        result_anio = 100;
                    ELSE result_anio = reg.anio;
                    END IF;
                    UPDATE temp_table1
                    SET anio4 = result_anio
                    WHERE temp_table1.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
           close cur_anio4;
           
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
