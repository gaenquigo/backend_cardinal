<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedRes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.res_pomcas(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer)
            RETURNS TABLE(id_plan bigint, tipo_de_plan character varying, codigo character varying, cuenca character varying, anio1 double precision, anio2 double precision, anio3 double precision, anio4 double precision) AS $$
        
        declare
            int_id integer := 0;
            result_anio1 integer := 0;
            result_anio2 integer := 0;
            result_anio3 integer := 0;
            result_anio4 integer := 0;
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
                    
            cur_den cursor
                for SELECT * from public.den_pomcas(
                        p_group_name,
                        p_pai_id,
                        p_year
                    );
                    
        begin
         
        --DROP TABLE temp_table;
            CREATE TEMP TABLE IF NOT EXISTS temp_table2 (
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
                    INSERT INTO temp_table2 (id_plan, tipo_de_plan)
                    VALUES (int_id, reg.tipo_de_plan);
                    int_id = int_id + 1;
                END LOOP;
           close cur_plan;
           
           open cur_codigo;
                   int_id = 0;
                   LOOP
                    FETCH cur_codigo INTO reg;
                    EXIT WHEN NOT FOUND;
                    UPDATE temp_table2
                    SET codigo = reg.codigo
                    WHERE temp_table2.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
           close cur_codigo;
           
           open cur_cuenca;
                   int_id = 0;
                   LOOP
                    FETCH cur_cuenca INTO reg;
                    EXIT WHEN NOT FOUND;
                    UPDATE temp_table2
                    SET cuenca = reg.cuenca
                    WHERE temp_table2.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
           close cur_cuenca;
           
           open cur_den;
                   int_id = 0;
                LOOP
                    FETCH cur_den INTO reg;
                    EXIT WHEN NOT FOUND;
                    result_anio1 = 100*(SELECT num_pomcas.anio1 from public.num_pomcas(p_group_name,p_pai_id,p_year) where num_pomcas.id_plan = 0)/reg.anio1;
                    result_anio2 = 100*(SELECT num_pomcas.anio2 from public.num_pomcas(p_group_name,p_pai_id,p_year) where num_pomcas.id_plan = 0)/reg.anio2;
                    result_anio3 = 100*(SELECT num_pomcas.anio3 from public.num_pomcas(p_group_name,p_pai_id,p_year) where num_pomcas.id_plan = 0)/reg.anio3;
                    result_anio4 = 100*(SELECT num_pomcas.anio4 from public.num_pomcas(p_group_name,p_pai_id,p_year) where num_pomcas.id_plan = 0)/reg.anio4;
                    UPDATE temp_table2
                    SET anio1 = result_anio1,
                        anio2 = result_anio2,
                        anio3 = result_anio3,
                        anio4 = result_anio4
                    WHERE temp_table2.id_plan = int_id;
                    int_id = int_id + 1;
                END LOOP;
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
