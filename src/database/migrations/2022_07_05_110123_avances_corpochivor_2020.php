<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorpochivor2020 extends Migration
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
            'year' =>1,
            'value' => 100,
            'description' => 'Diagnóstico situación actual de las organizaciones adscritas a la ventanilla de negocios verdes (aplicación encuesta a 39 organizaciones)
        ♠ Verificación del estado de implementación de los planes de mejora de 39 organizaciones.
        ♠ Sesiones virtuales de acompañamiento para socialización de protocolos de bioseguridad, y alternativas de apoyos (convocatorias, plataformas comerciales, incentivos)',
            'type' => '',
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
            'year' =>1,
            'value' => 5,
            'description' => 'Recepción y análisis de 4 solicitudes de organizaciones interesadas en hacer parte de la ventanilla de negocios verdes.Verificación de 2 de las 4 solicitudes con viabilidad de ser negocio verde.',
            'type' => '',
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
            'year' =>1,
            'value' => 2,
            'description' => 'Diseño y puesta en marcha de la estrategia de marketing “De lo Nuestro para los Nuestros”, enfocada a la reactivación económica local, en medio de la pandemia.5 entregas de la campaña a nivel de la jurisdicción y en las ciudades de Tunja y Bogotá.',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => 'Reuniones exploratorias con entidades nacionales como la ADR, a nivel regional con la RAPE y territorial con los municipios beneficiados.
        Avance para realización de convenio interinstitucional con la Universidad Nacional Abierta y a Distancia UNAD, para eventos de formación.Convenio de asociacion con FUNDESPAC, para la consolidacion de los negocios verdes.',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => 'Se estructuró plan de incentivos o reconocimientos a sectores productivo con implementación de estrategias en economía circular.',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => 'No tiene meta asociada para este año.',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => 'Diseño e implementación de señalética para el sendero Renacer tegua, con técnicas de bioconstrucción y participación de la comunidad. En el municipio de Campohermoso',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ LÍNEA AGUA: Se atendido  el 100%, correspondiente a 1 Durante el año 2020 se evaluaron 95 PUEAA. Se aprobaron 26 y en trámite con requerimiento se encuentran actualmente 51 PUEAA.
        ♠PLANES DE FERTILIZACIÓN: Se ha atendido  el 100%, correspondiente a 20 solicitudes, evaluación de informacón, visitas y/o envío de información.',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => '♠ En el marco de la Jornada de Recolección de Residuos Posconsumo, realizada por Corpochivor en coordinación con la ANDI y las administraciones municipales de la jurisdicción, se logró la recolección de más de 30 Ton de residuos de pilas, luminarias, computadores y periféricos, electrodomésticos de la línea blanca y llantas. Se destaca la participación de la comunidad rural.
        Acompañamiento a las jornadas de recolección de envases de plaguicidas, , recolectando más de 24 Ton  de este tipo de residuos y sensibilizando a la comunidad respecto al manejo adecuado de los mismos.
        
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 2,
            'description' => 'NODO MÁRQUEZ: Se continua el apoyo a través del convenio interadministrativo 031/2014, cuyo objeto “AUNAR ESFUERZOS Y RECURSOS ENTRE ESTOS MUNICIPIOS PARA APOYAR EL PROYECTO CONSTRUCCION, TERMINACION, ADQUISICION Y MONTAJE DE EQUIPOS DEL SISTEMA INTEGRAL DE RESIDUOS SOLIDOS DE LOS MUNICIPIOS DE LA PROVINCIA DE MARQUEZ EN EL MUNICIPIO DE RAMIRIQUI-DEPARTAMENTO DE BOYACA”, suscrito con los municipios de Boyacá, Ciénega, Ramiriquí, Tibaná, Nuevo Colón, Turmequé, Viracachá, Jenesano, Úmbita y Ventaquemada, mediante el desarrollo de mesas de trabajo con los involucrados.
        
        NODO GARAGOA: Se apoya en el acompañamiento del proyecto regional, a través de la asistencia a reuniones en el MVCT, y PDA y participación en la Mesa de residuos del departamento de Boyacá.
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 3,
            'description' => '♠ Se realiza seguimiento a los sistemas de aprovechamiento de residuos sólidos que operan en la jurisdicción, mediante la realización de 25 visitas técnicas a las infraestructuras y la revisión de los procesos.
        ♠ Durante el año 2020 se desarrollan 12 talleres de sensibilización respecto al aprovechamiento de residuos sólidos (inorgánicos aprovechables y orgánicos) con los gerentes de la empresa de servicios públicos y los operarios de los sistemas de aprovechamiento de los municipios de Campohermoso, Chinavita, Guayatá, Pachavita, Ramiriquí, Santa María, Somondoco, La Capilla, Sutatenza, Turmequé, Úmbita y Viracachá, con el fin de optimizar y mejorar los distintos procesos que se llevan a cabo en cada uno de  ellos.
        Se desarrollaron 6 mesas de trabajo con los gerentes las empresas y/o unidades de servicios públicos de los municipios de Tenza, Chinavita, Turmequé, Guateque, Guayatá y Santa María, con el objetivo de definir actividades para incentivar el manejo integral de residuos sólidos, tanto en el área urbana como en el área rural.
        Durante el año 2020, en promedio se generaron 793,18 Ton/mes de residuos sólidos en el área urbana de la jurisdicción, llevando a disposición final 557,34 Ton/mes, es decir se aprovecharon 235,84 Ton/mes, cifra que corresponde a un 30% del total generado.
        
        
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 25,
            'description' => '♠  Asistencia y participación en el comité coordinador del PGIRS de los municipios de Chinavita, Almeida, Nuevo Colón, Ramiriquí, Ventaquemada y Guateque.
        
        Se realiza seguimiento a los Planes de Gestión Integral de Residuos Sólidos – PGIRS de los 25 municipios de la jurisdicción de Corpochivor, mediante mesas de trabajo con los delegados de cada municipio y emisión de conceptos de evaluación de información allegada.
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠Se ha realizado el seguimiento a 484 establecimientos generadores de RESPEL, ES DECIR 100%
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => 'Validación y transmisión de información reportada por los usuarios inscritos en los aplicativos de Registro de Generadores de Residuos Peligrosos y RUA Sector Manufacturero; a la fecha y acorde con las sábanas de información que proporciona el aplicativo, se tiene un total de 78491,26 kg de Respel gestionados adecuadamente.
        Registro RESPEL 37
        Registro 2
        PCB 5
        
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => ' En coordinación con las empresas y/o unidades de servicios públicos domiciliarios, durante el año 2020 se realizaron 159 acompañamientos a los 25 municipios de la jurisdicción en la gestión de residuos sólidos, con un alcance de 731 personas sensibilizadas, tratando tema de manejo de residuos comunes (comparendo ambiental y separación en la fuente), y aprovechamiento (residuos orgánicos e inorgánicos aprovechables) y manejo de residuos posconsumo
        
         Se brindó asesoría y acompañamiento en la implementación de estrategias encaminadas a incentivar la producción orgánica y manejo adecuado de residuos sólidos en la zona rural de la jurisdicción, a través de talleres de sensibilización en los municipios de Ventaquemada, Tibaná, Ramiriquí, Viracachá, Turmequé y San Luis de Gaceno, la ejecución de esta actividad presenta un alcance correspondiente a siete veredas, sensibilizando a alrededor de 125 personas.',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => '♠ Formulación de dos proyectos encaminados a fomentar la implementación de iniciativas de Economía Circular en la jurisdicción de Corpochivor:
        1. “Estrategia para fomentar una gestión adecuada de residuos de plaguicidas en la jurisdicción de Corpochivor”. 
        2. “Implementación de buenas prácticas ambientales, en el aprovechamiento de la biomasa residual del sector Porcicola”.
        ♠ Se lleva a cabo la convocatoria “ALIADOS POR EL RECICLAJE”; en este se invita a la comunidad de la jurisdicción a reciclar, con el fin de mitigar el cambio climático y proteger el medio ambiente, donde se recibieron 47 proyectos.
        ♠ se realiza la convocatoria Instituciones Educativas Aliadas por la sostenibilidad., contrato 403/2020, COMPRAVENTA DE PUNTOS ECOLOGICOS PARA INCENTIVAR ACCIONES DE EDUCACION AMBIENTAL Y FOMENTO DE LA ECONOMIA CIRCULAR VINCULADAS EN LOS PLANES AMBIENTALES ESCOLARES – PRAES DE LAS INSTITUCIONES EDUCATIVAS DE LA JURISDICCIÓN DE CORPOCHIVOR.
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => 'Como instrumentos de apoyo a la implementación y el seguimiento multitemporal al avance de las directrices, estrategias y lineamientos del Plan de Ordenación Forestal (POF) adoptado legalmente mediante acuerdo No. 05 del 27 de marzo de 2019, que definió una línea base de 7 criterios y 14 indicadores (C&I), se recopilao la información y generó documento de “Evaluación línea base de criterios e indicadores plan de ordenación forestal Corpochivor” vigencia 2020, para su socialziación ante el Consejo Directivo.',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ Se realizaron reuniones con Secretaria General Autoridad Ambiental con el fin de coordinar  aspectos logisticos para la administración del recurso forestal en el marco de las nuevas funciones asignadas a la SGA.
        ♠ Se atendieron 93 solicitudes para la administración del recursos forestal así: Con relación a árboles en riesgo se recibieron 56 solicitudes para evaluar 145 árboles y se autorizaron 109 arboles. Con relación a solicitudes de aprovechamiento forestal se atendieron 28 solicitudes autorizándose 970 árboles con un volumen de 933m3. Con relación al registro de plantaciones forestales se registraron 6 plantaciones con un áreas de 14,09ha y 7.484 árboles. Con relación al Libro de Operaciones Forestales se realizó el registro de 3 empresas forestales .',
            'type' => '',
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
            'year' =>1,
            'value' => 130,
            'description' => '',
            'type' => '',
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
            'year' =>1,
            'value' => 200,
            'description' => '',
            'type' => '',
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
            'year' =>1,
            'value' => 250000,
            'description' => '♠ Se plantó un total de 309.402 árboles así: 76.111 árboles plantados en actividades de mantenimiento de sistemas forestales. 202.446 árboles plantados en actividades de establecimiento de sistemas forestales. 48.1209 árboles plantados en actividades de establecimiento de sistemas forestales mediante el Esquema ERSA.',
            'type' => '',
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
            'year' =>1,
            'value' => 20,
            'description' => '',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => '',
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
            'year' =>1,
            'value' => 2,
            'description' => '♠ Se generó el documento técnico denominado “Análisis y dinámicas espaciales en la identificación de coberturas forestales con tendencia a la deforestación para la jurisdicción de Corpochivor vigencia 2020”, estableciéndose una cobertura de 76.640 hectáreas en bosque natural y estimándose una tasa de deforestación de 0,31%, con una pérdida total de 964,58 hectáreas durante el periodo de 2018/2020.
        ♠ Se generó documento técnico denominado “Reporte de Monitoreo del Proyecto: Pago por Servicios Ambientales del Esquema de Manejo Forestal y Conservación de los Recursos Hídricos en la Jurisdicción de Corpochivor” en el marco del Convenio de Asociación No. 038-19 suscrito con la Fundación Yarumo para la Operación del Esquema de Retribución por servicios Ambientales (ERSA), preparado por la Organización South Pole Carbon Asset Management S.A.S., en el marco del proceso para la verificación del mecanismo para la Reducción de Emisiones por Deforestación y Degradación (REDD+).
        ♠ Con relación a la Red de 16 Parcelas Permanentes de Monitoreo Forestal, se culminó la la medición de parcelas Forestales, para obtener Información sobre las dinámicas y crecimiento de nuestros bosques. 
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 700,
            'description' => '♠ En el marco del Convenio de Asociación No. 038-19 suscrito con la Fundación Yarumo se realizó la Operación del Esquema de Retribución por servicios Ambientales (ERSA), se beneficiaron 167 Usuarios mediante la suscripción de Acuerdos de Conservación y Uso Sostenible, de los cuales 43 hacen parte del Esquema de Pago de Servicios Ambientales ,32 hacen parte del Esquema de Pago de Servicios Ambientales con el Convenio de Tunja, y 92 Usuarios hacen parte del Mecanismo REDD+. Se contó con un área bajo 92 acuerdos de conservación de 3170,31ha para el mecanismo REDD+ y un área bajo 75 acuerdos de conservación de 1756,84 ha para el esquema PSA.  Se otorgaron incentivos por valor de $1.018.277.488, para: 112 predios beneficiados con Incentivo monetario ($), establecimiento de 9,98ha de Sistemas Forestales, establecimiento de 6,1ha de Huerto Dendroenergéticos, 10,9ha en mantenimiento Sistemas Forestales, instalación de 27.672m.l, de cercas de protección, instalación de 4 estufas ahorradoras de leña, 1 gira de intercambio de experiencias exitosa, 273 personas capacitadas mediante servicios de educación informal en el marco de la conservación de la biodiversidad y realización de 30 talleres para la capacitación, socialización y difusión del proyecto.  ',
            'type' => '',
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
            'year' =>1,
            'value' => 6,
            'description' => '♠ Se desarrollaron mesas de trabajo con ocho (8) líderes de proyectos institucionales para realizar seguimiento a los seis (6) Planes de manejo de los Distritos Regionales de Manejo Integrado (DRMI). 
        ♠ Zonificación y régimen de usos de los complejos de páramo de la jurisdicción.
        ♠ Chingaza: Se realizó el Documento técnico de Zonificación y Régimen de usos remitido a la CAR para la respectiva consolidación en marco de la Comisión Conjunta CEERCCO.
        ♠ Rabanal - Bogotá: 
        • Se realizaron reuniones (virtuales) con las alcaldías de Ventaquemada, Úmbita, La Capilla, Pachavita y Turmequé, en las cuales se socializó el proceso de zonificación 
        • Se realizaron tres (3) reuniones (presenciales) con nueve (9) presidentes de Juntas de Acción Comunal -JAC de las veredas inmersas en el Páramo (La Capilla y Pachavita), 
        • Se aplicaron encuestas socioeconómicas a 33 propietarios de predios en zona de páramo en el municipio de La Capilla.
        ♠ Tota Vijagual: Se estructuró Documento de zonificación y régimen de usos, con información secundaria de los municipios del páramo (Garagoa, Chinavita, Tibaná, Ramiriquí, Ciénega y Viracachá).                                                                                                                                           
        ♠ Se desarrollaron mesas de trabajo con ocho (8) líderes de proyectos institucionales para realizar seguimiento a los seis (6) Planes de manejo de los Distritos Regionales de Manejo Integrado (DRMI).',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => '♠ Se realizó mesa de trabajo con el Ministerio de Ambiente y Desarrollo Sostenible – MADS, con el fin de iniciar el proceso de acompañamiento técnico para la priorización de un humedal piloto en valoración económica.
        ♠ Se realizó acercamiento con la Oficina de Negocios Verdes y la Dirección de Bosques, Biodiversidad y Servicios Ecosistémicos, con el fin de iniciar el desarrollo metodológico y capacitación a las CAR´s por parte del MADS.
        ♠ Se participo en el taller de herramientas técnicas para la valoración y evaluación económica organizada por PNN, Humboldt y ANLA.
        ♠  Participación en el curso teórico/practico de Levantamientos Monohaz utilizando Hypack y el Sistema Sontek M9 realizado del 14 al 16 de diciembre 2020 en Garagoa Boyacá.
        ♠ • Participación al entrenamiento teórico/práctico del sistema ADCP realizado por Sanambiente los días 17, 18 y 21 de diciembre de 2020 en Garagoa Boyacá.
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠  Se atendieron 97 ejemplares (47 mamíferos, 44 aves, 6 reptiles), de los cuales 69 fueron rescatados, en ocasiones con el apoyo de la Policía Nacional, la comunidad o funcionarios de la Concesión del SISGA; 23 fueron entregados voluntariamente y 6 decomisado. De estos, 40 fueron liberados en su hábitat natural (ecosistemas estratégicos) después de un proceso de valoración y/o rehabilitación exitosa.
        ♠ Se realizó fortalecimiento del CAVR, por medio de la gestión para el mantenimiento de infraestructuras, adquisición de equipos como: Rayos X, Trazador de dardos, Instrumental de ortopedia y tejidos blandos,  equipos hematológicos, equipos de monitoreo y manejo de la biodiversidad y fauna silvestre, igualmente se doto de insumos médicos como: reactivos para el laboratorio, implementos para el uso del equipo de anestesia y medicamentos para el manejo y tratamiento de los ejemplares. La anterior inversión tuvo un costo de $ 207.105.732.; lo cual, garantizara el éxito del manejo, tratamientos y rehabilitación de los ejemplares que ingresen al centro.',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => ' ♠ Se documentó una estrategia para el manejo, control y erradicación del caracol africano (Achatina fulica), según reportes de presencia en los municipios de San Luis de Gaceno y Santa María.
        ♠ Se documentó una estrategia para el monitoreo, manejo y control de la trucha arco iris (Oncorhynchus mykiss), en el área del Distrito Regional de Manejo Integrado (DRMI) CRISTALES, CASTILLEJO O GUACHENEQUE
        ♠ Se diseñó la campaña “Si las quieres admirar déjalas volar – Si los quieres disfrutar déjalos en su lugar”.
        ♠ Desarrollo de estrategia de conservación de las  especies, Zarigueyas y Murcielagos.
        ♠ Se creó la estrategia del Día Mundial de la Biodiversidad, resaltando la importancia de las diferentes especies en el territorio y los ecosistemas estratégicos
        ♠ Se realizaron catorce (14) visitas por conflicto con fauna silvestre en los municipios de Somondoco, Guayatá, Tenza, Guateque, Garagoa, Chinavita, Almeida y Jenesano;
        ♠ Se realizó un programa radial sobre “Conflictos con fauna silvestre” en la Emisora La Cardeñosa del municipio de Campohermoso
        ♠ Se emitió en el programa radial Camino ambiental, información referente al conflicto con ardillas presentado en la región y se presentaron estrategias de mitigación y ahuyentamiento. 
        ♠ Se desarrollo dos (2) jornadas de sensibilización con la comunidad de San Luis de Gaceno y Santa María en relación al control de la especie invasora Caracol Gigante Africano (Achatina fulica). Se trataron temas claves sobre aspectos morfológicos, manipulación correcta y adecuada disposición final. 
        ♠Se desarrollaron dos (2) jornadas de monitoreo de biodiversidad DRMI San Cayetano y DRMI Páramo Mamapacha y Bijagual. En el macizo de Mamapacha se registratron especies en estado de vulnerabilidad como el Osos de anteojos (Tremarctos ornatus) y el oso palmero (Tamandua trydactila)',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => ' ♠ Se atendieron tre (3) solicitudes de permiso de investigación de 3 allegadas',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => '♠ Se atendieron ocho (8) solicitudes de evaluación de viabilidad para adquisición de quince (15) predios de interés hídrico en lo equivalente a 793.5  Has, por parte de los municipios de Santa María, Campohermoso, Guayatá y Úmbita,  y a la empresa privada AES Chivor.
        ♠ Se llevaron a cabo reuniones de articulación interinstitucional con la Concesión del SISGA y CENIT, con el fin de priorizar la adquisición de predios de interés hídrico en ecosistemas estratégicos (DRMI: Cuchilla San Cayetano, Cuchillas Negra y Guanaque, Páramo de Rabanal y Páramo Mamapacha y Bijagual), en marco de los procesos de compensación por parte de dichas entidades.
        ♠ Se atendieron veintitrés (23) solicitudes para manejo silvicultural de árboles en riesgo y se emitieron los respectivos conceptos técnicos.
        ♠ Se apoyó la selección de predios en el ecosistema estratégico DRMI: Cuchillas Negra y Guanaque, en marco de los procesos de compensación por parte de la Empresa de Energia de Boyacá S.A. EBSA.',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => 'Se suscribio Convenio de Asociación No 015-20 entre CORPOCHIVOR y STIFTELSEN THE STOCKHOLM ENVIRONMENT INSTITUTE (SEI) con objeto: BRINDAR ASISTENCIA TÉCNICA Y FORTALECER LA CAPACIDAD INSTITUCIONAL EN EL MANEJO DEL SISTEMA SOPORTE WEAP PARA LA ACTUALIZACIÓN DE LOS INDICADORES DE LA EVALUACIÓN REGIONAL DEL AGUA – ERA Y EXTENDER EL USO PARA EL APOYO DE OTRAS DECISIONES DE PLANIFICACIÓN Y GESTIÓN INTEGRAL DEL RECURSO HÍDRICO.
        
        Se realizó actualización de indicadores de la ERA.',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ Se diseñó y diligenció matriz de seguimiento para dar inicio a la medición del primer año de implementación del Plan de Manejo del Acuifero Súnuba.
        ♠ Se implementaron las siguientes acciones de manejo ambiental definidas en el PMAA Súnuba:
        -Se estableció la estrategia de sensibilización y educación participativa.
        -Entrega y siembra de 1.350 árboles a los propietarios de los predios que autorizaron la instalación de los diferentes instrumentos de medición hidráulica y monitoreo de la red de isotopía.
        -100 Encuestas de conocimiento y percepción frente al sistema acuífero Súnuba (20 encuestas por Municipio).
        -Diseño y producción de productos de socialización, sensibilización y visibilización del proyecto.
        -Cartillas informativas sobre acuiferos.
        -Entrega de Kits de artesanias a comunidades rurales.
        -10 sondeos eléctricos verticales contados así: Guateque 1, Tenza 2, Sutatenza 1, La Capilla 3, y Somondoco 3.
        -Construcción de dos pozos de observación para el acuifero.
        -Se suscribió convenio marco con el Servicio Geológico Colombiano para recibir acompañamiento y asesoría constante en geología, hidrogeología e isotopía.
        -Construcción de cerramiento y adquisición de colectores de isotopía.',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ Atención de 68 solicitudes de trámites de concesión de aguas,  4 solicitudes de trámites de estudio para aprovechamiento de recursos naturales, 4 solicitudes de trámite de ocupación de cauce, 1 solicitud de trámite de permisos de vertimiento.
        ♠  Evaluación de 8 Planes de Saneamiento y Manejo de Vertimientos para los sistemas de alcantarillado de los municipios de Boyacá, Nuevo Colón, Garagoa, Ramiriquí, Campohermoso, Ventaquemada, Santa María, los cuales fueron requeridos por falta de cumplimiento de los términos de referencia y lineamientos definidos en la Resolución No 1433 de 2004.
        ♠  Se realizó el cargue de permisos ambientales en las plantillas del Sistema de Información del Recurso Hídrico, en sus diferentes componentes temáticos ',
            'type' => '',
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
            'year' =>1,
            'value' => 30,
            'description' => '♠ Se adelantó la fase de diagnóstico del componente hidrológico y de calidad del agua como insumo para la formulación del PIRMA.
        ♠ Se logró establecer enlace de apoyo y acompañamiento por parte del Ministerio de Ambiente y Desarrollo Sostenible para la formulación del PIRMA en la jurisdicción.
        ♠ Se identificacaron necesidades en monitoreo del agua y se adelantó el componente de diagnóstico.
        ♠ Se avanzó en el 30% de formulación.',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ Atención de análisis de calidad de 86 muestras de agua
        ♠ Atención de análisis de calidad de 23 muestras de suelo
        ♠ Toma de 39 muestras de agua cruda para análisis fisicoquímicos, microbiológicos y metales, distribuidas en las corrientes principales
        ♠ El valor promedio de ICA se mantiene en el rango de 51 a 70, el cual se establece como objetivo de Calidad Regular, a excepción de la subcuenca del Río Garagoa sector bajo el cual presenta un ICA de 71 por lo que se define como Índice de Calidad Buena.
        ♠ Se incorporó el monitoreo hidrobiológico como herramienta para el reconocimiento de la alteración en la calidad del agua
        ♠ Se recibe Resolución N° 0030 del 14 de Enero de 2020, manteniendo vigente la acreditación del Laboratorio Ambiental y de 25 variables de la matriz agua
        ♠ Inscripción del Laboratorio en el programa de Control Analítico de Laboratorios de Suelo ante la Sociedad Colombiana de la Ciencia del Suelo, con el fin de estandarizar y optimizar los parámetros y técnicas aplicables para la evaluación y confiabilidad de análisis en esta matriz.
        ♠ Operación de 4 estaciones climáticas de propiedad de Corpochivor, ubicadas en San Luis de Gaceno, Turmequé, Ciénega y Garagoa y 1 estación hidrológica ubicada en el río Teatinos, municipio de Boyacá.',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => 'Se adelantó mesa de trabajo con el Ministerio de Ambiente con el fin de recibir asesoría en el diseño de la estrategia.
        
        Se adelanfo jornada de trabajo con funcionarios y contratista de la Entidad para levantar y consolidar información frente a los componentes de Gobernanza del agua, se recopilaron los aportes e ideas como insumo para la estrategia.',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => 'No tiene meta asociada para este año.',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ Liquidación de la tasa por utilización de agua correspondiente a la vigencia 2019, por un valor de $221.867.850.
        ♠ Liquidación de la tasa retributiva, correspondiente a la vigencia 2019, por un valor de $678.685.076.
        ♠ Atención de 30 solicitudes de tasa por utilización de agua, y 46 de tasa retributiva, entre los cuales se encuentran las autodeclaraciones de vertimientos, los cuales se relacionan a continuación
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => '♠ Se brindó acompañamiento técnico a la optimización de la PTAR del municipio de Jenesano y supervisión al Convenio Interadministrativo No 034-19.
        ♠ Se brindó acompañamiento técnico para la verificación y selección de predios para la construcción de Sistemas de Tratamiento de Agua Residual - STAR en viviendas rurales dispersa en Ventaquemada / Boqueron, Ventaquemada / El Hato, Turmequé / Rosales.
        Se suscribio Convenio Interadministrativo N° 013-20 con el municipio de Somondooco para desarrollar sistemas de tratamiento de agua residual doméstica en el sector rural del municipio.',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => 'La Gobernación de Boyacá formuló el proyecto “Fortalecimiento del Sistema Regional de Ciencia, Tecnología e innovación en del Departamento de Boyacá”  donde uno de sus productos es la Formulación del Plan Integral de Gestión de Cambio climático Territorial – PIGCCT, financiado por el Sistema General de Regalías y que fue aprobado por el ministerio de Ciencia, contando ya con recursos para su ejecución.
        
        El día 5 de Noviembre de 2020, se suscribe convenio especial de cooperación No. 3615 de 2020 entre el departamento de Boyacá y La Corporación Autónoma Regional de Boyacá – CORPOBOYACÁ con el objeto de “AUNAR ESFUERZOS TÉCNICOS, ADMINISTRATIVOS Y FINANCIEROS ENTRE EL DEPARTAMENTO DE BOYACÁ Y LA CORPORACIÓN AUTÓNOMA REGIONAL DE BOYACÁ - CORPOBOYACÁ, PARA LA FORMULACIÓN DEL PLAN INTEGRAL DE GESTIÓN DEL CAMBIO CLIMÁTICO TERRITORIAL - PIGCCT, ARTICULADO CON LA VISIÓN DEL PLAN ESTRATÉGICO DEPARTAMENTAL”, el cual cuenta con un plazo de ejecución de dieciséis (16) meses contados a  partir de la suscripción del acta de inicio. En marco de este convenio, CORPOCHIVOR cumple un papel complementario en cuanto al suministro y validación de información para a formulación del PIGCC',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => 'Se ejecutó el proyecto denominado “SUMINISTRO, INSTALACIÓN Y PUESTA EN FUNCIONAMIENTO DE SISTEMA FOTOVOLTAICO SOLAR EN LA INSTITUCIÓN EDUCATIVA TÉCNICA AGROPECUARIA SAN ISIDRO Y LA INSTITUCIÓN EDUCATIVA DE BOYACÁ COMO ESTRATEGIA DE MITIGACIÓN AL CAMBIO CLIMÁTICO EN EL MUNICIPIO DE BOYACÁ, JURISDICCIÓN DE CORPOCHIVOR”,
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 25,
            'description' => '♠ 189 reuniones de Consejos Municipales de Gestión del Riesgo de Desastres (CMGRD) en 25 municipios de la jurisdicción y 17 reuniones del Consejo Departamental de Gestión del Riesgo de Desastres de Boyacá (CDGRD).
        ♠ Desarrollo del programa de capacitación enfocado en el “FORTALECIMIENTO DE CAPACIDADES PARA LA IMPLEMENTACIÓN DE LOS PROCESOS DE LA GESTIÓN DEL RIESGO DE DESASTRES EN LA JURISDICCIÓN DE CORPOCHIVOR”, a través del cual se impartieron y reforzaron conocimientos sobre la ley 1523 y el rol de los integrantes de los Consejos Municipales de Gestión del Riesgo de Desastres – CMGRD. 
        ♠ Elaboración de estudios de amenaza, vulnerabilidad y riesgo por incendios forestales con base en la metodología diseñada por el IDEAM para insumo para la actualización de los instrumentos para la gestión del riesgo, socializado y entregado a los 25 municipios de la jurisdicción
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 2,
            'description' => '♠ Mediante la información generada por la red hidroclimática (compuesta por 76 estaciones públicas y privadas, operadas en alianza entre AES CHIVOR, IDEAM Y CORPOCHIVOR) se han generado alertas que fueron remitidas a los municipios para toma de medidas de prevención.
        ♠ Capacitación virtual denominada “Acceso y Uso de las Herramientas de información Hidroclimática y de gestión del conocimiento disponibles al área de la jurisdicción de CORPOCHIVOR, para la integración y aplicación de las mismas en las acciones locales de gestión del riesgo, ordenamiento territorial e implementación de  sistemas de monitoreo para alertas tempranas”
        ♠ Se elaboró diagnóstico y priorización de municipios para iniciar la asesoría para implementación de sistemas de alerta temprana
        ♠ Se llevó a cabo capacitación en implementación de sistemas de alerta temprana – SAT el día 30 de noviembre y se trabajo asesorando en el diagnóstico para la implementación del SAT quebrada firagucia (La Rosa) para el municipio de Jenesano y para las quebradas El Toro y La Sardinata en San Luis de Gaceno.
        ♠ Se ejecutó el proyecto denominado “SUMINISTRO, INSTALACIÓN Y PUESTA EN FUNCIONAMIENTO DE SISTEMA DE ALERTA TEMPRANA COMUNITARIO COMO MEDIDA DE CONOCIMIENTO Y REDUCCIÓN DEL RIESGO EN LOS MUNICIPIOS DE JENESANO Y SAN LUIS DE GACENO, JURISDICCIÓN DE CORPOCHIVOR”
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 8,
            'description' => '♠ Se formuló el proyecto denominado “IMPLEMENTACIÓN DE ACTIVIDADES DE MONITOREO DEL RIESGO POR FENÓMENOS DE REMOCIÓN EN MASA EN ZONAS PRIORIZADAS DE LA JURISDICCIÓN DE CORPOCHIVOR”, el cual se encuentra registrado en la Base de Datos del Banco Proyectos de CORPOCHIVOR con el consecutivo  No.553
        ♠ Revisión de productos finales y socialización de los estudios de monitoreo de escenarios de riesgo priorizados por fenómenos de remisión en masa de la jurisdicción de CORPOCHIVOR (Contrato No. 225-2019) ejecutado en los municipios de Campohermoso, Chivor, Guayatá, Macanal, Pachavita, Somondoco, Tibaná y Viracachá
        ♠ Visitas técnicas de seguimiento a los sistemas de monitoreo intslados en los municipios en los municipios de Garagoa, Tenza, La Capilla, Sutatenza, Guateque, Santa María y San Luis de Gaceno
        ♠ Elaboración de concepto técnico con recomendaciones para priorización de movimientos en masa a monitorear y requerimientos de equipos e instrumentos de medición
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 25,
            'description' => '♠ Formulación del documento “Plan de Contingencia frente a temporada seca y temporada de lluvias 2020 -2021 en la jurisdicción de CORPOCHIVOR”, adoptado mediante resolución No. 583 del 28 de Septiembre de 2020 y remitido a alcaldías municipales, consejos municipales para la gestión del riesgo de desastres – CMGRD, empresas y/o unidades de servicios públicos domiciliarios, personerías, estaciones de policía, cuerpos oficiales de bomberos, defensa civil de los 25 municipios de la jurisdicción de CORPOCHIVOR con la circular No. 2020EE6466.
        ♠ Participación en el programa radial “Camino Ambiental”, con la temáticas “Recomendaciones de prevención ante la temporada de más lluvias 2020”, Recomendaciones de prevención ante temporada seca, Herramientas de información hidroclimática, Cambio climático y sus efectos en la jurisdicción.',
            'type' => '',
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
            'year' =>1,
            'value' => 2,
            'description' => '♠ Se formuló el proyecto denominado “FORTALECIMIENTO DE ENTIDADES DE PRIMERA RESPUESTA DE LA JURISDICCIÓN DE CORPOCHIVOR Y EL ÁREA DE INFLUENCIA DE LA COMPAÑÍA TGI- TRANSPORTADORA DE GAS INTERNACIONAL”, el cual se encuentra registrado en la Base de Datos del Banco Proyectos de CORPOCHIVOR con el consecutivo  No.548 y fue remitido para evaluación a la empresa Transportadora de Gas Internacional – TGI con oficio No. 2020EE3898 de fecha 11 de junio de 2020
        ♠ El día 13 de octubre de 2020 se realizó acto de entrega de equipos y/o herramientas para la implementación del programa “Fortalecimiento de organismos de socorro para la atención de incendios forestales en los municipios de Garagoa, Santa María, Sutatenza y Guateque (Asociado a la recuperación de predios en los que se ha presentado alteración en la cobertura vegetal por incendios forestales) (restauración)”.',
            'type' => '',
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
            'year' =>1,
            'value' => 3,
            'description' => '♠ Se coordinaron tres campañas de limpieza de cauces que generan riesgo para la población e infraestructura por acumulación de residuos sólidos y material vegetal, induciendo escenarios de amenaza por inundaciones y avenidas torrenciales, en los municipios de Garagoa, Ventaquemada, Jenesano.',
            'type' => '',
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
            'year' =>1,
            'value' => 2,
            'description' => '♠ Se suscribió contrato de prestación de servicios No. 392-20 con objeto “ALQUILER DE MAQUINARIA PESADA TIPO RETROEXCAVADORA DE ORUGA PARA EJECUCIÓN DE ACTIVIDADES DE REDUCCIÓN DEL RIESGO POR MOVIMIENTOS EN MASA EN LA VEREDA SIRAQUITA DE MUNICIPIO DE BOYACÁ, JURISDICCIÓN DE CORPOCHIVOR”. 
        ♠ Se suscribió el convenio interadministrativo No. No. 3064 de 2020 con el objeto de “AUNAR ESFUERZOS ENTRE EL DEPARTAMENTO DE BOYACA, EL MUNICIPIO DE TIBANA Y LA CORPORACION AUTONOMA REGIONAL DE CHIVOR PARA LA CONSTRUCCION DE OBRAS PARA LA REDUCCION Y MITIGACION DEL RIESGO DE DESASTRES POR FENÓMENO DE REMOCION EN MASA EN PUNTO CRITICO UBICADO EN LA VEREDA SIRAMÁ MUNICIPIO DE TIBANA, DEPARTAMENTO DE BOYACÁ”.',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ Se atendió el 100% de las solicitudes presentadas por la comunidad o alcaldías municipales, con un total de cincuenta y siete (57) visitas de valoración de zonas afectadas por riesgos con emisión de conceptos técnicos con recomendaciones de manejo.',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => 'Elaboración de los documentos precontractuales para adelantar el proceso con el objeto de “REALIZAR LOS ESTUDIOS BÁSICOS POR FENÓMENOS DE INUNDACIÓN, AVENIDAS TORRENCIALES Y MOVIMIENTOS EN MASA EN LA ZONA URBANA DEL MUNICIPIO DE PACHAVITA, JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DE CHIVOR - CORPOCHIVOR” con apropiación presupuestal al rubro 2C-09-01 fuente TSE.
        
        Teniendo en cuenta que se realizó reducción del presupuesto asignado al proyecto Cambio Climático y Gestión del Riesgo por valor de $287.199.201, no fue posible continuar con esta actividad.
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => 'No tiene meta asociada para este año.',
            'type' => '',
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
            'year' =>1,
            'value' => 25,
            'description' => '♠ 8 Talleres de apoyo y/o asesoría en la ejecución de POMCA RIO GARAGOA Y POMCA GUAVIO, como determinante ambiental de mayor jeraquia. 
        ♠ Emisión de 8 conceptos en lo relacionado con revisión de estudios básicos de gestión de riesgo, para ser incorporados en los ajustes de Esquemas de Ordenamiento Territorial. 
        ♠13 reuniones de asesoría con los municipios de Chinavita(3), Sutatenza(3) y Tibaná (2),Nuevo Colón (1), Campohermoso (1), Ventaquemada (2), Turmequé (1), Tenza (1) ,  en lo referente a estudios de gestión de riesgo para ser incorporados en los Ordenamientos Territoriales.
        ♠ 14 capacitaciones para la Inclusión de la dimensión ambiental en los planes de desarrollo municipal. 
        ♠ Proyección de 40 conceptos técnicos, referente a la inclusión de la dimensión ambiental en los Planes de Desarrollo Municipal y Departamental
        ♠ Revisión de 50  licencias de construcción y/o parcelación reportadas por los municipios y emisión de sus respectivos conceptos técnicos. Asi mismo, se atendieron 56  consultas previas respecto a determinantes ambientales para toma de desiciones en relación a contrucción y-o parcelacion en predios, velando asi por la protección de los recursos naturales. 
        ♠ 12 talleres de asesoría para la inclusión del componente de cambio climático, como determinantes ambientales, en el ajuste y/o actualización de los ordenamientos territoriales.                                                                                                                                                                                                                                                                                               ♠ Por medio de la resolución 891 del 15 de diciembre de2020, se realiza ajuste y actualización de documentos técnicos, por medio de la cual se define para los 25 municipios de Corpochivor: 
        - LA ESTRUCTURA ECÓLOGICA PRINCIPAL 
        - DETERMINANTES AMBIENTALES PARA EL ORDENAMIENTO DEL SUELO RURAL Y SUBURBANO
        - SE ESTABLECE LA EXTENSIÓN MÁXIMA DE CORREDORES VIALES SUBURBANOS
        - UMBRAL MÁXIMO DE SUBURBANIZACIÓN 
        -DENSIDADES MÁXIMAS DE VIVIENDA                                                                                                                                                                                                                                                               ♠Se realizaron 2 talleres de fortalecimiento con alcaldes y secretarios de planeación de la jurisdicción de Corpochivor, en lo referente a: determinantes ambientales, cumplimiento a decreto 1077 de 2015 y licencias de construcción y parcelación por parte de los entes territoriales.                                                                                              ♠Por medio de resolución 923 del 23 de diciembre de 2020, se actualizan y compilación, de las determinantes ambientales para la jurisdicción de Corpochivor, incluyendo el diseño de aproximadamente 354 fichas de las determinantes, como insumo importante para el ajuste de los planes de ordenamiento territorial de los municipios de la jurisdicción de Corpochivor. 
        
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 0,
            'description' => '♠ Revisión y socialización  de productos finales y socialización de los estudios de: … ACOTAMIENTO DE LA RONDA HÍDRICA DEL COMPLEJO DE HUMEDAL LAGUNA LA CALDERONA, LAGUNA LA GLORIA, LAGUNA PENSILVANIA Y LAGUNA LARGA, MUNICIPIO DE CIÉNEGA, SIGUIENDO LOS LINEAMIENTOS DE LA GUÍA TÉCNICA DE CRITERIOS PARA EL ACOTAMIENTO DE LAS RONDAS HÍDRICAS EN COLOMBIA 2018.
        
        Observación: Para esta actividad en plan de acción se tenía como meta un 1 cuerpo de agua delimitado, pero presupuestalmente se recortaron los recursos. Sin embargo, dentro de POA se tenía subdivida la actividad en 2 y se invirtieron unos recursos con dedicación de profesionales para finalizar y socializar el contrato de consultoría 242-2019.  
        
        En conclusión, la meta de delimitar un cuerpo de agua en el año 2020 no se realizó. ',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => '♠ Paramo Chingaza: 
        • Se realizó el documento técnico de zonificación y régimen de usos del complejo de Chingaza (componentes socioeconómico y biofísico), el cual fue remitido a la CAR Cundinamarca para la respectiva consolidación en marco de la Comisión Conjunta.
        ♠ Rabanal Río Bogota : 
        • Se realizaron reuniones (virtuales) con las alcaldías de Ventaquemada, Úmbita, La Capilla, Pachavita y Turmequé, en las cuales se socializó el proceso de zonificación y régimen de usos que se llevará a cabo en dichos municipios.
        • Se realizaron siete (7) reuniones (presenciales) con nueve (9) presidentes de Juntas de Acción Comunal -JAC en área de Páramo Rabanal Río Bogotá, una de estas asistiendo comunidad de Páramo Altiplano Cundiboyacense. 
        • Se aplicaron 706 encuestas en predios de Páramo Rabanal Río Bogotá y Páramo Altiplano Cundiboyacense, en municios de La Capilla,Pachavita, Umbita, Turmequé y Ventaquemada. 
        • Se consolidó Documento de zonificación y régimen de usos, con la metodología de zonificación aprobada en Comisión conjunta y el componente socioeconómico adelantado a la fecha.
        ♠ Tota Bijagual - Mamapacha: Se estructuró Documento de zonificación y régimen de usos, con información secundaria de los municipios del páramo.                   ♠Paramo Altiplano Cundiboyacense                                                                                                                                                                                                                                                                 - Se aplicaron 61 encuestas de análisis de vulnerabilidad y arraigo de la comunidad, en los predios del páramo en el municipio de Ventaquemada, así:  Veredas Bojirque  29, Montoya 18, Puente Boyacá 14.                                                                                                                                                                                                                                                                                ',
            'type' => '',
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
            'year' =>1,
            'value' => 1,
            'description' => '♠Se culminó el proceso de ruta declaratoria con la Inscripción en el RUNAP para Cuchilla Mesa Alta.
        Se realizó la inscripción del área protegida DRMI Cuchilla Mesa Alta, en el Registro Único de áreas Protegidas –RUNAP.                                                                                                                ♠Se culminó con la actualización del plan de manejo para el DRMI Páramo Cristales,  Castillejo o Guachaneque, acuerdo 015 del  22 de diciembre del año 2020.                                                                                                                                                                                                                                                                                                                            ♠ Se  estructuró documento en su parte programática o estretégica, diagóstico y de ordenamineto para la formulación de plan de manejo de DRMI Cuchilla Mesa Alta.   
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ Se realizaron 25  seguimientos a las Determinantes Ambientales y asuntos ambientales de los PBOT y EOT concertados y/o adoptados.
        ♠  1 Seguimiento a la ejecución del POMCA del río Garagoa, del primer año de ejecución correspondiente al periodo 2018-2019 y un seguimiento del año 2019-2020, 
        ♠ Socialización y/o aprobación del seguimiento a la ejecución del POMCA RÍO Garagoa ante comisión técnica de la Comisión Conjunta, integrada por Ministerio de Ambiente y Desarrollo Sostenible, CAR, CORPOBOYACÁ.                                                                                                                                                                                    ♠Se  diseño una matriz para realizar el seguimiento a los Planes de Desarrollo adoptados.
        ♠ Se realizaron mesas de trabajo con diez (10) líderes de proyectos institucionales para realizar seguimiento a los seis (6) Planes de manejo de los Distritos Regionales de Manejo Integrado-DRMI.                                                                                                                                                                                                                                          ♠  Se realizó seguimiento a los 6 planes de manejo de los DRMI .                                                                                                                                                                                                     ♠Se realizó 1 taller de fortalecimiento con los integrantes del Consejo de Cuenca del POMCA río Garagoa, dando a conocer el informe de ejecución del POMCA RIO GARAGOA, del primer año de ejecución. 
        ♠Se realizaron 2 talleres con integrantes de consejo de cuenca del POMCA río Garagoa, con el fin de dar a conocer la metodología para elección de nuevos consejeros. 
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 98,
            'description' => '♠ Asesoría a los 25 Comités Interinstitucionales de educación Ambiental -CIDEA correspondientes a los 25 municipios de la Jurisdicción. Adicionalmente se participó en el Comité Interinstitucional de edicacion Ambiental de Boyacá -CIDEABOY-
        ♠ Asesoría a 49 Proyectos Ambientales escolares -PRAE-, correspondientes a las 49 instotuciones educativas públicas de la jurisdiccion.
        ♠ Se prestó apoyo a dos Proyectos Ambientales Universitarios - PRAU-, correspondientes a las dos Instituciones de Edicación Superior que tienen sede en la jurisdicción de CORPOCHIVOR.
        ♠ Se implementaros 22 espacios de diálogo para el fomento de la cultura ambiental y la participación ciudaddana.
        
        Quedó pendiente la realización de 2 espacios de diálodo, teniendo encuenta las restricciones originadas en por la pandemmia del Covid 19',
            'type' => '',
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
            'year' =>1,
            'value' => 2,
            'description' => '♠Se prestó asesoría para la estructuración de dos (2) Proyectos Ciudadanos de Educacion Ambiental - PROCEDA. Red AVIVATE (Avistamiento de Aves), Fundación FUNGUAQUE (Agroecología).',
            'type' => '',
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
            'year' =>1,
            'value' => 10,
            'description' => '♠En articulación con el proyecto economía circular se apoyó la adquisición de puntos ecológicos para incentivar acciones de educación ambiental y fomento de la economía circula vinculdas a los PRAES. Proceso contractual en ejecución.',
            'type' => '',
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
            'year' =>1,
            'value' => 3,
            'description' => '♠Se realizó la composición del himno de COPROCHIVOR, el cual se difundió en el programa radial camino Ambiental y en actos públicos de la corporación.
        ♠Se desarrolló la herramienta lúdica Bingo Ambiental, a través de la cual se promueve la educación ambiental, resaltando acciones, normas y sitios de interés ambiental del territorio. Se hizo actividad prácrica en el marco del Festival del café y se avanzó en un prototipo virtual, con el apoyo de la Universidad Nacional.
        ♠Se desarrolló el Concurso Aliados por la Cultura Ambiental, En las modalidades de Copla, poesía y letras para canciones, con 115 participantes, entre niños, jóvenes y adultos, pertenecientes a los Clubes Coprochivatos y otros sectores de la población y se realizó la composición musical de tres obras musicales con base en las letras ganadoras del concurso Aliados por la Cultura Ambiental, las ciales se difundieron en el programa radial camino ambiental y se enviaron a las emisors de la jurisdicción.',
            'type' => '',
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
            'year' =>1,
            'value' => 10,
            'description' => '♠Se apoyó a la Red de Jóvenes de Ambiente de Boyacá, nodos de Garagoa, Guateque y San Luis de Gaceno, a través de la realización de tres (3) talleres de emprendimientos sostenibles..
        ♠Se apoyó al Club Rotario de Garagoa, a través de siete talleres, para la implementación del proyecto huertas caseras urbanas en el municipio de Garagoa, para beneficiar 20 familias.
        ♠Se fortalecieron Grupos comunitarios vinculados a las asociaciones de juntas de acción comunal para el fomento de la participación en la solución de problemáticas socioambientales, en los municipios de Garagoa, Chinavita, pachavita, Turmequé, Ramiriquí, La Capilla, Guayatá, Guateque, Ventaquemada y Campohermoso.',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠Divulgación de fechas ambientales (8)
        ♠Apoyo a campañas de mejoramiento del entorno(limpiezas de cauce, arborización)  - (9)
        ♠Participacón en foros y talleres virtuales (7)
        ♠Charlas virtuales a universidades (2)
        ♠Lección Chivata del día (5)
        ♠Reto por la convivencia en tiempos de crisis -Videos con coplas con participación de los     Corpochivatos)- (1)
        ♠Diseño y Difusiión de Guías Ambientales (avistamiento de aves, descubramos juntos el placer de sembrar en nuestros hogares, siembra de Maíz y arveja, separación en la fuente, educación, valores y compromiso ambiental, alelopatía, compost y compostera, fauna silvestre)   (8)
        ♠Emisión de  espacios del programa radial Camino Ambiental.  (35)
        ♠Participación en otros espacios radiales (caracol al campo, programa radial IE José B. Perilla, Programa emisora Oasis Stereo    (3)
        ♠Campañas alusivas a los DRMI Cuchilla San Cayetano y Rabanal (2)
        ♠Actividades de sensibilización en campo (4)
        ♠Elaboración de Murales ambientales (15)
        ♠Elaboración y difusión de guia de apoyo a POMCAS  (1)',
            'type' => '',
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
            'year' =>1,
            'value' => 90,
            'description' => '♠ Se recibióeron un total de 1549 PQRS, de las cuales 420 corresponden a Petición de Infracciones Ambientales y 1129 a Peticiones, reclamos y solicitudes (de Consulta, Información, documentos, permisos ambientales, Recursos de reposición); 75 se encuentran en trámite y hasta la fecha se han atendido 1474 PQRS. ',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ Se recepcionaron y atendieron 420 infracciones ambientales, se  priorizaron 88 conforme al informe técnico que evidenciaba mayor grado de afectación a los recursos naturales.',
            'type' => '',
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
            'year' =>1,
            'value' => 78.5,
            'description' => '♠ Se priorizaron 321 expedientes, realizando seguimiento a 252 (licencias ambientales, permisos y/o autorizaciones)',
            'type' => '',
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
            'year' =>1,
            'value' => 84,
            'description' => '♠ Se profirieron  veintiuno (21)  actos administrativos dando inicio al proceso sancionatorio, de los veinticinco( 25) que están sujetos a inicio,  lo cual arroja un avance físico de 84%',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ Se realizaron 114 actuaciones o trámite de los 73 procesos sancionatorios priorizados',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ Se recibieron y gestionaron 74 solicitudes así: 
        Solicitud de viabilidad de reservorios 32
        solicitudes de Carbón Vegetal 1,
        Certificado de Diagnóstico Automotor 1, 
        Planes de Contingencia 26, 
        Concepto de Viabilidad de Vía 7
        Solicitudes de Licencias Ambientales 7.
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 2,
            'description' => '1. El 02 de octubre de 2020, se realizó capacitación presencial sobre medidas preventivas, recurso Fauna, Flora y recurso hídrico a la policía de Garagoa.
        2. El día 10 de noviembre se realizó capacitación virtual a través de la plataforma Google meet dirigida a alcaldes, policía, personeros e inspectores de policía sobre atención a PQRS, medidas preventivas, recursos Fauna y Flora.',
            'type' => '',
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
            'year' =>1,
            'value' => 19,
            'description' => 'Recurso Hídrico: Se realizaron tres operativos los días 14 de febrero, el día 30 de noviembre y el día 09 de Diciembre de 2020, requiriendo la legalidad de las captaciones y la adecuada administración del recurso hídrico.
        Recurso  Flora y Fauna: se realizaron cinco (5) operativos, los días 11 de Junio, (2) el 01 de Diciembre, (2) el 02 diciembre, , sin encontrar indicios de transporte de fauna y flora silvestre. Igualmente, se sensibilizó y concientizó a cada uno de los conductores y pasajeros, sobre la importancia de conservar la vida silvestre y a diferenciar la fauna doméstica de la silvestre.
        Recurso Aire: se realizaron ocho (8) operativos, en los sectores: 2 Sector Juntas – Garagoa; Ramiriquí- Sector Puente Camacho; 2 en Ventaquemada – sector Tierra Negra; Garagoa - Sector La Frontera; vía principal entre Santa María y San Luis de Gaceno; Guateque vía Bogotá. Con un total de 211 mediciones. Como resultados de las mediciones realizadas fueron 141 aprobados y 70 rechazados; evidenciando un gran número de vehículos diésel (ACPM) que presentaron fugas de aceite y combustible, lo cual confirma la falta de mantenimientos preventivos y correctivos por parte de los propietarios.
        Minería Ilegal: Se realizaron tres (3) operativos, los días 11 de Agosto, 25 de Agosto, y 09 de Diciembre donde se evidenciaron títulos mineros snin algún permiso, lo cual se realizaron las respectivas suspensiones mediante acto administrativo.
        Recurso Ruido: No se puedo realizar, dado a que el equipo Extech Instrument de serie No. P828146, cumple con los estándares de calidad para ser empleado en la medición de niveles de ruido-ruido ambiental, sin embargo, para las fechas propuestas de los operativos, la validez de la calibración no estaría vigente, razón por la cual al usarlo se estaría incumpliendo lo establecido en la resolución 627 de abril de 2006, artículo 19 “los certificados de calibración electrónica cada equipo deben ser vigentes de acuerdo con las especificaciones del fabricante y copia de los mismos deben adjuntados en el informe técnico”, por tanto se sugiere NO usarlo hasta una vez se realice nuevamente la calibración del equipo”
        por lo tanto,  se adelantó proceso de contratación para la adquisición del sonómetro bajo el contrato No. 413-20, que tiene como objeto: ‘‘ADQUISICIÓN DE UN EQUIPO DE MEDICIÓN DE SONIDO – SONÓMETRO PARA LA CORPORACIÓN AUTONOMA REGIONAL DE CHIVOR - CORPOCHIVOR”.',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => '♠ Ejecución del Plan Anual de adquisiciones de Bienes y Servicios, vigencia 2020,publicado en el SECOP II, mediante la suscripción de contratos y convenios para atender las necesidades identificadas, mejorar los servicios, y  fortalecer los procesos de la Corporación, relacionados con:  Gestión de Recursos Administrativos y Financieros (Contratación, Presupuesto, Contabilidad, Tesorería, Almacén, Facturación, Cobro coactivo); Seguridad y Salud en el Trabajo; Servicio al Ciudadano, Gestión Documental (Radicación, Archivo, Centro de Documentación, Notificación personalizada); Laboratorio Ambiental , Gestión de tecnologías y seguridad de la información',
            'type' => '',
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
            'year' =>1,
            'value' => 60,
            'description' => '♠Acorde con los requisitos de la política de Gestión del Conocimiento e Innovación, del Modelo Integrado de Planeación y Gestión, se desarrollaron las siguientes actividades:
        Innovación, se destaca el desarrollo de proyectos e iniciativas innovadoras  en gestión integral  del recurso hídrico y forestal, negocios verdes y economía circular
        Investigación: Se identificaron,  formularon y postularon proyectos de investigación a convocatorias del orden  nacional e internacional
        Estrategias de enseñanza-aprendizaje: mediante alianzas y convenios interadministrativos con universidades, entidades públicas y privadas se desarrollaron procesos de capacitación de nuevas tecnologías, modelos, metodologías, transferencia  tecnológica y del Conocimiento
        Teniendo en cuenta el Autodiagnóstico realizado de la Política de Gestión del Conocimiento, se ha tenido un avance del 60%
        
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 80,
            'description' => 'El nivel de Desempeño del Sistema Integrado de Gestión  es del 81%, el cual  se determina a partir de la evaluación de la eficacia de los planes de mejoramiento,  gestión de riesgos, indicadores, evaluación de satisfacción de los usuarios, desempeño del sistema de Seguridad y Salud en el Trabajo y cumplimiento de las políticas de gestión y desempeño MIPG, con los siguientes resultados: 
        
        Eficiencia Planes de Mejoramiento :34%
        Eficiencia Riesgos por Procesos: 77%
        Eficacia  Indicadores:
        Grado de satisfacción de usuarios:
        Eficiencia SST: 84%
        Eficiencia Políticas MIPG:76%',
            'type' => '',
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
            'year' =>1,
            'value' => 5,
            'description' => '♠ Presupuesto inicial vigencia 2020 $14.359.987.122; valor proyectos viabilizados $1.788.055.330,que representa una gestión del 12,45%, .
        ♠ Formulación y presentación de 27 proyectos para acceder a los recursos de cofinaciación  del FCA y la GIZ-IKI-Sociedad Alemana de Cooperación Internacional.
        ',
            'type' => '',
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
            'year' =>1,
            'value' => 2,
            'description' => '♠ Estructuración y formulación del Plan de Acción Cuatrienal PAC 2020-2023 y plan financiero y articulación con el presupuesto de la vigencia 2020; aprobados mediante Acuerdos del consejo directivo Nos. 03 del 14 de mayo de 2020; 04 del 30 de junio de 2020 y 05 del 30 de junio de 2020, respectivamente.
        Actualización del Plan de Gestión Ambiental Regional 2020-2031, según acuerdo del consejo directivo No.09 del 21 de octubre de 2020. 
        Seguimiento y presentación Informes de Gestión semestral y anual del Plan de Acción Cuatrienal 2020-2023.Presentación y aprobación del Presupuesto de Ingresos y Gastos para la vigencia fiscal 2021, según acuerdo del Consejo Directivo No. 014 del 22 de diciembre de 2020,
        ♠ Mesa de trabajo primera etapa SIPGA -CAR
        ♠ Indice de Evaluación y Desempeño Institucional: 73.83% vigencia 2019',
            'type' => '',
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
            'year' =>1,
            'value' => 100,
            'description' => 'Estructuración, ejecución y cumplimiento  del  Plan de comunicaciones  de la vigencia 2020 , el cual contempla las siguientes estrategias.
        Estrategia de Comunicación Interna
        Estrategia de Comunicación Externa
        Estrategia de Comunicación Digital
        Estrategia de Protocolo y Eventos
        Plan de Visibilización en Medios',
            'type' => '',
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
            'year' =>1,
            'value' => 15,
            'description' => '♠ Elaboración del Plan estratégico de tecnologías de la información 2020-2023 y evaluación de la politica Gobierno Digital con un nivel del cumplimiento del 80.6%. 
        ♠ Evaluación y actualización del Modelo de Seguridad y Privacidad de la información y el plan de tratamiento de riesgos, con un nivel de cumplimiento del 62.5%
        ♠ Renovación Sistema de seguridad perimetral (Firewall y Antivirus)
        ♠ Mantenimiento servidores (Ambientes de prueba y producción)
        ♠ Acciones de seguridad para atender emergencia covid-19, conexiones remotas para trabajo en casa.
        ♠ Mesa de ayuda: Soporte técnico operativo a recursos informáticos 
        ♠ Soporte técnico especializado sobre Sistemas de información y aplicaciones.
        ♠ Soporte técnico y mantenimiento sobre la plataforma tecnológica (servidores e impresoras).
        ♠Gestión contractual para renovar el servicio de soporte y actualización del licenciamiento ORACLE, Conexión de internet de banda ancha y servicio de correo electrónico corporativo',
            'type' => '',
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
            'year' =>1,
            'value' => 25,
            'description' => 'Estructuración del Catálogo de Objetos Geográficos de CORPOCHIVOR, 
        ♠ Integración de 28 capas de estudios y/o consultorías de años anteriores y 14 capas nuevas, generadas en la vigencia 2020 
        ♠ Actualización de 20 capas asociadas a los grupos “Servicios Ambientales”, “Instrumentos de Ordenación” y “Biodiversidad.  
        
        Copia digital productos ejecución   Convenio 2985-14 Gobernación de Boyacá, Corpoboyacá, Corpochivor, CAR, Corporinoquia y el IGAC   
        
        Sistema de Información Ambiental Territorial -SIAT      
        ♠  Construcción del Plan de Estandarización de Procesos del Sistema de Información Ambiental Territorial - SIAT  2020-2023.
        ♠ 10 capacitaciones externas e internas, sobre los componentes, uso y aprovechamiento del SIAT y software SIG.municipios de Garagoa, Nuevo Colón, Guayatá, Guateque, Boyacá, Chivor y Ventaquemada,  personal de apoyo misional de la Corporación y socialización al Consejo Directivo
        ♠ Renovación convenios de Transferencia tecnológica del SIAT e información geográfica, suscrito con los 25 municipios de la jurisdicción
        
        Productos cartográficos Sistemas de Aeronaves Pilotadas a Distancia RPAS (Drones)
        
        ♠ 99 sobrevuelos con un cubrimiento aproximado de 2.340 hectáreas, para realizar la captura, proceso de nube de puntos, ortofotomosaico y modelo digital de superficie por medio del software Pix4D, con las respectivas fichas técnicas y registro de la información levantada, para atender requerimientos de los proyectos misionales',
            'type' => '',
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
