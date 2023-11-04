<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FuncGetObjectiveAvance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.get_objective_avance(
            p_year integer,
            p_obj bigint)
            RETURNS double precision AS $$
                DECLARE resultado DOUBLE PRECISION;
                DECLARE cantgistros INT;
                BEGIN
                SELECT SUM(suma.valor) INTO resultado
                FROM(
                SELECT CASE WHEN ((q1.totalact IS NOT NULL AND q1.totalact > 0) 
                    AND (q1.meta IS NOT NULL AND q1.meta > 0)
                    AND q1.avance IS NOT NULL
                    AND q1.weighing IS NOT NULL)
                THEN (q1.weighing + (q1.ponddtrib/q1.totalact)) * (q1.avance/q1.meta)
                ELSE  
                    -1
                END AS valor
                    FROM(
                        SELECT  CASE WHEN totalact.totalact = 0 THEN 1 ELSE totalact.totalact END AS totalact, 
                        CASE WHEN pondobj.meta IS NULL THEN 0 ELSE pondobj.meta END AS meta, 
                        pondobj.avance, 
                        pondobj.weighing, 
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
                                    ) pondobj ON true
                        WHERE obj.id = p_obj
                        GROUP BY totalact.totalact, pondobj.meta,pondobj.avance,pondobj.weighing,actsinmt.ponddtrib) q1
                        GROUP BY q1.totalact, q1.meta, q1.avance, q1.weighing, q1.ponddtrib) suma;
                        --INSERTA EL OBJETIVO CON SU VALORACIÓN EN LA TABLA TEMPORAL
                        SELECT COUNT(id) INTO cantgistros FROM cardinal.avances_nivel WHERE id = p_obj;
                        IF cantgistros = 0 THEN
                            INSERT INTO cardinal.avances_nivel (id, value, level_t)
                            VALUES (p_obj, resultado, 4);
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
        //
    }
}
