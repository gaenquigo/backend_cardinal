<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorpoguavio2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 14317,
            'year' =>3,
            'value' => 50,
            'description' => '• Solicitud de reporte de seguimiento y evaluación del POMCA rio Bogotá 
        • Consolidación de la información reportada para el año 2 de los POMCAS Guavio, Humea y Guayuriba para la formulación de los informes.
        • Asistencia técnica a entes territoriales y equipos internos relacionadas con la retroalimentación de los reportes del año 2 de los POMCAS Guavio, Humea y Guayuriba.
        • Participación en Comités Técnicos del POMCA rio Bogotá relacionadas con el Seguimiento y evaluación.
        • Realización de Comités Técnicos de los POMCAS Guavio y Humea para la socialización de nueva convocatoria de Consejos de Cuenca y analisis OMEC.
        • Acompañamiento en reuniones citadas por el Consejo de Cuenca.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10632,
            'year' =>3,
            'value' => 50,
            'description' => '• Armonización de los proyectos específicos de inversión del PAI “CORPOGUAVIO Somos Todos, Vida-Confianza-Desarrollo” con los componentes programáticos de los POMCAS presentes en la jurisdicción. 
        • Asistencias técnicas con los grupos internos de Corpoguavio relacionadas con la contextualización de las cuencas hidrográficas presentes en la jurisdicción, su composición, su instrumento de ordenación y análisis del componente programático.
        • Aprestamiento para la Conformación de la Red Regional de Consejos de Cuenca.
        • Armonización de los POMCAS en los EOT',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14319,
            'year' =>3,
            'value' => 50,
            'description' => '• Revisión del expediente del convenio interadministrativo tripartita No. 200-12-8-274 del 04 de octubre de 2013 y su contrato derivado, lo anterior con el fin de actualizar la información y verificar los documentos existentes.
        • Participación en reuniones para la liquidación del convenio interadministrativo tripartita No. 200-12-8-274 del 04 de octubre de 2013.
        • Revisión del proyecto de acta de liquidación del convenio interadministrativo tripartita No. 200-12-8-274 del 04 de octubre de 2013.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14320,
            'year' =>3,
            'value' => 0,
            'description' => 'Para el segundo  trimestre de la vigencia 2022, se desarrollaron mesas tecnicas de trabajo con los municipios de Gama, Junín, Gachalá, Fómeque, Ubalá, Gachetá y Medina, en el marco de las cuales, Corpoguavio asistió tecnicamente, asesoró y retroalimentó el objeto y alcance de la dimensión ambiental y los criterios y consideraciones del cambio climático frente al modelo de ocupacion del territorio y el inherente régimen de uso del suelo que se enmarca en la revision y ajuste de los EOT, teniendo en cuenta que la mayoria de los procesos de revision y ajuste de los mismos EOT para los municipios en mencion se encuentran en la etapa o fase de revision y discución interna por parte de los concejos municipales para su posterior aprobación y adopción. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10639,
            'year' =>3,
            'value' => 0,
            'description' => 'Durante el segundo trimestre de la vigencia 2022, se avanzó en la revision tecnica y metodológica y en el diseño preliminar de la herramienta que permitirá realizar el seguimiento y evaluación a la implementación de las determinantes ambientales en el marco de inicio en la ejecución de los EOT adoptados por los municipios de la jurisdicción. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10640,
            'year' =>3,
            'value' => 4,
            'description' => 'Durante el segundo trimestre de la vigencia 2022, se desarrollaron acciones de manera presencial tanto en cada municipio como en la sede principal de Corpoguavio con los municipios de Gachalá, Gama,  Junín y  Medina  orientadas al conocimiento de cada municpio de las áreas en condicion de amenaza y condicion de riesgo por eventos naturales amenazantes como movimiento de suelo, inundación y avenida torrencial, asi como, del regimen de uso del suelo y su importancia de la incorporación en los modelos de ocupación territorial para la gestion del riesgo bajo criterios de seguridad y resiliencia. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10641,
            'year' =>3,
            'value' => 50,
            'description' => 'Durante el segundo trimestre de la vigencia 2022, se propiciaron escenarios de participación con las administraciones municipales y concejos municipales de siete municipios de la jurisdicción en relación a las socializaciones en el alcance y aplicación   de la Resolución No. 247 del 02 de marzo de 2022 por medio de la cual se actualizan y adoptan las determinantes ambientales para la revisión y ajuste de los EOT de los municipios.   
        Finalmente se deja la claridad que las convocatorias fuerón realizadas en los 8 municipios, sin embargo el municipio de Guasca no participó y solicitó reagendar la misma para una próxima fecha que al reporte de esta ficha se encuentra sin definir por parte del municipio.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10642,
            'year' =>3,
            'value' => 50,
            'description' => 'Durante el segundo trimestre de la vigencia 2022, se propiciaron escenarios de participación con los consejos territoriales de planeación y grupos de interés de los municipios  de Gachalá, Gama, Junín , en el marco de los cuales, se socializó, abrió el espacio de discucion y retroalimentación en relación con el aspecto conceptual, legal, procedimental e instrumental para la definicion de modelos de ocupacion territorial y la revision y ajuste de los EOT. Por otra parte, se avanzó en la socialización   del bjeto, alcance y aplicabilidad  de la Resolución No. 247 del 02 de marzo de 2022 por medio de la cual se actualizan y adoptan las determinantes ambientales para la revisión y ajuste de los EOT de los municipios, se convocó a los 8 municipios de la jurisdicción, sin embargo el municipio de Guasca no participó y solicitó reagendar la misma para una próxima fecha que al reporte de esta ficha se encuentra sin definir por parte del municipio.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10643,
            'year' =>3,
            'value' => 9,
            'description' => 'Se adelanto el proceso contractual cuyo objeto obedece a “CONTRATAR LA PRESTACIÓN DE SERVICIOS PARA EL FORTALECIMIENTO DE LAS CAPACIDADES DE LOS TOMADORES DE DECISIÓN, GRUPOS DE INTERES Y ACTORES ESTRATEGICOS DEL ORDENAMIENTO AMBIENTAL TERRITORIAL Y LA PLANIFICACIÓN TERRITORIAL EN CUMPLIMIENTO A LAS METAS DEL PROYECTO PLANIFICACIÓN PARA EL DESARROLLO REGIONAL DEL PLAN DE ACCIÓN INSTITUCIONAL DE CORPOGUAVIO 2020  2023, CORPOGUAVIO SOMOS TODOS VIDA  CONFIANZA DESARROLLO”, actualmente el proceso contractual se encuentra publicado en la página del SECOP para quienes esten interesados en participar de la convocatoria participen de la misma, proceso SAMC 009 de 2022.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10655,
            'year' =>3,
            'value' => 0,
            'description' => 'Para el año 2022 se encuentra en la identificación de las zonas para la ubicación del nuevo Sistema de Alerta Temprana, mediante el diagnóstico en compañía de los Consejos Municipales para la Gestión del Riesgo de Desastres de los municipios de la Jurisdicción, se está estructurando el presupuesto del proceso, EPD y documentos para radicación de OJC.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10656,
            'year' =>3,
            'value' => 0,
            'description' => 'Para el 2022 se da un avance en el diagnóstico de los equipos a los cuales se les puede realizar el mantenimiento en el presente año, teniendo en cuenta la obsolescencia que ya presentan algunos equipos y se está estructurando el presupuesto del proceso a adelantar.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10658,
            'year' =>3,
            'value' => 0.6,
            'description' => '',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10659,
            'year' =>3,
            'value' => 0,
            'description' => 'El avance del proceso radica en la socialización del proceso con los CMGRD de los municipios de la Jurisdicción, a la recopilación de la información secundaria y a que se ha completado el 100% del producto de diagnóstico de todos los municipios y el 50% de avance del producto 2 para los municipios de Guasca y Gachalá.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10660,
            'year' =>3,
            'value' => 0,
            'description' => '2022
        Se desarrollo la fase precontractual para suscribir el Contrato de Obra 200-30.4-314-2022 cuyo objeto es la Segunda Etapa de la adecuación hidrogeomorfológica para en el sector Puente Militar sobre el Rio Nipore en el municipio de Medina. 
        Se continua el seguimiento al Contrato de Obra número 200-30.4-426-2021 correspondiente a la intervención en el sector El Severo del municipio de Junín, el cual fue suspendido el 28 de marzo de 2022 por un término de 2 meses y reiniciado el 26 de mayo de 2022. Tambien se recibieron las actividades del contrato de obra 200-30.4-479-2021 para la intervención en el sector Puente Militar sobre el Rio Nipore en el municipio de Medina. 
        Se realizó la fase precontractual para construir una obra de mitigación del riesgo en el Sector Rumichaca de la Vereda San Isidro bajo de Ubalá. Se formularon los proyectos, los estudios previos y la solicitud de CDP para adelantar una Licitación pública que contiene entre otros las intervenciones sobre la Quebrada La Moya en Medina y la afectación sobre un talud en la vía que conduce a la Vereda Guavio Portobelo en Gachalá. 
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10661,
            'year' =>3,
            'value' => 0,
            'description' => '2022:
        Se adelantó la fase precontractual y se suscribió el contrato de obra No. 200-30.4-313-2022 para la intervención en el sector Termales Aguas Calientes y en el municipio de Junín en el sector El Kiosco en los limites entre las veredas San Rafael y San Antonio. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10662,
            'year' =>3,
            'value' => 0,
            'description' => 'En etapa de revisión los documentos que han venido entregando los municipios en cuanto PMGRD, EMRE y Planes escolares de GRD',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10663,
            'year' =>3,
            'value' => 0,
            'description' => '• Se seleccionó el material pedagógico para la realización de actividades y adquisición de elementos de soporte para la realización de las campañas. 
        • Se ha programado y desarrollado las actividades propuestas en los diferentes escenarios de la jurisdicción, en cuanto al acompañamiento en las campañas de Gestión del Riesgo de Desastres, dirigidas a Docentes, Estudiantes, Entidades Públicas, CMGRD y Comunidad en general.
        • Se está adelantando el proceso contractual correspondiente para la ejecución de la limpieza de fuentes hídricas, en cada uno de los Municipios que hacen parte de la Jurisdicción.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10664,
            'year' =>3,
            'value' => 0,
            'description' => 'En el desarrollo de la actividad de atención a PQRS radicadas por los usuarios de la jurisdicción, allegaron 97 solicitudes de las cuales se asignaron a los diferentes profesionales del área los cuales realizaron 44 visitas técnicas las cuales se encuentran en elaboración de los conceptos técnicos, de igual manera se emitieron 22 respuestas a las solicitudes remitidas por los usuarios cuales fueron archivadas en las TRD.
        El rezago fué cumplido al corte con el 100% de la solicitudes atendidas.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10665,
            'year' =>3,
            'value' => 0,
            'description' => '2022
        Se formularon los proyectos, los estudios previos y la solicitud de CDP para adelantar una Licitación pública que contiene entre otros el mantenimiento a 8 obras de mitigación del riesgo construidas en los municipios de Fómeque, Gachalá, Gachetá, Guasca, Medina y Ubalá. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10740,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizaron 3 comités operativos en los que se conto con la participación de la Agencia de Desarrollo Rural - ADR, Agencia de Comercialización e innovación para el desarrollo de Cundinamarca, Secretaria de Agricultura de Cundinamarca y representantes de las Secretarías de Desarrollo Económico de los municipios de la Jurisdicción en el marco de la implementación de la estrategia de mercados campesinos, así mismo se participó de reuniones con la Secretaría de Ambiente del Departamento para la implementación de Plan Departamental de Negocios Verdes y por ultimo se suscribio agenda conjunta con resulución N° 0309 del 22 de abril de 2022 con la asociación de porcicultores PORKCOLOMBIA. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10741,
            'year' =>3,
            'value' => 0,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 se realizó un proceso de identificación y priorización de las actividades a desarrollar, asi mismo se avanza en la adjudicación de contrato para la implementación de 6 fincas piloto en el marco del convenio 150 suscrito con la Gobernación de Cundinamarca.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10742,
            'year' =>3,
            'value' => 4,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 durante el primer trimestre del año el equipo técnico de la ventanilla desarrollo un proceso de seguimiento a la actualización de soportes que avalan la inscripción y sostenimiento de negocios verdes verificados durante el segundo semestre de 2021, asi mismo se realizó convocatoria para inscripción para nuevos emprendimientos donde se postularon un total de 36, a la fecha se encuentran en proceso de acompañamiento técnico para la verificación de criterios de sostenibilidad.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10743,
            'year' =>3,
            'value' => 30,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 durante el primer trimestre del año el equipo técnico de la ventanilla desarrollo un proceso de seguimiento a la actualización de soportes que avalan la inscripción y sostenimiento de negocios verdes verificados por la entidad asi mismo la actualización de la nueva herramienta de verificación avalada por el MADS.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10744,
            'year' =>3,
            'value' => 1,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 durante el primer trimestre del año se avanzó en la formulación de la estrategia pedagogica de mercados campesinos, semillero academico Ruta de emprendimiento verde y la realización del primer foro Madrinas de la tierra, asi mismo se celebró el contrato de logistica 304 de 2022 mediante el cual se llevó a cabo el evento Global Big Day 2022 y por ultimo se avanza en el proceso de formulación de EPD para la realización de agenda academica a desarrollarse en el marco de la 4a feria de NV origen Guavio.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10745,
            'year' =>3,
            'value' => 0,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 se realizó un proceso de identificación y priorización de las actividades a desarrollar  en el marco de la implementación de apoyos financieros al cumplimiento de planes de mejora de negocios verdes verificados, asi mismo se avanza en proceso contractual para su adjudicación.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10746,
            'year' =>3,
            'value' => 1,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 se formuló la estrategia de mercados campesinos a desarollar en el marco de la alianza estrategica desarrollada con la Agencia de Comercialización de Cundinamarca, Agencia de desarrollo rural, Secretaria de Ambiente de Cundinamarca y Secretarias de desarrollo económico de la jurisdicción obteniendo como resultado la planificación de un evento regional que se desarrollará en el mes de julio en el muncipio de Gachetá, así mismo se ha participado de mercados campesinos y vitrina comercial realizada en la gobernación de Cundinamarca, se participó de encuentro turistico en la ciudad de Bogotá en la que se desarrolló una gira de experiencia exitosa en lugares emblematicos de la ciudad, en cuanto al proceso de aprestamiento se avanza en la formulación de estudios previos para propiciar la participación de los productores de la 4a feria de negocios verdes origen guavio.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14543,
            'year' =>3,
            'value' => 0,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 se avanza en el proceso de formulación de estudios previos para el desarrollo de foro temático de mercados de carbono a realizarse en los municipios de Medina y Gachalá con base en los resultados del proyecto REDD+.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10748,
            'year' =>3,
            'value' => 0,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 se suscribió el contrato 304 de 2022 mediante el cual se desarrolló el evento de aviturismo (Global Big Day) como estrategia para fortalecer el turismo de naturaleza, así mismo se han desarrollado acercamientos con el IDECUT para la suscripción de un convenio interadministrativo que nos permita el desarrollo de procesos de fortalecimiento al proyecto ruta del agua.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10749,
            'year' =>3,
            'value' => 0,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 se avanza en la planificación de estrategias que permitan el acompañamiento de la entidad en procesos de actualización de los planes de desarrollo turistico municipales.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10750,
            'year' =>3,
            'value' => 0,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 se avanza en el proceso de convocatoria para que los municipios de la jurisdicción presente proyectos de cofinanciación de procesos productivos sostenibles.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10751,
            'year' =>3,
            'value' => 0,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 se avanza en el proceso de evaluación de los proyectos presentados por las alcaldías municipales en el marco de convocatoria liderada por la entidad.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10752,
            'year' =>3,
            'value' => 0,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 se avanza en el proceso de formulación de EPD y proyecto de inversión para la implementación de modelos de ganaderia sostenible y sistemas apicolas en zona de amortiguación de páramos.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10753,
            'year' =>3,
            'value' => 0,
            'description' => 'En relación a las acciones desarrolladas en cumplimiento del presente indicador para la vigencia 2022 durante el primer trimestre del año se avanza en de estudios previos para la realización del primer foro y encuentro de jovenes empresarios de la jurisdicción.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14550,
            'year' =>3,
            'value' => 1,
            'description' => 'En lo corrido del primer semestre de 2022 se desarrolló junto con la Fundación Universitaria del Área Andina gracias al convenio marco de cooperación 477/2020 el Taller Teórico Práctico de Sostenimiento, ventilación y desagüe el día 01 de abril en la inspección de la Playa del municipio de Ubalá.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14551,
            'year' =>3,
            'value' => 1,
            'description' => 'Durante el primer semestre de 2022 se han adelantado diferentes enlaces que permitirán cumplir con la meta en el transcurso del año, se realizó el seguimiento a las diferentes actividades sociales que realizan algunas empresas que se encuentran en la jurisdicción.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10647,
            'year' =>3,
            'value' => 15,
            'description' => 'En este primer semestre hemos participado en diferentes escenarios involucrando empresas del sector y comunidades, lo anterior para reforzar gestión conjunta en materia Minero Ambiental.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10649,
            'year' =>3,
            'value' => 16,
            'description' => 'El objetivo Temático Responsabilidad Integral Sector Minero Energético generó acompañamiento no solo a titulares sino a instituciones y entes territoriales con el fin de ser un garante en todos los procesos que permitan la legalización ambiental de la actividad minera en la jurisdicción CORPOGUAVIO ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10650,
            'year' =>3,
            'value' => 0,
            'description' => 'En el primer trimestre se lograron 17 visitas de Inventario Minero para la verificación y estado de los 61 títulos mineros vigentes en jurisdicción CORPOGUAVIO esta actividad con el fin de identificar posibles actividades mineras sin los permisos requeridos y/o afectaciones ambientales en los mismos con el fin de iniciar acciones pertinentes según el caso. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14555,
            'year' =>3,
            'value' => 5,
            'description' => 'Cada actividad realizada por los integrantes del objetivo Temático Responsabilidad Integral Sector Minero Energético es divulgada por los canales de información de CORPOGUAVIO, sin embargo, hay espacios en los cuales se permite informar la comunidad el conjunto de actividades que realizan los profesionales en pro del mejoramiento del medioambiente en el sector económico minero. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10652,
            'year' =>3,
            'value' => 10,
            'description' => 'Durante el primer trimestre se realizaron los respectivos contactos con los profesionales de la Secretaria de Minas de la Gobernación de Cundinamarca ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14557,
            'year' =>3,
            'value' => 0,
            'description' => 'Durante el semestre los profesionales encargados recopilaron la información para dar cumplimiento a la actividad, la cual será entregada al área de comunicaciones para su revisión y posterior publicación en redes sociales.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10667,
            'year' =>3,
            'value' => 3,
            'description' => 'Se llevó a cabo evento de socialización del proyecto REDD+ con los propietarios de predios de la jurisdicción que residen en Bogotá. 
        
        Igualmente se realiza la presentación de los resultados del proceso de viabilidad del estudio del contenido de carbono en páramos y la posibilidad de iniciar un mercado de carbono, estudio que se realizó durante el 2021 en apoyo con la Gobernación de Cundinamarca.
        
        Se realiza preparación de recursos ogísticos para el desarrollo de los talleres en el segundo semestre del año.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10670,
            'year' =>3,
            'value' => 4,
            'description' => 'Se realiza contratación del personal a cargo del tema y se revisan los términos precontractuales del proceso de validación. Se realizan acercamientos a fin de iniciar la fase precuntractual del proceso.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10671,
            'year' =>3,
            'value' => 6,
            'description' => 'Se realiza contratación del personal a cargo del tema, haciendose necesario previo al registro, contar con la validación.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10674,
            'year' =>3,
            'value' => 6,
            'description' => 'Se realiza contratación del personal a cargo del tema, haciendose necesario previo a la verificación, haber abordado la validación y el registro.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10672,
            'year' =>3,
            'value' => 0,
            'description' => 'Para el primer trimestre del año 2022, se realiza verificacion de los huertos entregados por el contratista del municipio de Junin, Gama, Gachetá y Gachalá',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10673,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realiza la contratación del personal  el cual tiene como proposito realizar la planificación del  piloto de reconversion productivo que inicia desde la identificacion y priorizacion de las necesidades en el municipio de Junín y Guasca para iniciar con el proceso contractual y generar el producto para el cumplimiento de la meta establecida, se radica el proyectos especifico para la solicitud del certificado del Banco de Proyectos.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10675,
            'year' =>3,
            'value' => 24,
            'description' => 'Se realiza la contratacion del equipo de trabajo el cual tiene el compromiso de realizar la planificacion de los estudios y diseños de un BAMA, de esta manera  se priorizaron dos puntos uno en el municipio de Fómeque y el segundo en el Municipio de Guasca,  se obtiene la certificacion del Banco de Proyectos y el certificado de disponibilidad presupuestal.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10676,
            'year' =>3,
            'value' => 50,
            'description' => 'Se realiza el proceso de contratación del personal el cual asiste  a las reuniones programadas por el NRCOA y articula procesos con el Ministerio de Ambiente  en los talleres de Carbono Neutralidad, a su vez, se realiza asesoria en la formulación de los PIGCCT del municipio de Gachetá y Junín , Se asiste a los diferentes eventos realizados por el NRCOA y se participa en la mesa intersectorial de Camcio Clilamtico (Enlace CC SINA central) ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10730,
            'year' =>3,
            'value' => 4,
            'description' => 'Se realiza la contratación del personal que durante la vigencia realizará la actividad. Se presenta la estrategia de Monitoreo comunitario a los grupos de jóvenes de ambiente de la jurisdicción y al Parque Nacional Natural Chingaza. Se realiza taller de determinación de prioridades de monitoreo en Medina. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10732,
            'year' =>3,
            'value' => 12,
            'description' => 'Se realiza la contratación del profesional a cargo de la recopilación, organización y cargue de la información a ser cargada en el aplicativo SNIF, modulo restauración, iniciando la clasificación, registro y validación de la información. Se recibe asesoría y acompañamiento del IDEAM.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10734,
            'year' =>3,
            'value' => 20,
            'description' => 'Se realiza la contratación del profesional a cargo de la continuación del ejercicio de medición del stock de carbono, quien realiza precisiones en cuanto a la toma de datos en campo y define las acciones a ser efectuadas durante la vigencia. Se instalan 4 parcelas para el monitoreo del stock de carbono.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10735,
            'year' =>3,
            'value' => 15,
            'description' => 'Se realiza la contratación del personal que durante la vigencia realizará la actividad; se realiza revisión de documentación y se inicia el seguimiento de las especies con función de sombrilla para la juridicción. Se detallan calendarios fenológicos por especie. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10736,
            'year' =>3,
            'value' => 77,
            'description' => 'Se realiza la contratacion del personal a cargo del tema. Se realiza recolección de información primaria de los servicios ecosistemicos objeto de evaluación, mediante la metodología de Costos de producción. Se priorizan lugares de evaluación y servicios a ser evaluados.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10737,
            'year' =>3,
            'value' => 19,
            'description' => 'Se realiza la contratación del personal a cargo de la actividad. Se priorizan las actividades objeto de evaluación, y se realiza reconocimiento del estado actual de las actividades de reforestación. Se inicia el análisis de la información recopilada en campo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10738,
            'year' =>3,
            'value' => 12,
            'description' => 'Se lleva a cabo la contratación del profesional a cargo del tema; se consolida la información identificando las necesidades de los diferentes actores y las responsabilidades de cada uno en el sector forestal. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14582,
            'year' =>3,
            'value' => 15,
            'description' => 'Se realiza la contratación de los profesionales a cargo de la actividad. Se realiza acompañamiento a 29 empresas y centros de transformación, 11 estaciones de poicía, así como también a usuarios, capacitando y asesorando en trámites forestales, especialmente en el diligenciamiento de libro de operaciones forestales e informe anual de actividades y trámites forestales en la ventanilla VITAL.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10677,
            'year' =>3,
            'value' => 0,
            'description' => 'A través del proceso de contratación CM-002 se seleccionara La Consulltora para desarrollar el proyecto de delimitación de la zona de ronda hídrica de la Quebrada El Chulo ubicada en el municipio de Gachetá, Cundinamarca. El proyecto dará inicio. En el segundo. semestre de la vigencia',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10678,
            'year' =>3,
            'value' => 0,
            'description' => 'A través del proceso de contratación CM-002 se seleccionara La Consulltora para desarrollar el proyecto de actualización de la reglamentación para el uso y aprovechamiento del agua en el área de drenaje Quebrada Gusano del municipio de Ubalá.  El proyecto dará inicio. En el segundo. semestre de la vigencia',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10679,
            'year' =>3,
            'value' => 0,
            'description' => 'De acuerdo con la revisión documental realizada, se estableció para la presente vigencia adelantar todas las acciones que permitan actualizar y adoptar el PORH para la cuenca del Río Guavio',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10680,
            'year' =>3,
            'value' => 0,
            'description' => 'Se adelantó el proceso de contratación de la Consultora para desarrollar el proyecto de formulación del  Plan de Manejo para las microcuencas abastecedoras de los municipios de Gachalá y Junín.  El proyecto dará inicio en el segundo semestre de la vigencia.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10681,
            'year' =>3,
            'value' => 0,
            'description' => 'A través del proceso de contratación CM-003 se seleccionara La Consulltora para desarrollar el proyecto de monitoreo de calidad y cantidad del recurso hídrico para la vigencia 2022, de acuerdo a los requerimentos de la entidad. El proyecto iniciará en el segundo semestre de la vigencia.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10682,
            'year' =>3,
            'value' => 0,
            'description' => 'Con el apoyo de personal técnico se realizó el seguimiento al funcionamiento de todos los componentes de la red de estaciones, dentro de los cuales se encuentran pluviometros, estaciones limnimétricas y estaciones automáticas de nivel',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10683,
            'year' =>3,
            'value' => 50,
            'description' => 'Durante el primer semestre se realiza el cargue del RURH a la plataforma SIRH, teniendo a la fecha los siguientes datos: 2587 concesiones agua, 221 puntos de monitoreo, 8 concesiones de agua subterránea, 16 permisos de vertimiento y 358 fuentes hídricas',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10684,
            'year' =>3,
            'value' => 50,
            'description' => 'En cumplimiento de la normatividad ambiental legal vigente, se realizó la tasación a los usuarios del recurso hídrico, teniendo un total de 2096 concesiones.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10685,
            'year' =>3,
            'value' => 0,
            'description' => 'De acuerdo con la información reportada por  la Subdirección de Planeación el municipio de Gachalá manifestó interés en presentar proyecto relacionado con el uso eficiente y ahorro del agua. Se espera iniciar su ejecución durante el segundo semestre de la vigencia.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10686,
            'year' =>3,
            'value' => 15,
            'description' => 'El equipo técnico generó doce (12) conceptos técnicos de evaluación de Programa de Uso Eficiente y Ahorro del Agua -PUEAA, de acuerdo con los lineamientos de la resolución 1257 del 2018, expedida por el MADS. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14595,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizaron un total de quince (15) visitas a predios con el objetivo de evaluar sus características ambientales y su aporte en la conservación del recurso hídrico ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14597,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizó la actualización de la base de datos en Excel PTAR utilizando información de los seguimientos realizados a los PSMV de la vigencia 2021, anterior y demás documentos relacionados con manejo de ARD de los cascos urbanos y centros poblados de La Jurisdicción, con la evaluación de las visitas realizadas en estos seguimientos se procedió a realizar la matriz de evaluación, donde se priorizo el apoyo al municipio de Guasca acorde a los soportes técnicos y a los requerimientos dados desde la sentencia de rio Bogotá, sin embargo debido a la vinculación de otras entidades (EPC) se debe evaluar la posibilidad de trasladar la meta, ya que acorde a los tiempos no se lograría subir esta meta mas del 15% ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14598,
            'year' =>3,
            'value' => 0,
            'description' => 'Desde el área de banco de proyectos se realizó la invitación a la presentación de proyectos ante la corporación donde se vincula la actividad de APOYO A LAS ACCIONES PARA EL MANEJO Y SANEAMIENTO AMBIENTAL RURAL (sistemas sépticos), las cuales se presentado solicitudes ante la entidad frente a esta actividad el municipio de Gachalá y Fomeque.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14599,
            'year' =>3,
            'value' => 0,
            'description' => 'desde el área de banco de proyectos se realizó la invitación a la presentación de proyectos ante la corporación donde se vincula la actividad de Apoyo a las acciones de manejo integral de residuos sólidos., las cuales no se han presentado solicitudes ante la entidad frente a esta actividad, din embargo acorde a la formulación del plan de acción se priorizo a los municipios de Medina y Ubalá para brindarles apoyo',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14600,
            'year' =>3,
            'value' => 95,
            'description' => 'Las 16 visitas corresponden a 5 procesos contractuales, de los cuales ya se realizó concepto técnico, están numerados y fechados, los cuales reposan en sus respectivos expedientes y se encuentran en el área de jurídica donde están realizando los actos administrativos correspondientes. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10693,
            'year' =>3,
            'value' => 0,
            'description' => 'Donde en el mes de mayo y junio se llevó a cabo el seguimiento y la formulación de los conceptos técnicos ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10694,
            'year' =>3,
            'value' => 0,
            'description' => 'se realizó base de seguimientos, donde se verifico  los acto administrativos y proceso de notificación de cada PSMV (21), al igual que se realizaron comités técnicos con los municipios para informar las falencias y requerimientos que se deben cumplir con la ejecución de estos PSMV y los PGIRS ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10695,
            'year' =>3,
            'value' => 0,
            'description' => 'En el marco de la Formulación de guías de manejo relacionadas al saneamiento básico ambiental, para la vigencia 2022 se priorizo los temas de RAEE residuos de aparatos eléctricos y electrónicos y manejo de residuos de plaguicidas, de los cuales contamos con el contenido de cada guía y se está en el proceso contratual SAM-006',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14604,
            'year' =>3,
            'value' => 0,
            'description' => 'Acordes a la necesidad presentadas en el territorio se realizará acciones frente a como se debe prestan la formulación de un plan de saneamiento y manejo de vertimientos PSMV y a lineamientos técnicos para manejo de residuos solidos en ares protegidas de la jurisdicción, esta en proceso de formulacion de acto administrativo para que sean acojidos. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10697,
            'year' =>3,
            'value' => 0,
            'description' => 'Se genero la base de datos de cobro de tasa retributiva en el mes de febrero de 2022 a un total de 62 usuarios por un valor de $76.378.443,96 M/CTE, se radico el ante la subdirección administrativa y financiera el día 2 de marzo bajo radicado 20223100138, posteriormente se emitió el informe de cobro de tasa retributiva 573 del 23 de marzo de 2022, a la fecha se esta actualizando base de datos para solicitar los monitoreos para realizar el informe de metas individuales.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14606,
            'year' =>3,
            'value' => 53,
            'description' => 'Para la anualidad 2022 con respecto a la implementación del Plan de Gestión de Residuos o Desechos Peligrosos - PGIRESPEL, donde el documento en la vigencia 2021 fue modificada mediante la Resolución 1878 de 2021 expedida por Corpoguavio, donde el plan paso de contener doce actividades a veintitrés actividades en total promedio. Hasta la fecha se han realizado una serie de actividades, pero en primera instancia se llevó a cabo una reunión interna con los coordinadores de las áreas de IVC, Negocios Verdes y Educación Ambiental con el propósito de repartir responsabilidades puesto que el plan es trasversal con la planeación y ejecución de acciones ambientales. Después de repartidas las responsabilidades se llevó a cabo una reunión con los profesionales pertenecientes al área de Gestión Ambiental de Residuos Sólidos y Líquidos - GARSL quienes son los responsables de la implementación del PGIRESPEL regional los cuales ya han ejecutado tres talleres sobre el manejo y gestión de los residuos posconsumo y de las responsabilidades de todos los actores en especial la del generador; en cuanto a la publicación de piezas publicitarias sobre el manejo de RESPEL ya se han compartido 2 banner de 4 propuestos y de la actividad más sobresaliente del documento es la de la ejecución de una campaña de recolección de residuos posconsumo en la cual se busca integrar a todos los presidentes de las juntas de acción comunal de cada uno de los ocho municipios de la jurisdicción entre la planeación se busca capacitar a todas las personas posibles, funcionarios de las diferentes alcaldías y demás entidades publicas y privadas para que en el mes de septiembre y octubre se haga la devolución de residuos posconsumo tales como plaguicidas, pilas, bombillas principalmente',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14607,
            'year' =>3,
            'value' => 50,
            'description' => 'Se realizo asistencia técnica para manejo de residuos liuidos y solidos en cementarios  y  para un usuario que solicita asistencia técnica frente manejo de aguas residuales domesticas para zona rural.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10702,
            'year' =>3,
            'value' => 0,
            'description' => 'se inicia proceso de verificación de los puntos de vertimiento a realizar los monitores, donde se vinculo el subsector piscola con tres puntos y monitoreo de sistemas sépticos para reusó de agua residuales en actividades agrícolas, el cual este en proceso de elaboración de estudios previos. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10703,
            'year' =>3,
            'value' => 0,
            'description' => 'Se encuentran en ejecucion los   proyectos restauración en áreas de importancia estratégica en la jurisdicción de Corpoguavio — Cundinamarca - Código BPIN 2021011000219 y la Primera Fase Proyecto No. 02 Implementación de acciones que conduzcan a la rehabilitación ecológica en la jurisdicción de Corpoguavio -Cundinamarca - CODIGO BPIN 2021011000216 los cuales vinen de la vigencia 2021  APROBADOS POR EL MINISTERIO DE MEDIO AMBIENTE Y DESARROLLO SOSTENIBLE  para 2022 se cuenta con los recursos aprobados de la segunda fase del proyecto Implementación de acciones que conduzcan a la rehabilitación ecológica en la jurisdicción de Corpoguavio -Cundinamarca - CODIGO BPIN 2021011000216, el ejecutor esta realizando las actividades de trazada, plateo y repicado en el municipio de Guasca 15 hectareas',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10704,
            'year' =>3,
            'value' => 0,
            'description' => 'Se encuentran viabilizadas las 5 hectaresas para adelantar acciones de restauracion y seran intervenidas a traves de los contratos de restauracion que se adelantan, las actividades se llevaran acabo en marco de la ejecucion de los proyectos  Restauración en áreas de importancia estratégica en la jurisdicción de Corpoguavio – Cundinamarca - Código BPIN 2021011000219” y “Implementación de acciones que conduzcan a la rehabilitación ecológica en la jurisdicción de Corpoguavio - Cundinamarca - Código BPIN 2021011000216” aprobados por el ministerio de medio ambiente y desarrollo sostenible” El ejecutor es O-I Obras E Ingeniería Sostenible SAS',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10705,
            'year' =>3,
            'value' => 0,
            'description' => 'Se encuentra en ejecucion el PROYECTO IMPLEMENTACIÓN DE MEDIDAS DE ADAPTACIÓN A LA VARIABILIDAD Y CAMBIO CLIMÁTICO EN JURISDICCIÓN DE CORPOGUAVIO - CUNDINAMARCA  BPIN 2021011000212 aprobado por el FONAM con las actividades desarrolladas en este proyecto se dara cumplimiento a las mentas planteadas. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10706,
            'year' =>3,
            'value' => 0,
            'description' => 'Se encuentran en ejecucion los   proyectos restauración en áreas de importancia estratégica en la jurisdicción de Corpoguavio — Cundinamarca - Código BPIN 2021011000219 y la Primera Fase Proyecto No. 02 Implementación de acciones que conduzcan a la rehabilitación ecológica en la jurisdicción de Corpoguavio -Cundinamarca - CODIGO BPIN 2021011000216 los cuales vinesn de la vigencia 2021  APROBADOS POR EL MINISTERIO DE MEDIO AMBIENTE Y DESARROLLO SOSTENIBLE  para 2022 se cuenta con los recursos aprobados de la segunda fase del proyecto Implementación de acciones que conduzcan a la rehabilitación ecológica en la jurisdicción de Corpoguavio -Cundinamarca - CODIGO BPIN 2021011000216',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10707,
            'year' =>3,
            'value' => 0,
            'description' => 'Se cuenta con las hectareas identificadas para adelentar acciones de mantenimiento, se encuentra en desarrollo la LP 004 - 2022 objeto CONTRATAR OBRA PÚBLICA PARA ADELANTAR ACCIONES DE MANTENIMIENTO A LAS PLANTACIONES ESTABLECIDAS EN AÑOS ANTERIORES EN LA JURISDICCIÓN DE CORPOGUAVIO',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10708,
            'year' =>3,
            'value' => 45,
            'description' => 'Se han atenfdido las solicitudes mediante respuesta a traves de la plataforma SIDCAR y realizando visitas tecnicas en los casos requeridos asi como sus conceptos tecnicos.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10709,
            'year' =>3,
            'value' => 77,
            'description' => 'Se elaboro plan de seguimiento el cual se encuentra en revision y se han adelantado visitas en predios identificados',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10710,
            'year' =>3,
            'value' => 0,
            'description' => 'Se ha  atendido solicitudes de proteccion de fuentes hidricas emitidas por la comunidad, las actividades se van ha desarrollar por medio ejecución los proyectos  “Restauración en áreas de importancia estratégica en la jurisdicción de Corpoguavio – Cundinamarca - Código BPIN 2021011000219” y “Implementación de acciones que conduzcan a la rehabilitación ecológica en la jurisdicción de Corpoguavio-Cundinamarca - Código BPIN 2021011000216” aprobados por el ministerio de medio ambiente y desarrollo sostenible” cuyo ejecutor es  O-I Obras E Ingeniería Sostenible SAS, R/L Nelson Eduardo Gutiérrez Soto.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10711,
            'year' =>3,
            'value' => 0,
            'description' => 'S e tiene identificadas las areas por medio de vivitas tecnicas de viabilidad, en el municipio de Fomeque vereda la Pastora y en el municipio de Gacheta vereda Tuala, ya se generaron lso respectivos conceptos tecnicos  y se esta adelentando elaboracion de Estudios Previos para el proceso de contratacion.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10712,
            'year' =>3,
            'value' => 0,
            'description' => 'Se adelantan trámites para la suscripción de convenios con los municipios de Gachetá bajo el radicado n° 20221101994 del 16 mayo de 2022  y  el municipio de Fomeque bajo el radicado n° 20221102002 del 16 mayo de 2022 actualmente se encuentra en proceso de corrección de cada uno de los proyectos',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10713,
            'year' =>3,
            'value' => 25,
            'description' => 'NO SE REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10714,
            'year' =>3,
            'value' => 0,
            'description' => 'NO SE REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10715,
            'year' =>3,
            'value' => 45,
            'description' => 'NO SE REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14624,
            'year' =>3,
            'value' => 23,
            'description' => 'NO SE REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10722,
            'year' =>3,
            'value' => 14,
            'description' => 'NO SE REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia109 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10723,
            'year' =>3,
            'value' => 14,
            'description' => 'NO SE REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia110 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10724,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10725,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia112 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10726,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia113 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10727,
            'year' =>3,
            'value' => 60,
            'description' => 'NO SE REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia114 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10728,
            'year' =>3,
            'value' => 50,
            'description' => 'NO SE REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia115 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10729,
            'year' =>3,
            'value' => 1000,
            'description' => 'NO SE REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia116 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10795,
            'year' =>3,
            'value' => 287,
            'description' => 'Se realizan un total de 100 operativos, 1100 recorridos y 100 talleres casa a casa de la estrategia al control del trafico ilegal de especímenes de la diversidad biológica',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia117 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10796,
            'year' =>3,
            'value' => 50,
            'description' => 'Se evalúan un total de 75 aprovechamientos forestales, 98 concesiones de aguas superficiales, 8 permisos de vertimiento, 12 ocupaciones de cauce, 1 permiso de emisiones atmosféricas, 4 registros de libros de operaciones y 2 licencias ambientales',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia118 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10797,
            'year' =>3,
            'value' => 64,
            'description' => 'Se realizan las visitas técnicas de seguimiento a 100 aprovechamientos forestales, 288 concesiones de aguas superficiales, 8 concesiones de aguas subterráneas, 18 permisos de vertimiento, 81 ocupaciones de cauce, 25 licencias ambientales , 4 planes de manejo, restauración y recuperación – PMRRA, 6 permisos de emisiones atmosféricas y 9 planes de manejo ambiental - PMA',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia119 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14636,
            'year' =>3,
            'value' => 42,
            'description' => 'Se realizan 27 PUEAS',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia120 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10798,
            'year' =>3,
            'value' => 87,
            'description' => 'Se realizan un total de 326 conceptos tecnicos de los 340 allegados en la vigencia 2020, el 4,11% restante corresponde a solicitudes allgeadas a la entidad despues del 20 de diciembre de 2020, por lo que estan en tiempos para su atención',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia121 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10799,
            'year' =>3,
            'value' => 93,
            'description' => 'Se realizan 71 conceptos técnicos de tasaciones, 77 conceptos técnicos de seguimiento compensaciones, visita a pruebas, indagaciones preliminares, inspecciones oculares y 25 conceptos técnicos de visitas sociales ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia122 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10800,
            'year' =>3,
            'value' => 92,
            'description' => 'Se realizan un total de 314 conceptos tecnicos en atencion a quejas de carácter ambiental',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia123 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10801,
            'year' =>3,
            'value' => 68,
            'description' => 'Se realizan conceptos técnicos de subsectores productivos distribuidos así: 7 botaderos a cielo abierto - BACA, 2 planta de beneficio animal – PBA, 45 ebanisterías, 14 estaciones de servicio, 71 de otros subsectores y 103 de generadores de residuos hospitalarios y similares - RHYS',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia124 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10754,
            'year' =>3,
            'value' => 4,
            'description' => 'Durante la vigencia se realizó la contratación del personal para el desarrollo de las actividades del proyecto y se implementaron las siguientes estrategias: 1 aula ambiental, 5 giras ecopedagógicas, 13 obras de teatro de títeres, 9 talleres lúdico pedagógicos, 1 foro académico, 1 implementación de metodología wet y 6 Yincanas, al igual que se realizó revisión y actualización del rincón Infantil en la página web institucional en el siguiente link: https://educacion.corpoguavio.gov.co/rincon-infantil/',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia125 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10755,
            'year' =>3,
            'value' => 4,
            'description' => 'Se realizó acercamiento, asesoría, seguimiento y acompañamiento técnico a los CIDEAS de los 8 municipios de la Jurisdicción, al igual que se continuó en la revisión y avance de la construcción del Plan Ambiental Municipal. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia126 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10756,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizó la contratación del personal para el desarrollo de las actividades de Educación Ambiental, se priorizó los PROCEDAS a implementar en la presente vigencia orientados al manejo de residuos sólidos en los municipios de Gachetá y Junín, para lo cual se elaboró los proyectos específicos que fueron aprobados por los profesionales del Banco de proyectos de la Entidad expidiendo las respectivas especificaciones, se elaboró EPD y se solicitó CDP. De igual manera se realizó seguimiento al PROCEDA de Conservación Biológica y Promoción del Turismo Rural Comunitario en la Reserva Natural Tolima que iniciaron en vigencias anteriores. 
        En relación a la meta de rezago se ejecutó el Contrato de Prestación de Servicios No. 200-30.4- 452 del 16 de diciembre de 2021 suscrito con CONSORCIO PROCEDA 2021 desarrollándose las actividades establecidas correspondientes a 3 iniciativas ciudadanas. Dicho contrato se encuentra en proceso de liquidación. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia127 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10757,
            'year' =>3,
            'value' => 20,
            'description' => 'Para el periodo en ejecución se realizó asistencia y seguimiento a 23 instituciones educativas priorizadas en la implementación del PRAE; se realizó priorización de incentivos para 4 IE con las que se suscribió agendas en la presente vigencia y se actualizó visor geográfico, al igual que se lideró encuentro de IE en el municipio de Guasca para presentación y socialización de experiencias PRAE. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia128 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10758,
            'year' =>3,
            'value' => 20,
            'description' => 'Se realizó acercamiento a las 23 instituciones educativas priorizadas,  se solicitó el documento Plan de Gestión del Riesgo Escolar a las 4 IE priorizadas en la presente vigencia.
        Se efectuó la articulación con el área técnica de Gestión del Riesgo de la Corporación dando continuidad al proceso de acompañamiento con las IE por medio de la implementación de la campaña “Arriésgate a estar seguro” y  revisión del documento Plan Escolar para la Gestión del Riesgo . ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia129 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10759,
            'year' =>3,
            'value' => 1,
            'description' => 'En el marco del Convenio Interadministrativo de Cooperación suscrito con el Servicio Nacional de Aprendizaje SENA Regional Cundinamarca se realizó reunión con las IE de  Sueva del municipio de Junín y San Pedro de Jagua del municipio de Ubalá en el cual profesionales del SENA y la Corporación presentaron el proceso de formación a iniciar y se llegaron a acuerdos para su desarrollo y entrega de documentación. De igual manera se dio apertura al proceso de formación Técnico en sistemas agropecuarios y ecológicos en las dos instituciones educativas.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia130 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10760,
            'year' =>3,
            'value' => 10,
            'description' => 'Para el periodo en ejecución se desarrollaron las siguientes campañas:
        • Recurso Hídrico: 2 campaña con los niños, niñas y jóvenes de Guasca y Junín.
        •  Residuos Sólidos: 6 campañas en Gachalá. Gachetá, Medina, Ubalá  y Junín con actores estratégicos. 
        • Cambio y variabilidad climática: 2 campañas con los niños, niñas y jóvenes de Guasca y Junín.
        • Biodiversidad: 6 campañas con el batallón, comunidad y estuidantes de Junín y Gachalá.
        Se definió las fechas de Calendario Ambiental, donde se celebraron 8 por la Entidad y se concertaron las actividades para su conmemoración, las cuales se desarrollaron con Instituciones Educativas, en el marco del CIDEA y Redes Sociales, siendo éstas: 
        • Día Internacional para la protección de los Osos del Mundo.
        • Día Mundial del agua.
        • Día mundial del consumo responsable 
        • Día de la tierra.
        • Día del árbol.
        • Día de las aves.
        • Día de los residuos sólidos.
        • Día de la biodiversidad.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia131 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10761,
            'year' =>3,
            'value' => 1,
            'description' => 'Durante el periodo se adelantó la contratación del personal para el desarrollo de las actividades de Educación Ambiental y Participación dando inicio a la implementación de la estrategia de posicionamiento institucional en diferentes espacios de diálogo con diversos grupos poblacionales, socializando el quehacer institucional y el PAI 2020 – 2023 contando con la participación de 207 personas.
        Por otro lado, se adelantaron actividades de Posicionamiento con las IED incluidas en los procesos de PRAE en la vigencia 2022 y docentes de la Escuela Normal Superior de Gachetá contando con la participación de 361 personas. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia132 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10762,
            'year' =>3,
            'value' => 1,
            'description' => 'Se adelantó la contratación del personal para el desarrollo de las actividades de Participación, realizando la implementación de la estrategia con diferentes grupos poblacionales socializando los mecanismos de participación ciudadana, acompañado de un proceso de articulación institucional con estudiantes de las instituciones educativas de Fómeque, Gachalá, Medina y con los jóvenes de ambiente Medina, contando con la participación de 167 personas.
        De igual manera se solicitó a las personerías municipales la BD de la Veedurías presentes en cada municipio para identificar las que se encuentran activas. 
        
        De igual manera se cuenta con un espacio en la página web institucional en el que se abordan los mecanismos de participación en el siguiente link:  https://educacion.corpoguavio.gov.co/participacion/mecanismos-de-participacion/',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia133 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10763,
            'year' =>3,
            'value' => 2,
            'description' => 'En cumplimiento a lo estipulado en la normatividad vigente se realizaron 10 espacios de Dialogo previos a la Audiencia Pública en la que participaron 207 personas, realizó 2 Audiencias Públicas de Rendición de Cuentas presenciales  correspondientes a la vigencia 2021 transmitiéndose una de ellas también vía streaming . 
        De igual manera, los Directivos de la Entidad participaron en sesiones de Concejo convocados en los municipios de Medina. Guasca, Junín y Gachetá para conocer la gestión  adelantada por la Entidad.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia134 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10764,
            'year' =>3,
            'value' => 1,
            'description' => 'Se adelantó la contratación del personal para el desarrollo de las actividades, se tiene identificados dos semilleros de investigación de las instituciones Educativas Escuela Normal Superior de Gachetá y Martín Romero del municipio de Gama, se realizó EPD y se radicó proceso en el área de contratación. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia135 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14652,
            'year' =>3,
            'value' => 4,
            'description' => 'Se han implementado las siguientes actividades:
        *Se continuó con la implementación del “Plan Ambiental para la Transformación de Realidades”. 
        *Se realizó el Segundo Encuentro de Jóvenes de la jusrisdicción y se continúa adelantando acciones con los jóvenes de ambiente. 
        *Se realizó articulación interinstitucional con las alcaldías de los municipios de Guasca y Gama para procesos de empoderamiento con mujeres rurales.
        *Se realizó campaña posconsumo con las JAC de los municipios de Gachetá y Junín. 
        *En la página web se cuenta con un espacio denominada Educación Ambiental y dentro de ésta un subsitio denominado Participación en el que se hace un reconocimiento del rol y actuar de algunos grupos comunitarios, que se puede observar a través del siguiente link: https://educacion.corpoguavio.gov.co/participacion',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia136 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10634,
            'year' =>3,
            'value' => 50,
            'description' => 'Se realizo el seguimiento semestral al plan de acción 2020 / 2023',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia139 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10635,
            'year' =>3,
            'value' => 10,
            'description' => 'Se verifico el aporte de la gestión al PGAR',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia140 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10636,
            'year' =>3,
            'value' => 50,
            'description' => 'Se realizo seguimiento a los instrumentos de planificación Interna POAI / PAA',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia141 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10637,
            'year' =>3,
            'value' => 50,
            'description' => 'Se presto asistencia tecnica en el Banco de Proyectos para el primer semestre 2022',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia142 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10786,
            'year' =>3,
            'value' => 51,
            'description' => 'Se realizaron las actividades propuestas para el segundo trimestre evaluado, dando cumplimieto a las tareas enmarcadas dentro del PAI para la vigencia 2022.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia143 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10787,
            'year' =>3,
            'value' => 50,
            'description' => 'El Indicador para el desarrollo de politicas enfocadas en  la implementacion de las 7 Dimensiones y 19 Politicas de MIPG se registra el cumplimiento de las actividades propuestas para este periodo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia144 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10788,
            'year' =>3,
            'value' => 51,
            'description' => 'Frente al avance del indicador del Seguimiento y Evaluación al Sistema Integrado de Gestión se dio cumplimiento a las actividades requeridas presentando un avance del 51 %',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia145 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10767,
            'year' =>3,
            'value' => 60,
            'description' => 'Se estan realizando los respectivos mantenimientos a loe equipos tecnologicos de la entidad ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia147 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10768,
            'year' =>3,
            'value' => 60,
            'description' => 'Se realizo la contratacion del servicio de Internet ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia148 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10769,
            'year' =>3,
            'value' => 58,
            'description' => 'Se realizo la contratacion del aplicativo PCTG al igual que del servicio de Hosting ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia149 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10770,
            'year' =>3,
            'value' => 50,
            'description' => 'Ya se realizo la Verificacion de los elementos que seran tenidos encuenta para la renovacion ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia150 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10771,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizaron Estudios Previos y esta en solicitud de CDP ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia151 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14797,
            'year' =>3,
            'value' => 30,
            'description' => 'Ya se realizo la formulacion del plan de trabajo ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia155 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10776,
            'year' =>3,
            'value' => 20,
            'description' => 'Durante el primer semestre de 2022 continuamos realizando la emisión de los programas de radio, VIDA AL AIRE por las emisoras comunitarias y privadas Farrallones stereo 106,4, Ubalá FM 107,8, Chingaza FM 106,4 y Junín Stereo. Además de El Dorado Radio de la Gobernación de Cundinamarca y las 43 emisoras comunitarias del departamento, logrando de esta manera sumar una mayor audiencia y un mayor impacto en el territorio y fuera de el.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia156 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10777,
            'year' =>3,
            'value' => 60,
            'description' => 'Durante el primer semestre de 2022 la realización y emisión de los diferentes contenidos audiovisuales internos y externos de la gestión adelantada por la corporación, estuvo enmarcada en la promoción de proyectos y campañas ambientales de interés general.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia157 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10778,
            'year' =>3,
            'value' => 415,
            'description' => 'El primer semestre de la vigencia 2022 nos ha permitido seguir creciendo, cada vez más usuarios del territorio aprovechan el soporte que les brindan nuestras plataformas sociales para recibir el contenido que se elabora, y emite a traves de las mismas, sobre la gestión que adelanta la entidad y otros temas de su interes.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia158 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10779,
            'year' =>3,
            'value' => 50,
            'description' => 'El Plan estrategico de Información y Comunicación ha implementado diferentes estrategias de acompañamiento a las diferentes áreas de la entidad con el fin de lograr la visibilización de la marca CORPOGUAVIO lo que nos ha permitió distribuir piezas publicitarias con diferentes motivos ambientales y de imagen institucional (cuadernos, calendarios planeadores, sombrillas, mugs, bolsas reutilizables, esferos, afiches y plegables).',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia159 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10780,
            'year' =>3,
            'value' => 68,
            'description' => 'Se realizó la clasificación total de la información y se continuó el proceso de estructuración de la información geográfica para la Vigencia, la cual contempla la organización, depuración, actualización, transformación y migración de información para los diferentes estudios adelantados por la Corporación y que cuentan con insumos geográficos y cartográficos, así mismo se continuó el proceso de centralización de estudios, la cual corresponde a la migración de la información geográfica desde los ordenadores del SIG, al servidor SIG y se adelantaron nuevas pruebas en RED de la operatividad de la información, la cual consistió en interactuar con herramientas desde las Geodatabase dispuesta en el servidor SIG.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia160 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10781,
            'year' =>3,
            'value' => 56,
            'description' => 'Se adelantaron nuevos ejercicios de clasificación y obtención de información para su respectiva publicación en el visor geográfico, que respectan especialmente a información catastral. Se realizó la reinstalación del portal geográfico y del App Model Builder, así como nuevas configuraciones al tablero de control que almacena la información obtenida desde la aplicación Survey123 y se realizaron pruebas de asignación de parámetros del nuevo origen único nacional CTM12. Se ingresó en la base del SIG la información geográfica, cartográfica y documental del Plan de Manejo Ambiental del Distrito Regional de Manejo Integrado Chinchorro.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia161 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10782,
            'year' =>3,
            'value' => 80,
            'description' => 'Se realizó la identificación y clasificación de Software Necesario, para la producción de información. mediante soporte técnico se adelantó la instalación de ArcGis pro, con el fin asignar el nuevo origen único nacional CTM12 a las coberturas y visor geográfico. se adelantó la reinstalación de todo el portal geográfico y el tablero de control. De Otra parte se configuró el Software para la planificación de vuelos que permite la producción de información a partir de ejercicios de fotogrametría.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia162 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10783,
            'year' =>3,
            'value' => 56,
            'description' => 'Una vez elaborado y aprobado el cronograma de asistencia técnica para la vigencia 2022, Se adelantó la visita a los municipios de Medina, Fómeque, Guasca, Gachetá, Junín, Ubalá y Gama, mediante la cual se verificó la funcionalidad del software ArcGis, se aclararon inquietudes y se suministró la imagen satelital SAS Planet del año 2022.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia163 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10784,
            'year' =>3,
            'value' => 50,
            'description' => 'Durante la vigencia se atendieron el total de solicitudes externas presentadas a la oficina SIG de la Corporación mediante correo electrónico y SIDCAR y que respectan a la entrega o análisis de la información geográfica y cartográfica. Así mismo se atendió el total de solicitudes internas presentadas mediante el formato “Solicitud Interna de Información Geográfica y Cartográfica”. Se asesoró y acompaño en las solicitudes de análisis de la información Geográfica, las cuales se relacionaron en el formato “Consultas SIG”.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia164 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10785,
            'year' =>3,
            'value' => 50,
            'description' => 'Se realizó solicitud interna mediante el Sistema de Correspondencia SIDCAR a las diferentes áreas de la Corporación, de los reportes emitidos a las entidades administradoras de subsistemas que alimentan al SIAC',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia165 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10789,
            'year' =>3,
            'value' => 50,
            'description' => 'Para el segundo trimestre de 2022 se desarrollaron actividades previstas dentro del Plan Anual de Auditorías 2022 y enfocado al desarrollo de los 5 roles de la Oficina de Control Interno a la fecha se han llevado a cabo 38 actividades a corte junio de 2022',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia166 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10790,
            'year' =>3,
            'value' => 0,
            'description' => 'En el segundo trimestre del año 2022, se ha realizado cotizaciones y solicitudes para llevar a cabo la capacitación en el Marco Internacional para la practrica profesional de la Auditoria Interna y de los lineamientos establecidos por el Gobierno Nacional, esperando confirmación por parte de la entidad capacitadora.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia167 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10791,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizó comunicación interna para todos los funcionarios y contratistas con instrucciones para realizar el curso virtual del Archivo General de la Nación fundamentos básicos de gestión documental” y se recibieron 281 certificados.
        CORPOGUAVIO mediante contrato 446 de 2021 dio continuidad al proceso de digitalización de los documentos organizados del archivo central de la Corporación Autónoma Regional Del Guavio, el grupo de trabajo de Gestión Documental realizo la entrega y recepción de cajas de referencia X100 donde se relacionan las  carpetas entregadas según Series Documentales aplicando las Tablas de Retención del Depósito 2 desde la caja 351 hasta la caja 1606 para un total de 1256 cajas y del Depósito 1 desde la caja 1196 hasta la caja 1255, desde 1281 hasta 1244, desde 1900 hasta 2052, desde 2118 hasta 2119, desde 2126 hasta 2145, desde 2167 hasta 2187, desde 2202 hasta 2231, desde 2245 hasta 2256, desde 2261 hasta 2521, desde 2552 hasta 2616 para un total de 782 cajas del depósito 1.
        Se realizó Preparación documental para digitalización del Depósito 1 desde la caja 409 hasta la 825, desde la caja 1573 hasta la 1752 y desde la caja 1788 hasta la caja 2015 para un total de 824 cajas.
        Se revisaron las cajas que fueron digitalizadas mediante contrato 446 de 2021, es decir del Depósito 2 desde la caja 1 hasta la caja 1606 para un total de 1606 cajas y del Depósito 1 desde la caja 1196 hasta la caja 1255, desde 1281 hasta 1244, desde 1900 hasta 2052, desde 2118 hasta 2119, desde 2126 hasta 2145, desde 2167 hasta 2187, desde 2202 hasta 2231, desde 2245 hasta 2256, desde 2261 hasta 2521, desde 2552 hasta 2616.
        Se da cumplimiento de 430 solicitudes de préstamos y consultas que realizan los usuarios internos y externos, registrados en la Subserie 300-28.3 Planilla de préstamos y consulta 2021, se verifica las carpetas prestadas estén completas, organizadas y se archiva en la respectiva ubicación topográfica.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia168 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10792,
            'year' =>3,
            'value' => 57,
            'description' => 'Se ejecutan actividades del plan anual del SG SST, tendientes a subir el porcentaje de autoevaluación del sistema.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia169 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10793,
            'year' =>3,
            'value' => 42,
            'description' => 'La Subdirección Administrativa y Financiera realiza el proceso de contratación del personal para el desarrollo de las actividades de Generación y control de los cobros por servicios y tasas ambientales.
        
        Se elaboran las facturas de acuerdo con solicitud que hacen las diferentes áreas (Gestión Ambiental,  secretaría general...)
        
        La facturación de Tasa por uso y Tasa retributiva se género en su totalidad para la vigencia 2022 y se envió a los diferentes municipios para su respectiva notificación con un total de:  2105 facturas de tasa por uso. y 64 facturas de tasa retributiva',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia170 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10794,
            'year' =>3,
            'value' => 53,
            'description' => 'La Subdirección Administrativa y Financiera realiza el proceso de contratación del personal para el desarrollo de las actividades de Control, expedición y seguimiento a la inversión, por un periodo de seis (6) meses, a partir del mes de Enero hasta el 13/07/2022.
        
        Durante el primer semestre de la vigencia 2022 se han recibido un total de 455 solicitudes para revisión y expedición de certificaciones de Disponibilidad presupuestal correspondientes al presupuesto de la Corporación, a las cuales se les realizó control, revisión, verificación de fuentes y cuencas de financiación, conforme a lo solicitado y lo apropiado en cada uno de los Planes Operativos de Inversión y de acuerdo al presupuesto aprobado para la respectiva vigencia presupuestal. Así mismo se generó el  certificado de disponibilidad presupuestal el cual se remitió al área solicitante.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia171 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10805,
            'year' =>3,
            'value' => 55,
            'description' => 'La Secretaría General desde la oficina de Contratación realiza los requerimientos que  solicitan las areas de acuerdo a la necesidad, sobre  el tramite de éstas solicitudes del proceso contractual se derivan como resultados el contrato producto del proceso de selección y cuya publicación se realiza en la plataforma SECOP .
        Durante  el primer semestre de la vigencia  2022 se realizaron y publicaron 316 contratos en el SECOP, de los cuales 299 corresponden a Contratación Directa,  Once (11) Procesos de Selección de Mínima Cuantía, Tres (3) Procesos de Selección de Menor Cuantía y Una (1) Licitación Publica, SECOP II, Tienda Virtual Dos (2);  debidamente contratadas y publicadas.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia172 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14816,
            'year' =>3,
            'value' => 68,
            'description' => 'Se contrato el personal del grupo jurídico de permisivo, hecho que conllevó al 100 % del cumplimiento de la primera tarea; así mismo se presentó y aprobó el plan de seguimiento el 15 de marzo de la presente anualidad, con un total de 1000 actos administrativos de seguimiento jurídico, cumpliendo la segunda tarea a cabalidad y por último se han expedido 161 actos administrativos de seguimiento dentro de los trámites administrativos ambientales de carácter permisivo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia173 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14817,
            'year' =>3,
            'value' => 68,
            'description' => 'Se contrato el personal del grupo jurídico de permisivo, hecho que conllevó al 100 % del cumplimiento de la primera tarea; así mismo se presentó y aprobó el plan de seguimiento el 15 de marzo de la presente anualidad, con un total de 1000 actos administrativos de seguimiento jurídico, cumpliendo la segunda tarea a cabalidad y por último se han expedido 161 actos administrativos de seguimiento dentro de los trámites administrativos ambientales de carácter permisivo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia174 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14818,
            'year' =>3,
            'value' => 68,
            'description' => 'Se contrato el personal del grupo jurídico de permisivo, hecho que conllevó al 100 % del cumplimiento de la primera tarea; así mismo se presentó y aprobó el plan de seguimiento el 15 de marzo de la presente anualidad, con un total de 1000 actos administrativos de seguimiento jurídico, cumpliendo la segunda tarea a cabalidad y por último se han expedido 161 actos administrativos de seguimiento dentro de los trámites administrativos ambientales de carácter permisivo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia175 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14819,
            'year' =>3,
            'value' => 68,
            'description' => 'Se contrato el personal del grupo jurídico de permisivo, hecho que conllevó al 100 % del cumplimiento de la primera tarea; así mismo se presentó y aprobó el plan de seguimiento el 15 de marzo de la presente anualidad, con un total de 1000 actos administrativos de seguimiento jurídico, cumpliendo la segunda tarea a cabalidad y por último se han expedido 161 actos administrativos de seguimiento dentro de los trámites administrativos ambientales de carácter permisivo.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia176 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14820,
            'year' =>3,
            'value' => 69,
            'description' => 'Se contrato el personal del grupo jurídico de sancionatorio, hecho que conllevó al 100 % del cumplimiento de la primera tarea; así mismo se presentó y aprobó el plan de seguimiento el 15 de marzo de la presente anualidad, dentro de los cuales se priorizaron la expedicion de 150 actos administraivos, cumpliendo la segunda tarea a cabalidad y por último se han expedido 12 resoluciones de fondo dentro de los trámites administrativos ambientales de carácter sancionatorio.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia177 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14821,
            'year' =>3,
            'value' => 64,
            'description' => 'Se contrato el personal del grupo de área cobro coactivo, hecho que conllevó al 100 % del cumplimiento de la primera tarea; así mismo se presentó y aprobó el plan de seguimiento el 15 de marzo de la presente anualidad, con un total de 25 pagos que cuentan con mandamiento de pago al 2022, cumpliendo la segunda tarea a cabalidad y por último se han expedido 8 acuerdos de pago.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia178 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14822,
            'year' =>3,
            'value' => 50,
            'description' => 'NO SE REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia179 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10806,
            'year' =>3,
            'value' => 53,
            'description' => 'NO SE REGISTRA INFORMACION ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'No se registra ',
            'state_id' => 1201,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia180 = DB::getPdo()->lastInsertId();
        
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
