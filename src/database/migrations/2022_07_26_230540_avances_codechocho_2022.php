<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCodechocho2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 13034,
            'year' =>3,
            'value' => 15,
            'description' => 'Tres áreas en el departamento avanzando en el proceso declaratoria como área protegida de carácter Regional:1. Corredor Cabí – Ichó: se avanzó en la construcción de los documentos bases en aspectos Biofísicos.  2. Área Marina Protegida Litoral del San Juan: Se  avanzando en el marco de espacios técnicos y basados en los resultados de los talleres por localidad, en la construcción del documento soporte de declaratoria y el ajuste de la cartografía para la delimitación del área. 3. Paramo el Duende: Se han realizado espacios técnicos para ajuste de la delimitación, objetivos y objetos de conservación. Además se realizaron siete (7) talleres locales (Pacurita, Tutunendo, San Martin de Purré, San José de Purré, Guadalupe, Ichó, La Troje) en estos espacios se recolectó información en aspectos sociales, económica, culturales y Bióticas, como aporte al documento que justifica la declaratoria del área como protegida ;',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '072-2022, 073-2022, 074-2022, 020-2021 vf, 04-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13035,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Diseñada y formulada propuesta hoja de ruta y diagnostico con información secundaria para la formulación de los Planes de Manejo de los páramos Citará y Duende. Se han realizado jornadas de trabajo con WCS y NCI, para avanzar en la formulación del plan de manejo del páramo el Duende, en el marco del proceso se realizó la actualización de la cauterización en aspectos Biofísicos. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '020-2021 vf',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13036,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizó el monitoreo de calidad de aguas costera en la Unidad Ambiental Costera del Darién (REDCAM); Para realizar el monitoreo y toma de muestras de aguas marino-costeras, las actividades que se desarrollaron fueron: a. Selección de los puntos a monitorear; b. Alistamiento del personal y la logística del desplazamiento; c. Alistamiento recipientes y equipos de monitoreo –previamente esterilizados en el laboratorio; d. Alistamiento de papelería para la toma de datos y etiquetas de recipiente; e. Realización de campañas de medición en las diferentes secciones de estudio; f. Registro de datos en formato de campo en las diferentes secciones de estudio; g. Procesamiento y análisis de información; h. Elaboración de mapas temáticos; i. Elaboración de resultados y recomendaciones',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '075-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13037,
            'year' =>3,
            'value' => 1,
            'description' => 'Actualización y reporte de la información en el SIAC; se cuentan con 1192 registros sobre movilización de productos forestales  reportes en el SNIF realizados por la subdirección de Desarrollo Sostenible de los cuales: 710 movilizaciones, 439 re-movilización, 43 renovaciones. Se ha realizado reporte a los módulos SIRH, RESPEL y PCB',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '071-2022, 075-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 16440,
            'year' =>3,
            'value' => 0,
            'description' => 'Se ha avanzado en la construcción de la línea base del estado de los humedales y de la caracterización del complejo de humedales de la llanura aluvial oriental del Bajo Atrato (Tumaradocito-Curvaradó) en los municipios de El Carmen del Darién y Riosucio',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CONVENIO 002-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13039,
            'year' =>3,
            'value' => 10,
            'description' => 'Implementación del Programa Regional de Negocios Verdes, a través de las actividades de articulación interinstitucional, fortalecimiento de Ventanilla, Impulso a los emprendimientos verdes.  Fortalecimiento de la ventanilla de negocios verdes; desarrolladas tres reuniones interinstitucionales (dos de la Mesa técnica de negocios verdes, y un Conversatorio sobre la ley del Viche); un taller sobre negocios verdes y economía circular. Fortalecimiento de las capacidades técnicas de profesionales adscritos a la Ventanilla. Desarrolladas cinco acciones Asistencia técnica en normativa higiénico-sanitaria. Evaluación de rótulos y etiquetas de productos de emprendimientos ofertados en la Tienda, entrega de dotaciones para producción de miel de abejas, elaboración de estudio fisicoquímico a un producto alimenticio; elaboración de fichas técnicas de productos; Desarrollado Taller de capacitación sobre negocios verdes para el desarrollo local en el municipio de Nuquí, dirigido a emprendedores turísticos.
        Impulsar los emprendimientos verdes. Se ha realizado el trámite de vinculación de 11 emprendimientos nuevos en la oficina de Negocios Verdes del Ministerio y la  Ventanilla de emprendimientos verdes encargada de liderar y coordinar el impulso de los negocios verdes como un sector estratégico de la economía regional, permitiéndose apoyar en el escalonamiento comercial y productivo  de los emprendimientos verdes adscritos a la misma, ubicados en los municipios de Bojayá, Unguia, Nuqui, Bahía Solano y Quibdó: Desarrolladas cinco acciones de impulso a los emprendimientos verdes (Asistencia técnica en normativa higiénico-sanitaria; Evaluación de rótulos y etiquetas de productos de emprendimientos ofertados en la Tienda, entrega de dotaciones para producción de miel de abejas, elaboración de estudio fisicoquímico a un producto alimenticio; elaboración de fichas técnicas de productos; Desarrollado Taller de capacitación sobre negocios verdes para el desarrollo local en el municipio de Nuquí, dirigido a emprendedores turísticos. Los emprendimientos son: PRODUCTOS ARTESANALES ANTONELLA, ANCESTRAL BOTANICA S..A.S, VEDA A MAR Y SELVA, NUQUI FISH, PRODUCTOS PILON, HERPING BAHIA SOLANO TOUR, ASOCIACION DE APICULTORES DE BERSAIDA, PEZ – ONETI, PROCESAMIENTO Y CONSERVACIÓN DE FRUTAS LEGUMBRES HORTALIZAS Y TUBERCULOS, DISTRIBUIDORA MARBEL S.A.S, CORPORACION AGROAMBIENTAL SELVA – VIVERO DEL CHOCÓ, MANUFACTURAS AMARILLO VERDE, DELICIAS DEL DARIÉN S.A.S., PALMA SECA, RENOVA PALMA. Para fortalecer los espacios regionales de comercialización de los negocios verdes: Planificación de la Feria Expoambiente sexta versión. Formular e implementar plan de comunicaciones del PRNV. El plan fue formulado en la vigencia 2021, sin embargo, se reflejan avances en el cumplimiento de los indicadores como: redes sociales creadas y alimentadas, número de publicaciones realizadas, carpeta de archivo fotográfico actualizada.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '002-2022, 113-2022,135-2022,136-2022,137-2022,133-2022.',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13040,
            'year' =>3,
            'value' => 0.1,
            'description' => 'Se ha avanzado en la dentificación, diagnostico, socialización de piloto sobre la minimización y el aprovechamiento de residuos sólidos en cinco municipios (Quibdó, Unguía, Acandí – Capurganá, Bajo Baudó y Nuquí)',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '136-2022, 136-2022,141-2022,140-2022,150-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13042,
            'year' =>3,
            'value' => 0,
            'description' => 'Desarrollado el alistamiento institucional, consistente en la contratación del personal de apoyo que llevara a cabo la ejecución de las acciones de esta meta',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '024-2021, 134-2022,138-2022,144-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13043,
            'year' =>3,
            'value' => 98000,
            'description' => 'Para la producción del material vegetal, la corporación cuenta con tres viveros ubicados en Bahía Solano (68.000), Istmina (3.000), Atrato (27.000). generando la producción y entrega de 98.000 plántulas Fueron seleccionadas trece (13) especies forestales nativas (Semillas cedro, abarco, Roble/ocobo, Guayacán amarillo, Igua, Pichinde, Chicalá, Caoba, Algarrobo, Choiba, Caracolí, Balso, Guácimo y dos (2) frutales perennes(Guanábana, limón), los cuales aportan características ecosistémicas importantes al medio natural y tienen doble propósito, producción y conservación de áreas o suelos susceptibles a procesos erosivos u otras situaciones',
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
            'activity_id' => 13044,
            'year' =>3,
            'value' => 0,
            'description' => 'Se logro la restauración de 108 hectáreas correspondientes al rezago 2021; de igual manera se realizó el mantenimiento de 332 hectareas restauradas en vigencias anteriores correspondientes a los municipios de Medio San Juan, Cantón de San Pablo y Rio Quito. De  la vigencia 2022, no se ha logrado avanzar en la restauración de hectárea alguna',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => ' 023-2021, 001-2022, 103-2022,104-2022,105-2022,106-2022,107-2022,172-2022,108-2022,109-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13045,
            'year' =>3,
            'value' => 34,
            'description' => 'Se desarrollaron 34 actividades de atención y manejo de fauna silvestre entre 17 rescates, 11 entregas voluntaria, 2 decomisos definitivos, 4 incautaciones,  siguiendo los procedimientos enmarcados en el Anexo 4 “Protocolo para la disposición provisional de especímenes de fauna silvestre decomisada en el hogar de paso” de la resolución 2064 de 2010 del Ministerio de Ambiente, Vivienda y Desarrollo Territorial. Siete (7) actividades realizadas para la conservación de felinos silvestres en el Chocó, y de comunicación y prevención del riesgo por especies invasoras (Caracol gigante).  44 actividades de educación y sensibilización ambiental para la conservación de fauna silvestre . Se realizaron operativos de control y sensibilización sobre recursos pesquero y de fauna y flora silvestre en puntos estratégicos y despliegue pedagógico para sensibilizar a la comunidad sobre el tráfico ilegal de especies silvestres ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '036-2022, 038-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13046,
            'year' =>3,
            'value' => 0,
            'description' => 'Desarrollado el alistamiento institucional, consistente en la contratación del personal de apoyo que llevara a cabo la ejecución de las acciones de esta meta',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '035-2022, 038-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13047,
            'year' =>3,
            'value' => 0,
            'description' => 'Desarrollado el alistamiento institucional, consistente en la contratación del personal de apoyo que llevara a cabo la ejecución de las acciones de esta meta',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => ' 035-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13048,
            'year' =>3,
            'value' => 53,
            'description' => 'En el marco del ejercicio de la Autoridad Ambiental a 30 de junio de 2022, fueron recepcionadas 77 solicitudes de trámites ambientales, entre los que se destacan: Plan de contingencia (1), Concesión de aguas (10), (7) Vertimientos, Guías ambientales (12), Ocupación de cauce (13), Aprovechamientos Únicos (5) y No maderable (2), un (1) PUEA, Plan de manejo, quince (15) Instrumentos ambientales mineros, Arboles Aislados (10) y Libro de Operaciones. De los cuales fueron aprobados 27 instrumentos ambientales dentro de los tiempos establecidos por la ley, en relación con tramites ambientales, fueron archivados dos tramites, en proceso hay 51 expedientes, para una atención de 80 tramites.
        Fueron otorgadas dos Concesión de aguas, tres permisos de vertimiento, cinco guías ambientales, nueve ocupaciones de cauce y dos permisos no maderables para un total de 21 tramites otorgados, en 1088 días, para un Tiempo Promedio de Tramite de 53 días',
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
            'activity_id' => 13049,
            'year' =>3,
            'value' => 0,
            'description' => 'En el marco del ejercicio de Autoridad Ambiental a 15 de junio se tramitaron 127 procesos administrativos sancionatorios ambientales, de los cuales hay 18 procesos de la vigencia 2021 y 109 procesos nuevos. A la fecha no se ha resuelto proceso sancionatorio.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13050,
            'year' =>3,
            'value' => 61,
            'description' => 'Dando alcance a las normas de desempeño de las instituciones públicas del estado colombiano en la vigencia 2022, se han realizado la atención a quejas, solicitudes, peticiones y denuncias presentadas por actores institucionales y comunitarios
        Del total de las 959 PQRSD recibidas se ha logrado atender el 61% equivalente a 580 casos resueltos dentro de los términos legales, quedando un 39% sin atender equivalente a 379 asuntos.',
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
            'activity_id' => 13051,
            'year' =>3,
            'value' => 5,
            'description' => 'La Corporación Autónoma Regional para el Desarrollo Sostenible del Chocó –CODECHOCO en el marco de la Policiaca Ambiental Urbana, realiza acciones de implementación de conformidad al plan de acción de esta política en áreas urbanas para poblaciones entre 100.000 y 500.000 habitantes, por tal motivo, la Gestión Ambiental Urbana (GAU) se llevó a cabo en la ciudad de Quibdó. En el marco de la política Gestión Ambiental Urbana fueron priorizadas 5 acciones asociadas con generadores de residuos peligrosos, calidad de aire, seguimiento a PGIR y PSMV y gestión del recurso hídrico en Quibdó',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '090-2022, 088-2022, 089-2022, 094-2022, 095-2022, 096-2022,097-2022, 128-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13052,
            'year' =>3,
            'value' => 50,
            'description' => 'Para la vigencia 2022, la Corporación cuenta con un total de 492 tramites vigentes: licencia ambiental, concesión de aguas, permiso de vertimiento, Plan de Saneamiento y Manejo de Vertimientos – PMSV, Plan de Uso eficiente y Ahorro del Agua – PUEAA, Guía Ambiental, Plan de Contingencia, Permiso de emisiones atmosféricas, Permisos de ocupación de cauce y de aprovechamiento forestal entre otros y susceptibles de acciones de seguimiento: fueron realizados 294 seguimientos, lo que representa un cumplimiento del 50%',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '092-2022, 093-2022, 094-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13053,
            'year' =>3,
            'value' => 394,
            'description' => 'Realizados ciento cincuenta (150) Operativos de control,  los cuales  arrojaron Veinticinco (25) decomisos representados en 376,255 m3 metros cúbicos de madera (Flora) decomisados de diferentes especies forestales  Lechero (Brosimun utile), Chanul (Sacoglotis procera), Caimito (Pouteria caimito),  Roble (Tabebuia roseae ), Otobo (Otoba gracilipes), HIgueron (Ficus glabrata) y Carra (Huberodendron patinoi), realizados en los diferentes puestos de control con que cuenta CODECHOCO en su jurisdicción, Se realizaron ciento sesenta y ocho (168) visitas de seguimiento a establecimiento de trasformación de productos de la flora silvestre. Se desarrollaron 42 operativos de fauna silvestre, para un total de 394 operativos realizado durante el primer semestre de 2022',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13054,
            'year' =>3,
            'value' => 13,
            'description' => 'En el marco del ejercicio de la autoridad ambiental se realiza la identificación de unidades mineras mecanizada y semi-mecanizada sin licencia ambiental. Se realiza por identificación de minería ilegal el incumplimiento a la normatividad ambiental, en relación con los daños ambientales causados al medio ambiente. Durante los operativos de control y vigilancia realizados en acompañamiento a (CARDECHO, SIPOL, DISCAR, SIJIN DECHO, GRUA DECHO y al ESMAD), se identificaron 25 unidades mineras en la jurisdicción de la corporación.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '091-2022, 127-2022, 152-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13055,
            'year' =>3,
            'value' => 0,
            'description' => 'No se ha realizado avance en esta meta',
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
            'activity_id' => 13056,
            'year' =>3,
            'value' => 14,
            'description' => 'Implementación del Programa regional de monitoreo del Río Atrato: Se monitoreo el tramo comprendido entre el municipio de Carmen de Atrato y la ciudad de Quibdó, el cual consta de 10 estaciones que recogen los aportes de los rio Andágueda y Quito. La toma de muestras se realizó acorde a lo establecido en el Procedimiento de toma de muestras P-GES-06 del manual de calidad del laboratorio de aguas de CODECHOCÓ. Para la determinación de la calidad del recurso se implementó el cálculo del índice de calidad ICA de 6 variables definido por la Política Nacional para la Gestión Integrada del Recurso Hídrico (MADS, 2010) y los Lineamientos conceptuales y metodológicos para la evaluación regional del agua ERAS – (IDEAM, 2013) hoja metodológica versión 1,00. (Informe de calidad de la Red Integrada de Monitoreo del Rio Atrato a junio de 2022).',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '045-2022, 042-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13057,
            'year' =>3,
            'value' => 50,
            'description' => 'En operación la estación de monitoreo de rio Cabí',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '044-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13058,
            'year' =>3,
            'value' => 50,
            'description' => 'Mantenimiento y operación de estaciones automáticas de monitoreo: la REDCAM Caribe se estructuro sobre la red de monitoreo del INVEMAR que opero hasta el año 2010 y se complementó con la inclusión de playas pertenecientes al DRMI La Playóna - Loma la Caleta y la boca Tarena del rio Atrato con el fin de dar cumplimiento a los requerimientos de la sentencia T-622. La toma y procesamiento de las muestras se hace de acuerdo al protocolo indicador Calidad Ambiental de Agua ICAMPFF construido por el INVEMAR',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '041-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13059,
            'year' =>3,
            'value' => 10691114,
            'description' => 'Recurso captado por tasa retributiva invertidos en proyectos de inversión en descontaminación y monitoreo de la calidad del recurso: Se aplicaron los recursos en Mantener la Acreditación del Laboratorio de Aguas de la Corporación. Se realizo la inscripción al programa PICCAP como requisito necesario para mantener el alcance de la certificación para el procesamiento de muestras de agua potable. Montaje y Validación de una Técnica Fisicoquímica o Microbiológica de Calidad del Agua, en procura de ampliar la capacidad técnica del laboratorio de aguas de la corporación se implementa la técnica de DETERMINACIÓN DE CLOROFILA EN AGUA – SM 10200H con alcance para aguas estuarinas y marinas',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '043-2022, 040-2022, 039-2022, 046-2022, 047-2022, 042-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13060,
            'year' =>3,
            'value' => 22228691,
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
            'activity_id' => 13061,
            'year' =>3,
            'value' => 70,
            'description' => 'Se elaboro el documento de restructuración de la red de monitoreo de la corporación y se estableció el cronograma de priorización y monitoreo. La toma de muestras se realizó acorde a lo establecido en el Procedimiento de toma de muestras P-GES-06 del manual de calidad del laboratorio de aguas de CODECHOCÓ. Para la determinación de la calidad del recurso se implementó el cálculo del índice de calidad ICA de 6 variables definido por la Política Nacional para la Gestión Integrada del Recurso Hídrico (MADS, 2010) y los Lineamientos conceptuales y metodológicos para la evaluación regional del agua ERAS – (IDEAM, 2013) hoja metodológica versión 1,00. a la fecha se monitorearon las fuentes de rio Atrato parte media, rio Quito, rio Cabí, rio San Pablo y las quebradas Yesca y Aurora.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '151-2022, 154-2022, 067-2022, 068-2022, 069-2022, 070-2022, 072-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13062,
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
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13063,
            'year' =>3,
            'value' => 50,
            'description' => 'La implementación de la Estrategia Nacional de Prevención, Control y Vigilancia Forestal comprendió el desarrollo de :Implementación de los protocolos de Control y seguimiento al aprovechamiento, movilización, transformación y comercialización de productos de la flora silvestre en el área de jurisdicción de CODECHOCO: Durante la vigencia 2022 (enero a junio), con el apoyo de la Policía Nacional y la Armada Nacional , el personal de la Subdirección de Desarrollo sostenible y los funcionario apostados en los diferentes puestos de control permanente y con la aplicación de los protocolos 1,2 y 3 los cuales fueron adoptados por CODECHOCO mediante la Resolución  1375 del 24 de Septiembre de 2012, se realizaron Ciento cincuenta (150), operativos los cuales arrojaron Veinticinco (25) decomisos representados en 376,255 m3 metros cúbicos de madera (Flora) de diferentes especies forestales:  Lechero (Brosimun utile), Chanul (Sacoglotis procera), Caimito (Pouteria caimito),  Roble (Tabebuia roseae ), Otobo (Otoba gracilipes), HIgueron (Ficus glabrata) y Carra (Huberodendron patinoi), desarrollados en los diferentes puestos de control con que cuenta CODECHOCO en su jurisdicción.  La mayor cantidad de decomisos se realizó en el municipio de Tadó, seguido Quibdó, Riosucio, Carmen de Atrato, Nuqui y Cantón de San Pablo; las principales causas de decomisos fueron (Sin SUN, Exceso de cupo y adulteración del SUNL). Con relación a las industrias de transformación forestal durante el periodo comprendido entre enero y junio se han realizado Ciento sesenta y ocho (168) visitas de seguimiento . Organizar y sistematizar la estadística forestar para su reporte al sistema nacional de información forestal (SNIF). Durante el periodo comprendido entre enero y junio de 2022 fue validada y verificada la existencia en la plataforma un total de Novecientos treinta y seis (1.192) SUNL de movilización, re-movilización y renovación de productos forestales',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '057-2022, 048-2022,049-2022, 085-2022,050-2022,051-2022,054-2022,055-2022,056-2022,080-2022,079-2022,078-2022,077-2022,076-2022,053-2022,064-2022,062-2022,081-2022,082-2022,083-2022,052-2022,063-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13064,
            'year' =>3,
            'value' => 0,
            'description' => 'Desarrollado el alistamiento institucional, consistente en la contratación del personal de apoyo que llevara a cabo la ejecución de las acciones de esta meta',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '058-2022,063-202,065-2022,064-2022,021-2021 vf',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13065,
            'year' =>3,
            'value' => 100,
            'description' => 'Los recorridos para el monitoreo de la deforestación en zonas de manglar de los municipios de Nuquí, Acandí y Unguía evidencia el latente peligro en el cual se encuentran los manglares del departamento; si bien la situación de los manglares varia sustancialmente entre los municipios. 
        Los manglares de la zona Darién se encuentran en muy mal estado, en peligro de extinción; en el municipio de Acandí quedan muy pocos individuos, si bien la comunidad ha empezado a respetarlos, todavía se encuentran bajo una fuerte presión antrópica. En el municipio de Unguía los manglares están un poco mejor que en Acandí, pero existe la amenaza de los aserradores de la zona de Antioquía que están ejerciendo mucha presión sobre la zona de manglares que comparten los departamentos de Antioquia y Chocó
        En el caso de los manglares de Nuquí, ubicados sobre la costa Pacífica y mucho más abundante que los manglares del gofo del Darién, la situación está un poco mejor, pero tiende a deteriorarse debido a la presión que sobre los manglares se evidencio en los recorridos. La presión sobre estos manglares es el resultado del crecimiento poblacional de los centros poblados, que requieren de las maderas del manglar para suplir necesidades de vivienda, además como fuente de combustible para las cocinas de los hogares, situación que se ha agravado con el aumento de los precios de la pipeta de gas. En Nuquí se ha convertido en un gran problema la tala del manglar para el establecimiento de cultivos de Coco. Esta situación se evidenció por todas las zonas de manglar del municipio desde Arusí hasta Jurubirá.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => '061-2022, 087-2022,060-2022, 059-2022,022-2022,086-2022,085-2022',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13066,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizo avance en la construcción de la sede de CODECHOCO en Guarato – Tadó, producto del contrato 253 de 2021, suscrito con COBERTURA GLOBAL S.A.S. cuyo objeto es “adecuación de la sede de Guarato - Tadó y las oficinas de calidad y control ambiental y jurídica de la sede central de CODECHOCO ubicada en la carrera 1a No 22-96 de Quibdó”. Se realizó mantenimiento parque automotor: Toyota, adquisición de llantas, entre otros.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13067,
            'year' =>3,
            'value' => 21,
            'description' => 'Se realizo presentación de la Resolución No. 0499 del 27 de abril de 2020 “Por medio de la cual se establecen los requisitos y procedimiento para la concertación, evaluación y aprobación o negación de los asuntos exclusivamente ambientales del proyecto de revisión, ajuste o modificación de los planes de ordenamiento territorial en la jurisdicción de la corporación autónoma regional para el desarrollo sostenible del Choco – CODECHOCO”. Se elaboro el informe de revisión de los POT, que cuentan con inconsistencias cartográficas que generan dificultades en la gestión pública territorial, producto de la actualización de limites municipales elaborada por el IGAC en el año 2016, en los cuales se presenta una diferencia significativa de los polígonos municipales. Se efectúo presentación de las determinantes ambientales para la formulación, revisión o modificación de los planes de ordenamiento territorial municipal y departamental en la jurisdicción de la corporación, adoptados mediante Resolución No 0330 del 02 de abril de 2018
        Realizar seguimiento al componente ambiental de los POTM:  Evaluación incorporación componente ambiental de los Planes de Ordenamiento Territorial de los municipios de Jurado, Bahía Solano, Nuquí, Acandí, Unguía, Riosucio, Carmen del Darién, Bagadó, Bajo Baudó, Carmen de Atrato, Istmina, Sipí, Tadó, Condoto, Litoral del San Juan, Novita, Certegui, Unión Panamericana, Alto Baudó, Lloro y Río Iro',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '120-2021, 121-2022, 122-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13068,
            'year' =>3,
            'value' => 0.4,
            'description' => 'Ajuste del Plan Estratégico De Tecnologías De La Información – PETI. 2020 – 2023, para adaptarlo a las necesidades de la entidad para esta vigencia. versión 3.0. El documento se encuentra publicado en la página web de la entidad en la siguiente sección https://codechoco.gov.co/publicaciones/3395/planes-institucionales.Contratación servicio de internet con la empresa Azteca comunicaciones y Licencias de office 365 con la empresa NIMBUTECH. Implementación de la mesa de ayuda, a través de la cual se reciben y gestiona de forma organizada, las solicitudes de soporte técnico requeridos por los usuarios internos de la entidad. Implementación de la red WIFI para empleados e invitados, lo cual implicó la configuración de un servidor para la creación y gestión de usuarios a quienes se les permitiría la utilización de servicios de WIFI. Implementación de la Ventanilla Integral de Trámites Ambientales en Línea – VITAL, al interior de la entidad; Se crearon canales de comunicación para la interacción rápida del grupo de trabajo conformado y se definió un instrumento (matriz de Excel) a través del cual se lleva el reporte de trámites gestionados a través de la ventanilla. Administración de sede electrónica, que es uno de los principales canales de comunicación y de interacción con la ciudadanía. La Oficina TIC ha garantizado la operatividad de este recurso y la ha mantenido actualizada, realizando periódicamente el cargue de información institucional, conforme a lo establecido en la Ley de Transparencia y Acceso a la Información Pública, Ley 1712 y a la documentación aportada por las diferentes dependencias. Participación en la construcción del Modelo de Seguridad y Privacidad de la Información – MSPI. Este es otro de los proyectos del PETI y para su desarrollo se contrató la asesoría del ingeniero Oswaldo Suarez a quien se le ha suministrado información para la implementación del modelo en mención y se han atendido varias sesiones de trabajo. Administración de la red de voz y datos, la cual se ha mantenido operativa.  Elaboración del autodiagnóstico de Gobierno Digital, lo que nos indicó que nos encontramos en un nivel 3 de implementación de la estrategia, con un puntaje de 56,6. Acto seguido se elaboró el plan de acción para este año, definiendo las mejoras a implementar en los criterios priorizados y los plazos de implementación.
        Participación en el concurso Máxima Velocidad, iniciativa del MINTIC para motivar a las entidades públicas a avanzar en la implementación de la estrategia de Gobierno Digital. A través de este concurso se lograron avances importantes en los siguientes temas: Arquitectura, datos abiertos, IPV6, territorios y ciudades inteligentes, seguridad de la información, entre otros. Por el buen desempeño obtenido en el concurso la entidad fue una de las ganadoras, ubicándose en el segundo lugar del grupo Fórmula 2 (entidades con un nivel de avance medio en la política de Gobierno Digital); obteniendo un puntaje de 10.550 de 13.800 posibles. Elaboración de la matriz de riesgos de seguridad y privacidad de la información. Elaboración del plan de participación ciudadana, el cual surge como resultado de la participación en varias mesas de trabajo programadas para tal fin por el Departamento Administrativo de La Función Pública, quienes priorizaron a CODECHOCO dentro de varias entidades y por lo cual asignaron un asesor el cual ha venido trabajando con esta dependencia en el tema en mención',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '113-2022, 116-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13069,
            'year' =>3,
            'value' => 0.1,
            'description' => 'Acompañamiento para el cumplimiento de los compromisos generados en los comités.
        Acompañamiento en el seguimiento de las actividades de mejoras planeadas en los Planes de Acción de MIPG.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '112-2022, 114-2022,117-2022,115-2022,110-2022,118-2022,111-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13070,
            'year' =>3,
            'value' => 0.1,
            'description' => 'Publicación Boletines de Prensa: En el primer semestre de 2022, la oficina de prensa, emitió un total de 98 boletines de prensa, los cuales fueron publicados en la página web de la Corporación www.codechoco.gov.co, y enviados a la base de datos de los periodistas a nivel local y nacional. La información a la vez, es compartida con la comunidad en general, cuya base de datos se actualiza semestralmente. 
        Golpes de Opinión en Plataformas Digitales: De los 98 boletines de prensa emitidos por la oficina de prensa, de enero a junio se generaron un total de 52 golpes de opinión sobre la gestión ambiental liderada por Corporación, en medios regionales y nacionales a través de: Televisión, Radio y prensa.
        Golpes de Opinión en medios Tradicionales Radio, TV y Prensa Escrita: Golpes de Opinión en Radio: 10, Golpes de Opinión en TV: 3, Golpes de Opinión Portales Web 41
        Publicaciones en Redes Sociales: Actualmente CODECHOCÓ, cuenta con espacios en redes digitales, donde a diario se visibiliza el accionar de la autoridad ambiental en la jurisdicción. Fan Page de Facebook: Tiene 10.365 seguidores. Por publicaciones el alcance de los me gusta es sobre 130, con un alcance de 3.000 personas por publicación. Twitter: Tiene 5.451 seguidores. Por semana en este entorno digital se realizan 2.447 impresiones. Canal de YouTube: Cuenta con 322 suscriptores. Instagram: Cuenta con 2,235 seguidores, por publicación el alcance de los me gusta es de 25 like. De acuerdo a estas estadísticas, se define que la red donde más se consulta información de la entidad es en Facebook. 
        Implementación de la Emisora Codechocó Estéreo: A través de la emisora virtual de la Corporación, se promueven las buenas prácticas ambientales y se impulsa la educación ambiental como un eje transformador de la calidad de vida y el entorno. A través de la emisora virtual se emiten mensajes institucionales, jingles promocionales sobre el accionar de CODECHOCÓ y se abren espacios de participación para la ciudadanía y las entidades públicas del departamento del Chocó. Se produjeron 43 jingles, los cuales sirven de insumo para la parrilla de programación de la emisora. 
        Emisión del Noticiero “CODECHOCÓ NOTICIAS”: Se emitieron 37 noticieros por la emisora virtual “Codechocó Stéreo”. Durante el primer semestre de la vigencia 2022 a través de la emisora virtual CODECHOCÓ STEREO, se dio inicio a la emisión del programa Voces del Ambiente, el cual tiene como objetivo educar en cultura ambiental a la población Chocoana. A junio de 2022 se realizó la transmisión de cuatro (4) programas. Los cuales fueron emitidos por el Facebook de la emisora. 
        Realización de Campañas de Educación Ambiental: La oficina de prensa realizó un total de ocho campañas donde se presentan estrategias para la conservación del medio ambiente y la conmemoración de las fechas del calendario ambiental: Campaña 1: Día de la Educación Ambiental, Campaña 2: Adaptación al Cambio Climático, Campaña 3: No al Tráfico de Fauna Silvestre, Campaña 4: UN Darién sin Quemas, Campaña 5: Cuidado de los bosques
        Campaña 6: Protección Tortuga Caná, Campaña 7: Prevención durante la Temporada de Lluvias, Campaña 8: 5 de junio día mundial del medio ambiente
        Elaboración de material audiovisual: Con el propósito de fortalecer la emisión de contenidos a nivel interno y externo, herramientas claves para la implementación del Plan de comunicaciones, han sido la producción de piezas gráficas y la realización de material audiovisual.  A la fecha se han realizado los siguientes productos: Vídeos: 58 - Piezas Gráficas: 278 - Animación Digital: 2. Cada video en compartido a través de las redes sociales de la Corporación, y los grupos de interés de la entidad. 
        Concursos y Transmisiones en VIVO, En conmemoración del 5 de junio, día mundial del medio ambiente, la oficina de Prensa, con el apoyo del equipo de educación ambiental, llevó a cabo la segunda edición del concurso de fotografía ambiental” Una Mirada a los ecosistemas”. Concurso que se realizó a través de las redes sociales de la entidad y donde se convocó a los niños, niñas y jóvenes de la jurisdicción a registrar en cámara el patrimonio ambiental del territorio. Como resultado, se obtuvo la participación de 12 instituciones educativas. En cuanto a las transmisiones en VIVO, a través de la emisora virtual, CODECHOCÓ, STEREO, se realizaron dos emisiones especiales, sobre la Sede electrónica de la Corporación y la Carpeta Ciudadana Digital, con el fin de informar a la comunidad sobre el proceso para acceder a la información pública y a los servicios prestados por la entidad y el estado. 
        Participación Eventos Nacionales: En representación de la Entidad, a través de la oficina de prensa, se participó en el concurso DIGITORIAL, estrategia del Ministerio de las Tecnologías de la Información y las Comunicaciones, donde se logró fortalecer las capacidades en comunicación digital, a través de la implementación de una campaña por redes sociales sobre la Carpeta Ciudadana Digital. Como resultado de la campaña, la entidad ocupó el tercer lugar entre las instituciones del estado que hacían parte de esta iniciativa. 
        Actividades de comunicación interna: Revista Institucional “En Ambiente” Publicación interna, que circula cada 15 días y se entrega a través de los correos electrónicos institucionales, de los funcionarios y contratistas de la entidad. Para el primer semestre de la vigencia 2022 se emitieron 8 ediciones de la Revista
        Realización de Eventos: La oficina de prensa de la Corporación, brindó apoyo a las diferentes dependencias de la entidad, para el desarrollo de actividades virtuales y presenciales. Para el primer semestre, se apoyó la realización de la Asamblea Corporativa, Consejos Directivos, la elección del Representante de Comunidades Negras ante el Consejo Directivo de la Corporación, Audiencia pública de Rendición de Cuentas, entre otros. De manera virtual, en apoyo al equipo de educación ambiental, se participó del ciclo de capacitaciones en gestión ambiental a la fuerza pública de la entidad. Se brindó apoyo a la oficina de Gestión Humana, para la divulgación del Código de Integridad, y a la Subdirección de Planeación, en la promoción de la estrategia de participación ciudadana. Logros y Avances Alcanzados en el procedimiento de comunicaciones a nivel Interno y externo: Incrementó el número de seguidores en las diferentes redes sociales de la autoridad ambiental. (Facebook, Instagram, Twitter y YouTube). Fortalecimiento del equipo humano y técnico de la Oficina de Prensa, para mejorar el cumplimiento de las actividades de la OFP. Crear nuevos canales de comunicación para los usuarios internos y externos.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13072,
            'year' =>3,
            'value' => 0.3,
            'description' => 'Durante el primer semestre de la vigencia 2022, la Subdirección de Planeación avanzo en la construcción del diagnóstico ambiental del Plan de Gestión Ambiental Regional – PGAR 2022 – 2032, a partir de jornada de trabajo, aplicación de encuesta a administraciones municipales, jornada de trabajo con la mesa indígena y con la ANUC Chocó.
        
        En la jornada de trabajo con las administraciones municipales se realizó inicialmente presentación de video sobre las generalidades del PGAR; posteriormente se presentó la evaluación de los resultados del PGAR vigente; finalmente, se presentó la metodología para el desarrollo de la jornada en relación al PGAR',
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
            'activity_id' => 13073,
            'year' =>3,
            'value' => 3,
            'description' => 'Implementar estrategia de educación ambiental en el marco de la política regional de educación ambiental (PRAES y PROCEDAS)	Asesoría en el PRAES de la Institución Educativa COMFACHICO de Quibdó para dar continuidad a la ejecución con la seleccionando áreas para el establecimiento del vivero y adecuación de huerta escolar. Asesoría PRAES a la Institución Educativa Antonio Angles del municipio de Rio Quito construcción de vivero.
        Asesoría y capacitación en el PRAES de la Institución Educativa Antonio María Claret con la construcción, manejo y producción huerta escolar PROCEDAS en el municipio del Rio Quito con el proyecto CABECH generando estrategia para la integración de la comunidad.
        CIDEA - ACANDI – jornadas de capacitación. Elaborado el Plan de Contingencia para el Monitoreo, Seguimiento, Control y Vigilancia en la Prevención de Incendios de Cobertura Vegetal en el Municipio de Unguia, durante la primera temporada seca del año 2022.
        CIDEA – QUIBDO – jornadas de Sembratón. 
        Implementar Capacitaciones virtuales de educación ambiental: 01 de abril Capacitación para la conservación de fauna silvestre dirigida a la Policía Nacional: 07 de abril Capacitación para el seguimiento y control a la movilización de productos maderables y productos no maderables del bosque:22 de abril, día de la tierra “Afectaciones ambientales: 27 de mayo Capacitación manejo y disposición de los residuos sólidos: 22 de junio Capacitación en Instrumentos de Gestión Forestal.
        Dinamizar la Red de jóvenes de ambiente del Chocó: 22 de abril, día de la tierra “Afectaciones ambientales
        Diseñar e implementar procesos de educación ambiental con enfoque diferencial: Propuesta de fortalecimiento de educación ambiental con enfoque diferencial. Taller para la conservación de felinos Silvestres en el Chocó, y comunicación y prevención del riesgo por especies invasoras (Caracol Gigante) y la influenza aviar (Km 7). Campaña de educación y sensibilización ambiental para la conservación de fauna silvestre en comunidades indígenas (Km 7)
        Desarrollo de campañas de sensibilización ambiental para el manejo y conservación de los recursos naturales en el departamento del Chocó: Se desarrollaron veinte cinco (24) campañas de sensibilización ambiental para el manejo y conservación d ellos recursos naturales en el área de jurisdicción de la Corporación; en los temas manejo de residuos sólidos, tráfico de fauna y flora, legislación ambiental, cambio climático, Ley 2da y lineamientos forestales. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '123-2022, 124-2022, 125-2022, 126-2022, 129-2022, 129-2022, 131-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13074,
            'year' =>3,
            'value' => 0,
            'description' => 'Desarrollado el alistamiento institucional, consistente en la contratación del personal de apoyo que llevara a cabo la ejecución de las acciones de esta meta',
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
            'activity_id' => 13075,
            'year' =>3,
            'value' => 1,
            'description' => 'Un Planes de Manejo Ambiental territorio etnico, formulado para la comunidad  indígena de EYAPIDARA',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '017-2021',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13076,
            'year' =>3,
            'value' => 3,
            'description' => 'Se acompaño la formularon de cinco proyectos de restauración, de los cuales 4 poseen componente de PSA (FONAM)',
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
            'activity_id' => 13077,
            'year' =>3,
            'value' => 3,
            'description' => 'Se realizaron tres Comités regionales para la concertación ambiental; 1 Administraciones municipales, 1 Indígenas y 1 con la ANUC.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13078,
            'year' =>3,
            'value' => 4,
            'description' => 'Se realizaron acciones de prevención de incendios forestales para la conservación de los ecosistemas estratégicos, asistencias técnicas a los entes territoriales por ocurrencias de eventos geológicos e hidrometeorológicos, que generan riesgos de desastres y se contribuyó a la adaptación al cambio climático: Realización de (1) campaña institucional a los 4 municipios del Darién, (3) consejos de gestión del riesgo, (3) visitas de establecimiento de estrategias para la prevención de Incendios Forestales, para el Manejo y Conservación de Los Ecosistemas como medidas de adaptación al cambio climático. Prestada Asistencia Técnica por ocurrencia de Riesgos Geológicos, Ambientales e Hidrometeorológicos, a los municipios del Chocó, con la generación de (5) levantamientos fotogramétricos con Dron, información de alertas para los municipios requeridos, (2) seguimiento a eventos amenazantes y (3) participaciones en consejos municipales de gestión del riesgo de desastres. (1) capacitación en fortalecimiento de Coordinadores Municipales de Gestión del Riesgo, realización de (1) mesa técnica ambiental de gestión del riesgo de desastres, (2) participaciones en mesas técnicas ambientales en la UTCH, y (1) mesa técnica de determinantes ambientales y gestión del riesgo',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => '146-2022,148-2022,149-2022,150-2022',
            'state_id' => 1153,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13079,
            'year' =>3,
            'value' => 8,
            'description' => 'Entes territoriales con estudios técnicos para el conocimiento de amenazas y riesgos geológicos e hidrometeorológicos, como insumos para las acciones de prevención y reducción del riesgo y del cambio climático en las comunidades más vulnerables del Chocó: Realización de (8) estudios o informes técnicos y seguimientos, como instrumentos e insumos para el conocimiento y reducción del riesgo y del cambio climático en las comunidades vulnerables del Departamento del Chocó, como en los municipios de Nóvita por erosión de margen y inundaciones en Pindaza; Istmina por deslizamientos en la cabecera municipal; Quibdó por erosión de margen en Las Mercedes e incendio estructural en Aurora; Carmen de Atrato por movimientos en masas en El Roble; Bahía Solano por erosión costera en El Valle y Bajo Baudó por erosión costera en Pizarro. Se llevaron a cabo (3) certificaciones de las condiciones de riesgos ambientales, como acciones de conocimiento, prevención y reducción de los riesgos geológicos e hidrometeorológicos, para la debida gestión del riesgo de desastres, en los terrenos para una posible reubicación de las comunidades de Pindaza, Curundó y El Tigre',
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
            'activity_id' => 13080,
            'year' =>3,
            'value' => 0,
            'description' => 'No se ha reportado informe',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
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
