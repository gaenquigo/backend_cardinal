<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCarsucre2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 14975,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022, el mantenimiento de 6 piezometros en el acuifero de Morroa.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14976,
            'year' =>3,
            'value' => 15000,
            'description' => 'Con corte a 30 de Junio de la vigencia 2022, se han realizado 15.000 m2 de escariación del suelo y de pequeñas excavaciones (tipo jagueyes) con máquina de excavación Retro (tipo Pajarita) en el predio el tesoro y villa vanessa ubicados en el municipio de Morroa, con el fin de contribuir a aumentar la recarga directa del acuífero de Morroa.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14977,
            'year' =>3,
            'value' => 240,
            'description' => 'Visitas de Monitoreo Subterráneo: Se realizaron 125 visitas de monitoreo de seguimiento a los pozos de producción, donde se midieron caudal y niveles de agua. Así mismo, se realizó 20 puntos de monitoreos correspondientes a piezómetros y pozos de observación, donde se tomaron datos de niveles y parámetros de campo como conductividad, temperatura, ph, entre otros.
        
        Visitas de Monitoreo Superficial: Se realizaron visitas a 95 puntos para el monitoreo del recurso hídrico superficial, en donde se tomaron datos in situ y toma de muestras con destino al laboratorio acreditado por el IDEAM bajo la resolución 1337 de noviembre de 2021, detallado de la siguiente manera: 
        
        *  Arroyo Grande de Corozal (10 estaciones)
        * Canoas (6 estaciones)
        * Torobé (5 estaciones)
        * Ovejitas, Pechilín ( 8 estaciones)
        * Represa Villeros (9 estaciones) 
        *  Laguna costera la Caimanera (14 estaciones)',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14978,
            'year' =>3,
            'value' => 69,
            'description' => 'Se realizo el cargue a la plataforma SIRH de 69  registros correspondientes a a siete salidas de monitoreos realizados en las principales microcuencas tales como : arroyo Grande de Corozal, Canoas, Torobé, Ovejitas - Pechilín, represa Villeros, entre otros.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14979,
            'year' =>3,
            'value' => 2,
            'description' => 'Se priorizaron y delimitaron las areas estrategicas del municipio de Corozal especificamente en los Pozos 1, 2 y 3 y del municipio de Sincelejo especificamente en los pozos 46 y 47. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14980,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre la elaboracion y formulacion del Estudio Regional del Agua - ERA de CARSUCRE',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14981,
            'year' =>3,
            'value' => 21,
            'description' => 'Se realizo la evaluacion y seguimiento de 21 proyectos para la promocion del Uso Eficiente y Ahorro del Agua (PUEAA) con realización de visitas técnicas y/o elaboración de conceptos técnicos , relacionados a continuación: Friogan S.A., William Alfonso Martinez Martinez, Alvaro Isaac Nader Y/O Plantamos S.A.S, Maria Victoria Sotto Garcia, Maria Eugenia Hernández Navarro, Inversiones Galaz S.A.S., Luis Miguel Acosta De La Ossa, Julio García Marichal, Ismael Quintero Fadul Y/O Agregados Y Canteras Del Norte, Fondo De Empleados Almacenes Éxito, Insetur De Colombia S.A.S. , Gloria Isabel Oliver Moreno, Henry Eduardo Cano Linares, Empresa De Servicios Públicos De Acueducto Y Alcantarillado Sercov S.A. E.S.P, Gloria Ámparo Granda Abella y/o Almidones De Guadalupe, Cooperativa Agropecuaria De Galeras – Coopagrogal, Gabriel Ángel Camacho Gamboa, Inversiones Galaz S.A.S., Hotel Y Restaurante Las Palmeras, Cabañas Costa Serena S.A.S., Asociacion Agua Azul El Sitio.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14983,
            'year' =>3,
            'value' => 10,
            'description' => 'La microcuenca del Arroyo Grande de Corozal o de la Sabana, en donde se aplica este indicador, cuenta con 10 estaciones de monitoreo de la calidad del recurso hídrico y durante el primer semestre de la vigencia 2022 fue visitado en dos oportunidades, especifamente el 2 de febrero de 2022 y el 6 de Junio de 2022.
        
        Una vez realizadas las visitas en campo y hecho el analisis de la toma de datos representados en la grafica de soporte, se puede concluir que se obtuvo un perfil de la contaminación orgánica (DBO5), cuyo comportamiento indica que en la mayoría de las estaciones existe una alta contaminación, a excepción de las tres últimas estaciones entre Sincé y Galeras, en donde las concentraciones están por debajo de los 30 mgO2/L.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14985,
            'year' =>3,
            'value' => 0,
            'description' => 'Programada para el segundo semestres de la vigencia 2022',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14986,
            'year' =>3,
            'value' => 0,
            'description' => 'Es importante aclarar que la fase de formulacion del POMCAS Directos caribes - Golfo de Morrosquillo se encuentra culminada satisfactoriamente, priorizando para este cuatrenio del Plan de Accion 2020 - 2023, la realización de consulta previa del Plan de Ordenación y Manejo de Cuenca (POMCA) y su adopción por acto administrativo.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14987,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022 la formulacion de un Plan de Ordenacion del Recurso Hidrico (PORH)',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14988,
            'year' =>3,
            'value' => 0,
            'description' => 'En la vigencia 2021 se tenia programada la fase de aprestamiento con el fin de revisar la necesidad de ordenar la corriente del Arroyo Pechelín o no, dependiendo de la realidad que se encontrara en campo. No obstante, en el desarrollo del estudio preliminar que tenia como objetivo determinar la conveniencia, teniendo en cuenta el reparto actual, las necesidades de los predios que las utilizan y las de aquellos que puedan aprovecharlas, conforme a las orientaciones y/o lineamientos contemplados en el Decreto 1076 de 2015, los resultados determinaron que no existe la necesidad de ordenar la corriente del Arroyo Pechelin. Por ende, para esta vigencia no se comprometieron los recursos.
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14991,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14992,
            'year' =>3,
            'value' => 1,
            'description' => 'Participación en el taller de evaluación y manejo del sistema de áreas protegidas realizado en  la ciudad de Cartagena, en el Marco de la Política del SINAP CONPES 4050  y del Convenio SIRAP Caribe que tiene por objeto aunar esfuerzos para la implementación del sistema.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14993,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado el segundo semestre de la vigencia 2022 el apoyo a dos areas protegidas',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14994,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022 . Es importante resaltar que fue un proyecto formulado y aprobado en la vigencia 2022 para ejecutar con recursos del Fondo de Compensacion Ambiental - FCA y cuenta con resolución de aprobacion de recursos y actualmente se encuentra en la etapa precontractual.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14996,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022, la identificacion y evaluacion de areas degradadas de cuatro (4) municipios',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14998,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022, Es importante resaltar que fue un proyecto aprobado en la vigencia 2022 para ejecutar con recursos del Fondo de Compensacion Ambiental - FCA cuenta con resolución de aprobacion de recursos y actualmente se encuentra en la etapa precontractual.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14999,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022, Es importante resaltar que fue un proyecto aprobado en la vigencia 2022 para ejecutar con recursos del Fondo de Compensacion Ambiental - FCA cuenta con resolución de aprobacion de recursos y actualmente se encuentra en la etapa precontractual.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15000,
            'year' =>3,
            'value' => 0,
            'description' => 'Proyecto formulado para ejecutar en la vigencia 2022, actualmente se encuentra en estado de aprobacion y a espera de resolución de aprobacion de recursos para iniciar la ejecución.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15001,
            'year' =>3,
            'value' => 1,
            'description' => '
        En el primer semestre de la vigencia 2022, CARSUCRE implementó campaña de sensibilización llamada Baja la Velocidad, ellos tienen la vía dirigida a conductores viales y ciudadanía en general con la finalidad de ilustrar los efectos de atropellamiento a especímenes de fauna en las carreteras de influencia de la Jurisdiccion abarcando las tres subregiones de CARSUCRE ( Montes de Maria, Sabanas y Golfo de Morrosquillo).
        
        La metodología llevada a cabo fue:
        • Recorridos en las tres subregiones iniciando a las 8:00 a.m. y finalizando a las 4:00 p.m., con una velocidad aproximada de 20km/h
        • Por cada cadáver se tomaron coordenadas y registro fotográfico
        • Implementación de la metodología Corine Land Cover (IDEAM, 2010) para describir la cobertura aledaña al punto de atropellamiento del espécimen.
        • Identificaciones taxonómicas de las especies a partir de los registros fotográficos
        • Para cada subregión se seleccionó un punto caliente (HOTPOTS) el cual fue seleccionado por el mayor número de atropellamientos.
        A partir de los datos obtenidos se realizaron los cálculos de las Tasas de Atropellamiento (T.A), Tasa de atropellamiento= (N° atropellos/  km); para el análisis de datos se hizo una prueba T- Student para hacer una comparación entre las dos temporadas (lluvia-sequia) esto con el fin de determinar cuál de las dos temporadas presentó un mayor índice de atropellamiento.
        
        Adicionalmente, durante el primer semestre desarrollo campaña de sensibilizacion denominada Tu casa no es su casa, no a la caza, actividad pedagogica para prevenir el trafico ilegal de fauna silvestre y la tenencia de fauna como mascota, con el objetivo de concientizar a la comunidad en general de la importancia de la conservación de las especies indomitas y asi mismo lograr la entrega voluntaria de las mismas.
        
        Como resultado de la campaña ¡Tu Casa no es su Casa! y el llamado de CARSUCRE a entregar voluntariamente animales silvestres tenidos en calidad de mascota, dio como resultado 22 entregas.
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17184,
            'year' =>3,
            'value' => 480,
            'description' => 'CARSUCRE celebró contrato no. 0144 de 28 de marzo de 2022 por una duración de tres meses, cuyo objeto es Establecimiento y mantenimiento de 580 hectareas de plantacion forestal protectora en los municipios de Buenavista, Corozal, Galeras, Los Palmitos, Sampues, Since, Betulia y San Pedro articulado con 48 talleres de capacitacion a comunidades en el marco del proyecto: restauración de ecosistemas boscosos en la subregion sabanas jurisdiccion de Carsucre, Sucre.  
        
        A corte 30 de Junio de 2022, presenta los siguientes avances: 
        Establecimiento  de 480 hectáreas de plantaciones forestales.  Labor que se llevó a cabo en los siguientes municipios:
        
        Municipio             Establecimiento(Ha)
        Buenavista                      15,5
        Corozal                          102,5
        Galeras                            8,5
        Los Palmitos                     95
        Sampues                          66
        Since                               96,5
        Betulia                               8
        San Pedro                        88
        Total                               480 Ha
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato no. 0144 de 28 de marzo de 2022 ',
            'state_id' => 1201,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 17185,
            'year' =>3,
            'value' => 900,
            'description' => 'CARSUCRE celebró contrato no. 0144 de 28 de marzo de 2022 por una duración de tres meses, cuyo objeto es Establecimiento y mantenimiento de 580 hectareas de plantacion forestal protectora en los municipios de Buenavista, Corozal, Galeras, Los Palmitos, Sampues, Since, Betulia y San Pedro articulado con 48 talleres de capacitacion a comunidades en el marco del proyecto: restauración de ecosistemas boscosos en la subregion sabanas jurisdiccion de Carsucre, Sucre.  
        
        A corte 30 de Junio de 2022, presenta los siguientes avances:.
        
        Diseño y divulgación de 2.000 plegables con información del proyecto, como ayuda para las labores de socialización del mismo entre los beneficiarios e interesados. 
        
        Sensibilización y capacitación a  900 personas beneficiarios del proyecto, en las siguientes temáticas: 
        • Importancia de la restauración de bosques para la conservación del agua, el suelo y la fauna silvestre
        * Aspectos basicos para la sostenibilidad del proyecto
        * Beneficios economicos, sociales y ambientales del proyecto
        * Socializacion de resultados del proyecto.
        
        ',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'Contrato no. 0144 de 28 de marzo de 2022 ',
            'state_id' => 1201,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15003,
            'year' =>3,
            'value' => 9,
            'description' => 'Con corte a 30 de Junio de la vigencia 2022, la oficina de negocios verdes de esta Corporación realizó visitas de verificacion a nueves (9) negocios verdes, los cuales fueron:  1). La Patillera, Sincelejo; 2). Artesanías Mirian, Sampués; 3). Ficushop, Sincelejo; 4). Ajonjolí Doña Elfy, Corozal; 5). Minimundo Cactus, Sincelejo; 6). Cooperativa Sasha Sabana Galeras, Galeras; 7). DMO Naturalmente Saludable, Morroa; 8). Cooperativa Gestores Ambientales del Golfo de Morrosquillo, Tolú; 9) Maxicompost, Toluviejo.
        
        Por otro lado, la Ventanilla de Negocios Verdes de CARSUCRE reivindica el mérito de haber realizado en el primer trimestre de 2022 la labor de identificar y realizar la inscripción de los diez (10) negocios postulados para ser verificados y fortalecidos por el Programa de Generación de Negocios Verdes del MADS con el apoyo presupuestario de la Unión Europea en municipios PDET Montes de María.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15004,
            'year' =>3,
            'value' => 4,
            'description' => 'Las Líneas Estratégicas de intervención implementadas, se enmarcan en las Líneas Estratégicas del Programa Regional de Negocios Verdes – PRNV, así: 
        1. Desarrollo y Fortalecimiento de la Oferta
        2. Comunicación, Posicionamiento y Sensibilización al Consumidor y Productor de los Negocios Verdes
        3. Coordinación y Articulación Institucional y Sectorial; y
        4. Recursos e Incentivos financieros y económicos',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15005,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022, la implementaccion de una accion de tecnica de produccion mas limpia',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15006,
            'year' =>3,
            'value' => 100,
            'description' => 'Se hizo seguimiento a los 19 municipios de la Jurisdiccion de CARSUCRE en relación a los Planes de Gestion Integral de Residuos Solidos (PGIRS) de manera presencial ; solo el municipio de San Onofre se realizó de manera virtual. El seguimiento se hizó al programa de aprovechamiento y al tema de inclusión de recicldores, por la relación que guardan estos programas. 
        
        La metodologia utilizada para realizar los seguimientos fue la siguiente: 
        - Se programó coordinadamente con los municipios el día de visita con el objetivo que fuera atendida por la persona idonea o encargada en el municipio. 
        - Seguidamente, el personal de Carsucre (encargado de PGIRS) se transladó a los municipios para realizar el respectivo seguimiento. 
        
        De estos seguimientos se concluye la poco o nula implementación de los PGIRS en los 19 municipios en el tema de aprovechamiento, solo el municipio de Sincelejo presenta avance  positivo en el programa de aprovechamiento, sin embargo, a la fecha no han implementado todos los proyectos contemplados en su PGIRS; y finalmente la mayoria de los municipios se centran en la prestación del servicio de aseo en la zona urbana',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15007,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15008,
            'year' =>3,
            'value' => 21,
            'description' => 'Durante el primer semestre de la vigencia 2022 se realizo el seguimiento a los Planes de Saneamiento y Manejo de Vertimiento de tres municipios de Jurisdiccion como son: : Los Palmitos, Coloso y San Onofre.
        
        Del seguimiento realizado por parte de la Corporacion se pudo evidenciar que los tres municipios mencionados anteriormente cuentan con sistemas de tratamientos,  sin embargo, el PSMV del municipio de Los Palmitos presenta problemas de operación por falta de mantenimiento, pero es de acotar que la responsabilidad esta bajo el ente territorial a traves de la empresa prestadora del servicio.
        
        Seguidamente, el PSMV del municipio de Coloso presenta buen funcionamiento de su sistema de tratamiento, el cual fue ampliado con la construccion de una laguna adicional.
        
        Finalmente, el PSMV del municipio de San Onofre, su sistema de tratamiento opera bien aunque requiere aumentar su cobertura de alcantarillado
        
        Es importante tener en cuenta que tan solo 14 Municipios tiene viabilizado sus Planes de Seguimiento y Manejo de Vertimiento, PSMV
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15009,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022, el monitoreo de la calidad del aire',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15010,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15012,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15013,
            'year' =>3,
            'value' => 25,
            'description' => 'En el primer semestre de la vigencia 2022, se  han realizado 25 inscripciones en el aplicativo registro de generadores de residuos o desechos peligrosos.
        
        Se validó la información reportada en el Registro De Generadores de Residuos o Desechos Peligrosos, por los generadores para el periodo de balance de 2021, aproximadamente se revisaron 286 reportes.
        
        Para la vigencia 2022 en el inventario PCB se encuentran 36 usuarios inscritos, lo que se traduce a 5938 equipos inventariados aproximadamente.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15014,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Se han desarrollado las siguientes actividades para la implementación del Plan de gestión integral de residuos o desechos peligrosos:
        
        *Fomentar el desarrollo de actividades de seguimiento para establecer verdaderas fuentes generadoras de RESPEL: Se han utilizado las bases datos de actividades económicas establecidas en el diagnóstico del plan para filtrar la información y lograr conocer fuentes generadoras de residuos peligrosos.
        Se han realizado visitas a las entidades prestadoras del servicio de salud en los municipios de la jurisdicción puesto a que su actividad genera residuos peligrosos.
        
        
        *Estudios de la trazabilidad en la cuantificación de la generación de residuos peligrosos en la jurisdicción: En el primer semestre la vigencia 2022 se analizó la generación de residuos peligrosos que reportan los generadores en las herramientas de captura de información como lo son el Registro de Generadores de Residuos o Desechos Peligrosos, Registro Único Ambiental para el sector Manufacturero y el Inventario Nacional de PCB.
        
        *Identificar la presencia de sustancias nocivas en los recursos naturales de la jurisdicción:Se ha realizado varias evaluaciones y seguimientos a los planes de contingencia para el manejo de derrames de las empresas que exploren, exploten, manufacturen, refinen, transformen, procesen, transporten o almacenen hidrocarburos o sustancias nocivas en la jurisdicción. 
        
        *Suscripción de acuerdos o convenios sectoriales y de planes de trabajo, para la reducción y el aprovechamiento o valorización de RESPEL de interés: Se viene trabajando con el Consejo Territorial de Salud Ambiental (COTSA) acciones de coordinación intersectorial orientadas al fortalecimiento de la gestión integral de RESPEL. En la última reunión se establecieron planes de trabajo para la construcción de centros de acopio de residuos posconsumo de plaguicidas en la jurisdicción.
        
        *Fortalecer los procesos de capacitación, educación e investigación: Se han desarrollado de capacitaciones sobre residuos peligrosos dirigidas a diferentes actores involucrados en la cadena de gestión. Así como también capacitaciones en el manejo de la plataformas de reporte del IDEAM.
        
        *Generación y provisión de información al público sobre gestión y manejo de RESPEL: CARSUCRE en materia de divulgación de la información está en consolidación de la información contenida en las herramientas de captura de la información del Ideam en materia de respel, los cuales serán colgados a través de nuestra página web. Ya se tienen listos los de la plataforma de RESPEL.
        
        Entre otros, que se detallan el  documento de Word de avance del PAI 
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15015,
            'year' =>3,
            'value' => 1,
            'description' => 'En el primer semestre de la vigencia 2022, se establecio en una red de control y vigilancia, un un puesto de control de flora en el municipio de Corozal especificamente en la via que conduce al Peaje de las Flores, con el objetivo de inspeccionar las cargas de los vehiculos para controlar y verificar la comercializacion de flora
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15016,
            'year' =>3,
            'value' => 335,
            'description' => ' Durante  el primer semestre de la vigencia 2022, se realizaron 335 movimientos reportados en el Sistema Nacional de Información Forestal – SNIF, discriminados así: 
        - 174 reportes de aprovechamiento forestal
        - 161 reportes de movilizacion 
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15017,
            'year' =>3,
            'value' => 12,
            'description' => 'A corte 30 de Junio de la vigencia 2022, se logró visitar, inspeccionar y/o supervisar 12 establecimientos comercializadores de madera para verificación de inventario forestal y entrega del libro de operaciones, asi: 
         
        * Visitas de inspección y elaboración de inventario forestal registrado en el Libro de Operaciones Forestales (LOF) a 4 establecimientos con el objetivo de verificar la cantidad y tipo de productos forestales que dichas empresas tenian al momento de la visita y elaboracion el inventario inicial para el registro en el LOF, los cuales fueron: Aserradero el Carmen, Ebanisteria Assia y Madera y Equipos San Juan.
        * Visita de seguimiento y verificacion de actividades al establecimiento Ebanisteria Alian, con el objetivo de evaluar el cumplimiento de las actividades desarrolladas por la empresa durante el periodo de seis meses, segun lo establecido en el acta de registro del LOF.
        * Visitas de inspeccion tecnica y socializacion del Libro de Operaciones Forestales - LOF a los siguientes establecimientos: Ebanisteria Florez, Maderas Corozal, Maderas y Equipos San Juan, Ebanisteria Assia, Deposito de Maderas FINO ROBLE, Deposito de Madera EL CEDRAL, Deposito de Madera MALUVA, Deposito de Madera SANTO DOMINGO.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15018,
            'year' =>3,
            'value' => 75,
            'description' => 'En cumplimiento de las actividades a desarrollar en el control ilegal del tráfico de fauna silvestre durante el primer semestre de la vigencia 2022, se realizaron decomiso-incautación-recuperación-rescate y entregas voluntarias de 75 especies con la recepción de 416 individuos, relacionados así:
        
        -53 especies de aves con el decomiso 234 aves, de las cuales 103 fueron liberadas, 21 aves incineradas y 110 aves dispuestas, reubicados o liberadas en los sitios: estación Primatologica, represa argos, tolú, mata de caña, Sincelejo, entre otros.
        -14 especies de mamíferos con el decomiso de 38 mamíferos, de los cuales 15 fueron liberados, 16 incinerados y 7 en disposicion provisional, reubicados, dispuestos y/o liberados en los sitios: mata de caña, represa argos, estacion primate, municipio de San Antonio de Palmitos, municipio de Toluviejo, entre otros.
        -8 especies de reptiles con el decomiso de 144 reptiles, de los cuales 136 fueron liberados, y 8 incinerados,reubicados en los sitios: represa argos, mata de caña, estación Primatologica, la Palmira, la Primavera, el Cinco, entre otros.
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15019,
            'year' =>3,
            'value' => 1,
            'description' => 'Durante el primer semestre de vigencia 2022, se logro visitar varios viveros de la Jurisdiccion de CARSUCRE, tales como:
        
        - Vivero patio bonito y vivero las palmas ubicados en el perimetro urbano del municipio de Sincelejo.
        -Vivero la orquidea ubicado en el peaje del municipio de Toluviejo
        - Vivero la semilla localizado en el municipio de Sampues
        - Vivero matera la 40 y vivero mis tres girasoles ubcados en el municipio de Corozal, especificamente en la via que conduce hacia el municipio de los palmitos - sucre, ubicados cerca del aeropuerto las brujas de Corozal.
        
        La  metodologia llevada a cabo en las visitas a los viveros relacionado, consistio en capacitar, sensibilizar e inspeccionar sobre la presencia del caracol africano y asi mismo, consultar con los propietarios o administrados de los viveros si conocian el caracol africano (Achatina fulica)  para posteriormente brindarle charla sobre las consecuencias sanitarias y por ultimo, inspeccion tecnico ocular en todos las plantas para verificar la presencia del caracol africano.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15020,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022 la produccion de 125.000 especies de plantulas',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15021,
            'year' =>3,
            'value' => 1,
            'description' => 'Se contrataron los servicios de dos (2) operarios para mantener la funcionalidad del Centro de Atención y Valoración de Flora (CAVF) Matecaña',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15022,
            'year' =>3,
            'value' => 37,
            'description' => 'Durante  el primer semestre de la vigencia 2022 se realizaron 81 seguimientos, a los siguientes instrumentos: Licencias Ambiental, Concesiones de Agua, Permiso de Vertimientos, Aprovechamiento Forestal, y emisiones atmosféricas. Llevándose a cabo los siguientes seguimientos:
        
        19 seguimientos a Licencias Ambientales
        22 Seguimientos a aprovechamiento forestal
        29 Seguimientos a concesiones de Agua 
        9 Seguimiento a permiso de vertimientos
        2 seguimientos a emisiones atmosféricas',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15023,
            'year' =>3,
            'value' => 100,
            'description' => 'Durante el primer semestre de la vigencia 2022, lo que respecta a los tiempos de autorizaciones ambientales como son Licencias ambientales, concesiones de agua, permiso de vertimientos, aprovechamiento forestal y/o emisiones atmosférica, la Corporación presenta un tiempo promedio del 100% con respecto a la meta fijada en la norma por cada autorización ambiental. Lo indica que la evaluacion de los tramites ambientales presentados ante esta Corporacion se han otorgados y/o negados en los tiempos establecidos por la normatividad nacional.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15024,
            'year' =>3,
            'value' => 39,
            'description' => 'Durante el primer semestre de la vigencia 2021, se aperturaron: 165 procesos sancionatorios mas los activos en la Corporación ascienden a un total de 289 sancionatorios que cuentan con actos administrativos de iniciacion; 14 actos administrativos de determinación de responsabilidad de Carsucre, y con corte a 30 de Junio se cerraron 100 procesos sancionatorio',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15025,
            'year' =>3,
            'value' => 11,
            'description' => 'En el primer semestre de la vigencia 2022 se procesaron 11 expedientes de Licencias Ambientales e Infracciones de tipo mineras, atendidos con visitas de inspección técnica, informes de evaluacion y/o seguimiento, conceptos técnicos, entre otros, como relacionados a continuación:
        1. Elaboracion de concepto técnico sobre viabilidad ambiental de dos (2) solicitudes de permisos de licencia ambiental del sector minero radicados en la Corporacion. 
        2. Visitas tecnicas de seguimiento y/o evaluacion de los Informes de Cumplimiento Ambiental (ICA) a cuatro (4) expedientes de licencias ambientales mineras otorgados por la Corporacion.
        3. Visitas de inspección ocular y técnica para realizar una descripción ambiental, georeferenciar el área, tomar registro fotográfico y rendir informe técnico de cinco (5) infracciones en materia de control y vigilancia minera',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15026,
            'year' =>3,
            'value' => 90,
            'description' => 'En la Secretaría General de la Corporación Autónoma regional de Sucre se realizaron actuaciones judiciales dentro de los medios de control: Nulidad y Restablecimiento del Derecho, Reparación Directa, Ejecutivos, Acciones de tutelas, Acciones Populares, Acciones de Grupo, Acciones de Restitución de Tierras  y Acciones de expropiación donde CARSUCRE actuó como intervinientes, dentro de las cuales se presentaron memoriales a los juzgados, se impulsaron su cumplimiento administrativamente y entre otras actuaciones.
        
        De los 165 procesos como tutelas, acciones populares, conciliaciones extrajudiciales, entre otras , durante el primer semestre la Corporacion impulsó alrededor de 149 procesos judiciales que cuentan con actuaciones por parte de esta entidad.
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15027,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15028,
            'year' =>3,
            'value' => 3,
            'description' => 'Dentro del proceso de fortalecimiento administrativo se llevaron a cabo las a siguientes actividades:
        
        * Cargue de información a la plataforma CHIP 
        * Facturación y actualización de carteras ( Tua , tasa retributiva y predial).
        * cargue de información en el Sistema de Rendición Electrónica de la Cuenta e Informes (SIRECI-Contraloría)
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15029,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15030,
            'year' =>3,
            'value' => 2,
            'description' => 'Durante la vigencia 2022 se llevo a cabo:  
        
        
        - Soporte a sistemas con la revisión y optimización de las redes locales, tanto en datos compartidos entre las dependencias que así lo requirieron, como el acceso y conexión a la red que actualmente se encuentran en Carsucre. 
        
        - Se dio cumplimiento a la optimización y actualización, tanto de la base de datos de la web de Carsucre, como toda la información que allí se encuentra alojada, haciendo un protocolo de seguridad de Backup por semana, asegurando así la información que se alojó en la vigencia del primer periodo 2022 .
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15031,
            'year' =>3,
            'value' => 19,
            'description' => 'Durante el primer semestre de la vigencia 2022, se ha llevado a cabo las siguientes actividades:
        
        - Solicitud de informacion a los 2 municipios (Sincelejo y Toluviejo) que cuentan con concertacion y acuerdo de aprobacion del ajuste de su instrumentos de planificacion, con el objetivo de concer el avance de su implementacion.
        - Solicitud de información a los 17 municipios que segun vigencia de contenidos presentan los terminos de corto, nmeidano y largo plazo vencidos, con el objetivo de conocer el avance de ajuste de su instrumento de ordenamiento para brindar apoyo y asesorias en los asuntos ambientales.
        - Mesa de trabajo con funcionarios de la Escuela Superior de Administracion Publica - ESAP para brindar asistencia tecnica en el ajuste de los instrumentos de ordenamiento de los municipios de los Palmitos, Ovejas y Morroa.
        - Estudio y evaluacion de ajuste del Esquema de Ordenamiento Territorial, EOT del municipio del Roble por parte de la Corporación para posteriormente llevar a cabo concertación de los asuntos exclusivamente ambientales
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15032,
            'year' =>3,
            'value' => 23,
            'description' => 'En el Banco de proyectos de la Corporación (BPC) de CARSUCRE con corte a 30 de junio de 2022, ha llevado a cabo:
        - 2 proyectos formulados para la vigencia 2022 a traves del Fondo de Compensacion Ambiental -  FCA los cuales se encuentran aprobados y en espera de Resolución por parte del MADS para su ejecución .
        - 3 proyectos formulados para vigencia 2022 por FONAM, de los cuales uno cuenta con concepto de viabilidad favorable se encuentra a espera de la resolución para su ejecución, dos estan en proceso de evaluacion por parte de MinAmbiente.
        - 1  proyectos formulados para vigencia 2023 por FCA, el cual se encuentra en proceso de subsanacion de observaciones.
        - 1 proyecto formulado para vigencia 2023 por FONAM y PGN, el cual se encuentra aprobado (asignado a la ley de presupuesto vigencia 2023)
        - Y por ultimo, la formulacion de 16 proyectos corporativos financiados con recursos propios de la Corporación ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15033,
            'year' =>3,
            'value' => 80,
            'description' => 'El avance de este indicador corresponde al diligenciamiento de la metodología de matriz del Índice de Evaluación del Desempeño Institucional –  IEDI, con reporte de información correspondiente a la vigencia 2021. 
        
        Obteniendo un Índice de Evaluación de Desempeño Institucional del 80,04% ubicando a la Corporacion en la categoria sobresaliente.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15035,
            'year' =>3,
            'value' => 5,
            'description' => 'Se contrato un profesional en geografia para:
        - Fortalecimiento del sistema de información ambiental y territorial del 
        Software GEOAMBIENTAL adquirido por CARSUCRE, para la gestión de información de la oferta y demanda territorial en la jurisdicción de CARSUCRE.
        - Entrega de mapas tematicos a la empresa SIGMA Ingeniera como soporte a la implementacion Software GEOAMBIENTAL
        - Actualizacion cartografica del visor de CARSUCRE.
        - Verificacion y consolidacion de bases de datos de informacion cartografica.
        - Asistencia a capacitaciones para el manejo y soporte tecnico del sistema de informacion ambiental.
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15036,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022 la actualización de las Determinantes Ambientales',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15038,
            'year' =>3,
            'value' => 5,
            'description' => 'Durante el primer semestre de la vigencia 2022 se realizo la evaluación del componente de riesgo principalmente en el análisis de amenaza por inundación y movimiento de masa en el componente urbano y rural de los Municipios de San Onofre, San Antonio de Palmito, Corozal, Los Palmitos y Ovejas.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15039,
            'year' =>3,
            'value' => 6,
            'description' => 'Durante el primer semestre de la vigencia 2022, en materia de las acciones de Educación Ambiental se han realizado: 
        
        *CIDEA: 1 Procesos
        Acompañamiento a la conformación y funcionamiento del CIDEA Corozal a través de la realización de talleres para la priorización de problemas ambientales relevantes del contexto, así como a la estructuración colectiva de su plan de acción. .
        
        * PRAE:7 Procesos
        Acompañamiento a establecimientos educativos:  I.E. Normal superior, San Luis Beltrán, Tercer Milenio,  José Ignacio López, Comfasucre, y la  I.E.T.A. Aníbal Gándara Campo, en la estructuración de una ficha ambiental para el abordaje del problema ambiental relevante del contexto, en el marco del desarrollo de sus respectivos PRAE. 
        
        Acompañamiento y asesoría a a la I.E José Yemaíl Tous para el aprestamiento y la participación en la Feria Regional de Educación Ambiental y Negocios Verdes Biosinú, del 27 al 29 de abril en la ciudad de Montería
        
        *PRAU: 1 Proceso
        Se adelantaron procesos de articulación con el PRAU de Cecar para avanzar en el proceso educativo acerca de los beneficios económicos y ambientales en los Negocios Verdes en el contacto de las instituciones educativas y sus PRAE.
        
        Acompañamiento al Proyecto Ambiental de la Corporación Universitaria del Caribe CECAR en Feria de Educación Ambiental y Negocios Verde Biosinú.
        
        *PROCEDA: 1 Proceso
        Se adelantó la fase de prospección del barrio la Ciudadela Amable a través de sus líderes, para la implementación de un PROCEDA en esa comunidad..
        
        *JOVENES DE AMBIENTE: 2 Proceso
        Apoyo en la conformación de 2 nodos territoriales de Red Jóvenes de Ambiente de los municipios de Toluviejo, Colosó. Actualmente, se encuentran conformados 5 nodos (Sincelejo, Sampués, Santiago de Tolú, Toluviejo y Colosó).
        
        Se realizaron tres (3) reuniones con jóvenes de ambiente para definir acciones que contribuyan al fortalecimiento interno de los nodos conformados, para el segundo semestre del 2022. 
        Dentro de las acciones a desarrollar se acordaron: realizar un encuentro departamental de la Red de jóvenes donde participen representantes de los cinco nodos municipales que se encuentran conformados en la jurisdicción CARSUCRE, apoyar la campaña liderada por RESPEL de residuos posconsumo en cada uno de los municipios donde haya presencia de la red, hacer parte de un proceso de capacitación formación que se realizará para fortalecer la red, su estructura y recurso humano. Crear una estrategia de emprendimiento verde por parte de los jóvenes para lo cual recibirán apoyo de la oficina de negocio verdes.
        
        *Apropiación Social del Conocimiento Ambiental : 4 Proceso
        Se llevó a cabo la implementación de un proceso de Capacitación formación de actores comunitarios y beneficiarios de las áreas de influencia de los proyectos de restauración ecológica en los municipios del Golfo de Morrosquillo. En total, fueron realizados veintisiete (27) talleres distribuidos en los municipios de San Onofre, Santiago de Tolú y Toluviejo ubicados en la jurisdicción de CARSUCRE, Zona del golfo de Morrosquillo. Entre tanto, quinientas cincuenta y dos (552) personas fueron sensibilizadas, las cuales doscientas setenta y nueve (279) pertenecen a la comunidad general y doscientas setenta y tres (273) a estudiantes de instituciones educativas.
        
        Se adelantaron procesos de cooperación para el trabajo articulado con la Corporación Universitaria del Caribe Cecar en el Programa Arborizatón, en lo que respecta al ciclo pedagógico de dicho programa.  Así mismo, el acompañamiento técnico-pedagógico de la Estrategia Arborizatón. Con el proceso un estudiante una semilla al mes.
        
        Se llevaron a cabo procesos de participación con los estudiantes de los diferentes semilleros de investigación del programa de Biología de la Universidad de Sucre para vincularlos activamente en los proyectos de restauración ecológica desde el enfoque de investigación participativa.
        
        Desarrollo de campañas pedagógicas de restauración ecológica con participación de la comunidad universitaria del área de Jurisdicción. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15040,
            'year' =>3,
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
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15041,
            'year' =>3,
            'value' => 100,
            'description' => 'Se participó en los procesos de revisión y ajuste de los POT de los municipios de San Antonio de Palmito y El Roble para los cuales se ha dejado en evidencia el mandato legal sobre la incorporación de las consideraciones de cambio climático en este instrumento con base en la realidad de cada ente territorial.
        
        Con fecha 21 de junio de 2022 se proyectó oficio dirigido a los 19 alcaldes de la jurisdicción de CARSUCRE, cuyo Asunto estaba orientado a “la necesidad de implementar medidas urgentes y más ambiciosas para hacer frente a los riesgos climáticos en los territorios”.
        
        En articulación con el Programa ProNDC de la GIZ que apoya a Colombia en la implementación de sus metas climáticas y con fundamento en el Memorando de Entendimiento firmado con GIZ año 2021, se trabajó en el primer semestre de 2022, en el fortalecimiento de la Red de Acción Climática de Sucre para la captura, procesamiento y divulgación de información agroclimática para los sistemas productivos agropecuarios priorizados; participación en el diseño y montaje de seis (6) parcelas de monitoreo agroclimático en los municipios de Buenavista, San Pedro, Ovejas, los Palmitos, San Onofre y Toluviejo. 
        
        Apoyo en la formulación del Plan Veredal de Adaptación al Cambio Climático en la vereda Calabozo, municipio de San Pedro. El último Taller realizado el 17 de junio tenía como objetivo priorizar medidas de adaptación al cambio climático en sistemas productivos agropecuarios en la vereda Calabozo. Se aspira que algunas medidas priorizadas en este Plan Veredal puedan contar con financiamiento de la cooperación internacional.
        
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15043,
            'year' =>3,
            'value' => 1,
            'description' => 'CARSUCRE firmó convenio con la Alcaldía de San Juan de Betulia y la Corporación Agua Viva, con el objeto de “Aunar esfuerzos técnicos, administrativos y financieros que contribuyan a la construcción de 50 estufas ecoeficientes como medidas de mitigación al cambio climático en los municipios de San Pedro y Los Palmitos, jurisdicción de CARSUCRE” con una duracion de cinco (5) meses, por un valor de  $142.857.121 de los cuales CARSUCRE aportó la suma de $100.000.000, Desarrollando lo siguiente: 
        
        - Proceso de construcción e instalación de 50 estufas ecoeficientes como medidas de mitigacion al cambio climático en zona rural del municipio de San Pedro y Los Palmitos
        - Desarrollo de dos talleres de socialización del proyecto y sensibilización en educación ambiental dirigidas a las familias campesinas beneficiarias del proyecto en las tematicas de cambio climatico y practicas de uso eficiente de la leña.
        
        
        
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15046,
            'year' =>3,
            'value' => 1,
            'description' => 'Para el cumplimiento de este producto se llevo a cabo lo siguientes actividades dentro del ejercicio de control y vigilancia de zonas costeras:
        
        * Se realizaron tres (3) Puestos y un (1) Operativo de control, en compañía con instituciones policivas y militares, para adelantar acciones de control al tráfico ilegal de flora y fauna silvestre, de igual forma, hacer campaña de educación ambiental y sensibilización, sobre la tenencia, transporte y comercialización de fauna silvestre;llevandose a cabo en los municipios de San Onofre (2 puestos de control), Coveñas (1 puesto de control) y Santiago de Tolu (1 operativo de control)
        * Dos (02) operativos de control de redes tortugueras en Isla Boquerón, en el municipio de San Onofre donde se obtuvo como resultado la incautación de 60 metros de red,aproximadamente.* * Tres (3) operativos de control al tráfico de flora silvestre, las especies forestales con la incautacion de volúmenes cúbicos de especies de flora.
        * Visitas de inspección técnica y ocular abordando las tematicas de evaluacion de un establecimiento de carpas playeras en el sector Puerto viejo perteneciente al Municipio de Coveñas; concepto de viabilidad ambiental para la realización de dragado en el muelle 
        * Acompañamiento a la dependencia de Licencias ambientales de CARSUCRE para verificación de inventario de veda para permiso de aprovechamiento forestal en solicitud del proyecto de mejoramiento vial ruta Tolú-Coveñas a cargo de la CONCESIÓN RUTA AL MAR S.A.S.
        * Visitas de inspección técnica y ocular para atender quejas y/o problematicas ambientales tales como: construcción de espolón en playa marítima, afectaciones ambientales derivadas del inadecuado manejo y disposición de residuos sólidos a cargo de la empresa prestadora del servicio público AGUAS DEL MORROSQUILLO S.A. E.S.P.;
        * verificación de presuntos vertimientos en zona de playa en las instalaciones del Hotel Costa Azul, Casa Blanca Condominio, y en el Hotel Portal del Caribe, ubicados en el Municipio de Coveñas; presuntos vertimientos de aguas servidas, aterramiento en zona de manglar y quema de residuos sólidos; aterramiento con material de cantera y residuos sólidos en cercanía a caño Alegría; ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15047,
            'year' =>3,
            'value' => 2,
            'description' => 'Durante el primer semestre de la vigencia 2021 se han monitoreado los siguientes ecosistemas marino-costeros estrategicos:
        
        Manglares: 
        - Controles de tala y aterramientos de las diferentes especias arbóreas de nuestro ecosistema en el DRMI CIENEGA LA CAIMANERA, PR GUACAMAYAS Y los diferentes manglares del Golfo de Morrosquillo 
        - Sanción Preventiva, el cierre de un carreteable utilizado por el Consorcio Ruta al Mar, dentro del área protegida ciénega la Caimanera
        - En compañía de la Autoridad Nacional de Licencias Ambientales – ANLA, se adelanto la delimitación y zona de amortiguamiento del DRMI CIENEGA LA CAIMANERA
        - CARSUCRE viene adelantando el Proyecto Vida Manglar en las Áreas Protegidas- AP CAIMANERA Y GUACAMAYA, la cual es una iniciativa colectiva que reduce los efectos del cambio climático y conserva los ecosistemas de manglar del Caribe colombiano, y tiene como objetivo evitar la emisión de aproximadamente 939.296 toneladas de CO2 a la atmósfera en los próximos 30 años.
        
        Corales:
        Se viene avanzando en la restauración de corales con el proyecto UN (1) MILLON DE CORALES, en el cual nos comprometimos en el establecimiento de Dieciséis Mil (16000) colonias para rehabilitar y/o restaurar el arrecife coralino, con el fin de aumentar la cobertura de coral vivo, para ello se instaló una guardería de coral en forma de mesa frente a las costas de Rincón del mar – San Onofre. 
        
        y Finalmente transversal al monitoreo de ecosistemas marino-costeros se han llevado a cabo mesas de trabajo en la generacion de capacidades institucionales para reforzar la gobernanza local',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15050,
            'year' =>3,
            'value' => 1,
            'description' => 'Para el primer semestre del año 2022, se han realizado 3 salidas de campo sobre puntos ecológicos estratégicos, como lo son la Roca de Morrosquillo ubicada bajo las coordenadas N 09°25ʹ36ʺ O 75° 41ʹ15,6ʺ (1 salida de campo) y el bajo Pajarito, ubicado bajo las coordenadas N 09°39ʹ48,8ʺ O 75°41ʹ09.9ʺ (2 salidas de campo), con el fin de recopilar datos sobre el estado actual de las poblaciones y distribución de pez león en la jurisdicción. Cabe resaltar, que la abundante cobertura bentónica en estos lugares, genera resguardos y proporciona alimento de forma indirecta para esta especie invasora, lo que ha facilitado su desarrollo en estos lugares, por lo que, en salidas anteriores para el monitoreo y caracterizaciones de ecosistemas marinos, se había alertado sobre la presencia de esta especie.
        Como resultados de este semestre, se sugiere que las poblaciones de pez león en el bajo Pajarito han sido diezmadas casi en su totalidad debido a que en años anteriores se venía presentando captura en abundancias considerables. Por lo tanto, para la fecha, sobre las dos salidas realizadas en el bajo pajarito, solo se encontraron 3 individuos de pez león distribuidos en gran parte del área, a los cuales se les tomaron los datos para el registro de la información.
        Por otra parte, el sector Roca de Morrosquillo, de igual forma se capturaron solo 3 individuos de esta especie, debido a que los recorridos en el lugar son mucho más complejos por su profundidad, lejanía y condiciones oceanográficas, por lo que se seguirá implementado estas actividades mediante la activación del protocolo de monitoreo y captura en este lugar.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15051,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15052,
            'year' =>3,
            'value' => 1,
            'description' => 'Se realizaron tres jornadas de limpieza y recolección de residuos en playas, los días 07 de abril de 2022, 08 de junio de 2022 y el 29 de junio de 2022, donde la CARSUCRE,brindo acompañamiento y apoyo en la jornada llevada a cabo en la línea de costa del sector La Coquerita. Esta actividad, llamada Playas sin residuos, Mares productivos, fue liderada por la Fundación Natura & Coca-Cola, contando con el apoyo de la Secretaría de Turismo de la Alcaldía de Coveñas, la Base de Entrenamiento de Infantería de Marina, Asociación de carperos, entre otras entidades.  Se hizo énfasis en la recolección y separación de residuos aprovechables (Botellas PET, plásticos limpios, cartón, latas y botellas de vidrio) y no aprovechables (Bolsas sucias, desechables, residuos ordinarios). ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15053,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022, el monitoreo de la calidad de aguas marinas y costeras',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15054,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15055,
            'year' =>3,
            'value' => 0,
            'description' => 'Programado para el segundo semestre de la vigencia 2022, un area de cosistemas marino-costeros actualizados, mapeados y/o zonificados',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-06-30',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
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
