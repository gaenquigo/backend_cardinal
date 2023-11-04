<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCvs2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 12419,
            'year' =>3,
            'value' => 0.4,
            'description' => 'Este avance del 20% obedece a la identificación y  delimitación de los municipios de Lorica y San Antero.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #010-2022 - ESAL 006',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12420,
            'year' =>3,
            'value' => 0.2,
            'description' => 'Este avance del 20% corresponde a la priorización del municipio de Montelíbano para adoptar su EEP urbana.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #010-2022 - ESAL 006',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12421,
            'year' =>3,
            'value' => 0.35,
            'description' => 'Su avance del 35% corresponde a: 
        1. Se realizó reunión de socialización del documento Determinantes Ambientales del sur de Córdoba con la Agencia de Renovación del territorio y el Programa PNIS.
        2. Reuniones virtuales con Secretaria de Planeación del Municipio de Puerto Libertador y el Equipo Consultor del EOT.
        3. Se han realizado 5 espacios de diálogos con los municipios de Montería, Tierralta, Puerto Libertador.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #010-2022 - ESAL 006',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12422,
            'year' =>3,
            'value' => 0.4,
            'description' => 'Su avance del 20% corresponde a: 
        1. Se realizó una revisión de la información relacionada con saneamiento básico y manejo de residuos sólidos.
        2. Se escogió la primera comunidad étnica que será beneficiada, ubicada en el municipio de Valencia. 
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #010-2022 - ESAL 006',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12423,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12424,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12425,
            'year' =>3,
            'value' => 0.4,
            'description' => 'Su avance del 10% corresponde a: 
        Revisión bibliográfica del estudio de Índice de Calidad Urbana, específicamente en el indicador de Área Verde Urbana realizada en el municipio de Tierralta, Planeta Rica, Montería y Cereté. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #010-2022 - ESAL 006',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12426,
            'year' =>3,
            'value' => 50,
            'description' => 'El avance de esta actividad corresponde a la actualización y fortaleciendo de la infraestructura de almacenamiento y análisis de información de la plataforma ArcGIS ONLINE de la CVS, donde se adquirió 3000 créditos, con los cuales se puede acceder al almacenamiento y análisis de información espacial en esta plataforma durante 1 año aproximadamente. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #010-2022 - ESAL 006',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12427,
            'year' =>3,
            'value' => 50,
            'description' => 'Este avance corresponde a:
        1. Se realizó la priorización de los municipios y predios a intervenir.
        2. Se realizó la planeación, identificación, caracterización y georreferenciación de ocho (8) predios correspondientes a cinco (5) procesos de Restitución de Tierras.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #010-2022 - ESAL 006',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12428,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12429,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13627,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13631,
            'year' =>3,
            'value' => 21,
            'description' => 'Se realizaron las siguientes actividades:
        1. Se adoptó el POMCA del río Canalete, río Los Córdobas y otros arroyos directos al mar mediante la resolución No 001 del 26 de abril del 2022.
        2. Para el POMCA río medio y bajo Sinú la Comisión Conjunta aprobó los estudios técnicos de las fases de aprestamiento, diagnostico, prospectiva y zonificación y formulación mediante las actas 04 del 2017 y 05 y 08 del 2020.
        3. Ya se realizó la consulta previa con las comunidades indígenas asentadas en el municipio de Chima (100%).
        4. Se realizó el acercamiento a las comunidades indígenas asentadas en el municipio de Lorica, solamente en la fase de la preparación, aún no se ha llevado a cabo la preconsulta, medidas y protocolización de la consulta (25%).',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Convenio 027 de 2014',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13628,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13629,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13630,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12435,
            'year' =>3,
            'value' => 1,
            'description' => 'El avance de esta actividad corresponde a:
        1. Los monitoreos realizados en la 1 campaña sobre el río Sinú en su zona alta, media y baja.
        2. Monitoreo en el río San Jorge en Bocas de Uré, Bocatoma municipio Montelíbano, Barrio la pesquera, así como a sus afluentes.
        3. Monitoreo al río Canlete y sus afluentes.
        4. Monitoreo en 16 puntos de aguas subterráneas  en los diferentes sistemas de acuíferos del Departamento.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #002-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12436,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12437,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12438,
            'year' =>3,
            'value' => 12.5,
            'description' => 'El avance de esta actividad correponde a la actualización del sistema de información del recurso hídrico, de manera que todos los permisos y concesiones otorgadas en el periodo, se encuentren registradas, conociendo las condiciones presentes y futuras de dichas fuentes, a la fecha con un cargue de 25 actos administrativos.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #002-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12439,
            'year' =>3,
            'value' => 12.5,
            'description' => 'El avance de esta actividad se debe al seguimiento de 15 conceptos técnicos, 30 visitas de seguimiento a PUEAA, generando cada uno de ellos su respectivo informe de visita.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #002-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12440,
            'year' =>3,
            'value' => 12.5,
            'description' => 'El avance de esta actividad se debe a: 
        1. Construcción de Base de datos de Clínicas y Hospitales de Montería para capacitar y apoyar sobre los planes de Ahorro y Uso Eficiente del agua.
        2. Acercamientos a escuelas y comunidades de Montería para sensibilizar sobre el cuidado del recurso a través de talleres.
        3. Visita a los Lavaderos que se encuentren a orillas del Rio Sinú.
        4. Desarrollo de campañas comunitarias, sectoriales.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #002-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12441,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12442,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12443,
            'year' =>3,
            'value' => 0.5,
            'description' => 'El 50% de avance reportado corresponde a lo siguiente:
        1.Se realizó recoorrido terrestre desde el muniicpio de Puerto Escondido hasta Lorica
        2. Recorrido acuático en el DRMI de la Bahía Cispatá.
        3. Monitoreo en 16 estaciones REDCAM',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #004-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12445,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12448,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12449,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12450,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12451,
            'year' =>3,
            'value' => 0.4,
            'description' => 'Este 20% de avance corresponde a:
        1. Visita técnica a los municipios de San Bernardo del Viento y Moñitos.
        2. Preparación de talleres como material de apoyo para socialización del POMIUAC.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #013-2022 - ESAL 009',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12452,
            'year' =>3,
            'value' => 0.4,
            'description' => 'Este 20% de avance corresponde a:
        1. Capacitación a profesionales CVS en la Ventanilla de Negocios Verdes.
        2. Revisión información bibliográfica para preparación del contenido a los Talleres de producción sostenible Negocios Verdes dirigido a los productores beneficiados.
        3. Consolidación  de la base de datos iniciativa productivas sostenibles.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #013-2022 - ESAL 009',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12453,
            'year' =>3,
            'value' => 0.3,
            'description' => 'Este 15% de avance corresponde a:
        1. Consolidación de la base de datos sobre organizaciones comunitarias y grupos ambientales que vienen trabajando en los municipios de San Bernardo del Viento y  Moñitos referente a procesos de organización,  con el fin de brindarles acompañamiento y/o fortalecimiento en temas organizativos, de asociatividad y comercialización.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #013-2022 - ESAL 009',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12454,
            'year' =>3,
            'value' => 0.45,
            'description' => 'Este 45% de avance corresponde a:
        1. Talleres de educación ambiental sobre conservación de fauna silvestre.cccc
        2. Divulgación en redes sociales institucionales',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #005-2022 - ESAL 001',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12455,
            'year' =>3,
            'value' => 45,
            'description' => 'Las actividades desarrolladas son:
        1. Un ingreso total al CAV de 5.870 individuos
        2. Egresos de 3.316 individuos de fauna silvestre.
        3. 82 entregas voluntarias. 
        4. Valoración de 15 casos médicos relevantes',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #005-2022 - ESAL 001',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14658,
            'year' =>3,
            'value' => 45,
            'description' => 'Las actividades desarrolladas son:
        1. Un ingreso total al CAV de 5.870 individuos
        2. Egresos de 3.316 individuos de fauna silvestre.
        3. 82 entregas voluntarias. 
        4. Valoración de 15 casos médicos relevantes',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #005-2022 - ESAL 001',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12456,
            'year' =>3,
            'value' => 207,
            'description' => 'Se realiza las siguientes actividades:
        1. Establecimiento de 207ha  de 820 ha programadas.
        2. Se realizaron los 10 talleres de sensibilización en el tema de conservación del suelo.
        3. Se han realizado 20 talleres de sensibilización en el tema de producción de material vegetal.
        4. Se realizaron los 20 talleres de sensibilización en el tema de Sistemas silvopastoriles. 
        
        Se tiene un avance del 5% con la adjudicación del convenio y firma de acta de inicio el día 16 de junio de 2022 ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato 053; CONVENIO DE ASOCIACION #014-2022 - ESAL 010',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12457,
            'year' =>3,
            'value' => 251919,
            'description' => 'Se realiza la actividad de sembrado de 251.919 árboles de un total de 997.940 programados.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato 053',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13633,
            'year' =>3,
            'value' => 35,
            'description' => 'Para esta actividad se  establecieron 35 ha y se e realizaron 3 jornadas de capacitación .',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato 054',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13634,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13635,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13636,
            'year' =>3,
            'value' => 42495,
            'description' => 'Se realiza la siembra de 42.595 árboles y 3 jornadas de capacitación en producción de material vegetal y conservación del suelo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato 054',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13637,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12463,
            'year' =>3,
            'value' => 0.3,
            'description' => 'Este avance del  15% corresponde a:
        1. Participación de 3 comités virtuales del proyecto vida manglar
        2. Selección de 2 caños para rehabilitación del bosque manglar.
        3. Participación en talleres de socialización liderados por  INVEMAR en el municipio de San Bernardo del Viento.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #012-2022 - ESAL 008',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12464,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12465,
            'year' =>3,
            'value' => 0.4,
            'description' => 'Se tiene un avance del 40%  con el desarrollo de reuniones virtuales entre el 19 de mayo a 3 de junio de 2022, con los entes territoriales y SIRAP Caribe para la creación de los SILAP.
        Se avanza en la creación de tres propuestas de actos administrativos para los posibles SILAP en los municipios de Santa Cruz de Lorica, Buenavista y Puerto Escondido.',
            'type' => 'functioning',
            'how_is_done' => 'Personal',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12466,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12467,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12468,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12469,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12470,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12471,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12472,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12473,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12474,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12476,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12477,
            'year' =>3,
            'value' => 9,
            'description' => 'El avance corresponde a : 
        1. Se realizó la socialización del Plan Integral de Gestión al Cambio Climático Territorial – PIGCCT
        2. Los municipios capacitados fueron los siguientes: Canalete, Santa Cruz de Lorica, Chinú, San Andrés de Sotavento, Buenavista, Pueblo Nuevo, Chimá, Tuchín y Momil.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #006-2022 - ESAL 002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12478,
            'year' =>3,
            'value' => 1,
            'description' => 'Se tiene un avance del 42,85% conforme a las siguientes actividades:
        1. Primera mesa departamental del año 2022 con la participación activa de 12 instituciones del departamento.
        2. Desarrollo de actividades de la cja de herramientas e implementación de conceptos relacionados en al cartilla.
        3. Segunda Mesa Departamental de Cambio Climático de Córdoba con la participación de diferentes actores claves que conformarán 4 grupos técnicos, uno por cada eje estratégico del PIGCCT
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #006-2022 - ESAL 002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12479,
            'year' =>3,
            'value' => 1.71,
            'description' => 'Se tiene un avance del 42,85% conforme a las siguientes actividades:
        1. Realización de visitas técnicas a las comunidades de Caño Grande y Caño Sicará del municipio de San Bernardo del Viento, para el seguimiento, monitoreo y la descarga de los datos de la consola de las estaciones hidrometeorológicas.
        2. Realización del análisis de los boletines de las estaciones ubicadas en Caño Grande y Caño Sicará.
        3. Fortalecimiento comunitario en las comunidades de Caño Grande y Caño Sicará',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #006-2022 - ESAL 002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12480,
            'year' =>3,
            'value' => 0.86,
            'description' => 'Se tiene un avance del 42,86% conforme a las siguientes actividades:
        1. Se realizó visita de inspección y reconocimiento visual a la Ciénaga de Corralito para el monitoreo de dos ecosistemas estratégicos priorizados.
        2. Se realizó Visita técnica en el municipio de San Antero
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #006-2022 - ESAL 002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12481,
            'year' =>3,
            'value' => 30,
            'description' => 'El avance de esta actividad corresponde a:
        1. Se selecciona la estrategia de Autoevaluación y Valoración Holística de la Resiliencia Climática de Agricultores y Pastores (SHARP).
        2. Se seleccionó como sitio piloto al municipio de Chinú y se realizó visita al mismo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #006-2022 - ESAL 002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12482,
            'year' =>3,
            'value' => 65,
            'description' => 'el avance se presenta mediante las siguientes actividades:
        1. Visita técnica  a la Ciénaga de Corralito,  con el fin de socializar el producto formulación e implementación de una estrategia para aumentar la conectividad entre áreas protegidas y su resiliencia frente al cambio climático.
        2. Visita técnica para llevar a cabo taller de educación ambiental en la Ciénaga de Corralito.
        3. Visita técnica para instalación de cámaras trampa en ciénaga Corralito y Banó.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #006-2022 - ESAL 002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12483,
            'year' =>3,
            'value' => 7,
            'description' => 'El avance para esta actividad corresponde a las capacitaciones realizadas en 7 municipios del Departamento.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #006-2022 - ESAL 002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12484,
            'year' =>3,
            'value' => 10,
            'description' => 'El avance del 66,70% obedece a que se han realizado 10 informes de seguimiento y monitoreo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #007-2022 - ESAL 003',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12485,
            'year' =>3,
            'value' => 3,
            'description' => 'El avance del 25% corresponde a:
        1. Se diseñó una plantilla guía en la cual se va a plasmar toda la información recopilada.
        2. Elaboración del primer informe técnico de monitoreo basado en el informe de visita GGR No. IV 2022-286',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #007-2022 - ESAL 003',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12486,
            'year' =>3,
            'value' => 6,
            'description' => 'El avance corresponde a el mantenimiento de las siguientes estaciones metereológicas:
        *Estación corregimento de Caño Grande - Estado funcionando 
        *Estación Corregimiento Caño Sicará - Estado funcionando
        *Estación Corregimiento El Guineo - Estado funcionando
        *Estación Vereda La Estrella - Estado funcionando
        *Estación Zona urbana Municipio de San José de Uré - Estado funcionando
        *Estación Vereda Santana – Nueva Unión  - Estado funcionando
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #007-2022 - ESAL 003',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12487,
            'year' =>3,
            'value' => 1,
            'description' => 'El avance del 50% corresponde al recorrido fluvial por el río Sinú desde el municipio de Tierralta hasta el municipio de San Bernardo del Viento',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #007-2022 - ESAL 003',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12488,
            'year' =>3,
            'value' => 0.9,
            'description' => 'Se tiene un avance del 30% atendiendo a la priorización de los municipios a los cuales se les realizará el apoyo.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12489,
            'year' =>3,
            'value' => 1,
            'description' => 'El avance del 50% corresponde a las siguientes actividades: 
        1. Se realizó seguimiento a las acciones implementadas por los municipios de Puerto Libertador, San José de Uré, Montelíbano, Buenavista, La Apartada, Pueblo Nuevo y Ayapel en atención a los puntos críticos por erosión e inundación en su jurisdicción.
        2. Se llevó a cabo la Mesa técnica de control de erosión e inundaciones y soluciones modernas liderada por el equipo de la CAR-CVS',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #007-2022 - ESAL 003',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12491,
            'year' =>3,
            'value' => 8.40,
            'description' => 'Para el desarrollo de esta actividad se realizó lo siguiente:
        1.  Se realizó acompañamiento a la Gobernación de Córdoba en la revisión del Plan Departamental de Gestión del Riesgo de Desastres – PDGRD y la Estrategia Departamental para la Respuesta a Emergencias EDRE.
        2. Se priorizaron los municipios: Moñitos, Cereté, Sahagún, Montería, Puerto Escondido y Buenavista',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #007-2022 - ESAL 003',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12492,
            'year' =>3,
            'value' => 0.44,
            'description' => 'El avance del 44,06% corresponde a el levantamiento de información mediante los monitoreos de amenaza hidroclimáticas del departamento de Córdoba,  a los 18 boletines de prensa, 87 informes hidrometeorológicos diarios y 40 informes de visita.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #007-2022 - ESAL 003',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12493,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12494,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12497,
            'year' =>3,
            'value' => 12.8,
            'description' => 'El avance de esta actividad corresponde a:
        1. Capacitación a Cuerpos de Bomberos del departamento de Córdoba, en la captura, almacenamiento y manejo de información Geográfica.
        2. Diseño e implementación de cartillas didácticas para docentes y estudiantes sobre temática de incendios forestales.
        3. Actualización de base de datos de los organismos de socorro de los municipios del departamento de Córdoba.
        4. Seguimiento al uso y estado de las herramientas utilizadas para atender emergencias por incendios forestales
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #006-2022 - ESAL 002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12498,
            'year' =>3,
            'value' => 0.45,
            'description' => 'El avance del 45% corresponde a:
        1. Reunión entre el Ministerio de Ambiente y Desarrollo Sostenible - MADS y la CVS, en aras de dar continuidad al proceso de aplicación de la metodología EDANA C.
        2. Visita técnica y recopilación de información con integrantes de la Junta de Acción Comunal – JAC de la Vereda Sarandelo, Santa Cruz de Lorica.
        3. Encuesta aplicada en la Vereda Sarandelo, Municipio de Santa Cruz de Lorica',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #006-2022 - ESAL 002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12499,
            'year' =>3,
            'value' => 24,
            'description' => 'El avance de esta actiuvidad corresponde a: 
        1. Primer encuentro del Nodo Regional de Cambio Climático Caribe e Insular. 
        2. Se participó en la gira de acción climática con el MADS.
        3.  Participación en el curso Gestión del cambio climático para la planificación territorial de La Mojana.
        4. Asistencia a la socialización BUR3  realizado por IDEAM,PNUD,MDS,DNP,FMAM.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #006-2022 - ESAL 002',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12502,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12503,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12504,
            'year' =>3,
            'value' => 0.5,
            'description' => 'El avance del 50% corresponde a: 
        1. Revisión de la información existente en el municipio de Buenavista.
        2. Revisión de información cartográfica del área de estudio.
        3. Visita técnica y aplicación de encuestas',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #007-2022 - ESAL 003',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12505,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12506,
            'year' =>3,
            'value' => 1,
            'description' => 'Las actividades desarrolladas en el periodo son:
        1. Se realizó la recolección y consolidación de información secundaria de los municipios del departamento de Córdoba con presencia de vulcanismo o diarismo de lodo.
        2. se analizó la información básica existente sobre Vulnerabilidad, amenaza y riesgo.
        3. Se realizaron visitas de inspección en áreas con condición de riesgo por volcanismo de lodo en los 2 municipios priorizados.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #007-2022 - ESAL 003',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12507,
            'year' =>3,
            'value' => 100,
            'description' => 'Se ejecutaron todas las actividades programadas en esta actividad para los municipios y usuarios con PSMV.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #008-2021',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12508,
            'year' =>3,
            'value' => 100,
            'description' => 'Se ejecutaron todas las actividades programadas en esta actividad.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #008-2021',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12509,
            'year' =>3,
            'value' => 100,
            'description' => 'Se ejecutaron todas las actividades programadas en esta actividad.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #008-2021',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12510,
            'year' =>3,
            'value' => 100,
            'description' => 'Se ejecutaron todas las actividades programadas en esta actividad, la cual se ve reflejada en dettalle en el documento Informe de Gestión I semestre 2022.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #008-2021',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12511,
            'year' =>3,
            'value' => 10,
            'description' => 'Se realizaron los 10 procesos de formalización y reglamentación programados.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #008-2021',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12512,
            'year' =>3,
            'value' => 1,
            'description' => 'Se dio cumplimiento a todas las acciones programadas.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #008-2021',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12513,
            'year' =>3,
            'value' => 100,
            'description' => 'Se dio cumplimiento a esta actividad a través de:
        1. Seguimiento a 3 proyectos con Licencia Ambiental para la disposición final de Residuos Sólidos  ordinarios.
        2. Se generaron 6 informes de visita y 6 conceptos técnicos.
        3. Se realizó seguimiento a 3 gestores  de RCD en el departamento de Córdoba, generando para cada uno de ellos sus respectivos informes de visita.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #008-2021',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12514,
            'year' =>3,
            'value' => 1,
            'description' => 'Se tiene un avance del 50% atendiendo que:
        1. Se dio selección a los 3 municipios (Ciénaga de Oro, San José de Uré y Momil).
        2. Visita a los municipios para establecer línea base.
        3. Visitas y charlas a las empresas e instituciones.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #002-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12515,
            'year' =>3,
            'value' => 0.4,
            'description' => 'Este 20% de avance corresponde a:  La seleccion de los municipios de San Bernardo del Viento y Moñitos mediante la elaboración de un acuerdo de suscripción  para el aprovechamiento de residuos sólidos.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12516,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Se tiene un avance del 50% donde se desarrollaron las siguientes actividades:
        1. Mesa técnica de calidad de agua y saneamiento básico con diferentes entes territoriales.
        2. Mesa técnica de calidad del aire.
        3. Mesa técnica de Bienestar animal 
        4. Mesa técnica de entorno saludable.
        5. Mesa técnica de cambio climático
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #002-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12517,
            'year' =>3,
            'value' => 0.2,
            'description' => 'Se avanza en un 10%  con la revisión y programación de las actividades a ejecutar, así como la elaboración del cronograma para su cumplimiento.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #001-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12518,
            'year' =>3,
            'value' => 7.8,
            'description' => 'Este porcentaje de avance corresponde a cinco (5) visitas técnicas para el control de los olores ofensivos en la jurisdicción de la CVS.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #001-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12519,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12520,
            'year' =>3,
            'value' => 30,
            'description' => 'Se realizó un total 25 visitas técnicas  distribuidas en los municipios de Cereté, Montería Sahagún, Chinú, San Carlos, y una visita a un gestor de residuos peligrosos.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #001-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12521,
            'year' =>3,
            'value' => 30,
            'description' => 'Se realizó un total 25 visitas técnicas  distribuidas en los municipios de Cereté, Montería Sahagún, Chinú, San Carlos, y una visita a un gestor de residuos peligrosos.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #001-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12522,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Se tiene un porcentaje de avance del 25%, el cual corresponde a : Consulta en Cámara de Comercio de Montería sobre el número de empresas inscritas que pueden ser objeto de seguimiento ambiental y la relación con la base de dato del SUIR-RESPEL',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #001-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12523,
            'year' =>3,
            'value' => 3,
            'description' => 'Se realizó un total de 4 visitas técnicas en el sector automotriz para el manejo de los residuos peligrosos.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #001-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12524,
            'year' =>3,
            'value' => 0.25,
            'description' => 'Este avance del 25% corresponde a: 
        1. Mesas de de trabajo organizadas por Cooperación Alemana GIZ Colombia, como parte de proyecto de apoyo a la cadena de maíz en el Departamento.
        2. Reuniones con profesionales de proyectos productivos PDET - Cacao y caucho.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12526,
            'year' =>3,
            'value' => 0.45,
            'description' => 'Este avance del 15% corresponde a: 
        1. Solicitudes a entes territoriales y entidades que trabajan en estos sectores para consolidar una base de datos más completa de productores.
        2. Organización del material para jornadas de fortalecimiento y se avanza en el diseño de instrumentos para levantamiento de línea base en las empresas a acompañar.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12527,
            'year' =>3,
            'value' => 0.15,
            'description' => 'Este avance del 15% corresponde a la proyección de oficios ára entidades y dependencias de la Corporación, organización de contenido para los talleres y diseño de los instrumentos para identificación de la línea base.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12528,
            'year' =>3,
            'value' => 0.75,
            'description' => 'Este avance del 25% corresponde a que se han realizado mesas de trabajo virtuales con productores para identificar temáticas de interés y se enviaron oficios a universidades y centros de investigación para participación del seminario.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12529,
            'year' =>3,
            'value' => 0.75,
            'description' => 'Este avance del 25% corresponde a que se han realizado mesas de trabajo virtuales con productores para identificar temáticas de interés y se enviaron oficios a universidades y centros de investigación para participación del seminario.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12530,
            'year' =>3,
            'value' => 0.2,
            'description' => 'El avance del 20% representa actividades como:
        1. Actualización de los términos de referencia y cronograma para la Convocatoria Aval de Confianza y LIDERAM 2022.
        2. Diseñ de pieza gráfica para publicar en redes y página web como estrategia de generación de expectativas frente a esta nueva convocatoria y consolidación base de datos de participantes.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia103 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12531,
            'year' =>3,
            'value' => 0.2,
            'description' => 'Se avanzó en un 20%  con la realización de mesas de trabajo con la empresa Porkcolombia.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia104 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12532,
            'year' =>3,
            'value' => 0.4,
            'description' => 'se avanzó en un 20% a través de:
        1. Participación en talleres organizados por PRO-NDC, grupo GIZ .
        2. Avance en la organización de los contenidos y presentaciones para los talleres y los instrumentos a implementar para el levantamiento de información.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia105 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12533,
            'year' =>3,
            'value' => 40,
            'description' => 'Este avance corresponde a las siguientes actividades:
        1. Se realizó un primer contacto con Programas Posconsumo autorizados por el ANLA.
        2. Se han realizado dos (2) mesas de trabajo virtual con programas posconsumo y se avanza en la coordinación de la logística para el desarrollo de la Ruta Posconsumo Montería 2022.
        3. Se desarrolló el diseño de la imagen de la campaña y la elaboración de piezas de expectativa e informativas para los usuarios.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12535,
            'year' =>3,
            'value' => 15,
            'description' => 'El avance de esta actividad corresponde a las acciones ejecutadas en el proyecto “Vida Manglar – Carbono azul”, dentro de la cual se enmarca  los pagos por servicios ambientales, en el cual las comunidades realizan acciones en para la conservación del ecosistema de manglar.Los municipios beneficiados son: San Antero (Estación Amaya, Caño Lobo); San Bernardo del Viento (Caño la Balsa, Boca de Tinajones, La Doctrina) y Santa Cruz de Lorica (Sector la cuchilla de Cispatá).',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia107 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12536,
            'year' =>3,
            'value' => 25,
            'description' => 'Este avance corresponde a:
        1. Envío del documento Plan Departamental de Negocios Verdes Córdoba, al Ministerio de Ambiental y Desarrollo Sostenible – Oficina de Negocios Verdes y Sostenibles para sus observaciones y retroalimentación.
        2. Se llevó a cabo el XVI Comité Interinstitucional de Negocios Verdes de Córdoba ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12537,
            'year' =>3,
            'value' => 12,
            'description' => 'Este avance corresponde a:
        1. Apoyo a empresarios desde la Ventanilla de Negocios Verdes de la CVS.
        2. Primer Encuentro SAVIA Ciudadanos: Educación Ambiental y Negocios Verdes, organizado por el Ministerio de Ambiente y Desarrollo Sostenible, con el apoyo de la Corporación.
        3. Feria Ganadera y Agroindustrial 2022.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia109 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12538,
            'year' =>3,
            'value' => 25,
            'description' => 'Este avance corresponde a:
        1. Se  programaron y desarrollaron visitas de seguimiento y asesoría a fin de identificar avances y dificultades en la implementación de sus planes de mejora a los 150 Negocios Verdes.
        2. Se realizaron visitas técnicas de seguimiento a 29 negocios 
        verdes.
        3. Se adelantaron reuniones con entidades aliadas del Comité Interinstitucional de negocios verdes Córdoba, como Invima y SENA.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia110 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12539,
            'year' =>3,
            'value' => 3,
            'description' => 'El avance del 40% obedece a:
        1. Reuniones y socializaciones del programa con actores claves y organizaciones interesadas en los municipios.
        2. Primera charla de socialización del programa de negocios verdes en el municipio de Puerto Escondido .
        3. Socialización del programa con comunidades organizadas del municipio de San Antero
        4. identificación y verificación de tres (3) nuevos negocios verdes  a través de la ventanillacvs.com',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12540,
            'year' =>3,
            'value' => 12,
            'description' => 'Se avanzó en esta actividad a travpes de la coordinación y organización de un evento para intercambio de experiencias y asesorías a emprendimientos verdes del departamento de Córdoba.
        2. Participación en espacios en articulación con Innpulsa Colombia, Cemprende y MADS .
        3. Se realizó la socialización del Programa de Emprendimientos y Negocios Verdes con funcionarios de la Secretaría de Desarrollo Económico de la Gobernación de Córdoba ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia112 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12542,
            'year' =>3,
            'value' => 0.2,
            'description' => 'Se presenta un avance del 20% atendiendo a:
        1. Participación en mesas de trabajo y talleres como parte de la Mesa regional de Economía Circular en el departamento de Córdoba.
        2. Identificación de negocios verdes con potencial para la implementación de líneas de acción de la economía circular ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia113 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12543,
            'year' =>3,
            'value' => 1925000,
            'description' => '1. Producción de 1.925.000 alevinos distribuidos así:
        a) 1.763.000 repoblamiento
        b) 162.000 fomento
        2. Se han beneficiado 9 municipios del Departamento',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #009-2022 - ESAL 005',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia114 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12544,
            'year' =>3,
            'value' => 0.25,
            'description' => 'Este 25% reportado corresponde a:  Reunión de socialización e dentificación del área  con actores claves sector Sierra Chiquita (Montería)
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia115 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12546,
            'year' =>3,
            'value' => 0.25,
            'description' => 'El avance de esta actividad se debe a la identificación y selección de iniciativas de turismo, así como las conversaciones sostenidas con el MADS para  la coordinación de jornadas de fortalecimiento turístico y el diseño de la estrategia.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #011-2022 - ESAL 007',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia116 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13638,
            'year' =>3,
            'value' => 1,
            'description' => 'El avance de esta actividad es de un 35%, el cual corresponde a:
        1. Acompañamiento y la asistencia a los Municipios del Departamento de Córdoba haciendo énfasis en aquellos que tenía su POT vencido.
        2. Se le brindo asesoría a los Municipios de San Carlos, Tierralta, Purísima y San Andrés de Sotavento, proceso de formulación del nuevo POT o POT de segunda generación.
        3. Se realizó la evaluación metodológica de los proyectos de revisión de POT’s de Municipio de Ciénaga de oro y Puerto Libertador.
        4. Se trabajó en el proceso de armonización de los DMI complejo de humedales de Ayapel y Ramsar Ayapel, insumo que será fundamental para actualizar las Determinantes Ambientales   ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #010-2022 - ESAL 006',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia117 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13639,
            'year' =>3,
            'value' => 30,
            'description' => 'El avance de esta actividad es de un 30%, el cual corresponde a:
        1. Se han realizado talleres de determinantes ambientales  y socialización de los lineamientos del Decreto 1232/2020  en 10 municipios del Departamento
        2. Se proyectaron oficios de invitación para el primer taller de Determinantes Ambientales, donde asistieron aproximadamente 90 personas.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #010-2022 - ESAL 006',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia118 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12549,
            'year' =>3,
            'value' => 20,
            'description' => 'El avance de esta actividad corresponde a lo siguiente: 
        Se realizó la actualización del Geoportal en la plataforma ArcGIS ONLINE, donde se crearon mapas, se analizaron los datos para compartir la información de manera espacial.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #008-2022 - ESAL 004',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia119 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12550,
            'year' =>3,
            'value' => 20,
            'description' => 'El avance de esta actividad corresponde a lo siguiente: 
        1. Registro de 67 permisos de aprovechamiento forestal mediante los actos administrativos, de un estimado de 170.
        2. El cargue en la plataforma VITAL y SILAMC correspondiente a denuncias se encuentra en un  44,4%.
        3. Se tiene un avance del 60% en el cargue de la información RESPEL en la plataforma.
        4. Se tiene un avance del 59% en el cargue de la plataforma SIRH.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #008-2022 - ESAL 004',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia120 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12551,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia121 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12552,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #003-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia122 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12553,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia123 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12554,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #003-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia124 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13640,
            'year' =>3,
            'value' => 11,
            'description' => 'Esta actividad se encuentra ejecutada mediante  la Resolución  No 2.9457 de 2022, por medio de la cual se adopta  el uso de los sistemas de información administrativo y financiero OBELISC0-SIAN en la Corporación Autónoma Regional de los Valles del Sinú y del San Jorge – CVS.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Orden de compra No 84520',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia125 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12556,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia126 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12557,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia127 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12558,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia128 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12559,
            'year' =>3,
            'value' => 11,
            'description' => 'El avance de esta actividad corresponde a la formulación y ajuste de 11 proyectos presentados al MADS.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #008-2022 - ESAL 004',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia129 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13618,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia130 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13619,
            'year' =>3,
            'value' => 0.6,
            'description' => 'El avance del 30% corresponde a ejecución del proceso PRAE con la institución educativa Marco Fidel Suarez, del municipio de Ciénaga de Oro, el Proceda con la comunidad de Sabaneta en el corregimiento Las Llanadas municipio de Sahagún y en la temática PRAU se viene adelantado con jóvenes estudiantes de la Universidad de Córdoba, de la Facultad de Educación.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #003-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia131 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13620,
            'year' =>3,
            'value' => 0.3,
            'description' => 'Este avance del 30% se debe al apoyo en la conformación del Comité Interinstitucional de Educación Ambiental CIDEA del municipio de CANALETE, y se realiza seguimiento a los CIDEA ya conformados de los municipios de Moñitos, Tierralta, Valencia, San José de Uré, Chinú y Ciénaga de Oro',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #003-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia132 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13623,
            'year' =>3,
            'value' => 0.2,
            'description' => 'Este avance del 20% se debe a la realización de un curso presencial enfocado a la seguridad y fortalecimiento del proceso de reciclaje que contribuya a resignificar la labor del Reciclador y apoyando su trabajo con la entrega de carretas y/o herramientas de trabajo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #003-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia133 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13624,
            'year' =>3,
            'value' => 0.3,
            'description' => 'El avance del 30% correspon de a la realización de realizó un encuentro de trabajo en las instalaciones de la biblioteca municipal de San Carlos, y así brindar la asesoría y fortalecimiento a la AAC a formular, para ello se contó con  la participación del Señor secretario de Educación.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #003-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia134 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13625,
            'year' =>3,
            'value' => 0.6,
            'description' => 'Este avance del 30% se debe a las actividades educativo ambientales virtuales que se desarrollan mediante el sistema LMS y espacios o Aula Verde interactiva de la CVS, la cual se realizó con estudiantes de 1er semestre de Licenciatura de Ciencias Naturales de la Universidad de Córdoba y de la Institución Educativa el Dorado sede Vallejo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #003-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia135 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13626,
            'year' =>3,
            'value' => 0.6,
            'description' => 'Se tiene un avance del 30% a tendiendo al acercamiento y articulación con la Secretaría de Educación, para la promoción de dos ODS en especial el ODS # 13 Cambio Climático y ODS #15 Vida Ecosistemas Terrestres (Bosques, Desertificación y Diversidad Biológica).',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #003-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia136 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13621,
            'year' =>3,
            'value' => 5,
            'description' => 'El avance del 5% en esta actividad se refiere a la gestión, para la publicación, divulgación e implementación de la Política Pública Departamental de Educación Ambiental y  la organización de eventos por cada subregión político-administrativa de la Corporación.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #003-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia137 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13622,
            'year' =>3,
            'value' => 1,
            'description' => 'El avance en esta actividad se debe a el apoyo en la actualización, fortalecimiento y/o seguimiento a tres (3) Planes de Educación Ambiental Municipal, así: para formulación o actualización de PEAM se atenderán los municipios de Chinú, Canalete, y San José de Uré, y seguimiento y/o fortalecimiento se tienen los municipios de Moñitos, Ciénaga de Oro, Valencia, Tierralta y Sahagún.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #003-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia138 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12569,
            'year' =>3,
            'value' => 8,
            'description' => 'Este avance corresponde a:
        1. Se realizaron 8  campañas de concientización y sensibilización ambiental así: 4 en el municipio de Montería, 2 en el municipio de Pueblo Nuevo y 2 en el municipio de Valencia.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE ASOCIACION #010-2022 - ESAL 006',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia139 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12570,
            'year' =>3,
            'value' => 30,
            'description' => 'El avance del 30% corresponde a :
        1. Se han desarrollado dos (2) campañas de concientización y sensibilización ambiental para el desarrollo sostenible de los predios formalizados, titularizados y/o restituidos. 
        2. Conmemoración Día de la Tierra 22 de abril de 2022 liderada en tres instituciones públicas de la ciudad de Montería.
        3. Conmemoración Día Mundial del Ambiente en las instalaciones de la CVS, con la participación de docentes, estudiantes del del programa de Licenciatura en Ciencias Naturales y demás participantes.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO DE COOPERACIÓN #003-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia140 = DB::getPdo()->lastInsertId();
        
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
