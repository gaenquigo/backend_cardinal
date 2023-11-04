<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FuncA1ByYear extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.a1_by_year(
            p_year integer,
            p_paid integer)
            RETURNS TABLE(st_lin_id bigint, st_lin_name character varying, line_weighing double precision, id_prog bigint, car_program character varying, prog_weighing double precision, id_proy bigint, project character varying, proy_weighing double precision, id_obj bigint, obj_name character varying, obj_weighing double precision, id_product bigint, product_id bigint, prod_name character varying, unit_goal integer, name_unit_goal character varying, id_act bigint, act_name character varying, goal double precision, goal_1 double precision, goal_2 double precision, goal_3 double precision, goal_4 double precision, act_weighing double precision, indicadorname character varying, avance double precision, descripcion character varying, gest_avance_anual double precision, avcrezago double precision, descripcionrezago character varying, suma_cuatrienio double precision, met_fin_anual double precision, av_met_fin double precision, met_fin_total double precision, acum_met_fin double precision, avance_gest double precision) 
            AS $$
            declare
                rec_pai record;
                cur_codes cursor(p_year integer, p_paid integer)
                        for SELECT distinct 
                        strln.id as st_lin_id,
                        strln.name as st_lin_name,
                        (CAST((strln.weighing) as double precision) / CAST(100 as double precision)) as line_weighing,
                        prog.id as id_prog,
                        prog.car_program,
                        (CAST((prog.weighing) as double precision) / CAST(100 as double precision)) as prog_weighing,
                        obj.project_id as id_proy,
                        proy.project,
                        (CAST((proy.weighing) as double precision) / CAST(100 as double precision)) as proy_weighing,
                        act.objective_id as id_obj,
                        obj.objective as obj_name,
                        (CAST((obj.weighing) as double precision) / CAST(100 as double precision)) as obj_weighing,
                        objprod.id as id_product,
                        objprod.product_id,
                        CASE WHEN objprod.product_id is null THEN objprod.product_other
                                ELSE dmprod.name END as prod_name,
                        objprod.unit_goal,
                        dmunid.name as name_unit_goal,
                        act.id as id_act,
                        act.name as act_name,
                        act.goal,
                        act.goal_1,
                        act.goal_2,
                        act.goal_3,
                        act.goal_4,
                        (CAST((act.weighing) as double precision) / CAST(100 as double precision))as act_weighing,
                        /*(CAST((objprod.weighing) as double precision) / CAST(100 as double precision)) as prod_weighing,
                        objprod.goal_1_balance as prod_goal_1,
                        objprod.goal_2_balance as prod_goal_2,
                        objprod.goal_3_balance as prod_goal_3,
                        objprod.goal_4_balance as prod_goal_4,
                        'nivel 5' as level_t,
                        obj.id as obj_id,*/
                        ind.abbreviated_name as indicadorname,
                        actevid.avance,
                        actevid.descripcion,
                        CASE WHEN actevid.year = 1 THEN CAST((actevid.avance / act.goal_1) as double precision)
                                WHEN actevid.year = 2 THEN CAST((actevid.avance / act.goal_2) as double precision)
                                WHEN actevid.year = 3 THEN CAST((actevid.avance / act.goal_3) as double precision)
                                WHEN actevid.year = 4 THEN CAST((actevid.avance / act.goal_4) as double precision)
                        END AS gest_avance_anual,
                        avcrezago.avcrezago,
                        avcrezago.descripcionrezago,
                        sumavc.suma_cuatrienio,
                        actsc.met_fin_anual,
                        fnavc.av_met_fin,
                        actscttal.met_fin_total,
                        fnacum.acum_met_fin,
                        CASE WHEN act.goal = 0 THEN 0
                                WHEN (sumavc.suma_cuatrienio/act.goal) > 1 THEN 1
                                ELSE (sumavc.suma_cuatrienio/act.goal) END as avance_gest
                        FROM
                        cardinal.activities act 
                        INNER JOIN cardinal.objectives obj ON act.objective_id = obj.id
                        --DE LA TABLA OBJECTIVE PRODUCTS SE UTIIZA EL CAMPO ID CUANDO SON PRODUCTOS PROPIOS
                        --O EL CAMPO PDODUCT_ID CUANDO ES UN PRODUCTO DE POLÍTICA NACIONAL AMBIENTAL
                        INNER JOIN cardinal.objective_products objprod ON obj.id = objprod.objective_id
                        AND (act.product_id = objprod.id OR act.product_id = objprod.product_id)
                        INNER JOIN (SELECT id, name FROM cardinal.domains) dmunid on objprod.unit_goal = dmunid.id
                        LEFT JOIN (SELECT id, name FROM cardinal.domains) dmprod on objprod.product_id = dmprod.id
                        INNER JOIN cardinal.projects proy ON obj.project_id = proy.id
                        INNER JOIN cardinal.programs prog ON proy.program_id = prog.id
                        INNER JOIN cardinal.strategic_lines strln ON prog.strategic_line_id = strln.id
                        LEFT JOIN cardinal.indicator_activities indact ON act.id = indact.activities_id
                        LEFT JOIN cardinal.indicators ind ON indact.indicator_id = ind.id
                        LEFT JOIN cardinal.domains dm ON indact.variable_in = dm.id
                        LEFT JOIN (SELECT CAST(COALESCE(sum(value),0) as double precision) AS avance, string_agg(description, ', ') as descripcion,  activity_id, year
                                    FROM cardinal.evidence_advance WHERE year = p_year AND rezago = false
                                    GROUP BY activity_id, year) actevid ON act.id = actevid.activity_id
                                    AND CASE WHEN actevid.year = 1 THEN act.goal_1 > 0
                                            WHEN actevid.year = 2 THEN act.goal_2 > 0
                                            WHEN actevid.year = 3 THEN act.goal_3 > 0
                                            WHEN actevid.year = 4 THEN act.goal_4 > 0
                                            END
                        LEFT JOIN (SELECT CAST(COALESCE(sum(value),0) as double precision) AS suma_cuatrienio, activity_id
                                    FROM cardinal.evidence_advance WHERE year <= p_year
                                    GROUP BY activity_id) sumavc ON act.id = sumavc.activity_id
                        LEFT JOIN (SELECT CAST(COALESCE(sum(value),0) as double precision) AS avcrezago, string_agg(description, ', ') as descripcionrezago, activity_id
                                    FROM cardinal.evidence_advance WHERE rezago = true AND year = p_year
                                    GROUP BY activity_id) avcrezago ON act.id = avcrezago.activity_id
                        LEFT JOIN (SELECT CAST(COALESCE(sum(value),0) as double precision) AS met_fin_anual, activity_id 
                                    FROM cardinal.activity_sources WHERE age = p_year
                                    GROUP BY activity_id) actsc ON act.id = actsc.activity_id
                        LEFT JOIN (SELECT CAST(COALESCE(sum(value),0) as double precision) AS met_fin_total, activity_id 
                                    FROM cardinal.activity_sources
                                    GROUP BY activity_id) actscttal ON act.id = actscttal.activity_id
                        LEFT JOIN (SELECT CAST(COALESCE(sum(ef.value),0) as double precision) AS av_met_fin, activity_id
                                    FROM cardinal.evidence_financial ef 
                                    INNER JOIN cardinal.evidence_advance ea ON ef.evidence_id = ea.id
                                    WHERE ea.year = p_year
                                    GROUP BY activity_id) fnavc on act.id = fnavc.activity_id
                        LEFT JOIN (SELECT CAST(COALESCE(sum(ef.value),0) as double precision) AS acum_met_fin, activity_id
                                    FROM cardinal.evidence_financial ef 
                                    INNER JOIN cardinal.evidence_advance ea ON ef.evidence_id = ea.id
                                    WHERE ea.year <= p_year
                                    GROUP BY activity_id) fnacum on act.id = fnacum.activity_id
                        WHERE strln.p_a_i_id = p_paid;
                ------------------------Declaración de constantes para la consulta--------------------------------------
                DECLARE cons_index integer := 0;
                DECLARE level integer := 0;
                BEGIN
                DROP TABLE IF EXISTS temp_table;
                CREATE TEMP TABLE temp_table AS
                select 
                CAST(0 as bigint) as st_lin_id,
                CAST(NULL as character varying) as st_lin_name,
                CAST(0 as double precision) as line_weighing,
                CAST(0 as bigint) as id_prog,
                CAST(NULL as character varying) as car_program,
                CAST(0 as double precision) as prog_weighing,
                CAST(0 as bigint) as id_proy,
                CAST(NULL as character varying) as project,
                CAST(0 as double precision) as proy_weighing,
                CAST(0 as bigint) as id_obj,
                CAST(NULL as character varying) as obj_name,
                CAST(0 as double precision) as obj_weighing,
                CAST(0 as bigint) as id_product,
                CAST(0 as bigint) as product_id,
                CAST(NULL as character varying) as prod_name,
                CAST(0 as integer) as unit_goal,
                CAST (NULL as character varying) as name_unit_goal,
                act.id AS id_act,
                CAST(NULL as character varying) as act_name,
                CAST(0 as double precision) as goal,
                CAST(0 as double precision) as goal_1,
                CAST(0 as double precision) as goal_2,
                CAST(0 as double precision) as goal_3,
                CAST(0 as double precision) as goal_4,
                CAST(0 as double precision) as act_weighing,
                CAST(NULL as character varying) as indicadorname,
                CAST(0 as double precision) as avance,
                CAST (NULL as character varying) as descripcion,
                CAST(0 as double precision) as gest_avance_anual,
                CAST(0 as double precision) as avcrezago,
                CAST (NULL as character varying) as descripcionrezago,
                CAST(0 as double precision) as suma_cuatrienio,
                CAST(0 as double precision) as met_fin_anual,
                CAST(0 as double precision) as av_met_fin,
                CAST(0 as double precision) as met_fin_total,
                CAST(0 as double precision) as acum_met_fin,
                CAST(0 as double precision) as avance_gest
                FROM  cardinal.activities act 
                order by act.id
                limit 0;
                    -- open the cursor
                    OPEN cur_codes(p_year, p_paid);
                    LOOP
                    -- fetch row into the film
                        FETCH cur_codes INTO rec_pai;
                    -- exit when no more row to fetch
                        EXIT WHEN NOT FOUND;
                        INSERT INTO temp_table(
                        st_lin_id,
                        st_lin_name,
                        line_weighing,
                        id_prog,
                        car_program,
                        prog_weighing,
                        id_proy,
                        project,
                        proy_weighing,
                        id_obj,
                        obj_name,
                        obj_weighing,
                        id_product,
                        product_id,
                        prod_name,
                        unit_goal,
                        name_unit_goal,
                        id_act,
                        act_name,
                        goal,
                        goal_1, 
                        goal_2, 
                        goal_3, 
                        goal_4, 
                        act_weighing,
                        indicadorname,
                        avance,
                        descripcion,
                        gest_avance_anual,
                        avcrezago,
                        descripcionrezago,
                        suma_cuatrienio,
                        met_fin_anual,
                        av_met_fin,
                        met_fin_total,
                        acum_met_fin)
                        VALUES(
                        rec_pai.st_lin_id,
                        rec_pai.st_lin_name,
                        rec_pai.line_weighing,
                        rec_pai.id_prog,
                        rec_pai.car_program,
                        rec_pai.prog_weighing,
                        rec_pai.id_proy,
                        rec_pai.project,
                        rec_pai.proy_weighing,
                        rec_pai.id_obj,
                        rec_pai.obj_name,
                        rec_pai.obj_weighing,
                        rec_pai.id_product,
                        rec_pai.product_id,
                        rec_pai.prod_name,
                        rec_pai.unit_goal,
                        rec_pai.name_unit_goal,
                        rec_pai.id_act,
                        rec_pai.act_name,
                        rec_pai.goal,
                        rec_pai.goal_1, 
                        rec_pai.goal_2, 
                        rec_pai.goal_3, 
                        rec_pai.goal_4, 
                        rec_pai.act_weighing,
                        rec_pai.indicadorname,
                        rec_pai.avance,
                        rec_pai.descripcion,
                        rec_pai.gest_avance_anual,
                        rec_pai.avcrezago,
                        rec_pai.descripcionrezago,
                        rec_pai.suma_cuatrienio,
                        rec_pai.met_fin_anual,
                        rec_pai.av_met_fin,
                        rec_pai.met_fin_total,
                        rec_pai.acum_met_fin
                        );
                    END LOOP;
                    -- close the cursor
                    CLOSE cur_codes;
                RETURN QUERY 
                SELECT * FROM temp_table;
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
