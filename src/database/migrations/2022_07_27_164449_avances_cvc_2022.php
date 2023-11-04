<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCvc2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 13871,
            'year' =>3,
            'value' => 15,
            'description' => 'Al momento se tienen parcelas permanentes con monitoreo en 5 ecosistemas que representan el 50% del compromiso para este año, es decir el 15% del total de los ecosistemas priorizados.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13872,
            'year' =>3,
            'value' => 9.7,
            'description' => 'Se definió el área de estudio, se escogieron 60 puntos de monitoreo, de los cuales 35 se han muestreado y corresponden a 105  muestras de suleo reportadas al laboratorio. El area de estudo es la zona plana entre El río Fraile y Amaime.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13873,
            'year' =>3,
            'value' => 0,
            'description' => 'Esta meta esta asociada a la actualización de los ocho (8) planes de ordenación forestal de las cuencas hidrográficas de Tuluá, Morales, Bugalagrande, La Vieja, Cali, Desbaratado, Cerrito y Amaime en la Zona Andina del Departamento, lo cual esta en gestión precontractual para la suscripción de un convenio.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13874,
            'year' =>3,
            'value' => 0,
            'description' => 'Se ha venido avanzando en la etapa precontractual de un convenio que permitirá avanzar con las metas de monitoreo para el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13875,
            'year' =>3,
            'value' => 9.7,
            'description' => 'Se definió el área de estudio, se escogieron 60 puntos de monitoreo, de los cuales 35 se han muestreado y corresponden a 105  muestras de suleo reportadas a laboratio. El area de estudo es la zona plana entre El río Fraile y Amaime.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13876,
            'year' =>3,
            'value' => 0,
            'description' => 'Esta meta esta asociada a la actualización de los ocho (8) planes de ordenación forestal de las cuencas hidrográficas de Tuluá, Morales, Bugalagrande, La Vieja, Cali, Desbaratado, Cerrito y Amaime en la Zona Andina del Departamento, lo cual esta en gestión precontractual para la suscripción de un convenio. Ademas, esta meta esta asociada a la terminación de la formulación del Plan de Ordenación Forestal de Naya, programado para cumplirse en el segundo semestre del año.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13877,
            'year' =>3,
            'value' => 0,
            'description' => 'Se ha venido avanzando en la etapa precontractual de un convenio  que permitirá avanzar con las metas de monitoreo para el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13746,
            'year' =>3,
            'value' => 2,
            'description' => 'Se avanzó con las organizaciones prestadoras del servicio de agua y las comunidades usuarias del servicio, con las cuales se esta llevando el proceso de capacitación en diferentes temas de carácter ambiental con énfasis en el recurso agua. Así mismo, se trabaja lo relacionado con las concesiones de agua, estatutos y uso eficiente del recurso. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13747,
            'year' =>3,
            'value' => 0,
            'description' => 'El convenio a través  del cual se da cumplimiento a este indicador no se ha suscrito',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13748,
            'year' =>3,
            'value' => 181,
            'description' => 'Se ha avanzado en la implementación de la Estrategia de Acuerdos Recíprocos por el Agua y el proyecto de protección de las franjas forestales protectoras del río Cauca',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13749,
            'year' =>3,
            'value' => 200,
            'description' => 'Se iniciaron  las implementaciones de las HMP establecidas en predios privados y públicos. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13750,
            'year' =>3,
            'value' => 0.5,
            'description' => 'La estrategia avanza en su ejecución para los predios seleccionados en las cuencas de Yotoco y Calima, la ruta metodológica se viene desarrollando de acuerdo al cronograma planteado y especialmente se resalta la participación de los actores seleccionados.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13751,
            'year' =>3,
            'value' => 32,
            'description' => 'Se iniciaron  las implementaciones de las HMP establecidas en predios privados y públicos. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13752,
            'year' =>3,
            'value' => 0,
            'description' => 'El convenio a través  del cual se da cumplimiento a este indicador no se ha suscrito',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13753,
            'year' =>3,
            'value' => 24,
            'description' => 'Se están realizando visitas a predios, seleccionando y  planificando las intervenciones con producción mas limpia en el sector agrícola y pecuario ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13750,
            'year' =>3,
            'value' => 0.5,
            'description' => 'La estrategia avanza en su ejecución para los predios seleccionados en las cuencas de Yotoco y Calima, la ruta metodológica se viene desarrollando de acuerdo al cronograma planteado y especialmente se resalta la participación de los actores seleccionados.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13755,
            'year' =>3,
            'value' => 67,
            'description' => 'Se encuentra en ejecución en lo relacionado con la selección de predios y planificiación de intervenciones priorizadas',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13756,
            'year' =>3,
            'value' => 0.2,
            'description' => 'Se están realizando visitas a predios, seleccionando y  planificando las intervenciones con producción mas limpia en el sector agrícola y pecuario ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13746,
            'year' =>3,
            'value' => 46,
            'description' => 'Se promovieron acciones de participación ciudadana en el periodo:  participación en los CMDR Yotoco y Ansermanuevo, siembra de árboles con la participación del CIDEA de El Cairo, se acompañó el CIDEA de Argelia. Se realizó reunión con la Junta Administradora del acueducto ACUAFENICIA (Riofrío) y con la cámara de comercio de Buga se participa en la socialización de la Ley 2173/2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13758,
            'year' =>3,
            'value' => 12,
            'description' => 'Se continua la actualización y/o formulación de los diferentes PRAE en las Instituciones Educativas priorizadas',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13759,
            'year' =>3,
            'value' => 2,
            'description' => 'Se ha avanzado en las actividades de metalmecánica para la instalación de todos los elementos necesarios para poner en funcionamiento las estaciones,  adquisición de la totalidad de los sensores de medición y las plataformas de transmisión de datos vía GPRS y GOES requeridos en las estaciones. Ya se encuentran en operación 2 de las 9 estaciones y son: Cauca - La Balsa y Cali- Bocatoma. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13760,
            'year' =>3,
            'value' => 0,
            'description' => 'Se avanzó en la ejecución del contrato de diseño de la PTAR y Colector de Cartago y  se terminaron los diseños del colector y PTAR de Zarzal, los cuales están en revisión de la interventoría para su aprobación o ajustes del consultor según sea el caso requerido. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13762,
            'year' =>3,
            'value' => 41,
            'description' => 'Se avanzó en la recopilación de información de las estaciones hidroclimatológicas propuestas en el Plan Operativo y se realizó la actualización de la información en las bases de datos de la Corporación atendiendo a las cuencas en donde se programa el monitoreo. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13764,
            'year' =>3,
            'value' => 91.3,
            'description' => 'De 288 estaciones hidrometereologicas (automaticas y manuales) instaladas se encuetran 263 en operación.Se llevaron a cabo 590 visitas para realizar el mantenimiento preventivo, correctivo, físico y electrónico en las estaciones de la red de monitoreo, logrando mantener 263 (91%) de las estaciones en operación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13765,
            'year' =>3,
            'value' => 1,
            'description' => 'Se culminaron las obras correspondientes a la construcción de la PTAR del municipio de Yumbo. La obra entra en la fase de pruebas para puesta en marcha.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13766,
            'year' =>3,
            'value' => 100,
            'description' => 'Se han cofinanciado 6 obras, las cuales se encuentran en ejecución.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13768,
            'year' =>3,
            'value' => 0,
            'description' => 'POMCA 2632 Guabas – Sabaletas - Sonso: Se realizó la verificación de información secundaria por cada componente: gestión del riesgo, social, hidrológico y biológico y se ha avanzado en la fase inicial de diagnóstico, en temas referentes a la caracterización básica de la cuenca, en donde se incluye: la caracterización del medio físico-biótico, hidrogeología. . ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13770,
            'year' =>3,
            'value' => 25,
            'description' => 'Se avanzó en la elaboración de los balances de oferta y demanda de cuencas y la elaboración de conceptos técnicos sobre las fuentes evaluadas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13771,
            'year' =>3,
            'value' => 76,
            'description' => '100% de la meta ejecutada. Las 16 cuencas con Planes de Ordenación y Manejo de Cuencas (POMCAS) aprobados en la corporación, tienen acciones ejecutadas. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13746,
            'year' =>3,
            'value' => 1,
            'description' => 'Se ha identificado un actor social que es la Institución Educativa Rodrigo Lloreda Caicedo de la Zona de Influencia del DRMI SARA BRUT con quienes se ha desarrollado un trabajo de identificación y análisis de las potencialidades ambientales y culturales del Embalse',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13748,
            'year' =>3,
            'value' => 374,
            'description' => 'Se iniciaron  las implementaciones de las HMP establecidas en predios privados y públicos. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13749,
            'year' =>3,
            'value' => 173,
            'description' => 'Se ha avanzado en la implementación de la Estrategia de Acuerdos Recíprocos por el Agua y el proyecto de protección de las franjas forestales protectoras del río Cauca',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13750,
            'year' =>3,
            'value' => 0.6,
            'description' => 'La estrategia educativa prevista para Herramientas de Manejo del Paisaje viene avanzando significativamente en las cuencas y en los predios seleccionados; se cuenta con la socialización respectiva, la caracterización de los actores y la ejecución de  dos talleres en los cuales se abordaron temas como cuenca hidrográfica, servicios ecosistémicos, educación ambiental y la importancia de la cobertura boscosa como regulador del recurso hídrico .',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13776,
            'year' =>3,
            'value' => 0,
            'description' => 'Se ha avanzado en la gestión de estudios previos como parte de los procesos de contratación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13777,
            'year' =>3,
            'value' => 0,
            'description' => 'Se ha avanzado en la gestión de estudios previos como parte de los procesos de contratación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13746,
            'year' =>3,
            'value' => 46,
            'description' => 'Se promovieron acciones de participación ciudadana en el periodo:  participación en los CMDR Yotoco y Ansermanuevo, siembra de árboles con la participación del CIDEA de El Cairo, se acompañó el CIDEA de Argelia. Se realizó reunión con la Junta Administradora del acueducto ACUAFENICIA (Riofrío) y con la cámara de comercio de Buga se participa en la socialización de la Ley 2173/2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13758,
            'year' =>3,
            'value' => 12,
            'description' => 'Se continua la actualización y/o formulación de los diferentes PRAE en las Instituciones Educativas priorizadas',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13780,
            'year' =>3,
            'value' => 19,
            'description' => 'Se ha avanzado en el seguimiento de 19 planes de saneamiento básico PSMV, de los cuales 14 corresponden a zonas rurales y 5 a cabecearas municipales, de un total de 63 PSMV.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13781,
            'year' =>3,
            'value' => 30.2,
            'description' => 'Se ha avanzado en el seguimiento de 19 planes de saneamiento básico PSMV, de los cuales 14 corresponden a zonas rurales y 5 a cabecearas municipales, de un total de 63 PSMV.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13782,
            'year' =>3,
            'value' => 100,
            'description' => 'Se ha avanzado en el seguimiento de 18 programas de ahorro y uso eficiente del agua – PUEAA, 15 de ellos relacionados con acueducto de las entidades ACUAVALLE ESP y EMCALI ESP',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13783,
            'year' =>3,
            'value' => 18,
            'description' => 'Se ha avanzado en el seguimiento de 18 programas de ahorro y uso eficiente del agua – PUEAA, 15 de ellos relacionados con acueducto de las entidades ACUAVALLE ESP y EMCALI ESP',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13784,
            'year' =>3,
            'value' => 0,
            'description' => 'Se está trabajando en la fase precontractual para iniciar con la declaratoria de un área protegida en el municipio de Calima - El Darién, denominada La Cerbatana, los estudios previos se remitieron a Jurídica y el proceso de declaratoria de la Quebrada Ordoñez, iniciado en 2021 se suspendió por graves problemas de orden público en la zona.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13785,
            'year' =>3,
            'value' => 0,
            'description' => 'Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13786,
            'year' =>3,
            'value' => 0,
            'description' => 'Se continúa avanzando en los procesos de declaratoria para los humedales del Centro Norte del Valle (Tuluá, Bugalagrande), humedales de Jamundí, bosques secos de Yotoco y la ampliación de Pance, también se avanza en procesos de ampliación para el DRMI RUT Nativos y PNR El Duende. En el caso de Zarzal se entregó informe final y se solicitaron ajustes que están siendo revisados por el conveniente, se espera remitir al Instituto de Investigación de Recursos Biológicos Alexander von Humboldt - IAVH en el segundo semestre',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13787,
            'year' =>3,
            'value' => 20,
            'description' => 'Para la formulación del Plan de manejo - PM del Complejo de Páramos - CP Las Hermosas, se avanza en la fase de aprestamiento con los actores para cada uno de los municipios y con la coordinación del Parque Natural Nacional -PNN Las Hermosas, y se avanzó en la consulta a entidades para el Complejo de Páramos - CP El Duende, se esta trabajando para la actualización del PM del PNR Páramo del Duende y se tiene como propuesta la ampliación del área protegida, se cuenta con una propuesta de ampliación  de 3.500 ha.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13746,
            'year' =>3,
            'value' => 0,
            'description' => 'Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13748,
            'year' =>3,
            'value' => 0,
            'description' => 'Se está realizando el transporte de insumos y plántulas hasta los predios programados para la intervención',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13749,
            'year' =>3,
            'value' => 195,
            'description' => 'Se iniciaron  las implementaciones de las HMP establecidas en predios privados y públicos. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13792,
            'year' =>3,
            'value' => 0,
            'description' => 'Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13793,
            'year' =>3,
            'value' => 2,
            'description' => 'Se continua con la ejecución de dos planes de manejo de especies exóticas (caracol africano y buchón de agua)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13750,
            'year' =>3,
            'value' => 3,
            'description' => 'Se ha avanzado en el desarrollo de las siguientes estrategias corporativas de educación ambiental: 
        Calidad del Aire: Se identificaron los actores sociales, se concertó el plan de acción a desarrollar y posteriormente se realizaron capacitaciones a actores comunitarios e instituciones educativas de los municipios de Yumbo, Palmira, Candelaria y Jamundí.
        Control de Ruido: Se identificaron los actores sociales, se concertó el plan de acción a desarrollar y posteriormente se realizaron capacitaciones a actores comunitarios e instituciones educativas del municipio de Palmira.
        Manejo de residuos sólidos: Se han adelantado acciones en los municipios de Cali- Corregimiento Pance, San Pedro ?-Corregimiento San José, El Cairo Vereda Camellones y cinco localidades más; se  conformaron grupos de trabajo comunitario en cada una de las localidades mencionadas, con los cuales se han realizado jornadas de caracterización de actores sociales, recorridos de reconocimiento de la situación ambiental asociada al manejo de los residuos, jornadas de capacitación sobre conceptos y hábitos de consumo sostenibles.
        Manejo de residuos sólidos con énfasis de posconsumo, Respel y domiciliarios. En el municipio de Ansermanuevo se ha trabajado el énfasis de residuos de Posconsumo, promoviendo el desarrollo de una jornada de recolección en la zona rural articulando acciones con la administración municipal y la empresa prestadora del servicio, para lo cual se han llevado a cabo previamente talleres de educación.
        Otro de los énfasis es el manejo de los Residuos Peligrosos RESPEL y Residuos de Aparatos Eléctricos y Electrónicos (RAEE), se ha trabajado en los municipios de Tuluá y El Águila, contando con la participación de 20 personas en representación del sector empresarial del municipio de Tuluá.En estas acciones han participado diferentes actores sociales los cuales dinamizan diferentes procesos en sus localidades.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13795,
            'year' =>3,
            'value' => 4,
            'description' => 'El avance de este indicador corresponde a la ejecución presupuestal de las actividades relacionadas con la Implementación del programa regional de negocios verdes por la autoridad ambiental, según lo definido en su hoja metodológica. Se ha desarrollado la mesa departamental, la vitrina verde y la seleccion de los negocios verdes que serán apoyados.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13796,
            'year' =>3,
            'value' => 10,
            'description' => 'se ha avanzado en la implementación de acciones con la mesa departamental, la vitrina verde y la seleccion de los negocios verdes que serán apoyados, se han verificado 10 negocios verdes.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13797,
            'year' =>3,
            'value' => 21,
            'description' => 'Las actividades asociadas a este indicador se encuentran en ejecución con respecto a los planeas de manejo de áreas protegidas priorizadas por la Corporación 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13798,
            'year' =>3,
            'value' => 29,
            'description' => 'Se avanza con las medidas de conservación y manejo de especies amenazadas, tales como reproducción, monitoreo y estudios poblacionales',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13799,
            'year' =>3,
            'value' => 7.7,
            'description' => 'Se avanza con la ejecución de medidas de prevención, control y manejo de especies invasoras de macrófitas acuáticas y caracol africano.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13746,
            'year' =>3,
            'value' => 0,
            'description' => 'Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13802,
            'year' =>3,
            'value' => 38,
            'description' => 'Se adelantaron acciones para el manejo de áreas protegidas y ecosistemas estratégicos en el periodo que contribuyen a la gestión integral de la biodiversidad.  Se adelantan acciones de verificación de las franjas forestales de protección de los humedales en el periodo, así como seguimiento y control a las zonas amortiguadoras de páramos y Reservas Forestales Protectoras',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13803,
            'year' =>3,
            'value' => 34.2,
            'description' => 'El avance de este indicador corresponde a la ejecución presupuestal de las actividades relacionadas con la Implementación de acciones en manejo integrado de zonas costeras, según lo definido en su hoja metodológica.
        Se han desarrollado las actividades de recorridos de control y seguimiento en la zona costera
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13758,
            'year' =>3,
            'value' => 26.7,
            'description' => 'Se han adelantado acciones para la actualización de los PRAE de las I.E. enfocadas en el manejo integral de los residuos sólidos. (Trujillo, Riofrío, Yotoco, Ulloa Alcalá)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13805,
            'year' =>3,
            'value' => 225,
            'description' => 'El indicador registra una ejecución del 50% de la meta programada (Se consolidaron 225 operativos en el aeropuerto Alfonso Bonilla Aragón relacionados con el control y prevención del tráfico de fauna y flora Silvestre).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13800,
            'year' =>3,
            'value' => 38,
            'description' => 'Se realizan visitas de seguimiento a las RNSC para verificar su estado de conservación y manejo',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13809,
            'year' =>3,
            'value' => 0,
            'description' => 'Se avanza en la planificación de la actividad para la implementación de la estrategia de formación Tesos por el Ambiente. Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13810,
            'year' =>3,
            'value' => 50,
            'description' => 'Se han atendido médica, biológica y zootécnicamente  los individuos de fauna silvestre ingresados al Hogar de Paso.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13811,
            'year' =>3,
            'value' => 0,
            'description' => 'Se invitó a los alcaldes a presentar las solicitudes para ser beneficiados de los estudios de zonificación por amenazas, vulnerabilidad y riesgo de origen natural, es decir movimiento en masa, inundación y avenida torrencial.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13814,
            'year' =>3,
            'value' => 0,
            'description' => 'Se avanza en la etapa precontractual a través del cual se realizará la actualización de la línea base de calidad de aire y ruido',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13815,
            'year' =>3,
            'value' => 60,
            'description' => 'Se avanza en la etapa precontractual a través del cual se realizará la actualización de la línea base de calidad de aire y ruido',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13816,
            'year' =>3,
            'value' => 0,
            'description' => 'Este indicador se desarrollará a través de la Formulación del Plan de Gestión de Residuos Peligrosos, el cual aún no ha iniciado ejecución, dado que se encuentra en etapa precontractual. Se tiene prevista la ejecución en el segundo semestre de la vigencia 2022 y continuaría su ejecución en la vigencia 2023. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13817,
            'year' =>3,
            'value' => 85.7,
            'description' => 'El porcentaje de estaciones de calidad del aire que registran concentraciones anuales de PM10 por debajo de 30 ¼g/m3 en el mes de junio de 2022 fue de 85,7%. Las estaciones ECA Yumbo, Móvil, Palmira, Jamundí, Candelaria y Cascajal registraron concentraciones de 23,6 µg/m3, 20,17 µg/m3 , 27,86 µg/m3, 27,55 µg/m3, 21,15 µg/m3 y 26,62 µg/m3.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13764,
            'year' =>3,
            'value' => 91.3,
            'description' => 'De 288 estaciones hidrometereologicas (automaticas y manuales) instaladas se encuetran 263 en operación.Se llevaron a cabo 590 visitas para realizar el mantenimiento preventivo, correctivo, físico y electrónico en las estaciones de la red de monitoreo, logrando mantener 263 (91%) de las estaciones en operación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13746,
            'year' =>3,
            'value' => 4,
            'description' => 'Se ha contado con la participación de CIDEA de los municiipios, empresas prestadoras del servicio, organizaciones coomunitarias y recuperadores. Se avanza en el proceso de planificación de la caracterización de los actores.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13750,
            'year' =>3,
            'value' => 0,
            'description' => 'No se programó el indicador en la vigencia 2022',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13821,
            'year' =>3,
            'value' => 0,
            'description' => 'Teniendo en cuenta que el instrumento plan de gestión integral de residuos peligrosos Vale del Cauca, se encuentra en proceso de construcción este indicador que representa la implementación aun no presenta avance. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13822,
            'year' =>3,
            'value' => 1,
            'description' => 'Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13746,
            'year' =>3,
            'value' => 53.6,
            'description' => 'Se continúan las actividades con  las Empresas de aseo participando en la implementación de la estrategia para el manejo adecuado de los residuos sólidos. Se llevan a cabo reuniones con los municipios con el fin de revisar el estado de los PGIRS.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13758,
            'year' =>3,
            'value' => 26.7,
            'description' => 'Se han adelantado acciones para la actualización de los PRAE de las I.E. enfocadas en el manejo integral de los residuos sólidos. (Trujillo, Riofrío, Yotoco, Ulloa Alcalá)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13826,
            'year' =>3,
            'value' => 65,
            'description' => 'Se avanza en el 65% en la actualización y reporte de información en los aplicativos respectivos del SIAC ( SIRH, SISAIRE, SNIF, RUA Y RESPEL)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13827,
            'year' =>3,
            'value' => 42.9,
            'description' => 'La Corporación tiene priorizados catorce (14) Planes de Gestión Integral de Residuos Sólidos - PGIRS municipales, para el desarrollo de las actividades relacionadas con este indicador en los siguientes municipios: Alcalá, Ulloa, Ansermanuevo, Argelía, Caicedonia, Sevilla, Bugalagrande, Andalucía, Guadalajara de Buga, Ginebra, Yotoco, La Cumbre, Palmira y Dagua. 
        A corte de Junio de 2022, se reportó el seguimiento al cumplimiento de metas de aprovechamiento de los municipios de La Cumbre, Alcalá, Cartago y Ulloa, Yotoco y Palmira
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13828,
            'year' =>3,
            'value' => 0.3,
            'description' => 'El avance en la ejecución de este indicador depende de la gestión de los entes territoriales y de las empresas respecto al aprovechamiento de los residuos sólidos ordinarios y residuos de construcción y demolición (RCD).
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13829,
            'year' =>3,
            'value' => 0,
            'description' => 'El avance en la ejecución de este indicador depende de la gestión de los entes territoriales y de las empresas respecto al aprovechamiento de los residuos sólidos ordinarios y residuos de construcción y demolición (RCD).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13746,
            'year' =>3,
            'value' => 0,
            'description' => 'Las actividades asociadas a este indicador se encuentran en etapa precontractual.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13831,
            'year' =>3,
            'value' => 0,
            'description' => 'Se adelanta la planificación del proceso de contratación para la implementación de la campaña En Obra Verde. Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13811,
            'year' =>3,
            'value' => 0,
            'description' => 'Se invitó a los alcaldes a presentar las solicitudes para ser beneficiados de los estudios de zonificación por amenazas, vulnerabilidad y riesgo de origen natural, es decir movimiento en masa, inundación y avenida torrencial.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13835,
            'year' =>3,
            'value' => 5,
            'description' => 'Se continúa la consolidación de reportes para las vigencias 2016 - 2017, ajuste de cartografía y se remitieron solicitudes de información a los municipios para las siguientes vigencias; Se realizaron acciones en cinco (5) cuencas: Catarina y Chancos del municipio de Ansermanuevo, Cañaveral del municipio El Águila, El Cerrito del Municipio El Cerrito y Yumbo en el Municipio de Yumbo.
        
         ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13837,
            'year' =>3,
            'value' => 0,
            'description' => 'Se están adelantando los trámites precontractuales',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13749,
            'year' =>3,
            'value' => 0,
            'description' => 'Se ha avanzado en los procesos de contratación para la implementación de las HMP en comunidades Negras e Indígenas.  Por otro lado,  se han adelantado procesos de visitas técnicas y concertaciones con los propietarios de los predios..',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13840,
            'year' =>3,
            'value' => 0,
            'description' => 'Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13750,
            'year' =>3,
            'value' => 0.7,
            'description' => 'Se avanzó en la implementación de acciones de la estrategia corporativa de educación ambiental para la ocupación sostenible del territorio',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13842,
            'year' =>3,
            'value' => 0,
            'description' => 'Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13748,
            'year' =>3,
            'value' => 86,
            'description' => 'Se cuenta con un avance del 61% en las acciones de implementación de HMP en áreas de arbustales y matorrales incorporados a procesos de restauración previstas para la vigencia',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13750,
            'year' =>3,
            'value' => 0.6,
            'description' => 'Se implementaron acciones de la estrategia corporativa de educación ambiental para la gestión del riesgo, se destaca la participación de los actores pertenecientes a los CMGR',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13845,
            'year' =>3,
            'value' => 0,
            'description' => 'Se ha avanzado en la identificación de los sitios a intervenir para poder dar inicio a los procesos precontractuales',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13746,
            'year' =>3,
            'value' => 39.5,
            'description' => 'Se adelantaron acciones para brindar la Asesoría en los espacios de participación interinstitucionales y/o comunitarios para el fortalecimiento de la gestión ambiental a ONG y entes territoriales, asociados al tema de gestión del riesgo y ocupación sostenible del territorio, además, el Consejo Departamental de Gestión del Riesgo, los Bomberos y la Defensa Civil. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13758,
            'year' =>3,
            'value' => 5,
            'description' => 'Desde las Direcciones Ambientales Regionales y del Grupo de Educación Ambiental de la DGA, se adelantan acciones de educación ambiental asociadas al recurso suelo tales como la implementación de estrategias corporativas de educación ambiental y la implementación de estrategias de la Politica Nacional de Educación Ambiental PRAE ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13848,
            'year' =>3,
            'value' => 20,
            'description' => 'Se realizó apoyo técnico y apoyo al seguimiento de acciones de adaptación al cambio climático y gestión del riesgo a 20 municipios, entre ellos: Bolívar, Argelia, La Cumbre, Cartago, Caicedonia, Argelia, Alcalá, Tuluá, Jamundí, Cartago, La Victoria, Dagua',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13849,
            'year' =>3,
            'value' => 49,
            'description' => 'De los entes territoriales programados se han realizado los siguientes, Candelaria, Pradera, Palmira, Santiago de Cali, Yumbo, Jamundí, Dagua, Restrepo, Cartago, Alcalá, Bolívar, La Unión, Toro, Caicedonia, Andalucía, San Pedro, Cerrito, Yotoco, Buga, Sevilla, Tuluá',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13850,
            'year' =>3,
            'value' => 50,
            'description' => 'De acuerdo con la programación, se han realizado la Asesoría y apoyo técnico en los siguientes municipios: Candelaria, Pradera, Palmira, Santiago de Cali, Yumbo, Jamundí, Dagua, Restrepo, Cartago, Alcalá, Bolívar, La Unión, Toro, Caicedonia, Andalucía, San Pedro, Cerrito, Yotoco, Buga, Sevilla, Tuluá ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13851,
            'year' =>3,
            'value' => 0,
            'description' => 'Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13853,
            'year' =>3,
            'value' => 0,
            'description' => 'Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13855,
            'year' =>3,
            'value' => 0,
            'description' => 'Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13838,
            'year' =>3,
            'value' => 20000,
            'description' => 'El indicador se ha venido ejecutando con los pasos (cruces peatonales),  actividades ambientales y cercas metálicas',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13808,
            'year' =>3,
            'value' => 0,
            'description' => 'Las actividades para dar cumplimiento a este indicador están en proceso precontractual para ejecutar en el segundo semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13861,
            'year' =>3,
            'value' => 0.45,
            'description' => 'Se avanza en la construcción de la Dirección Ambiental Regional Pacifico Este. Se adelantan las actividades de instalación de teja de cubierta e instalaciones eléctricas, hidráulicas y sanitarias.
        
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia103 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13862,
            'year' =>3,
            'value' => 13,
            'description' => 'Se realizó apoyo tecnológico enfocado en la Direcciones Ambientales Regionales,  prestado por intermedio del servicio de Mesa Integral de Servicios Tecnológicos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia104 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13831,
            'year' =>3,
            'value' => 6,
            'description' => 'La Corporación se ha destacado por desarrollar proyectos esenciales con una alta visibilidad pública, como Valle más verde, los Encuentros Ambientales Regionales con jóvenes, la Vitrina Verde, la atención a fauna silvestre y la entrega de infraestructura que salva vidas, genera calidad de vida y mejora el espacio público, pues se articula con la conservación del ambiente circundante. Este despliegue se logró gracias a la realización de 29 eventos, en los cuales el proceso de Comunicación Corporativa presta el apoyo logístico. Asimismo, la CVC quiere seguir fortaleciendo su presencia digital y En modo verde radio continua al aire las 24/7, con la emisión de un programa semanal. A la fecha de corte, se han emitido 20. Visitar www.enmodoverderadio.com
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia105 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13865,
            'year' =>3,
            'value' => 26.4,
            'description' => 'Este indicador se calcula según la ejecución presupuestal de las actividades asociada a Educación ambiental: De acuerdo acon la ejecución presupuestal a corte de 30 de junio de 2022 el indicador logró un avance del 26% en las actividades asociadas a  estrategias de educación ambiental y acciones de participación ciudadana para los proyectos del plan de acción, con corte al mes de junio es de los recursos programados corresponden a 25.375.186.657 y se han ejecutado  6.706.745.244, para un porcentaje de 26.43
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13809,
            'year' =>3,
            'value' => 3,
            'description' => 'Se avanza en los procesos de fortalecimiento de estrategias de la Política Nacional de Educación Ambiental tales como los PRAE, PROCEDA y CIDEA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia107 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13867,
            'year' =>3,
            'value' => 1,
            'description' => 'El Plan de Acción fue ajustado a través del Acuerdo 028 del 30 de junio de 2022.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13868,
            'year' =>3,
            'value' => 39,
            'description' => 'Durante el primer semestre de 2022 se presenta un avance del 39% en los seguimientos a autorizaciones ambientales (licencias, vertimientos, concesiones de agua, aprovechamientos forestales y emisiones atmosfericas). ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia109 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13869,
            'year' =>3,
            'value' => 12,
            'description' => 'Durante el primer semestre de 2022, se presenta un avance del 12% de procesos sancionatorios resueltos  que correspponde a 225  actos administrativos de iniciación de procedimiento sancionatorio,  15 actos administrativos de determinación de la responsabilidad  y  12  actos administrativos de cesación de procedimiento expedidos en la vigencia.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia110 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13870,
            'year' =>3,
            'value' => 23.8,
            'description' => 'El tiempo promedio para emitir resoluciones de autorizaciones ambientales está estimado en 96 días. Sin embargo, a corte del mes de junio de 2022 el promedio para la emisión de resoluciones es de 23,8 días, lo que significa que la Corporación está siendo más efectiva en la emisión de resoluciones.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
        
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
