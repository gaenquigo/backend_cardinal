<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCsb2020 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 13987,
            'year' =>1,
            'value' => 7,
            'description' => 'Para el cumplimiento de la meta, se ha realizado la planificación en conjunto con la Secretaria Departamental de Educación de las actividades PRAES.',
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
            'activity_id' => 13988,
            'year' =>1,
            'value' => 14,
            'description' => 'En el marco de este objetivo se diseñó una matriz de recolección de información del estado de los PROCEDAS para iniciar el proceso de asesoria y apoyo. Se asesoro el movimiento Jovenes Liderando Progeso en Magangué',
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
            'activity_id' => 13989,
            'year' =>1,
            'value' => 1,
            'description' => 'La estrategía diseñada, correspondió al desarrollo de seis (6) talleres de capacitación en diferentes temáticas ambientales y la celebración de fechas ambientales con participación de la comunidad',
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
            'activity_id' => 13990,
            'year' =>1,
            'value' => 3,
            'description' => 'Con base en el proceso de asistencia técnica adelantado en la jurisdicción de la CSB, se constituyeron tres (3) CIDEA Municipales correspondientes a los entes territoriales de San Martín de Loba, Barranco de Loba y Achí',
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
            'activity_id' => 13991,
            'year' =>1,
            'value' => 7,
            'description' => 'La CSB adelantó proceso de asistencia técnica en educación ambiental y gestionó la firma de siete (7) convenios marco de cooperación en educación ambiental, con los municipios de Achí, Cicuco, Barranco de Loba, Magangué, Mompox, San Martín de Loba y Talaigua Nuevo, cuyo propósito es lograr la consolidación de una verdadera gestión ambiental y educativo ambiental, para mitigar problemáticas ambientales reconocidas en los diferentes municipios de nuestra área jurisdiccional. ',
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
            'activity_id' => 13992,
            'year' =>1,
            'value' => 179,
            'description' => 'Los actos administrativos, corresponden a: Solicitudes de aprovechamiento forestal: Único, Aislados y Domésticos (18), permiso de apeo y tala (7), Expedición de salvoconductos de movilización y removilización de productos de la flora silvestre (98), Expedición de salvoconductos de movilización y removilización de productos de la fauna silvestre (27), concesión para el uso de aguas superficiales y subterráneas (2),  permisos de vertimiento (3), licencias ambientales (4), permiso de ocupación de cauces (2), Otras solicitudes (18). Este indicador está asociado a la demanda, la cual resultó por encima de la demanda historica',
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
            'activity_id' => 13993,
            'year' =>1,
            'value' => 61,
            'description' => 'Los Actos Adtivos, corresponden a: Seguimientos de aprovechamiento forestal (4), Solicitudes de apeo y tala (7),  Solicitudes de concesión de agua (3), Permiso de vertimiento (18),  Licencias ambientales (5), Otras solicitudes (21), Control a plantas de beneficio animal y/o mataderos (Municipios) (3).',
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
            'activity_id' => 13994,
            'year' =>1,
            'value' => 17,
            'description' => 'Los actos administrativos corresponden a diecisiete (17) quejas resueltas.',
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
            'activity_id' => 13995,
            'year' =>1,
            'value' => 11,
            'description' => 'Avance que corresponde a ocho (8) procesos terminados y tres (3) archivados',
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
            'activity_id' => 13996,
            'year' =>1,
            'value' => 13,
            'description' => 'Se realizaron retenes de fauna y flora silvestre en conjunto con la Policia Nacional',
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
            'activity_id' => 13997,
            'year' =>1,
            'value' => 1,
            'description' => 'El avance hace referencia a la tramitología en línea de la página web corporativa y el desarrollo de software abiertos de este tipo, además del contenido informativo del portal.',
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
            'activity_id' => 13998,
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
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13999,
            'year' =>1,
            'value' => 2,
            'description' => 'La ejecución hace referencia a 2 sistemas de información: SNIF y RESPEL.',
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
            'activity_id' => 14000,
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
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14001,
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
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14002,
            'year' =>1,
            'value' => 1,
            'description' => 'Productos, objeto del Concurso de Méritos Abierto CMA-001-2020. Concurso de méritos que concluyó con la suscripción del Contrato de Consultoría CMA – 001 – 2020, el 30 de julio de 2020. El avance corresponde al Producto 1: Documento de la fase de aprestamiento del plan de ordenación y manejo de cuenca hidrográfica.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CMA – 001 – 2020',
            'state_id' => 1201,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14003,
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
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14004,
            'year' =>1,
            'value' => 2,
            'description' => 'Producto, objeto del Concurso de Méritos Abierto CMA-002-2020. Concurso de méritos que concluyó con la suscripción del Contrato de Interventoría CMA – 002 – 2020, el 21 de octubre de 2020',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => ' CMA-002-2020',
            'state_id' => 1201,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14005,
            'year' =>1,
            'value' => 6,
            'description' => 'Producto que para la presente vigencia hace referencia al proceso de articulación de la planificación ambiental con los planes de desarrollo territorial. El avance corresponde a seis (6) campañas realizadas, en las cuales se surtieron los respectivos Conceptos Técnicos para dieciocho (18) municipios que presentaron ante la Corporación su respectivo Plan de Desarrollo, a saber: 1) Achí, 2) Arenal, 3) Barranco de Loba, 4) Cantagallo, 5) Hatillo de Loba, 6) Magangué, 7) Montecristo, 8) Morales, 9) Norosí, 10) Pinillos, 11) Regidor, 12) San Pablo, 13) San Fernando, 14) San Martín de Loba, 15) Santa Rosa del Sur, 16) Simití, 17) Talaigua Nuevo y 18) Tiquisio.',
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
            'activity_id' => 14006,
            'year' =>1,
            'value' => 26,
            'description' => 'En este periodo se realizó la revisión al Esquema de Ordenamiento Territorial del municipio de Montecristo, al cual se le hizo requerimiento mediante oficio SP OE – 004/2020. Adicionalmente, se remitió las Circulares 004 y 005, de 31 de diciembre de 2020, emitida por la Subdirección de Gestión Ambiental, dirigida a las 25 alcaldías de la jurisdicción de la CSB y Gobernación de Bolívar, con acceso a la GDB de información definida como determinante ambiental referidas a nueve mapas de cambio climático y la Zonificación Ambiental de cada uno de los municipios que conforman la jurisdicción de la CSB',
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
            'activity_id' => 14007,
            'year' =>1,
            'value' => 2,
            'description' => ' Campaña 1. Constituida por: 1) Realización de Taller Virtual “Gestión del cambio climático para un desarrollo bajo en carbono y resiliente al clima” y 2) Suministro y envío de Memoria Técnica   Campaña 2. Constituida por: 1) Elaboración y envío de Circular a los municipios, y 2) Elaboración y envío de mapas temáticos, referentes al cambio climático, como determinantes ambientales en los procesos de planificación territorial',
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
            'activity_id' => 14008,
            'year' =>1,
            'value' => 2,
            'description' => ' Campaña 1. Conformada por: 1) Realizar Taller Virtual “La reducción del riesgo y el ordenamiento ambiental territorial” y 2) Suministro y envío de Memoria Técnica. 
         Campaña 2. Constituida por: 1) Elaboración y envío de Circular a los municipios, y 2) Elaboración y envío de mapas temáticos referente a la Zonificación Ambiental; como determinantes ambientales en los procesos de ordenamiento territorial.',
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
            'activity_id' => 14009,
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
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14010,
            'year' =>1,
            'value' => 16283,
            'description' => 'Se asoció recursos, para la vigencia del 2020, a fín de complementar las acciones provenientes de procesos de tasas compesatorias principalmente',
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
            'activity_id' => 14011,
            'year' =>1,
            'value' => 0,
            'description' => 'Proceso en el cual la CSB ha gestionado la generación de la información a escala 1:25.000, necesaria para implementar la ruta de declaratoria de área protegida regional. Actualmente se está en la preparación',
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
            'activity_id' => 14012,
            'year' =>1,
            'value' => 2,
            'description' => '',
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
            'activity_id' => 14013,
            'year' =>1,
            'value' => 2,
            'description' => '',
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
            'activity_id' => 14014,
            'year' =>1,
            'value' => 1,
            'description' => '',
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
            'activity_id' => 14015,
            'year' =>1,
            'value' => 18,
            'description' => 'Se diseñó una línea base con con ocho (8) negocios verdes de la región de los municipios PDET, los cuales se enviaron al Miniserio de Ambiente y Desarrollo Sostenible para evaluación y fueron aprobados. Se encuentra pendiente la verificación de los Negocios por parte de la Unión Europea.',
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
            'activity_id' => 14016,
            'year' =>1,
            'value' => 1,
            'description' => 'Mediante capacitaciones que dictó el Ministerio de Ambiente y Desarrollo Sostenible se priorizaron 10 negocios verdes para posible vinculación a la página Mercado Libre de los cuales fueron escogidos seis (6) que cumplieron con los requisitos exigidos, a quienes le abrieron las páginas en Mercado Libre para promocionar sus productos. ',
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
            'activity_id' => 14017,
            'year' =>1,
            'value' => 20,
            'description' => 'Se estudio la linea base, se escogieron muestras de algunos negocios verdes, los cuales se estan verificacndo por video llamadas para verificar el cumplimiento requisitos minimos de una empresa. La ejecución presupuestal es el resultado del compromiso de la Licitación Pública que tuvo como objeto la ejecución de este proyecto',
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
            'activity_id' => 14018,
            'year' =>1,
            'value' => 1,
            'description' => 'El Consorcio NV realizó encuestas a los 40 Negocios del Proyecto, con el fin de saber las necesidades de cada uno. Se viene desarrollando una página web que se encuentra lista en un 50%, la cual servirá para ofertar los productos de cada NV.  La ejecución presupuestal es el resultado del compromiso de la Licitación Pública que tuvo como objeto la ejecución de este proyecto.',
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
            'activity_id' => 14019,
            'year' =>1,
            'value' => 1,
            'description' => 'Producto adelantado en los municipios de Altos del Rosario y Barranco de Loba',
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
            'activity_id' => 14020,
            'year' =>1,
            'value' => 1,
            'description' => 'Producto adelantado en los municipios de Altos del Rosario y Barranco de Loba',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
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
