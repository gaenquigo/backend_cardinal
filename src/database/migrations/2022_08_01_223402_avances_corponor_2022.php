<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorponor2022 extends Migration
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
            'year' =>3,
            'value' => 50,
            'description' => 'ID 1. En el Plan de Acción Institucional 2020 - 2023 se programó en porcentaje (%) de ejecución la implementación del POMCAs en el Departamento Norte de Santander, con una meta de 100% para cada vigencia del indicador 1 (ID:1); En este Segundo Trimestre 2022, se adelantaron  acciones en conjunto con le MADS y Concervacion Internacional,  Relacionadas con la Postulacion de las cuencas rios Zulia, Río Pamplonita yRío  Algodonal como areas OMEC ""Estrategia de Concervacion basado en areas"" : Se avanzo en las siguientes actividades  1- A fecha 03/05/22  se realizo mesa de trabajo respecto a la revision de documentos soportes de la propuesta ""omec"" para los cuencas de los rios Zulia, Pamplonita y Algodonal, en le cual se revisaron y aplicaron los criterios de Nominacion establecidos por el MADS.  2- a fecha 12 de mayo de 2022 se relaizo la socializacion de la propuesta omec rio Zulia a los consejeros de la cuenca. 3-  A fecha 19 de mayo de 2022 se realizo mesa de trabajo con los Delegados de la Comision Conjunta rio Algodonal, Corpocesar , Corponor y MADS  para la socializacion de la propuesta OMEC para la cuenca rio Algodonal. 4- Mediante Radicado 2022-1015-006417-1 de  fecha 25/05/22 Corponor presenta la nominacion  de la cuenca rio Algodonal ante el MADS, como otras medidas de concervacion con sus respectivos documentos de Soporte - 5-  Mediante Radicado 2022-1015-006420-1 de  fecha 25/05/22  Corponor presenta la nominacion  de la cuenca rio Zulia ante el MADS, como otras medidas de concervacion con sus respectivos documentos de Soporte. 6-  a fecha 10/06/22 Corponor presenta la nominacion  de la cuenca rio Pamplonita ante el MADS, como otras medida de concervacion con sus respectivos documentos de Soporte. 7 De Abril a Mayo de 2022 Respeto a la plataforma Colaborativa de la cuenca rio Pamplonita se ha desarrollado el avance de plan de acción de manera participativa, con miras en poder realizar de una manera eficaz la articulación entre las diferentes entidades, tanto públicas como privadas, garantizando la sostenibilidad del agua para el bienestar social y desarrollo económico de la región. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7725,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 2. Ante consejo Directivo el día 31 de Mayo se realiza ajuste de metas para el indicador para la vigencia actual y para el año 2023. Se define que para el año en curso (2022) la meta se ajusta al 10 %  el cual corresponde al cumplimiento del 50 % de la fase de Diagnostico  y para la vigencia 2023 pasando de un 25% a un 10 % con el fin de concretar la consolidación de la Fase de Diagnostico para la formulación del PORH de la Subcuenca La Honda.
        Actualemente en la formulación del PORH de la Quebrada La Honda aún se adelantan actividades referentes a la fase de alistamiento, por lo tanto se reportan avances solo para las actividades de la etapa de alistamiendo correspondientes a la meta del año 2020 y no a la meta ajustada para este año. El avance de la meta de este año depende de la culminación de la fase de alistamiento, para lo cual se están elaborando propuestas y estudios previos para definir si se este proceso se ejecuta por convenio, contrato interadministrativo o consultoria o lo sigue asumiendo solo la Corporación. 
        Con respecto al PORH Iscala, se adelantantaron monitoreos con el fin de realizar la modelación de calidad y complementar las fases pendientes en el proceso para su adopción. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7726,
            'year' =>3,
            'value' => 75,
            'description' => 'ID 3. Se realizó durante el segundo (2) trimestre del año 2022, mantenimiento y operación de la Estaciones de Puente El Tabor, Puente Piaña, Puente Vargas, Puente Batagá, Escuela El Naranjo, San Pedro y Puente Palo Colorado, consistente en lavado de los sensores tales como pluviómetro, medidor de niveles de agua y la Geodata, se descargaron los datos almacenados durante el trimestre de las vaiables de precipitación y niveles del río Pamplonita en el sitio de ubicación, además se realizó desmalezado interno y perimetral, así como lavado a todo el sistema y componentes de la estación',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7727,
            'year' =>3,
            'value' => 100,
            'description' => 'ID 4. En el primer trimestre, el laboratorio ambiental de Corponor realizo la evaluación y seguimiento a través de la caracterización fisicoquímica y microbiológica a 12 puntos de muestreo del río Algodonal y 3 puntos de muestreo del río Tejo. Con los resultados de los (15) ensayos relizados a cada punto, se evaluó el Índice de la Calidad del Agua (ICA), arrojando para el río Algodonal calificación Regular a 7 puntos de muestreo y calificación Aceptable para los 5 puntos restantes, el valor promedio del ICA para ésta fuente hídrica es de 0.71, lo cual indica una calificación Aceptable. La calificación general de la corriente hídrica del río Tejo se ubica en categoría Mala con un promedio 0,49 ; manteniendo el punto Bocatoma Acueducto La Tupia en calificación Regular sin evidencia de acciones para su mejoría teniendo en cuenta que se trata del agua que abastece la población Ocañera; de igual forma el punto 200 m después del último vertimiento se mantiene por quinto (5) año en calificación Mala; impactando negativamente el recurso hídrico tambien sin evidencia de mitigación alguna; y el tercer punto cambio a categoría Mala, corroborando que no hay recuperación durante el recorrido de los puntos 2 y 3 alterando las condiciones del río Algodonal. La evaluación del índice de Calidad del Agua (ICA) para las corrientes hídricas Algodonal y Tejo arrojó un cambio significativo si se compara con el año 2021, puesto que al realizarse en época de estiaje, es decir, niveles de caudal bajos, afectaron las variables como el oxígeno disuelto, Nitrogeno y Fósforo, sumado a las actividades antrópicas identificadas como extracción de material pétreo, paso permanente de vehículos sobre el cauce, captación de aguas superficiales, generación de residuos sólidos orgánicos e inorgánicos, vertimientos de aguas residuales tanto domesticas como industriales, agroquímicos producto de cultivos ubicados en la zona de influencia de la corriente hídrica, entre otros. En el segundo trimestre el laboratorio ambiental de Corponor realizó la evaluación y seguimiento a través de la caracterización físicoquímica y microbiológica a 18 puntos de muestreo del río Pamplonita; los resultados obrtenidos en el índice de Caldad del Agua (ICA) refleja las condiciones de favorabilidad en los primeros tres puntos de la parte alta de la cuenca del río Pamplonita con una calificación Aceptable, se observa que en el punto Juana Naranjo (convergen los vertimientos de aguas residuales del municipio de Pamplona) continúa la calificación Mala, sin embargo, en el sitio donde se encuentra la bocatoma que abastece al municipio de Cúcuta y área metropolitana el ICA arrojó calificación Regular con un valor de 0,61, siendo preocupante para la población porque el tipo de uso del agua en este tramo es para consumo. Seguidamente, desde el punto Puente Benito Hernández ubicado en la zona urbana del municipio de Cúcuta hasta el punto puente Angosto en la parte baja de la cuenca, la calificación desciende a Mala ya que recae sobre el recurso hídrico una fuerte presión antrópica desencadenando un impacto negativo sobre la misma cambiando sus condiciones ambientales y servicios ecosistémicos, toda vez que esta agua no sería apta para otros usos, situación también preocupante teniendo en cuenta que más del 55% de los puntos muestreados en toda la cuenca del río Pamplonita arrojaron calificación Mala. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7728,
            'year' =>3,
            'value' => 14.5,
            'description' => 'ID 5. Teniendo en cuenta la situaciòn presentada por la emergencia sanitaria COVID 19, se establecio adelantar la ejecuciòn de las actividades de manera individual y no las 3 corrientes simultaneamente. Por lo cual las actividades reportadas corresponden al avance del proceso en la Quebrada Tascarena y La Quebrada Agua Blanca (Municipio de Durania).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7729,
            'year' =>3,
            'value' => 69,
            'description' => 'ID 6. SIN DESCRIPCIÓN',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7730,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 7. NO TIENE META ASOCIADA PARA 2022',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7731,
            'year' =>3,
            'value' => 51,
            'description' => 'ID 8. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7732,
            'year' =>3,
            'value' => 3.1,
            'description' => 'ID 9. 1. En el proyecto: CONSTRUCCIÓN PSMV - P56 INTERCEPTOR QUEBRADA TONCHALÀ, MUNICIPIO DE CÚCUTA. NORTE DE SANTANDER""""., la obra se encuentra terminado el 7 de marzo 2022, en el mes de diciembre se realizo una adicion con vigencia del 2022. 2, En el proyecto: CONSTRUCCIÓN DE UNIDADES SANITARIAS EN ZONA RURAL DISPERSA DE LOS MUNICIPIOS DE SILOS, MUTISCUA, CUCUTILLA, ARBOLEDAS, SALAZAR Y SAN CAYETANO, NORTE DE SANTANDER. (2021), la obra se encuentra terminada el 4 de mayo..  En el mes de diciembre se realizo una adicion con vigencia del 2022. 3. GESTIÓN PARA EL CONVENIO CON ELMINISTERIOR DE VIVIENDA CIUDAD Y TERRITORIO, ALCALDIA DE CÚCUTA, GOBERNACIÓN DE NORTE DE SANTANDER, MUNICIPIOS DE LOS PATIOS, VILLA DEL ROSARIO Y CORPONOR PARA LA ESTRUCTURACIÓN DE LA PLANTA DE TRATAMIENTO PARA EL ÁREA METROPOLITANA DE CÚCUTA.  Los resultados van de acuerdo al cronograma de los entregables del convenio 4. CONVENIO INTERADMINISTRATIVO ENTRE EL MUNICIPIO DE PAMPLONA, LA EMPRESA DE SERVICIOS PÚBLICOS DE PAMPLONA - EMPOPAMPLONA S.A. E.S.P. Y LA CORPORACIÓN AUTÓNOMA REGIONAL DE LA FRONTERA NORORIENTAL – CORPONOR, CON EL FIN DE AUNAR ESFUERZOS PARA LA ESTRUCTURACIÓN INTEGRAL, TÉCNICA, LEGAL, FINANCIERA Y SOCIAL EN LAS FASES DE PREFACTIBILIDAD, FACTIBILIDAD Y ACOMPAÑAMIENTO PARA EL PROYECTO DE ESTUDIOS Y DISEÑOS DE LA PLANTA DE TRATAMIENTO DE AGUAS RESIDUALES DEL MUNICIPIO DE PAMPLONA, NORTE DE SANTANDER.  Los resultados van de acuerdo a la reprogramacion realizada al inicio de año, por la prorroga realizada al convenio con fecha estimada de terminacion del 27/05/2022.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12714,
            'year' =>3,
            'value' => 3,
            'description' => 'ID 10. En el primer trimestre del año 2022 se solicitó un ajuste del 20% para completar la meta, lo anterior ya que en el año 2020 se ejecutó el 45% y en el año 2021 se ejecutó el 35% del indicador y queda un restante del 20% de la meta establecida.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12715,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 11. A la fecha, no se cuenta con PMA del páramo Tamá (único páramo con delimitación vigente en firme), por lo cual se solicitó ajuste a la meta planteada para la presente vigencia. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7733,
            'year' =>3,
            'value' => 70,
            'description' => 'ID 71. Durante el segundo trimestre de 2022, se dio inicio al inventario para el diagnóstico de fauna en el componente de aves y mamíferos medianos y grandes del PNR Santurbán-Salazar de las Palmas y su zona de amortiguación, como parte del proceso de actualización del plan de manejo de esta área protegida. Entre las actividades se incluyen la instalación de dos redes de niebla, siete cámaras trampa, dos trampas Tomahawk, recorridos de observación a través de transectos y toma de encuestas a los pobladores locales para la recopilación de información en relación a los registros de las especies. Se dará continuidad al inventario de fauna en el tercer trimestre del presente año.
        Adicionalmente, se finalizó la construcción de una base de datos previa a las salidas de campo, con el fin de registrar las especies potenciales de la zona de interés para el inventario. Para su elaboración se tuvo en cuenta el componente de aves y mamíferos, realizando el registro de las especies de acuerdo a su distribución, rango altitudinal, categoría de amenaza, migración y endemismo por medio de la consulta a portales de datos y literatura disponible a nivel nacional. 
        Otra acción adelantada en este componente, es la relacionada con la realización del multitemporal de coberturas del suelo, con base en la metodología Corine Land Cover, para el área del PNR Santurbán Salazar de las Palmas y el ajuste a los aspectos físicos del área protegida. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7734,
            'year' =>3,
            'value' => 100,
            'description' => 'ID 12. Las acciones que se están ejecutando apuntan a lineas estratégicas de los 7 planes de manejo de áreas protegidas que han sido adoptados. Las acciones priorizadas para la vigencia 2022, tienen seguimiento específico a través del indicador 13 del PAI. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7735,
            'year' =>3,
            'value' => 47,
            'description' => 'ID 13. En el segundo trimestre se adelantaron acciones relacionadas con la línea de trabajo N° 1, sobre: Programar y adelantar capacitaciones en Sistemas de Información Geográfica orientada a la administración municipal, a líderes comunitarios, a docentes y a estudiantes seleccionados, para la consulta y análisis de información cartográfica de determinantes ambientales del municipio. A través de la búsqueda de la temática, definición de tiempos y espacios tentativos para ejecutarlos y trabajarlos con los Comités de Educación Ambiental Municipales de Cucutilla, Arboledas y Salazar.  
        En la línea de trabajo N° 2, sobre la inclusión de la temática de Áreas Protegidas al PRAE en las Instituciones educativas Teodoro Gutiérrez Calderón, IE Cornejo sede Tabiro y Puente Zulia y escuela de Urimaco a través del diseño y aplicación de un instrumento evaluador sobre el comic: Un Tesoro Llamado Pozo Azul, a su vez en la aplicación de la Guía de Fauna y flora del DRMI BST Pozo Azul. 
        Así mismo se adelantaron acciones relacionadas con la línea de trabajo N° 3, sobre Preparar contenidos orientados a la comunidad y al sector empresarial e institucional sobre la temática de áreas protegidas de Norte de Santander, a través de un diseño de metodología y ejecución en su totalidad de los talleres #2 y #3 con los beneficiarios de BancO2 de los municipios Arboledas, Salazar de las Palmas y Cucutilla con los ejes temáticos de beneficios de la conservación del área protegida, Imaginarios sociales, ambientales y económicos de la conservación en zonas de amortiguación de las Áreas Protegidas y sobre participación ciudadana y sus mecanismos en materia ambiental, actores claves en la gestión ambiental que permitirán transformar las realidades del territorio y fortalecer el tejido social.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7736,
            'year' =>3,
            'value' => 50,
            'description' => 'ID 14. Se asistió, participó y aportó con información solicitada durante discusiones técnicas, en todos los espacios convocados por la secretaría técnica del SIRAP Andes Nororientales durante el segundo  trimestre del año.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7737,
            'year' =>3,
            'value' => 0.8,
            'description' => 'ID 15. De acuerdo con el documento técnico Guía 196 del 2006  de priorización de humedales para la región de Norte de Santander, se avanza en actividades de caracterización, zonificación y formulación de las medidas de manejo para el Humedal San Luis, y Cambulos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7738,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 16. Los recursos existentes corresponden a los aportes realizados por la planta Termoelectrica TERMOTASAJERO, por lo tanto estos deben ser en la subcuenca del Rio Zulia, para dar cumplimiento al presente indicador, se esta viabilizando la selección de predios que sean factibles de adquirir, por medio de las diferentes ofertas presentadas a la Corporación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7739,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 17. En el  primer trimestre: Se elaboro el analisis de precios unitario de obra de aislamiento y estudio previo proceso de la Licitación Pública, cuyo objeto es: Implantación  de  kilómetros de aislamiento y enriquecimiento de bosque natural en las microcuencas apotantes al Rio Pamplonita, en su recorrido por los Municipios de Bochalema, Chinácota y Ragonvalia, del Departamento Norte de Santander.  Adjudicado el contrato de obra y la Interventoria, se iniciara la socialización ante los entes municipales y alistamiento social con las comunidades, la finalidad de socializar las condiciones técnicas, concertar y seleccionar las áreas para la ejecución de la implantación de  Km de Aislamiento y enriquecimiento de Bosque Natural.   
        Se pedirá ajuste de ampliación de la META, ya que la actual se cumplió en la vigencia 2021. En el segundo trimestre: Se adelanto el proceso de verificación el cumplimiento de los requisitos habilitantes de experiencia y la evaluación de los factores de ponderación de la Licitación Pública No. 1086 del 2022. En espera de la adjudicación de la interventoría técnica e iniciar la ejecución de los contratos de obra e interventoría / 2022 y el seguimiento corresporndiente por parte de la supervisón de la Corporación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12716,
            'year' =>3,
            'value' => 20,
            'description' => 'ID 18. Por hacer parte de las especies que se encuentran con categoría de amenaza, para la vigencia 2022, se tiene contemplado continuar con las acciones de cuidado y conservacion de las siguientes especies:  Oso Andino, Venado Coliblanco, puma y jaguar
        A traves de las siguientes Actividades: 1.Reporte de avistamientos de la especies en categoria de amenaza en el territorio.2. Articulación dentro de los comite de educación ambiental la tematica de cuidado y proteccion de especies amenazadas 3. Reporte y seguimiento a  dichas especies dentro del territorio. Se continuara trabajando en la atención por conflicto con el Puma ya que, actualmente en la región se presenta una alta presión sobre dicha especie.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12717,
            'year' =>3,
            'value' => 10,
            'description' => 'ID 19. Dentro de las acciones planteadas para el año 2022 se encuentran:
        1 cuidado y conservación de Oso Andino. 2 Atencion por conflicto con fauna silveste.3 Charlas de sensibilizacion a docentes y alumnos entorno al control y manjeo de especies invasoras y al buen uso de los residuos solidos. 4 Mesas ambientales para el avistamiento de aves en la ciudad de Cùcuta y la conservacion de los Cuerpos de Agua en la Region ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12718,
            'year' =>3,
            'value' => 5,
            'description' => 'ID 20. Durante el periodo se realizó la revisión y ajuste a los diseños definitivos de el CAV, así como el proceso precontractual pertinente.
        En el presente año se tiene una meta del 5% la cual ya fue cumplida en el primer trimestre.  Durante el segundo trimestre se solicita ajustar el indicador para el año 2022 a un 60% ya que  el contrato ha sido adjudicado en la presente vigencia (LIC1165-2021 con fecha de inicio 17 de mayo 2022)  con el  inicio de las obras de remodelacion.  Adicionalmente se solicitará para el 2023 el ajuste de meta  al 30 % restante para alcanzar el 100% de cumplimiento. 
        Los avances con la meta ajustada se consolidarán en la tercera validación de la vigencia actual(2022)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12719,
            'year' =>3,
            'value' => 1376,
            'description' => 'ID 21. Se presta la atencion oportuna a todos los animales que ingresan al centro y a los que por diferentes motivos aun permanecen el en mismo. a la fecha se han atendido 1376 aimales, de los cuales 619 venian del año anterior, 360 ingresaron en el primer trimestre,  396 en el segundo trimestre. Se han realizado  401 liberaciones, 188 muertes de animales y 3 reubicaciones en zoologicos. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7740,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 22. para la vigencia 2022, se plantea la realización integral del plan de ordenación forestal de la cuenca del rio pamplonita mediante consultoría especializada que contempla la realización de las siguientes fases: fase iii trabajo de campo que comprende: 1. muestreo de flora (incluye determinación botánica, inventarios forestales) botánica. 2. muestreo de fauna, que comprende (grupos focales, aplicando metodología de campo para su identificación). 3) levantamiento de información socioeconómica (comunidades vinculadas a áreas forestales).4) caracterización de conflictos de uso del suelo. fase iv. comprende: 1. sistematización de información primaria.2) construcción y análisis de la matriz de 3) definición del régimen de ordenación forestal. 4) elaboración de la versión preliminar del POF. fase v comprende: 1. socialización del POF preliminar discusión, armonización, acuerdos con entes territoriales, comunidades, gremios y similares ajustes .2) ajustes. fase vi comprende 1.) elaboración de la versión final del POF. 2)concepto del MADS. 3)adopción acto administrativo corporación. con este planteamiento de ejecución se contempla ejecutar toda la ordenación forestal del rio pamplonita en el año 2022, logrando la corporación adoptar un plan ejecutado con altos estándares de calidad aprobado por el ministerio, ahorrando la ejecución del año 2023. para cumplir con las acciones descritas anteriormente, se hace necesario la contratación de una consultoría especializada de gran experiencia a nivel nacional en la realización de planes de ordenación forestal, y el apoyo de profesional forestal para ello, ya que en la planta de la corporación no se cuenta con el equipo técnico necesario para cumplir con lo planificado en el proyecto',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7741,
            'year' =>3,
            'value' => 50,
            'description' => 'ID 23. Se realiza la atención de las solicitudes por presencia de la especie invasora Caracol Gigante Africano (Achatina fulica) en donde de acuerdo con la resolución 654 del 2011: 1. Se imparto lo potocolos de identificacion de la especie. 2. Recolecta y destino final mediante entierro. De igual forma se hace enfasis en las implicaciones medioambietales que esta especie invasora tiene para los ecosistemas y especies de la regiòn',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7742,
            'year' =>3,
            'value' => 5838,
            'description' => 'ID 24. En el segundo trimestre de 2022, se realizaron visitas de seguimiento a las familias vinculadas a los 3 esquemas PSA BancO2 que se encuentran vigentes, entre CORPONOR y CENS, Cerámica Italia y la Corporación Masbosques (Financiado por Gurpo Nutresa). Se realizaron visitas y el acompañamiento a 181 familias actualmente vinculadas y ubicadas en las zonas de amortiguación de los PNR Sisavita, PNR Santurbán-Salazar y PNR Santurbán-Arboledas, PNR Mutiscua-Pamplona, DRMI Mejué y DRMI Bosque Seco Tropical Pozo Azul. Adicional, en el esquema con la Corporación Masbosques, se ha realizado la entrega de material vegetal para la siembra de 000 árboles, actualmente reportados en el contador de arboles de CORPONOR, para aportar al compromiso de los 180.000 árboles meta. Se firmó el acuerdo de donación entre la Fundación para el Desarrollo del Oriente Colombiano - FUDOC y la Corporación Masbosques para implementar el esquema de PSA BancO2 FUDOC con 10 familias en el DRMI Bosque Seco Tropical Pozo Azul. Este esquema busca la propagación y siembra de 3000 árboles. Se gestionó la adición del esquema voluntario PSA BancO2 CENS por un periodo de 6 meses para 53 familias. Se realizaron visitas personalizadas de asesoría técnica a los socios donde se observaron las unidades productivas que tienen establecidas y de acuerdo al estado en el que se encontraron se hicieron sugerencias y recomendaciones para mejorar la producción optimizando recursos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7743,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 25. Meta del cuatrenio cumplida en 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7744,
            'year' =>3,
            'value' => 33,
            'description' => 'ID 26. Se ha generado información que contribuirá a la reducción de la deforestación en el departamento Norte de Santander con el apoyo de WWF en el marco del proyecto “Institucionalidad y Actualización de Instrumentos Normativos para la Lucha Contra la Deforestación y los Crímenes Ambientales Asociados” y el apoyo y supervisión de las detecciones de cambio de cobertura de bosque natural del IDEAM, con su programa SMByC.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7745,
            'year' =>3,
            'value' => 0.4,
            'description' => 'ID 27. Durante el segundo trimestre del año 2022 en el marco del proyecto de forestería comuitaria, se llevaron a cabo acciones de extensión forestal orientadas a interactuar con la comunidad respecto al  desarrollo del proyecto y a conocer de cerca las expectativas desde la comunidad. Igualmente en coordinación con la administración del Municipio de Los Patios, se adelantaron jornadas de concertación y gestión de recursos para el desarrollo del proyecto, lo que ha generado la concecusión de la implermentación de dos medidas de compensación forestal en un área total de 7.2 hectáreas, las cuales con la participación de la comunidad se estarán estableciendo en el segundo semestre de 2022 en esta microcuenca (agua linda). Las compensaciones forestales ya concertadas para ejecutar en estas zona pertecenen a la empresa Cemex (3 hectáreas) y el Municipio de Los Patios (4.2 hectáreas)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7746,
            'year' =>3,
            'value' => 210000,
            'description' => 'ID 28.Al segundo trimnestre del año 2022, se logró alcanzar una meta del 42,16% correspondiente a una cantidad de arboles de 210.,800 los cuales se han distribuido en toda la jurisdicción de CORPONOR en el Departamento Norte de Santander, mediante la asplicación de diferentes estrategias y con el apoyo de aliados tanto institucionales, como empresariales y comunitarios.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7747,
            'year' =>3,
            'value' => 14,
            'description' => 'ID 29. Durante el segundo trimestre de 2022, se realizó la segunda reunion de la mesa de bosques del departamento Norte de Santander, con el propósityo de conocer las acciones instituciuonales que se viene adelantando y definir el plan de acción participativo. Igualmente en el marco de la gobernanza forestal, se realizó reunion tércnica del comite de bosques de CORPONOR, el cual tuvo como temas principales la aplicación del decreto 1390 de 2018 soibre el cobro de la tasa compensatoria y la aplicación del decreto 1532 de 2019 sobre el registro de plantaciones forestales. 
        De igual forma se realizó concertación con la administración municipal de Cúcuta, para analizar y conocer cada una de las obligaciones institucionales contenidas en la ley 2173 de 2021 respecto a la creación de áreas de vida y creación de bosques.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7748,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 30. En el  primer trimestre: Se adelanta  proceso de la Licitación Pública, cuyo objeto es: Implantación  de  kilómetros de aislamiento y enriquecimiento de bosque natural en las microcuencas apotantes al Rio Pamplonita, en su recorrido por los Municipios de Bochalema, Chinácota  y Ragonvalia, del Departamento Norte de Santander.  Con la ejecución del contrato de obra aislamiento para la conservación de ecosistemas y/o bosques naturales, se inicia la selección de las áreas de ecosistemas en restauración las áreas aisladas se georeferenciarán con la utilización del Sistema Posicionamiento Global (GPS),  se cuantificarán las Has  protegidas (Restauración Pasiva). Ademas contando con el apoyo de las otras acciones en mención en el comportamiento del indicador. En el segundo trimestre: Se adelanto el proceso de verificación el cumplimiento de los requisitos habilitantes de experiencia y la evaluación de los factores de ponderación de la Licitación Pública No. 1086 del 2022. En espera de la adjudicación de la interventoría técnica e iniciar la ejecución de los contratos de obra e interventoría / 2022 y el seguimiento corresporndiente por parte de la supervisón de la Corporación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7749,
            'year' =>3,
            'value' => 95,
            'description' => 'ID 31. Durante el primer trimestre se adelantó el acompañamiento y asistencia técnica a los municipios que se encuentran en proceso de formulación de los EOT, así como los que tiene n programado iniciar procesos este año y se continúa con la revisión de los EOT de Silos, Chinacota y Ragonvalia, y las modificaciones excpcionales de La Esperanza y Bucarasica.
        En el segundo trimestre se prosiguen las mesas de trabajo de los EOT de Chinácota, Silos, Bochalema, La Esperanza y Bucarasica, así mismo se adelantaron los talleres del decreto 1232 del 2020.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7750,
            'year' =>3,
            'value' => 19,
            'description' => 'ID 32. AVANCE DE ACCIONES ESTABLECIDAS. Para el primer trimestre se ejecutaron las siguientes acciones establecidas en la Fase I de Planeación estratégica. Acción 1. Levantamiento de información preliminar para la construcción de la ficha correspondiente a la iniciativa. Acción 2. Cartografía divisoria o parte aguas de las quebradas El Tigre, El Salto, La Esperanza y Maracaibo que surten el acueducto de los centros poblados.  Acción 3. Recolección de información predial de las fincas que se encuentran dentro de la divisoria de las quebradas que surten el acueducto.  Acción 4. Mesas de trabajo bilaterales con los actores involucrados (Alcaldía – Planeación, Notaria municipal, EMCAGUA, secretaria de Desarrollo Agropecuario y Corponor) en las cuales se generaron compromisos para la construcción de la ficha.  Acción 5. Recorrido de campo con los directivos de la Empresa de Acueducto –EMCAGUA, a las quebradas que abastecen las necesidades básicas de los habitantes de la cabecera Municipal de El Carmen',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7751,
            'year' =>3,
            'value' => 46.3,
            'description' => 'ID 33. Como mecanismos de apoyo y asistencia técnica a entes territoriales en la implementación de acciones de mitigación de Gases de Efeecto Invernadero GEI y de adaptación al cambio climático, la subdirección de Cambio Climático y Recurso Hídrico inicio un proceso de fotalecimiento de conocimiento a traves de talleres interactivos en los cuales se abordan a profundidad las medidas 1.1., 2.1. y 4.2. del PICCDNS para su implementación en los territorios y apropación de este instrumento.  Para el Primer Trimestre del año 2022 se convocaron virtualmente a los municipios zona Salazar de las Palmas acudiendo un total de cinco (05) municipios. Para el Segundo Trimestre del año 2022 se adelantó mesas de trabajo con municipios de la zona Cúcuta y Zona pamplona, utilizando escenarios presenciales y virtuales . a pesar de la inasistencia de algunos municipios, se pretende, para el tercer trimestre, estabelcer un mecanismo de asistencia técnica en los municipios para abarcar el 75% de la meta establecida. Ademas, se pretende consolidar avances en un proceso de seguimiento para generar gestión a traves de la gobernanza climática con el Nodo Regional Norandino de Cambio Climático, el cual, su secretaría técnica se ejecuta desde la Corporación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7752,
            'year' =>3,
            'value' => 55,
            'description' => 'ID 34. Como parte de los compromisos adquiridos con el 2020, Corponor, a traves de la subdirección de Cambio Climático y Recurso Hídrico, asume por primera vez la Secretaría Técnica del Nodo Regional Norandino de Cambio Climático NRNCC, por medio del cual, se hará toda la gestión para la implementación del Plan Integral de Cambio Climático Departamento Norte de Santander PICCDNS.
        Para el primer Trimestre se dan inicio a los encuentros de mesas temáticas y Comité directivo como establece el reglamento interno del Nodo y se propone el Plan de Acción 2022 para aprobación. Se actualiza directorio y se restablece control documental de los PICCT e intrumentos de política.
        Para el segundo trimestre del año, se consolida el Nodo Norandino con el desarrollo de esos mesas temáticas, las cuales han podido generar un ejercicio de articulación interinstitucional, a efectos de promover y gestionar el cambio climático tomando como base el plan de acción del NRNCC y de los contenidos programáticos del PICC Territoriales.
        En este sentido, se adelantaron talleres técnicos para aportar al PICC Sector Defensa, Financiamiento Climático; se desarrolló Diplomado de acción climática con actores empresariales con apoyo de U Ean y Fondo Acción y se apoyaron agendas institucionales como la semana de la sustentabilidad de la Universidad Santo Tomas de Aquino.
        Para el tercer trimestre, se pretende desarrollar un evento de Alto Nivel, que reuna al Nodo Norandino junto con el miniseterio que permita generar alianzas para una firma de acción climática en torno a los retos y necesidades de NRNCC.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7753,
            'year' =>3,
            'value' => 70,
            'description' => 'ID 35. Los sectores priorizados para acompañamiento en la reconversión hacia sistemas sostenibles de producción (SPA) son: Porcícola, Agrícola, Palma de aceite, Avícola y Ganadero; a los cuales se les continuará el acompañamiento para el cumplimiento de los compromisos establecidos en las reuniones',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7754,
            'year' =>3,
            'value' => 0.55,
            'description' => 'ID 36. Proyecto 1.Construcción de estufas ecoeficientes como medida de mitigación al Cambio Climático.  Proyecto 2. Adquisición (compraventa) de árboles forrajeros para el establecimiento de  cuatro (4) Sistemas Silvopastoriles (Bancos Mixtos de Forraje - BMF) para cuatro (4) fincas ganaderas del municipio de Pamplona - Departamento Norte de Santander.  Proyecto 3. Construcción de seis (6) casetas recolectoras de almacenamiento temporal de envases posconsumo de plaguicidas para ser distribuidas estratégicamente en los municipios de Ocaña, Abrego, La Playa, Lourdes, Santiago y El Zulia - Departamento Norte de Santander.  Proyecto 4.Apoyo en la restauración de ecosistemas con polinizadores, mediante la entrega de colmenas con sus equipos de manejo y capacitación, para familias campesinas en la zona rural dispersa del municipio de Abrego en el departamento de Norte de Santander.Proyecto 5.Convenio Construcción de Biodigestores Plásticos en Geomembrana de Flujo continuo como medida de mitigación al Cambio Climático con el municipio de Silos en el  Departamento Norte de Santander.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7755,
            'year' =>3,
            'value' => 74,
            'description' => 'ID 37. La corporación ejerce un papel significativo dentro del Sistema Departamental de Gestión de Riesgos de Desastres, que a traves de la subdirección de Cambio Climático y Recurso Hídrico desarrolla acciones en materia de gestión de conocimiento, acompañamiento en la reducción de riesgo y apoyo en el manejo de Desastres naturales. Durante el primer trimestre se dio apoyo a los entes territoriales en las sesiones ordinarias y extraordinarias de los CTGRD asistiendo a los municipios en la toma de acciones por primera temporada de menos lluvias,  asi mismo, en el seguimiento a los contenidos programáticos de los PMGRD, y realizando visitas de valoración de las afectaciones ambientales Post-Desastres por Remosión en masa e incendios forestales y en un proceso de divulgación de información hidroclimáticas a traves de boletines informativos a traves de medios digitales. Para el segundo trimestre del año, se adelantó en la asistencía técnica a los municipio de Norte de Santander como fueron , puerto santander, El Zulia, Cúcuta por inundación ante la primera temporada de lluvias del 2022. asi mismo, se envío comunicado de recomendaciones especiales para disminuir los escenarios de riesgo y se atendieron todas las visitas solicitadas para conceptuar sobre condiones de riesgos urbanos y rurales. A efectos de mejorar en los procesos de Corponor, se aplicó metodología EDANA C del ministerio para aboradar los procesos de evaluación de daños ambientales postdesastres con ele ejercicio de evento de remoción en masa de chitagá. Asi mismo, se adelantaron visitas de seguimiento a los PMGRD de 7 municipios e identificando areas expuestas a amenazas de origen hidroclimático como apoyo al municipio para la prevención de dichos riesgos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7756,
            'year' =>3,
            'value' => 3,
            'description' => 'ID 38. SE HA AVANZADO EN EL 46% DEL CONVENIO INTERADMINISTRATIVO ENTRE LA GOBERNACIÓN DE NORTE DE SANTANDER Y LA CORPORACIÓN AUTÓNOMA REGIONAL DE LA FRONTERA NORORIENTAL – CORPONOR, CON EL FIN DE AUNAR ESFUERZOS PARA DESARROLLAR LAS ACCIONES PRIORITARIAS EN ATENCIÓN A LA EMERGENCIA GENERADA POR LA OLA INVERNAL EN EL DEPARTAMENTO NORTE DE SANTANDER.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7757,
            'year' =>3,
            'value' => 16,
            'description' => 'ID 39. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7758,
            'year' =>3,
            'value' => 9,
            'description' => 'ID 39. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7759,
            'year' =>3,
            'value' => 61,
            'description' => 'ID 39. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7760,
            'year' =>3,
            'value' => 33,
            'description' => 'ID 39. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7761,
            'year' =>3,
            'value' => 39,
            'description' => 'ID 39. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7762,
            'year' =>3,
            'value' => 11,
            'description' => 'ID 39. Número total  vigentes y aprobadas por la Corporación a 31/12/2021: 2.685
        Numero total de seguimientos priorizados para el año 2022: 403, para un total del 15% de visitas priorizadas, Se hizo seguimiento  de concesiones de agua tanto superficiales como subterráneas  durante el trimestre de abril,mayo,junio a 191 expedientes, que corresponden al 47,24 % del total de concesiones de agua vigentes priorizadas el hasta el 31/12/2021, distribuido de la siguiente manera: 125 superficiales y 66 subteráneas',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7763,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 39. Sin información',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7764,
            'year' =>3,
            'value' => 44,
            'description' => 'ID 39. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7765,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 40. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7766,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 40. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7767,
            'year' =>3,
            'value' => 173,
            'description' => 'ID 40. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7768,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 40. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7769,
            'year' =>3,
            'value' => 128,
            'description' => 'ID 40. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7770,
            'year' =>3,
            'value' => 66,
            'description' => 'ID 40. Se observa una notable disminución de los tiempos para otorgar una concesión de aguas con relación a los años anteriores, sin embargo existe un aumento del tiempo con respecto a los dos trimestres evaluados dentro del año 2022,',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7771,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 40. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7772,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 40. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7773,
            'year' =>3,
            'value' => 4.48,
            'description' => 'ID 41. Gestión de los procesos sancionatorios aperturados, con relación a la ocurrencia de infracciones en materia ambiental en su jurisdicción.  En elprimer trimestres se firmaron  60 actos administrativos que deciden los procesos sancionatorio ambiental. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7774,
            'year' =>3,
            'value' => 3,
            'description' => 'ID 42. Se realiza reprogramación de reunión del comité de control y vigilancia para el día 20/04/22',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7775,
            'year' =>3,
            'value' => 69,
            'description' => 'ID 43. Actualmente el indicador tiene un avance del 69,46% correspondiente al desarrollo de la tematica de  Planificación y ordenamiento ambiental en áreas urbanas con una ejecucion para el segundo trimestre de un 20%, de la tematica de Gestión ambiental del Riesgo en áreas urbanas de un 18,5% , en la tematica de Gestión ambiental del Espacio Público en áreas urbanas de un 16% , del la tematica de Prevención y Control de la Contaminación del Aire en áreas urbanas (fenómeno de acumulación o concentración de contaminantes en el aire generado por diferentes tipos entre ellos contaminantes criterio, ruido y olores ofensivos) con un 10% y por ultimo en la tematica de  Índice de calidad ambiental urbana
        con un 5%, el desarrollo del indicador es bueno y se tiene presupuestado desarrollar el 30,54% restante en la ejecucion de los 2 proximos trimestres.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7776,
            'year' =>3,
            'value' => 52,
            'description' => 'ID 44. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7777,
            'year' =>3,
            'value' => 100,
            'description' => 'ID 45. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7778,
            'year' =>3,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7770,
            'year' =>3,
            'value' => 100,
            'description' => 'ID 46. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7780,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 47. Debido a la migración de datos entre SISPROP Y NEPTUNO no se ha realizado actualizaciones y se ha limitado el uso del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7781,
            'year' =>3,
            'value' => 52,
            'description' => 'ID 48. Con base a la gráfica del anexo 3 Promedio Mensual del ICA y Concentración (ug/m3), se puede apreciar el comportamiento de la calidad del aire en la ciudad de Cúcuta en el primer trimestre del año 2022. Para el I trimestre se registra un incremento en el mes de marzo tanto en el Índice de la Calidad del Aire - ICA como en la concentración (ug/m3), en las estaciones de monitoreo ubicadas en los barrios El Salado y Comuneros. Dichas concentraciones (ug/m3) estuvieron por encima del límite permisible 75 ug/m3 en Tres (3) dias de monitoreo realizados, según lo establecido en la Resolución 2254 de 2017, obteniendo una clasificación BUENA para la estación del Barrio Centro y MODERADA para las estaciones de los barrios El Salado y Comuneros, tanto en la concentración como en el ICA para el primer trimestre del año 2022. Para el II Trimestre, se registra los valores promedios más elevados de concentración (ug/m3) en el mes de Abril para la estación de el Barrio Comuneros y en el mes de Mayo para las estaciones de los Barrios Comuneros y El Salado como se aprecia en el Anexo 2. Grafica 1; más sin embargo se encuentran dentro de los limites permisibles según lo establecido en la Resolución 2254 de 2017 obteniendo una clasificación BUENA en las tres (3) estaciones de monitoreo del Sistema de Vigilancia de la Calidad del Aire – SVCA. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7782,
            'year' =>3,
            'value' => 49,
            'description' => 'ID 49. Para la vigencia 2022 se tiene programadas 8 acciones, de las cuales en el primer semestre se realizaron las siguientes:
        1. Actualización del plan regional de negocios verdes e inclusivos. 2. Realizar 3 talleres de socialización del PRNVI: *Negocios y emprendimientos Verdes - UDES-CORPONOR *Economia Circular y Negocios Verdes para jovenes ambientalistas y emprendedores - CORPONOR *NNegocios Verdes Oportunidades de Cambio e Inovacion en el Mercado - UFPS-CORPONOR
        3. Una  Empresas con criterios de negocios verdes aplicados y con plan de mejoramiento socializado. Aplicación de Criterios de Negocios Verdes a la Empresa PREPLASTY. 4. Eventos (3) de capacitación en negocios verdes (marketing, contabilidad, planes de comercialización entre otros) dirigido a empresarios con aplicación de criterios: *Como crear la Pagina web de tu Negocio Gratis 
        *Como aprovechar los medios de pago electronico en los tiempos de COVID-19  *Ideando Modelos de Negocios en Tiempos de Cambio. En el presente año se tenia una accion de 7 seguimientos a empresas avaladas o con  potencial para ser  avaladas como negocio verde,la cual ya fue cumplida en el primer trimestre,  se solicita ajustar el indicador en la accion para el año 2022 a 54 seguimientos  ya que contamos con mayor personal  a la hora de realizar estas visitas y brindar acompañmiento a gran parte de los negocios verdes que hacen parte de la programa',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7783,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 50. No se ha dado inicio a ningún proyecto.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7784,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 51. o se ha dado inicio a ningún proyecto.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7785,
            'year' =>3,
            'value' => 7,
            'description' => 'ID 52. En el Plan de trabajo PDET 2022 – 2023 se desarrolla la iniciativa #454245191460 denominada “Reforestación ecológica a través de la preservación de las quebradas El Tigre, El Salto, La Esperanza y Maracaibo que surten el acueducto de los centros poblados del Municipio del Carmen Norte de Santander',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7786,
            'year' =>3,
            'value' => 46,
            'description' => 'ID 53. En el segundo trimestre de 2022, se inició la implementación de los planes de trabajo para el año, con la implementación de la totalidad de las agendas definidas en el plan de acción 2020-2023.
        Estrategia de participación encaminda a generar espacios de dialogo, concertación y coordinación interculturales, las cuales deben articularse de manera continua y organizada y para ello los lideres de las agendas han trabajado en mantener este vinculo.
        La percepción enfoque, proyección y compromiso son fundamentales para establecer alternativas de solución a las problematicas del territorio y para ello se deben aunar esfuerzos entre los diferentes actores sociales y culturales que han sido estratégicos en la conservación, manejo, uso, aprovechamiento y ordenamiento ambiental del territorio, la corporación, el MADS y los actores SINA.
        Las agendas promueven la gestión ambiental integral que fortalece la coordinación intersectorial e intercultural entre instituciones públicas, privadas, comunitarias y autoridades y por ello se debe seguir trabajando en esta comunicación',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7787,
            'year' =>3,
            'value' => 86,
            'description' => 'ID 54. Conforme a la estructración del presupuesto para la vigencia 2022, de las diferentes fuentes de ingreso en el presupuesto definitivo; acorde al ingreso de las rentas obtenidas para este primer semestre podemos deducir el siguiente análisis: Sobretasa Ambiental, como una de las mayores rentas que tiene la corporación podemos sustentar que lde lo proyectado para la vigencia 2022, el comportamiento de la transferencia efectuada de los 40 Municipios, obedece a un  49.97% frente al presupuesto definitivo. Es valido aclarar que el recaudo del mismo  esta supeditado al pago del impuesto predial que debe efectuar cada contribuyente.La subdirección financiera para el inicio de este srgundo semestre estableció la acción de seguimiento en pro de verificar en cada uno de los entes territorial, si efectivamente lo transferido es acorde a lo recaudo. Tasa por Uso de Agua. Frente a esta renta podemos indicar, que este primer semestre ha obtenido un recaudo bastante elevado, con base en lo facrturado, y por ende podemos establecer que el valor obtenido frente a lo establecido en el presupuesto final, superará la meta, a pesar que la facturación se empezó a generar en el mes de marzo; supeditado a la transición al sistema en línea para la obtención de permisos ambientales - NEPTUNO. Tasa Retributiva. El recaudo acomulado por esta fuente de ingreso para el primer semestre de la vigencia en curso es de $1.948.665.976.01, cuya descripcion es la siguiente: de la vigencia actual se ha recaudado $1.145.249.427.49, y de las anteriores vigencias $803.416.548.52, y por intereses de mora $1.108.916.086.39.  El cumplimiento del recaudo de esta fuente,con corte a la fecha supera el valor esperado. Otras Rentas. En el marco de las otras fuentes de ingreso de estas rentas de la CORPORACIÓN como lo son EVALUACION  Y SEGUIMIENTO de LICENCIAS, TRAMITES AMBIENTALES, TRANSFERENCIA SECTOR ELECTRICO, TASA COMPENSATORIA  POR APROVECHAMIENTO. FORESTAL y MULTAS, se puede analizar que el recaudo en este primer semestre ($5.565.346.189), supera lo facturado; al igual que supera el 50% del prsupuesto definitivo. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7788,
            'year' =>3,
            'value' => 80,
            'description' => 'ID 55. De acuerdo a la metodologia, se puede evidenciar que la accion fue efectiva en cuanto a numero de procesos enviados por la subdireccion financiera/ versus numero de procesos aperturados por la subdireccion juridica, obteniendo el 60% de la ejecucion;  en cuanto a los expedientes ya iniciados, se puede observar que se realizo una ejecucion de 80%, esto es procesos aperturados o iniciados / versus tramites adelantados de conformidad con el manual de cobro coactivo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7789,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 72. No se realiza medición de este indicador para esta vigencia',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7790,
            'year' =>3,
            'value' => 0.46,
            'description' => 'ID 56. Se da cumplimiento a las actividades previstas para el mantenimiento del sistema de gestión de forma articulada con el modelo integrado de planeación y gestión MIPG.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7791,
            'year' =>3,
            'value' => 20,
            'description' => 'ID 57. No se realiza medición de este indicador para esta vigencia',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7792,
            'year' =>3,
            'value' => 0.48,
            'description' => 'ID 58. Se incorpora nuevo proyecto: INSTALACIÓN DE ESTUFAS EFICIENTES FIJAS EN LA ZONA RURAL DEL DEPARTAMENTO DE NORTE DE SANTANDER.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7793,
            'year' =>3,
            'value' => 10,
            'description' => 'ID 59. ADICIONAL AL PROYECTO ""IMPLEMENTACIÓN DE ACCIONES PARA MITIGAR LA SOCAVACIÓN ACELERADA DEL SUELO DE LADERA EN LA MARGEN DERECHA DEL RÍO PAMPLONITA, 330M AGUAS ABAJO DEL PUENTE ENRIQUE CUADROS CORREDOR, EN EL MUNICIPIO DE CÚCUTA DEPARTAMENTO NORTE DE SANTANDER (GAZAPA MARGEN DERECHA - JARDIN PLAZA)"". bpin 2018011000409
        IMPLEMENTACIÓN DE MEDIDAS DE ADPTACIÓN Y MITIGACIÓN EN LAS MARGENES DEL CAUCE DEL RIO PAMPLONITA, SECTOR CGTO PUERTO VILLAMIZAR, MUNICIPIO DE CUCUTA, VEREDAS VEGAS DEL PAMPLONITA Y EL DAVE, MUNICIPIO DE PUERTO SANTANDER, NORTE DE SANTANDER. bpin 2021011000157
        ADICIONAL “IMPLEMENTACIÓN DE ACCIONES EN EL MARCO DE LA GESTIÓN DE RIESGO PARA LA RECUPERACIÓN AMBIENTAL DE LA RONDA HÍDRICA DE LA QUEBRADA AGUA LINDA Y RIO PAMPLONITA EN EL SECTOR BARRIO MONTEBELLO 1 Y LADERAS ALEDAÑAS, MUNICIPIO DE LOS PATIOS, NORTE DE SANTANDER. bpin 2018011001120
        IMPLEMENTACIÓN DE ACCIONES PARA MITIGAR LA SOCAVACIÓN ACELERADA DEL SUELO DE LADERA EN LA MARGEN DERECHA DEL RÍO PAMPLONITA, A LA ALTURA DEL PUENTE ENRIQUE CUADROS CORREDOR, SECTOR LA GAZAPA, MUNICIPIO DE CÚCUTA, NORTE DE SANTANDER. bpin 2021011000275
        IMPLEMENTACIÓN DEL ESQUEMA PAGOS POR SERVICIOS AMBIENTALES COMO ESTRATEGIA DE PRESERVACIÓN Y LA SIEMBRA DE ESPECIES NATIVAS EN PARQUES NATURALES REGIONALES Y SUS ÁREAS DE AMORTIGUACIÓN EN NORTE DE SANTANDER.
         IMPLEMENTACION DE ACTIVIDADES PARA LA PROTECCIÓN Y REHABILITACIÓN DE LAS AREAS PROTEGIDAS RESERVA FORESTAL PROTECTORA REGIONAL EL BOJOSO Y DISTRITO REGIONAL DE MANEJO INTEGRADO BOSQUE SECO TROPICAL POZO AZUL, NORTE DE SANTANDER, 
        CONSTRUCCIÓN DE OBRAS PARA LA MITIGACIÓN DEL RIESGO DE DESASTRE POR SOCAVACIÓN MARGEN DERECHA DEL RIO PAMPLONITA A LA ALTURA DEL PUENTE PEATONAL DE SAN LUIS, MUNICIPIO DE CÚCUTA, NORTE DE SANTANDER
        IMPLEMENTACIÓN DE ACCIONES PARA MITIGAR LA SOCAVACIÓN ACELERADA DEL SUELO DE LADERA EN LA MARGEN DERECHA DEL RÍO PAMPLONITA, A LA ALTURA DEL PUENTE ENRIQUE CUADROS CORREDOR, SECTOR LA GAZAPA, MUNICIPIO DE CÚCUTA, NORTE DE SANTANDER 
        “IMPLEMENTACIÓN DE ACCIONES PARA MITIGAR LA SOCAVACIÓN ACELERADA DEL SUELO DE LADERA EN LA MARGEN IZQUIERDA DEL RÍO PAMPLONITA AGUAS ABAJO DEL PUENTE PEATONAL DE SAN LUIS, SECTOR EL MALECÓN, MUNICIPIO DE CÚCUTA, NORTE DE SANTANDER”
        IMPLEMENTACIÓN DEL ESQUEMA PAGOS POR SERVICIOS AMBIENTALES COMO ESTRATEGIA DE PRESERVACIÓN Y LA SIEMBRA DE ESPECIES NATIVAS EN PARQUES NATURALES REGIONALES Y SUS ÁREAS DE AMORTIGUACIÓN EN NORTE DE SANTANDER.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7794,
            'year' =>3,
            'value' => 3.15,
            'description' => 'ID 60. Seguimiento al cumplimiento de los compromisos de la gobernación,  los municipios y corponor dentro de cada uno de los ejes estratégicos del PGAR - PLANEAR.  Acción que está realizando con el Equipo Técnico para este proposito, en el Segundo Trimestre del 2021.  
        Se tienen listas las matrices con la información de acciones ambientales compilada de los PDD-PDM y seran enviadas con una Circular para su Verificación por parte de los Entes Territoriales. Se considera importante que CORPONOR mantenga la estrategia de las agendas ambientales y se dé el seguimiento a los compromisos trazados, los cuales tambien estan aportando al cumplimiento de las Metas del PLANEAR.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17166,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7795,
            'year' =>3,
            'value' => 17,
            'description' => 'ID 61. Se trabaja en organizar a los compañeros encargados de alimentar el SIRH, en lo referente a los Permisos Otorgados de Concesiones de Agua en el dpto. con el propósito de incorporar 120 Registros durante el año. En este Primer TRimestre del año 2.022,  se Incorporaron 20 Registros  en el SIRH-CORPONOR. Información reportada por la Subdirección de Cambio Climático y Recurso Hídrico. Durante el presente año, 2.022, se incorporarán 104 datos, en el Subsistema del SISAIRE, En este Primer Trimestre del año 2.022, se Incorporaron 27 Registros.   Información reportada por parte de la Subdirección de Medición y Análisis Ambiental. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7796,
            'year' =>3,
            'value' => 26,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7797,
            'year' =>3,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7798,
            'year' =>3,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7799,
            'year' =>3,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7800,
            'year' =>3,
            'value' => 54,
            'description' => 'ID 62. Durante este Trimestre se logró avanzar en la gestión con el IGAC, Bogotá y la posibilidad de apoyar en la elaboración del Proyecto para la consecusión de recursos que permitan conformar el SIG Departamental. Se realiza reunión con los funcionarios de la Secretaría de Medio Ambiente de la Gobernación para apoyar el documento de soporte de la Conformación del SINA Departamental.
        Se revisaron los Planes y se  elaboran las consideraciones de la información cartografica presentada: EOT : Municipios de 1.  Bucarasica, Ajuste excepcional, 2. Chinacota y 3. Bochalema 4. Silos y 5. San Cayetano ya realizaron socialización, pero aún no han entregado la información cartografica ajustada para revisión. 
        61 solicitudes de Información geografica de usuarios internos y externos en el segundo   trimestre atendidas. Para un total de 137 Respuestas a solicitudes, en el primer semestre.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7801,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 63.  Indicador reemplazado por ID 73',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7802,
            'year' =>3,
            'value' => 0,
            'description' => 'ID 73. No se tiene medición de este indicador para esta vigencia',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7803,
            'year' =>3,
            'value' => 42,
            'description' => 'ID 64. Grupo PETI para la formulacion del plan, una vez aprobado el PAI 2020-2023, sigue la metodología del MinTic  sesiones realizadas número 15. la identificación de los diferentes proyectos.
        Se termina la parametrizacion del tramite de vertimiendos y se procede a la migracion a la plataforma de produccion en VITAL-SILAMC ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7804,
            'year' =>3,
            'value' => 39,
            'description' => 'ID 65. diligenciamiento de autoevaluación del MinTIC dio un nivel  en el 68,2% avance de la implementación de la politica de Gobierno Digital y se plantean actividades para fortaleceer los ejes de: Componente Gobierno abierto. Componente TIC para servicios. Componente TIC para la gestión de TI. Desempeño en el componente Seguridad y Privacidad de la información',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7805,
            'year' =>3,
            'value' => 47.22,
            'description' => 'ID 66. Ejecucion del Plan de Administración, soporte y asistencia en la operación de la infraestructura tecnológica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7806,
            'year' =>3,
            'value' => 50,
            'description' => 'ID 67. Se avanza en la asesoria y acompañameinto a los entes territoriales ; y se implementa el desarrollo de las estrategias PRAE, PROCEDA´s y CEAM',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7807,
            'year' =>3,
            'value' => 100,
            'description' => 'ID 68. Se planteó una estrategia y un cronograma de trabajo para la vigencia 2022 en el cual se establecieron las acciones a realizar, las personas a cargo y los canales de divulgación. 
        Hasta el momento no se cuenta con el plan formulado para el año vigente. 
        ""Se realizaron 20  comunicados de prensa publicados en la página web y los medios de comunicación: 
        A continuación, algunas evidencias a través de los links: 
        https://corponor.gov.co/web/index.php/2022/02/01/humedales-de-palmarito-y-san-luis-son-estudiados-por-corponor-2/
        https://corponor.gov.co/web/index.php/2022/02/02/actualizacion-de-plan-de-ordenamiento-territorial-y-asistencia-tecnica-de-los-municipios/ 
        https://corponor.gov.co/web/index.php/2022/02/15/corponor-inspecciona-el-colegio-julio-perez-ferrero-por-reporte-de-serpientes/ 
        https://corponor.gov.co/web/index.php/2022/02/18/polvo-del-sahara-llegara-nuevamente-a-colombia/
        https://corponor.gov.co/web/index.php/2022/03/22/corponor-activa-el-protocolo-de-control-del-caracol-gigante-africano-por-epoca-de-lluvias/
        https://corponor.gov.co/web/index.php/2022/03/22/corponor-protege-corredores-biologicos-del-oso-andino-en-norte-de-santander/
        https://corponor.gov.co/web/index.php/2022/03/22/el-en-dia-mundial-del-agua-corponor-acompano-actividades-academicas-y-de-siembra-de-arboles/ 
        https://corponor.gov.co/web/index.php/2022/03/28/pago-por-servicios-ambientales/
        https://corponor.gov.co/web/index.php/2022/03/29/envases-de-plaguicidas/
        El área de comunicaciones mantiene contacto permanente con los diferentes medios  periodistas de la región a través del grupo de whatasapp, en el cual se realiza el envío de información relevante para divulgar ante la comunidad nortesantandereana de las actividades, proyectos y gestión de Corponor.     
        ""Se proyectaron comunicados e información para medios a fin de gestionarlos como Free Press para los medios impresos, digitales, radiales y de televisión a través del grupo de periodistas y gestión de espacios desde el área de comunicaciones. 
        Diez jardines para embellecer a Cúcuta: https://www.laopinion.com.co/cucuta/diez-jardines-para-embellecer-cucuta
        Corponor alerta a las alcaldías por temporada de lluvias: https://www.laopinion.com.co/cucuta/corponor-alerta-las-alcaldias-por-temporada-de-lluvias
        Humedales de Palmarito y San Luis son estudiados por Corponor: https://www.areacucuta.com/humedales-de-palmarito-y-san-luis-son-estudiados-por-corponor/
        https://www.laopinion.com.co/cucuta/439-humedales-banan-el-territorio-de-norte
        Corponor ""curó"" inundaciones en sitios críticos del río: https://www.laopinion.com.co/cucuta/corponor-curo-inundaciones-en-sitios-criticos-del-rio
        Recorrido al Páramo de Guerrero por parte del director general de Corponor, Gregorio Angarita Lamk y el  Gobernador de Norte de Santander, Silvano Serrano en compañía de diferentes autoridades, representantes del Ministerio de Ambiente, autoridades locales, fuerza pública y medios de comunicación para la siembra de frailejones, planta característica de los páramos cuya función es captar la humedad del entorno y almacenar el líquido vital para nutrir las quebradas y ríos de nuestro territorio verde. 
        Durante el primer trimestre se llevó a cabo la producción de 27 videos para las diferentes redes sociales con los formatos: En la obra, Flash Verde, Hábitats, Territorio Verde y formatos tipo Reel ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7808,
            'year' =>3,
            'value' => 11,
            'description' => 'ID 69. Se cuenta con el diseño del calendario ambiental compatido entre las Corporaciones Autónomas Regionales del país y el Ministerio de Ambiente y Desarrollo Sostenible. 
        ""Se conmemoraron las siguientes fechas ambientales y cumpleaños de los municipios de Norte de Santander, entre ellos:
        Fechas Ambientales: 
        Día Mundial de la Educación Ambiental
        Día de los Humedales
        Día de la vida silvestre
        Día Internacional de la protección de los osos 
        Día del Agua 
        Día del periodista 
        Día Mundial de la Vida Silvestre
        Día Internacional de la conciencia sobre el ruido 
        Cumpleaños de los municipios: 
        Abrego 
        Arboledas
        Cáchira 
        Pamplonita
        Puerto Santander 
        La Esperanza
        Fechas Especiales: 
        Día del periodista
        Día de la Mujer 
        Batalla de Cúcuta 
        ""Somos Humedales 
        Somos Agua, Somos Vida 
        Campaña Sembratón 
        Campaña para la promoción de la Audiencia Pública de Rendición de Cuentas 
        Campaña Caracol Gigante Africano
        Campaña Oso de Anteojos 
        Hasta el momento la encuesta de percepción está en estructuración ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 7809,
            'year' =>3,
            'value' => 1,
            'description' => 'ID 70. Se desarrollo la audiencia publica de rendicion de cuentas de manera presencial  del informe de gestion 2021, se transmitio a traves de las redes sociales de la entidad (Facebook).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2022-06-30',
            'created_at' => '2022-02-05',
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
