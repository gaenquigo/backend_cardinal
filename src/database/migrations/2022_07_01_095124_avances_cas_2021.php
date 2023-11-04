<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCas2021 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 7273,
            'year' =>2,
            'value' => 28,
            'description' => 'En etapa  contractual el  Proyecto:  Formulación del Plan de Manejo Ambiental PMA del sistema acuífero San Gil - Barichara, en el departamento de Santander',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7274,
            'year' =>2,
            'value' => 0.7,
            'description' => 'A la fecha existe una meta acumulada de 2 PORH, de los cuales en la vigencia 2021, se adopta mediante acto administrativo (Resolución DGL 443 del 15 de septiembre de 2021) la Quebrada La Goméz, cuyo recursos comprometidos obedecen a la vigencia 2020, el cual se adelanto con el respectivo proceso contractual correspondiente. 
        Para la vigencia 2021, se tiene programada la realización y adopción del PORH de la Cienaga San Silvestre. El proceso adelantado esta en etapa precontractual cuyo objeto es Articulación de aspectos técnicos para la formulación del plan de ordenamiento del recurso hídrico PORH, de la ciénaga San Silvestre en el municipio de Barrancabermeja.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7274,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7275,
            'year' =>2,
            'value' => 100,
            'description' => 'Revisión de los de los 74 expedientes de PSMV, en lo relacionado con los puntos de vertimientos, del programa de reduccion de vertimientos establecidos, el cual es la base para la  evaluación del factor Regional  de la Tasa Retributiva de la Corporacion Autonoma Regional de Santander -CAS   ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7276,
            'year' =>2,
            'value' => 0.85,
            'description' => 'Adjudicado el proyecto:   Actualización de los estudios soporte para la reglamentación del uso de las aguas en la corriente hídrica quebrada Curití en el municipio de Curití y San Gil  Santander.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7276,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7277,
            'year' =>2,
            'value' => 100,
            'description' => 'Seguimiento y control a los programas de uso eficiente y ahorro del agua (PUEAA) de los74 municipios del área de jurisdicción',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7278,
            'year' =>2,
            'value' => 2,
            'description' => 'En ejecución  los siguientes proyectos:
        1.  Convenio interadministrativo No. CI - 0995 - 2021 Restauración de las especies de peces nativos y aumento de la seguridad alimentaria para la población ribereña, mediante la implementación de un programa de repoblamiento íctico responsable en humedales del valle aluvial del Rio Lebrija”, en el marco del POMCA afluentes directos al Río Lebrija Medio (mi) (código 2319-04).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7279,
            'year' =>2,
            'value' => 80,
            'description' => 'Elaboración de cinco (5) avaluos comerciales de los predios La Meseta, Vista Hermosa, Lejano Oriente, Los Molinos y La Ciénaga, Ubicados en el municipo de Bolivar con  el fin de adelantar acciones para elaborar convenio con los municipios de Bolivar, Velez y Guavatá  y adquirir áreas de importancia hídrica abastecedoras de acueductos municipales o varedales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7280,
            'year' =>2,
            'value' => 3000,
            'description' => 'Ejecutado el contrato No. 01103-2021 : Realizar el apoyo para la protección, recuperación y aislamiento de  afloramientos y zonas de recarga hídrica mediante entrega de 40 kids para municipios de la jurisdicción de la Corporación Autónoma Regional de Santander- CAS.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7280,
            'year' =>2,
            'value' => 3000,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7281,
            'year' =>2,
            'value' => 100,
            'description' => 'Ejecución el convenio   Aunar esfuerzo entre La Corporación Autónoma Regional de Santander – CAS y La Corporación para el Manejo Sostenibles de los Bosques MASBOSQUES, en la operación de la plataforma web BanCO2® y manejo financiero de los recursos destinados para el pago de las familias asociadas al proyecto BanCO2®, en la jurisdicción de la Corporación Autónoma Regional de Santander – CAS.
        
        Adjudicado el proyecto: Elaboración de estudio diagnóstico para determinar los lineamientos para realizar pagos por servicios ambientales en áreas estratégicas  de la jurisdicción de la Corporación Autónoma Regional de Santander CAS.
        
        Suscripción convenio CONV-AGO-000001-2021, DEL  Unir esfuerzos y participar como un aliado en el marco de la ejecución del proyecto BancO2, pago por servicios ambientales comunitarios, en el área de influencia de interés de la CAS y ESSA en el Departamento de Santander, donde se incluyeron 45 hectáreas.
        
        Mediante Convenio 33-335-2020 ISAGEN – CAS- MASBOSQUES se  vincularon  34 familias campesinas al proyecto de pago por servicios ambientales bajo el esquema BancO2 del área de influencia de la directa de la Central Hidroeléctrica Sogamoso.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7282,
            'year' =>2,
            'value' => 0.8,
            'description' => 'Adjudicado el contrato:   Acotamiento de la Ronda Hídrica del ecosistema acuático priorizado “Ciénaga de Paredes” en los municipios de Sabana de Torres y Puerto Wilches en el departamento de Santander. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7282,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7283,
            'year' =>2,
            'value' => 2,
            'description' => 'Firma de convenios para ejecución de los siguientes proyectos:
        1.  Realizar la Construcción de una planta de tratamiento de aguas residuales-PTAR en el municipio de Palmar, Departmento de Santander. 
        2.  Construcción de unidades sanitarias para vivienda rural dispersa en  municipios de la jurisdicción de la CAS. (Palmar, Contratación, Guadalupe, Charalá, Palmas del Socorro y Coromoro)
        Proyectos Ejecutados:
        1.  Fortalecimiento ambiental y sanitario en el manejo de las aguas residuales del beneficio del café en los municipios de la microcuenca del río Fonce, ubicados en jurisdicción de la Corporación Autónoma Regional de Santander-CAS. (62 beneficiaderos intalados)
        2. Fortalecimiento ambiental y sanitario en producciones porcícolas, como estrategia de aprovechamiento de los residuos generados para la fertilización y la generación de  biogás domiciliario ubicadas en jurisdicción de la Corporación Autónoma Regional de Santander- CAS” (30 beneficiarios)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7283,
            'year' =>2,
            'value' => 2,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7284,
            'year' =>2,
            'value' => 1,
            'description' => 'Ejecutado el contrato de prestacion de servicios No. 0014-2021 con el fin de Contratar los servicios de un laboratorio para establecer la calidad y características fisicoquímicas y microbiológicas en los diferentes cuerpos de agua loticos y lenticos, aguas residuales, aguas subterráneas, suelos, lodos, sedimentos y residuos peligrosos de los diferentes usuarios y las fuentes hídricas que hacen parte de la jurisdicción de la CAS.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7284,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7285,
            'year' =>2,
            'value' => 80,
            'description' => 'Etapa Precontractual el  proyectos: Establecimiento de plantaciones forestales protectoras y aislamiento perimetral como estrategia para la restauración, rehabilitación y recuperación de áreas de protección en cuencas hidrográficas en la jurisdicción de La Corporación Autónoma Regional de Santander.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7285,
            'year' =>2,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7286,
            'year' =>2,
            'value' => 105,
            'description' => 'Formulación  del proyecto: Realizar el mantenimiento y labores silviculturales de las áreas restauradas, rehabilitadas y recuperadas en áreas estratégicas y de protección en cuencas hidrográficas de la jurisdicción.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7286,
            'year' =>2,
            'value' => 327,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7287,
            'year' =>2,
            'value' => 2,
            'description' => 'En ejecución   los siguientes proyectos:
        Producción de material vegetal de especies vedadas y en peligro de extinción presentes en jurisdicción de la CAS.
        
        Suministro de material vegetal para fortalecimiento de la estrategia un millón de amigos en los municipios de la jurisdicción de la CAS.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7287,
            'year' =>2,
            'value' => 2,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7288,
            'year' =>2,
            'value' => 0.85,
            'description' => 'En ejecución el proyecto:  
        Estudio semidetallado de suelos de 37.050 Ha, localizadas en la parte baja de la cuenca del Río Fonce (subzona hidrográfica Río Fonce – 2402), aplicando mapeo digital de suelos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7288,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7289,
            'year' =>2,
            'value' => 20,
            'description' => 'Asistencia  técnica y acompañamiento a quince (15) municipios: Distrito de Barrancabermeja,  Los Santos, Cimitarra, Puerto Parra,  Puente Nacional, Páramo, Sabana de Torres, Guaca, Guapotá, Simacota, Palmar, Charalá, San José de Miranda, Sabana de Torres y Suaita, en lo referente a: 1. Socializacion de las determinates ambientales y la importancia de la inclusión de las mismas en los Planes de Ordenamiento Territorial. 2. Mesas técnicas y reuniones virtuales con objeto de discutir y/o argumentar las observaciones a los documentos entregados a la Subdirección de Planeación. 3. Realizar el respectivo concepto técnico a los documentos radicados, teniendo en cuenta el Decreto 1077 de 2015 y la Resolución 858 Determinantes Ambientales de la CAS.
        
        Los municipios de Galán, Enciso, Pinchote, Guadalupe, Jesús María, El peñón luego del oficio compartido en el que la Subdirección de Planeación y Ordenamiento Ambiental, los invita a conformar mesas técnicas orientadas a la asistencia técnica, para iniciar el proceso de actualización del Esquema de Ordenamiento Territorial-EOT. 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7290,
            'year' =>2,
            'value' => 1,
            'description' => 'Suscripción de alianza entre la Agencia Nacional de Minería ANM y la CAS  con el fin establecer procesos de gestión conjunta y diálogo recíproco con enfoque territorial que conlleven al aprovechamiento óptimo y responsable de los recursos mineros en articulación con los entes territoriales y que faciliten la transferencia de conocimiento, intercambio de información y procedimientos de fiscalización, seguimiento y control conjunto respecto de los títulos mineros otorgados e inscritos en el Registro Minero Nacional y de aquellas actividades mineras que cuenten con prerrogativa legal de explotación, conforme con las competencias de cada entidad en la jurisdicción de la Corporación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7290,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7291,
            'year' =>2,
            'value' => 74,
            'description' => 'Solicitud a los municipios de la jurisdicción con el fin de reportar a la CAS,  las licencias de parcelación y construcción en suelo rural y rural sub urbano de acuerdo con el requerimiento establecido en el Artículo 2.2.6.2.9 de Decreto 1077 de 2015 y y a la Directiva No. 004 del 20 de febrero de 2020 del Procurador General de la Nación.
        
        Igualmente se ha realizado seguimiento a setenta y cuatro (74) municipios en los compromisos establecidos en la concertación ambiental y los contenidos programáticos de los POT.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7292,
            'year' =>2,
            'value' => 1,
            'description' => 'Ejecutado  el convenio No.CI-00720-2021   Aunar esfuerzos para apoyo a las actividades del plan de vida de las comunidades indígenas U’was, mediante la construcción de soluciones individuales de abastecimiento de agua, sector Tamara y Tauretes, Jurisdicción de CAS, municipio de Cerrito, departamento de Santander',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7293,
            'year' =>2,
            'value' => 1,
            'description' => 'Ejecución de los siguientes  proyectos:  
        1. Construcción de 110 estufas ecológicas para leña como acción para la mitigación de gases de efecto invernadero, en los sectores rurales de los municipios de la jurisdicción de la Corporación Autónoma Regional de Santander.
        2. Desarrollar un plan de innovaciones, transferencia de conocimientos para el fortalecimiento de estrategias y generación de plan de oportunidades locales con enfoque de sustentabilidad ambiental en diferentes sectores productivos de los municipios de la jurisdicción de la CAS
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7293,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7294,
            'year' =>2,
            'value' => 1,
            'description' => 'Adquisición de un sonómetro y calibración del existente, para implementar la estrategia de acompañamiento, monitoreo, seguimiento y control del ruido de la Corporación Autónoma Regional de Santander.
        
        Elaboración de Base de datos de usuarios con permiso de emisiones o autorización, identificando párametros de agente contaminante a monitorear, conforme a los requerimientos establecidos por la CAS.
        
        Seguimiento ambiental a quince (15) expedientes de permisos de emisiones atmosféricas de empresas en ocho (8) municipios del área de jurisdicción de la CAS.
        
        Acompañamiento a monitoreo isocinético y de calidad del aire a empresas de los municipios de San Vicente, Betulia, Villanueva y Puerto Wilches, Sabana de Torres, Barrancabermeja, Florian, San Gil, Socorro y Guaca.
        
        Seguimiento a Centro de Diágnóstico Automotor - CDA  de los municipios de Barbosa,  San Vicente de Chucurí, San Gil,  Málaga y Barrancabermeja.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7294,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7295,
            'year' =>2,
            'value' => 0.85,
            'description' => 'En ejecución el contrato No. 01121-2021:  Segunda Fase para la Implementación de acciones de la estrategia subregional de control de deforestación y plan integral de cambio climático, en el departamento de Santander',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7295,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7296,
            'year' =>2,
            'value' => 15,
            'description' => 'En ejecución el proyecto: Elaboración del estudio básico de amenaza para el municipio de Cepita - Santander.
        
        Etapa precontractual  el proyecto: Aunar esfuerzos entre la CAS y el municipio de Albanía para la elaboración del estudio de amenazas para el  municipio de Albania.
        
        Otras Acciones ejecutadas:
        
        1. Apoyo tecnico con la realizacion de 27 visitas relacionadas con las declaratorias de calamidad publica, a los municipios de jurisdiccion de la Corporación.
        2. Emisión de 27 conceptos técnicos con las correspondientes recomendaciones y remision de los mismos a las oficinas regionales de la Corporacion, CMGRD, UDGRD y la respectiva alcaldia para su conocimiento y fines pertinentes.
        3. Apoyo oprativo a 11 municipios con  la distribucion de agua con el préstamo del camión sisterna, para suplir el desabastecimiento en época de escaces.
        4. Apoyo operativo a 9 municipios con el préstamo de la  retroexcavadora (pajarita) en la atencion de emergencias ambientales como derrumbes, avalanchas, avenidas torrenciales etc.
        5. Apoyo a 14 municipios en la rehabilitacion de vias terciarias afectadas por derrumbes con el préstamo de la volqueta para la remocion de los escombros.
        6. Revisión y envió a las subdirecciones SAO, SAA y oficinas de apoyo regionales 11 boletines de condiciones y alertas hidrometeorológicas y de pronóstico del tiempo para el departamento de Santander emitido diariamente por el IDEAM, realizando las respectivas recomendaciones. 
        7. Participación en 370 reuniones ordinarias y extraordinarias programadas por los CMGRD Y CDGRD respectivamente.
        8.  Revisión y envió  a las subdirecciones SAO, SAA y oficinas de apoyo regionales 270  reportes de alertas tempranas .
        9.  Atención diaria a los mensajes que provienen del grupo de gestión del riesgo del MADS, dar respuestas a las solicitudes planteadas y asistir a las reuniones virtuales que se programan periódicamente.
        10.  Participación en 12 reuniones ordinarias y extraordinarias programadas mensualmente por el CDGRD de Santander.
        11.  Responder la línea telefónica asignada como canal de comunicación de la subdirección de planeación, asesorar a los usuarios internos y externos y recibir sus inquietudes solucionar las de competencia y remitir a las dependencias o funcionarios según corresponda.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7296,
            'year' =>2,
            'value' => 15,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7297,
            'year' =>2,
            'value' => 10,
            'description' => 'Elaboración guía técnica para reducir emisiones de gases efecto invernadero; en la presente vigencia se  capactitó a once (11) municipios para la correcta aplicación de acciones y proyectos descritos en los instrumentos de planificación ambiental territorial.  (Carcasí, Málaga, Enciso, Onzaga, Florian, La Belleza,  Barrancabermeja, Puerto Wilches, Los Santos, Hato y Capitanejo).
        
                                      ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7298,
            'year' =>2,
            'value' => 20,
            'description' => 'Seguimiento a metas de aprovechamiento de los Planes de Gestión Integral de Residuos Sólidos -PGIRS de veinte (20)  municipios del área de  jurisdicción de la CAS. (Enciso, Santa Bárbara, Guapotá, Suaita, Sucre, Guavatá 2, Aguada, Aratoca, Curití, Ocamonte, Onzaga, Valle de San José, Albania, El Carmen de Chucurí, Gámbita, Oiba, Chima, Galán, Málaga)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7299,
            'year' =>2,
            'value' => 20,
            'description' => 'Revisión y respuesta a solicitud de inscripción de registro de RESPEL de dieciséis (16) empresas. 
        
        Revisión y transmisión de informe de cumplimiento al registro de RESPEL en la plataforma del IDEAM a seis (6) empresas 
        
        Seguimiento ambiental a nueve (9) empresa del área de jurisdicción de la CAS.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7300,
            'year' =>2,
            'value' => 70,
            'description' => 'De 25 sitios de disposición de disposición final de residuos sólidos municipales, la CAS ha realizado visita de seguimiento ambiental a  su totalidad de rellenos o botaderos en de los municipios de Guaca, Zapatoca (2), Güepsa, Galán, Barrancabermeja (2) , Gámbita (2), Málaga. Aguada, San Joaquín, San Vicente, Molagavita, Cerrito, San Gil (2) San Miguel, San Adres, Cimitarra,  Santa Helena del Opón (2), Puerto Parra, Encino, Guacamayo. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7300,
            'year' =>2,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7301,
            'year' =>2,
            'value' => 0.70,
            'description' => 'De 25 sitios de disposición de disposición final de residuos sólidos municipales, la CAS ha realizado visita de seguimiento ambiental a  su totalidad de rellenos o botaderos en de los municipios de Guaca, Zapatoca (2), Güepsa, Galán, Barrancabermeja (2) , Gámbita (2), Málaga. Aguada, San Joaquín, San Vicente, Molagavita, Cerrito, San Gil (2) San Miguel, San Adres, Cimitarra,  Santa Helena del Opón (2), Puerto Parra, Encino, Guacamayo. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7301,
            'year' =>2,
            'value' => 0.50,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7302,
            'year' =>2,
            'value' => 0.70,
            'description' => 'De 25 sitios de disposición de disposición final de residuos sólidos municipales, la CAS ha realizado visita de seguimiento ambiental a  su totalidad de rellenos o botaderos en de los municipios de Guaca, Zapatoca (2), Güepsa, Galán, Barrancabermeja (2) , Gámbita (2), Málaga. Aguada, San Joaquín, San Vicente, Molagavita, Cerrito, San Gil (2) San Miguel, San Adres, Cimitarra,  Santa Helena del Opón (2), Puerto Parra, Encino, Guacamayo. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7302,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7303,
            'year' =>2,
            'value' => 71,
            'description' => 'Etapa precontractual del proyecto:  Fortalecer  las iniciativas de negocios verdes realizando un posicionamiento virtual a través de la  implementación de página web, posicionamiento en google maps y pendon publicitario a treinta y dos (32)  negocios verdes certificados en áreas de jurisdicción de la CAS.
        
        Ejecución del proyecto:  Contratar la logistica y desplazamiento para apoyar la participación  y fortalecimiento a diez (10) iniciativas de negocios verdes en jurisdicción de la CAS en la feria Internacional BIOEXPO  - Medellín 2021.
        
        Idenficación de 32 nuevas iniciativas de Negocios Verdes y se realizo el acompañamiento y fortalecimiento a 72 Negocios Verdes ya existentes para un total de 102 negocios verdes verificados y fotalecidos 
        
        Entrega de 104 avales a negocios verdes identificados y verificados.
        
        Revisión final del documento del Plan Departamental de Negocios Verdes, para pasar a aprobación de la Asamblea Departamental.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7304,
            'year' =>2,
            'value' => 0.80,
            'description' => 'Adjudicado el proceso para: Actualización y complementación de parámetros sociales, económicos, técnicos y administrativos para la propuesta de delimitación y Plan de Manejo del Distrito de Manejo Integrado “La San Juana” en el Complejo Cenagoso de Carare – San Juana, municipio de Cimitarra – Santander.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7305,
            'year' =>2,
            'value' => 0.80,
            'description' => 'Adjudicado el proceso para para:  Actualización y complementación de parámetros sociales, económicos, técnicos y administrativos para la propuesta de delimitación y Plan de Manejo del Distrito de Manejo Integrado “La San Juana” en el Complejo Cenagoso de Carare – San Juana, municipio de Cimitarra – Santander.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7305,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7306,
            'year' =>2,
            'value' => 0.80,
            'description' => 'En ejecución el convenio No. 2021018  cuyo objeto es: Aunar esfuerzos técnicos, administrativos, operativos y financieros entre  CAS y Corpoboya para  formular en sus jurisdicciones el Plan de Manejo del complejo del Páramo Iguaque – Merchán de acuerdo con lo establecido el la Ley 1930 de 2018. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7307,
            'year' =>2,
            'value' => 0.85,
            'description' => 'Etapa precontractual  del proyectos:   Realizar las investigaciones y adelantar ante el Instituto Colombiano Agropecuario - ICA  la presentación y sustentación de los resultados de las Pruebas de Evaluación Agronómica que determine el grado de adaptación y desempeño agronómico de semillas de Cáñamo, como estrategia para reconversión de sistemas de producción agrícola en el Departamento de Santander.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7307,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7308,
            'year' =>2,
            'value' => 2,
            'description' => 'En ejecución los siguientes proyectos: 
        1.  Suministro de alimentos, para la nutrición óptima y oportuna de especímenes de fauna silvestre, ingresados al hogar de paso de la Corporación Autónoma Regional de Santander – CAS.
        
        2.  Destaponamiento y limpieza el Caño Parirí, como estrategia para la recuperación de la dinámica hidráulica con la Ciénaga Parirí y conservación del manatí antillano (trichechus manatus manatus), en el corregimiento El Cerrito, municipio de Sabana de Torres.
        
        3. Ejecución de programas de recepción, valoración, manejo, sostenimiento, rehabilitación y disposición final de especímenes de fauna silvestre que hayan sido objeto de entregas voluntarias, rescates y/o decomisos en jurisdicción de la Corporación Autónoma Regional de Santander – CAS.”.
        
        4.  Estrategia Las maderas vuelven a casa como medida de manejo y conservación de las abejas en los municipios de la jurisdicción de la CAS.
        
        
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7308,
            'year' =>2,
            'value' => 2,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7309,
            'year' =>2,
            'value' => 58,
            'description' => 'De un universo de 2.433 solicitudes de tramite recibidas y aperturadas en la vigencia, se determina que la meta del 70% corresponde a 1.703 trámites, de los cuales se han ejecutado 1.420 solicitudes.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7310,
            'year' =>2,
            'value' => 28,
            'description' => 'De un total de 14.956 expedientes  objeto de seguimiento, 10.469 expedientes correspondientes al  70% de la meta de la vigencia,  a la fecha se ha realizado seguimiento a 4.234 expedientes.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7311,
            'year' =>2,
            'value' => 26,
            'description' => 'De un total de 214 procesos sancionatorios objeto de la meta para el segundo trimestre de 2021,  se han resuelto 80 procesos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7312,
            'year' =>2,
            'value' => 2,
            'description' => 'Elaboracion del plan de auditorias y conformación del grupo objetivo.
        
        Elaboración del cronograma de ejecucion de auditorias y la correspondiente matriz de verificación.
        
        Se realizo la supervicion a la  subdireccion de Autoridad Ambiental y a la Regional Garcia Rovira en el mes de octubre de 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7312,
            'year' =>2,
            'value' => 0.4,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7313,
            'year' =>2,
            'value' => 3,
            'description' => 'Ejecutados los  siguientes proyectos:
        
        1.  Implementación del libro de operaciones en línea y actividades del proyecto Gobernanza Forestal para Colombia, en jurisdicción de la CAS.
        
        2.  Apoyar las actividades de implementación de Comité Interinstitucional de Flora y Fauna del departamento de Santander Ciffsan
        
        Ejecución de las siguientes acciones misionales:
        
        * Seguimiento y control a empresas que transforman y comercializan productos forestales.
        * Ejecución de operativos para el control de productos forestales
        * Capacitación, en temas de normatividad y obligaciones adquiridas por ser propietarios de depositos de transformación y comercialización de productos forestales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7314,
            'year' =>2,
            'value' => 0.85,
            'description' => 'En ejecución el proyecto:
        
        Fortalecimiento de la capacidad técnica de la unidad de reacción ambiental inmediata (URAI) para atender el impacto ambiental, de origen antrópico y natural, en la regional Mares de la Corporación Autónoma Regional de Santander, mediante la adquisición de un vehículo móvil dotado.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7314,
            'year' =>2,
            'value' => 0.3,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7315,
            'year' =>2,
            'value' => 0.70,
            'description' => 'Etapa precontractual del proyecto denominado Realizar la adquisición de equipos y construcción la Red de monitoreo de cantidad y calidad del agua en la cienaga San Silvestre del Distrito de Barrancabermeja',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7315,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7316,
            'year' =>2,
            'value' => 2,
            'description' => 'Etapa precontractual el proyecto: 
        
        Arquitectura conceptual para generar las capacidades de gestión de la información de la Corporación Autónoma Regional de Santander - CAS, que permitan dar cumplimiento a los Objetivos de desarrollo sostenible (ODS), los NDCS1 del acuerdo de parís, ley de transición energética y la agenda de sostenibilidad Colombia 2030, mediante la elaboración de un anteproyecto para la posterior implementación de una plataforma de conocimiento aplicando las tecnologías de la cuarta revolución industrial (ciencia de datos para Big Data, inteligencia artificial y blockchain entre otras).
        
        Ejecutados los siguientes proyectos:
        
        1. Contrato No. 01090-2021:  Contratar la prestación del servicio de renovación de una (1) Licencia para el Firewall Fortinet FortiGate 200D, por el término de dos (2) años, con la instalación, capacitación, configuración y soporte. 
        
        2.  Contrato No. 00981-2021: Renovar  el arrendamiento del servicio de hosting para el alojamiento de la página web www.cas.gov.co para la Corporación Autónoma Regional de Santander –CAS-
        
        3.  Contrato No. 01006 - 2021  cuyo objeto es: Actualización, mantenimiento, acompañamiento, capacitación, soporte técnico, ajustes a los módulos ya implementados del aplicativo GD-SOFT, migración del sistema de nómina a versión web, desarrollo de portal para proceso de viáticos y portal para expedientes de contratación, documento de soporte de pago de nómina electrónica y servidor en la nube de los sistemas delfin_eco
        
        4. Contrato No. 01007-2021 cuyo objeto es: Carga de datos de cita módulo de tramites ambientales versión 1 a cita versión 2 y brindar soporte de segundo nivel, actualizar módulo de liquidación -reliquidación cita v2 y actualizar módulo de radicación a cita v2 en la Corporación Autónoma Regional de Santander CAS.
        
        5. Contrato No.01113-2021 cuyo objeto es: Adquirir equipos informáticos escáner de alto rendimiento para la digitalización de la documentación  generada en los sistemas de información cita, gd para las diferentes dependencias de la Corpración Autónoma Regional de Santander CAS.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7317,
            'year' =>2,
            'value' => 40,
            'description' => 'Desarrollo de las siguientes actividades:
        
        Solicitud de responsables de subir, cargar y validar la información de los subsistemas SNIF, SIRH, SISAIRE, RESPEL, RUA Y PCB. 
        • Solicitud de trámites otorgados vigencia 2021 y cargados a los diferentes subsistemas. 
        • Creación de usuarios por solicitud de diferentes dependencias.
        • Realización de capacitaciones de los diferentes subsistemas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7317,
            'year' =>2,
            'value' => 33,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7318,
            'year' =>2,
            'value' => 0.80,
            'description' => 'Adjudicado el proyecto denominado Fortalecer la plataforma tecnológica del área de Sistemas de Información Geográfica (SIG) de la Corporación Autónoma Regional de Santander - CAS, mediante la mejora de la licencia ArcGIS for Desktop Basic Concurrent  a  ArcGIS for Desktop Standard Concurrent, y la adquisición de herramientas hardware como servidores en la nube (On Cloud) y estación de trabajo (Work Station), para implementar el observatorio ambiental de la jurisdicción de la CAS. (Proyecto en página)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7319,
            'year' =>2,
            'value' => 0.85,
            'description' => 'En ejecución el proyecto: Diseño, desarrollo e implementación de material educativo multimedia “Atlas Virtual”, para difundir conocimiento sobre la flora y fauna del departamento de Santander, contribuyendo con el cuidado y conservacion de la biodiversidad.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7319,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7320,
            'year' =>2,
            'value' => 5,
            'description' => 'Etapa precontractual de los siguientes proyectos:
        
        1. Compra venta de elementos pedagogicos, didacticos y de elementos pedagogicos , didacticos, y de posisionamiiento  institucional que faciliten y apoyen el desarrollo los procesos edcativas ambienales orientados al fortalecimiento de la Politica Nacional de educación ambiental en los Municipios de la juisdiccion CAS   
        
        Desarrollo de las siguientes acciones:
        
        -  Participación en la organización y desarrollo de las Jornadas de Recolección Posconsumo los  días 26 y 27 de Mayo de 2021. Residuos posconsumo recolectados (8.206 Kg).
        
        -  Proceso de socialización por parte de integrante Directivo de la RNJA Santander al Grupo Educación Ambiental / Se formuló el Plan de Acción RNJA para ser socializado con los Directivos Nodo Santander y Nodos Territoriales Jurisdicción CAS.
        
        -   74 Comités Técnicos Interinstitucionales de Educación Ambiental - CIDEAS - creados  y operando  en jurisdicción CAS   (bases de datos, Reglamentos internos, Planes Operativos, reuniones de avance y seguimiento).
        
        -  Desarrollo de procesos de capacitación sobre PNEA y PRAE a 300  rectores, docentes y personeros estudiantiles de Insituciones educativas de la jurisdicción CAS.
        
        - Un Pacto de Educación Ambiental firmado con participación del SINA, MADS, ASOCARS, CAR´S / DS / 
        
        -  Propuesta aprobada por el MADS para desarrolar en el Municipio Barrancabermeja en el marco del Dìa Internacional de la Preservacion de la Capa de Ozono (UTO - CAS). 
        
        - 60 PRAES asesorados  y en proceso de ejecución.
        
        - 172.973  árboles gestionados en el marco del Proyecto “Un Millón de Arboles Un Millón de Amigos de los Arboles”    como aporte a la meta del MADS  de la Siembra de 180 mill de árboles en todo el país. 
        
        - Elaboración de un (1) Proyecto de Ordenanza PDDEA 2020- 2030  para revisión jurídica por parte de Secretaria de Educación Departamental y  su trámite a la Asamblea de Santander .
        
        - Formulación de tres (3) PROCEDA   
        
        - Capacitación a  105 Actores de Empresas, JAC y  Comunidad Capacitados en la temática: Manejo de Residuos Sólidos.
        
         - Comisión Regional de Educación Ambiental  creada con participación de CAS - CDMB y CORPONOR, denominada  Comisión Regional de Educación Ambiental del Nororiente Colombiano (CREANOR)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7321,
            'year' =>2,
            'value' => 4,
            'description' => 'Ejecutado el siguiente proyecto: 
        Participación en la VII feria internacioinal  del medi ambiente (FIMA) con el fin de fortalecer la imagen y posicionamiento institucional de la CAS, así mismo compartir y conocer experiencias ambientales  a nivel nacional e internacional.
        
        En ejecución  los siguientes proyectos:
        
        1. Implementación de sistemas de recolección y aprovechamiento de aguas lluvias, como estrategia de educación ambiental y ahorro y uso eficiente del agua en el municipio de Barichara - Santander. 
        
        2.. Desarrollar experiencias educativas ambientales en el marco de la economía circular para el aprovechamiento sostenible de los residuos de bagazo de caña y café, en el mejoramiento del recurso suelo jurisdicción CAS.
        
        3. Desarrollo de una experiencia pedagógica  piloto para la evaluación  y establecimiento de un proceso productivo para la obtención  de Arthrospira  platensis (spirulina)como suplemento alimentario, en el municipio de Pinchote  jurisdicción CAS.
        
        Etapa precontractual el proyecto:
        
        1,  Desarrollar la experiencia educativo ambiental con mujeres líderes del barrio Buenos Aires considerando el enfoque de economía circular en los procesos, separación en la fuente de residuos sólidos, aprovechamiento y trasformación , en el municipio de San Vicente de Chucurí, departamento de Santander',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7321,
            'year' =>2,
            'value' => 5,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7322,
            'year' =>2,
            'value' => 1,
            'description' => 'Ejecutado el siguiente proyecto: 
        
        Participación en la VII feria internacioinal  del medi ambiente (FIMA) con el fin de fortalecer la imagen y posicionamiento institucional de la CAS, así mismo compartir y conocer experiencias ambientales  a nivel nacional e internacional.
        
        En ejecución  los siguientes proyectos:
        
        1. Implementación de sistemas de recolección y aprovechamiento de aguas lluvias, como estrategia de educación ambiental y ahorro y uso eficiente del agua en el municipio de Barichara - Santander. 
        
        2.. Desarrollar experiencias educativas ambientales en el marco de la economía circular para el aprovechamiento sostenible de los residuos de bagazo de caña y café, en el mejoramiento del recurso suelo jurisdicción CAS.
        
        3. Desarrollo de una experiencia pedagógica  piloto para la evaluación  y establecimiento de un proceso productivo para la obtención  de Arthrospira  platensis (spirulina)como suplemento alimentario, en el municipio de Pinchote  jurisdicción CAS.
        
        Etapa precontractual el proyecto:
        
        1,  Desarrollar la experiencia educativo ambiental con mujeres líderes del barrio Buenos Aires considerando el enfoque de economía circular en los procesos, separación en la fuente de residuos sólidos, aprovechamiento y trasformación , en el municipio de San Vicente de Chucurí, departamento de Santander',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7323,
            'year' =>2,
            'value' => 1,
            'description' => 'Ejecutado el contrato No. 1076 del 2021 cuyo objeto es  la contratación de  los servicios profesionales en archivística con el fin de actualizar el programa de Gestión documental (PGD) y el Sistema Integrado de Conservación y Preservación de Documentos (SIC) de la Corporación Autónoma Regional de Santander CAS. 
        
        Actividades realizadas: 
        
        Revisión de cada uno de los lineamientos de los Proceso de la Gestión Documental que conforman el Programa de Gestión Documental PGD.
        Actualización de los seis (6) Programas Específicos que conforman el PGD y entrega del Instrumento Archivístico versión actualización 2021-2027.
        
        Actualización de los  5 programas que componen  Sistema Integrado de Conservación y Preservación de Documentos (SIC)
        Actualización del cronograma de cada una de las actividades  y de las especificaciones técnicas para la conservación de documentos.
        Entrega  del  Sistema Integrado de Conservación y Preservación de Documentos (SIC) versión actualizada 2021-2027
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7324,
            'year' =>2,
            'value' => 2,
            'description' => 'Ejecutados los siguientes proyectos: 
        
        1.  Instalación del sistema de recolección de aguas lluvias para el autoaprovechamiento y manejo sostenible del agua en la sede principal de la CAS. 
        
        
        2.  Suministro para el mejoramiento locativo del espacio de recepción, atención al usuario, peticiones, quejas y reclamos (P.Q.R) y negocios verdes, ubicado en el primer piso del edificio de la sede administrativa de la Corporación Autónoma Regional de Santander CAS, carrera 12 no. 9 - 06 del barrio la playa del municipio de San Gil',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7324,
            'year' =>2,
            'value' => 2,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7325,
            'year' =>2,
            'value' => 1,
            'description' => 'Ejecutado el proyecto  Implementar el Modelo Integrado de Planeación y Gestión - MIPG
        en la entidad, mejoramiento intitucional y operación del modelo
        
        Se conformó  un equipo de profesionales en diversas áreas y con amplia experiencia en MIPG para apoyar los procesos identificados en la fase de mejoramiento institucional y operación del modelo, apoyando los comités de ser necesario; aplicando y construyendo herramientas para definir autodiagnósticos nuevos necesarios; apoyando y acompañando la formulación de los planes de mejoramiento para establecer e implementar resultado de los autodiagnósticos y acompañando a los líderes de políticas en el establecimiento e implementación de los mismo; apoyando y acompañando en los ajustes e implementación de las Política de Gestión; revisando los resultados del FURAG 2020 y realizando recomendaciones y acciones que deben ser incluidos en los planes de acción para cada una de los políticas de MIPG y apoyando y realizando acciones de sensibilización del MIPG las políticas y planes de acción.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7326,
            'year' =>2,
            'value' => 0.80,
            'description' => 'En ejecución el proyecto: Realizar la actualización del Plan de Gestión Ambiental-PGAR para la vigencia 2022-2031.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7326,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-02-05',
            'rezago' => true,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
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
