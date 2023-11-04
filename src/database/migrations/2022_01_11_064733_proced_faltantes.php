<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProcedFaltantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pma_weigh(
            p_group_name character varying,
            p_pai_id bigint,
            p_year integer,
            anio integer)
            RETURNS integer AS $$
                declare weighpomca integer;
                begin
                
                weighpomca = (select
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
                            and variables.category_name like '%%PMA%%'
                            and indicator_activities.weighing is not null
                            and indicator_activities.year = anio
                            and groups.name like p_group_name
                            and strategic_lines.p_a_i_id = p_pai_id
                        limit 1);
                        
                        IF weighpomca is null THEN
                        weighpomca = 0;
                        END IF;
                RETURN weighpomca;
                end;
        
        $$ language plpgsql;");

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.pma_weigh(
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
                    and variables.category_name like '%%PMA%%'
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
        CREATE OR REPLACE FUNCTION public.num_pomcas(
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
                        sum(ia1.numerator) as anio
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
                        sum(ia1.numerator) as anio
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
                        sum(ia1.numerator) as anio
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
                        sum(ia1.numerator) as anio
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
                    RAISE NOTICE ' AÑO: %', reg.anio;
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

        DB::unprepared("
        CREATE OR REPLACE FUNCTION public.ocde_productos(
            p_year integer,
            p_paid integer,
            p_type character varying)
            RETURNS TABLE(dom_name character varying, dom_id integer, act_ocde_ind_id integer, act_pro_id integer, act_id integer, act_ocde_cat_id integer, goal integer, pro_total_goal integer, pro_unit_goal integer, categoria character varying, nombre_producto character varying, unidad_medida character varying, meta_real integer) AS $$
        declare 
        
        cur_codes cursor
        for SELECT
            public.domains.name,
            public.domains.id,
            public.activities.ocde_indicator_id,
            public.activities.product_id,
            public.activities.id,
            public.activities.ocde_category_id,
            public.activities.objective_id,
            public.activities.goal_1,
            public.activities.goal_2,
            public.activities.goal_3,
            public.activities.goal_4

        FROM
            public.objectives 
            INNER JOIN public.activities ON public.objectives.id = public.activities.objective_id
            INNER JOIN public.projects ON public.objectives.project_id = public.projects.id
            INNER JOIN public.programs ON public.projects.program_id = public.programs.id
            INNER JOIN public.strategic_lines ON public.programs.strategic_line_id = public.strategic_lines.id
            INNER JOIN public.domains ON public.activities.ocde_category_id = public.domains.id
            --AND public.domains.id = public.activities.ocde_indicator_id
        WHERE public.strategic_lines.p_a_i_id=p_paid AND 
        public.domains.name=(select domains.name from domains where domains.father_id=(select id from domains where domains.domain=OCDECategory) and domains.name=p_type)
            group by public.domains.name,
            public.activities.product_id,
            public.activities.ocde_indicator_id,
            public.activities.id,
            public.domains.id,
            public.activities.ocde_category_id,
            public.activities.objective_id,
            public.activities.goal_1,
            public.activities.goal_2,
            public.activities.goal_3,
            public.activities.goal_4

            order by public.domains.name asc, public.activities.ocde_indicator_id, public.activities.product_id;

                 
        DECLARE cons_dom_name character varying;
        DECLARE cons_dom_id integer := 0;
        DECLARE cons_act_ocde_ind_id integer := 0;
        DECLARE cons_act_pro_id integer := 0;
        DECLARE cons_act_id integer := 0;
        DECLARE cons_act_ocde_cat_id integer := 0;
        DECLARE cons_obj_id integer := 0;
        DECLARE cons_act_goal_1 integer := 0;
        DECLARE cons_act_goal_2 integer := 0;
        DECLARE cons_act_goal_3 integer := 0;
        DECLARE cons_act_goal_4 integer := 0;
        DECLARE cons_pro_total_goal integer := 0;
        DECLARE cons_pro_unit_goal integer := 0;
        
        --variables temporales---
        DECLARE goal integer := 0;
        DECLARE cons_categoria character varying;
        DECLARE temp_name_producto character varying;
        DECLARE temp_unidad_medida character varying;
        DECLARE temp_meta_real integer := 0;
        DECLARE meta_real_table integer := 0;
        DECLARE act_temp_exist integer := 0;
        DECLARE temp_total_goal integer := 0;
        
        DECLARE v_RowCountInt  Int;
        
        begin
         
        --DROP TABLE temp_table;
        CREATE TEMP TABLE IF NOT EXISTS temp_table AS
        select  
        CAST(0 as character varying)  as dom_name,
        CAST(0 as integer) as dom_id,
        CAST(0 as integer) as act_ocde_ind_id,
        CAST(0 as integer) as act_pro_id,
        CAST(0 as integer) as act_id,
        CAST(0 as integer) as act_ocde_cat_id,
        CAST(0 as integer) as goal,
        CAST(0 as integer) as pro_total_goal,
        CAST(0 as integer) as pro_unit_goal,
        CAST(0 as character varying)  as categoria,
        CAST(0 as character varying)  as nombre_producto,
        CAST(0 as character varying)  as unidad_medida,
        CAST(0 as integer) as meta_real
        
        from public.activities
        limit 0;
        
           -- open the cursor
           open cur_codes;
            
           loop
            -- fetch row into the film
              fetch cur_codes into cons_dom_name, cons_dom_id,cons_act_ocde_ind_id,cons_act_pro_id,cons_act_id,cons_act_ocde_cat_id,cons_obj_id,
              cons_act_goal_1,cons_act_goal_2,cons_act_goal_3,cons_act_goal_4;
            
                -- nombre del producto
                temp_name_producto := (select objective_products.product_other from objective_products where objective_products.objective_id=cons_obj_id
                                  AND (objective_products.product_id=cons_act_pro_id or objective_products.id=cons_act_pro_id));
                -- si es null entonces se busca en otra tabla
                GET DIAGNOSTICS v_RowCountInt = ROW_COUNT;
                
                --IF v_RowCountInt = 0 THEN
                IF (temp_name_producto is NULL) THEN
                    temp_name_producto := (select public.domains.name FROM public.domains where public.domains.id=cons_act_pro_id);	
                END IF;
                
                -- se busca el nombre de la unidad de medida según el producto
                temp_unidad_medida := (select domains.name from domains 
                                       where domains.id = 
                                       (select objective_products.unit_goal 
                                        from objective_products where   objective_products.objective_id=cons_obj_id 
                                       and (objective_products.product_id=cons_act_pro_id or objective_products.id=cons_act_pro_id)));
        
                -- se busca la categoria
                cons_categoria := (select domains.name from domains where domains.id=cons_act_ocde_ind_id);
                
                IF p_year=1 then
                    goal := cons_act_goal_1;
                ELSEIF p_year=2 then
                    goal := cons_act_goal_2;
                ELSEIF p_year=3 then
                    goal := cons_act_goal_3;
                ELSEIF p_year=4 then
                    goal := cons_act_goal_4;
                END IF;
             
             temp_meta_real := (select sum(value) from evidence_advance where activity_id=cons_act_id and year=p_year);
             
        
            -- exit when no more row to fetch
              exit when not found;
        
            -- build the output
            act_temp_exist := (select count(temp_table.act_id) from temp_table where temp_table.act_pro_id=cons_act_pro_id 
                               and temp_table.act_ocde_ind_id=cons_act_ocde_ind_id and temp_table.dom_id=cons_dom_id);
            
            IF temp_meta_real is NULL THEN
            temp_meta_real :=0;
            END IF; 
            
            IF goal is NULL THEN
            goal :=0;
            END IF; 
            
            IF act_temp_exist >0 THEN
            meta_real_table := (select temp_table.meta_real from temp_table where temp_table.act_pro_id=cons_act_pro_id 
                               and temp_table.act_ocde_ind_id=cons_act_ocde_ind_id and temp_table.dom_id=cons_dom_id );
            temp_total_goal := (select temp_table.goal from temp_table where temp_table.act_pro_id=cons_act_pro_id 
                               and temp_table.act_ocde_ind_id=cons_act_ocde_ind_id and temp_table.dom_id=cons_dom_id );	   
                               
            update temp_table set 
                               goal = (temp_table.goal + temp_total_goal),
                               meta_real =(meta_real_table+temp_meta_real)  where temp_table.act_pro_id=cons_act_pro_id 
                               and temp_table.act_ocde_ind_id=cons_act_ocde_ind_id and temp_table.dom_id=cons_dom_id;
            
            ELSE
                INSERT INTO temp_table(dom_name, dom_id,act_ocde_ind_id,act_pro_id,act_id,act_ocde_cat_id,goal,pro_total_goal,pro_unit_goal,
                                   categoria,nombre_producto,unidad_medida, meta_real)
            VALUES (cons_dom_name, cons_dom_id,cons_act_ocde_ind_id,cons_act_pro_id,cons_act_id,cons_act_ocde_cat_id,
                    goal,cons_pro_total_goal,cons_pro_unit_goal,cons_categoria, temp_name_producto,temp_unidad_medida,temp_meta_real);
            END IF;
        
                
           end loop;
          
         
           -- close the cursor
           close cur_codes;
           
         
           
        RETURN QUERY 
        SELECT *
        from temp_table; --where temp_table.father_id=5;
        --   return table;
        DROP TABLE temp_table;
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
