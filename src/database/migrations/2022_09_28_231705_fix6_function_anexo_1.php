<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fix6FunctionAnexo1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.anexo_1_v2(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(id_lin double precision, level bigint, grupo_pai bigint, id bigint, name character varying, ponderacion double precision, indicador character varying, unit_goal integer, name_unit_goal character varying, total_goal double precision, goal_1 double precision, goal_2 double precision, goal_3 double precision, goal_4 double precision, repor_vigencia double precision, repor_rezago_1 double precision, desc_vig_1 character varying, desc_rez_1 character varying, av_acum double precision, goal_anio double precision, pc_av_fis double precision, pc_av_fis_rez double precision, met_fin_anual double precision, av_met_fin double precision, av_oblig double precision, av_pagos double precision, met_fin_total double precision, acum_met_fin double precision, acum_av_fin double precision) 
        AS $$
        DECLARE 
        cur_codes CURSOR FOR
            SELECT DISTINCT 
                    p.id AS id_pai, p.name AS pai_name, 1 AS pai_weighing,
                    0 AS pai_avance, 
                    0 AS pai_percent_avance,
                    CAST(0 AS double precision) AS pai_met_fin,
                    CAST(0 AS double precision) AS pai_av_fin,
                    CAST(0 AS double precision) AS pai_av_oblig,
                    CAST(0 AS double precision) AS pai_av_pagos,
                    CAST(0 AS double precision) AS pai_met_fin_total,
                    CAST(0 AS double precision) AS pai_met_fin_acum,
                    CAST(0 AS double precision) AS pai_av_fin_acum,
                    strln.id AS id_lin, strln.name AS strln_name, 
                    (CAST((strln.weighing) AS double precision) / CAST(100 AS double precision)) AS strln_weighing, 
                    0 AS st_lin_avance, 0 AS strln_percent_avance,
                    CAST(0 AS double precision) AS strln_met_fin,
                    CAST(0 AS double precision) AS strln_av_fin,
                    CAST(0 AS double precision) AS strln_av_oblig,
                    CAST(0 AS double precision) AS strln_av_pagos,
                    CAST(0 AS double precision) AS strln_met_fin_total,
                    CAST(0 AS double precision) AS strln_met_fin_acum,
                    CAST(0 AS double precision) AS strln_av_fin_acum,
                    prog.id AS program_id, prog.car_program AS program_name, 
                    (CAST((prog.weighing) AS double precision) / CAST(100 AS double precision)) AS program_weighing,
                    0 AS program_avance, 0 AS program_percent_avance,
                    CAST(0 AS double precision) AS prog_met_fin,
                    CAST(0 AS double precision) AS prog_av_fin,
                    CAST(0 AS double precision) AS prog_av_oblig,
                    CAST(0 AS double precision) AS prog_av_pagos,
                    CAST(0 AS double precision) AS prog_met_fin_total,
                    CAST(0 AS double precision) AS prog_met_fin_acum,
                    CAST(0 AS double precision) AS prog_av_fin_acum,
                    proy.id as project_id, proy.project AS project_name,
                    (CAST((proy.weighing) AS double precision) / CAST(100 AS double precision)) AS project_weighing,
                    0 AS project_avance, 0 AS project_percent_avance,
                    CAST(0 AS double precision) AS proy_met_fin,
                    CAST(0 AS double precision) AS proy_av_fin,
                    CAST(0 AS double precision) AS proy_av_oblig,
                    CAST(0 AS double precision) AS proy_av_pagos,
                    CAST(0 AS double precision) AS proy_met_fin_total,
                    CAST(0 AS double precision) AS proy_met_fin_acum,
                    CAST(0 AS double precision) AS proy_av_fin_acum,
                    obj.id as objective_id, 'OBJETIVO: ' || obj.objective AS objective_name,
                    (CAST((obj.weighing) AS double precision) / CAST(100 AS double precision)) AS objective_weighing,
                    0 AS objective_avance, 0 AS objective_percent_avance,
                    CAST(0 AS double precision) AS obj_met_fin,
                    CAST(0 AS double precision) AS obj_av_fin,
                    CAST(0 AS double precision) AS obj_av_oblig,
                    CAST(0 AS double precision) AS obj_av_pagos,
                    CAST(0 AS double precision) AS obj_met_fin_total,
                    CAST(0 AS double precision) AS obj_met_fin_acum,
                    CAST(0 AS double precision) AS obj_av_fin_acum,
                    objprod.id as product_id, 
                    CASE WHEN objprod.product_other IS NULL THEN 'PRODUCTO: ' || dmprod.name ELSE 'PRODUCTO: ' || objprod.product_other END AS product_name,
                    objprod.unit_goal,
                    dmunid.name as name_unit_goal,
                    (CAST((objprod.weighing) AS double precision) / CAST(100 AS double precision)) AS product_weighing,
                    objprod.total_goal AS product_total_goal,
                    objprod.goal_1_balance AS product_goal_1,
                    objprod.goal_2_balance AS product_goal_2,
                    objprod.goal_3_balance AS product_goal_3,
                    objprod.goal_4_balance AS product_goal_4,
                    SUM(COALESCE(actevid.avance, 0)) OVER (PARTITION BY objprod.id) AS product_avance,
                    0 AS product_percent_avance,
                    CAST(0 AS double precision) AS product_met_fin,
                    CAST(0 AS double precision) AS product_av_fin,
                    CAST(0 AS double precision) AS product_av_oblig,
                    CAST(0 AS double precision) AS product_av_pagos,
                    CAST(0 AS double precision) AS product_met_fin_total,
                    CAST(0 AS double precision) AS product_met_fin_acum,
                    CAST(0 AS double precision) AS product_av_fin_acum,
                    SUM(COALESCE(sumavc.suma_cuatrienio, 0)) OVER (PARTITION BY objprod.id) AS product_av_acum,
                    act.id as act_id, 
                    act.name as act_name,
                    (CAST((act.weighing) as double precision) / CAST(100 as double precision))as act_weighing,
                    act.goal as goal,
                    act.goal_1,
                    act.goal_2,
                    act.goal_3,
                    act.goal_4,
                    CASE WHEN ind.name IS NULL THEN 'NA' ELSE ind.name END as indicator_name,
                    COALESCE(actevid.avance, 0) AS act_avance,
                    COALESCE(actevid.descripcion, '') AS act_description,
                    CASE WHEN actevid.year IS NULL THEN 0
                            WHEN actevid.year = 1 THEN CAST((actevid.avance / act.goal_1) as double precision)
                            WHEN actevid.year = 2 THEN CAST((actevid.avance / act.goal_2) as double precision)
                            WHEN actevid.year = 3 THEN CAST((actevid.avance / act.goal_3) as double precision)
                            WHEN actevid.year = 4 THEN CAST((actevid.avance / act.goal_4) as double precision)
                    END AS act_percent_avance,
                    COALESCE(sumavc.suma_cuatrienio, 0) AS av_acum,
                    COALESCE(avcrezago.avcrezago, 0) AS avcrezago,
                    COALESCE(avcrezago.descripcionrezago, '') AS descripcionrezago,
                    COALESCE(actsc.met_fin_anual, 0) AS met_fin_anual,
                    COALESCE(avancefn.av_met_fin, 0) AS av_met_fin,
                    COALESCE(avanceoblig.av_oblig, 0) AS av_oblig,
                    COALESCE(avancepagos.av_pagos, 0) AS av_pagos,
                    COALESCE(actscttal.met_fin_total, 0) AS met_fin_total,
                    COALESCE(actscacum.met_fin_acum, 0) AS met_fin_acum,
                    COALESCE(fnacum.acum_av_fin, 0) AS acum_av_fin,
                    /*CASE WHEN actevid.year = 1 THEN act.goal_1
                            WHEN actevid.year = 2 THEN act.goal_2
                            WHEN actevid.year = 3 THEN act.goal_3
                            WHEN actevid.year = 4 THEN act.goal_4
                    END AS goal_anio,*/
                    CASE WHEN p_year = 1 THEN act.goal_1
                            WHEN p_year = 2 THEN act.goal_2
                            WHEN p_year = 3 THEN act.goal_3
                            WHEN p_year = 4 THEN act.goal_4
                    END AS goal_anio,
                    CASE WHEN actevid.year = 1 THEN objprod.goal_1_balance
                            WHEN actevid.year = 2 THEN objprod.goal_2_balance
                            WHEN actevid.year = 3 THEN objprod.goal_3_balance
                            WHEN actevid.year = 4 THEN objprod.goal_4_balance
                    END AS goal_anio_product
            FROM cardinal.activities act
            INNER JOIN cardinal.objectives obj ON act.objective_id = obj.id
            INNER JOIN cardinal.objective_products objprod ON obj.id = objprod.objective_id
            AND (act.product_id = objprod.id OR act.product_id = objprod.product_id)
            INNER JOIN (SELECT dm.id, dm.name FROM cardinal.domains dm) dmunid ON objprod.unit_goal = dmunid.id
            LEFT JOIN (SELECT dm.id, dm.name FROM cardinal.domains dm) dmprod ON objprod.product_id = dmprod.id
            INNER JOIN cardinal.projects proy ON obj.project_id = proy.id
            INNER JOIN cardinal.programs prog ON proy.program_id = prog.id
            INNER JOIN cardinal.strategic_lines strln ON prog.strategic_line_id = strln.id
            INNER JOIN cardinal.pais p on strln.p_a_i_id = p.id
            LEFT JOIN cardinal.indicator_activities indact ON act.id = indact.activities_id
            LEFT JOIN cardinal.indicators ind ON indact.indicator_id = ind.id
            LEFT JOIN cardinal.domains dm ON indact.variable_in = dm.id
            --SUBQUERY PARA OBTENER LOS AVANCES DE CADA ACTIVIDAD QUE TIENEN META MAYOR A CERO
            LEFT JOIN LATERAL (SELECT CAST(SUM(COALESCE(ea.value, 0)) as double precision) AS avance, 
                        string_agg(description, ', ') as descripcion, 
                        act.id, year
                        FROM cardinal.evidence_advance ea
                        WHERE ea.activity_id = act.id 
                        AND ea.year = p_year
                        AND ea.rezago = false
                        AND CASE WHEN ea.year = 1 THEN act.goal_1 > 0
                                WHEN ea.year = 2 THEN act.goal_2 > 0
                                WHEN ea.year = 3 THEN act.goal_3 > 0
                                WHEN ea.year = 4 THEN act.goal_4 > 0
                                END
                        GROUP BY act.id, ea.year) actevid ON true
            --SUBQUERY PARA OBTENER EL AVANCE DE REZAGO DE CADA ACTIVIDAD
            LEFT JOIN (SELECT CAST(COALESCE(sum(value),0) as double precision) AS avcrezago, string_agg(description, ', ') as descripcionrezago, activity_id
                        FROM cardinal.evidence_advance WHERE rezago = true AND year = (p_year + 1)
                        GROUP BY activity_id) avcrezago ON act.id = avcrezago.activity_id
                        AND CASE WHEN actevid.year = 1 THEN act.goal_1 > 0
                                WHEN actevid.year = 2 THEN act.goal_2 > 0
                                WHEN actevid.year = 3 THEN act.goal_3 > 0
                                WHEN actevid.year = 4 THEN act.goal_4 > 0
                                END
            --SUBQUERY PARA OBTENER EL AVANCE ACUMULADO POR ACTIVIDAD 
            LEFT JOIN LATERAL (SELECT CAST(SUM(COALESCE(eact.value, 0)) as double precision) AS suma_cuatrienio
                        FROM cardinal.evidence_advance eact 
                        WHERE eact.activity_id = act.id
                        AND eact.year <= p_year
                        AND CASE WHEN eact.year = 1 THEN act.goal_1 > 0
                                WHEN eact.year = 2 THEN (act.goal_1 > 0 and act.goal_2 > 0) 
                                WHEN actevid.year = 3 THEN (act.goal_1 > 0 and act.goal_2 > 0 and act.goal_3 > 0)
                                WHEN actevid.year = 4 THEN (act.goal_1 > 0 and act.goal_2 > 0 and act.goal_3 > 0 and act.goal_4 > 0)
                                END
                        GROUP BY activity_id
                        FETCH FIRST 1 ROW ONLY) sumavc ON true
            --SUBQUERY PARA OBTENER LA META FINANCIERA ANUAL PARA CADA ACTIVIDAD
            LEFT JOIN (SELECT CAST(COALESCE(sum(value),0) as double precision) AS met_fin_anual, activity_id 
                        FROM cardinal.activity_sources WHERE age = p_year
                        GROUP BY activity_id) actsc ON act.id = actsc.activity_id
            --SUBQUERY PARA OBTENER EL AVANCE FINANCIERO POR ACTIVIDAD
            LEFT JOIN LATERAL (SELECT CAST(COALESCE(sum(ef.value),0) as double precision) AS av_met_fin
                        FROM cardinal.evidence_advance ea 
                        LEFT JOIN cardinal.evidence_financial ef ON ea.id = ef.evidence_id
                        WHERE ea.activity_id = act.id
                        AND ea.year = p_year
                        AND CASE WHEN actevid.year = 1 THEN act.goal_1 > 0
                                WHEN actevid.year = 2 THEN act.goal_2 > 0
                                WHEN actevid.year = 3 THEN act.goal_3 > 0
                                WHEN actevid.year = 4 THEN act.goal_4 > 0
                                END
                        GROUP BY activity_id
                        FETCH FIRST 1 ROW ONLY) avancefn on true
            --SUBQUERY PARA OBTENER EL AVANCE DE LOS RECURSOS OBLIGADOS POR ACTIVIDAD
            LEFT JOIN LATERAL (SELECT CAST(COALESCE(sum(py.value),0) as double precision) AS av_oblig
                        FROM cardinal.evidence_advance ea 
                        LEFT JOIN cardinal.payments py ON ea.id = py.evidence_id
                        WHERE ea.activity_id = act.id
                        AND ea.year = p_year
                        AND CASE WHEN actevid.year = 1 THEN act.goal_1 > 0
                                WHEN actevid.year = 2 THEN act.goal_2 > 0
                                WHEN actevid.year = 3 THEN act.goal_3 > 0
                                WHEN actevid.year = 4 THEN act.goal_4 > 0
                                END
                        GROUP BY activity_id
                        FETCH FIRST 1 ROW ONLY) avanceoblig on true
            --SUBQUERY PARA OBTENER EL AVANCE DE LOS PAGOS POR ACTIVIDAD
            LEFT JOIN LATERAL (SELECT CAST(COALESCE(sum(py.value),0) as double precision) AS av_pagos
                        FROM cardinal.evidence_advance ea 
                        LEFT JOIN cardinal.payments py ON ea.id = py.evidence_id
                        WHERE ea.activity_id = act.id
                        AND ea.year = p_year
                        AND py.payment = true
                        AND CASE WHEN actevid.year = 1 THEN act.goal_1 > 0
                                WHEN actevid.year = 2 THEN act.goal_2 > 0
                                WHEN actevid.year = 3 THEN act.goal_3 > 0
                                WHEN actevid.year = 4 THEN act.goal_4 > 0
                                END
                        GROUP BY activity_id
                        FETCH FIRST 1 ROW ONLY) avancepagos on true
            --SUBQUERY PARA OBTENER LA META FINANCIERA DEL PLAN PARA CADA ACTIVIDAD
            LEFT JOIN (SELECT CAST(COALESCE(sum(value),0) as double precision) AS met_fin_total, activity_id 
                        FROM cardinal.activity_sources
                        GROUP BY activity_id) actscttal ON act.id = actscttal.activity_id
            --SUBQUERY PARA OBTENER EL ACUMULADO DE LA META FINANCIERA PARA CADA ACTIVIDAD
            LEFT JOIN (SELECT CAST(COALESCE(sum(value),0) as double precision) AS met_fin_acum, activity_id 
                        FROM cardinal.activity_sources WHERE age <= p_year
                        GROUP BY activity_id) actscacum ON act.id = actscacum.activity_id
            --SUBQUERY PARA OBTENER EL AVANCE FINANCIERO ACUMULADO POR ACTIVIDAD
            LEFT JOIN LATERAL (SELECT CAST(COALESCE(sum(py.value),0) as double precision) AS acum_av_fin
                        FROM cardinal.evidence_advance ea 
                        LEFT JOIN cardinal.payments py ON ea.id = py.evidence_id
                        WHERE ea.activity_id = act.id
                        AND ea.year <= p_year
                        AND CASE WHEN actevid.year = 1 THEN act.goal_1 > 0
                                WHEN actevid.year = 2 THEN act.goal_2 > 0
                                WHEN actevid.year = 3 THEN act.goal_3 > 0
                                WHEN actevid.year = 4 THEN act.goal_4 > 0
                                END
                        GROUP BY activity_id
                        FETCH FIRST 1 ROW ONLY) fnacum on true
            WHERE strln.p_a_i_id = p_paid
            ORDER BY strln.id, prog.id, proy.id, obj.id, objprod.id, act.id;
            ------------------------Declaración de constantes para la consulta--------------------------------------
            DECLARE cons_index  integer := 0;
            DECLARE level integer := 0;
            DECLARE grupo integer := 0;
            DECLARE met_fin_anual double precision := 0;
            DECLARE av_fin_anual double precision := 0;
            DECLARE av_oblig double precision := 0;
            DECLARE av_pagos double precision := 0;
            DECLARE met_fin_total double precision := 0;
            DECLARE met_fin_acum double precision := 0;
            DECLARE av_fin_acum double precision := 0;
            DECLARE pc_av_fis double precision := 0;
            DECLARE pc_av_fin double precision := 0;
            DECLARE pc_av_fin_acum double precision := 0;
            DECLARE id_pai_tmp integer :=0;
            DECLARE id_lin_tmp integer :=0;
            DECLARE id_prog_tmp integer :=0;
            DECLARE id_proy_tmp integer :=0;
            DECLARE id_obj_tmp integer :=0;
            DECLARE id_prod_tmp integer :=0;
            DECLARE obj_prod_tmp integer :=0;
            DECLARE id_act_tmp integer :=0;
            --inicio del cuerpo de la función
            BEGIN
                --se trunca la tabla avances_nivel
                TRUNCATE TABLE cardinal.avances_nivel;
                --se elimina la tabla temporal temp_anexo_1 si existe
                DROP TABLE IF EXISTS temp_anexo_1;
                --se elimina la tabla temporal temp_valor_nivel si existe
                DROP TABLE IF EXISTS temp_valor_nivel;
                --se crea la tabla temporal temp_valor_nivel si no existe
                CREATE TEMP TABLE IF NOT EXISTS temp_valor_nivel (valor double precision);
                --se registran los porcentajes de avances por nivel jerárquico
                --nivel productos
                INSERT INTO temp_valor_nivel
                SELECT cardinal.get_product_avance(p_year, objprod.id)
                FROM cardinal.activities act 
                INNER JOIN cardinal.objectives obj ON act.objective_id = obj.id
                INNER JOIN cardinal.objective_products objprod ON obj.id = objprod.objective_id
                            AND (act.product_id = objprod.id OR act.product_id = objprod.product_id)
                INNER JOIN cardinal.projects proy ON obj.project_id = proy.id
                INNER JOIN cardinal.programs prog ON proy.program_id = prog.id
                INNER JOIN cardinal.strategic_lines strln ON prog.strategic_line_id = strln.id
                WHERE strln.p_a_i_id = p_paid;
                --nivel objetivos
                INSERT INTO temp_valor_nivel
                SELECT cardinal.get_objective_avance(p_year, obj.id) 
                FROM cardinal.objectives obj 
                INNER JOIN cardinal.projects proy ON obj.project_id = proy.id
                INNER JOIN cardinal.programs prog ON proy.program_id = prog.id
                INNER JOIN cardinal.strategic_lines strln ON prog.strategic_line_id = strln.id
                WHERE strln.p_a_i_id = p_paid;
                --nivel proyectos
                INSERT INTO temp_valor_nivel
                SELECT cardinal.get_project_avance(p_year, proy.id) 
                FROM cardinal.projects proy
                INNER JOIN cardinal.programs prog ON proy.program_id = prog.id
                INNER JOIN cardinal.strategic_lines strln ON prog.strategic_line_id = strln.id
                WHERE strln.p_a_i_id = p_paid;
                --nivel programas
                INSERT INTO temp_valor_nivel
                SELECT cardinal.get_program_avance(p_year, prog.id) 
                FROM cardinal.programs prog
                INNER JOIN cardinal.strategic_lines strln ON prog.strategic_line_id = strln.id
                WHERE strln.p_a_i_id = p_paid;
                --nivel líneas estratégicas
                INSERT INTO temp_valor_nivel
                SELECT cardinal.get_line_avance(p_year, strln.id) 
                FROM cardinal.strategic_lines strln
                WHERE strln.p_a_i_id = p_paid;
                --nivel plan de acción
                INSERT INTO temp_valor_nivel
                SELECT cardinal.get_pai_avance(p_year, p.id) 
                FROM cardinal.pais p
                WHERE p.id = p_paid;
                --se establece el porcentaje de avance del plan de acción
                pc_av_fis := (select av_nvl.value from cardinal.avances_nivel av_nvl where av_nvl.id = p_paid);
                --se crea tabla temporal para almacenar los registros de forma jerárquica
                CREATE TEMP TABLE IF NOT EXISTS temp_anexo_1 AS
                SELECT 
                    CAST(0 as double precision) as id_source,
                    --p.id as id_pai,
                    --CAST(p.id as double precision) as id_pai,
                    CAST(0 as double precision) as id_pai,
                    CAST(0 as double precision) as id_lin,
                    CAST(0 as double precision) as id_prod,
                    CAST(0 as double precision) as id_obj,
                    CAST(0 as double precision) as id_prog,
                    CAST(0 as double precision) as id_proy,
                    CAST(0 as bigint) as level_t,
                    CAST(0 as bigint) as grupo_pai,
                    CAST(0 as bigint) as id,
                    CAST('' as character varying(4000)) as name,
                    --CAST(p.name as character varying(4000)) as name,
                    CAST(0 as double precision) as ponderacion,
                    --CAST(1 as double precision) as ponderacion,
                    CAST('NA' as character varying) as indicador,
                    CAST(0 as integer) as unit_goal,
                    CAST ('NA' as character varying) as name_unit_goal,
                    CAST(0 as double precision) as total_goal,
                    CAST(0 as double precision) as goal_1,
                    CAST(0 as double precision) as goal_2,
                    CAST(0 as double precision) as goal_3,
                    CAST(0 as double precision) as goal_4,
                    CAST(0 as double precision) as repor_vigencia_1,
                    CAST(0 as double precision) as repor_rezago_1,
                    CAST ('' as character varying) as desc_vig_1,
                    CAST ('' as character varying) as desc_rez_1,
                    CAST(0 as double precision) as av_acum,
                    CAST(0 as double precision) as goal_anio,
                    CAST(0 as double precision) as pc_av_fis,
                    CAST(0 as double precision) as pc_av_fis_rez,
                    CAST(0 as double precision) as met_fin_anual,
                    CAST(0 as double precision) as av_met_fin,
                    CAST(0 as double precision) as av_oblig,
                    CAST(0 as double precision) as av_pagos,
                    CAST(0 as double precision) as met_fin_total,
                    CAST(0 as double precision) as acum_met_fin,
                    CAST(0 as double precision) as acum_av_fin
                FROM cardinal.activities act
                LIMIT 0;
                --se recorre el cursor
                FOR registro IN cur_codes LOOP
                    --se crea un incremental
                    cons_index := cons_index+1;
                    --valida si ya se encuentran almacenados en la tabla temporal los valores de cada nivel de la estructura
                    -- jerárquica: plan de acción, líneas estratégicas, programas, proyectos, objetivos, productos y actividades 
                    id_pai_tmp := (select count(temp_anexo_1.id) from temp_anexo_1 where temp_anexo_1.id_pai = registro.id_pai and temp_anexo_1.level_t=0);
                    id_lin_tmp := (select count(temp_anexo_1.id) from temp_anexo_1 where temp_anexo_1.id_lin = registro.id_lin and temp_anexo_1.level_t=1);
                    id_prog_tmp :=  (select count(temp_anexo_1.id) from temp_anexo_1 where temp_anexo_1.id_prog = registro.program_id  and temp_anexo_1.level_t=2);
                    id_proy_tmp :=  (select count(temp_anexo_1.id) from temp_anexo_1 where temp_anexo_1.id_proy = registro.project_id  and temp_anexo_1.level_t=3);
                    id_obj_tmp := (select count(temp_anexo_1.id) from temp_anexo_1 where temp_anexo_1.id_obj = registro.objective_id  and temp_anexo_1.level_t=4);
                    id_prod_tmp := (select count(temp_anexo_1.id) from temp_anexo_1 where temp_anexo_1.id_prod = registro.product_id  and temp_anexo_1.level_t=5);
                    id_act_tmp := (select count(temp_anexo_1.id) from temp_anexo_1 where temp_anexo_1.id_source = registro.act_id  and temp_anexo_1.level_t=6);
                    grupo := grupo+1;
                    --se inserta cada actividad
                    IF id_act_tmp = 0 THEN
                        level:=6;
                        pc_av_fin := ((CAST((registro.av_met_fin) as double precision) / CAST(GREATEST(registro.met_fin_anual, 1) as double precision)));
                        pc_av_fin_acum := ((CAST((registro.met_fin_acum) as double precision) / CAST(GREATEST(registro.met_fin_total, 1) as double precision)));
                        INSERT INTO temp_anexo_1(id_source,id_pai,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                                                total_goal,goal_1, goal_2,goal_3,goal_4,repor_vigencia_1,repor_rezago_1,desc_vig_1,desc_rez_1,av_acum,goal_anio,pc_av_fis,pc_av_fis_rez,
                                                met_fin_anual,av_met_fin,av_oblig,av_pagos,met_fin_total,acum_met_fin,acum_av_fin)
                        VALUES (registro.act_id,registro.id_pai,registro.id_lin,registro.product_id,registro.objective_id,registro.program_id,registro.project_id,
                                level,grupo,cons_index,registro.act_name,registro.act_weighing, registro.indicator_name,registro.unit_goal,registro.name_unit_goal,
                                registro.goal,registro.goal_1,registro.goal_2,registro.goal_3,registro.goal_4,registro.act_avance,registro.avcrezago,registro.act_description,registro.descripcionrezago,
                                registro.av_acum,registro.goal_anio,registro.act_percent_avance,0,
                                registro.met_fin_anual,registro.av_met_fin,registro.av_oblig,registro.av_pagos,
                                registro.met_fin_total,registro.met_fin_acum,registro.acum_av_fin);
                    END IF;
                    --se inserta cada producto
                    IF id_prod_tmp = 0 THEN
                        level:=5;
                        registro.product_met_fin := registro.met_fin_anual; 
                        registro.product_av_fin := registro.av_met_fin;
                        registro.product_av_oblig := registro.av_oblig;
                        registro.product_av_pagos := registro.av_pagos;
                        registro.product_met_fin_total := registro.met_fin_total;
                        registro.product_met_fin_acum := registro.met_fin_acum;
                        registro.product_av_fin_acum := registro.acum_av_fin;
                        pc_av_fis := (select av_nvl.value from cardinal.avances_nivel av_nvl where av_nvl.id = registro.product_id);
                        pc_av_fin := ((CAST((registro.product_av_fin) as double precision) / CAST(GREATEST(registro.product_met_fin, 1) as double precision)));
                        INSERT INTO temp_anexo_1(id_source,id_pai,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                                                total_goal,goal_1, goal_2,goal_3,goal_4,repor_vigencia_1,repor_rezago_1,desc_vig_1,desc_rez_1,av_acum,goal_anio,pc_av_fis,pc_av_fis_rez,
                                                met_fin_anual,av_met_fin,av_oblig,av_pagos,met_fin_total,acum_met_fin,acum_av_fin)
                        VALUES (registro.act_id,registro.id_pai,registro.id_lin,registro.product_id,registro.objective_id,registro.program_id,registro.project_id,
                                level, grupo,cons_index,registro.product_name,registro.product_weighing,'NA',registro.unit_goal,registro.name_unit_goal,
                                registro.product_total_goal,registro.product_goal_1,registro.product_goal_2,registro.product_goal_3,registro.product_goal_4,0,0,'NA','NA',
                                registro.product_av_acum,registro.goal_anio_product,pc_av_fis,0,registro.product_met_fin,registro.product_av_fin,registro.product_av_oblig,registro.product_av_pagos,
                                registro.product_met_fin_total,registro.product_met_fin_acum,registro.product_av_fin_acum);
                    ELSE
                        met_fin_anual := (select sum(coalesce(tmpa1.met_fin_anual,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        av_fin_anual := (select sum(coalesce(tmpa1.av_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        av_oblig := (select sum(coalesce(tmpa1.av_oblig,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        av_pagos := (select sum(coalesce(tmpa1.av_pagos,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        met_fin_total := (select sum(coalesce(tmpa1.met_fin_total,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        met_fin_acum := (select sum(coalesce(tmpa1.acum_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        av_fin_acum := (select sum(coalesce(tmpa1.acum_av_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        registro.product_met_fin := registro.met_fin_anual + met_fin_anual; 
                        registro.product_av_fin := registro.av_met_fin + av_fin_anual;
                        registro.product_av_oblig := registro.av_oblig + av_oblig;
                        registro.product_av_pagos := registro.av_pagos + av_pagos;
                        registro.product_met_fin_total := registro.met_fin_total + met_fin_total;
                        registro.product_met_fin_acum := registro.met_fin_acum + met_fin_acum;
                        registro.product_av_fin_acum := registro.acum_av_fin + av_fin_acum;
                        UPDATE temp_anexo_1 SET met_fin_anual = registro.product_met_fin,av_met_fin = registro.product_av_fin,
                        av_oblig=registro.product_av_oblig,av_pagos=registro.product_av_pagos,met_fin_total=registro.product_met_fin_total,
                        acum_met_fin=registro.product_met_fin_acum,acum_av_fin=registro.product_av_fin_acum
                        WHERE id_prod = registro.product_id AND level_t = 5;
                    END IF;
                    --se inserta cada objetivo
                    IF id_obj_tmp = 0 THEN
                        level:=4;
                        registro.obj_met_fin := (select sum(coalesce(tmpa1.met_fin_anual,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5); 
                        registro.obj_av_fin := (select sum(coalesce(tmpa1.av_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        registro.obj_av_oblig := (select sum(coalesce(tmpa1.av_oblig,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        registro.obj_av_pagos := (select sum(coalesce(tmpa1.av_pagos,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        registro.obj_met_fin_total := (select sum(coalesce(tmpa1.met_fin_total,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        registro.obj_met_fin_acum := (select sum(coalesce(tmpa1.acum_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        registro.obj_av_fin_acum := (select sum(coalesce(tmpa1.acum_av_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prod = registro.product_id and tmpa1.level_t = 5);
                        pc_av_fis := (select av_nvl.value from cardinal.avances_nivel av_nvl where av_nvl.id = registro.objective_id);
                        pc_av_fin := ((CAST((registro.obj_av_fin) as double precision) / CAST(GREATEST(registro.obj_met_fin, 1) as double precision)));
                        INSERT INTO temp_anexo_1(id_source,id_pai,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                                                total_goal,goal_1, goal_2,goal_3,goal_4,repor_vigencia_1,repor_rezago_1,desc_vig_1,desc_rez_1,av_acum,goal_anio,pc_av_fis,pc_av_fis_rez,
                                                met_fin_anual,av_met_fin,av_oblig,av_pagos,met_fin_total,acum_met_fin,acum_av_fin)
                        VALUES (registro.act_id,registro.id_pai,registro.id_lin,registro.product_id,registro.objective_id,registro.program_id,registro.project_id,
                                level,grupo,cons_index,registro.objective_name,registro.objective_weighing,'NA',0,'NA',
                                0,0,0,0,0,0,0,'NA','NA',0,0,pc_av_fis,0,registro.obj_met_fin,registro.obj_av_fin,registro.obj_av_oblig,registro.obj_av_pagos,
                                registro.obj_met_fin_total,registro.obj_met_fin_acum,registro.obj_av_fin_acum);
                    ELSE
                        met_fin_anual := (select sum(coalesce(tmpa1.met_fin_anual,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        av_fin_anual := (select sum(coalesce(tmpa1.av_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        av_oblig := (select sum(coalesce(tmpa1.av_oblig,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        av_pagos := (select sum(coalesce(tmpa1.av_pagos,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        met_fin_total := (select sum(coalesce(tmpa1.met_fin_total,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        met_fin_acum := (select sum(coalesce(tmpa1.acum_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        av_fin_acum := (select sum(coalesce(tmpa1.acum_av_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        registro.obj_met_fin := registro.met_fin_anual + met_fin_anual; 
                        registro.obj_av_fin := registro.av_met_fin + av_fin_anual;
                        registro.obj_av_oblig := registro.av_oblig + av_oblig;
                        registro.obj_av_pagos := registro.av_pagos + av_pagos;
                        registro.obj_met_fin_total := registro.met_fin_total + met_fin_total;
                        registro.obj_met_fin_acum := registro.met_fin_acum + met_fin_acum;
                        registro.obj_av_fin_acum := registro.acum_av_fin + av_fin_acum;
                        UPDATE temp_anexo_1 SET met_fin_anual = registro.obj_met_fin,av_met_fin = registro.obj_av_fin,
                        av_oblig=registro.obj_av_oblig,av_pagos=registro.obj_av_pagos,met_fin_total=registro.obj_met_fin_total,
                        acum_met_fin=registro.obj_met_fin_acum,acum_av_fin=registro.obj_av_fin_acum
                        WHERE id_obj = registro.objective_id AND level_t = 4;
                    END IF;
                    --se inserta cada proyecto
                    IF id_proy_tmp = 0 THEN
                        level:=3;
                        registro.proy_met_fin := (select sum(coalesce(tmpa1.met_fin_anual,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4); 
                        registro.proy_av_fin := (select sum(coalesce(tmpa1.av_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        registro.proy_av_oblig := (select sum(coalesce(tmpa1.av_oblig,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        registro.proy_av_pagos := (select sum(coalesce(tmpa1.av_pagos,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        registro.proy_met_fin_total := (select sum(coalesce(tmpa1.met_fin_total,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        registro.proy_met_fin_acum := (select sum(coalesce(tmpa1.acum_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        registro.proy_av_fin_acum := (select sum(coalesce(tmpa1.acum_av_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_obj = registro.objective_id and tmpa1.level_t = 4);
                        pc_av_fis := (select av_nvl.value from cardinal.avances_nivel av_nvl where av_nvl.id = registro.project_id);
                        pc_av_fin := ((CAST((registro.proy_av_fin) as double precision) / CAST(GREATEST(registro.proy_met_fin, 1) as double precision)));
                        INSERT INTO temp_anexo_1(id_source,id_pai,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                                                total_goal,goal_1, goal_2,goal_3,goal_4,repor_vigencia_1,repor_rezago_1,desc_vig_1,desc_rez_1,av_acum,goal_anio,pc_av_fis,pc_av_fis_rez,
                                                met_fin_anual,av_met_fin,av_oblig,av_pagos,met_fin_total,acum_met_fin,acum_av_fin)
                        VALUES (registro.act_id,registro.id_pai,registro.id_lin,registro.product_id,registro.objective_id,registro.program_id,registro.project_id,
                                level,grupo,cons_index,registro.project_name,registro.project_weighing,'NA',0,'NA',
                                0,0,0,0,0,0,0,'NA','NA',0,0,pc_av_fis,0,registro.proy_met_fin,registro.proy_av_fin,registro.proy_av_oblig,registro.proy_av_pagos,
                                registro.proy_met_fin_total,registro.proy_met_fin_acum,registro.proy_av_fin_acum);
                    ELSE
                        met_fin_anual := (select sum(coalesce(tmpa1.met_fin_anual,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        av_fin_anual := (select sum(coalesce(tmpa1.av_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        av_oblig := (select sum(coalesce(tmpa1.av_oblig,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        av_pagos := (select sum(coalesce(tmpa1.av_pagos,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        met_fin_total := (select sum(coalesce(tmpa1.met_fin_total,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        met_fin_acum := (select sum(coalesce(tmpa1.acum_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        av_fin_acum := (select sum(coalesce(tmpa1.acum_av_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        registro.proy_met_fin := registro.met_fin_anual + met_fin_anual; 
                        registro.proy_av_fin := registro.av_met_fin + av_fin_anual;
                        registro.proy_av_oblig := registro.av_oblig + av_oblig;
                        registro.proy_av_pagos := registro.av_pagos + av_pagos;
                        registro.proy_met_fin_total := registro.met_fin_total + met_fin_total;
                        registro.proy_met_fin_acum := registro.met_fin_acum + met_fin_acum;
                        registro.proy_av_fin_acum := registro.acum_av_fin + av_fin_acum;
                        UPDATE temp_anexo_1 SET met_fin_anual = registro.proy_met_fin,av_met_fin = registro.proy_av_fin,
                        av_oblig=registro.proy_av_oblig,av_pagos=registro.proy_av_pagos,met_fin_total=registro.proy_met_fin_total,
                        acum_met_fin=registro.proy_met_fin_acum,acum_av_fin=registro.proy_av_fin_acum
                        WHERE id_proy = registro.project_id AND level_t = 3;
                    END IF;
                    --se inserta cada programa
                    IF id_prog_tmp = 0 THEN
                        level:=2;
                        registro.prog_met_fin := (select sum(coalesce(tmpa1.met_fin_anual,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3); 
                        registro.prog_av_fin := (select sum(coalesce(tmpa1.av_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        registro.prog_av_oblig := (select sum(coalesce(tmpa1.av_oblig,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        registro.prog_av_pagos := (select sum(coalesce(tmpa1.av_pagos,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        registro.prog_met_fin_total := (select sum(coalesce(tmpa1.met_fin_total,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        registro.prog_met_fin_acum := (select sum(coalesce(tmpa1.acum_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        registro.prog_av_fin_acum := (select sum(coalesce(tmpa1.acum_av_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_proy = registro.project_id and tmpa1.level_t = 3);
                        pc_av_fis := (select av_nvl.value from cardinal.avances_nivel av_nvl where av_nvl.id = registro.program_id);
                        pc_av_fin := ((CAST((registro.prog_av_fin) as double precision) / CAST(GREATEST(registro.prog_met_fin, 1) as double precision)));
                        INSERT INTO temp_anexo_1(id_source,id_pai,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                                                total_goal,goal_1, goal_2,goal_3,goal_4,repor_vigencia_1,repor_rezago_1,desc_vig_1,desc_rez_1,av_acum,goal_anio,pc_av_fis,pc_av_fis_rez,
                                                met_fin_anual,av_met_fin,av_oblig,av_pagos,met_fin_total,acum_met_fin,acum_av_fin)
                        VALUES (registro.act_id,registro.id_pai,registro.id_lin,registro.product_id,registro.objective_id,registro.program_id,registro.project_id,
                                level,grupo,cons_index,registro.program_name,registro.program_weighing,'NA',0,'NA',
                                0,0,0,0,0,0,0,'NA','NA',0,0,pc_av_fis,0,registro.prog_met_fin,registro.prog_av_fin,registro.prog_av_oblig,registro.prog_av_pagos,
                                registro.prog_met_fin_total,registro.prog_met_fin_acum,registro.prog_av_fin_acum);
                    ELSE
                        met_fin_anual := (select sum(coalesce(tmpa1.met_fin_anual,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        av_fin_anual := (select sum(coalesce(tmpa1.av_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        av_oblig := (select sum(coalesce(tmpa1.av_oblig,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        av_pagos := (select sum(coalesce(tmpa1.av_pagos,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        met_fin_total := (select sum(coalesce(tmpa1.met_fin_total,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        met_fin_acum := (select sum(coalesce(tmpa1.acum_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        av_fin_acum := (select sum(coalesce(tmpa1.acum_av_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        registro.prog_met_fin := registro.met_fin_anual + met_fin_anual; 
                        registro.prog_av_fin := registro.av_met_fin + av_fin_anual;
                        registro.prog_av_oblig := registro.av_oblig + av_oblig;
                        registro.prog_av_pagos := registro.av_pagos + av_pagos;
                        registro.prog_met_fin_total := registro.met_fin_total + met_fin_total;
                        registro.prog_met_fin_acum := registro.met_fin_acum + met_fin_acum;
                        registro.prog_av_fin_acum := registro.acum_av_fin + av_fin_acum;
                        UPDATE temp_anexo_1 SET met_fin_anual = registro.prog_met_fin,av_met_fin = registro.prog_av_fin,
                        av_oblig=registro.prog_av_oblig,av_pagos=registro.prog_av_pagos,met_fin_total=registro.prog_met_fin_total,
                        acum_met_fin=registro.prog_met_fin_acum,acum_av_fin=registro.prog_av_fin_acum
                        WHERE id_prog = registro.program_id AND level_t = 2;
                    END IF;
                    --se inserta cada linea estratégica
                    IF id_lin_tmp = 0 THEN
                        level:=1;
                        registro.strln_met_fin := (select sum(coalesce(tmpa1.met_fin_anual,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2); 
                        registro.strln_av_fin := (select sum(coalesce(tmpa1.av_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        registro.strln_av_oblig := (select sum(coalesce(tmpa1.av_oblig,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        registro.strln_av_pagos := (select sum(coalesce(tmpa1.av_pagos,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        registro.strln_met_fin_total := (select sum(coalesce(tmpa1.met_fin_total,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        registro.strln_met_fin_acum := (select sum(coalesce(tmpa1.acum_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        registro.strln_av_fin_acum := (select sum(coalesce(tmpa1.acum_av_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_prog = registro.program_id and tmpa1.level_t = 2);
                        pc_av_fis := (select av_nvl.value from cardinal.avances_nivel av_nvl where av_nvl.id = registro.id_lin);
                        pc_av_fin := ((CAST((registro.strln_av_fin) as double precision) / CAST(GREATEST(registro.strln_met_fin, 1) as double precision)));
                        INSERT INTO temp_anexo_1(id_source,id_pai,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                                                total_goal,goal_1, goal_2,goal_3,goal_4,repor_vigencia_1,repor_rezago_1,desc_vig_1,desc_rez_1,av_acum,goal_anio,pc_av_fis,pc_av_fis_rez,
                                                met_fin_anual,av_met_fin,av_oblig,av_pagos,met_fin_total,acum_met_fin,acum_av_fin)
                        VALUES (registro.act_id,registro.id_pai,registro.id_lin,registro.product_id,registro.objective_id,registro.program_id,registro.project_id,
                                level,grupo,cons_index,registro.strln_name,registro.strln_weighing,'NA',0,'NA',
                                0,0,0,0,0,0,0,'NA','NA',0,0,pc_av_fis,0,registro.strln_met_fin,registro.strln_av_fin,registro.strln_av_oblig,registro.strln_av_pagos,
                                registro.strln_met_fin_total,registro.strln_met_fin_acum,registro.strln_av_fin_acum);
                    ELSE
                        met_fin_anual := (select sum(coalesce(tmpa1.met_fin_anual,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        av_fin_anual := (select sum(coalesce(tmpa1.av_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        av_oblig := (select sum(coalesce(tmpa1.av_oblig,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        av_pagos := (select sum(coalesce(tmpa1.av_pagos,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        met_fin_total := (select sum(coalesce(tmpa1.met_fin_total,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        met_fin_acum := (select sum(coalesce(tmpa1.acum_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        av_fin_acum := (select sum(coalesce(tmpa1.acum_av_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        registro.strln_met_fin := registro.met_fin_anual + met_fin_anual; 
                        registro.strln_av_fin := registro.av_met_fin + av_fin_anual;
                        registro.strln_av_oblig := registro.av_oblig + av_oblig;
                        registro.strln_av_pagos := registro.av_pagos + av_pagos;
                        registro.strln_met_fin_total := registro.met_fin_total + met_fin_total;
                        registro.strln_met_fin_acum := registro.met_fin_acum + met_fin_acum;
                        registro.strln_av_fin_acum := registro.acum_av_fin + av_fin_acum;
                        UPDATE temp_anexo_1 SET met_fin_anual = registro.strln_met_fin,av_met_fin = registro.strln_av_fin,
                        av_oblig=registro.strln_av_oblig,av_pagos=registro.strln_av_pagos,met_fin_total=registro.strln_met_fin_total,
                        acum_met_fin=registro.strln_met_fin_acum,acum_av_fin=registro.strln_av_fin_acum
                        WHERE temp_anexo_1.id_lin = registro.id_lin AND level_t = 1;
                    END IF;
                    --se inserta el plan de acción
                    IF id_pai_tmp = 0 THEN
                        level:=0;
                        registro.pai_met_fin := (select sum(coalesce(tmpa1.met_fin_anual,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1); 
                        registro.pai_av_fin := (select sum(coalesce(tmpa1.av_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        registro.pai_av_oblig := (select sum(coalesce(tmpa1.av_oblig,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        registro.pai_av_pagos := (select sum(coalesce(tmpa1.av_pagos,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        registro.pai_met_fin_total := (select sum(coalesce(tmpa1.met_fin_total,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        registro.pai_met_fin_acum := (select sum(coalesce(tmpa1.acum_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        registro.pai_av_fin_acum := (select sum(coalesce(tmpa1.acum_av_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_lin = registro.id_lin and tmpa1.level_t = 1);
                        pc_av_fis := (select av_nvl.value from cardinal.avances_nivel av_nvl where av_nvl.id = registro.id_pai);
                        pc_av_fin := ((CAST((registro.pai_av_fin) as double precision) / CAST(GREATEST(registro.pai_met_fin, 1) as double precision)));
                        INSERT INTO temp_anexo_1(id_source,id_pai,id_lin,id_prod,id_obj,id_prog,id_proy,level_t,grupo_pai,id,name,ponderacion,indicador,unit_goal,name_unit_goal,
                                                total_goal,goal_1, goal_2,goal_3,goal_4,repor_vigencia_1,repor_rezago_1,desc_vig_1,desc_rez_1,av_acum,goal_anio,pc_av_fis,pc_av_fis_rez,
                                                met_fin_anual,av_met_fin,av_oblig,av_pagos,met_fin_total,acum_met_fin,acum_av_fin)
                        VALUES (registro.act_id,registro.id_pai,registro.id_lin,registro.product_id,registro.objective_id,registro.program_id,registro.project_id,
                                level,grupo,cons_index,registro.pai_name,registro.pai_weighing,'NA',0,'NA',
                                0,0,0,0,0,0,0,'NA','NA',0,0,pc_av_fis,0,registro.pai_met_fin,registro.pai_av_fin,registro.pai_av_oblig,registro.pai_av_pagos,
                                registro.pai_met_fin_total,registro.pai_met_fin_acum,registro.pai_av_fin_acum);
                    ELSE
                        met_fin_anual := (select sum(coalesce(tmpa1.met_fin_anual,0)) from temp_anexo_1 tmpa1 where tmpa1.id_pai = registro.id_pai and tmpa1.level_t = 0);
                        av_fin_anual := (select sum(coalesce(tmpa1.av_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_pai = registro.id_pai and tmpa1.level_t = 0);
                        av_oblig := (select sum(coalesce(tmpa1.av_oblig,0)) from temp_anexo_1 tmpa1 where tmpa1.id_pai = registro.id_pai and tmpa1.level_t = 0);
                        av_pagos := (select sum(coalesce(tmpa1.av_pagos,0)) from temp_anexo_1 tmpa1 where tmpa1.id_pai = registro.id_pai and tmpa1.level_t = 0);
                        met_fin_total := (select sum(coalesce(tmpa1.met_fin_total,0)) from temp_anexo_1 tmpa1 where tmpa1.id_pai = registro.id_pai and tmpa1.level_t = 0);
                        met_fin_acum := (select sum(coalesce(tmpa1.acum_met_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_pai = registro.id_pai and tmpa1.level_t = 0);
                        av_fin_acum := (select sum(coalesce(tmpa1.acum_av_fin,0)) from temp_anexo_1 tmpa1 where tmpa1.id_pai = registro.id_pai and tmpa1.level_t = 0);
                        registro.pai_met_fin := registro.met_fin_anual + met_fin_anual; 
                        registro.pai_av_fin := registro.av_met_fin + av_fin_anual;
                        registro.pai_av_oblig := registro.av_oblig + av_oblig;
                        registro.pai_av_pagos := registro.av_pagos + av_pagos;
                        registro.pai_met_fin_total := registro.met_fin_total + met_fin_total;
                        registro.pai_met_fin_acum := registro.met_fin_acum + met_fin_acum;
                        registro.pai_av_fin_acum := registro.acum_av_fin + av_fin_acum;
                        UPDATE temp_anexo_1 SET met_fin_anual = registro.pai_met_fin,av_met_fin = registro.pai_av_fin,
                        av_oblig=registro.pai_av_oblig,av_pagos=registro.pai_av_pagos,met_fin_total=registro.pai_met_fin_total,
                        acum_met_fin=registro.pai_met_fin_acum,acum_av_fin=registro.pai_av_fin_acum
                        WHERE temp_anexo_1.id_pai = registro.id_pai AND level_t = 0;
                    END IF;
                END LOOP;
                RETURN QUERY 
                SELECT temp_anexo_1.id_lin, temp_anexo_1.level_t , temp_anexo_1.grupo_pai , temp_anexo_1.id , temp_anexo_1.name , 
                temp_anexo_1.ponderacion , temp_anexo_1.indicador, temp_anexo_1.unit_goal , temp_anexo_1.name_unit_goal ,
                temp_anexo_1.total_goal , temp_anexo_1.goal_1 , temp_anexo_1.goal_2 , temp_anexo_1.goal_3 , temp_anexo_1.goal_4 , 
                temp_anexo_1.repor_vigencia_1 , temp_anexo_1.repor_rezago_1 , temp_anexo_1.desc_vig_1 ,
                temp_anexo_1.desc_rez_1,temp_anexo_1.av_acum,temp_anexo_1.goal_anio,temp_anexo_1.pc_av_fis,temp_anexo_1.pc_av_fis_rez,
                temp_anexo_1.met_fin_anual,temp_anexo_1.av_met_fin,temp_anexo_1.av_oblig,temp_anexo_1.av_pagos, 
                temp_anexo_1.met_fin_total,temp_anexo_1.acum_met_fin,temp_anexo_1.acum_av_fin
                FROM temp_anexo_1;
            END;
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
