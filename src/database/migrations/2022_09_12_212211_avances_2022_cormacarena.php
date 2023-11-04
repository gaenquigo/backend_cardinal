<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Avances2022Cormacarena extends Migration
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
            'year' =>3,
            'value' => 0.45,
            'description' => 'La reconversión productiva se desarrollará durante el segundo semestre de la vigencia 2022 a través de la ejecución del contrato No. PS-GCT.2.7.22-520 de 2022, cuyo objeto es “Implementación de estrategias para la reconversión productiva de sistemas productivos ganaderos en la cuenca del río Tillavá, municipio de Cabuyaro y municipios priorizados del sur del meta, establecimiento de sistemas agroforestales saf en la cuenca del río Tillavá, cuenca del río Guayuriba, municipio de Cabuyaro y municipios priorizados del sur del Meta, mejoramiento y rehabilitación de sistemas agroforestales SAF en la cuenca del río Tillavá, municipios priorizados del sur del Meta e instalación de estufas ecoeficientes en la cuenca del río Tillavá, cuenca del río Guayuriba, municipios priorizados del sur del meta y directos meta – municipio de Barranca de Upía',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13616,
            'year' =>3,
            'value' => 0.45,
            'description' => 'En el marco del desarrollo de la actividad, se realizará mantenimiento y rehabilitación en 38 hectáreas en los municipios de Puerto Gaitán (veredas Tillavá y Kioscos), La Macarena, Vista Hermosa, Mapiripán y Puerto Rico con ahoyado y siembra de cacao, plátano hartón, especies frutales (aguacate y cítricos), marañón y achiote. Así mismo, se implementarán sistemas agroforestales en Puerto Gaitán, Acacias, Villavicencio, Lejanías, Mesetas, Puerto Lleras, Fuentedeoro y Cabuyaro en 62 hectáreas; se ejecutarán siete modelos de ganadería sostenible y se construirán 178 estufas ecoeficientes con bancos dendroenergéticos: 7 en la vereda Alto Tillavá, 151 en el sur del Meta (Mesetas, San Juan de Arama, Lejanías, Puerto Lleras, Fuentedeoro y Puerto Concordia), 14 en Acacias y 6 en Barranca de Upía.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 13617,
            'year' =>3,
            'value' => 0.45,
            'description' => 'La actividad se ejecutará en el segundo semestre de la presente vigencia con la entrega de kits para huertas caseras orgánicas en trece municipios del departamento del Meta, estos son: Barranca de Upía, Cabuyaro, Castilla La Nueva, Cubarral, Cumaral, El Calvario, FuentedeOro, Granada, Guamal, Lejanías, Puerto Lleras, Puerto Rico y Villavicencio. Los kits contendrán malla de encierro para gallinero, bandeja plástica de germinación de semillas, bomba atomizadora, semilla de diferentes especies hortícolas, kits de herramientas de jardinería, abono orgánico, micorriza, fertilizantes y bioinsecticida. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7435,
            'year' =>3,
            'value' => 12,
            'description' => 'con el fin de afianzar los conocimientos técnicos para el desarrollo de estas actividades que están ligadas al uso y aprovechamiento de los recursos naturales y crear conciencia sobre las buenas practicas, se ha capacitado a la fecha un total de 70 mineros de subsistencia, donde los participantes han sido muy receptivos frente a las recomendaciones que se realizan por parte de los profesionales de la Corporación',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7439,
            'year' =>3,
            'value' => 1,
            'description' => 'Se ha venido desarrollando acciones de educación y sensibilización ambiental con base en la aplicación de la resolución 2184 de 2019 así como en la elaboración de abonos y fertilizantes naturales para la implementación de  huertas caseras orgánicas en  el departamento del Meta, para lo cual se da cumplimiento a la Fase 1, equivalente a un avance del 33,3%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7440,
            'year' =>3,
            'value' => 0.45,
            'description' => 'Se emitieron los oficios informando a los municipios la nueva fecha de presentación de los informes de avance en lo concerniente a las metas del programa de aprovechamiento del PGIRS; luego, se realizó la revisión de los 29 expedientes correspondientes a los 29 municipios del departamento con el fin de identificar qué municipios  han realizado la presentación de los informes de manera oportuna y qué municipios han incumplido en más de una oportunidad, y así identificar los motivos por los cuales no se realiza dicha entrega. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7441,
            'year' =>3,
            'value' => 0,
            'description' => 'La actividad se desarrollará en el segundo semestre a través de la recolección de residuos posconsumo, jornadas de recolección de llantas, rutas de recolección de bolas y envases químicos en los municipios de Puerto Rico, Vista Hermosa, Fuentedeoro, Puerto Lleras, Granada, El Castillo, San Carlos de Guaroa y Villavicencio.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7442,
            'year' =>3,
            'value' => 0.42,
            'description' => 'Actualmente, los negocios inscritos a nuestra ventanilla han participado en la feria de negocios verdes, en articulación con la Secretaría de Medio Ambiente de la Gobernación del Meta y el apoyo de la Universidad Autónoma de Nariño (AUNAR), Global Green Growth Institute (GGGI) entre otros. Además se hizo presencia en Expomalocas, donde se convocaron y participaron 47 negocios verdes de los municipios de Acacias, El Dorado, El Castillo, El Calvario, Restrepo, Lejanías, San Juan de Arama, Vista hermosa, Puerto Gaitán, San Martin y Villavicencio y se lograron ventas por más de 12 millones de pesos realizadas en la jornada, adicionalmente se logró acercamiento con instituciones y entidades para el fortalecimiento empresarial y comercial.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7443,
            'year' =>3,
            'value' => 6,
            'description' => 'En cumplimiento de la acción operativa se vincularán 10 negocios verdes al portafolio de la Corporación, cumpliendo con los procesos emitidos por el Ministerio de Ambiente y Desarrollo Sostenible y por último se realizarán dos eventos de entregas de aval de confianza por parte de Cormacarena a los negocios nuevos y ya existentes que cumplan con los requisitos establecidos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7444,
            'year' =>3,
            'value' => 0.1,
            'description' => 'A la fecha, la Corporación se encuentra en proceso de estructuración de los procesos contractuales por tal razón no cuenta con avance físico dicha acción, sin embargo, se han realizado acciones de gestión con apiarios para conocer sus necesidades y expectativas que contribuyan al buen desarrollo de dichos proyectos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7446,
            'year' =>3,
            'value' => 10.8,
            'description' => 'A la fecha se han realizado doce monitoreos en la misma cantidad de municipios del departamento (Guamal, San Martín, Granada, Acacias, El Dorado, El Castillo, Cubarral, Restrepo, Cumaral, Puerto López, Puerto Gaitán  y Villavicencio), cumpliendo con el número de la meta establecida, sin embargo, resta el 10% de ejecución en el sentido que se debe proyectar el documento técnico que da cuenta del análisis de los resultados para cada municipio',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7447,
            'year' =>3,
            'value' => 0.075,
            'description' => 'Para la implementación del plan de descontaminación por ruido para el municipio de Villavicencio, están programadas capacitaciones y sensibilizaciones a los sectores identificados como generadores de ruido, entre ellos los siguientes:
        • Sector Industria 
        • Sector Comercial 
        • Sector Transportador 
        • Sector Comunidad 
        • Sector Educativo 
        De igual forma, se hará una única jornada de cenefatón conmemorando el día Internacional contra el Ruido, actividad conmemorativa  del día nacional de la bicicleta y posteriormente, se entregará el documento Final. 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7449,
            'year' =>3,
            'value' => 0,
            'description' => 'Esta acción operativa se encuentra en proceso inicial; se está realizando la estructuración de línea base de turismo y definición de los escenarios a ordenar (Laguna el Silencio y Piscinas del Güejar) para con ello, realizar la formulación del Plan de Ordenamiento Ecoturístico.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7450,
            'year' =>3,
            'value' => 3,
            'description' => 'Se realizó inspección del escenario turístico Laguna La Venturosa en el municipio de Puerto López, en el cual se instauró una mesa de trabajo para realizar un diagnóstico de los problemas y las necesidades, con el fin de realizar acciones para la planificación y ordenamiento del lugar. 
        Se efectuó un proceso de inspección y evaluación de infraestructura turística que por efecto de un incendio forestal sufrió daños. Por lo cual se realiza plan de intervención a la infraestructura
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7451,
            'year' =>3,
            'value' => 0.45,
            'description' => 'Para garantizar el funcionamiento del  el Sistema de Vigilancia de Calidad del Aire de Villavicencio – SVCAV se han realizado visitas físicas a las estaciones de monitoreo de forma permanente. Mes a mes se ha llevado a cargo el suministro de información a la plataforma del IDEAM, con los archivos correspondientes a los resultados de los contaminantes medidos en las estaciones de monitoreo de calidad del aire.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7452,
            'year' =>3,
            'value' => 0.1,
            'description' => 'La estrategia para el mejoramiento de la calidad del aire en la ciudad de Villavicencio se ajustó en el primer semestre, en la segunda parte del año se harán sensibilizaciones a once empresas del sector industrial y a cinco CDAs del sector transporte en lo que tiene que ver con el control ambiental de emisión de gases de los vehículos automotores',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7453,
            'year' =>3,
            'value' => 0.145,
            'description' => 'Durante el periodo comprendido entre el 01 de enero al 30 de junio del presente año, un total de 69 procesos sancionatorios iniciados que se rigen por las formalidades de la Ley 1333 de 2009, este número hace referencia a las aperturas de investigación, a continuación se puede observar su cálculo en la Hoja Metodológica de los Indicadores Mínimos de Gestión y como lo indica la metodología establecida por el Ministerio de Ambiente y Desarrollo Sostenible',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7454,
            'year' =>3,
            'value' => 0.94,
            'description' => 'En lo corrido de la vigencia, se han ejecutado 431 visitas técnicas de las 460 recibidas por presuntas infracciones ambientales por parte de la comunidad y otras entidades para las cuales se proyectaron 209 conceptos y 222 informes técnicos correspondientes a las visitas técnicas referidas, los cuales surtirán los trámites pertinentes en virtud de la ley 1333 de 2009, para que desde la competencia se adelante los procesos sancionatorios correspondientes en contra de los agentes infractores que han sido identificados o profiera el archivo de las diligencias, según corresponda',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7455,
            'year' =>3,
            'value' => 1,
            'description' => 'Para el cumplimiento de la acción operativa, se verificó el acatamiento a las medidas administrativas que han sido impuestas en la jurisdicción del Departamento del Meta durante el lapso comprendido entre el 01 de enero y el 24 de junio de 2022, con el fin de corroborar si el(los) investigado(s) ha(n) acatado lo que ha determinado la Autoridad Ambiental a través de sus actos administrativos. Lo anterior dio como resultado la verificación de 26 medidas preventivas y 1 medida sancionatoria en los municipios de Villavicencio, Acacias, Restrepo, Barranca de Upia, Cubarral, Castilla La Nueva y San Carlos de Guaroa',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7456,
            'year' =>3,
            'value' => 0.042,
            'description' => 'La corporación tiene 1150 trámites para realizar control y seguimiento, a la fecha se han emitido 73 actos administrativos, logrando un avance del 6%. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7457,
            'year' =>3,
            'value' => 0,
            'description' => 'La corporación tiene 1150 trámites para realizar control y seguimiento, a la fecha se han emitido 73 actos administrativos, logrando un avance del 6%. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7458,
            'year' =>3,
            'value' => 8,
            'description' => 'En cumplimiento de la acción operativa, se realizó asesoría, capacitación y seguimiento a las actividades y procesos de plan de ornato en el departamento del Meta, mediante atención virtual, telefónica y escrita (oficios) a municipios y personas, de la siguiente manera: Barranca de Upía, Vista Hermosa, Mesetas, Villavicencio.',
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
            'activity_id' => 7459,
            'year' =>3,
            'value' => 0.02,
            'description' => 'Se realizó el inventario de aves en la Reserva Natural La Reseda del Triángulo del Puma en Puerto López – Meta, implementando los protocolos para avistamiento de aves sugeridos por Cormacarena. En el marco del Global Big Day organizado por la Universidad de Cornell a nivel mundial con la participación de los propietarios de las Reservas Naturales de la Sociedad Civil La Reseda, Yurumí y el Amparo, así como de la Gesellschaft für Internationale Zusammenarbeit (G.I.Z), la Asociación Bogotana de Ornitología (ABO), Universidad Nacional, Universidad de los Llanos y la Fundación Rancho Camaná. Con la participación de 28 personas en total, en la Reserva Natural de la Sociedad civil “La Reseda',
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
            'activity_id' => 7460,
            'year' =>3,
            'value' => 0,
            'description' => 'N/A',
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
            'activity_id' => 7461,
            'year' =>3,
            'value' => 0,
            'description' => 'N/A',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7462,
            'year' =>3,
            'value' => 5.1,
            'description' => 'La corporación ha realizado cinco (5) operativos de control al tráfico de fauna silvestre por medio de capturas infraganti, en el aeropuerto de Villavicencio, terminal de transporte de Villavicencio y en las plazas de mercado de Villavicencio, puestos de control fijos entre los que hace parte las vías del departamento como Villavicencio y Barranca de Upía.
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7463,
            'year' =>3,
            'value' => 4,
            'description' => 'En lo corrido de la vigencia, se han realizado cuatro operativos de control al tráfico ilegal de flora, con acompañamiento de la fuerza pública, los cuales se desarrollaron de manera articulada con Fiscalía General de la Nación, Ejército Nacional y Policía Nacional, el primero el 7 de febrero en la Macarena, el segundo el 5 de abril en Puerto Concordia, el tercero el 8 de abril en Mapiripán y el cuarto el 19 de mayo operativo nacional simultáneo en Villavicencio, Guamal, Puerto Rico y Puerto Lleras',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7464,
            'year' =>3,
            'value' => 0.6,
            'description' => 'Con el fin de prevenir la invasión de especies con medidas de manejo (caracol gigante africano (Achatina fulica)), la Corporación trabaja articuladamente con  la alcaldía de Puerto López,  San Martín,  El Dorado Barranca de Upia –Meta y a las regionales La Macarena y Ariari de Cormacarena (Granada) haciendo entrega del siguiente material de para la recolección y disposición final de la especie exótica invasora',
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
            'activity_id' => 7465,
            'year' =>3,
            'value' => 0.36,
            'description' => 'A la fecha se ha realizado la recepción y manejo de las ocho (08) especies amenazadas con medias de manejo que se han recepcionado durante los meses de enero, a junio de 2022 o que permanecen en el CAV donde se les brinda atención veterinaria, biológica y nutricional según sus necesidad biológicas, los cuales provienen de los municipios de Villavicencio, Restrepo, San Martín, El Dorado, Puerto Gaitán, Cubarral, Granada, Cumaral, La Macarena, Fuente de Oro, Barranca de Upia y Acacias-Meta',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7466,
            'year' =>3,
            'value' => 0.15,
            'description' => 'La corporación ha venido adelantando acciones para contar con un centro de atención y valoración de fauna y flora de atención primaria dispuesto las 24 horas al servicio; actualmente se encuentra en proceso de adecuación para posterior puesta en servicio para atención, valoración y rehabilitación de los ejemplares recepcionados por los médicos veterinarios procedentes de atropellamientos o ataques de fauna doméstica o por el Hombre.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7467,
            'year' =>3,
            'value' => 1,
            'description' => 'A la fecha, se han recibido 1.191 ejemplares de los cuales se han liberado 673 ejemplares, se han reubicado 407, han muerto 99 ejemplares y ha habido 12 falsas alertas.  La mayoría se han recepcionado en Villavicencio y se han liberado en el sector de Bavaria, Humedal Zuria, Vereda El Carmen, Vereda La Argentina; este proceso se ha realizado con apoyo de la Policía Nacional, el Ejército Nacional, Cuerpo de Bomberos y Defensa Civil',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7468,
            'year' =>3,
            'value' => 0,
            'description' => 'Para el avance y cumplimiento de la acción operativa, se requiere surgir las fases I y II del contrato No. PS-GCT.2.7.21-1009 con  Fecha de Inicio: 28 diciembre de 2021 y Fecha de terminación: 27 octubre de 2022 cuyo Objeto es: Declaración de un Ecosistema Estratégico como Área Protegida, Formular el Plan de Manejo para un Área Protegida, Actualizar cinco (5) planes de manejo para cinco (5) áreas protegidas del Departamento del Meta y Formular los Planes de Ordenamiento Ecoturísticos de seis (6) áreas protegidas, por tal razón la acción operativa no cuenta con avance',
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
            'activity_id' => 7469,
            'year' =>3,
            'value' => 0.6,
            'description' => 'Por medio del contrato No. PS-GCT.2.7.21-1009 con Fecha de Inicio: 28 diciembre de 2021 y de Fecha de terminación: 27 octubre de 2022, cuyo objeto es: Declaración de un Ecosistema Estratégico como Área Protegida, Formular el Plan de Manejo para un Área Protegida, Actualizar cinco (5) planes de manejo para cinco (5) áreas protegidas del Departamento del Meta y Formular los Planes de Ordenamiento Ecoturísticos de seis (6) áreas protegidas, La empresa consultora Unión temporal áreas protegidas Meta, realizó recolección de información secundaria y primaria de las siguientes áreas protegidas.',
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
            'activity_id' => 7470,
            'year' =>3,
            'value' => 0.297,
            'description' => 'Para el cumplimiento de la acción operativa, se realizó estructuración y proyección de avance del documento Diagnóstico en donde se presentan los resultados de la segunda Fase del proyecto, orientada principalmente al análisis de la información levantada en campo del área de estudio, relacionada a aspectos físicos, biológicos, socioeconómicos, culturales, poblacionales y cartográficos, finalmente el desarrollo de recorridos en campo que permitan realizar un diagnóstico de los predios inmersos en la zona objeto de estudio y la definición de puntos de muestreo para muestras físico químicas de suelo.',
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
            'activity_id' => 7472,
            'year' =>3,
            'value' => 0.56,
            'description' => 'Actualmente la corporación cuenta con 15 áreas protegidas de su jurisdicción, de las cuales 13 actualmente cuentan con planes de manejo en ejecución para lo cual se han desarrollado las siguientes actividades:
        ● Proceso de contratación de 14 profesionales de diferentes disciplinas y 4 técnicos que realizan los recorridos de vigilancia y control.
        ● Ejecución del Plan operativo Anual el cual identifica las acciones a realizar en cada área protegida de acuerdo a las necesidades identificadas en el año anterior.
        ● Recorridos de control y seguimiento que realizan a diario 4 técnicos operativos en todas las áreas protegidas del municipio de Villavicencio, y de manera semestral los demás contratistas en las demás áreas protegidas que se encuentran ubicadas en otros municipios
        ',
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
            'activity_id' => 12710,
            'year' =>3,
            'value' => 0.166,
            'description' => 'Por medio de visitas técnicas de caracterización a los predios, se realizaron diseños de siembra de acuerdo al Plan Nacional de Restauración y dando cumplimiento a los objetivos de la estrategia Meta Verde de la Corporación, en lo concerniente a actuar en la recuperación, restauración y rehabilitación de zonas disturbadas en el departamento del Meta, en los meses de abril, mayo y junio (época de inicio de lluvias) se han sembrado 617.800 árboles en 782,13 hectáreas (235,94 hectáreas en restauración y 546.19 en rehabilitación) en los Municipios de  Acacías, Barranca de Upía, Cabuyaro, Cubarral, Cumaral, El Castillo, El Dorado, Granada, Guamal, Mapiripán, Mesetas, Puerto Gaitán, Puerto Lleras, Puerto López, Restrepo, San Martín, Villavicencio, Castilla La Nueva, Guamal, Mapiripán, Puerto Concordia, Puerto Gaitán, Puerto López, San Carlos de Guaroa, La Macarena, Puerto Rico, Vista Hermosa ',
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
            'activity_id' => 12711,
            'year' =>3,
            'value' => 430,
            'description' => 'En el desarrollo de la acción operativa, se han realizado 39 visitas técnicas de seguimiento a los predios ya establecidos (a 440.89 Ha) sembradas durante los años 2020 y 2021 en los municipios de Cabuyaro, La Macarena, Mapiripán, Puerto Gaitán, Puerto Concordia, Puerto Lleras, Puerto López, Restrepo, San Juan de Arama y Villavicencio, verificando estados de las plantaciones y porcentajes de mortalidad para brindar su respectiva resiembra',
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
            'activity_id' => 12712,
            'year' =>3,
            'value' => 0,
            'description' => 'Con el fin de habilitar un área, se analiza conjuntamente la posibilidad de implementar en una locación previamente definida por la Corporación, un proceso forestal de recuperación y manejo inducido de regeneración natural, en el cual se realice un proceso de reforestación o restauración, para lo cual se definen las siguientes acciones:
         
        1. Selección de especies nativas de generación espontánea, en estadio de renuevos, brinzales, latizos o fustales jóvenes
        ',
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
            'activity_id' => 12713,
            'year' =>3,
            'value' => 5,
            'description' => 'La Corporación cuenta con 6 viveros para producción de material vegetal para implementación de estrategias de lucha contra la deforestación, con la producción de especies forestales nativas distribuidas en los Megaviveros y viveros satélites así:
        
        Megavivero la Bella, ubicado en el Municipio de Villavicencio 
        Megavivero Palmoriche, ubicado en el Municipio de Puerto López
        Megavivero Güejar, ubicado en el Municipio de San Juan de Arama
        Megavivero Renacer, ubicado en el Municipio de La Macarena.
        Vivero Mapiripán, ubicado en el Municipio de Mapiripán
        Vivero Puerto Rico, ubicado en el Municipio de Puerto Rico
        ',
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
            'activity_id' => 7474,
            'year' =>3,
            'value' => 5,
            'description' => ' Con el fin de generar incentivos y mejorar en la conservación, Cormacarena realiza el ejercicio de socialización ante alcaldías, juntas de acción comunales y comunidad en general para la formulación de los esquemas de pagos por servicios ambientales; es así que se ha realizado la caracterización de los beneficiarios en los municipios de Acacías, El Castillo, El Dorado, y Cabuyaro; posteriormente, se realizaron visitas de caracterización las cuales arrojaron posibles beneficiarios 214 (hombres 140 y mujeres 74).',
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
            'activity_id' => 7475,
            'year' =>3,
            'value' => 9.5,
            'description' => 'Para la implementación del esquema de pago por servicios ambientales y con base en la información de las familias priorizadas y posibles beneficiarias, se surten varias fases, entre las cuales se encuentran las siguientes: se firman los acuerdos de conservación y uso sostenible del bosque y se realiza la inscripción y bancarización de las familias en la plataforma SIF de MASBOSQUES y posteriormente se realizan los pagos a las cuentas bancarias definidas en el acuerdo.
        Una vez firmados los acuerdos con los beneficiarios se inició la implementación de Pagos por Servicios Ambientales en los Municipios de Puerto López, Cubarral, Puerto Lleras, Puerto Gaitán (Tillavá), La Macarena, Puerto Rico, Vista Hermosa, Mapiripán, Cabuyaro, El Castillo, El Dorado, Acacías, Guamal, Villavicencio, Barranca de Upía, Lejanías, San Juan de Arama, El Calvario y Puerto Concordia.
        ',
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
            'activity_id' => 7476,
            'year' =>3,
            'value' => 0.1,
            'description' => 'Para el desarrollo de la acción operativa, se pretende desarrollar un proyecto en el cual se implementarán sistemas agroforestales en 10 colegios rurales en el departamento del Meta. En lo corrido de la vigencia se han identificado, caracterizado y aprobado siete instituciones educativas rurales en los municipios de Acacias, El Dorado, San Martín, Granada, Cubarral y Villavicencio.  ',
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
            'activity_id' => 7477,
            'year' =>3,
            'value' => 0.268,
            'description' => 'En el marco de la mesa técnica de ejecución de la sentencia STC 4360 de 2018 y atendiendo la solicitud de entrega de informe de avance de la misma, se reportó el avance de los respectivos indicadores en el formato ficha de seguimiento, entregando el primer reporte el 23 de febrero y el segundo el 10 de junio.',
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
            'activity_id' => 7478,
            'year' =>3,
            'value' => 0.375,
            'description' => 'En lo corrido de la vigencia, se han realizado trece visitas a empresas forestales a las cuales se les hicieron el seguimiento y control a sus actividades verificando que estuvieran cumpliendo con la normatividad ambiental vigente, así como la capacitación entorno a las buenas prácticas dentro de la industria y conocimiento sobre el esquema de reconocimiento y los beneficios a los cuales pueden acceder si deciden acogerse a este',
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
            'activity_id' => 7482,
            'year' =>3,
            'value' => 3,
            'description' => 'Dentro del plan de acción se priorizó la identificación de las térmicas y su estado generando como producto la formulación y actualización de planes de manejo ambiental de térmicas
        
        En este sentido, se realizaron las fases de aprestamiento, diagnóstico y formulación y seguimiento para los planes de manejo ambiental de Termo Ocelote - planta de generación de energía Ocelote, termo Apiay y Termo Suria. Dando satisfacción con el 100% de las actividades de diagnóstico
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7483,
            'year' =>3,
            'value' => 0.39,
            'description' => 'En el marco del cumplimiento de la actividad, Se ejecutó la comisión conjunta del POMCA Humea, así como la socialización de fechas de la asistencia técnica para los consejos de cuenca, surtiéndose la etapa Fase de Asistencia técnica y Capacitación. Mediante la elevación de las actas de reunión, se realizó la entrega de los compromisos de CORMACARENA  a las Alcaldías Municipales y se enlistaron los compromisos posteriores a las capacitaciones realizadas y citadas',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7484,
            'year' =>3,
            'value' => 1,
            'description' => 'La Corporación para el Desarrollo Sostenible del Área de Manejo Especial la Macarena “CORMACARENA”, se encuentra adelantando los procesos de Consulta Previa con los resguardos indígenas Wallianae, El tigre y Alto Unuma ubicados en el municipio de Puerto Gaitán (Meta) en marco del proyecto del Plan de Ordenación y Manejo de la Cuenca Hidrográfica (POMCA) del Río Tillavá y Resguardo Maguare POMCA Rio Negro.
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7486,
            'year' =>3,
            'value' => 0.215,
            'description' => 'A la fecha se realizaron visitas técnicas al Caño Parrado de la ciudad de Villavicencio con el fin de recolectar información primaria de los tres componentes que hacen parte del documento de soporte técnico para el proyecto piloto de acotamiento (componente geomorfológico, ecosistémico e hidrológico); así mismo, se ha hecho comités con la Cruz Roja Colombiana Seccional Meta con el objetivo de coordinar las actividades en campo a realizar por los profesionales de la Corporación y el recurso humano puesto a disposición por la Cruz Roja. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7488,
            'year' =>3,
            'value' => 0,
            'description' => 'La Corporación apoya proyectos de descontaminación hídrica y para esta vigencia se pretende financiar el proyecto interceptor fase II en el municipio de Cubarral, el cual a la fecha se encuentra formulado.
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7489,
            'year' =>3,
            'value' => 0.636,
            'description' => 'Para el cumplimiento de la meta se proyecta el seguimiento al 84% de los PSMV objeto de seguimiento en la presente vigencia, que corresponde a 31 de los 37 PSMV vigentes en la jurisdicción de la Corporación',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7490,
            'year' =>3,
            'value' => 25.3,
            'description' => 'En aras de cumplir con la actividad de monitoreo de 30 fuentes hídricas superficiales y consolidar la información se plantea:  
        
        Fase 1 Diseño y definición de programación de jornadas monitoreo. 
        Fase 2: Monitoreo de las fuentes hídricas superficiales.
        Fase 3: Consolidación de documento técnico del Plan regional de monitoreo 2022.  
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7491,
            'year' =>3,
            'value' => 20,
            'description' => 'En cumplimiento de la acción operativa, se proyectaron veintiún (21) autos de control y seguimiento a programas para el uso eficiente y ahorro de agua PUEAA (vigentes), los cuales se encuentran en revisión jurídica para su posterior numeración. Los expedientes y usuarios asociados a estos autos',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7493,
            'year' =>3,
            'value' => 13.5,
            'description' => 'Dentro de los instrumentos prioritarios para la Gestión Integral del Recurso Hídrico, están los económicos: tasa por utilización del agua y tasa retributiva por vertimientos, con los cuales se pretende enviar señales para el manejo eficiente del recurso hídrico en términos de cantidad y calidad; éstos tienen como propósito ser una herramienta de gestión que permita el logro de objetivos ambientales orientados al uso eficiente y conservación del agua, como también una fuente de financiación para inversiones ambientales que garanticen las actividades de protección, recuperación y monitoreo del recurso hídrico',
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
            'activity_id' => 7494,
            'year' =>3,
            'value' => 100,
            'description' => 'En cumplimiento a este proceso se efectuó el cálculo tarifario de los usuarios de la tasa, en el mes de marzo de 2022; por otra parte, mediante acto administrativo No. PS-GJ 1.2.6.22.0332 del 26 abril de 2022 se acogió y se actualizó la tarifa mínima establecida para el uso del recurso hídrico por el Gobierno Nacional en el área de jurisdicción del departamento del Meta y se realizó la liquidación y facturación de 818 documentos de cobro, con un valor liquidado de $1.058.169.453.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7495,
            'year' =>3,
            'value' => 0.05,
            'description' => 'A la fecha, se definió que la evaluación regional del monitoreo – ERA, será formulada en la cuenca del río Acacias – Pajure, la cual abarca principalmente los municipios de Acacias y San Carlos de Guaroa (zona rural), así como pequeñas franjas de Guamal y Castilla La Nueva, en las áreas rurales de estos dos municipios y se está a la espera de procesos precontractuales. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7499,
            'year' =>3,
            'value' => 0.65,
            'description' => 'Se realizó bases de datos con los datos con los valores de estudios geofísicos, correlación de los datos en crudo y recopilación de pruebas de bombeo con datos en crudo para posterior análisis, realizando correlación de los estudios recopilados en primera instancia con las bases de datos de los diferentes Sondeos Eléctricos Verticales, con el fin de generar las columnas de interpretación y los diferentes grupos de resistividades a partir de la geología conocida y explorada',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7501,
            'year' =>3,
            'value' => 0.65,
            'description' => 'Para el cumplimiento de la acción, se realiza contrato No. PS-GCT.2.7.22.356 con Fecha de Inicio: 25/01/2022 y Fecha de terminación: 24/11/2022 - Objeto: Realizar el análisis fisicoquímico, bacteriológico y/o hidrobiológico de muestras de agua.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7502,
            'year' =>3,
            'value' => 55,
            'description' => 'En cuanto al cargue de información de los módulos SNIF, SIRH, RUA, RESPEL y SIAIRE, se ha avanzado en el 55%, desagregado de la siguiente forma:
        
        SNIF
        
        Se ha cargado el 33% de los permisos de aprovechamiento forestal ototgados en la vigencia por la corporación.
        ',
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
            'activity_id' => 7503,
            'year' =>3,
            'value' => 0.8,
            'description' => 'El Visor ambiental es un servicio web con una interfaz amigable y fácil de manejar capaz de contener información geográfica base para la toma de decisiones de los usuarios en materia ambiental y de ordenamiento; de manera gratuita y sin intermediarios la ciudadanía podrá realizar medición de terrenos y distancias en lugares apartados de difícil acceso, y consultar la información ambiental de predios o lugares específicos a través del Visor Ambiental del Meta (VIAM) creado por Cormacarena',
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
            'activity_id' => 17362,
            'year' =>3,
            'value' => 0,
            'description' => 'Con el fin de prevenir y combatir los incendios forestales que terminan con parte de los recursos naturales, la Corporación pretende en el segundo semestre de la vigencia dotar a los cuerpos de bomberos en el Departamento del Meta con 47 sopladoras y, de esta forma promover una acción. La segunda acción se desarrollará con el diseño del software de identificación de puntos críticos de incendios forestales en la jurisdicción de la corporación',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7504,
            'year' =>3,
            'value' => 0,
            'description' => 'La actividad se desarrollará durante el segundo semestre de la vigencia 2022 con el diseño del software que permitirá identificar en tiempo real las áreas susceptibles de reforestación, los usuarios interesados en la reforestación dentro de sus predios generando informes de caracterización de forma ágil con la identificación del terreno en todo el departamento del Meta (método de siembra y la cantidad de material vegetal que se requiere para la siembra).',
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
            'activity_id' => 7505,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizará en el segundo semestre de la vigencia la dotación del centro de mando y control, que incluye un Sistema de Alimentación Ininterrumpida (UPS) para protección de todos los equipos activos, además del mobiliario, cableado estructurado y estaciones de trabajo (Workstation) necesarios para el ecosistema digital.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7506,
            'year' =>3,
            'value' => 0,
            'description' => 'La actividad se cumplirá en el segundo semestre de 2022 con el diseño del subsistema sancionatorio de la Corporación, el cual tiene como finalidad –entre otras- registrar y gestionar las denuncias hechas por la ciudadanía a través de whatsapp, correo electrónico, ventanilla única y online (App), controlar el flujo del proceso sancionatorio de la Corporación y consultar la trazabilidad de los procesos sancionatorios de la corporación a través del work flow del proceso.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7507,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizará el giro de los aportes solicitados por Macarenia Corp en el segundo semestre con el fin de continuar con el fortalecimiento de la gestión tecnológica y administrativa que redunde en la transformación organizacional de la Corporación',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7508,
            'year' =>3,
            'value' => 0,
            'description' => 'con el propósito de dar cumplimiento a la actividad operativa en mención para el año 2022, se definió continuar con una segunda fase del proyecto implementado en el 2021. En este contexto durante el primer semestre del año se han efectuado las siguientes gestiones para dar cumplimiento de manera física a la meta: i) mesas de trabajo con la Corporación de Ciencia y Tecnología Ambiental Macarenia Corp con la finalidad de delimitar el alcance de la investigación, ii) definición del territorio en el cual se efectuará la investigación, iii) definición de la modalidad contractual y iv) inicio de la elaboración del documento de condiciones técnicas y financieras para el proyecto',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17644,
            'year' =>3,
            'value' => 0,
            'description' => 'La acción operativa se desarrollará durante el segundo semestre con la implementación de proyectos de energías renovables específicamente la utilización de paneles solares en la sede de la Corporación y una institución educativa.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7510,
            'year' =>3,
            'value' => 100,
            'description' => 'Se realizaron aforos en las fuentes hídricas Acaciítas y Chichimene, exactamente en el punto donde se encuentran ubicadas las estaciones, con el objeto de generar un perfil batimétrico y de esta forma realizar una comparación entre los datos tomados en campo de manera manual y los proyectados por las estaciones, dicha comparación fue realizada el pasado 16 de junio donde se evidencia que efectivamente la información presenta un margen de error bajo, considerando que las estaciones transmiten datos cada 15 minutos',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17642,
            'year' =>3,
            'value' => 5,
            'description' => 'La acción operativa se desarrollará con la suscripción del contrato No. PS-GCT.2.7.22-514 con el Consorcio Humachica Grande el 06 de junio de 2022 y se suscribió acta de inicio el 17 de junio de 2022, cuyo objeto es: realizar la formulación del plan de ordenamiento de recurso hídrico de caños Humachica y grande en los Municipios de Guamal y Castilla la Nueva en el Departamento del Meta, Jurisdicción de Cormacarena',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17643,
            'year' =>3,
            'value' => 0.64,
            'description' => 'Para el cumplimiento de la acción operativa, se llevó a cabo visita en el municipio de Fuentedeoro, por parte de Cormacarena, EDESA S.A E.S.P y la Alcaldía del municipio, con el fin de conocer el predio que se destinaría por parte de la alcaldía para la construcción de la planta de tratamiento de agua residual  del casco urbano, reconocimiento de fuente receptora caño Cural Sabanero y trazado del emisario final.
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7511,
            'year' =>3,
            'value' => 47,
            'description' => 'Durante la vigencia de la Ley 1448 de 2011, la Corporación registra 594 procesos de restitución de tierras con beneficio a núcleos familiares que han sido objeto de desplazamiento y/o despojo de tierras en el departamento del Meta; en este sentido, durante la presente vigencia, se generaron 88 documentos de respuesta, teniendo en cuenta las 94 órdenes judiciales de restitución de tierras durante la presente vigencia, partiendo de la base que los trámites y respuestas se realizaron por demanda del sistema judicial',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7512,
            'year' =>3,
            'value' => 62,
            'description' => 'Se han asistido a 18 municipios (El Calvario, La Uribe, Lejanías, Mesetas, Puerto Gaitán, Restrepo, San Carlos de Guaroa, San Juan de Arama, San Juanito, Vista Hermosa, Puerto Lleras, Cubarral, Granada, Guamal, Mapiripán, San Martín, Acacias y Puerto Rico), en la incorporación de las determinantes ambientales en el instrumento de planificación en cada municipio y en el cumplimiento de los lineamientos de la sentencia 4360 de 2018. Las asistencias se han desarrollado de manera virtual por medio de la plataforma Meet, oficios externos de acuerdo a las solicitudes de cada municipio y de manera presencial',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7513,
            'year' =>3,
            'value' => 52,
            'description' => 'De seis solicitudes de concertación, se han atendido cinco (Botellón, Potrero Grande, Bellavilla, Villa Olímpica de Puerto Gaitán y Las Violetas), mientras que para determinantes hay doce solicitudes atendiendo once. Se evidencia avance del 52% en el sentido que se han atendido las solicitudes por medio de oficios externos y mesas de trabajo, sin embargo, no todos los trámites han culminado. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7514,
            'year' =>3,
            'value' => 100,
            'description' => 'Para el desarrollo de la acción se realizó revisión correspondiente a cada una de las solicitudes y/o expedientes, proyectando respectivos requerimientos, para así proceder con el trámite, programando las visitas a los predios objeto de solicitud en los diferentes municipios del departamento del Meta. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7515,
            'year' =>3,
            'value' => 0.7,
            'description' => 'Se han enviado solicitudes a los municipios y a las empresas prestadoras de servicios públicos de los instrumentos de planificación territorial de segunda generación (Villavicencio, Puerto López, San Carlos de Guaroa, Castilla la Nueva y Restrepo), con el fin de que se informe a la Corporación el avance de los compromisos adquiridos en las actas de concertación ambiental de cada instrumento',
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
            'activity_id' => 7517,
            'year' =>3,
            'value' => 50,
            'description' => 'Con el fin de realizar los acuerdos de preservación se ha caracterizado y sistematizado información dentro del proceso de Zonificación Ambiental Rural Participativa ZARP en los siguientes municipios:
        ● 22 predios ubicados en el municipio de Vista Hermosa.
        ● 45 predios en el municipio de Puerto Concordia.
        ● 23 predios en el municipio de Cubarral
        ● 12 predios en el municipio de El Dorado
        ● 10 predios en el municipio de El Castillo
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7519,
            'year' =>3,
            'value' => 0.2,
            'description' => 'Se adjudicó el contrato 523 de 2022, cuyo objeto es: “Ejecutar la etapa de seguimiento de acuerdos de la consulta previa del POMCA rio Tillavá y Guayabero con las comunidades indígenas Unuma, El Tigre y Wallianae, La Julia, Los Planes, Candilejas, Nuevo Milenio y Paraíso”, que tiene dentro de sus productos a entregar apoyar la formulación de los instrumentos de planificación de los grupos étnicos. El contrato tiene un plazo de ejecución de cuatro meses, con lo cual,  la acción operativa se cumple en su totalidad al finalizar la vigencia.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7520,
            'year' =>3,
            'value' => 0.4,
            'description' => 'A la fecha el proceso se encuentra en el desarrollo de la fase 1 para la cual se realizó revisión sobre los instrumentos de planificación de grupos étnicos para su implementación, seguimiento y verificación en el avance de las parcelas establecidas en las siguientes comunidades: Carranguero, Sibanae y San Antonio, en los cuales se verificó el avance de la restauración y las actividades necesarias para continuar con el proceso.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7521,
            'year' =>3,
            'value' => 40,
            'description' => 'Durante el periodo comprendido entre el mes de enero y el mes de junio del año 2022, Cormacarena ha realizado 40 visitas de inspección ocular como asistencia técnica en gestión del riesgo, relacionados con la ocurrencia de fenómenos asociados a inundaciones, avenidas torrenciales y/o movimientos en masa en diferentes corrientes hídricas del departamento. A continuación, se relacionan los municipios asesorados:
        ●  Villavicencio
        ●  Restrepo
        ●  vista hermosa
        ● Fuentedeoro
        ● San Martín de los llanos
        ● Puerto López
        ● Acacias
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7524,
            'year' =>3,
            'value' => 0.5,
            'description' => 'En cumplimiento de la actividad en mención, se tiene programado apoyar dos proyectos para mitigar los efectos de la ola invernal; en virtud de las competencias de la Corporación se generó el Convenio Interadministrativo No. PE.GDE.1.4.8.1.21.006 con la Gobernación del Meta, a través de su Dirección Departamental para la Gestión del Riesgo de Desastres “DIGERD”.
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7527,
            'year' =>3,
            'value' => 0.2,
            'description' => 'Para el desarrollo de la acción operativa ha sido necesario articular con otros grupos de la Corporación con el fin de determinar las líneas de acción para su implementación. A la fecha se han realizado estudios de mercado, estudios de oportunidad y conveniencia a fin de proyectar su ejecución durante el segundo semestre de la vigencia 2022',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia105 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7528,
            'year' =>3,
            'value' => 67,
            'description' => 'Se hizo la revisión de la matriz con datos de los entes territoriales para posteriormente hacer el envío de oficios de invitación a asesoría , revisión de posible cronograma  para el proceso de asistencia a entes territoriales, revisión de material documental para la asesoría a los entes territoriales tales como Cartilla PRICCO y Guía Ministerio
        Posteriormente, se realizó asesoría técnica para la actualización del POT con las medidas de Cambio Climático a los siguientes municipios: Puerto Gaitán, San Juan de Arama, Mesetas, Mapiripán, Puerto Rico, Puerto Concordia, Vista Hermosa y Uribe. 
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7530,
            'year' =>3,
            'value' => 23,
            'description' => 'Se realizó convocatoria de nuevos integrantes, publicación de los términos de convocatoria en la página de la Corporación, junto con publicación del banner en las páginas de las Gobernaciones de Casanare, Arauca, Casanare y Meta, Alcaldía de Villavicencio.  Igualmente, se recibieron los documentos de los participantes en la convocatoria y se realizó comité de evaluación para seleccionar a los nuevos integrantes',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7531,
            'year' =>3,
            'value' => 30,
            'description' => 'A través de actos administrativos emanados por las administraciones municipales y departamental, se tiene constituidos 30 CIDEAS (29 Municipales y 1 Departamental), los cuales vienen siendo acompañados y asesorados por la autoridad ambiental.  Es así como, durante el periodo se han desarrollado actividades de: 
        
        ● Socialización Plan Decenal de Educación Ambiental 2021-2031; 
        ● Socialización instrumento de recolección de la información y los instrumentos de planificación Plan Mpal de Educ. Amb. 
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia109 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7532,
            'year' =>3,
            'value' => 12,
            'description' => 'A través de procesos participativos de educación ambiental con las comunidades del Departamento del Meta, se identificaron iniciativas comunitarias de educación ambiental, las cuales, a partir de una presentación del proyecto e inscripción en la base de datos de educación ambiental, se inicia el apoyo y acompañamiento de la iniciativa comunitaria por parte de la Corporación.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia110 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7533,
            'year' =>3,
            'value' => 1,
            'description' => 'La Red PRAES es una estrategia educativa, mediante la cual el grupo de educación ambiental articula un grupo de instituciones educativas mediante la presentación e inscripción del proyecto ambiental escolar ante la autoridad ambiental del Departamento del Meta - Cormacarena, para con ello establecer y concertar las temáticas ambientales para el acompañamiento, asesoría, fortalecimiento, capacitación y sensibilización ambiental de las comunidades educativas del Departamento',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7534,
            'year' =>3,
            'value' => 3,
            'description' => 'Entre otras de las actividades desarrolladas en educación ambiental por parte de la Corporación, se viene apoyando y fortaleciendo los 29 nodos municipales y departamental de red de Jóvenes de Ambiente; Capacitación y sensibilización ambiental a comunidades comunidad en general.
        
        Con la participación de la red de jóvenes de ambiente y la comunidad en general, se ha desarrollado actividades tales como: 
        
        ● Socialización del Plan Decenal de Educación Ambiental 2021-2031. 
        ● Socialización de la Política Nacional de Educación Ambiental. 
        ● Socialización de la red PRAE Meta
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia112 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7535,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Durante el primer semestre de la vigencia 2022 se contrataron catorce personas que conforman el área de Comunicaciones de la Corporación, encargadas de implementar el plan estratégico de comunicaciones, específicamente el diseño de piezas gráficas que requieren los grupos, la producción audiovisual para eventos concretos como la Audiencia Pública de Rendición de Cuentas llevada a cabo el mes de abril, reunión de Asocars, emisión del informativo ECOS cada semana, cubrimiento de las actividades misionales, elaboración de boletines de prensa, realización de ruedas de empresa. En comunicación interna, se está implementando y desarrollando la estrategia Tú Cuentas, con el objetivo de conocer las actividades misionales que hace la corporación ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia113 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7536,
            'year' =>3,
            'value' => 1,
            'description' => 'Con la presencia de 32 Corporaciones del país, se realizó el evento Cumbre de Asocar, se realizaron jornadas de capacitación, sensibilización y presentación de experiencias exitosas de educación ambiental en el departamento del Meta. Con la participación de beneficiarios del grupo de educación ambiental, se proyecta realizar una jornada de presentación de experiencias exitosas para el mes de septiembre de 2022.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia114 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7537,
            'year' =>3,
            'value' => 0,
            'description' => 'Se proyecta ejecutar la actividad en el segundo semestre de la vigencia 2022 con la posible obtención de un predio en la ciudad de Villavicencio para posteriormente desarrollar diseños y construcción de obra de la nueva sede de la Corporación.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia115 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7538,
            'year' =>3,
            'value' => 21,
            'description' => 'La Corporación realizó compra de insumos tales como cintas mágicas, carpetas y cajas de archivo para uso y desarrollo de actividades de archivo en pro de los documentos producidos y recibidos bajo el contrato No. PS.GCT.2.7.22.513 con fecha de inicio 03 de junio de 2022 y terminación del 24 de junio de 2022; (a la fecha se encuentra en proceso liquidación), cuyo objeto es la adquisición de implementos útiles de papelería y aseo para el normal funcionamiento de las dependencias y regionales de Cormacarena',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia116 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7539,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizó evento de audiencia pública en el auditorio del Hotel Tío Pepe en el Municipio de Puerto López acorde a los lineamientos del Decreto 1076 de 2015, el cual tuvo una duración de 5horas + 10 minutos, dando inicio a las 9:00 am; al evento participaron de manera presencial 124 personas; durante el proceso de convocatoria se inscribieron 63 personas las cuales indicaron intervenir de manera presencial 25, de manera virtual 33, 3 personas no dieron información de la forma de participación y 2 indicaron no intervenir.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia117 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7541,
            'year' =>3,
            'value' => 0.6,
            'description' => 'A la fecha, se han realizado las auditorias de acuerdo con lo establecido en el programa anual de auditorías aprobado para 12 de los 14 procesos de la Corporación por medio de las cuales se puede evaluar la idoneidad, la no conformidad o Identificar oportunidades de mejora. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia119 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7542,
            'year' =>3,
            'value' => 2.68,
            'description' => 'Para mejorar las condiciones del clima laboral, la Corporación desarrolla 4 planes: PIGA, bienestar, Sistema de Seguridad en el Trabajo y Plan de Capacitación en los cuales ha desarrolla las siguientes acciones:
        
        ● Plan Institucional de Gestión Ambiental –PIGA 
        ● Plan de Bienestar Social e incentivos
        ● Sistema De Gestión De Seguridad Y Salud En El Trabajo
        ● Plan Institucional de Capacitación',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia120 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17645,
            'year' =>3,
            'value' => 100,
            'description' => 'A la fecha, la Corporación realizó la formulación de la Política Equidad de Género y Empoderamiento de acuerdo a los parámetros del Departamento de la función Pública, el documento se encuentra publicado en la página de la corporación Cormacarena mediante el siguiente enlace https://drive.google.com/file/d/1mOCOmoJ_5oaO8S6hLe7_1TUxgVrZRZi9/view el cual está disponible para la comunidad en general y la cual se ha socializado al interior de la Corporación',
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
            'activity_id' => 17647,
            'year' =>3,
            'value' => 0.9,
            'description' => 'Se está realizando actualmente el protocolo / procedimiento del canal para denuncias de acoso sexual, para el cual se han realizado reuniones con entidades como Gobernación del Meta - Secretaría de la Mujer, la familia y Equidad de Género con el fin de llevar a cabo estrategias que nos permitan articular el canal de denuncias de acoso sexual y la ruta de atención',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia122 = DB::getPdo()->lastInsertId();
        
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
