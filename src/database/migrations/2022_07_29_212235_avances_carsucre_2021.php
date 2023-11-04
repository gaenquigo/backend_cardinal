<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCarsucre2021 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 14974,
            'year' =>2,
            'value' => 6,
            'description' => 'Vigencia 2021: A través de adición al contrato No. 0232 de 09 de Diciembre de 2020, cuyo objetivo es “Mantenimiento de obras piloto de recarga artificial en área de influencia del acuífero Morroa, en el marco del proyecto: Protección Integral de Aguas Subterráneas (PPIAS) en jurisdicción de Carsucre”, en la vigencia 2021 se realizó: mantenimiento de una laguna de infiltración,  mantenimientos de las dos trincheras de infiltración, mantenimiento del filtro de arena, mantenimientos de pozo de gran diámetro y mantenimiento de la laguna de sedimentación y del sedimentador tipo serpentín,  para un total de cuatro (6) obras en el predio el tesoro ubicado en el Municipio de Morroa.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 0232 el 9 de Diciembre de 2020',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14974,
            'year' =>2,
            'value' => 5,
            'description' => 'Vigencia 2020: A través de contrato No. 0232 el 9 de Diciembre de 2020  con duración de cuatro (4) meses, cuyo objeto es  Mantenimiento de obras piloto de recarga artificial en área de influencia del Acuífero Morroa, en el marco del Proyecto: Protección Integral de Aguas Subterráneas (PPIAS) en Jurisdicción de Carsucre, se realizó el mantenimiento completo de las obras de recarga artificial ubicadas en el predio villa Vanessa (compuesta por dos pozos de gran diámetro, un filtro rápido de arena, una laguna de sedimentación una  laguna de infiltración), para un total de (5) obras en este predio.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Adición al contrato No. 0232 de 09 de Diciembre de 2020,',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14975,
            'year' =>2,
            'value' => 7,
            'description' => 'A través de contrato No. 0247 de 2021 cuyo objetivo es Mantenimiento de la red de monitoreo en área de influencia del acuífero morrosquillo, en el marco del proyecto: Protección Integral de Aguas Subterráneas (PPIAS) en jurisdicción de Carsucre se realizó con corte a 30 de Diciembre de 2021, el mantenimiento de 7 piezómetros, teniendo en cuenta las siguientes actividades: 
        
        Inicialmente se realizó la demarcación del sitio y la adecuación de accesos y áreas necesarias para la ubicación de materiales y equipos, luego se procedió con la ubicación de la maquinaria, nivelando el equipo de lavado, una vez finalizada esta actividad se procedió con la inyección de aditivos dispersantes de arcillas (polifosfatos), y para la desinfección hipoclorito de sodio y se dejó en cada piezómetro por un periodo de 24 horas, transcurrido este periodo se realizó un tratamiento mecánico, con pistoneo a cada filtro del pozo, inyectando aire comprimido con un compresor en forma simultánea para evacuar los sólidos, este procedimiento se realizó hasta que el agua salió totalmente limpia sin sedimentos en suspensión.
        
        Una vez terminado el proceso de lavado y desinfección se realizaron pruebas de slug para verificar la velocidad de infiltración del agua en la zona de filtros de cada piezómetro, teniendo en cuenta el nivel estático y el volumen estos, en algunos de estos piezómetros se realizaron pruebas de bombeo con 18 horas de bombeo y 18 horas de recuperación, debido a las condiciones técnicas de estos. En el periodo de ejecución de estas se procedió con el Mantenimiento de las protecciones, cambiando el sistema de seguridad (Candado) por un sistema que de tapón roscado que evita la manipulación de las tapas de acceso a los piezómetros. También se pintaron las bases de los piezómetros de color azul y negro para los tubos de la protección.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 0247 de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14976,
            'year' =>2,
            'value' => 20000,
            'description' => 'En la vigencia 2021 se realizaron 20.000 m2 de escariación del suelo y de pequeñas excavaciones (tipo jagueyes) con máquina de excavación Retro (tipo Pajarita) en el predio el tesoro ubicado en el municipio de Morroa, con el fin de contribuir a aumentar la recarga directa del acuífero de Morroa.',
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
            'activity_id' => 14977,
            'year' =>2,
            'value' => 264,
            'description' => 'Visitas de Monitoreo Subterráneo: Se realizaron 242 visitas de monitoreo de seguimiento a los pozos que abastecen los acueductos municipales de Sincelejo y Corozal y demás monitoreos del recurso hídrico.
        
        Visitas de Monitoreo Superficial: Se realizaron 22 salidas de campo para el monitoreo del recurso hídrico en las microcuencas del Arroyo Grande de Corozal, Arroyo Pichilin, Arroyo Canoas, Arroyo Torobe, Arroyo Ovejitas, Arroyo Villeros, Represa Villeros y Laguna Costera la Caimanera, obteniendo de esta manera  73 monitoreos de visita.',
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
            'activity_id' => 14978,
            'year' =>2,
            'value' => 249,
            'description' => 'Se realizo el cargue a la plataforma SIRH 249 registros correspondientes a aguas superficiales.',
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
            'activity_id' => 14979,
            'year' =>2,
            'value' => 2,
            'description' => 'Se delimitaron y priorizaron las áreas de importancia estratégica para la protección del recurso hídrico de los municipios de Sampues y Sincé.',
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
            'activity_id' => 14981,
            'year' =>2,
            'value' => 20,
            'description' => 'Se realizaron 26 seguimientos a los Programa del Uso Eficiente y Ahorro del Agua - PUEAA con realización de visitas técnicas y/o elaboración de conceptos técnicos , relacionados a continuación: Servicio la Palma SAS, Unidad Residencial Punta Azul, Almidones de Sucre, Agregados de la Fuente SAS, Aguas de la Sabana S.A. E.S.P, Ivan Alberto Fadul Chadid, Jaime Reston Merlano, Inversiones Jaibu SAS, Aguas del Golfo, Aguas Coloso, Empagal, Compas, Wadith Marimon Estremor, Santiago Méndez Parodi y/o Cabañas Kiribati, William Alfonso Martínez Martínez, Inversiones Jaibu S.A.S, Cooperativa Agropecuaria De Galeras, Inversiones Jaibu S.A.S, Subastar S.A., Sixta Elena López Hernández, William Rodolfo Martínez Santamaria, Cementos Argos S.A. y/o Diana Yamile Ramírez Rocha, Jairo Emilio García Chávez , Plantamos S.A.S. y/o Álvaro Isaac Nader, Dutch Canna S.A.S. y/o Julieth Mariana Sánchez Ahumada, Luisa Fernanda Pérez Rodríguez',
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
            'activity_id' => 14982,
            'year' =>2,
            'value' => 0,
            'description' => 'Se contrató la revisión y evaluación del componente hidrogeológico de la fase de diagnostico del Plan de Manejo Ambiental del Acuífero de Betulia al documento técnico relacionado con: modelo hidrogeológico conceptual en los componentes geológico, geofísico, hidráulico, hidrológico (balance hídrico para estimar datos de recarga) hidroquimico y vulnerabilidad del acuífero Betulia',
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
            'activity_id' => 14983,
            'year' =>2,
            'value' => 10,
            'description' => 'Se realizaron 4 salidas a las 10 estaciones establecidas en la microcuenca del arroyo Grande de Corozal o de la sabana.',
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
            'activity_id' => 14985,
            'year' =>2,
            'value' => 0,
            'description' => 'CARSUCRE llevo a cabo convenio 007 de 22 de Diciembre de 2021 con la Corporacion para el Manejo Sostenible de los Bosques - MASBOSQUES, con el objetivo de aunar esfuerzos técnicos, administrativos y financieros para ejecutar y consolidar acciones que permitan identificar, caracterizar, bancarizar e incluir en la plataforma BanCO2 a familias seleccionadas, con el fin de implementar y fortalecer el esquema  BanCO2 en las areas de interes de Jurisdiccion de CARSUCRE. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Convenio 007 de 22 de Diciembre de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14986,
            'year' =>2,
            'value' => 0,
            'description' => 'Es importante aclarar que la fase de formulacion del POMCAS Directos caribes - Golfo de Morrosquillo se encuentra culminada satisfactoriamente, priorizando para este cuatrenio del Plan de Accion 2020 - 2024, la realización de consulta previa del Plan de Ordenación y Manejo de Cuenca (POMCA) y su adopción por acto administrativo.
        
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
            'activity_id' => 14988,
            'year' =>2,
            'value' => 0.1,
            'description' => 'En la vigencia 2021 se tenia programada la fase de aprestamiento con el fin de revisar la necesidad de ordenar la corriente del Arroyo Pechelín o no, dependiendo de la realidad que se encontrara en campo. No obstante, en el desarrollo del estudio preliminar que tenia como objetivo determinar la conveniencia, teniendo en cuenta el reparto actual, las necesidades de los predios que las utilizan y las de aquellos que puedan aprovecharlas, conforme a las orientaciones y/o lineamientos contemplados en el Decreto 1076 de 2015, los resultados determinaron que no existe la necesidad de ordenar la corriente del Arroyo Pechelin. Por ende, para esta vigencia no se comprometieron los recursos.',
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
            'activity_id' => 14989,
            'year' =>2,
            'value' => 0,
            'description' => 'CARSUCRE celebró contrato No. 301 de 27 de diciembre de 2021 por una duración de seis (6) meses con el objetivo de  Consultoría para la formulación de planes de manejo de humedales interiores en el marco del proyecto denominado: Formulación de planes de manejo y ordenación en cuencas hidrográficas',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 301 de 27 de diciembre de 2021 ',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14990,
            'year' =>2,
            'value' => 6,
            'description' => 'A través de contrato No. 0124 Del 24 de Marzo de 2021 con duración de nueve (9) meses, cuyo objeto fue  Consultoría para el acotamiento de las rondas hídricas del Arroyo Mancomoján y secundarios y de los Arroyos San Antonio, Pachoto, Verde, Membrillal y Villeros en la Jurisdicción de CARSUCRE, se surtieron satisfactoriamente cada una de las actividades del proyecto en mención, teniendo en cuenta las fases sugeridas por la Guía Técnica de Criterios para el acotamiento de las Rondas Hídricas en Colombia. 
        
        Desarrollando principalmente la caracterización desde el punto de vista socio cultural y fisico-biotico y posteriormente el establecimiento de medidas de manejo ambiental en las áreas homogéneas dentro del limite funcional de las ronda hídricas del arroyo Mancomojan y secundarios, y los arroyos San Antonio, Pachotó, Verde, Membrillal y Villeros en la Jurisdiccion de Carsucre, Sucre y escenario de aanálisis síntesis con la delimitación y acotamiento de las rondas hídricas para que se incorporen como determinantes ambientales en los pot municipales ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 0124 Del 24 de Marzo de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17176,
            'year' =>2,
            'value' => 0.0931,
            'description' => 'En el marco de los Acuerdos No.002 de 2013 y 002 de 2020, correspondientes a  la “Reglamentación del Fondo Regional de Inversión para la descontaminación Hídrica en Jurisdicción de Carsucre”, Carsucre gestionó a través del sistema de regalía en convenio con el municipio de Sincelejo proyecto denominado “Optimización del sistema de alcantarillado sanitario – Interceptor Villa Suiza en el Municipio de Sincelejo”.
        
        El valor total del proyecto es de $8.100.043.630, de los cuales CARSUCRE hizo cofinanciación según lo preceptuado en los acuerdos 002 de 2013 y 002 de 2020 por la suma de $1.458.007.853
        
        Actualmente se han desarrollado las siguientes actividades: 
        
        - localización, trazado y replanteo de los tramos establecidos en el proyecto. Para lo cual se utilizó equipos de nivel y estación total de topografía.
        - Excavaciones para redes de alcantarillado de los tramos MH87- MH88, MH88- MH99 y MH89- MH91 y excavaciones para manjoles en el barrio Villa Suiza. 
        - Entibado de las excavaciones, para asegurar las excavaciones de posibles derrumbes y salvaguardar la seguridad de los trabajadores.
        - Relleno de la cama de arena suelta para tuberías.
        - Relleno con el material del sitio, compactando con canguro, en capas de 20 cm para garantizar el 95% del Proctor Modificado, hasta el nivel existente de la calle.
        - Construcción de registro de inspección para acometidas
        - Instalación de tubería PVC alcantarillado 
        Entre otras actividades.',
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
            'activity_id' => 14991,
            'year' =>2,
            'value' => 100,
            'description' => '',
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
            'activity_id' => 14992,
            'year' =>2,
            'value' => 0,
            'description' => 'En la vigencia 2021, SIRAP Caribe no estuvo en operación debido a la situacion que atraviesa el Pais por ocasión del COVID - 19, razon por la cual no se comprometieron los recursos.',
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
            'activity_id' => 14993,
            'year' =>2,
            'value' => 0,
            'description' => 'CARSUCRE celebró contrato No. 300 de 24 de diciembre de 2021 por una duración de seis (6), cuyo objeto es Consultoría para desarrollar las fase de aprestamiento y declaratoria de un área protegida y apoyar una iniciativa de declaratoria, en el marco del proyecto : Consolidación del sistema de áreas protegidas en la jurisdicción de CARSUCRE',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 300 de 24 de diciembre de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14995,
            'year' =>2,
            'value' => 0,
            'description' => 'CARSUCRE celebró contrato No. 300 de 24 de diciembre de 2021 por una duración de seis (6), cuyo objeto es Consultoría para desarrollar las fase de aprestamiento y declaratoria de un área protegida y apoyar una iniciativa de declaratoria, en el marco del proyecto : Consolidación del sistema de áreas protegidas en la jurisdicción de CARSUCRE',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 300 de 24 de diciembre de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14996,
            'year' =>2,
            'value' => 3,
            'description' => 'Vigencia 2021: A través de contrato No. 0113 de 3 de marzo de 2021 cuyo objetivo es  Consultoría para el estudio y evaluación del estado de áreas degradadas en los Municipios de Corozal, los Palmitos y Sampues en Jurisdiccion de la Corporación Autónoma Regional de Sucre – CARSUCRE  presenta los siguientes avances: se surtieron satisfactoriamente las fases de zonificación y evaluación desarrollando primeramente la etapa de planeación con la  elaboración preliminar de las representaciones espaciales de los diferentes grados de erosión y sus rasgos más sobresalientes sobre el terreno que consistió en el procesamiento digital e interpretación de sensores remotos y elaboración preliminar del mapa de erosión posteriormente se culminó la etapa de campo con la verificación de información del mapa preliminar elaborado por medio de imágenes de sensores remotos, captura de datos de mediciones tomadas en terreno y toma de muestras de suelo donde se  llevaron a cabo salidas de campo con el reconocimiento del sitio y recorrido de las zonas más afectadas al interior de los sitios de interés, así mismo, se realizó el muestreo de suelos y se analizó a través de laboratorio de suelo. Finalmente con la información recolectada en las salidas de campo y recopilación de información primaria y secundaria, se obtuvieron el estado de las áreas degradadas seleccionada y los mapas de suelos de perdida de suelo  y mapas de suelos desnudos que corresponden a áreas degradadas de los de los Municipios de Corozal, Los Palmitos y Sampues',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 0113 de 3 de marzo de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14996,
            'year' =>2,
            'value' => 3,
            'description' => 'Vigencia 2020: A través contrato No. 230 de 4 de Diciembre de 2020 por una duración de cuatro(4) meses, cuyo objeto fue Consultoría para el estudio y evaluación del estado de las áreas degradadas en los municipios de Galeras, el Roble y San Juan de Betulia en la Jurisdicción de la Corporación Autónoma Regional de Sucre – Carsucre. se surtieron satisfactoriamente las fases de zonificación y evaluación desarrollando primeramente el procesamiento digital e interpretación de sensores remotos y elaboración preliminar del mapa de erosión posteriormente se llevaron a cabo salidas de campo con el reconocimiento del sitio y recorrido de las zonas más afectadas al interior de los sitios de interés, así mismo, se realizó el muestreo de suelos y se analizó a través de laboratorio de suelo. Finalmente con la información recolectada en las salidas de campo y recopilación de información primaria y secundaria, se obtuvieron mapas de suelos desnudos que corresponden a áreas degradadas de los Municipios Galeras, Betulia y el Roble.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 230 de 4 de Diciembre de 2020',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14997,
            'year' =>2,
            'value' => 70,
            'description' => 'En la vigencia 2021, se realizó el aislamiento y establecimiento  de 70 hectáreas de plantaciones forestales.  Labor que se llevó a cabo en los siguientes municipios:
        
        Municipio             Establecimiento 2021 (Ha)
        San Onofre                     46
        Corozal                           14,7
        Ovejas                            8,5
        Coloso                             0,8
        Total                                70 Ha',
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
            'activity_id' => 14998,
            'year' =>2,
            'value' => 284,
            'description' => 'En la vigencia 2021, se realizó el mantenimiento a 254 hectáreas de plantación forestal protectora , distribuidas de la siguiente manera:
        
        Municipio              Mantenimiento  2021             
        Sincelejo                          (30 ha)                           
        San Onofre                      (76 ha)                          
        Sincé                                (20 ha)                            
        Colosó                              (16 ha)                            
        El Roble                            (60 ha)                           
        Morroa                              (29 ha)                            
        Ovejas                               (23 ha)                           
        TOTAL                               (254 ha)                          
        
        Asi mismo, se realizo el mantenimiento de las 30 ha establecidas en la vigencia 2019 en el municipio de San Onofre, para un total de 284 ha mantenidas.',
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
            'activity_id' => 14999,
            'year' =>2,
            'value' => 360,
            'description' => '
        Se realizó el aprestamiento y levantamiento de información de los actores a ser capacitados en el marco del proyecto.
        
        Se realizó el diseño y reproducción de 2.200 plegables con información del proyecto, como ayuda para las labores de socialización del mismo entre los beneficiarios e interesados. 
        
        Finalmente, se desarrollaron las actividades de sensibilización y capacitación a  360 personas beneficiarios del proyecto, en las siguientes temáticas: 
        • Importancia de la restauración de bosques para la conservación del agua, el suelo y la fauna silvestre
        • Beneficios del proyecto: Sociales, Ambientales y Económicos.
        • Sostenibilidad del proyecto.
        
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
            'activity_id' => 15001,
            'year' =>2,
            'value' => 1,
            'description' => 'CARSUCRE en la vigencia 2021, como medidas de manejo para la conservación de especies implementó campaña de sensibilización para los conductores viales,  el cual tenía como objetivo ilustrar los efectos generados por las carreteras en los ecosistemas naturales en sus zonas de influencia (Jurisdicción CARSUCRE), recolectar datos de atropellamiento de fauna mediante muestreos sistemáticos y eventuales, visibilizar las estrategias que pueden ser implementadas para evitar y mitigar los impactos generados por las infraestructuras viales, identificar puntos calientes (Hotpoin) de atropellamiento de fauna en las vías de la jurisdicción, sensibilizar, educar y orientar a las personas acerca de los impactos causados a los ecosistemas por el fenómeno de atropellamiento de fauna, formular recomendaciones para todos los actores viales, entre otros.
        
        Finalmente, se pudo recolectar la información de atropellamiento de fauna silvestre con 171 especímenes los cuales se puede evidenciar que la especie más atropellada es Didelphis marsupialis (zorra chucha) con 42 especies, de segundo se evidenció la especie Iguana iguana (Iguana) con 16 y de tercero, el Cerdocyon thous (Zorro perro) con 12 especies. Para un total de 37 especies encontradas (atropelladas)
        ',
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
            'activity_id' => 17177,
            'year' =>2,
            'value' => 96,
            'description' => 'La gestión histórica de recursos para el desarrollo de proyectos de inversión por parte de la Corporación ante los diferentes fondos ambientales (FCA Y FONAM) ha ido creciendo  positivamente con el transcurrir de los años, especialmente en los últimos cuatros años. Por ello, la gestión significativa de la Corporación se vera reflejada en la presente vigencia (2021), toda vez que a través de resolución 0834 de 2021 le fueron asignados recursos para la ejecución del presente proyecto.
        
        Por ende, CARSUCRE celebró contrato no. 0282 de 22 de octubre de 2021 por una duración de cinco meses, cuyo objeto es Establecimiento, aislamiento y mantenimiento de 383 hectáreas de plantación forestal protectora para generación de coberturas boscosas en los municipios de Corozal, San Juan de Betulia, el Roble (Subregión Sabanas), Coloso, Chalan, Morroa, Ovejas y Sincelejo (Subregión Montes de Maria) y San Onofre (Subregión Golfo de Morrosquillo), articulado con 54 talleres de capacitación a comunidades y la construccion de 7 viveros comunitarios, en el marco del proyecto : Restauración activa de áreas de influencia de las microcuencas priorizadas en jurisdicción de Carsucre.  A corte 31 de Diciembre de 2021, presenta loas siguientes avances: Aislamiento de las 383 hectareas de plantaciones y adquisiciones de herramientas, insumos, labores de contratación de personal y aprestamiento.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato no. 0282 de 22 de octubre de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17178,
            'year' =>2,
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
            'activity_id' => 17179,
            'year' =>2,
            'value' => 0,
            'description' => 'La gestión histórica de recursos para el desarrollo de proyectos de inversión por parte de la Corporación ante los diferentes fondos ambientales (FCA Y FONAM) ha ido creciendo  positivamente con el transcurrir de los años, especialmente en los últimos cuatros años. Por ello, la gestión significativa de la Corporación se vera reflejada en la presente vigencia (2021), toda vez que a través de acuerdo 0013 de 4 de Octubre de 2021 le fueron asignados recursos para la ejecución del presente proyecto.
        
        Por ende, CARSUCRE celebró contrato no. 0293 de 14 de diciembre de 2021 por una duración de cinco meses, cuyo objeto es Establecimiento, aislamiento y mantenimiento de 1150 hectáreas de plantación forestal protectora para generación de cobertura vegetal boscosa en los municipios de el Roble, Buenavista, Corozal y San Pedro (Subregión Sabanas), Coloso, Chalan, Morroa y Sincelejo (Subregión Montes de Maria), San Onofre y Toluviejo (Subregión Golfo de Morrosquillo) articulado con 78 talleres de capacitación a comunidades en el marco del proyecto: Restauración de la cobertura vegetal en ecosistemas boscosos deforestados en jurisdicción de CARSUCRE. Así mismo, llevo a cabo contrato de interventoría con no. 0294 de 14 de diciembre de 2021 del proyecto en mención. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato no. 0293 de 14 de diciembre de 2021.',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17180,
            'year' =>2,
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
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17181,
            'year' =>2,
            'value' => 0,
            'description' => 'La gestión histórica de recursos para el desarrollo de proyectos de inversión por parte de la Corporación ante los diferentes fondos ambientales (FCA Y FONAM) ha ido creciendo  positivamente con el transcurrir de los años, especialmente en los últimos cuatros años. Por ello, la gestión significativa de la Corporación se vera reflejada en la presente vigencia (2021), toda vez que a través de acuerdo 0014 de 4 de Octubre de 2021 le fueron asignados recursos para la ejecución del presente proyecto.
        
        Por ende, CARSUCRE celebró contrato no. 0292 de 7 de Diciembre de 2021 por una duración de cinco meses, cuyo objeto es Establecimiento, aislamiento y mantenimiento de 600 hectáreas de plantación forestal protectora para generación de cobertura vegetal boscosas en los municipios de Tolu, Toluviejo y San Onofre, articulado con 27 talleres de capacitación a comunidades, en el marco del proyecto: Restauración de ecosistemas boscosos en áreas priorizadas de la subregión Golfo de Morrosquillo en Jurisdiccion de Carsucre.  Así mismo, llevo a cabo contrato de interventoría no. 0290 de 6 de Diciembre de  2021 del proyecto en mención. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato no. 0292 de 7 de Diciembre de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17182,
            'year' =>2,
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
            'activity_id' => 17183,
            'year' =>2,
            'value' => 1,
            'description' => 'La gestión histórica de recursos para el desarrollo de proyectos de inversión por parte de la Corporación ante los diferentes fondos ambientales (FCA Y FONAM) ha ido creciendo  positivamente con el transcurrir de los años, especialmente en los últimos cuatros años. Por ello, la gestión significativa de la Corporación se vera reflejada en la presente vigencia (2021), toda vez que a través de acuerdo 0018 de 27 de Octubre de 2021 le fueron asignados recursos para la ejecución del presente proyecto.
        
        Por ende, CARSUCRE celebró contrato no. 0299 de 24 de Diciembre de 2021 por una duración de dos meses, cuyo objeto es Aislamiento de 580 hectáreas en los municipios de Buenavista, Corozal, Galeras, Los Palmitos, Sampues, Sincé, Betulia y San Pedro, y el suministro de insumos para labores de restauración, en el marco del proyecto: Restauración de ecosistemas boscosos en la subregión Sabanas jurisdicción de Carsucre. Así mismo, llevo a cabo contrato de interventoría no. 0296 de 23 de Diciembre de  2021 del proyecto en mención. ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato no. 0299 de 24 de Diciembre de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17186,
            'year' =>2,
            'value' => 0,
            'description' => 'La gestión histórica de recursos para el desarrollo de proyectos de inversión por parte de la Corporación ante los diferentes fondos ambientales (FCA Y FONAM) ha ido creciendo  positivamente con el transcurrir de los años, especialmente en los últimos cuatros años. Por ello, la gestión significativa de la Corporación se vera reflejada en la presente vigencia (2021), toda vez que a través de acuerdo 0020 de 27 de Octubre de 2021 le fueron asignados recursos para la ejecución del presente proyecto.
        
        Por ende, CARSUCRE celebró contrato no. 0298 de 23 de Diciembre de 2021 por una duración de ocho meses, cuyo objeto es Establecimiento, aislamiento y mantenimiento de 400 hectáreas de plantación forestal protectora para restauración de cobertura vegetal boscosa en los municipios PDET (San Onofre, San Antonio de Palmito, Toluviejo, Ovejas, Morroa, Chalan, Coloso y Los Palmitos) de los montes de maría, articulado con 40 talleres de capacitación a comunidades en el marco del proyecto: Restauración bosques en municipios PDET de los Montes de Maria, jurisdicción de CARSUCRE.  Así mismo, llevo a cabo contrato de interventoría técnica, administrativa y financiera no. 0295 de 23 de Diciembre de  2021 del proyecto en mención. 
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato no. 0298 de 23 de Diciembre de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17187,
            'year' =>2,
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
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15003,
            'year' =>2,
            'value' => 9,
            'description' => 'Se realizó en la vigencia 2021 visitas de verificación a nueve (9) negocios verdes, los cuales fueron: 1). Cítricos del Mango, Sampués; 2). AGROAMBIENTE, San Juan de Betulia; 3). Sabana Green S.A.S., Sincelejo; 4). Miel Caña, Colosó; 5). AGROECA, Sampués; 6). WEN Frutas Naturales, Sampués; 7). SUARTE, Sincelejo; 8). Lombriabono El Refugio, Corozal y 9). Bataticafit, Sampués
        
        Por otro lado, la Ventanilla de Negocios Verdes de CARSUCRE trabajó en la conformación de la Base de Datos de los quince (15) negocios verificados por el Programa de Generación de Negocios Verdes del Convenio suscrito por el MADS con el apoyo presupuestario de la Unión Europea, en la cual nos correspondió la tarea de realizar las visitas de campo, diligenciar la inscripción, clasificar el negocio e identificar el impacto ambiental positivo del proyecto, entre otras cosas. 
        
        Adicionalmente, en la promoción de los negocios verdes se resalta la participación de la Ventanilla de CARSUCRE en la Novena Versión de BIOEXPO Colombia 2021, realizada en el Jardín Botánico de la ciudad de Medellín, con seis (6) empresarios de negocios verdes: 1). OP Beer Company; 2). CHOCOSTA S.A.S.; 3). Vinos Frutos de la Sabana; 4). Dutch Canna y, 5). Apiarios de la Sabana. El Programa de Generación de Negocios Verdes del MADS apoyó al negocio verde Reserva Natural de la Sociedad Civil SANGUARÉ en ecoturismo para asistir a BIOEXPO.
        
        Por ultimo, y no menos importante de cierre de año realizado por la Ventanilla de Negocios Verdes de CARSUCRE, se destaca el acto de entrega de Avales de Confianza a 19 negocios verdes que cumplían con los requisitos mínimos exigidos por el MADS. ',
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
            'activity_id' => 15004,
            'year' =>2,
            'value' => 16,
            'description' => 'Durante el año 2021, la Ventanilla realizó Dieciséis (16) acciones orientadas a la identificación, verificación, capacitación, promoción y fortalecimiento de los negocios verdes en la jurisdicción de CARSUCRE con actores públicos y privados',
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
            'activity_id' => 15005,
            'year' =>2,
            'value' => 0.5,
            'description' => 'CARSUCRE llevo a cabo convenio no. 003 de 1 de Octubre de 2021 con la Fundación para el Desarrollo Productivo y Ecosostenible del Caribe - FUNDEPROECA, con el objetivo de aunar esfuerzos técnicos, administrativos y financieros para la implementación técnicas de producción mas limpia en cultivos de hortalizas de hojas, bajo el modelo de hidroponia NFT en Jurisdiccion de CARSUCRE, avanzando en la instalación de estructuras de invernadero para producción de cultivos hidropónicos de hoja ancha (lechuga crespa).',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Convenio no. 003 de 1 de Octubre de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15006,
            'year' =>2,
            'value' => 100,
            'description' => 'Se hizo seguimiento a los 19 municipios de la Jurisdiccion de CARSUCRE en relación a los Planes de Gestion Integral de Residuos Solidos (PGIRS) de manera presencial. Para los seguimientos se utilizó la siguiente metodología: 
        - Se estableció contactando telefónico con la persona encargada por parte de los Municipios 
        - Se definió fecha para realizar la visita a cada municipio, esto con el objeto que se atendiera la visita por la persona encargada del tema en cada municipio
        - Por ultimo, se realizaron las reuniones en los 19 municipios',
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
            'activity_id' => 15007,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizó capacitación al municipo de Sincelejo donde se prestó apoyo técnico en el tema de reciclaje especificamente a la empresa CORECINORTE, donde se desarrollaron diferentes tematicas entre ellas clasificacion de residuos, codigos de colores y tasa de reciclaje con el objetivo de contribuir al ciudado del medio ambiente',
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
            'activity_id' => 15008,
            'year' =>2,
            'value' => 86,
            'description' => 'Durante es vigencia 2021 se conceptuó, evaluó y se viabilizó Planes de Seguimiento y Manejo de Vertimiento a 12 municipios de la Jurisdicción: Coloso, el Roble, Galeras, Chalan, Sincelejo, Corozal, Ovejas, San Pedro, Buenavista, Sincé, San Antonio de Palmito y Sampues. 
        Es importante tener en cuenta que tan solo 14 Municipios tiene viabilizado sus Planes de Seguimiento y Manejo de Vertimiento, PSMV
        
        De igual manera se realizaron seguimiento a los planes de manejo de vertimientos de los municipios de Coloso y el Roble. Adicionalmente se realizaron 15  por infracción asociados a PSMV.',
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
            'activity_id' => 15009,
            'year' =>2,
            'value' => 0,
            'description' => 'Carsucre celebró consultoría para realizar estudio de monitoreo de la calidad del aire (PM2,5 - PM10) en el marco del proyecto Gestion Ambiental Urbana en la Jurisdiccion de Carsucre cuyo objetivo general es realizar nuevos registros para estudios de calidad de aire (PM2,5 Y PM10) con el fin de medir las concentraciones de material particulado en suspensión en la zona urbana del municipio de Sincelejo y comparar sus resultados con las normas de inmisión establecidas para Colombia ',
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
            'activity_id' => 15010,
            'year' =>2,
            'value' => 0,
            'description' => 'No se comprometieron recursos',
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
            'activity_id' => 15011,
            'year' =>2,
            'value' => 1,
            'description' => 'A través de Contrato No. 032 de 2020, cuyo objeto es Elaboración del inventario de los elementos naturales forestales de algunos parques del espacio público en el Municipio de Sincelejo, Jurisdicción de Carsucre, con la finalidad de realizar el levantamiento forestal de algunos parques del espacio público de Sincelejo: llevándose a cabo: 
        
        - Identificación de las especies forestales nativas e introducidas presentes cuyo DAP sea mayor a 2,5 cm, de igual manera, se determinó familia botánica, genero, especie y nombres vernáculos locales. 
        - Se realizó las medidas dasometricas de las especies forestales
        - Geoposicionamiento por medio de GPS las coordenadas de cada uno de las distintas especies forestales.
        - Se realizó el diagnóstico del estado de salud de los elementos forestales tales como: enrollamiento de hojas, deficiencia nutricional, manchas foliares, perforaciones de hojas, minadura de hojas, secamiento, pudriciones, perforaciones de tallo, plantas parásitas, agallas de tallo, presencia de epífitas
        - Entre otras actividades.
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato No. 032 de 2020',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15012,
            'year' =>2,
            'value' => 0,
            'description' => 'No se comprometieron recursos',
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
            'activity_id' => 15013,
            'year' =>2,
            'value' => 34,
            'description' => 'En la vigencia 2021 se  han realizado 32 inscripciones en el aplicativo registro de generadores de residuos o desechos peligrosos.
        En el inventario PCB se realizaron dos inscripción, por lo tanto, en total se encuentran 34 usuarios inscritos.',
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
            'activity_id' => 15014,
            'year' =>2,
            'value' => 1,
            'description' => 'Se han desarrollado las siguientes actividades para la implementación del Plan de gestión integral de residuos o desechos peligrosos:
        
        *Fomentar el desarrollo de actividades de seguimiento para establecer verdaderas fuentes generadoras de RESPEL: Se realizaron visitas a las entidades prestadoras del servicio de salud y establecimientos generadores de residuos o desechos peligrosos en los municipios de la jurisdicción, con el objetivo de verificar la gestión ambiental realizada. 
        
        *Estudios de la trazabilidad en la cuantificación de la generación de residuos peligrosos en la jurisdicción: Analizando la información reportada por los usuarios en el Registro De Generadores De Residuos O Desechos Peligrosos se obtuvo que la línea de residuos peligrosos con mayor generación fue Desechos clínicos BIOSANITARIOS resultantes de la atención en salud en Hospitales.
        
        *Identificar la presencia de sustancias nocivas en los recursos naturales de la jurisdicción: Se han realizado 22 evaluaciones y seguimientos a los planes de contingencia para el manejo de derrames de las empresas que exploren, exploten, manufacturen, refinen, transformen, procesen, transporten o almacenen hidrocarburos o sustancias nocivas para la salud y para los recursos hidrobiológicos.
        
        *Fortalecer los procesos de capacitación, educación e investigación: Se han desarrollaron 2 capacitaciones la primera se realizó mediante la plataforma ZOOM, la cual se trataron temas sobre el manejo ambientalmente racional de los aceites lubricantes usados, residuos biológicos infecciosos, entre otros.
        
        *Generación y provisión de información al público sobre gestión y manejo de RESPEL: CARSUCRE tiene a disposición del público la información actualizada sobre los gestores licenciados y autorizados a través de la página web y a través del Registro de generadores de RESPEL cuyo vínculo es de libre acceso para la ciudadanía.
        
        Entre otros, que se detallan el  documento de Word de avance del PAI 
        
        *Suscripción de acuerdos o convenios sectoriales y de planes de trabajo, para la reducción y el aprovechamiento o valorización de RESPEL de interés: Las acciones implementadas por el COTSA orientadas al fortalecimiento de la gestión integral de RESPEL de riesgo biológico infeccioso, plaguicidas, asbesto y demás. ha sido, mediante circular N° 002 emitida por CARSUCRE.
        *',
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
            'activity_id' => 15015,
            'year' =>2,
            'value' => 3,
            'description' => 'En las tres redes de control y vigilancia intervenidos se establecieron 9 puestos de control y vigilancia de flora, realizados los días  25  de Febrero de 2021; 03, 09, 16, 18, 23, 25 de Marzo  de 2021 y  01 y 02 de Abril de 2021 en los siguientes sectores: : 1. Galeras - Puerto Franco 2. San Onofre 3. Sampues 4. Bongo - Los Palmitos 5. El Roble - las Tablitas 6. Betulia - Albania 7. Sincé - Galeras 8. Corozal - Mercado Publico 9. Sincelejo - Mercado Publico',
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
            'activity_id' => 15016,
            'year' =>2,
            'value' => 491,
            'description' => ' Durante  la vigencia 2021, se realizaron 491 movimientos reportados en el Sistema Nacional de Información Forestal – SNIF, discriminados así: 
        - 393 reportes de aprovechamiento forestal
        - 95 reportes de movilizacion 
        - 3 decomisos',
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
            'activity_id' => 15017,
            'year' =>2,
            'value' => 20,
            'description' => 'En la vigencia 2021 se logró visitar y supervisar 20 establecimientos comercializadores de madera para verificación de inventario forestal y entrega del libro de operaciones, que se describen a continuación: Maderas la Mona, Moldaduras y Maderas Guayacán, Servicios Integrales Ferromaderas el Bosque, Ebanistería Alían, Maderas Bolemo, Maderas el Triunfo MC, Maderas del Cauca A, Maderas el Progreso, Ferromateriales y Figurados Nicol, Ferromaderas el Bosque, Distribuidora de Maderas y Laminas Sincelejo, Maderas y Muebles de Bendición de Dios, Maderas el Árbol, Maderas González, Maderas la Bucaramanga, Maderas la Trinidad, Maderas RyR, Ebanisteria Alian Bodega Principal, Maderas Renacer GyM, Maderas El Almendro GyA',
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
            'activity_id' => 15018,
            'year' =>2,
            'value' => 92,
            'description' => 'En cumplimiento de las actividades a desarrollar en el control ilegal del tráfico de fauna silvestre durante la vigencia 2021 se realizaron decomiso-incautación-recuperación-rescate y entregas voluntarias de 92 especies con la recepción de 776 individuos, relacionados así:
        
        -66 especies de aves con el decomiso 367 individuos, de las cuales 207 fueron liberadas, 26 aves incineradas y 134 aves entregadas, reubicados o liberadas en los sitios: estación Primatologica, la corocera, represa argos, tolú, mata de caña, Sincelejo.
        -15 especies de mamíferos con el decomiso de 76 mamíferos, de los cuales 40 fueron liberados, 19 incinerados, 14 entregados y 3 en custodia, reubicados o liberados en los sitios: mata de caña, represa argos, san Onofre, la corocera, estación Primatologica, boca de la ciénaga, galeras, Sincelejo. Igualmente se realizó el decomiso del subproducto de 11 pisingos.
        -11 especies de reptiles con el decomiso de 333 reptiles, de los cuales 172 fueron liberados, 32 incinerados y 1 individuos entregados, reubicados o liberados en los sitios: represa argos, mata de caña, estación Primatologica, coloso, la corocera y un subproducto 1.797 huevos de iguana,  10 kilos de babilla, 7 piezas de tortuga carey
        ',
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
            'activity_id' => 15019,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizaron visitas aleatorias en varios viveros de los municipios de: Sincelejo, Corozal, Sampués y Toluviejo, con el fin sensibilizar e inspeccionar sobre la presencia de caracol africano (Achatina fulica). 
        
        • En el municipio de Sincelejo – sucre se han realizado actividades de capacitación e inspección técnico ocular en los viveros PATIO BONITO con las coordenadas 9º 18 07,6 N - O75º 22 52,5 O. El vivero LAS PALMAS con las coordenadas  9º 18 59,6 N - 075º 24 59 O. Los viveros visitados se encuentran en los límites del perímetro urbano de Sincelejo. 
        
        • En el municipio de Sampués – sucre  se realizó la visita en el vivero LA SEMILLA, ubicado en el área de piedras blancas salida hacia Chinú – córdoba. 
        • En el municipio de corozal – sucre se hizo la visita de los viveros  MATERA LA 40; vivero campestre MIS TRES GIRASOLES; Vivero ARXE, ubicados en la vías que conduce hacia el municipio de los palmitos – sucre, ubicados cerca del aeropuerto las brujas de corozal.
        • En el Municipio de Toluviejo – sucre se procedió a visitar el vivero LA ORQUIDEA  ubicado en inmediación  del peaje de Toluviejo. 
        
        La metodología que se realizó en las visitas de estos viveros, fue consultar con los propietarios o administradores sobre si conocían el caracol africano (Achatina fulica), después se procedió a brindarle una charla sobre las consecuencias sanitarias si se tenía presencia del caracol africano (Achatina fulica) en sus viveros, y por último se realiza una inspección técnico ocular en todas plantas del vivero para verificar si tenían presencia del caracol africano (Achatina fulica).
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
            'activity_id' => 15020,
            'year' =>2,
            'value' => 125000,
            'description' => 'Producción de 125.000 plántulas, de las cuales 100.000 plántulas corresponden a maderables y/u ornamentales y los 25.000 restantes a plántulas frutales.',
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
            'activity_id' => 15021,
            'year' =>2,
            'value' => 1,
            'description' => 'Se contrataron los servicios de dos (2) operarios para mantener la funcionalidad del Centro de Atención y Valoración de Flora (CAVF) Matecaña',
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
            'activity_id' => 15022,
            'year' =>2,
            'value' => 72,
            'description' => 'Durante  la vigencia 2021 se realizaron 196 seguimientos, a los siguientes instrumentos: Licencias Ambiental, Concesiones de Agua, Permiso de Vertimientos, Aprovechamiento Forestal, y emisiones atmosféricas. Llevándose a cabo los siguientes seguimientos:
        36 seguimientos a Licencias Ambientales
        21 Seguimientos a aprovechamiento forestal
        109 Seguimientos a concesiones de Agua 
        26 Seguimiento a permiso de vertimientos
        4 seguimientos a emisiones atmosféricas
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
            'activity_id' => 15023,
            'year' =>2,
            'value' => 87,
            'description' => 'Durante la vigencia 2021 lo que respecta a los tiempos de autorizaciones ambientales como son Licencias ambientales, concesiones de agua, permiso de vertimientos, aprovechamiento forestal y emisiones atmosférica, la Corporación presenta un tiempo promedio del 87% con respecto a la meta fijada en la norma por cada autorización ambiental.',
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
            'activity_id' => 15024,
            'year' =>2,
            'value' => 57,
            'description' => 'Durante  la vigencia 2021 , se aperturaron: 127 procesos sancionatorios mas los activos en la Corporación ascienden en total a 289 expedientes que cuentan con iniciación ; 12 actos administrativos de determinación de responsabilidad de la Carsucre, y en la vigencia 2021 cerraron 153 procesos sancionatorio',
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
            'activity_id' => 15025,
            'year' =>2,
            'value' => 61,
            'description' => 'En la vigencia 2021 se procesaron 61 expedientes entre Licencias Ambientales, Infracciones , Planes de Manejo Ambiental - PMA, entre otros, en el marco del proceso la mayoría fueron atendidos con visitas de inspección técnica, informes de seguimiento y/o conceptos técnicos, como se detalla a continuación algunos:
        1. Expediente No. 851 de septiembre 14 de 2006 (Licencia Ambiental): Se proyecta oficio con fecha de 26 de febrero de 2021 para que se establezca el manejo interno por parte del componente jurídico a los requerimientos que allí se establecen.
        2. Expediente No. 0887 de febrero 4 de 2010 (Licencia Ambiental): Se proyecta oficio con fecha de 26 de febrero de 2021, para que se establezca el manejo a impartir sobre cada uno de los requerimientos.
        3.  Expediente No. 312 de noviembre 20 de 1997 (Licencia Ambiental): Se realiza Concepto Técnico con fecha de 28 de junio de 2021
        4. Expediente No. 130 de junio 12 de 1996 (Plan de Manejo Ambiental): Se realiza Informe de Seguimiento Ambiental No. 0087 con fecha de 29 de junio de 2021
        5. Expediente No. 877 de abril 17 de 2009 (Licencia Ambiental): Se realiza Informe de Seguimiento Ambiental No. 0089 con fecha de 28 de junio de 2021.
        Entre otros.',
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
            'activity_id' => 15026,
            'year' =>2,
            'value' => 1,
            'description' => 'En la Secretaría General de la Corporación Autónoma regional de Sucre se realizaron actuaciones judiciales dentro de los medios de control: Nulidad y Restablecimiento del Derecho, Reparación Directa, Ejecutivos, Acciones de tutelas, Acciones Populares, Acciones de Grupo, Acciones de Restitución de Tierras  y Acciones de expropiación donde CARSUCRE actuó como intervinientes, dentro de las cuales se presentaron memoriales a los juzgados, se impulsaron su cumplimiento administrativamente y se presentaron los recursos de Ley en aquellas decisiones judiciales que no le fueron favorables.',
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
            'activity_id' => 15028,
            'year' =>2,
            'value' => 5,
            'description' => 'Dentro del proceso de fortalecimiento administrativo se llevaron a cabo las a siguientes actividades:
        
        * Cargue de información a la plataforma CHIP 
        * Facturación y actualización de carteras ( Tua , tasa retributiva y predial).
        * cargue de información en el Sistema de Rendición Electrónica de la Cuenta e Informes (SIRECI-Contraloría)
        * Implementación del Sistema de Gestión Integral - HSEQ
        * Atención a la Gestión Documental',
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
            'activity_id' => 15029,
            'year' =>2,
            'value' => 0,
            'description' => 'No se comprometieron recursos',
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
            'activity_id' => 15030,
            'year' =>2,
            'value' => 4,
            'description' => 'Durante la vigencia 2021 se llevo a cabo:  
        
        - Revisión y optimización de las redes locales, tanto en datos compartidos entre las dependencias que así lo requirieron, como el acceso y conexión a la red que actualmente se encuentran en Carsucre. 
        
        - Se dio cumplimiento a la optimización y actualización, tanto de la base de datos de la web de Carsucre, como toda la información que allí se encuentra alojada, haciendo un protocolo de seguridad de un Backup por semana, asegurando así la información que se alojó en la vigencia del primer periodo 2021 .
        
        - Soporte a todos los equipos de cómputo que necesitaban de alguna configuración o falla de hardware, y se optimizaron de forma idónea para el buen funcionamiento y uso de los equipos.
        
        - Mantenimiento de las redes locales y servidores de la Corporación correctivos y preventivos',
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
            'activity_id' => 15031,
            'year' =>2,
            'value' => 19,
            'description' => 'Durante la vigencia 2021 se realizaron las siguientes actividades: 
        
        - Envío de Comunicaciones para conocer el estado del los POTS y las gestiones adelantadas por los entes territoriales en los ajuste a sus instrumentos de Planificación de los 19 municipios de la Jurisdicción de CARSUCRE.
        - Revisión documental para concertación de asuntos ambientales en la revisión y ajuste por vencimiento de términos de los POTs de los municipios de Corozal, Sincé, Sampues, San Antonio de Palmito, Ovejas, San Onofre y el Roble.
        - Revisión del cumplimiento de los asuntos exclusivamente ambientales concertado en los instrumentos de ordenamiento de los municipios de Sincelejo, Morroa y Toluviejo en relación a la expedición de licencias de parcelación de vivienda campestre.
        - Revisión de documento presentando de los planes parciales ubicado en el municipio de Tolu
        - Acompañamiento en la formulación de la UPR de Chocó del municipio de Sincelejo.
        - Acompañamiento técnico a los 19 municipios de la Corporación con la realización de taller de Asuntos Ambientales para la Concertación de Instrumentos de Ordenamiento Territorial  dirigida por CARSUCRE, contando con la participación del Ministerio de Ambiente y Desarrollo Sostenible y la Procuraduría Ambiental y Agraria de Sucre.
        ',
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
            'activity_id' => 15032,
            'year' =>2,
            'value' => 26,
            'description' => 'En el Banco de proyectos de la Corporación (BPC) de CARSUCRE se llevaron a cabo: 
        - Un proyecto formulados para la vigencia 2021 por FCA el cual se encuentra a espera de Resolución por parte del MADS para su ejecución .
        - 5 proyectos formulados para vigencia 2021 por FONAM, de los cuales uno se encuentra a espera de la resolución para su ejecución, dos están en proceso de viabilidad por parte del DNP, uno esta en viabilidad por parte del MADS y el ultimo en revisión por parte del MADS.
        - 3 proyectos formulados para vigencia 2022 por FCA, de los cuales uno tiene concepto de viabilidad favorable y en proceso de viablidad.
        - Un proyecto formulado para vigencia 2022 por PGN y se encuentra en proceso de revisión.
        - Y por ultimo, 16 proyectos corporativos financiados con recursos propios de la Corporación ',
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
            'activity_id' => 15033,
            'year' =>2,
            'value' => 76,
            'description' => 'El avance de este indicador corresponde al diligenciamiento de nueva metodología de matriz del Índice de Evaluación del Desempeño Institucional –  IEDI, con reporte de información correspondiente a la vigencia 2020. Obteniendo un Índice de Evaluación de Desempeño Institucional del 76,29%',
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
            'activity_id' => 15035,
            'year' =>2,
            'value' => 60,
            'description' => 'CARSUCRE en la vigencia 2021, fortaleció el sistema de información ambiental y territorial con la adquisición del Software GEOAMBIENTAL. ARSUCRE, el cual esta articulado con mesas de trabajo para su implementacion. por ende, llevo a cabo contrato 302 DE 28 DE Diciembre de 2021 con la empresa SIGMA INGENIERIA por una duración de siete (7) meses, cuyo objetivo Implementación y soporte de un software para la gestión de información de la oferta y demanda territorial en la jurisdicción de CARSUCRE denominado GEOAMBIENTAL',
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
            'activity_id' => 15037,
            'year' =>2,
            'value' => 2,
            'description' => 'Vigencia 2020: A través de contrato No. 0231 el 9 de Diciembre de 2020 cuyo objeto es Consultoría para apoyar la gestión del riesgo de inundación, movimientos en masa y erosión en los municipios de Morroa y San Juan de Betulia en el marco del Proyecto: Apoyo a la Planeación, Seguimiento y Evaluación de la Gestión del Ordenamiento Territorial y Ambiental  se realizaron  trabajos de Campo para identificar los eventos de  Inundaciones,  movimientos en masa y erosion, se realizo el muestreo de suelo, sobrevuelos de Drone y así mismo, se elaboraron los mapas por inundación, erosión y remoción en masa por municipios. Por otro lado, se realizaron talleres con las comunidades y los entes territoriales, finalizando con los talleres de validación de información con las comunidades y los talleres de socialización final de resultados para dar por finalizado el proyecto.',
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
            'activity_id' => 15038,
            'year' =>2,
            'value' => 5,
            'description' => 'Durante la vigencia 2021 se realizo la evaluación del componente de riesgo principalmente en el análisis de amenaza por inundación y movimiento de masa en el componente urbano y rural de los Municipios de San Onofre, San Antonio de Palmito, Los Palmitos, Ovejas, Corozal',
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
            'activity_id' => 15039,
            'year' =>2,
            'value' => 6,
            'description' => 'Durante la vigencia 2021, en materia de las acciones de Educación Ambiental se han realizado: 
        
        *CIDEA: 6 Procesos
        Acompañamiento a la elaboración de los planes de acción de CIDEAM de los municipios de:                                               Morroa, Colosó, Chalán y San Pedro, donde se han realizados sesiones de asesoría y formación en temas relacionados con la contextualización y priorización de temas ambientales, georreferenciación y análisis de la problemática y síntesis de las degradaciones a través de juego de roles o mapa de actores. Así mismo, se les ha brindado asesoría en la construcción de sus decretos y reglamento.
        
        *PROCEDA: 7 Procesos
        Se Acompaño al municipio de Buenavista en el desarrollo de un Proyecto Ciudadano de Educación Ambiental  en la vereda Plan Parejo en el que participaron 25 familias. La problemática que esta comunidad esta interviniendo es la pérdida de productividad del suelo por inadecuadas prácticas agrícolas, y la perdida de especies de fauna nativa por el deterioro de su hábitat. 
        Se implementaron 5 Proyectos Ciudadanos de Educación Ambiental en el municipio de Sincelejo: Vereda Policarpa, Corregimientos de la Arena y Altos de la Sabana, y barrios: Altos del Rosario y Bertionar, en ellos participaron 80 familias aproximadamente abordando la problemática de contaminación y escases del agua, así como la contaminación por disposición inadecuada de residuos sólidos
        
        * PRAE:3 Procesos
        Asesoría y acompañamiento en la formulación de dos (2) PRAES en la I.E Indígena Bossa Navarro y la I.E. San Luis de Beltrán del municipio de Sampués, Sucre, donde se han realizado cinco (5) sesiones de asesoría para la estructuración de los proyectos ambientales escolares, teniendo en cuenta su situación ambiental territorial (espacio - recurso).
        e acompaño el PRAE de la Institución Educativa Francisco José de Caldas del Municipio de Corozal, A través de talleres salidas a campo para la lectura del contexto y reconocimiento ambiental, y actividades de intervención, como la asesoría para la construcción de un Ecomuro, como dispositivo para la captación y almacenamiento de agua lluvia.   
        
        *PRAU: 1 Proceso
        CARSUCRE continuo desarrollando actividades en el marco del Proyecto Ambiental Universitario- PRAU en la Corporación Universitaria Caribe (CECAR), particularmente en la asesoría técnica y pedagógica del del programa Arborizaton; un joven, una semilla la mes, en el cual fue posible producir como resultado 1.500 jóvenes apropiados produciendo 6000 plántulas de especies nativas, que irán a proyectos de reforestación 
        
        *JOVENES DE AMBIENTE: 1 Proceso
        Se capacitó un grupo de18 jóvenes compuestos  practicantes de Carsucre de diferentes perfiles formativos, así como Jóvenes Guardabosques de los de María, en el marco de los procesos de fortalecimiento de los Nodos de Jóvenes de Sincelejo, Chalán y Colosó. Se incoó con su formación y aprestamiento en los aspectos conceptuales de lo ambiental y lo educativo ambiental
        
        *Apropiación Social del Conocimiento Ambiental : 1 Proceso',
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
            'activity_id' => 15040,
            'year' =>2,
            'value' => 4,
            'description' => 'En la implementación y/o mantenimiento de las estrategias de Comunicación, Información y Participación, el objetivo es lograr la organización eficiente y eficaz consecuente con los retos exigidos por la corporación y que beneficie al público interno y externo de la misma. Como son los siguientes:
        1. Publicación en Redes Sociales
        2. Diseño y producción de piezas gráficas y audiovisuales conmemorativas, informativas, entre otras para redes sociales, 
        3. Redacción de notas, comunicados y boletines para su difusión en prensa, radio en el orden departamental, en la web, y copys para redes sociales.                        
        4. Cubrimiento en transmisión en vivo a través de Facebook Live, entrevista Olímpica Estéreo de Sincelejo para hablar sobre el que hacer de la Corporación en el marco del Día Internacional del Reciclaje, Cuña radial en Olímpica Estéreo y Radio Tiempo Sincelejo para la promoción de la Campaña ¡Ponte las Pilas! VI Jornada de Recolección de Residuos Pos consumo, FreePress en emisoras A.M. para promocionar la VI Jornada de Recolección de Residuos Posconsumo.
        5. Alimentación del banco fotográfico de Carsucre.
        6. Acompañamiento en escenario en educación ambiental
        7. Permanente comunicación, contacto y apoyo a entidades del orden nacional, regional y departamental en pro de reforzar los lazos interinstitucionales y cumplir con el objeto misional de la CAR.
        8. Campañas de Apropiación social de las zonas verdes de Sincelejo                                                En el marco del convenio 006 entre la alcaldía de Sincelejo y Carsucre, se llevo a cabo 4 campañas de apropiación social de las zonas verdes del municipio en 4 sectores que conservan coberturas nativas importantes para su preservación y cuidado: Barrio 6 de Enero, Barrio el Cortijo, y Barrio Bolívar. En estas campañas participaron al menos 80 líderes quienes identificaron especies de flora y fauna nativa, los bienes y servicios ambientales que prestan, así como las amenazas de transformación del paisaje que pueden atentar contra ellas 
        ',
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
            'activity_id' => 15041,
            'year' =>2,
            'value' => 100,
            'description' => 'CARSUCRE participó en los procesos de revisión y ajuste de los POT de los municipios de San Antonio de Palmito, San Onofre, Ovejas, Corozal y Sincé para los cuales se ha dejado en evidencia el mandato legal sobre la incorporación de las consideraciones de cambio climático en este instrumento con base en la realidad de cada ente territorial.
        
        Mediante oficios se realizó Llamado a los señores alcaldes de la jurisdicción de CARSUCRE, para el Fortalecimiento de la Acción Climática, en materia de Adaptación y la mitigación de emisiones de gases de efecto invernadero (GEI) a través de la implementación de programas y proyectos en sus territorios.
        
        En articulación con el Programa ProNDC de la GIZ que apoya a Colombia en el cumplimiento de sus metas climáticas en adaptación y mitigación se realizaron doce (12) talleres de Racionalidad Climática con participación de CARSUCRE como organizador, dirigido a productores agropecuarios, funcionarios de las UMATAS y ONGs ambientales. Estos talleres se realizaron en los municipios de San Pedro, Los Palmitos, Ovejas, Chalán, San Onofre y Toluviejo, con la participación de unas 200 personas. Listas de asistencias y registro fotográfico). Se entregó certificado a las personas que participaron en los dos (2) talleres programados para cada uno de los municipios priorizados.
        
        Como saldo pedagógico de las capacitaciones se logró la conformación de las redes de acción climática  municipal, la entrega de pluviómetros para la medición y reporte de la cantidad de lluvia caída en milímetros (mm) a nivel veredal, la interpretación de información agroclimática contenida en los boletines que emite la Mesa Técnica Agroclimática del Departamento de Sucre que cuenta con el apoyo científico del Centro Regional de Pronósticos y Alertas Tempranas de la Mojana, con el aporte de información hidroclimática a los agricultores, pescadores y a la comunidad en general para la prevención del riesgo en desarrollo de sus actividades productivas, y el logro de una agricultura climáticamente inteligente
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
            'activity_id' => 15042,
            'year' =>2,
            'value' => 1,
            'description' => 'Mediante Convenio SPED – 009 – 2021, suscrito por la Gobernación de Sucre y el PNUD, cuyo Objetivo General es Aunar esfuerzos científicos y tecnológicos para la elaboración del PIGCC Sucre, conforme a lo dispuesto en la Ley 1931 del 27 de julio de 2018, se elabora un Plan de Trabajo para los próximos cuatro (4) meses que permita la formulación y adopción del PIGCC mediante Ordenanza que expida La Asamblea Departamental de Sucre.
        
        La Corporación Autónoma Regional de Sucre – CARSUCRE ejerce la Secretaría Técnica de la Mesa Departamental de Cambio Climático de Sucre y en conjunto con la Gobernación de Sucre, CORPOMOJANA, PNUD y ProNDC de GIZ se trabajó en la construcción de una estrategia de Comunicación para el PIGCC, en la cual participan funcionarios y contratistas de las oficinas de comunicación de las anteriores entidades.
        
        Se proyecta y firma Un (1) Memorando de Entendimiento CARSUCRE y la Agencia de Cooperación Alemana – GIZ, cuyo Objeto es “Establecer la intención de las partes en la articulación de acciones con el objetivo común de reducir emisiones de gases de efecto invernadero (GEI) y adaptarse al cambio climático en el contexto del ProNDC. La finalidad de dichas acciones será lograr el fomento de una producción agropecuaria baja en emisiones y resiliente al clima, e integrar estas medidas en el PIGCCT Sucre, en proceso de construcción
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Convenio SPED – 009 – 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15043,
            'year' =>2,
            'value' => 0.5,
            'description' => 'CARSUCRE firmó convenio con la Alcaldía de San Juan de Betulia y la Fundación Project Solution, con el objeto de “Aunar esfuerzos técnicos, administrativos y financieros que contribuyan a la construcción de 50 estufas ecoeficientes como medidas de mitigación al cambio climático en el municipio de San Juan de Betulia, jurisdicción de CARSUCRE”. Desarrollando lo siguiente: 
        
        - Proceso de construcción e instalación de estufas ecoeficientes como medidas de mitigacion al cambio climático en zona rural del municipio de San Juan de Betulia.
        - Desarrollo de talleres de socialización del proyecto y sensibilización en educación ambiental dirigidas a las familias campesinas beneficiarias del proyecto en el fortalecimiento de entrenamiento para uso del dispositivo
        ',
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
            'activity_id' => 15046,
            'year' =>2,
            'value' => 1,
            'description' => 'Para el cumplimiento de este producto se llevo a cabo lo siguientes actividades dentro del ejercicio de control y vigilancia de zonas costeras:
        
        *En actividades de control y vigilancia para el control y tráfico  ilegal de productos y subproductos  de tortugas Carey (Eretmochelys imbricata) y con el apoyo de la directora científica de la Fundación Tortuga De Mar, Karla Barrientos; se realizó un recorrido por toda el área de influencia de artesanos y turistas  en el municipio de  Coveñas(segunda ensenada), en el recorrido realizado algunas tiendas artesanales entregaron de forma voluntaria siete (7) pulseras  y fueron destruidos 21 anillos por parte del propietario de uno de los locales comerciales visitados, los cuales se encontraban exhibidos como artesanías en las instalaciones del local para ser comercializadas.
        *En labores de control y vigilancia en contra del tráfico y comercialización ilegal de especies silvestres  contratistas de Carsucre realizaron un recorrido por inmediaciones de ISLA BOQUERON - San Onofre, con el fin de inspeccionar si se encuentran redes utilizadas para la captura de tortugas marinas. En el operativo se hallaron dos redes de 100 mts aproximadamente.
        *Inspección técnica, con el fin de hacer seguimiento al incidente ocurrido el pasado 6 de abril de 2021 por derrame de hidrocarburo en el Golfo de Morrosquillo, en la maniobra de limpieza y cambio de la mono boya TLU2, a cargo de la empresa OCENSA S.A.En el desplazamiento realizado NO se evidenció presencia de contaminación por sustancias oleosas, y tampoco iridiscencia.
        Entre otras actividades que se detallan el documento de Word de avance del PAI ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15047,
            'year' =>2,
            'value' => 3,
            'description' => 'Se realizó en la vigencia 2021, caracterización de los arrecifes coralinos en sectores como isla palma, bajo grande, punta de piedra en san Onofre, bajo la boquilla, bajo pajarita, entre otros. En los ecosistemas coralinos el mayor porcentaje se ve representado en tejido coralino vivo, en algunos sectores se presentan algunas enfermedades y blanqueamiento coralinas pero no superan el 20% de la cobertura de coral sin embargo es representativo. De igual forma, para el segundo semestre del año 2021, se realizo la caracterización de 3 bajos estratégicos con coberturas coralinas hermatipicas (bajo esperanza, bajo cabruna y punta piedra – Coveñas, en donde se registraron 23 especies de corales duros. Además de ello, se realizaron análisis comparativos como base fundamental para la evaluación del recurso a través del tiempo.
        
        Por otro lado, en el manglar del Parque Natural Regional de Boca de Guacamaya se colocaron camaras trampas para identificar las especies asociadas a este ecosistema, con ello, se realizan analisis de la riqueza funcional en el area.
        
        En el 2021, se instalaron 3 transectos fijos de 30 metros bajo las coordenadas N 9o39’32” W 75o 42’09’’, con el fin de evaluar el desarrollo de la cobertura de pastos marinos en el sector.  
        en cada uno se tomaron datos utilizando 7 cuadrantes de 25 x 25 centímetros, dentro de los cuales se cuantificaron los vástagos, largo de la hoja, enfermedad, grado de epifitismo y fauna asociada. En este lugar se pudo observar, que la especie dominante en todos los transectos fue Thalassia testudinum, la cual presento una densidad de media a alta, además se observaron surcos arenosos provocados por la remoción del bento por el mal anclaje de botes, sin embargo, aún se observa gran diversidad de invertebrados y vertebrados marinos, lo que indica que aún existe una dinámica de funcionamiento biológico por las interacciones entre especies y su medio.
        
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15050,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizaron dos charlas de sensibilización en los municipios: San Onofre y Tolu, se logró el objetivo ampliar los conocimientos a la comunidad sobre la problemática ocasionado por el pez león con capacitación a lideres comunitarios pertenecientes al municipio Rincón del Mar, sobre las medidas de manejo y la importancia de regular la propagación del Pez León en aguas pertenecientes del Municipio de San Onofre.
        
        Se realizaron salidas de campo en el sector marino conocido como la Roca de Morrosquillo, ubicada bajo las coordenadas N 09°25ʹ36ʺ O 75° 41ʹ15,6ʺ, el bajo pajarito, ubicado bajo las coordenadas N 09°39ʹ48,8ʺ O 75°41ʹ09.9ʺ y bajo la boquilla, ubicado bajo las coordenadas N 09°42ʹ08,95ʺ O 75°41ʹ16,81ʺ, con el fin de recopilar datos sobre la distribución de pez león, bajo las medidas de manejo para el control y manejo de especies invasoras, utilizando la metodología planteada en el PROTOCOLO PARA LA CAPTURA, EXTRACCIÓN Y DISPOSICIÓN FINAL DEL PEZ LEÓN (Pterois volitans), EN COLOMBIA (2013).
        
        Como resultados, se reportaron 16 individuos de pez león (Pterois volitans), distribuidos entre profundidades que oscilaron entre los 4 y 35 metros de profundidad.
        Entre los peces capturados, la mayoría correspondieron a individuos adultos en estadio reproductivo 5 y presentaron una talla promedio de 19,82 ± 10,70 cm de LT y un peso promedio de 0,27± 0,18 gr.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15052,
            'year' =>2,
            'value' => 1,
            'description' => '*En el sector Balsillas, corregimiento Rincón del Mar, se llevó a cabo recorrido dentro del sistema de manglar, donde se identificaron puntos de residuos sólidos plásticos camino a las zonas de anidación de tortugas marinas .
        *También se trabajó en los esfuerzos de limpieza de playas programados por otras entidades, de esta forma se participo en la jornada de recolección de residuos sólidos en playas de Coveñas, actividad liderada por Fundación Natura y Coca – Cola contando con el apoyo de la secretaria de Turismo de la Alcaldía de Coveñas, la Base de Entrenamiento de Infantería de Marina, Policía, DIMAR, entre otras entidades y civiles voluntarios, 
        *Jornadas de capacitación formativa con estudiantes de la mesa de participación del municipio de Coveñas, para generar conciencia y pensamiento crítico sobre la problemática de los residuos sólidos, haciendo énfasis en el manejo integral de los plásticos en las zonas marino-costeras y la importancia de preservar los ecosistemas de manglar.
        *Se realizaron salidas de control y vigilancia con el objetivo de identificar puntos críticos de contaminación por residuos sólidos vegetales y plásticos sobre el ecosistema de manglar, en el corregimiento conocido como Rincón del Mar – San Onofre. 
        *Identificación de puntos críticos de contaminación por residuos sólidos vegetales y plásticos en ecosistema de manglar, sector El Francés, Alegría y Guacamaya, municipio de Santiago de Tolú.
        *Se realizó el apoyo interinstitucional en pro de reducir y mitigar la contaminación por plásticos en zonas marino-costeras donde se asistió a la reunión de Mesa Ambiental de Coveñas, iniciativa propuesta por Fundación Natura y Coca-Cola, como espacios de participación autónoma, donde se formulan acciones medibles que afiancen el reconocimiento a nivel de las organizaciones en pro del entorno natural, bajo el proyecto Playas Libres, Basura Cero.
        *Desde el proyecto Playas Libres, Basura Cero de Fundación Natura y Coca-Cola se desarrolló un ciclo de capacitaciones virtuales, fortaleciendo el proceso formativo en temáticas',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15053,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizó el monitoreo de la calidad de las aguas marino y costeras en noviembre de 2021.
        En total se monitorearon 28 estaciones de muestreo con la empresa OCENSA',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15054,
            'year' =>2,
            'value' => 1,
            'description' => 'CARSUCRE celebró contrato No. 039 de 2021 por una duración de un 32 días, cuyo objetivo es  Mantenimiento del muelle que facilita el ecoturismo y la pesca, entre otras actividades que se desarrollan en el DRMI Ciénaga la Caimanera del Municipios de Coveñas, en la Jurisdiccion de CARSUCRE por un valor de $24.963.200. 
        
        Realizando las siguientes actividades:
        - Desmonte e instalacion de nuevos pilotes en maderas (alfradas) en el muelle del DRMI cienaga la caimanera 
        - Desmonte y recuperacion con nuevos entablados la estructura peatonal del muelle.
        - Aplicacion de pintura para madera',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15056,
            'year' =>2,
            'value' => 4,
            'description' => 'CARSUCRE celebró contrato No. 038 de diciembre de 2021 por una duración de un 32 días, cuyo objetivo es  Limpieza y Recuperación de canales sedimentados en ecosistemas de manglar del corregimiento de rincón del mar, en el municipio de San Onofre, en la Jurisdiccion de CARSUCRE , impactando 4 hectareas de manglar.
        
        En el segundo semestre del 2021 se realizaron trabajos de restauración de ecosistemas de manglar donde se sembraron 400 plántulas de mangle rojo abarcando un área de 500 m a orillas del talud del arroyo Amansa Guapos en el municipio de Santa Barbara de Coveñas, con el fin de recuperar los beneficios ecosistémicos  y calidad paisajística que se han perdido en el área ubicada en las coordenadas 9.401942° E; 75.675293° N en desarrollo del proyecto Sinergia Verde desarrollado en alianza con Ocensa. 
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'contrato No. 038 de diciembre de 2021',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
                
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
