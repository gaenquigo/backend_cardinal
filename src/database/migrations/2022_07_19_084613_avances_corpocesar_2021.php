<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorpocesar2021 extends Migration
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
            'year' =>2,
            'value' => 2,
            'description' => 'a) Se apoyó en la formulación de un esquema de PSA para la cuenca del Rio Garupal Diluvio y el Rio Manaure. (Estrategia Colombiana de Desarrollo Bajo en Carbono).
        
        b) Se realizó convenio interadministrativo con la Corporación Mas Bosques, para la implementación de un esquema de PSA denominado BANCO2, beneficiando a 50 familias en zona rural del municipio de Aguachica, área de influencia de la empresa NUTRESA financiador del proyecto.
        ',
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
            'activity_id' => 14225,
            'year' =>2,
            'value' => 50,
            'description' => 'Se establecieron 50 Hectáreas de siembra de especies nativas para la restauración ecológica y conservación bajo esquema PSA, mediante acuerdos de voluntades con las familias beneficiadas.',
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
            'activity_id' => 14226,
            'year' =>2,
            'value' => 0,
            'description' => 'Se apoyó en la formulación de un esquema de PSA para la cuenca del Rio Garupal Diluvio, Guatapurí y en el Rio Manaure. (Estrategia Colombiana de Desarrollo Bajo en Carbono), de los cuales se ejecutará en la vigencia 2022 el proyecto: Implementación de un modelo pilto de PSA en la cuenca del río Guatapurí.
        
        ',
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
            'activity_id' => 14227,
            'year' =>2,
            'value' => 0,
            'description' => 'No se implementó la estrategia, ya que solo se avanzó en la identificación y apoyo de aquellos negocios verdes enfocados a la bioeconomia y se proyecta adelantar en la vigencia 2022.',
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
            'activity_id' => 14228,
            'year' =>2,
            'value' => 1,
            'description' => 'De conformidad al Plan Departamental de Negocios Verdes, se implementaron acciones mediante el convenio interadministrativo No. 19-7-0001-0-2021, con objeto: Aunar esfuerzos técnicos, administrativos y financieros para el fortalecimiento de la oferta institucional en productividad sostenible y protección de la biodiversidad, a través del desarrollo de actividades que fomenten el crecimiento y promoción de los negocios verdes y la economía circular, en el departamento del cesar',
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
            'activity_id' => 14229,
            'year' =>2,
            'value' => 28,
            'description' => 'Se realizaron las verificaciones de los negocios verdes inscritos en las convocatorias de la vigencia de 2021, en apoyo al MADS y las registradas por CORPOCESAR.',
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
            'activity_id' => 14229,
            'year' =>2,
            'value' => 3,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14230,
            'year' =>2,
            'value' => 40,
            'description' => 'Se apoyaron 40 negocios verdes en el fortalecimiento de sus marcas y 3 de ellos en la participación de la feria Nacional BIOEXPO 2021, mediante la ejecución del convenio No. 19-7-0001-0-2021 con objeto: Aunar esfuerzos técnicos, administrativos y financieros para el fortalecimiento de la oferta institucional en productividad sostenible y protección de la biodiversidad, a través del desarrollo de actividades que fomenten el crecimiento y promoción de los negocios verdes y la economía circular, en el departamento del Cesar.',
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
            'activity_id' => 14231,
            'year' =>2,
            'value' => 60,
            'description' => 'El 7 de octubre de 2021, se remitió comunicación a los Coordinadores de los GIT de Corpocesar, Alcaldes y representantes de las Empresas de Servicios Públicos con jurisdicción en el departamento del Cesar, para que se evalúen los ICAU directos e indirectos, recibiendo respuesta de la empresa CENS, la cual reporto el ICAU para consumo de energía eléctrica en 6 municipios.',
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
            'activity_id' => 14232,
            'year' =>2,
            'value' => 1,
            'description' => 'Esta participación se da en la medida que el MADS haga el requerimiento, se envio comunicación al MADS solicitando información sobre los probables eventos o reuniones encaminados al ajuste de la política de gestión ambiental urbana',
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
            'activity_id' => 14233,
            'year' =>2,
            'value' => 3,
            'description' => 'a) Mediante recorrido efectuado el 10 de abril de 2021, se realizó diagnóstico en la margen derecha del río Guatapurí, enfocado en la acequia Guatapurí - Salguero - Los Mayales, a su paso por los barrios o asentamientos humanos ubicados entre las carreras 1 y 4 de la ciudad de Valledupar (según el POT-VALLEDUPAR, localizados en zona de riesgo alto y medio por inundación), en el cual se hizo evidente que el municipio no ha dado cumplimiento a los requerimientos formulados por la entidad en materia de gestión ambiental de la margen derecha del río Guatapurí a su paso por las inmediaciones de la ciudad de Valledupar. 
        
        Esta actividad tiene relación con la gestión ambiental urbana, y de ella se derivó informe técnico de fecha 19 de abril de 2021, entregado a las directivas de la entidad y las coordinaciones de Seguimiento al Aprovechamiento del Recurso Hídrico, Saneamiento Básico y de PML-RESPEL, con el objetivo de que cada instancia realice el análisis a que haya lugar y tome las decisiones pertinentes en materia de gestión ambiental en el entorno urbano y suburbano en la ciudad de Valledupar.  
        
        b) Se presto apoyo a la definición de las determinantes ambientales que debe establecer CORPOCESAR, mediante el aporte de información y conceptos a las fichas denominadas MN - 09 MANANTIALES DE AGUA Y RONDAS HÍDRICAS y MN 10 ZONAS DE RECARGA DE LOS SISTEMAS ACUÍFEROS DEL DEPARTAMENTO DEL CESAR, ante la solicitud de la SGAP del 15 de abril de 2021.
        
        c) El 02 de junio de 2021, se divulgó a las coordinaciones de la SGAGA, el contenido de la directiva 004 Protección Especial del Suelo Rural y Memorando 001-2020 Determinantes Ambientales, como norma para el desarrollo de proyectos, publicada por la PGN.
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
            'activity_id' => 14234,
            'year' =>2,
            'value' => 3,
            'description' => '
        Se realizaron tres jornadas educativas de recolección de residuos peligrosos e inservibles en los municipios de Astrea, Curumaní y Valledupar.
        ',
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
            'activity_id' => 14235,
            'year' =>2,
            'value' => 2,
            'description' => 'Se apoyaron los negocios, INGEQUILIBRIO S.A.S BIC, con la asistencia a la feria Bioexpo 2021,  y el negocio CARIBE MAS LIMPIO, participó del encuentro con la Misión Europea, este apoyo se dio en marco del convenio con objeto: Aunar esfuerzos técnicos, administrativos y financieros para el fortalecimiento de la oferta institucional en productividad sostenible y protección de la biodiversidad, a través del desarrollo de actividades que fomenten el crecimiento y promoción de los negocios verdes y la economía circular, en el departamento del Cesar',
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
            'activity_id' => 14236,
            'year' =>2,
            'value' => 100,
            'description' => '
        Se participó en la Mesa Regional de Economía Circular, en desarrollo de la socialización de la Estrategia Nacional de Economía Circular para ventanillas regionales de negocios verdes, realizada el 17 de junio de 2021
        ',
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
            'activity_id' => 14237,
            'year' =>2,
            'value' => 25,
            'description' => 'Se realizó seguimiento a los 25 municipios del departamento.',
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
            'activity_id' => 14238,
            'year' =>2,
            'value' => 100,
            'description' => 'Se revisó el 100% de los PGIRS (La Paz, La Gloria)  presentados al comité evaluador del cual CORPOCESAR hace parte.',
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
            'activity_id' => 14239,
            'year' =>2,
            'value' => 8,
            'description' => 'Se apoyaron los proyectos pilotos, Paseo Vallenato Tour, Productos del valle, Conserva Natural Encantador, Café Maven, Picante Leo, Dulcería NAEDER y Villa Adelaida S.A.S, con los que sostuvimos encuentros de formación donde se abordaron temas de, turismo natural, biodiversidad del Cesar, manejo adecuado de residuos y desechos plásticos de un solo uso que generan contaminación.',
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
            'activity_id' => 14240,
            'year' =>2,
            'value' => 1,
            'description' => 'Se apoyaron proyectos pilotos de emprendimientos con el fortalecimiento del marketing digital y el impulso de  bienes y servicios a través del desarrollo de la participación en ferias regionales de Negocios Verdes, en el marco del convenio: Aunar esfuerzos técnicos, administrativos y financieros para el fortalecimiento de la oferta institucional en productividad sostenible y protección de la biodiversidad, a través del desarrollo de actividades que fomenten el crecimiento y promoción de los negocios verdes y la economía circular, en el departamento del Cesar.
        
        ',
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
            'activity_id' => 14241,
            'year' =>2,
            'value' => 1,
            'description' => 'En la vigencia 2021 se inició la gestión ante la UPME de un proyecto para la implementación de sistemas de energía solar en instituciones educativas del municipio de Valledupar.',
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
            'activity_id' => 14242,
            'year' =>2,
            'value' => 1,
            'description' => 'Con la actualización de las determinantes ambientales, se creó una ficha específica para la incorporación del cambio climático en el ordenamiento territorial, en la cual se establecen lineamientos y criterios para tener en cuenta las medidas de mitigación y adaptación que deban priorizar los municipios de acuerdo a la problemática identificada.',
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
            'activity_id' => 14243,
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
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14244,
            'year' =>2,
            'value' => 85,
            'description' => 'Se participó en 12 reuniones COTSA de 14 programadas con el fin de sensibilizar a la comunidad en el cuidado del ambiente, el agua, prevención de intoxicaciones y adecuada disposición final de residuos sólidos, de sustancias químicas en uso agrícola y doméstico, y jornada de recolección de residuos postconsumo COTSA.',
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
            'activity_id' => 14245,
            'year' =>2,
            'value' => 10,
            'description' => 'Se apoyo  en  la formulacion del mapa de riesgo del municipio de Valledupar. ',
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
            'activity_id' => 14246,
            'year' =>2,
            'value' => 1,
            'description' => 'Se elaboró los estudios previos y presupuesto para la contratación de la realización de acciones para la implementación del plan de acción regional de lucha contra la desertificación y la sequía, y el manejo del bosque seco tropical en las cuencas de los ríos Garupal y Diluvio, municipios de Valledupar y el Copey Cesar, de acuerdo a los alcances y especificaciones técnicas contempladas por CORPOCESAR. Además se instalaraon estufas ecológicas en veredas del municipio de Valledupar, cuenca Garupal Diluvio, como acciones de lucha contra la desertificación en este ecosistema.',
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
            'activity_id' => 14247,
            'year' =>2,
            'value' => 1,
            'description' => 'En el marco del simposio Planificacion Territorial para la inclusion de las Determinantes Ambientales y Estrategia de desarrollo sosteniblel se abordaron temáticas como desertificación de los suelos del Cesar.',
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
            'activity_id' => 14248,
            'year' =>2,
            'value' => 0,
            'description' => 'No se cuenta con el Plan de Gestión Integral de Residuos Peligrosos para llevar a cabo la revisión y la actualización. Se tiene proyectado contratarlo en la vigencia 2022',
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
            'activity_id' => 14249,
            'year' =>2,
            'value' => 100,
            'description' => 'Se llevó a cabo la transmisión del 100% de los registros reportados por las empresas que cuentan con equipos de contenido PCB, y se apoyó al IDEAM en la consolidación de la información de generación de RESPEL en el departamento del Cesar.',
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
            'activity_id' => 14250,
            'year' =>2,
            'value' => 4,
            'description' => 'a) En conjunto con la alcaldía de la Jagua de Ibirico, se realizaron campañas pedagógicas en gestión RESPEL en los establecimientos expendedores de combustible. 
        b) Al sector porcicultor, con el acompañamiento de la Agencia Ambiental y Porkolombia.
        c) Capacitación a las IPS, sobre la aplicación del nuevo código de colores para la gestión de residuos, incluyendo los RESPEL, asociados a la atención del COVID-19. 
        d) Como fortalecimiento de las actividades de IVC, se cuentan con los seguimientos a las estaciones de servicios de hidrocarburos y generadores de residuos peligrosos.
        ',
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
            'activity_id' => 14251,
            'year' =>2,
            'value' => 1,
            'description' => 'a) Se establecieron pautas para la actualización del programa de disminución de la contaminación del aire.
        
        b) Se ejecutaron actividades para la prevención, control y reducción de la contaminación en los municipios de la zona centro del Cesar, La Jagua de Ibirico, El Paso, Chiriguaná y Becerril, identificando y gestionando el saneamiento de botaderos satélites de residuos sólidos, identificando eventos de contaminación por tráfico en  vías sin pavimento y gestiones con los diferentes actores para minimizarla, se gestionó el barrido de algunas calles en el Corregimiento de La Loma Cesar, se implementaron jornadas de educación ambiental en las diferentes localidades mencionadas para disminuir la incidencia de las quemas de residuos sólidos, se realizaron  jornadas de siembra de árboles para que haya una mejor calidad de aire en la zona
        
        c) Se desarrollaron mesas de trabajo entre el MADS, ANLA, Gobernación del Cesar y representantes de las alcaldías del sector minero (La Jagua de Ibirico, Agustín Codazzi, Becerril, Chiriguaná y El Paso) en el marco de una actualización del PRCA existente, se cuenta con un documento en construcción, se estima un avance del 45% a la fecha.
        ',
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
            'activity_id' => 14252,
            'year' =>2,
            'value' => 0,
            'description' => 'Para el cumplimiento de esta actividad se requieren instrumentos de monitoreo, por lo cual se realizó solicitud y relación de necesidades la subdirección general del área administrativa y financiera para el apoyo y gestión en la adquisición de los equipos e instrumental de monitoreo de fuentes móviles, oficio interno SGAGA-CGIT-LABA-0131 ',
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
            'activity_id' => 14253,
            'year' =>2,
            'value' => 75,
            'description' => 'a) Se gestionaron e instalaron dos (2) equipos nuevos de calidad de aire uno en la estación ZM20 Costa hermosa parámetro PM10 (Wilbur) y el segundo en ZM13 El Hatillo parámetro PM2.5 (Wilbur). Esta decisión se tomó teniendo en cuenta las criticidades de las estaciones en mención y la nueva reclasificación de áreas fuentes para garantizaran las mediciones constantes.
        b) El día 17 de diciembre de 2021 se realizó instalación y puesta en marcha del PolGet urbano (poste inteligente que medirá de forma indicativa parámetros de calidad del aire, meteorología y ruido ambiental) en la ciudad de Valledupar.
        c) El laboratorio ambiental de Corpocesar actualmente se encuentra acreditado por el IDEAM, por medio de la Res. 1415 de 2019 para monitoreos de calidad de aire y agua y cuenta con 16 estaciones de calidad de aire para medición de los contaminantes criterio PM10 y PM2.5, con representatividad de las estaciones superiores al 75%. Actualmente se encuentra en proceso de seguimiento la acreditación de parámetros en la matriz aire y agua. Se solicitó visita para el seguimiento y extensión de la acreditación en las matrices: Agua y Aire ante el IDEAM, radicado número 20219910030762 del 31 de mayo de 2021, 
        d) Se realizó diagnóstico del estado de los equipos y elementos del LABA, se presentó relación de equipos y elementos requeridos de forma prioritaria en el LABA para ser distribuidos y repotenciadas algunas estaciones.
        e) Se realizó gestión, adquisición e ingreso y puesta en marcha de tres (3) nuevos multiparámetros de campo para medir parámetros In Situ en la matriz agua Oxígeno disuelto, conductividad, temperatura, pH.
        ',
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
            'activity_id' => 14254,
            'year' =>2,
            'value' => 0,
            'description' => 'Se adelantó en conjunto con la coordinación de seguimiento ambiental una campaña con los CDA para determinar cuál de ellos tienen equipos móviles para el monitoreo de fuentes móviles y establecer una estrategia que nos permita dar cumplimiento a este indicador.',
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
            'activity_id' => 14255,
            'year' =>2,
            'value' => 0,
            'description' => 'No se realizo en la vigencia 2021 dado a dificultades administrativas que dificultaron la contrattacion los servicios de consultoria para el desarrollo de este estudio, por lo tanto se tiene priorizado para su ejecucion en la vigencia 2022',
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
            'activity_id' => 14256,
            'year' =>2,
            'value' => 1,
            'description' => 'Constantemente se realiza verificación de los equipos de monitoreo para garantizar que las mediciones se realicen de acuerdo al protocolo de monitoreo de calidad de aire Res. 2154 de 2010, con el objetivo que sean representativas y determinantes para implementar los planes de prevención y control de la contaminación del aire, las actividades operativas realizadas corresponden a calibraciones, verificación de flujos, mantenimientos periódicos de las 16 estaciones del SVCA, de acuerdo a los planes de monitoreo.',
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
            'activity_id' => 14257,
            'year' =>2,
            'value' => 27,
            'description' => 'Se programaron realizar 41 visitas de seguimiento y control a fuentes fijas de emisión, se desarrollaron 37',
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
            'activity_id' => 14258,
            'year' =>2,
            'value' => 100,
            'description' => 'La información sobre la calidad del aire está cargada hasta el mes de diciembre de 2021, garantizando la disponibilidad de la información ambiental y su consulta por los usuarios del sistema.',
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
            'activity_id' => 14259,
            'year' =>2,
            'value' => 4,
            'description' => 'a) Se formuló un proyecto a través del convenio de Cooperación número 041 de 2021 entre Fondo Acción y Corpocesar, el cual busca la implementación de medidas integrales para la mitigación de Gases de Efecto Invernadero (GEI), el objetivo de este proyecto es lograr la disminución de emisiones de gases de efecto invernadero mediante la preservación y restauración de coberturas vegetales nativas e implementación de prácticas agrícolas sostenibles ambientalmente en áreas estratégicas del Parque Natural Regional Serranía del Perijá y Cuenca Garupal Diluvio.
        
        b) Se encuentra en ejecución en la vigencia 2022 el proyecto denominado: implementación de acciones de mitigación del cambio climático en zonas rurales de los municipios de Valledupar, La Paz, Manaure, San Diego y Agustín Codazzi del departamento del Cesar el cual se ejecuta en la cuenca Garupal Diluvio y en el Parque Natural Regional Serranía del Perijá, comprende la construcción de 625 estufas ecológicas, talleres de capacitación y socialización del PIGCCT Cesar 2032.
        
        c) En ejecución el Plan de Manejo del Distrito Regional de Manejo Integrado DRMI Complejo Cenagoso de Zapatosa CCZ
        
        d) Se ejecutó el convenio interadministrativo con el Resguardo Indígena Kankuamo que tiene por objeto: Aunar esfuerzos técnicos, económicos y/o administrativos para la implementación de actividades ambientales con enfoque diferencial en el territorio ancestral del pueblo indígena Kankuamo en la Sierra Nevada de Santa Marta, departamento del Cesar
        ',
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
            'activity_id' => 14260,
            'year' =>2,
            'value' => 20,
            'description' => 'En funcionamiento el Link corpocesar (condiciones alertas ambientales, boletin especial sobre ciclones tropicales, variabilidad climática cambio climático, pronóstico del tiempo) https://www.corpocesar.gov.co/files/BOLETIN%20ESPECIAL%20SOBRE%20CICLONES%20TROPICALES%20_%2015%20DE%20JULIO%20DE%202021.pdf',
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
            'activity_id' => 14261,
            'year' =>2,
            'value' => 100,
            'description' => 'a) Se participó activamente en el primer encuentro del NORECCI, donde se presentaron los avances de iniciativas en la región, y se llevó a cabo un taller para identificar las necesidades actuales de los integrantes del Nodo y otros actores relevantes del orden regional.
        b) Se participó en el taller para la Construcción del Plan de Acción del Nodo Regional de Cambio Climático Caribe e Insular - NORECCI.
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
            'activity_id' => 14262,
            'year' =>2,
            'value' => 80,
            'description' => 'Ante la respuesta dada por el MADS en el segundo semestre del 2020 para el avance en la adopción de la metodología (EDANA - C), se sostuvo la segunda jornada de capacitación dictada por el MADS al GIT de la coordinación para la GRD de CORPOCESAR, para el comienzo del aprendizaje de la metodología. Para el efecto, se tomó como base la actuación de la entidad, a través del grupo interno de trabajo de la Coordinación para la GRD, la evaluación de los efectos de incendios de la cobertura vegetal ocurridos en el mes de marzo de 2021 en las cuencas de los ríos Garupal y Diluvio, en el piedemonte de la Sierra Nevada de Santa Marta, municipio de Valledupar. El informe respectivo está en proceso de ajuste, luego de la elaboración de la primera versión del mismo durante el taller de capacitación a que se ha hecho referencia.
        
        La inspección de campo, base para la EDANA-C, se llevó a cabo mancomunadamente con la Oficina Jurídica de la entidad, mediante una visita desarrollada el 31 de marzo de 2021, para la atención de una queja presentada por personas que habitan en las zonas afectadas por los incendios en citas.  El informe a la Oficina Jurídica se rindió el día 07 de abril de 2021. El Informe definitivo de la aplicación de la metodología EDANA - C sobre el caso se envió al MADS el 18 de junio y en oficio de la SGAP 6/7/2021.
        ',
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
            'activity_id' => 14262,
            'year' =>2,
            'value' => 15,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14263,
            'year' =>2,
            'value' => 15,
            'description' => 'La implementación completa del piloto de la metodología EDANA-C se podrá dar en la medida en que se haga presencia en las zonas que eventualmente resultaron afectadas por los eventos naturales desastrosos, con el fin de complementar la información destinada a la formulación de las acciones propuestas en el respectivo informe de la metodología EDANA-C. La ejecución de estas medidas o propuestas pertenece a una fase posterior, en la cual la metodología EDANA-C este aprobada por el MADS a la fecha se encuentra publicada la versión 3 de un documento preliminar en la página web del MADS, se espera sea publicada la versión definitiva a mediados del segundo semestre de 2022. 
        
        Para la aplicación de la metodología EDANA – C se requiere de la utilización del software ARCGIS por lo cual se suscribió la orden de compra 82795 del 15 de diciembre de 2021 y se adjudicó el proceso de compra de equipos de cómputo que alojaran el software.
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
            'activity_id' => 14264,
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
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14265,
            'year' =>2,
            'value' => 1,
            'description' => 'Se ejecutó el Convenio No.19-7-0004-0-2021, cuyo objeto es: Aunar esfuerzos técnicos, administrativos y financieros para la realización de estudios básicos de riesgo de desastres del municipio de La Paz, Cesar, en el marco del decreto 1807 de 2014 (compilado decreto 1077 de 2015) así como la formulación de la agenda de cambio climático para el Municipio, en el marco de la Ley 1931 de 2018 suscrito con el municipio de La Paz, se encuentra en evaluación de los productos entregados.',
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
            'activity_id' => 14266,
            'year' =>2,
            'value' => 90,
            'description' => 'a) Se ejecutó mediante contrato N° 19-6-0023-0-2021 cuyo objeto es medidas estructurales para prevención de inundaciones en Guacoche a través de la recuperación hidráulica y ambiental de la laguna de Guacoche y control del desbordamiento del caño el arroyito en el corregimiento de Guacoche, municipio de Valledupar.
        
        b) Se realizó convenio con los municipios de Chiriguana y Curumaní para la implementación de medidas estructurales y no estructurales para el control de la erosión e inundación de la corriente superficial ANIME que será ejecutado en 2022. 
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
            'activity_id' => 14267,
            'year' =>2,
            'value' => 7,
            'description' => 'Como medidas no estructurales, se adelantaron: 
        
        Primer semestre 
        
        a) Jornadas de campo en la margen derecha del río Guatapurí y zonas aledañas caracterizando las situaciones que en materia de amenaza, vulnerabilidad y riesgo de origen natural se presentan en la zona. De estas actuaciones se rindieron los informes correspondientes que sirvieron de base para que la Dirección General y la Oficina Jurídica de la entidad emitieran comunicados dirigidos a la Alcaldía del Municipio de Valledupar, ordenando que se adelantaran acciones que impidan la degradación de la ribera del río Guatapurí a su paso por las inmediaciones de la ciudad de Valledupar. 
        b) Se participó en jornadas de capacitación y organización comunitaria en materia de prevención de incendios forestales, en la zona de la unidad de bosque seco tropical de las cuencas de los ríos Garupal y Diluvio (en el marco de la ECC Garupal - Diluvio). 
        c) Se ejecutaron actividades de evaluación de áreas afectadas por incendios de la cobertura vegetal, en las zonas de la vereda Azúcar buena, La Guitarra, El Saltillo, Las Cumbres, Nuevo Mundo Villero, se realizaron charlas de educación ambiental y de prevención de incendios de la cobertura vegetal, y recolectó información sobre los presuntos responsables de las actividades de quemas que han causado desastres en zonas de importancia ambiental.
        d) Se dictó charla sobre prevención de incendios a los miembros de la empresa que opera la red de calidad de aire de CORPOCESAR. 
        e) Se sostuvo reunión con la Dirección Nacional de Bomberos y los CBV del Cesar para analizar las necesidades de apoyo logístico, a partir de lo cual se trabaja en la proyección de estudios previos para la dotación de los cuerpos de bomberos con sede en el Cesar, de equipos para prevención y atención de incendios. 
        
        Segundo semestre. 
        
        a) Se firmó convenio con el cuerpo de bomberos del municipio del Copey el cual fue finalizado por mutuo acuerdo debido a dificultades financieras de este.               El convenio realizado con el cuerpo de bomberos de Valledupar se prorrogo hasta febrero de 2022.
        b) Se adelantaron actividades de capacitación en la conformación de brigadas forestales para la prevención de incendios en las veredas La Iberia, Agustín Codazzi y la Guitarra en Valledupar
        c) Se participó en los Consejos Departamentales y municipales de Gestión del Riesgo.
        
        ',
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
            'activity_id' => 14268,
            'year' =>2,
            'value' => 2,
            'description' => 'Primer semestre. El 10 de abril de 2021 se realizó un diagnóstico de la margen derecha del río Guatapurí, enfocado en la acequia Guatapurí - Salguero - Los Mayales, en el cual se hizo evidente que el municipio no ha dado cumplimiento a los requerimientos formulados por la entidad en materia de gestión ambiental de la margen derecha del río Guatapurí a su paso por las inmediaciones de la ciudad de Valledupar.
        
        De lo anterior se dio cuenta en informe del 19 de abril de2021, para los fines pertinentes, entregado a las directivas de la entidad y las coordinaciones de Seguimiento al Aprovechamiento del Recurso Hídrico, Saneamiento Básico y de PML-RESPEL. 
        
        Segundo semestre.  El 10 de julio de 2021 se realizó recorrido de las cuencas de los arroyos Seco y Arena en La Victoria de San Isidro, para evaluar la posibilidad de adelantar una evaluación de amenaza por avenidas torrenciales, en el marco del PMCA del río Calenturitas.
        
        En el mes de octubre de 2021 se realizó reunión virtual solicitada al Servicio Geológico Colombiano, para analizar la respuesta  que dicha entidad emitió, en torno al apoyo para la realización del estudio de amenaza por AVT que es necesario como paso previo a la construcción de obras hidrodinámicas, compromiso establecido en el  POMCA, y con el que se apuntaría a dar cumplimiento; en la reunión, el SGC reitero y explicó que la zona es de prioridad baja para llevar a cabo el estudio; como resultado, se realizó una comisión de campo en el mes de noviembre de 2021, con la que se levantó información adicional para verificar las condiciones del área y programar así una nueva cita con el SGC.
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
            'activity_id' => 14269,
            'year' =>2,
            'value' => 2,
            'description' => 'Se priorizaron las siguientes áreas estratégicas:                                                                                                a) Ecorregión Ciénaga de Zapatosa                                                                                                                b) áreas para restaurar en el PNR Perijá, las cuales se establecieron a partir de la Construcción del portafolio de proyectos en núcleos activos de deforestación y del portafolio de áreas prioritarias para las compensaciones orientadas a la conservación de la biodiversidad, restauración ecológica y el desarrollo sostenible en jurisdicción de CORPOCESAR.',
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
            'activity_id' => 14270,
            'year' =>2,
            'value' => 2,
            'description' => 'Se contrató el proyecto para la restauración de areas degradadas en las Microcuencas del Rio Magiriamo, y para la implementación de acciones en el Bosque seco en el municipio de Becerril',
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
            'activity_id' => 14271,
            'year' =>2,
            'value' => 1,
            'description' => 'Se han realizado monitoreos y seguimientos  a las acciones realizadas en ejecucion del proyecto Magiriaimo y Bosque seco',
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
            'activity_id' => 14272,
            'year' =>2,
            'value' => 1,
            'description' => 'Se han realizado publicaciones de comunicaciones y boletines de la evolución de los procesos de restauración ecológica en la página web de CORPOCESAR.
        https://www.corpocesar.gov.co/boletines_de_prensa-1.html, así como para la identificación de alertas tempranas de deforestación.',
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
            'activity_id' => 14273,
            'year' =>2,
            'value' => 4,
            'description' => 'a) Se conformaron actores en marco del contrato N° 19-7-0008-0-2020 para la conservación del bosque seco tropical Bs-T, a través de un núcleo de restauración/conservación comunitaria que contribuye a la conectividad y protección en el municipio de Becerril, departamento del Cesar,
        b) Proyecto de 10 hectáreas de unidades agroforestales con frutales de mango, cultivo de patilla y arboles maderables con su correspondiente aislamiento y facilidades de riego que se desarrolla en la comunidad indígena de Tezhumque, perteneciente al pueblo Wiwa
        c) Proyecto para la Restauración de Áreas Degradadas en las microcuencas del rio Magiriamo jurisdicción de CORPOCESAR.
        d) Organización de brigadistas forestales de Garupal Diluvio
        ',
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
            'activity_id' => 14274,
            'year' =>2,
            'value' => 70,
            'description' => 'Se diseño el Proyecto PSA Guatapuri',
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
            'activity_id' => 14275,
            'year' =>2,
            'value' => 3,
            'description' => 'a) Se desarrolló asistencia técnica en marco del contrato N° 19-7-0008-0-2020 para la conservación del bosque seco tropical Bs-T, a través de un núcleo de restauración/conservación comunitaria que contribuye a la conectividad y protección en el municipio de Becerril, departamento del Cesar 
        b) Se asistió a la comunidad indígena de Tezhumque, perteneciente al pueblo Wiwa
        c) Proyecto para la Restauración de Áreas Degradadas en las microcuencas del Rio Magiriamo en un área de 10 hectáreas de unidades agroforestales con frutales de mango, cultivo de patilla y arboles maderables, con su correspondiente aislamiento y facilidades de riego.
        ',
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
            'activity_id' => 14276,
            'year' =>2,
            'value' => 4,
            'description' => 'a) Se realiza seguimiento y evaluación en marco del contrato N° 19-7-0008-0-2020 para la conservación del bosque seco tropical Bs-T, a través de un núcleo de restauración/conservación comunitaria que contribuye a la conectividad y protección en el municipio de Becerril, departamento del Cesar.
        b) Proyecto de 10 hectáreas de unidades agroforestales con frutales de mango, cultivo de patilla y arboles maderables con su correspondiente aislamiento y facilidades de riego que se desarrolla en la comunidad indígena de Tezhumque, perteneciente al pueblo Wiwa.
        c) Proyecto para la Restauración de Áreas Degradadas en las microcuencas del rio Magiriamo jurisdicción de CORPOCESAR
        d) En diciembre de 2021 se realizó convenio de asociación por proceso competitivo para entidades sin ánimo de lucro, para la implementación de acciones de restauración en áreas de interés estratégico en la serranía del Perijá fase I
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
            'activity_id' => 14277,
            'year' =>2,
            'value' => 100,
            'description' => 'A través del programa RIQUEZA NATURAL iniciativa del IDEAM y de USAID se fortaleció la capacidad de la Corporación a través de la generación de un sistema de detecciones tempranas de cambios en ecosistemas estratégicos del Caribe y la Orinoquía Colombiana. Estas acciones permitieron visualizar por medio de los boletines las áreas y núcleos de deforestación en la Corporación, así como hacer un seguimiento más eficiente al proceso de deforestación que se tiene en Corpocesar. Permitió conocer las metodologías y protocolos que se tienen desde el IDEAM para la identificación de las detecciones tempranas a partir de la identificación de polígonos de deforestación.',
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
            'activity_id' => 14277,
            'year' =>2,
            'value' => 60,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14278,
            'year' =>2,
            'value' => 80,
            'description' => 'Se asistieron a 5 reuniones con el MADS donde se abordaron temas acerca del marco regulatorio asociado al manejo forestal, en cuanto a los aprovechamientos forestales y definición de áreas.',
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
            'activity_id' => 14279,
            'year' =>2,
            'value' => 9,
            'description' => 'Se recibieron capacitaciones con el MADS para la implementación de este instrumento. Se brindó capacitación a 5 empresas de madera sobre LOFL de las 12 registradas.',
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
            'activity_id' => 14280,
            'year' =>2,
            'value' => 1,
            'description' => 'Se ejecutó la construcción del portafolio de proyectos en núcleos activos de deforestación y del portafolio de áreas prioritarias para las compensaciones orientadas a la conservación de la biodiversidad, restauración ecológica y el desarrollo sostenible en jurisdicción de CORPOCESAR.                                                                                                                                                        Se gestionaron proyectos ante el MADS en la convocatoria realizada para acceder a recursos del porcentaje ambiental de regalías, a través de la presentación de 4 proyectos, de los cuales quedó en lista de elegibles el proyecto: Mejoramiento ambiental de la cuenca hidrográfica río Calenturitas a través de acciones de restauración en áreas degradadas localizadas en el municipio de La Jagua de Ibirico en el departamento del Cesar',
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
            'activity_id' => 14281,
            'year' =>2,
            'value' => 2,
            'description' => 'Se contrató la construcción del portafolio de proyectos en núcleos activos de deforestación y del portafolio de áreas prioritarias para las compensaciones orientadas a la conservación de la biodiversidad, restauración ecológica y el desarrollo sostenible en jurisdicción de CORPOCESAR.',
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
            'activity_id' => 14282,
            'year' =>2,
            'value' => 1,
            'description' => 'a) Proyecto de 12 hectáreas de unidades agroforestales para comunidades afrodescendientes establecidas en la jurisdicción de la Corporación Autónoma Regional del Cesar. 
        
        b) Se ejecutó el convenio No. 19-7-0-0009-0-2021 del 23 de septiembre de 2021, con la Asociación de Familias Productoras Indígenas SEYNEKUN, para la implementación de una estrategia de fortalecimiento de capacidades empresarial de unidades productivas con participación de comunidades indígenas del municipio de Pueblo Bello – Cesar, que promuevan el uso y aprovechamiento forestal comunitario del bosque de la Sierra Nevada de Santa Marta de manera sostenible.',
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
            'activity_id' => 14283,
            'year' =>2,
            'value' => 4,
            'description' => 'a) Se asistió a reuniones con la alcaldía de Valledupar y otros actores para la promoción de las especies que existen en la ciudad y promover la cultura forestal en el municipio y el departamento del Cesar, incentivando la reducción de la deforestación.
        
        b) Se realizaron reuniones con DRUMOND, Empresas de Teléfonos de Bogotá, Proyecto Solares ISA, entre otras estrategias de conservación y Bosque seco tropical.
        ',
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
            'activity_id' => 14284,
            'year' =>2,
            'value' => 30,
            'description' => 'En el primer semestre de 2021, se informó del registro de 12 empresas de las cuales  6  no reposa información de los antecedentes y reporte del registro en la entidad según la revisión documental (Omaira Pino Galvis, TUREDEZ SAS, Maderas el Brasil, Muebles el Edén, Taller de pintura CHARD, Pavajeau Urbina y la empresa MADERAS COLOMBIA DE VALLEDUPAR SAS se encuentra liquidadas. Por lo anterior, sólo se registraron debidamente 5 empresas.
        
        En el segundo semestre de 2021 se inscribieron 6 empresas nuevas: Maderas el Jordán, El Campano,  Maderas el Caribe, Diseños Aguilar, el Zanjon, Maderas la 44 Y Maderas Colombianas S.A.S Para un total de 12 empresas registradas de las 12 identificadas.
        ',
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
            'activity_id' => 14284,
            'year' =>2,
            'value' => 2,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14285,
            'year' =>2,
            'value' => 1,
            'description' => 'Se ejecutó Convenio N° 19-7-0009-0-2021, Aunar esfuerzos técnicos, administrativos y Financieros para la implementación de una estrategia de fortalecimiento de capacidades empresariales de unidades productivas con participación de comunidades indígenas del Mpio de Pueblo Bello - Cesar que promuevan el uso y aprovechamiento forestal comunitario del Bosque de la Sierra Nevada de Santa Marta de manera sostenible',
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
            'activity_id' => 14286,
            'year' =>2,
            'value' => 0,
            'description' => 'Se realizó visita de verificación a 9 empresas que solicitaron reconocimiento, las cuales no cumplieron con los requisitos mínimos de Ley.',
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
            'activity_id' => 14287,
            'year' =>2,
            'value' => 4,
            'description' => 'Se realizaron 4 operativos en las siguientes fechas: 26 de marzo de 2021 Puesto de Control Los Cauchos salida a Bosconia, 09 de junio de 2021 Puesto de Control El Doral; Vía Aguachica San Martín, Municipio de Aguachica - Cesar, 19 de agosto de 2021 Puesto de Control Vía Codazzi - Casacará, Municipio de Codazzi, Cesar, y 13 de octubre de 2021 en el retén de Los Cauchos de Valledupar.',
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
            'activity_id' => 14288,
            'year' =>2,
            'value' => 70,
            'description' => 'En el marco de la Comisión Conjunta CORPOCESAR Y CORPAMAG, y el memorando de entendimiento suscrito entre CORPOCESAR, CORPOMAG Y FUNDACION NATURA proyecto GEF Magdalena - Cauca, se desarrollaron acciones orientadas a la realización de las fases de preparación, aprestamiento en su totalidad y se avanzó en un 70% en las fases de formulación y de Ordenamiento (zonificación) componente estratégico del citado PM. 
        
        Se realizaron con alcaldías, AUNAP, gobernación, contactos locales 5 mesas de trabajo de manera presencial, además se realizaron 6 reuniones internas, en el marco de dicho proceso, con CORPOMAG, CORPOCESAR y Fundación Natura.
        ',
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
            'activity_id' => 14289,
            'year' =>2,
            'value' => 2,
            'description' => 'a) Se realizaron reuniones CIDEAM Chimichagua y Tamalameque enfoque Cultura del agua y Manejo Residuos Sólidos, PM DRMI CCZ. 
        b) Se suscribió el contrato de obra 172 de 2021 con UT NATURA VIDA 2022, con objeto: Implementación de estrategias para la conservación, uso sostenible de la biodiversidad y restauración de los servicios ecosistémicos del complejo cenagoso de Zapatosa, en el municipio de Chimichagua, departamento del Cesar.
        
        El cual contempla las siguientes acciones: 
        
        a) Aislamiento de 250 hectáreas de áreas de importancia estratégicas para la restauración espontanea (pasiva). Establecimiento de 120 hectáreas de sistemas agroforestales.
        b) Aislamiento de 120 hectáreas para sistemas agroforestales. realización de 10 talleres de socialización, capacitación y sensibilización ambiental dirigidos a los beneficiarios del proyecto, dicho contrato se encuentra en ejecucion,
        c)  En el marco del convenio MADS y la WWF, se desarrolló el proceso entre CORPAMAG, CORPOCESAR Y WWF, para la aplicación de la herramienta de Efectividad y Manejo del Área Protegida EMAP DRMI CCZ, las cuales de realizaron a través de 3 reuniones virtuales. 
        ',
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
            'activity_id' => 14290,
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
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14291,
            'year' =>2,
            'value' => 2,
            'description' => '*En el marco del convenio MADS y la WWF, se desarrollaron procesos con CORPOCESAR y otros actores mediante reuniones virtuales y presenciales para la aplicación de la herramienta de efectividad y manejo de las áreas protegida EMAP PNR besotes 3 reuniones, EMAP RFPR ceibotes 2 reuniones, EMAP PNR Perijá 4 reuniones y EMAP RFPN caño Alonso 2 reuniones.   
                                                                                                                                                                                                                                                                                                                                                                                                                                                           - PNR Serrania del perija: Se contruyeron estufas ecológicas en los municipios de La Paz, Manaure y Codazzi, pertenencientes al PNR Perijá.',
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
            'activity_id' => 14292,
            'year' =>2,
            'value' => 0,
            'description' => 'Esta acción se tiene prevista realizarla durante  el periodo 2022 - 2023, mediante el desarrollo del proceso para la declaratoria de un área en la parte media y alta de la serranía del Perijá, en jurisdicción de los municipios de Becerril y La Jagua de Ibirico - Cesar, un área aproximada a las 20.000 Hectáreas, además se ha estado en conversación con la administración municipal de San Martin - Cesar, la cual está interesada en elevar  a una  categoría de área de protección, la parte alta de la cuenca de la quebrada Torcoroma, fuente surtidora del acueducto de la cabecera municipal.',
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
            'activity_id' => 14293,
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
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14294,
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
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14295,
            'year' =>2,
            'value' => 2,
            'description' => 'Se suscribió el convenio marco No 001 entre las Autoridades Ambientales del Caribe Colombiano y se avanza en la ejecución del acuerdo específico No 003 con la CRA en el marco de la mesa subregional de Caribe Colombiano SIRAP Caribe, en el cual se apoyó la creación del SILAP Manaure mediante el acuerdo 014 de 2020 que contempla y tiene previsto apoyar la creación de los SILAP de los municipios de Agustín Codazzi y La Paz.',
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
            'activity_id' => 14296,
            'year' =>2,
            'value' => 2,
            'description' => 'Se realizaron acciones para la implementación del Plan de Acción Regional de lucha contra la desertificación y la sequía, y el manejo del bosque seco tropical en las cuencas de los ríos Garupal y Diluvio de los municipios de Valledupar y el Copey Cesar, de acuerdo a los alcances y especificaciones técnicas contempladas por CORPOCESAR. 
        
        Se ejecutó el convenio de asociación No.008 del 23 de noviembre de 2020 con la fundación CARBOANDES para el manejo del bosque seco en el municipio de Becerril
        ',
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
            'activity_id' => 14297,
            'year' =>2,
            'value' => 1,
            'description' => 'a) En ejecucion el Plan de Manejo ambiental del humedal de la ciénaga del Cristo en Tamalameque Cesar.
        
        b) Se desarrollaron acciones de destaponamiento de caños en los municipios de Tamalameque y Chimichagua.
        ',
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
            'activity_id' => 14298,
            'year' =>2,
            'value' => 1,
            'description' => 'Se está realizando evaluación a todos los procesos del CAVRFFS y se encuentra en ejecución el convenio con ORNIAT para la operación del CAVRFFS ',
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
            'activity_id' => 14299,
            'year' =>2,
            'value' => 2,
            'description' => 'a) Se desarrollaron acciones del Plan de Manejo del conflicto oso andino-humano en el parque regional serranía del Perijá (zona de paramos) 
        b) Se está implementando el plan de manejo del conflicto felino - humano con programa de educación ambiental a las comunidades de la vereda la montaña corregimiento de Guaymaral municipio de La Paz, zona de influencia en presencia de felinos.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14300,
            'year' =>2,
            'value' => 1,
            'description' => 'Se está ejecutando el Plan de Manejo de Control del Caracol Africano (Achatina Fulica) en diferentes municipios del departamento del Cesar (Manaure, La Paz, Valledupar entre otros) especie invasora destructora de cultivos agrícolas y trasmisora de enfermedades en los seres humanos; se realizan jornadas educativas, demostrativas para que la ciudadanía aprenda el manejo y control de la especie invasora anteriormente mencionada y así la comunidad pueda continuar con su recolección manual y CORPOCESAR con su disposición final',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14301,
            'year' =>2,
            'value' => 1,
            'description' => 'a) Se avanzó con la fase de acciones previas que comprende la consulta al Ministerio del Interior sobre la procedencia o no de la consulta previa con comunidades étnicas,
        b) Se certificó a través de la Resolución ST – 0481, la presencia de las comunidades étnicas de la SNSM y Yukpa. 
        c) Se avanzó en la formulación del proyecto para la elaboración del POMCA del río Medio Cesar.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14302,
            'year' =>2,
            'value' => 11,
            'description' => 'Se realizaron acciones:
        
        a) Destaponamiento de caños y ciénagas
        b) Monitoreo de agua y modelación hidráulica, en el complejo cenagoso de Zapatosa.
        c) Monitoreo eco hidrológicos en la Ciénaga de Zapatosa
        d) Acotamiento de ronda hídrica del río Guatapurí
        e) Instalación y puesta en marcha de una estación hidrometeorológica en la parte baja de la cuenca del río Guatapurí
        f) Campañas de sensibilización y concientización sobre el aprovechamiento de los recursos naturales de los POMCAs
        g) Estructuración de un proyecto piloto para la implementación de PSA en la cuenca del río Guatapurí
        h) Se definieron áreas estratégicas para la conservación del recurso hídrico en el área de los POMCAS
        i) Se avanza en la formulación del PM del Distrito regional de manejo integrado del rio bajo Ciénaga Zapatosa
        j) se avanza en la reforestación de la cuenca del rio Magiriaimo
        k) Instalación de estufas ecológicas en jurisdicción de los POMCA Chiriaimo - Manaure y Magiriaimo.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14303,
            'year' =>2,
            'value' => 8,
            'description' => 'Se acopia información de las acciones que se vienen desarrollando en el proceso de la ejecución de los programas y proyectos que quedaron establecidos en la fase 4 de los POMCAS adoptados.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14304,
            'year' =>2,
            'value' => 1,
            'description' => 'En proceso de formulación el PMA de la microcuenca Singagarè, se surtió la fase de Aprestamiento y se avanza en el diagnóstico. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14305,
            'year' =>2,
            'value' => 1,
            'description' => 'Se ejecutó el Plan de Manejo de la Microcuenca quebrada Cuaré, ubicada en el municipio de La Gloria - Cesar, el cual se adoptó por CORPOCESAR mediante Resolución N° 0065 del 13 de febrero de 2019, se realizaron (reforestación y construcción de estufas eco eficientes). Además se adelantaron jornadas de capacitación y educación ambiental con pescadores en el municipio de La Gloria.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14306,
            'year' =>2,
            'value' => 2,
            'description' => 'Se avanzó con la realización de la primera y segunda jornada de actualización del inventario de puntos de manifestación de aguas subterráneas, en los municipios de Agustín Codazzi, Becerril del Campo y La Jagua de Ibirico, entre el 11 y el 17 de mayo de 2021 (116), y los días 01 al 04 de septiembre de 2021 (12), alcanzando la cifra de (128) puntos de agua caracterizados. Se levantó información sobre la tenencia del predio en que se ubica cada punto de manifestación de aguas subterráneas, las propiedades físicas del punto, el régimen de bombeo, el uso del agua y el diagnóstico sanitario de la captación como forma de caracterizar el sistema acuífero Cesar, lo cual está contemplado dentro de los proyectos identificados en el Plan de manejo ambiental del mismo.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14307,
            'year' =>2,
            'value' => 1,
            'description' => 'Del 31 de agosto al 04 de septiembre, se ejecutó una jornada de monitoreo de aguas subterráneas en los 7 piezómetros construidos por la Corporación, en los municipios de La Paz, Becerril, La Jagua de Ibirico, Chiriguaná, El Paso, Astrea, Chimichagua. Esta actividad da continuidad a lo contemplado en la política nacional de gestión integral del recurso hídrico en materia de monitoreo de la oferta hídrica en jurisdicción de la entidad. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14308,
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
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14309,
            'year' =>2,
            'value' => 2,
            'description' => 'Se formuló la resolución de adopción de corrientes hídricas objeto del PORH, y como acción de implementación del PORH del río Cesar, fue instalada una estación automática en la parte baja de la cuenca del río Guatapurí (afluente del río Cesar), en la cual se miden en tiempo real parámetros de calidad del agua tales como Temperatura, Ph, Oxígeno Disuelto, Conductividad Eléctrica.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14310,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizaron los seguimientos a totalidad de los PUEAA habilitados para adelantar seguimientos (167 PUEAA aprobados y con seguimiento)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14310,
            'year' =>2,
            'value' => 80,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14311,
            'year' =>2,
            'value' => 25,
            'description' => 'Se practicaron las visitas semestrales de control y seguimiento a los 25 municipios y visitas de evaluación de modificación a los PSMV de La Paz, San Diego, Valledupar, Pueblo Bello, Becerril, Bosconia, San Martin, San Alberto, González, La Jagua de Ibirico y Agustín Codazzi.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14312,
            'year' =>2,
            'value' => 1,
            'description' => 'La obra de optimización de la PTAR del corregimiento de Chimila se ejecuto en un  100%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14313,
            'year' =>2,
            'value' => 0.3,
            'description' => 'Se realizó el estudio de acotamiento de ronda hídrica del río Guatapurí, con una ejecución del 100% .',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14314,
            'year' =>2,
            'value' => 30,
            'description' => 'Se formuló el proyecto integral denominado: Implementación de acciones integrales para la Recuperación ambiental del Ecosistema Natural Río Cesar, como soporte estratégico para la reactivación económica y el desarrollo social, en jurisdicción del Cesar.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14314,
            'year' =>2,
            'value' => 9,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14315,
            'year' =>2,
            'value' => 1,
            'description' => 'Se conformó la plataforma colaborativa para la cuenca del río Calenturitas con actores públicos y privados a través de la firma de un Acuerdo de Voluntades el 24 de noviembre de 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14315,
            'year' =>2,
            'value' => 0.7,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia103 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14824,
            'year' =>2,
            'value' => 100,
            'description' => 'Se actualizaron las determinantes ambientales en la jurisdicción de CORPOCESAR con apoyo del programa de Riqueza Natural de USAID y MINISTERIO DE MEDIO AMBIENTE, estas fueron adoptadas por medio de la resolución No. 0247 de 24 de mayo de 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia104 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14825,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizó la socialización de las determinantes ambientales a los 25 municipios en la cual se explicó detalladamente su contenido e incorporación en el ordenamiento territorial, toda la información generada, así como la cartografía fue entregada a los municipios que asistieron a estas mesas de trabajo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia105 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14826,
            'year' =>2,
            'value' => 100,
            'description' => ' Se realizo diagnostico del DTS al municipio de Valledupar ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14827,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizó visita de seguimiento y asistencia técnica a los asuntos ambientales concertados en los POT de los 25 municipios',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia107 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14828,
            'year' =>2,
            'value' => 25,
            'description' => 'Se brindó asistencia técnica a los 25 municipios para la incorporación de las determinantes ambientales recientemente actualizadas, en marco del proceso de revisión de sus POT.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14829,
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
            $idevidencia109 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14830,
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
            $idevidencia110 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14831,
            'year' =>2,
            'value' => 100,
            'description' => 'Conforme a las solicitudes recibidas de los entes municipales se suministró toda la información referente a las determinantes ambientales incluyendo su cartografía.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14832,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizó simposio denominado, Planificación Territorial para la Inclusión de las Determinantes Ambientales y Estrategia de Desarrollo Sostenible.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia112 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14833,
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
            $idevidencia113 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14834,
            'year' =>2,
            'value' => 26,
            'description' => 'a) Se realizaron procesos participativos en los municipios de Rio de Oro, La Paz, San Martin, Tamalameque; Agustín Codazzi, Chimichagua, San Alberto y La Jagua de Ibirico a través de comités técnicos interinstitucionales de educación ambiental municipal CIDEAM.
        b) En la ciudad de Valledupar se realizaron reuniones con la veeduría ciudadana, conversatorios con ediles de las comunas 1 y 2 de la ciudad.
        c) Reuniones COTSA departamental, con los CMGRD de los municipios de Pailitas y Agustín Codazzi, y mesas ambientales en La Paz y San Diego. 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia114 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14835,
            'year' =>2,
            'value' => 2,
            'description' => 'Se realizó jornadas de arborización y capacitación a la comunidad afrodescendiente de Guacoche y Los Venados en el municipio de Valledupar.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia115 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14836,
            'year' =>2,
            'value' => 21,
            'description' => 'a) Se realizaron procesos participativos en los municipios de Rio de Oro, La Paz, San Martin, Tamalameque; Agustín Codazzi, Chimichagua, San Alberto y La Jagua de Ibirico a través de comités técnicos interinstitucionales de educación ambiental municipal CIDEAM.
        b) En la ciudad de Valledupar se realizaron reuniones con la veeduría ciudadana, conversatorios con ediles de las comunas 1 y 2 de la ciudad.
        c) Reuniones COTSA departamental, CMGRD de los municipios de Pailitas y Agustín Codazzi, y mesas ambientales en La Paz y San Diego
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia116 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14837,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizó apoyo operativo a jóvenes afrodescendientes en la zona norte y sur municipio de Valledupar, Foros virtuales con jóvenes Afros, reuniones virtuales con jóvenes emprendedores del municipio de La Paz.
        
        Se realizó el primer encuentro con jóvenes resilientes del Área Metropolitana y Talleres sobre educación ambiental a 80 jóvenes',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia117 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14838,
            'year' =>2,
            'value' => 70,
            'description' => 'Se realizó intervención con jóvenes afrodescendientes de la zona norte y sur municipio de Valledupar y estudiantes PRAES en fase de proyección, profundización y exploración, estrategias dinamizadoras lúdicas con 100 estudiantes de la Instituciones Educativas Francisco Molina Sánchez, INSPECAM, Casimiro Raúl Maestre, José Celestino Mutis, en la ciudad de Valledupar, Ciro Pupo Martínez, Municipio de La Paz, Normal Superior Inmaculada, Municipio de Manaure, Mogola Hernández Pardo, Municipio de Pueblo Bello, Álvaro Araujo Noguera, municipio de Astrea, COLCARMEN,  Municipio de Aguachica y Monte Líbano municipio El Copey.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia118 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14839,
            'year' =>2,
            'value' => 2,
            'description' => 'Se realizaron reuniones de trabajo con la Universidad Nacional Abierta y a Distancia, Universidad Popular del Cesar - CORPOCESAR y SIRAP CARIBE, para la concertación de acciones de investigación socio ambientales en áreas protegidas y reunión de socialización de estrategias del PNEA.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia119 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14840,
            'year' =>2,
            'value' => 25,
            'description' => 'a) Se realizaron reuniones CIDEAM en los municipios de Rio de Oro, La Paz, San Martin, Tamalameque; Agustín Codazzi, Chimichagua, González, San Alberto y La Jagua de Ibirico 
        b) 2 mesas de trabajo construcción PEAM
        c) Mesa de trabajo PEAM González
        d) Curso de asesoría actores CIDEAM para construcción de Política Pública Municipal de Educación Ambiental. 
        e) Primer, segundo, tercero y Cuarto Foro Actores CIDEAM. 
        f) Reunión de Socialización estrategia de cualificación actores CIDEA para construcción PEAM. Actividades de formación para la dinamización de CIDEAM e implementación del PNEA 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia120 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14841,
            'year' =>2,
            'value' => 170,
            'description' => 'a) Fortalecimiento a actores CIDEAM en los municipios de Rio de Oro, La Paz, San Martin, Tamalameque; Agustín Codazzi, Chimichagua, San Alberto y La Jagua de Ibirico.
        b) Se realizaron 2 Mesas de Trabajo de construcción PEAM
        c) Proceso de formación a Actores CIDEAM
        d) Se realizaron cuatro foros de actores CIDEAM.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia121 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14842,
            'year' =>2,
            'value' => 30,
            'description' => 'a) Se apoyó a través de PROCEDAS cultura del agua y manejo de los residuos sólidos ESP y entes territoriales a través de los CIDEAM. 
        b) Se realizó foro en Manejo de residuos sólidos y cultura del agua. 
        c) Lineamientos para la gestión proceda E.S.P.
        d) Se realizaron reuniones, comité coordinador PGIRS Valledupar, mesa regional economía circular MREC, PROCEDA –MADS -Fundación Capacitar-CORPOCESAR y RECICLAJAGUA. 
        e) Se realizaron visitas a puntos críticos RS y talleres trasformación RS y cultura del agua en Chimichagua en área urbana y rural.
        f) Se realizaron capacitaciones virtuales al voluntariado ambiental Club de Leones.
        g) Se dictaron talleres en manualidades con RS a madres UCA 450 años ICBF, en lineamientos para la construcción de PROCEDAS con actores institucionales y comunitarios.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia122 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14843,
            'year' =>2,
            'value' => 50,
            'description' => 'a) Se realizaron jornadas educativas asincrónicas.
        b) Se realizaron foros sobre conceptualización, contextualización y proyección fases PRAES, proyección, profundización y exploración. PRAE Y REDEPRAE.
        c) Primer y segundo encuentro virtual PRAE PRODECO.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia123 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14844,
            'year' =>2,
            'value' => 100,
            'description' => '
        a) Se apoyaron proyectos ambientales escolares y planes de educación ambiental municipal y departamental con enfoque cambio climático y gestión del riesgo. 
        b) Se realizaron reuniones de trabajo con el fondo de acción, áreas protegidas, CMGRD Pailitas y Agustín Codazzi y proceso de sistematización de PRAES
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia124 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14845,
            'year' =>2,
            'value' => 2,
            'description' => 'Se apoyó a:
        
        a) Asociación Comunitaria de Mujeres Artesanas de la vereda Los Antiguos, municipio de Pueblo Bello Cesar – ASOCAMAVAPB
        b) Asociación de Turismo Comunitario de Pueblo Bello Cesar- ATURISCOPBC.
        c) Agrofruver (Pueblo Bello).
        d) Comunidad afrodescendiente de Guacoche
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia125 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14846,
            'year' =>2,
            'value' => 1,
            'description' => 'Se implementó la catedra online en la página web de la Corporación, Banner cambio climático página CORPOCESAR',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia126 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14847,
            'year' =>2,
            'value' => 50,
            'description' => 'a) Reuniones CIDEAM Chimichagua y Tamalameque enfoque Cultura del agua y Manejo Residuos Sólidos.
        b) Reuniones virtuales revisión PM DRMI CCZ con Fundación Natura CORPOCESAR-CORPAMAG. 
        c) Mesa de trabajo virtual, Ecosistemas Dulce Acuícolas CCZ. 
        d) Reuniones virtuales APROCOGERZA.
        e) Visitas puntos críticos RS y talleres de trasformación RS y Cultura del Agua en Chimichagua y Chiriguana
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia127 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14848,
            'year' =>2,
            'value' => 1,
            'description' => 'a) Se contrataron profesionales de apoyo para el cobro persuasivo y seguimiento a los procesos financieros y se les asigno la cartera que se encuentra vencida y que corresponde a la gestionada por DATACRÉDITO en la vigencia 2020, esta cartera es enviada a la Oficina Jurídica para iniciar el cobro coactivo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia128 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14849,
            'year' =>2,
            'value' => 2,
            'description' => 'Se realizó la consulta al Ministerio de Ambiente y Desarrollo Sostenible y a ASOCARS, donde esta última conceptuó lo siguiente:
        
        a. Impuesto al Carbono, creado según la Ley 1819 de 2016, dicho impuesto es recaudado por la DIAN y el 25% del recaudo de dicho impuesto será destinado al sector de ambiente, el cual posteriormente debe ser reglamentado por el Minambiente y definir cómo será la asignación de dichos recursos a las Corporaciones Autónomas Regionales. 
        b. Porcentaje del peaje recaudado por CORMAGDALENA, éste fue creado por medio de una Ley específicamente para esa Corporación, debido a una fractura del ecosistema que se compensa con este recaudo.
        c. Impuesto de timbre de vehículo departamental, el cual según la Ley 99 de 1993 en su artículo 46 numeral 6, se destinaba el 10% a las corporaciones, éste se encuentra sin vigencia según lo expresado por ASOCARS.
        d. Ingresos por las fuentes móviles, de las cuales no hay un marco normativo para cobrarlo y que en diferentes ocasiones han tratado de construir una norma, pero que a la fecha no se ha podido regular. 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia129 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14850,
            'year' =>2,
            'value' => 80,
            'description' => 'La actualización de la base de datos se realizó de manera continua y se liquidó la TUA causada en el año 2020.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia130 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14850,
            'year' =>2,
            'value' => 10,
            'description' => 'Se liquidó la TUA causada en el año 2020.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia131 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14851,
            'year' =>2,
            'value' => 50,
            'description' => 'Se proyectó a través del presupuesto el ingreso de la Tasa Retributiva durante la vigencia 2021, el cual corresponde a $983.000.000 y se pone en ejecución las estrategias diseñadas para el recaudo y recuperación de cartera, partiendo de la liquidación generada desde la Coordinación GIT para la gestión de saneamiento ambiental y control de vertimientos. 
        
        Desde el área de Planeación se controla la asignación de recursos que apoyen la actividad., 3203.01.03 Control, seguimiento y apoyo a implementación de los PSMV y PUEAA aprobados por la Corporación e implementación de acciones para el uso eficiente y descontaminación del recurso hídrico en el dpto. del Cesar. (armonización con proyecto 3201.02)
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia132 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14852,
            'year' =>2,
            'value' => 100,
            'description' => 'Se celebró el contrato No. 19-6-0124-0-2021 cuyo objeto es soporte técnico, mantenimiento a distancia e implementación de los módulos web del sistema de información administrativo y financiero PCT INTERPRISE vigencia 2021, para la facturación y cartera de la tasa por utilización de agua (TUA), tasa retributiva (TR), tasa por aprovechamiento forestal, evaluación, seguimiento ambiental y demás gestiones ambientales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia133 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14853,
            'year' =>2,
            'value' => 70,
            'description' => 'La ejecución de los programas de inversión 3202. Conservación de la biodiversidad y los servicios ecosistémicos y 3204. gestíon del conocimiento e información ambiental al finalizar la vigencia fue del 70% con respecto a lo programado.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia134 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14854,
            'year' =>2,
            'value' => 100,
            'description' => 'En cuanto a la Participación en los espacios de consulta pública de los proyectos de reglamentación de los instrumentos económicos, financieros y de mercado se participaron en las mesas de trabajo convocadas por el MADS y ASOCAR´s en las cuales se abordaron temas como la actualización de los clasificadores presupuestales, armonización del catalago presupuestal de conformidad a los lineamientos establecidos por el DNP y a las circulares emitidas por la CGR.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia135 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14855,
            'year' =>2,
            'value' => 1,
            'description' => 'Se diseñó el SGA bajo la norma NTC ISO 14001:2015',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia136 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14855,
            'year' =>2,
            'value' => 0.2,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia137 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14856,
            'year' =>2,
            'value' => 0,
            'description' => 'Se implementó el SGA en un 28%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia138 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14857,
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
            $idevidencia139 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14858,
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
            $idevidencia140 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14859,
            'year' =>2,
            'value' => 45,
            'description' => 'a) El laboratorio se encuentra operativo, desarrollando las acciones de monitoreo del recurso hídrico de aguas superficiales y subterráneas conforme al cronograma de monitoreo.
        
        b) Se solicitó visita para el seguimiento y extensión de la acreditación en las matrices de Agua y Aire al IDEAM quien asigno el radicado número 20219910030762 del 31 de mayo de 2021, se está a la espera de la asignación de fecha de la visita.
        
        c) Se recibió la donación de 3 multiparámetros por parte de FUPAC y la AGENCIA NACIONAL DE HIDROCARBUROS 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia141 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14860,
            'year' =>2,
            'value' => 5,
            'description' => 'a) Se adelantó mesa de trabajo con la Subdirección de Planeación, Subdirección de Gestión Ambiental, Oficina de Control Interno, y Calidad, para evaluar las estrategias y procedimientos para realizar el cobro de los servicios que prestara el laboratorio a los clientes internos y externos. Se espera directrices para diseñar y proponer las estrategias respectivas que permitan ofrecer, cobrar y canalizar los recursos de los servicios.
        
        b) Se establecieron y diligenciaron formatos para establecer APU de los posibles servicios a vender.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia142 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14861,
            'year' =>2,
            'value' => 100,
            'description' => 'CALIDAD. Se realizó la actualización de:
        
        a) Direccionamiento Estratégico de la Corporación
        b) Procedimientos de Gestión de Compras y Contratación
        c) Procedimientos de Gestión de Recursos Físicos
        d) Mapa de Riesgos e indicadores de Gestión
        e) Documentos (procedimientos, formatos, manuales y guías) 
        f) Gestión de Laboratorio Ambiental
        g) Cambio de Codificación de los procesos de Gestión Jurídica, Gestión de Talento Humano, Gestión de Tics.
        h) Se atendió auditoria externa de INCOTEC logrando la certificación del Sistema de Gestión de CORPOCESAR, auditoria interna de la CORPORACION y se atendieron los requerimientos de las observaciones a dichas auditorias.
        
        MIPG: Durante el segundo semestre del año se realizó la actualización de mapas de riesgo de acuerdo a la política del Modelo Integrado de Planeación y Gestión MIPG y lineamientos del Departamento Administrativo de la Función Pública DAFP integrándolos al Sistemas de Gestión de la Corporación. Se realizaron capacitaciones y se construyó la política de participación ciudadana  
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia143 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14862,
            'year' =>2,
            'value' => 1,
            'description' => '
        Se cumplió con el Plan de Auditoria Vigencia 2021, el cual fue desarrollado con el apoyo de 3 contratistas y 2 funcionarios 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia144 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14863,
            'year' =>2,
            'value' => 1,
            'description' => 'El banco de proyectos operó con el apoyo de un funcionario de planta y 3 contratistas, a través de los cuales se han gestionado, formulado, viabilizado y priorizado varios proyectos de inversión ante el Fondo Nacional Ambiental, Fondo de Compensación Ambiental y con recursos de asignaciones directas del SGR. 
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia145 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14864,
            'year' =>2,
            'value' => 1,
            'description' => 'Segundo semestre: No se realizaron contratos de optimización física en la sede principal o seccionales.  
        
        Primer semestre:  Contrato de Mantenimiento de plazoleta, mantenimiento de aires acondicionados.                                                                                                         
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia146 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14865,
            'year' =>2,
            'value' => 1,
            'description' => 'Segundo semestre, No se realizaron adecuaciones y dotaciones. 
        
        Primer semestre. 
        
        a) Seccional Curumaní: en esta seccional existe un contrato de comodato en ejecución. 
        b) Seccional La Jagua del Pilar: nos trasladamos a unas nuevas instalaciones, esta se adapta a las necesidades de la Corporación. Existe un contrato de arrendamiento.  
        c) Seccional Chimichagua: se encuentra bajo contrato de arrendamiento  
        d) Seccional Aguachica: esta edificación es de propiedad de la Entidad.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia147 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14866,
            'year' =>2,
            'value' => 94,
            'description' => 'Plan de Capacitación: 88% 
        
        a) Las capacitaciones desarrolladas. 
        
        - Actualización en Normatividad Presupuestal
        - Catálogo de Distribución Presupuestal
        - Derecho De Petición
        - Gestión Documental
        - Funcionamiento del Nuevo Sistema de Regalías
        - Sistema Integrado de Gestión
        - Modelo Integrado de Planeación y Gestión
        - Decreto 1072 de 2015 y Resolución 0312 de 2019
        - Sistema de Gestión de la Seguridad y Salud en el Trabajo
        - Fundamentos de Administración Pública
        - Funciones Generales de las Corporaciones Autónomas Regionales
        - Formulación de Proyectos Bajo la Metodología General Ajustada
        - Marco General del, Funcionamiento del Estado
        - Participación Ciudadana
        - Transparencia y Atención a la Ciudadanía Ley 1712 de 2014
        - Ley de Transparencia y del Derecho de Acceso a la Información Pública
        - Código de Integridad, Rol del Servidor Público y Generación de Valor Público.
           
        b) Recorrido de campo con funcionarios y contratistas, instalaciones y áreas protegidas de la empresa minera DRUMMOND LTDA
        Plan de Bienestar: 100%  
        
        Se realizó, celebración del cumpleaños de la Corporación, día de la mujer, día del hombre y día del servidor público, actividades incluidas en el Plan de Bienestar Social.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia148 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14867,
            'year' =>2,
            'value' => 100,
            'description' => 'Se cumplió con el contrato de seguro de vida y bienes de Corpocesar, donde se aseguró en su totalidad al personal de planta, propiedades y bienes de la entidad. Dicho seguro se realizó con Seguros Generales Suramericana S.A por un valor de $173.698.010,  firmado el 11 de noviembre de 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia149 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14868,
            'year' =>2,
            'value' => 53,
            'description' => 'a) La Ventanilla Única presencial se encuentra funcionando normalmente. 
        b) Proceso VITAL, en el mes de octubre se realizó caracterización de los tramites de Concesión de Recursos Hídrico Subterráneo, Registro RESPEL y Aprovechamiento Forestal de Arboles Aislados con el fin de iniciar la implementación de los procesos en VITAL.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia150 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14869,
            'year' =>2,
            'value' => 70,
            'description' => 'Se actualizaron las TRD, fueron convalidadas por el AGN y adoptadas por la Corporación mediante Resolución No 0459 de septiembre 21 de 2,021. Faltan las TDV, la oficina jurídica debe definir el proceso a seguir con el incumplimiento del contratista.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia151 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14870,
            'year' =>2,
            'value' => 0,
            'description' => 'La entidad no realizó compras publicas sostenibles. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia152 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14871,
            'year' =>2,
            'value' => 1,
            'description' => 'Ell dia 02/08/2021 Se realizo seguimiento a la estrategia trazada en la reunion del 06 de marzo de 2021, donde se realizó socialización de los procedimientos de la Coordinación para la Gestión del Seguimiento Ambiental; se generaron las estrategias para el desarrollo de las actividades de seguimiento y control ambiental y se determinaron los criterios para la escogencia de proyectos objeto de seguimiento y control ambiental para la vigencia 2021.priorizando los proyectos que hacen parte de los indicadores minimos de gestion ambiental incorporados en la resolucion 667 de 2016.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia153 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14872,
            'year' =>2,
            'value' => 100,
            'description' => 'Se programaron  y ejecutaron 98 visitas de seguimiento ambiental, discriminadas asi: Mineras 68, RESPEL 6, Electrico 3. portuario 4, Lacteos2, pamilcultor 2, Relleno Sanitario 4, Estaciones de servicios 5, obras civiles 4.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia154 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14873,
            'year' =>2,
            'value' => 100,
            'description' => 'Se programaron  y ejecutaron 98 visitas de seguimiento ambiental, discriminadas asi: Mineras 68, RESPEL 6, Electrico 3. portuario 4, Lacteos2, pamilcultor 2, Relleno Sanitario 4, Estaciones de servicios 5, obras civiles 4.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia155 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14874,
            'year' =>2,
            'value' => 10,
            'description' => 'Se tiene activo el proceso de salvoconducto y se está en proceso de implementación de quejas y denuncias ambientales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia156 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14875,
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
            $idevidencia157 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14876,
            'year' =>2,
            'value' => 0,
            'description' => 'Se avanzo 10% en la implementacion  del sistema  para lo cual  se realizo la contratacion de servicios tecnologicos  profesionales a traves del cual se brindo el  soporte tecnologico para  la puesta en marcha del sistema,  avanzando en la caracterizacion de los tramites de Inscripcion RESPEL, Concesion de Aguas Subterraneas y Aprovechamiento forestal, para implementacion en la plataforma Vital. sin embargo el sistema no alcanzo a fortalecerce en un 100%   para su implemntacion.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia158 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14877,
            'year' =>2,
            'value' => 0,
            'description' => 'Se consolida un avance del 90% de la base de datos de los procesos sancionatorios de la oficina jurídica, con un valor pendiente del 10% correspondiente, al estado de los procesos de la vigencia con corte al  31 de diciembre de 2021. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia159 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14878,
            'year' =>2,
            'value' => 2,
            'description' => 'a) Se ejecutaron 10 hectáreas de unidades agroforestales con frutales, mango, cultivo de patilla y arboles maderables, con su correspondiente aislamiento y facilidades de riego, se desarrolla en la comunidad indígena de Tezhumque, perteneciente al pueblo Wiwa. 
        
        b) Se  encuentra suspendido el convenio No 19-7-0002-0-2021, con la Fundación Sillas Azules, cuyo objeto es: Aunar esfuerzos técnicos, administrativos y financieros para el establecimiento de 16 hectáreas de unidades agroforestales para comunidades afrodescendientes e indígenas establecidas en la jurisdicción de la Corporación Autónoma Regional del Cesar.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia160 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14879,
            'year' =>2,
            'value' => 2,
            'description' => '
        Se  realizaron dos talleres de reflexión intercultural como escenario de gobernanza ambiental territorial en territorio del pueblo Kankuamo, esto en el marco del convenio N° 19-7-008-0-2021  suscrito con el resguardo Kankuamo, 
        
        De igual manera se realizaron dos (2) encuentros con las autoridades y mayores del pueblo kankuamo para la implementación entre otras de esta actividad  mediante la conformación y operación de una mesa de gobernanza ambiental (inicialmente autoridad indígena y autoridad ambiental) con su propio reglamento operativo, con miras a ejercer acciones conjuntas de seguimiento al estado ambiental del territorio
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia161 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14880,
            'year' =>2,
            'value' => 1,
            'description' => 'Se  encuentra suspendido con un avance de 78.55%  el contrato convenio No 19-7-0002-0-2021, con la Fundación Silla Azules, cuyo objeto es: Aunar esfuerzos técnicos, administrativos y financieros para el establecimiento de 16 hectáreas de unidades agroforestales para comunidades afrodescendientes e indígenas establecidas en la jurisdicción de la Corporación Autónoma Regional Del Cesar.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia162 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14881,
            'year' =>2,
            'value' => 0,
            'description' => 'Se tiene proyectada la suscripción de un convenio con el resguardo Iroka para realizar un diagnóstico para la identificación, diseño y costeo de sistemas de abastecimiento de agua en comunidades del pueblo Yukpa como base para gestionar recursos para su implementación. 
        
        Con este objeto se ofició nuevamente al resguardo IROKA del pueblo Yukpa los días 3 y 23 de junio de 2021, para realizar reunión con sus autoridades tradicionales para dialogar sobre la posibilidad de concertar la ejecución de las actividades 3299.04.05 y 3299.04.07 del PAI 2020-2023, en el territorio de este pueblo, sin que se haya recibido respuesta a la fecha. Se ha insistido en el relacionamiento con este resguardo debido a que administrativamente es el mejor conformado y presenta experiencia en la ejecución de proyectos con otras entidades y a través de este puede llegarse a la gestión concertada de proyectos con las autoridades de los otros resguardos del pueblo Yukpa.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia163 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14882,
            'year' =>2,
            'value' => 10,
            'description' => 'La Corporación Autónoma Regional del Cesar – CORPOCESAR-, en contexto con las acciones que se desprenden del Plan de Ordenamiento y Manejo de la Cuenca Hidrográfica - Pomcas del Río Guatapurí, adoptado mediante Resolución 0098 del 02 de marzo de 2020, estableció la  ejecución del Proyecto de Acotamiento de la Ronda hídrica del Rio Guatapurí, para lo cual se llevó a cabo el comité de cuencas, para la socialización de dicho proyecto el 19 de abril de 2021, de igual manera, Instalación del mecanismo de coordinación Corpocesar y CTC de la sierra nevada en el marco de los acuerdos del Pomca Río Guatapuri',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia164 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14883,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realización  cuatro talleres para la identificación de oportunidades y necesidades de gestión del cambio climático en territorios étnicos, dentro de la ejecución del convenio N° 19-7-008-0-2021  suscrito con el resguardo Kankuamo.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia165 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14884,
            'year' =>2,
            'value' => 0,
            'description' => 'Se tiene proyectada la suscripción de un convenio con el resguardo Iroka para realizar un diagnóstico para la identificación, diseño y costeo de sistemas de abastecimiento de agua en comunidades del pueblo Yukpa como base para gestionar recursos para su implementación. 
        
        Con este objeto se ofició nuevamente al resguardo IROKA del pueblo Yukpa los días 3 y 23 de junio de 2021, para realizar reunión con sus autoridades tradicionales para dialogar sobre la posibilidad de concertar la ejecución de las actividades 3299.04.05 y 3299.04.07 del PAI 2020-2023, en el territorio de este pueblo, sin que se haya recibido respuesta a la fecha. Se ha insistido en el relacionamiento con este resguardo debido a que administrativamente es el mejor conformado y presenta experiencia en la ejecución de proyectos con otras entidades y a través de este puede llegarse a la gestión concertada de proyectos con las autoridades de los otros resguardos del pueblo Yukpa.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia166 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14885,
            'year' =>2,
            'value' => 3,
            'description' => 'a) Se ejecutaron 10 hectáreas de unidades agroforestales con frutales (mango), cultivo de patilla y arboles maderables, con su correspondiente aislamiento y facilidades de riego. Se desarrolla en la comunidad indígena de Tezhumque, perteneciente al pueblo Wiwa.
        
        b) se encuentra suspendido esperando temporada de lluvia el convenio No 19-7-0002-0-2021 con la Fundación Sillas Azules, cuyo objeto es Aunar esfuerzos técnicos, administrativos y financieros para el establecimiento de 16 hectáreas de unidades agroforestales para comunidades afrodescendientes e indígenas establecidas en la jurisdicción de la Corporación Autónoma Regional Del Cesar  
        
        c) Se ejecutó convenio N° 19-7-008-0-2021 con el resguardo Kankuamo, cuyo objeto es: Aunar esfuerzos técnicos, económicos y/o administrativos para la implementación de actividades ambientales con enfoque diferencial en el territorio ancestral del pueblo indígena Kankuamo en la Sierra Nevada de Santa Marta, departamento del cesar 
        
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia167 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14886,
            'year' =>2,
            'value' => 1,
            'description' => 'Se encuentra suspendido hasta el mes de marzo, esperando temporada de lluvias el convenio No 19-7-0002-0-2021, con la Fundación Sillas Azules, cuyo objeto es Aunar esfuerzos técnicos, administrativos y financieros para el establecimiento de 16 hectáreas de unidades agroforestales para comunidades afrodescendientes e indígenas establecidas en la jurisdicción de la Corporación Autónoma Regional Del Cesar, el cual se encuentra en ejecución',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia168 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14886,
            'year' =>2,
            'value' => 0.5,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia169 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14887,
            'year' =>2,
            'value' => 2,
            'description' => 'Se realizaron dos talleres sobre situaciones de conflictos socio ambientales identificadas, acciones de manejo conjuntas con enfoque diferencial propuestas, dentro de la ejecución del convenio N° 19-7-008-0-2021 suscrito con el resguardo Kankuamo',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia170 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14888,
            'year' =>2,
            'value' => 95,
            'description' => 'Se realizó el PETI, los planes de riesgo y de seguridad de la información, algunos instrumentos de apoyo al proceso del área, gobierno de datos en el proceso de facturación de tasas y servicios ambientales.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia171 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14888,
            'year' =>2,
            'value' => 20,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia172 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14889,
            'year' =>2,
            'value' => 100,
            'description' => 'Se publicaron todos los actos administrativos y la información producida por la entidad, en el portal web institucional, además se cumplió con el indicador ITA de la PGN. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia173 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14890,
            'year' =>2,
            'value' => 80,
            'description' => 'Se atendieron todos los requerimientos informaticos reportados en  la entidad.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia174 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14891,
            'year' =>2,
            'value' => 40,
            'description' => 'a) Se renovaron los contratos de mantenimiento y soporte técnicos de PCT y SIAN. 
        b) Se adquirió el servicio de Gestión de Seguridad de la Información con Movistar que lo componen un Firewall y 80 licencias de antivirus Sophos.
        c) Se aumentó el ancho de banda del servicio de internet dedicado de Movistar y Dialnet.
        d) Se habilitaron 6 Access Point en la sede principal para proporcionar wifi en Administrativa y Financiera, Planeación y Recursos Hídricos, Subdirección Ambiental y el área de Jurídica que cubre las oficinas cercanas y la Dirección General.  
        e) Falta el hosting de la página web y renovación del contrato de la aplicación SGP CAR (Software para las declaraciones de la sobretasa ambiental).
        f) Se contrató el servicio de mensajería web MICROSOFT.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia175 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14892,
            'year' =>2,
            'value' => 40,
            'description' => 'A través de la actividad de monitoreo del recurso hídrico (9.1.2. y 2.4.1.) superficial y subterráneo se avanzó en la consolidación de una red de estaciones de niveles freáticos y caudales líquidos, que constituyen la base de la red hidrometeorológica, a la cual se suma las estaciones disponibles en la zona minera como parte de la red de calidad de aire.          
                             
        Se requiere de la utilización del software ARCGIS por lo cual se suscribió la orden de compra 82795 del 15 de diciembre de 2021 y se adjudicó el proceso de compra de equipos de cómputo que alojaran el software, estos elementos permitirán disponer de una plataforma que facilite la conformación de un sistema de información ambiental para la entidad
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia176 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14893,
            'year' =>2,
            'value' => 1,
            'description' => 'En la página web de la entidad se encuentra publicada la información recolectada en desarrollo del proyecto 
        https://www.corpocesar.gov.co/monitoreo-de-la-oferta-del-recurso-hidrico.html.
         
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia177 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14894,
            'year' =>2,
            'value' => 3,
            'description' => 'a) Se realizaron 3 salidas de campo encaminadas al monitoreo de la oferta del recurso hídrico superficial.
        b) 01 al 07 de julio de 2021 se desarrolló abarcando las corrientes Badillo, Ariguaní, Manaure, Chiriaimo, Magiriaimo, Sicarare, Maracas, Sororia, San Alberto, Torcoroma, Río de Oro, Buturama, Guaduas, Singararé, Honda y San Pedro.
        c) 19 al 23 de octubre de 2021 para aforo de las corrientes Manaure, Chiriaimo, Sicarare, Maracas, Socomba, Sororia, Tucuy, Ariguaní, Ariguanicito, Garupal, y Guatapurí.
        d) 14 al 18 de diciembre de 2021, en las corrientes Manaure, Chiriaimo, Sicarare, Maracas, Sororia, Tucuy, Ariguaní, Ariguanicito, Garupal y Badillo. 
        e) La información se encuentra publicada en la página web de la entidad en el enlace
              https://www.corpocesar.gov.co/monitoreo-de-la-oferta-del-recurso-hidrico.html
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia178 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14895,
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
            $idevidencia179 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14896,
            'year' =>2,
            'value' => 1,
            'description' => 'En la página web de la entidad se encuentra alimentada la información recolectada en desarrollo del proyecto, para que pueda ser consultada por la comunidad en general, en la dirección https://www.corpocesar.gov.co/monitoreo-de-la-oferta-del-recurso-hidrico.html.
        
        Así mismo, se ha publicado información derivada de los estudios que sobre POMCAS, Planes de Manejo de Acuíferos, riesgos naturales, conservación de recursos naturales renovables, información sobre conceptos de variabilidad climática y cambio climático, que dan cuenta de la gestión realizada por la entidad. Se publican en forma diaria los boletines sobre las condiciones hidrometeorológica y eventos de alerta natural para la jurisdicción de CORPOCESAR, desde las coordinaciones de RESPEL y Recursos Hídricos Digitalización de la información para cargue en el SIRH.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia180 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14897,
            'year' =>2,
            'value' => 1,
            'description' => 'Con base en el resultado del informe de gestión anual de la vigencia 2020 se realizó el diligenciamiento de los indicadores del PGAR para evaluar el nivel de cumplimiento de este instrumento',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia181 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14898,
            'year' =>2,
            'value' => 2,
            'description' => 'La Oficina de Comunicaciones, continua con implementando la campaña, #MenosPlásticoMásConciencia, a través de la realización de mensajes reflexivos que permitan disminuir el uso de productos plásticos de un solo uso. 
        
        Se socializaron en los grupos, CorpocesarMeInforma, funcionarios y contratistas de la entidad y en las diferentes en las plataformas digítales de Corpocesar.
        Campañas realizadas/año durante el año 2021: 1) #MenosPlásticoMásConciencia ,2) #CorpocesarEresTúSomosTodos
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia182 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14899,
            'year' =>2,
            'value' => 1,
            'description' => 'Estan implementadas y funcionando las redes sociales de Facebook, Instagram y Twitter para tal fin, a través del Plan de Medios se contrató a un Comunity Manager, durante el segundo semestre se realizaron las publicaciones de 63 post sobre fechas ambientales y eventos de la Corporación.
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia183 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14900,
            'year' =>2,
            'value' => 1,
            'description' => 'Se contrató el Plan de Medios y se ejecutó a satisfacción. (radio, TV y prensa escrita)
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia184 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14901,
            'year' =>2,
            'value' => 100,
            'description' => 'Se participó en todas las mesas de trabajo convocadas por ASOCAR y Ministerio de Medio Ambiente, se han enviado los reportes de IEDI de la vigencia 2020. En el segundo semestre se participó en reuniones convocadas por ASOCAR en referencia a la adopción del sistema CARDINAL.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia185 = DB::getPdo()->lastInsertId();
                
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
