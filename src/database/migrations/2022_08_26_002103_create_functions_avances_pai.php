<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionsAvancesPai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*función avances objetivos */
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.get_objective_avance(
            p_year integer,
            p_obj bigint)
            RETURNS double precision
        AS $$
            DECLARE resultado DOUBLE PRECISION;
            DECLARE cantgistros INT;
            BEGIN
            SELECT SUM(suma.valor) INTO resultado
            FROM(
            SELECT CASE WHEN ((q1.totalact IS NOT NULL AND q1.totalact > 0) 
                        AND q1.avance > -1
                        AND q1.weighing IS NOT NULL)
                        THEN (q1.weighing + (q1.ponddtrib/q1.totalact)) * (q1.avance)
            ELSE  
                -1
            END AS valor
                FROM(
                    SELECT  CASE WHEN totalact.totalact = 0 THEN 1 ELSE totalact.totalact END AS totalact, 
                    CASE WHEN  avanceobj.avance IS NULL THEN -1 
                            WHEN (avanceobj.avance/avanceobj.meta) > 1 THEN 1
                            ELSE (avanceobj.avance/avanceobj.meta) 
                    END AS avance, 
                    avanceobj.weighing, 
                    actsinmt.ponddtrib
                    FROM cardinal.objectives obj
                    LEFT JOIN LATERAL (SELECT (CAST(COALESCE(SUM(actsinmt.weighing), 0) as double precision) / CAST(100 as double precision)) AS ponddtrib
                                FROM cardinal.activities actsinmt
                                WHERE actsinmt.objective_id = obj.id
                                AND CASE WHEN p_year = 1 THEN actsinmt.goal_1 = 0
                                        WHEN p_year = 2 THEN actsinmt.goal_2 = 0
                                        WHEN p_year = 3 THEN actsinmt.goal_3 = 0
                                        WHEN p_year = 4 THEN actsinmt.goal_4 = 0
                                END
                                FETCH FIRST 1 ROW ONLY) actsinmt ON true
                    LEFT JOIN LATERAL (SELECT COUNT(actconmt.id) AS totalact
                                FROM cardinal.activities actconmt
                                WHERE actconmt.objective_id = obj.id
                                AND CASE WHEN p_year = 1 THEN actconmt.goal_1 > 0
                                        WHEN p_year = 2 THEN actconmt.goal_2 > 0
                                        WHEN p_year = 3 THEN actconmt.goal_3 > 0
                                        WHEN p_year = 4 THEN actconmt.goal_4 > 0
                                END
                                FETCH FIRST 1 ROW ONLY) totalact ON true
                    LEFT JOIN LATERAL (SELECT ea.value as avance,
                                        CASE WHEN p_year = 1 THEN act.goal_1
                                            WHEN p_year = 2 THEN act.goal_2
                                            WHEN p_year = 3 THEN act.goal_3
                                            WHEN p_year = 4 THEN act.goal_4
                                        END AS meta,
                                        (CAST((act.weighing) as double precision) / CAST(100 as double precision)) as weighing
                                FROM cardinal.activities act
                                LEFT JOIN cardinal.evidence_advance ea on act.id = ea.activity_id AND act.objective_id = obj.id
                                WHERE ea.year = p_year
                                AND CASE WHEN p_year = 1 THEN act.goal_1 > 0
                                        WHEN p_year = 2 THEN act.goal_2 > 0
                                        WHEN p_year = 3 THEN act.goal_3 > 0
                                        WHEN p_year = 4 THEN act.goal_4 > 0
                                END
                                ) avanceobj ON true
                    WHERE obj.id = p_obj
                    ) q1) suma;
                    --INSERTA EL OBJETIVO CON SU VALORACIÓN EN LA TABLA TEMPORAL
                    SELECT COUNT(id) INTO cantgistros FROM cardinal.avances_nivel WHERE id = p_obj;
                    IF cantgistros = 0 THEN
                        INSERT INTO cardinal.avances_nivel (id, value, level_t)
                        VALUES (p_obj, resultado, 4);
                    END IF;
                RETURN resultado; 
            END;
        $$ language plpgsql;");
        /*función avances proyectod */
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.get_project_avance(
            p_year integer,
            p_proy bigint)
            RETURNS double precision
        AS $$
            DECLARE resultado DOUBLE PRECISION;
            DECLARE cantgistros INT;
            BEGIN
                SELECT CASE 
                        WHEN suma.valor IS NULL THEN -1 
                        ELSE suma.valor END AS valor INTO resultado
                FROM(
                    SELECT SUM((q1.weighing + (q1.ponddtrib/q1.totalobj)) * q1.avance) AS valor
                    FROM(
                    SELECT CASE WHEN objvalor.weighing IS NULL THEN 0 ELSE objvalor.weighing END AS weighing, 
                            CASE WHEN objvalor.avance IS NULL OR objvalor.avance = -1 THEN 0 ELSE objvalor.avance END AS avance,
                            CASE WHEN totalobj.totalobj = 0 THEN 1 ELSE totalobj.totalobj END AS totalobj,
                            objsinavc.ponddtrib
                    FROM cardinal.projects proy
                    INNER JOIN cardinal.objectives obj on proy.id = obj.project_id
                    LEFT JOIN LATERAL (SELECT avnvl.id, avnvl.value as avance, (CAST((objin.weighing) as double precision) / CAST(100 as double precision)) as weighing
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.objectives objin ON avnvl.id = objin.id
                                        WHERE avnvl.id = obj.id
                                        AND avnvl.value > -1
                                        ORDER BY 1) objvalor ON true
                    LEFT JOIN LATERAL (SELECT COUNT(objin.id) AS totalobj
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.objectives objin ON avnvl.id = objin.id AND objin.project_id = proy.id
                                        WHERE avnvl.value > -1
                                        FETCH FIRST 1 ROW ONLY) totalobj ON true
                    LEFT JOIN LATERAL (SELECT (CAST(COALESCE(SUM(objin.weighing), 0) as double precision) / CAST(100 as double precision)) AS ponddtrib
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.objectives objin ON avnvl.id = objin.id AND objin.project_id = proy.id
                                        WHERE avnvl.value = -1
                                        FETCH FIRST 1 ROW ONLY) objsinavc ON true
                    WHERE proy.id = p_proy
                    AND objvalor.avance > -1
                    ) q1) suma;
                --INSERTA EL OBJETIVO CON SU VALORACIÓN EN LA TABLA TEMPORAL
                SELECT COUNT(id) INTO cantgistros FROM cardinal.avances_nivel WHERE id = p_proy;
                IF cantgistros = 0 THEN
                    INSERT INTO cardinal.avances_nivel (id, value, level_t)
                    VALUES (p_proy, resultado, 3);
                END IF;
                RETURN resultado; 
            END;
        $$ language plpgsql;");
        /*función avances programas */
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.get_program_avance(
            p_year integer,
            p_prog bigint)
            RETURNS double precision
        AS $$
            DECLARE resultado DOUBLE PRECISION;
            DECLARE cantgistros INT;
            BEGIN
                SELECT CASE 
                        WHEN suma.valor IS NULL THEN -1 
                        ELSE suma.valor END AS valor INTO resultado
                FROM(
                    SELECT SUM((q1.weighing + (q1.ponddtrib/q1.totalproy)) * q1.avance) AS valor
                    FROM(
                    SELECT CASE WHEN proyvalor.weighing IS NULL THEN 0 ELSE proyvalor.weighing END AS weighing, 
                            CASE WHEN proyvalor.avance IS NULL THEN -1 ELSE proyvalor.avance END AS avance,
                            CASE WHEN totalproy.totalproy = 0 THEN 1 ELSE totalproy.totalproy END AS totalproy,
                            proysinavc.ponddtrib
                    FROM cardinal.programs prog
                    INNER JOIN cardinal.projects proy on prog.id = proy.program_id
                    --QUERY PARA OBTENER EL AVANCE DE CADA OBLIGACION CON META MAYOR A CERO Y SU PONDERACIÓN
                    LEFT JOIN LATERAL (SELECT avnvl.id, avnvl.value as avance, (CAST((proyin.weighing) as double precision) / CAST(100 as double precision)) as weighing
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.projects proyin ON avnvl.id = proyin.id
                                        WHERE avnvl.id = proy.id
                                        AND avnvl.value > -1
                                        ORDER BY 1) proyvalor ON true
                    --QUERY PARA OBTENER LA CANTIDAD DE OBLIGACIONES CON META MAYOR A CERO PARA EL AÑO
                    LEFT JOIN LATERAL (SELECT COUNT(proyin.id) AS totalproy
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.projects proyin ON avnvl.id = proyin.id AND proyin.program_id = prog.id
                                        WHERE avnvl.value > -1
                                        FETCH FIRST 1 ROW ONLY) totalproy ON true
                    --QUERY PARA OBTENER LAS PONDERACIONES DE LAS OBLIGACIONES QUE SE DEBEN DISTRIBUIR PORQUE SU META PARA EL AÑO ES 0
                    LEFT JOIN LATERAL (SELECT (CAST(COALESCE(SUM(proyin.weighing), 0) as double precision) / CAST(100 as double precision)) AS ponddtrib
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.projects proyin ON avnvl.id = proyin.id AND proyin.program_id = prog.id
                                        WHERE avnvl.value = -1
                                        FETCH FIRST 1 ROW ONLY) proysinavc ON true
                    WHERE prog.id = p_prog
                    AND proyvalor.avance > -1
                    ) q1) suma;
                --INSERTA EL OBJETIVO CON SU VALORACIÓN EN LA TABLA TEMPORAL
                SELECT COUNT(id) INTO cantgistros FROM cardinal.avances_nivel WHERE id = p_prog;
                IF cantgistros = 0 THEN
                    INSERT INTO cardinal.avances_nivel (id, value, level_t)
                    VALUES (p_prog, resultado, 2);
                END IF;
                RETURN resultado; 
            END;
        $$ language plpgsql;");
        /*función avances lineas */
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.get_line_avance(
            p_year integer,
            p_line bigint)
            RETURNS double precision
        AS $$
            DECLARE resultado DOUBLE PRECISION;
            DECLARE cantgistros INT;
            BEGIN
                SELECT CASE 
                        WHEN suma.valor IS NULL THEN -1 
                        ELSE suma.valor END AS valor INTO resultado
                FROM(
                    SELECT SUM((q1.weighing + (q1.ponddtrib/q1.totalprog)) * q1.avance) AS valor
                    FROM(
                    SELECT CASE WHEN progvalor.weighing IS NULL THEN 0 ELSE progvalor.weighing END AS weighing, 
                            CASE WHEN progvalor.avance IS NULL OR progvalor.avance = -1 THEN 0 ELSE progvalor.avance END AS avance,
                            CASE WHEN totalprog.totalprog = 0 THEN 1 ELSE totalprog.totalprog END AS totalprog,
                            progsinavc.ponddtrib
                    FROM cardinal.strategic_lines strl
                    INNER JOIN cardinal.programs prog on strl.id = prog.strategic_line_id
                    --QUERY PARA OBTENER EL AVANCE DE CADA PROGRAMA Y SU PONDERACIÓN
                    LEFT JOIN LATERAL (SELECT avnvl.id, avnvl.value as avance, (CAST((progin.weighing) as double precision) / CAST(100 as double precision)) as weighing
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.programs progin ON avnvl.id = progin.id
                                        WHERE avnvl.id = prog.id
                                        AND avnvl.value > -1
                                        ORDER BY 1) progvalor ON true
                    --QUERY PARA OBTENER LA CANTIDAD DE PROGRAMAS CON META MAYOR A CERO PARA EL AÑO
                    LEFT JOIN LATERAL (SELECT COUNT(progin.id) AS totalprog
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.programs progin ON avnvl.id = progin.id AND progin.strategic_line_id = strl.id 
                                        WHERE avnvl.value > -1
                                        FETCH FIRST 1 ROW ONLY) totalprog ON true
                    --QUERY PARA OBTENER LAS PONDERACIONES DE LOS PROGRAMAS QUE SE DEBEN DISTRIBUIR PORQUE SU VALOR ES -1
                    LEFT JOIN LATERAL (SELECT (CAST(COALESCE(SUM(progin.weighing), 0) as double precision) / CAST(100 as double precision)) AS ponddtrib
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.programs progin ON avnvl.id = progin.id AND progin.strategic_line_id = strl.id
                                        WHERE avnvl.value = -1
                                        FETCH FIRST 1 ROW ONLY) progsinavc ON true
                    WHERE strl.id = p_line
                    AND progvalor.avance > -1
                    ) q1) suma;
                --INSERTA EL OBJETIVO CON SU VALORACIÓN EN LA TABLA TEMPORAL
                SELECT COUNT(id) INTO cantgistros FROM cardinal.avances_nivel WHERE id = p_line;
                IF cantgistros = 0 THEN
                    INSERT INTO cardinal.avances_nivel (id, value, level_t)
                    VALUES (p_line, resultado, 1);
                END IF;
                RETURN resultado; 
            END;
        $$ language plpgsql;");
        /*función avances pai */
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.get_pai_avance(
            p_year integer,
            p_pai bigint)
            RETURNS double precision
        AS $$
            DECLARE resultado DOUBLE PRECISION;
            DECLARE cantgistros INT;
            BEGIN
                SELECT CASE 
                        WHEN suma.valor IS NULL THEN -1 
                        ELSE suma.valor END AS valor INTO resultado
                FROM(
                    SELECT SUM((q1.weighing + (q1.ponddtrib/q1.totalline)) * q1.avance) AS valor
                    FROM(
                    SELECT CASE WHEN linevalor.weighing IS NULL THEN 0 ELSE linevalor.weighing END AS weighing,
                            CASE WHEN linevalor.avance IS NULL THEN -1 ELSE linevalor.avance END AS avance,
                            CASE WHEN totalline.totalline = 0 THEN 1 ELSE totalline.totalline END AS totalline,
                            linesinavc.ponddtrib
                    FROM cardinal.pais p 
                    INNER JOIN cardinal.strategic_lines strl on p.id = strl.p_a_i_id
                    --QUERY PARA OBTENER EL AVANCE DE CADA LÍNEA Y SU PONDERACIÓN
                    LEFT JOIN LATERAL (SELECT avnvl.id, avnvl.value as avance, (CAST((linein.weighing) as double precision) / CAST(100 as double precision)) as weighing
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.strategic_lines linein ON avnvl.id = linein.id
                                        WHERE avnvl.id = strl.id
                                        AND avnvl.value > -1
                                        ORDER BY 1) linevalor ON true
                    --QUERY PARA OBTENER LA CANTIDAD DE LINEAS CON META MAYOR A CERO PARA EL AÑO
                    LEFT JOIN LATERAL (SELECT COUNT(linein.id) AS totalline
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.strategic_lines linein ON avnvl.id = linein.id AND linein.p_a_i_id = p.id
                                        WHERE avnvl.value > -1
                                        FETCH FIRST 1 ROW ONLY) totalline ON true
                    --QUERY PARA OBTENER LAS PONDERACIONES DE LAS LINEAS QUE SE DEBEN DISTRIBUIR PORQUE SU VALOR ES -1
                    LEFT JOIN LATERAL (SELECT (CAST(COALESCE(SUM(linein.weighing), 0) as double precision) / CAST(100 as double precision)) AS ponddtrib
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.strategic_lines linein ON avnvl.id = linein.id AND linein.p_a_i_id = p.id
                                        WHERE avnvl.value = -1
                                        FETCH FIRST 1 ROW ONLY) linesinavc ON true
                    WHERE p.id = p_pai
                    AND linevalor.avance > -1
                    ) q1) suma;
                --INSERTA EL OBJETIVO CON SU VALORACIÓN EN LA TABLA TEMPORAL
                SELECT COUNT(id) INTO cantgistros FROM cardinal.avances_nivel WHERE id = p_pai;
                IF cantgistros = 0 THEN
                    INSERT INTO cardinal.avances_nivel (id, value, level_t)
                    VALUES (p_pai, resultado, 0);
                END IF;
                RETURN resultado; 
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
        Schema::dropIfExists('functions_avances_pai');
    }
}
