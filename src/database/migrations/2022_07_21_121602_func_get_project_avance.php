<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FuncGetProjectAvance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.get_project_avance(
            p_year integer,
            p_proy bigint)
            RETURNS double precision AS $$
                DECLARE resultado DOUBLE PRECISION;
                DECLARE cantgistros INT;
                BEGIN
                    SELECT SUM((q1.weighing + (q1.ponddtrib/q1.totalobj)) * q1.avance) INTO resultado
                    FROM(
                    SELECT CASE WHEN objvalor.weighing IS NULL THEN 0 ELSE objvalor.weighing END AS weighing, 
                            CASE WHEN objvalor.avance IS NULL THEN -1 ELSE objvalor.avance END AS avance,
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
                    LEFT JOIN LATERAL (SELECT COUNT(id) AS totalobj
                                        FROM cardinal.avances_nivel avnvl
                                        WHERE avnvl.id = obj.id
                                        AND avnvl.value > -1
                                        FETCH FIRST 1 ROW ONLY) totalobj ON true
                    LEFT JOIN LATERAL (SELECT (CAST(COALESCE(SUM(objin.weighing), 0) as double precision) / CAST(100 as double precision)) AS ponddtrib
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.objectives objin ON avnvl.id = objin.id
                                        WHERE avnvl.id = obj.id
                                        AND avnvl.value = -1
                                        FETCH FIRST 1 ROW ONLY) objsinavc ON true
                    WHERE proy.id = p_proy
                    ) q1;
                    --INSERTA EL OBJETIVO CON SU VALORACIÓN EN LA TABLA TEMPORAL
                    SELECT COUNT(id) INTO cantgistros FROM cardinal.avances_nivel WHERE id = p_proy;
                    IF cantgistros = 0 THEN
                        INSERT INTO cardinal.avances_nivel (id, value, level_t)
                        VALUES (p_proy, resultado, 3);
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
