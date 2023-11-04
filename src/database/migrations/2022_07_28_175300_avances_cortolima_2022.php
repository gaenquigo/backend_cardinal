<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCortolima2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 11996,
            'year' =>3,
            'value' => 0,
            'description' => 'El documento de diseño de la Red hidrometeorológica es uno de los productos que se generan en el marco de la Evaluación Regional del Agua (ERA), la fase 1 aportó el diseño de la red e información de la oferta hídrica de 8 subzonas hidrográficas de las 24 SZH del departamento así: Coello, Gualí, Guarino, Lagunilla, Opia, Recio, Sabandija y Totare',
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
            'activity_id' => 11997,
            'year' =>3,
            'value' => 0.6,
            'description' => 'Se realizó seguimiento con toma de muestras de calidad a 198 objetos de muestreo programados y se atendieron a través de la realización de 747 puntos de monitoreo. ',
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
            'activity_id' => 11998,
            'year' =>3,
            'value' => 100,
            'description' => 'los objetivos de calidad de la subzona hidrográfica del río Gualí, que comprende los municipios de Herveo, Fresno, Casabianca, Mariquita, Honda, Palocabildo y Falán conforme a las siguientes fases: 1. Caracterización línea base oferta, 2. demanda hídrica y vertimientos puntuales, 3. Definición horizonte espacio – temporal. Destinación del recurso, 4. clasificación y diagnóstico de la calidad de los cuerpos de agua. 5. Definición de los objetivos de calidad deseables.',
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
            'activity_id' => 11999,
            'year' =>3,
            'value' => 0,
            'description' => 'planificacion prioriza el acuirfero.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12001,
            'year' =>3,
            'value' => 250,
            'description' => 'Se realiza la consignación de la información de 655 expediente pertenecientes a la sede centro y las oficinas territoriales en el sistema de información de recursos hídrico (SIRH), para una meta programada para el año 2021 de 300 expedientes.',
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
            'activity_id' => 12002,
            'year' =>3,
            'value' => 92.70,
            'description' => 'Se realiza un total de 151 evaluaciones realizadas de los planes de ahorro y uso eficiente del agua PUEEA presentados por los usuarios , los cuales fueron requeridos por esta Autoridad Ambiental a los usuarios en los diferentes seguimientos ambientales y para el inicio del trámite de todas las solicitudes de concesiones de agua en cumplimiento de la normatividad establecida en el decreto 1076 de 2015.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12003,
            'year' =>3,
            'value' => 43,
            'description' => 'Se realizan 105 seguimientos: 96 corresponden a la sede centro, 8 a la sede norte y 1 a la sede sur oriente',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12004,
            'year' =>3,
            'value' => 1,
            'description' => 'Se adelantaron 2 proyectos:
         *  Construcción Reservorio Comunidad Indígena Nataroco (90% ejecución) ,
        * Mantenimiento del Reservorio del Resguardo Indígena Chenche Zaragoza en Coyaima , con un 99.9% 
        Con éste último se avanza en 1 para l meta física; y se cumplirá con la meta de 2, una vez finalice  Nataroco y el mejoramiento de reservorios en Ortega, que se encuentra en proceso contractuak.
        
          Adicionalmente,  se cumplió con el rezago 2021 con el  Reservorio en el Resguardo Indígena de Yaco Molana.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12005,
            'year' =>3,
            'value' => 7,
            'description' => '1.        Convenio de cooperación 554 del 08/06/2021 para el saneamiento de la Quebrada La Madroñala -Melgar (avance del 66%)
        2.        Convenio de cooperación 665 del 03/08/2021 para el saneamiento de la Quebrada Nuquil – Ortega (avance 57%)
        3.        Convenio de cooperación 621 del 08/07/2021 y los Convenios de cooperación 701, 702, 703, 787, 788, 789, 793, 794, 795, 800, 859, 860, 862, 868 y 869 del 2021 para el establecimiento de 257 sistemas de tratamiento de aguas residuales domesticas en los municipios de Ibagué, Chaparral, Fresno y Melgar (avance 43%).
        4. Contrato 914 del 31/12/2021 para las obras del cierre y abandono de la PTAR Brasilia – Honda,  y el contrato 920 del 27/12/2021 que realizara la interventoría 914/2021 (avance 40%)',
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
            'activity_id' => 12006,
            'year' =>3,
            'value' => 0,
            'description' => 'En la formulación de los POMCAS, el avance del POMCA SZH río Amoyá presenta un avance de un 94%, quedando pendiente concluir la consulta previa con la comunidad Amoyá La Virginia, y 74% de avance en la formulaciòn de R. Saldaña
        ',
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
            'activity_id' => 12007,
            'year' =>3,
            'value' => 12,
            'description' => 'registra para hacer seguimiento a 12 POMCAS adoptados por Cortolima desde su componente programático estableciendo la planificación del uso y manejo coordinado de los recursos naturales, a través del óptimo desarrollo ambiental y económico-social de la comunidad con un cumplimiento de esta de un 100%.  ',
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
            'activity_id' => 12008,
            'year' =>3,
            'value' => 60,
            'description' => 'maximo las 8 szh de 24, llegando a un 50%  de acuerdo al avance de la actividad: se iniciaron los convenios para la fase I y II, se viene relaizando el seguimiento técnico y administrativo;  fueron revisados los resultados de la fase I y su documento final.',
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
            'activity_id' => 12012,
            'year' =>3,
            'value' => 4,
            'description' => 'Se Realizaron 8 actividades - a través de estrategias de monitoreo y seguimiento; para ello, se ha dado continuidad a las actividades implementadas en la vigencia 2020 y se han generado nuevas actividades',
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
            'activity_id' => 12013,
            'year' =>3,
            'value' => 2000,
            'description' => 'Actividades de capacitación de posconsumo plaguicidas (campo limpio, bioentorno): reporte año 2020 - 633 usuarios y avance 2021 - 1117, otras campañas de sensibilización de posconsumo tales como: foro de economía circular, negocios verdes, filtros verdes: 1715 beneficiario.  Aceites de cocina usados 155.       campañas consumo cuidado 20. campaña limpia tu casa 617 y campaña limpia tu comercia, cida el planeta. otras actividades manos de agua RAEE 395.       ',
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
            'activity_id' => 12014,
            'year' =>3,
            'value' => 427,
            'description' => 'Desde el año 2014 hasta el año 2020: 129 negocios verificados (77 por CORTOLIMA y 52 por Ministerio – UE), de los cuales 27 son NV con Ecoproductos Industriales y 102 son NV con Bienes y servicios sostenibles provenientes de los Recursos Naturales.
        Año 2021 63 NV en proceso de verificación (fase 2): 48 CORTOLIMA (nuevas convocatorias (18 y 120)), 10 Programa General Negocios Verdes– Unión Europea y 5 USAID; para un acumulado de 192 beneficiarios verificados.    
        Apoyo en la estructuración de nuevos negocios verdes municipios PDET, en Chaparral, Planadas, Rioblanco y Ataco – 5 proyectos; impactar a 85 veredas, 491 productores, 499 has en 4 municipios, aprox.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12015,
            'year' =>3,
            'value' => 1590,
            'description' => '500 en el municipio de Ibagué, bajo el Convenio Interadministrativo No. 396/2020 firmado entre la Administración Municipal y CORTOLIMA, se realizaron 50 talleres y 30 mercados campesinos, de igual forma se realizo una adición de 300 huertas para ser ejecutadas en la vigencia 2022.
        380 Villahermosa (110), Ortega (120), Anzoátegui (150), convenio interadministrativo No. 317/ 2020, firmado entre la Administración Municipal y CORTOLIMA, se han realizado seis (6) mercados campesinos dos (2) en Villahermosa, dos (2) Ortega y dos (2) en Anzoátegui y, diseño y elaboración de 380 cartillas, de igual forma se realizó una adición de 200 huertas para ser ejecutadas en la vigencia 2022.
         230 Falan y Venadillo
        45 en Ibagué a través de red de jóvenes para el ambiente
        80 PAI Guarinó (Mariquita y Fresno)',
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
            'activity_id' => 12016,
            'year' =>3,
            'value' => 8,
            'description' => 'La Corporación en el proceso de Producción más limpia viene acompañando el fortalecimiento de 8 sectores agropecuarios con sistemas de 847 filtros verdes, 55 biofabricas, 15 silvopastoril, 847 filtros verdes, 40 biodigestores y adopción masiva de tecnologías en 20 fincas, además del apoyo a 24 alianzas productivas:',
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
            'activity_id' => 12017,
            'year' =>3,
            'value' => 3144,
            'description' => 'Se beneficiaron las 1.288 personas en:
        Plan Integral de la Cuenca Combeima PICC
        1.062 estufas ecoeficientes en Ibagué, Coyaima, Dolores, San Luis, Planadas, Mariquita (PAI Guarinó y propios), Ortega y Fresno (PAI Guarinó)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12018,
            'year' =>3,
            'value' => 0,
            'description' => 'Se adelantó procesos precontractuales para realizar el estudio detallado de amenaza, vulnerabilidad y riesgo en los municipios de Herveo y Falan',
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
            'activity_id' => 12019,
            'year' =>3,
            'value' => 11,
            'description' => 'Se celebró el convenio No. 0550 del 30 de diciembre del 2020, con el Cuerpo de Bomberos Voluntarios de Ibagué por un valor de $156.624.166.00, donde se contrató la formulación de 11 de planes Municipales de gestión del riesgo para los municipios de Palocabildo, San Luis, Valle de San Juan, Armero Guayabal, Fresno, Cajamarca, Espinal, Icononzo, Carmen de Apicalá, Ambalema, y Herveo. El día 13 de septiembre del 2021, se realiza la entrega de los 11 PMGR por parte de CORTOLIMA a cada uno de los alcaldes de los municipios beneficiados',
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
            'activity_id' => 12020,
            'year' =>3,
            'value' => 8,
            'description' => 'A partir de la celebración del Convenio 530 de 2020, con el Cuerpo de Bomberos Voluntarios de Ibagué, se realizó la formulación y evaluación de los planes de contingencia ante incendios forestales en los municipios de Melgar, Chaparral, San Sebastián de Mariquita, Coello, Honda, Alvarado, Venadillo y San Luis del Departamento del Tolima. Así mismo se contó con el apoyo en la realización de brigadas para la atención de emergencias ambientales en el departamento del Tolima. El día 2 de junio del 2021, se realizó la entrega oficial por parte de la Corporación Autónoma Regional del Tolima –CORTOLIMA, a los municipios beneficiados el respectivo PLAN DE CONTIGENCIA MUNICIPAL SIMPLIFICADO EN INCENDIOS FORESTALES; acto realizado en el Auditorio de la Sede Centro de la Corporación',
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
            'activity_id' => 12021,
            'year' =>3,
            'value' => 3,
            'description' => 'implementación de tres acciones de asistencia técnica y apoyo al Consejo Departamental y Consejos Municipales de gestión de riesgo: 1. 1. APOYO TÉCNICO Y PROCESOS DE CAPACITACIÓN - 2. LABORES DE SILVICULTURA POR ÁRBOLES EN RIESGO EN EL DEPARTAMENTO DEL TOLIMA. - 3. SUMINISTRO DE EQUIPOS Y HERRAMIENTAS PARA EMERGENCIAS.',
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
            'activity_id' => 12022,
            'year' =>3,
            'value' => 10,
            'description' => 'Intervenciones con maquinaria de la Corporación ante situaciones de emergencia en los municipios del departamento, o para mitigación del riesgo.
        Acciones de procesos de bioingeniería en laderas y zonas rivereñas de los cauces.
        Asistencia técnica, campañas de sensibilización y educación ambiental, dentro del componente social, orientadas a la prevención y gestión del riesgo.',
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
            'activity_id' => 12023,
            'year' =>3,
            'value' => 100,
            'description' => 'Se realizan las asesorías y capacitación solicitadas por las administraciones municipales, Se realizaron sesenta (60) mesas técnicas de asesoría en documentos de seguimiento y evaluación, incorporación de determinantes ambientales y revisión y ajuste de los POT, capacitación a los Concejos Municipales. ',
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
            'activity_id' => 12024,
            'year' =>3,
            'value' => 100,
            'description' => 'se atendieron las solicitudes de evaluación y concertación, requeridos por las administraciones municipales y posterior seguimiento una vez sean concertados y adoptados los instrumentos de ordenamiento por parte de cada municipio.
        Se realizó la concertación de la revisión y ajuste del Plan Básico de Ordenamiento Territorial del municipio de Guamo, del Esquema de Ordenamiento Territorial del municipio de Ambalema, y de la modificación excepcional del Esquema de Ordenamiento Territorial del municipio de Carmen de Apicalá. 
        ',
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
            'activity_id' => 12025,
            'year' =>3,
            'value' => 23.4,
            'description' => 'Con corte al 31 de diciembre de 2021 aunque se realizó visita de seguimiento a todos los PGIRS municipales, solo 43 de los 47 municipios del departamento, tienen seguimiento con informe de intranet y mensaje interno como se aprecia en la tabla que se presenta a continuación. ',
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
            'activity_id' => 12026,
            'year' =>3,
            'value' => 33,
            'description' => 'Durante el período se realizó seguimiento a los 25 PSMV, pero al cierre de diciembre solamente se entregaron 23 informes de los 25 de PSMV vigentes.',
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
            'activity_id' => 12027,
            'year' =>3,
            'value' => 100,
            'description' => 'Se ha realizado el seguimiento y sistematización de la información suministrada por   las dos estaciones de monitoreo del aire disponibles en el municipio de Ibagué y que son obligatorias. Así mismo se realizaron 12 operativos víales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12028,
            'year' =>3,
            'value' => 0,
            'description' => 'Se adelanta proceso precontractual que tiene por objeto realizar el mapa de ruido del municipio de Ibagué en cumplimiento de la resolución 627 de 2006',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12030,
            'year' =>3,
            'value' => 100,
            'description' => 'Se ha realizado el seguimiento y sistematización de la información suministrada por   las dos estaciones de monitoreo del aire disponibles en el municipio de Ibagué y que son obligatorias. Así mismo se realizaron 12 operativos víales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12031,
            'year' =>3,
            'value' => 100,
            'description' => 'Se brindó apoyo y acompañamiento técnico en treinta y cuatro (34) municipios del departamento del Tolima, abarcando ciento diez (110) comunidades mineras de subsistencia y capacitando así a mil ciento setenta y seis (1176) mineros',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12032,
            'year' =>3,
            'value' => 126,
            'description' => '48 CIDEAS (47 municipales y 1 departamental)  y 3.482 actores CIDEA
        13 PRAE / Numero de instituciones educativas con acompañamiento
        11 Procedas / Número de proyectos
        42 líderes ambientales de los Gobiernos Escolares de Ibagué / Estrategia Hogares Ecoeficientes
        12 comunidades étnicas beneficiadas
        757 otras acciones de apoyo interinstitucional, comunitario.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12033,
            'year' =>3,
            'value' => 150,
            'description' => 'se impactó alrededor de 8.302 personas con acciones de apropiación social del conocimiento',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12034,
            'year' =>3,
            'value' => 2,
            'description' => 'Red Jóvenes de Ambiente del Tolima RJAT, Red Ong´s Ambientalistas del Tolima ROAT, Red Indígena Ambiental del Tolima RIAT, Red Cultural del Tolima RCAT',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12035,
            'year' =>3,
            'value' => 8,
            'description' => 'se reporta el apoyo a 2 proyectos, el Plan de Manejo Ambiental del Acuífero de Ibagué, y el inicio de la ejecución de los acuerdos protocolizados con las comunidades POMCA AMOYA, Comunidad indígena Cimarrona Alta',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12036,
            'year' =>3,
            'value' => 100,
            'description' => 'se realizaron 170 apoyos socioambientales al mismo número de expedientes en 42 de los 47 municipios. Los apoyos socioambientales se realizan por medio de visitas de acompañamiento de profesionales sociales a los profesionales técnicos de la subdirección de Recursos Naturales en visitas de tramites como: concesiones de agua, emisiones atmosféricas, licencias ambientales, permisos ambientales y planes de manejo. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12037,
            'year' =>3,
            'value' => 0,
            'description' => 'La fase I del estudio en corredores urbanos de Ibagué, fue finalizado en el año 2021, los productos de este estudio sirvieron como insumos para continuar la segunda fase del corredor urbano y periurbano de la microcuenca Rio Chípalo, beneficiando a toda la población del municipio de Ibagué.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12038,
            'year' =>3,
            'value' => 5,
            'description' => 'Se Implementaron de 10 acciones del Plan Regional de Biodiversidad 
        -PARB  asi: Se desarrolló documento bajo términos de referencia “Lineamientos de análisis funcional y estructural de los Humedales del dpto. del Tolima; documento general de acciones de monitoreo relacionados con un Corredor rural para Oso de Anteojos y Danta de Paramo- P.N.N Nevados-Paramo Chili Barragán y Se implementaron acciones de Monitoreo, Talleres de socialización y sensibilización e instalación de cámaras trampa de los   PMA de Fauna adoptados especialmente Oso de Anteojos, Danta, Ostra de Agua dulce, Nutria de Rio y Puma. Se realizaron acciones de Monitoreo y Diagnóstico de Conflicto Hombre Fauna.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12039,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizó el documento, que tiene como contenido los ajustes del Plan Regional en Biodiversidad, para lo cual se desarrollaron acciones para la recopilación de las actividades realizadas para el seguimiento al PARB, el cual se desarrolló bajo el marco de tres ejes estratégicos Conocer, Conservar y Usar, principalmente lo relacionado con:  la Armonización del Plan de Acción Regional en Biodiversidad (PARB), se realizó teniendo en cuenta el PAB nacional, para su correspondiente ajuste teniendo en cuenta los lineamientos nacionales e internacionales, como instrumento de implementación de la PNGIBSE',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12040,
            'year' =>3,
            'value' => 0,
            'description' => 'Se avanza en el proceso precontractual para la realización de la zonificación y régimen de uso del complejo de paramos  Chili Barragán ubicado en los municipios de Cajamarca, Chaparral, Ibague, Roncesvalles, Rovira y San Antonio; Complejo de Paramo Las Hermosas en los municipios de Chaparral y Rioblanco  y  Complejo de Paramo Nevado Huilas Moras  que comprende los municipios de Rio Blanco  -  Planadas',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12041,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizó  el ajuste de los Planes de Manejo Ambiental de los Humedales adoptados  del departamento del Tolima, se dio inicio la fase VI , con el estudio para el  ajuste de seis (6)  PMA de Humedales mediante convenio interadministrativo de cooperación 517 de 2021 con la Universidad del Tolima -Grupo de Investigación en Zoología-GIZ  para  cinco (5) Humedales del municipio de Ambalema  y uno (1) en  Piedras (Toqui-Toqui). Las actividades se encuentran en ejecución',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12042,
            'year' =>3,
            'value' => 0,
            'description' => 'realizó la identificación de 66 especies que habitan el departamento del Tolima que se encuentran descritas en la resolución 1912 de 2017 del Ministerio de Ambiente y Desarrollo Sostenible, enfocando en 2021 acciones nuevas principalmente a 3 especies de fauna: Danta de Páramo, Titi Gris y Tucán Piquinegro y 1 especie de flora Palma de Cera que se encuentran en estado crítico. Se continuo con las acciones que se vienen desarrollando en protección del Puma, Condor, Nutria y Ostra de Agua Dulce. 
        La Corporación viene ejecutando 10 planes de manejo para especies en el Tolima.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12043,
            'year' =>3,
            'value' => 0,
            'description' => 'Se realizó la valoración económica de los humedales saldañita en el municipio de Natagaima con la comunidad del resguardo de Pacandé  y al humedal las catorce en el municipio de Cunday, se identificaron los bienes y servicios ambientales, sociales y económicos de los humedales. Con esta actividad se da  cumplimiento al rezago de la meta 2021.
        
        Adicionalmente, esta en proceso pre y contractual  la valoración económica de los humedales laguna las Huacas en el municipio del Guamo y el humedal Rio Viejo en el municipio de San Luis, de la cual se encuentra en la oficina de contratos, para dar cumplimiento a la meta del 2022.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12044,
            'year' =>3,
            'value' => 0,
            'description' => 'se firmó convenio 819 del 9 de noviembre de 2021, con la Universidad del Tolima, para realizar el análisis de los cambios, espaciales y temporales, del bosque natural en 14 municipios del Tolima (Carmen de Apicalá, Espinal, Suárez, Icononzo, Melgar, Flandes, Alpujarra, Natagaima, Prado, Dolores, Villarrica, Purificación, Saldaña y Cunday). A fecha se encuentra en ejecución las actividades contempladas en el convenio, presenta un avance de gestión del 75%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12048,
            'year' =>3,
            'value' => 10,
            'description' => 'Se realiza  trabajo para la medición de efectividad de manejo de las áreas protegidas regionales del departamento, capacidad técnica instalada frente a manejo e implementación de metodología AEMAPPS Análisis de Efectividad del Manejo de Áreas Protegidas con Participación Social“, se trabajaron las matrices de efectividad de manejo, en 14 reservas forestales protectoras declaradas por CORTOLIMA,  correspondientes 4 en Anzoátegui, 3 en Murillo, 2 en Roncesvalles, 2 en Villahermosa, 1 de Rovira, 1 de Palocabildo y 1 de Prado',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12049,
            'year' =>3,
            'value' => 1,
            'description' => 'se adelantaron acciones de dinamización y formulación de estrategias que buscan preservar, conservar y restaurar los ecosistemas presentes en el territorio, siendo así, se fortalecieron herramientas de gestión, que sirven para la planificación de las determinantes ambientales y que dan estructura a los diferentes sistemas de áreas protegidas, desde la jerarquía más general a la más local, en otras palabras desde un SIRAP hasta un SIMAP, actualizando siete (7) SIMAP en el Tolima (Municipio Melgar, Líbano, Chaparral, Rovira, Palocabildo, Cajamarca y Piedras) y en acompañamiento de dinamización a la construcción de los planes de acción, cinco (5) (Rovira, Herveo, Chaparral, Melgar, Ibagué).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12050,
            'year' =>3,
            'value' => 200,
            'description' => 'Se ejecutó el proyecto para la intervención en 736.7 Has, así: 297.5 Has en mantenimiento a reforestaciones protectoras, 20 Has en mantenimiento de arreglos agroforestales, 40,17 Has en enriquecimiento forestal, 370.03 Has en establecimiento de reforestaciones protectoras, establecimiento de 2 Has en el Páramo Anaime Chili  y recuperación de 7 Has del espejo de agua del Humedal El Silencio en la Vereda El Rano del municipio de Mariquita;  Se realizó la actualización del proyecto, los estudios previos, la suscripción de los convenios de cooperación con 27 Resguardos Indígenas de los municipios de Natagaima, Coyaima, Ortega, 5 Juntas de Acción Comunal de los municipios de los municipios de Coyaima, Carmen de Apicalá y Rovira y la Gobernación del Tolima. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12051,
            'year' =>3,
            'value' => 34697,
            'description' => 'Se entregaron a los usuarios 42.295 plantas y en patios de los viveros se encuentran 16.812. Es prudente mencionar que en cumplimiento a medidas sanitarias impuestas por el Instituto Colombiano Agropecuarios “ICA” se procedió a la desnaturalización de 11.250 plantas, así: 1) 3.500 plantas en el vivero El Secreto ordenadas mediante Resolución 101544 del 23/07/2021.  2) 1.750 plantas en el Vivero El Secreto y 6.000 plantas en el Vivero El Palmar ordenadas mediante Resolución 104198 del 25/08/2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12052,
            'year' =>3,
            'value' => 2,
            'description' => 'Se adelantó el apoyo y acompañamiento en el proceso de elaboración, formulación del Proyecto Pago Por servicios ambientales PSA para el departamento del Tolima en la que se definieron 4 áreas de Importancia Ambiental Chili- Barragán, Cañón del Combeima, Bilbao Planadas y Cañón de las Hermosas Chaparral. Convenio Interadministrativo N°778 de 2021 y Convenio Interadministrativo 810 del 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12053,
            'year' =>3,
            'value' => 49,
            'description' => 'CORTOLIMA cuenta con 148 predios, distribuidas en 30 municipios, que abarcan 21.866.9 hectáreas, lo que equivale aproximadamente al 0.94% del área total del departamento del Tolima.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12054,
            'year' =>3,
            'value' => 31.0,
            'description' => 'se adquirieron los predios el Pozuelo, Montevideo, Zona de Exclusión, Coca del Oso 1, Coca del Oso 2 y La Rochela',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12055,
            'year' =>3,
            'value' => 100,
            'description' => 'Ingresaron al Centro de Atención y Valoración de fauna silvestre “CAV” de Cortolima ubicado en el Predio El Secreto en la Vereda Llanitos del municipio de Ibagué, un total de mil seiscientos cuarenta y ocho (1648) especímenes ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12056,
            'year' =>3,
            'value' => 1,
            'description' => 'El CAV ha estado operando durante todo el año. Se han hecho los conceptos, se ha manejado el libro de ingreso de fauna, se ha cumplido con los protocolos, se ha implementado terapias de recuperación y estimulo. Se ha hecho las liberación y reubicaciones pertinentes. En convenio con la Universidad del Tolima se ha aplicado los tratamientos médicos, las eutanasias, entre otros procedimientos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12057,
            'year' =>3,
            'value' => 26,
            'description' => 'El banco de proyectos  recibió 62 proyectos formulados bajo la metodología MGA, de los cuales 49 fueron viabilizados, 13 fueron devueltos: 8 para ajuste, 4 que fueron actualizados e incluidos en los proyectos evaluados y 1 que no cumplía con los requisitos de formulación,.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12058,
            'year' =>3,
            'value' => 55,
            'description' => 'se viabilizaron 49 proyectos de los cuales 42 se encuentran en ejecución',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12059,
            'year' =>3,
            'value' => 63,
            'description' => 'Del 60% de avance en la implementación del Modelo Integrado de Planeación y Gestión – MIPG de acuerdo al PAC, del cual se ha ejecutado un 53.04%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12060,
            'year' =>3,
            'value' => 100,
            'description' => 'Se da cumplimiento a las acciones programadas para la actualización y consolidación del sistema de gestión integrado HSEQ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12061,
            'year' =>3,
            'value' => 56,
            'description' => 'Se ejecutaron acciones tendientes a implementar el Plan Estratégico de Tecnologías de la Información – PETI, con un avance del 55% para la vigencia 2021 cumpliendo la meta programada. Esta meta se cumplió desde las siguientes dimensiones: D. Estrategia de TI - D. Gobierno TI - D. Sistemas de Información - D.Servicios tecnologicos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12062,
            'year' =>3,
            'value' => 35,
            'description' => 'Se avanzó en la fase 1 del SIG con el robustecimiento del Sistema de Información Geográfico institucional, mediante el cargue y publicación de la información ambiental geográfica en los servicios dispuestos por CORTOLIMA (Portal de Datos Abiertos y Geovisor Ambiental).
        El portal de datos abiertos es un servicio web que brinda a los usuarios tanto internos como externos el acceso a la información geográfica de la entidad en aras del cumplimiento a lo establecido por la Ley 1712 de 2014, conocida como Ley de transparencia y del derecho a la información pública.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12063,
            'year' =>3,
            'value' => 81,
            'description' => 'A través de la Direcciones Territoriales, se han realizado 149 acciones enmarcadas dentro de la estrategia de posicionamiento y acercamiento oportuno, cdenominada “Cortolima Te Escucha”.  DN 34, DS 53, DSO 55, DO 7. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12064,
            'year' =>3,
            'value' => 38,
            'description' => 'se realizaron 156 acciones en 37 municipios, a través de la estrategia de posicionamiento, relacionados por Oficina Territorial para un cumplimiento de la meta de un 100% respeto a la meta de los 47 municipios',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12065,
            'year' =>3,
            'value' => 1,
            'description' => 'se presentaron dos (02) iniciativas de inversión en el marco de la CONVOCATORIA DE LA ASIGNACIÓN PARA LA CTeI-AMBIENTAL del SGR, con cargo de los recursos de la Asignación para la Inversión en Ciencia, Tecnología e Innovación Ambiental, beneficiando a nueve (9) municipios del departamento.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12066,
            'year' =>3,
            'value' => 1,
            'description' => 'se realizó una alianza con el municipio de Anzoátegui que busca fortalecer la planificación territorial, aunando esfuerzos entre la Corporación Autónoma Regional del Tolima-CORTOLIMA y el municipio de Anzoátegui, para la actualización del documento de seguimiento y elaboración del diagnóstico, como parte del soporte técnico para la revisión y ajuste del Esquema de Ordenamiento Territorial del municipio de Anzoátegui-Tolima',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12067,
            'year' =>3,
            'value' => 75,
            'description' => 'atendieron 6.032 PQR de los 6.692 recibidos (5.096 de la sede centro y 1.596 de las territoriales), correspondiente a una ejecución del 90,13%. Las PQR fueron atendidos mediante reuniones, capacitaciones, respuesta a oficios y visitas técnicas o de inspección ocular. De cada visita se presentaron los respectivos informes técnicos y en los casos en que se determinaron infracciones, se remitieron a la Subdirección Jurídica para los trámites pertinentes.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12068,
            'year' =>3,
            'value' => 74,
            'description' => 'realizó 992 evaluaciones a licencias y permisos, frente a un total de 1.302 solicitudes allegadas; correspondiente a un porcentaje de evaluación del 76%,',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12069,
            'year' =>3,
            'value' => 65,
            'description' => 'se adelantaron en la Corporación un total de 10.784 seguimientos, de los cuales  6.026 fueron realizados en la sede centro y 4.758 por las cuatro Oficinas territoriales,',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12070,
            'year' =>3,
            'value' => 23,
            'description' => 'Se resolvió un total de 1.188 procesos sancionatorios, de un total de 1,274   expedientes iniciados; obteniendo un 95,3% en el indicador de procesos sancionatorios resueltos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12071,
            'year' =>3,
            'value' => 100,
            'description' => 'con la ejecución de los operativos de control de flora y fauna programados, llevando a cabo 43 operativos en ejes viales, empresas forestales y áreas de bosque con aprovechamiento ilegal con apoyo de grupos de Policía METIB ambiental, DETOL ambiental, Ejército nacional y SIJIN. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12072,
            'year' =>3,
            'value' => 100,
            'description' => 'Se ha realizado un total de 202 visitas de seguimiento y registro a empresas forestales en los distintos municipios de la sede centro. Esta actividad busca controlar la ilegalidad y garantizar la trazabilidad de la madera que se transforma y comercializa en el departamento del Tolima, como una de las estrategias para reducir la deforestación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        
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
