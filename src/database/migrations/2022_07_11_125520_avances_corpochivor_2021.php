<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorpochivor2021 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 9369,
            'year' =>2,
            'value' => 100,
            'description' => 'Acompañamiento tecnico a 61 negocios verdes registrados desde el año 2017 al 2021. ',
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
            'activity_id' => 9370,
            'year' =>2,
            'value' => 4,
            'description' => 'Atención a 35 solicitudes con viabilidad de ser negocio verde, de los cuales para esta vigencia se verificaron y cumplieron con todos los criterios 8. de los cuales se reportan 4 como meta 2021, y se compensa con 4 la meta rezagada del año 2020.
        
        NOTA: Para el cumplimento de la meta y verificación de 4 más, no se requirió ni requiere adición de recursos específicos ni modificación del POA, toda vez que la dinámica del proceso de verificación es constante y se atienden y revisan las solicitudes de ingreso que van llegando, de las cuales en la medida de su nivel de cumplimento de los requisitos avanzan a categoría de negocio verde verificado y otros continúan el proceso hasta lograr avanzar. 
        
        Este trabajo de verificación hace parte de las actividades contractuales del equipo de profesionales vinculados al proyecto; así mismo, el rezago del periodo 2020, que se empieza a ajustar en el periodo 2021, corresponde también a las limitaciones que en su momento por pandemia y restricciones de movilidad se presentaron para procesos de verificación, que ya con la apertura se lograron empezar a programar.',
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
            'activity_id' => 9371,
            'year' =>2,
            'value' => 2,
            'description' => 'Meta cumplida con la participacion en 2 eventos 1 a nivel local ( IV feria de negocios verdes, Garagoa) y uno (1) a nivel nacional BIOEXPO Medellin 2021.',
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
            'activity_id' => 9372,
            'year' =>2,
            'value' => 2,
            'description' => 'Meta cumplida 2 alianzas gestionadas y ajecutadas.',
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
            'activity_id' => 9373,
            'year' =>2,
            'value' => 0,
            'description' => 'N/A',
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
            'activity_id' => 9374,
            'year' =>2,
            'value' => 100,
            'description' => 'Expedicion Resoluion 1767 que reglamenta el uso sello del AVAL DE CONFIANZA DE NEGOCIOS VERDES
        Se otorgo el SELLO DE AVAL a  5 Negocios verdes.',
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
            'activity_id' => 9375,
            'year' =>2,
            'value' => 1,
            'description' => 'Se apoyo el proceso de innovacion con la implementacion de tecnologias limpias en el sector de Turimso de naturaleza, con el apoyo a 6 alojamiento rurales.',
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
            'activity_id' => 9376,
            'year' =>2,
            'value' => 100,
            'description' => 'Se atendieron 158 solicitudes referentes a PUEAA`s de las cuales 50 fueron evaluaciones y 108 diferentes actuaciones relacionadas con los mismos; se aprobaron 24, en trámite con requerimiento se encuentran actualmente 23 y solicitudes en curso 23.
        
        EVALUADOS: 50
        APROBADOS: 24
        EN TRÁMITE: 23
        Solicitudes en curso: 23
        
        ♠PLANES DE FERTILIZACIÓN: Se ha atendido  el 100%, correspondiente a 21 solicitudes, evaluación de informacón, visitas y/o envío de información.',
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
            'activity_id' => 9377,
            'year' =>2,
            'value' => 1,
            'description' => 'En el acompañamiento a las jornadas de recolección de envases de plaguicidas se realizaron un total de 136 actuaciones, en 22 municipios, recolectando más de 40 Toneladas de este tipo de residuos, sensibilizando a 1977 personas, respecto al manejo adecuado de los mismos.
        
        En articulación con la Gobernación de Boyacá, autoridades ambientales, Grupo RETORNA, Programas Posconsumo, administraciones municipales y empresas de servicios públicos, se realizó jornada de recolección de residuos Posconsumo “RECICLA POR LA VIDA”, en la cual se logró la recolección de más de 20 toneladas de residuos de RAEE, aceite de cocina usado, medicamentos vencidos, pilas, luminarias, llantas usadas, computadores y periféricos, baterías plomo ácido y material ferroso, en los municipios de la jurisdicción de Corpochivor.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9378,
            'year' =>2,
            'value' => 2,
            'description' => 'NNODO MÁRQUEZ: Acompañamientos en los municipios de Boyacá, Ciénega, Ramiriquí, Tibaná, Nuevo Colón, Turmequé, Viracachá, Jenesano, Úmbita y Ventaquemada Convenio 031/2014 mediante el desarrollo de mesas de trabajo con los involucrados; destacando el acompañamiento y seguimientos a las plantas mecanicobiológicas, localizadas en los municipios de Turmequé, úmbita y Ramiriquí.
        
        NODO GARAGOA: Se apoya en el acompañamiento del proyecto regional, a través de la asistencia a reuniones en el MVCT, PDA, municipios, Contraloría General de la República, Gobernación de Boyacá y veedores ciudadanos; y participación en la Mesa departamental de residuos donde se realiza seguimiento al avance del mismo, de igual manera se realiza seguimiento a equipos dados en Comodato a EPGA SA.ESP, entregados desde el año 2010.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9379,
            'year' =>2,
            'value' => 3,
            'description' => 'Se brinda acompañamiento a la totalidad de sistemas existentes en la jurisdicción, sin embargo, se priorizaron los sistemas de transformación y aprovechamiento de residuos existente en los municipios de Turmequé, Úmbita y Chinavita, 
        ',
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
            'activity_id' => 9380,
            'year' =>2,
            'value' => 25,
            'description' => 'Se realiza seguimiento a los Planes de Gestión Integral de Residuos Sólidos – PGIRS, en metas de aprovechamiento en los veinticinco (25) municipios de la jurisdicción.
        
        Durante el año 2021, se participó en las diferentes reuniones desarrolladas por la Mesa Interinstitucional de Residuos de Boyacá, donde se realiza presentación de los avances de implementación y estado de los PGIRS de la jurisdicción.
        
        Asistencia y participación en el comité coordinador del PGIRS de los municipios de Almeida, Viracachá, Ventaquemada, Úmbita, Ramiriquí, Boyacá, Guateque, Campohermoso, Chinavita, Chivor, Somondoco, Tenza y Turmequè. ',
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
            'activity_id' => 9381,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realiza actualización de la Base de Datos de Generadores de Residuos Peligrosos RE-AA-25, donde se tiene un inventario total de 379 Establecimientos Generadores de Respel. 
        
        Seguimiento al 100% de los establecimientos generadores de residuos peligrosos contemplados en las bases de datos de Corpochivor.
        ',
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
            'activity_id' => 9382,
            'year' =>2,
            'value' => 1,
            'description' => 'Seguimiento y actualización al Plan de Acción del PLAN DE GESTIÓN INTEGRAL DE RESIDUOS PELIGROSOS - PGIRESPEL 2020-2023 de la jurisdicción.
        
        Validación y transmisión de información reportada por los usuarios inscritos en los aplicativos de Registro de Generadores de Residuos Peligrosos y RUA Sector Manufacturero; a la fecha y acorde con las sábanas de información que proporciona el aplicativo, se tiene un total de 76453 kg de Respel gestionados adecuadamente.
        Registro RESPEL: 44
        RUA: 3
        PCB: 6',
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
            'activity_id' => 9383,
            'year' =>2,
            'value' => 1,
            'description' => 'La esterategia consiste en un trabajo continuo en acciones de sensibilización en los 25 municipios, donde se resalta: 
        
        ♠ Acompañamiento a los municipios en jornadas de sensibilización a usuarios del servicio público de aseo y sectores productivos en manejo de residuos sólidos, desarrollando de manera presencial 224 acompañamientos, con un alcance de 5601 personas sensibilizadas.',
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
            'activity_id' => 9384,
            'year' =>2,
            'value' => 1,
            'description' => 'Se resalta el trabajo adelantado a través de las siguientes convocatorias:
        
        -	“ECOHOSPITAL BOYACÁ”, mediante la cual se invita pretende incentivar a las Empresas Sociales del Estado de la jurisdicción a implementar estrategias y/o proyectos de economía circular encaminados a la conservación del ambiente. A través de esta estrategia se entregó un kit solar como incentivo a la E.S.E Centro de salud de Ventaquemada por su excelente desempeño sanitario y ambiental. 
        
        -	“TRANSFORMANDO RESIDUOS - CONSTRUYENDO SONRISAS”, estrategia dirigida a las instituciones educativas públicas rurales de la jurisdicción de Corpochivor, con el objetivo incentivar la conservación y preservación de los recursos naturales desde las instituciones educativas de la jurisdicción mediante la implementación de acciones de economía circular, en 15 municipios y 18 instituciones. Mediante la cual la I.E Nacionalizada Técnica Agropecuaria -Sede Vista hermosa del municipio de Campohermoso se hizo acreedora de un parque ecológico elaborado en madera plástica. 
        
        -	Como estrategia para disminuir del uso de bolsas plásticas, se sensibiliza a la comunidad mediante la entrega de bolsas ecológicas y canastos en los municipios de la jurisdicción.
        
        -	Se brinda asesoría técnica y se socializan requisitos ambientales necesarios para el desarrollo de la actividad porcícola a usuarios del sector ubicados en la jurisdicción, con la participación de 
        
        -	Se firmó la agenda ambiental entre el subsector Porcícola – Porkcolombia y la Corporación Autónoma Regional de Chivor - CORPOCHIVOR con el fin de aunar esfuerzos para el fomento del cumplimiento normativo ambiental de las granjas de la región y lograr el uso eficiente de recursos naturales y la reducción de impactos generados por esta actividad.',
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
            'activity_id' => 9385,
            'year' =>2,
            'value' => 100,
            'description' => 'Como instrumentos de apoyo a la implementación y el seguimiento multitemporal al avance de las directrices, estrategias y lineamientos del Plan de Ordenación Forestal (POF) adoptado legalmente mediante acuerdo No. 05 del 27 de marzo de 2019, que definió una línea base de 7 criterios y 14 indicadores (C&I), se generó el documento de “Evaluación línea base de criterios e indicadores Plan de Ordenación Forestal Corpochivor, vigencia 2021”.  ',
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
            'activity_id' => 9386,
            'year' =>2,
            'value' => 100,
            'description' => 'Se desarrollaron actividades para la Administración del Recurso Forestal, para lo cual se dio atención a las siguientes solicitudes: 1) Registros de Plantaciones Forestales: 16 registros otorgados, 0 en trámite, 2 solicitudes en revisión y 1 desistimiento. 2) Aprovechamiento Forestal: 23, aprovechamientos otorgados, 9 en trámite, 8 solicitudes en revisión y 3 desistimiento; 3) Salvoconductos de movilización de madera:  28 otorgados, 0 en trámite, 3 solicitudes en revisión y 1 desistimiento; 4) Registro Libros de operación forestal: 3 registros otorgados, 0 en trámite, 0 solicitudes en revisión y 0 desistimiento. 5) Árboles en riesgo: 35 autorizados, 2 en trámite, 0 solicitudes en revisión y 0 desistimiento.',
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
            'activity_id' => 9387,
            'year' =>2,
            'value' => 155,
            'description' => 'En el marco del Programa de Forestería Comunitaria (PFC), se avanzó en el establecimiento de sistemas forestales con un total de 178,7 hectáreas, con la participación de 403 Usuarios. ',
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
            'activity_id' => 12576,
            'year' =>2,
            'value' => 250,
            'description' => 'En el marco del Programa de Forestería Comunitaria (PFC), se avanzó en el mantenimiento de sistemas forestales con un total de 267,6 hectáreas, con la participación de 462 Usuarios.',
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
            'activity_id' => 9389,
            'year' =>2,
            'value' => 268495,
            'description' => 'Se avanzo con la incorporación de 275.964 plántulas forestales, de las cuales 52.756 para mantenimiento y 223.208 para el establecimiento de sistemas forestales',
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
            'activity_id' => 9390,
            'year' =>2,
            'value' => 109,
            'description' => 'En el marco de la Tercera fase de implementación del esquema ERSA, se realizó la intervención de 12 predios con un área objeto de restauración con fines de recuperación de 467,7 hectáreas, mediante la instalación de 14.490 metros lineales de cercas de protección. ',
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
            'activity_id' => 9391,
            'year' =>2,
            'value' => 20,
            'description' => 'En el marco de la Tercera fase de implementación del esquema ERSA, se realizó la intervención de 7 predios con un área objeto de restauración con fines de recuperación de 25,48 hectáreas, mediante la instalación de 4.827 metros lineales de cercas de protección. ',
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
            'activity_id' => 9392,
            'year' =>2,
            'value' => 2,
            'description' => 'En el marco del Sistema de Monitoreo de Bosques y Áreas de Aptitud Forestal (SMByAAF) de Corpochivor y de la implementación de la tercera fase del Esquema de Retribución por Servicios Ambientales (ERSA), se generaron los siguientes documentos técnicos: 1) Se actualizó y genero el documento técnico denominado “Metodología Áreas de importancia estratégica base para la implementación del Esquema de Retribución por Servicios Ambientales (ERSA), y del mecanismo Reducción de Emisiones por Deforestación y Degradación (REDD+) de Corpochivor. 2) Mediante la aplicación de 159 encuestas, dando cobertura a 97 veredas de 18 de los 25 municipios de la jurisdicción, así como de la revisión de información secundaria socioeconómica, ambiental y cultural del territorio, así como del levantamiento de información primaria de asistentes a talleres desarrollados en el marco del Convenio de Asociación No. 005-21, se generó el documento denominado: “Caracterización socioeconómica de beneficiarios del Esquema de Retribución por Servicios Ambientales (ERSA)”. ',
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
            'activity_id' => 9393,
            'year' =>2,
            'value' => 1500,
            'description' => 'En desarrollo de la Tercera Fase de implementación del Esquema de Retribución por Servicios Ambientales (ERSA), mediante el Esquema de Pago de Servicios Ambientales (PSA), se ratificaron 47 Usuarios beneficiados y se suscribieron 29 nuevos Acuerdos de conservación y Uso Sostenible, con los cuales se protegen 456 hectáreas para la generación de servicios ecosistémicos. Mediante el mecanismo para la Reducción de Emisiones por Deforestación y Degradación (REDD+), se ratificaron 88 Usuarios beneficiados y se suscribieron 12 nuevos Acuerdos e conservación y Uso Sostenible, con los cuales se preservan 2.344 hectáreas para la reducción de emisiones de CO2. Para la vigencia 2021 se tiene 176 Acuerdos de conservación y Uso Sostenible vigentes con los cuales se protegen 2.800 hectáreas. ',
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
            'activity_id' => 9394,
            'year' =>2,
            'value' => 7,
            'description' => '● Se desarrollaron mesas de trabajo con nueve (9) líderes de proyectos institucionales para realizar la socialización de las actividades a desarrollar en la vigencia 2021 a los seis (6) Planes de manejo de los Distritos Regionales de Manejo Integrado (DRMI) vigentes y un (1) plan de manejo del acotamiento de la laguna La Calderona.
        ● Se realizó jornada de monitoreo de biodiversidad en los DRMI del páramo cristales, castillejo o guachaneque, Páramo Mamapacha y Bijagual
        ● Caracterización de los senderos: Guanachas, Guacheneque y Reserva Natural Los Cristales
        ● Talleres prácticos sobre el manejo adecuado de residuos sólidos en los municipios de Turmequé,  La Capilla, Pachavita, Ventaquemada, Macanal
        ● Promoción de  jornadas con la empresa Campo Limpio para recolección para manejo adecuado de residuos de Agroquímicos 
        ● Capacitaciónes en  implementación de los programas de uso eficiente y ahorro del agua, en los municipio de Turmequé, La Capilla, Ventaquemada, Somondoco,Chivor, Macanal.
        ● Intercambio de experiencias con la comunidad; para el fortalecimiento a grupos comunitarios en la vereda La Mesa del municipio de Macanal.
        ● Adquirieron cinco (05) predios de interés hídrico ubicados dentro del área declarada Cucchilla Negra y Guanaque en el municipio de Macanal.
        ● Suscripción de convenio de cooperación con el IAvH, por un valor de $336.000.000, para la conservación ambiental del complejo de páramo Rabanal – Río Bogotá.
        ● Operativo para el control de tráfico ilegal de flora y fauna silvestre en área de influencia del DRMIs Páramo Mamapacha y Bijagual, Cuchilla Negra, Rabanal.
        ● Se realizó  un (1) Intercambio de experiencias con la comunidad; para el fortalecimiento a grupos comunitarios en la vereda La Mesa del municipio de Macanal del DRMI Cuchilla El Varal.
        ● En trabajo conjunto con el proyecto institucional de planificación y ordenamiento ambiental del territorio, se realiza el ajuste de los informes de seguimiento a corte 2020 de los planes de manejo de DRMI Cuchilla Negra y Guanaque, DRMI Cuchilla El Varal, DRMI Cuchilla San Cayetano, DRMI Páramo Rabanal, DRMI Páramo Mamapacha Bijagual, (DRMI) (DRMI) Páramo Cristales, Castillejo  o Guachaneque.   
        ● Vinculación de doce (12) gestores de páramos de los municipios de: La Capilla, Pachavita, Umbita y Turmequé para el apoyo en procesos de seguimiento y/o monitoreo a 79 predios de interés hídrico dentro del área protegida. 
        ●  Suscripción de cuatro (04) Incentivos a la conservación con los usuario de los municipios de Umbita y La Capilla.
        ●  Caracterización del sendero Guanachas, sendero Guacheneque y sendero Reserva Natural Los Cristales como recursos potenciales asociados al DRMI para promover el turismo de naturaleza.
        ●  Establecimiento de 1,81 ha en proceso de restauración en el municipio de Umbita 
        ●  El inventario y diagnóstico de acueductos y usuarios representativos de recurso hídrico, el cual data de 90 personas naturales y 56 acueductos para el área protegida (DRMI) Páramo Cristales, Castillejo  o Guachaneque. 
        ● Se apoyó en el fortalecimiento de negocios verdes de alta montaña, con la participación de 9 negocios verdes en la Feria BIOEXPO 2021. 
        ● Se realizó el fortalecimiento de actividades productivas sostenibles dentro de los ecosistemas de alta montaña, especialmente las enfocadas al turismo de naturaleza, a través de la ENTREGA DE ELEMENTOS DE VISIBILIDAD, SEGURIDAD Y GUIANZA A LAS ORGANIZACIONES Y/O GUÍAS DE TURISMO DE NATURALEZA DE ALTA MONTAÑA y la capacitación en temas de PRIMEROS AUXILIOS Y BUENAS PRÁCTICAS DE PRESTADORES DE SERVICIO DE TURISMO DE NATURALEZA, a 9 organizaciones y/o guías de turismo de naturaleza de alta montaña.
        ● Se realizo gira de intercambios de conocimientos involucrando a los actores de turismo rural comunitario, con el fin de fortalecer los procesos de turismo de naturaleza y apoyar la reactivación turística en la alta montaña.
        ● Monitoreo de biodiversidad en el DRMI Páramo Mamapacha y Bijagual, con registros de la presencia de oso andino (Tremarctos ornatus), jaguar (Panthera onca) y águila real de montaña (Spizaetus isidori).
        ● Celebración del convenio Interadministrativo 022-21 cuyo objetivo es la compra del predio de interés hídrico “LA LINA” con una extensión total de 99.5 ha ubicado en la vereda  Ciénega Valvanera, en el municipio de Garagoa.
        ● Celebración del convenio de asociación 019-21 con la CORPORACIÓN RESPIRA TURISMO cuyo objeto es: AUNAR ESFUERZOS TÉCNICOS, ADMINISTRATIVOS Y FINANCIEROS PARA FAVORECER EL USO SOSTENIBLE DE LA GAITA (Rhipidocladum geminatum).
        ●  Celebración del convenio Interadministrativo 021-21 cuyo objetivo es la compra del predio de interés hídrico “Monserrate” con una extensión total de 22.5 ha ubicado en la vereda Molinos, en el municipio de Almeida. 
        • Se desarrolló una jornada de control y monitoreo a predios de interés hídrico, en el municipio de Ciénega, en la que además se realizó un inventario de los predios y se determinó el estado de cada uno. 
        • Se fortaleció un (1) proceso de turismo de naturaleza y uso público, dentro del complejo de humedal, a través de la entrega de kits con ELEMENTOS DE VISIBILIDAD, SEGURIDAD Y GUIANZA A LAS ORGANIZACIONES Y/O GUÍAS DE TURISMO DE NATURALEZA DE ALTA MONTAÑA y la capacitación en temas de PRIMEROS AUXILIOS Y BUENAS PRÁCTICAS DE PRESTADORES DE SERVICIO DE TURISMO DE NATURALEZA, a la organización Respira Turismo, que opera en la provincia de Márquez, incluyendo el complejo de humedales. 
        • Se llevó a cabo gira de intercambios de conocimientos involucrando a los actores de turismo rural comunitario, con el fin de fortalecer los procesos de turismo de naturaleza y apoyar la reactivación turística en la alta montaña, en los cuales se vinculó a la corporación Respira Turismo y se realizó recorrido al sendero de la Laguna la Caderona, con operadores turísticos de la jurisdicción de Corpochivor.   
        • Se realizó debida diligencia para la evaluación de criterios de elegibilidad y priorización áreas para implementar retribución por servicios ambientales, se suscribió acuerdos de conservación y se otorgó incentivo a la conservación en el marco de del esquema ERSA, a dos usuarios, abarcando 6.2 hectáreas, en el área de influencia de la Laguna La Calderona.',
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
            'activity_id' => 9395,
            'year' =>2,
            'value' => 10,
            'description' => '●	Participación y aprobación del curso virtual “Valoración Económica Ambiental” desarrollado por la oficina de Negocios Verdes y Sostenibles del Ministerio de Ambiente y Desarrollo Sostenible MADS en alianza con el proyecto Comunica y el Gobierno Canadiense.
        ●	Se llevó a cabo una (01) mesa de trabajo para la retroalimentación del avance en el curso virtual Valoración Económica Ambiental” liderado por la Coordinadora Grupo de Análisis Económico para la Sostenibilidad de la Oficina de Negocios Verdes y Sostenibles del MADS.
        ●	Formulación del plan de trabajo para realizar la valoración económica ambiental en un ecosistema de humedal presente en la jurisdicción, siguiendo los lineamientos establecidos en la guía de aplicación de la valoración económica ambiental diseñada por la Oficina de Negocios Verdes y Sostenibles del MADS.
        ●	Delimitación geográfica del ecosistema de humedal priorizado (Laguna La Calderona, Ciénega Boyacá) para la valoración económica ambiental.',
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
            'activity_id' => 9396,
            'year' =>2,
            'value' => 100,
            'description' => '●	Dentro de la vigencia 2021, se atendieron el 100% de ejemplares de fauna recepcionados por la corporación así: ciento noventa (190) ejemplares (53 mamíferos, 63 aves, 15 reptiles, 59 Aracnidos), de los cuales ciento cuatro (104) fueron rescatados, con el apoyo de la Policía Nacional, cuerpo voluntario de bomberos, la comunidad y funcionarios de la Concesión del SISGA; veintidós (22) fueron entregados voluntariamente, cuatro (4) mediante procesos decomisos adelantada por Secretaría General y una (1) remisión de otra entidad. De estos, 79 fueron liberados en su hábitat natural (ecosistemas estratégicos) después de un proceso de valoración y/o rehabilitación exitosa ',
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
            'activity_id' => 9397,
            'year' =>2,
            'value' => 3,
            'description' => '●  Se desarrollo Estrategias para el  actividades de manejo, control y erradicación del caracol africano (Achatina fulica) en los municipio de Santa Maria y San Luis de Gaceno, Implementando las siguientes acciones:
        - Jornadas de sensibilización sobre el manejo y control de la especie invasora, con las comunidades.
        -Jornadas de recolección de la especie en el municipio de Santa María y San Luis Gaceno.
        -Instalación de cinco (05) trampas como estrategias para el control, erradicación y disposición final de Caracol Gigante Africano (Achatina fulica
        ●  Estrategia denominada PROCEDIMIENTO PARA LA ATENCIÓN DE INTERACCIONES NEGATIVAS CON GRANDES CARNIVOROS donde implemento las siguientes actividades:
        - Atención a  visitas por conflicto de fauna silvestre en los municipios de Campohermoso, Ciénega, Garagoa, Ramiriquí, San Luis de Gaceno, Macanal y Nuevo Colón, donde se implemento estrategias de mitigación, métodos de ahuyentamiento para los ataques presentados y diagostico de los posibles causas del conflicto, sencibilización de la importancia de la conservación de las diferentes especies de fauna silvestre y monitoreo participativo de biodiversidad faunística en el área de influencia.
        ● Estrategia para el  manejo y control de bambú andino o chusque (Chusquea scandens) donde implemento las siguientes activiades:
        Visitas técnicas y conceptos técnicos con recomendaciones para controlar el crecimiento y  expansión del bambú andino o chusque (Chusquea scandens) en atención a solicitudes allegadas. ',
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
            'activity_id' => 9398,
            'year' =>2,
            'value' => 100,
            'description' => 'Se atendieron trece (13) solicitudes de permiso de investigación, allegadas por el Ministerio de Ambiente, La Universidad Nacional de Colombia y El ANLA para el desarrollo de actividades de Investigación científica con fines No Comerciales y para Estudios Ambientales.',
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
            'activity_id' => 9399,
            'year' =>2,
            'value' => 9,
            'description' => 'En conjunto con la Secretaría de Medio Ambiente de la Gobernación de Boyacá, y con el fin de ejecutar actividades de cofinanciación para la adquisición de predios de interés hídrico en la jurisdicción, se adquirieron 22,5 Has en el municipio de Almeida y 99,5Has en Garagoa',
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
            'activity_id' => 9400,
            'year' =>2,
            'value' => 100,
            'description' => '●	Se atendieron cincuenta (50) solicitudes con el fin de determinar viabilidad para adquisición de sesenta y dos (62) predios de interés hídrico evaluándose un total de 2251,15 has, y viabilizando 586,26 has, en los municipios de Jenesano, Chivor, Ramiriquí, Garagoa, Guayatá, Somondoco, Nuevo Colón, Ciénega, Macanal, Chinavita, Almeida y Tibaná, Ventaquemada, Santa María, Viracachá, Úmbita, Boyacá, Turmequé y Pachavita.',
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
            'activity_id' => 9401,
            'year' =>2,
            'value' => 0,
            'description' => 'NO APLICA PARA VIGENCIA 2021',
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
            'activity_id' => 9402,
            'year' =>2,
            'value' => 1,
            'description' => '  Se ejecutó el Convenio de Asociación No 015-20 suscrito con el Instituto Ambiental de Estocolmo, cuyo objeto fue: “BRINDAR ASISTENCIA TÉCNICA Y FORTALECER LA CAPACIDAD INSTITUCIONAL EN EL MANEJO DEL SISTEMA SOPORTE WEAP PARA LA ACTUALIZACIÓN DE LOS INDICADORES DE LA EVALUACIÓN REGIONAL DEL AGUA – ERA Y EXTENDER EL USO PARA EL APOYO DE OTRAS DECISIONES DE PLANIFICACIÓN Y GESTIÓN INTEGRAL DEL RECURSO HÍDRICO”, el cual permitió el diseño y construcción de las siguientes herramientas :
        
        - Estimación del caudal mínimo en cada microcuenca, de acuerdo con criterios hidrológicos.
        - Análisis de rangos de indicadores de la ERA para condiciones regionales y ajuste de acuerdo con escala.
        - Evaluación de permisos de concesión de aguas.
        - Cálculo de caudal unitario en otros cuerpos de agua que no están en el modelo.
        - Complementar la herramienta de visualización de los resultados de la ERA para la determinación de los indicadores de oferta, demanda, calidad y vulnerabilidad del agua.
        - Diseño del código y herramienta de apoyo.
        - Diseño de visualizaciones y guía del usuario.
        
          Se brindó alrededor de 24 talleres de entrenamiento al personal técnico del proyecto, logrando transferir conocimiento al personal de CORPOCHIVOR y certificar el manejo de la herramienta WEAP para la toma de decisiones en la gestión del agua.',
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
            'activity_id' => 9403,
            'year' =>2,
            'value' => 0,
            'description' => 'NO APLICA PARA VIGENCIA 2021',
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
            'activity_id' => 9404,
            'year' =>2,
            'value' => 60,
            'description' => 'Mediante Resoluciones No. 0087 de fecha 21 de mayo de 2021 emitida por la Corporación Autónoma Regional de Cundinamarca -  CAR y 374 de fecha 21 de mayo de 2021 emitida por la Corporación Autónoma Regional de Chivor – CORPOCHIVOR, se declaró “…en ordenamiento el recurso hídrico superficial en la subzona hidrográfica del río Garagoa y sus principales tributarios, ríos Albarracín - Turmequé, Bosque, Fusavita, Súnuba, Machetá, Guatanfur, Batá, quebrada La Guaya y embalse La Esmeralda en el área de jurisdicción de la Corporación Autónoma Regional de Chivor – CORPOCHIVOR y de la Corporación Autónoma Regional de Cundinamarca – CAR”. Acto Administrativo publicado en el Boletín Oficial de la Imprenta Nacional el día 26 de mayo de 2021. 
        
        Se adelanta el diagnóstico de la situación ambiental actual de la subzona hidrográfica del río Garagoa y sus principales tributarios, ríos Albarracín - Turmequé, Bosque, Fusavita, Súnuba, Machetá, Guatanfur, Batá, quebrada La Guaya y embalse La Esmeralda, involucrando variables físicas, químicas, bióticas y aspectos antrópicos que influyen en la calidad y cantidad del recurso.
        
        -Censo de Usuarios del Recurso Hídrico Superficial: Para la vigencia 2021, se realizó la verificación en campo del censo de censo del recurso hídrico, con el fin de estructurar la base de datos final en la jurisdicción de Corpochivor, para finalmente realizar el documento soporte de esta actividad caracterizando los usos potenciales por microcuenca. Se aclara, que actualmente se adelanta el censo de usuarios en jurisdicción CAR.
        
        - En compañía de la líder del proyecto y el componente de calidad, con las Alcaldías Municipales y los responsables de la Prestación de Servicios Públicos Municipales, en las cuales se dan a conocer las generalidades del proyecto (alcance, tiempo, actividades e implicaciones), así como se establecen los principales compromisos de cada entidad durante la ejecución del PORH en cuanto a la implementación de la estrategia de participación social, de todos los municipios del área de influencia del proyecto PORH. ',
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
            'activity_id' => 9405,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizaron dos pruebas de bombeo en los pozos de observación de AVITENZA y FRIGOVATENZA, ubicados en los municipios de Tenza y Guateque respectivamente, con el fin de conocer las propiedades hidráulicas del acuífero en estos dos pozos.
        
        Desde el mes de marzo de 2021 y con una periodicidad mensual se ha desarrollado el monitoreo de isotopía al sistema acuífero Súnuba en 10 puntos de la cuenca sobre fuentes meteóricas, superficiales y subterráneas; las muestras han sido analizadas en el laboratorio de asuntos nucleares del Servicio Geológico Colombiano, con el cual se suscribió el convenio interadministrativo No. 021-20, con un plazo de cinco (5) años. Así mismo durante la campaña se desarrolló el monitoreo de calidad y cantidad sobre los mismos puntos.
        
        Se recibió capacitación por parte de profesionales del laboratorio de Asuntos Nucleares del Servicio Geológico Colombiano, en temas de toma de muestra, almacenamiento, embalaje y envió, para las campañas de monitoreo de isotopía del sistema acuífero Súnuba.',
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
            'activity_id' => 9406,
            'year' =>2,
            'value' => 100,
            'description' => 'Se atendieron los siguientes trámites:
        *267 trámites de concesiones de agua.
        *8 trámites de permisos de vertimientos.
        *23 trámites ocupaciones de cauce.',
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
            'activity_id' => 9407,
            'year' =>2,
            'value' => 40,
            'description' => 'La construcción del PIRMA se divide en dos fases principales: la planificación y la formulación. La fase inicial o de planificación cuenta con un componente de diagnóstico, el cual se ha elaborado y actualizado entre el 2020 y el 2021. El diagnóstico corresponde a un análisis de capacidades institucionales en el monitoreo del agua superficial y subterránea. Como parte de este análisis se identifican, las necesidades y problemas que se presentan en cada componente del monitoreo y que ha dificultado el logro de los objetivos planteados.  
        
        En primera instancia, se realizó la recopilación de la información disponible sobre el monitoreo de la cantidad y cantidad del agua en la jurisdicción; con este insumo de base, en 2021 se procedió a construir el diagnóstico con el acompañamiento del equipo de profesionales de Herencia Hídrica, quienes seleccionaron a Corpochivor y a Cortolima como las corporaciones beneficiarias del apoyo brindado para este proceso por parte de la Agencia de Cooperación Suiza en Colombia, el IDEAM y el Ministerio de Ambiente y Desarrollo Sostenible. 
        
        El diagnóstico o análisis de capacidades, necesidades y problemas, estuvo enfocado en cuatro componentes: estructura organizacional, talento humano, infraestructura del monitoreo, sistema de información estadístico regional ambiental, instrumentos de ordenación, planificación, reglamentación, gestión y manejo del agua, proyectos de investigación e inversión, caracterización y estimación de los componentes del sistema de monitoreo e indicadores hídricos regionales. Cada componente cuenta con una descripción específica para la capacidad institucional y un análisis de problemas y necesidades. A partir de este insumo, se construye una hoja de ruta para la planificación y formulación del PIRMA, que entre otras necesidades, plantea explícitamente la necesidad de vincular a un equipo interdisciplinario de profesionales que profundicen en el diagnóstico y construyan la matriz de marco lógico de base para la fase de formulación.
        
        En el mes de octubre se vincula a la corporación un equipo compuesto por una ingeniera ambiental, responsable del componente de calidad del agua, una geóloga responsable del componente de cantidad del agua superficial y subterránea, un ingeniero electrónico responsable del componente de gestión de la información y una administradora de empresas, responsable de realizar la valoración económica del monitoreo del agua. Este equipo ha adelantado 31 mesas técnicas con todas las dependencias de la corporación, profundizando en el análisis de capacidades, necesidades, problemas y alternativas de solución como bases para la construcción de los árboles de problemas y de objetivos, los cuales son necesarios en la consolidación de la matriz de marco lógico. 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9408,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizaron tres campañas de monitoreo de red hídrica durante la vigencia 2021, en las cuales se midieron parámetros in situ (pH, conductividad, salinidad, POR, temperatura resistividad, oxígeno disuelto y turbidez), batimetría y toma de 137 muestras de agua superficial para análisis fisicoquímicos, microbiológicos y metales, distribuidas en las corrientes principales 
        
        Atención de análisis de calidad de 49 muestras de suelo, a las cuales se les realizó análisis agronómico y ambiental según solicitudes de usuarios internos y externos, ensayos Interlaboratorios y Red de Monitoreo  de Calidad de suelo, y 399 muestras de agua.
        
        • Se suscribió contrato de recuperación contingente No. 80740-404-2021 celebrado entre FIDUPREVISORA S.A. actuando como vocera y administradora del Fondo Nacional de Financiamiento para la Ciencia, la Tecnología y la Innovación, Fondo Francisco José de Caldas y Corporación Autónoma Regional de Chivor – CORPOCHIVOR, para la ejecución del proyecto “OPTIMIZACION DEL LABORATORIO DE CALIDAD AMBIENTAL MATRIZ SUELO MEDIANTE LA ACREDITACION DE VARIABLES DEL COMPONENTE AGRONOMICO QUE PERMITA GARANTIZAR UN MEJOR SERVICIO A LAS APUESTAS PRODUCTIVAS DE LA JURISDICCION”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9409,
            'year' =>2,
            'value' => 0,
            'description' => 'N/A',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9410,
            'year' =>2,
            'value' => 100,
            'description' => '. En la priorización se tuvieron en cuenta los siguientes criterios de necesidad:
        
        o Articulación de distintas instituciones para la toma de decisiones sobre la gestión del recurso hídrico
        o Fortalecimiento y promoción de buenas prácticas en torno al uso del recurso hídrico.
        o Reconocimiento y comprensión de los conflictos asociados al uso del recurso hídrico. 
        o Integración de actores que tradicionalmente han estado marginados de la toma de decisiones frente a la gestión integral del recurso hídrico que ejerce la entidad
        o Comunicación y divulgación por parte de actores sociales de origen diverso: las entidades gubernamentales, la academia, las empresas, las ONG, las comunidades y cualquier ciudadano interesado en los procesos de gestión integral o gobernanza del agua.
        o Involucramiento de los diferentes actores y temas asociados a la gestión del agua.
        o Promoción e intercambio de saberes sobre el agua para fortalecer la gestión del conocimiento en cuanto a manejo y prevención de conflictos
        o Propiciar la participación permanente y activa de los actores presentes en los territorios para un adecuado manejo y uso eficiente del agua.
        Se realizaron mesas de trabajo entre las diferentes dependencias de la corporación, identificando al sector piscícola como prioritario para la implementación de la estrategia de gobernanza.
        
        En la identificación y reconocimiento del sector, se realizó una revisión de las concesiones de agua otorgadas para el sector piscícola en la jurisdicción, su estado y resultados del seguimiento. Además, se realizaron recorridos de campo identificando y caracterizando las producciones piscícolas existentes, destacando la elevada concentración de granjas en el área de piedemonte llanero, en los municipios de San Luis de Gaceno y Santa María. En las zonas altas de la jurisdicción, por encima de los 2400 metros de altitud se encuentran cultivos de trucha arco iris, mientras en la parte baja, por debajo de 1500 metros se ubican cultivos de mojarra roja. 
        
        La caracterización de estas producciones muestra que solo el 44% cuentan con concesión de aguas vigente, varios tienen obligaciones rezagadas, tales como la instalación de los sistemas de control de caudal y la formulación de los Programas de Uso Eficiente y Ahorro del Agua. Por otra parte, se evidenció que el 100% de las producciones piscícolas de la jurisdicción carece de permiso de vertimientos; algunas han iniciado el trámite pero no han dado cumplimiento a los requisitos para que este sea otorgado.
        
        Producto de la caracterización se identificó que en la jurisdicción se encuentran un 94% de producciones tipo AREL (Acuicultura de Recursos Limitados), 3% de pequeños acuicultores y 3% de medianos. Lo anterior indica que la piscicultura es una actividad de subsistencia principalmente, que aporta en la seguridad alimentaria de las comunidades y que la escasa formalización de los permisos se debe a los recursos económicos limitados de los productores, así como a la desinformación sobre el marco normativo que regula a este sector productivo.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9411,
            'year' =>2,
            'value' => 100,
            'description' => 'Se liquidó la Tasa por Utilización del Agua por un valor de $293.295.796, con 1.321 usuarios liquidados, de los cuales 975 son sujetos a cobro.
        Se liquidó la Tasa Retributiva por un valor de $836.111.621, para 177 usuarios liquidados.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9412,
            'year' =>2,
            'value' => 1,
            'description' => 'Se suscribió y ejecutó Convenio Interadministrativo No. 06-21 cuyo objeto es AUNAR ESFUERZOS TÉCNICOS, ADMINISTRATIVOS Y FINANCIEROS PARA COFINANCIAR LA CONSTRUCCIÓN DE SISTEMAS DE TRATAMIENTO DE AGUA RESIDUAL DOMÉSTICA, EN EL SECTOR RURAL DEL MUNICIPIO DE GUAYATÁ – BOYACÁ. Valor: $229.882.181. Alcance: 28 sistemas.
        
        Se realiza seguimiento técnico a las obras desarrolladas dentro del convenio Interadministrativo No. 013-20 cuyo objeto es AUNAR ESFUERZOS TÉCNICOS, ADMINISTRATIVOS Y FINANCIEROS PARA COFINANCIAR LA CONSTRUCCIÓN DE SISTEMAS DE TRATAMIENTO DE AGUA RESIDUAL DOMÉSTICA, EN EL SECTOR RURAL DEL MUNICIPIO DE SOMONDOCO – BOYACÁ. Valor: $229.996.942. Alcance: 28 sistemas.
        
        Se realiza seguimiento técnico a las obras desarrolladas dentro del convenio Interadministrativo 034-19, cuyo objeto es “AUNAR ESFUERZOS TÉCNICOS, ADMINISTRATIVOS Y FINANCIEROS ENTRE EL MUNICIPIO DE JENESANO Y CORPOCHIVOR PARA COFINANCIAR LA OPTIMIZACIÓN Y PUESTA EN MARCHA DE LA PLANTA DE TRATAMIENTO DE AGUA RESIDUAL DOMÉSTICA DEL CASCO URBANO EN EL MUNICIPIO DE JENESANO BOYACÁ”.
        
        Se atendieron 21 solicitudes de asesoría técnica sobre ubicación y construcción de Sistemas de Tratamiento de Aguas Residuales Domesticas – STARD en los municipios de Ventaquemada, Tenza, Turmequé, Ramiriquí y Macanal',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9413,
            'year' =>2,
            'value' => 1,
            'description' => 'En ejecución del convenio especial de cooperación No. 3615 de 2020 y en trabaja articulado entre las autoridades ambientales del departamento, se ha establecido comunicación continua con el equipo formulador del PIGCC Boyacá contribuyendo con el suministro de información para la construcción de este instrumento el cual se encuentra en su fase de 2. PERFIL TERRITORIAL.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9414,
            'year' =>2,
            'value' => 0,
            'description' => 'No tiene meta asociada para la vigencia 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9415,
            'year' =>2,
            'value' => 2,
            'description' => 'Se ejecutó el proyecto “CONSTRUCCIÓN DE TANQUES ZAMORANO COMO ESTRATEGIA DE ADAPTACIÓN AL CAMBIO CLIMÁTICO EN EL MUNICIPIO DE GARAGOA, JURISDICCIÓN DE CORPOCHIVOR” a través del cual se construyeron 15 estructuras que contribuyen con el manejo y uso eficiente del recurso hídrico, además de promover la agricultura sostenible y la implementación de prácticas agrícolas resilientes que fortalezcan la adaptación al cambio climático.
        
        Se ejecutó el proyecto “SUMINISTRO DE EQUIPOS QUE INCENTIVEN LA MOVILIDAD SOSTENIBLE COMO MEDIDA DE MITIGACIÓN DEL CAMBIO CLIMÁTICO EN EL MUNICIPIO DE GARAGOA, JURISDICCIÓN DE CORPOCHIVOR”, por medio del cual se adquirieron e instalaron cinco (5) estaciones de mecánica para bicicletas distribuidas en instituciones educativas y sitios de interés en la zona urbana del municipio de Garagoa, con el propósito fomentar la movilidad sostenible y reducir los impactos de los medios de transporte convencionales sobre el medio ambiente, disminuyendo el consumo de combustibles fósiles, la contaminación en el aire, generando el descenso de enfermedades respiratorias y aportando a la construcción de ciudades ordenadas, seguras y sostenibles.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9416,
            'year' =>2,
            'value' => 24,
            'description' => 'Acompañamiento a 141 reuniones de Consejos Municipales de Gestión del Riesgo de Desastres (CMGRD) en 24 municipios de la jurisdicción y  9 reuniones del Consejo Departamental de Gestión del Riesgo de Desastres de Boyacá (CDGRD).
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9417,
            'year' =>2,
            'value' => 8,
            'description' => 'Se lideró la elaboración de documento diagnóstico donde se identificó el estado de cada municipio (Ventaquemada, Nuevo Colón, Turmequé, Boyacá, Ramiriquí, Ciénega, Tibaná y Viracachá) respecto a los 4 componentes (Conocimiento, monitoreo, difusión y capacidad de respuesta) en áreas y escenarios de riesgo (inundaciones, avenidas torrenciales, movimientos en masa, etc) priorizadas por las entidades territoriales, teniendo en cuenta aspectos como antecedentes de eventos, condiciones geográficas e hidrometeorológicas, elementos expuestos (infraestructura, servicios, personas).
        
        En alianza con el proyecto “Administración y manejo adecuado del recurso hídrico” se inició la ejecución del proceso cuyo objeto se relaciona con el “SUMINISTRO, INSTALACIÓN Y PUESTA EN FUNCIONAMIENTO DE ESTACIONES HIDROLÓGICAS PARA EL MONITOREO DE LOS COMPONENTES OFERTA HIDRICA Y RIESGOS, EN EL ÁREA DE LA JURISDICCIÓN DE CORPOCHIVOR”, a través del cual se ampliará la red de monitoreo del recurso hídrico y condiciones de riesgo con la instalación de 6 estaciones limnimétricas y 1 estación hidrológica automática de nivel.
        
        Mediante la información generada por la red hidroclimática (compuesta por 76 estaciones públicas y privadas, operadas en alianza entre AES CHIVOR, IDEAM Y CORPOCHIVOR) se han generado alertas que fueron remitidas a los municipios para toma de medidas de prevención.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9418,
            'year' =>2,
            'value' => 8,
            'description' => 'Visitas técnicas de seguimiento y monitoreo en los municipios en los municipios de Sutatenza, Guateque,  Boyacá - Jenesano, Turmequé, Santa María, San  Luis de Gaceno, Campohermoso. Se ejecutó el proceso con el objeto PRESTACIÓN DE SERVICIOS PARA LA EJECUCIÓN DE TOMOGRAFÍAS ELÉCTRICAS RESISTIVAS (TER) EN TRES ZONAS PRIORIZADAS EN LA JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE CHIVOR, en los municipios de Boyacá y Campohermoso.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9419,
            'year' =>2,
            'value' => 25,
            'description' => '♠ Emisión de circular No. 2021ER1698 de fecha 17 de marzo de 2021, Asunto: Recomendaciones de prevención temporada de lluvias 2021, dirigida a Alcaldes Municipales, Consejos Municipales para la Gestión del Riesgo de Desastres – CMGRD, Empresas y/o Unidades de Servicios Públicos Domiciliarios, Personerías, Estaciones de policía, Cuerpos Oficiales de Bomberos, Defensa Civil e Instituciones Educativas de los 25 municipios de la jurisdicción de CORPOCHIVOR.
        ♠ Participación en el programa radial “Camino Ambiental”, con cobertura de los 25 municipios de la jurisdicción tratando temáticas como: Condiciones hidroclimáticas en la jurisdicción de CORPOCHIVOR, recomendaciones de prevención para la temporada de más lluvias, ¿Qué hace CORPOCHIVOR en gestión del riesgo?, Cambio climático y sus consecuencias para el sector agropecuario, Recomendaciones de prevención para la temporada seca
        ♠ El 22 de noviembre de 2021 se desarrolló el foro “ESTRATEGIAS DE MITIGACIÓN Y ADAPTACIÓN AL CAMBIO CLIMATICO HACIA UN TERRITORIO AGROAMBIENTAL SOSTENIBLE”, abordando temáticas como: Visión de la Federación Nacional de Cafeteros enfocada a la mitigación y adaptación al Cambio Climático en el territorio colombiano (FNC) - Dr. Raúl Jaime Hernández Restrepo, Orientaciones para la gestión del Cambio Climático en el país (MADS) - Dr. Edwin Giovanny Ortiz Rodríguez, Variabilidad y Cambio Climático en la producción porcícola (PORKCOLOMBIA) - Ing. Angela Patricia Siabato, Agricultura Climáticamente Inteligente (UPTC, grupo de investigación GIGA) - Ing. Darwin Suárez Ariza
        ♠ Se desarrollaron los procesos de socialización para la conformación de los grupos de vigías rurales para la prevención de incendios forestales con el propósito de detectar, reportar de forma oportuna esta clase de eventos amenazantes en los municipios de La Capilla, Ventaquemada, Almeida y Ciénega.
        ♠ Se ejecutó programa de capacitación denominado “Lo que debe saber sobre Movimientos en masa”, dirigido a integrantes de los Consejos Municipales de Gestión del Riesgo de Desastres – CMGRD y comunidad en general, desarrollado en los municipios de Tibaná, Pachavita, Chivor, Ventaquemada, Chivor, Úmbita y Almeida.
        ♠ Participación en 22 espacios de diálogo “Del Escritorio al Territorio”, con el objeto de promover la participación y atención a la ciudadanía con el despliegue de servicios a cada uno de los municipios de nuestra jurisdicción.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9420,
            'year' =>2,
            'value' => 3,
            'description' => 'Se ejecutó el contrato 383-21 con el objeto “COMPRAVENTA DE EQUIPOS Y/O HERRAMIENTAS PARA IMPLEMENTACIÓN DE ACCIONES DE PREVENCIÓN, MANEJO Y CONTROL DEL RIESGO DE DESASTRES EN LA JURISDICCIÓN DE CORPOCHIVOR”. Se suscribieron 3 convenios de asociación con entidad privada sin ánimo de lucro con el objeto de “AUNAR ESFUERZOS TÉCNICOS, ADMINISTRATIVOS Y FINANCIEROS PARA LA IMPLEMENTACIÓN DE ACCIONES EN PREVENCIÓN, MANEJO Y CONTROL DEL RIESGO DE DESASTRES EN LA JURISDICCIÓN DE CORPOCHIVOR”, a través de los cuales se realizaron actividades de capacitación, concientización de las comunidades rurales y fortalecimiento de las capacidades de respuesta de las entidades operativas Cuerpos de Bomberos Voluntarios de los municipios de Ciénega, Campohermoso y Nuevo Colón.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9421,
            'year' =>2,
            'value' => 4,
            'description' => 'Se coordinaron cuatro campañas de limpieza de cauces que generan riesgo para la población e infraestructura por acumulación de residuos sólidos y material vegetal, induciendo escenarios de amenaza por inundaciones y avenidas torrenciales, en los municipios de Chinavita, Santa María, San Luis de Gaceno y Tibaná.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9422,
            'year' =>2,
            'value' => 3,
            'description' => 'Se ejecutó el contrato 334-21 con el objeto “ELABORAR ESTUDIOS Y DISEÑOS DE OBRAS PARA MITIGACIÓN DEL RIESGO DE DESASTRES EN TRES ZONAS PRIORIZADAS EN LA JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE CHIVOR” , en los municipios de Campohermoso (Caño El Chircal), Chivor (Perímetro urbano - Quebrada Juan Ángel) y Sector La Frontera en límite de los municipios de Chinavita y Pachavita (Río Garagoa).
        
        Se inició la ejecución del proceso que tiene por objeto la “EJECUCIÓN DE ACTIVIDADES PARA LA RECUPERACIÓN DE LA SECCIÓN HIDRAULICA DEL CAUCE EN PUNTOS CRÍTICOS DE LA JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE CHIVOR – CORPOCHIVOR”, a través del cual se realizará la construcción de jarillones como medida de protección ante procesos de socavación lateral sobre el Río Jenesano, reduciendo la probabilidad de materialización de escenarios de riesgo por inundaciones, tomando como precedente las afectaciones registradas en el fenómeno de La Niña 2010 – 2011.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9423,
            'year' =>2,
            'value' => 100,
            'description' => 'Se atendió el 100% de las solicitudes presentadas por la comunidad o alcaldías municipales, con un total de ciento cincuenta y cinco (155) visitas de valoración de zonas afectadas por riesgos con emisión de conceptos técnicos con recomendaciones de manejo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9424,
            'year' =>2,
            'value' => 2,
            'description' => ' Se inició la ejecución del contrato No. 316-21 con el objeto de “REALIZAR LOS ESTUDIOS BÁSICOS POR PROCESOS DE INUNDACIÓN, AVENIDAS TORRENCIALES Y MOVIMIENTOS EN MASA EN LA ZONA URBANA DEL MUNICIPIO DE PACHAVITA, JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE CHIVOR - CORPOCHIVOR” . Área urbana actual: 25 Ha, Área de estudio 60 Ha.
        
         Se inició la ejecución del proceso con el objeto de “REALIZAR LOS ESTUDIOS BÁSICOS POR PROCESOS DE INUNDACIÓN, AVENIDAS TORRENCIALES Y MOVIMIENTOS EN MASA EN LA ZONA URBANA DEL MUNICIPIO DE CHIVOR, JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE CHIVOR - CORPOCHIVOR”. Área de estudio 40 Ha.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9425,
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
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9426,
            'year' =>2,
            'value' => 25,
            'description' => 'Se creo portal denominado DETERMINANTES AMBIENTALES JURISDICCIÓN DE CORPOCHIOVOR, con cuatro carpetas denominadas: 1. Planes de Ordenamiento Territorial: se encuentra publicada la cartilla de ordenamiento territorial. 2. Determinantes ambientales resolución 923 de 2020:  se encuentran publicadas una a una de las determinantes de la jurisdicción de Corpochivor, según los cuatro ejes temáticos (cambio climático y gestión del riesgo, medio natural, medio transformado y de la gestión ambiental y las de suelo rural). 3. Fichas de Determinantes ambientales: se encuentran publicadas 353 fichas de cada una de las determinantes ambientales por municipio. 4. Estudios de apoyo para el ordenamiento territorial, se encuentran publicados los estudios base que tiene Corpochivor como apoyo y soporte para los diagnósticos de planes de ordenamiento territorial de la jurisdicción.    
        https://www.corpochivor.gov.co/entidad-2/determinantes-ambientales-jurisdiccion-de-corpochivor/
        
        Se realizaron 26 socializaciones participativas talleres de fortalecimiento y asesoría, una por cada municipio donde se dieron a conocer y se entregaron las Determinantes Ambientales y los estudios base para ser incorporados en los Ordenamientos Territoriales.  Se participó en la primera mesa departamental del ordenamiento territorial “PLENEEMOS JUNTOS POR BOYACÁ”, donde se invitaron los 25 alcaldes, secretarios de planeación y concejales de la jurisdicción de Corpochivor.
        
        Se enviaron oficios a los 25 municipios de Corpochivor (para alcaldes, secretarios de planeación y concejos municipales) donde se realizó entrega oficial e indicando el link de consulta, donde se encuentran publicadas las determinantes y estudios base como insumo clave para la actualización y ajuste de los  planes de ordenamientos territoriales https://www.corpochivor.gov.co/entidad-2/determinantes-ambientales-jurisdiccion-de-corpochivor/      
        
        Firma de resolución 650 del 30 de junio de 2021: “POR MEDIO DE LA CUAL SE DECLARAN CONCERTADOS LOS ASUNTOS AMBIENTALES DEL PROYECTO DE REVISIÓN Y AJUSTE DEL ESQUEMA DE ORDENAMIENTO TERRITORIAL DEL MUNICIPIO DE VENTAQUEMADA, BOYACÁ 
        
        Se emitieron 8 conceptos técnicos relacionados los estudios básicos de gestión del riesgo con a los municipios de: Sutatenza (2); Tibaná (1), Guayatá (2), Ventaquemada (3). 
        
        Se realizaron 31 mesas de fortalecimiento en las siguientes temáticas: Estudios básicos de gestión del riesgo, proceso de ajuste y actualización de los planes de ordenamiento territorial, Inclusión de la determinante ambiental de Cambio Climático y demás determinantes ambientales.  
        
        Se revisaron y emitieron conceptos de 63 Licencias de construcción y/o parcelación de los municipios de la jurisdicción de Corpochivor. 
        
        Se revisaron consultas y se emitieron 100 conceptos de orientaciones respecto a las Determinantes Ambientales, según consultas para los municipios de la jurisdicción de Corpochivor.  
        
         
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9427,
            'year' =>2,
            'value' => 0,
            'description' => ' Avance del 80% de la delimitación de la ronda de cuerpo de agua Quebrada las Delicias en el municipio de Ciénega, actividad realizada con el contrato de consultoría No. 244-2021, cuyo objeto es: ELABORACIÓN DEL ACOTAMIENTO DE LA RONDA HÍDRICA DE LA QUEBRADA DELICIAS DE LA SUBCUENCA DEL RÍO JUYASIÁ, EN EL MUNICIPIO DE CIÉNEGA, JURISDICCIÓN DE CORPOCHIVOR, DEPARTAMENTO DE BOYACÁ. 
        
        Identificación de actores estratégicos, talleres participativos con comunidad y demás actores. Caracterización cultural y análisis de gobernabilidad en la ronda hídrica.  
        
        Siguiendo los lineamientos de la guía de acotamiento de rondas hídricas de Minambiente: Se definió: Componente geomorfológico + componente hidrológico + componente ecosistémico = límite físico final para la Quebrada las Delicias.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9428,
            'year' =>2,
            'value' => 2,
            'description' => 'PÁRAMO RABANAL: Finalización del documento de zonificación y régimen de Páramo Rabanal – Río Bogotá para el área de Corpochivor, incluyendo el análisis de vulnerabilidad, arraigo y dependencia de la comunidad o familias en la zona de páramo.
        Se realizaron 19 reuniones de Concertación de la zonificación y régimen de usos con comunidad del Páramo rabanal Río Bogotá. 
        Páramo Rabanal: Se aprobó el documento Estrategia de concertación comunitaria para la zonificación y régimen de usos de los ecosistemas de páramos delimitados y se adaptó la escala de vulnerabilidad del documento Metodología zonificación de páramos - jurisdicción CAR, 2019, lo anterior socializado y aprobado mediante comisión conjunta.
        Se emitieron 12 oficios de consulta a entidades Minjusticia, EBSA, INVIAS, ANI, UPME, Mininterior, Mincultura, Ministerio de Minas y energía, ANM, ANH, ANT e ICANH.
        
        PÁRAMO ALTIPLANO CUNDIBOYACENSE: Consolidación de documento de zonificación, régimen de usos del páramo Altiplano Cundiboyacense para el área de Corpochivor. 
        Páramo Altiplano Cundiboyacense: Se emitieron 12 oficios de consulta a entidades (Minjusticia, EBSA, INVIAS, ANI, UPME, Mininterior, Mincultura, Ministerio de Minas y energía, ANM, ANH, ANT e ICANH). 
        
        AVANCES PARA PÁRAMO TOTA-BIJAGUAL-MAMAPACHA:
        Se aplicaron 1556 fichas técnicas de caracterización socioeconómicas y ambientales a predios del páramo Tota - Bijagual – Mamapacha (Garagoa 8, Chinavigta 50, Tibaná 109, Ramiriquí 566, Ciénega 247, Viracachá 576). 
        Se realizaron 7 socializaciones institucionales a nivel urbano en los municipios de Ciénega, Viracachá, Ramiriquí, Chinavita, Garagoa, Jenesano, Tibaná. 
        - Se realizaron 33 socializaciones comunitarias a nivel veredal y 1 a nivel urbano de 32 veredas presentes en el área de influencia, así: Municipio de CIÉNEGA veradas SAN VICENTE ALBAÑIL, EL PLAN, TAPIAS, REAVITA y CEBADAL. VIRACACHÁ, veredas: CHEN, PUEBLO VIEJO, CAROS, PARRAS y LA ISLA. RAMIRIQUÍ, veredas: ESCOBALTIBANÁ; SUTA ARRIBA, RUCHE, CHIGUATÁ, QUINCHATOQUE. CHINAVITA, veredas: GUAYABAL, JORDAN, MONTEJO, USILLO, QUINCHOS, VALLE, ZANJA ARRIBA y MUNDO NUEVO. GARAGOA: NUEVO MUNDO. 
        
        
        
         
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9429,
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
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9430,
            'year' =>2,
            'value' => 100,
            'description' => 'Ø Se apoyo en reconformación del Consejo de cuenca de la cuenca del RÍO GUAVIO (lo integran 18 personas)
        Ø Se lideró la reconformación del consejo de Cuenca POMCA RÍO GARAGOA 
        https://boyaca7dias.com.co/2021/05/05/aviso-de-convocatoria-de-comision-conjunta-corpochivor-corpoboyaca-y-car-cundinamarca/ 
        Ø Se realzaron 2 socializaciones del proceso de reconformación del consejo de cuenca POMCA Río Garagoa, asistentes: alcaldes, delegados de gobernaciones, secretarios de planeación, juntas de acción de comunal, presidentes de acueducto, ONGs, instituciones de educación superior,    reuniones con alcaldes, secretarios de planeación. Con un total de: 146 participantes.  
        
        Ø Se realizó seguimiento a la ejecución física y financiera de POMCA Río Garagoa para el segundo año de ejecución (año 2020). Adicionalmente, se socializó a las dos corporaciones que componen la comisión conjunta CAR Y CORPOBOYACÁ, donde se dio a conocer el avance físico y financiero, del segundo año de ejecución. Adicionalmente, se consolidó información para seguimiento del tercer año de ejecución de POMCA RÍO GARAGOA.  
        Ø Se realizó seguimiento a 6 planes de manejo de los DRMI: DRMI Paramo Rabanal, DRMI Paramos Mamapacha-Bijagual, DRMI Páramos Cristales, Castillejo o Guachaneque, DRMI Cuchilla el Varal, DRMI Cuchilla San Cayetano, DRMI Cuchillas Negra y Guanaque.  
        Ø Se realizó seguimiento a la dimensión ambiental de los 25 planes de desarrollo municipales. 
        Ø Se realizó seguimiento a los asuntos ambientales concertados para los 25 municipios de la jurisdicción de Corpochivor.   
         ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9431,
            'year' =>2,
            'value' => 100,
            'description' => ' Asesoría técnica a los  25 CIDEA, correspondientes igual número de municipios de la jurisdicción, mediante 146 sesiones de acompañamiento,  Organización y coordinación de 22 espacios de participación y diálogo en el marco de la Estrategia del Escritorio al Territorio, en los municipios de Viracachá, Santa María, Pachavita, Tibaná, Guateque, Somondoco, Nuevo Colón, Jenesano, Sutantenza, Boyacá, Turmequé, Chivor, Ventaquemada, Macanal, Guayatá, san Luis de Gaceno, la capilla, Campohermoso, Chinavita, ciénega, Úmbita y Ramiriquí. Realización de dos (2) espacios de participación y diálogo en el marco de la alianza con el I.C.B.F, Programa Generaciones Sacúdete. Asesoría técnica y acompañamiento a 49 PRAES de igual número de instituciones educativas de la jurisdicción, a través de 210 sesiones de trabajo. Asesoría Técnica a dos (2) Instituciones Educación Superior de la Jurisdicción para la estructuración de los Proyectos Ambientales Universitarios PRAUS (UPTC- UNAD',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9432,
            'year' =>2,
            'value' => 2,
            'description' => ' Acompañamiento técnico a de dos PROCEDAS y adquisición de material pedagógico para el desarrollo de registro de aves.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9433,
            'year' =>2,
            'value' => 9,
            'description' => 'En articulación con el proyecto economía circular se apoyó la adquisición de un (1) parque infantil y nueve (8)  puntos ecológicos para incentivar acciones de educación ambiental y fomento de la economía circular vinculadas a los PRAES. 
        
        Nota: En esta actividad, el Plan de Acción 2020-2023, contempla como meta el apoyo a 10 Proyectos Ambientales Escolares -PRAE, correspondientes a Instituciones Educativas de la jurisdicción. Para el cumplimiento de esta meta se adelantaron acciones en articulación con el proyecto Economía circular, proyectando la adquisición de un parque y nueve puntos ecológicos. Con relación al segundo componente, en un comienzo se proyectó la compra de 5 puntos ecológicos y luego se hizo una adición presupuestal para la adquisición de otros 4 puntos. Al momento de solicitar el CDP para la adición, no se tuvo en cuenta el valor del IVA, por lo tanto, se presentaba un desequilibrio económico que afectaba al contratista, lo que obligó a hacer los ajustes contractuales pertinentes.  Finalmente, se adquirieron 8 puntos ecológicos.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9434,
            'year' =>2,
            'value' => 3,
            'description' => 'Se implementó la herramienta lúdica Bingo Ambiental, con comunidad de la familia CORPOCHIVOR y la Red de ONG´S Ambientales de Boyacá. Se desarrolló el XVI CONCURSO DE MÚSICA CAMPESINA, ECOLÓGICA Y AMBIENTAL de CORPOCHIVOR con participación de diez agrupaciones musicales. Se realizó la grabación de 2 obras inéditas resultantes del concurso. Se desarrolló el XIV ENCUENTRO DE CLUBES CORPOCHIVATOS DE LA JURISDICCIÓN DE CORPOCHIVOR, de forma virtual, con soporte de la corporación MALIKA, con participación de 800 niños de 49 instituciones educativas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9435,
            'year' =>2,
            'value' => 10,
            'description' => ' Se realizaron actividades enfocadas a fomentar la cultura ambiental y la participación, vinculando a las siguientes organizaciones: Red de jóvenes de ambiente (Nodos Garagoa, Chinavita, Guateque y San Luis de Gaceno), Asociación de Mujeres de Ventaquemada. Asociación de suscriptores del Acueducto San José de Tibaná, Asociación ASOAGRIBOY sede Ramiriquí, Asociación de Cacaoteros de Santa María- ASOCASAM, Apicultores de Santa María, ECOVARAL de Macanal, Artejen de Jenesano, Asociación de Mujeres de Sutantenza ASOMUSAT, Asociación de productores multisectoriales agropecuarios de Garagoa- ASOPMARGAR.  Se realizó un (1) diplomado, mediante contrato interadministrativo con l UPTC, vinculando a 20 personas de las organizaciones antes mencionadas, logrando la aprobación 17 de los participantes.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9436,
            'year' =>2,
            'value' => 100,
            'description' => 'Programa radial Camino Ambiental (36), Compañas radiales ambientales (A mercar en el canasto, código de colores, fauna silvestre (2), cuidado del agua, gestión del riesgo, negocios verdes, ventanilla vital (8), Murales Ambientales (7). Campañas de sensibilización ambiental y/o laboratorios de campo (48). Intercambio de experiencias (1).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9437,
            'year' =>2,
            'value' => 96,
            'description' => 'Se recibió un total de 1925 PQRS  en la vigencia 2021, de las cuales 590 corresponden a Petición de Infracciones Ambientales y 1335 a Peticiones, reclamos y solicitudes (de Consulta, Información, documentos, permisos ambientales, Recursos de reposición); 73 se encuentran en trámite, 179 finalizadas fuera de términos y hasta la fecha se han atendido dentro de los términos 1673 PQRS. Dando como resultado porcentaje físico de 91%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9438,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizaron quinientas  (500) de los quinientos (500) seguimientos a quejas ambientales   en la vigencia  2021, dando un avance en la meta física del 100%
        
        
        El Aumento el número de seguimiento a quejas ambientales, se debe a la creación de un grupo que permitió incrementar las actuaciones.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9439,
            'year' =>2,
            'value' => 33,
            'description' => 'Durante la vigencia 2021, se ejecutó un total de 993 seguimientos a licencias ambientales, permisos y/o autorizaciones otorgadas, de los 2996  que activos para un avance en la meta física del 33,1%. con las siguientes observaciones y/o consideraciones:
        
        Nota 1: Es de aclarar que frente a la cantidad activa de los expedientes de los permisos Concesiones de Aguas, Permisos de Vertimientos y Aprovechamientos Forestales respecto de las vigencias anteriores obedece al criterio que indica que “se entiende por expediente activo aquel que no tenga acto administrativo de archivo”, aun así, se encuentre vencido el permiso, y no solo aquel que se encuentre vigente en el término del permiso.
        
        Nota 2: Respecto a lo indicado en la casilla denominada “ejecutadas” en la tabla precedente, comprende visita técnica, informe técnico y acto administrativo acogido en la vigencia 2021; sin embargo, es pertinente aclarar que la Autoridad ambiental dentro de la vigencia 2021 acogió conceptos técnicos que quedaron del último mes de la vigencia anterior 2020, ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9440,
            'year' =>2,
            'value' => 100,
            'description' => 'Se profirieron cincuenta y cuatro (54) actos administrativos dando inicio al proceso sancionatorio, de los cincuenta (50) que estaban sujetos a inicio, lo cual arroja un avance físico de 108%.
        
        Se supera el número de inicios de trámites sancionatorios, dado el número creciente. de infracciones ambientales a la fecha. Lo anterior, aunado a la estrategia implementada por la corporación referente a su programa del escritorio al territorio, logrando un acercamiento de la comunidad al área de PQRS
        
        Nota: Se supera el número de inicios de trámites sancionatorios, dado el número creciente de infracciones ambientales a la fecha. Lo anterior, aunado a la estrategia implementada por la corporación referente a su programa del escritorio al territorio, logrando un avance mayor en la meta física anual de las PQRS.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9441,
            'year' =>2,
            'value' => 21,
            'description' => 'En la vigencia 2021 se inició con 334 expedientes sin resolucion de fondo, se aperturaron 54 tramites sancionatorios para un total 388  y se  finalizarón un total de 81 procesos administrativos ambientales de carácter sancionatorios, arrojando un avance del 21%
        
        Aumenta el número de expedientes decididos y tramitados, dado el ingreso de un abogado de descongestión y el aumento en decisiones de fondo por el líder del proyecto
        
        Nota: Es pertinente señalar, que el avance en la meta física disminuyo ostensiblemente toda vez que para las vigencias anteriores el reporte correspondió a avances sobre expedientes priorizados, en tanto que para la vigencia 2021 el reporte corresponde a avance sobre el universo total de los expedientes.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9442,
            'year' =>2,
            'value' => 100,
            'description' => 'Se recibieron y gestionaron 102 solicitudes, de la seguimiento manera: Viabilidad de Reservorios 32, Donación de Madera 8, Planes de Contingencia 40,  Concepto de Viabilidad de Vía 11, Licencias Ambientales 7, Certificado de Diagnóstico Automotor 1, Emisiones Atmosféricas 2 y  Solicitudes de Carbón Vegetal 1',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9443,
            'year' =>2,
            'value' => 2,
            'description' => '1. capacitación virtual a integrantes de la Policía de la jurisdicción de Corporación sobre imposición de medidas preventivas, atención a quejas por infracciones ambientales e incautación de flora, clases de aprovechamientos forestales y demás competencias.
        2. Primer Taller Estratégico Ambiental para personeros municipales del suroriente de Boyacá, donde se socializaron temas relacionados con ejercicio de la autoridad ambiental, en el municipio de Sutatenza, con el apoyo de profesionales de los proyectos
        Seguimos fortaleciendo las relaciones con nuestros Aliados por un Territorio Agroambiental Sostenible.
        3. Segundo taller estratégico ambiental en el Municipio de Ramiriquí para Personeros, y Autoridades de Policía Municipales de la jurisdicción de la Corporación Autónoma Regional De Chivor – CORPOCHIVOR, en el cual se desplegó socialización de los diferentes procedimientos de permisos ambientales, PQRS y el procedimiento sancionatorio ambiental
        4. En el marco del convenio suscrito con la Agencia Nacional de Minería –ANM, en donde se abordaron temas en asuntos mineros, fiscalización minera, obligaciones que la normatividad nacional establece a quien explota minerales en territorio y los procesos sancionatorios ambientales. Asimismo, se contó con la participación de alcaldes, inspectores de policía, comandantes de policía, titulares mineros y consultores de los proyectos
        
        Nota: Si bien se tenía establecido la realización de 2 capacitaciones para funcionarios de policía…., una de ellas se realizó de forma virtual, posteriormente surgió la necesidad de capacitar a los personeros e inspectores de policía de la jurisdicción por lo que se realizó una de las capacitaciones en el municipio de Sutatenza, sin contar con la presencia total de los 25 personeros de la jurisdicción ya que por la emergencia sanitaria no es posible el desplazamiento de todos, por lo que conllevo a esta autoridad a realizar otra capacitación en la parte alta de la jurisdicción en el municipio de Ramiriquí, para brindar la capacitación a los funcionarios que hacían falta. 
        
        Aunado a lo anterior, en cumplimiento de las obligaciones en el marco del convenio interadministrativo con la Agencia Nacional de Minería, se llevó a cabo el primero encuentro por una minería sostenible, realizada en dos días, con la presencia de funcionarios del orden territorial y con los titulares mineros; es por este motivo que la meta física anual sobrepasa la establecida. 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9444,
            'year' =>2,
            'value' => 25,
            'description' => 'Se ejecutaron un total de 35 operativos contra el tráfico de flora y fauna, calidad del aire, y explotación ilícita de minerales, de la siguiente manera:
        
        7 Operativo de Recurso Hídrico: el 24 de Junio, 2 en somondoco; el dia 07 de julio , 2 en sutatenza; el dia 08 - 09 de julio,  1 el 23 de Noviembre y 1 el 20 de Diciembre de 2021
        
        10 operativos de flora y fauna:, 2  el 27 de marzo; 2 el dia 22 de Junio de 2021; 2 ventaquemada el 15 de julio; 1 en viracacha el 16 de septiembre , 1 en ramiriqui el 16 de septiembre, 1 en guateque y 1 macanal el 22 de Octubre
        10 operativos a fuentes móviles: 1 en Jenesano;  1 en Boyacá, el dia 22 de junio; 2 ventaquemada, el 15 de julio; 1 en viracacha el 16 de septiembre, 1 en Ramiriqui el 16 de septiembre, 1 en guateque,  1 macanal el 22 de Octubre, 1 en garagoa y 1 en San Luis de Gaceno.
        
        5 Operativos de Mineria Ilegal: 1 el 16 de Febrero, 1 el 21 de mayo y 1 el  24 de junio en ventaquemada; 2 en Chivor, el 11 de Agosto.
        
        3 Operativos de Ruido:  1 el 17 de junio de 2021, 2 en Garagoa, los días 23 julio y 09 de septiembre
        
        Nota:  El avance de la  meta física anual supero la meta física establecida en una cantidad de 10 operativos, lo anterior obedece a lo siguiente: uno a las solicitudes realizadas por autoridades de policía  y ejército en la que requieren el apoyo de la corporación para la realización del operativo, lo segundo y en temas de calidad de aire se supera teniendo en cuenta la suscripción del contrato interadministrativo con la Corporación Autónoma regional de Cundinamarca, por la prestación de un servicio que tenía más cantidad de mediciones por un valor menor a diferencia de los años anteriores; y un tercer criterio en el que se aprovechó la salida de los profesionales de la entidad para realizar operativos simultáneos para verificación y control de tráfico de flora y fauna.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9445,
            'year' =>2,
            'value' => 100,
            'description' => '· Ejecución cumplimiento de actividades del Plan Anual de adquisiciones de Bienes y  Servicios vigencia 2021,clasificado, programa publicado, y reportado en SECOP II, mediante  la suscripción de contratos y convenios de los servicios y bienes necesarios para el desarrollo los procesos de la Corporación, relacionados con: Gestión de Recursos Administrativos y Financieros (Contratación, Presupuesto, Contabilidad, Tesorería, Almacén, Facturación, Cobro coactivo); Seguridad y Salud en el Trabajo; Servicio al Ciudadano, Gestión Documental (Radicación, Archivo, Centro de Documentación, Notificación personalizada); Laboratorio Ambiental , Gestión de tecnologías y seguridad de la información, lo anterior con el fin de dar cumplimiento a las metas físicas, operativas, documental, tecnológico y financieras de la corporación
        · Desde la ventanilla de Atención se brindó información sobre trámites y servicios a los grupos de valor en los municipios de la jurisdicción de la Corporación y a usuarios fuera de esta, de forma presencial y a través de los canales de comunicación electrónicos establecidos en el protocolo de Atención al Ciudadano.
        · En el área de Correspondencia se recibieron y radicaron las comunicaciones allegadas a través de los diferentes canales de comunicación (electrónico y presencial), para la vigencia 2021 se radicaron un total de 10.765, comunicaciones externas recibidas, y se enviaron a través de la empresa de mensajería certificada y personal notificador un total de 13.381 comunicaciones.
        · También se fortaleció la transparencia en el manejo de la información a través de la implementación de instrumentos archivísticos y procesos técnicos para poner la documentación a disposición de los ciudadanos, tanto los procesos y trámites misionales, la documentación de procesos administrativos como la Memoria Técnica Institucional que reposa en el Centro de Documentación Ambiental.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9446,
            'year' =>2,
            'value' => 88,
            'description' => 'La articulación de la Política de Gestión del Conocimiento y la Innovación (GECI) se inició con la actualizaciòn del autodiagnóstico en la implementación institucional de la política. Como resultado del autodiganóstico se diseña un plan de divulgación de los conceptos y principios de la política, como estrategia para el fortalecimiento institucional en los componentes de la GECI. Tanto los resultados del autodiagnóstico como el plan de divulgación, se socializaron con el nivel directivo institucional el 17 de febrero, con el fin de contar con su aval y respaldo en la implementación del plan de acción. Posteriormente, se dio inicio a la construcción participativa del Plan de Acción 2021, vinculando a diferentes dependencias de la entidad, según sus competencias y responsabilidades en los componentes de la política. De este modo, el plan de acción se encuentra articulado con la política de Gestión Documental, Direccionamiento Estratégico, Talento Humano y Participación Ciudadana. En este momento se cuenta con el inventario de conocimiento explícito de la corporación, construido en el Centro de Documentación y disponible para consulta a través del Gestor Bibliográfico ZOTERO. Como parte de la articulación con la Política de Participación Ciudadana, se diseña e implementa la estrategia Del Escritorio al Territorio, como espacio de participación para las comunidades de la jurisdicción y canal de difusión de la misión de la entidad.   
        Con el apoyo de la Dirección General y soportado en la necesidad de difusión de la Política de GECI, se inicia la construcción y difusión de videos informativos sobre conceptos asociados al conocimiento tácito y la cultura de compartir y difundir conocimiento. De este modo, se da la convocatoria para la conformación de los Proyectos de Aprendizaje en Equipo (PAE) en la entidad. En articulación con la dimensión de Talento Humano de MIPG, se construye hoja de ruta para identificar y caracterizar el conocimiento tácito de la entidad. Al respecto, se cuenta con la revisión de lineamientos para su construcción impartidos desde el DFP. En el componente de Ideación de la política GECI, se diseña e implementa la estrategia Café conCiencia en colaboración entre el proyecto misional Negocios Verdes y el equipo operativo de GECI, como espacio institucional de ideación, comunicación y difusión del conocimiento relevante de la corporación.
        
        En el marco del componente “Cultura de Compartir y Difundir” de la política de Gestión del Conocimiento y la innovación, se diseñó e implementó la estrategia “Proyectos de Aprendizaje en Equipo - PAE”, esta acción tiene como objetivo conformar espacios formales de enseñanza y aprendizaje en temas relacionados con la misión de la entidad. Esta estrategia ha permitido conocer y enriquecer el capital intelectual de la entidad y ha generado espacios para el intercambio de experiencias entre compañeros y equipos de trabajo. El proceso de construcción de la estrategia inició con el diligenciamiento de un formulario en línea, en el cual el personal de la entidad manifestó su interés como aprendiz o instructor en diferentes temáticas. Una vez recopilada la información, se conformaron equipos PAE según los intereses comunes entre aprendices e instructores; posteriormente, se envió solicitud de confirmación de interés a los instructores e instructivo para el diseño del contenido temático de su PAE. Una vez confirmados y programados los PAE, se inició una convocatoria por el grupo de Whatsapp de la entidad, en la cual cada persona interesada en un tema determinado se unía al grupo PAE correspondiente. Se conformó un conjunto de 19 PAE sobre temas como: SIG Sistemas de Información Geográfica, Rehabilitación de Fauna Silvestre, Autocad, Arte botánico, Drones, Hidrobiología, Estadística, entre otros.
         
        Se presentó propuesta de la herramienta para identificar y caracterizar el conocimiento tácito de la entidad, la cual consiste en un formulario en línea que será diligenciado por el personal relacionado con los procesos misionales de la entidad, teniendo en cuenta la estructura del Sistema Integrado de Gestión. 
        
        Se desarrolla la estrategia Café conCiencia en colaboración entre el proyecto misional Negocios Verdes y el equipo operativo de GECI, como espacio institucional de ideación, comunicación y difusión del conocimiento relevante de la corporación, así: primer Café conciencia + Hidrobiología realizado 01 de Julio, segundo Café conciencia + Monitoreo Hidroclimático realizado el 05 de Agosto, tercer Café conciencia + Apicultura realizado el 01 de septiembre, en estos espacios se fomentó el interés de valorar la riqueza y la cultura del café de la región, fortalecer el relacionamiento entre equipos de trabajo y la difusión de temáticas y actividades misionales que realiza la Corporación en la jurisdicción.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9447,
            'year' =>2,
            'value' => 80,
            'description' => 'Se realizo capacitaciones como primera fase para adquirir conocimientos en los fundamentos y estructura del ISO 14001 en el  Sistema Integrado de Gestión, a fin que con los participantes se realizaron los talleres  donde se pudo continuar con el proceso de fortalecimiento y potencialización de las competencias para ISO14001 de la Corporación capacitaciones que se realizo a 30 funcionarios y  realizada los días 4, 5, 6, 19 de noviembre  finalizado el día 1 de diciembre donde se entregan certificados a los participantes el cual tuvo una intensidad de 36 horas, la capacitación fue realizada por parte de empresa certificadora dedicada a la consultoria, auditoria y formación en sistemas de gestión para empresas y organizaciones.
        
        - Por parte del IDEAM Se realizó la  Visita de Evaluación al Laboratorio Ambiental de Corpochivor para el Seguimiento de la Acreditación en la Matriz Agua Otorgada a Través de la Resolución 0252 del 11 de Marzo de 2019 (Renovación y Extensión de Acreditación) y Resolución 0030 del 14 de Enero de 2020 (Extensión de Acreditación) el cual se efectúo los días 18, 19, 20 de agosto. 
        
        - se realizaron auditorias internas las tercera semana de noviembre del 16 al 20 de noviembre de 2021 las cuales fueron realizadas a los procesos misionales del sistema integrado de gestión.  
        
        -  Se avanzo en el desarrollo de los 17 autodiagnósticos de los planes de acción de las políticas de Gestión y Desempeño del Modelo Integrado de Planeación y Gestión – MIPG,  Con un nivel de cumplimiento general de 81.22%.
        -El resultado del FURAG de la vigencia 2020 reportado en el 2021 fue de 80.7, se generaron recomendaciones las cueles fueron socializadas y analizadas el 27 de julio y el 4 de agosto con los responsables y líderes de las políticas con el fin de realizar las acciones de mejora pertinentes.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9448,
            'year' =>2,
            'value' => 18,
            'description' => 'Se Realizó el proceso de formulación de 3 proyectos (1. Manejo Ambiental Acuíferos Teatinos, valor final $1.149.178.394, - 2. Acotamiento de la Ronda Hídrica Quebradas la única, cachucita y río Bosque, Valor final $660.956.484, -3. Estrategia de Implementación y Negocios Verdes valor $700.000.000) los cuales fueron presentados en la convocatoria realizada por el MADS para acceder a recursos de inversión y financiación del Fondo de Compensación Ambiental (FCA) 2022. Se formulan y se presentan 2 proyectos (1. Estufas coeficientes valor final $1.535.506.190, -2. Conservación y restauración bajo esquema de PSA en REAA valor $1.827.288.967) los cuales fueron presentados en las convocatorias del FONAM. También se formuló y presentó un Proyecto (Conservación de la Biodiversidad y los Servicios Ecosistémicos en Áreas Protegidas, Valor $3.865.694.252), a la convocatoria “Conservación de Áreas Ambientales Estratégicas” del MADS y SGR, formuló y presentó un proyecto a la “Convocatoria No 13 de 2021” de Minciencias, en asocio con la Universidad Jorge Tadeo Lozano (Implementación de procesos de Innovación en los Negocios Verdes valor $2.853.113.331); se formuló proyecto (competitividad e internacionalización de la Cadena de Valor de Cacaos Especiales, valor de S1.350.000.000) presentado a la Convocatoria Colombia + Competitiva, se Presento Propuesta del laboratorio de CORPOCHIVOR para convocatoria de  Reconocimiento del Instituto Nacional de Meteorología (INM) 2021 por sus aportes a la investigación, Presentó Postulación a los premios Banco Interamericano de Desarrollo (BID) FEMSA 2021, valor USD$10.000, tema aprovechamiento de Aguas Lluvias.
        En referencia a los proyectos que incrementan los ingresos por gestión de proyectos viabilizados; los cuales se encuentran en ejecución así: – (Acotamiento quebrada las delicias Valor $206.410.650, Pago Por Servicios Ambientales $909.929451, PORH $1.055.680.481, Estrategia de Restauración Ecológica $2.785.750.000) valor total de los 4 proyectos es: $4.957.770.582
        Se encuentra en proceso de ejecución el convenio para proyecto (Optimización del Laboratorio de Calidad Ambiental Matriz Suelo Mediante la Acreditación de Variables del Componente Agronómico que Permita Garantizar un Mejor Servicio a las Apuestas Productivas de La Jurisdicción) por un valor de $153.477.769.
        Se Realizó el proceso de formulación y presentación de los proyectos al MADS, Minciencias y Colombia + Competitiva; para obtener los recursos necesarios para financiar cual su estado a la fecha es:
        - FORTALECIMIENTO DE LA ESTRATEGIA DE EMPRENDIMIENTOS Y NEGOCIOS VERDES A TRAVÉS DE PRÁCTICAS SOSTENIBLES Y EL BIOCOMERCIO EN LA JURISDICCIÓN DE CORPOCHIVOR, DEPARTAMENTO DE BOYACÁ valor  $700.000.000 estado  Viabilizado
        -ACOTAMIENTO DE LA RONDA HÍDRICA DE LA QUEBRADA LA ÚNICA EN EL MUNICIPIO DE RAMIRIQUÍ, QUEBRADA CACHUCHITA DEL MUNICIPIO DE VENTAQUEMADA Y DEL RÍO BOSQUE EN EL MUNICIPIO DE ÚMBITA, DE LA JURISDICCIÓN DE CORPOCHIVOR, DEPARTAMENTO DE BOYACÁ valor  $660.956.484 estado- Control de Viabilidad DNP
        -IMPLEMENTACIÓN DE ESTUFAS ECOEFICIENTES COMO ESTRATEGIA PARA LA REDUCCIÓN DE EMISIÓN DE GASES DE EFECTO INVERNADERO Y MITIGACIÓN DEL CAMBIO CLIMÁTICO EN LOS MUNICIPIOS DE LA JURISDICCIÓN DE CORPOCHIVOR BOYACÁ valor $1.535.506.190 estado Control de Viabilidad DNP
        -IMPLEMENTACIÓN DE SISTEMAS SOSTENIBLES DE CONSERVACIÓN Y DE RESTAURACIÓN BAJO EL ESQUEMA DE PAGO POR SERVICIOS AMBIENTALES EN ECOSISTEMAS Y ÁREAS AMBIENTALES REGISTRADAS EN EL REAA JURISDICCIÓN DE CORPOCHIVOR valor $1.827.288.967 estado Evaluación MADS
        -FORTALECIMIENTO DE CAPACIDADES PARA LA IMPLEMENTACIÓN DE PROCESOS DE INNOVACIÓN EN LOS NEGOCIOS VERDES DE LOS MUNICIPIOS JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE CHIVOR-CORPOCHIVOR valor $2.853.113.331 estado Resultado 70 puntos /No supera etapa Preliminar
        -IMPLEMENTACIÓN DE ESTRATEGIAS PARA LA CONSERVACIÓN DE LA BIODIVERSIDAD Y SUS SERVICIOS ECOSISTÉMICOS EN ÁREAS PROTEGIDAS Y DE ALTA TENDENCIA A LA DEFORESTACIÓN EN LA JURISDICCIÓN DE CORPOCHIVOR valor $3.865.694.252 estado Proceso de Evaluación Proyectos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9449,
            'year' =>2,
            'value' => 2,
            'description' => '♠ Estructuración y formulación del Plan de Acción Cuatrienal PAC 2020-2023 y plan financiero y articulación con el presupuesto de la vigencia 2021
        ♠ Se realizaron modificaciones en las acciones operativas de los proyectos incorporados en el Plan de Acción para la vigencia 2021, mediante los acuerdos No. 07 del 30 de junio y No. 17 del 3 de noviembre de 2021.
        ♠ Mediante acuerdo del Consejo Directivo No. 19 del 10 de diciembre de 2021 se modificó el Plan Financiero del Plan de Acción 2020-2023 en lo correspondiente a las vigencias 2020 y 2021
        ♠ Se realizaron mesas de trabajo para la administración, utilización, cargue de información, aprobación Plan de Acción y modificaciones en el aplicativo CARdinal, ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9450,
            'year' =>2,
            'value' => 100,
            'description' => ' -Se continua la ejecución de lo establecido en el Plan de Comunicaciones para la vigencia 2021, el cual contempla las siguientes estrategias
        Estrategia de Comunicación Interna
         Estrategia de Comunicación Externa  
        Estrategia de Comunicación Digital
        Estrategia de Protocolo y Eventos
        Plan de Visibilización en Medios
        ●Preproducción y producción de 36 programas del espacio radial “Camino Ambiental”: emitido por 14 emisoras comunitarias y comerciales que conforman la cadena Agroambiental de la jurisdicción y 2 trasmisiones especiales, 
        ●Publicación y actualización de contenidos en la página web de la Corporación www.corpochivor.gov.co e intranet corporativa.
        ●calificación del 98.7% de cumplimiento del Índice de Transparencia y Acceso a la Información – ITA, Ley 1712 de 2014, evaluado por la Procuraduría General de la Nación.
        ●Aproximadamente 4.381.995 usuarios vieron o  siguieron contenidos publicados en las redes sociales de la Corporación ( facebook, twitter e Instagram)
        ●Gestión de 43 notas periodísticas emitidas en medios de comunicación regionales y nacionales, a través de la estrategia  free press.
        ●.Diseño y publicación de 23ediciones del boletín interno “Corpochivor al Día”, remitido al correo electrónico institucional y grupo corporativo de Whatsapp “Familia Corpochivor.
        ●Apoyo periodístico para la transmisión de la audiencia pública para la rendición de cuentas del Plan de Acción Institucional 2020 - 2023 través de la página Facebook de la Corporación.
        ●Apoyo periodístico para  la transmisión XVI Concurso de Música Campesina, Ecológica y Ambiental.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9451,
            'year' =>2,
            'value' => 30,
            'description' => 'Evaluación y actualización del Plan estratégico de Tecnologías de Información PETI vigencia  2020-2023 y el respectivo instrumento de seguimiento y evaluación.
        ● Evaluación y actualización del Modelo de Seguridad y Privacidad de la información y el plan de tratamiento de riesgos
         
        Se ejecutaron las siguientes actividades relevantes:
         
        ● Configuración conexiones remotas a los funcionarios para desarrollar  trabajo en casa en virtud de la emergencia sanitaria COVID-19
        ● Ambiente de producción y pruebas: Migración e instalación de sistema operativo Oracle Linux en servidores de bases de datos y configuración del  ambiente de producción y pruebas del Sistema de Información Administrativo y Financiero
        ● Renovación tecnológica de hardware y software: adquisición de equipos de cómputo, impresión y comunicaciones, con las respectivas licencias de Office. adquisición de un drone “Vehículo aéreo no tripulado” para toma de imágenes satelitales.
        ● Mantenimiento preventivo y suministro de repuestos para servidores,  impresoras corporativas y sistema de aire acondicionado de centro de datos
        ● Mesa de ayuda: Soporte técnico operativo a recursos informáticos 
        ● Soporte técnico especializado y desarrollo de funcionalidades módulos que integran el Sistema de Información Administrativo y Financiero
        ● Gestión contractual para renovar el servicio de soporte y actualización del licenciamiento ORACLE, Conexión de internet de banda ancha y servicio de correo electrónico corporativo
         
        El  nivel de cumplimiento de las metas establecidas en el Plan de Acción de la Política Gobierno Digital  para la vigencia 2021 es del 76,4%
        El  nivel de cumplimiento del plan de tratamiento de riesgos es del 62,5%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 9452,
            'year' =>2,
            'value' => 24,
            'description' => 'Proceso de Generación de información:
        - Se realizaron 144 sobrevuelos con equipos aéreos no tripulados-UAV (drones), realizando así la captura de fotografías aéreas en aproximadamente 2.500 hectáreas de la jurisdicción, con su respectiva documentación y copia de seguridad de la información levantada.
         A continuación, se muestra la cantidad de sobrevuelos realizados para atender las solicitudes enviadas por cada uno de los diferentes proyectos y/o dependencia que lo requirieron:
        -Administración y manejo adecuado del recurso hídrico 9
        -Autoridad ambiental, control, vigilancia y seguimiento de los recursos naturales 10
        -Cambio climático y gestión del riesgo 38
        -Fortalecimiento para la gestión ambiental (área de comunicaciones y SIAT) 15
        -Gestión integral del recurso forestal 8
        -Negocios Verdes 8
        -Planificación y Ordenamiento Ambiental del Territorio 55
        -Subdirección Administrativa y Financiera 1
        Municipio Boyacá 11 Vuelos -Delimitación de deslizamiento. -Definición de posibles obras de mitigación. -Identificación de captaciones de acueductos.
        Municipio Campohermoso 3 Vuelos - Realizar monitoreo a sector afectado por fenómeno de remoción en masa.
        Municipio Ciénega 48 Vuelos -Estudio de acotamiento de la ronda hídrica de la quebrada “Las Delicias”
        Municipio Garagoa 15 Vuelos -Sendero Paluwala. -Tomas de inspección instalaciones de la entidad. -Vuelos de prueba
        Municipio Guateque 3 Vuelos -Realizar monitoreo a sector afectado por fenómeno de remoción en masa.
        Municipio Guayatá 10 Vuelos -Seguimiento a licenciamiento ambiental. -Toma de imágenes a unidad productiva agroecológica.
        Municipio Jenesano 8 Vuelos -Identificación de
         captaciones acueductos. -Evaluación de condiciones hidráulicas del cauce del río Jenesano previo a intervención para recuperación de la sección transversal en puntos crítico.
        Municipio Nuevo Colón 3 vuelos -Identificación espacial de nacimiento, recorrido y desembocadura de fuentes hídricas superficiales, evaluando coberturas y problemáticas ambientales, para mesas de trabajo de acueductos veredales.
        Municipio Ramiriquí 4 vuelos  Vuelo de reconocimiento plantación forestal de pino para grabar video explicativo.
        Municipio San Luis de Gaceno 6 vuelos -Realizar monitoreo a sector afectado por fenómeno de remoción en masa. -Seguimiento a licenciamiento ambiental.
        Municipio Santa María 10 vuelos  -Tomas de imágenes a 4 predios donde se establecerá cultivos de cacao para establecer beneficios de generación de cobertura vegetal. -Realizar monitoreo a sector afectado por fenómeno de remoción en masa. -Seguimiento a infracción ambiental.
        Municipio Sutatenza 6 vuelos -Realizar monitoreo a sector afectado por fenómeno de remoción en masa. -Acompañamiento a la “Sembratón”.
        Municipio Tenza 3 vuelos -Realizar monitoreo a sector afectado por fenómeno de remoción en masa.
        Municipio Tibaná 2 vuelos -Complemento batimetría Río Tibaná
        Municipio Turmequé 2 vuelos -Realizar monitoreo a sector afectado por fenómeno de remoción en masa.
        Municipio Ventaquemada 7 vuelos -Monitoreo y seguimiento del estado actual de la “Quebrada La Cachuchita” en la zona urbana para la inclusión del ajuste y actualización del EOT
        Municipio Chinavita-Garagoa-Pachavita (Sector la Frontera) 3 Vuelos -Verificar condiciones hidráulicas del cauce del Río Garagoa y viabilidad de reconformación para reducción del riesgo
        Así mismo se realizó el levantamiento de 143 puntos de control con el equipo RTK de la entidad, como apoyo a la georreferenciación de la información capturada; de igual forma, a partir de este trabajo en campo se generaron los primeros registros validados del inventario de mojones materializados existentes en la jurisdicción.
        -Integración de 5 capas nuevas a la Base de Datos Geográfica del SIAT, correspondientes a Liberaciones, Visitas Técnicas 2021, Coberturas de la Tierra Corine Land Cover 2019, Consultas Prediales SIAT, Residuos Sólidos 2021.
        -Suscripción de un Convenio de Cooperación con el Instituto Geográfico Agustín Codazzi – IGAC cuyo objetivo principal es la transferencia de datos de la jurisdicción, entre estos los Registros Prediales I y II, imágenes satelitales, fotografías aéreas, entre otros productos fotogramétricos
        Proceso de Actualización de información:
         
        ➔Integración de 23 capas actualizadas a la Base de Datos Geográfica del SIAT, referentes a:
        ➔Temática Biodiversidad: Humedales Priorizados, Conflicto de Fauna y Rastro de Fauna.
        ➔Temática Recurso Hídrico: Concesiones de agua, Vertimientos identificados, Ocupaciones de Cauce, Puntos de Monitoreo de Calidad del Agua, Puntos de Monitoreo PORH y Red de Monitoreo Hidro climático.
        ➔Temática Instrumentos de Ordenación: Áreas de Importancia Estratégica, Zonificación Ambiental del DRMI Páramo de Cristales, Castillejo y Guachaneque, y Predios de Interés Hídrico.
        ➔Temática Servicios Ambientales: Aprovechamientos Forestales, Títulos y Licencias Ambientales, Disposición de Residuos Sólidos 2020, Infracciones ambientales, Sanciones ambientales, Operativos de Minería Ilegal, Catálogo SIMMA, Inventario SIMMA y Registro de Incendios Forestales de la Cobertura Vegetal.
        ➔Temática Información de Consulta: Áreas de Vuelos RPAS e Imágenes Panorámicas RPAS
        ➔Se realizó la actualización del documento Catálogo de Objetos Geográficos de la entidad, conforme a la variación de la información geográfica generada por la entidad.
        ➔Se realizó la actualización del documento Manual de operaciones RPAS, conforme a las observaciones y recomendaciones de mejora identificadas en el trabajo de campo por el profesional a cargo.
         
        Proceso de Publicación de información:
        ➔Se dispuso, ajustó y actualizó la información geográfica en el Geoportal SIAT Web, consolidando un total de 111 objetos geográficos publicados a partir de los datos suministrados por los proyectos de la entidad y teniendo en cuenta la estructura establecida en el Catálogo de Objetos Geográficos de la entidad.
        Proceso de Divulgación de información:
         
        ➔Se realizaron de manera virtual tres jornadas de capacitación, sobre los componentes del SIAT y el uso de software GIS (Sistemas de Información Geográfica), para las cuales se convocó a las 25 administraciones municipales de la jurisdicción.  Se contó con la participación de funcionarios pertenecientes a los municipios de Almeida, Boyacá, Ciénega, Chivor, Garagoa, Guateque, Jenesano, Nuevo Colón, Sutatenza, Tibaná, Tenza, Pachavita, Ramiriquí, Tenza, Viracachá, Úmbita y un funcionario del Instituto Colombiano Agropecuario - ICA. Además, se elaboró a través de un formulario de Google, una encuesta de percepción de dichas capacitaciones, la cual fue diligenciada por 12 funcionarios. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
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
