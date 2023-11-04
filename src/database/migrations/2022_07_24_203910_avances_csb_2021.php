<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCsb2021 extends Migration
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
            'year' =>2,
            'value' => 6,
            'description' => 'Se brindó la asistencia técnica y apoyo a 6 PRAES, MUNICIPIOS: Cantagallo, Magangué, Talaigua Nuevo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13988,
            'year' =>2,
            'value' => 11,
            'description' => 'Se brindó la asistencia técnica y apoyo a 11 PROCEDA, MUNICIPIO: Magangué.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13989,
            'year' =>2,
            'value' => 2,
            'description' => 'Se capacitó en diferentes temáticas ambientales a servidores públicos y líderes comunitarios',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13990,
            'year' =>2,
            'value' => 3,
            'description' => 'Se crearon y asistieron 3 CIDEA, en los municipios de Cicuco, Mompox y Talaigua Nuevo',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13991,
            'year' =>2,
            'value' => 6,
            'description' => 'Se protocolizaron 6 Convenios en Educación Ambiental con los municipios de Cantagallo, San Pablo, San Fernando, Pinillos, Simití, Santa Rosa del Sur.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13997,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13998,
            'year' =>2,
            'value' => 1,
            'description' => 'Se ha iniciado con la consulta cartográfica en ArcGis, para la emisión de los conceptos y aval para proyectos ambientales y productivos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13999,
            'year' =>2,
            'value' => 3,
            'description' => 'RESPEL, SNIF, SIUR',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14003,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14004,
            'year' =>2,
            'value' => 10,
            'description' => 'Actividad sin meta en la vigencia 2021. Ejecutada  en un 17% en la vigencia 2020 y en 83% como rezago en la vigencia del 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14005,
            'year' =>2,
            'value' => 6,
            'description' => 'Actividad dirigida a la generación y divulgación de documentos de apoyo para facilitar la articuación de la planificación territorial de los municipios que conforman la jurisdicción de la CSB con la planificación ambiental de la CSB',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14006,
            'year' =>2,
            'value' => 25,
            'description' => 'Actividad dirigida a la identificación de las determinantes ambientales para la actualización de las mismas y apoyo en el proceso de concertación de los asuntos exclusivamente ambientales en la revisión y/o ajuste de los POT',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14007,
            'year' =>2,
            'value' => 1,
            'description' => 'Seminario Taller (Virtual) en Gestión y Normatividad Ambiental: Gestión del Riesgo y Cambio Climático a Servidores Públicos de Entes Territoriales y Lideres Comunitarios de los 25 municipios de la jurisdicción de la CSB. Se asesoró al municipio de Santa Rosa del Sur en PBOT.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16906,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16907,
            'year' =>2,
            'value' => 91397,
            'description' => 'Las 91.397 especies con las cuales se ha adelantado la campaña de sembratón de árboles son las siguientes: Abarco, Búcaro, Caoba, Carbonero, Campano, Cañaguate, Caracolí, Cedro, Ceiba Tolúa, Ceiba Blanca, Ceiba Amarilla, Dinde, Dormilón, Ébano, Gmelina, Guácimo, Guadua, Guama, Guanábana, Guayacán Trébol, Guayaba Agria, Guayaba Dulce, Iguamarillo, Leucaena, Mamón, Mango, Marañón, Matarratón, Nacedero, Nazareno, Nim, Níspero, Orejero, Petevaca, Pechindé, Polvillo, Pomelo, Roble, Solera, Tambor frijolillo, Vainillo, entre otras especies.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16908,
            'year' =>2,
            'value' => 0,
            'description' => 'No se comprometieron los recursos financieros',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16910,
            'year' =>2,
            'value' => 0,
            'description' => 'Las metas físicas quedaron como rezago 2021 para ejecución en el 2022, dado que su inició fue a finales de la vigencia 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16911,
            'year' =>2,
            'value' => 0,
            'description' => 'Las metas físicas quedaron como rezago 2021 para ejecución en el 2022, dado que su inició fue a finales de la vigencia 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16912,
            'year' =>2,
            'value' => 0,
            'description' => 'Las metas físicas quedaron como rezago 2021 para ejecución en el 2022, dado que su inició fue a finales de la vigencia 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16913,
            'year' =>2,
            'value' => 0,
            'description' => 'Las metas físicas quedaron como rezago 2021 para ejecución en el 2022, dado que su inició fue a finales de la vigencia 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14012,
            'year' =>2,
            'value' => 2,
            'description' => 'Se realizaron 2 talleres denominados Gestión y Normatividad Ambiental, en el cual se incluyeron los temas Plan de Uso eficiente y Ahorro del Agua y Gobernanza del Agua ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14013,
            'year' =>2,
            'value' => 2,
            'description' => 'Se realizaron 2 talleres sobre Plan de Saneamiento y Manejo de Vertimientos ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14014,
            'year' =>2,
            'value' => 1,
            'description' => 'Se continua con la divulgación del documento de condicionantes para la localización de rellenos sanitarios',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13992,
            'year' =>2,
            'value' => 99,
            'description' => 'Se elaboraron 99 Actos Administrativos correspondientes a evaluacion ambiental de licencias, permisos, concesiones y  autorizaciones ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13993,
            'year' =>2,
            'value' => 142,
            'description' => 'Se elaboraron 142 Actos Administrativos correspondientes a control y seguimiento ambiental de licencias, permisos, concesiones y  autorizaciones ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13994,
            'year' =>2,
            'value' => 90,
            'description' => 'Se elaboraron 90 Actos Administrativos de atención de quejas, reclamos, multas y daños presentadas por diferentes usuarios de los recursos naturales renovables.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13995,
            'year' =>2,
            'value' => 21,
            'description' => 'Se acogieron 21 conceptos técnicos para procesos sancionatorios ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13996,
            'year' =>2,
            'value' => 20,
            'description' => 'Se realizaron operativos de control y vigilancia realizados (retenes) en los municipios de Magangué, Mompox y Margarita.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14015,
            'year' =>2,
            'value' => 32,
            'description' => 'Se entregaron el 100% de todos los documentos y evidencias relacionado con los Negocios Verdes encontrados',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14016,
            'year' =>2,
            'value' => 1,
            'description' => 'Se entregaron el 100% de todos los documentos y evidencias relacionado con los Negocios Verdes encontrados',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14019,
            'year' =>2,
            'value' => 1,
            'description' => 'La información primaria y secundaria recolactada fue consolidada en un Documento Técnico denominado Gestión Integrada del Mercurio para el Sector ASGM- 2021 ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14020,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizó un taller de sensibilización y socialización del proyecto en las regiones prioritarias, con la participación activa de 80 personas en el municipio de San Martin de Loba-Bolívar',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16930,
            'year' =>2,
            'value' => 0,
            'description' => 'Actividad con un 25% de avance.  Se Identificaron 125 organizaciones o asociaciones que están realizando la actividad minera artesanal, a pequeña escala y/o bajo amparo de título minero por parte de la Agencia Nacional de Minería – ANM. Se realizó una mesa de articulación interinstitucional: ANM, CSB, Alcaldías y usuario.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16931,
            'year' =>2,
            'value' => 0,
            'description' => 'Actividad con un avance del 20%, se realizaron monitoreo de las matrices ambientales (agua,  suelo,  recursos ictiológicos) en ciénagas priorizadas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16932,
            'year' =>2,
            'value' => 0,
            'description' => 'Actividad con un avance del 30% Se escogieron las 4 zonas afectados, se implementaron los viveros y se coordino la siembra para época de invierno',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16933,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16934,
            'year' =>2,
            'value' => 1,
            'description' => 'Documento de la metodología para identificación de posibles zonas contaminadas de mercurio. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16935,
            'year' =>2,
            'value' => 0,
            'description' => 'Actividad con un avace del 70%, Realizó visita de seguimeinto a 15 titulos minero, se elaboró documento con sitios priorizados por contaminación de mercurio, se realizaron dos talleres de tranferencia de tecnología.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16936,
            'year' =>2,
            'value' => 3,
            'description' => 'Elaboración de cartilla didáctica y realización de tres campañas en los municipios de influencia del proyecto',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
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
