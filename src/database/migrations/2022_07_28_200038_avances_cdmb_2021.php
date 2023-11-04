<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCdmb2021 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 7619,
            'year' =>2,
            'value' => 70,
            'description' => 'Se implementó el geovisor, el cual se encuentra funcionando actualmente en un servidor Amazon cuyo enlace es http://gv.mapsis.co/
         -Labor gestionada con el recurso humano del la CDMB
         -Soportado en el contrato 13310+',
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
            'activity_id' => 7620,
            'year' =>2,
            'value' => 0.7,
            'description' => 'Se implementó el geovisor, el cual se encuentra funcionando actualmente en un servidor Amazon cuyo enlace es http://gv.mapsis.co/
        Soportado en el contrato 13310',
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
            'activity_id' => 7621,
            'year' =>2,
            'value' => 0.8,
            'description' => 'A partir del Plan de Ordenación del Recurso Hídrico, se generó la primera modelación para la unidad hidrográfica del río Frío.
         -Labor gestionada con el recurso humano del la CDMB
        Soportado en el contrato 12957',
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
            'activity_id' => 7622,
            'year' =>2,
            'value' => 0.5,
            'description' => ' -Un Modelo de la Estructura Ecológica Principal para el Área de Jurisdicción de la CDMB. 
         -Se levanto la linea base para el sirap andes nororiental
         -Labor gestionada con el recurso humano del la CDMB
         -Soportado en el contratto 13408
         -Soportado  La Unidad Administrativa Especial del Sistema de Parques Nacionales Naturales – UAESPPN  especialmente el subsistema Andes Nororientales  del Sistema Nacional
        de Áreas Protegidas de Colombia.',
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
            'activity_id' => 7623,
            'year' =>2,
            'value' => 0.5,
            'description' => 'Se consolidó y armonizó en su totalidad la información cartográfica, de indicadores, programas y proyectos de los POMCAS, planes de manejo de áreas protegidas, PGOF armonizados con el PAC CDMB 2020 – 2023 
        ',
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
            'activity_id' => 7624,
            'year' =>2,
            'value' => 100,
            'description' => 'A través del primer Seminario de Biodiversidad en el mes de septiembre del año 2021, se fortalecieron las competencias de lo servicios públicos en gestión sostenible de la biodiversidad y sus servicios ecosistémicos.
         -Labor gestionada con el recurso humano del la CDMB
        ',
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
            'activity_id' => 7625,
            'year' =>2,
            'value' => 2,
            'description' => 'Se optimizaron los procesos relacionados con concesiones de agua y aprovechamientos forestale a partir de la revisión de los avances de cada uno de los procedimientos del trámite, tal como se muestra a continuación, solución de dificultades, cuellos de botella o diálogo con las diferentes áreas que afectan el curso de los trámites y controles Soportado en el personal contratado para el personal de seguimeinto y evaluación.
        
        ',
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
            'activity_id' => 7626,
            'year' =>2,
            'value' => 100,
            'description' => 'El cumplimiento de las metas del PAC 2020-2023 fue del 100%
        Soportado en el aplicativo CDMB Control de Proyectos donde se evidencia el avance y evidencias del cumplimiento de metas',
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
            'activity_id' => 7627,
            'year' =>2,
            'value' => 0.25,
            'description' => 'Soportado en documento plan diseñado y en implementación cuyo en pro de optimizar el desempeño institucional, la evaluación de los procesos, la calidad de los trámites y los resultados esperados, conllevó a la realización de acciones organizadas y sistemáticas conllevando el mejoramiento del Índice de Evaluación de Desempeño Institucional (IEDI) en quince (15) puntos con relación al resultado de la vigencia 2019.
         -Labor gestionada con el recursos humano del la CDMB
        ',
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
            'activity_id' => 7628,
            'year' =>2,
            'value' => 0.25,
            'description' => 'Implementación del Mega-Plan de modernización tecnológica  equipos y laboratorio de la CDMB el cual se compone de dos sub-planes  el plan de modernización tecnológica del laboratorio de aguas  suelos e hidrobiológicos y el plan de modernización tecnológica de los equipos de conforman las redes de monitoreo. ',
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
            'activity_id' => 7629,
            'year' =>2,
            'value' => 0.25,
            'description' => 'Se definió el modelo de arquitectura empresarial como marco de referencia para alinear procesos, datos, aplicaciones e infraestructura tecnológica con los objetivos estratégicos y misionales.
        Contrato soportado 13410
        Contrato 13278
         -Labor gestionada con el recursos humano del la CDMB',
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
            'activity_id' => 7630,
            'year' =>2,
            'value' => 0.25,
            'description' => 'Se encuentra en operación e implementación el Plan de Predios, realizándose actividades de cerramiento, limpieza y manejo y control de predios, generándose acciones para evitar la invasión de los mismos.
         Contrato soportado 13401 
         Contrato soportado 13314
        Contrato soportado 13282',
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
            'activity_id' => 7631,
            'year' =>2,
            'value' => 0.85,
            'description' => 'Se logró un acuerdo con los actores del territorio del río Frío dentro del marco del contrato 12957 para generar acciones que garanticen la sostenibilidad y seguridad hídrica de dicha corriente, acuerdo que se sustenta en un acta en un proceso de participación, monitoreo y formación.',
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
            'activity_id' => 7632,
            'year' =>2,
            'value' => 3.80,
            'description' => 'Se dio cumplimiento a la meta con la surma de los cuatro pactos sectoriales el dia 11 de noviembre del año 2021, los cuatro grandes actores que impactan de manera positiva o negativa la subzona Hidrográfica  son  Ganaderos  Transportadores Constructores y los Cafeteros',
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
            'activity_id' => 7634,
            'year' =>2,
            'value' => 0.25,
            'description' => 'Se vienen consolidando los Trabajos dentro de la agenda en torno la generación de conocimiento
        a continuación, se enlistan los avances del año 2021.
        
        • Fortalecimiento del Observatorio Sismológico Del Nororiente Colombiano OSNOC_ con la UDES
        • Proyectos de investigación el recurso hídrico a partir de información que posee la entidad de sus redes de monitoreo.
        • Con la UIS_ se está apoyando el proyecto de aire y salud ambiental y la formulación de proyectos ante Min-ciencias para presentar en convocatorias.
        • Con la UPB_ se estableció el convenio para Formulación del Plan de Gestión de la Calidad del Aire para los municipios del Área Metropolitana de Bucaramanga.
        • Con el Servicio Geológico Colombiano SGC -se continuó trabajando en el desarrollo del convenio existente mediante visitas a cada uno de las estaciones de propiedad del SGC',
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
            'activity_id' => 7635,
            'year' =>2,
            'value' => 0.25,
            'description' => 'Se está avanzando en la actualizacion y operaci[on de la red de monitoreio de las principales corrientes del área de jurisdicción de la entidad en 71 puntos. mas los puntos originados en el 2021 en el Rio Frio, lo anterior conllevo a implementar el Programa Institucional Regional de Monitoreo de Cantidad y Calidad del Agua - PIRMA
        Contrato soportado 13371
        Contrato 13334',
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
            'activity_id' => 7636,
            'year' =>2,
            'value' => 0.8,
            'description' => 'Se llevo a cabo mediante la ejecuci[on y liquidaci[on de la consultoría para la realización del estudio de Plan de Ordenamiento del Recurso hídrico PORH de río Frío cuyo objeto es “la estructuración del esquema de seguridad hídrica de la unidad hidrográfica del río Frio y la formulación del plan de ordenamiento del recurso hídrico en la fuente principal”
        Soportado en el contrato 12957',
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
            'activity_id' => 7637,
            'year' =>2,
            'value' => 0.75,
            'description' => 'Se llevo a cabo mediante la ejecuci[on y liquidaci[on de la consultoría para la realización del estudio de Plan de Ordenamiento del Recurso hídrico PORH de río Frío cuyo objeto es “la estructuración del esquema de seguridad hídrica de la unidad hidrográfica del río Frio y la formulación del plan de ordenamiento del recurso hídrico en la fuente principal”
        Soportado en el contrato 12957',
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
            'activity_id' => 7639,
            'year' =>2,
            'value' => 0.5,
            'description' => 'Se dio cumplimiento con el apoyo e implementación del proyecto de economia circular con la Empresa Trade Centra la cual permitio la articulaci[on de procesos, asistencia técnica, capacitación, y organización socio empresarial se está logrando un aprovechamiento hasta del 85% de la materia orgánica, cartón, papel, vidrio, plástico, sanitarios; la cual supera la media nacional .
        
         -Labor gestionada con el recurso humano del la CDMB',
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
            'activity_id' => 7640,
            'year' =>2,
            'value' => 0.5,
            'description' => 'Se dio cumplimiento con el apoyo e implementación del proyecto de PML bajo la firma de un acuerdo de voluntades   con la Asociación de Productores Ovino-Caprinos de Santander – CAPRISAN. El  Acuerdo de Producción más Limpia conlleva el trabajo conjunto en prevención, minimización y control de impactos negativos en los procesos de producción.',
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
            'activity_id' => 7641,
            'year' =>2,
            'value' => 0.5,
            'description' => 'Se modernizo y fortalecio la red de monitoreo del aire Dicha modernización permitirá mejorar la cobertura, calidad y disponibilidad de la información de los niveles de contaminación atmosférica en el área metropolitana de Bucaramanga
        Soportado en el contrato 13364
        Soportado en el contrato 13356
        Soportado en el contrato 13199',
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
            'activity_id' => 7642,
            'year' =>2,
            'value' => 0.75,
            'description' => 'Se dio cumplimiento a la meta con el apoyo y   rma del pacto sectorial el día 11 de noviembre del año 2021 con la empresa
        Nanomac, adscrita a la ventanilla de Negocios Verdes de la entidad, que busca la reducción de la emisión de Gases Efectos
        Invernadero - GEI - , a través de la aplicación del nano-dispositivo que reduce hasta en un 90% las emisiones generadas por combustibles fósiles',
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
            'activity_id' => 7643,
            'year' =>2,
            'value' => 0.5,
            'description' => 'Los dos productos que dieron cumplimiento al 50% de la meta son:
        
        1. Se realizó la línea base geofísica a los municipios de California, Charta, Matanza, El Platón, Lebrija, Rionegro, Tona y Vetas a escala 1:25000 mediante el contrato de consultoría 12955-04. cumplimiento(0,25)
        2. Se logró la ccaracterización de eventos dañinos naturales en el área de jurisdicción de la CDMB- GEODATABASE Cumplimiento: (0.25)',
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
            'activity_id' => 7644,
            'year' =>2,
            'value' => 14,
            'description' => 'Se brindó acompañamiento, asesoría y apoyo en las diferentes convocatorias realizadas a los 13 municipio del área de jurisdicci[on y al Departametno de Santander..
        
         -Labor gestionada con el recursos humano del la CDMB',
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
            'activity_id' => 7645,
            'year' =>2,
            'value' => 13,
            'description' => 'Se dio asesoria a los 13 municipios,  inclusión, de acciones relacionadas con cambio climático, concretando com compromisos en pro obtener logros en cuanto a mitigación y adaptación al Cambio Climático.
         -Labor gestionada con el recursos humano del la CDMB',
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
            'activity_id' => 7646,
            'year' =>2,
            'value' => 1,
            'description' => 'Se apoyó la gestión del Nodo Regional Norandino de Cambio Climático mediante la participación en reuniones en las cuales se
        acompañó a la Secretaría Técnica del Nodo que ejerció la CAS durante la vigencia 2021 y conto con el apoyo de la UIS, la Universidad Santo Tomás y asesores externos invitados por la CAS
        
         -Labor gestionada con el recursos humano del la CDMB',
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
            'activity_id' => 7647,
            'year' =>2,
            'value' => 30000,
            'description' => 'La población bene  ciada durante la vigencia 2021 superó los 30.000 habitantes propuestos para el cumplimiento de la meta
        mediante le ejecución de las siguientes contratos
        Soportado en el contrato12906: Objeto: “Contratar la ejecución de Actividades para la recuperación de suelos para la Conservación de Áreas de la CDMB.
        Contrato No. 13328: “contratar el suministro del servicio de alquiler de maquinaria pesada para la demolición y limpieza en sectores del área de jurisdicción de la CDMB para la prevención, atención,
        mitigación y consolidación de sectores en el área de jurisdicción de la CDMB',
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
            'activity_id' => 7648,
            'year' =>2,
            'value' => 0.1,
            'description' => 'Se evidenció en la Modelación de la Estructura Ecológica Principal - EPP, la participación de la Corporación, en la
        construcción de este modelo, permitió dar cumplimiento a lo proyectado para la vigencia 2021, lo que implicó una colecta
        de información, la de  nición de un modelo matemático para su aplicación, el identi  - car el estado mismo de los datos, y lo más
        importante estar articulados con la Unidad Administrativa Especial del sistema de Parques Naciones Naturales 
        -Se levanto la linea base para el sirap andes nororiental
          -Soportado en el contratto 13408
         -Soportado  La Unidad Administrativa Especial del Sistema de Parques Nacionales Naturales – UAESPPN  especialmente el subsistema Andes Nororientales  del Sistema Nacional
        de Áreas Protegidas de Colombia.
        Se contrató la consultoría para la construcción de la EEP y los modelos de restauración para los diferentes Biomas de la jurisdicción.  
         - soportado contrat 13407',
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
            'activity_id' => 7649,
            'year' =>2,
            'value' => 110316,
            'description' => 'Durante el año 2021 se realizó la siembra de 110.316 árboles en el marco de la gran Sembratón Nacional,
        Labor gestionada con otras entidades publico y privadas',
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
            'activity_id' => 7650,
            'year' =>2,
            'value' => 353,
            'description' => 'En pro de apoyar a la población en el manejo participativo de áreas conservadas, en la vigencia 2021 se establecieron alianzas
        estratégicas participativas en las que se vincularon a más 350 personas de distintas comunidades, asociaciones e instituciones
        cooperantes del área de jurisdicción de la CDMB. ',
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
            'activity_id' => 7651,
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
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7651,
            'year' =>2,
            'value' => 100,
            'description' => '',
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
            'activity_id' => 7652,
            'year' =>2,
            'value' => 0.25,
            'description' => 'Se encuentra en implementaicion el modelo pedgogico pertinentee en los 13 municipios del area de jursdiccóon de la CDMB',
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
            'activity_id' => 7653,
            'year' =>2,
            'value' => 336,
            'description' => 'Mediante un proceso de planeación estratégica, se conformó el grupo de Educación Ambiental para articular la intervención en el
        territorio por parte de la CDMB, mediante la dinamización de los CIDEAS y la implementación de la ruta metodológica que propone la Política Nacional Ambiental para la resigni  cación de CIDEAS, PRAES y PROCEDAS. 
        ',
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
            'activity_id' => 7654,
            'year' =>2,
            'value' => 0,
            'description' => 'Meta Cumplida en la vigencia 2020',
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
            'activity_id' => 7655,
            'year' =>2,
            'value' => 4109,
            'description' => 'Durante la vigencia 2021 se da cumplimiento a la meta en las jornadas técnicas y cientí  cas sobre los valores naturales y culturales de la jurisdicción de la CDMB, superando el número de personas proyectadas en la vigencia logrando impactar más de 4.000 personas en estas jornadas de capacitación y  sensibilización, a través de la realización de 42 jornadas técnicas cientí  cas y de Cultura Ambiental.',
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
            'activity_id' => 7656,
            'year' =>2,
            'value' => 71,
            'description' => 'Se da cumplimiento a la meta con la elaboración de 57 videos y e 14 conversatorios. Los cuales conllevaron a la realizacion a la realizaci[on de de 389 piezas publicitaria
        Soportado Contrato 13344',
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
            'activity_id' => 7657,
            'year' =>2,
            'value' => 5464,
            'description' => 'Dentro del marco de la estrategia “modelo pedagógico pertinente para la educación ambiental”, se generaron las siguientes actividades:
          Se fortalecieron los comités interinstitucionales de Educación ambiental CIDEA que se constituyen como eje soporte de la Educación Ambiental en cada uno de los municipios, a través de las sesiones programadas, realizando acompañamiento técnico para la formulación y ejecución de planes de acción.
         Realización de mesas de trabajo territoriales las cuales arrojaron como resultado el documento denominado “Diagnóstico
        Ambiental Participativo Para la Armonización de PRAES, CIDEAS y PROCEDAS”, el cual fue entregado a cada uno de los 13 entes territoriales, herramienta con la cual dichas estrategias
        de la Política Nacional de Educación Ambiental logran orientar
        sus esfuerzos hacia la mitigación y prevención de problemáticas
        ambientales reales y en contexto con su entorno directo.
         Creación de 5 Escuelas Culturales de Liderazgo Ambiental
        -ECLA, mediante las cuales se busca la creación de semilleros
        de investigación en contexto con su problemática ambiental
        directa, fortaleciendo actitudes de liderazgo y comunicación.',
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
            'activity_id' => 7658,
            'year' =>2,
            'value' => 1,
            'description' => 'La CDMB en el año 2021 apoyó el avance en la formulación del Plan Departamental de negocios verdes 2021 - 2030, documento que se espera formalizar en los primeros meses de la vigencia 2022.',
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
            'activity_id' => 7659,
            'year' =>2,
            'value' => 80,
            'description' => 'Se atendieron 80 empresas en la vigencia 2021, entregando aval de confianza, en acto protocolario a 27 empresas inscritas en el programa, las cuales fueron reconocidas como Negocios Verdes.',
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
            'activity_id' => 7660,
            'year' =>2,
            'value' => 1,
            'description' => 'Con Asosanturbán, ubicada en el municipio de Suratá, en la iniciativa de fortalecimiento de la cadena de valor apícola de esta región, la CDMB da cubrimiento a un importante sector productivo, como lo es la apicultura, pues se considera la abeja como una especie sombrilla, que con su protección permite impactar en la conservación de la biodiversidad.',
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
            'activity_id' => 7661,
            'year' =>2,
            'value' => 1,
            'description' => 'La CDMB vinculó y acompañó a la Corporación 36 emociones, la cual agrupa a los prestadores de servicios turísticos de los seis municipios de Soto Norte y hacen parte de los actores claves en los procesos de planificación turística de la región.',
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
            'activity_id' => 7662,
            'year' =>2,
            'value' => 54,
            'description' => 'Con la implementación del contrato de sistemas agroforestales se beneficiaron 54 usuarios de los 6 municipios : Charta, Matanza, Suratá California, Vetas y Tona, a través de la  entrega de  insumos y herramientas Finca El Nogal, Vereda Agua negra, municipio de Charta
         establecimiento de sistemas agroforestales que conllevó a realizar una combinación de árboles forestales nativos, frutales diversos y coberturas alimentarias en la misma unidad de producción.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
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
