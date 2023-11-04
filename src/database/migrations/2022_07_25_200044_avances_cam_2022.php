<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCam2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 13359,
            'year' =>3,
            'value' => 0,
            'description' => 'Pendiente convenio con CI',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13360,
            'year' =>3,
            'value' => 0,
            'description' => 'Pendiente convenio con CI',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13361,
            'year' =>3,
            'value' => 40,
            'description' => 'Avance en Valoración Económica de 4 Humedales con PMA y en Zonificación y Régimen de usos de complejos de páramos. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13362,
            'year' =>3,
            'value' => 50,
            'description' => 'Se avanzó en la implementacion de medidas de control y manejo de las especies invasoras reportadas en el semestre A-2022',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13370,
            'year' =>3,
            'value' => 5,
            'description' => 'En proceso de planificación',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'nr',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13372,
            'year' =>3,
            'value' => 0,
            'description' => 'En proceso de planificación y contratación para la ejecucipón de las actividades',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13373,
            'year' =>3,
            'value' => 15,
            'description' => 'En proceso de planificación y contratación para la ejecucipón de las actividades',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13374,
            'year' =>3,
            'value' => 0,
            'description' => 'En proceso de planificación y contratación para la ejecucipón de las actividades',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13377,
            'year' =>3,
            'value' => 30,
            'description' => '',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTOS: 100-222
        Gastos Operatiivos de inversión',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13378,
            'year' =>3,
            'value' => 0,
            'description' => 'Se están atendiendo los POMCAS y PMAM, que se encuentran aprobadas por la CAM, los cuales son Rios Guarapas, Suaza, Ciebas y quebradas Garzón y Barbillas.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTOS: 104-144-155-
        OC: 87716184-187-052/07',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13379,
            'year' =>3,
            'value' => 0,
            'description' => 'NO REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13380,
            'year' =>3,
            'value' => 50,
            'description' => 'Se efectuaron los seguimientos a Programas de Uso Eficiente y Ahorro del Agua para el corte del primer semestre del año 2022.  ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTOS: 038-167-054',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13381,
            'year' =>3,
            'value' => 50,
            'description' => 'Se efectuaron los seguimientos a Planes de Saneamiento y Manejo de Vertimientos - PSMV para el corte del primer semestre del año 2022.  ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTOS: 167-054',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13382,
            'year' =>3,
            'value' => 67.2,
            'description' => 'Se avanzó en la fase 2, de la reglamentación de la Quebrada La Rivera, correspondiente al trabajo de campo, realizando visitas oculares, censo de los usuarios que aprovechan las aguas de la Quebrada La Rivera, georreferenciación, cartografía, y en los estudios de la reglamentación tales como hidrometeorologicos, agronómicos, etc.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13383,
            'year' =>3,
            'value' => 67.2,
            'description' => 'Se avanzó en la fase 2 de diagnóstico del PORH de la Quebrada La Chorrera y El Chuzcal, correspondiente al trabajo de campo, realizando el censo de usuarios, diseño y ejecución del plan de monitoreo, estimación de la oferta hídrica, de los índices de calidad fisico-quimica e hidrobiologica, ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13384,
            'year' =>3,
            'value' => 0.5,
            'description' => 'corresponde a la ejecución del primer semestre, este involucra monitoreo, seguimiento y mantenimiento a estaciones hidrometeorológicas',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTOS: 012-014-017-029-037-038-039-041-047-050-052-060-061-067-068-105-115-116-153-167-027-043-048-049-055-056-152-195-215-208-198-202-212-213',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13385,
            'year' =>3,
            'value' => 0,
            'description' => 'El Numero 6, obedece al número de Subzonas con indicadores hídricos regionales, en oferta, demanda, calidad y riesgos. Para lograr este objetivo se debe compilar información, analizarla, procesarla y generar los indicadores por Subzonas, lo anterior transversalmente con el componente cartográfico. Este indicador se evalúa a final de año. En este semestre se realizó la compilación de información, análisis cartográfico y estructuración de la hoja de cálculo',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTOS: 013-015-018-033-125',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13386,
            'year' =>3,
            'value' => 0,
            'description' => 'NO REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13387,
            'year' =>3,
            'value' => 43,
            'description' => 'Se desarrolló la fase precontractual',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13348,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Se adelantó la contratación y esta en ejecución',
            'type' => 'funcioning',
            'how_is_done' => 'Gastos operativos de inversion ',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13389,
            'year' =>3,
            'value' => 50,
            'description' => 'NO REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13348,
            'year' =>3,
            'value' => 0.5,
            'description' => 'NO REGISTRA INFORMACION ',
            'type' => 'funcioning',
            'how_is_done' => 'Gastos Opertaivos de inversión',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13391,
            'year' =>3,
            'value' => 50,
            'description' => 'Durante el primer semestrese realizó el primer seguimiento a los PGIRS adoptados por los 37 municipios del departamento del Huila, el porcentaje promedio de cumplimiento de las metas de aprovechamiento es del 81%. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTO: 147-167-054',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13392,
            'year' =>3,
            'value' => 35,
            'description' => 'Se realizaron 170 visitas de seguimiento a establecimintos generadores de residuos peligrosos de 480 que constituye la meta establecida en el indicador RESPEL. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTO: 019-063',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13393,
            'year' =>3,
            'value' => 30,
            'description' => 'En el semestre I de 2022, a través de las Direcciones Territoriales y la Subdirección de Regulación y Calidad Ambiental, se realizaron 2.183 visitas de seguimientos a los permisos, concesiones  y licencias otorgados activos, en su mayoría de vigencias anteriores.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTO: 016-017-021-023-025-030-042-050-057-059-060-061-069-095-106-123-130-135-153-166-167-032-046-054-058-203-201-207',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13394,
            'year' =>3,
            'value' => 60,
            'description' => 'Los procesos se atienden conforme a los procedimientos internos de la Corporación establecidos en la P-CAM-017 y la normatividad ambiental vigente.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13395,
            'year' =>3,
            'value' => 40,
            'description' => 'La Corporación a través de la aplicativo Ventanilla Integral de Trámites Ambientales en Línea – VITAL, recepcionó durante el periodo 1,449 solicitudes y seotorgaron 814 que corresponde a Licencias, Concesiones, Permisos y Autorizaciones, para el uso y aprovechamiento de los recursos naturales.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTO: 012-016-017-021-023-028-034-035-040-042-044-052-057-059-061-064-065-095-123-162-166-167-031-054-055-056-178-179-180-181-182-200-213',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13396,
            'year' =>3,
            'value' => 30,
            'description' => 'En el periodo ingresaron por VITAL 1,603 denuncias por presuntas infracciones ambientales, se logró atender 1,273 equivalente al 79%, realizando la respectiva visita de inspección ocular; de igual forma se resolvieron 577 denuncias radicadas en 2022 y 909 procesos de vigencias anteriores, para un total resueltos 1,486 . ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTOS: 034-035-040-044-064-065-130-162-031-032-046-178-179-180-181-182-200-207',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13397,
            'year' =>3,
            'value' => 98,
            'description' => 'A traves del vehiculo de fuentes moviles durante este semestre se realizo monitoreo a 98 vehiculos de fuentes moviles entre motocicletas y vehiculos. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13398,
            'year' =>3,
            'value' => 1,
            'description' => 'Se continua operando  la red de calidad de aire para la ciudad de Neiva, la cual opera con dos estaciones ubicadas en el centro y en las instalaciones de la CAM denominadas CAM Norte y Alcaldía de Neiva.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13399,
            'year' =>3,
            'value' => 0,
            'description' => 'Se adelanta el poceso de contratacion, para la actualización de los mapas de ruido ambiental del municipio de Pitalito, para sus áreas críticas prioritarias y la reformulación del plan de descontaminación por ruido en el municipio de Pitalito',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'NR',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13400,
            'year' =>3,
            'value' => 43.33,
            'description' => 'Durante el primer semestre se ha realizado el seguiminento a 26 generadores de RCD y 2 Gestores. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTOS: 063-069',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13401,
            'year' =>3,
            'value' => 69,
            'description' => 'Se han realizado 29 visitas de seguimientos a DGA de 42 que cuentan con dicho departamento. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CTO: 147',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13366,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Se avanza en la contratacion y ejecucion de las acciones establecidas en el presente proyecto. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Gastos Opertaivos de inversión',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        
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
