<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCdmb2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 7620,
            'year' =>3,
            'value' => 1,
            'description' => 'El GEOPORTAL de la CDMB se encuentra operando y disponible en la WEB con más del 60% de la información del territorio de la Corporación, actualmente se está construyendo la integración con cada una de las funciones misionales de la entidad, la generación de información de los proyectos, actividades de gestión cotidianas, monitoreo de los recursos naturales del agua, aire y la biodiversidad, así como buscando las posibles articulaciones con las instituciones públicas territoriales y sectoriales, empresas que generan igualmente datos, que se integran al sistema de ciencia tecnología e innovación. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '1 contrato',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7621,
            'year' =>3,
            'value' => 0.3,
            'description' => 'Se viene cumpliendo la meta con el modelamiento de la calidad del aire, es el recurso que finalmente hizo encontrar al Mundo, en la búsqueda de la Sostenibilidad, la cual es posible, si nuestras Unidad Hidrográficas involucran a las diferentes partes interesadas en una gestión basada en la seguridad hídrica. 
        
        Esta relación Clima – Agua, es estructural para la CDMB, en su reto de apostarle a lo local en el marco de lo global, por lo tanto, se decidió construir con la Ciencia y las diferentes partes interesadas, el Plan de Gestión de la Calidad del Aire del Área Metropolitana de Bucaramanga.
        
        Una segunda acción contundente es la generación de datos para tomar las decisiones estructurales en el compromiso que tiene el País, a través de la Contribución Nacional Determinada de Colombia – NDC, de disminuir al 2030 el 51% de nuestras emisiones de gases efecto invernadero. 
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7622,
            'year' =>3,
            'value' => 0.1,
            'description' => 'La Corporación en este momento viene trabajando con datos e información acopiada, procesada, homologada sobre especies, así como el desarrollo de unas expediciones realizadas en los núcleos de bosques en los biomas que están representados, que se encuentran en buen estado de conservación con vacíos de información.
        
        De la misma forma se cuenta con el procesamiento de información básica y temática que permite correr el programa para identificar y posteriormente perfilar cual es, la Estructura Ecológica Principal, a la que la Jurisdicción le debe apostar y cuáles son las partes interesadas con quienes se hace necesaria establecer alianzas en su implementación en el corto, mediano y largo plazo. 
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7624,
            'year' =>3,
            'value' => 0,
            'description' => 'La Coordinación de Talento Humano de la CDMB está realizando el proceso de inscripción para personal de planta y contratistas de la entidad para la certificación en competencias laborales en extensión rural, en el Área Ambiental a través del SENA, siendo esta entidad la competente para certificar el personal.
        
        Además, se está adelantando el requerimiento para contratar el Diplomado en Georreferenciación para el desarrollo de habilidades que potencialicen el uso de los sistemas de información geográfica y sea aplicado en el uso diario de las actividades desarrolladas por el personal de la entidad.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '48 contratos',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7625,
            'year' =>3,
            'value' => 2,
            'description' => 'A 30 de junio de 2022, se cumplió este indicador (META) con la modificación de 2 procedimientos asociados a Vertimientos y a Instrumentos Económicos.  
        * M-DA-PR51. Procedimiento liquidación, facturación y reclamación de tasa retributiva.
        * M-DA-PR04. Auditoría muestreo de aguas residuales.
        Los ajustes realizados hacen parte de la revisión detallada de la totalidad de documentos del sistema de gestión de calidad asociados al proceso de Evaluación y Control a la Demanda Ambiental, con lo cual la subdirección busca avanzar en la mejora continua de su quehacer como autoridad ambiental y en la racionalización de los trámites para ofrecer mejor atención.
        Esta racionalización genera ahorro en tiempos de desplazamiento y dinero para los usuarios, lo que conduce a mejorar la imagen corporativa de la entidad ya que contempla la recepción de solicitudes vía correo electrónico, reducción de tiempos de respuesta a los usuarios y eliminación de documentos innecesarios como requisitos de los trámites, entre otros.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '10 Contratos',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7626,
            'year' =>3,
            'value' => 33.81,
            'description' => 'Acorde a lo establecido en los diferentes planes operativos y en los avances y evidencias reportadas en el aplicativo control de proyectos se obtuvieron resultados por encima de lo esperado durante el primer semestre del 2022 obteniendo un cumplimiento acumulado de 43.27% de un 33.80% programado.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '328 contratos',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7627,
            'year' =>3,
            'value' => 0.25,
            'description' => 'La CDMB viene cumpliendo al 100% con la implementación del Plan de Mejoramiento para el cumplimiento de la Función Misional de la Corporación Autónoma Regional para la Defensa de la Meseta de Bucaramanga - CDMB, el Plan está dirigido a optimizar el desempeño institucional, la evaluación de los procesos, la calidad de los trámites y los resultados esperados por medio de un conjunto de procedimientos, acciones y metas diseñadas y orientadas de manera planeada, organizada y sistemática con el objetivo de mejorar el Índice de Evaluación de Desempeño Institucional (IEDI), para esta oportunidad el trabajo se vio materializado según el MADS  en un aumento en 17.58 % con relación al resultado de la vigencia 2020, Superando las expectativas planteadas, llegando a un consolidado para la vigencia 2021 de 88,86% correspondiente a un rango sobresaliente. 
        El MADS destaca que la CDMB mejoró en el seguimiento de licencias ambientales, concesiones de aguas y permisos de aprovechamiento forestal, en la capacidad de ejecución, en recursos adicionales gestionados y en el resultado del FURAG. A continuación, se presenta imagen con resultado global IEDI 2021',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '328 contratos',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7628,
            'year' =>3,
            'value' => 0.13,
            'description' => 'En este primer semestre se logró culminar la infraestructura donde va a operar el Laboratorio de Aguas, suelos e hidrobiológicos, encontrándose en la etapa de dotación de muebles y equipos. Con esta infraestructura totalmente moderna, y con equipos de última generación, la Entidad se prepara a su acreditación ante el IDEAM, con lo cual la región podrá contar con los servicios de un laboratorio que genere información oportuna, confiable para el análisis y toma de decisiones en materia de calidad de agua, suelos e hidrobiológicos.
        En esta vigencia se analizaron los equipos a adquirir, las especificaciones de cada uno, su costo, lo mismo que los reactivos necesarios para su operación y los materiales necesarios, lo mismo que los recursos para su adquisición.
        Para ello, se dio inicio al proceso de contratación para la adquisición de 24 equipos de laboratorio, 152 compuestos químicos (reactivos) y 140 materiales de laboratorio, Igualmente, con lo anterior, se actualizó el Plan de Modernización del Laboratorio de Aguas, Suelos e Hidrobiológicos 
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '1 CONTRATO',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7629,
            'year' =>3,
            'value' => 0.25,
            'description' => 'En el marco del Plan Estratégico de Tecnologías de la Información y comunicaciones – PETIC – durante la vigencia 2022, la entidad adelanta actividades buscando implementar una arquitectura tecnológica de TIC en sus diferentes dominios (estrategia_ gobierno_ gestión de información_ sistemas de información _ uso y apropiación de tecnología).
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '4 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7630,
            'year' =>3,
            'value' => 0.125,
            'description' => 'La CDMB a través de la Coordinación del Grupo Gestión y Administración de los Predios Institucionales mantiene actualizado su Plan de Adquisición de predios y Mejoras; durante el primer semestre del 2022 se ha realizado las siguientes actividades:
        
        • Mantenimiento, preservación y conservación de predios institucionales
        • Recuperacion de predios institucionales afectados por invasiones irregulares por parte de particulares
        • Vigilancia y control en los predios institucionales para identificar posibles afectaciones de tipo ambiental 
        • Saneamiento juridico de predios institucionales
        • Saneamiento predial catastral de predios institucionales
        • Elaboracion del plan oneroso de predios institucionales que no cumplen con la mision insitucional
        • Actividades adicionales que aportan al mejor desempeño del area se conservacion de predios institucionales
        
        Estas acciones son importantes para la preservación, conservación y recuperación de la biodiversidad en las áreas de la jurisdicción de la CDMB
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '1 CONTRATO',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7631,
            'year' =>3,
            'value' => 0.33,
            'description' => 'Se viene avanzando en la construcción del acuerdo territorial en el rio Tona con las diferentes partes interesadas, en el marco de la construcción del esquema de seguridad hídrica; se cuenta hasta el momento con una información de línea de base, imágenes de sensores remotos a escalas de detalle con fechas de 2021, el inicio del monitoreo técnicamente, el diseño del plan de monitoreo participativo, el desarrollo de rutas veredales generando reencuentros con los habitantes y sus comunidades, en función de recuperar la confianza, identificar las cosmovisiones locales, y precisar los contenidos de los pactos territoriales, hacia la seguridad hídrica desde la perspectiva del desarrollo local sostenible. 
        
        Existe información básica y temática de la Unidad Hidrográfica, además de unos datos sobre aspiraciones y conflictos del territorio, los cuales son la base para consolidar ese pacto territorial, que hoy responde a cuatro grandes vocaciones: Agua, Aguacate, Café y Lácteos. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '1 CONTRATO',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7633,
            'year' =>3,
            'value' => 1,
            'description' => 'Se viene prestando apoyo puntual a la Plataforma Colaborativa por la Seguridad Hídrica de la zona hidrográfica del rio Lebrija y su alta montaña.
        De las acciones programadas dentro de la Plataforma Colaborativa se realizaron en el primer semestre del 2022 eventos con el sector:
        -Sector Ganadero
        -Gremio Construcción
        -Gremio Cafetero 
        -Gremio trasnporte',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '1 CONTRATO',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7634,
            'year' =>3,
            'value' => 0.1,
            'description' => 'Durante el primer semestre de 2022 se resaltan las siguientes actividades en el marco de la agenda de una agenda de investigación concertada y operando:
        -Fortalecimiento con la academia la agenda común establecida para la ejecución de proyectos de investigación prioritarios para nuestra región teniendo en cuenta el Plan de Investigación Ambiental
        -Convenio de Asociación No 13423-16 con la Universidad Santo Tomás, fortaleciendo con ello el trabajo conjunto de investigación con las universidades de la región
        -Avance con el Servicio Geológico Colombiano en propuesta de con venio para el Estudio de Microzonificación para el área metropolitana de Bucaramanga
        -Se avanzó en las actividades establecidas en el Convenio No 12686-08, con la realización visita conjunta a cada uno de las estaciones acelero gráficas realizando mantenimiento a los mismo.
        -Con la UDES, seguimos avanzando en el proyecto de Investigación del Observatorio Sismogeológico, mediante la puesta en tiempo real de todas las estaciones y el estudio de ampliar la red hacia los municipios de Lebrija, Playón y Rio Negro. Igualmente, se trabajó para la formulación de dos proyectos de investigación: El de la Ceiba Barrigona y el de la automatización de viveros.
        -Con la UPB, se terminó la ejecución del proyecto del Plan de Gestión de la Calidad del Aire y el Protocolo de Eventos Críticos proyecto establecido mediante convenio de Ciencia Tecnología e Innovación No 13364-17.
        -Se participó con la UDES, para presentar a Convocatorio de Minciencas, el proyecto Construcción de una Estrategia de Educación para la apropiación de los espacios verdes urbanos como ejes de mitigación y resiliencia al cambio climático y promoción de la salud en ciudades de la región andina.
        Con la UIS, se recibieron los avances del proyecto que se está apoyando relacionado con calidad del aire y salud ambiental, proyecto que está siendo financiado por Minciencias. 
        
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '4 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7635,
            'year' =>3,
            'value' => 0.08,
            'description' => 'La CDMB, está avanzando con el Programa Institucional Regional de Monitoreo PIRMA, el cual permitirá orientar estrategias y acciones que mejoraran la generación de información y conocimiento para la gestión integral del recurso hídrico, buscando fortalecer las capacidades de monitoreo del recurso hídrico y los procesos de flujo de información, abarcando la transferencia de información y conocimiento a instituciones, academia, sector productivo y a la población. Este programa cuenta con dos fases para su desarrollo: La fase de Diagnóstico y la fase de Formulación.
        En este primer semestre se elaboró la fase de diagnóstico y se está terminando la fase de formulación a finales del mes de julio. Este Programa se está elaborando mediante un Contrato de Consultoría No 13371-04 con el Consorcio IC-PIRMA. La fase diagnóstica se elaboró mediante 5 líneas estratégicas y mediante la realización de talleres con diferentes actores involucrados.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '4 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7636,
            'year' =>3,
            'value' => 0.5,
            'description' => 'El esquema de la gestión para la seguridad hídrica de la Unidad Hidrográfica del río Tona, se viene construyendo dentro del marco del Proyecto de Consultoría “Generar un Esquema de Seguridad Hídrica en el rio Tona”, el acompañamiento y asesoría de la Autoridad Holandesa del Agua – DWA, y el Comité Técnico de la Corporación.
        
        Como parte del ejercicio de integración de los diferentes procesos, se definió en primera instancia unos núcleos, que basan su identificación en la funcionalidad e integración a través de una red hídrica, asocia al plan de monitoreo participativo, lo que permitió en este primer semestre identificar a escala veredal y/o núcleo, las partes interesas y crear una motivación que permita contar con espacio de articulación alrededor del Desarrollo Local y especialmente la Seguridad Hídrica del rio Tona. 
        
        Estos espacios, en el momento cuentan con una idea, como apuesta de Desarrollo, que reconoce su vocación natural y cultural. Apuesta que desde el Monitoreo, y el espacio de articulación, planificación y gestión (esquema de seguridad hídrica), movilizará los recursos necesarios para su implementación, con las diferentes partes interesadas tanto a escala local, regional como internacional. 
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7637,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Dentro del marco del convenio INSPIRAGUA -CDMB se realizó articulación institucional para la implementación de las actividades de monitoreo participativo según las directrices del convenio: datos y conocimiento, partes interesadas y la institucionalidad; a desarrollarse en la Unidad Hidrográfica Río Tona, se concretaron 6 puntos de monitoreo con las comunidades de la Unidad Hidrográfica a las cuales se ha asistido técnicamente para la aplicación de la metodología y referentes de calidad y cantidad de agua presentes en los puntos, se desarrolló el tercer encuentro de gobernanza del agua que se cumplió en Santander en el marco del programa INSPIRAGUA Colombia liderado por las Autoridades Holandesas del Agua (DWA), cuyos miembros  brindaron formación y capacitación para los funcionarios de la CAS, CORPONOR, CORPOCALDAS, CORMAGDALENA y la CDMB, con el propósito de desarrollar actividades de extensionismo a las comunidades beneficiadas con el monitoreo participativo.
        
        De parte de la dirección general de la Corporación se cumplió visita a los Países Bajos (Holanda), por la invitación de la Dutch Water Authorities (DWA)  para cumplir una agenda técnica con los Países Bajos sobre la Gobernanza del Agua en los territorios. Un intercambio de conocimiento y experiencias técnicas exitosas dirigidas hacia la sostenibilidad y seguridad hídrica.  Como parte de las actividades nuestro director presentó el desarrollo de la gobernanza del agua en la jurisdicción durante su gestión. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '9 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7638,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Para el cumplimiento del 0.5 de avance de la meta la CDMB firmó el contrato No 13396 cuyo objeto es “CONCERTAR E IMPLEMENTAR LA PLATAFORMA COLABORATIVA DE LA SUBZONA HIDROGRÁFICA RIO LEBRIJA CON UN ESQUEMA DE SEGURIDAD HÍDRICA PARA EL RIO TONA, el cual a la fecha tiene un 57% de ejecución en tiempo, destacando la adquisición de la imagen satelital con una resolución y nivel de detalle de 50 cm de la cuenca del Rio Tona con una área aproximada de 19,5 Km2 , como insumo para la  identificación de  los tipos de vegetación que circundan la cuenca y los trabajos topográficos adelantados en 11 Km de longitud de la cuenca del río Tona donde se está realizando la delimitación de la forma principal del cauce permanente (lecho).',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7639,
            'year' =>3,
            'value' => 0.1,
            'description' => 'Durante el primer semestre de 2022, se realizó la elaboración y formulación del proyecto denominado DISMINUCIÓN DE LA CONTAMINACIÓN GENERADA POR LA DISPOSICIÓN INADECUADA DE ENVASES Y EMPAQUES DE AGROQUÍMICOS EN EL CORREGIMIENTO DE BERLÍN MUNICIPIO DE TONA, a partir del diagnóstico realizado en la vigencia 2021 en dicha localidad, en donde se constató la urgente necesidad de apoyar la problemática ambiental por la inadecuada disposición de los embalses de los productos agroquímicos utilizados en los procesos productivos de la zona.  Dicho proyecto servirá de base para la iniciación de las actividades, formulación del mismo en las metodologías pertinentes y planteamientos de las estrategias a seguir en donde la educación ambiental serán un pilar determinante en la consecución de los objetivos propuestos.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '9 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7640,
            'year' =>3,
            'value' => 0.1,
            'description' => 'Durante el primer semestre de 2022, se logró avanzar en el cumplimiento de la meta con la elaboración del documento y socialización del proyecto de acuerdo de producción más limpia con el sector porcino.  En dicha socialización participaron los diferentes asociados de Porkcolombia, buscando avanzar en un proceso de prevención, minimización y control de los impactos ambientales negativos de la producción porcina en la jurisdicción de la CDMB y facilitar el cumplimiento de la normativa ambiental vigente, que regula el manejo, tratamiento y disposición final de los residuos industriales (sólidos y líquidos) . El acuerdo que se planea suscribir en el segundo semestre de 2022 tendrá por objeto avanzar en un proceso creciente de eficiencia productiva y de prevención de efectos negativos ambientales en el sistema de explotación Porcícola, dando cumplimiento a la normatividad ambiental, especialmente a los principios competencias establecidas en la Ley 99 de 1993 y demás normativa ambiental y sanitaria vigente.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '9 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7641,
            'year' =>3,
            'value' => 0.25,
            'description' => 'Continuando con la modernización de nuestras redes de monitoreo, con el fin de capturar información confiable, oportuna para la toma de decisiones, soportadas en un sistema de información ambiental, se desarrollaron las siguientes acciones durante el primer semestre 2022:
        - Se estructuró la operación de las cuatro (4) estaciones del Sistema de Vigilancia de Calidad del Aire – SVCA y las siete (7) estaciones de Olores Ofensivos, de acuerdo el procedimiento y cronograma de trabajo, los equipos de calidad del aire requieren verificaciones de flujo; de cero y spam con gases patrones quincenales. En paralelo se realiza un reporte semanal de calidad del aire y meteorología del SVCA. 
        -Se elaboró el Informe de Calidad del Aire correspondiente al año de 2021 y se realizó el correspondiente cargue de la información a la plataforma SISAIRE del IDEAM.
        -Se avanzó en la elaboración, revisión, modificación y creación de distintos procedimiento y formatos, que permitan cumplir con la norma ISO/IEC 17025:2017, llevar la trazabilidad de la operación y mantenimiento de los equipos que conforman el SVCA.
        -En la Red de acelerografos se realizaron los mantenimientos correctivos y preventivos, garantizando con ello, la confiabilidad de la información reportada. Dicho mantenimiento consiste en descarga de datos, verificación del funcionamiento de los equipos, adicionalmente el mejoramiento del sistema de alimentación por panel solar.
        -Se realizaron las visitas de mantenimiento correctivo y preventivo de las redes hidroclimatológicas, consistente en descarga de datos, verificación del funcionamiento de cada estación visitada, limpieza de estación, verificación de los voltajes de las baterías del sistema, análisis de datos y su depuración, cargue y análisis. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '14 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7643,
            'year' =>3,
            'value' => 0.17,
            'description' => 'En el transcurso del PRIMER SEMESTRE del año 2022, se elaboraron por parte del equipo de Gestión de Riesgo conceptos técnicos, fortaleciendo de esta manera el conocimiento de las amenazas naturales en la Jurisdicción de la CDMB, así como generando de igual manera nuevos insumos para la GEODATABASE, aportando nuevos puntos de información que constituyen un insumo importante en la consolidación de información para el cumplimiento de los objetivos planteados
        -Se  realizó el inventario de movimientos en masa, la zonificación de pendientes, las unidades geológicas superficiales y las unidades geomorfológicas para generar el mapa de susceptibilidad por movimientos en masa a escala 1:25.000 y escala 1:5.000 para los municipios de California, Charta, El Playón, Lebrija, Matanza, Rionegro, Tona y Vetas.
        
        -Se determinaron las áreas susceptibles de afectación ante crecientes súbitas por causas sísmicas, hidrometeorológicas extremas o bloqueos de cauce análisis realizado para los municipios de California, Charta, El Playón, Lebrija, Matanza, Rionegro, Tona y Vetas.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7644,
            'year' =>3,
            'value' => 14,
            'description' => 'Durante el primer semestre del año 2022, la Subdirección de Gestión del riesgo y Seguridad Territorial, brindó acompañamiento, asesoría y apoyo a los diferentes Consejos Municipales para la Gestión del Riesgo de Desastres convocados por los diferentes municipios de Jurisdicción de la CDMB, en aproximadamente 77 ocasiones.
        
        Remisión a cada uno de los municipios de la CIRCULAR CDMB No. 0002 del 07 de Marzo de 2022 “SOCIALIZACIÓN Y RECOMENDACIONES PARA LA ADOPCIÓN DE MEDIDAS ORIENTADAS A LA DISMINUCIÓN DEL RIESGO POR INICIO DE LA PRIMERA TEMPORADA DE MAS LLUVIAS AÑO 2022',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '59 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7645,
            'year' =>3,
            'value' => 5,
            'description' => 'Se realizó asesoría a los Municipios de Lebrija, Floridablanca, Tona, Playón y Girón, donde se socializó la Ley 2169 de 2021 de medidas de inclusión de cambio climático, matriz de consolidación de acciones de mitigación y adaptación al cambio climático y contribuciones determinadas a nivel nacional (NDC)  ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '59 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7646,
            'year' =>3,
            'value' => 1,
            'description' => 'Participación en el Taller presencial de maduración de proyectos climáticos.  Por parte de la CDMB se presentó el Proyecto de Nanotecnología para incremento de la eficiencia de consumo de combustible llamado NANOMAC. 
        
        Apoyo a la Formulación del Plan Integral de Gestión del Cambio Climático Sector Defensa -PIGCCS-D
        
        Participación en Reuniones de la Mesa de Planeación del NRNCC.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '59 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7647,
            'year' =>3,
            'value' => 0,
            'description' => 'La CDMB tiene en ejecución los siguientes contratos:
        -Contrato de Obra Pública No 12939: 
        “En el sector de Girardot avanzamos un 100% en la construcción de una pantalla anclada de 2295 m² con 480 unidades de anclajes activos. 
        En el sector de Campo Hermoso avanzamos un 100% en la construcción de una pantalla anclada de 2295 m² con 480 unidades de anclajes activos. 
        
        Contrato de obra Pública No 13367
        Avance del : 80,7% CONSTRUCCIÓN DE OBRAS DE MITIGACION Y ESTABILIZACION EN LOS SECTORES DE VILLABEL, TALUD NORTE DEL MUNICIPIO DE FLORIDABLANCA
        
        Contrato de obra pública No 13369
        Avance del 97,2% CONSTRUCCIÓN DE OBRAS DE MITIGACION Y ESTABILIZACION EN EL SECTOR BARRIO PABLO VI, ZONA DE ESCARPA, EN EL MUNICIPIO DE BUCARAMANGA 
        
        Contrato de obra pública No 13954; 
        Avance del 55.06% CONSTRUCCIÓN DE OBRAS DE CONTROL DE EROSIÓN EN EL TALUD DEL SECTOR CRÍTICO DEL BARRIO NARIÑO UBICADO EN EL MUNICIPIO DE BUCARAMANGA
        
        Contrato No 13962
        Avance del 16,7% CONTRATAR EL SUMINISTRO DE MAQUINARIA PESADA PARA LA PREVENCIÓN, ATENCIÓN Y CONSOLIDACIÓN POR MEDIO DE LA DEMOLICIÓN Y LIMPIEZA DE SECTORES DEL AREA DE JURISDICCION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '59 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7648,
            'year' =>3,
            'value' => 0.1,
            'description' => 'Durante el primer semestre de 2022, se adelantó la construcción de la línea base de información sobre biodiversidad y los servicios eco sistémicos que aporta a la Estrategia de Conservación, Manejo y Uso de la Biodiversidad a partir de la Estructura Ecológica Principal y la Restauración Ecológica Participativa, la cual consistió en la revisión de fuentes de información secundaria, como investigaciones, bases de datos, proyectos desarrollados en jurisdicción CDMB.
        
        Igualmente en el levantamiento de información primaria de la biodiversidad en sitios priorizados, donde se avanzó en la caracterización de la fauna y flora especialmente en sitios con vacíos de información en biodiversidad',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '23 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7649,
            'year' =>3,
            'value' => 65173,
            'description' => 'Durante el primer semestre se realizó la siembra de 65.173 árboles en el marco de la gran Sembratón Nacional, en cumplimiento de la meta del PAC de 190.000 árboles, para la vigencia del 2022, en los trece municipios de la jurisdicción de la CDMB',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '23 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7650,
            'year' =>3,
            'value' => 83,
            'description' => 'Se  vincularon  ochenta y tres (83) personas en acciones se restauración, conservación y preservación de la base natural,   a través del establecimiento de  alianzas estratégicas participativas con FENAVI, comunidades del corregimiento de Berlín en el municipio de Tona,  acciones para la restauración de áreas degradadas de ecosistemas de alta importancia ambiental, en la jurisdicción de la CDMB y  la asociación de productores de mora en el municipio de Piedecuesta y la comunidad del filo de los amores en Lebrija; estas acciones continúan realizándose, en todo el territorio y son producto principalmente del desarrollo de 33  eventos y jornadas de manejo participativo, en los que se han logrado  vincular a poblaciones  de manera masiva,  tanto en las capacitaciones como en las jornadas de  restauración. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '23 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7651,
            'year' =>3,
            'value' => 0,
            'description' => 'Se desarrollaron 33 visitas de seguimiento de las áreas que fueron aisladas en las zonas de protección de fuentes hídricas del Páramo Santurbán así como de los usuarios que implementaron procesos de micro planificación participativa en sus predios y que actualmente hacen parte del Pago por Servicio Ambiental – PSA, que viene realizando la Corporación desde el año 2020. 
        Este seguimiento se realiza con el fin de verificar sí hay una continuidad en el cumplimiento de los acuerdos de voluntades para la conservación de estas áreas estratégicas, firmado entre la CDMB y los beneficiarios, y así poder extender el PSA por esta vigencia, por lo que, en estas visitas se evalúa el comportamiento de las coberturas vegetales y del recurso hídrico después de aislar y dejar las áreas sin la presencia de ganado vacuno.
        Como resultado de los recorridos, se ha logrado evidenciar un cambio significativo en las áreas aisladas de páramo, en cuanto a la cantidad de especies que empiezan a rebrotar tales como las rosetas, puyas, chusques, lupinus, romero, frailejones y el colorado de paramo al no tener la presión del ganado vacuno pueden desarrollarse con más facilidad.
        
        la Subdirección de Gestión Integral de la Oferta Ambiental junto con el municipio de Piedecuesta, han adelantado tres (3) reuniones significativas con el fin de establecer la ruta a seguir para la generación de un sistema de Pago por Servicios Ambientales de aplicabilidad en dicho municipio. De estos encuentros se logró acordar que la CDMB hará un acompañamiento mediante asesoría jurídica y técnica, además de la información que requieran para el desarrollo de su PSA, el cual estará enfocado para usuarios del área de incidencia del PNR Bosques Húmedos Andinos El Rasgón.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7652,
            'year' =>3,
            'value' => 0.1,
            'description' => 'Se realizó la consolidación de un equipo multidisciplinar de educación ambiental, capacitado para hacerle frente a los retos que representa la construcción de un territorio con habilidades y aptitudes investigativas.  Este ha sido el primer paso para fortalecer y dinamizar los CIDEAS municipales, ruta metodológica que propone la política nacional de educación ambiental para la resignificación de Proyectos Ambientales Escolares (PRAE) y Proyectos Ciudadanos de Educación Ambiental (PROCEDA). En este sentido y teniendo en cuenta que este proceso es continuo y representa constantes esfuerzos institucionales que garanticen la creación y puesta en marcha de agendas territoriales edu-ambientales, la oficina de Gestión Social y Ambiental-GESA Puso en marcha una estrategia de movilización de actores del SINA  que permitió la interacción, y la puesta en marcha del plan general de capacitación para fomentar la cultura investigativa, el espíritu científico y la construcción de saberes en los dinamizadores ambientales.  A la fecha se ha realizado la socialización del Plan Decenal de Educación Ambiental Santander 2020-2030, la capacitación de instituciones educativas en habilidades investigativas para la resignificación de PRAES Y la formación empresarial a través de un diplomado sobre acciones frente al cambio climático en convenio con la Universidad EAN.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '90 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7653,
            'year' =>3,
            'value' => 150,
            'description' => 'En el primer semestre del 2022 se dio cumplimiento a la meta correspondiente a contextualizar y socializar la guía estratégica CIDEA en el área de jurisdicción de la CDMB, logrando impactar 150 personas, en los municipios de: Lebrija, Girón, Surata, Tona, Rionegro, california y el Playón.
        Se logró convocar el Comité Técnico Interinstitucional de Educación Ambiental – CIDEA en cada territorio de la jurisdicción de la CDMB, donde se socializaron los lineamientos de planificación de cada ente territorial en materia de educación ambiental (Plan de desarrollo, Esquema de ordenamiento territorial, entre otros).  Así mismo se realizó la socialización y divulgación de la Política Nacional de Educación Ambiental y de la Guía Estratégica CIDEA, haciendo entrega de estos documentos a los nuevos actores que conforman los comités Interinstitucionales de educación ambiental para la presente vigencia.  
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '90 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7655,
            'year' =>3,
            'value' => 1500,
            'description' => 'Para el primer semestre de 2022, se dio cumplimiento al 100% de la meta, impactando a través de 60 jornadas ambientales a más de 1500 personas.   Esta estrategia de intervención desde la gestión ambiental y la educación ambiental, ha fortalecido a la sociedad civil en su capacidad de movilidad hacia las Jornadas ambientales, que generan espacios participativos de trabajo conjunto sensibilizando, educando y propiciando en las comunidades buenas prácticas ambientales.  Este trabajo se ha logrado trabajando articuladamente con actores estratégicos como lo son la Policía Nacional, Ejercito Nacional, Entes Territoriales, Empresas de Servicios Públicos, EMPAS, Presidentes JAC, JAL, actores sociales y comunidad en general de los Municipios impactados, en donde se han realizado entre otras actividades las sembratones, limpiezas a fuentes hídricas y  limpiezas de zonas ecológicas, de la mano con el proceso de sensibilización y educación ambiental frente al correcto manejo de los recursos naturales, cuidado de los ecosistemas, correcta disposición de residuos sólidos, y uso y cuidado del agua. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '90 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7656,
            'year' =>3,
            'value' => 10,
            'description' => 'El año 2022 llegó con nuevos desafíos y metas para la entidad y para la oficina de Prensa y Comunicaciones. Es así que luego de un año 2021 exitoso y de posicionamiento de imagen de la entidad; asumimos el gran reto de mantenernos y superar las metas propuestas en temas de divulgación de información de la CDMB. 
        
        Es así como en el primer semestre del año en curso se logró el cumplimiento del 100% en ejecución de nuestra meta: apoyo a la publicación y divulgación de la gestión institucional, técnica, académica y administrativa, teniendo como pilar estratégico nuestras campañas edu-comunicativas y la publicación de videos informativos de la gestión de la CDMB, destacando los logros y las relaciones con las partes interesadas, así como también la elaboración de piezas publicitarias con temas relacionados en las fechas especiales ecológicas.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '90 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7657,
            'year' =>3,
            'value' => 950,
            'description' => 'Durante el primer semestre de 2022 Se logró convocar y formalizar los comités interinstitucionales de Educación ambiental CIDEA en los municipios de la Jurisdicción; Estos comités se constituyen en eje soporte de la Educación Ambiental y a través de las sesiones programadas, se realizó el acompañamiento técnico para la formulación y ejecución de los planes de acción, que marcaron la hoja de ruta para la realización de las diversas actividades contempladas en materia de Educación Ambiental en los territorios. 
        Se socializó el documento diagnóstico ambiental participativo en 12 municipios del área de jurisdicción de la CDMB. Con el propósito de orientar y armonizar acciones de PRAES, CIDEAS Y PROCEDAS para la solución de su problemática ambiental directa.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '90 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7658,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizó la socialización del avance del documento preliminar del Plan Departamental de Negocios Verdes ante el comité de la Mesa de Bosques de Santander, donde, además, se prestó el acompañamiento a la empresa BUCARRETES, la cual presentó a los integrantes de la Mesa, una propuesta de uso sostenible del bosque y sus productos.
        
        Se han llevado a cabo numerosas jornadas de trabajo con los integrantes del Nodo conformado por los delegados de la Gobernación de Santander, el Ministerio de Ambiente y Desarrollo Sostenible MADS, la CAS y la CDMB como autoridades ambientales del departamento. Cabe señalar que, a finales del año 2021, fue creada la Secretaría de Ambiente en la Gobernación de Santander, la cual, a partir del año 2022, es la dependencia asignada para desarrollar los compromisos adquiridos.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '66 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7659,
            'year' =>3,
            'value' => 70,
            'description' => 'Dentro del primer semestre de la vigencia 2022, la Subdirección de Gestión Integral de la Oferta Ambiental, continuó con las actividades de acompañamiento de las empresas y emprendimientos inscritos en el Programa Regional de Negocios Verdes, reportándose el apoyo total de setenta (70) empresas, a quienes se les  ha venido realizando acompañamiento y asistencia técnica por parte de la CDMB; es así como durante estos meses se desarrollaron actividades de fortalecimiento  empresarial con la implementación de la estrategia Agrosena donde se asesora a los empresarios en temas de Finanzas, Viveros, Biofertilizantes, BPAs, entre otros; igualmente se hace  la promoción y exaltación a través de las redes sociales de la entidad, tanto  de los productos como de los  reconocimientos internacionales obtenidos en 
        Premios Verdes por las empresas Replasander y Bucarretes en las categorías de Residuos Sólidos y Economía Circular respectivamente. Adicionalmente se gestionó el Diplomado Acción Privada Frente al Cambio Climático con Enfoque Regional, convenio CDMB- y la Universidad EAN, donde seis (6) empresarios de Negocios Verdes están vinculados en este importante espacio de formación, la cual será debidamente certificada.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '66 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7660,
            'year' =>3,
            'value' => 1,
            'description' => 'En las actividades desarrolladas en el primer semestre de año 2022, se identificó una comunidad de la vereda Filo de los Amores en el municipio de Girón con quienes actualmente se está iniciando su proceso de formalización para el desarrollo de la actividad productiva apícola; dentro del acompañamiento a esta iniciativa de ecoproductos, la Corporación ha generado espacios de capacitación y asistencia técnica junto con el SENA, en temas relacionados con la importancia de la  asociatividad y fortalecimiento organizacional, seguridad alimentaria, mecanismos financieros para el desarrollo de actividades productivas y métodos de financiación a través del Fondo emprender; igualmente se ha realizado capacitaciones para ejercer e impulsar la apicultura en la región, por lo cual se vienen consolidando acercamientos con el programa Tecnoparque del SENA para la promoción productiva de este sector mediante la investigación y la innovación',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '66 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7661,
            'year' =>3,
            'value' => 0,
            'description' => 'La Corporación Autónoma Regional para la Defensa de la meseta de Bucaramanga sigue fortaleciendo y apoyando a la Corporación, 36 Emociones en la reactivación del Turismo de Soto Norte; en esta ocasión se adelantaron las actividades de concertación y socialización de  planes de trabajo y se realizaron salidas de campo para la recolección de material audiovisual y fotográfico que permita impulsar el desarrollo turístico sostenible, seguro, de calidad y con cobertura, a través de la promoción de atractivos tanto culturales y naturales más representativos de cada municipio,. Adicionalmente desde la CDMB se ha venido acompañado las reuniones de los consejos consultivos de Turismo de los municipios de Soto Norte, para así continuar con la consolidación de actividades que se encuentran proyectadas en los planes sectoriales de turismo y hacer la entrega, por parte de la CDMB, de las seis vallas de información turística diseñadas y que se encuentran en su etapa de aprobación e instalación en esta Provincia',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '66 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7662,
            'year' =>3,
            'value' => 30,
            'description' => 'Durante el primer semestre del año 2022, la CDMB ha logrado beneficiar, a la fecha, un total de  treinta (30) familias, en  el marco del  proyecto “IMPLEMENTACIÓN DE SISTEMAS SOSTENIBLES (ARREGLOS AGROFORESTALES, CON COBERTURAS ALIMENTARIAS, FRUTALES DIVERSOS CON MADERA FINA TROPICAL ABARCO), CAPACES DE MITIGAR LOS EFECTOS DEL CAMBIO CLIMÁTICO, CON ENFOQUE DE DESARROLLO BAJO EN CARBONO Y RESILIENTE AL CLIMA, BRINDANDO A LOS PRODUCTORES DE LOS MUNICIPIOS DE BUCARAMANGA, GIRÓN, FLORIDABLANCA, PIEDECUESTA, LA OPORTUNIDAD DE TRABAJAR, RECUPERAR PROTEGER SUS PREDIOS, BAJO LA PREMISA DE PRODUCIR CONSERVANDO Y CONSERVAR PRODUCIENDO”
        
        El proyecto contempla la implementación de 76 ha agroforestales, 1 ha por predio, para beneficiar a 76 familias.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '66 CONTRATOS',
            'state_id' => 1201,
            'date_report' => '2022-6-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        
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
