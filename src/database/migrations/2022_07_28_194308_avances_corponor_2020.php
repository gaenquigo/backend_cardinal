<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorponor2020 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 7724,
            'year' =>1,
            'value' => 75,
            'description' => 'Por el problema de la pandemia (covid-19),  se han limitado las acciones tendientes a la realización de acciones relacionadas con la implementación de los pomcas adoptados por Corponor.                                                                    
        No obstante la corporación ha avanzado en las siguientes acciones:
        Un (1) Estudio de la Fase II para el proyecto PSMV - P42 emisario final quebrada La Cañada, municipio de Cúcuta, departamento Norte de Santander. El alcance del estudio es el de avanzar en la construcción de interceptores y emisario final que conduscan las aguas residuales hasta el punto de localización de la PTAR Tonchalá. : 2.  Firmó el convenio CORPONOR y la empresa Centrales Eléctricas CENS S.A (CI 03-1/20-), para establecer acuerdos de conservación  mediante (PSA) con 53 familias ubicadas en las zonas de amortiguación de los PNR Sisavita, PNR Santurbán-Salazar y PNR Santurbán-Arboledas, cuenca rio Zulia, El convenio tiene una duración de 16 meses, con lo cual se logra conservar 2092,7 has .3. Se ha Avanzado en la ejecución del proyecto implementación de kilómetros de aislamiento con la adjudicación del contrato de obra No 147 y de Interventoría No. 148, e inicio de actividades de campo para la implantación de los km de aislamiento de nacientes, en predios beneficiados. De la cuenca rio Zulia. ',
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
            'activity_id' => 7725,
            'year' =>1,
            'value' => 3.3,
            'description' => 'Por motivo de las restricciones establecidas para el manejo de la pandemia (COVID 19) no se pudieron realizar visitas de campo, entrevistas y demás actividades de campo requeridas para la culminación de la etapa de acciones previas.  En la hoja de comportamiento se justifican los motivos. 
        No se pudo culminar la meta pendiente del PORH de la quebrada Iscala, en la hoja de comportamiento se justifican los motivos. ',
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
            'activity_id' => 7726,
            'year' =>1,
            'value' => 5,
            'description' => 'Se estaba a la espera de la aprobación del Plan de Acción 2020-2023, el cual se adoptó hasta el 08 de mayo de 2020 por el Acuerdo 005.
        No se realizó mantenimiento y puesta en operación de las estaciones hidrometeorológicas por restricciones emanadas en la Resolución 385 del 12 de marzo de 2020. Por la cual se declara la emergencia sanitaria por causa del coronavirus COVID-19 y se adoptan medidas para hacer frente al virus. ',
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
            'activity_id' => 7727,
            'year' =>1,
            'value' => 100,
            'description' => 'En el primer trimestre del año 2020, se realizó el Monitoreo, Seguimiento y Análisis al río Pamplonita y Quebrada Iscalá. Para éste estudio se tuvieron en cuenta 18 ID para la fuente principal del río Pamplonita y 4 ID sobre la quebrada Iscalá. Los resultados del índice de la Calidad del Agua arrojados en éste estudio (ver Anexo 1), de los 22 puntos, nueve (9) arrojan un ICA Aceptable y trece (13) puntos con un ICA Regular , que al hacer los cruce de variables se pueden concluir que la afectación de la calidad tanto fisicoquimica como microbiológica de la fuente hídria se basa en las actividades antropicas identificadas, como las que se destacan: captación de aguas superficiales (disminución del caudal), vertimiento de tipo doméstico; cultivos de frutales, flores, arroz, plátano; crianza de animales de granja como ganado, cerdos, caprinos, pesca etc.; extracción de materiales pétreos; tala de árboles; paso vehicular; botaderos a cielo abierto y residuos dentro de cuerpos de agua, Actividades reacreativas como balnearios y restaurantes. 
        Para la determinación del Indice de la Calidad del Agua en la cuenca de los ríos Algodonal y Tejo se siguió la metodología de cálculo propuesta por el IDEAM a partir de la información de calidad adquirida en el monitoreo del Laboratorio Ambiental de Corponor en el Tercer trimestre de 2020.                             
        El índice se calculó para cada uno de los puntos de monitoreo en los cuales se basa el programa de muestreo del laboratorio, ésta red consta de 12 puntos para el río Algodonal y 3 puntos para el río Tejo.                                                                          Los resultados del índice de la Calidad del agua obtenidos en éste estudio (Anexo 1) fueron: de los 15 puntos, ocho (8) arrojaron una calificación ICA Aceptable,  seis (6) con  ICA Regular y uno (1)  con  ICA Mala; al realizar el cruce de variables se puede concluir que la calificación ICA Mala es debido a que las aguas residuales domésticas del municipio de Ocaña son vertidas directamente al río Tejo sin ningún tratamiento y los puntos con calificación Regular se ve afectado por las actividades antrópicas identificadas, reflejando variación en cada uno de los parámetros fisicoquimicos y microbiológicos evaluados. ',
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
            'activity_id' => 7728,
            'year' =>1,
            'value' => 5,
            'description' => 'Se adelanto una revision documental de toda la informacion existente sobre la corriente hidrica, con el fin de establecer una linea base de la misma. 
        Quebrada Aguablanca -(Río Pamplonita)
        Aguablanca  (Río Zulia)',
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
            'activity_id' => 7729,
            'year' =>1,
            'value' => 41,
            'description' => 'Es necesario hacer mencion que durante el actual periodo informado se limito el seguimiento al programa del PLAN DE USO EFICIENTE Y AHORRO DEL AGUA - PUEAA por las siguientes causas: Disposiciones emanadas por el gobierno en torno a la emergencia sanitaria causada por el coronavirus COVID-19.
        La expedición por parte de la Corporación de las resoluciones No 191 del 20 de marzo de 2020, 196 del 25 de marzo de 2020, 223 del 17 de abril de 2020 y 473 del 01 de septiembre de 2020 que tratan de la suspensión y levantamiento de términos establecidas para los trámites de permisos, licencias, concesiones, y autorizaciones ambientales y los procedimientos administrativos sancionatorios',
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
            'activity_id' => 7731,
            'year' =>1,
            'value' => 30,
            'description' => 'A la fecha todos los PSMV terminaron su vigencia. La Corporación se encuentra en atención a inquietudes sobre el trámite del PSMV para dar cumplimiento a la Resolución No. 631 de 2015.
        
        Teniendo en cuenta la emergencia por causa de la pandemia de Covid 19, se han realizado reuniones virtuales y algunas presenciales en los 23 municipios.',
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
            'activity_id' => 7732,
            'year' =>1,
            'value' => 4.77,
            'description' => 'Con recursos del proyecto, se tiene: 
        1. estudios Fase III para el proyecto PSMV - p42 emisario final quebrada la cañada, municipio de Cúcuta, departamento Norte de Santander
        2. construcción PSMV p42 emisario final quebrada la cañada - Fase III (py42 – 45), en SAN JOSÉ DE Cúcuta, Norte de Santander. inicio 30 de septiembre/2020.
        Con recursos del proyecto: 1.1 implementación de los POMCAS en el departamento norte de Santander - POMC aportante (TSE), se tienen en proceso precontractual:
        Construcción del interceptor margen izquierda quebrada la Macanita, fase II. municipio de Salazar de las palmas.  Norte de Santander
        Construcción de unidades sanitarias en zona rural dispersa del municipio de San Cayetano. Norte de Santander.
        Construcción de unidades sanitarias en zona rural dispersa de los municipios de Mutiscua – Cucutilla y Arboledas. Norte de Santander.
        Construcción de unidades sanitarias en zona rural dispersa del municipio de Durania. Norte de Santander.',
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
            'activity_id' => 12714,
            'year' =>1,
            'value' => 45,
            'description' => 'Durante el cuatro semestre del año no se adelantaron acciones asociadas a este indicador, meta se avance en la formulación del plan de manejo ambiental del Páramo Tamá se considera completa a tercer trimestre del año (45%)',
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
            'activity_id' => 7733,
            'year' =>1,
            'value' => 60,
            'description' => 'Se avanza en la actualización de los Planes de Manejo del Parque Natural Regional Sisavita y del Parque Natural Regional Santurbán Salazar de las Palmas. ',
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
            'activity_id' => 7734,
            'year' =>1,
            'value' => 100,
            'description' => 'Se están ejecutando acciones de manejo que apuntan a lineas estratégicas de los 6 planes de manejo de áreas protegidas que han sido adoptados. Las acciones priorizadas para la vigencia 2020, tienen seguimiento específico a través del indicador 13 del PAI. ',
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
            'activity_id' => 7735,
            'year' =>1,
            'value' => 71,
            'description' => 'Durante el cuarto trimestre del año se finalizó el documento metodológico y descriptivo de la capa de áreas prioritarias para la restauración que se localizan en áreas protegidas y páramos de la jurisdicción. Se encuentra pendiente de revisión por parte de la subdirección de recursos naturales.
        Durante el cuarto trimestre del año, se avanzó en la elaboración del documento para la formulación del esquema de PSA, se inició con la etapa de preinversión, para el diseño e implementación de un proyecto tipo de Pagos por Servicios Ambientales de Regulación y Calidad Hídrica en áreas protegidas de Norte de Santander, administradas por CORPONOR
        
        Durante el cuarto trimestre del año se finalizó el documento preliminar de la Estrategia de Educación Ambiental, Participación y Comunicación para la gestión y consevación de las áreas protegidas administradas por CORPONOR, el cual se encuentra pendiente de observaciones por parte del grupo de educación ambiental y de la subdirección de recursos naturales para la realización de los correspondientes ajustes. 
        
        En relación con los cinco perfiles de proyectos productivos, cuya formulación fue finalizada en el tercer trimestre del año, se continúa con la planificación de actividades de capacitación en asocio con AGROSAVIA para la línea de ganadería sostenible.
        
        Para las demás líneas que son : caficultura sostenible, frutales de clima frio, huertos caseros y biodigestores, en el tercer trimestre se realizaron acercamientos con las alcaldías de Cucutilla y Salazar pero no se ha generado compromiso en relación con la cofinanciación para la implementación. 
        
        Durante el cuarto trimestre del año, las consultoras vinculadas por WWF, adelantaron encuentros con las familias ocupantes, con lo cual fue posible completar la información de los diagnósticos jurídico y social del predio con problemática de ocupación. Los productos generados con la consultoría son el informe del estado jurídico del predio,  los análisis jurídicos de la situación legal de cada ocupante con el correspondiente concepto y recomendaciones para su posible solución , asi como el diagnóstico de la situación socioeconómica y el perfil de vulnerabilidad , que serían tenidos en cuenta para posibles escenarios de negociación, concertación o trámite de medidas más viables de solución, buscando cumplir los objetivos del área protegida sin generar detrimento en la calidad de vida de los ocupantes. 
        En enero de 2021 se realizaría la socialización con comunidad , con termotasajero y con otros actores de interés para el proceso. 
        Durante el cuarto trimestre del año fue aprobado por parte del Banco Interamericano de Desarrollo (BID) el proyecto para planificación del agroecoturismo y montaje de un vivero de especies nativas en el sector Sisavita de la vereda carrizal, en la zona con función amortiguadora del PNR Sisavita. 
        
        Desde el mes de noviembre en trabajo conjunto entre WWF y CORPONOR se avanza en la gestión y estudio de cotizaciones para la selección de proveedores de la estructura, los materiales e insumos para el montaje del vivero. 
        
        Igualmente, en el mes de noviembre, se avanzó en la definición de objeto, y obligaciones del convencio interadministrativo que se suscribirá entre CORPONOR y la Alcaldía de Cucutilla que comprende, entre otras, el préstamo en uso del predio de la escuela de Sisavita para la ubicación y operación del vivero. 
        
        Durante el cuarto trismestre del año WWF realizó la selección del proveedor y compra de la valla, en conjunto con vallas de otras áreas protegidas del SIRAP Andes Nororientales. 
        Durante el cuatro trimestre del año se finalizó el informe técnico del inventario de aves adelantado con la campaña de campo de julio y agosto. La información fue utilizada coo insumo para el componente de diagnóstico del documento de actualización del plan de manejo ambiental del PNR Sisavita y será línea base para las acciones de monitoreo de fauna. 
        
        A final del mes de octubre fue finalizado el fototrampeo en el PNR Sisavita, el cual se adelantó desde el mes de febrero haciendo uso de las cuatro cámaras trampa donadas por WWF complementadas con 8 cámaras de investigadores de la Universidad de Pamplona. 
        
        La acción no se completó en su totalidad pues no fue posible adelantar el inventario propuesto para el área del DRMI de Mejué en razón a dificultades en salud presentadas por la profesional bióloga encargada. 
        
        No fue posible concretar la coordinación con la subdirección de desarrollo sectorial sostenible para la realización de visitas.
        ',
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
            'activity_id' => 7736,
            'year' =>1,
            'value' => 100,
            'description' => 'Se priorizaron 2 acciones para la vigencia 2020, las cuales suman el 100%..
        
        El avance a final de cuarto trimestre se describe en la columna observaciones en la hoja de cálculo Anexo 1. Comportamiento',
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
            'activity_id' => 7738,
            'year' =>1,
            'value' => 323,
            'description' => 'En la implementacion del convenio  N° 008 del  22 de septiembre de 2020 con el municipio de Gramalote no se logro l adquisiciòn de predios quedaron postergados para el año 2021.                                                                                                                Con la Gobernaciòn de Norte de Santander se suscribio el convenio 020 del 18 de diciembre de 2020 , antes de la firma del convenio se  venia avanzado en la implementacion del protocolo de adquisiciòn por lo que se consiguio  la adquisiciòn de 382 hectareas  en los municipios de Cucutilla y Chitaga, estos recursos se consiguieron a final de la vigencia fiscal por lo que no se ajusto la meta',
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
            'activity_id' => 7739,
            'year' =>1,
            'value' => 35,
            'description' => 'En el  primer semestre se adelanta  proceso de la Licitación Pública                                N0. 004 del 2020, en el cuarto trimestre se realizara la ejecución del 100%  del contrato de obra No. xxx. Con la implantación  de  kilómetros de aislamiento y enriquecimiento de bosque natural en las microcuencas aporyantes a los Rios Zulia y Nuevo Presidente - Tres Bocas (Sardinata - Tibú), en su recorrido por los Municipios de Santiago, El Zulia, Gramalote y Lourdes, del Dpartamento Norte de Santander. Municipios: Santiago, Lourdes  y Gramalote.
         
        En el tercer trimestre adjudicado el contrato de obra No 147 y la Interventoria No. 148, se inicio el acercamiento y la socialización ante los entes municpales y comunidades beneficiadas, continuar con la supervisión a las labores de campo para la implatación de los km de aislamiento.                                                                    
        
        En el  cuarto trimestre se realizo la ejecución del 100%  del contrato de obra No. 148. Con la implantación de kilómetros se aislaron y se protegieron 90,82 Has en bosques naturales. ',
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
            'activity_id' => 12716,
            'year' =>1,
            'value' => 20,
            'description' => 'Por hacer parte de las especies que se encuentran con categoría de amenaza el Oso de Anteojos (Tremarctos ornatus) y el Caimán Aguja (Crocodylus acutus), al igual que los avistamientos de estas especies; hacen necesario implementar acciones que conlleven al cuidado y protección y ampliar el conocimiento que se tiene de estas dos especies sombrilla en los habitantes de los sectores en donde hacen presencia, al igual que realizar monitoreos de la presencia de fauna silvestre en las áreas de manejo especial.
        
        Actividades lv trimestre:
        1.Charla virtual a los entes municipales y JAC del municipio de Chinacotá
        2. Actualización de reporte de especies en alguna categoria de amenaza de acuerdo a los resultados obtenidos dentro de los POMCAS aprobados por la Corporación
        
        3. Elaboración y actualización de planes de manejo para especies amenazadas en la región',
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
            'activity_id' => 12717,
            'year' =>1,
            'value' => 20,
            'description' => 'El promover la importancia de la protección, conservación y manejo sostenible de la biodiversidad, presente en los municipios en donde tiene influencia la Corporación, y sobre todo acompañar las solicitudes realizadas sobre el conflicto de la fauna silvestre con los seres humanos permitiendo una convivencia con estas especies que por motivos de acciones antrópicas como la expansión de la frontera agrícola y ganadera al igual que las malas practicas de la ganadería extensiva permiten que se presenten estos conflictos, sobre todo con grandes mamíferos, el cuidado y conservación de ecosistemas estratégicos como los humedales y la inclusión de estrategias para la conservación de la flora, reflejan la incorporación del manejo de la biodiversidad en el territorio.
        
        Dentro de las acciones ejecutadas en el IV trimestre tenemos:
        1.Elaboración de contenidos educativos en la tematica de Biodiversidad y servicios ecosistemicos y cuidado del agua- municipio de Toledo.
        2. Entrega de estategias radiales en la tematica de oso Andino, Puma y caiman aguja para los municipios de Sardinata, Chinacota, Toledo Salazar y Villa Caro
        4. Charla virtual a los entes municipales y JAC del municipio de Cucuta entorno al cuidado y conservación de Oso Andino',
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
            'activity_id' => 12719,
            'year' =>1,
            'value' => 1598,
            'description' => 'Se realiza la atencion de manera oportuna a todas las especies que ingresaron al hogar de paso estos son: 597 ejemplares en colección del año anterior, en el primer trimestre ingresaron 290 ejemplares, en el segundo trimestre 170, en el tercer trimestre 266, en el cuarto trimestre 275 para un total de 1598 animales atendidos, de los cuales se han liberado 602 y  se han muerto en cautiverio  276. Entre las especies manejadas tenemos:
        Faros (Didelphis marsupialis),
        Oso  de anteojos ( Tremarctos ornatus)
        Venados (Odocoeilus virginianus)
        Guacamaya (Ara sp.)
        Loros (Amazona sp)
        Boa (Boa constrictor)
        Caiman aguja (Crocodilus acutus))
        Entre otros. ',
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
            'activity_id' => 7740,
            'year' =>1,
            'value' => 10,
            'description' => 'A la fecha se cuenta con un avance del 100% de las actividades programadas para la vigencia 2020.  Correspondiente a Definición de áreas a ordenar, Organización del equipo de trabajo y revisión de la información disponible. Se obtiene mapa de coberturas de la Cuenca del Río Pamplonita ',
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
            'activity_id' => 7741,
            'year' =>1,
            'value' => 50,
            'description' => 'Se realiza la atención de las solicitudes por presencia de la especie invasora Caracol Gigante Africano (Achatina fulica) en donde de acuerdo con la resolución 654 del 2011 se realiza sacrificio de esta especie por presentar gran riesgo para la salud, ambiente y ecosistemas en donde se presenta al igual que amenaza de las especies nativas, se realiza sensibilización de manejo, control mecánico realizando sacrificio por deshidratación aplicando sal y Cal Dolomita, al igual que la disposición final in-situ, después se realiza el seguimiento para determinar la efectividad de las medidas implementadas para su control. ',
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
            'activity_id' => 7742,
            'year' =>1,
            'value' => 4629,
            'description' => 'En el cuarto trimestre de 2020, se firmaron acuerdos entre familias, CORPONOR y la Corporación Masbosques para establecer acuerdos de conservación con 90 familias ubicadas en las zonas de amortiguación de los PNR Sisavita, PNR Santurbán-Salazar y PNR Santurbán-Arboledas, financiados por el grupo NUTRESA. El convenio tiene una duración de 16 meses. 
        En noviembre, se firmo el convenio Cerámica Italia - CORPONOR, para establecer acuerdos de restauración con 40 familias ubicadas en el Distrito Regional de Manejo Integrado DRMI Bosque Seco Tropical Pozo Azul, por un periodo de 6 meses.',
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
            'activity_id' => 7743,
            'year' =>1,
            'value' => 50,
            'description' => 'Se tiene borrador del documento Estrategia para el Control de la deforestación para el Departamento Norte de Santander, se coordina con el ministerio para establecer las estrategias de control.. ',
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
            'activity_id' => 7745,
            'year' =>1,
            'value' => 1,
            'description' => 'Proyecto perfilado: Modelo agroforestal Cacao-Forestales en 10 has a efectuarse en el municipio de Tibú. Avance de la ejecución a Diciembre 100%  con una siembra de 10.017 árboles maderales de las especies abarco(Cariniana piryformis)-Ceibo (Erithryna edulis) -Yatago ( Trychantera gigantea)',
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
            'activity_id' => 7746,
            'year' =>1,
            'value' => 40000,
            'description' => 'Fueron distribuidos y sembrados 40.030 àrboles nativos de caracteristicas maderable y de proteccìon de fuentes hìdricas, de suelos degradados y erodados  en los diferentes municipios de departamento Norte de Santander, con la colaboraciòn de aliados como La Gobernaciòn de Norte de Santander- Alcaldias del departamento-Ejercirto Nacional- ONG Ambientalistas del departamento-Instituciones Educativas del departamento- Sector Pùblico - Sector Privado - Comunidades rurales y de centros urbanos',
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
            'activity_id' => 7747,
            'year' =>1,
            'value' => 10,
            'description' => 'Este indicador se cumple en el porcentaje previsto para el 2020, realizando dos reuniones del Comité de Bosques e integrando a la página Web de la Corporación los protocolos 0-1-2-3 ',
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
            'activity_id' => 7748,
            'year' =>1,
            'value' => 20,
            'description' => 'En el tercer trimestre con la ejecución del contrato de obra aislamiento para la conservación de ecosistemas y/o bosques naturales, se inicio la selección de las áreas de ecosistemas en restauración. En el cuarto trimestre las áreas aisladas se georeferenciarán con la utilización del Sistema Posicionamiento Global (GPS),  se cuantificarán las Has  protegidas (Restauración Pasiva). Ademas contando con el apoyo de las otras acciones en mención en el comportamiento del indicador.  En el  cuarto trimestre se realizo la ejecución del 100%  del contrato de obra No. 148. Con la implantación de kilómetros de aislamiento y enriquecimiento se protegieron 32,718 Has en restauración Pasiva en las microcuencas aportantes a los Ríos Zulia y Nuevo Presidente – Tres Bocas (Sardinata - Tibú), en su recorrido por los Municipios de Santiago, El Zulia, Gramalote y Lourdes, Departamento Norte de Santander, que garantizaran la sostenibilidad a la cobertura vegetal a través del tiempo áreas de recargas hídricas de gran importancia. ',
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
            'activity_id' => 7749,
            'year' =>1,
            'value' => 90,
            'description' => 'Durante el primer semestre se adelantó el acompañamiento y asistencia técnica a ocho municipios y se desarrolló un Taller virtual con los 40 municipios con la participación de la Gobernación de Norte de Santander y el Ministerio de Vivienda, Ciudad y Territorio, en temas claves para la formulación de los POT. Asì mismo se revisaron los 10 estudios bàsicos de gestiòn del riesgo del Convenio 014 del 2019.
        Se tiene programado adelantar otro taller virtual para el tema de Determinantes Ambientales, y desarrollar talleres virtuales de ordenamiento territorial por municipio, y así mismo, acompañar a los municipios que están en procesos de formulación de sus POT. Se tiene programado acrualziar la Reoslución 2265 del 2018 sobre determinantes ambientales.
        Se programó adelantar un taller presencial en octubre con los municipios del Catatumbo para acompañarlos en los procesos de formulación de los POT de Segunda Generación, así mismo, socialzair con los demás municipios el decreto 1232 del 2020 sobre los contenidfos de los POT, y en el mes de noviembre se adelantarán los seguimientos a los POT concertados.
        Se continua revisando las determinantes ambientales y ajustando las nuevas fichas y guias.',
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
            'activity_id' => 7750,
            'year' =>1,
            'value' => 60,
            'description' => 'Con el  acompañamiento , asesoría y entrega de instrumentos de planificación del territorio,  a  los 8 municipios  PDET , se busca la incorporación de las determinates ambientales necesarias  para el desarrollo sostenible  en el Catatumbo , con esto se busca beneficiar  de manera directa una población de alrededor de 144.103 personas que habitan el 42% del territorio del departamento Norte de Santander , 
        Con la participación en las mesas de trabajo con la diferentes entidades del orden nacional, regional , ONG, sector privado  que hacen presencia en la zona del Catatumbo, se  busca hacer un trabajo coordinado que permite facilitar  la incorporación de la dimensión ambiental en los instrumentos de  planificación en los entes territoriales  y en la ejecución de los proyectos para la implementación de los acuerdos de paz contemplados en el PATR  de la subregión Catatumbo. ',
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
            'activity_id' => 7751,
            'year' =>1,
            'value' => 98.8,
            'description' => 'Se realizaron eventos  de asesoramiento, capacitación y acompañamiento ténico a los entes territoriales en la incorporación de la gestión del cambio climático en instrumentos de planificación y en la articulación de medidas de mitigación de GEI para los municipios comprendidos entre la zona Pamplona, Ocaña, Salazar y Cúcuta, a traves de talleres virtuales.
        Se contó con el apoyo de FONDO ACCIÓN para la identificación de iniciativas de mitigación con los entes territoriales y la participación de territoriales Ocaña y Pamplona para la realización de los talleres.
        Se realizó un balance final de la articulación del PICCDNS con los instrumentos de planificación (PDT, PMGRD, POT-PBOT-EOT) y se articula como insumo para idenficar necesidades en la ejecusión de acciones en cada territorio.',
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
            'activity_id' => 7752,
            'year' =>1,
            'value' => 90,
            'description' => 'Se participa activamente de sesión del COMITÉ INTERSECTORIAL E INTERINSITUCIONAL DE CAMBIO CLIMÁTICO y del NODO REGIONAL NORANDINO DE CAMBIO CLIMÁTICO, donde se definió la secretaria técnica del nodo para los próximos dos años, (CORPONOR asume secretaría en 2020) y se compromete a la participación en la reestructuración del nodo en el año 2021. a demas, se participó en la construcción del Plan Integral de Cambio Climático Sector Ambiente por Nodo Norandino.
        
        Se postula la medida del PICCDNS Fomento de alternativas de transporte urbano bajo en carbono en la Mesa Municipal de la Bicicleta de Cúcuta. MMBC, con el fin de promover su ejecución y se realiza una manifestación de apoyo a proyecto de diseño urbanistico de movilidad sostenible dentro del marco del PICCDNS.
        
        Se participó como ponente, en el primer foro academico Hablemos de Contaminación del aire para tratar el tema CAMBIO CLIMÁTICO de manera virtual con la institución educativa Instituto Técnico Maria Inmaculada. en apoyo con SENA y CEAM del municipio de Villa del Rosario, Norte de Santander.
        
        Se avanzó en la construcción del Plan de Acción para la implementación del PICCDNS con el apoyo de FONDO ACCIÓN a traves de una mesa de trabajo virtual.
        
        Se realizó seguimiento a los avances de acciones/proyectos de CORPONOR que tienen cumplimiento con el contenido programático del PICCDNS obteniendo un avance de 20 acciones de las medidas del Corto Plazo. Ademas, se planteó un primer modelo porcentual para realizar seguimiento al PICCDNS.
        
        Finalmente, Se realizaron dos encuentros virtuales con actores del NODO NORANDINO y del CIICC para registrar los avances del nodo y de los dos PIGCCT de los santanderes como mecanismo de empalme a la nueva secretaría técnica del NODO y para articulación y gestión de futuros proyectos encaminados a la mitigación y adaptación al cambio climático',
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
            'activity_id' => 7753,
            'year' =>1,
            'value' => 98,
            'description' => 'Los sectores priorizados para acompañamiento en la reconversión hacia sistemas sostenibles de producción (SPA) son: Porcícola, Agrícola y Palmero.
        En el I semestre de 2020: Se realizaron reuniones virtuales  con los diferentes sectores productivos del departamento Norte de Santander:      
        Sector Porcícola: Se realizaron reuniones virtuales para socializar el borrador de la Agenda Ambiental entre Corponor y Porkcolombia. La temática es la legalización ambiental del sector porcicola en el trámite a Permisos de Concesión de Aguas y Planes de Fertilización. Se revisó el borrador propuesto por Porkcolombia de la Agenda Ambiental y ya fué ajustada entre las partes. Está pendiente una última revisión para enviarla para la firma del Porrkcolombia. Igualmente se eleboró un plan operativo para desarrollar en el segundo semestre de 2020 y en estos momentos está en revisón y ajuste.
        Acuerdo de Voluntades Fundación Bioentorno:  Se gestionó via whastapp con la coordinadora Nacional de la Fundación Bioentorno la vinculación de Corponor como organizadores del Curso On LIne Siembra Segura y con el apoyo d ela oficina de comunicaciones se envío la invitación a todo el sectro agropecuario pudiendo vincualr a más de 60 personas en el curso de importancia en el manejo posconsumo de envases de plaguicidas.  La Fundación Bioentorno ya está cotizando la impresión de las  vallas  con información de triple lavado y logos institucionales que van a ser ubicadas en cada una de las casetas de los municipios donde se han instalado casetas de almacenamiento temporal de envases posconsumo.   
        Sector Palmicultor: Se realizaron reuniones virtuales para socializar el borrador de la Agenda Ambiental entre Corponor y Fedepalma - Cenipalma - Operadores Palmeros del catatumbo. Se coordinaron e hicieron  reuniones con los profesionales de la Dirección Territorial Tibú, Subdirección de Recursos Naturales y el coordinador de Agendas de Dirección General,  para revisar la Agenda Propuesta y hacer las observaciones. Ya quedó lista la Agenda Ambiental para ser firmada por el presidente de Fedepalma en Bogotá y será enviada para la firma del Director General de Corponor. Fedepalma envío el cronograma para trabajar en el segundo semestre de 2020 y en estos momentos está en revisión por los funcionarios de Corponor.    ',
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
            'activity_id' => 7754,
            'year' =>1,
            'value' => 2.47,
            'description' => 'Proyecto: Construccion de seiscientas sesenta y nueve (699) Estufas Ecoeficientes o Reguladoras de humo en la zona rural de los municipios de Bochalema (39), Ragonvalia (57), Abrego (34), El Carmen (34), El Tarra (34), Sardinata (34), Hacarí (34), La Playa (34), Ocaña (34), Convención (34), Tibú (34)Teorama (33), Mutiscua (83) y Los Patios (181). De las cuales, trescientos treinta y nueve (339) beneficiarios contarán con el establecimiento del huerto dendroenergético.
        
        Proyecto: Construcción de tres (3) lechos de secado tipo marquesina para el manejo de la porcinaza sólida para ser distribuidas estratégicamente en tres veredas del Municipio de El Zulia. en el departamento Norte de Sa ntander como medida de mitigación al cambio climático.
        
        Proyecto: Establecimiento de dos (2) Sistemas Silvopastoriles (Bancos Mixtos de Forraje - BMF) a dos (2) usuarios de la Asociación de Ganaderos de Chinácota – Asochigán departamento Norte de Santander, mediante la adquisición (compraventa) de árboles forrajeros como estrategia de mitigacion de Gases Efecto Invernadero - GEI y  mitigación al Cambio Climático ',
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
            'activity_id' => 7755,
            'year' =>1,
            'value' => 90,
            'description' => 'Ante la segunda temporada de lluvias del 2020, se emitió circular de recomendaciones en especial la activación de planes de contingencia de los municipios y se partició en la declaratoria de calimidad pública en el departamento por la segunda temporada de lluvias. Se apoyó al departamento en la construcción del Plan de Acción ante tal declaratoria,
        Se realizó un conversatorio para el fortalecimiento de las capacidades y habilidades de los coordinadores de gestión de riesgos de Lourdes, Sardinata, El Zulia y Arboledas para le preparación y atención de emergencias (incendios forestales Y temporada de lluvias).
        Se realizó visita de identificación de necesidades al cuerpo de bomberos OCAÑA para la gestión de recursos.
        Se apoyó a la UNGRD a la realización de diagnóstico del Sistema de Alertas Tempranas SAT de Norte de Santander.
        Se gestionó la particiáción activa de las comunidades Barí en los Consejos Territoriales de Gestión de Riesgos de Desastres.
        Se apoyó al munisipio de Sardinata en simulacro de Incendios Forestales .
        Se apoyó al municpio de Puerto Santander para atender emergencia de inundacion por temporada de lluvias.
        Se emiten diariamente boletines de seguimiento a eventos hidroclimatológicos en Norte de Santander y se consolida en 3 informes mensuales (Octubre, Noviembre y Diciembre).
        Se realixó evaluación de daños y necesidades ambientales Post-desastres en incendio forestal en el municipio de Arboledas y Villa Caro.y en los municipios de Arboledas, Cucuta, Cucutilla, Lourdes, Puerto Santander, El Zulia por inundaciones y movimientos en masa.
        Se avanzo en el estudio de análisis de los PMGRD con la consolidación total de los documentos e identificando las necesidades de sus contenidos programaticos y la identificación de los PMGRD desactualizados.
        Se realizó un estudio de identificación de movimientos en masa multitemporal a traves de sensores remotos con los municipios de Lourdes y Ragonvalia.',
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
            'activity_id' => 7756,
            'year' =>1,
            'value' => 2,
            'description' => 'PROYECTOS TERMINADOS:
        1. ADECUACIÓN HIDRAULICA DEL RIO ZULIA A SU PASO POR LA VEREDA GUAMITO,  EN JURISDICCIÓN DEL MUNICIPIO EL ZULIA, COMO MEDIDA PARA MINIMIZAR  AFECTACIONES POR EL INCREMENTO DE CAUDAL
        2. OBRAS PARA EL MEJORAMIENTO DE LA SECCIÓN HIDRÁULICA DEL RIO PAMPLONITA, SECTOR BARRIO SAN RAFAEL, MUNICIPIO DE CÚCUTA. 
        PROYECTOS  EJECUCIÓN VIGENCIA 2021:
        Por gestión realizada ante el MHCP SE OBUTVO Viabilidad Financiera para 4 proyectos; incorporandose sus recursos el 1 de diciembre y se alcanzó a efectuar fase precontractual y contractual legalizada.  Fechas de inicio 28 de Diciembre de 2020. 
        1. IMPLEMENTACIÓN DE ACCIONES EN EL MARCO DE LA GESTIÓN DE RIESGO PARA LA RECUPERACIÓN AMBIENTAL DE LA RONDA HÍDRICA DE LA QUEBRADA AGUALINDA Y RÍO PAMPLONITA EN EL SECTOR BARRIO MONTEBELLO I Y LADERAS ALEDAÑAS, MUNICIPIO DE LOS PATIOS, NORTE DE SANTANDER
        2.IMPLEMENTACIÓN DE ACCIONES PARA MITIGAR LA SOCAVACIÓN ACELERADA DEL SUELO DE LADERA EN LA MARGEN IZQUIERDA DEL RÍO PAMPLONITA, SECTOR AVENIDA DEL RÍO. 400 M AGUAS ABAJO DEL PUENTE LA GAZAPA (ENRIQUE C. CORREDOR), MUNICIPIO DE CÚCUTA, NORTE DE SANTANDER. 
        3. IMPLEMENTACIÓN DE ACCIONES PARA MITIGAR LA SOCAVACIÓN ACELERADA DEL SUELO DE LADERA AGUAS ADENTRO DE LA DESEMBOCADURA DE LA QUEBRADA LA SALADERA CON EL RÍO PAMPLONITA, POR SU MARGEN IZQUIERDA, SECTOR CARCEL MODELO MUNICIPIO DE CÚCUTA, DEPARTAMENTO NORTE DE SANTANDER
        4. IMPLEMENTACIÓN DE ACCIONES PARA MITIGAR LA SOCAVACIÓN ACELERADA DEL SUELO DE LADERA  MARGEN IZQUIERDA Y DERECHA RÍO PAMPLONITA, AGUAS ABAJO INMEDIATAMENTE DESPUÉS DEL PUENTE ELIAS M. SOTO, MUNICIPIO DE CÚCUTA, NORTE DE SANTANDER
        CONVENIO PARA MITIGAR RIESGOS DE ESCASEZ HÍDRICA- EJECUCIÓN VIGENCIA 2021:
        1. CONVENIO INTERADMINISTRATIVO ENTRE EL MUNICIPIO DE OCAÑA Y LA CORPORACIÓN AUTÓNOMA REGIONAL DE LA FRONTERA NORORIENTAL - CORPONOR, CON EL FIN DE AUNAR ESFUERZOS PARA LA CONSTRUCCIÓN DE RESERVORIOS PARA EL ALMACENAMIENTO DE AGUA, EN LA ZONA RURAL DE OCAÑA.',
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
            'activity_id' => 7757,
            'year' =>1,
            'value' => 40,
            'description' => 'Número total de licencias ambientales vigentes y aprobadas por la Corporación a 31/12/2019: 335, y la Meta para la vigencia 2020 es el seguimento es de 134 Licencias ambientales (40%)
        El acumulado del año fue de 148 expedientes de seguimientos completos, corresponden al Sector Minero (Explotación de material de arrastre, de arcilla, de carbón, de caliza, otros materiales). ',
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
            'activity_id' => 7758,
            'year' =>1,
            'value' => 15,
            'description' => 'Número total de licencias ambientales vigentes y aprobadas por la Corporación a 31/12/2019: 68, y la Meta para la vigencia 2020 es el seguimento es de 20 permisos de Ocupación de Cauce. (30%)
        Teniendo en cuenta la declaratoria de emergencia sanitaria decretada por convid 19, En el año se hizo seguimiento a 10 expedientes completos asignado para la vigencia 2020. ',
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
            'activity_id' => 7759,
            'year' =>1,
            'value' => 30,
            'description' => 'Número total de Aprovechamientos Forestales vigentes y aprobadas por la Corporación a 31/12/2019: 29, y la Meta para la vigencia 2020 es el seguimento es de 9  Aprovechamientos Forestales (30%), El acumulado del año fue de 16 expedientes de seguimiento completos para la vigencia 2020.                META CUMPLIDA',
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
            'activity_id' => 7760,
            'year' =>1,
            'value' => 25,
            'description' => 'Número total de permisos de vertimientos vigentes y aprobadas por la Corporación a 31/12/2019: 60, y la Meta para la vigencia 2020 es el seguimento es de 18  permisos de vertimientos (30%), El acumulado del año es de 15 expedientes de seguimientos completos asignado para la vigencia 2020. ',
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
            'activity_id' => 7761,
            'year' =>1,
            'value' => 50,
            'description' => 'Número total de Emisiones Atmosféricas vigentes y aprobadas por la Corporación a 31/12/2019: 102, y la Meta para la vigencia 2020 es el seguimento es de 51 Emisiones Atmosféricas (50%)
        el acumulado del año fue de 51 expedientes de seguimientos completos, corresponden al sector industrial (Plantas de coquización, transformación de arcilla, fabricación de cemento)',
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
            'activity_id' => 7762,
            'year' =>1,
            'value' => 10,
            'description' => 'Número total  vigentes y aprobadas por la Corporación a 31/12/2019: 2.615
        Numero total con  seguimiento: 260',
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
            'activity_id' => 7763,
            'year' =>1,
            'value' => 0,
            'description' => 'Permisos de investigación científica  vigentes y aprobadas por la Corporación a 31/12/2019: No hay permisos vigentes           ',
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
            'activity_id' => 7764,
            'year' =>1,
            'value' => 30,
            'description' => 'Número total de Registro de libro de operaciones  vigentes y aprobadas por la Corporación a 31/12/2019: 44 y la Meta para la vigencia 2020 es el seguimento es de 13  Registro de libro de operaciones (30%), el acumulado del año fue de 14 expedientes de seguimientos completos asignado para la vigencia 2020. ',
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
            'activity_id' => 7765,
            'year' =>1,
            'value' => 6.06,
            'description' => 'Se otorga  una (2) Licencia Ambiental con un tiempo promedio de 594 y un periodo evaludo de 20% meta deficiente. Se observa en el Sisprop 16646 tiempos en juridica de 869 y direccion de 177 afectando asi el resultado. ',
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
            'activity_id' => 7766,
            'year' =>1,
            'value' => 0,
            'description' => 'A la fecha no se han otorgado permisos de Ocupación de Cauce. Teniendo en cuenta la declaratoria de emergencia sanitaria decretada por covid 19, a corte 31 de Diciembre no se ha dado inicio al seguimiento asignado para la vigencia 2020. ',
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
            'activity_id' => 7767,
            'year' =>1,
            'value' => 35.84,
            'description' => 'se otorga  una (2) Aprovechamiento Forestal con un tiempo promedio de 451 y un periodo evaluado de 13% meta deficiente. ',
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
            'activity_id' => 7768,
            'year' =>1,
            'value' => 22.68,
            'description' => 'se otorga  una (3) Vertimiento con un tiempo promedio de 357 y un periodo evaludo de 25% meta deficiente. Se observa en el Sisprop 20487 tiempos en juridica de 801  y el Sisprop 20145 tiempos en juridica de 178  afectando asi el resultado. ',
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
            'activity_id' => 7769,
            'year' =>1,
            'value' => 90,
            'description' => 'A la fecha se han otorgado 1 permisos de emisiones atmosfericas con tiempo promedio de 46 dias con un avance bueno de 51% y un periodo evaludo de 100% cumpliendo la meta.',
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
            'activity_id' => 7770,
            'year' =>1,
            'value' => 75.78,
            'description' => 'Durante el año 2020 se han otorgado por parte de la Corporación un total setenta y uno (71) concesiones de aguas, de las cuales diecinueve (19) fueron el primer semestre, veinticinco  (25) en el tercer trimestre y, veintisiete  (27) en el cuarto trimestre, la mayoría de ellas para el sector productivo. Es necesario hacer mención que durante el actual período informado se limitó la evaluación de los trámites de solicitudes por las siguientes causas: 
        • La expedición y el mantenimiento en el tiempo de la Resolución 1215 del 17/09/2019 que suspendió los trámites de concesiones de aguas superficiales y subterráneas para usos diferentes a consumo humano en la cuenca del río Pamplonita, esto debido a la temporada seca que se vive la región. 
        • Las disposiciones emanadas por el Gobierno nacional en torno a la emergencia sanitaria causada por el coronavirus COVID-19. 
        • La expedición por parte de la Corporación de las resoluciones N° 191 del 20 de marzo de 2020,  196 del 25 de marzo de 2020,  223 del 17 de abril de 2020 y 473 del 01 de Septiembre de 2020 que tratan de la suspensión y levantamiento de términos establecidas para los trámites de permisos, licencias, concesiones, y autorizaciones ambientales y  los procedimientos administrativos sancionatorios. Así mismo se destaca que algunos funcionarios encargados de los procesos han tenido procesos de aislamiento individual y colectivo debido a que han sido contagiados del virus SARS- CoV-2(COVID -19) ',
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
            'activity_id' => 7771,
            'year' =>1,
            'value' => 0,
            'description' => 'A la fecha no se han otorgado permisos. Teniendo en cuenta la declaratoria de emergencia sanitaria decretada por covid 19, a corte 31 de Diciembre no se ha dado inicio al seguimiento asignado para la vigencia 2020. 0',
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
            'activity_id' => 7772,
            'year' =>1,
            'value' => 0,
            'description' => 'A la fecha no hse han otorgado permisos Libro de Operaciones. Teniendo en cuenta la declaratoria de emergencia sanitaria decretada por covid 19, a corte 31 de Diciembre no se ha dado inicio al seguimiento asignado para la vigencia 2020. ',
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
            'activity_id' => 7773,
            'year' =>1,
            'value' => 8,
            'description' => 'Gestión de los procesos sancionatorios abiertos, con relación a la ocurrencia de infracciones en materia ambiental en su jurisdicción.
        Actos administrativos de iniciación de procedimiento sancionatorio expedidos.
        Sede Cúcuta: 865
        Territorial Ocaña: 282
        Territorial Pamplona: 172
        Territorial Tibú:  80
        Total Procesos  Administrativos  1399
        
        En el I y II trimestre  no se han firmado actos administrativos proyectados  de determinación de responsabilidad  dentro del proceso sancionatorio ambiental, debido a la declaratoria de estado de emergencia por el COVID, decretado por el Gobierno Nacional, que generó por parte de la Corpoación la suspensión de los términos de los procesos sancionatorio ambiental, mediante acto administrativo 196 del 25 de marzo de 2020 y 223 del 17 de abril de 2020.',
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
            'activity_id' => 7774,
            'year' =>1,
            'value' => 3,
            'description' => '1. Estrategia. COMITE DEPARTAMENTAL DE CONTROL Y VIGILANCIA. 75%
        *Reactivación de los comité de control y vigilancia Departamental y reuniones de comité (programaciones, plan de capacitaciones, evaluaciones) - al III trimestre se  ha realizo una reunión del comite,  dada las circunstancias  generadas por la pandemia.                                                                              
        *Capacitaciones a municipios   en su función del control y la vigilancia del medio ambiente y de los Recursos Naturales Renovables al II trimestre se han realizado 17  capacitaciones
        *Reactivación de los comité de control y vigilancai municipal - al tercer trrimestre se han reactivado  12 Comites 
        
        2. Estrategia. OPERATIVOS DE CONTROL Y VIGILANCIA. Al III trimestre se ha realizado 
        (38 operativos - 84%)
        
        3.  Estrategia.  ATENCION DE DENUNCIAS. (314/218 - 69%)
        
        En el I y II trimestre  no se realizaron visitas de inspección, capacitaciones, operativos   y activación de comités, debido a  la declaratoria de estado de emergencia por el COVID, decretado por el Gobierno Nacional. Igualmente el escaso personal de planta existente  en la Oficina de Control y Vigilancia Ambiental,  no permitieron realizar las actividades correspondientes.',
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
            'activity_id' => 7775,
            'year' =>1,
            'value' => 82,
            'description' => 'Para el desarrollo del indicador 44%Acciones GAU Cuarto trimestre 2020.presenta una ejecución acumulada de 82%, lo que se representa en el cumplimiento de las metas relacionadas a las temáticas 1. Planificación y ordenamiento ambiental en áreas urbanas con un 20% 2. Gestión ambiental del Riesgo en áreas urbanas con un 20% 3. Gestión ambiental del Espacio Público en áreas urbanas con un 18% 4. Prevención y Control de la Contaminación del Aire en áreas urbanas (fenómeno de acumulación o concentración de contaminantes en el aire generado por diferentes tipos entre ellos contaminantes criterio, ruido y olores ofensivos) 20% 5. Índice de calidad ambiental urbana con un 4% En referencia a esta temática cuyas acciones se relacionan con  la recopilación de los indicadores de calidad ambiental urbana de los municipios a los cuales le aplica, es preciso señalar que en la actualidad el MINAMBIENTE se encuentra con su equipo técnico realizando la actualización de los formatos, matrices y fórmulas para el reporte del ICAU, por tal razón se tomó la decisión de dar espera al pronunciamiento oficial del ministerio donde hagan entrega de la nueva metodología para sacar los cálculos de los índices de calidad ambiental urbana, además de esperar las nuevas fechas de entrega de la información de los municipios para ser presentadas al ministerio, de igual manera en relación a las capacitaciones de la temática ICAU , se consideró que se debe esperar a la señalada entrega  por parte del ministerio de las actualización , asegurando que en el ejercicio de socialización de las mismas a los entes territoriales se cuente con la claridad de información que permita que la recopilación sea de la calidad requerida para   el proceso de medición de los indicadores, por lo anterior el bajo avance de esta temática. ',
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
            'activity_id' => 7776,
            'year' =>1,
            'value' => 40,
            'description' => 'El Departamento Norte de Santander tiene 40 Municipios.
        
        En el Departamento Norte de Santander existen, al iniciar el año 2020, sólo o unicamente, 21 Municipios con un PGIRS válidos.
        
        De lo 21 municipios, todos tienen metas de aprovechamiento.
        
        CORPONOR le debe hacer seguimiento unicamente a los PGIRS válidos en su meta de aprovechamiento.
        
        El acumulado del seguimiento virtual a 2 municipios de los 21 con PGIRS Válidos, o sea al 9,52% que se aproxima al 10%, con cero (0) metas implementadas por los municipios.
        
        Acción a seguir, continua con seguimientos virtuales hasta que cambien las condiciones de la pandemia por COVID-19.',
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
            'activity_id' => 7777,
            'year' =>1,
            'value' => 100,
            'description' => 'Los generadores declaran información hasta el 31 de marzo de cada año. Durante los meses de Enero a Agosto, se deben transmitir el 100% de los registros con la información declarada por los generadores. Así las cosas se ha transmitido al SIUR, el 99% de 100 registros que declararon información en RESPEL y RUA',
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
            'activity_id' => 7778,
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
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7779,
            'year' =>1,
            'value' => 100,
            'description' => 'Este valor corresponde a la información obtenida por CORPONOR de los 40 que corresponden a la jurisdicción, que han dispuesto sus residuos sólidos en un relleno sanitario y reportados por las empresas prestadoras del servicio de aseo en la actividad de disposición final en rellenos sanitarios,',
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
            'activity_id' => 7780,
            'year' =>1,
            'value' => 1,
            'description' => 'Este indicador presentó modificación que fue aprobada en septiembre de 2020 por le Consejo Directivo, por lo que el resultado a 30 septiembre de 2020, no tiene desarrollo. Para el 4to  trimestre se desarrollan actividases logisticas y para realizar la acción proyectada para 2020. ',
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
            'activity_id' => 7781,
            'year' =>1,
            'value' => 100,
            'description' => 'Con base a la gráfica del anexo 3 Promedio Mensual del ICA y Concentración (ug/m3), se puede apreciar el comportamiento de la calidad del aire en la ciudad de Cúcuta en los tres (3) primeros trimestres del año 2020.
        Para el I trimestre se registra un pico en el mes de marzo tanto en el Índice de la Calidad del Aire - ICA como en la concentración (ug/m3), en las tres (3) estaciones de monitoreo ubicadas en los barrios El Centro, Comuneros y El Salado; esto a consecuencia del fenómeno atmosférico “Calima” que afecto a la ciudad. Dichas concentraciones (ug/m3) estuvieron por encima del límite permisible 75 ug/m3 según lo establecido en la Resolución 2254 de 2017 obteniendo una clasificación ACEPTABLE en ambas variables de medición y en cada una de las estaciones de monitoreo para dicho mes.
        En el II trimestre, se aprecia una variación DESCENDENTE en el promedio mensual del ICA y Concentración (ug/m3) en todas las estaciones de monitoreo, más sin embargo en el mes de abril se registraron los valores más altos correspondientes a los niveles de concentración (ug/m3) permisibles para 24 horas, en las tres (3) estaciones de monitoreo Barrio El Centro (140.26 ug/m3), Barrio Comuneros (149.04 ug/m3) y Barrio El Salado (149.96 ug/m3) respectivamente, alcanzando una clasificación DAÑINA para esos días en específico, según lo establecido en la norma.
        Referente al III trimestre, se registra una variación DESCENDENTE en comparación al trimestre anterior en las tres (3) estaciones de monitoreo (Barrios El Centro, Comuneros y El Salado), correspondiente al promedio mensual del ICA y Concentración (ug/m3). El valor mas representativo de la Concentración (ug/m3) permisible para un periodo de 24 horas, se registró en la estación ubicada en el Barrio El Salado para el mes de septiembre con un valor de 41 ug/m3 y una clasificación BUENA según lo establecido en la norma. En general para este tercer trimestre, se observa en la grafica un comportamiento constante en cada una las tres (3) estaciones de monitoreo referente a la variación del ICA y la Concentración. Analizados los resultados obtenidos en las mediciones del mes de julio, se realiza ajuste a la frecuencia de monitoreo a dos (2) veces por semana, a partir del mes de Agosto, donde se evidencio una constante en la variaicón de la Concentración (ug/m3) y su Clasificación de acuerdo a lo estipulado en la Resolución 2254 de 2017. 
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
            'activity_id' => 7782,
            'year' =>1,
            'value' => 10,
            'description' => 'Para la vigencia 2020 se tiene programadas 9 acciones, de las cuales en el primer semestre se realizaron las siguientes:
        
        1. Actualización del plan regional de negocios verdes e inclusivos
        2. Realizar 3 talleres de socialización del PRNVI:
        *Negocios y emprendimientos Verdes - UDES-CORPONOR
        *Economia Circular y Negocios Verdes para jovenes ambientalistas y emprendedores - CORPONOR
        *NNegocios Verdes Oportunidades de Cambio e Inovacion en el Mercado - UFPS-CORPONOR
        
        3. Una  Empresas con criterios de negocios verdes aplicados y con plan de mejoramiento socializado. Aplicación de Criterios de Negocios Verdes a la Empresa PREPLASTY
        
        4. Eventos (3) de capacitación en negocios verdes (marketing, contabilidad, planes de comercialización entre otros) dirigido a empresarios con aplicación de criterios:
        *Como crear la Pagina web de tu Negocio Gratis 
        *Como aprovechar los medios de pago electronico en los tiempos de COVID-19
        *Ideando Modelos de Negocios en Tiempos de Cambio ',
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
            'activity_id' => 7783,
            'year' =>1,
            'value' => 1,
            'description' => 'RESULTADOS En el desarrollo del proyecto se puede definir dos tipos de efectos positivos en la comunidad Uwa en especial en los cabildos de Uncasias y Segovia. El establecimiento de las  77 parcelas con Platano y Yuca  en  77 familias de las 116 que habitan los dos cabildos; cumplio con la necesidad sentida por la comunidad intervenida que es minimizar los problemas de susistencia alimentaria. esta actividad genero satisfacción al interuor de sus benficiarios por su participación directa en el proyecto con su participacion como trabajadores de su propia parcela y recibiendo beneficios economicos con el pago de la mano de obra no calificada (Obrero y/o Jornal) cumpliendo asi con el tema del mejoramiento de su calidad de vida.  El segundo efecto  positivo se genero con la construcción de la segunda fase en la construcción del trapiche panelero en IZKETA con el cual se origina dentro de la comunidad escolar de la etnia el impulso para hacer empresa sostenible  dentro de su territorio al generar   nuevas oportunidades para su desarrollo economico todo enmarcado dentro de sus costumbres ancestrales.  El proyecto genero gran expectativa en la comunnidad con el establecimiento de las parcelas productivas; son 116 familias y se atendieron 77 de ellas quedando pendiente 39 familias por su parcela la etnia en reuniones  internas con los cabildos y representantes de ASOUWA, piden a CORPONOR, tenga en cuenta estas 39 familias con el establecimiento de sus respectivas parcelas, solicitud que llego al señor  Director y al Consejo Directivo para su aprobación ,  como una adición presupestal al mismo convenio con el fin de que los efectos  y/o impacto positivo social se complete en las dos comunidades al tener en cuenta las 39 familias restantes y asi llegara a un cubrimiento del 100% de las familias.  ACCIONES: Las directivas de CORPONOR, aprobaron una adición presupuestal  para atender las 39 familias restantes.',
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
            'activity_id' => 7784,
            'year' =>1,
            'value' => 1,
            'description' => 'RESULTADOS: 1.   La sostenibilidad de los proyectos establecidos en el año 2019 en la comunidad de Beboquira se observo que el proyecto establecido a generado buenas expectativas ya que los cultivos de piña golden estan a punto de iniciar su floración y fructificación q finalmente se manifiesta en la fruta para el consumo interno de la comunidad y la venta de los excedentes.   2.  El establecimiento de nuevas plantaciones de Piña Golden, Platano y Frutales en las comunidades de Ocbabuda y Suereragenero satisfacción al cubrir parte de sus necesidades en cuanto a la seguridad alimentaria a muy corto plazo.  3. Durante la ejecución del proyecto se logro la participacion de 35 de las 44 famliias que habitan las dos comunidades, su participacion en   esta actividad genero satisfacción al interior de sus benficiarios por su participación directa en el proyecto y su participacion como trabajadores de su propia parcela  al recibir  beneficios economicos con el pago de la mano de obra no calificada (Obrero y/o Jornal) cumpliendo asi con el tema del mejoramiento de su calidad de vida.       El proyecto genero gran expectativa en la comunnidad con el establecimiento de las parcelas productivas; son 44 familias y se atendieron 39  de ellas quedando pendiente 9 familias por su parcela la etnia en reuniones  internas con los caciques de las dos comunidades y representantes de ÑATUBAIYIBARI, piden a CORPONOR, tenga en cuenta estas 9 familias con el establecimiento de sus respectivas parcelas, solicitud que llego al señor  Director y  l Consejo Directivo para su aprobación ,  como una adición presupestal al mismo convenio con el fin de que los efectos  y/o impacto positivo social se complete en las dos comunidades al tener en cuenta las 9 familias restantes y asi llegara a un cubrimiento del 100% de las familias.  ACCIONES: Las directivas de CORPONOR, aprobaron una adición presupuestal  para atender las 9 familias restantes.   NOTA: LA  CALIFICACION DEL CUMPLIMIENTO DEL INDICADOR SEGÚN LOS CRITERIOS DE EVALUACION, se presenta en rojo  debido a que el indicador se mide con dos proyectos : PROYECTO 1 Con las comunidades del Resguardo  Motilon Bari  (Ñatubaiyibar), PROYECTO 2 Con las comuidades del Resguardo Catalaura; este Resguardo no presto atención a la implementación del proyecto , algunas causas fueron las dificultades por la pandemia, las dificultades en temas de comunicación con las directivas del Redguardo y la falta de intension por parte de las directivas del resguardo para participar en la implementacion del proyecto.',
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
            'activity_id' => 7785,
            'year' =>1,
            'value' => 10,
            'description' => 'Implementación de acciones que conlleven a la protección y conservación de la biodiversidad y ecosistemas de importancia ambiental para la región del Catatumbo, reducción de la problemática del conflicto de uso del suelo que genera desplazamiento y conflicto con la fauna silvestre.
        
        En el I semestre se realizaron las siguientes actividades:
        *Señalización  de ecosistemas estratégicos en la región del Catatumbo.
        *Apoyo en la implementación de los PDET de los municipios de la región del Catatumbo.
        *Participación en mesas ambientales interinstitucionales.',
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
            'activity_id' => 7786,
            'year' =>1,
            'value' => 82,
            'description' => 'En el Cuarto trimestre del año 2020,  CORPONOR, ha podido implementar la totalidad de las agendas definidas en el Plan de Acción 2020 – 2023, y ha dado inicio a las mesas tecnicas de las mismas, con el fin de activar el seguimiento a cada una de ellas. La promoción de estos escenarios de encuentro y concertación de los diferentes actores para la construcción y priorización de temáticas ambientales es la estrategia que ha venido liderando la corporación impulsando la gestión pública ambiental regional, permitiendo conocer y valorar enfoques, percepciones y perspectivas de lo que estos actores comprenden y defienden como ambiental. Esto implica incorporar un trabajo de adecuación y promoción de la gestión interinstitucional, desde la visión ambiental, que logre mediante una adecuada articulación, el desarrollo de las acciones definidas. 
        
        Este  trimestre, aún cuando se encuentran limitantes que se derivan de la crisis sanitaria a causa del COVID 19, han generado avances importantes en cuanto implementación y seguimiento de las agendas. No obstante todas las agendas temáticas presentan avances en sus objetivos, mediante la implementación de acciones que han logrado la vinculación de los diferentes actores que en ella se involucran. En el último trimestre se consolidaron las acciones del año 2020  y se plantearon  objetivos para el próximo año. 100%',
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
            'activity_id' => 7787,
            'year' =>1,
            'value' => 93,
            'description' => 'Sobretasa Ambiental Presupuesto Definivo aproabado a junio 30 de 2020, por valor de $14,640,901,757. Comprende el recaudo de $15.060.262.705 efectivamnete girado a nuestras cuentas banacarias por los Municipios del Departamento, del 01/01/2020 al 31/12/2020 y representa el 102,86% de lo Presupuestado.  Este recaudo esta supeditado al recaudo que realicen los Municipios por concepto de Impuesto Predial, lo cual recaudan y transfieren lo recaudado por Sobretasa Ambiental, a la Corporación. 
        
        Tasa por Uso de Agua. A partir del 1ro. de julio, se dió incio a la facturación de Tasa por Uso de Agua. La facturación realizada a 30 de noviembre de 2020 (Ya se finalizò la facturaciòn TUA), es por valor de $1.985.734.175 y el recaudo a 31 de diciembre, es por un valor de $1.618.967.127.                                                                                                                            Tasa Retributiva. La facturación de Tasa Retributiva, no se volverá a realiziar de forma mensual, si no semestral. A partir de esta vigencia 2020, se facturará en julio y enero. Por lo tanto, en Julio se factura el periodo enero a junio 2020 y en enero 2021, se factura el periodo julio a diciembre 2020. A noviembre 30 de 2020, se facturò la suma total de $6,088.367.037 y se ha recibido un recaudo a diciembre 31 de 2020, por vakor de de $345.107.385. A 30 de septiembre ya se finalizó la facturacion por esta renta, para esta vigencia 2020. La Subdirección Financiera con corte a 30 de junio no habia facturado esta Renta de Tasa Retributiva, debido a la emergencia sanitaria decretada por el Gobieno Nacional, y el Decreto 465 de 2020, y la Corporación se acogió a este Decreto. 
        
        Otras Rentas. Comprende el valor facturado por Evaluacion de Licencias Ambientales, Seguimientos, Permisos Ambientales, Permisos Erradicacion de Arboles, Tasa Compensatoria por Aprovechamiento, Transferencias Sector Electrico y Multas.
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
            'activity_id' => 7788,
            'year' =>1,
            'value' => 30,
            'description' => 'Durante la vigencia 2020, aunado a la emergencia adoptada por el Gobierno Nacional, se presento en la entidad la falta de personal para adelantar de manera oportuna los tramite administrativo de cobro, no obstante se hizo seguimiento a los procesos de cobro coactivo ya existentes en su totalidad 212 expedientes activos para la vigencia 2020, de los cuales se archivaron por pago total de la obligación 9 expedientes, 7 se declararon remisibles y los demás expedientes en un 30% se realizaron acciones de seguimiento, reiteración de medidas y demás acciones establecidas en el manual de procedimiento, obteniendo como recaudo la suma 186.000.000 millones. ',
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
            'activity_id' => 7789,
            'year' =>1,
            'value' => 1,
            'description' => 'La Corporación Autonoma Regional de la Frontera -Corponor-, la Gobernación de Norte de Santander y la Alcaldía de Chinacota, firmaron el Convenio Intweradministrativo N° 019-2020, el 16 de diciembre de 2020, cuyo objetpo es AUNAR ESFUERZOS HUMANOS, FISICOS, ADMINISTRATIVOS, LOGISTICOS Y DE ARTICULACION INTERINSTITUCIONAL ENTRE EL MUNICIPIO DE CHINACOTA, EL DEPARTAMENTO NORTE DE SANTANDER Y LA CORPORACION AUTONOMA REGIONAL DE LA FRONTERA NORORIENTAL -CORPONOR, CON EL FIN DE COORDINAR ACCIONES PARA LA CONSERVACION CATASTRAL DE LOS PREDIOS URBANOS Y RURALES UBICADOS EN EL MUNICIPIO DE CHINACOTA..',
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
            'activity_id' => 7790,
            'year' =>1,
            'value' => 0.95,
            'description' => 'Se da cumplimiento a las acciones establecidas para la vigencia 2020 en lo relacionado al mantenimiento del Sistema de Gestión Integral en las  normas: Calidad ISO 9001:2015,  Gestión ambiental  ISO -14001:2015, Seguridad y salud ocupacional OHSAS 18001:2007 de forma articulada con el Modelo Integrado de Planeación y Gestión - MIPG. La auditoria externa se reprograma para la siguiente vigencia por temas de agenda con el ente certificador.',
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
            'activity_id' => 7791,
            'year' =>1,
            'value' => 91,
            'description' => 'Se ejecutaron las siguientes actividades de mantenimiento:
        *Mantenimiento de vehículos   
        *Mantenimiento de aires acondicionados   
        *Mantenimiento de Impresoras   
        *Mantenimiento de puertas   
        *Mantenimiento de motobombas   
        *Mantenimiento de scaner   
        *Mantenimiento de Alcantarillado - Zulia   
        *Mantenimiento de extintores   
        *Contrato de limpieza   
        *Fumigación  
        
        1. Teniendo en cuenta que al proyecto 8.4, se le adicionaron recursos con el fin de adelantar el proyecto de adecuaciones de la Red eléctrica en el Hogar de paso El Zulia. Dicho proyecto no fue posible desarrollarse, ya que no se contaba con el diseño de los planos eléctrico, el cual se llevo acabo primero mediante contrato 667/2020. Teniendo en cuenta la limitación del tiempo del 2020, este proyecto se reprograma para adelantarse en el primer semestre del 2021.',
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
            'activity_id' => 7792,
            'year' =>1,
            'value' => 8,
            'description' => 'Se ha cumplido con la meta inicial, por cuanto en unos estudios se realizaron ajustes a los mismos para proceder a gestión ante entes de orden regional o nacional.  Se adelantan acciones para nuevos proyectos en apicultura, el centro de atención y valoración de Corponor, reservorios y de calidad del aire.
        
        Proyectos:
        1. Implementación de acciones para mitigar la socavación acelerada del suelo de ladera en la margen derecha del río Pamplonita, 330 m aguas abajo del Puente Enrique Cuadros Corredor, municipio de Cúcuta, departamento Norte de Santander
        2. Implementación de acciones para mitigar la socavación acelerada del suelo de ladera en la margen derecha del río Pamplonita, aguas abajo del puente de agua clara, Sector La Tulia - Bajo Guaramito, Municipio de Cúcuta, Departamento Norte de Santander
        3. Implementación de acciones en el marco de la gestión de riesgo para   la   recuperación   ambiental   de   la   ronda   hídrica   de   La Quebrada Agua Linda y Rio Pamplonita en el sector Barrio Montebello 1 y Laderas Aledañas, municipio de Los Patios, Norte de Santander
        4. Implementación de acciones para mitigar la socavación acelerada del suelo de ladera en la margen izquierda del Rio Pamplonita, Sector Avenida del Rio, 400m aguas abajo del puente La Gazapa (Enrique Cuadros Corredor), municipio de Cúcuta, departamento Norte de Santander
        5. Fortalecimiento del sistema de vigilancia de calidad del aire (SVCA) en el municipio de Cúcuta, departamento Norte de Santander.
        6.Implementación de acciones para mitigar la socavación acelerada del suelo de ladera aguas adentro de la desembocadura de la quebrada la Saladera con el río Pamplonita, por su margen izquierda, sector cárcel modelo municipio de Cúcuta, departamento Norte de Santander
        7. Implementación de acciones para mitigar la socavación acelerada del suelo de ladera  margen izquierda y derecha río Pamplonita, aguas abajo inmediatamente después del puente Elías M. Soto, municipio de Cúcuta, Norte de Santander 
        8.Proyecto implementación de medidas de adaptación y mitigación en las márgenes del cauce del río Pamplonita, sector corregimiento  Puerto Villamizar, municipio de Cúcuta, veredas Vegas del Pamplonita y el Dave, municipio de Puerto Santander, Norte de Santander.
        9.Adecuación del hogar de paso como centro de atención y valoración de fauna silvestre (CAV) en jurisdicción de Corponor, municipio el Zulia, Norte de Santander.',
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
            'activity_id' => 7793,
            'year' =>1,
            'value' => 7,
            'description' => 'Se realizó gestión a los siguientes proyectos: 
        1. Implementación de acciones para mitigar la socavación acelerada del suelo de ladera en la margen derecha del Río Pamplonita, 330m aguas abajo del puente enrique cuadros corredor, en el municipio de Cúcuta departamento Norte de Santander (Gazapa margen derecha - Jardín Plaza)
        2. Implementación de acciones para mitigar la socavación acelerada del suelo de ladera en la margen derecha del río pamplonita, aguas abajo del puente de agua clara, sector la Tulia - bajo guaraniito, municipio de Cúcuta, departamento norte de Santander
        3. “implementación de acciones en el marco de la gestión de riesgo para  la  recuperación  ambiental  de  la  ronda  hídrica de  la quebrada agua linda y rio pamplonita en el sector barrio Montebello 1 y laderas aledañas, municipio de los patios, norte de Santander
        4. Implementación de acciones para mitigar la socavación acelerada del suelo de ladera en la margen izquierda del rio pamplonita, sector avenida del rio, 400m aguas abajo del puente la gazapa (enrique cuadros corredor), municipio de Cúcuta, departamento norte de Santander
        5. Fortalecimiento del sistema de vigilancia de calidad del aire (svca) en el municipio de Cúcuta, departamento norte de Santander
        6. Implementación de acciones para mitigar la socavación acelerada del suelo de ladera aguas adentro de la desembocadura de la quebrada la Saladera con el río pamplonita, por su margen izquierda, sector Carcel Modelo municipio de Cúcuta, departamento Norte de Santander
        7. Implementación de acciones para mitigar la socavación acelerada del suelo de ladera margen izquierda y derecha río pamplonita, aguas abajo inmediatamente después del puente Elias M. Soto, municipio de Cúcuta, Norte de Santander 
        8. Implementación de medidas de mitigación al cambio climático en los municipios Bochalema y Ragonvalia, departamento norte de Santander
        nota: en el cuarto trimestre se continua gestión a 6 proyectos que ya se habían remitido a entidades cofinanciadoras',
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
            'activity_id' => 7794,
            'year' =>1,
            'value' => 4.77,
            'description' => 'Queda pendiente por realizar el seguimiento al cumplimiento de los compromisos de la Gobernación, los municipios y CORPONOR dentro de cada uno de los ejes estratégicos del PGAR - PLANEAR.  Acción que debe realizarse en el primer semestre del 2021.  
        Se considera importante que CORPONOR mantenga la estrategia de las agendas ambientales y se dé el seguimiento a los compromisos trazados
        
        Acompañamiento en las reuniones para la formulación del Plan Departamental de Desarrollo,  Reuniones con los alcaldes electos, donde se socializó el PLANEAR.  Acompañamiento a los Alcaldes por territoriales
        La subdirección de Planeación y Fronteras estableció un cronograma de actividades y responsables que permitió establecer la ruta para la construcción a través de espacios de participación ciudadana y técnica y así llegar a la consolidación y presentación del documento Plan de Acción Cuatrienal 2020-2023, “Sostenibilidad Ambiental y Cambio Climático ¡Todos por el Agua!”, a través de la Audiencia Pública.    Aprobado el 8 de Mayo de 2020
        Se implementaron  las siguientes agendas: 
        1. Administración, Uso y Manejo del Recurso Hídrico. 
        2. Conservación de Ecosistemas Estratégicos y Administración de la 
        Biodiversidad y Servicios Ecosistémicos.
        3. Ordenamiento Ambiental Territorial. 
        4. Fortalecimiento del Conocimiento, Gestión del Riesgo de Desastres y Adaptación al Cambio Climático.
        5. Fortalecimiento de la institucionalidad ambiental para la competitividad regional con el acompañamiento de los actores productivos 
        6. Gestión del Conocimiento y la Administración de la Tecnología e Información para la toma de decisiones en la protección del Ambiente.
        7. Educación, cultura ambiental y participación con énfasis en formación e investigación para la transformación de conflictos socio ambientales
        8. Fortalecimiento de la gestión del bosque
        9. Fortalecimiento del recuros y calidad del aire. 
        
        Por la pandemia, no se contrato personal para realizar estas actividades de seguimiento y se reprograma para el 2021',
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
            'activity_id' => 7795,
            'year' =>1,
            'value' => 100,
            'description' => 'SIRH  0%  • Durante el 1er.  semestre del año 2020 no se realizó cargue al SIRH debido a no tener acceso a los equipos de cómputo de oficina donde se encuentra consolidada la información requerida para alimentar el subsistema, por las restricciones emanadas por el Ministerio de Salud y Protección Social en la Resolución 385 del 12 de marzo de 2020, por la cual se declara la emergencia sanitaria por causa del coronavirus COVID-19 y se adoptan medidas para hacer frente al virus
        SISAIRE 96%
        SNIF 100%
        RESPEL 100%
        RUA 100%',
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
            'activity_id' => 7796,
            'year' =>1,
            'value' => 96,
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
            'activity_id' => 7797,
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
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7798,
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
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7799,
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
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7800,
            'year' =>1,
            'value' => 96.75,
            'description' => 'Se terminaron los ajustes tecnicos del Convenio y se traslada a las oficinas para su revisión.
        
        Revisión y ajuste a los Planes de Ordenamiento territorial, como a Planes Parciales los cuales se relacionan durante el presente año: Asistencia en Ordenamiento Territorial a municipios de Chitagá, Chinácota, Mutiscua, Ragonvalia, Silos, Los Patios, Tibú. En Planes Parciales de Cúcuta, Tonchalá y en Ocaña,  Maria Paula. 
        
        Se atendieron 30 solicitudes de Información geográfica de usuarios internos y externos Para brindar a la comunidad la posibilidad de acceder a la información ambiental del departamento desde la Corporación a través de la plataforma de datos abiertos datos.gov.co se realizó la publicación de 16 mapas en formato pdf correspondientes a algunas determinantes ambientales establecidas por la Resolución 2265 de 2018, para disponibilidad de cualquier ciudadano, promoviendo la transparencia de las entidades del estado 
        
        se elaboren a los POT y para complementar en todos los procesos de planificación ambiental territorial, San Cayetano (virtual), Bucarasica (virtual), Los Patios, El Zulia, Ragonvalia, El Carmen, Cáchira, Ábrego, El Tarra, La Playa de Belén y Asomunicipios de la Provincia de Ocaña. ',
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
            'activity_id' => 7802,
            'year' =>1,
            'value' => 2,
            'description' => 'Apoyo ala administración de zonas de conservación y demás dimensiones del desarrollo sostenible mediante el desarrollo de la implementación de los Sistemas Municipales de Áreas de Conservación de los Municipios de Salazar y CucutillaCon  la  designación  de profesionales  para  los  municipios  de  Salazar  y  Cucutilla,  para  continuar  con  el desarrollo en la Implementación de los SIMAC, Sistema Municipal de Áreas de Conservación, se realiza capacitación sobre los alcances y funciones propias del Sistema Municipal de Áreas para la Conservación –SIMAC, al equipo ambiental de las respectivas Alcaldías de Salazar y Cucutilla.',
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
            'activity_id' => 7803,
            'year' =>1,
            'value' => 10,
            'description' => 'Grupo PETI para la formulacion del plan, una vez aprobado el PAI 2020-2023, sigue la metodología del MinTic  sesiones realizadas número 15. la identificación de los diferentes proyectos.
        Se termina la parametrizacion del tramite de vertimiendos y se procede a la migracion a la plataforma de produccion en VITAL-SILAMC ',
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
            'activity_id' => 7804,
            'year' =>1,
            'value' => 82,
            'description' => 'Diligenciamiento de autoevaluación del MinTIC dio un nivel medio en el avance de la implementación de la politica de Gobierno Digital y se plantean actividades para fortaleceer los ejes de:
        Componente Gobierno abierto
        Componente TIC para servicios
        Componente TIC para la gestión de TI
        Desempeño en el componente Seguridad y Privacidad de la información',
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
            'activity_id' => 7805,
            'year' =>1,
            'value' => 80,
            'description' => 'Ejecucion del Plan de Administración, soporte y asistencia en la operación de la infraestructura tecnológica
        Seguimiento:
        Contrato en ejecución de PCT vigente
        Contrato en ejecución con soporte logico, de software Humano Web
        Contrato en ejecución con ORACLE colombia Vigente
        Contrato en ejecución con LABCO VIGENTE
        Contrato vigente y en ejecución
        Supervisión secretaria General
        Contrato vigente y en ejecución
        Supervisión secretaria General
        No se conto con el suficiente personal y por la situacion de covid no fue posible la ejecucion de mantenimientos en las territoriales
        se atendieron solicitudes via  email, telefonica, y se lleva registro GLPI de parque informatico por parte de funcionarios  de la entidad.se ha contratado un personal técnico',
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
            'activity_id' => 7806,
            'year' =>1,
            'value' => 50,
            'description' => 'Las acciones de asesoria al CEAM, y acompañamiento pedagógico a los PRAE, se está realizando con estrategias virtuales , ; las demás acciones no se han avanzado por la situacion coyuntural dada la pandemia Covid-19.',
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
            'activity_id' => 7807,
            'year' =>1,
            'value' => 93,
            'description' => 'Se trabajó en el posicionamiento de la imagen institucional de la Corporación a través de los canales de comunicación  externa,  logrando  generar  recordación  y  percepción  positiva  en  los  diferentes  públicos objetivos. Visibilizar  la  gestión  de  la  Corporación  2020 -2023,  generando recordación  en  los  diferentes públicos objetivos.Realizar  acercamiento  con  el  público  rural  de  la  Corporación,  mediante  el  uso  de  medios  e instancias comunicativas.Posicionar a la Corporación, como la entidad líder en la ejecución de la Política Nacional Ambiental.Realizar alianzas estratégicas para el posicionamiento de la imagen institucionalPara desarrollar la estrategia de visibilización, se desarrollaron tácticas enfocadas a todos los medios de comunicación  con  el  objetivo  de  llegar  a  las  comunidades  urbanas  y  rurales,haciendo  énfasis  en la comunidad  digital,  mediante  la  creación  de  contenidos  estratégicos  para  cada  uno  de  estos  públicos objetivos.La estrategia de comunicación para la vigencia 2020, hizo hincapié en la “población digital”, teniendo en cuenta el momento histórico de pandemia por el que atraviesa el planeta entero. De esta forma sedivulgóla gestión de la corporación y se generó acercamiento con este público objetivo.A través del Free Press, Prensa, Radio, Entrevistas con medios de comunicación, Contenido audiovisual, Whatsapp, entre otros.',
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
            'activity_id' => 7808,
            'year' =>1,
            'value' => 24,
            'description' => 'Nombre de la Campaña
        Día Mundial de la Educación Ambiental
        Día Mundial de los Humedales
        Campaña Nacional #SembrarNosUne
        Día Internacional para la Protección de los Osos #PonteLosAnteojosPorLaVida
        Día Mundial de la Vida Silvestre, resaltando la riqueza de nuestra fauna nortesantandereana.
        Día Mundial del Agua
        Campaña: #NoEstánSolos
        Atención de la fauna silvestre en época de aislamiento social obligatorio
        Campaña nacional #ALaCanencaYNoALaCalle
        #SemanaSantaEnCasa
        Día Mundial de la Tierra La Gobernanza en tiempos de crisis
        Campaña Ambiental “Yo soy” con la cual se dio
        vida a las especies de animales (oso andino, puma y caimán aguja) para que de manera novedosa se abordara el conflicto animal – ser humano y se sensibilizara a las comunidades con las que
        comparten el territorio.
        Canales de Atención al Ciudadano
        Día Mundial de las Aves Migratorias en el marco del
        Global Big Day
        Día Mundial del Reciclaje
        Día de la Biodiversidad, resaltando la riqueza
        biodiversa de nuestro territorio Norte de Santander.
        Día Mundial del Medio Ambiente conversatorio virtual: Hablemos de Biodiversidad Día Mundial del
        Medio Ambiente conversatorio virtual: Hablemos de Biodiversidad
        Día Interamericano de la Calidad del Aire
        Día Mundial del Hábitat: encuentro virtual en
        protección a polinizadores con la participación de expertos de MinAmbiente, ANLA, ICA y la Universidad de Magdalena quienes abordaron la diversidad de especies polinizadoras y su importancia para la vida del planeta.
        Día Mundial del Árbol: se realizó el Encuentro virtual “Experiencias de sostenibilidad ambiental en
        tiempos de pandemia” proyecto ambiental en casa, a través de nuestro #FacebookLive donde participaron integrantes de semilleros y grupos
        ambientales de diferentes instituciones educativas de Norte de Santander.
        Día Mundial del Ahorro de Energía, se lideró un conversatorio y piezas audiovisuales sobre la
        energía limpia en la producción porcícola
        Campaña Áreas Verdes: Se resaltó la adecuación y embellecimiento de los parques y zonas verdes del
        Departamento
        Caracol Gigante Africano
        Mi Deseo Verde
        Navidad Biosegura',
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
            'activity_id' => 7809,
            'year' =>1,
            'value' => 3,
            'description' => 'En la Audiencia Pública se contó con un buen porcentaje de la ciudadanía de los diferentes grupos de valor como lo indica el análisis de los resultados de las encuestas realizadas  a los participantes, para las nuevos espacios de participación es necesario seguir aplicando la encuesta que permitirá la actualización de los grupos de valor e interés de la entidad ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
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
