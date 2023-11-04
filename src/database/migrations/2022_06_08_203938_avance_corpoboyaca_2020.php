<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvanceCorpoboyaca2020 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 10807,
            'year' =>1,
            'value' => 1.2,
            'description' => 'La meta 1,2 corresponde a:  (1) formulación y adopción del PA 2020-2023 y (0,2)  avance del 20% en el PGAR. Para el año 2020 se formuló y adoptó el Plan de Acción y se realizó la revisión y ajustes al PGAR en sus componentes de: diagnóstico, visión regional, líneas estratégicas y seguimiento - evaluación, esto correspondiente a un avance del 20% en PGAR.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10808,
            'year' =>1,
            'value' => 0.95,
            'description' => 'Para el año 2020 se programó una acción que consistió en el diseño de una matriz de articulación entre los programas y proyectos del Plan de Salvaguarda de la comunidad UW’A y el Plan de Acción de la Corporación. Esta matriz se formuló con la información de Planes de vida de las comunidades étnicas de la jurisdicción, suministrada por la Gobernación de Boyacá y Ministerio del Interior.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10809,
            'year' =>1,
            'value' => 2,
            'description' => 'Para el año 2020 se proyectaron 2 acciones de seguimiento y divulgación. Acción 1, creación de gdb por municipio con información de los POMCAS de su jurisdicción. Acción 2, foros con los municipios de la cuenca río Medio y Bajo Suarez, río Alto Chicamocha.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10810,
            'year' =>1,
            'value' => 0.18,
            'description' => 'Para el año 2020 se programó avanzar en el 20% de la actualización de 1 unidad de ordenación forestal. El avance del 18%  corresponde a la formulación de un proyecto para la gestión de recursos y los acercamientos realizados con el IDEAM, con otras Corporaciones que ya han formulado y/o actualizado su POF y con la Universidad Distrital Francisco José de Caldas, con el propósito de recibir asesoría en el proceso.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10811,
            'year' =>1,
            'value' => 1,
            'description' => 'Para el año 2020 se programó 1 acción para la generación de insumos destinados al acotamiento de rondas hídricas. La acción programada consistió en la estructuración de alcances técnicos para la generación de insumos para el acotamiento de las rondas hídricas de 2 afluentes del lago de Tota, cuyo proceso lamentablemente no finalizó con suscripción de Convenio, teniendo en cuenta la no aprobación de prórroga del proyecto por parte de AFD. Se solicitó y recibió apoyo y lineamientos al MADS para el acotamiento de ronda hídrica del embalse La Copa, en cumplimiento de Acción Popular con radicado 2010-01363.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10812,
            'year' =>1,
            'value' => 0.2,
            'description' => 'Para el año 2020 se programó la actualización del 20% de un PORH. La meta del 20% corresponde a la suscripción del Convenio Interadministrativo N. 2645 con la CAR para la formulación de PORH de las de las Unidades hidrográficas de los ríos Negro, Palenque y Guaquimay, de la subzona hidrográfica Carare Minero (código 2312), por valor de $2.430.885.446, de los cuales CORPOBOYACÁ aporta en especie $50.694.371; por su parte la CAR aporta en efectivo $2.145.156.541 y en especie $235.034.534.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10813,
            'year' =>1,
            'value' => 20,
            'description' => 'Para el año 2020 se priorizó el POMCA río Negro en comisión conjunta con la CAR, en cuyo proceso se destacan los siguientes avances:- Aprobación de la fase de aprestamiento y en proceso de finalización de la fase de diagnóstico.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10814,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10815,
            'year' =>1,
            'value' => 20,
            'description' => 'Se priorizó la microcuenca del río Mueche. En el año 2020 se realizó la revisión, análisis y evaluación de la información disponible para la formulación del PMM (documento técnico)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10816,
            'year' =>1,
            'value' => 5,
            'description' => 'Se programó un avance del 5% de la actualización del POMCA Lago de Tota. Este porcentaje corresponde a la estructuración de  alcances técnicos para la generación de insumos para la actualización del POMCA Lago de Tota.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10817,
            'year' =>1,
            'value' => 8,
            'description' => 'Para el año 2020 se programó activar 8 consejos de cuenca. Se llevaron a cabo 8 reuniones con los siguientes Consejos de Cuenca: Medio y Bajo Suarez, Alto Chicamocha, Directos al Magdalena medio entre los ríos Negro y Carare, Carare Minero, Garagoa, Alto Suárez, y río Negro. Estas reuniones tuvieron como principal propósito realizar un acercamiento con las instancias de participación y poner en la mesa el tema de reconformación. En estas reuniones participó el MADS quien brindó capacitación sobre el tema de funciones establecidas en la resolución 509 de 2013.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10818,
            'year' =>1,
            'value' => 8,
            'description' => 'Para el año 2020 se programó dar asistencia a 8 consejos de cuenca. Se llevaron a cabo 8 reuniones con los siguientes Consejos de Cuenca: Medio y Bajo Suarez, Alto Chicamocha, Directos al Magdalena medio entre los ríos Negro y Carare, Carare Minero, Garagoa, Alto Suárez, y río Negro. Estas reuniones tuvieron como principal propósito realizar un acercamiento con las instancias de participación y poner en la mesa el tema de reconformación. En estas reuniones participó el MADS quien brindó capacitación sobre el tema de funciones establecidas en la resolución 509 de 2013.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10819,
            'year' =>1,
            'value' => 8,
            'description' => 'Durante el año 2020 se  diseñó y validó una matriz para recopilar la información externa (municipios) con el seguimiento a la ejecución de los POMCAS. La matriz fue diligenciada con los 63 municipios que tienen jurisdicción en las cuencas Carare Minero, Alto Chicamocha, Medio y Bajo Suárez, Garagoa, Directos al Magdalena, Cusiana, Cravo sur, Alto Suárez. A nivel interno se contó con un sistema de información (SGI Almera) para la recolección de información correspondiente con los avances físico-financiero de los POMCAS',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10820,
            'year' =>1,
            'value' => 100,
            'description' => 'Para el año 2020, se priorizó la generación de servicios web para consumo de datos desde diferentes app GIS, soporte a la plataforma Geoambiental y Actualización de información de tramites permisionarios. Actividades que se realizaron al 100%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10821,
            'year' =>1,
            'value' => 4.75,
            'description' => 'Para el año 2020 se proyectó realizar el 10% de formulación de una estrategia  para los conflictos socio ambientales. El avance del 4,7 corresponde con el documento preliminar con estrategia institucional para la resolución de conflicto, en el cual se realizó una conceptualización del tema, se identificó los principales conflictos de la jurisdicción y se formuló una ruta de manejo de los mismos, la cual está en proceso de validación, para poder así iniciar su proceso de implementación',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10822,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10823,
            'year' =>1,
            'value' => 0.95,
            'description' => 'Para 2020 se programó adoptar 1 PM, se priorizo el Plan de Manejo del Parque Natural Regional Pan de Azúcar - El Consuelo. Se realizo las presentación de insumos de divulgación para el proceso de socialización y concertación con las entidades territoriales y comunidades presentes en el área. Se cuenta con propuesta de Acto Administrativo (Se envió memorando 140-353 a Secretaria Jurídica solicitando el espacio para la presentación ante consejo directivo). La meta del  95% se da porque no se alcanzo a firmar la resolución de adopción en el año 2020. (Adoptado el 15 de febrero de 2021)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10824,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10825,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10826,
            'year' =>1,
            'value' => 0.9,
            'description' => 'Para el año 2020 se programó avanzar en la formulación y adopción de 1 plan de manejo de humedales. La meta del  90% corresponde con el documento técnico del Plan de manejo del humedal Ciénaga de Palagua, pero debido a la emergencia sanitaria no se pudo abordar la Fase final de concertación con los actores sociales para proceder con su adopción.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10827,
            'year' =>1,
            'value' => 0.9,
            'description' => 'Para el año 2020 se programó avanzar en la formulación y adopción de 1 plan de manejo de humedales. La meta del  90% corresponde con el documento técnico del Plan de manejo del humedal Ciénaga de Palagua, pero debido a la emergencia sanitaria no se pudo abordar la Fase final de concertación con los actores sociales para proceder con su adopción.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10828,
            'year' =>1,
            'value' => 30,
            'description' => 'La meta consideraba el avance del 30% en el inventario de humedales. Este 30% corresponde a la elaboración del documento titulado Guía para la Identificación, Delimitación, Manejo y Gestión Comunitaria de Los Humedales Permanentes en la Jurisdicción de Corpoboyacá.  Como fase inicial para la identificación de los sistemas lénticos permanentes de la jurisdicción. Se realizó la consolidación cartográfica e inventario de humedales correspondiente al 30% de los humedales de la jurisdicción',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10829,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10830,
            'year' =>1,
            'value' => 1,
            'description' => 'Se diseño de matriz de seguimiento para PNR Serranía Las Quinchas y su respectiva socialización con municipio de Otanche y Puerto Boyacá.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10831,
            'year' =>1,
            'value' => 1,
            'description' => 'Se diseño de matrices de seguimiento para las áreas protegidas con planes de manejo adoptado.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10832,
            'year' =>1,
            'value' => 1,
            'description' => 'La acción priorizada para esta actividad fue la elaboración de la ficha técnica para la designación RAMSAR de acuerdo a criterios establecidos para tal fin, la construcción de DOSSIER del Lago de Tota y documento “Estrategias de conservación lago de Tota”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10833,
            'year' =>1,
            'value' => 1,
            'description' => 'La acción para RNSC fue la construcción de documento técnico de priorización para el plan de señalización de las RNSC y hoja de ruta de convocatoria para apoyo de nuevas RNSC en la Jurisdicción. Se finalizaron 28 fichas dosier de RNSC. Para SIMAPS, se elaboró la guía técnica para la declaratoria de áreas protegidas municipales SIMAP´s',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10834,
            'year' =>1,
            'value' => 1,
            'description' => 'La acción priorizada de divulgación corresponde a: actualización de la Pagina WEB del SIRAP-Corpoboyacá con  el  registro fotográfico del estado de las áreas protegidas, 14 Dossier para las áreas protegidas regionales y las administradas por Corpoboyacá y los ecosistemas estratégicos y 45 visitas a los predios dentro de las áreas protegidas para el levantamiento de información socioeconómica.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10835,
            'year' =>1,
            'value' => 1,
            'description' => 'La acción priorizada de planificación y gobernanza corresponde a: implementación de las acciones para la planificación de complejo de páramo Rabanal-Rio Bogotá en el marco del Proyecto de unión europea, se realizaron las propuestas de los acuerdos para la conformación de las comisiones conjuntas de los páramos Rabanal-Río Bogotá, Altiplano Cundiboyacense y Guantiva la Rusia. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10836,
            'year' =>1,
            'value' => 3,
            'description' => 'Para el año 2020 se formularon 3 de los 5 proyectos programados:-Formulación de Proyecto para la formulación de manejo del Complejo Tota- Bijagual- Mamapacha -        Formulación de Proyecto para la formulación de manejo del Complejo Iguaque- Merchán -      Formulación de Proyecto para la formulación de manejo del Complejo Altiplano Cundiboyacense',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10837,
            'year' =>1,
            'value' => 20,
            'description' => 'Para 2020 se programó el avance del 20% de la estrategia para administración de áreas protegidas. Este 20% corresponde al documento técnico de avance para la propuesta de administración de las áreas protegidas regionales adscritas al SIRAP-Corpoboyacá',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10838,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10839,
            'year' =>1,
            'value' => 15,
            'description' => 'Se realizó asistencia técnica por oferta a los municipios de: Aquitania (2), Cuítiva, Güicán de la Sierra, San Pablo de Borbur, Oicatá,  Motavita, Otanche,  Sáchica,  Tinjacá, Tota (2), Maripí, Gachantivá, Paipa, Socotá y Sutamarchán, dando cumplimiento a la priorización definida en la mesa de trabajo del 03 de junio 2020 (formato FPM – 02), para la Asistencia Técnica y Jurídica a los entes territoriales de la jurisdicción de Corpoboyacá, en la incorporación de Determinantes Ambientales, Gestión del Riesgo y Cambio Climático, para que estos formulen, actualicen e implementen instrumentos de Planificación, que les permita tomar decisiones de uso y ocupación de los territorios con criterios de sostenibilidad ambiental',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10840,
            'year' =>1,
            'value' => 0.2,
            'description' => 'La meta de 0,2 instrumentos de gestión implementados correspondió a: micrositio en la página web de la Corporación, en el que se alojó información relacionada con las Determinantes Ambientales (Resolución 2727 de 2011, Procedimiento para concertación de asuntos ambientales PPT-06, Presentación Densidades de Vivienda Campestre municipios de la jurisdicción, Matriz de Estado de los 87 municipios de Corpoboyacá, Información de POMCA, Áreas Protegidas y Ecosistemas Estratégicos,) y Cartilla Planes de Ordenamiento Territorial POT. https://www.corpoboyaca. gov.co/proyectos/planeacion-y-ordenamien¬to-del-territorio/determinantes-ambientales/
        -Se participó en la elaboración de cartilla de lineamientos para el ordenamiento territorial de los municipios del departamento.  Gobernación - PGN.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10841,
            'year' =>1,
            'value' => 100,
            'description' => 'Se brindó asistencia técnica y jurídica por demanda a los Municipios de Chíquiza, Sáchica, Cuítiva (2), Socotá (2), Soracá (3), Covarachía, Tununguá, Rondón, Briceño (2), Tunja (2), Cucaita, Betéitiva, Chivatá (3), Santa Rosa de Viterbo, Sativasur (2), Tuta, Cómbita, Oicatá, San José de Pare, Socha, Moniquirá, Aquitania, La Victoria, Cerinza y Coper, atendiendo las inquietudes de los municipios referentes a los procesos de Revisión General y/o modificación excepcional que vienen adelantando dichos municipios.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10842,
            'year' =>1,
            'value' => 100,
            'description' => 'En el desarrollo de esta actividad se atendieron 8 tramites de solicitud de concertación asuntos ambientales, 6 relacionadas con proyectos de Revisión General de Ordenamiento, 1 Modificación Excepcional de Norma Urbanística y un Plan Parcial, de los siguientes municipios: Jericó , Socotá, Guacamayas, Soracá, Sutamarchán, Chíquiza, Santana, Tunja.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10843,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizó el seguimiento, evaluación y control del factor de deterioro ambiental que enarenados por construcción y parcelación en suelos urbanos y rurales de los municipios. La actividad se desarrolla con el apoyo de los municipios, los cuales deberán remitir el listado de licencias de manera mensual, de conformidad con lo establecido en el Artículo 2.2.6.2.9 del Decreto Único Reglamentario 1077 de 2015.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10844,
            'year' =>1,
            'value' => 100,
            'description' => 'A la fecha 2 municipios han adoptado recientemente la revisión general de su Plan de Ordenamiento Territorial, son Santa Sofía y Siachoque, de éstos en el periodo se realizó seguimiento a la ejecución y cumplimento de los asuntos ambientales concertados con los dos municipios. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10845,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
            DB::table('evidence_advance')->insert([
            'activity_id' => 10846,
            'year' =>1,
            'value' => 0.5,
            'description' => 'Para el 2020 se programó implementar el 50% de un instrumento de seguimiento. Este 50% corresponde a:  diseño de matriz de seguimiento y revisión de la ejecución de POT de los 87 municipios,  esta herramienta fue entregó a los 87 municipios junto con la invitación a participar en talleres regionales programados y realizados',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10847,
            'year' =>1,
            'value' => 88,
            'description' => 'Con el propósito de garantizar la incorporación y armonización del componente ambiental en los Planes de Desarrollo Territorial, la Corporación prestó durante el primer semestre asistencia técnico-jurídica a los 87 municipios de la jurisdicción y a la Gobernación de Boyacá, mediante la realización de 90 mesas de trabajo, la revisión de documentos y emisión de conceptos de armonización de los planes radicados durante los tiempos establecidos para tal fin.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10848,
            'year' =>1,
            'value' => 0.5,
            'description' => 'Para el 2020 se programó el avance de 0,5 de determinantes de longitud de corredores viales suburbanos definidas. Este avance corresponde documento preliminar con revisión el marco normativo, análisis de la red vial departamental correspondiente a los municipios de la jurisdicción de Corpoboyacá y revisión de información existente en la plataforma del Sistema de Información Ambiental Territorial de la Corporación - SIAT, definición y ponderación de variables y generación de información cartográfica temática',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10849,
            'year' =>1,
            'value' => 1,
            'description' => 'Para la actualización de determinantes ambientales se realizaron las siguientes  4 actividades: -inventario de las determinantes ambientales en la jurisdicción de Corpoboyacá. - identificación y análisis de los soportes técnicos y jurídicos de las determinantes ambientales, - elaboración de matriz de verificación de la incorporación de Determinantes Ambientales y de Gestión de riesgo en las revisiones de los POT y - elaboración proyecto de Resolución de actualización de Determinantes Ambientales. La meta queda en el 95% dado a que esta pendiente la firma de la resolución.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10850,
            'year' =>1,
            'value' => 2.5,
            'description' => 'Las actividades implementados fueron:- Formulación del Plan de Ordenamiento Ecoturístico para el PNR Serranía Las Quinchas, en conjunto con la Alcaldía de Puerto Boyacá y la empresa Consultora, el cual después de socializarse con la comunidad y realizados los ajustes solicitados por diversas instancias corporativas, incluido el Director general de la Corporación, fue remitido a la Corporación; se inició la formulación del concepto para su adopción.-Consolidación de la línea base del turismo de naturaleza-aviturismo y caracterización de la oferta turística dedicada al avistamiento de aves en la jurisdicción de Corpoboyacá, se diseñó un esquema de Gobernanza para las APs y EEs de la jurisdicción, se desarrolló un instructivo para el desarrollo del aviturismo. Se actualizó la línea base de prestadores de servicios ecoturísticos del Predio Playa Blanca y su zona de influencia y se diseñó un plan de capacitaciones (actualización) para las Comunidades locales, que contribuya con procesos de turismo de naturaleza en el Predio Playa Blanca. -Elaboración de Estudios Previos para definir el esquema administrativo, operativo y tarifario para el PARQUE NATURAL REGIONAL UNIDAD GEOGRAFICA SISCUNSI-OCETA y el PREDIO PLAYA BLANCA- LAGO DE TOTA (0,5 actividad no finalizada)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10851,
            'year' =>1,
            'value' => 50,
            'description' => 'Se abrió la convocatorias para adquisición de predios de interés hídrico: Cofinanciación para adquisición de predios de interés hídrico en la jurisdicción de Corpoboyacá, en conjunto con la Gobernación: aplicaron 15 municipios (Arcabuco, Berbeo, Coper, Firavitoba, Gachantivá, Gámeza, Jericó, La Uvita, Paipa, Rondón, San Pablo de Borbur, Sotaquira, Tasco, Toca y Tota) postulando 18 predios. Una vez realizada la evaluación técnica, social, económica y jurídica, que incluyo visita técnica de verificación a los predios, fueron seleccionados los siguientes predios: San Isidro en Rondón (39,4196 Ha) y Las Mesitas en La Uvita (65,179 Ha). Debido a la demora en el proceso de obtención de los CDPs por parte de la Gobernación y por solicitud expresa de esta entidad, el proceso contractual no se realizo durante 2020. Estamos a espera de orientación por parte de las directivas de la Corporación para iniciar el proceso contractual.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10852,
            'year' =>1,
            'value' => 1.5,
            'description' => 'Las alternativas productivas implementadas fueron: 1- Se suscribió el convenio 2020-07 con la Universidad Nacional, para desarrollar un proyecto de investigación sobre abejas nativas-polinizadores, con el propósito de realizar un inventario de especies y planear un monitoreo de las comunidades de abejas silvestres y domésticas de las áreas protegidas regionales de Siscunsi-Oceta y Las Quinchas. Así mismo, y bajo este mismo contexto realizar una evaluación y un plan de desarrollo de la actividad de meliponicultura en las áreas protegidas de la región de Lengupá. Se cuenta con vigencias futuras para el desarrollo de este proyecto. -  2:  Se diseñó una convocatoria para la “Implementación de apiarios piloto en áreas protegidas y ecosistemas estratégicos de la jurisdicción de Corpoboyacá, con el objeto de promover la conservación de los ecosistemas y las prácticas amigables y sostenibles con el ambiente generando fuentes de ingresos alternativos en las áreas de conservación (0,5).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10853,
            'year' =>1,
            'value' => 0.3,
            'description' => 'Para el 2020 se proyecto la meta de 0,5 esquemas de PSA implementados. En esta vigencia solo se avanzo en el 0,3 del esquema correspondiente a :-Estructuración de la propuesta con MASBOSQUES, operador de la plataforma de BanCO2, para la implementación de un PSA a través de un Esquema de Retribución de Servicios ambientales (ERSA) para el PNR Serranía de las Quinchas, en el cual se identifique, delimite y prioricen las áreas y beneficiarios dentro del área para generar estrategias de preservación y restauración como pago al servicio ambiental',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10854,
            'year' =>1,
            'value' => 15,
            'description' => 'El 15% de avance en la implementación de la estrategia se soporta con las siguientes actividades:
        -Identificación de zonas de importancia para la conservación de las aves, 
        -Formulación de la estrategia “Bosques, Comunidades y Aves”
        -42 capacitaciones a comunidades locales, 
        -20 censos de avifauna,
        -Participación en la edición de guía de Aves para colorear “Bosques, Comunidades y Aves”,
        -Identificación conjunta con las comunidades de 6 senderos con potencial para el desarrollo del aviturismo ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10855,
            'year' =>1,
            'value' => 2.5,
            'description' => 'Con respecto a las 3 actividades proyectadas, se avanzó en:
        Actividad 1. 
        - 17 capacitaciones y eventos de divulgación sobre conservación de fauna silvestre, 
        - 10 salidas de campo para toma de datos sobre venado cola, oso andino y otras especies de fauna 
        - 13 casos de conflicto diagnosticando que el 90% de los casos fueron perros domésticos, por lo cual se envió comunicado a municipios y gobernación de Boyacá)
        Actividad 2.  
        - Se consolidó documento técnico para las especies magnolia “Magnolia arcabucana” y nogal “Junglans neotropica”, 
        - Levantamiento de 7 inventarios botánicos en parcelas ubicadas en PNR Rabanal, Cortadera, Siscunsí-Ocetá, El Peligro y Amortiguación SFF Guanentá, 3 actividades de divulgación
        - Análisis preliminar del estado de conservación de 44 especies de Espeletias en jurisdicción de Corpoboyacá, a través de recopilación y análisis de información secundaria 
        10 días de salida de campo en los páramos de La Cortadera, Siscunsi-Ocetá. Rabanal., Pisba y otras áreas del Complejo Tota-Mamapacha-Bijagual
        Actividad 3. 
        - Se formularon Estudios previos para convenio interadministrativo con Parques Nacionales y Alcaldía de Paipa
        - Se realizaron estudios previos y revisión a convocatoria de familias para implementar Sistemas Sostenibles para la conservación en el área amortiguación del SFF Guanentá. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10856,
            'year' =>1,
            'value' => 2,
            'description' => 'Los viveros el Jordán y Hato Laguna están en funcionamiento y con registro ICA vigente. Se realizaron las siguientes actividades:
        - Se entregaron 19.460 plántulas de especies nativas para el establecimiento y restauración asistida en diferentes municipios
        - Acompañamiento para siembra de plantaciones
        - Aporte de abono e hidroretenedor.
        - Se realizó una jornada de recolección de semillas nativas en el municipio de Arcabuco, para producción de material vegetal de especies nativas. 
        - Se entregaron cerca de cinco mil plántulas de especies nativas para el establecimiento de restauraciones asistidas en el marco del programa Boyacá reverdece. 
        - Para el vivero Hato Laguna de Aquitania, las instalaciones continúan y se tiene vigilancia permanente.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10857,
            'year' =>1,
            'value' => 5,
            'description' => 'Las 5 organizaciones y/o municipios apoyados fueron:
        - Vivero del Batallón Silva Plazas en Duitama, Vivero forestal Batallón Tarqui, Vivero Forestal Empresa Diaco, Vivero Forestal Alta Montaña del Santuario de Flora y Fauna Guananta Alto Río Fonce y Vivero Forestal del municipio de Paipa.
        - Se realizó asistencia técnica y acompañamiento en la propuesta de la creación de un vivero forestal en la empresa GERDAU-DIACO del municipio de Tuta, teniendo como objetivo procesos de Restauración',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10858,
            'year' =>1,
            'value' => 66,
            'description' => '
        - Se ejecutaron 20 hectáreas de restauración asistida en el Complejo de Páramos Tota Bijagual Mamapacha, municipio de Tota y 1 hectárea en el Páramo de Siscunsi Oceta Municipio de Monguí. 
        - Se firma convenio 665 con el MADS FONAM para ejecutar parte de sus recursos en el PNR Serranía de las Quinchas. (VALOR DEL CONVENIO)|
        - Se desarrollan acciones directas de establecimiento de 1.000 plántulas forestales en las instalaciones del Batallón Silva Plazas en Duitama, para procesos de restauración 
        - Establecimiento de 1.000 plántulas en el cerro El Tíbet, Municipio de Floresta, en zona de abastecimiento del acueducto del casco urbano, reforestación equivalente a 5 hectáreas implementadas en proceso de restauración en áreas protegidas declaradas, ecosistemas estratégicos y/o áreas afectadas por incendios forestales
        - Se presentó al MADS el proyecto “IMPLEMENTAR EN LA JURISDICCIÓN DE CORPOBOYACÁ ACCIONES TENDIENTES A LA RESTAURACIÓN DE ÁREAS DE IMPORTANCIA AMBIENTAL PARA LA SOSTENIBILIDAD DEL RECURSO HIDRICO EN LAS CUENCAS DEL RÍO CRAVO SUR Y LOS DIRECTOS AL MAGDALENA MEDIO ENTRE LOS RÍOS NEGROS Y CARARÉ, PARQUE NATURAL REGIONAL SERRANÍA DE LAS QUINCHAS”, por un valor de $ 1.094 millones de pesos, con financiamiento del Fondo Nacional Ambiental FONAM.
        - Se desarrolló acciones directas de establecimiento de 5.000 plántulas forestales, con la participación del Ejército, Policía y Alcaldías en la conmemoración del día del árbol, y en el marco del proyecto Boyacá Reverdece.
        
        Se realizó mantenimiento a 20 hectáreas plantadas en el Complejo de Páramos Tota Bijagual Mamapacha, compensación voluntaria de la empresa Servientrega
        
        El total de hectáreas en proceso de restauración son 138, ejecutadas en 2020.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10859,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10860,
            'year' =>1,
            'value' => 2,
            'description' => 'Convenio interadministrativo 665 con el MADS - FONAM. 
        - Visitas a los municipios de Boavita, Samacá, Pauna, Tota, Tuta, Soracá, Moniquirá, Gachantivá, Tipacoque y Soatá.
        
        - En articulación con el proyecto Boyacá se adapta al cambio climático, se realizó diagnóstico y caracterización de suelos, así como actividades de socialización y capacitación en manejo de suelos agrícolas, en los municipios de Tunja, Ventaquemada, Samacá, Motavita, Siachoque, Toca, Soracá.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10861,
            'year' =>1,
            'value' => 3,
            'description' => 'Se desarrollaron 3 acciones en la identificación, prevención, manejo y control de especies exóticas y/o invasoras priorizadas: Caracol africano (Achatina fulica) en los municipios de Borbur y Otanche, el retamo espinoso (Ulex europaeus) y retamo liso (Teline monspessulana) y el cangrejo rojo (Procambarus clarkii).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10862,
            'year' =>1,
            'value' => 20,
            'description' => '20 negocios identificados, verificados y avalados:
         
        Finca San Luis, Misqua Caminos y Sentidos de los Andes S.A.S., Asociación Agropecuaria de Productores de Cacao de Coper El Manantial, Concept Constructora, Bica Legado Ancestral, Asociación de Productores de Cacao del Municipio de Pauna, Corporación Reserva Natural Pueblito Antiguo ECOLAGUNA, Nido de Águilas RNSC, Asociación Campesina Agropecuaria de Maripí -ASOCAM-, Edison Fernando Borda Arias, Terragua, Cooperativa Multiactiva de Productores de Cacao del municipio de Quípama –COOPROQUIÍPAMA, Un Mundo Apícola En Sus Manos S.A.S., Beela Apicultura S.A.S, Mujeres Rurales Asociadas del Lengupá, EMPSERVPBOY S.A.S E.S.P, Operador Turístico Tibatours, OMALAC, Posada rural Casa del Aire, Conociendo a Colombia.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10863,
            'year' =>1,
            'value' => 30,
            'description' => '30 negocios verdes con seguimiento: 
        
        Manakin Nature Tours, Agroindustria Frutos De Mi Tierra, Madremonte Reserva Natural, Domitila Paipa Vargas, Gesambientes Sas, Industrias Brahama Sas, Glamping Finca Corazón, Jacamaki Reserva Natural, Befitnet Sacha Inchi, Apicultura Los Arrayanes S.A.S, Rch Chocolates Ci Sas, Las Canela, Artesanías Páramo, Cervecería Hunzahua, Fundación Natufauna, Luz Angela Sánchez Rodríguez -Corazón De Mi Tierra, Miguel Ángel Sierra -Buen Aroma, Productos Alimenticios Don Jerónimo, Ser Sostenible, Vivienda Sostenible 2030, Quinua De Los Andes, Abeja Colombiana S.A.S -Apicultura Beecol, Agroindustrias Las Margaritas, La Huerta Productos Hidropónicos Sas, Ecoarte E&C, Eleksa Ghee, Julián Barbosa - Elixir Del Páramo, Mamapacha Experience S.A.S, Metal Is Arte Excalibur, Pulpiaroma.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10864,
            'year' =>1,
            'value' => 17,
            'description' => 'Se formuló la estrategia de promoción y comercialización de los Negocios Verdes, denominada “Conexión Verde” con la cual a través de Marketing digital implemento apoyo la creación del Portafolio virtual de Negocios Verdes CORPOBOYACA. Las empresas que se vincularon son: Agroindustrias Las Margaritas, Abeja Colombianas S.A.S., Apicultura Elixir del Páramo, Betfitnet Sacha Inchi, Cervecería Hunzahua, Domitila, Ecoarte E&C, Agroindustria Frutos de mi Tierra S.A.S., Jacamaki Reserva Natural, Las Canelas, Metal Is Arte Excalibur, Productos Alimenticios Don Jerónimo, Pulpiaroma, RCH Rosa Chocolates CI S.A.S, Ser Sostenible, Artesanías del Páramo de Guina, Eleksa Ghee. Los productos promocionados para comercialización se encuentran publicados en la dirección: https://www.corpoboyaca.gov.co/noticias/portafolio-negocios-verdes/',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10865,
            'year' =>1,
            'value' => 100,
            'description' => 'Se priorizaron dos sectores: minero/industrial y agropecuario. Se realizaron actividades de generación de conocimiento no formal, acompañamiento para promover la adopción de prácticas ambientales sostenibles, monitoreo a proyectos y participación en mesas de trabajo sectoriales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10866,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10867,
            'year' =>1,
            'value' => 1,
            'description' => 'Principales actividades realizadas durante el año 2020
        87 Acompañamiento PGIRS 
        24 Visitas de control y seguimiento a generadores y gestores de ACU
        6 Mesa Interinstitucional Departamental • Mesa Regional de Economía Circula
        2 Mesa Nacional de Biomasa
        1 Análisis de Proyectos modelo para transformación de orgánicos
        16 Mesas técnicas de orientación en PGIRS con municipios 
        Asistencia y participación en 21 Comités Virtuales y/o presenciales convocados por municipios',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10868,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10869,
            'year' =>1,
            'value' => 2,
            'description' => 'En implementación de un programa para implementar el manejo de RESPEL, se trabajo con los sectores agrícola y automotriz  en  municipios de la  provincia Ricaurte, se logro la recolección de 1080 kg, para lo cual se realizaron las siguientes actividades:
        Sector automotriz: Reunión de apertura fortalecimiento a la gestión ambiental de 10 establecimientos, 10 visitas de diagnóstico ambiental, 10 informes de diagnóstico ,10 planes de acción, 10 seguimientos virtuales que incluyen informes, 10 visitas de verificación a al implementación del plan de acción con susu respectivos informes, un conversatorio en el que se trataron experiencias exitosas en el sector y una ceremonia de exaltación de lo logros obtenidos durante el proyecto.
        Sector agrícola: Adelanto en la implementación de programa, en apoyo al trabajo realizado por la Corporación Campo Limpio, proyecto para reforzar, capacitar, fortalecer e implementar del Plan Posconsumo de envases y empaques de plaguicidas en 7 municipios jurisdicción de CORPOBOYACA.  
        
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10870,
            'year' =>1,
            'value' => 1,
            'description' => '- Para dar cumplimiento a la actividad se llevo a cabo lo siguiente:
        - Realización de tres reuniones con la ANDI y la empresa Gestora LITO, dos para definir posible realización de jornada de recolección de residuos posconsumo y una para definir fechas, horarios, rutas y comunicación con las alcaldías de los municipios así comocon los generadores  de recolección, luego de análisis de cantidades reportadas en la encuesta realizada.
        - Definición de encuesta para ser publicada en la página de la Corporación, dirigida a las empresas de los municipios de Tunja, Paipa, Duitama y Sogamoso, referente a cantidad y tipo de residuos posconsumo para viabilizar campaña.
        - Desarrollo de la jornada de recolección de residuos posconsumo en los municipios de Tunja, Paipa, Duitama y Sogamoso, los días 15 y 17 de septiembre 
        - Apoyo en realización de jornada de recolección de residuos posconsumo, organizado por la Fundación Puntos verdes y Fundación Acerías Paz de Río',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10871,
            'year' =>1,
            'value' => 100,
            'description' => 'Se llevo a cabo la vigilancia y control a gestión integral de residuos peligrosos en 79 establecimientos generadores de RESPEL.  y  fortalecimiento a 10 establecimientos sector automotriz para implementar planes de acción en BPA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10872,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10873,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10874,
            'year' =>1,
            'value' => 59.2,
            'description' => 'En el año 2020, se realizaron los siguientes trámites, en la sede Central.  
        Radicados 279, autos de inicio 154, visitas 117, conceptos 69 y decisiones 54',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10875,
            'year' =>1,
            'value' => 44,
            'description' => 'Se cumplio con la meta estipulada para el 2020 dado que se resolvieron 154 tramites de años anteriores en el año 2020.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10876,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10877,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10878,
            'year' =>1,
            'value' => 0.5,
            'description' => 'Se dió inicio a la estructuración la estrategia de formalización de la administración del recuro hídrico, para los usuarios de la jurisdicción, a través de la recopilación y análisis de información secundaria disponible que obra dentro de la entidad, como:
        - Indicadores de los tramites ambientales del recurso hídrico, 
        - Riesgos establecidos dentro la dependencia de Ecosistemas y Gestión Ambiental para la atención de los tramites, informes del estado de procesos sancionatorios generado por la Subdirección de Recursos Naturales con el respectivo análisis por provincia,  
        - Análisis de los tramites otorgados de recurso hídrico  en el marco de los inventarios únicos documentales de las territoriales de Soata, Socha, Miraflores, Pauna y centro, a través del análisis administrativo, operativo y legal con el fin de proyectar acciones y/o actividades en el marco de la implementar la formalización del Recurso Hídrico. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10879,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10880,
            'year' =>1,
            'value' => 2,
            'description' => 'Se realizó revisión del PORH y se generaron informes ejecutivos del mismo, de lo cual surge mesa de trabajo interna con el fin de socializar, analizar y priorizar las alternativas de inversión de acuerdo a lo estipulado en el PORH y teniendo en cuenta los estudios e instrumentos de planeación del recurso hídrico existentes en la corporación.
        Se llevaron a cabo socializaciones de la ronda hídrica y estudios de adecuación hidráulica relacionados con el recurso hídrico a los municipios de Tópaga, Corrales, Sogamoso, Nobsa, Tibasosa, Santa Rosa de Viterbo, Paipa, Duitama, Sotaquira, Toca, Chivatá, Tuta, Oicata, Combita, Tunja, Motavita y Sora en el marco del cambio de administraciones en los entes territoriales. 
        Se realizaron mesas de trabajo y visita técnica de campo con Usochicamocha para verificar el estado actual del Rio Chicamocha, con el fin de realizar mantenimiento y limpieza en el marco del PORH, del cual surge un proyecto 140-B915729, que fue viabilizado por la corporación mediante aval ambiental N°CO-2020-008.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10881,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10882,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10883,
            'year' =>1,
            'value' => 30,
            'description' => 'Se realizó la revisión y evaluación de 163 PUEAA´s 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10884,
            'year' =>1,
            'value' => 3,
            'description' => '** Se han realizado mesas de trabajo permanentes con los profesionales del proyecto Adaptación a los Impactos del Cambio Climático en Recursos Hídricos en los Andes (AICCA), para la formulación de PUEAA’s para tres (3) distritos de riego de la cuenca del Lago de Tota. 
        *Se realizó la inclusión de la metodología para la determinación de la de meta reducción del porcentaje de pérdidas para distritos de riego, con la vinculación de los conceptos de cambio climático y variabilidad climática, junto con el anexo N°5 Términos de referencia para la formulación de Distritos de Riego con caudales mayores de 0,5 l/s.
        * Se realizaron mesas de trabajo con algunas Empresas de Servicios Públicos y municipios de la jurisdicción que, prestan el servicio de agua para consumo humano,  con el objetivo de atender dudas relacionadas con la Formulación e implementación de los PUEAA´s. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10885,
            'year' =>1,
            'value' => 0.32,
            'description' => 'Fortalecimiento estaciones de monitoreo en cuencas alta y media del rio Chicamocha, con compra de equipos. Compra de Consumibles:
        CDS-2020-294, con acta de inicio el 6 de Octubre con la   Empresa K-2  INGENIERIA  S.A.S PARA EL SUMINISTRO DE CONSUMIBLES Y/O REPUESTOS MARCA MAIGRAI NUEVOS Y ORIGINALES, INCLUIDA SU ADECUACION E INSTALACIÓN, PARA EL FORTALECIMIENTO DE LAS ESTACIONES AUTOMATICAS DE MONITOREO DE RECURSO HIDRICO EN LAS CUENCAS ALTA Y MEDIA DEL RIO CHICAMOCHA- y 
        CDS-2020427 SERVIQUIMICOS E.U. Cuyo objeto es el:  SUMINISTRO DE REACTIVOS, INSUMOS, EQUIPOS E INSTRUMENTOS PARA LA  OPERACIÓN  DE  LAS  REDES
         CCS-2020426- UNION TEMPORAL PROALQUIM LTDA. Cuyo objeto es:  REALIZAR MONITOREO Y CARACTERIZACIÓN A CUERPOS DE AGUA Y VERTIMIENTOS EN LA JURISDICCIÓN DE CORPOBOYACÁ. Este contrato tiene por objeto Monitorear la Corriente Principal del Rio Chicamocha y rio Minero en dos épocas del año (tiempo seco y en época de lluvias), además una campaña para los ríos Lengupá, Sutamarchán, Moniquirá y Suarez con sus Afluentes Directos, Tota Pesca y Chiquito. Además de 10 tipos de vertimiento de acuerdo con lo definido en la norma de vertimientos la Resolución 631 del 2015 del MADS.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10886,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10887,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10888,
            'year' =>1,
            'value' => 2,
            'description' => 'Se hizo la Revisión de las Siguientes Resoluciones:
        1.La  Resolución 3382 del 1 de octubre del 2015Por medio de la cual se adoptan. los Criterios de Calidad del Recurso Hídrico dentro de la jurisdicción de CORPOBOYACÁ La cual fue modificada parcialmente por la resolución 1315 del 12 de agosto del 2020
        2. La Resolución 3560 de 9 de octubre del 2015  Por media de Ia cual se establecen los Objetivos de Calidad de agua en la Cuenca Alta y Media del Rio Chicamocha a lograr en el periodo 2016 2025  la cual se derogó por la  resolución 1724 de 2 de octubre del 2020
        3. Se revsio la resolución 3559 del 9 de octubre del 2015 Por medio de Ia cual se establecen los Objetivos de Calidad de aqua en Ia Cuenca del Rio Lengupá para el periodo 2016 - 2025 
        
        Se  emitieron  las siguientes Resoluciones:
        1.  Resolución 1315 de 12 de agosto de 2020  “Por medio de la cual se modifica parcialmente la Resolución 3382 del 01 de octubre de 2015, y se dictan otras disposiciones”
        2. Resolución 1724 del 2 de octubre del 2020 Por medio de la cual se establecen los objetivos de Calidad a lograr para la corriente principal de la Cuenca Alta y Media del  Rio Chicamocha a mediano plazo (2025) y largo plazo 2035
        3,  Resolución 1731 del 5 de octubre del 2020 Por medio de la cual se establecen los objetivos de Calidad a lograr en la corriente principal de la cuenca del  Rio Tota, Pesca,  Monquirá  y Chiquito a largo plazo 2035.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10889,
            'year' =>1,
            'value' => 2,
            'description' => '*Se cuenta con los Documentos del Diagnóstico de los Ríos Chicamocha y Lengupá
        Se cuenta con los Documentos del Diagnóstico de los Ríos Chicamocha y Lengupá
        Se establecieron las metas de carga global contaminante de acuerdo a lo definido el decreto 1076 del 2015 para el Tercer Quinquenio de la corriente principal de la cuenca Alta y segundo Quinquenio de la Cuenca Media del rio Chicamocha y para la Corriente Principal de la Cuenca del Rio Lengupá.
        1. . Se cuenta con la Resolución 1025 de 13/07/2020 que Adopta el Procedimiento para el Establecimiento de Meta de Carga Global Contaminante de la Corriente Principal del Río Lengupá. 
        2. Se cuenta con la Resolución 1027 de 13/07/2020 que Adopta el Procedimiento para el Establecimiento de Meta de Carga Global Contaminante de la Corriente Principal del Río Chicamocha. 
        3. Se llevo a cabo el proceso de acuerdo con las respectivas etapas definidas en la norma. y se emitieron las siguientes Acuerdos:
        * Acuerdo No. 009 (20 de noviembre de 2020), “Por el cual se establece la meta global de carga contaminante para los parámetros de Demanda Bioquímica de Oxígeno (DBO5) y Sólidos Suspendidos Totales (SST) por vertimientos puntuales en la corriente principal de la Cuenca Alta y Media del Río Chicamocha, con sus principales afluentes en jurisdicción de CORPOBOYACÁ, para el tercer y segundo quinquenio respectivamente, comprendido entre el 1 de enero de 2021 y el 31 de diciembre de 2025”
        *Acuerdo Nº. 008 (20 de noviembre de 2020), “Por el cual se establece la meta global de carga contaminante para los parámetros de Demanda Bioquímica de Oxígeno (DBO5) y Sólidos Suspendidos Totales (SST) por vertimientos puntuales en la corriente principal de la Cuenca del Río Lengupá, en jurisdicción de CORPOBOYACÁ, para el segundo quinquenio, comprendido entre el 1 de enero de 2021 y el 31 de diciembre de 2025”.
        Para la Parte Social del proyecto se  firma convenio CVN-2020003 con el FONDO MIXTO PARA LA PROMOCION DE LA CULTURA Y LAS ARTES DE BOYACA para AUNAR ESFUERZOS TÉCNICOS, FINANCIEROS Y OPERATIVOS ENTRE CORPOBOYACA´ Y UNA ENTIDAD SIN ÁNIMO DE LUCRO (ESAL), CON EL FIN DE PROMOVER Y DESARROLLAR PROCESOS CULTURALES DE FORMA PEDAGÓGICA Y PARTICIPATIVA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10890,
            'year' =>1,
            'value' => 1,
            'description' => 'Se creo la Campaña Juntos Trabajemos Nuestros Ríos Salvemos del proceso de matas de Carga Global Contaminante que viene desarrollando varias campaña mediante Cuñas Radiales, Programas de Radio y se llevaron a cabo 6 talleres generales con tosd los usuarios además de diferente talleres personalizados con diferente tipos de usuarios de los Ríos Chicamocha y Lengupá . Se firma convenio CVN-2020003 con el FONDO MIXTO PARA LA PROMOCION DE LA CULTURA Y LAS ARTES DE BOYACA para AUNAR ESFUERZOS TÉCNICOS, FINANCIEROS Y OPERATIVOS ENTRE CORPOBOYACA´ Y UNA ENTIDAD SIN ÁNIMO DE LUCRO (ESAL), CON EL FIN DE PROMOVER Y DESARROLLAR PROCESOS CULTURALES DE FORMA PEDAGÓGICA Y PARTICIPATIVA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10891,
            'year' =>1,
            'value' => 5,
            'description' => 'Para darle cumplimiento a las metas del proyecto se llevaron a cabo las siguientes actividades:
        • Mesas de trabajo para deﬁnir actividades convenios de Corpoboyacá con Agrosavia, AICCA, y AFD.
        • 3 Talleres de socialización e inscripción usuarios: Proyecto Reconversión Tecnológica Cultivo de Cebolla Larga en Cuenca Lago de Tota”
        • Asesoría y acompañamiento en Actualización PGIRS a los 3 municipios de la cuenca del Lago de Tota.
        • Mantenimiento y reparación de la maquinaria del Lago de Tota, propiedad de Corpoboyacá
        • Asistencia técnica RECAS y PUEAAS a usuarios dentro de resolución de Reglamentación Túnel de Cuitiva.
        • Memorando de Entendimiento con Conservación internacional para estrategias de Conservación, Protección, restauración y uso sostenible, bienestar de familias campesinas e implementación de SBN.
        • Promoción de espacios de participación ciudadana en mesas de trabajo, reuniones y/o talleres con el fin de generar canales de comunicación más efectivos para la resolución de los conflictos entorno al recurso hídrico del Lago de Tota.
         •Se llevó a cabo la segunda reunión con operadores turísticos playa blanca, donde se revisaron los avances de las obras y demás acciones que se vienen adelantando en el predio.
        • Como parte de acciones conjuntas con otras entidades se llevó a cabo jornada de limpieza subacuática en el Lago de Tota y desembocadura del rio Tobal.
        • Seguimiento a CONPES 3801, en la Plataforma SISCONPES, en donde se realizó cargue de las siguientes actividades, de competencia de la Corporación: 
         Diseñar e implementar un programa de control de plantas acuáticas.
         Establecer la demanda efectiva y potencial de agua para la cuenca del Lago de Tota.
         Definir el caudal ambiental de las fuentes hídricas abastecedoras del Lago de Tota.
         Actualizar los Planes de Gestión Integral de Residuos Sólidos (PGIRS) de los municipios de Aquitania, Tota y Cuítiva.
         Realizar el seguimiento a los Programas de Uso Eficiente y Ahorro del Agua de los principales usuarios de la cuenca con énfasis en los sectores de agua potable, agrícola e industrial.
         Conformar y poner en funcionamiento el Consejo de Cuenca.
         Implementar un Centro de Investigación Científica, Tecnológica y de Desarrollo Productivo para la cuenca del Lago de Tota. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10892,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10893,
            'year' =>1,
            'value' => 0.5,
            'description' => 'En el año 2020 se avanzó en el diagnóstico de los conflictos ambientales relacionados con el recurso hídrico, a partir de la revisión de la información secundaria, como lo es: 
        - POMCAS: identificación de problemáticas y conflictos establecidos con los involucrados de las cuencas ordenadas. 
        - Acciones Populares, identificación judicial interpuesta a la Corporación a través de los mecanismos de participan ciudadana en los cuales involucran temas de recurso hídrico. 
        - Sancionatorios: revisión de la información de los procesos en cuanto al recurso hídrico en la jurisdicción a través de la visual de la conformación de provincia.
        Así mismo, se establecieron mesas de trabajo con el Ministerio con el fin de conocer los esquemas y funcionamiento de las plataformas colaborativas como estrategia prospectiva para la implementación de la Gobernanza del agua. Para ello se realizaron 4 reuniones con el MADS  y  funcionarios de la Corporación Autónoma Regional de Boyacá-Corpoboyacá, donde su objetivo central fue que el MADS nivelara a los funcionarios de la Corporación sobre el lenguaje de la gobernanza y la implementación de recursos financieros y mercados ambientales, además de brindar información sobre la metodología de estos mecanismos y de cómo se encuentra conformados los grupos de Gobernanza del Agua y el de Ordenamiento del Dirección de Recurso Hídrico.
        
        Se establece visitas de pre alistamiento para la posible aplicación del esquema en el área de la jurisdicción donde se da a conocer sobre la conformación de la plataforma colaborativa, dicho acercamiento con algunos actores sociales e institucionales de las microcuencas de la quebrada Toibita y la Zarza, ubicada en los municipios de Paipa y Duitama. 
        Por último, se logra una reunión con los siguientes actores sociales: Red Vital del Municipio de Paipa, representante de las administraciones del municipio de Paipa y Duitama, los presidentes de los acueductos rurales Resguardo de Bonza, Toibita, y la Trinidad y el presidente de la Federación Departamental de Acueductos Rurales, quienes se muestran interesados a la implementación de la plataforma colaborativa en sus territorios.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10894,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10895,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10896,
            'year' =>1,
            'value' => 40,
            'description' => 'Se resolvieron 184 trámites permisionarios iniciados en vigencias anteriores de la Subdirección de Recursos Naturales, así:
        
        43 Aprovechamientos Forestales
        38 Trámites de Emisiones Atmosféricas
        103 Trámites de licenciamiento Ambiental
        
        Se sobrepaso la meta establecida para vigencia 2020 
          ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10897,
            'year' =>1,
            'value' => 77,
            'description' => 'Durante la vigencia 2020, se dio inicio a 103 trámites permisionarios de: Licencia Ambiental (30), Permisos de Emisiones Atmosféricas (9) y Aprovechamiento de árboles aislados (64); de los cuales 31 trámites culminaron actividades con acto administrativo de decisión.
        
        De los 31 trámites resueltos, 21 cumplieron los tiempos establecidos, alcanzando un porcentaje de cumplimiento del 77%, sobre el 80% proyectado. 
        
        Cumplimiento meta Plan de Acción del 96%
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10898,
            'year' =>1,
            'value' => 29,
            'description' => 'La actividad comprende una actualización de bases de datos de los tramites: Licencias Ambientales, Aprovechamientos Forestales, Reporte en el Subsistema SNIF, Permiso de Emisiones Atmosféricas, Concesiones de Agua y reglamentación de Corrientes, Permiso de Vertimientos, Permiso de Ocupación de Cauce. Para el cumplimiento de la meta establecida, se requiere del trabajo y participación de la Subdirección de Recursos Naturales, Subdirección de Ecosistemas y Gestión Ambiental y Oficina Territoriales (Pauna, Socha, Soata, Miraflores).
        
        Por tipo de tramite se lograron las siguientes metas:
        1. Licencias Ambientales: Años reportados 2010 a 2020.
        2. Aprovechamientos Forestales: Años reportados 2012, a 2019
        3. Permiso de emisiones: Años reportados 2010 a 2020.
        4. Concesiones de agua: Años reportados 2014 a 2019. 
        5. Permisos de vertimientos: Años reportados 2004 a 2019.
        6. Permisos de ocupación de cauce: Años reportados 2014 a 2019.
        
        Debido a la emergencia sanitaria declarada se limitó el acceso a los expedientes físicos, lo cual no permitió el cumplimiento de la meta según lo programado
         
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10899,
            'year' =>1,
            'value' => 32,
            'description' => 'Con corte a 31 de diciembre de 2020, se atendieron un total de doscientos (200) quejas o infracciones ambientales radicadas antes del 31/12/2019, correspondiente a las siguientes actuaciones administrativas:
        
        58 inicios de procesos sancionatorios.
        117 Archivos de indagaciones preliminares.
        22 Archivos de documentación (quejas)
        3 Archivos de diligencias administrativas
        Se obtuvo un cumplimiento del 80% para este indicador.
        
        Lo planificado era atender 250 quejas y/o infracciones radicadas antes del 31 de diciembre de 2019
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10900,
            'year' =>1,
            'value' => 80,
            'description' => 'Para la vigencia 2020 se radicaron en sancionatorio un total de 240 conceptos técnicos de seguimiento, derivados de la atención de quejas, reportes policiales de decomisos, de los cuales en ochenta y seis (86) casos se dio apertura a proceso sancionatorio; en dieciséis (16) se apertura indagación preliminar. Quedaron a 31 de diciembre, 133 conceptos por gestionar, de los cuales: 103 están dentro de los tiempos establecidos para su respectivo análisis y trámite que corresponda.
        
        El avance planeado se vio afectado principalmente por la suspensión de términos en el proceso sancionatorio durante el 20 de marzo y el 18 de junio de 2020, por las disposiciones adoptadas por la Corporación en el marco de la emergencia sanitaria, social, económica y ambiental decretada por el gobierno nacional.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10901,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10902,
            'year' =>1,
            'value' => 5.7,
            'description' => 'En la vigencia 2020 se decidieron de fondo 111 procesos sancionatorios de los cuales corresponden a:  96 decisiones y 15 Cesaciones. 
        
        El número de actos administrativos de iniciación de procedimiento sancionatorio expedidos es de 1.698 (universo), el cual se encuentra en proceso de depuración constante.
        
        Igualmente se dio impuso procesal a trecientos cuarenta y nueve (349) expedientes de vigencias anteriores correspondientes a 169 Resoluciones y 180 Autos, con los cuales se adelantaron actuaciones de: formulación de cargos, diligencias administrativas, apertura a pruebas, desgloses, decisiones de recursos, decisión revocatoria directa, levantamiento de medida preventiva. 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10903,
            'year' =>1,
            'value' => 500,
            'description' => 'Para el periodo reportado se ejecutaron un total de 657 seguimientos correspondientes a licencias ambientales, concesiones de aguas, aprovechamientos forestales, acciones judiciales, requerimientos de procuraduría y otros según la demanda. Lo anterior de acuerdo a las metas establecidas en el plan de acción 2020-2023.
        
        
        El avance de la meta supero lo programado, se ejecutaron 657 seguimientos de 500 definidos en el Plan de Acción, así:
        
        LICENCIAS AMBIENTALES - 191
        CONCESION DE AGUAS - 201
        APROVECHAMIENTO FORESTAL - 148
        INFRACCIONES AMBIENTALES - 23
        PERMISO DE EMISIONES - 52
        PERMISO DE VERTIMIENTOS - 12
        PERMISO HIDROCARBUROS – 30
        
        Los cronogramas de seguimiento y control se vieron afectados por la emergencia Sanitaria declarada por el gobierno nacional limitando la salida a visitas de campo por lo tanto para dar cumplimiento a las metas se estableció un seguimiento documental y gradualmente reiniciar salidas a campo según localización de funcionarios, para evitar riesgos a los mismos.
        .',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10904,
            'year' =>1,
            'value' => 100,
            'description' => 'Se construyó matriz donde se priorizaron las acciones judiciales de injerencia sobre los Recursos Naturales, que incluye identificación de cada acción, las actividades a realizar, acciones ejecutadas y responsables del respectivo seguimiento. El cumplimiento de la meta fue del 100%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10905,
            'year' =>1,
            'value' => 25,
            'description' => 'Se realizaron10 seguimiento de los 40 programados para el año 2020 a PUEAA de los siguientes expedientes: OOCA-0013/14, OOCA-00027/14, RECA-0001/19, RECA-0015/14, OOCA-0241/10, OOCA-00033/14, OOCA-0010/14, CAPP-0020/13, OOCA-0061/19, OOCA-0011/12.
        
        El cumplimiento de la meta se vio afectado por la emergencia Sanitaria declarada por el gobierno nacional, limitando la salida a visitas de campo por lo tanto se estableció un seguimiento documental y gradualmente reiniciar salidas a campo según localización de funcionarios, para evitar riesgos a los mismos.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10906,
            'year' =>1,
            'value' => 88.42,
            'description' => 'Se realizaron 84 seguimientos a PSMV de 95 programados. 
        
        El cumplimiento de la meta se vio afectado por la emergencia Sanitaria declarada por el gobierno nacional, limitando la salida a visitas de campo por lo tanto se estableció un seguimiento documental y gradualmente reiniciar salidas a campo según localización de funcionarios, para evitar riesgos a los mismos.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10907,
            'year' =>1,
            'value' => 97.13,
            'description' => 'En relación con la disposición final, se solicita a los 87 municipios mediante circular No. 069 con radicado de salida 150-11126 de fecha 29 de agosto de 2020 que las cantidades dispuestas de residuos sólidos ordinarios desde el mes de enero al mes de agosto del presente año y dar continuidad en el reporte de manera trimestral, reportando la cantidad y lugar donde realizan dicho proceso incluyendo los soportes que den cuenta de las cantidades dispuestas así como el contrato con el operador para dicha actividad.
        
        Como actividad de seguimiento se realiza una comparación de las cantidades de residuos orgánicos no aprovechables dispuestas de cada municipio reportadas por los operadores de los rellenos sanitarios contra el reporte de las mismas por cada municipio. Cuando se presentan diferencias en dichos valores se solicita verificación por parte del municipio.
        
        A 31 de diciembre de 2020 han dado respuesta a la circular mencionada dieron respuesta 82 de los 87 municipios de la jurisdicción.
        
        Igualmente se realiza control y seguimiento a las licencias ambientales de los expedientes OOLA-0265/96 de SERVITUNJA cuyo último seguimiento se realizó en el mes de marzo del presente año y OOLA-0155/01 COSERVICIOS con último seguimiento en el mes de mayo del año en curso. Igualmente se realiza seguimiento a los expedientes con procesos sancionatorios relacionados con la disposición de residuos orgánicos no aprovechables.
        
        En relación con el componente de aprovechamiento, aunado a lo anterior con corte a 31 de diciembre de 2020, se realizó seguimiento a los 87 municipio mediante oficio. La información soporte se encuentra en la Subdirección de Ecosistemas y Gestión Ambiental.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10908,
            'year' =>1,
            'value' => 5,
            'description' => 'Se realizaron los operativos solicitados a actividades de alto impacto así:
        
        Operativos a actividades mineras ubicadas en complejos de páramo y zonas prohibidas.
        Operativos a actividades de movilización de productos forestales.
        Operativo de fuentes fijas y seguimiento a la resolución 618 de 2013.
        
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10909,
            'year' =>1,
            'value' => 100,
            'description' => 'Se ejecutaron 353 operativos de control a la movilización de productos maderables y no maderables, tráfico de Fauna, Minería, Emisiones Atmosféricas, Recurso Hídrico, Fuentes Móviles, Residuos Peligrosos e intervención de Ecosistemas de Paramo con el acompañamiento de la Fuerza Pública (Policía Nacional y Ejercito Nacional); como resultado se han realizado la imposición de medidas preventivas, suspensión de actividades, decomiso de material forestal y especies de fauna Silvestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia103 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10910,
            'year' =>1,
            'value' => 100,
            'description' => 'Se atendieron las solicitudes presentadas por la secretaria de la mesa operativa del medio ambiente, así como de las entidades que hacen parte de las mismas, adicional se realizaron 2 reuniones del comité Interinstitucional para el tráfico ilegal de flora y Fauna Silvestre, en las siguientes fechas:
        
        Doce (12) de mayo de 2020: La temática manejada en este comité, es sobre los procesos de caza que se están presentando en el municipio de Monguí, vereda Reginaldo, sector Sanoha, de la especie Odocoileus virginiaunus (Venado Cola Blanca), en el cual se manifiesta que el día 09 de mayo se encontraron 3 cabezas de venado en estado cadavérico y en descomposición. Adicional se manifiesta por parte de la policía, que, en inspección realizada al municipio de Belén, se encontraron unos chivos o camuros al parecer que fueron atacados por un felino.
        
        Diecisiete (17) de junio de 2020: La temática manejada en este comité, es sobre la posible presencia de cultivos ilícitos en el PNR Serranía de las Quinchas.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia104 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10911,
            'year' =>1,
            'value' => 20,
            'description' => 'Este proyecto tiene como objetivo Garantizar el adecuado manejo y disposición de la Flora y Fauna Silvestre con ocasión de los procedimientos de aprehensión, decomiso, rescate o entrega voluntaria en el ejercicio de la autoridad ambiental, por medio de procesos, recursos físicos y humanos apropiados que conduzcan al bienestar, recuperación y conservación de los individuos de las diferentes especies.
        
        El 20% de la meta programada para el año 2020 se ejecutó así:
        
        1. Garantizar el servicio del Hogar de paso de fauna silvestre: Suscripción del convenio CNV 2020-001 con la Fundación Universitaria Juan de Castellanos, el 17 de marzo de 2020; por un periodo de 10 meses, con lo cual se cumple con la meta física de garantizar el servicio de un hogar de paso o espacio para atención inmediata de fauna silvestre, por el periodo 2020 - Adición al convenio 2019-004.
        En el anterior sentido a corte de 30 de diciembre de 2020 se han recibido en el Hogar de paso un total de 203 individuos de fauna silvestre
        2. Garantizar procesos de rehabilitación y/o mantenimiento de fauna silvestre: Suscripción de contrato CDC 2020 241 para mantenimiento de fauna silvestre cuyo objeto es Suministro a todo costo de insumos veterinarios y alimentos para garantizar la protección y bienestar de la colección animal de fauna silvestre ubicada en el Parque Temático GUATIKA FINCAVENTURA S.A.S durante la emergencia sanitaria generada por el coronavirus COVID-19, de conformidad con las especificaciones técnicas descritas en los presentes estudios previos; por un valor de $ 17.725.774,00; Se suscribió acta de terminación FGC-04, del 19/11/2020, está pendiente liquidación del contrato.
        3. Garantizar estudios previos encaminados a la contratación de estudios y diseños para construcción de un Centro de Atención y Valoración de Fauna Silvestre CAV: Se formularon estudios previos formato para contratar estudios y diseños para construcción del CAV, los cuales fueron remitidos a Secretaria General y Jurídica para revisión aprobación. 
        4. Formular e implementar un Plan o estrategia para la prevención, control, vigilancia y manejo de fauna y flora silvestre relacionada con tráfico y/o tenencia ilegal: Se elaboró documento con Plan y Estrategia de Manejo y Disposición de Flore y Fauna Silvestre.
        
        
        
        
        
        
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia105 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10912,
            'year' =>1,
            'value' => 92.67,
            'description' => 'Para esta actividad se tiene en total 8 estaciones de calidad de aire y 14 de calidad de agua, a las cuales se les ha realizado la respectiva validación de datos, calibraciones, mantenimientos y publicación de datos.
        
        Dos estaciones de calidad del aire no obtuvieron representatividad mayor al 75% de los datos, por situaciones externas:
        
        • Daños en los equipos por falta de repuestos que se adquirieron en el segundo semestre y fueron entregados en 28 de diciembre. 
        • Cortes de electricidad por causas ajenas a la entidad. 
        • Traslados de estaciones a campañas de monitoreo.
        
        Operación del laboratorio de calidad ambiental. Se realizó monitoreo según solicitudes internas de la corporación y seguimiento a cuencas priorizadas. 
          
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10913,
            'year' =>1,
            'value' => 0.75,
            'description' => 'En proceso de trámite de la licencia de construcción del nuevo laboratorio de Calidad Ambiental de Corpoboyacá.
        
        Elaboración de estudios previos para el proceso de construcción del Laboratorio de Calidad Ambiental y solicitud de ajuste a la empresa Mansarovar, de acuerdo a observaciones de la Curaduría. Se espera que los ajustes estén listos el primer trimestre del 2021.
        
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia107 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10914,
            'year' =>1,
            'value' => 100,
            'description' => 'En esta actividad se generaron el 100% de los protocolos de la matriz aire para la línea de olores, se resaltan los siguientes avances y documentos:
        
        • Se adelantó con el grupo de trabajo establecido para realizar el Procedimiento de olores ofensivos bajo los lineamientos de la Resolución 1541 de 2013, la Resolución 2087 de 2014 y la Norma Técnica Colombiana NTC 6012-1 de 2013, los documentos implementados en el sistema de gestión de calidad para la atención de quejas por olores ofensivos de la siguiente manera: 
        
        o PGR-17 ATENCION DE QUEJAS POR OLORES OFENSIVOS V0
        o IGR-11 CONCEPTO TÉCNICO VIABILIDAD DEL PLAN PARA REDUCCION DEL IMPACTO POR OLORES OFENSIVOS –PRIO- V0
        o FGR-71 ACTA DE VISITA TÉCNICA - QUEJA POR OLORES OFENSIVOS V0
        
        De igual manera este procedimiento fue implementado en dos casos puntales en el municipio de Nobsa y el municipio de Sogamoso.
         
        Se han implementado las siguientes acciones priorizadas de prevención y control de la contaminación del aire en áreas urbanas:
        
        - Instalaciones de Mesas Interinstitucionales con el municipio de Sogamoso para la implementación del protocolo de prevención y alertas en episodios de contaminación atmosférica en el valle de Sogamoso, se realizaron las siguientes actividades:
        - Socialización de la problemática de la región del valle de Sogamoso 
        - Borrador de estudios previos para convenio interadministrativo con el municipio de Sogamoso. enviados al municipio para revisión
        - Borrador para el protocolo de prevención y alertas en episodios de contaminación atmosférica en el valle de Sogamoso- enviados al municipio para revisión. 
        - Mesas Interinstitucionales con el municipio de Sogamoso
        - Borrador de estudios previos para convenio interadministrativo con el municipio de Sogamoso. enviados al municipio para revisión
        - Borrador para el protocolo de prevención y alertas en episodios de contaminación atmosférica en el valle de Sogamoso- enviados al municipio para revisión (Figura 13 Presentación mesa interinstitucional de calidad del aire – Sogamoso). 
        - Generación de alertas de las estaciones de calidad del aire y se enviaron comunicaciones a la empresa Holcim de la ciudad de Sogamoso y a la Autoridad Nacional de Licencias Ambientales (ANLA), teniendo en cuenta que se presentaron eventos de contaminación atmosférica en área de influencia de las Licencias ambientales LAM 7781 y LAM -408 Minas Nobsa- Holcim y Acerías Paz del Río- Belencito.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10915,
            'year' =>1,
            'value' => 9,
            'description' => 'Se realizó el preliminar de un inventario de las principales fuentes de emisiones en el valle de Sogamoso de la siguiente manera: 
        
        •Revisión de 9 expedientes del valle de Sogamoso y la identificación de 44 fuentes de emisiones principales puntuales, más 38 de volumen y 44 de área. 
        •Se incluyen 108 fuentes artesanales de cal y 146 fuentes artesanales de ladrillo.
        •Se realiza el modelo de dispersión de la empresa acerías Paz Del Rio. 
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia109 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10916,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia110 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10917,
            'year' =>1,
            'value' => 100,
            'description' => 'Esta actividad tiene cumplimiento del 100% dado a que la meta es acumulativa. Se realizó el 100% del seguimiento según las solicitudes allegadas. Se resaltan los siguientes logros: 
        
        - Se realizó en el mes de febrero mesa de trabajo con el municipio de Tunja para revisión de puntos y quejas en cuanto a contaminación auditiva. A la fecha no se han solicitado a laboratorio de calidad ambiental monitoreo de ruido en la jurisdicción.
        
        - Se he brindado apoyo técnico a las solicitudes realizadas a las territoriales para respuesta de quejas en su área de influencia. Se ha realizado atención a cada una de las solicitudes allegadas a través del aplicativo SGI - Almera relacionadas con ruido.
        
        - Se realizó medición de emisión de ruido ambiental en el municipio de Sogamoso, con su respectivo informe de resultados.
        
        - Se realizó medición en el municipio de Miraflores, con su respectivo informe de resultados.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10918,
            'year' =>1,
            'value' => 91.98,
            'description' => 'Datos monitoreados por el sistema de vigilancia de calidad del aire y reportados en los subsistemas del IDEAM:
        
        - SISAIRE 
        - Namis.sisaire.gov.co (Estaciones donadas por el gobierno coreano). 
        Registros esperados 184.464. Registros reportados 183.108
        Se realiza el cargue de los monitoreos entregados en el año 2020 a la corporación de Rio Chicamocha, Rio Suarez, Lago de Tota, Lago Sochagota, quebrada Honda y aguas termo minerales en los subsistemas del IDEAM:
        - SIRH: Registros esperados 8.691, Registros reportados 7.361
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia112 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10919,
            'year' =>1,
            'value' => 100,
            'description' => 'Se consolidó información de las necesidades de monitoreo en fuentes priorizadas de la jurisdicción con la cual se solicitaron cotizaciones para el servicio de monitoreo de fuentes priorizadas y aguas termominerales y se consolido la información para la contratación bajo la modalidad de licitación pública, adicionalmente se solicitaron vigencias futuras para la ejecución del mismo. 
        
        CDS 2020-426: Se adjudica licitación pública 005 de 2020 para realizar monitoreos en primer semestre de 2021 por valor de $ 1.954.903.916 se toma el rubro de la subdirección de ecosistemas. 
        
        Por parte del laboratorio de calidad ambiental se procesaron 182 muestras en las dos sedes Tunja y Aquitania, según solicitud y priorización de los procesos misionales.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia113 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10920,
            'year' =>1,
            'value' => 1,
            'description' => 'Dentro de esta actividad se cumplió con un (1) Plan de medios diseñado y ejecutado para la difusión del accionar Corporativo en todo el departamento y el país, por medio de estrategias de comunicación, además se elaboraron y difundieron 40 cuñas radiales, 2 videos informativos, 2 streamig de eventos corporativos, Cuña de Crisis climática y manejo de residuos sólidos, 3 funciones de títeres, 3 capítulos de serie audiovisual, difusión del material audiovisual, radial, gráfico, fotográfico en medios de comunicación (radio, prensa, televisión, redes sociales) departamentales y nacionales.
        
        El plan de Medios terminó el 20 de diciembre de 2020 con un avance del 100% en las actividades planeadas.
        
        Este convenio inició el 30 de octubre de 2020, sin embargo, en lo corrido del año se gestionó la difusión de las diferentes noticias que generó la Corporación en algunos medios de comunicación. 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia114 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10921,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia115 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10922,
            'year' =>1,
            'value' => 5,
            'description' => 'Ejecución de más de 5 campañas en lo corrido del año, así como: la campaña Útiles RE útiles, Campaña de ahorro de agua y energía durante la pandemia, Campaña de historias de Unión, Fauna y Conservación, los personajes de cada semana, Campañas de socialización de diversas temáticas por medio de Foros Corpoboyacá, Especies Invasoras, Corpo Trivia, Tiempo de actuar, ABC, Boyacá Reverdece, Bosques, comunidades y aves, entre otras.
        
        Esta actividad comunicó interna y externamente todas las actividades realizadas por cada subdirección de la Corporación, en todos los municipios de la jurisdicción.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia116 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10923,
            'year' =>1,
            'value' => 20,
            'description' => 'Se realizó la preproducción, producción y postproducción de piezas audiovisuales radiales y digitales. A la fecha, la meta se cumplió al 100%, ya que se hicieron más de 20 videos en lo corrido del año, en total fueron 207 videos. Estos videos se podrán encontrar en las redes sociales de Corpoboyacá y en el Google drive de cualquier cuenta corporativa en unidades compartidas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia117 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10924,
            'year' =>1,
            'value' => 1207,
            'description' => 'Esta actividad considera el diseño e impresiones de todo el material solicitado en la Corporación. Se logró cumplir con el 60% de la meta anual, desarrollando 1.207 piezas gráficas, teniendo un alto impacto en los diferentes medios de comunicación, redes sociales, correos electrónicos y demás por donde fueron socializados los diseños.
         
        El material gráfico y las ilustraciones podrán encontrarse en las diferentes redes sociales de la Corporación y en el Google drive de cualquier cuenta corporativa en unidades compartidas.
        
        No se pudo completar al 100% por el decreto Nacional de austeridad. 
         
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia118 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10925,
            'year' =>1,
            'value' => 1,
            'description' => 'Se desarrolló Plan Corporativo de Redes Sociales y se ejecutó en su totalidad, teniendo excelentes resultados en las redes sociales de la Corporación para así tener un 100% de reporte en esta actividad.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia119 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10926,
            'year' =>1,
            'value' => 40,
            'description' => 'Se priorizaron 40 I.E de la jurisdicción distribuidas en las 9 provincias y 37 municipios, para lo que se tuvo en cuenta su ubicación en ecosistemas estratégicos, 
        
        Las temáticas que se desarrollaron fueron: Estructuración de modelos educativos de crisis climática, residuos sólidos, gobernanza del agua, biodiversidad y territorio. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia120 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10927,
            'year' =>1,
            'value' => 3,
            'description' => 'Se realizaron cuatro eventos de Educación ambiental de 3 programados para el año 2020.
         - Educación Ambiental “Una oportunidad de cambio en época de crisis”
         - Investigación, participación y educación.
         - Manejo de residuos orgánicos: Biocompost hecho en casa”.
         - Semana de las Aves.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia121 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10928,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia122 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10929,
            'year' =>1,
            'value' => 1,
            'description' => 'Los temas ejecutados de Ecología Política fueron: campaña de Educación ambiental en los 87 municipios de la jurisdicción en temáticas sobre prevención de incendios de la cobertura vegetal, venado cola blanca, manejo de agroquímicos, Recolección de bolsas de leche para propagación de especies nativas. “Botellas para educar”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia123 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10930,
            'year' =>1,
            'value' => 1,
            'description' => 'Se estableció convenio 2020003, con fondo mixto con el propósito de elaborar material didáctico audiovisual en temáticas de educación ambiental como un nuevo seriado del programa noticierto (3 capítulos) y funciones de títeres pregrabadas que puedan ser herramientas audiovisuales para el aprendizaje de los niños',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia124 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10931,
            'year' =>1,
            'value' => 10,
            'description' => 'La ejecución del 10% corresponde a: Estrategias con el Plan Departamental de Educación ambiental; Apoyo en el VII foro de educación ambiental. Asistencia al CIDEABOY y apoyo en la estructuración del plan de acción del comité vigencia 2020. Realización de estrategias de sensibilización a instituciones educativas de los municipios de Tunja y Duitama.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia125 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10932,
            'year' =>1,
            'value' => 87,
            'description' => 'Para el año 2020 se realizaron 87 acompañamientos a los CIDEAS municipales, se les requirió información sobre su operatividad y se realizó seguimiento en articulación con la procuraduría Ambiental y Agraria de Boyacá; se recibieron 66 planes operativos de educación ambiental. El avance de la meta llego al 100%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia126 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10933,
            'year' =>1,
            'value' => 5,
            'description' => 'Se realizó la convocatoria a Proyectos Comunitarios de Educación Ambiental – PROCEDA, en marco de la convocatoria “Construyamos territorios de paz con la naturaleza”, donde se seleccionaron  los siguientes  proyectos:                                         
        1. Huertas sostenibles y recuperación de semillas locales a través de prácticas tradicionales en las veredas san martín, concepción y   san francisco del municipio de cómbita-boyacá Organización: ONG Cabildo Verde los Sauces.                                          
         2. Iniciativa local de sistemas productivos agroecológicos en el municipio de Tinjacá- Boyacá .Organización: Asociación de productores agropecuarios de Tinjacá (ASOAGROPETIN)                                                            
        3. Agroecología Sustentable y Sostenible Como Sustitución a Procesos  Agropecuarios Tradicionales. Organización: Cerinza Ecoambiental.                   
        4. Fortalecimiento  de  huertas orgánicas   comunitarias  de la asociación de mujeres campesinas ECOHORTALIZAS  para construir una cultura ambiental sostenible en la población de los  municipios de Miraflores y Zetaquira , Boyacá. Organización: ECOHORTALIZAS
        5. Conservación de especies nativas del bosque  altoandino en la Reserva Natural de la Sociedad Civil Cochahuaira, Gachantivá,  Boyacá-Colombia. 
        
        
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia127 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10934,
            'year' =>1,
            'value' => 5,
            'description' => '
        Esta actividad busca implementar programas de sostenibilidad ambiental con los sectores de servicio como son: restaurantes, centros comerciales, hoteles, empresas, alcaldías, e instituciones educativas En la mejora de la gestión ambiental  de cada uno de los sectores.
         Se invitó a hoteles de los municipios de Paipa, Aquitania, Tunja y restaurantes de los municipios de Villa de Leyva y Sogamoso. Adicionalmente en marco de la estrategia “Es tiempo de actuar” se trabajó con algunas administraciones municipales en la recolección de bolsas de leche',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia128 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10935,
            'year' =>1,
            'value' => 4,
            'description' => '6 grupos dinamizadores ambientales en Soatá, Cuítiva, Pesca, Sutamarchán, Pauna y Aquitania.
         Capacitaciones: Funcionarios USP de 14 municipios. Agroecología (red de convite provincial norte y Gutiérrez). Cambio climático (comunidad de Puerto Boyacá). Manejo especie invasora Caracol Gigante Africano (comunidad de San Pablo de Borbur). Foro sobre soberanía y seguridad alimentaria en Boyacá (Covarachía).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia129 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10936,
            'year' =>1,
            'value' => 1,
            'description' => 'Fortalecimiento de la Gobernanza ambiental en el área de la jurisdicción del Lago de Tota (municipios de Aquitania, Cuítiva y Tota) con la realización de 13 guiones para la producción de los programas radiales en el espacio implementado Pactos por la Tota_Lidad, en temas como Sistema Institucional Ambiental, Procesos Sancionatorios Ambientales, Procesos de Deslinde del Lago de Tota y Mecanismos para hacerse parte y Rondas de Protección y Acciones de Apoyo que tiene el Gobierno Nacional.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia130 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10937,
            'year' =>1,
            'value' => 1,
            'description' => 'Se efectuaron inventarios participativos de platos tradicionales con las comunidades, en las provincias Centro, Ricaurte Bajo, Norte y Gutiérrez, Valderrama, Occidente y Lengupá. Posteriormente se realizó documentación audiovisual de platos tradicionales y se realizó la 1ra Feria de Saberes y Sabores, escenario virtual en el cual fueron presentados platos tradicionales documentados por la comunidad. Se realizó taller de acercamiento participativo con la comunidad Emberá para identificar el manejo dado por esta comunidad indígena a su recurso hídrico y residuos sólidos. Adicionalmente en esta jornada se realizó una entrevista a profundidad a los miembros de esta comunidad sobre especies vegetales (Etnobotánica) con uso para medicina tradicional',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia131 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10938,
            'year' =>1,
            'value' => 1,
            'description' => 'Se ejecuta convenio CNV 2020003 con el Fondo Mixto de Boyacá para la producción audiovisual de estrategia comunicativas que faciliten la participación social.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia132 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10939,
            'year' =>1,
            'value' => 0,
            'description' => 'Realización de Convenio 2020006 para el desarrollo de las actividades de la vigencia 2020 y 2021  en la consolidación y operativización de la página web y las redes sociales de la RED de ONGs y  Creación y operación de una emisora digital.
        
        La gestión realizada corresponde al 40% del total de la meta.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia133 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10940,
            'year' =>1,
            'value' => 0,
            'description' => 'Convenio 2020006 para la vigencia 2020 y 2021  para el desarrollo del IV  y V Encuentro de Organizaciones no Gubernamentales ONGs ambientales de la jurisdicción de CORPOBOYACÁ .
        
        La gestión realizada corresponde al 50% del total de la meta.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia134 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10941,
            'year' =>1,
            'value' => 2,
            'description' => 'Convenio 2020006  para el desarrollo de las actividades de la vigencia 2020 y 2021 en las líneas de acción de Educación ambiental , Gestión integral de residuos sólidos y Gestión integral de recurso hídrico del Plan de Acción de la RED de ONGs.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia135 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10942,
            'year' =>1,
            'value' => 100,
            'description' => 'La ejecución corresponde y está soportada en el desarrollo de las siguientes actividades:
        
        1. Contrato de Licenciamiento de funcionalidades de seguridad del firewall 100%
         2. Monitoreo y seguimiento a políticas de seguridad firewall por 12 meses 100%
         3. Realizar Copias de seguridad por 12 meses 100%
         4. Realizar Pruebas de restauración de copias de seguridad por 12 meses 100%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia136 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10943,
            'year' =>1,
            'value' => 100,
            'description' => 'Se cuenta con contrato en la sede central y territoriales y se ha realizado seguimiento por 12 meses ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia137 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10944,
            'year' =>1,
            'value' => 100,
            'description' => 'Se cuenta con contrato en la sede central y territoriales y se ha realizado seguimiento por 12 meses 100%. - Mantenimiento a las cuentas de Usuario FST-03 (Creación, Inactivación, Eliminación) 100%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia138 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10945,
            'year' =>1,
            'value' => 76,
            'description' => 'Las acciones priorizadas y ejecutadas en la vigencia 2020 fueron:
        
         - Estudios previos y de mercado para implementar Transición de IPv4 a IPv6 y adquirir Pool de Direcciones IPV6.
         - Estudios previos y de mercado para Fortalecer Datacenter Extinción de incendio.
         - Publicación de Datos abiertos 100.00%
         - Seguridad y privacidad información - Ley de transparencia y acceso a la información 100%
         - Actividades de actualización página web 100.00%
         - Medición de calidad del servicio 100.00%
         - Transición IPV4 a IPV6 60.00% (Estudios Previos Fase I, Transición de IPV4 IPV6 finalizados y Radicados para Contratación, no fue posible la contratación en el 2020)
         - Fortalecer Datacenter 60.00% (Estudios Previos Extinción de Incendio finalizados y Radicados para Contratación, no fue posible la contratación en el 2020',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia139 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10946,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia140 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10947,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia141 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10948,
            'year' =>1,
            'value' => 86.7,
            'description' => 'Se realizaron las siguientes actividades:
         a. Enclosure Servidores Virtuales Almacenamiento SAN 60.00% (Estudios Previos Finalizados aprobados y Radicados para Contratación, no fue posible la contratación en el 2020.)
         b. Se adquirió actualización y mantenimiento Licencia ArcGis 100.00%
         c. Se adquirió 25 Licencias de Office 100.00%
         d. Se cuenta con Licencias de Antivirus 100.00',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia142 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10949,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia143 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10950,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia144 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10951,
            'year' =>1,
            'value' => 100,
            'description' => 'Se cuenta con contrato y se realizó seguimiento por 12 meses 100%
         - Bitácora de Mantenimiento y monitoreo a la arquitectura en la nube del sistema de información corporativo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia145 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10953,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizó la Actualización soporte y mantenimiento del sistema de Información Almera.
        Así mismo, se logro aprobación y contratación de vigencias futuras 2020 a 2023, disminuyendo costos financieros y administrativos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia146 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10955,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia147 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10952,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizó la Actualización soporte y mantenimiento del sistema de Información Geoambiental.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia148 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10954,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia149 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10956,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizó la Actualización soporte y mantenimiento del sistema de Información Sysman, el contrato contempla la migración a SaaS.
        Así mismo, se logro aprobación y contratación de vigencias futuras 2020 a 2023 (Almera - Sysman); disminuyendo costos financieros y administrativos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia150 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10957,
            'year' =>1,
            'value' => 100,
            'description' => 'Se cuenta con contrato y se ha realizado seguimiento por 12 meses 100%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia151 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10958,
            'year' =>1,
            'value' => 2,
            'description' => 'En desarrollo del proyecto se adelantaron 2 transferencias del archivo de oficina al archivo central, se realizaron las siguientes actividades:
         1. Contratos CPS-2020291 y CPS-2020323 para la actividad Adelantar transferencias del Archivo de Oficina al Archivo Central.
         2. Se adelantaron 2 transferencias de la Oficina de contratación y expedientes misionales de la subdirección de recursos naturales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia152 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10959,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizó verificación de aplicación de procesos técnicos archivísticos en 3 territoriales, sin embargo, no se finalizó los ajustes pertinentes evidenciados, por lo tanto, se evalúa con 50% cada verificación realizada.
         Por razón del Covid19, el cronograma de actividades se vio afectado',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia153 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10960,
            'year' =>1,
            'value' => 1,
            'description' => 'Realización auditorias internas de calidad Ciclo I y II y
         Aplicación Plan de Mejoramiento suscrito con ICONTEC.
         Auditoria externa de seguimiento por parte del ICONTEC, se mantiene certificación ISO 9001:2015.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia154 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10961,
            'year' =>1,
            'value' => 1,
            'description' => 'Apoyo horizontal ASOCARS: Lineamientos formulación del plan
         de acción 2020-2023, Construcción metodología Evaluación de Desempeño Institucional - IEDI, Propuesta de ley de fortalecimiento SINA-CARs',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia155 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10962,
            'year' =>1,
            'value' => 0,
            'description' => 'Para el año 2020 se tenía previsto realizar reparaciones de infraestructura en los espacios de Edificio Sede principal y Aula Ambiental.
        
         De igual forma, se tenía programado realizar actividades de mantenimiento de la Sede Santa Inés con el fin de dar cumplimiento a los requerimientos proferidos por AUTO 2003 del 17 de marzo de 2020 emitido por la Agencia Nacional de Licencias Ambientales-ANLA. 
        
         Las actividades estaban previstas para ser ejecutadas durante el segundo semestre de 2020. Sin embargo, no se realizaron debido a que el Gobierno Nacional a través del Ministerio de Hacienda y Crédito Público emitió el Decreto 1009 del 14 de julio de 2020, por el cual se estableció el Plan de Austeridad del Gasto y en su Artículo 5 solicito abstenerse de realizar contratos que implicara el mantenimiento de bienes inmuebles, cambio de sede y adquisición de bienes muebles',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia156 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10963,
            'year' =>1,
            'value' => 3.47,
            'description' => 'Se planteó como objetivo disminuir inicialmente en un 5% la cartera a 360 días, respecto al valor reportado en el año inmediatamente anterior; pero considerando que por la emergencia Sanitaria ocasionada por COVID-19, se suspendieron las acciones de cobro persuasivo de acuerdo con el Decreto con fuerza de Ley 417 del 17 de marzo de 2020, el cual fue adoptado por Corpoboyacá en la Resolución 733 del 17 de abril de 2020, razón por la cual no fue posible cumplir con lo planteado en el indicador. No obstante se realizó el 100% de la revisión a las transferencias de sobretasa y/o porcentaje ambiental de la vigencia 2019 y notificación a los 87 municipios los resultados; acciones de cobro acorde con valores reportados en el proceso de revisión.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia157 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10964,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia158 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10965,
            'year' =>1,
            'value' => 100,
            'description' => '100% de actividades de secretaria técnica OCAD: - Participación en la jornada de elección de alcaldes que formaran parte del OCAD.CORPOBOYACA durante los años 2020.2021,2022 y 2023
         - Realización de primera sesión 2020 del OCAD CORPOBOYACÁ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia159 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10966,
            'year' =>1,
            'value' => 100,
            'description' => 'Seguimiento a través de las plataformas Gesproy, Sirecci. -
         Diligenciamiento y envío de formatos SCFV 17 Y 18 correspondientes al primer y tercer trimestre 2020, en los cuales de reporta el manejo de los dineros recibidos por regalías anteriores a 2011',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia160 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10967,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realiza revisión de inventario de entidades de Cooperación Internacional con el fin de analizar las posibilidades de presentar proyectos para solicitar apoyo.
         Diligenciamiento de formatos solicitados por la Casa de Boyacá con el fin de tener base de datos de entidades con actividades objeto de cofinanciación.
         Se presenta propuesta con la armonización de la Gobernación de Boyacá y el municipio de Villa de Leyva para participar en la Convocatoria: 
         Autoridades locales: Asociaciones por unas ciudades sostenibles 2020',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia161 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10968,
            'year' =>1,
            'value' => 1,
            'description' => 'Se imparten directrices para la realización de inventario teniendo en cuenta trabajos realizados por la Corporación en temas como Negocios verdes, Educación ambiental, Plan padrino, Mecanismo voluntario de reducción de emisiones contaminantes.
        Elaboración y presentación de estudios previos para apoyar la realización de esta actividad con un contrato de prestación de servicios.
        Suscripción CPS 2020-222, por medio de la cual se da inicio a la actividad, se realiza inventario de entidades, se realiza mesa de trabajo con los lideres de los proyectos para consolidar la vinculación que se ha realizado por parte de las empresas mediante la RSE',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia162 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10969,
            'year' =>1,
            'value' => 0,
            'description' => 'NA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia163 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10970,
            'year' =>1,
            'value' => 9,
            'description' => 'En desarrollo del proyecto se adelantaron las siguientes acciones:
        1-Socavación e inundación en cauces: No fue posible adelantar la suscripción de convenio con la UNGRD, el MADS y la Gobernación de Boyacá.
         2-Recorridos Diagnósticos: 
         3-Visitas Practicadas: 
         4- Ejecución CNV2019019 suscrito con Corpocaldas:
         5-Monitoreo a fuentes hídricas de abastecimiento municipal:
         6-Tala por Riesgo y aplicación Protocolo:
         7-Bases de datos actualizadas: 
         8-CMGRD atendidos:
         9. Generación de cartografía asociada a la identificación y reconocimiento de escenarios de riesgo por fenómenos amenazantes:
         10-Jornadas Capacitación:',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia164 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10971,
            'year' =>1,
            'value' => 100,
            'description' => '43 eventos cargados oficialmente al SNIF con corte al 30 de Diciembre del 2020. Se indica adicionalmente que 3 eventos no pudieron cargarse, debido a que las coordenadas de los polígonos generados no fueron reconocidas por la plataforma, lo que implica contar con asistencia técnica de IDEAM para lograr su registro efectivo. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia165 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10972,
            'year' =>1,
            'value' => 100,
            'description' => '26 municipios atendidos en 43 mesas para incorporación de GR en los POT.
         1 Documento diagnóstico de PMGRD',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia166 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10973,
            'year' =>1,
            'value' => 10,
            'description' => '1 estrategia de comunicación institucional denominada Los queremos vivos, frailejones para la vida
         1 estrategia de comunicación interinstitucional de carácter departamental denominada Los queremos vivos, frailejones para la vida - NOS UNIMOS: Boyacá, Cundinamarca y Casanare
         Adicionalmente: 2 programas radiales en emisora de la Gobernación para 2A Temporada de lluvias y alerta del fenómeno La Niña.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia167 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10974,
            'year' =>1,
            'value' => 88,
            'description' => 'Formulación y adopción Oficial por parte del Consejo Departamental de Gestión del Riesgo de Desastres de la ESTRATEGIA PARA LA REDUCCION DE ESCENARIOS DE RIESGO POR INCENDIOS DE LA COBERTURA VEGETAL Y RECUPERACION DE AREAS  AFECTADAS EN ZONAS DE INTERES ESTRATEGICO PARA LA SOSTENIBILIDAD AMBIENTAL DEL DEPARTAMENTO DE BOYACÁ. Propuesta conformada por 7 actividades.
        
        De las cuales, la campaña de formación a los Cuerpos de Bomberos Voluntarios en temas ambientales y el monitoreo periódico de las áreas protegidas y ecosistemas estratégicos susceptibles a la ocurrencia de ICV, fomentando la participación de actores como los guardapáramos, se adelantantaron  de manera parcial. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia168 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10975,
            'year' =>1,
            'value' => 10,
            'description' => 'Para el desarrollo del proyecto se adelantaron la siguientes acciones:
        1-Diseñar programa de mantenimiento y limpieza de cauces priorizados: Desarrollo de 9 talleres de capacitación. Programación e implementación de recorrido diagnóstico en 19 fuentes hídricas de la jurisdicción. 
         2-Visitas Practicadas a inundaciones y vendavales a solicitud de CMGRD:
         3. Formulación perfiles de proyecto orientados a labores de mantenimiento y limpieza de cauces priorizados: 1 perfil formulado.
         4- Apertura compuertas Lago Sochagota: Febrero 24, Marzo 16, Junio 1, Septiembre 10 - Noviembre 19 - Noviembre 30
         Total: 6
         5- Avance en proceso de validación y aplicación de la metodología Evaluación de Daños y Análisis de Necesidades Ambientales EDANA-C con acompañamiento del MADS:
         6-Evaluación de áreas afectadas por IF: 19 Informes Técnicos de Evaluación generados en los siguientes municipios: Aquitania (1) - Belén (1) - Cuitiva (1) - Duitama (2) - Firavitoba y Pesca (1) - Tota (1) - Paipa (1) - Pesca (2) - Mongua (2) - Sogamoso (1) - Siachoque (1) - Siachoque y Rondón (1) - Socotá (1) - Sutamarchán (1) - Tinjacá (1) - Tópaga (1)
         7-Visitas Practicadas a MM a solicitud de CMGRD: Aquitania (1) - Beteitiva (2) - Cucaita (1) - Coper (1) - Mongua (1) - Rondón (1) - San José de Pare (1) - Socha (2) - Togüi (2) - Tota (1) - Tunja (1)
         Total: 14 visitas
         8- Avance en proceso de aplicación del enfoque de Reducción del Riesgo basado en Ecosistemas:
         9-Participación en eventos convocados por otros actores del SNGRD que promuevan la reducción del riesgo
         10-Se avanzó en la creación de un formulario para recolectar en campo los datos geográficos de los eventos de riesgo asociados a socavación, deslizamientos, inundación, incendio forestal, etc. El cual se espera aplicar en futuro trabajo de campo de GRD.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia169 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10976,
            'year' =>1,
            'value' => 1,
            'description' => 'Suscripción convenio con la Gobernación de Boyacá para la formulación del PIGCCT. Valor $1.779.373.735',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia170 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10977,
            'year' =>1,
            'value' => 100,
            'description' => '40 municipios asesorados en incorporación de Cambio Climático en instrumentos de planeación territorial',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia171 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10978,
            'year' =>1,
            'value' => 2,
            'description' => 'Las acciones implementadas fueron:
        
        +Participación en formulación del Plan de Acción del Nodo Regional Centro Oriente Andino de Cambio Climático.
        
         +Participación en las mesas de trabajo: ICELI y la Región Funcional Territorial de Cambio Climático (Pacto Global de Alcaldes por el clima y la energía); proyecto AICCA lago de Tota',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia172 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10979,
            'year' =>1,
            'value' => 5,
            'description' => 'La ejecución física alcanzo un 100% sustentada por el desarrollo de las actividades:
        + Promoción de la declaratoria de crisis climática con los 8 Alcaldes de la Región Funcional Territorial de Cambio Climático.
        
         Los municipios de Tunja, Cucaita, Tuta, Gámeza y Beteitiva se han sumado a la Declaratoria de crisis climática.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia173 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10980,
            'year' =>1,
            'value' => 8,
            'description' => 'Lo ejecutado en 2020:
        
        A través de la Subdirección de Administración de Recursos Naturales se ejerce la Secretaría Técnica de los Comités Directivo y Técnico del Mecanismo Voluntario de Reducción de Emisiones de GEI. Se realizaron Comités Directivos el 5 de febrero, 12 de marzo, 16 de julio y 11 de agosto y dos Comités Técnico el 25 de febrero y el 14 de agosto.
        
         Las empresas que se adhirieron al Mecanismo conformaron una Asociación y se logró que por parte de la Dirección de Cambio Climático del Ministerio de Ambiente y Desarrollo Sostenible se realice el acompañamiento permanente Teniendo en cuenta que la Asociación ya se encuentra debidamente formalizada ante Cámara de Comercio, las empresas están culminando la etapa de medición de huella de Carbono, para pasar a la etapa de certificación de las emisiones.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia174 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10981,
            'year' =>1,
            'value' => 100,
            'description' => 'NO APLICA ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia175 = DB::getPdo()->lastInsertId();
        
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
