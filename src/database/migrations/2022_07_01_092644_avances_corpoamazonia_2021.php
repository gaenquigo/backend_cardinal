<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorpoamazonia2021 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 7663,
            'year' =>2,
            'value' => 21,
            'description' => '23 NUEVOS NEGOCIOS VERDES 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7664,
            'year' =>2,
            'value' => 3,
            'description' => '8 eventos en mercados locales y regionales para Posicionar y Consolidar los NV.
        139 Empresas fortalecidas en criterios  ambientales, sociales y comerciales.
        Conformación de la ventanilla de NV  mediante alianzas o acuerdos con otras instituciones.
        Convenio de Cooperación entre CORPOAMAZONIA,  ITP y La Universidad Autónoma de Barcelona – UAB. para la transformación social, agropecuario y forestal.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7665,
            'year' =>2,
            'value' => 1,
            'description' => 'Proyecto Açaí
        113 beneficiarios fortalecidos bajo el modelo de NV en Puerto Asís Putumayo.
        Aprovechamiento natural de 53 ha y 113 ha implementas.
        Asesorías a CORPOCAMPO para la estructuración de planes de aprovechamiento de 2.000 Has en 5 Municipios (Puerto Asís, Caicedo, Villagarzón, Puerto Guzmán y Mocoa.)
        
        Meliponicultura
        4 Meliponarios con licencias ambientales en fase experimental (3 Putumayo y 1 Caquetá).
        11 Meliponarios con solicitudes de licencias ambientales en fase experimental en trámite (3 Putumayo y 8 Caquetá).
        Entrega de 100 cajas tecnificadas tipo Inpa para el fortalecimiento de meliponarios. 
        Adquisición de 4 kits de monitoreo (sensores de movimiento, proximidad, peso y temperatura), para fortalecer la investigación de la actividad de meliponicultura.
         Entrega de 70 Stikers a empresas dedicadas a la producción de miel.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7666,
            'year' =>2,
            'value' => 0,
            'description' => 'PLAN DE ORDENACIÓN FORESTAL MECAYA SENCELLA
        En el marco del contrato No. VA-CCON-045-2020 celebrado entre el CONSORCIO POF y el Fondo 
        Patrimonio Natural, se dio inicio el 21 de diciembre de 2020, en el cual se han desarrollado las 
        siguientes actividades: 
        Fase 1 Aprestamiento
        Se tiene un avance del 60% Se presentó el plan de trabajo para el desarrollo de las actividades que 
        se van a realizar para la actualización del Plan de Ordenación Forestal Mecaya Sencella:
        Fase 2 Diagnóstico
        Para el desarrollo de esta fase se tuvo en cuenta el Plan de Ordenación Forestal Mecaya-Sencella 
        elaborado por la universidad Distrital Francisco José de Caldas (2006), del cual se elaboró una línea 
        base.
        Fase 3 Zonificación Participativa
        Se determinaron las áreas con 
        altos valores de conservación.
        Se contó con la participación de 56 representantes de las veredas de influencia, iniciando el 13 de 
        marzo, y se culminó el 23 del mismo mes, donde asistieron 192 personas pertenecientes a los 
        municipios de Puerto Guzmán, Puerto Caicedo, Leguízamo, Puerto Asís, Mocoa y Villagarzón.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7667,
            'year' =>2,
            'value' => 2,
            'description' => 'Se formuló e implementó 4 Planes de Manejo Forestal Integrales y Comunitarios  ASOFORES, ASMUCOCA
        ASOGAMEC  y OROTUYO.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7668,
            'year' =>2,
            'value' => 0.30,
            'description' => 'En el marco de la implementación del Plan de Ordenación Forestal Yarí Caguán se encuentra en elaboración 
        un Plan de Manejo Forestal (PMF) Comunitario del Núcleo de Desarrollo Forestal “Nueva Ilusión “, Municipio de 
        Cartagena del Chairá, departamento de Caquetá, sobre 30.000 hectáreas y la primera Unidad de Corta Anual 
        (UCA) de 500 hectáreas, el cual se ejecutará a través del contrato No. VA-CCON-040-2020 suscrito entre el 
        Fondo Patrimonio Natural y Consorcio PMF',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7669,
            'year' =>2,
            'value' => 3000,
            'description' => 'Para el cumplimiento de esta actividad se proyectó como meta para el cuatrienio un total 9.000 ha, 
        para el cumplimiento anual, así: año 2020 con 6.000 ha y año 2021 con 3.000 ha. Sin embargo, con 
        la gestión institucional en la vigencia 2020 al año 2021 se logró una meta de 46.472,17 hectáreas 
        bajo conservación en el marco del esquema de pagos por servicios ambientales correspondiente a 
        619 acuerdos de conservación firmados por las familias potenciales identificadas en 5 Municipios',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7670,
            'year' =>2,
            'value' => 300,
            'description' => 'Amazonas: Se realizó la siembra de 2.905 plántulas correspondiente a especies Maderables y 
        frutales
        Caquetá: Se realizó la siembra de 12.530 árboles correspondiente a las especies de carbón
        Putumayo: Se realizó la siembra de 2.000 árboles 
        EJECUCIÓN DE PROYECTOS PARA EL CUMPLIMIENTO DE ESTA ACTIVIDAD 
        1). Proyecto “Implementación de Estrategias para la Gobernanza y Restauración en los Departamentos 
        de Caquetá y Putumayo con recursos del FCA”, donde se realizará enriquecimiento en áreas 
        degradadas para su restauración en los municipios de Puerto Guzmán y Leguizamo, departamento 
        de Putumayo.
        2). Proyecto: “Implementación del manejo forestal sostenible y fortalecimiento comunitario, como 
        estrategia en el control de la deforestación y contribución a la mitigación y adaptación al cambio 
        climático en el departamento del Putumayo”
        3) Proyecto “Implementación de acciones para mitigar la deforestación y degradación de los bosques 
        en el marco de la Sentencia 4360 de 2018 en áreas de comunidades étnicas de los Departamentos de 
        Caquetá y Putumayo',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7671,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7672,
            'year' =>2,
            'value' => 1,
            'description' => 'Se aplicaron medidas de control para 3 especies amenazadas: Tigrillo (Leopardus tigrinus) Jaguar (Panthera Onca) y Oso andino (Tremarctos ornatus)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7673,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7674,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7675,
            'year' =>2,
            'value' => 80,
            'description' => 'Se realizaron 641 seguimientos, lo cual equivale al 82%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7676,
            'year' =>2,
            'value' => 105,
            'description' => 'Se logra un tiempo promedio de trámite para la evaluación de 90 días hábiles',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7677,
            'year' =>2,
            'value' => 20,
            'description' => 'Las Direcciones Territoriales Putumayo, Caquetá y Amazonas, han resuelto (217) procesos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7678,
            'year' =>2,
            'value' => 1,
            'description' => 'se priorizaron 895 actuaciones directas, que cubren la gestión de la entidad en cuanto a control, manejo y disposición de fauna silvestre',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7679,
            'year' =>2,
            'value' => 0.96,
            'description' => '1 Plan Anual de Control de Vigilancia con Avance: 96%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7680,
            'year' =>2,
            'value' => 1,
            'description' => '1 Agenda de Competitividad con economía circular. con Avance: 100%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7681,
            'year' =>2,
            'value' => 31,
            'description' => '31 PGIRS con Seguimiento',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7682,
            'year' =>2,
            'value' => 1,
            'description' => '1 RESPEL Formulado',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7683,
            'year' =>2,
            'value' => 2,
            'description' => '2 Centros urbanos con acciones en gestión ambiental urbana',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7684,
            'year' =>2,
            'value' => 0.52,
            'description' => 'Se encuentra en proceso de formulación Dos (2) POMCAs para los ríos: Loretoyacu en Puerto Nariño - Amazonas y Rio Mocoa – en Putumayo (Municipios de Mocoa, San Francisco y Villagarzón). Adicionalmente, se encuentra en formluación el Plan de ordennación y manejo para la subzona hidrográfica Alto Río Putumayo, mediante el desarrollo de los siguientes proyectos:  -Proyecto BPIN: 20193223000001Formulación del plan de ordenación y manejo de la cuenca hidrográfica del río loretoyacu, en territorio colombiano, departamento de amazonas, municipio de puerto nariño. -Formulación plan de ordenación ambiental y manejo de la cuenca hidrográfica del río mocoa y evaluación detallada de áreas ambientalmente aptas para re-asentamiento mocoa -Proyecto BPIN 20143223000003-formulación de un plan de ordenación y manejo para la subzona hidrográfica alto rio putumayo departamentos de putumayo y nariño.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7685,
            'year' =>2,
            'value' => 1,
            'description' => 'Se apoyó la ejecución de acciones del POMCA del Río Hacha mediante:
        -RECUPERACIÓN DEL ÁREA DE RONDA HÍDRICA POR MEDIO PROTECCIONES DIRECTAS Y RESTAURACIÓN PAISAJÍSTICA DE ÁREAS DE PROTECCIÓN, FASE II; EN EL SECTOR DE LA QUEBRADA CAÑO EL DESPEJE, DEL MUNICIPIO DE FLORENCIA; DEPARTAMENTO DEL CAQUETÁ
        -Desarollo del proyecto BPIN: 20173223000003 Rehabilitación ecológica participativa de la cuenca del rio el doncello (municipio de el doncello - caquetá), en el área de influencia de Corpoamazonia caquetá',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7686,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7687,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7688,
            'year' =>2,
            'value' => 0,
            'description' => 'La meta total del cuatrienio fue promulgar 5 resoluciones de acotamiento de Rondas Hídricas, meta que ya fue cumplida en el año 2020.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7689,
            'year' =>2,
            'value' => 31,
            'description' => 'Se realizó seguimiento a 31 PUEAA municipales:  Putumayo : 13 municipios.  Caquetá: 16 municipios. Amazonas: 2 municipios',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7690,
            'year' =>2,
            'value' => 31,
            'description' => 'Se realizó seguimiento a 31 PSMV municipales:  Putumayo : 13 municipios  Caquetá: 16 municipios  Amazonas: 2 municipios',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7691,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7692,
            'year' =>2,
            'value' => 1,
            'description' => 'Un (1) documento de oferta y demanda de agua subterránea en acuíferos del municipio de Puerto Asis y San Miguel en el Departamento del Putumayo',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7693,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7694,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7695,
            'year' =>2,
            'value' => 8,
            'description' => 'Se brindó asistencia técnica en los temas de ordenamiento ambiental, protocolo de concertación de  los asuntos ambientales en los POT y determinantes ambientales para su adecuada incorporación  en los procesos de revisión y ajuste de los POTs. se deja constancia en las Actas de Asistencia  Técnica y demás soportes como: Fichas de DA, Resolución de adopción de DA y Otros insumos de  asistencia técnica (lineamientos, conceptos, informes, estudios, insumos cartográficos)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7696,
            'year' =>2,
            'value' => 8,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7697,
            'year' =>2,
            'value' => 8,
            'description' => 'Se prestó asistencia técnica en Gestión del Riesgo de Desastres a  21l entidades territoriales de la jurisdicción cumpliendo al 100% con la meta programada
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7698,
            'year' =>2,
            'value' => 3,
            'description' => 'Se avanza en esta actividad con acciones alcanzando el 30% de la meta definida para esta vigencia',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7699,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7700,
            'year' =>2,
            'value' => 8,
            'description' => 'Se realizó la revisión de la información cartográfica de zonificación ambiental suministrada por el Ministerio de Ambiente y Desarrollo Sostenible – MADS, la cual se integrará en los diferentes  procesos de ordenamiento ambiental que se adelantan en el marco de la definición de las  determinantes ambientales y los procesos de ordenamiento territorial que realizan actualmente los  municipios de la jurisdicción.
        La revisión de la información cartográfica se realiza considerando las versiones entregadas por el MADS y el avance de las determinantes ambientales generadas por la corporación. Luego de este proceso de análisis se programará la realización de las jornadas de asistencia técnica sobre el tema con los municipios priorizados para el año 2021, las cuales se realizarán en los meses de julio y  agosto, cuando la información de la zonificación ambiental se encuentre analizada en su totalidad.
        Esta información de zonificación ambiental ha sido incorporada en los procesos de asistencia técnica en el marco de la revisión y ajuste de los Planes de ordenamiento Territorial de los municipios de Curillo, Albania y Valparaíso en el departamento de Caquetá, los cuales contaron con el apoyo directo del Ministerio de ambiente y Desarrollo Sostenible y GIZ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7701,
            'year' =>2,
            'value' => 0,
            'description' => 'Según el plan operativo del Plan de Acción “Amazonias Vivas” 2020-2023, esta actividad está programada para su ejecución para el año 2022
        Sin embargo en marco del convenio 0682 de 2010 suscrito entre INVIAS y CORPOAMAZONIA para la implementación del Plan de Manejo Ambiental y Social, Integrado y Sostenible -PMASIS, para la 
        Reserva forestal Nacional protectora de la cuenca alta del río Mocoa, siendo la corporación coejecutora del convenio durante este semestre se realizaron las siguientes actuaciones: Se realizó el mantenimiento forestal a 20 hectáreas de la estrategia de enriquecimiento en Bosque Primario que hacen parte de la compensación por aprovechamiento forestal del proyecto variante San Francisco-Mocoa, la actividad contempló realizar resiembra, plateo, segundas fertilizaciones, control fitosanitario y asistencia técnica; y se adelantó en la vereda San Martín y Campucana (Municipio de Mocoa).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7702,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7703,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7704,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7705,
            'year' =>2,
            'value' => 8,
            'description' => 'Asesoría y asistencia técnica en Cambio Climático a  10 entidades territoriales Putumayo: Colón,Santiago,Sibundoy,San Francisco,Villagarzón, Puerto Caicedo, Orito, San Miguel, Valle del Guamuez,  Puerto Guzmán.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7706,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7707,
            'year' =>2,
            'value' => 1,
            'description' => '3 PROYECTOS EN EL MARCO DE LA IMPLEMENTACIÓN DE LOS PIGCC 
        Implementación de estrategias para la gobernanza y restauración en Caquetá y Putumayo
        Fortalecimiento de la gestión integral de la biodiversidad y sus servicios ecosistémicos en Amazonas, Caquetá, Putumayo
        Implementación de acciones para mitigar la deforestación y degradación de los bosques en el marco de la sentencia 4360 de 2018 en áreas de comunidades étnicas en Caquetá y Putumayo
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7708,
            'year' =>2,
            'value' => 72,
            'description' => '72 herramientas e instancias de educación ambiental
         29 PRAES ( 2 en Amazonas, 8 en Caquetá y 19 en Putumayo)
         21 PROCEDAS ( 1 en Amazonas, 8 en Caquetá y 12 en Putumayo)
         22 CIDEAS ( 1 en Amazonas, 8 en Caquetá y 13 en Putumayo)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7709,
            'year' =>2,
            'value' => 2,
            'description' => 'Desarrollo de 35 transmisiones en vivo de miércoles de la biodiversidad se realizó jornadas de sensibilización para promover el respeto por la fauna silvestre a 5462 visitantes que estuvieron en el Centro Experimental Amazónico CEA, Desarrollo de la escuela de Selva',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7710,
            'year' =>2,
            'value' => 3,
            'description' => 'Florencia: 1 red de jóvens de ambiente fortalecida. Leticia: 1 red de jóvenes de ambiente conformada. Putumayo: Conversatorio red de jóvenes de Ambiente Putumayo',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7711,
            'year' =>2,
            'value' => 50,
            'description' => 'Aplicación de protocolos veterinarios, labores de enriquecimiento ambiental, mantenimiento de la estación de recursos hidrobiológicos. Se realizó la atención a 11.151 personas, en el Parque de Fauna emblemática Amazónica SURUMA, Se produjeron 79.834 plántulas de material vegetal, para una disponibilidad actual de material vegetal equivalente a 28.459 plántulas de 22 especies forestales productoras protectoras en las áreas de crecimiento del vivero forestal Sabino Imbachi',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7712,
            'year' =>2,
            'value' => 50,
            'description' => 'Información Forestal (SNIF):   463 registros actualizados
        Inventario Nacional (PCB):  15 Usuarios transmitidos al IDEAM 100%
        Sistema de Información del Recurso Hídrico (SIRH): 2.564 registros actualizados
        Registro de generadores RESPEL:  161 con revisión (visita de campo y concepto técnico), validados y transmitidos al IDEAM.
        Registro Único Ambiental -RUA:3 Usuarios Actualizados
        
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7713,
            'year' =>2,
            'value' => 1,
            'description' => 'Se contrató mediante prestación de servicios profesionales un abogado especializado en derecho administrativo con experiencia relacionada con el área administrativa, quien: a) Adelantó la revisión jurídica de la normatividad externa e interna que regula la estructura organizacional de CORPOAMAZONIA. Elaborando un diagnóstico de la situación encontrada y recomendaciones pertinentes. b) Con el diagnóstico y la información brindada por la Subdirección Administrativa y Financiera el profesional contratado elaboró un estudio que se desarrolla en dos partes: PRIMERA PARTE.- ESTUDIO TÉCNICO, JURÍDICO Y FINANCIERO MODIFICACIÓN DE LA ESTRUCTURA ORGANIZACIONAL DE CORPOAMAZONIA y la SEGUNDA SEGUNDA PARTE.- ESTUDIO TÉCNICO PARA LA AMPLIACIÓN DE LA PLANTA DE PERSONAL DE LA CORPORACIÓN PARA EL DESARROLLO SOSTENIBLE DEL SUR DE LA AMAZONIA – CORPOAMAZONIA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7714,
            'year' =>2,
            'value' => 45,
            'description' => 'Adopción de 5 políticas de MIPG:
         Res No. 0253 del 19-03-2021. “Gestión Documental”
         Res No. 0284 del 29-03-2021. ”Fortalecimiento Organizacional y Simplificación de Procesos”.
         Res No. 1129 del 30-09-2021. “Participación ciudadana en la gestión publica”
         Res No. 1130 del 30-09-2021. “Racionalización de trámites”.
         Res No. 1131 del 30-09-2021. “Servicio al ciudadano”.
         CUMPLIMIENTO DECRETO 612 DE 2018
         Plan Institucional de Archivos de la Entidad -PINAR Res No. 0253 del 19-03-2021
         Plan Anual de Adquisiciones Res 043-.2021
         Plan Anual de Vacantes Res 40- 30-01-2021
         Plan de Previsión de Recursos Humanos Res 0041– 30-01-2021
         Plan Institucional de Capacitación Res 039- 25-01-2021
         Plan de Incentivos Institucionales Res 38- 25-01-2021
         Plan de Trabajo Anual en Seguridad y Salud en el Trabajo Res 0042 – 25-01-2021
         Plan Anticorrupción y de Atención al Ciudadano 0056 del 29-01-2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7715,
            'year' =>2,
            'value' => 2,
            'description' => 'Memorando de  Entendimiento, para ser suscrito con la Agencia Nacional de Tierras cuyo objeto es: Aunar esfuerzos técnicos, humanos, administrativos y logísticos entre la Agencia Nacional de Tierras – ANT y CORPOAMAZONIA, para el diseño, análisis, promoción de programas, proyectos e iniciativas  contempladas en los instrumentos de Planificación respectivos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7716,
            'year' =>2,
            'value' => 2,
            'description' => 'CORPOAMAZONIA y FUNDACIÓN OMACHA, se comprometen a aunar esfuerzos técnicos, administrativos y financieros para para el desarrollo de acciones de conservación de fauna terrestre y acuática en el departamento de Amazonas, en cumplimiento al Plan de Acción Institucional de CORPOAMAZONIA 2020 – 2023 “Amazonias Vivas”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7717,
            'year' =>2,
            'value' => 1,
            'description' => 'En el año 2021 se elaboró un documento denominado “Propuesta de medidas de conservación,  restauración, y producción Sostenible de CORPOAMAZONIA, presentada ante el Ministerio de Ambiente y Desarrollo Sostenible, en el marco del Pacto Intergeneracional por la Vida del Amazonas Colombiano (PIVAC), para reducir la deforestación y GEI en la región”, que fue construido a partir de los alcances y metas del Plan de Acción Institucional 2020-2023 y del Plan de Acción para reducir la deforestación presentado ante el Tribunal de Cundinamarca en septiembre de 2018. A la fecha el documento ha tenido la socialización con los equipos técnicos de las Subdirecciones de Planificación  y Administración Ambiental de CORPOAMAZONIA, y se socializó en el Comité Directivo de la dirección General. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7718,
            'year' =>2,
            'value' => 1,
            'description' => 'Sub-proyecto: “Implementación de acciones para mitigar la deforestación y degradación de los bosques en el marco de la Sentencia 4360 de 2018 en áreas de comunidades étnicas de los Departamentos de Caquetá y Putumayo”. El proyecto se ejecuto a través del convenio interadministrativo N° 556 de 2020 suscrito entre la Organización de los Pueblos Indígenas de la Amazonía Colombiana - OPIAC y CORPOAMAZONIA. Elaborar el Diseño y formulación de instrumentos de gobernanza forestal propios con el Concejo Comunitario Los Andes, municipio de Puerto Asís (Putumayo),
        Se formuló el Plan  de Manejo Forestal Comunitario de 750 ha para el Resguardo de Calarcá, en el Municipio de Puerto Leguízamo (Putumayo), con 3 unidades de corte anuales de 250 hectáreas cada una.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7719,
            'year' =>2,
            'value' => 2,
            'description' => 'Proyecto: “IMPLEMENTACIÓN DE ESTRATEGIAS DE USO Y MANEJO 
        SOSTENIBLE DEL TERRITORIO CON EL ESTABLECIMIENTO DE SISTEMAS 
        AGROFORESTALES CON AZAI (EUTERPE OLERACEA) EN LOS RESGUARDOS 
        VILLACATALINA, ALPAMANGA Y WASIPANGA DEL MUNICIPIO DE PUERTO GUZMÁN, 
        PUTUMAYO”, se han cumplido las siguientes metas y/o productos:
        Establecimiento de sistemas agroforestales con Acai (Euterpe oleracea): 60 has
        Gira de 30 beneficiarios a Corpocampo Puerto Asís 
        Gira de formación de 9 jóvenes indígenas
        Construcción de manual técnico de SAF
        Recorridos territoriales en resguardo Alpamanga para inventario forestal en proceso de construcción de plan de manejo forestal Acai (Euterpe precatoria). 
        Asistencia técnica a beneficiarios',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7720,
            'year' =>2,
            'value' => 50,
            'description' => 'Implementación de acciones para mitigar la deforestación y degradación de 
        los bosques en el marco de la Sentencia 4360 de 2018 en áreas de comunidades étnicas de 
        los Departamentos de Caquetá y Putumayo”.
        El proyecto se ejecuta a través del convenio interadministrativo N° 556 de 2020 suscrito entre la 
        Organización de los Pueblos Indígenas de la Amazonía Colombiana - OPIAC y CORPOAMAZONIA; 
        para el 2021 se avanzó en las siguientes actuaciones:
        Se realizo la selección de 125 familias de las comunidades étnicas de los resguardos Aguas Negras, 
        La Niñera y Líbano del Municipio de Solano (Caquetá); y el resguardo de Calarcá y Concejo 
        comunitario Los Andes en el departamento del Putumayo',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7721,
            'year' =>2,
            'value' => 1,
            'description' => 'En ejecución Proyecto: “Fortalecimiento de espacios  de transmisión de conocimientos y 
        prácticas ancestrales, gobernabilidad, identidad cultural y territorio, en la comunidad monilla amena del municipio 
        de puerto asís, departamento del putumayo”
        
        Proyecto “Caracterización de especies de importancia biológica y cultural, como estrategia de rescate del conocimiento 
        tradicional de la biodiversidad en el territorio ancestral de la comunidad Inga de Puerto Limón”',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7722,
            'year' =>2,
            'value' => 1,
            'description' => '4 Instituciones etnoeducativas Fortalecidas en temas de educación ambiental propia. 
        I.E Inga Atun lachai.
        I.E Aborigenes de Colombia
        I.E Rural de Tesalia
        I.E Puerto limón
        
        Estrategias de Educación Ambiental Propia
        Siembra de 2.000 Plántulas maderables y frutales.
        30 Padres de familia Capacitados en adecuación de terreno para la chagra.
        Reforestación de ¼ ha con 279 plántulas maderables y frutales
        Construcción de un recetario de plántulas medicinales y aromáticas.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7723,
            'year' =>2,
            'value' => 2,
            'description' => 'Estrategias de fortalecimiento de gobierno propio apoyadas.
        Las temáticas que se han abordado con estas comunidades son las siguientes: Pre Consulta y Apertura
        Análisis e identificación de Impactos y Formulación de Medidas de Manejo
        Consulta previa para la aplicación de TEST DE PROPORCIONALIDAD.
        Etapa de formulación de acuerdos 
        Reunión de consulta previa en etapa de Pre consulta y Apertura
        Consulta previa concertación 
        Análisis e identificación de impactos
        Conceptualización de gobernabilidad y gobierno propio
        Importancia del territorio y gobernabilidad
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        
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
