<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCormacarena2020 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 13615,
            'year' =>1,
            'value' => 10,
            'description' => 'La Corporación destinó recursos de inversión en la vigencia 2020 y mediante la convocaría No.19 adelantó contrato No. PS-GCT.2.7.20-707,  suscrito el 11 de diciembre de 2020, acta de inicio del 12 de enero de 2021 cuyo objeto es “implementación de estrategias para la reconversión productiva de los sistemas productivos ganaderos y agrícolas mediante implementación de  sistema agroforestales, silvopastoriles y pilotos de ganadería sostenible en áreas priorizadas en el departamento del Meta”, dentro del cual se seleccionaron dos subsectores productivos: ganadería doble propósito y Sistemas Agroforestales-SAF CACAO/CAFÉ/CACAY, el cual tendrá una duración de 8 meses ',
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
            'activity_id' => 13616,
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
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13617,
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
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7434,
            'year' =>1,
            'value' => 0.36,
            'description' => 'Se elaboró documento técnico Manual para el sector de minería de subsistencia, que hace referencia a las buenas prácticas ambientales amigables con el medio ambiente y adaptadas a la minería de subsistencia, generando  conciencia en los mineros y su aplicación voluntaria va disminuir  los impactos generados por la actividad extractiva y minimizar la incidencia de los efectos que están alterando el entorno natural. Los lineamientos y alcance del manual de buenas prácticas ambientales asociadas a minería de subsistencia, tienen como referencia y se enmarcan en general dentro de las Normas Nacionales que en materia ambiental tengan que ver con los proyectos de extracción y/o beneficio de materiales de construcción, este documento lo podrán visualizar en el link: https://www.cormacarena.gov.co/procesos-y-procedimientos/gestion-ambiental/licencias-de-mineria/  documentos de interés.',
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
            'activity_id' => 7435,
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
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7436,
            'year' =>1,
            'value' => 25,
            'description' => 'Actualmente la corporación tiene aprobadas 130 licencias ambientales en el departamento del Meta; con base en esto, se considera necesario orientar a los beneficiaros de las licencias ambientales en el buen ejercicio de la minería en el Departamento del Meta, así como del diligenciamiento de los formatos o documentos que así lo sustenten ante los seguimientos de Cormacarena, como autoridad ambiental. Por lo anterior, se realizaron dos(2) talleres a cuarenta (40) titulares mineros localizados sobre las fuentes hídricas río Caney (5 títulos mineros), río Guacavia (1 título minero), río Upía (3 títulos mineros) y río Guayuriba (31 títulos mineros), los cuales se realizaron los días 24 de septiembre de 2020 y el 10 noviembre  de 2020, el cual tuvo como nombre “Orientación en el cumplimiento de sus obligaciones y responsabilidades adquiridas en los instrumentos ambientales”; en metodología virtual por la plataforma Google Meet como alternativa para evitar el contacto directo y atender las recomendaciones del Estado de emergencia económica, social y ecológica en todo el territorio Nacional decretado por la Presidencia de la Republica. 
        ',
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
            'activity_id' => 7437,
            'year' =>1,
            'value' => 100,
            'description' => 'El Plan de Ordenamiento Ambiental Sector Minero estableció los criterios de explotación de materiales de acuerdo a las condiciones actuales del río Guayuriba, los cuales minimizan los procesos propios del río, como la socavación y desbordamiento en épocas de altos caudales y entra en ejecución a partir de la expedición de las 27 resoluciones, que modifican los métodos de explotación; en el periodo se realizó el seguimiento a las 27 resoluciones vigentes; El área de estudio se encuentra localizado sobre el río Guayuriba, en la ciudad de Villavicencio, Acacias, San Carlos de Guaroa y Puerto López, en el departamento del Meta.
        
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
            'activity_id' => 7438,
            'year' =>1,
            'value' => 10,
            'description' => 'El análisis del recurso energético para el departamento del Meta, se encuentra en proceso de   implementación en el portal web Corporativo permitiendo a todos los stakeholders o actores interesados tanto del sector público, como privado y comunidad que deseen conocer la oferta disponible para la generación de energía eléctrica a partir del desarrollo de proyectos con recursos naturales renovables, en el link   http://200.24.59.194/hidrocarburos/webfuentesdeenergia.htm 
        Adicionalmente, cada uno de los ítems presentados arroja datos de estadística, los cuales se podrán evaluar y concluir que para la generación de energía renovables en el departamento del Meta predomina como recurso natural solar y que con adecuado aprovechamiento de los residuos de la industria agropecuaria tenemos la oportunidad de generar de energías a partir de biomasa.
        También, se realizó la identificación de posibles soluciones energéticas para diferentes instituciones en el Departamento del Meta, centrándose en el Municipio de Puerto Gaitán para cuatro (4) instituciones educativas; en el municipio de San Luis de Cubarral para el complejo polideportivo y la sede principal de Cormacarena en la ciudad de Villavicencio
        ',
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
            'activity_id' => 7439,
            'year' =>1,
            'value' => 1,
            'description' => 'Para la vigencia 2020 se realizó  67 capacitaciones con temas teórico-prácticos relacionados con la separación en la fuente en el marco de la gestión integral de residuos sólidos aprovechables, así como en huertas caseras orgánicas, tanto en el área urbana como en el sector rural de los municipios llegando a un total de 905 personas capacitadas.',
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
            'activity_id' => 7440,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizó el seguimiento de los 29 municipios del departamento del Meta generando a cada uno concepto técnico, en cuanto al Programa de Aprovechamiento de los Planes de Gestión Integral de Residuos Sólidos, entre los cuales no entregaron el informe de cumplimiento 12 municipios como son El Dorado, Puerto López, San Juanito, Puerto Lleras, Mesetas, Vistahermosa, La Uribe, Cubarral, Guamal, El Calvario, El Castillo, y Cumaral.',
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
            'activity_id' => 7441,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizó el diseño de la propuesta para el establecimiento del centro de acopio y transferencia de llantas usadas en el municipio de Villavicencio.
        El proceso de manejo de los residuos se posconsumo se adelantó teniendo en cuenta las siguientes líneas:
        La primera línea de manejo son las llantas en desuso, que tiene cinco fases que se desarrollaron así:
        i) La identificación y caracterización de la problemática principal entorno a la gestión inadecuada de las llantas en desuso, considerando los antecedentes normativos y las acciones adelantadas previamente por la Corporación.
        ii) Las labores de planificación y concertación con actores involucrados y los grupos de interés para la consolidación de la estrategia, 
        iii) La selección del predio para el establecimiento del centro de acopio y transferencia, 
        iv) La adecuación, y finalmente,
        v) Las actividades de divulgación e implementación de la estrategia.
        La segunda línea manejo es la recolección de RAEEs y luminarias, se diseñó una ruta de recolección por Villavicencio para los días 14 y 15 de octubre de 2020 en alianza estratégica con Lúmina, RLG y Recopila y se obtuvo los siguientes resultados:
         29 empresas inscritas durante el periodo de divulgación.
         3 empresas inscritas posterior al cierre. 
         7,12 toneladas de residuos posconsumo recolectados.
         5,67 toneladas de computadores y periféricos. 
         653,9 Kg de residuos de iluminación (bombillas y luminarias).
         213 Kg de pilas.
         629 Kg de baterías.
         742 estudiantes y docentes sensibilizados frente a residuos posconsumo.
         27 personas capacitadas durante la campaña.
        ',
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
            'activity_id' => 7442,
            'year' =>1,
            'value' => 100,
            'description' => 'De acuerdo al Plan Nacional de Negocios Verdes establecido por el Ministerio de Ambiente y Desarrollo Sostenible-MADS, se inició una hoja de ruta acompañado por el Ministerio en la cual se establecieron los lineamientos a seguir para la implementación del programa departamental de Negocios Verdes, se realizaron reuniones virtuales con el equipo de apoyo designado por la oficina nacional en la cual se hizo énfasis en cómo debían abordarse los lineamientos y como se podría realizar el acercamiento con los diferentes actores del territorio en el departamento del Meta, para conformar una mesa o nodo en el departamento como uno de los renglones promisorios para la economía de la regional. El nodo departamental de Negocios Verdes se formalizó el día 17 de noviembre de la vigencia 2020 con la firma de la resolución 0912 de 2020, y se estableció el plan de acción para el año 2021 acorde a las necesidades de los emprendedores inscritos en la ventanilla.',
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
            'activity_id' => 7443,
            'year' =>1,
            'value' => 65,
            'description' => 'Se logró identificar mediante convenio No. 3025911.2019 con Ecopetrol, 65 negocios verdes nuevos los cuales fueron entregados junto con documentación soporte a la ventanilla de negocios verdes, una vez recibida esta información, iniciamos el proceso de verificación y evaluación de cada uno de los negocios por lo cual a algunos se les hizo visita en campo y a otra gran mayoría se realizó mediante reuniones virtuales debido a motivos de la pandemia del covid-19, un vez realizadas las verificaciones y diligenciado las fichas establecidas por el Ministerio, se procedió a elaborar el plan de mejora de cada uno de los negocios nuevos y la socialización del portafolio de Negocios verdes con los empresarios y emprendedores representantes de cada negocio a fin de establecer la ruta a seguir para el mejoramiento de los negocios verdes en los aspectos ambientales, económicos y sociales como lo determina el plan nacional de negocios verdes.
        portafolio de bienes y servicios de negocios verdes 2020, el cual está disponible en link  https://drive.google.com/file/d/18SXMEm98k9DJiEd0_WXkaqN_5Vq7UN6g/view del portal web de la Corporación https://www.cormacarena.gov.co/negociosverdes.',
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
            'activity_id' => 7444,
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
            'activity_id' => 7445,
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
            'activity_id' => 7446,
            'year' =>1,
            'value' => 6,
            'description' => 'Se logró realizar la medición de ruido ambiental de conformidad con las disposiciones de la Resolución No. 627 de 2006, en la zona urbana del municipio de Villavicencio, esto en el marco del día internacional de la concienciación del ruido y con el fin de evaluar los niveles de presión sonora presentados en los cuatro puntos de monitoreo (Colegio Cofrem, Éxito San Isidro, EDS Distracom CATUMARE y Banco de la República); De igual manera, se realizaron las mediciones de ruido ambiental en los municipios de Acacias, Cumaral, Granada, Puerto López y Restrepo generando mediciones en horario diurno y nocturno; de los municipios anteriormente nombrados el unico que cumple al 100%  lo establecido por al resolución es el Munipio de Villavicencio ',
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
            'activity_id' => 7447,
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
            'activity_id' => 7448,
            'year' =>1,
            'value' => 0,
            'description' => 'Se firmó contrato Nº: PS-GCT.2.7.20- 715 día 15 de diciembre 2020 cuyo objeto es “Consultoría para la elaboración de criterios ambientales y desarrollo de infraestructura para el sector turístico, en zonas de importancia estratégica, y seguimiento e implementación de instrumentos de ordenamiento ecoturístico el departamento del Meta”, con una duración de dos (2) meses y quince (15) días a partir del acta de inicio (21 de diciembre de 2020) con las siguientes actividades:
        
        Elaborar documento de criterios ambientales y desarrollo de infraestructura para el sector turístico. (criterios ambientales, jurídicos y administrativos)
        ',
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
            'activity_id' => 7449,
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
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7450,
            'year' =>1,
            'value' => 0,
            'description' => 'Se firmó contrato Nº: PS-GCT.2.7.20- 715 día 15 de diciembre  2020 y cuyo objeto es “Consultoría para la elaboración de criterios ambientales y desarrollo de infraestructura para el sector turístico, en zonas de importancia estratégica, y seguimiento e implementación de instrumentos de ordenamiento ecoturístico el departamento del Meta” con una duración de dos (2) meses y quince (15) días a partir del acta de inicio (21 de Diciembre de 2020) 
        Se proyecta para la vigencia 2021 realizar la implementación y seguimiento de los instrumentos de ordenamiento ecoturísticos (Elaboración de matrices de seguimiento, Elaboración de diseños de prototipos arquitectónicos)
        ',
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
            'activity_id' => 7451,
            'year' =>1,
            'value' => 100,
            'description' => 'En la vigencia 2020 se garantizó el funcionamiento de los equipos de monitoreo que conforman el Sistema de Vigilancia de la Calidad del Aire del municipio de Villavicencio, las estaciones de monitoreo se ubican en los sectores de Cofrem, Catumare y Esmeralda; cabe señalar, que se ha realizado la gestión de la información y el cargue al subsistema SISAIRE. No obstante, el periodo de medición ha sido semanal logrando realizar difusión por medios masivos de resultados de monitoreo, los datos registrados no superan los límites máximos permisibles fijados en 75 μg/m3 (microgramos por metro cubico).',
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
            'activity_id' => 7452,
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
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7453,
            'year' =>1,
            'value' => 15,
            'description' => 'Cormacarena tenía 5.953 expedientes de procesos sancionatorios en etapa de apertura de investigación. Ahora, durante el 2020 se emitieron 251 Resoluciones de Archivo que incluyen también las que decreta la cesación del procedimiento, 21 actos administrativos por medio de los cuales se resuelve recurso de reposición y que además permite dar firmeza a los actos de decisión; se suma a esta descripción 691 actos administrativos de sanción con los que se ha determinado responsabilidad ambiental.
        Asimismo, se identificaron durante el periodo un total de 210 procesos sancionatorios aperturados que se rigen por las formalidades de la Ley 1333 de 2009, este número hace referencia a las aperturas de investigación con formulación de cargos. El Cumplimiento del indicador en este tema específico es de 16.17% (que puede observar su cálculo en la Hoja Metodológica de los Indicadores Mínimos de Gestión y como lo indica la metodología establecida por el Ministerio
        ',
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
            'activity_id' => 7454,
            'year' =>1,
            'value' => 100,
            'description' => 'Dando cumplimiento a la normatividad ambiental, Cormacarena, por medio de la Resolución número PM-GJ.1.2.6.09.1924 de julio de 2009, ha desplegado en ejercicio de control y vigilancia, una serie de actuaciones administrativas encaminadas a prevenir, corregir y controlar todas aquellas conductas que ponen en riesgo o lesionan el bien jurídico al ambiente sano, cuya protección está reservada a las autoridades ambientales.  Es así como, durante la vigencia 2020, se recibieron 838 denuncias ambientales a través de llamadas telefónicas, oficios y diligenciamiento de formato, dando el respectivo tramite al 100% de las mismas. 
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
            'activity_id' => 7455,
            'year' =>1,
            'value' => 100,
            'description' => 'Con el fin de verificar o hacer efectivo el cumplimiento y lograr la efectividad de las medidas administrativas de carácter sancionatorio ambiental emitidas por la Corporación, durante la vigencia 2020 se realizaron visitas de verificación de medidas preventivas y sancionatorias a 382 expedientes, dando impulso procesal a los mismos y cumpliendo con lo establecido en el procedimiento sancionatorio ambiental.',
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
            'activity_id' => 7456,
            'year' =>1,
            'value' => 24,
            'description' => 'Durante la vigencia del 2020 la subdirección de gestión y control ambiental realizó 140 controles y seguimientos a los permisos ambientales otorgados por la entidad de los establecidos en la meta. En este sentido se dio alcance a un 24% de cumplimiento de la meta, si se tiene en cuenta que con ocasión de la emergencia sanitaria por COVID 19 decretada por el Gobierno Nacional, no fue posible la notificación de la totalidad de los autos que ordenan el respectivo control y seguimiento y la realización de las visitas técnicas decretadas, lo que originó el retraso del procedimiento para realizar los seguimientos mencionados.',
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
            'activity_id' => 7457,
            'year' =>1,
            'value' => 108,
            'description' => 'En total la subdirección de gestión y control ambiental en la vigencia del 2020 otorgo un total de 27 permiso ambientales (hidrocarburos 1, suelos 11, agua 1, aire 1 y bióticos 13) lo anterior en cumplimiento al indicador y el tiempo promedio de expedición de los mismos han sido días En total la subdirección de gestión y control ambiental en la vigencia del 2020 otorgo un total de 27 permiso ambientales (hidrocarburos 1, suelos 11, agua 1, aire 1 y bióticos 13) lo anterior en cumplimiento al indicador y el tiempo promedio de expedición de los mismos han sido  días',
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
            'activity_id' => 7458,
            'year' =>1,
            'value' => 5,
            'description' => 'Como resultado de la evaluación realizada a los 5 planes de ornato municipales, se logró determinar que  ninguno de éstos pudo ser aprobado por múltiples inconsistencias técnicas o vacíos de información respecto a los lineamientos especificados mediante la Resolución PS-GJ.1.2.6.13-0968 del 19 de junio de 2013, la cual se tuvo como base para la asistencia técnica dada, además de que 3 documentos fueron radicados entre el 2012 y el 2014, lo cual hace obsoletas las propuestas y diagnósticos realizados hace más de 8 años.
        El análisis de la información evidencio la necesidad de fortalecer la gestión con los entes territoriales y la Gobernación del Meta, con el propósito de fortalecer la capacidad técnica y financiera de las alcaldías del Departamento,   puesto que los Planes de Ornato se constituyen como la herramienta de planificación que tiene por finalidad orientar el desarrollo integral del patrimonio biológico de los centros urbanos, por lo tanto, en su formulación intervienen los distintos actores sociales y recoge los planes, programas, proyectos e iniciativas de desarrollo que existen en cada localidad, integrándolos a las dimensiones: social, ambiental, cultural, recreación, infraestructura e institucional, a partir de ésta visión compartida, se priorizan proyectos para ser ejecutados en articulación con entidades públicas y privadas en el corto, mediano y largo plazo. ',
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
            'activity_id' => 7459,
            'year' =>1,
            'value' => 50,
            'description' => 'Como resultado de este trabajo concertado con las comunidades e instituciones, se elaboraron tres documentos, que se constituyen como los protocolos de observación de Aves, de Oso Andino (Tremarctos ornatus) y mamíferos de agua dulce, los cuale son: 
        Protocolos de  avistamiento de aves en el departamento del Meta; como actividad social y ecológicamente sustentable.
        Protocolos de  avistamiento de oso andino (tremarctos ornatus) en jurisdicción del municipio de El Calvario - Meta; como actividad social y ecológicamente sustentable.
        Protocolo de  avistamiento de mamíferos de agua dulce en jurisdicción del municipio de Puerto Gaitán - Meta; como actividad social y ecológicamente sustentable.',
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
            'activity_id' => 7460,
            'year' =>1,
            'value' => 10,
            'description' => 'Mediante acuerdo 013 de 13 de noviembre de 2020, se ajustó el porcentaje de avance de cumplimiento de la meta, la cual registro un avance del 10%, representado en la elaboraron los términos de referencia y proceso precontractual para seleccionar el operador del proyecto, adhiriendo a los principios metodológicos de la Guía para el Desarrollo de la Ordenación Forestal Integral y Sostenible en Colombia MADS 2015, mediante la adjudicación del  contrato No. PS-GCT2.7.20-722 del 24 de diciembre de 2020, el  cual tiene por objeto “Formulación del plan de ordenación forestal para la subzonas hidrográficas alto Guaviare, Municipios de la Macarena y Vistahermosa, jurisdicción de Cormacarena”  con una duración  de seis (6) meses, inicio a partir del siete (7) de Enero de 2021, lo anterior  con el fin de proteger los recursos naturales renovables, la oferta de servicios ambientales, la sostenibilidad de la oferta forestal y desarrollo sustentable de la región; se espera que esta estrategia de conservación se sume a las medidas definidas por la entidad para contrarrestar el fenómeno de la deforestación en el sur del Meta.',
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
            'activity_id' => 7461,
            'year' =>1,
            'value' => 0.1,
            'description' => 'Con el acuerdo 013 de 13 de noviembre de 2020 emitido por el Consejo Directivo de Cormacarena, se ajustó el porcentaje de avance de cumplimiento de la meta, la cual registro un avance de 0.1 (10%), representado en la elaboraron los términos de referencia y proceso precontractual para seleccionar el operador del proyecto, mediante la adjudicación del contrato PS-GCT.2.7.20 – 723 de 29 de diciembre de 2020 cuyo objeto es la “Formulación de un plan de manejo y aprovechamiento forestal en el municipio de la Macarena, Meta”. Con una duración de cuatro (4) meses,  con acta de inicio de fecha 31 de diciembre de 2020, este plan  facilita un uso de recursos maderables y no maderables de una forma planificada, sostenible y legal, también permite conocer las especies, volúmenes de madera aprovechables y remanentes, determinar las labores silviculturales e identificar el método de aprovechamiento forestal y transporte primario para sacar la madera y la Unidad de Corta Anual al sitio de almacenamiento y posterior transformación primaria. El Plan de Manejo Forestal es el instrumento para el trabajo diario del bosque con una estructura específica, de manera tal, que sea una guía que permita garantizar el rendimiento sostenible del bosque, y a su vez, permite el monitoreo y control del recurso maderable y no maderable a las autoridades ambientales.
        Para la entidad es absolutamente necesario adelantar el proyecto de formulación del Plan de Manejo Forestal en el Municipio de La Macarena, como una estrategia direccionada a contrarrestar la deforestación para reconocer el capital natural de los predios de los integrantes de comunidades locales como es el caso de ASOPEPRO, y las alternativas productivas basadas en el uso sostenible. 
        ',
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
            'activity_id' => 7462,
            'year' =>1,
            'value' => 3,
            'description' => 'Durante el año 2020, se registraron 15 operativos de control al tráfico ilegal de fauna silvestre en respuesta a las denuncias ambientales ciudadanas  recibidas por la Corporación y a través de un trabajo articulado con el apoyo del Fuerza pública entre ella el Ejército de Colombia y la Policía Nacional, con sus grupo de Ambiental y Ecológica y de Carabineros y Guías Caninos, lográndose de esta manera el rescate y decomiso preventivo de 17 especies de la fauna silvestre, el registro a 124 vehículos y 16 establecimientos en los municipios de Villavicencio, Puerto López, Granada La Macarena',
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
            'activity_id' => 7463,
            'year' =>1,
            'value' => 3,
            'description' => 'A la fecha se han realizado tres (3) operativos con resultados al control al tráfico ilegal de flora. El primero se llevó a cabo el día 9 de mayo de 2020 en el municipio de Puerto Concordia, el segundo el 19 de junio del año en curso, en el municipio de Cabuyaro y el tercero del 10 al 17 de diciembre en el municipio de Mapiripán, los cuales suman un total 232.35 metros cúbicos, que corresponde a la mayor cifra en volumen de madera incautada en el registro de los últimos diez años por parte de Corporación.',
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
            'activity_id' => 7464,
            'year' =>1,
            'value' => 100,
            'description' => 'Durante lo transcurrido del año 2020 se han realizado tres (3) capacitaciones sobre medidas de control y prevención de la especie exótica invasora caracol gigante africano (Achatina fulica), dos virtuales dirigidas a las alcaldías de los municipios de Villavicencio y Restrepo – Meta y una presencial a la Policía DEMET Grupo Carabineros en el Comando de Policía –Meta.    Se ha realizado la entrega de material para la recolección y disposición final de caracol gigante africano a doce (12) administraciones municipales: Cubarral, Cabuyaro, San Juan de Arama, San Martin, Vistahermosa, La Macarena, Granada, Puerto Llera, Lejanías, Puerto López y Castilla La Nueva. En el municipio de El Dorado – Meta, el material fue entregado a la Defensa civil para recolección, disposición y divulgación para la especie exótica invasora caracol gigante africano (Achatina fulica)
        Entregándose un total de:
        480 paquetes de bolsas rojas x 100 unidades
        480 cartillas divulgativas sobre el control del caracol gigante africano (Achatina fulica)
        12 cajas de tapabocas x 50 unidades
        60 cajas de guantes de látex x 100 unidades',
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
            'activity_id' => 7465,
            'year' =>1,
            'value' => 80,
            'description' => 'La entidad adelantó las implementaciones de los Planes de Conservación de tres (13) especies de fauna y una de flora, de las especies de fauna ocho registran las acciones encaminadas al desarrollo de medidas de control al tráfico ilegal, manejo pos decomiso y liberación de la fauna que ingresa a la entidad por incautaciones, entregas voluntarias o rescate de ejemplares heridos por acciones antrópicas, accidentes, atropellamiento vial o perturbación a viviendas o infraestructura urbana; cuatro especies de fauna hacen parte de convenios interadministrativos para acciones específicas de conservación suscritos con la Universidad de los Llanos, Instituto Humboldt y Universidad Nacional, la meta asume el valor de 80 % por cuanto las actividades de los convenios darán inicio en la vigencia 2021.',
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
            'activity_id' => 7466,
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
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7467,
            'year' =>1,
            'value' => 100,
            'description' => 'La prestacion del servicio se ha realizado de manera initerrumplida durante todo el  periodo evaluado al tratarse de un servicio esencial,   teniendo en cuenta que toda la fauna que ingresa a la entidad ha sido rescatada, valorada y relocalizada conforme a los protocolos de liberación y atencion en el CAV que opera en Los Ocarros, Durante el 2020 se recepcionó un total de  901 ejemplares de diferentes especies, se recibieron 328 mamíferos, 285 aves y 288 reptiles; liberándose 429, reubicándose 393 y 79 murieron; las especies se han recepcionado por entrega voluntaria, decomisos o rescatados por la comunidad y la mayoría se han recepcionado en el municipio de Villavicencio.',
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
            'activity_id' => 7468,
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
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7469,
            'year' =>1,
            'value' => 0.1,
            'description' => 'Se adelantó contrato No.PS-GCT.2.7.20-736 cuyo objeto es “Integración de los instrumentos técnicos de planificación, manejo Ambiental y gestión de conservación producto de: 1-La formulación De los planes de manejo de las áreas protegidas Reserva Forestal Protectora Cuenca Alta Caño Vanguardia, Y Reserva Forestal Protectora Cerro Vanguardia, y su área adyacente con función Amortiguadora. 2-Actualización del plan de manejo del área Protegida Reserva Forestal Protectora Caños Parrado Y Buque (Buenavista) y formulación del plan de manejo del área adyacente con función amortiguadora.”  Para la creación de estos estudios previos se realizó un análisis desde el ámbito, técnico, jurídico y económico logrando para el día 23 de noviembre la publicación y apertura de convocatorias el 01 de diciembre de 2021, en el mes de diciembre se realizó evaluación de los oferentes al Concurso de méritos No. 029 C.M.A de 2020, se firma contrato el 30 de diciembre de 2020, el cual tendrá una duración de 6 meses y se tiene acta de inicio del 6 de enero de 2021. 
        ',
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
            'activity_id' => 7470,
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
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7471,
            'year' =>1,
            'value' => 1,
            'description' => 'Se priorizo el municipio de Fuentedeoro (Meta), este ente territorial hace parte de la cuenca media del río Ariari, cuenta con una gran riqueza hídrica, en la que los ecosistemas tipo humedales, pueden ser estratégicos en el mantenimiento de esta; se identificaron 76 posibles humedales, de los cuales se descartaron 19, debido a que algunos hacen parte de la clasificación como humedales artificiales (piscícolas (13) y posibles cultivos de arroz (2)); y otros se encontraban georreferenciados dentro del río Ariari (4). Se dio prioridad a los humedales naturales, dado que estos conservan más atributos que representan las características propias de los ecosistemas de la región, mientras que los humedales artificiales fueron modificados o creados con fines productivos (en este caso).',
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
            'activity_id' => 7472,
            'year' =>1,
            'value' => 92,
            'description' => 'La corporación tiene bajo su jurisdicción 15 Áreas protegidas que el grupo de áreas protegidas administra, estas áreas son; 1. Reserva Forestal Protectora de Quebrada Honda “Buenavista 2. Reserva Forestal Protectora Cerro Vanguardia 3.Reserva Forestal Protectora Cuenca Alta del Caño Vanguardia y Quebrada Vanguardiuno 4.Parque Natural Regional Laguna de Loma linda 5.Parque Natural Regional Laguna de San Vicente 6.Parque Natural Regional Quebrada Honda 7.Área de Recreación Parque Ecológico Humedal Calatrava 8.Área de Recreación Parque Ecológico Humedal Caracolí 9.Área de Recreación Parque Ecológico Humedal Zuria 10.Área de Recreación Parque Ecológico Humedal Coroncoro 11.Área de Recreación Parque Ecológico Humedal el Charco  12.Distrito de Conservación de Suelos Kirpas Pinilla La Cuerera 13.Área de Recreación Humedal Maiciana- Manacal 14.Distrito regional de manejo integrado Carimagua y 15.Parque Natural Regional Bosque de los Guayupes.
        
        De estas áreas protegidas 13 cuentan con planes de manejo vigentes, para el caso de Vanguardia y vanguardiuno estan en proceso de adopción de los planes de manejo  y en el segundo semestre del año 2020 el grupo de áreas protegidas ha trabajado en la ejecución de 13 planes de manejo, con un grupo de 12 profesionales y/o  técnicos contratados; planificando e iniciando acciones de administración de áreas protegidas a través de la estructuración de un Plan Operativo Trimestral, un esquema de gobernanza en el marco del Plan de manejo determinado para cada Área Protegida desarrollando las acciones de protección, conservación y control.
        Como resultado de estas acciones se logró mitigar afectaciones sobre las áreas Protegidas y estructurar un sistema de Administración de áreas Protegidas que permitirá desarrollar en campo un óptimo uso de estos Ecosistemas Estratégicos
        ',
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
            'activity_id' => 7473,
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
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12710,
            'year' =>1,
            'value' => 8,
            'description' => 'Durante la vigencia 2020 la estrategia Meta Verde fue la responsable de la plantación de 444.772 árboles, correspondientes a 50 especies. Esto corresponde a 429 hectáreas en 17 Municipios del departamento, siendo Puerto Gaitán, Puerto López y Granada los municipios con mayor número de árboles plantados.
        
        El material vegetal que se pudo establecer provino de compensaciones en las que se aceptó la entrega de material vegetal y algunas donaciones para la “Sembratón” del 23 de abril, que debió ser suspendida debido a la pandemia por la COVID 19.
        
        Como aliados de la meta “Realizar acciones de reforestación y/o restauración” se contó con un apoyo importante en términos logísticos, por parte de entidades del estado Colombiano como son: Ejército Nacional, Policía Nacional, Policía de Carabineros, Ministerio del Interior, Gobernación del Meta, Alcaldía de Puerto López y Cabuyaro. Así como empresas del sector privado como Hocol, Pork Colombia, Reservas Naturales de la Sociedad Civil, Ecopetrol, Hupecol y Tecpetro.
        
        el 100% corresponde a 4650 Ha. ( el 8% es = 372 hA. /  se realizo el 9,2%0 428,4 Ha)
        El total de la mera se desarrollo - Activa
        Reforestación:  287.2 Ha.
        Restauración: 141.2 Ha.
        ',
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
            'activity_id' => 12711,
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
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12712,
            'year' =>1,
            'value' => 5,
            'description' => 'Durante la vigencia 2020, para dar cumplimiento a esta meta PAI se ha trabajado en la construcción de un Plan de restauración ecológica y uso sostenible del predio el Paraíso ubicado en las coordenadas (4° 744.05N y 72° 320.39O), en el municipio de Puerto Gaitán-Meta, el predio fue entregado a Cormacarena como inversión forzosa no menor al uno por ciento (1%) por parte de la empresa OLEODUCTO DE LOS LLANOS S.A (ODL), quien debe realizar la compensación, por afectación paisajística, eliminación de la capa vegetal (pastos naturales) y la construcción de las Estaciones de Rebombeo Trompillos y Horizonte',
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
            'activity_id' => 12713,
            'year' =>1,
            'value' => 0.60,
            'description' => '
        Estos viveros se establecieron mediante convenios interinstitucionales con la adquisición de predios en los sigueintes lugares:
        
        El Ejército Nacional, PE,DE 4,8,1,20-004  se cuentan con tres predios en la Base militar Fudra en la Macarena, Base militar Batot en puerto rico, y Base militar Bivar en Mapiripan. 
        
        Parques Nacionales Naturales: PE.GDE,1,4,8,1,20-006  se cuentan con predio  encuentra dentro del PNN Sierra de la Macarena en jurisdicciones del municipio de San Juan de Arama  cuenta con un área total para uso del establecimiento del Mega Vivero cuenta con un area de 4500 m2 de terreno plano.
        
        Alcaldía de Puerto López  PE,GDE,1,4,8,1,20-0058 Ubicado en el Predio Candilejas Plaza de Ferias, Jurisdicción del Municipio de Puerto López – Meta.
         
        Agrosavia en el municipio de villavicencio.',
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
            'activity_id' => 7474,
            'year' =>1,
            'value' => 2,
            'description' => 'Durante la vigencia 2020, en la búsqueda de generar incentivos a la conservación, Cormacarena llevó a cabo la formulación de tres esquemas de pagos por servicios ambientales- PSA los cuales son:
        PSA Cuenca Río Guayuriba (Comprende Veredas de los municipios de Acacías y Villavicencio,  
        PSA Tillava (Abarca los resguardos indígenas Unuma, El Tigre y Wallianae del Municipio de Puerto Gaitán), 
        PSA municipio de Puerto Concordia.
        La formulación de dichos esquemas de PSA, fueron estructurados de acuerdo a los lineamientos del Decreto 870 de 2017 y Decreto 1007 de 2018.
        Durante el proceso de formulación fueron realizadas un total de  143 visitas de caracterización, (121 visitas para PSA Guayuriba: veredas de los municipios de Acacias y Villavicencio, 9 visitas a comunidades de los resguardos Unuma, el Tigre y Wallianae). En el marco de la formulación del esquema de PSA Guayuriba y 13 Visitas de caracterización en el municipio de Puerto Concordia. Las Veredas objeto de caracterización para el caso de los Municipios de Acacias y Villavicencio fueron: Manzanares, Portachuelo, Líbano, Laberinto, Brisas de Pañuelo, Lomas de San Juan, Vistahermosa, Brisas del Guayuriba, Los Pinos y Lomas de San Juan, (Acacias) y  Concepción Baja y La Cumbre (Villavicencio). Las veredas visitadas para efectos de la formulación del PSA Puerto Concordia fueron (Veredas Paraíso, El Porvenir, El Tesoro y Alto Cafre). 
        ',
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
            'activity_id' => 7475,
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
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7476,
            'year' =>1,
            'value' => 0,
            'description' => 'Para la implementación de esquemas de pagos por servicios ambientales, Cormacarena realiza acercamiento con la administración municipal y los presidentes de las JAC  para socializar el PSA y programar fechas de la caracterización socio ambiental y económica a las familias residentes en las veredas priorizadas, con base en esta información se prioriza las familias beneficiadas por el proyecto; se firman los acuerdos de conservación y uso sostenible del bosque y se realiza la inscripción y bancarización de las familias en la plataforma de MAS BOSQUES y posteriormente se realizan los pagos a las cuentas definidas en el acuerdo. Los pagos están sujetos a la verificación trimestral de la conservación de la cobertura boscosa del predio inscrito. En la vigencia 2020 se beneficiaron 144 familias,  para un total de 3,280 hectáreas conservadas con el PSA.',
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
            'activity_id' => 7477,
            'year' =>1,
            'value' => 15,
            'description' => 'Se dio cumplimiento de las actividades programadas a corto plazo que corresponde al 15% en cumplimiento a la sentencia 4360 de 2018, como evidencia de ello, se envió informe de ejecución de actividades a la Corte Suprema de Justicia con copia a la Presidencia de la República y al Ministerio de Ambiente y Desarrollo Sostenible. Adicional al informe, se entregaron las evidencias que soportan la ejecución de las actividades para 2020. De igual forma, se entregó el PLAN PARA MITIGAR LA DEFORESTACION, LA TALA INDISCRIMINADA Y LOS DAÑOS ECOLOGICOS EN LA ZONA DEL RESGUARDO INDIGENA LLANOS DEL YARI –YAGUARA II all Juzgado Primero Civil del Circuito especializado en Restitución de Tierras de Ibagué, que profirió el Auto Interlocutorio No.0263 del 26 de septiembre de 2017, en el  marco de la medida cautelar a favor del resguardo indígena Llanos del Yarí – Yaguará II.',
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
            'activity_id' => 7478,
            'year' =>1,
            'value' => 1,
            'description' => 'En el marco de la gobernanza forestal se logró el desarrollo de 53 seguimientos de aprovechamiento y movilización con el apoyo de Visión Amazonia en los municipios de Fuente De Oro, Granada, Guamal, Lejanías, Mesetas, Puerto Concordia, Puerto Lleras, Puerto Rico, Vista Hermosa, El Dorado, Villavicencio, Mapiripán, Cabuyaro, Puerto López y Barranca de Upia en los cuales se logró el decomiso de 172.8 metros cúbicos, se realizaron 23 visitas a industrias forestales con apertura de libro y 16 visitas a industrias forestales para iniciar el proceso de registro de libro, se entregaron 4 reconocimientos a industrias forestales',
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
            'activity_id' => 7479,
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
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7480,
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
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7481,
            'year' =>1,
            'value' => 1,
            'description' => 'Para la actualización del instrumento ambiental, se llevó a cabo una fase de consulta a la operadora sobre información técnica y ambiental de la térmica, se realiza una consulta de expedientes para verificar desde información secundaria los aspectos relevantes a incluirse en el producto. Seguidamente se procedió a compilación de información primaría a través de visitas de campo para verificar los componentes físico, biótico y social, además de las características del proyecto térmico, por parte del componente social se llevaron a cabo reuniones con representantes de la comunidad del área de influencia, Autoridades Locales y empresa, empleando cartografía social como herramienta en la definición de problemáticas.  
        Como parte de la formulación de la fase de diagnóstico se trabajó un modelo de dispersión de contaminantes a través de la ejecución del modelo Screen View de dispersión de contaminantes y el modelo WRPLOT generando rosa de los vientos de las termoeléctricas, para generar áreas de influencias, para identificar impactos ambientales en la zona, y formular acciones de protección del componente atmosférico, en cuanto al componente fauna y flora se llevó un inventario forestal por parcelas en la zona de influencia directa. 
        Con la información colectada procedió a realizar la fase de formulación y seguimiento de los programas e indicadores que se debían actualizar de acuerdo con las condiciones encontradas en campo, los cuales permitirán realizar una trazabilidad y seguimiento a la ejecución de las actividades propuestas.  
        
        El plan de manejo ambiental de TermoRubiales consta de las etapas de aprestamiento, diagnóstico, formulación y seguimiento, acompañada del componente cartográfico respectivo, en cuanto a los anexos se relacionan en apéndices los soportes llevados a cabo. 
        
        
        ',
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
            'activity_id' => 7482,
            'year' =>1,
            'value' => 2,
            'description' => 'Una vez identificada la necesidad de formular planes de manejo ambiental para las térmicas del Departamento, se priorizaron para formular los planes de manejo ambiental a las térmicas Termo Ocoa (Campo Apiay) perteneciente a la cuenca del Rio Guatiquía y Guayuriba, así como la térmica Termo Morichal 1 localizada Campo Rubiales en la cuenca del Río Tillava.  Para lo cual, se llevó a cabo una consulta previa de información técnica y ambiental de las térmicas ante entidades y empresas, junto con la revisión de la información de los expedientes que reposan en archivo de Cormacarena. 
        De manera siguiente, con la información se definió el área de influencia general para las termoeléctricas Morichal 1 y Ocoa, generando la elaboración de cartografía asociada a los componentes a evaluar dentro del área de influencia, como parte del plan de manejo ambiental consolidado, está compuesto por el documento descriptivo de las termoeléctricas y cartografía temática, ejecución del modelo WRPLOT generando rosa de los vientos de las termoeléctricas Morichal 1 y Ocoa, modelo Screen View de dispersión de contaminantes, delimitación del área de influencia especifica de las termoeléctricas, socialización con actores estratégicos de la vereda Rubiales empleando cartografía social como herramienta en la definición de problemáticas, levantamiento de inventario forestal en área de influencia en las tres térmicas, compilación de especies de fauna presentes en el área de las tres termoeléctricas, evaluación de problemáticas identificadas por medio de la matriz de Conessa. En cuanto a la formulación y seguimiento del plan de acción, en el documento se realizó un compendio de GDB, MXD  y cartografía temática para las termoeléctricas, realización de fichas por problemáticas evidenciadas y evaluadas en la matriz de Conessa, tabla de proyectos y actividades asociadas al PAI 2020 - 2023 concluyendo con los documentos con sus respectivas fichas de manejo ambiental elaboradas, actividades y proyectos asociados a los impactos con lo establecido en el Plan de Acción Institucional.
        ',
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
            'activity_id' => 7483,
            'year' =>1,
            'value' => 50,
            'description' => 'Implemetacion de los diez  (10)  POMCAS adoptados por la Corporacion asi: Guatiquia, Acacias-Pajure, Guamal, Alto Ariari, Medio y Bajo Ariari, Tillava, Humea, Guayuriba, Negro y Losada, El avance se logró mediante el trabajo articulado con grupos de la corporación, los cuales reportaron información de manera mensual de las actividades que se ejecutaron y así mismo se identificó en qué POMCA se llevaron a cabo y el porcentaje de avance. 
        
        
        ',
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
            'activity_id' => 7484,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizó el seguimiento a los diez (10) Planes de Ordenación y Manejo de Cuencas hidrográficas adoptados por la corporación. Este seguimiento se efectuó mediante el diseño de una matriz donde se lleva el reporte de las actividades ejecutadas e implementadas en cada POMCA.  Para el caso específico de la formulación del Plan de Ordenación y Manejo de la Cuenca Río Guayabero, se encuentra pendiente la puesta en marcha de la consulta previa ya que aún no ha sido posible debido al pronunciamiento oficial del Ministerio de Interior mediante CIRCULAR EXTERNA CIR2020-24-DMI-1000 expedida el 17 de marzo de 2020 dirigida a las entidades públicas del orden nacional y territorial, y comunidades Indígenas, Rom, Negras, Afrocolombianas, Raizales y Palenqueras, cuyo asunto corresponde a la “suspensión temporal de actividades en campo y de consulta previa de medidas legislativas y administrativas, como medida para la prevención de contagios de covid-19”, igualmente mediante OFI2020-7728-DCP-2500 del 16 de marzo de 2020.',
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
            'activity_id' => 7485,
            'year' =>1,
            'value' => 0.90,
            'description' => 'En cumplimiento a la Resolución 957 del 31 de mayo de 2018 del Ministerio de Ambiente y Desarrollo Sostenible-MADS, y de conformidad con lo definido en el artículo 206 de la Ley 1450 de 2011, en el artículo 83 del Decreto Ley 2811 de 1974 y en el Decreto Único Reglamentario 1076 de 2015, adicionado por el Decreto 2245 de 2017, se elaboró el documento de priorización para el acotamiento de rondas hídricas, que contiene:
        Introducción, Objetivos, Marco normativo, Problemática ambiental, Marco conceptual, Marco metodológico, Criterios de evaluación, Recopilación y depuración de información secundaria, Análisis multicriterio de priorización, Evaluación de los criterios de priorización y Resultados.
        
        Cabe aclarar que aun cuando se cuenta con el documento elaborado, no se ha aprobado mediante acto administrativo.',
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
            'activity_id' => 7486,
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
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7487,
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
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7488,
            'year' =>1,
            'value' => 0.5,
            'description' => 'Se suscribió el convenio No. PE.GDE 1,4,8,1,20,007 DE 2020 SUSCRITO con EDESA para la construcción del emisario final alcantarillado sanitario  etapa 1 en el Municipio de Guamal, actualmente, se encuentra fase de adjudicación del contrato de obra por parte de EDESA ESP.
        Es de aclarar que el 50% reportado como avane obedece al apoyo realizado por CORMACARENA a través del desembolso del 50% de los recursos para llevar a cabo la obra, quedando pendiente el desembolso del restante 50% una vez EDESA ESP haga entrega del contrato de obra suscrito para el cumplimiento del convenio.',
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
            'activity_id' => 7489,
            'year' =>1,
            'value' => 83,
            'description' => 'En la vigencia 2020 se llevó a cabo el seguimiento a cincuenta y dos (52) PSMV cumpliendo de esta forma con el 83% de la meta programada para el indicador en la vigencia 2020, de los cuales veintidós (22) corresponden a los municipios de: Barranca de Upía, El Dorado, Puerto Concordia, Cabuyaro, San Juan de Arama, Puerto Rico, Mesetas, Vistahermosa, Villavicencio, Fuentedeoro, La Macarena, San Carlos de Guaroa, El Calvario, Mapiripan, Puerto Gaitán, Acacias, Cumaral, Puerto Lleras, Lejanías, Uribe, Guamal y El Castillo  y treinta (30) corresponden a los centros poblados de: Cacayal del municipio de Lejanías; San Isidro de Chichimene, Dinamarca y Quebraditas de Acacias; Maracaibo de Vistahermosa; San Miguel de Guarupay y Visos de Upía de Cabuyaro; Planas, Murujuy, Puente Arimena, El Porvenir, Humapo, Puerto Trujillo, San Miguel, Altos de Tillava, Cristalinas de Puerto Gaitán; El Diviso de Uribe; Puerto Santander y Puerto Aljure de Fuentedeoro; Tierra Grata de Puerto Lleras; Santa rosa de Rionegro, Rincón de Pompeya y Altos de Pompeya de Villavicencio; Puerto Guadalupe, La Balsa y Remolinos de Puerto López; Palmeras, Peñuelas y Surimena de San Carlos de Guaroa; El Lindenal de Puerto Concordia. 
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
            'activity_id' => 7490,
            'year' =>1,
            'value' => 5,
            'description' => 'Teniendo en cuenta la importancia que posee el recurso hídrico en el desarrollo de la actividad humana, se convierte entonces en uno de los recursos de mayor aprovechamiento por tal razon, es importante realizar monitoreo en términos de cantidad y calidad de agua  a las siguientes Fuente Hídricas: 
        1. Rio Guarojo en Puerto Gaitan,
        2. Rio Tillava
        3. Caño Rubiales
        4. Caño masisiferiana
        5. Caño Cochinote.
        ',
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
            'activity_id' => 7491,
            'year' =>1,
            'value' => 60,
            'description' => 'En el año 2020 se realizó seguimiento a 16 programas de ahorro de agua, con esto se dio cumplimiento a la meta a través de la elaboración de los respectivos conceptos técnicos de control y seguimiento a los programas de ahorro que han sido aprobados a los usuarios del recurso hídrico tanto como superficial como subterráneo dentro de las obligaciones de los permisos de concesión de aguas.',
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
            'activity_id' => 7492,
            'year' =>1,
            'value' => 6,
            'description' => 'Se efectuó el análisis y evaluación de la calidad de las fuentes hídricas o tramos de las mismas objeto de implementación de la tasa retributiva (Fijación de Metas de Carga Contaminante),se evaluó las condiciones de los vertimientos de cada tramo, con la finalidad de determinar escenarios que permitan el control de la carga contaminante generadas por los diferentes usuarios del recurso hídrico, para un horizonte de 5 años.
        Se realizó talleres de trabajo con los usuarios de los tramos objeto de definición de metas, donde se socializó el proceso a llevar a cabo, adicionalmente fueron escenarios que permitieron una participación activa. De esta manera del análisis de la corporación, de la corporación usuario, se pudo consolidar propuestas de escenarios de metas para el horizonte de 2021 – 2025. Todas las actividades descritas anteriormente fueron reglamentadas mediante la Resolución No. PS-GJ 1.2.3.20.633 del 01 de octubre de 2020 la cual fue modificada por la Resolución No. PS-GJ 1.2.6.20.1028 del 26 de noviembre de 2020, donde se determinó el procedimiento y se estableció el cronograma para efectos de llevar a cabo el proceso de definición de metas de carga contaminante, esto de conformidad y dando cumplimiento a lo establecido en el decreto 1076 de 2015. Lo anterior fue publicado en la página Web de CORMACARENA en el enlace https://www.cormacarena.gov.co/tasa-retributiva/',
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
            'activity_id' => 7493,
            'year' =>1,
            'value' => 21,
            'description' => 'El desarrollo de este proceso se efectuó el cálculo tarifario (Factor Regional) para el total de usuarios de los veintiún (21) cuerpos de agua y/o tramos de los mismos que cuentan con metas de carga contaminante, de esta manera mediante la Resolución No. PS-GJ 1.2.6.20.0440 del 11 de agosto de 2020 se reglamentó dicho proceso, el cual está dispuesto en la página Web de CORMACARENA.',
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
            'activity_id' => 7494,
            'year' =>1,
            'value' => 96,
            'description' => 'En cumplimiento a este proceso se efectuó el cálculo tarifario de los usuarios de la Tasa por Utilización de Agua, en el mes de julio de 2020; por otra parte, mediante acto administrativo No. PS-GJ 1.2.6.20.0441 del 11 agosto de 2020 se acoge y se actualiza la tarifa mínima establecida para el uso del recurso hídrico por el Gobierno Nacional en el área de jurisdicción del departamento del meta. De esta manera para el mes de agosto se expidió la facturación Tasa Por Utilización de Agua TUA – 2020, la cual fue remitida a los usuarios el día 09 de septiembre de 2020 por medio físico. De lo anterior fue un total de 895 usuarios.',
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
            'activity_id' => 7495,
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
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7496,
            'year' =>1,
            'value' => 46,
            'description' => 'Se llevó a cabo la formulación del Plan de Ordenamiento del Río Guayuriba en jurisdicción de CORMACARENA; en cumplimiento a las fases establecidas en el decreto 1076 de 2015 para lo cual se definieron los usos actuales y preponderantes del cuerpo de agua con sus respectivos criterios de calidad.  Dicho plan fue adoptado mediante la resolución No. PS – GJ 1.2.6.20-1665 del 22 de diciembre de 2020. 
        Por otro lado, se adelanta la formulación del plan de ordenamiento de caño Aguas Claras en los municipios  de El Dorado y El Castillo cuyo avance a la fecha es del 36% que corresponde a la fase de diagnóstico, definición del plan de monitoreo identificación de usuarios que captan y vierten al cuerpo de agua bajo el contrato No PS-GCT 2.7.20-628, convocatoria 10 Cuyo objeto es “Realizar el ordenamiento del recurso hídrico  de Caño Aguas Claras en el Municipio de  el Dorado  y actualización de objetivos de calidad de los RIos Guejar y Guape en el Departamento del Meta, el cual tiene una duración de 5 meses iniciando actividades des de según acta de inicio el 27 de Octubre de 2020 con terminación el 26 de marzo de 2021.
        ',
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
            'activity_id' => 7497,
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
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7498,
            'year' =>1,
            'value' => 1,
            'description' => 'Se actualizó la base de datos de la zonas hidrogeológicas, con el fin de monitorear a los usuarios de los municipios en los cuales tiene jurisdicción Cormacarena.
        
        A corte 31 de diciembre de 2020 la base de datos contaba con 1133 usuarios a los cuales se les hace control y seguimiento y se le actualiza la información de cada usuario acorde al avance del proceso que se desarrolle',
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
            'activity_id' => 7499,
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
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7500,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizó la selección de los 10 puntos de monitoreo idóneos para incluirse en la red de monitoreo y cumplir en la actualización y fortalecimiento de la misma, con puntos de monitoreo de aguas subterráneas en área de influencia de bloques y operadores del sector hidrocarburos en el departamento del Meta a fin de verificar la calidad del recurso hídrico en inmediaciones de campos de producción en el Departamento, inspeccionando la posible influencia de sustancias características de la industria en las aguas subterráneas.
        Con los datos obtenidos, se generó la alimentación de la base de datos de la red nacional con la siguiente información, en cuanto a los 10 puntos escogidos (Identificación, Información jurídica, Localización, Información técnica, Diseño del punto y Uso)',
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
            'activity_id' => 7501,
            'year' =>1,
            'value' => 1,
            'description' => 'Existen 56 puntos priorizados, de los cuales se realizaron las visitas y muestras con sus respectivos analisis quimicos.
        Una vez verificada la información técnica con la que se cuenta de los cincuenta y seis (56) puntos de captación monitoreados hasta la fecha, se logró evidenciar que en un mayor porcentaje no cuentan con la información técnica correspondiente a la georreferenciación, nivelación o diseño de pozo profundo, e inclusive en algunos casos no poseen las condiciones mínimas de protección o medición de caudal, artiendo de lo antes mencionado, se generaron los comunicados necesarios para requerir la información técnica necesaria a los usuarios correspondientes. Esto con el fin de ser complementada con la aportada por el laboratorio de calidad con respecto a las muestras de agua cruda tomadas anualmente. 
        El 100% de los puntos monitoreados posee un IRCA con un riesgo alto para la salud de la población, debido a las concentraciones de bacterias como coliformes fecales (E. coli) y al pH ácido. Teniendo en cuenta estos resultados presentados para la época de lluvia en el año 2020, se hace necesario un monitoreo de estos parámetros en época seca con el fin de hacerles un seguimiento. Aun así, es importante recalcar que el IRCA es un índice de agua potable, para este caso se evalúa agua subterránea sin tratamiento, por lo tanto, se tiene como resultado un riesgo alto para la salud de la población. 
        ',
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
            'activity_id' => 7502,
            'year' =>1,
            'value' => 93,
            'description' => 'Durante este perido se hizo el reporte de los modulos SISAIRE-RUA-RESPEL-SIRH-SNIF en la plataforma del SIAC, informacion que fue cargada por los profesionales de cada uno de los grupos responables. En este sentido se dio un alcance al 93,3% de la meta si se tiene en cuenta que el módulo SIRH fue objeto de revisión y verificación de la información cargada, lo que no permitió el cargue de la información adicional. ',
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
            'activity_id' => 7503,
            'year' =>1,
            'value' => 1,
            'description' => 'Con el fin de fortalecer el sistema de información ambiental, se cuenta de manera pública el visor en el portal web de la corporación en el link  https://cormacarena.maps.arcgis.com/apps/webappviewer/index.html?id=426c4227b4b54818b3
        f2ccdb9924114c, en el cual se puede observar la siguiente información:
        
        Cartografía del departamento del Meta aprobada por la Corporación, así:
        6 POMCAS
        7 Planes de manejo ambiental de áreas protegidas declaradas por la Corporación
        4 Planes integrales de manejo ambiental
        1 Plan de ordenación forestal
        Información predial del IGAC para consulta
        Módulo de análisis de selección.',
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
            'activity_id' => 7504,
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
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7505,
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
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7506,
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
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7507,
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
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7508,
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
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7509,
            'year' =>1,
            'value' => 0,
            'description' => 'Con el objetivo de dar cumplimiento a la meta de realizar dos proyectos de investigación, se formuló el Proyecto “Implementación de sistemas agrosilvopastoriles en la zona de uso sostenible de Distrito Regional de Manejo Integrado Carimagua – DRMI - con la Corporación Colombiana de investigación agropecuaria AGROSAVIA”, el cual busca aunar esfuerzos técnicos científicos y financieros para la implementación de sistemas agro-silvopastoriles en la zona de uso sostenible del Distrito Regional de Manejo Integrado DRMI - Carimagua (Fase I), para la investigación, el desarrollo y producción de información ambiental que permita avanzar en el conocimiento del territorio del Departamento del Meta. Se logró avanzar gracias al trabajo articulado y comprometido de las dos instituciones; a partir de acercamiento, reuniones de trabajo entre el grupo Ciencia, Tecnología e innovación ambiental, de la oficina asesora de planeación (CORMACARENA) y la dirección del Centro de Investigación La libertad (AGROSAVIA). La Corporación destinó un presupuesto de $230.000.000 M/Cte para la compra de un equipo GASMET DX4015/GT500 Terra que permitirá monitorear el desarrollo de los sistemas agro-silvopastoriles como una estrategia de uso sostenible en Distrito Regional de Manejo Integrado Carimagua – DRMI en el marco del Convenio PE.GDE.1.4.8.1.20.012 firmado con acta de inicio el día 30 de diciembre del 2020.
        De otra parte, el Proyecto Nutria y delfín rosado (Fase I) se gestionó para firma del convenio PE.GDE.1.4.8.1.20-011 con el con el Instituto de investigación de recursos biológicos Alexander Von Humboldt el día 17 de diciembre 2020, el cual busca Aunar esfuerzos técnicos, científicos y financieros para realizar un estudio de las especies delfín rosado (inia geoffrensis) y nutria gigante (pteronura brasiliensis) y sus interrelaciones con los otros recursos hidrobiológicos y humedales. Se destinó un presupuesto de $295.000.000 M/Cte que permita generar y transferir conocimiento para la preservación de las especies delfín rosado (inia geoffrensis) y la nutria (pteronura brasiliensis) catalogadas en un grado vulnerable (VU) y en peligro (EN) respectivamente. 
        ',
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
            'activity_id' => 7510,
            'year' =>1,
            'value' => 100,
            'description' => 'La Corporación cuenta con 2 estaciones hidrometereologicas:  Acaciitas y Chichimene y a la fecha se encuentran en servicio las dos estaciones.
        
        
        ',
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
            'activity_id' => 7511,
            'year' =>1,
            'value' => 95.7,
            'description' => 'En lo corrido del año con fecha de corte al 31 de diciembre del 2020, se generaron 136 documentos de respuesta, teniendo en cuenta las 142 órdenes judiciales de restitución de tierras equivalente a un 95,77%,  partiendo de la base que los trámites y respuestas se realizan por demanda del sistema judicial, y que otras órdenes y/o solicitudes que requieren de mayor tiempo para su cumplimiento; por ejemplo: Medidas Cautelares de control de la deforestación y procesos de restauración, transferencia de predios, elaboración de estudios técnicos, entre otros.
        
        Adicionalmente, se ha realizado la asistencia a 53 audiencias judiciales durante dicha vigencia normativa, así como los debidos acompañamientos y respuestas a consultas hechas desde la Procuraduría (44 oficios), la Unidad de Restitución de Tierras URT (70 oficios) y otras instituciones, por ejemplo: Instituto von Humbolt, Alcaldías Municipales, Gobernación del Meta, Secretaría de Víctimas, Derechos Humanos y Paz del Departamento del Meta, y Corporinoquia, entre otros).
        ',
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
            'activity_id' => 7512,
            'year' =>1,
            'value' => 100,
            'description' => 'Durantte la vigencia 2020 se reviso los 29 planes de desarollo municipales y el Plan de desarrollo Departamental y se llevo a cabo   Asistencia Técnica para la incorporación de las Determinantes Ambientales en el POT y seguimiento al proceso de concertación ambiental, a los actores estrategicos del proceso (Administración Municipal, Consejo Territorial de Planeación y Concejo Municipal), los días 18,19,20,21 y 24 de agosto del año en curso, a 19 municipios (Barranca de Upía, Cabuyaro, San Juanito, El Calvario, El Dorado, Guamal, Uribe, Lejanías, Mesetas, Puerto Concordia, Puerto Gaitán, Puerto López, Puerto Lleras, Restrepo, San Carlos de Guaroa, San Juan de Arama, Castilla la Nueva, Vistahermosa y El Castillo). Los días 8 y 9 de septiembre de 2020, se realizó asistencias a 5 municipios (San Martin de los Llanos, Puerto Rico, La Macarena, Cumaral y Fuentedeoro); todas llevadas a cabo por videoconferencia Meet;   para los municipios de Granada y Mapiripan, respectivamente. Las cuales, no se llevaron a cabo, por motivos de cancelación por parte de las administraciones municipales. Sin embargo, se allegó a las admnistraciones municipales la información concerniente a la Asistencia Técnica para la incorporación de las Determinantes Ambientales en el POT.
        
        se realizo documento de observaciones a las propuestas de formulaciópn o revisión de plan de ordenamiento territorial de Villavicencio y el plan basico de plan de ordenamiento territorial de Acacias.
        
        ',
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
            'activity_id' => 7513,
            'year' =>1,
            'value' => 80,
            'description' => 'Durante la vigencia del año 2020, se avanzó en la revisión de las propuestas de formulación, modificación o presentación de estudios detallados de amenaza, de 6 proyectos de planes parciales puestos a consideración de la Corporación, 2 del municipio de Villavicencio  y 4 de Acacías, de los cuales se adelantó la consolidación de los correspondientes conceptos técnicos, para citar a concertación o ajuste de los respectivos documentos, según corresponda para 4 planes parciales (Potrero Grande, El Botellón, San Marcos y La Leticia) en los municipios de Villavicencio y Acacías.',
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
            'activity_id' => 7514,
            'year' =>1,
            'value' => 81.20,
            'description' => 'En el periodo de tiempo objeto de reporte, se atendió un total de 118 trámites de determinantes ambientales para diferentes tipos de proyectos de urbanismo o desarrollo (planes parciales, parcelaciones, plantas de tratamiento de aguas residuales, entre otros), ubicados en las diferentes clases de suelos en que se encuentra clasificado el territorio de los municipios de Acacías, Castilla la Nueva, Cumaral, Granada, La Macarena, Uribe, Lejanías, Puerto Concordia, Puerto López, Restrepo, San Martin y Villavicencio.
        
        Se avanzó en el 81.2% de la meta debido a que del total de trámites atendidos (118), hay 22 documentos pendientes de concepto, visita o en revisión.',
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
            'activity_id' => 7515,
            'year' =>1,
            'value' => 1,
            'description' => 'La ejecución de esta actividad se enmarcó en la recopilación de las matrices de seguimientos para los procesos contmeplados en el  PROCEDIMIENTO PARA LA REVISIÓN Y CONCERTACIÓN DE LOS PLANES DE ORDENAMIENTO TERRITORIAL. Teniendo como herramienta de seguimiento a los instrumentos de planificación la recopilación de las matrices: MATRIZ SEGUIMIENTO INDICADORES POT, LISTADO DE PLANES Y ESQUEMAS DE ORDENAMIENTO TERRITORIAL, al igual que los indicadores de seguimiento establecidos a acordados al momento de la concertación de los POT.
        
        El modelo de herramienta se aplico a los Municipios  de:
        
        Puerto Lopez
        Castilla La Nueva
        Restrepo
        Villavicencio
        San Carlos de Guaroa.',
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
            'activity_id' => 7516,
            'year' =>1,
            'value' => 1,
            'description' => 'Para la vigencia del año 2020, en primera instancia se diseñó, una estrategia de intervención, que apunta a atender las necesidades de los territorios (Documento elaborado). 
        
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
            'activity_id' => 7517,
            'year' =>1,
            'value' => 30,
            'description' => 'La Corporación  de manera articulada con las Alcaldías de El Dorado, Cubarral y Lejanías y productores vinculados al Proyecto Participación de Víctimas y Municipios de Acogida en el Desarrollo Económico PROINTCAME de la Agencia de Cooperación Técnica Alemana GIZ, implementó la estrategia de Zonificación Ambiental Rápida Participativa (ZARP) en predios localizados en el Área de Manejo Especial La Macarena (AMEM), con el propósito de establecer de manera concertada mediante acuerdos, unidades de zonificación que orienten las acciones de manejo en cada uno de los predios vinculados al proceso.  A diciembre 31 de 2020 se firmaron 36 acuerdos de Zonificación Ambiental Rápida Participativa.',
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
            'activity_id' => 7518,
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
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7519,
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
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7520,
            'year' =>1,
            'value' => 0,
            'description' => 'Teniendo en cuenta que los recursos con los cuales se financiaría las acciones a desarrollar para cumplimiento de la meta, provienen de las transferencias del sector eléctrico y más específicamente de las térmoeléctricas localizadas en la cuenca hidrográfica del Río Tillavá, se hizo necesario revisar los planes integrales de vida de las comunidades de los tres resguardos indígenas que se ubican en el área de influencia de la misma.
        Para lo cual, se llevó a cabo acercamiento con las comunidades indígenas Walianae y El Tigre en el municipio de Puerto Gaitán, donde se estableció el apoyo a estos resguardos indígenas, para así definir el proyecto específico en el marco de las competencias de la Corporación, que se puede apoyar en su implementación para cada uno de ellos. Teniendo como propuesta apoyar la implementación de su componente ‘ECONOMIA, SOBERANIA Y SEGURIDAD ALIMENTARIA’, según los Planes Integrales de Vida de estos resguardos.
        Con corte al mes de diciembre del año 2020, se contó con la adjudicación del contrato de obra con tiempo de ejecución de 4 meses.
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
            'activity_id' => 7521,
            'year' =>1,
            'value' => 70,
            'description' => 'Durante la vigencia 2020, Cormacarena ha realizado 72 visitas de inspección ocular como asistencia técnica en gestión del riesgo, relacionados con la ocurrencia de fenómenos asociados a inundaciones, avenidas torrenciales y/o movimientos en masa en diferentes corrientes hídricas del departamento.
                                                                                                                                                                                                                                                                                                                                                                                                                                          ',
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
            'activity_id' => 7522,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizó la actualización del documento con la identificacino de las areas prioritarais,  teniendo en cuenta las visitas en los municipios de Acacias. Castilla la nueva, Cumaral, El Castillo, El Dorado, Fuentedeoro, Granada, Guamal, Lejanias, Mesetas, Restrepo, San Carlos de Guaroa, San Juna de arama, San Martin, Villavicencio, Vista Hermosa, Puerto Lopez, Puerto Gaitan y con la Gobernación del Meta.
        La primera aproximación permitió identificar una concentración de eventos como inundaciones en las corrientes como el río Guatiquía, Guayuriba, Guamal y Ariari, que por sus condiciones de torrencialidad hacia la parte alta y el cambio de pendiente a la llegada a la llanura aluvial, genera una morfología proclive a los desbordamientos cuando la temporada de lluvias aumenta considerablemente los caudales. 
        
        La identificación de las zonas recurrentes definió el área de estudio en la que se proyecta el desarrollo de una metodología consistente en un trabajo de campo con visitas técnicas y el cruce de información temática de Geología y Geomorfología, además de la definición de la amenaza a través de la zonificación de los EOT o los POMCAS. 
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
            'activity_id' => 7523,
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
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7524,
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
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7525,
            'year' =>1,
            'value' => 0,
            'description' => 'Mediante el documento “FORTALECIMIENTO DE LA CAPACIDAD INSTITUCIONAL EN LA GESTIÓN INTEGRAL DE RIESGO Y CAMBIO CLIMÁTICO EN EL DEPARTAMENTO DEL META” se realizó el diagnóstico de la frecuencia y probabilidad de ocurrencia de fenómenos asociados a incendios forestales y quemas en el Departamento del Meta, arrojando una serie de acciones que se deben promover e implementar con el fin de disminuir el riesgo de desastres, dicha implementación se dará en la vigencia 2021.
        
        De la misma manera, se acompañó a los municipios de Puerto Gaitán y Villavicencio, en el marco de las reuniones de los Consejos Municipales de Gestión del Riesgo, así como a la Dirección Departamental de Gestión del Riesgo, en temas relacionados con la ocurrencia de incendios forestales. 
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
            'activity_id' => 7526,
            'year' =>1,
            'value' => 0,
            'description' => 'En la vigencia 2020 se realizó el diagnóstico de las acciones a desarrollar con los organismos de socorro identificados por la Corporación, fase que se determinó mediante el documento “FORTALECIMIENTO DE LA CAPACIDAD INSTITUCIONAL EN LA GESTIÓN INTEGRAL DE RIESGO Y CAMBIO CLIMÁTICO EN EL DEPARTAMENTO DEL META”. Las implementaciones de las acciones se llevarán a cabo en la vigencia 2021 tal y como se programó mediante recursos para dicha vigencia.
        
        Adicionalmente se realizó un contrato de prestación de servicios de apoyo a la gestión No PS-GCT.2.7.20 – 608 cuyo objeto: Asesoría y acompañamiento técnico en el fortalecimiento de la capacidad institucional en la gestión integral de riesgo y cambio climático en el departamento del Meta, con una duración de 3 meses y acta de inicio a partir del 02 de octubre de 2020
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
            'activity_id' => 7527,
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
            $idevidencia101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7528,
            'year' =>1,
            'value' => 100,
            'description' => 'Con la asesoría  a municipios, Cormacarena busca optimizar la implementación del Plan Regional de Cambio Climático de la Orinoquia PRICCO, mediante el fortalecimiento de la capacidad técnica de entes territoriales de la jurisdicción en temas relacionados con la gestión del cambio climático, de manera especial, las medidas de mitigación y de adaptación propuestas. 
        Incorporación de acciones frente a cambio climático: Durante el 2020, fueron revisados por parte de esta autoridad ambiental los Planes de Desarrollo de la totalidad de los municipios de la jurisdicción. Como resultado de la revisión, se generó para cada uno de los 29 municipios un informe, donde entre muchos aspectos de injerencia de la entidad, se realizaron necesidades de ajuste relacionados con la adecuada incorporación del componente cambio climático. Dichas observaciones o necesidades de ajuste estuvieron relacionadas con la necesidad de incorporar los lineamientos planteados en las fichas de cambio climático para cada municipio en particular, hasta la destinación del 1% de los ingresos corrientes de acuerdo al artículo 111 de la Ley 99 de 1993; con lo que se buscó orientar el fortalecimiento de estos instrumentos de planificación con el adecuado desarrollo o incorporación del componente cambio climático. 
        A las acciones anteriores, se sumó la generación de comentarios y recomendaciones de Ajuste a la Actualización Excepcional del POT Municipio de Villavicencio y  EOT del municipio de Acacías.
        Acciones de acompañamiento para la planificación y ejecución de acciones: Durante la vigencia 2020, se adelantaron espacios de asesoría a los 29 municipios de la jurisdicción orientados a dar a conocer los instrumentos con los que se cuenta para la inclusión del componente cambio climático en la planificación municipal, como el documento PRICCO región, PRICCO Cartilla Meta, Ficha de determinantes ambientales por municipio, Guía del MADS para la incorporación del cambio climático en Planes de ordenamiento territorial, Metas desde Cormacarena y el ente Departamental, e instrumentos pedagógicos de fuentes oficiales como herramienta para el abordaje social frente al tema). 
        Así mismo el grupo Cambio climático participó de manera activa en otros espacios que permiten a su vez contar con mayores herramientas para fortalecer el acompañamiento a entes territoriales mediante el ejercicios de sus funciones como Secretaria técnica de Norecco para lo cual, se  llevaron  a cabo 4 Comités Técnico y 1 Comité Directivo del NORECCO  (conforman el Nodo, el sector público,  sector privado, sector académico, ONGs y demás organizaciones de los Departamentos Meta, Vichada, Arauca y Casanare). 
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
            'activity_id' => 7529,
            'year' =>1,
            'value' => 100,
            'description' => 'Durante la vigencia 2020, se llevó a cabo la revisión de las acciones ejecutadas durante la vigencia del PA Norecco 2018-2020. Como resultado de dicha revisión, fue elaborado un informe de seguimiento a las actividades de mitigación y adaptación hasta la vigencia 2020, a fin de orientar el punto de partida para la actualización del Plan de acción 2021-2023. 
        
        Cormacarena, en calidad de secretaría técnica, lideró el desarrollo de  4 comités técnicos con las entidades que conforman Norecco y una Mesa de trabajo, donde entre otros temas relacionados con gestión del cambio climático, se llevó a cabo la revisión de acciones del nuevo plan de acción. Teniendo en cuenta los aportes de acciones de cada entidad parte del nodo, se llevó a cabo la construcción del Plan de Acción 2021-2023, el cual enmarca las acciones frente al cambio climático lideradas desde Norecco, siendo aprobado por el Comité Directivo de Norecco; con la aprobación del PA del Nodo por parte del órgano directivo se cumple con el 100% de la actualización del instrumento.
        ',
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
            'activity_id' => 7530,
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
            $idevidencia104 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7531,
            'year' =>1,
            'value' => 30,
            'description' => 'En busca de la incorporación efectiva de las estrategias de la Política Nacional de Educación Ambiental en el ámbito territorial, los planes locales de educación ambiental son liderados por las administraciones municipales y las comunidades, es así que en la vigencia 2020 se revisaron los 30 Planes de Desarrollo (1 departamental y 29 municipales) y se hicieron recomendaciones, conforme a la Directiva 001 del 25 de febrero de 2013 de la Procuraduría General de la Nación.  ',
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
            'activity_id' => 7532,
            'year' =>1,
            'value' => 4,
            'description' => 'Se fortalecieron acciones de educación ambiental de los PROCEDA Nawal Birding, Corporquidea, Aula Ambiental Viso Colorado, Expedición Primavera, RNJA Nodo Meta y Colectivo Total Art.
        
        Con el acompañamiento a Nawal Birding en los Censos Navideños de Aves y el Censo de Aves Acuáticas se registraron 808 especies de aves en los ecosistemas del departamento del Meta.
        
        Se dispuso como escenario para socializar la experiencia significativa del PROCEDA Corporquidea, el Conversatorio Desarrollo Sostenible y la Educación Ambiental”, con la asistencia de 250 personas, en el marco de la Feria Agroindustrial ExpoMaloca 2020.
        
        Los colectivos Primavera Urbana de Villavicencio y Aula Ambiental Vereda Viso Colorado de San Martin de los Llanos fueron asesorados en la formulación y ajuste de sus documentos PROCEDA y Plan de Acción; con el primero se realizó la producción de dos videos para socializar a través de las redes sociales el proyecto ciudadano Primavera Urbana; y con el segundo se desarrolló un curso teórico - práctico sobre el uso y manejo de cámaras trampa, con el objetivo de identificar la fauna silvestre de la ribera del Caño Iraca.
        
        Así mismo se logró fortalecer el accionar de 21 nodos municipales de la Red Nacional Jóvenes de Ambiente del Meta mediante la capacitación presencial de 120 jóvenes y 110 integrantes más a través de plataformas virtuales; y se conmemoraron ocho celebraciones ambientales con la participación presencial de 90 jóvenes, y con 80 de ellos mediante las plataformas Zoom y Meet, para un total de 21 nodos municipales y 500 jóvenes involucrados. Adicionalmente, los nodos recibieron kits de educación ambiental.',
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
            'activity_id' => 7533,
            'year' =>1,
            'value' => 1,
            'description' => 'Se creo la Red de Proyectos Ambientales Escolares PRAE del Meta con la vinculación de 81 instituciones educativas de los 29 municipios del departamento, las cuales se beneficiaron a través de la participación de rectores, coordinadores, docentes y estudiantes en espacios académicos organizados por la Corporación, la recepción de información de interés ambiental para inscribirse en charlas, conversatorios, capacitaciones y cursos, el desarrollo de foros, identificación de especies de fauna, invitación a participar de forma presencial o virtual en celebraciones ambientales y concursos, el acceso a contenidos pedagógicos con talleres prácticos y actividades lúdicas, entre otros, para el desarrollo de clases virtuales en todas las áreas del conocimiento.',
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
            'activity_id' => 7534,
            'year' =>1,
            'value' => 3,
            'description' => 'se realizaron 37 actividades de sensibilización ambiental dirigidas al público infantil para el conocimiento de la biodiversidad y el manejo de los residuos sólidos mediante la entrega de material didáctico y la presentación de las obras de títeres Amemin en la ciudad y El sueño de Amemin,  adicionalmente se desarrollaron siete jornadas de la campaña Gobernanza del Agua en las fuentes hídricas Caño Camoa en San Martín de los Llanos, Termales de Guaicaramo en Barranca de Upía, río Cubillera en Granada, Parque Natural Regional Laguna de San Vicente en Puerto Rico y río Ariari en Puerto Concordia con el objetivo de apoyar a las administraciones municipales en la protección de estos espacios de recreación durante la temporada de mayor afluencia de turistas y visitantes.',
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
            'activity_id' => 7535,
            'year' =>1,
            'value' => 1,
            'description' => 'el Grupo de participación Social e Institucional formuló el Plan Estratégico de Comunicaciones 2020- 2023 para dar visibilidad a los proyectos, la gestión y el ejercicio de autoridad ambiental con transparencia y trabajo constante por preservar los recursos naturales del territorio.
        Durante el año 2020 se proyectaron y difundieron 253 boletines de prensa a través de los medios de comunicación regional y nacional, la página web, redes sociales, el grupo de WhatsApp Prensa Cormacarena, entre otros; se realizaron cinco ruedas de prensa, siete recorridos a medios y se hizo el acompañamiento periodístico a 145 actividades de la dirección general y otras dependencias de la entidad; se ejecutó el plan de medios 2020, que incluyó 15 espacios radiales, 3 medios digitales y 2 espacios en prensa escrita, logrando así un amplio cubrimiento de las audiencias, en desarrollo de la campaña Meta Verde, difusión de canales de atención al ciudadano, mensajes de Sensibilización Ambiental.
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
            'activity_id' => 7536,
            'year' =>1,
            'value' => 2,
            'description' => 'En el marco de la celebración del Día Mundial de la Educación Ambiental, la Corporación participó en la Feria Agroindustrial Expomalocas 2020, específicamente en la Maloca Académica con el Conversatorio Desarrollo Sostenible y la Educación Ambiental, que incluyó cinco ponencias, dos institucionales, dos experiencias significativas del territorio y una experiencia internacional; la asistencia fue de 250 personas de diferentes sectores  y municipios,  y un stand institucional donde más de cinco mil visitantes conocieron los programas de educación ambiental, participación ciudadana, conservación de la biodiversidad, negocios verdes y energías limpias, entre otros. En el mes de octubre el Grupo Participación Social e Institucional llevo a cabo la Semana de la Educación Ambiental, en la cual participaron 500 personas y se realizaron más de 15 eventos tanto virtuales como presenciales, con el fin de llevar a la comunidad información de interés y dar a conocer algunos proyectos de educación ambiental que se vienen desarrollando en el departamento del Meta.  Así mismo, se realizó la elección de las ONG que representará a todas las Ongs ambientales del departamento ante el CIDEA Meta, siendo la Fundación Omacha la elegida para aportar el trabajo que viene desarrollando el comité en el departamento',
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
            'activity_id' => 7537,
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
            $idevidencia111 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7538,
            'year' =>1,
            'value' => 28.20,
            'description' => 'Se levantó el inventario documental del año 1995 al 2002 (7años) y se elaboraron las Tablas de Valoración Documental presentadas y socializadas  al Comité Técnico de Archivo para aprobación y que deben ser presentadas al Archivo General de la Nacion para Convalidación y aprobación y asi determinar que documentos se van a eliminar; Se está adelantando  inventario documental 2002 al 2010 para con ello determinar que documentos se eliminaran, a la fecha  se tiene depurado hasta el año 2010. 
        
        Adicional a la organizcion documental, se realizo socialización de formatos para la organización de los archivos con los apoyos de la corporación y se realizo adquisición de archivadores rodantes para cada uno de los pisos de la corporación en el cual se archivara la información vigente sujeta a ser auditada.',
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
            'activity_id' => 7539,
            'year' =>1,
            'value' => 1,
            'description' => 'En el marco de la rendición pública de cuentas definida en el Decreto 1200 de 2004 donde estipula que el Director General debe liderar dicha rendición dentro de los primeros cuatro meses siguientes a su posesión, el día 20 de abril de 2020 se realizó la socialización del Plan de Acción Institucional “Somos Vida, Somos Meta” con vigencia para el periodo 2020 – 2023 con transmisión virtual a través del fan page de Facebook de la Corporación así como de varias páginas web de medios comunicacionales, con participación de más de 300 personas representando organizaciones no gubernamentales, asociaciones comunitarias, instituciones y sociedad en general y visualización del video de la audiencia de manera orgánica a través de 26.385 cuentas.',
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
            'activity_id' => 7540,
            'year' =>1,
            'value' => 0,
            'description' => 'De acuerdo a la circular externa 015 del 03 de junio de 2020 del Ministerio de Hacienda y Crédito Público, específicamente en su numeral 6 establece: Suspender la aprobación de modificaciones de planta de personal de entidades del Presupuesto General de la Nación, salvo en aquellos casos que el mismo sea a costo cero para la misma entidad, por tal motivo atendiendo a la norma, la actividad no ha tenido avance. De acuerdo a lo anterior, la ejecución de la actividad se aplazó para la vigencia 2021.',
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
            'activity_id' => 7541,
            'year' =>1,
            'value' => 1,
            'description' => 'Para el cumplimiento de la Meta se suscribió el contrato N. PS-GCT.2.7.20–594 con un ente certificador cuyo objeto fue: “Realizar auditoria de seguimiento al Sistema de Gestión de Calidad, implementado en la Corporación para el Desarrollo Sostenible del Área de Manejo Especial La Macarena “CORMACARENA” bajo la norma ISO 9001:2015” con una duración de (3) tres meses, cuya fecha de inicio es el 24/09/2020 y fecha de terminación 23/12/2020.
        En cumplimiento a la ejecución del contrato se desarrolló la auditoria los días 09/11/2020 y 10/11/2020 en dos fases.  Fase 1. Revisión documental, en esta fase el auditor solicitó información específica de los procesos seleccionados a auditar: Proceso de Gestión Jurídica, Proceso Gestión Ambiental, Proceso Gestión de la Participación Social e Institucional, Proceso Direccionamiento estratégico, Proceso Gestión de Control Interno y Proceso Gestión de Calidad. 
        Fase 2. Auditoria, esta fase comprendió la verificación de la implementación del Sistema de Gestión de Calidad de la Corporación mediante entrevistas virtuales y la evidencia de la aplicación de los procedimientos, formatos y documentos que constituyen el Sistema de Gestión de Calidad a los procesos mencionados en la fase 1.
        Los productos obtenidos de la ejecución de las actividades son los relacionados a continuación:
        • Tablas de solicitud de documentación del proceso a auditar.
        • Plan de auditoria.
        • Informe de auditoría de la fase 2. 
        En relación a los resultados de la auditoria a ninguno de los procesos auditados se le generaron no conformidades. 
        
        ',
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
            'activity_id' => 7542,
            'year' =>1,
            'value' => 3.84,
            'description' => 'Para mejorar el Clima laboral del personal de la entidad para la vigencia 2020, se ha implementado 4 planes, desarrollados de la siguiente manera:
        
        Plan Institucional de Gestión Ambiental – PIGA:  
        
        Se realizaron capacitaciones con una participación de 246 personas de manera virtual en los siguientes temas:
        
        Se realizó el documento de formulación del Plan Institucional de Gestión Ambiental 2020 - 2023 para la implementación de dicho plan se realizó un diagnóstico, en el cual se analizaron aspectos e impactos ambientales y el cual pretende:
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
