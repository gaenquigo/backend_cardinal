<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FunctionGetProgramAvance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        CREATE OR REPLACE FUNCTION cardinal.get_program_avance(
            p_year integer,
            p_prog bigint)
            RETURNS double precision
        AS $$
                DECLARE resultado DOUBLE PRECISION;
                DECLARE cantgistros INT;
                BEGIN
                    SELECT SUM((q1.weighing + (q1.ponddtrib/q1.totalproy)) * q1.avance) INTO resultado
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
                    LEFT JOIN LATERAL (SELECT COUNT(id) AS totalproy
                                        FROM cardinal.avances_nivel avnvl
                                        WHERE avnvl.id = proy.id
                                        AND avnvl.value > -1
                                        FETCH FIRST 1 ROW ONLY) totalproy ON true
                    --QUERY PARA OBTENER LAS PONDERACIONES DE LAS OBLIGACIONES QUE SE DEBEN DISTRIBUIR PORQUE SU META PARA EL AÑO ES 0
                    LEFT JOIN LATERAL (SELECT (CAST(COALESCE(SUM(proyin.weighing), 0) as double precision) / CAST(100 as double precision)) AS ponddtrib
                                        FROM cardinal.avances_nivel avnvl
                                        INNER JOIN cardinal.projects proyin ON avnvl.id = proyin.id
                                        WHERE avnvl.id = proy.id
                                        AND avnvl.value = -1
                                        FETCH FIRST 1 ROW ONLY) proysinavc ON true
                    WHERE prog.id = p_prog
                    ) q1;
                    --INSERTA EL OBJETIVO CON SU VALORACIÓN EN LA TABLA TEMPORAL
                    SELECT COUNT(id) INTO cantgistros FROM cardinal.avances_nivel WHERE id = p_prog;
                    IF cantgistros = 0 THEN
                        INSERT INTO cardinal.avances_nivel (id, value, level_t)
                        VALUES (p_prog, resultado, 2);
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
