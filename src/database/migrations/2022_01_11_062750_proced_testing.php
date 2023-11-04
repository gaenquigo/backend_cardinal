<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedTesting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.testing(
            )
            RETURNS TABLE(id_plan bigint, tipo_de_plan character varying, codigo character varying, cuenca character varying, area character varying, estado character varying, estado_p character varying) AS $$
        
        declare
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
                        and indicator_activities.year = 1
                        and od1.variable_name like 'Tipo de plan'
                        and groups.name like 'Administración del sistema'
                        and strategic_lines.p_a_i_id = 11;
                        
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
                        and indicator_activities.year = 1
                        and od1.variable_name like 'Código'
                        and groups.name like 'Administración del sistema'
                        and strategic_lines.p_a_i_id = 11;
                        
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
                        and indicator_activities.year = 1
                        and od1.variable_name like 'Nombre de Cuenca, Microcuenca, Acuífero'
                        and groups.name like 'Administración del sistema'
                        and strategic_lines.p_a_i_id = 11;
                        
            cur_area cursor
                for select distinct
                        ody1.id as id_area,
                        ody1.value as area
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
                        and indicator_activities.year = 1
                        and od1.variable_name like 'Área'
                        and groups.name like 'Administración del sistema'
                        and strategic_lines.p_a_i_id = 11;
                        
            cur_estado_p cursor
                for select distinct
                        ody1.id as id_estado_p,
                        od1.value as estado_p
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
                        and indicator_activities.year = 1
                        and od1.variable_name like '%%Estado de avance a 31 de diciembre%%'
                        and groups.name like 'Administración del sistema'
                        and strategic_lines.p_a_i_id = 11;
                        
            cur_estado cursor
                for select distinct
                        ody1.id as id_estado,
                        ody1.value as estado
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
                        and indicator_activities.year = 1
                        and od1.variable_name like '%%Estado de avance a 31 de diciembre%%'
                        and groups.name like 'Administración del sistema'
                        and strategic_lines.p_a_i_id = 11;
        
            cur_temp_table1 cursor
                for select * from temp_table1;
                
            int_id integer := 0;
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table1 (
                id_plan bigint,
                tipo_de_plan character varying,
                codigo character varying,
                cuenca character varying,
                area character varying,
                estado character varying,
                estado_p character varying
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
           
           open cur_area;
                   int_id = 0;
                   LOOP
                    FETCH cur_area INTO reg;
                    EXIT WHEN NOT FOUND;
                    UPDATE temp_table1
                    SET area = reg.area
                    WHERE temp_table1.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
           close cur_area;
           
           open cur_estado;
                   int_id = 0;
                   LOOP
                    FETCH cur_estado INTO reg;
                    EXIT WHEN NOT FOUND;
                    UPDATE temp_table1
                    SET estado = reg.estado
                    WHERE temp_table1.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
           close cur_estado;
           
           open cur_estado_p;
                   int_id = 0;
                   LOOP
                    FETCH cur_estado_p INTO reg;
                    EXIT WHEN NOT FOUND;
                    UPDATE temp_table1
                    SET estado_p = reg.estado_p
                    WHERE temp_table1.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
           close cur_estado_p;
           
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
