<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCrc2020 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 11075,
            'year' =>1,
            'value' => 100,
            'description' => 'Este producto definió como acción a desarrollar las siguientes:
        Esperanza de Mayo: Articulados con el Proceso Comunitario de Educación Ambiental (PROCEDA) que se venía adelantando, se priorizó con la comunidad del área de influencia de la vereda La Recta, municipio de Mercaderes, el establecimiento de 10 Biohuertos familiares, para lo cual se desarrollo la socialización, capacitación y entrega de insumos.
        Serranía La Vieja Santa Rosa: Se instralaron 30 estufas ecoeficientes, como parte de las acciones contempladas en el Plan de manejo del Área Protegida. Esta actividad se desarrolló con el apoyo de las Juntas de Acción comunal de las veredas El Carmelo, La Soledad, La Marqueza, Cabecera Municipal y Curiaco.',
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
            'activity_id' => 11076,
            'year' =>1,
            'value' => 100,
            'description' => 'No se logró que todas las entidades participantes realizaran los desembolsos y no fue posible contratar la ejecución de lo programado para la vigencia 2020. Así las cosas, dado que la situación de los desembolsos de CORPOAMAZONÍA persistió, la CRC no logró ejecutar los recursos económicos, ni las actividades ni los productos convenidos y en el ejercicio de la presidencia del SIRAP Macizo, convocó dos (2) Comités en los que se discutió, se recomendó  y se tomó la decisión  por todos los convenientes de realizar el Acta de Terminación Anticipada del Convenio Interadministrativo SIRAP MACIZO y realizar la liquidación. 
        Sin embargo, se logró realizar otras actividades para la consecución de las acciones articuladas para el subsistema SIRAPM así:  Atención a la solicitud del MADS respecto a la Reserva de la Biosfera Cinturon Andino, asesorar la planificación y coordinación del SIRAP Macizo, realizar el seguimiento y evaluación de las actividades y compromisos de los comités, elaborar el plan de trabajo y reglamento interno para la comisión conjunta, realizar el seguimiento a los acuerdos y compromisos de las mesas de trabajo desarrolladas, convocar y desarrollar comités y mesas de trabajo con los actores de interés, redactar, difundir, ajustar y suscribir actas, ayudas de memoria, cronogramas, documentos y programación de actividades. 
        La afectación del avance financiero total del proyecto, se debió a que este producto, NO se ejecutaron los recursos proyectados, puesto que en el marco del convenio 292 de 2019 el compromiso fue reintegrar los recursos a las instituciones convenientes, de acuerdo a lo decidido en el Comité Directivo del SIRAP Macizo. Pese a no contar con estos recursos se logró un avance físico del 100% , con el cumplimiento de la totalidad de las actividades previstas para este producto, asumidas a cabalidad por la Corporación. ',
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
            'activity_id' => 11077,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizaron las siguientes acciones:
        * Cuatro (4) talleres de conservación del Zamarrito y otras especies asociadas, con el objetivo de dar a conocer la presencia de una especie amenazada de extinción y sensibilizar en su conservación, estos espacios contaron con 72 asistentes entre Presidentes de Juntas de Acción Comunal, líderes de grupos ambientales y funcionarios de las Administraciones Municipales.
        * Instalación de ocho (8) cámaras fauna en la vereda Santa Clara, corregimiento Santa Clara, municipio de Argelia.
        *Socialización y concertación con las Administraciones Municipales de Argelia y El Tambo, donde se acuerda brindar el material vegetal y semillas de especies forestales por parte de la CRC, para recuperación de áreas de interés ambiental y para el fortalecimiento de viveros municipales. ',
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
            'activity_id' => 11078,
            'year' =>1,
            'value' => 50,
            'description' => 'Se realizaron tres (3) eventos de capacitación a la comunidad del municipio de El Tambo y a la Policía Departamental, en la conservación y manejo de estas especies de flora amenazadas. Por otro lado, no se pudo desarrollar a cabo, puesto que el proceso de compra selección abreviada se declaró desierto, que consistía en la adquisición de 3.770 plántulas de palma de cera.',
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
            'activity_id' => 11079,
            'year' =>1,
            'value' => 100,
            'description' => 'Se ejecutaron 32 actividades  comforme al Plan Estratégico Anual para la Gestión de la Política de Gobernanza Forestal en el territorio.',
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
            'activity_id' => 11080,
            'year' =>1,
            'value' => 100,
            'description' => 'Se implementaron 51 estrategias para la prevención,  control y manejo de las especies invasoras Caracol Africano y Rana toro. Adicionalmente, se elaboró el documento Priorización de acciones en el marco del Plan de Manejo del Caracol gigante, en el cual se priorizaron acciones en coordinación con la Direcciones Territoriales Centro, Norte y Patía.
        Entre las estrategias mas relevantes realizadas se destacan: *Seis (6) charlas de capacitación y concientización presenciales y virtuales sobre manejo y control de las especies invasoras Rana toro (Lithobates catesbeianus) y Caracol gigante africano (Achatina fulica), a la comunidad de los municipios de Puerto Tejada, Bolívar, Popayán y El Tambo, así como a miembros de la Policía Nacional. * Ocho (8) inspecciones de revista para control de vendedores ambulantes de caracol en galerías de los municipios de Patía, Mercaderes, Bolívar Popayán, Santander de Quilichao y El Tambo. *Trece (13) jornadas de control del Caracol gigante africano (Achatina fulica) con recolección y disposición final con enterramiento in situ, en los municipios de Piamonte, Patía, Puerto Tejada, Timbiquí, Guapi y El Tambo. * Siete (7) puestos de control ambiental para prevenir el tráfico ilegal de Caracol gigante en los municipios de Piendamó, Popayán, Santa Rosa, Piendamó, Timbío y Villa Rica. ',
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
            'activity_id' => 11081,
            'year' =>1,
            'value' => 100,
            'description' => 'Se atendieron 326 especímenes de fauna, de los cuales son: 129 aves, 128 mamiferos, y 69 reptiles, dando manejo integral de los ejemplares silvestres ingresados a la CRC con consulta, evaluación clínica, examen físico, evaluación comportamental, diagnóstico diferencial y pronóstico, exámenes de laboratorio, tratamiento médico veterinario, cirugías, cuarentena, alimentación, nutrición, rehabilitación y liberación a su ambiente natural.  
        En cuanto a productos y subproductos de flora, el material decomisado preventivamente corresponde a las especies de Guadua (Guadua angustifolia kunth), Pino pátula (Pinus patula) y Eucalipto (Eucaliptos grandis), equivalente a 110,1 m3 de madera. ',
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
            'activity_id' => 11082,
            'year' =>1,
            'value' => 30,
            'description' => 'Conforme a los Planes de Manejo de Humedales formulados por la Corporación, se logró para esta vigencia un total de 38,5 hectáreas en 16 humedales de los municipios de Mercaderes, Villa Rica, Patía, Cajíbio, Inzá, Sotará y Popayán, con ejecución de acciones consistentes en labores de limpieza, aislamiento, reforestación, señalética y educación ambiental. ',
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
            'activity_id' => 11083,
            'year' =>1,
            'value' => 300,
            'description' => 'Se cumplió la meta de 300 hectáreas, adicionalmente se realizaron 164 hectáreas, para un total de 464 hectáreas con acciones de protección entre áreas de ecosistemas estratégicos, bosque y nacimientos de agua: 
        * Establecimiento de 90 hectáreas en el corregimiento La Uribe en el municipio de El Tambo, mediante el convenio SECOP 1.PCCNT.1507954, suscrito entre la CRC y CORPOFUTURO.  
        *Establecimiento de 22 hectáreas con el Cabildo Mayor del Pueblo Yanaconas mediante el convenio No 226. 
        • Establecimiento de 178 hectáreas en el municipio de Totoró, mediante el convenio 421 de 2020, suscrito entre la CRC y la Administración Municipal de Totoró, distribuidas de la siguiente manera: 65 hectáreas en Restauración Activa, 95 hectáreas en Restauración Pasiva y 16 hectáreas en Corredor Biológico.
        * Entrega de insumos para el establecimiento de 174 hectáreas, actividad coordinada con las Direcciones Territoriales Centro, Patía, Macizo, Norte y Tierradentro. Los municipios donde se entregaron los insumos son: Popayán, Silvia, Sotará, Timbío, Totoró , Cajibío, Púrace, Santander de Quilichao, Caloto, Buenos Aires, Caldono, Corinto, Toribio, Miranda, Florencia, Balboa, Patía, Sucre, San Sebastián, Almaguer, La Vega, La Sierra, Rosas, Inzá y Páez. Los insumos entregados fueron: 346 rollos de alambre, 350 kilos de grapa, 15.224 postes, 21.880 plántulas, 8.752 kilos de abono orgánico, 437,6 kilos de Calfomag y 90,6 kilos de Cebo.
        *Caracterización y viabilización de 33 hectáreas mediante el convenio 533 suscrito entre CRC y MADS en los municipios de Morales, Suarez, El Tambo y Mercaderes. ',
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
            'activity_id' => 11084,
            'year' =>1,
            'value' => 310,
            'description' => 'Se ejecutaron acciones de mantenimiento en 378,8 hectáreas, sobrepasando la meta planificada, de las cuales se realizaron: 276 mediante el proyecto interno y 102,8 a través de los proyectos y convenios C.R.C. Dichas áreas fueron establecidas en la vigencia 2019, en 22 municipios del departamento del Cauca, como son: Morales, Inzá, Totoró, La Vega, Almaguer, Bolívar, Buenos Aires, Cajibío, Caloto, Caldono, La Sierra, Miranda, Patía, Piendamó, San Sebastián, Santander de Quilichao, Silvia, Suárez, Sucre, El Tambo y Timbío.',
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
            'activity_id' => 11085,
            'year' =>1,
            'value' => 0,
            'description' => 'Producto programado para iniciar su ejecución física en el año 2021. Sin embargo, este proyecto es financiado por una fuente de fondos especiales, que no permite comprometer vigencias futuras, haciendo que la ejecución financiera se reporte al 100% para el 2020. ',
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
            'activity_id' => 11086,
            'year' =>1,
            'value' => 0,
            'description' => 'Producto programado para iniciar su ejecución física en el año 2021. Sin embargo, este proyecto es financiado por una fuente de fondos especiales, que no permite comprometer vigencias futuras, haciendo que la ejecución financiera se reporte al 100% para el 2020. ',
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
            'activity_id' => 11087,
            'year' =>1,
            'value' => 22,
            'description' => 'En coordinación con el proyecto 5.1.1. de Grupos Etnicos, se logró establecer 4 hectáreas en parcelas agroforestales, como estrategia para la recuperación de suelos con el Consejo Comunitario de Comunidades Negras “Río Las Botas” de la zona centro del municipio de El Tambo. .',
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
            'activity_id' => 11088,
            'year' =>1,
            'value' => 1000,
            'description' => 'Se realizaron 1228 actuaciones de protección y vigilancia en el ejercicio de la autoridad ambiental sobrepasando la meta prevista inicialmente, entre ellas; Derechos de petición, Denuncias ambientales, Actuaciones de oficio, Puestos de control, Operativos y Sentencias.',
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
            'activity_id' => 11089,
            'year' =>1,
            'value' => 8,
            'description' => 'Para la actualización de las fases de Prospectiva y Zonificación Ambiental y Formulación del POMCA Río Mayo, mediante comisión conjunta con CORPONARIÑO, los recursos financieros para esta actualización serán financiados por el MADS, siendo CORPONARIÑO el ejecutor de los mismos. Por cuestiones de emergencia sanitaria, no se llevaron a cabo los talleres participativos previstos con las comunidades de Mercaderes y Florencia, puesto que la comunidad impidió el ingreso al Territorio. Plan de Ordenación y Manejo de la Cuenca Río San Jorge, se cursó invitación a las alcaldías de San Sebastián, Almaguer, Bolívar, Sucre, Florencia, Patía y Mercaderes para coordinar la programación de reuniones con la comunidad. Sin embargo, solo atendieron el llamado las alcaldías de Patía y Bolívar. Las demás no acudieron al llamado a pesar de que confirmaron su asistencia, se llevo a caboun taller de socialización con el Consejo Comunitario de Capellanías del Municipio de Bolívar con quienes, además, se logró concertar el establecimiento de once (11) hectáreas en restauración ecológica como una forma de implementar las acciones socioambientales consignadas en el Plan. Para terminar el proceso de consulta previa y adoptar el POMCA Alto Río Cauca . se acordó entre la Corporación Autónoma Regional del Cauca y el Fondo Adaptación suspender temporalmente el convenio 035-2014 hasta tanto se superen las condiciones ocasionadas por la emergencia sanitaria y se pueda continuar con los diálogos con las comunidades del Pueblo Kokonuko, se llevó a cabo el “Taller de análisis de identificación de impactos y formulación de medidas de manejo”, en el Resguardo Indígena de Paletará – Municipio de Puracé.
        En el marco de la Comisión Conjunta constituida formalmente por CRC-CVC-MADS- PNNC, del Comité Técnico y el Consejo de Cuenca como instancia consultiva que lideran las comunidades étnicas locales, atención a las acciones programadas teniendo como referente las consideraciones de la Comisión Conjunta  y acuerdos con las comunidades, se desarrollaron las siguientes: Diez (10) Comités Técnicos, seis (6) Consejos de Cuencas como espacio consultivo, dos (2) reuniones con los Consejos Comunitarios, dos ( 2) comunicaciones con delegados de las Comunidades Indígenas y una (1) reunión con la Dirección de la Autoridad Nacional de Consulta Previa que tuvo por objeto revisar el tema de la presencia de Comunidades Étnicas en el marco de la Formulación del POMCA Río Timba y su participación en el proceso consultivo, lo anterior sumando a la fase de diagnóstico del Plan de Ordenación y Manejo del POMCA Subzona hidrográfica del Río Timba, Asimismo, con los Consejos Comunitarios que firmaron la apertura de la Consulta Previa se socializaron las actividades previstas para continuar con la formulación del POMCA durante el cuatrienio 2020 – 2023. ',
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
            'activity_id' => 11090,
            'year' =>1,
            'value' => 10,
            'description' => 'Se avanzó en la identificación de áreas ubicadas en la zona de influencia del valle geográfico del río Patía, a beneficiarse de los proyectos Programa colectivo de repoblamiento en zonas de recarga del acuífero y del proyecto productivo para árboles frutales, en el marco de los 14 compromisos ambientales protocolizados en la fase de Consulta Previa del PMAA del valle geográfico del río Patía.
        Por otro lado, el convenio con la Universidad del Cauca no se alcanzó a suscribir por dificultades administrativas, pero se avanzó en la etapa precontractual.
        
        ',
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
            'activity_id' => 11091,
            'year' =>1,
            'value' => 30,
            'description' => 'En la vigencia 2020 se logró culminar las fases de Diagnóstico, Zonificación y Formulación del Plan de ordenación Forestal,  de la Subzona Hidrográfica del Río San Juan del Micay (389.734 Ha.), en el marco del Convenio 512  suscrito entre la  CRC y el Instituto de Investigaciones Ambientales Del Pacífico IIAP, quien fue el ejecutor del proyecto. Dicho convenio contó con la participación activa de las comunidades del municipio de Argelia,  El Tambo y López de Micay.',
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
            'activity_id' => 11092,
            'year' =>1,
            'value' => 30,
            'description' => 'Zonificación y régimen de del complejo de páramos Doña Juana – Chimayoy. 
        A la fecha se definieron las unidades fisiográficas, de paisaje y socioambientales como insumo para la zonificación del complejo de páramos Doña Juana Chimayoy y se
        cuenta con el documento de zonificación en sus primeras fases, con su respectiva cartografía. 
        Zonificación y régimen de del complejo de páramos Las Hermosas:
        Se participó en reuniones virtuales de la Comisión conjunta Las Hermosas. Se logró la aprobación para la adopción por parte de la comisión conjunta del ejercicio de zonificación del complejo de Páramos Las Hermosas en el departamento del Cauca.                                                                                                                                                                                                                             Zonificación y régimen de usos del complejo de páramos Cerro Plateado 
        Se trabajo con los Consejos comunitarios Renacer Negro, Alto Guapi, Río Napí y San Francisco. No se logró el cierre de la consulta para el año 2020, debido a las dificultades de continuar de forma presencial en los territorios, inicialmente por la cuarentena total, posteriormente por la no apertura de trasporte aéreo para llegar a la zona y posteriormente porque las autoridades de los consejos Alto Guapi y Renacer Negro requieren en el primero que el Ministerio del Interior dirima un conflicto por límite territorial , y el segundo porque manifiesta inconformidad en el proceso y falta de confianza ante la autoridad ambiental, lo que implica buscar los mecanismos para garantizar su participación.',
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
            'activity_id' => 11093,
            'year' =>1,
            'value' => 10,
            'description' => 'Se avanzó en la fase de preámbulo para la formulación del Plan de Manejo de Humedales, por lo cual se realizó la caracterización preliminar de los actores sociales y comunidades aledañas a los humedales y en la recopilación de la información secundaria para determinar las áreas con presencia potencial de humedales de la Media y Baja Bota Caucana. ',
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
            'activity_id' => 11094,
            'year' =>1,
            'value' => 10,
            'description' => 'Declaratoria del Área Protegida Kok Oi Euja Calle Santa Rosa del municipio de timbiquí, con un área superior a las 11.000 hectáreas, que representa el 56,9% del territorio del Resguardo Indígena Calle Santa Rosa del pueblo indígena Eperãra Siapidaarã. Igualmente, se adelantó el trámite para la incorporación del área protegida KokOiEuja Calle Santa Rosa del municipio de Timbiquí y la inscripción en la plataforma del Registro Único Nacional de Áreas Protegidas (RUNAP).',
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
            'activity_id' => 11095,
            'year' =>1,
            'value' => 1,
            'description' => 'Se cuenta con el Plan de Manejo del Área Protegida el Aletón, municipio de Santa Rosa, que fue socializado y contó con la participación de líderes y lideresas que concertadamente estuvieron involucrados en este proceso. ',
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
            'activity_id' => 11096,
            'year' =>1,
            'value' => 5,
            'description' => 'Se identificaron las determinantes ambientales suburbanas a partir del ejercico piloto realizado en los Municipios de Popayán y Cajibío, como referente técnico para el ordenamiento territorial en el Departamento del Cauca.  ',
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
            'activity_id' => 11097,
            'year' =>1,
            'value' => 0,
            'description' => 'No aplica para esta vigencia.',
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
            'activity_id' => 11098,
            'year' =>1,
            'value' => 10,
            'description' => 'Se tenía como meta 10 pero se avanzó con 13 municipios, asesorias y asistencia técnica coordinadas con las Administraciones Municipales, que permitieron en el marco de sus competencias, abordar desde la asistencia técnica el estado actual de las determinantes ambientales y su incorporación en los Planes de Ordenamiento Territorial POT, revisión o modificación. ',
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
            'activity_id' => 11099,
            'year' =>1,
            'value' => 10,
            'description' => 'En el proceso de aprestamiento e inicio de la formulación del Plan de Manejo de una especie de flora amenazada, conforme al listado de especies amenazadas del MADS y que tienen distribución en el Departamento del Cauca, adicionando la importancia económica y ambiental, se determinó que la especie a la que se le formulará el Plan de conservación es Cedrela odorata, especie que presenta distribución en la baja bota caucana y la Costa Pacífica.  Por otro lado, se gestionó la formulación del plan de conservación, con el acompañamiento de estudiantes de la facultad de Ingeniería Forestal de la Universidad del Cauca, obteniendo un documento compilatorio de información secundaria y ruta metodológica a implementarse para la formulación del plan durante la vigencia 2021.',
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
            'activity_id' => 11100,
            'year' =>1,
            'value' => 40,
            'description' => 'En el marco de la ejecución de acciones en los muncipios PDET priorizados, conforme al Plan de Zonificación ambiental, se avanzó en las siguientes:
        *Se han priorizado los predios para los municipios de El Tambo, Mercaderes, Suarez y Morales en los cuales se establecerá la restauración activa en 18 hectáreas.
        *Priorización de los predios para la implementación del proceso de conservación en los municipios de El Tambo, Mercaderes, Suarez y Morales para implementar la estrategia restauración pasiva en 15 hectáreas y 15 unidades fortalecidas.  
        *Recopilación y análisis de información secundaria con el fin de conocer el inventario actual de las áreas estratégicas  de interés ambiental, logrando identificar la priorización en cada uno de los Municipios: El Tambo, Morales, Suarez y Mercaderes.
        *Socialización a la comunidad y representantes de las administraciones locales de cada uno de los municipios (Tambo, Mercaderes, Suarez, Morales) acerca de los objetivos, importancia, normatividad y estrategias que enmarcan el Plan de Ordenación Forestal – POF-. 
        *Realización de visita en cada municipio para la aplicación de la estrategia de participación social y metodología en cada uno de los municipios priorizados (El Tambo, Mercaderes, Morales y Suárez). ',
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
            'activity_id' => 11101,
            'year' =>1,
            'value' => 100,
            'description' => 'se brindó acompañamiento y asesorías a los 42 entes territoriales y al Departamental, en cuanto a la revisión de la inclusión de la dimensión ambiental en los Planes de Desarrollo 2020 – 2023, la cual se realizó a partir de lo estipulado en la cartilla elaborada por el Ministerio de Ambiente y Desarrollo Sostenible - MADS denominada “Orientaciones para la incorporación de la dimensión ambiental en los planes de desarrollo territorial 2020 – 2023”. Durante este proceso se realizaron asesorías virtuales dada la actual situación de emergencia económica y sanitaria declarada por el Gobierno nacional, se recibieron y despacharon vía correo electrónico tanto los planes de desarrollo ajustados, como los diferentes conceptos técnicos respecto a la inclusión de la dimensión ambiental en cada uno de los Planes de Desarrollo Territorial.
        
        ',
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
            'activity_id' => 11102,
            'year' =>1,
            'value' => 30,
            'description' => 'Se construyó el Plan de Acción Institucional PAI 2020-2023 “Cauca Ambiental y Sostenible”, con los aportes y participación de la comunidad, de los Entes Territoriales, de Directivos, funcionarios y contratistas de la C.R.C. Este documento fue formulado acorde a los lineamientos establecidos por el Ministerio de Ambiente y Desarrollo Sostenible y dando cumplimiento a lo dispuesto en los Decretos 1076 de 26 de mayo de 2015 y 1200 de 2004 Artículo 12, en concordancia con lo establecido en la Resolución 0667 de 27 de abril de 2016. El mismo fue socializado a través de Audiencia Pública Virtual el 30 de abril del presente año.Así mismo se llevó a cabo el seguimiento y recolección de información, de lo ejecutado en materia ambiental en los municipios priorizados de: Corinto, Sucre, Almaguer, Timbío, Santander de Quilichao, Cajibío, Florencia, El Tambo, Morales y Silvia durante el periodo de Gobierno 2016 -2019 y su aporte al cumplimiento del Plan de Gestión Ambiental Regional – PGAR. 
        En el marco del contrato interadministrativo 1929 de 2017 suscrito la Gobernación del Cauca, la CRC realiza funciones de Interventoría integral al proyecto denominado “Formulación del Plan de Ordenamiento Departamental Cauca” POD Cauca, el cual se ejecuta con recurso de Regalías y cuya finalización estaba programada para el 31 de diciembre de 2020,  plazo que según el último ajuste (11) realizado al proyecto fue extendido por el OCAD Pacifico por 6 meses más, Lo que genera que el proyecto abarque hasta el mes de junio del año 2021. Durante la vigencia 2020 se llevó a cabo la revisión de hojas de vida para la contratación de los 17 perfiles por parte de la Gobernación, así como del plan de trabajo y cronograma del equipo ejecutor. La C.R.C., tuvo además participación activa en los diferentes comités técnicos y mesas ambientales generadas en el desarrollo del proceso de formulación del POD.',
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
            'activity_id' => 11103,
            'year' =>1,
            'value' => 6,
            'description' => 'En la Gestión de Proyectos, el Banco de Proyectos de la Oficina Asesora de Planeación realizó la estructuración y formulación de seis (6) proyectos para su gestión a diferentes fuentes de financiación. Los proyectos son: 1.) Proyecto: Recuperación y conservación de ecosistemas estratégicos con participación comunitaria en seis (6) municipios de la subzona hidrográfica río palo del departamento del Cauca. 2.) Proyecto: “Implementación de estrategias de restauración ecológica en zonas de manglar y Ecosistemas transitorios asociados al Naidi (Euterpe oleacera) como estrategia de conservación; y aprovechamiento forestal persistente sostenible en áreas de vocación forestal en el consejo comunitario negros en acción, Timbiquí, Cauca”. .) Proyecto: “Implementación de prácticas ganaderas sostenibles, en articulación con acciones de conservación ambiental en los municipios (PDET) Argelia, Balboa, Caldono, Jambaló, morales, el tambo y el municipio de Florencia en el departamento del cauca. Formulado a presentar a Regalías”.4.) Proyecto: “Conservación y recuperación de áreas de interés hídrico y ambiental en los municipios de Bolívar, Balboa, Mercaderes, Florencia y Almaguer del departamento del Cauca.5.) Proyecto Conservación de Áreas de Interés Hídrico y Ambiental en los Municipios de El Tambo, Suarez, Morales, Cajibío, Buenos Aires y Timbío en el Departamento del Cauca” 6.) Proyecto: “Reconversión de la Ganadería tradicional, hacia sistemas sostenibles, a través de acciones de tecnificación y conservación Ambiental, en predios del Municipio de Sotará, Cauca”. Así mismo se realizó el ajuste a 3 proyectos y a la fecha se tiene un proyecto en formulación.',
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
            'activity_id' => 11104,
            'year' =>1,
            'value' => 0,
            'description' => 'Para la vigencia 2020 se priorizo contar con el diseño de los módulos de almacenamiento estandarizados que permitan la interoperabilidad con diferentes entidades SINA, para lo cual se convocó mediante proceso CRC-CM-004-2020, el Objeto: “CONCEPTUALIZAR, DISEÑAR, DESARROLLAR E IMPLEMENTAR UNA GEODATABASE MULTIUSUARIO A PARTIR DE MODELOS DE ALMACENAMIENTO PARA LA ADMINISTRACIÓN Y MANEJO DE INFORMACIÓN DE LÍNEA BASE AMBIENTAL Y DE GESTIÓN DEL RIESGO DE LA CORPORACIÓN AUTÓNOMA REGIONAL DEL CAUCA.”
        Proceso que se encuentra contratado y en ejecución cuya entrega se realizara en el mes de mayo del 2021.
        Por otro lado se suscribieron los contratos 0109 y 0336 de 2020 para la vinculación de un profesional del área de ingeniería ambiental  con experiencia en manejo de herramientas SIG como apoyo al fortalecimiento de la información de línea base ambiental a través de la generación de conocimiento y consolidación de información reportada desde las áreas misionales de la CRC; así como la  actualización tanto del documento de línea base ambiental corporativa a vigencia del 2020, como el visor cartográfico.
        ',
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
            'activity_id' => 11105,
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
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11106,
            'year' =>1,
            'value' => 100,
            'description' => 'Se suscribió convenio con CORPOFUTURO para ejecutar el proyecto denominado Establecer estrategias para el mejoramiento ambiental, mediante la implementación de acciones de conservación en sitios de interés hídrico, en área urbana y suburbana del municipio de El Tambo (corregimiento de Uribe) departamento del Cauca. 
        Se apoyó la compra de plántulas para iniciar y consolidar procesos de restauración, rehabilitación y recuperación del recurso hídrico en abastecedoras en los municipios del departamento, incluyendo la Gran Sembratón liderada por el MADS.
        Se suscribió el Convenio Interadministrativo No. 226 del 8 de mayo de 2020 con el Cabildo Mayor del Pueblo Yanacona para ejecutar el proyecto denominado Implementación de estrategias de conservación participativa en los espacios de vida, fortaleciendo los procesos de crianza del agua en el marco del Plan Ambiental Indígena PAI –Y de las comunidades del pueblo Yanacona, departamento del Cauca.
        De igual manera se cofinanció en coordinación con el proyecto corporativo “Recuperación de los ecosistemas estratégicos y las áreas de interés ambiental, con enfoque diferencial, en territorios de los grupos étnicos” y el Consejo Regional Indígena del Cauca,  la ejecución de la propuesta Establecer acciones estratégicas de conservación y recuperación de los espacios de vida del territorio que hace parte del Consejo Regional Indígena del Cauca- CRIC.”
        Convenio para ejecutar el proyecto No. E20006: Implementación de estrategias de conservación en áreas de interés ambiental e hídrico mediante la implementación de estrategias de conservación con participación comunitaria en el municipio de Totoró. en el departamento del Cauca en el marco de la ejecución de las acciones priorizadas de conservación y mejoramiento ambiental en coordinación con actores SINA con el apoyo de las direcciones territoriales.
        Convenio para ejecutar el proyecto 20002 “Implementar procesos de mejoramiento ambiental urbano mediante la rehabilitación ambiental del espacio público, educación ambiental y restauración ecológica en la vereda La Laguna del Municipio de El Tambo-Departamento del Cauca“.',
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
            'activity_id' => 11107,
            'year' =>1,
            'value' => 15,
            'description' => 'Se dio inicio a la actualización del PORH río Guachicono bajo- Mazamorras, mediante la revisión del estado de la red de monitoreo hidrometeorológica del IDEAM con incidencia directa sobre la cuenca de estudio. Adicionalmente fueron solicitados los registros históricos y sus datos fueron procesados con el fin de determinar las condiciones climáticas, de pluviosidad y e hidrométricas, análisis de la información de calidad del agua de la CRC con incidencia directa sobre la cuenca, definición de los puntos de monitoreo para la caracterización inicial del trabajo de campo, salidas de campo para reconocimiento preliminar de las condiciones biofísicas del río, asimismo que permitiese la identificación de puntos de monitoreo del río en la futura fase de diagnóstico del PORH.  Contando a la fecha con un documento Técnico y Social de la fase de alistamiento institucional y parte de la caracterización primaria del PORH río Guachicono bajo – Mazamorras; lo que incluye Presupuesto y Plan de Trabajo.
        .',
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
            'activity_id' => 11108,
            'year' =>1,
            'value' => 51,
            'description' => 'A la fecha se han realizado 51 evaluaciones de las 64 programadas para la segunda campaña y tercera campaña, monitoreando doce  (12) fuentes hídricas  ríos Guachicono, San Jorge, Patía, Timbío, Quilcacé, Esmita, Blanco, Cofre, Molino, Ejido, Cauca, Ovejas, Piedras y Vinagre, Piendamó, Palacé, Palo, Paila y Quilichao.',
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
            'activity_id' => 11109,
            'year' =>1,
            'value' => 24,
            'description' => 'Se realizaron diez (10) seguimientos a los Planes de Saneamiento y Manejo de Vertimiento –PSMV- priorizados por la Corporación, en los Municipios de Mercaderes, Suarez, Caloto, La Vega, Patía y Caldono.
        Igualmente se visitaron y evaluaron 46 Plantas de Tratamiento de Aguas Residuales –PTAR.',
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
            'activity_id' => 11110,
            'year' =>1,
            'value' => 3,
            'description' => 'Para la vigencia 2020, se realizó la cofinanciación de tres (3) interceptores y sistemas de tratamiento de aguas residuales, en los municipios de Almaguer y El Tambo.',
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
            'activity_id' => 11111,
            'year' =>1,
            'value' => 30,
            'description' => 'Se realizaron 30 monitoreos y caracterización de vertimientos de aguas residuales en el marco de permisos de vertimientos y PTAR priorizadas por la entidad, principalmente en el sector domésticos, industrial y agroindustrial. En la vigencia del año 2020, de los 30 monitoreos y caracterizaciones realizadas, presentan cumplimiento de los límites máximos permisibles 13 y 16 cumplen parcialmente. Para los usuarios que presentan incumplimiento parcial, se proyectaron los respectivos requerimientos. ',
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
            'activity_id' => 11112,
            'year' =>1,
            'value' => 10,
            'description' => 'En la vigencia  2020, se revisó la documentación existente de priorización de las fuentes hídricas a reglamentar, actualizando el documento de priorización de las fuentes hídricas, en las cuales se prioriza reglamentar para el POAI 2020-2023 la reglamentación del Rio Desbaratado, Palo y Guengue, el día lunes 14 de diciembre se estará radicando el documento al Subdirector de Gestión Ambiental para su revisión y aprobación.
        Igualmente el pasado 18 de noviembre de 2020 se realizó reunión entre el equipo técnico de recurso hídrico de la S.G.A con la Corporación Autónoma Regional del Valle del Cauca-CVC, con el objetivo de abordar la reglamentación del Rio Desbaratado a desarrollarse en el año 2021, Subzona compartida por ser limítrofe con el Departamento del Valle, y por ende ambas corporaciones deben coadyudar al trabajo de reglamentación, para lo cual deberá desarrollarse un convenio interadministrativo entre las dos corporaciones. ',
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
            'activity_id' => 11113,
            'year' =>1,
            'value' => 10,
            'description' => 'Se cuenta con el documento de  priorización para el acotamiento de rondas hídricas de las corrientes hídricas a priorizar en el departamento del Cauca, que  presenta la priorización de las fuentes hídricas en el área de la jurisdicción de la CRC por zonas hidrográficas, sobre las cuales se describe el orden de prioridad y se genera los mapas temáticos correspondientes de cada subzona. ',
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
            'activity_id' => 11114,
            'year' =>1,
            'value' => 25,
            'description' => 'El Seguimiento a los Programas de Uso Eficiente y Ahorro del Agua - PUEAA, para la vigencia 2020 fue de 25 seguimientos, 20 realizados por la Subdirección Defensa del Patrimonio Ambiental y 5 por las DT´s.',
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
            'activity_id' => 11115,
            'year' =>1,
            'value' => 0,
            'description' => 'Se estableció el Acuerdo de voluntades entre el MADS, la CRC, la Universidad del Cauca, la Alcaldía de Sotará y la Alcaldía de El Tambo, conformando la Mesa Técnica Alianza por el Agua, priorizando y suscribiendo a finales de diciembre el Convenio 0526 de 2020, entre la C.R.C. y la Alcaldía de Sotará, con el objeto de Implementar la estrategia priorizada en la mesa técnica de la alianza por el agua, orientada a la protección y recuperación del recurso hídrico de las fuentes abastecedoras de los acueductos Sachacoco y El Higuerón, enfocado a la participación, cultura del agua, manejo de conflictos y de gestión de proyectos estratégicos asociados al agua de los actores para la gestión integral del recurso hídrico con inclusión del enfoque de género, en donde se establecerán 5 hectáreas en restauración activa, 5 hectáreas en restauración pasiva, instalación de 5 biofiltros para el manejo de aguas residuales y 2 vallas informativas para la concientización de la comunidad. 
        Por otro lado, se participó en las reuniones y talleres en el marco de la Plataforma Colaborativa del río Cauca que lidera el MADS, en cumplimiento de la sentencia 038 de 2019, coordinando con la Gobernación del Cauca la mesa técnica Demanda de agua y aportando elementos técnicos en la mesa Calidad del agua.
        so hídrico con inclusión del enfoque de género, en donde se estableceran 5 hectáreas en restauración activa, 5 hectáreas en restauración pasiva, instalación de 5 biofiltros para el manejo de aguas residuales y 2 vallas informativas para la concientización de la comunidad. 
        Por otro lado, se participó en las reuniones y talleres en el marco de la Plataforma Colaborativa del río Cauca que lidera el MADS, coordinando con la Gobernación del Cauca la mesa técnica Demanda de agua y aportando elementos técnicos en la mesa Calidad del agua.',
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
            'activity_id' => 11116,
            'year' =>1,
            'value' => 25,
            'description' => 'El cumplimiento a este producto y el producto 2.2.1.2 se realiza a partir de ejecución de actividades de manera conjunta que apuntan a las metas planteadas, así las cosas, la evaluación de la Unidad Ambiental, implica considerar desde una perspectiva integral todos los aspectos físico bióticos, social, y económicos que confluyen en ésta y que en su conjunto contribuyen a la conformación de los diferentes ecosistemas. Bajo esta visión, se adelantó la evaluación de estos aspectos para conocer su estado y sus características biológicas que pueden ser un indicativo del estado de salud del ecosistema. Los diagnósticos que se realizaron y cuentan con un documento final para la actualización de los documentos de UAC LLAS y MANGLARES que dan alcance a lo definido en la fase de protocolización de  la preconsulta previa como mecanismo de participación, para el segundo semestre se logró terminar de recolectar la informacion de campo para culminar la actualización y ajuste de la fase de diagnóstico. ',
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
            'activity_id' => 11117,
            'year' =>1,
            'value' => 25,
            'description' => 'El cumplimiento a este producto y el producto 2.2.1.2 se realiza a partir de ejecución de actividades de manera conjunta que apuntan a las metas planteadas, así las cosas, la evaluación de la Unidad Ambiental, implica considerar desde una perspectiva integral todos los aspectos físico bióticos, social, y económicos que confluyen en ésta y que en su conjunto contribuyen a la conformación de los diferentes ecosistemas. Bajo esta visión, se adelantó la evaluación de estos aspectos para conocer su estado y sus características biológicas que pueden ser un indicativo del estado de salud del ecosistema. Los diagnósticos que se realizaron y cuentan con un documento final para la actualización de los documentos de UAC LLAS y MANGLARES que dan alcance a lo definido en la fase de protocolización de  la preconsulta previa como mecanismo de participación, para el segundo semestre se logrpi terminar de recolectar la informacion de campo para culminar la actualización y ajuste de la fase de diagnóstico. ',
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
            'activity_id' => 11118,
            'year' =>1,
            'value' => 2,
            'description' => 'A la fecha en articulación con el proyecto 3.1.1. se implemento la acción para la restauración de ecosistema manglar, a traves de la instalación de siete (7) estufas con las mujeres cabezas de familia del Consejo Comunitario Guapi Abajo, con esta acción se disminuye la presión de la extracción de madera , permitiendo la restauración o recuperación de este ecosistema. La segunda acción, es el establecimiento dela acción de restauración ecologica en el CC Guapi Abajo, a traves del establecimiento de 3.500 m2 de Bosques Dendroenergeticos con la participación activa de la comunidad.',
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
            'activity_id' => 11119,
            'year' =>1,
            'value' => 1,
            'description' => 'Durante la presente vigencia se realizó la evaluación de la estructura de Parcelas Permanentes asociadas al ecosistema de manglar en los Municipios de Guapi y Timbiquí, en las parcelas permanentes de 200 metros cuadrados donde se evaluó el DAP y altura total, con el fin de reportar al Sistema de información de manglares – SIGMA, e identificar el estado en el que se encuentra el manglar, si ha presentado perturbaciones y/o afectaciones que puedan afectar su conservación. ',
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
            'activity_id' => 11120,
            'year' =>1,
            'value' => 0,
            'description' => 'Este producto no fue posible realizar debido a que el INVEMAR, por la situación de emergencia sanitaria del 2020 no iba a recibir muestras en el laboratorio y realizar monitoreos de aguas marino costeras, por lo tanto no se pudo suscribir convenio con esta Institución.',
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
            'activity_id' => 11121,
            'year' =>1,
            'value' => 2,
            'description' => 'Para dar cumplimiento a esta actividad se contratará la construcción de sistemas de cosecha de agua lluvia como medida de adaptación al cambio climático en municipios priorizados del departamento del Cauca. Se contempla la instalación de 60 sistemas de cosecha de agua. Igualmente, 60 visitas de seguimiento a las medidas de adaptación implementadas. Adicionalmente se adquirieron 2 más sistemas para un total de 62.',
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
            'activity_id' => 11122,
            'year' =>1,
            'value' => 1,
            'description' => 'La meta física era la construcción de 450 estufas ecoeficientes implementadas y el establecimiento de las respetivas unidades de bosques dendroenergéticos, esta meta se superó construyendo finalmente: 817 estufas y estableciendo 40,85 en bosques dendroenergeticos (Restauración activa).',
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
            'activity_id' => 11123,
            'year' =>1,
            'value' => 24,
            'description' => 'Se recibió un documento denominado “Plan Municipal de Cambio Climático Santander de Quilichao Departamento del Cauca” el cual, de los 26 criterios asignados en las buenas prácticas de los Planes de Cambio Climático, dio como resultado que el documento analizado cumple 15 de ellas (En algunos casos se podrían mejorar) y no cumplen 9 de los criterios; lo que arroja un porcentaje de SI cumplimiento: 58% Y NO cumplimiento: 42%. 
        Se realizó  asesorías a entes municipales y se emitieron conceptos por demanda de 2 municipios Popayán y Santander de Quilichao.
        Se realizo  diez (10) capacitaciones y/o asesoría técnica a los entes territoriales para la incorporación, planificación y ejecución de acciones de cambio climático en el marco de los instrumentos de planificación territorial.',
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
            'activity_id' => 11124,
            'year' =>1,
            'value' => 1,
            'description' => 'Se identificó un (1) área que esta en el  Registro Único de Ecosistemas y áreas ambientales -REAA, que son área que hace parte de las zonas boscosas de las veredas el Salado y el Salado las Estrellas del Municipio de Sotará, fuentes hídricas que benefician el acueducto del área urbana de Timbío. Igualmente, se avanzó en reuniones con los beneficiarios del proyecto banco2, visitas de seguimiento a los usuarios. El incentivo para las 20 familias es en especies. ',
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
            'activity_id' => 11125,
            'year' =>1,
            'value' => 3,
            'description' => 'Se identificó, priorizó, formuló y se encuentra para contratación el proyecto “Fortalecimiento de las capacidades comunitarias en Gestión del Riesgo de Desastres ante la ocurrencia de incendios forestales, mediante estrategias de conocimiento, reducción y manejo en 11 municipios priorizados del Departamento del Cauca”.
        Se identificó, priorizó, formuló y se encuentra para contratación el proyecto “ELABORACIÓN DE ANÁLISIS DE ALTERNATIVAS DE COMUNICACIÓN PARA LA IMPLEMENTACIÓN DE DOS SISTEMAS DE ALERTA TEMPRANA EN LOS MUNICIPIOS DE SUCRE Y LA VEGA, COMO ACCIÓN DE CONOCIMIENTO DEL RIESGO DE DESASTRE POR MOVIMIENTOS EN MASA, AVENIDA TORRENCIAL E INCENDIOS FORESTALES”.
        Ejecución del contrato 283 de 13 de agosto de 2020 y 266 del 04 de agosto de 2020, para el desarrollo del CONVENIO 321 DE  2019 AUNAR ESFUERZOS TÉCNICOS, ADMINISTRATIVOS Y FINANCIEROS ENTRE LA CORPORACIÓN AUTÓNOMA REGIONAL DEL CAUCA Y EL MUNICIPIO DE POPAYÁN PARA LA ESTRUCTURACIÓN DE UN SISTEMA DE MONITOREO HIDROCLIMATICO CON COMPONENTE ECNOLÓGICO PARA EL ANÁLISIS DE LAS VARIABLES DE INTERESES EN LA GESTIÓN DEL SISTEMA DE ALERTAS TEMPRANAS ANTE LAS AMENAZAS POR INUNDACIÓN Y AVENIDA TORRENCIAL EN EL MUNICIPIO DE POPAYÁN —  DEPARTAMENTO DEL CAUCA.',
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
            'activity_id' => 11126,
            'year' =>1,
            'value' => 4,
            'description' => 'Se avanzó en la  ejecución del Contrato de obra 491 de 2020 para el desarrrollo del proyecto “Construcción de obras de protección de la margen derecha del Río Palo puente abajo, como acción de reducción del riesgo de desastres por inundación en la zona urbana del municipio de Guachené” y el Proyecto “Construcción de obras protección de orilla para contrarrestar erosión hídrica de la Quebrada El Infiernito en la Planta de Tratamiento de Agua Residual de la Cabecera Municipal de Miranda” Convenio 460 de 2020 celebraddo entre la CRC y el municipio de Miranda.
        Convenio 440 de 2020 celebrado entre CRC y Gobernación del Cauca cuyo objeto es AUNAR ESFUERZOS TÉCNICOS, ADMINISTRATIVOS Y FINANCIEROS, ENTRE LA CORPORACION AUTONOMA REGIONAL DEL CAUCA Y LA GOBERNACION DEL CAUCA, PARA LA EJECUCIÓN DEL PROYECTO E20605 ACCIONES PARA LA GESTIÓN DEL RIESGO DE DESASTRES Y DE GESTIÓN AMBIENTAL EN LAS CUENCAS HIDROGRÁFICAS CON INFLUENCIA DE LA RED VIAL REGIONAL DEL DEPARTAMENTO DEL CAUCA, EN EL MARCO DEL PROGRAMA DE CONSERVACIÓN RUTINARIA CON PARTICIPACIÓN COMUNITARIA DE LA RED VIAL A CARGO DEL DEPARTAMENTO DEL CAUCA.',
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
            'activity_id' => 11127,
            'year' =>1,
            'value' => 10,
            'description' => 'Se implementaron acciones de gobernanza para la gestión del riesgo con el desarrollo de actividades relacionadas con coordinación, interrelación con los CMGRD y CDGRD como integrantes, para dar oportuna atención a las solicitudes requeridas, asesorías, apoyos técnicos, asistencia a comités técnicos, reuniones, visitas técnicas y todas aquellas acciones con los entes gubernamentales acorde al Principio sistémico definido en la Ley 1523; así mismo se adelantó coordinación con los CMGRD y el CDGRD para llevar a cabo asesoría en los municipios del Departamento del cauca en la inclusión de la gestión del riesgo en el Ordenamiento Territorial.
        Convenio 460 de 2020 celebrado entre CRC y Municipio de Miranda cuyo objeto es AUNAR ESFUERZOS TÉCNICOS, ECONÓMICOS Y ADMINISTRATIVOS ENTRE LA CORPORACIÓN AUTÓNOMA REGIONAL DEL CAUCA - CRC Y EL MUNICIPIO DE MIRANDA, PARA EJECUTAR EL PROYECTO CONSTRUCCIÓN DE OBRAS PROTECCIÓN DE ORILLA PARA CONTRARRESTAR EROSIÓN HÍDRICA DE LA QUEBRADA EL INFIERNITO EN LA PLANTA DE TRATAMIENTO DE AGUA RESIDUAL DE LA CABECERA MUNICIPAL DE MIRANDA.',
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
            'activity_id' => 11128,
            'year' =>1,
            'value' => 10,
            'description' => 'Para la vigencia 2020,  se adelantaron las actividades y ejecución de los ítem contractuales relacionados con el desarrollo de 7 talleres de socialización; recopilación, análisis y evaluación de información existente de cada uno de los Municipios priorizados, así como la presentación de cronograma, plan de inversión y del equipo técnico requerido.  ',
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
            'activity_id' => 11129,
            'year' =>1,
            'value' => 5,
            'description' => '
        Las acciones realizadas en el marco de la interventoria de la CRC al proyecto fueron: Formulación del proyecto de estudios previos, programación de giros, certificado de cumplimiento de requisitos de ejecución.  Igualmente, de acuerdo al cronograma concertado con la Gobernación, será dicha entidad quien inicie la etapa de contratación de la obra.  Se adelantó por la CRC el permiso de ocupación de cauce mediante resolución 1363 de 23 de diciembre de 2020. Posterior al permiso de ocupación iniciara por la CRC la etapa de contratación de interventoría. 
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
            'activity_id' => 11130,
            'year' =>1,
            'value' => 100,
            'description' => 'Para la vigencia 2020, se cumplió al 100% con la gestión de la visita de acreditación del IDEAM, para lo cual se suscribió el convenio 442 del 14/10/2020 entre la C.R.C. y el IDEAM, realizando el pago anticipado de la visita y quedando programada para el primer trimestre del 2021.  Igualmente se llevo a cabo la auditoría interna con la Universidad de Medellín, donde se obtiene un buen resultado acorde a lo establecido en la NTC 17025 de 2017. 
        A la fecha se cuenta con una Estación Móvil de Monitoreo de Calidad del Aire – que contiene dos analizadores automáticos denominados BAM 1020 y un Analizador T400 para determinar la concentración de PM2.5, PM10 y Ozono respectivamente, estos equipos permiten recolectar información de tipo cuantitativo sobre la concentración de contaminantes de origen antropogénico y natural.  Igualmente, se han realizado cuatro (4) informes de monitoreo de Calidad de Aire en la ciudad de Popayán. ',
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
            'activity_id' => 11131,
            'year' =>1,
            'value' => 100,
            'description' => 'La Corporación atendió las solicitudes de medición y control de ruido en el departamento del Cauca, radicadas a 30 de junio de 2020, las cuales corresponden a siete (7) visitas en establecimientos públicos y privados, en los municipios de Popayán, Piendamó, Timbío, El Tambo y Miranda. Otras siete (7) solicitudes se re direccionaron por no ser competencia de la C.R.C. Como acciones de descontaminación se realizaron cuatro (4) campañas de sensibilización “Bájale el volumen” en la ciudad de Popayán, en las plazas de mercado la 13, La Esmeralda, Barrio Bolívar y colegio San Agustín.',
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
            'activity_id' => 11132,
            'year' =>1,
            'value' => 50,
            'description' => 'La Corporación actualmente no cuenta con los equipos de medición acreditados para realizar control y vigilancia a los límites permisibles de emisiones de fuentes fijas y móviles en circulación, lo que exige la modalidad de contratación con laboratorios acreditados, para lo cual se suscribe contrato para monitoreo de fuentes de fuentes móviles, que por condiciones administrativas solo se suscribe el contrato en el año 2020 y se ejecutará en el año 2021.',
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
            'activity_id' => 11133,
            'year' =>1,
            'value' => 100,
            'description' => 'De acuerdo a la planificación y priorización establecida para este producto, durante el primer semestre del año 2020 se efectuó el seguimiento a la implementación de 42 PGIRS de los siguientes municipios: Morales, Piendamó, Guachené, Corinto, Popayán, Totoró, Sotará y Suárez, Cajibio, Purace, Santa Rosa, La Vega, Patia,Rosas, Mercaderes, Argelia, Balboa, Villa Rica, San Sebastian, Timbio, Buenos Aires, Caloto, Inza, Guapi, Bolivar, Padilla, Lopez de Micay; Timbiqui, Toribio, El Tambo, Florencia, Silvia, Sucre, Caldono, Almaguer, Jambalo, Santander de Quilichao, La Sierra , Paez, Puerto Tejada, Almaguer, en lo referente a metas de aprovechamiento y permisos ambientales dando cumplimiento a lo definido en el Parágrafo del Articulo 2.3.2.2.3.90 del Decreto 1077 de 2015.',
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
            'activity_id' => 11134,
            'year' =>1,
            'value' => 15,
            'description' => 'Se realizó el seguimiento a los municipios de: 1) Morales 2) Santander de Quilichao, 3) Popayán, 4) Corinto  5) Piendamó, 6) Puerto Tejada, 7) jambalo, 8) Toribio, 9) La Vega, 10) Patia- El Bordo, 11) Bolivar, 12) Sucre, 13) Piamonte, 14) Guapi, 15) Patía -Piedra Sentada, con el fin de verificar el cumplimiento de la normatividad ambiental vigente relacionada con la operación de los sistemas de disposición final de residuos sólidos.',
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
            'activity_id' => 11135,
            'year' =>1,
            'value' => 45,
            'description' => 'La Corporación Autónoma Regional del Cauca en ejercicio de sus funciones de evaluación, control y seguimiento ambiental según la normativa vigente, realizó 11 seguimientos durante el primer semestre del año 2020: 1) Fundación InnovaGen, 2) Odontológicos Dr. Andrés Felipe Feliciano, 3) Combustibles Cauca, 4) Centro Kine; 5) Clínica La Estancia, 6) ESE Timbío; PCB´s: 7) Clínica La Estancia, 8) ESE Timbío; ACU: 9) Restaurante Rancho de Lucho; RCD: 10) La Lajita (Popayán), 11) Predio la Mirla (Sotará).6) Consultorio odontológico DENTIX; 12)Hospital Francisco de Paula Santander, 13) Qilisalud NAP Centro, 9) Quilisalud
        Morales Duque, 14) Hospital Guachené, 15) Hospital Villa Rica, 16) Hospital San Jose, 17) Clinica Santa Gracia, 18) PCBs Hospital san Jose, 19) PCBs Hospital Francisco de Paula Santander, entre otros.',
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
            'activity_id' => 11136,
            'year' =>1,
            'value' => 90,
            'description' => 'En la Corporación se radicado para la vigencia un total de 954 tramites, a los cuales se les ha dado tramite a todos, para permisos de vertimientos, aprovechamiento forestal concesiones de aguas superficiales y subterráneas, permisos de investigación científica y licencias ambientales. 
        En el marco de las competencias de las Direcciones territoriales, los tramites recepcionados fueron 601 y han sido atendidos en su totalidad, como resultado se otorgaron 299 permisos 16 archivados y los demás proyectos 286 continúan en trámite. el mayor número de trámites recepcionadas corresponde a permisos de concesión de aguas superficial, le siguen permisos de vertimientos y permisos de aprovechamiento Forestal. Se espera que para inicio de la vigencia 2021, se logre culminar con los tramites iniciados.',
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
            'activity_id' => 11137,
            'year' =>1,
            'value' => 11,
            'description' => 'Se han ejecutado 174 seguimientos ambientales, 40 seguimientos a Licencias Ambientales, 15 seguimientos a Permisos de Vertimientos > a 1 LPS,  10 ocupaciones de cauces, 15 emisiones atmósfericas, 11 Centros de Diagnóstico Automotor,  45 corresponden a seguimientos a permisos de concesiones de agua superficial > a 15 LPS,  10 corresponden a seguimientos a permisos de concesiones de agua subterránea > a 15 LPS y 8 corresponden a Aprovechamiento Forestal > a 20 Has..',
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
            'activity_id' => 11138,
            'year' =>1,
            'value' => 10,
            'description' => 'En la vigencia 2020, se avanzó en la revisión de portafolio de otras Corporaciones, identificación de insumos necesarios (Conforme a las Resoluciones 0256 y 1428 de 2020, por las cuales se adopta el Manual de Compensaciones Ambientales del MADS) y propuesta inicial de la ruta metodológica requerida para la elaboración del documento con lineamientos técnicos para la aplicación de medidas compensatorias, que se aplicara para los proyectos, obras o actividades que requieran licencia, aprovechamiento o sustracción temporal, en el Departamento.',
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
            'activity_id' => 11139,
            'year' =>1,
            'value' => 20,
            'description' => 'Se realizó la gestión para la contratación de la ejecución de la primera acción de mejoramiento ambiental del espacio urbano; cuyo objeto es: “contratar la ejecución de acciones de mejoramiento ambiental urbano del espacio público en la zona verde número 01 del barrio La Heroica del municipio de Popayán, que comprende la ejecución de obras civiles y/o arquitectónicas, que permiten el mejoramiento del espacio público, entendido este desde su valor ambiental y sus diversos beneficios”. 
        CONVENIO INTERADMINISTRATIVO N° 0361 DEL 2020 Aunar esfuerzos técnicos, administrativos y financieros, entre la Corporación Autónoma Regional del Cauca y el municipio de El Tambo, para la ejecución del proyecto E20002 “Implementar procesos de mejoramiento ambiental urbano mediante la rehabilitación ambiental del espacio público, educación ambiental y restauración ecológica en la Vereda la Laguna del municipio de El Tambo – departamento del Cauca”.
        PROCESO DE SELECCIÓN ABREVIADA No.CRC-SA-034-2020 (11/12/2020) Contratar la ejecución de Acciones de mejoramiento ambiental y paisajístico para la protección de los recursos naturales del sendero ecológico Caminito del Barranquero aledaño a la quebrada Quita Calzón, zona urbana de la comuna 3-municipio de Popayán, del departamento del Cauca.
        CONVENIO INTERADMINISTRATIVO N° 0510 DEL 2020 Ejecución de primera etapa para la implementación de acciones de mejoramiento ambiental, paisajístico y arquitectónico del espacio público principal de acuerdo a los saberes ancestrales de comunidades indígenas del corregimiento de Descanse, municipio de Santa Rosa departamento del Cauca.',
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
            'activity_id' => 11140,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizaron acciones de fortalecimiento de líneas productivas bajo la figura jurídica de MiPymes atendiendo la demanda que se presenta en la Corporación, en este sentido se determina categorizar a las diferentes MiPymes y/o acciones ejecutadas en los sectores de Turismo y Agricultura orgánica.',
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
            'activity_id' => 11141,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizaron visitas técnicas a plantas de beneficio de oro de filón en el municipio de Buenos Aires y El Tambo, con el fin de identificar una Planta que pretendiera implementar una técnica de tratamiento de aguas residuales producto del beneficio de minerales auríferos con el fin de reducir contaminantes por vertimientos y se efectuó en la mina Chede, una primera fase de análisis fisicoquímicos de las muestras de agua producto de los vertimientos de la planta de beneficio.  Adicionalmente, se esta avanzando en el registro de usuarios de mercurio en la jurisdicción de la CRC.',
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
            'activity_id' => 11142,
            'year' =>1,
            'value' => 5,
            'description' => 'En el ultimo trimestre se realizo Acta de inicio de la Interventoría Integral, contratada por la Gobernación del Cauca a través de la Secretaria de Desarrollo y Fomento Económico, con la Empresa Colprof Ltda, puesto que se habia declarado desierto la pimera vez que se licito. De igual manera, se dio acta de reinicio al contrato No. 225 de 2020, el cual soporta la contratación de la Dirección del proyecto, asi como se realizo el tramite precontractual para la contratación del equipo de apoyo requerido. ',
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
            'activity_id' => 11143,
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
            'activity_id' => 11144,
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
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11145,
            'year' =>1,
            'value' => 5,
            'description' => 'Desde la Ventanilla Verde de CRC se identificaron, priorizaron y verificaron los negocios verdes para posteriormente ser enviados al MADS y sean incluidos en la base general que se maneja a nivel nacional, se adelantó la revisión y seguimiento de planes de mejora de negocios verdes de vigencias anteriores y se estructuran los de vigencia presente en aras de consolidar una matriz de insumos y materiales de posible apoyo desde la misión de la Corporación y se adelantaron trámites para crear una comercializadora de los productores de negocios verdes con un punto de comercialización que les permite ofertar sus productos, para un largo plazo. Entre ks Negocios Verdes que se encuentran en proceso se resaltan SACHACOCO HOPRTALIOSAZ, CASA RURAL LACTEOS, MIREIDA ASAMCERRILLOS, LA MADRIGUERA CONEJOS, PRODUCTOS DEL MACIZO AGRAZ, LUZ ALBANI FESCOS y FUNDECIMA.',
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
            'activity_id' => 11146,
            'year' =>1,
            'value' => 13,
            'description' => 'Durante el 2020, se apoyó con acciones de promoción y/o fomento a la Red de productores orgánicos, Red de negocios verdes, Red de aviturismo, Red de apicultura y Festival de la cosecha y finalmente se socializó la nueva herramienta de verificación actualizada por parte de la oficina de Negocios Verdes del MADS que regirá para verificación de nuevos negocios verdes, además de promocionar la Estrategia Emprendimientos Verdes 2020, que lidera el Ministerio con la finalidad de brindar herramientas de consolidación a ideas de negocio con potencial de convertirse en negocio verde.',
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
            'activity_id' => 11147,
            'year' =>1,
            'value' => 2,
            'description' => 'En el marco del presente proyecto se ejecutaron los siguientes proyectos y/o acciones para la preservación, conservación y recuperación de prácticas tradicionales en los territorios de grupos étnicos: Establecimiento de parcelas agroforestales para la recuperación de suelos degradados para la preservación, conservación y recuperación de los recursos naturales y el ambiente con la comunidad del Consejo Comunitario de las Botas, municipio de El Tambo (Esta acción se desarrolló en coordinación con el proyecto No. 1.1.4).Minga de restauración ecológica comunitaria con el Consejo Comunitario de las Botas en el Municipio de El Tambo, para la preservación, conservación y recuperación de los nacimientos de agua de esa zona.Fortalecimiento de las estrategias educativo-ambientales (PRAE, PROCEDA, RNJA) identificadas por las comunidades afrodescendientes con el enfoque de saberes tradicionales para la preservación, conservación y recuperación de los recursos naturales y el ambiente, en el municipio de López de Micay, departamento del Cauca (Esta acción se desarrolló en coordinación con el proyecto No. 6.1.1) e Implementación de sistemas de cosecha de aguas lluvias como estrategia de adaptación al cambio climático en parcelas agroforestales comunitarias en los municipios de Totoró y Silvia, para la preservación, conservación y recuperación de los recursos naturales y el ambiente (Esta acción se desarrolló en coordinación con el proyecto No. 3.1.1.
        De igual manera se apoyaron otras acciones relevantes como: • Apoyo financiero al Convenio 510 de 2020 con el municipio de Santa Rosa, • Apoyo financiero para la implementación de 80 estufas ecoeficientes, • Apoyo financiero al Convenio 236 de 2020 con el Consejo Regional Indígena del Cauca –CRIC-, • Apoyo financiero al convenio 531 de 2020 con el Cabildo del Resguardo Indígena Papallaqta y • Apoyo técnico a la ejecución del convenio Interadministrativo No. 226 del 8 de mayo de 2020 con el Cabildo Mayor del Pueblo Yanacona',
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
            'activity_id' => 11148,
            'year' =>1,
            'value' => 8,
            'description' => 'La Corporación ha logrado fortalecer once (11) CIDEAM en el Departamento, de los siguientes municipios: Inzá, Cajibio, Guapi, Lopez de Micay, Santa Rosa, Guachené, Toribío, Balboa, La Vega y Popayán. 
        * El Comité Técnico Interinstitucional de Educación Ambiental Departamental CIDEA-Cauca, en cabeza de la CRC, la Secretaria de Educación Departamental-SED , la Alcaldía  de Popayán y la Red de Proyectos Ambientales del Cauca-REDEPRAES; se reactivo participando a través del CIDEA Sur Pacifico (Cauca-Valle y Nariño), con el Seminario Taller de profundización: “Educación Ambiental, Participación Comunitaria y Desarrollo Local”. 
        * CIDEAM Inzá: 3 mesas técnicas para construcción de PEAM, 3 capacitaciones de fortalecimiento: Caja de Herramientas PEAM MADS-CRC, capacitación en manejo Integral de Residuos Sólidos.
        * CIDEAM Toribío: 2 mesas técnicas Política de Educación Ambiental y estructura PEAM, una capacitación Caja de Herramientas PEAM Ministerio.
        * CIDEAM La Vega: 1 mesa técnica Política de Educación Ambiental, reactivación de CIDEAM.             
        * CIDEAM POPAYÁN: 1 Socialización Caja de Herramientas PEAM MADS-CRC, reactivación CIDEAM, 1 mesa técnica de trabajo plan de acción construcción PEAM. 
        * CIDEAM GUAPI: 3 mesas técnicas para construcción de PEAM.   
        * CIDEAM CAJIBIO: 3 mesas técnicas de construcción de PEAM.  
        * CIDEAM LÓPEZ DE MICAY: 1 mesa técnica de construcción de PEAM. 
        * CIDEAM TORIBÍO: 2 mesas técnicas Política de Educación Ambiental y estructura PEAM, 1 capacitación Caja de Herramientas PEAM Ministerio.
        * CIDEAM SANTA ROSA: 1 capacitación Caja de Herramientas PEAM Ministerio, 2 mesas técnicas Política de Educación Ambiental, reactivación de CIDEAM y estructura PEAM.',
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
            'activity_id' => 11149,
            'year' =>1,
            'value' => 7,
            'description' => 'Se priorizaron cinco (5) PRAEs y siete (7) PROCEDAs (en concordancia con los CIDEA municipales como entes rectores locales de trabajo interinstitucional). Para los PRAE a nivel departamental, se han realizado cinco (5) talleres de fortalecimiento conceptual y metodológico a docentes de Instituciones Educativas-IEs, en articulación con mesas técnicas CIDEA-REDEPRAES, realizando trazabilidad entre las dos estrategias educativo ambientales en los municipios de Inzá, Cajibío,, Guapi y López de Micay, donde participaron un promedio de doce (12) IEs-sedes por municipio, representadas por los docentes-dinamizadores ambientales que lideran el PRAE Institucional. Se reconstruyeron y ajustaron los formatos de proyectos PROCEDA y PRAE como guías metodológicas institucionales, y los formatos de caracterización de los PRAEs, dentro del proceso inicial de resignificación de los mismos. 
        Las actividades de Gestión de la Red Nacional de Jóvenes de Ambiente-RNJA hacen referencia a un acercamiento de la RNJA-CRC a través de mesas técnicas proyectivas y de fortalecimiento para el desarrollo de planes de trabajo tanto del nodo departamental como municipales (12-02-2020 y 17-02-2020); (02-03-2020); (12-06-2020 y 26-06-2020). Como resultado de estas mesas, se establecieron acuerdos y compromisos con respecto a unificación y concertación para la operatividad en ejecución 2020, a la fecha, los nodos municipales a través del nodo departamental han presentado planes de trabajo y proyectos a gestionar, incluyendo acciones educativo ambientales de aporte Institucional.',
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
            'activity_id' => 11150,
            'year' =>1,
            'value' => 1,
            'description' => 'En el municipio de Santander de Quilichao, se suscribió la alianza pública privada C.R.C. - ANDI, la cual proyecta fortalecer su relación para desarrollar en el Norte del Cauca, procesos educativo ambientales, tales como: campaña posconsumo, evento colibrí dorado, feria ambiental entre otras acciones.
        Organización y participación Charlas de Diálogo de saberes – Alianza PAVCO – Zona Franca, Municipio de Guachené – CORPOPALO y C.R.C.
        En proceso entrega de insumos para PROCEDA con Municipio de Guachené, 70 familias',
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
            'activity_id' => 11151,
            'year' =>1,
            'value' => 4,
            'description' => 'Se ejecutaron acciones educativo ambientales con proyecto Ecosistemas Estratégicos: En el Humedal de páramo en el sitio El Punto de la Montaña Km. 54 vía a Inzá, se realizó aislamiento de 3 has y Proyecto Fauna: Apoyo en recepción, seguimiento de decomiso preventivo y liberación de fauna silvestre decomisada (4 tortugas, 3 guacamayos y 1 zorro), adicionalmente se ha apoyado en la conmemoración de las fechas ambientales programadas por la Corporación con diferentes campañas, eventos y divulgaciones. Así mismo se inició la formación de tres (3) grupos de Dinamizadores Ambientales (Grupo Mujeres Pescador Caldono, Grupo Mujeres Astromelias Popayán y Grupo empleados Hotel La Plazuela Popayán), la cual fue suspendida a raíz de la pandemia derivada por el COVID 19.  Se acompaña en mesas técnicas de socialización de procesos y trazabilidad desde el componente de educación ambiental en la formulación del POT Popayán.',
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
            'activity_id' => 11152,
            'year' =>1,
            'value' => 5,
            'description' => 'Se facturaron los valores correspondientes a Tasa por uso de Agua, Tasa retributiva, Transferencias del sector eléctrico, seguimiento y evaluación ambiental y adicionalmente se realizó la facturación por concepto de multas y sanciones y tasa bosque. Así mismo, Se elaboraron requerimientos dentro del cobro persuasivo efectuado por la Subdirección Financiera, logrando recaudar $964.809.220, con un porcentaje de recaudo del 96.3% del valor proyectado.',
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
            'activity_id' => 11153,
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
            'activity_id' => 11154,
            'year' =>1,
            'value' => 97,
            'description' => 'En la ejecución del Plan operativo anual para el aprovisionamiento, mantenimiento, adecuación de la infraestructura física, administrativa y logística en la Corporación, se realizaron las acciones que generan las condiciones administrativas necesarias para que los servidores públicos de la Corporación realicen sus funciones y el plan de acción institución pueda ejecutarse como son: 
        • Arrendamiento de bienes inmuebles para el cumplimiento del objeto misional de la Corporación en 4 de sus direcciones territoriales.
        • Provisión del servicio de vigilancia permanente en las instalaciones de la Corporación
        • Provisión del servicio de aseo permanente en las instalaciones de la Corporación.
        • Provisión del servicio de internet permanente en las instalaciones de la Corporación.
        • Disponibilidad permanente de energía eléctrica de la Corporación.
        • Disponibilidad permanente de agua de la Corporación.
        • Disponibilidad de servicios de telefonía en la Corporación.
        • Reconocimiento económico de transporte -RETO- a los servidores públicos.
        • Pago por concepto de administración y predial del lote especial 1 A ubicado en el Parque Industrial.
        • Pago de predial de todos los bienes inmuebles de la Corporación.
        
        ',
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
            'activity_id' => 11155,
            'year' =>1,
            'value' => 97,
            'description' => 'En concordancia al Marco de Referencia de Arquitectura Empresarial para la Gestión de TI del Estado colombiano se desarrolló el Plan Estratégico de las Tecnologías de la Información y Comunicaciones (en adelante PETI) como artefacto que se utiliza para expresar la Estrategia de TI para el fortalecimiento de las acciones que permiten el cumplimiento del objeto misional de la Corporación. El proceso contractual que tenía por objeto la obtención de un sistema de recuperación para la información de la entidad fue declaro desierto, situación que explica la no ejecución de la totalidad del presupuesto proyectado.
        A través del PETI se desarrollaron acciones para el apoyo de las necesidades de información de la entidad, el uso y acceso de la tecnología a corto, mediano y largo plazo. Se administró de manera eficiente los recursos tecnológicos, los sistemas de información y la información impulsando la transformación digital en la Corporación por medio de cinco dimensiones( estrategia TI, gobierno TI, sistemas de información, gestión de Información, dominio de uso y apropiación). Así mismo, Se realizaron las atenciones y soportes a requerimientos por parte de las diferentes dependencias sobre la infraestructura tecnológica (hardware y software) de la entidad. En total el equipo del proceso de gestión TI resolvió 2478 solicitudes durante la vigencia 2020.
        ',
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
            'activity_id' => 11156,
            'year' =>1,
            'value' => 7,
            'description' => 'Durante la vigencia 2020 para el fortalecimiento de las siete (7) Direcciones Territoriales (DT´s) en la capacidad operativa, administrativa, jurídica y logística atendiendo trámites, servicios y demás aspectos ambientales, solicitados por los usuarios externos, se desarrollaron las siguientes acciones: • Contratación de (26) profesionales con perfil ambiental para apoyar la capacidad operativa de las DT´s, • Contratación de (6) Tecnólogos con perfil ambiental, • Contratación de (9) profesionales en Derecho para apoyar la capacidad jurídica de las DT´s,• Contratación de (2) profesionales con perfil administrativo, para apoyar la capacidad Administrativa, ontratación de (5) bachilleres para apoyar la capacidad administrativa y logística, • Transporte fluvial para funcionarios de la DT Pacífico, para realizar las actuaciones de protección y vigilancia de los recursos naturales y del medio ambiente.
        Por otro lado, se atendieron los requerimientos priorizados de mejora en la infraestructura física y/o adecuaciones locativas para el fortalecimiento y normal funcionamiento de las DT´s, como a continuación se relaciona:
        ',
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
            'activity_id' => 11157,
            'year' =>1,
            'value' => 96,
            'description' => 'La CRC en cumplimiento de su Plan de Acción Institucional, diseñó e implementó el Plan Estratégico de Talento Humano para la vigencia 2020 el cual se encuentra publicado en la página web institucional https://crc.gov.co/informacion/planeacion-gestion/planes-institucionales/plan-gestion-talento-humano/ .  En él, se incluyeron los planes de bienestar e incentivos, capacitación y seguridad y salud en el trabajo. En cumplimiento del Plan Institucional de Capacitación, durante la vigencia 2020 se realizaron 30 capacitaciones. Así mismo, se realizaron  actividades que contribuyeron a mejorar la calidad de vida de los servidores públicos y sus familias a través de espacios que proporcionaron el mejoramiento del desarrollo integral en sus dimensiones mente, cuerpo y emoción, en los ciclos de ingreso, permanencia y retiro de la entidad. Es preciso señalar que las actividades programadas inicialmente fueron ajustadas de tal manera que pudieran ser desarrolladas cumplimiento las medidas de bioseguridad establecidas por el protocolo de bioseguridad de la CRC, y las disposiciones del Gobierno Nacional con ocasión de la emergencia sanitaria producida por la Covid-19. en el marco del Plan de Seguridad y Salud en el Trabajo y la Resolución 0312 de 2019, anticipar, reconocer, evaluar y controlar los riesgos que puedan afectar la seguridad y la salud en los espacios laborales. Es importante señalar además que, desde el SST, se ha liderado las medidas con ocasión de la emergencia ocasionada por la Covid-19.
        
        
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
            'activity_id' => 11158,
            'year' =>1,
            'value' => 100,
            'description' => 'Durante la presente vigencia en curso se desarrollaron acciones para la Implementación del Modelo Integrado de Planeación y Gestión las cuales constaron de 4 etapas. Etapa 1 Sensibilización: se programó llevar a cabo sensibilización y socialización a los 10 procesos de la entidad y las 7 territoriales en la importancia y la operación del modelo, logrando llevar el mensaje a todos los procesos de la entidad. Etapa 2 Autodiagnosticos: Durante la presente vigencia se llevó a cabo la ejecución de las dimensiones: Dimensión 1 Talento Humano, dimensión 6 de Gestión del Conocimiento ejecutadas a través de la actualización de los auto diagnostico 1.1 Talento Humano 1.2 Integridad; Dimensión 2 Direccionamiento estratégico a través de los diagnostico 2.1 Direccionamiento Estratégico y Planeación y 2.2 Plan Anticorrupción, las cuales se han venido trabajando con el recurso humano de los procesos que lo lideran y el acompañamiento de los procesos de planeación, control interno y SIG. En el segundo trimestre se completaron los 16 autodiagnósticos de las 7 dimensiones del Modelo Integrado de planeación, dando cumplimiento con la actualización a 16 autodiagnósticos que indica el MIPG. Etapa 3 Planes de Acción: se realizó el diligenciamiento y planteamiento de 16 Planes de acción correspondientes al MIPG, logrando integrar en un solo documento denominado Plan de Acción Integrado – MIPG un total de 582 actividades propuestas para el mejoramiento en cada una de las dimensiones del modelo. Etapa 4 - Seguimiento: En esta etapa de acompañamiento y seguimiento a la implementación de las diferentes estrategias de mejora.',
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
            'activity_id' => 11159,
            'year' =>1,
            'value' => 98,
            'description' => 'Para la presente vigencia se formuló y ejecutó el plan Operativo para el Mantenimiento y mejora continua del SIG, , en el cual se definió  responsables de los diferentes procesos del cronograma 2020, responsabilidades por numeral de la norma a nivel de procesos, áreas y cargos del nivel directivo.De acuerdo al Plan del SIG se ejecutaron las siguientes actividades para dar cumplimiento al mantenimiento continuo del SIG: 1.Se realizaron acciones de fortalecimiento que conllevaron al mantenimiento, actualización y mejora continua del SIG (Reporte de NO Conforme, No Conformidades; definición y seguimiento a acciones. 2. Sensibilización y socialización del SIG , se programaron 17 socializaciones las cuales ya fueron cumplidas a los 10 procesos de la entidad y las 7 territoriales.  3. Se realizó seguimiento a las solicitudes de acción de documentos atendidas por el aplicativo Gestor, las cuales fueron: Atención a 98 acciones de documentos lo que permite a la Corporación contar con una información actualizada. 4. Implementación y Mantenimiento de la documentación del SIG, acción que se puede evidenciar en el módulo SIG destinado desde el aplicativo gestor V2. 5. A la fecha se cuenta con información actualizada en el aplicativo Gestor en temas como: Procesos, procedimientos, Documentos externos, guías, manuales etc., acción reflejada en el Listado Maestro de Documentos Internos y Externos.
        
        9. A 31 de diciembre de 2020, se realizaron 2 reportes de la actualización de la información según solicitud de acción de documentos del SIG atendida en el Aplicativo Gestor, con reporte de avance trimestral.
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
            'activity_id' => 11160,
            'year' =>1,
            'value' => 100,
            'description' => 'La Oficina de Control Interno ejecutó un avance del 98% respecto del Plan Operativo en el marco de los cinco roles definidos para el Sistema de Control Interno; a la fecha se han desarrollado 21 actividades en los roles asignados.',
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
            'activity_id' => 11161,
            'year' =>1,
            'value' => 95,
            'description' => 'Se formuló el plan operativo en el marco del plan estratégico de comunicación 2020, el cual puede ser consultado en el siguiente enlace:  https://crc.gov.co/wp-content/uploads/2020/12/Plan-de-Comunicaciones-2020.pdf_OKOK.pdf , de las cuales se dio cumplimiento a 19 de las 19 acciones planteadas en este Plan. se han realizado 104 boletines informativos los cuales se encuentran publicados en la página web institucional, se realizaron veintiséis (26) campañas institucionales ambientales  Global BIGDay y divulgación de Colombia como 1er puesto en avistamiento de aves, Ciclo de conferencias Experiencias de Pajareros, Ciclo de conferencias conmemorando el día Mundial del Medio Ambiente, Ciclo de conferencias para promocionar el área de negocios verdes de la corporación, Campaña de expectativa y promoción sobre el regreso del Festival de la Cosecha, Ciclo de conferencias sobre Fauna y Conservación, Ciclo de conferencias sobre la Ruta del Posconsumo, Ciclo de conferencias Huertos de Vida, Ciclo de conferencias Conmemorando el día mundial de la Lucha Contra el Ruido, Campaña de Gestión del cambio climático, Ciclo de conferencias sobre educación Ambiental, Feria virtual de Negocios Verdes, Sensibilización sobre la temporada de lluvias 2020 y Navidad Ambiental y Sostenible), se realizaron 14 videos institucionales informativos, 13 programas de radio (podcast), se cuenta con un plan de marketing digital con sus respectivos resultados.',
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
            'activity_id' => 11162,
            'year' =>1,
            'value' => 95,
            'description' => 'La Secretaria General, ha dado cumplimiento del 95% de las acciones del Plan Institucional de Archivo – PINAR, el cual se encuentra publicado en la página web institucional en el siguiente link: https://crc.gov.co/wp-content/uploads/2020/01/PLAN-INSTITUCIONAL-DE-ARCHIVO-PINAR-2020.pdf. El PINAR fue formulado y aprobado por el Comité de Archivo y adoptado mediante la Resolución 00081 de 30 de enero de 2020. 
        Frente al proyecto: Implementación de buenas prácticas del Proceso de Gestión Documental,  se capacitaron a las siete (7) Direcciones Territoriales y a las nueve (9) áreas de la Sede Central de la Corporación, en el manejo de la documentación tanto física como digital. 
        Para la aprobación e implementación de los instrumentos archivísticos (TRD y TVD), se contrató empresa externa para la elaboración de las TRD, el cual ha venido realizando el diagnóstico de cada una de las áreas de la Corporación, así mismo se realizó el diagnóstico de las tablas de valoración documental, donde se comprobó múltiples falencias en la elaboración del instrumento archivístico, y sin evidencias documentadas para llegar al producto final que es la TVD, se observó un avance del 10%, se sugirió contratar personal externo para la elaboración de las tablas de valoración documental. Respecto al proyecto: Actualización y aprobación del Plan de Conservación Documental, se cuenta con un producto elaborado en el año 2018, el cual se encuentra en proceso de actualización, teniendo en cuenta que a la fecha se han realizado los diagnósticos de las dependencias de la sede central y a las DT. Centro, DT Patía, DT Norte y DT Tierradentro. 
        
        Frente al proyecto: Adecuación de espacios físicos para la custodia de documentos, se realizaron diagnósticos de los archivos de gestión de la sede central y de las Direcciones Territoriales Norte, Patía, Centro y Tierradentro, así mismo se realizó la adecuación de una oficina en el archivo central de la Corporación, también se contó con jornadas de limpieza del fondo documental acumulado. 
        Así mismo, se realizó el acompañamiento para la organización de documentos de archivos de gestión en las dependencias de la Sede Central y la Dirección Territorial Patía, donde se evidencia un 90% de avance en la organización documental.
        ',
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
            'activity_id' => 11163,
            'year' =>1,
            'value' => 95,
            'description' => 'La Secretaria General, ha dado cumplimiento del 95% del, lo cual se evidencia con las siguientes actividades:
        Mediante Resolución 1297 del 14 de diciembre de 2020 se aprobó y se adoptó el Plan Operativo de Atención al Ciudadano, el cual se encuentra publicado en la página institucional de la Corporación, en el siguiente link: https://crc.gov.co/wp-content/uploads/2020/12/Reso-1297-de-14-de-diciembre-de-2020-Plan-Atenc.-Ciudadano.pdf , donde se dio cumplimiento a las 24 acciones establecidas en el plan frente al marco de los componentes: 4. Mecanismos para mejorar la atención al ciudadano y 5. Transparencia y acceso a la información. Así mismo se realizaron seis (6) capacitaciones cuyo objetivo es la atención al ciudadano frente a la coyuntura presentada por la pandemia y la mejora en los tiempos de respuestas a las PQRD, tres (3) capacitaciones fueron virtuales y tres (3) capacitaciones presenciales, estas capacitaciones fueron a la D.T. Centro, Subdirección de Gestión Ambiental, Subdirección Defensa del Patrimonio, D.T. Norte, D.T. Patía y D.T. Tierradentro.
        Se realizaron 3 campañas publicitarias para la participación ciudadana en la Rendición de Cuentas a través de la red social Facebook, Página web y redes de El Nuevo Liberal, así mismo se realizó la convocatoria para la rendición de cuentas que se realizará el 26 de enero de 2021 en el municipio de El Tambo.
        ',
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
            'activity_id' => 11164,
            'year' =>1,
            'value' => 1,
            'description' => 'La Corporación cuenta con un laboratorio ambiental debidamente acreditado por el IDEAM a través de las Resoluciones No. 2199 de 28 de septiembre de 2016 y No. 1327 de 23 de junio de 2017, bajo la Norma Técnica Colombiana NTC-ISO/IEC 17025. Durante el 2020 se realizaron actividades como:  Aseguramiento de la calidad: Contratación de personal técnico apto para la operación del laboratorio, realización de ensayos de aptitud para evaluar la competencia técnica del laboratorio, contratación para la realización de auditoria interna al laboratorio y contrato Interadministrativo con el IDEAM para la renovación y extensión de la acreditación. 
        Operación: Se apoyó a las Subdirecciones de Defensa del Patrimonio Ambiental y Gestión Ambiental en el análisis de muestras provenientes de monitoreo de corrientes superficiales, vertimientos industriales y domésticos, igualmente en la atención a quejas y denuncias relacionadas con la contaminación del recurso hídrico del Departamento, a través de las Direcciones Territoriales. 
        
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
            'activity_id' => 11165,
            'year' =>1,
            'value' => 93,
            'description' => 'Para la vigencia 2020 se construyó el plan operativo para la legalización y el saneamiento permitió avanzar en la atención de las necesidades y obligaciones prioritarias emanadas de la propiedad y tenencia sobre los bienes muebles e inmuebles de la Corporación. Dicho plan contiene un diagnóstico sobre el estado actual de los bienes muebles e inmuebles de la Corporación, y así mismo, establece una serie de acciones prioritarias para su atención en los competentes jurídico y financiero. Se realizaron acciones tendientes a la identificación del estado jurídico y financiero de los 15  bienes inmuebles propiedad de la Corporación.',
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
            'activity_id' => 11166,
            'year' =>1,
            'value' => 100,
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
