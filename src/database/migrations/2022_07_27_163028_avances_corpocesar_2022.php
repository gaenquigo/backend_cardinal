<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorpocesar2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 14224,
            'year' =>3,
            'value' => 1,
            'description' => 'En proceso de formulación proyecto de PSA en áreas de interés estratégico en la Serranía del Perijá en coordinación con las comunidades beneficiarias',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14225,
            'year' =>3,
            'value' => 0,
            'description' => 'No hay proyectos de PSA en ejecucion ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14226,
            'year' =>3,
            'value' => 0,
            'description' => 'No hay proyectos de PSA en ejecucion ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14228,
            'year' =>3,
            'value' => 1,
            'description' => 'Se ejecuto el convenio Nº 19-7-0001-0-2022 del 26 de enero de 2022 para el fortalecimiento de los negocios verdes del departamento del Cesar.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-7-0001-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14229,
            'year' =>3,
            'value' => 3,
            'description' => 'Se  identificaron 3 negocios verdes  en el desarrollo de la rueda de negocios y feria empresarial realizada el dia 3 de junio en el municipio de Aguachica los cuales se encuentra en proceso de verificacion. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0105-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14230,
            'year' =>3,
            'value' => 85,
            'description' => 'A través del convenio 19-7-0001-0-2022 del 26 de enero de 2022, se apoyaron 85 negocios verdes a los cuales se le actualizaron los datos y capacito en marketing digital, a 10 de estos negocios se les realizo el plan de marketing para el apoyo y crecimiento de la marca.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0104-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14231,
            'year' =>3,
            'value' => 15,
            'description' => 'Se realizó visita a los municipios de Agustín Codazzi, Aguachica y Bosconia con el fin de asesorarlos en la recolección de la información que deben suministrar para el cálculo del ICAU/PGAU. Se tiene previsto visitar el municipio de Valledupar en el segundo semestre de 2022.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0046-0-2022;19-7-0002-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14232,
            'year' =>3,
            'value' => 10,
            'description' => 'Se recibió comunicación por parte de ASOCAR para revisar y hacer recomendaciones en caso de requerirse en el proceso de ajustes de la Política de Gestión Ambiental Urbana 2021 - 2030.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14234,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizó socialización y coordinación de intervenciones que incluyen campañas educativas en los municipios de La Gloria, La Paz y Valledupar.                                                                                                            
        A) La Paz, se visitaron 5 puntos críticos de depósito de residuos sólidos con el acompañamiento de la Alcaldía Municipal, INTERASEO, Recicladores, PONAL y la comunidad aledaña en la cual se realizaron actividades de promoción del aprovechamiento y destino final de residuos sólidos. 
        B) Valledupar, se coordinó con el grupo PGIR la realización de campañas educativas con el objetivo de reducir el depósito de residuos sólidos en áreas no permitidas y la recuperación de boulevares.
        C) Se espera realizar una actividad en el municipio de la Gloria en el segundo semestre.
        Mediante el Contrato No. 19-6-0179-0-2022 para la actualización del plan departamental de tratamiento de residuos peligrosos se realizarán campañas educativas.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0092-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14235,
            'year' =>3,
            'value' => 12,
            'description' => 'Se brindó apoyo logístico en la participación de la feria de negocios verdes a través del convenio 19-7-0001-0-2022 del 26 de enero de 2022. 
        Los negocios beneficiados son: VIDECO, COONSERVAR, Boquerón Recicla, Fundación la victoria Recicla, INGEQUILIBRIO, Fundación Turri es, Caribe más limpio, Orozul, CORRENACER, Tienda Cala, Paisaje Verde y ASOGEMED.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-7-0001-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14236,
            'year' =>3,
            'value' => 100,
            'description' => 'Se participó de la Mesa realizada en el primer trimestre.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-7-0001-0-2023',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14237,
            'year' =>3,
            'value' => 13,
            'description' => 'Se realizó seguimiento a los municipios de La Paz, El Paso, San Diego, Manaure, Agustín Codazzi, Becerril, Curumaní, Pailitas, Pelaya, Tamalameque, La Jagua de Ibirico, Bosconia, Rio de Oro.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14238,
            'year' =>3,
            'value' => 50,
            'description' => 'En evaluación los PGIRS de La Paz, La Gloria y Rio de Oro presentados al comité evaluador del cual CORPOCESAR hace parte.
        Se realizaron reuniones virtuales de seguimiento a la ejecución de los PGIR de La Paz, El Paso, San Diego, Manaure, Codazzi, Becerril, Curumaní, Pailitas, Pelaya, Tamalameque, La Jagua de Ibirico, Bosconia, Rio de Oro, Valledupar, Chiriguana, Astrea, Pueblo Bello
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14239,
            'year' =>3,
            'value' => 0,
            'description' => 'Se elaboró estudio previo para el apoyo de proyectos pilotos.  IMPLEMENTACIÓN DE ACCIONES DE LA ESTRATEGIA DE ECONOMÍA CIRCULAR Y ECONOMÍA AMBIENTAL PARA LA PRODUCCIÓN SOSTENIBLE EN EL SECTOR TURISMO Y BIOCOMERCIO DE LA CIUDAD DE VALLEDUPAR – CESAR',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14240,
            'year' =>3,
            'value' => 0,
            'description' => 'Se elaboró estudio previo para el apoyo de proyectos pilotos.  IMPLEMENTACIÓN DE ACCIONES DE LA ESTRATEGIA DE ECONOMÍA CIRCULAR Y ECONOMÍA AMBIENTAL PARA LA PRODUCCIÓN SOSTENIBLE EN EL SECTOR TURISMO Y BIOCOMERCIO DE LA CIUDAD DE VALLEDUPAR – CESAR',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14241,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realiza gestión ante la UPME de un proyecto para la implementación de sistemas de energía solar en instituciones educativas del municipio de Valledupar.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14242,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizo consulta al MADS sobre procedimiento para el establecimiento de lineamientos sectoriales desde la corporación  y se espera la respuesta a la consulta.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14243,
            'year' =>3,
            'value' => 0,
            'description' => 'No se ha realizado estudio',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0179-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14244,
            'year' =>3,
            'value' => 100,
            'description' => 'Se participo en las 4 mesas tecnicas COTSA invitadas                                                                                                                                                                                                                                                                  A) Coord. GIT saneamiento 3 reuniones                                                                                                                                                                                                                                                                                             B) Coord. GIT Laboratorio Ambiental, no se ha requerido su participacion                                                                                                                                                                                                                             C) Coord Educacion Ambiental 1 reunion ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14246,
            'year' =>3,
            'value' => 2,
            'description' => 'En ejecución los Proyectos en el PNR Perijá y la Ecorregión Ciénega Zapatosa
        
        
        Además, se formuló y se encuentra en etapa de contratación para ejecutar en la cuenca Garupal Diluvio del municipio de Valledupar el proyecto con objeto: Realización de acciones para la implementación del Plan de Acción Regional de lucha contra la desertificación y sequía y manejo del Bosque seco tropical en las cuencas de los ríos Garupal y Diluvio municipio de Valledupar y el Copey Cesar, de acuerdo a los alcances y especificaciones técnicas contempladas por CORPOCESAR el cual contemplan 7 acciones PAR.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0067-0-2022;19-6-0064-0-2022;19-6-0101-0-2022;19-6-0087-0-2022;19-6-0097-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14247,
            'year' =>3,
            'value' => 0,
            'description' => 'Se activó el comité coordinador del convenio 19-7-0012-02019 de diciembre 18 de 2019, mediante acta del 15 de junio de 2022 entre UN y CORPOCESAR con el fin de generar espacios académicos.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14249,
            'year' =>3,
            'value' => 0,
            'description' => 'Esta validada la información para la transmisión al IDEAM que se efectuara antes del 30 de julio de 2022.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0067-0-2022; 19-6-0064-0-2022;19-6-0101-0-2022;19-6-0087-0-2022;19-6-0097-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14250,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizaron capacitaciónes a IPS para el diligenciamiento y reporte del Registro RESPEL en la plataforma del IDEAM',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0179-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14251,
            'year' =>3,
            'value' => 1,
            'description' => 'Se cuenta con un plan desde el año 2018 mediante el cual se implementan estrategias y actividades 
        
        Con el objetivo de actualizarlo se adelanta con el MADS el diseño de un nuevo Programa de Reducción de la Contaminación del Aire-PRCA el cual se espera articular con ANLA y otras autoridades territoriales para complementar su contenido y compile las nuevas actualizaciones normativas
        
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14252,
            'year' =>3,
            'value' => 0,
            'description' => 'Se adelanta gestion para la contratación del monitoreo de fuentes móviles.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14253,
            'year' =>3,
            'value' => 40,
            'description' => 'A) Se realizaron movimientos internos de equipos e instrumentos de medidas en la red de monitoreo para garantizar la medición de los parámetros acreditados. 
        
        
        B) Se implementaron nuevos procedimientos guías y registros en el sistema de gestión de calidad para fortalecer los soportes que acreditan el monitoreo de la calidad del aire 
        
        
        C) Se adelanta gestión para la suscripción de convenio con CNR con el objetivo de realizar caracterización físico química a los filtros y establecer las fuentes de contaminación que impactan sobre la calidad del aire.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0183-0-2020',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14254,
            'year' =>3,
            'value' => 10,
            'description' => 'Se realiza el monitoreo al área fuente con equipos fijos. Se adelanta el estudio previo para la contratación de Fuentes Móviles de monitoreo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0183-0-2020',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14255,
            'year' =>3,
            'value' => 0,
            'description' => 'Al finalizar el segundo semestre de 2022 se entregarà estudio de las fuentes fijas de emision identificadas.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14256,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Constantemente se realiza verificación de los equipos de monitoreo para garantizar que las mediciones se realicen de acuerdo al protocolo de monitoreo de calidad del aire Res. 2154 de 2010, con el objetivo de que sean representativas y determinantes para implementar los planes de prevención y control a la contaminación del aire, las actividades operativas realizadas corresponden a calibraciones, verificación de flujos y mantenimiento periódico a las 17 estaciones del SVCA de acuerdo a los planes de monitoreo.
        
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0183-0-2020',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14257,
            'year' =>3,
            'value' => 50,
            'description' => 'Se realizó control y seguimiento a 12 fuentes fijas de emisión de 24 con expedientes sujetos a seguimiento.
        La coordinación GIT del Laboratorio Ambiental gestiono capacitaciones relacionadas con seguimiento y evaluación de estudios isocinéticos a permisos de emisiones atmosféricas e inventarios de fuentes fijas.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0183-0-2021',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14258,
            'year' =>3,
            'value' => 25,
            'description' => 'La información de calidad del aire está cargada hasta el mes de marzo de 2022',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0183-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14259,
            'year' =>3,
            'value' => 4,
            'description' => '1. En la actualidad se adelanta convenio interadministrativo 03-2022, ed Alianza Colombiana De Instituciones Públicas de Educación Superior Red SUMMA, cuyo objeto es “AUNAR ESFUERZOS TÉCNICOS, ADMINISTRATIVOS Y FINANCIEROS PARA LA IMPLEMENTACIÓN DE UNA ESTRATEGIA PEDAGÓGICA DE CONCIENCIA AMBIENTAL y FORTALECIMIENTO A LA GESTIÓN INTEGRAL DEL RIESGO AMBIENTAL Y CLIMÁTICO COMO APOYO A LOS PORH EN ÁREAS RURALES DE LOS MUNICIPIOS DE LA JAGUA DE IBIRICO, SAN DIEGO, LA PAZ Y EL PASO – CESAR”
        
        2 Se adelanta contrato, cuyo objeto es “IMPLEMENTACION DE ACCIONES DE RESTAURACION CON GUADUA Y OTRAS ESPECIES NATIVAS EN AREAS PRIORIZADAS DE LA JURISDICCION DE CORPOCESAR, DEPARTAMENTO DEL CESAR.”
        
        3. En la Actualidad se encuentra en etapa de Formulación el Plan de Manejo del Distrito Regional de Manejo Integrado DRMI Complejo Cenagoso de Zapatosa CCZ
        
        4.Se adelanta contrato, cuyo objeto es la “IMPLEMENTACIÓN DE ACCIONES DE RESTAURACIÓN EN LA MICROCUENCA DEL RÍO CHISKUINDJA EN EL RESGUARDO INDÍGENA KANKUAMO EN EL MUNICIPIO DE VALLEDUPAR.”
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14260,
            'year' =>3,
            'value' => 20,
            'description' => 'En marzo de 2022 se ofició al Ministerio de Ambiente y Desarrollo Sostenible solicitando apoyo para fortalecer capacidades y asistencia en incorporación del cambio climático al interior de la Coordinación del GIT de Cambio Climático, POMCAS y Ordenamiento Territorial, además de asesoría y capacitación para el manejo de la herramienta RENARE (Registro Nacional de Reducción de las Emisiones de Gases de Efecto Invernadero).
        Actualmente se encuentra en funcionamiento Link CORPOCESAR (Condiciones alertas ambientales, boletín especial sobre ciclones tropicales, variabilidad climática cambio climático, pronóstico del tiempo)
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14261,
            'year' =>3,
            'value' => 100,
            'description' => 'Se ha participado activamente en los encuentros del NORECCI (Nodo Regional de Cambio Climático Caribe e Insular). Durante los días 8 y 9 de marzo de 2022, se participó en el PRIMER ENCUENTRO DEL NORECCI DEL AÑO 2022, desarrollado en la ciudad de Barranquilla, en él se realizaron presentaciones sobre los avances de procesos e iniciativas de gran importancia en el país y la región, y se llevó a cabo el Taller de perfil sectorial para el PIGCCSD.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14262,
            'year' =>3,
            'value' => 100,
            'description' => 'Se desarrollaron las siguientes actividades de campo, destinadas a la evaluación del daño ambiental y necesidades ambientales (EDANA):
        
        
        • En el municipio de Agustín Codazzi (veredas La Duda, Milagro bajo, en la cuenca del río Magiriaimo y en las veredas La Iberia y Guaraní en la cuenca del río Sicarare), del 01 al 03 de marzo de 2022, zonas afectadas por incendios de la cobertura vegetal
        
        
        • En el municipio de El Copey (veredas Betania, Ley de Dios, Las Cumbres, La Paila), y en el municipio de Valledupar (vereda La Guitarra), del 08 al 10 de marzo de 2022, zonas afectadas por incendios de la cobertura vegetal 
        
        
        • En el municipio de Valledupar, en la zona urbana de Valledupar en el cerro La Popa (01 de abril de 2022)y en los corregimientos de Mariangola y Aguas Blancas (02 de abril de 2022), zonas afectadas por incendios de la cobertura vegetal 
        
        Estas acciones hacen parte de la metodología EDANA-C, la cual deberá ser aplicada para cada uno de los eventos en mención. La metodología ya fue expedida por el MADS y puede aplicarse, se encuentra en fase de ajuste para la incorporación de aspectos de costos sociales y económico en eventos desastrosos de origen natural.
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14263,
            'year' =>3,
            'value' => 30,
            'description' => 'La implementación de la EDANA-C deber darse una vez se formulen las medidas recomendadas para cada uno de los eventos atendidos, su ejecución dependerá de la disponibilidad de recursos económicos por parte de la entidad. 
        
        A) Se requiere servidor que acogerá el software ArcGIS el cual tiene licencias de uso activa adquirida en la presente vigencia
        
        B) Con el proyecto de Realización de acciones para la implementación del Plan de Acción Regional de lucha contra la desertificación y sequía y manejo del Bosque seco tropical en las cuencas de los ríos Garupal y Diluvio municipio de Valledupar y el Copey Cesar, algunas de las acciones de este proyecto están orientadas a ejecutar las observaciones derivadas de la EDANA- C en las cuencas mencionadas en las cuales se aplicó las metodologías por acción de incendios en la cobertura vegetal
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14264,
            'year' =>3,
            'value' => 0.05,
            'description' => 'La aplicación de la EDANA-C se podrá dar una vez se disponga del servidor que alojara el software ArcGIS y se ejecute el proyecto: Realización de acciones para la implementación del Plan de Acción Regional de lucha contra la desertificación y sequía y manejo del Bosque seco  tropical en las cuencas de los ríos Garupal y Diluvio municipio de Valledupar y el Copey  Cesar, algunas de las acciones de este proyecto están orientadas a ejecutar las observaciones derivadas de la EDANA- C en las cuencas mencionadas en las cuales se aplicó las metodología por acción de incendios en la cobertura vegetal',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14265,
            'year' =>3,
            'value' => 0,
            'description' => 'Se elaboró el estudio previo para contratación de la actualización del mapa de riesgo y el plan de prevención, mitigación y atención de contingencia por la ocurrencia de incendios de la cobertura vegetal. ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14266,
            'year' =>3,
            'value' => 0,
            'description' => 'Se contrato la IMPLEMENTACIÓN DE MEDIDAS ESTRUCTURALES Y NO ESTRUCTURALES PARA EL CONTROL DE LA EROSIÓN E INUNDACIÓN EN LA CORRIENTE SUPERFICIAL ANIME EN LOS MUNICIPIOS DE CHIRIGUANÁ Y CURUMANÍ DEPARTAMENTO DEL CESAR FASE II - No se encuentra registrado en los compromisos presupuestales con corte a junio, su ejecucion comienza  en el mes de julio',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14267,
            'year' =>3,
            'value' => 4,
            'description' => 'A) Se participó en el taller / reunión desarrollada en la vereda La Iberia, jurisdicción del municipio de Agustín Codazzi, el día 05 de febrero de 2022, para establecer estrategias de prevención de incendios, liderada por Extractora y Palmas Sicarare S.A.S
        
        B) Se participó, en una jornada de divulgación e intercambio con la comunidad Yukpa del resguardo de Sokorpa, el día 05 de abril de 2022, en la cual se abordó el tema de organización para la prevención y atención, de manera comunitaria, de incendios de la cobertura vegetal. 
        
        
        C) Se desarrolló del 23 al 25 de marzo de 2022, la actividad de recorrido de inspección al cauce del río Maracas en el sector agua arriba del proyecto minero Calenturitas, como acompañamiento a la Autoridad Nacional de Licencias Ambientales, en atención a una queja presentada relacionada con el desvío del río Maracas por la apertura del proyecto minero en citas.       
                                                                                                                                                                                                                                                                                                                          
        D) Se desarrolló taller para la presentación de 11 estrategias comunitarias para la atención y prevención de incendios de la cobertura vegetal en la comunidad indígena Yukpa en el resguardo Menkue y la comunidad aledaña de campesinos, las estrategias en cuestión se tomaron de la experiencia sobre brigadistas forestales en las cuencas de los ríos Garupal diluvio. 
        
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14268,
            'year' =>3,
            'value' => 2,
            'description' => 'La evaluación preliminar de las dos medidas ejecutadas, indica que es necesario dar continuidad a la misma debido a que el fortalecimiento de las organizaciones comunitarias no es algo que se logre en un solo momento y se requiere del compromiso de la comunidad y la entidad.
        
        
        Para el caso del resguardo Menkue, se realizó una segunda reunión el 7 de junio en la cual se expusieron 11 estrategias comunitarias para la atención y prevención de incendios de la cobertura vegetal, se evidencio que el fortalecimiento comunitario es un proceso continuo en el que la entidad debe apoyar.
        
        
        El informe del recorrido al río Maracas se entregó a la subdirección de gestión ambiental
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0052-02022;19-6-0053-0-2021',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14269,
            'year' =>3,
            'value' => 2,
            'description' => 'Se priorizaron las siguientes áreas estratégicas:                                    
                                                                           
        A) Ecorregión Ciénaga de Zapatosa 
                                                                                                                      
        B) áreas para restaurar en el PNR Perijá, las cuales se establecieron a partir de la Construcción del portafolio de proyectos en núcleos activos de deforestación y del portafolio de áreas prioritarias para las compensaciones orientadas a la conservación de la biodiversidad, restauración ecológica y el desarrollo sostenible en jurisdicción de CORPOCESAR.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0119-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14273,
            'year' =>3,
            'value' => 2,
            'description' => 'Proyecto PNR Perija y Ecorregion Cienega Zapatoza',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0070-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14275,
            'year' =>3,
            'value' => 2,
            'description' => 'Asistencia técnica a los grupos asistidos en los Proyectos PNR Perijá que incluye cuatro talleres de los cuales se han realizado 2.
        
        Ecorregión Ciénega Zapatosa
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0070-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14276,
            'year' =>3,
            'value' => 2,
            'description' => 'Proyecto PNR Perija y Ecorregion Cienega Zapatoza',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0070-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14277,
            'year' =>3,
            'value' => 0,
            'description' => 'Se establecerá contacto con IDEAM para reiniciar el apoyo a la generación de un sistema de detecciones tempranas de cambios en ecosistemas estratégicos. Estas acciones permiten visualizar por medio de los boletines las áreas y núcleos de deforestación en la Corporación, así como hacer un seguimiento más eficiente al proceso de deforestación que se tiene en Corpocesar.  ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17130,
            'year' =>3,
            'value' => 20,
            'description' => 'El salvoconducto se encuentra activo para el registro de aprovechamiento forestal.
        
        En el primer semestre el MADS realizo el lanzamiento del libro de operaciones en línea en la plataforma VITAL por lo cual la inscripción es en línea, para tal fin se socializa la nueva metodología a las empresas forestales de la región.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0078-0-2022; 19-6-0065-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17131,
            'year' =>3,
            'value' => 3,
            'description' => 'A) Implementación de estrategias para la conservación, uso sostenible de la biodiversidad y restauración de los servicios ecosistémicos del complejo cenagoso de Zapatosa, en los municipios de Tamalameque, Curumaní y Chiriguaná departamento del Cesar 
        
         B)Implementación de acciones de restauración con guadua y
        otras especies nativas en áreas priorizadas de la jurisdicción de Corpocesar,
        departamento del Cesar.                                                                                                                       C) Implementación de acciones de restauración en áreas de interés estratégico en la serranía del Perijá en el departamento del Cesar fase I',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0078-0-2022;19-6-0065-0-2024',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14281,
            'year' =>3,
            'value' => 3,
            'description' => 'A) Implementación de estrategias para la conservación, uso sostenible de la biodiversidad y restauración de los servicios ecosistémicos del complejo cenagoso de Zapatosa, en los municipios de Tamalameque, Curumaní y Chiriguaná departamento del Cesar 
        
         B)Implementación de acciones de restauración con guadua y
        otras especies nativas en áreas priorizadas de la jurisdicción de Corpocesar,
        departamento del Cesar.                                                                                                   C) Implementación de acciones de restauración en áreas de interés estratégico en la serranía del Perijá en el departamento del Cesar fase I',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0078-0-2022;19-6-0065-0-2025',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14283,
            'year' =>3,
            'value' => 2,
            'description' => 'Reunion con la alcaldia de Valedupar  y El Pilon en marco de la reunion de la mesa del arbol donde se reviso el Plan de Accion  del  municipio de Valledupar  relacionado  en temas ambientales,  Reuniones con Ejercito Nacional con el cual se realizaron jornadas de reforestacion.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0078-0-2022;19-6-0065-0-2027',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14284,
            'year' =>3,
            'value' => 0,
            'description' => 'Con motivo del cambio en el procedimiento del registro de las empresas forestales en el libro de operaciones el cual ahora se debe hacer en línea, se inició la socialización del mismo para actualizar el registro de las empresas forestales de la jurisdicción.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0051-0-2022;19-6-0078-0-2022;19-6-0082-0-2022;19-6-0054-0-2022;19-6-0095-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17132,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realiza la pedagogia dentro del proceso de visitas de seguimientro y control para dar a conocer los requisitos nnecesarios para acceder al reconocimiento.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0051-0-2022;19-6-0078-0-2022;19-6-0082-0-2022;19-6-0054-0-2022;19-6-0095-0-2024',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14287,
            'year' =>3,
            'value' => 4,
            'description' => 'Se realizaron 4 operativos los días 20 y 21 de mayo de 2022 en el puesto de Control Los Cauchos y en la vía Codazzi – Casacará, Municipio El Paso y Bosconia dando como resultado el decomiso de 136 m3 de maderas',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0051-0-2022;19-6-0078-0-2022;19-6-0082-0-2022;19-6-0054-0-2022;19-6-0095-0-2025',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14289,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizaron acciones mediante el contrato:  Implementación de estrategias para la conservación, uso sostenible de la biodiversidad y restauración de los servicios ecosistémicos del Complejo Cenagoso de Zapatosa, en el municipio de Chimichagua, departamento del Cesar',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0104-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14290,
            'year' =>3,
            'value' => 1,
            'description' => 'Fue formulado en alianza entre CORPOCESAR, MADS y WWF el Plan de Manejo de la reserva forestal protectora nacional cuenca alta de Caño Alonso de los municipios de Pelaya y la Gloria, el cual se encuentra en proceso de adopción por parte del MADS.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14291,
            'year' =>3,
            'value' => 1,
            'description' => 'Fue formulado en alianza entre CORPOCESAR, MADS y WWF el Plan de Manejo de la reserva forestal protectora nacional cuenca alta de Caño Alonso de los municipios de Pelaya y la Gloria, el cual se encuentra en proceso de adopción por parte del MADS.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14293,
            'year' =>3,
            'value' => 0,
            'description' => 'En marco del convenio 19-7-0012-02019 de diciembre 18 de 2019 suscrito entre la UN y CORPOCESAR, se realizó mesa técnica para reactivar actividades, en ese sentido se está concertando con esta Universidad suscribir convenio específico para correr la ruta de declaratoria como área protegida de categoría regional una zona de la cuenca media y alta de los ríos Tucuy y Sororia en los municipios de la Jagua de Ibirico y Becerril con una extensión de 19.154 hectáreas.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14295,
            'year' =>3,
            'value' => 0.1,
            'description' => 'Se han desarrollado reuniones con el Sistema Regional de Áreas Protegidas del Caribe Colombiano SIRAP CARIBE para gestionar la suscripción de un convenio con las universidades UNAD y UPC para el apoyo de acciones orientadas a la conservación de la biodiversidad y creación de sistemas locales de APR en el municipio de Valledupar y la conformación del portafolio de investigación en el departamento del Cesar',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14296,
            'year' =>3,
            'value' => 0.1,
            'description' => 'Se formuló y se encuentra en etapa de contratación para ejecutar en la cuenca Garupal Diluvio del municipio de Valledupar el proyecto con objeto: Realización de acciones para la implementación del Plan de Acción Regional de lucha contra la desertificación y sequía y manejo del Bosque seco tropical en las cuencas de los ríos Garupal y Diluvio municipio de Valledupar y el Copey Cesar, de acuerdo a los alcances y especificaciones técnicas contempladas por CORPOCESAR. Se contemplan realizar 7 acciones PAR.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14297,
            'year' =>3,
            'value' => 1,
            'description' => 'a) Se implementan acciones en la Ciénega de Zapatosa   mediante el contrato: Interventoría técnica, Administrativa, financiera, jurídica, y ambiental para la conservación, uso sostenible de la biodiversidad y restauración de los servicios ecosistémicos del complejo cenagoso de Zapatosa en el municipio de Chimichagua
        
        b) Se encuentra en revisión el documento final del PM de Ciénega del Cristo y Microcuenca Singagarè para su posterior adopción mediante resolución por CORPOCESAR, 
        
        c) Se realizó jornada de limpieza en el humedal María Camila en el municipio de Valledupar
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0104-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17133,
            'year' =>3,
            'value' => 1,
            'description' => 'Mediante 19-7-0016-0-2021 se realizan acciones en el páramo serranía del Perijá en el cual se han realizado aislamiento de áreas para conservación, áreas sembradas y siembra de árboles nativos y frailejones en zonas de alta montaña, subparamo y paramo. El proyecto tiene una ejecución del 60%.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14298,
            'year' =>3,
            'value' => 1,
            'description' => 'Se encuentra vigente el convenio CORPOCESAR- ORNIAT Aunar esfuerzos técnicos y económicos para la protección y conservación de la fauna silvestre del departamento del Cesar 19-7-0010-0-1-2020 el cual tiene una adición hasta el mes julio 2022, del cual se ha ejecutado el 75% del proyecto CAVRFFS.
        
        
        Se realiza la recepción, valoración, procesos de rehabilitación clínica veterinaria, biológica y reintroducción a su habita natural las especies silvestres objeto del tráfico ilegal, rescates, entrega voluntarias y decomisos de fauna silvestre en el departamento del Cesar. Mediante cooperación interadministrativa con otras CAR quienes por ubicación geográfica nos envían fauna silvestre para proceso de rehabilitación biológica y reintroducción a su habita natural.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0150-0-2022;19-7-0010-0-2020',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14299,
            'year' =>3,
            'value' => 3,
            'description' => 'Dentro del convenio CORPOCESAR - ORNIAT se tiene el componente de conservación de la especie TREMARCTOS ORNATUS Oso -  Andino y PANTHERA ONCA Jaguar y se implementó un componente de conservación para las abejas africanizadas.
        
        Se han atendido las diferentes quejas de la ciudadanía respecto a las quejas interpuestas en CORPOCESAR sobre el conflicto Felino-Humano y Oso Andino -  Humano 
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0150-0-2022;19-7-0010-0-2021',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14300,
            'year' =>3,
            'value' => 1,
            'description' => 'Se está ejecutando el Plan de Manejo de Control del Caracol Africano (Achatina Fulica) especie invasora destructora de cultivos agrícolas y trasmisora de enfermedades en los seres humanos; se realizan jornadas educativas, demostrativas para que la ciudadanía aprenda el manejo y control de la especie invasora anteriormente mencionada y así la comunidad pueda continuar con su recolección manual y CORPOCESAR con su disposición final, se han realizado estas intervenciones en los municipios de Valledupar ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0150-0-2022;19-7-0010-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14301,
            'year' =>3,
            'value' => 0.2,
            'description' => 'Se entrego  a la subdirección Administrativa y Financiera para el inicio del proceso contratual los estudios previos para la formulación del POMCA Rio Medio Cesar.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0008-0-2022;19-6-0023-0-2022;19-6-0026-0-2022;19-6-0029-0-2022;19-6-0034-0-2022;19-6-0021-0-2022;19-6-0032-0-2022;19-6-0053-0-2022;19-6-0068-0-02022;19-6-0057-0-2022;19-6-0062-0-2022;19-6-0060-0-2022;19-6-0080-0-2022;19-6-0081-0-2022;19-6-0083-0-2022;19-6-0084-0-2022;19-6-109-0-2022;19-6-0088-0-2022;19-7-0003-0-2022;19-6-0112-0-2022;19-6-0094-0-2022;19-6-0128-0-2022;19-6-0165-0-2022;19-6-0152-0-2022;19-6-0161-0-2022;19-6-0140-0-2022;19-6-0143-0-2022;19-6-0147-0-2022;19-6-0163-0-2022;19-6-0053-0-2021',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14302,
            'year' =>3,
            'value' => 4,
            'description' => 'Se han realizado las siguientes acciones                                                            
        
        A) Talleres teórico prácticos para el aprovechamiento del recurso hídrico.
        B) Manejo de residuos sólidos y negocios verdes (rio Calenturitas y Chiriaimo Manaure)
        C) Fortalecimiento de las organizaciones en el área de influencia.
        D) Despalizada limpieza y recuperación del cauce del rio Caño Largo del municipio de Chimichagua, POMCA rio bajo Cesar Ciénega de Zapatosa
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-7-0003-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14303,
            'year' =>3,
            'value' => 0,
            'description' => 'Esta meta se cumplirá a finalizar la vigencia previo proceso de acopio de información en los municipios y departamento de las acciones que se desarrollan en el proceso de la ejecución de los programas y proyectos establecidos en la fase 4 de los POMCAS adoptados. ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14304,
            'year' =>3,
            'value' => 0.7,
            'description' => '1) Se encuentra en proceso de contratación la fase programática y consulta previa de la microcuenca del rio TOCAIMO. 
        
        2) En proceso de revisión documental los productos finales de la microcuenca Singagarè en este contrato hay 2 herramientas de planificación el PMA Singagarè y Ciénega del Cristo.
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14305,
            'year' =>3,
            'value' => 0,
            'description' => 'No se han realizado acciones de PMA de Microcuencas',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14306,
            'year' =>3,
            'value' => 2,
            'description' => 'Se desarrolló el inventario de 50 puntos de manifestación de aguas subterráneas en el municipio de La Jagua de Ibirico y 31 puntos de manifestación de agua subterránea en el municipio de Chiriguana para un total de 81 puntos inventariados.
        
        
        Del 10 a 14 de mayo de 2022 se desarrolló la actividad de reconocimiento en campo de los puntos en que se ha proyectado en la red de monitoreo de aguas subterráneas en el sistema acuífero Cesar en territorio de las cuencas de los ríos Sicarare y San Antonio, esta labor sirvió de acompañamiento y orientación a Drumond Emergí Inc. para que la misma de cumplimiento a la obligación de inversión del 1% del valor del proyecto que ejecuta en las cuencas en mención.
        
        
        Además, se visitaron 20 sectores en los que se estableció la tenencia de la tierra o predio con el fin de que la compañía tomara nota para las negociaciones posteriores y se midió el nivel de agua subterránea monitoreo del nivel en los predios en que se tiene pozo profundo o aljibe para tener una referencia indicativa.
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0008-0-2022;19-6-0023-0-2022;19-6-0026-0-2022;19-6-0029-0-2022;19-6-0034-0-2022;19-6-0021-0-2022;19-6-0032-0-2022;19-6-0053-0-2022;19-6-0068-0-02022;19-6-0057-0-2022;19-6-0062-0-2022;19-6-0060-0-2022;19-6-0080-0-2022;19-6-0081-0-2022;19-6-0083-0-2022;19-6-0084-0-2022;19-6-109-0-2022;19-6-0088-0-2022;19-7-0003-0-2022;19-6-0112-0-2022;19-6-0094-0-2022;19-6-0128-0-2022;19-6-0165-0-2022;19-6-0152-0-2022;19-6-0161-0-2022;19-6-0140-0-2022;19-6-0143-0-2022;19-6-0147-0-2022;19-6-0163-0-2022;19-6-0053-0-2021',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14307,
            'year' =>3,
            'value' => 0,
            'description' => 'El inventario de puntos de manifestación de aguas subterráneas en el centro y sur del Cesar se realizará una vez se cuente con la logística requerida para tal fin.
        
        Se proyectará oficio a las autoridades ambientales del valle del Magdalena Medio para indagar acerca de la posibilidad de desarrollar acciones conjuntas en el sistema acuífero conocido como Simití
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0008-0-2022;19-6-0023-0-2022;19-6-0026-0-2022;19-6-0029-0-2022;19-6-0034-0-2022;19-6-0021-0-2022;19-6-0032-0-2022;19-6-0053-0-2022;19-6-0068-0-02022;19-6-0057-0-2022;19-6-0062-0-2022;19-6-0060-0-2022;19-6-0080-0-2022;19-6-0081-0-2022;19-6-0083-0-2022;19-6-0084-0-2022;19-6-109-0-2022;19-6-0088-0-2022;19-7-0003-0-2022;19-6-0112-0-2022;19-6-0094-0-2022;19-6-0128-0-2022;19-6-0165-0-2022;19-6-0152-0-2022;19-6-0161-0-2022;19-6-0140-0-2022;19-6-0143-0-2022;19-6-0147-0-2022;19-6-0163-0-2022;19-6-0053-0-2021',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14308,
            'year' =>3,
            'value' => 0.05,
            'description' => 'Se realizo la formulacion de los estudios previos para la formulacion de PORH en  el  Rio Pereira el cual se encuentra en la subdireccion del Area  Administrativa y  Financiera para desarrollar el proceso de  contratacion.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14309,
            'year' =>3,
            'value' => 3,
            'description' => 'A) Talleres teórico prácticos para el aprovechamiento del recurso hídrico.
        B) Manejo de residuos sólidos y negocios verdes (rio Calenturitas y Chiriaimo Manaure)
        C) Fortalecimiento de las organizaciones en el área de influencia.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-7-0003-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14310,
            'year' =>3,
            'value' => 40,
            'description' => 'Se realizó el control a 10 PUEAA de los 25 habilitados entre los cuales se encuentran Codazzi, Rio de oro, acueducto de san miguel, Pailitas, Tamalameque, Curumaní, San Diego, La Paz, EMPOSANAL, San Martin y seguimiento a 151 a concesiones hídricas superficiales y subterránea, permisos de exploración de agua subterránea, ocupaciones de cauce',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0008-0-2022;19-6-0023-0-2022;19-6-0026-0-2022;19-6-0029-0-2022;19-6-0034-0-2022;19-6-0021-0-2022;19-6-0032-0-2022;19-6-0053-0-2022;19-6-0068-0-02022;19-6-0057-0-2022;19-6-0062-0-2022;19-6-0060-0-2022;19-6-0080-0-2022;19-6-0081-0-2022;19-6-0083-0-2022;19-6-0084-0-2022;19-6-109-0-2022;19-6-0088-0-2022;19-7-0003-0-2022;19-6-0112-0-2022;19-6-0094-0-2022;19-6-0128-0-2022;19-6-0165-0-2022;19-6-0152-0-2022;19-6-0161-0-2022;19-6-0140-0-2022;19-6-0143-0-2022;19-6-0147-0-2022;19-6-0163-0-2022;19-6-0053-0-2021',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14311,
            'year' =>3,
            'value' => 15,
            'description' => 'Se practicaron las visitas semestrales de control y seguimiento a los municipios de Manaure, Tamalameque, Gamarra, Valledupar, San Diego, Rio de Oro, Aguachica, San Martin, Chiriguana, Pueblo Bello, Codazzi, Becerril, La Jagua de Ibirico, Bosconia  y Astrea  se encuentran en proceso de evaluación Curumaní, González,  Pelaya, La Gloria, El Copey, San Alberto,  La Paz, El Paso y Chimichagua',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0008-0-2022;19-6-0023-0-2022;19-6-0026-0-2022;19-6-0029-0-2022;19-6-0034-0-2022;19-6-0021-0-2022;19-6-0032-0-2022;19-6-0053-0-2022;19-6-0068-0-02022;19-6-0057-0-2022;19-6-0062-0-2022;19-6-0060-0-2022;19-6-0080-0-2022;19-6-0081-0-2022;19-6-0083-0-2022;19-6-0084-0-2022;19-6-109-0-2022;19-6-0088-0-2022;19-7-0003-0-2022;19-6-0112-0-2022;19-6-0094-0-2022;19-6-0128-0-2022;19-6-0165-0-2022;19-6-0152-0-2022;19-6-0161-0-2022;19-6-0140-0-2022;19-6-0143-0-2022;19-6-0147-0-2022;19-6-0163-0-2022;19-6-0053-0-2021',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14312,
            'year' =>3,
            'value' => 0,
            'description' => 'No se ha definido que STAR se apoyarà ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14313,
            'year' =>3,
            'value' => 0,
            'description' => 'Gestionar la adopcion de la  Ronda Hidrica  río Guatapuri',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14314,
            'year' =>3,
            'value' => 0.1,
            'description' => 'La estrategia consistió declarar  el proyecto como de interés estratégico y gestionar con demás actores para su implementación, mesas de gobernanza CGR, proyecto Minvivienda plan de mejoramiento del río Cesar',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14315,
            'year' =>3,
            'value' => 1,
            'description' => 'En ejecucion la plataforma colaborativa para la cuenca del río Calenturitas con actores públicos y privados  conformada a través de la firma de un Acuerdo de Voluntades el 24 de noviembre de 2021',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0008-0-2022;19-6-0023-0-2022;19-6-0026-0-2022;19-6-0029-0-2022;19-6-0034-0-2022;19-6-0021-0-2022;19-6-0032-0-2022;19-6-0053-0-2022;19-6-0068-0-02022;19-6-0057-0-2022;19-6-0062-0-2022;19-6-0060-0-2022;19-6-0080-0-2022;19-6-0081-0-2022;19-6-0083-0-2022;19-6-0084-0-2022;19-6-109-0-2022;19-6-0088-0-2022;19-7-0003-0-2022;19-6-0112-0-2022;19-6-0094-0-2022;19-6-0128-0-2022;19-6-0165-0-2022;19-6-0152-0-2022;19-6-0161-0-2022;19-6-0140-0-2022;19-6-0143-0-2022;19-6-0147-0-2022;19-6-0163-0-2022;19-6-0053-0-2021',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14826,
            'year' =>3,
            'value' => 100,
            'description' => 'Se realizo la evaluacion tecnica y ambiental de la solicitud de modificacion excepcional del PBOT del municipio de Chiriguana ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0033-0-2022;19-6-0021-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14827,
            'year' =>3,
            'value' => 40,
            'description' => 'Se realizo seguimiento a los POT de los municipios de la Paz Manaure, San Diego,  Codazzi,  Pueblo Bello, El Copey Bosconia, El Paso, Astrea y Chimicagua.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0033-0-2022;19-6-0021-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14828,
            'year' =>3,
            'value' => 13,
            'description' => 'Se brindó asistencia técnica a los municipios de Tamalameque, Chiriguana, Valledupar,  la Paz Manaure, San Diego,  Codazzi,  Pueblo Bello, El Copey Bosconia, El Paso, Astrea y Chimicagua',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0033-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14829,
            'year' =>3,
            'value' => 0,
            'description' => 'En marco de la programación de seguimiento a los municipios en el segundo semestre se abordará la asistencia a los municipios PDET ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0033-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14830,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizara en el segundo semestre de 2022',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0033-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14831,
            'year' =>3,
            'value' => 100,
            'description' => 'Conforme a las solicitudes recibidas de los entes municipales se suministró toda la información referente a las determinantes ambientales incluyendo su cartografía.
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0033-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14833,
            'year' =>3,
            'value' => 0,
            'description' => 'Se tiene programado desarrollar una estrategia para el levantamiento de la bateria de indicadores en el segundo semestre de 2022',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14834,
            'year' =>3,
            'value' => 2,
            'description' => 'Se han realizado reuniones de trabajo con las alcaldías de San Diego y La Paz para la construcción del Plan de Participación Ciudadana en la gestión pública,
        
        El municipio de La Paz realizo la fase de autodiagnóstico, en Valledupar se coordino  realizar capacitacion en Participación Ciudadana y Estado Abierto, Política y Plan de Acción de Participación ciudadana
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0151-0-2022;19-6-0133-0-2022;19-6-0142-0-2022; 19-6-0174-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14835,
            'year' =>3,
            'value' => 2,
            'description' => 'Se realizaron jornadas educativas con enfoque diferencial étnico y de género en las siguientes comunidades:
        
        - Reunión con la Etnia Arhuaca del municipio de Pueblo Bello
        
        - Capacitacion al Consejo Comunitario José Prudencio Padilla del Corregimiento Badillo, Consejo comunitario Astilla, Cardón y Tuna de Guacochito, Consejo Comunitario Graciliano Francisco Guillen Sierra del corregimiento del Alto de la Vuelta, Consejo Comunitario Carlota Rondón de Álvarez y s visitaron los sitios sagrados del Corregimiento de Badillo y reunión con mujeres cabeza de hogar recicladoras del corregimiento de Badillo municipio de Valledupar. 
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0151-0-2022;19-6-0133-0-2022;19-6-0142-0-2022; 19-6-0174-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14836,
            'year' =>3,
            'value' => 3,
            'description' => 'Se realizaron jornadas educativas presenciales y virtuales en las instituciones Educativas de los municipios de La Paz; ITECIPUMA, Pueblo Bello; Mogola Hernández y Valledupar. Oswaldo Quintana, Juan Mejía y Camilo Torres, en las que se trataron los temas de PRAES-BIODIVERSIDAD y huertas escolares.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0151-0-2022;19-6-0133-0-2022;19-6-0142-0-2022; 19-6-0174-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14837,
            'year' =>3,
            'value' => 0,
            'description' => 'Se  coordino con la  Pastoral Social brindar apoyo educativo y operativo a los jóvenes bajo su tutela quienes serán orientados en la generación de ingresos mediante el modelo de negocio de reciclaje',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0151-0-2022;19-6-0133-0-2022;19-6-0142-0-2022; 19-6-0174-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14838,
            'year' =>3,
            'value' => 50,
            'description' => 'Se diseño e  implementan acciones en marco de la conmemoración del bicentenario enfocadas al uso de semillas nativas  en huertas escolares en instituciones educativas de los siguientes  municipios, Valledupar: INSPECAM, Francisco Molina, Oswaldo Quintana, Camilo Torres y Casimiro Maestre, Pueblo Bello; Magola Hernández,  Astrea;  Álvaro Araujo, La Paz ; INTECIPUMA, San Diego; Rafael Uribe, Bosconia; San Juan  Bosco, Manaure; San Antonio, CDR y Normal Superior, Aguachica; COLCARMEN,  Chiriguana; Juan Mejía Gómez.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0151-0-2022;19-6-0133-0-2022;19-6-0142-0-2022; 19-6-0174-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14839,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Se realizaron reuniones en marco del SIRAP Caribe para la revisión de convenios con la Universidad Nacional, Universidad Nacional Abierta y a Distancia y Universidad Popular del Cesar, con esta última se realizará monitoreo ecológico del ecosistema de la serranía del Perijá.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14840,
            'year' =>3,
            'value' => 3,
            'description' => 'Estado de los siguientes PEAM:
        
        Municipio de González terminado y la Jagua de Ibirico se encuentra en revisión para su aprobación y se presta asesoría al municipio de Rio de Oro.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0106-0-2022;19-6-0120-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14842,
            'year' =>3,
            'value' => 16,
            'description' => 'Se brindó apoyo a empresas, asociaciones y gremios en el enfoque del manejo de residuos sólidos: Recicladores VISION, docentes del área rural del municipio de San Diego, RECICLAJAGUA, APSEFACOM, EMDUPAR, ASOREBOS, Asociación de Recicladores de Aguachica, JAC Alta Montaña, MREC, CREC, mesa tecnica COTSA, JAC María Camila, SDEMAT, Comando Policía Valledupar, recicladores González y recicladores SHADDAI. 
        
        Además, se realizó revisión de los PGIR de los municipios de Agustín Codazzi, Manaure, Becerril, La Gloria, Pailitas, Tamalameque, Pelaya, Bosconia, La Paz y Valledupar
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0106-0-2022;19-6-0120-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14843,
            'year' =>3,
            'value' => 21,
            'description' => 'Como actividad de fortalecimiento se realiza intercambio de experiencias entre instituciones educativas entre las cuales participan en el  proceso   CREACI, COTEC ITECIPUMA, Juan Mejía Gómez, Camilo Torres, Oswaldo Quintana, CDR,  San Juan Bosco, San Antonio Manaure.Los PRAES se encuentran e proceso de revisión y sistematización.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0106-0-2022;19-6-0120-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14844,
            'year' =>3,
            'value' => 40,
            'description' => 'Se apoya los PEAM de Gonzalez y La Jagua de Ibirico',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0106-0-2022;19-6-0120-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14847,
            'year' =>3,
            'value' => 23,
            'description' => 'En la implementación de estrategias para la disminución de conflictos en el complejo cenagoso de Zapatosa se realizaron reuniones con DRMI PM CCZ, MESA CI CCZ, ASOPROCOGERZA y Fundación MANATI, con las alcadias municipales de Chimichagua, Tamalameque, Curumaní, Chiriguana, Tamalameque y Pailitas, con lo cual se mantiene el CIDEA activo.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14848,
            'year' =>3,
            'value' => 3,
            'description' => '1. Contratación de profesionales de apoyo para el cobro persuasivo y seguimiento a los procesos financieros.
        
        2.  cobro persuasivo a los deudores de la entidad por todos los conceptos. 
        
        3. mesas de trabajo con los entes territoriales para realizar gestión de cobro persuasivo, 
        
        Se realizó mesa de trabajo de intercambio de experiencias con CVC para el mejoramiento de los procesos de cobro.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0093-0-2022;19-6-0126-0-2022;19-6-0125-0-2022;19-6-0148-0-2022;19-6-0136-0-2022;19-6-0135-0-2022;19-6-0134-0-2022;19-6-0139-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14850,
            'year' =>3,
            'value' => 100,
            'description' => 'La actualización de la base de datos se realizó de manera continua y se liquidó la TUA causada en el año 2021 por valor de  $ 2.572.274.647  de un total de 597 usuarios con concesiones vigentes.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14851,
            'year' =>3,
            'value' => 50,
            'description' => 'Se encuentra en proceso de  entrega las factura a los usuarios de la Tasa Retributiva periodo 2021.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0093-0-2022;19-6-0126-0-2022;19-6-0125-0-2022;19-6-0148-0-2022;19-6-0136-0-2022;19-6-0135-0-2022;19-6-0134-0-2022;19-6-0139-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14852,
            'year' =>3,
            'value' => 100,
            'description' => 'Se celebró el contrato No.19-6-0112-0-2022 cuyo objeto es soporte técnico, mantenimiento a distancia e implementación de los módulos web del sistema de información administrativo y financiero PCT INTERPRISE, , para la facturación y cartera de la tasa por utilización de agua (TUA), tasa retributiva (TR), tasa por aprovechamiento forestal, evaluación, seguimiento ambiental y demás gestiones ambientales.
        
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0112-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14853,
            'year' =>3,
            'value' => 21.52,
            'description' => ' Ejecución de las inversiones es de 21.52%',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14854,
            'year' =>3,
            'value' => 100,
            'description' => 'En cuanto a la Participación en los espacios de consulta pública de los proyectos de reglamentación de los instrumentos económicos, financieros y de mercado se participaron en las mesas de trabajo convocadas por el MADS para la consolidación del anteproyecto del Presupuesto 2023',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia103 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14859,
            'year' =>3,
            'value' => 8,
            'description' => '
        Se envió el proyecto a la ANH para la dotación de reactivos y contratación de recurso humano.
        Se adelanta la subsanación de observaciones realizadas por IDEAM para la  acreditación del laboratorio ambiental
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia104 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14860,
            'year' =>3,
            'value' => 7,
            'description' => 'Se adelantó gestión con CARDIQUE para adoptar estrategias de venta de servicios a terceros y cobrar los acompañamientos que se realicen en el marco de los seguimientos ambientales, así como, para cobrar en el marco de un proceso sancionatorio los servicios del LABA.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia105 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14862,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizo el acompañamiento a las aiditoria externa de la Contraloria general de la Republica  e IDEAM, se tiene programado realizar las  auditorias internas en los meses de julio a noviembre segun lo establecido en el Plan de Auditoria Vigencia 2022 el cual se desarrolla con el apoyo de 3 contratistas y 2 funcionarios. se doto la oficina con un computador de mesa y portatil.
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14863,
            'year' =>3,
            'value' => 1,
            'description' => 'El banco de proyectos se encuentra en operacion con el apoyo de un funcionario de planta y 3 contratistas, a través de los cuales se  gestiona, formulado, viabilizado y priorizado varios proyectos de inversión ante el Fondo Nacional Ambiental, Fondo de Compensación Ambiental y con recursos de asignaciones directas del SGR. 
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0008-0-2022; 19-6-0047-0-2022; 19-6-0094-0-2022; 19-6-0138-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia107 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14864,
            'year' =>3,
            'value' => 0,
            'description' => 'En estructuracion proceso de mantenimiento de la sede bioclimatica ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14865,
            'year' =>3,
            'value' => 0,
            'description' => 'En estructuracion proceso de mantenimiento de las seccionales ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia109 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14866,
            'year' =>3,
            'value' => 47,
            'description' => 'Plan de Capacitación: 37% 
        
        Se realizaron 11 capacitaciones de 30 programadas entre las cuales se realizaron 
        
        - Jornada de inducción en la cual se realizaron 6 capacitaciones,
        - Rendición de cuenta
        - Sistema integrado de gestión
        - Actualización tributaria sector público 
        - Retención en la fuente
        - Sistema de Gestión
        -  PQR
        
        Plan de bienestar 57%
        
        Se realizaron 13 actividades de 23 programadas
        
        Día de la mujer, día del hombre, trivia, riesgo cardiaco y vascular, entre otras actividades incluidas en el Plan de Bienestar Social. 
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0123-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia110 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14867,
            'year' =>3,
            'value' => 100,
            'description' => 'La entidad se encuentra protegida hasta el mes de octubre de 2022, en ejecución el contrato de seguro de vida y bienes de Corpocesar, donde se aseguró en su totalidad al personal de planta, propiedades y bienes de la entidad. Dicho seguro se realizó con Seguros Generales Suramericana S.A por un valor de $173.698.010, firmado el 11 de noviembre de 2021
        
        
        Se inició la estructuración del nuevo proceso',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0123-0-2023',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14868,
            'year' =>3,
            'value' => 50,
            'description' => 'A) La Ventanilla única presencial se encuentra funcionando normalmente. 
        Se estableció la recepción de solicitudes a la corporación en un solo canal de mensajería electrónica, atencionalciudadano@corpocesar.gov.co
        
        B) Proceso VITAL, se encuentra en ajustado en fase de prueba de los tramites y procedimientos ambientales de Concesión de Recursos Hídrico Subterráneo, Registro RESPEL y Aprovechamiento Forestal de Arboles Aislados con el fin de iniciar la implementación de los procesos en VITAL en el mes de octubre de 2022
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '
        19-6-0008-0-2022;19-6-0013-0-2022:19-6-0037-0-2022;19-6-0036-0-2022;19-6-0028-0-2022;19-6-0038-0-2022;19-6-0035-0-2022;19-6-0047-0-2022;19-6-0039-0-2022;19-6-0046-0-2022;19-6-0048-0-2022;19-6-0099-0-2022;19-6-0094-0-2022;19-6-0091-0-2022;19-6-0123-0-2022;19-6-0164-0-2022;19-6-0169-0-2022;19-6-0170-0-2022;19-6-0138-0-2022;19-6-0168-0-2022
        ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia112 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14869,
            'year' =>3,
            'value' => 70,
            'description' => 'La oficina jurídica conceptuó y notifico mediante oficio OJ -0070 el estado del contrato Nº. 196-043--0-2016 por lo cual se adelantan los trámites pertinentes para adelantar el proceso de contratación de las TVD.    
        
        TRD, fueron convalidadas por el AGN y adoptadas por la Corporación mediante Resolución No 0459 de septiembre 21 de 2021. 
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia113 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14870,
            'year' =>3,
            'value' => 0,
            'description' => 'La entidad no realizó compras publicas sostenibles.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia114 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14871,
            'year' =>3,
            'value' => 1,
            'description' => 'Mediante acta  Nº 001 de 31 de enero 2022 se realizó socialización de procedimientos de la coordinación y  se generaron las estrategias para el desarrollo de las actividades de seguimiento y control ambiental y se determinaron los criterios para la escogencia de proyectos objeto de seguimiento y control ambiental para la vigencia 2022.priorizando 210 los proyectos que hacen parte de los indicadores minimos de gestion ambiental incorporados en la resolucion 667 de 2016.  ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia115 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14872,
            'year' =>3,
            'value' => 94,
            'description' => 'Se identificaron 17 alertas en los informes de las cuales se atendienron 16 ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0014-0-2022;19-6-0017-0-2022;19-6-0018-0-2022;19-6-0022-0-2022;19-6-0019-0-2022;19-6-0013-0-2022;19-6-0025-0-2022;19-6-0031-0-2022;19-6-0030-0-2022;19-6-0027-0-2022;19-6-0041-0-2022;19-6-0049-0-2022;19-6-0040-0-2022;19-6-0050-0-2022;19-6-0055-0-2022;19-6-0045-0-2022;19-6-0044-2-2022;19-6-0043-0-2022;16-6-0061-0-2022;19-6-0059-0-2022;19-6-0063-0-2022;19-6-0072-0-2022;19-6-0056-0-2022;19-6-0068-0-02022;19-6-0070-0-2022;19-6-0074-0-2022;19-6-0066-0-2022;19-6-0071-0-2022;19-6-0069-0-2022;19-6-0042-0-2022;19-6-0079-0-2022;19-6-0077-0-2022;19-6-0075-0-2022;19-6-0100-0-2022;19-6-0102-0-2022;19-6-0103-0-2022;19-6-0089-0-2022;19-6-0090-0-2022;19-6-0111-0-2022;19-6-0088-0-2022;19-6-0114-0-2022;19-6-0115-0-2022;19-6-0121-0-2022;19-6-0122-0-2022;19-6-0110-0-2022;19-6-0119-0-2022;19-6-0096-0-2022;19-6-0158-0-2022;19-6-0157-0-2022;19-6-0127-0-2022;19-6-0130-0-2022;19-6-0146-0-2022;19-6-0129-0-2022;19-6-0154-0-2022;19-6-0155-0-2022;19-6-0144-0-2022;19-6-0156-0-2022;19-6-0149-0-2022;19-6-0167-0-2022;19-6-0113-0-2022;19-6-0171-0-2022;19-6-0107-0-2022;19-6-0137-0-2022;19-6-0141-0-2022;19-6-0116-0-2022;19-6-0132-0-2022;16-6-0131-0-2022;19-6-0159-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia116 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14873,
            'year' =>3,
            'value' => 81,
            'description' => 'De los 210 expedientes se han realizado verificacion en campo a : Mineras 99, No Mineras 33, permiso de emisiones atmotferica 12, aprovechamiento foresta 4 RCD 15 para un total de 163
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0014-0-2022;19-6-0017-0-2022;19-6-0018-0-2022;19-6-0022-0-2022;19-6-0019-0-2022;19-6-0013-0-2022;19-6-0025-0-2022;19-6-0031-0-2022;19-6-0030-0-2022;19-6-0027-0-2022;19-6-0041-0-2022;19-6-0049-0-2022;19-6-0040-0-2022;19-6-0050-0-2022;19-6-0055-0-2022;19-6-0045-0-2022;19-6-0044-2-2022;19-6-0043-0-2022;16-6-0061-0-2022;19-6-0059-0-2022;19-6-0063-0-2022;19-6-0072-0-2022;19-6-0056-0-2022;19-6-0068-0-02022;19-6-0070-0-2022;19-6-0074-0-2022;19-6-0066-0-2022;19-6-0071-0-2022;19-6-0069-0-2022;19-6-0042-0-2022;19-6-0079-0-2022;19-6-0077-0-2022;19-6-0075-0-2022;19-6-0100-0-2022;19-6-0102-0-2022;19-6-0103-0-2022;19-6-0089-0-2022;19-6-0090-0-2022;19-6-0111-0-2022;19-6-0088-0-2022;19-6-0114-0-2022;19-6-0115-0-2022;19-6-0121-0-2022;19-6-0122-0-2022;19-6-0110-0-2022;19-6-0119-0-2022;19-6-0096-0-2022;19-6-0158-0-2022;19-6-0157-0-2022;19-6-0127-0-2022;19-6-0130-0-2022;19-6-0146-0-2022;19-6-0129-0-2022;19-6-0154-0-2022;19-6-0155-0-2022;19-6-0144-0-2022;19-6-0156-0-2022;19-6-0149-0-2022;19-6-0167-0-2022;19-6-0113-0-2022;19-6-0171-0-2022;19-6-0107-0-2022;19-6-0137-0-2022;19-6-0141-0-2022;19-6-0116-0-2022;19-6-0132-0-2022;16-6-0131-0-2022;19-6-0159-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia117 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14874,
            'year' =>3,
            'value' => 60,
            'description' => 'Se tiene activo el proceso de salvoconducto y se está en proceso de implementación de quejas y denuncias ambientales por medio del aplicativo VITAL, LOFL Libro de Operaciones Forestales en Linea y SUIT
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0014-0-2022;19-6-0017-0-2022;19-6-0018-0-2022;19-6-0022-0-2022;19-6-0019-0-2022;19-6-0013-0-2022;19-6-0025-0-2022;19-6-0031-0-2022;19-6-0030-0-2022;19-6-0027-0-2022;19-6-0041-0-2022;19-6-0049-0-2022;19-6-0040-0-2022;19-6-0050-0-2022;19-6-0055-0-2022;19-6-0045-0-2022;19-6-0044-2-2022;19-6-0043-0-2022;16-6-0061-0-2022;19-6-0059-0-2022;19-6-0063-0-2022;19-6-0072-0-2022;19-6-0056-0-2022;19-6-0068-0-02022;19-6-0070-0-2022;19-6-0074-0-2022;19-6-0066-0-2022;19-6-0071-0-2022;19-6-0069-0-2022;19-6-0042-0-2022;19-6-0079-0-2022;19-6-0077-0-2022;19-6-0075-0-2022;19-6-0100-0-2022;19-6-0102-0-2022;19-6-0103-0-2022;19-6-0089-0-2022;19-6-0090-0-2022;19-6-0111-0-2022;19-6-0088-0-2022;19-6-0114-0-2022;19-6-0115-0-2022;19-6-0121-0-2022;19-6-0122-0-2022;19-6-0110-0-2022;19-6-0119-0-2022;19-6-0096-0-2022;19-6-0158-0-2022;19-6-0157-0-2022;19-6-0127-0-2022;19-6-0130-0-2022;19-6-0146-0-2022;19-6-0129-0-2022;19-6-0154-0-2022;19-6-0155-0-2022;19-6-0144-0-2022;19-6-0156-0-2022;19-6-0149-0-2022;19-6-0167-0-2022;19-6-0113-0-2022;19-6-0171-0-2022;19-6-0107-0-2022;19-6-0137-0-2022;19-6-0141-0-2022;19-6-0116-0-2022;19-6-0132-0-2022;16-6-0131-0-2022;19-6-0159-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia118 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14875,
            'year' =>3,
            'value' => 1,
            'description' => 'Se esta adelantando los estudios previos para la dotación del laboratorio ambiental. Los equipos se encuentran calibrados y mantenidos.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia119 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14876,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Se contrato un profesional de apoyo y se ha recibido capacitacion en VITAL, SILAM Y SUIT por parte del MADS ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0022-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia120 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17135,
            'year' =>3,
            'value' => 1,
            'description' => 'A) El GIT para la gestión ambiental en territorios y comunidades étnicas supervisa proyecto en ejecución con objeto Implementación de acciones de restauración en la Microcuenca del Río Chiskuindja en el Resguardo Indígena Kankuamo en el Municipio de Valledupar el cual se desarrolla desde el mes de diciembre de 2021 con dos contratos sujetos a este objeto, el primero de obra que comprende el establecimiento de 106 hectáreas de unidades agroforestales
        
        
        B) Se han realizado seis reuniones y dos recorridos de campo para concertación con las comunidades indígenas Itti Takke del pueblo Ette Ennaka en el corregimiento de Chimila, municipio de El Copey y con las autoridades del resguardo de Menkue del pueblo Yukpa en el municipio de Agustín Codazzi, para el establecimiento de cuatro (4) hectáreas agroforestales (dos en cada comunidad), sobre lo cual ya se tienen estructurados los estudios previos y remitidos a SGAGA para revisión y aprobación.
        
         Se pretende con esta actividad avanzar en el cumplimiento de compromiso institucional establecido en el PIRC del resguardo Mankue e igualmente avanzar en el cumplimiento de la SENTENCIA No. 004. Noviembre 20 del 2018 JUZGADO CUARTO DE DESCOGESTON CIVIL DEL CIRCUITO ESPCIALIZADO EN RESTITUCION DE TIERRAS EN SANTA MARTA.  
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0026-0-2022;19-6-0124-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia121 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14880,
            'year' =>3,
            'value' => 2,
            'description' => 'A) Se realizaron dos visitas de campo para inspeccionar  estado ambiental de la denominada Laguna de Los Indios en el  resguardo indígena Yukpa de El Rosario, en el municipio de La Paz, sitio de interés cultural para el pueblo Yukpa y que se ubica en un predio particular; este cuerpo de agua de características únicas en la zona comienza a mostrar problemas por la invasión de micrófitos en sus aguas y la presencia de muchas palizadas en sus orillas por la caída de árboles, situaciones que propician la sedimentación y eutrofización de las aguas. Se ha recolectado información técnica para formular un proyecto de limpieza de micrófitos y palizadas el que ha sido solicitado por la comunidad indígena, por lo que esta propuesta ya tiene avances de socialización y concertación y ya se cuenta con los estudios previos preliminares preparados por el coordinador del GIT de POMCAS, estudios que deben ser socializados a la comunidad para su ajuste de ser necesario. Se requiere determinar si esta actividad es procedente en terrenos de propiedad privada y/o determinar legalmente cual sería la estrategia para su implementación.   
        
        B)  El GIT para la gestión ambiental en territorios y comunidades étnicas supervisa proyecto en ejecución con objeto Implementación de acciones de restauración en la Microcuenca del Río Chiskuindja en el Resguardo Indígena Kankuamo en el Municipio de Valledupar el cual involucra actividades de aislamiento de áreas de interés natural y cultural del pueblo Kankuamo, mediante el tendido de 3.000 metros de aislamiento y el establecimiento de 174 hectáreas de reforestación protectora.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0026-0-2022;19-6-0124-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia122 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14882,
            'year' =>3,
            'value' => 0,
            'description' => 'Teniendo en cuenta las dificultades que se han tenido para obtener información confiable sobre actividades ejecutadas que apunten al cumplimiento de los acuerdos protocolizados en las consultas previas,  para estructurar informe a presentar al MININTERIOR y las Comunidades, lo que se está haciendo es que hasta donde ha sido posible nuestra participación, se está procurando la implementación de algunas actividades en el marco de ejecución de recursos del 1% de proyectos mineros de DRUMMOND LTD que apliquen al cumplimiento de algunos acuerdos establecidos con el CONSEJO COMUNITARIO DE COMUNIDADES AFRODESCENDIENTES LAS PALMITAS – COAFROPAL, como son:    
        
        - Proyecto de prevención y mitigación del riesgo y desastres naturales en la jurisdicción del municipio de La Jagua de Ibirico, corregimiento de La Palmita, subcuenta Guasimal – Quebrada Las Ánimas.       
        
        - Proyecto para la Restauración ecológica de rondas hídricas con especies vegetales nativas en la Subcuenta Caño Guasimal - Quebrada Las Animas.  Para cumplir compromisos con los Consejos Comunitarios COAFROVIS de la Victoria de San Isidro en la Jagua de Ibirico, JULIO CESAR ALTAMAR y CONECISE de Chiriguana, se está concertando con dichos Consejos para implementar Unidades Agroforestales que cumplan acuerdos protocolizados en los POMCAs del Bajo Río Cesar y Calenturitas. 
        
        Para estructurar informe de cumplimiento de acuerdos a presentar al MININTERIOR y comunidades, se debe gestionar por parte del GIT de POMCAS la recopilación de la información sobre ejecución de actividades que apunten a dichos cumplimiento, labor que al parecer no pudo completarse en el 2021. 
        
        Por otra parte, se adelantó reunión con las Coordinaciones de la Subdirección de Gestión Ambiental para actualizar las actividades que se han desarrollado en función de cumplimiento de los acuerdos de los diferentes POMCAS.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0026-0-2022;19-6-0124-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia123 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14883,
            'year' =>3,
            'value' => 1,
            'description' => 'Se ha realizado una diligencia de campo para obtener información que permita definir diseños, especificaciones técnicas y presupuestos para la implementación de un sistema de abastecimiento de agua en la comunidad indígena de Itti Takke, del pueblo Ette Ennaka, en el corregimiento de Chimila, municipio de El Copey, igualmente se realizó una visita a la comunidad indígena Yukpa de Menkue en el municipio de Agustín Codazzi, donde se proyecta la implementación de otro sistema de abastecimiento de agua. 
        
        Esta actividad técnica está a cargo de los ingenieros Linda Castilla y Juan Argumedo, designados por el SGAGA para el efecto, y se esperan sus informes finales para complementar los estudios previos que ya se encuentran avanzados.
        
        Hemos obtenido el aporte técnico para el sistema de abastecimiento de resguardo Itti Takke y se necesita que el SGAGA requiera a los citados ingenieros para que presenten el informe técnico de la visita a la comunidad Menkue, la cual hace un mes se realizó el 03 y 04 de junio. 
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0026-0-2022;19-6-0124-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia124 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14884,
            'year' =>3,
            'value' => 0,
            'description' => 'Se proyecta Implementar un sistema de abastecimiento de agua para la comunidad indigena de Chimila y Menkue',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia125 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14886,
            'year' =>3,
            'value' => 0,
            'description' => 'Se han realizado cuatro reuniones y un recorrido de campo para acordar ruta de trabajo que nos permita fortalecer la capacidad de gestión ambiental preventiva mediante el apoyo a la organización, capacitación y operatividad de la Guardia Cimarrona de los consejos comunitarios Arcilla, Cardón y Tuna de Guacochito, JOSE PRUDENCIO PADILLA de Badillo, CARLOTA REDONDO ALVAREZ del corregimiento de El Perro.  
        
        Con el consejo comunitario de Alto de La Vuelta se planea adelantar una jornada de arborización y capacitación en la que participarán los integrantes del consejo comunitario GRACILIANO FRANCISCO GUILLEN SIERRA de Alto de La Vuelta y se adelanta la formulación de estudios previos para implementar espacios de Gobernanza ambiental con los grupos de Guardia Cimarrona los consejos comunitarios de Guacochito, El Perro y Badillo. Todas las actividades proyectadas a desarrollar son el cumplimiento a los PIRC de los consejos comunitarios donde competen a CORPOCESAR actividades de gestión ambiental. 
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0026-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia126 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14887,
            'year' =>3,
            'value' => 4,
            'description' => 'A) Consejo comunitario de Guacochito y el del Perro, dentro de su PIRC fortalecer la capacidad de gestión ambiental mediante apoyo a la organización, capacitación y operatividad; a través de guardia cimarrona, cuerpo de vigilancia, capacitación en manejo de recursos naturales, identificación. 
        B) Realizar estudio previo para contratar esas capacitaciones y actividades. se proyecta la implementación de un eco vivero comunitario para potenciar la producción del material nativo de bosque seco tropical en el corregimiento de Guacochito para acciones de restauración en la cuenca del río Cesar.
        C) Identificación, señalización y descripción mediante vayas informativas de sitios sagrados con el consejo comunitario José Prudencio Padilla de Badillo, para lo cual ya se hizo una primera reunión de acercamiento.
        D) Jornada de educación ambiental para la recolección, manejo y disposición de residuos sólidos y la reforestación de sitio sagrado de Algarrobillo con el consejo comunitario Graciliano Francisco Guillen del Alto de la Vuelta, para lo que se requiere la participación activa del GIt de Educación Ambiental.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0026-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia127 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14888,
            'year' =>3,
            'value' => 40,
            'description' => 'Se crearon políticas, procedimientos y formatos para la gestión de Datos en el Laboratorio Ambiental. Actualización y publicación del PETI y el mapa de riesgo del área de Sistemas y TICs. Implementación de iniciativas tecnológicas GIS y Base de Datos Oracle. Además, se desarrolló una macro para el registro de pesaje de muestras de laboratorio que permite crear la bitácora de los datos y contiene un componente de seguridad para evitar alteraciones.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0022-0-2022;19-6-0175-0-2022;0547;0602',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia128 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14889,
            'year' =>3,
            'value' => 50,
            'description' => 'Contrato activo del servicio de alojamiento web, contratación de un WebMaster para la gestión y administración del Portal Web Institucional y se mantiene la publicación de actos administrativos, acuerdos y demás documentos relevantes de la misión de CORPOCESAR en el Portal Web Institucional (www.corpocesar.gov.co).',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0022-0-2022;19-6-0175-0-2022;0547;0603',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia129 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14890,
            'year' =>3,
            'value' => 50,
            'description' => 'Se cuenta con dos soportes técnicos contratados, uno por prestación de servicios y otro a través de 472.  Los cuales brindan atención a los requerimientos e incidentes de tecnologías de la información que reporten los usuarios de la entidad. El soporte técnico suministrado por 472 prestó servicios hasta el 26 de junio de 2022.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0022-0-2022;19-6-0175-0-2022;0547;0604',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia130 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14891,
            'year' =>3,
            'value' => 20,
            'description' => 'A) Se realizaron los estudios previos de PCT y SIAN, los cuales ya se tiene el contrato activo y se les ha cancelado el primer pago, una vez se ha diligenciado el acta de inicio. 
        
        B) La Seguridad de la Información gestionada por Movistar se encuentra activa. 
        
        
        C) Las impresoras ya se encuentran contratadas y se creó la orden de compra para la adquisición de Oracle y se está tramitando el pago del servicio para iniciar la implementación en un servidor virtual. 
        
        D) Además, se han adquirido dos WorkStation para la puesta en productivo de ArcGIS y se está realizando el estudio previo para la adquisición de un servidor físico tipo Rack para alojar la infraestructura de ArcGIS.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '19-6-0022-0-2022;19-6-0175-0-2022;0547;0605',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia131 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14893,
            'year' =>3,
            'value' => 0.5,
            'description' => 'En la página web de la entidad se encuentra publicada la información recolectada en desarrollo del proyecto 
        https://www.corpocesar.gov.co/monitoreo-de-la-oferta-del-recurso-hidrico.html.
        
         la información recolectada y procesada como producto de la actividad 3204.01.03 será alimentada 
        
        Ante Invitación del Centro Internacional para la Investigación del Fenómeno El Niño (CIIFEN), los días 07 y 08 de abril de 2022 se participó en los talleres sobre “Definición de roles institucionales, protocolos y prioridades de capacitación para la implementación del Sistema de Gestión y Alerta Temprana ante Sequías – SIGAT, en los Municipios de Agustín Codazzi y Bosconia”, área de implementación del proyecto EUROCLIMA+ en el Cesar”. En estos talleres, liderados por IDEAM y el CIIFEN, se abordó entre otros, el tema de selección de voluntarios del clima, los cuales serán personas las que se entregue un pluviómetro reconocido por la Organización Meteorológica Mundial, con los cuales se conformará una red de medición de la precipitación, en la zona centro y norte del Cesar. Así, es una oportunidad para que la entidad se vincule al proyecto en citas, con el cual se contribuye a la consolidación de la red hidrometeorológica. 
        
        En la actividad desarrollada en el proyecto 3203.01.06, relacionada con el reconocimiento de campo para la red de monitoreo de aguas subterráneas, se promocionó el proyecto EUROCLIMA+ y se levantó información de 4 usuarios que están dispuestos a constituirse en voluntarios del clima, con lo que se ha tenido ejecución de esta meta, esperando que se concrete la participación de tales personas. Además, el suscrito funcionario suministró el listado de puntos de manifestación de aguas subterráneas levantado por la entidad, como una forma de indicar a IDEAM y CIIFEN acerca de la existencia de predios en los que se puede desarrollar la red hidrometeorológica.
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia132 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14894,
            'year' =>3,
            'value' => 2,
            'description' => 'Se realizó monitoreo a 81 puntos de manifestación de aguas subterráneas en el municipio de La Jagua de Ibirico 50 y Chiriguana 31     
                                                                                                                                                                                  Además, se desarrolló la actividad consistente en el desarrollo, del 10 a 14 de mayo de 2022, del reconocimiento en campo de los puntos en que se ha proyectado la red de monitoreo de aguas subterráneas en el sistema acuífero Cesar en territorio de las cuencas de los ríos Sicarare y San Antonio. Esta labor sirvió de acompañamiento y orientación a la compañía Drumond Emergí Inc. para que la misma de cumplimiento a la obligación de inversión del 1% del valor del proyecto que ejecuta en las cuencas en mención. 
        Se visitaron 20 puntos en que se estableció la tenencia de la tierra o predio, con el fin de que la compañía tomara nota para las negociaciones posteriores. Se midió el nivel de agua subterránea (monitoreo del niel) en los predios en que se tiene pozo profundo o aljibe, para tener una referencia indicativa. 
        Del 22 a 25 de junio se desarrolló una jornada de monitoreo de aguas superficiales en los ríos Badillo,  Manaure,  Garupal Chiriaimo, Magiriamo casacara, sicarare, maracas soconga, tucuy, sororia, las animas, ariguanisito y ariguani, no fue posible aforar el rio cesar debido a que presentaba una profunda lámina de agua, en general en esta actividad se aforo el caudal liquido de las corrientes mencionadas mediante el uso de molinetes en los puntos con los que la corporación ha conformado una red hidrométrica que sirve de base para el conocimiento de la oferta hídrica en el departamento del cesar.
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia133 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14895,
            'year' =>3,
            'value' => 1,
            'description' => 'En la página web de la entidad se encuentra publicada la información recolectada en desarrollo del proyecto 
        https://www.corpocesar.gov.co/monitoreo-de-la-oferta-del-recurso-hidrico.html. •  la informacion recolectada y procesada como producto de la actividad 3204.01.03 sera alimentada ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia134 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14896,
            'year' =>3,
            'value' => 0.5,
            'description' => 'En la página web de la entidad se encuentra alimentada la información recolectada en desarrollo del proyecto, para que pueda ser consultada por la comunidad en general, en la dirección https://www.corpocesar.gov.co/monitoreo-de-la-oferta-del-recurso-hidrico.html.
        
        Así mismo, se ha publicado información derivada de los estudios que sobre POMCAS, Planes de Manejo de Acuíferos, riesgos naturales, conservación de recursos naturales renovables, información sobre conceptos de variabilidad climática y cambio climático, que dan cuenta de la gestión realizada por la entidad. Se publican en forma diaria los boletines sobre las condiciones hidrometeorológica y eventos de alerta natural para la jurisdicción de CORPOCESAR, desde las coordinaciones de RESPEL y Recursos Hídricos Digitalización de la información para cargue en el SIRH.
        ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia135 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14897,
            'year' =>3,
            'value' => 1,
            'description' => 'Con base en el resultado del informe de gestión anual de la vigencia 2021 se realizó el diligenciamiento de los indicadores del PGAR para evaluar el nivel de cumplimiento de este instrumento.',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia136 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14898,
            'year' =>3,
            'value' => 1,
            'description' => 'La Oficina de Comunicaciones, continúa implementando la campaña, #MenosPlásticoMásConciencia, a través de la realización de mensajes reflexivos que permitan disminuir el uso de productos plásticos de un solo uso. 
        
        Se realizó campaña sobre el uso de pitillos
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '0585;19-6-0180-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia137 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14899,
            'year' =>3,
            'value' => 1,
            'description' => 'Estan implementadas y funcionando las redes sociales de Facebook, Instagram y Twitter,  en las cuales se realizaron las publicaciones de 155  post sobre fechas ambientales y eventos de la Corporación.
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '0585;19-6-0180-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia138 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14900,
            'year' =>3,
            'value' => 1,
            'description' => 'Se contrato el Plan de Medios mediante el cual  se realiza la promocion de la informacion de la entidad en medios radiales, audiovisuales, portal web y el servicio de un diseñador grafico para la elaboracion de post para redes sociales.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '0585;19-6-0180-0-2022',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia139 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14901,
            'year' =>3,
            'value' => 100,
            'description' => 'Se han atendido oportunamente las solitudes realizadas por ASOCAR  otras entidades del sector ',
            'type' => 'functioning',
            'how_is_done' => 'PERSONAL',
            'contract_number' => 'null',
            'state_id' => null,
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
