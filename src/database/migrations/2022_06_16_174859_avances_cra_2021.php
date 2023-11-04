<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCra2021 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 11654,
            'year' =>2,
            'value' => 0,
            'description' => 'La Corporación contrató la ejecución del programa comunitario de medida de adaptación al cambio climatico basado en la proteccion de las zonas abastecedoras del recurso hídrico como ecosistemas estratégicos y en cumplimiento a las acciones de manejo del POMIUAC- RIO MAGDALENA, en el cual entre sus actividades se encuentra el desarrollo de mesas de trabajo con las comunidades para la revisión de las acciones establecidas en el POMIUAC, presenta una ejecucion del 50%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11655,
            'year' =>2,
            'value' => 0,
            'description' => 'Para el año 2021 se estableció como meta la adopcion del Ajuste del Planes de Ordenación y Manejo de Cuencas Hidrográficas del Canal del Dique en cumplimiento a lo establecido en el Decreto 1076 del 2015, sin embargo no se logró realizar la adopción, teniendo en consideracion que no se surtieron las consultas previas con 11 comunidades que hacen parte de la cuenca del canal del dique.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11656,
            'year' =>2,
            'value' => 10,
            'description' => 'Durante el año 2021, se vienen implementando los siguientes programas del Plan de Ordenación y manejo de la cuenca hidrográfica de la Ciénaga de Mallorquín y los Arroyos Grande y León:
        
        	PROGRAMA 1: ADMINISTRACIÓN Y GESTIÓN DEL RECURSO HÍDRICO
        
        	PROGRAMA 2: MANEJO Y CONSERVACIÓN DE LA ESTRUCTURA ECOLÓGICA
        Estos dos programas se vienen cumpliendo con la ejecución del proyecto de Operación del sistema integral de captación, tratamiento con Biotecnología y reúso de las aguas del arroyo león.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11657,
            'year' =>2,
            'value' => 0,
            'description' => 'Dado que la implementación del POMCA Río Magdalena se encuentra sujeta a la adopción de éste bajo el marco normativo del 1076 del 2015, es necesario acotar que dicha adopción no se ha realizado, por lo cual durante la vigencia del año 2021 no se realizó implementación del instrumento, obteniendose un 0% de avance en la meta programada.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11658,
            'year' =>2,
            'value' => 0,
            'description' => 'Dado que la implementación del POMCA Canal del Dique se encuentra sujeto a la adopción de éste bajo el marco normativo del Decreto No. 1076 del 2015, es necesario acotar que dicha adopción no se ha realizado por lo cual durante la vigencia del año 2021 no se realizó implementacion del instrumento obteniendose un 0% de avance en la meta programada.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11659,
            'year' =>2,
            'value' => 1,
            'description' => 'En marco del Contrato No. 00375 de 2020, cuyo objeto es: “Elaborar el plan de manejo de la ciénaga de mallorquin y la actualización de los estudios para el manejo integrado de los manglares del departamento del atlántico en cumplimiento de lo establecido en el plan de acción institucional 2020-2023”, la meta tuvo cumplimiento del 100% en la vigencia 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11660,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11661,
            'year' =>2,
            'value' => 0,
            'description' => 'Durante la vigencia 2021, no se logró realizar la contratación de los estudios del plan de ordenamiento del recurso hidrico, ya que no se contó con el presupuesto necesario para tal fin.  A la fecha se cuenta con los estudios previos para realizar la contratacion en el año 2022. En consecuencia, la meta a corte 31 de diciembre de 2021, presente un avance de 3%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11662,
            'year' =>2,
            'value' => 0,
            'description' => 'No se tenía programación física, para la vigencia 2021, sin embargo, la entidad se encontraba realizando acercamientos y reuniones con el Instituto Ambiental de Estocolmo con el fin de suscribir un convenio que permitiese Actualizar el Índice del Uso del Agua del Departamento del Atlántico, gestión que no se llegó a materializar en la vigencia y por ende no se ejecutaron dichos recursos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11663,
            'year' =>2,
            'value' => 0,
            'description' => 'Se elaboró la Resolución 0145 de 2021 Por medio de la cual  se priorizan cuerpos de agua para el acotamiento de su ronda hirica, en el Departamento del Atlantico.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11664,
            'year' =>2,
            'value' => 0,
            'description' => 'Durante este año 2021 no se logró realizar la contratación de los estudios de Ronda Hidrica, ya que no se contó con el presupuesto necesario para tal fin.  A la fecha se cuenta con los estudios previos elaborados para realizar la contratacion en el año 2022, por lo que la meta presenta un 3% de avance a corte 31 de diciembre de 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11665,
            'year' =>2,
            'value' => 2,
            'description' => 'En la vigencia 2021 se logró el cumplimiento de la meta en el 100%. Las acciones se desarrollaron a través de la ejecución del Contrato No. 281 del 29 de septiembre del 2021 cuyo objeto es: Realizar el monitoreo fisicoquímico, microbiológico e hidrobiológico sobre la calidad y estado actual de las fuentes hídricas del departamento del Atlántico y desarrollo del índice de calidad del embalse el guajaro, en cumplimiento de lo establecido en el Plan de Acción Institucional 2020 – 2023.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11666,
            'year' =>2,
            'value' => 1,
            'description' => 'La Corporación Autónoma Regional del Atlántico conformó para la vigencia 2021, un equipo multidisciplinario que apoya y asesora las actividades de Planificación, Administración y Gestión del recurso hídrico, logrando el cumplimiento de la meta en un 100%. 
        Los profesionales contratados para apoyar y fortalecer al equipo interno de trabajo de la CRA, cuentan con una amplia experiencia en el área ambiental y sus perfiles profesionales corresponden a: (1) Ingeniero Ambiental y Sanitario, (Contrato No.039-2021), (1) Ingeniera Civil con Especialización en Saneamiento Básico, (Contrato No.036-2021), (1) Bióloga con Magister en Recurso Naturales, (Contrato No.026-2021), (1) Geógrafo con Magister en Ciencias, Contrato No.132-2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11667,
            'year' =>2,
            'value' => 3,
            'description' => 'Al cierre de la vigencia 2021, se da cumplimiento a la meta dado que se encuentran conformados  3 Consejos de Cuenca en actividad, representado en las acciones detalladas en adelante.
        Como mecanismo de participación efectiva de los usuarios en la Planeación, Administración, Vigilancia y Monitoreo del recurso Hídrico se encuentran conformados tres (3) Consejos de Cuencas:
        ­	Ciénaga de Mallorquín y los arroyos Grande y León
        ­	Complejo de humedales de la vertiente occidental del Río Magdalena en el departamento del Atlántico. 
        ­	Canal del Dique',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11668,
            'year' =>2,
            'value' => 0,
            'description' => 'VIGENCIA 2021: Con la celebración del Adicional No. 1 del  Contrato No. 377   suscrito el 27 de mayo de 2021, cuyo objeto contractual es: “Obras de mantenimiento de las estructuras de regulación hidrica el porvenir y villarosa, del Embalse el Guajaro, departamento del Atlantico” y, con las acciones desarrolladas para las obras de mantenimiento de las estructuras de regulación hídrica el Porvenir y Villarosa, del embalse el Guájaro se registra un avance del 87% frente a la meta programada para la vigencia, la cual es de un (1) mantenimiento realizado',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11668,
            'year' =>2,
            'value' => 1,
            'description' => 'REZAGO 2020: Con la suscripción y ejecución del contrato Contrato No. 377  de 2020 se dío cumplimiento a esta meta. Se desarrollaron actividades de obras civiles (pararrayos, pinturas, etc); iluminación perimetral, sistema de vigilancia y protección, entre otros.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11669,
            'year' =>2,
            'value' => 1,
            'description' => 'La Corporación Autónoma Regional del Atlántico celebró con el municipio de Manatí, el Convenio Interadministrativo No. 0000216 del 31 de mayo del 2021 cuyo objeto es “Recuperación de la capacidad de drenaje del canal interceptor del municipio de Manatí en el departamento del Atlántico”, el cual se presenta un avance del 100% de acuerdo a acta de obra de fecha del 17 de diciembre del 2021, firmada por el Municipio de Manati, con esta intervención se da un cumplimiento del 100% del indicador.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11670,
            'year' =>2,
            'value' => 1,
            'description' => 'VIGENCIA 2021: La meta se cumplió al 100% a través de varias intervenciones realizadas en los humedales asociados a la vertiente occidental del Río Magdalena, a través de los siguientes contratos y convenios (Página 40 del informe de gestión):  
        1. Convenio No. 001 del 31 de marzo de 2021, celebrado con el Municipio de Santo Tomás para el desarrollo del Proyecto “Canalización del arroyo puente venancio en el municipio de Santo Tomás departamento del Atlantico”. Ejecución 70% a diciembre 31 de 2021.
        
        2.Convenio Interdaministrativo No. 00008 de 2021, con el municipio de Palmar de Varela. Objeto “Aunar esfuerzos técnicos, administrativos y financieros para realizar el mantenimiento, limpieza y remoción de sedimentos del arroyo de la calle 6 entre carreras 9 y 12 del municipio de Palmar de Varela en el departamento del Atlántico” – fecha de suscripción 11 de octubre de 2021. Ejecución 100%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11670,
            'year' =>2,
            'value' => 1,
            'description' => 'Adicional No. 01 al Contrato de Obra No. 0000368 de 2020, objeto: Realizar la limpieza de vegetación acuática en las áreas de las estructuras hidráulica construida en el marco del proyecto de regulación hídrica de las ciénagas de Sabanagrande, Santo Tomás y Palmar de Varela - departamento del Atlantico. Ejecución 100%. Con lo cual se da cumplimiento al REZAGO 2020.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11671,
            'year' =>2,
            'value' => 1,
            'description' => 'A corte de 31 de diciembre de 2021 la meta se cumplió al 100%, las actividades ejecutadas para realizar la intervención para la Recuperación ambiental de la cuenca de Mallorquín, se desarrollaron en marco del Contrato No. 0000329 de 2020 el cual presenta un avance del 100% del Contrato inicial y 100% del Adicional No. 1 suscrito el 28 de mayo de 2021, para continuar con las actividades de optimización y operación del sistema integral de captación, tratamiento con biotecnología y reúso de las aguas del arroyo León para garantizar la sostenibilidad hídrica de la Ciénaga del Rincón “Lago El Cisne”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11672,
            'year' =>2,
            'value' => 2,
            'description' => 'La meta se cumplió en un 100%. El Plan Pescao se inició como una estrategia conjunta entre la CRA, la Secretaría de Desarrollo Económico de la Gobernación del Atlántico, la AUNAP y la Federación de pescadores en el año 2020, el cual contribuyen con el mejoramiento de las poblaciones naturales de especies nativas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11673,
            'year' =>2,
            'value' => 52,
            'description' => 'VIGENCIA 2021: Al cierre del periodo se cuenta con 51 PUEAA aprobados, logrando un cumplimiento del 52% del 60% programado para la meta del año 2021, lo que corresponde a un cumplimiento del 86,7%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11673,
            'year' =>2,
            'value' => 15,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11674,
            'year' =>2,
            'value' => 20,
            'description' => 'Se realizó seguimiento a los 51 PUEAA aprobados en la vigencia 2021, los cuales se encuentran incluidos en las 164 concesiones (De las cuales 1 fue derogada).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11675,
            'year' =>2,
            'value' => 0,
            'description' => 'A corte 31 de diciembre de 2021, la meta registra un avance del 40% representado en las actividades desarrolladas en marco del Contrato No. 0000261 del 2021, cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar un programa comunitario de medida de adaptación al cambio climático, basado en la protección de las zonas abastecedora del recurso hídrico como ecosistemas estratégicos y en cumplimiento a las acciones de manejo del POMIUAC- RIO MAGDALENA, en el cual, entre las actividades desarrolladas podemos mencionar talleres realizados con la comunidad para la elaboración e implementación de dos proyectos comunitarios para las zonas priorizadas como zonas abastecedoras de recurso hídrico, uno de los cuales se elaborará en el municipio de Tubará (Microcuenca Caimán y parte alta del Arroyo Caja) y otro en el municipio de Repelón (Microcuenca arroyo el Limón).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11676,
            'year' =>2,
            'value' => 100,
            'description' => 'Al 31 de diciembre de 2021, la meta tiene cumplimiento del 100%. Esta es una acción de reportar en el SIRH, la cual se debe realizar durante todo el año, hasta el 31 de diciembre del 2021, la corporación cuenta con 30 permisos entre otorgados, renovados y modificados distribuidos de la siguiente manera:
        •	Otorgados: 16 permisos
        •	Renovados: 7 permisos
        •	Modificados: 4 permiso',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11676,
            'year' =>2,
            'value' => 7,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11677,
            'year' =>2,
            'value' => 1,
            'description' => 'A corte 31 de diciembre de 2021, se realizó monitoreo de la calidad fisicoquímica, microbiológica e hidrobiológica a las aguas continentales, dando cumplimiento a la meta programada. Lo anterior, se logró a través de la ejecución del Contrato No. 0000281 del 2021, el cual tiene como Objeto: “Realizar el monitoreo fisicoquimico, microbiologico e hidrobiologico sobre la calidad y estado actual de las fuentes hídricas del departamento del Atlántico y desarrollo del indice de calidad del embalse el guajaro, en cumplimiento de lo establecido en el plan de acción institucional 2020 – 2023.” ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11678,
            'year' =>2,
            'value' => 0,
            'description' => 'La Corporacion suscribió el Convenio No. 0010 del 2021, con el INVEMAR para “Aunar esfuerzos técnicos, administrativos y financieros para evaluar la calidad de las aguas marinas y costeras en el marco del monitoreo de la redcam y determinar las condiciones ambientales del ecosistema de pastos marinos en la ensenada de Puerto Velero, Departamento del Atlántico”. 
        Se firmó el acta de inicio actividades el 1° de diciembre de 2021; a corte 31 de diciembre no se ha realizado el monitoreo, por lo que la meta presenta un avance de ejecución del 5%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11679,
            'year' =>2,
            'value' => 1,
            'description' => 'La meta presenta un avance del 100%, toda vez que como resultado del Contrato 360 de 2020 se generó la Resolución No.0000449 de 2021 “Por la cual se establecen los objetivos de calidad para los cuerpos de agua de la jurisdicción de la corporacion autonoma regional del atlantico a corto, mediano y largo plazo”',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11680,
            'year' =>2,
            'value' => 1,
            'description' => 'A 31 de diciembre de 2021, se registra un cumplimiento del 100% en la meta, el seguimiento a las metas de cargas se realiza a través del diligenciamiento de la matriz en la cual se consigna la información relacionada con las autodeclaraciones de carga en vertimiento, presentadas por los usuarios, información de la entidad de estudios realizados resientemente y la información de las metas de carga establecida para cada tramo; insumos utilizados por la CRA, para la liquidación de la tasa retributiva.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11681,
            'year' =>2,
            'value' => 1,
            'description' => 'REZAGO 2020: Se ejecutó la meta 100% de un inventario de los corregimientos que carecen de saneamiento a traves del Contrato 379 de 2020.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11682,
            'year' =>2,
            'value' => 1,
            'description' => 'La meta programada se cumplió en el 100% a 31 de diciembre del 2021. El cumplimiento a través de la ejecución del Contrato No. 0000379 de 2020 cuyo objeto es: “Realizar el inventario de los sistemas agua potable y saneamiento basico de los corregimientos del departamento del atlantico en el marco de proyecto de control y prevencion de la contaminacion del recurso hidrico”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11683,
            'year' =>2,
            'value' => 1,
            'description' => 'A corte 31 de diciembre de 2021, la meta tuvo cumplimiento del 100%. Durante el año 2021 y de conformidad con la Resolución No. 1433 de 2004, expedida por el Ministerio de Ambiente, Vivienda y Desarrollo Territorial, hoy Ministerio de Ambiente y Desarrollo Sostenible, se realizaron dos visitas de seguimiento ambiental a cada uno de los sistemas de tratamiento de agua residual de los 22 municipios y el Distrito de Barranquilla, para verificar el cumplimiento de los planes de saneamiento manejo de vertimiento, en cuanto al avance físico de las actividades e inversiones programadas y a la meta individual de reducción de carga contaminante establecida.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11684,
            'year' =>2,
            'value' => 2,
            'description' => 'La meta de dos (2) Municipios con apoyo en la implementación de los Planes de Saneamiento de manejo de vertimientos-PSMV se cumplió al 100% en la vigencia 2021, ello se logró a través del Contrato No. 237 del 2021 cuyo objeto es: “Construcción de estación de bombeo y planta de tratamiento de aguas residuales para el municipio de Juan de Acosta y el sector de El Vaiven en el Departamento del Atlántico”',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11684,
            'year' =>2,
            'value' => 1,
            'description' => 'Se cumplió con la meta de un (1) Municipio con apoyo en la implementación de los Planes de Saneamientos de manejo de vertimientos-PSMV. Ésto se logró a través de la ejecución del Contrato de Obra No. 00000538 de 2018 cuyo objeto es: “Construcción Planta de Tratamiento de Aguas Residuales para el municipio de Piojó, departamento del Atlántico”. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11685,
            'year' =>2,
            'value' => 2,
            'description' => 'La Corporación Autónoma Regional del Atlántico, celebró el Contrato No. 237 del 2021 para realizar la “Construcción de estación de bombeo y planta de tratamiento de aguas residuales para el municipio de Juan de Acosta y el sector de El Vaiven en el Departamento del Atlántico”, garantizando con su ejecución, el apoyo en la implementación de los Planes de Saneamiento de manejo de vertimientos-PSMV en el municipio de Juan de Acosta, en el marco del Plan Departamental de Agua.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11686,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11687,
            'year' =>2,
            'value' => 1,
            'description' => 'REZAGO 2020: Se ejecutó el  Contrato 363 de 2020 con el cual se da cumplimiento al 100% de la meta programada. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11688,
            'year' =>2,
            'value' => 273,
            'description' => 'A corte 31 de diciembre de  2021, se realizó la canalizacion de 273 ml del arroyo el Salao, lo cual representa un 91% de los 300 ml programados como meta para la vigencia a traves del Contrato N°0000367 del 22 de diciembre de 2014 cuyo objeto es “Realizar la construcción de la canalización para la recuperación paisajística y ambiental del arroyo el Salao, ubicado en el municipio de Soledad, Departamento del Atlántico”.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11689,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizó informe de seguimiento a las obras establecidas en el proyecto “Realizar la construcción de la canalización para la recuperación paisajística y ambiental del arroyo El Salao ubicado en el municipio de Soledad, Departamento del Atlántico”, correspondiente al Contrato N°0000367 del 22 de diciembre de 2014, dando cumplimiento a la meta programada de Un (1) Informe anual de seguimiento a las Condiciones ambientales del Arroyo Salao.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11690,
            'year' =>2,
            'value' => 1,
            'description' => 'La Corporación dio cumplimiento al 100% de la meta elaborando el informe de seguimiento a las obras de canalización de los arroyos del Distrito de Barranquilla establecidas en el marco del Convenio No. 031 de 2016 entre la Corporación Autónoma Regional del Atlántico y la Alcaldía Distrital de Barranquilla.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11691,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11692,
            'year' =>2,
            'value' => 0,
            'description' => 'A 31 de diciembre de 2021 la meta registra un avance del 5% con la suscripción del Contrato No. 0000305 del 28 de diciembre del 2021 cuyo objeto es:  “Realizar las obras de mantenimiento y adecuación de las naves de producción del vivero ARMANDO DUGAND GNECCO ubicado en el municipio de Repelon, a fin de fortalecer técnica y ambientalmente el vivero para la producción, acopio y distribución de plantulas con fines de restauración y recuperacion de suelos”, al cierre de la vigencia el Contrato se encontraba a la espera del cumplimiento de requisitos para dar inicio y ser ejecutado durante la vigencia 2022.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11693,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11694,
            'year' =>2,
            'value' => 1,
            'description' => 'Con la ejecución de actividades desarrolladas en marco del Contrato No. 0000261 de 2021 cuyo objeto es “Prestación de servicios profesionales y de apoyo a la gestión para desarrollar un programa comunitario de medida de adaptacion al cambio climatico basado en la proteccion de las zonas abastecedora del recurso hidrico como ecosistemas estrategicos y en cumplimiento a las acciones de manejo del POMIUAC- Río Magdalena” se da cumplimiento a la meta de una medida de adaptación al cambio climatico implementada a traves de la ejecución del programa comunitario con la realización de capacitaciones y talleres en el municipio de Juan de Acosta. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11695,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11696,
            'year' =>2,
            'value' => 1,
            'description' => 'REZAGO 2020: Se ejecutó Contrato No. 351 del 2020 con el cual se da cumplimiento a la meta programada para dicha vigencia.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11697,
            'year' =>2,
            'value' => 2,
            'description' => 'En el marco del Contrato No. 0000148 de 2021, cuyo objeto es “Desarrollar una estrategia de educación sobre el control de dos (02) especies invasoras y exóticas, la conservación y uso sostenible de especies amenazadas y priorizadas en el plan de acción 2020-2023, a través de la sensibilización ambiental.”  se logró brindar a las comunidades del departamento del Atlántico información sobre las especies exóticas e invasoras presentes en el territorio, las cuales corresponden al Caracol Gigante Africano y el Neem, y entregar a los habitantes del Atlántico, como parte del plan de contingencias, una serie de orientaciones técnicas para el manejo y control de estas dos (02) especies exóticas e invasoras identificadas. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11698,
            'year' =>2,
            'value' => 2,
            'description' => 'En el marco del Contrato No. 00000148 de 2021, se adelantaron acciones de apoyo para el desarrollo de dos (2) proyectos comunitarios para la conservación y uso sostenible de especies amenazadas priorizadas para el departamento del Atlántico, a través del acompañamiento a la Corporación y a los participantes en la elaboración del proyecto, dando cumplimiento a la meta establecida de 2 proyectos durante la vigencia los cuales se encuentran discriminadas en el informe.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11699,
            'year' =>2,
            'value' => 1,
            'description' => 'Se cumplió la meta programada, a través del Contrato No.00351 de 2020 cuyo objeto es: “Prestar los servicios para desarrollar e implementar acciones de conservación y uso sostenible de especies amenazadas y prioriozadas en el departamento del Atlántico, asi como una estrategia de educación y control de las especies invasoras y exóticas, a través de la sensibilización ambiental”.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11700,
            'year' =>2,
            'value' => 1,
            'description' => 'REZAGO 2020: Se ejecutó Contrato No. 364 del 2020 con el cual se da cumplimiento a la meta programada para dicha vigencia.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11701,
            'year' =>2,
            'value' => 2,
            'description' => 'REZAGO 2020: Se ejecutó Contrato No. 351 del 2020 con el cual se da cumplimiento a la meta programada para dicha vigencia.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11702,
            'year' =>2,
            'value' => 1,
            'description' => 'Teniendo en cuenta que para la vigencia 2021, se tiene como meta  realizar una (1) acción  de manejo para la adopción e implementación de la Unidad Ambiental Costera, esta se cumplió en un 100% con  una jornada de capacitación sobre la Consulta Previa de este tipo de instrumentos de ordenación, realizada por la Subdirección de Consulta Previa del Ministerio del Interior, la cual se llevó a cabo el día 23 de abril de 2021, organizada por la Corporación Autónoma Regional del Magdalena – CORPAMAG y dirigida a los miembros de la UAC RIO MAGDALENA y de la UAC VERTIENTE NORTE.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11703,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11704,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11705,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11705,
            'year' =>2,
            'value' => 0,
            'description' => 'La meta no presenta avances al 31 de diciembre de 2021. Para lograr el cumplimiento de la misma, la Corporación se encuentra revisando la información existente, con el objetivo de estructurar los Estudios Previos y Proyectos de Pliegos que permitan la contratación, a través de un proceso de selección objetiva de mínima cuantía, de un contratista con experiencia para desarrollar las actividades requeridas en el cumplimiento de la meta trazada. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11706,
            'year' =>2,
            'value' => 0,
            'description' => 'VIGENCIA 2021: Los 2 Planes de Manejo Ambiental de las Áreas Protegidas del Departamento que serán actualizados para el cumplimiento del indicador, corresponden a DRMI Luriza y El Palomar. Con las actividades desarrolladas para lograr la actualización del PMA del Distrito de Manejo Integrado del DMI Luriza, la meta presenta un avance del 25% al cierre del presente informe. 
        Las anteriores acciones se desarrollan de conformidad con el convenio marco suscrito con SIRAP CARIBE el pasado 15 de mayo de 2020, el cual se encuentra vigente a la fecha.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11706,
            'year' =>2,
            'value' => 1,
            'description' => 'REZAGO2020: A través del Contrato No. 00351 de 2020 cuyo objeto es Desarrollar e implementar acciones de conservación y Uso sostenible de especies amenazadas y, priorizadas en el Departamento del Atlántico, así como una estrategia de educación y control de las especies invasoras y exóticas, a través de la sensibilización ambiental  se actualizó el PMA de la Reserva Forestal protectora El Palomar, cumpliendo con la meta programada para la vigencia 2020.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11707,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11708,
            'year' =>2,
            'value' => 0.1,
            'description' => 'La acción estratégica 2.3.1.3 correspondiente al Programa 2.3.1: Áreas Protegidas no se tenía programada meta física para la anualidad; sin embargo, se hizo necesario implementar el Acuerdo 04 del SIRAP CARIBE y apoyar la implementación de los Sistemas de Áreas Protegidas en el marco de los acuerdos vigentes del SIRAP CARIBE y en el marco del Plan Operativo 2020-2021 - Convenio marco 001 de 2020, a través de la secretaría ejecutiva del SIRAP, por tal razón la Corporación debió asignar recursos en esta acción estratégica. Se atienden las recomendaciones del Ministerio para hacer los ajustes necesarios, teniendo en cuenta que los seguimientos deben realizarse con suficiente antelación y poder solicitar los ajustes que sean del caso',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11709,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11710,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11711,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11712,
            'year' =>2,
            'value' => 2,
            'description' => 'En el marco del Contrato No. 000155 de 2021 cuyo objeto es: “Desarrollar un programa de educación ambiental que influya en la reducción de procesos de transformación y pérdida de ecosistemas especialmente influenciados por el cambio climático en las áreas protegidas del Departamento del Atlántico”, se da cumplimiento al 100% de la meta a través del desarrollo de estrategias dirigidas a los propietarios de predios ubicados en las áreas protegidas (Luruaco, Piojó, Repelón y Usiacurí). Para lograr el cumplimiento de la meta, se realizaron talleres en los municipios mencionados. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11713,
            'year' =>2,
            'value' => 2,
            'description' => 'En el marco del Contrato No. 0000155 de 2021 cuyo objeto es: “Desarrollar un programa de educación ambiental que influya en la reducción de procesos de transformación y pérdida de ecosistemas especialmente influenciados por el cambio climático en las áreas protegidas del Departamento del Atlántico”  se da cumplimiento a la meta  con la intervención de las fuentes hidricas en Piojo, Repelón y Usiacurí.
        Al cierre del informe se vienen realizando acciones de sensibilización a poblaciones de los municipios de Usiacurí, Piojo Repelón y actores claves en la conservación de áreas estratégicas ambientales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11714,
            'year' =>2,
            'value' => 2,
            'description' => 'Con la formulación e implementación de dos (2) Proyectos Ecoturísticos como alternativa sostenible en las áreas protegidas y sus zonas aledañas, cumplimos con el 100% de la meta programada para la vigencia 2021
        Los proyectos se lograron como resultado final de un proceso de capacitación que se desarrolló con la participación de la comunidad de los municipios de Luruaco y Piojó, buscando impulsar el desarrollo económico local, con base en actividades de conservación como el ecoturismo. Durante los procesos formativos se identificaron las múltiples potencialidades que tienen estos municipios, para desarrollar actividades relacionadas con el turismo de comunidad (naturaleza, ecoturismo, cultural, etc.). ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11715,
            'year' =>2,
            'value' => 0,
            'description' => 'Se adelantaron gestiones para desarrollar un (1) estudio  técnico  que  defina  la capacidad  de  carga  para  el  control  de  ingreso  e  impactos  ambientales generados por los visitantes de las áreas protegidas en el Atlántico. 
        Al cierre del presente informe, la Subdirección de Gestión Ambiental elaboró los estudios previos para iniciar el proceso de contratación. Al finalizar la vigencia 2021 la meta tiene un avance del 3%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11716,
            'year' =>2,
            'value' => 2,
            'description' => 'Dentro de las acciones de reducción del riesgo de desastre y articulados con las acciones de conservación del bosque seco del Departamento se requiere contar con protocolos que permitan atender efectivamente cualquier en las  areas protegidas, para contr con dichos protocolos, en marco del Contrato No. 0000154 del 30 de marzo del 2021. La Corporación implementó  protocolos para la atención de incendios en cobertura vegetal en áreas protegidas del departamento, ubicadas particularmente en el municipio de Piojó ( El Palomar y Los Charcones), a través de la elaboración y socialización de dos protocolos, dando cumplimiento al 100% de la meta programada para la vigencia 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11717,
            'year' =>2,
            'value' => 1,
            'description' => 'A 31 de diciembre del 2021 la meta logró su cumplimiento al 100%. Las acciones adelantadas han permitido posicionar los negocios verdes como un nuevo renglón de la economía regional. 
        
        Las acciones que permitieron el logro de la meta se han desarrollado en marco del convenio No.004 de 2021 Suscrito con la Alianza Colombiana de Instituciones Públicas de Educación Superior - RED SUMMA. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11718,
            'year' =>2,
            'value' => 27,
            'description' => 'Producto del proceso de verificación a través de la realización de visitas técnicas realizadas entre la CRA y el Ministerio y acuerdo con el cumplimento de los criterios de selección para que puedan ser avalados como Negocios Verdes, los siguientes 27 Negocios cumplieron con los requisitos exigidos para poder ser un negocio avalado por la autoridad CRA, con corte a diciembre de 2021, en apoyo con la oficina de negocios verdes del Ministerio de Ambiente y Desarrollo Sostenible. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11719,
            'year' =>2,
            'value' => 1,
            'description' => 'La Subdirección de Gestión Ambiental, al cierre de la vigencia 2021 adelantó el proceso de planificación para realizar la Feria de negocios verdes, éstas actividades  se llevaron  a cabo durante la vigencia para ser presentada en el centro Comercial Buenavista 2 de la ciudad de Barranquilla, como una estrategia de promoción, divulgación y realización de Negocios Verdes en el Departamento del Atlántico, la feria se desarrolló en el marco del Convenio 004 de 2021 suscrito con la alianza colombiana de instituciones públicas de educación superior - RED SUMMA. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11720,
            'year' =>2,
            'value' => 1,
            'description' => 'En el marco del Convenio No. 004 del 2021, suscrito con la Alianza Colombiana de Instituciones Públicas de Educación Superior - RED SUMMA, se realizarán las gestiones necesarias para la celebración de Convenios de Cooperación o alianzas con el sector público o privado nacional o internacional que permita fortalecer la oferta de asistencia técnica y de marketing de los Negocios Verdes existentes en el departamento del Atlántico. 
        
        En tal sentido, la meta de establecer un (1) convenio en la vigencia 2021 tuvo cumplimiento del 100%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11721,
            'year' =>2,
            'value' => 1,
            'description' => 'La corporación, dentro del marco del programa de bolsa verde, a pesar de no contar con el respectivo operador del programa, ha avanzado en el desarrollo de las estrategias contempladas en uno de los proyectos priorizados relacionados con bosque seco, para lo cual aprobó la compra de aproximadamente 62 ha. en el área protegida El Palomar y dentro de la misma, la acción de restauración del área a través de la compensación aprobada a la empresa amarillo, de lo cual se hizo entrega formal por parte de dicha empresa y el respectivo seguimiento para la vigencia 2021, lo que nos ha permitido determinar la eficacia del diseño propuesto en el marco de Bolsa Verde. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11722,
            'year' =>2,
            'value' => 0,
            'description' => 'La meta tuvo a 31 de diciembre de 2021 un avance del 20%, representado en actividades desarrolladas a lo largo de la vigencia. Brindamos asistencia técnica mediante reuniones virtuales, correos electrónicos y talleres presenciales, en cuanto a la construcción del PMEA a los 22 CIDEA.
        
        Cuentan con diagnóstico en fase de construcción avanzada:  los CIDEA de Piojó, Malambo, Ponedera, Usiacurí y Candelaria. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11723,
            'year' =>2,
            'value' => 0,
            'description' => 'La meta tiene a diciembre 31 de 2021 un avance del 20%, representado en las siguientes actividades.
        
        Participación del Foro “MALAMBO, CONSTRUYENDO CIUDAD VERDE”: desarrollado por el CIDEA de Malambo el 27 de abril de 2021, se presentó una ponencia titulada “Moral y Cuidado de la Tierra”, Cuyo objetivo fue “dar una mirada sobre las “luces” que aporta la Educación Ambiental para entender cómo influye la moral en el cuidado de la Tierra”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11724,
            'year' =>2,
            'value' => 1,
            'description' => 'Con las actividades desarrolladas en la vigencia 2021 cumplimos con el 100% de la meta programada.
        Se presentaron los avances para la construcción del Plan Departamental de Educación Ambiental para el Atlántico en reunión del CIDEA departamental, realizada el día 03 de marzo de 2021 en el marco de la construcción del Plan Decenal de Educación Ambiental-PDEA. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11724,
            'year' =>2,
            'value' => 1,
            'description' => 'Con actividades desarrolladas en la vigencia 2021 cumplimos con el 100% de la meta programada para la vigencia 2020.
        Se presentaron los avances para la construcción del Plan Departamental de Educación Ambiental para el Atlántico en reunión del CIDEA departamental, realizada el día 03 de marzo de 2021 en el marco de la construcción del Plan Decenal de Educación Ambiental-PDEA. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11725,
            'year' =>2,
            'value' => 50,
            'description' => 'VIGENCIA 2021:  A través del Convenio No.003 del 2021  celebrado para aunar esfuerzos administrativos, técnicos y financieros a fin de fortalecer la inclusión de la dimensión ambiental en la educación formal y la estrategia de economía circular en el departamento del Atlántico, la CRA brindó asistencia técnica a 65 PRAE; dando cumplimiento al 100% de la meta programada para la vigencia 2021 (50 PRAE).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11725,
            'year' =>2,
            'value' => 15,
            'description' => 'REZAGO 2020: Se cumple el 100% del rezago de la vigencia 2020 con la asistencia técnica a 15 PRAE, a traves del convenio No.003 del 2021',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11726,
            'year' =>2,
            'value' => 20,
            'description' => 'VIGENCIA 2021: A través del Convenio No.003 del 2021  celebrado para aunar esfuerzos administrativos, técnicos y financieros a fin de fortalecer la inclusión de la dimensión ambiental en la educación formal y la estrategia de economía circular en el departamento del Atlántico, la Corporación fortaleció veinticinco (25) Semilleros de Investigación, Grupos Ecológicos o Clubes de Ciencia y dinamizadores ambientales en los municipios del departamento del Atlántico, de los cuales, veinte (20) semilleros corresponden a la vigencia 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11726,
            'year' =>2,
            'value' => 5,
            'description' => 'REZAGO 2020: Se cumple el 100% del rezago  con el fortalecimiento de  cinco (5) semilleros de investigación descrito anteriormente en el Convenio 003 de 2021',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11727,
            'year' =>2,
            'value' => 1,
            'description' => 'En alianza con la Uniminuto, la CRA viene participando en el grupo de reflexión curricular, en la planeación de competencias, del futuro profesional en psicología, para el afianzamiento de conductas acordes con el desarrollo ambiental, la educación y la construcción sostenible, de acuerdo con las políticas nacionales e internacionales vigentes. 
        Con la acción realizada, la meta se cumplió en el 100% para la vigencia 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11728,
            'year' =>2,
            'value' => 1,
            'description' => 'En marco del convenio No.003 del 2021 celebrado para Aunar esfuerzos administrativos, técnicos y financieros a fin de fortalecer la inclusión de la dimensión ambiental en la educación formal y la estrategia de economía circular en el departamento del Atlántico, se llevó a cabo una investigación que nos permitiera conocer el estado del arte de la educación ambiental en el departamento del Atlántico.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11729,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11730,
            'year' =>2,
            'value' => 10,
            'description' => 'VIGENCIA 2021: A través del Contrato No. 00153 del 30 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar un programa de sensibilización para fortalecer en la comunidad el conocimiento ambiental sobre el departamento del Atlántico, a través de estrategias de comunicación, educación ambiental y del acompañamiento apoyo a los PROCEDA, apoyamos e implementamos 15 Proyectos Ciudadanos de Educación Ambiental en el Departamento, de los cuales 10 corresponden a la vigencia 2021 y  para REZAGO 2020  corresponden 5 proyectos dando cumplimientoal 100% de este.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11730,
            'year' =>2,
            'value' => 5,
            'description' => 'A través del Contrato No. 00153 del 30 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar un programa de sensibilización para fortalecer en la comunidad el conocimiento ambiental sobre el departamento del Atlántico, a través de estrategias de comunicación, educación ambiental y del acompañamiento apoyo a los PROCEDA, apoyamos e implementamos 15 Proyectos Ciudadanos de Educación Ambiental en el Departamento, de los cuales 10 corresponden a la vigencia 2021 y  para REZAGO 2020  corresponden 5 proyectos dando cumplimientoal 100% de este.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11731,
            'year' =>2,
            'value' => 110,
            'description' => 'Con las actividades desarrolladas a través del Contrato No.151 del 29 de marzo del 2021, cuyo objeto contractual es : “Prestación de servicios profesionales de apoyo a la gestión para desarrollar un programa de formación ciudadana alrededor de liderazgos con capacidad técnica para orientar procesos participativos en función de alcanzar los niveles de sostenibilidad y resiliencia en las comunidades rurales y urbanas del departamento del Atlántico, propuesto en el Plan de Acción Institucional de la CRA” se dio cumplimiento al 100% de la meta establecida para la vigencia 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11732,
            'year' =>2,
            'value' => 0,
            'description' => 'VIGENCIA 2021: Para dar cumplimiento a la meta de apoyar la implementación de dos (2) proyectos sobre gestión del riesgo propuestos por los CMGR, la Corporación celebró el contrato No.152 del 30 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar estrategias educativas ambientales para la construcción de una cultura de prevención y gestión del riesgo en instituciones educativas oficiales del departamento, así como el apoyo a los proyectos propuestos por los CMGR. En marco del contrato señalado, se construyó una base de datos de los consejos municipales de Gestión del Riesgo de municipios del Atlántico. No se logró el cumplimiento de la meta; sin embargo, al cierre del informe de gestión se tiene un avance del 80% de la misma, a la cual se dará cumplimiento en el primer semestre de la siguiente vigencia.
        
        REZAGO 2020: La meta programada para la vigencia 2020 no presenta avances dado que presupuestalmente no ha sido posible la contratación que permita dar cumplimiento a la misma. Se considerará la posibilidad de reprogramar la meta .',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11733,
            'year' =>2,
            'value' => 73,
            'description' => 'La meta programada para la vigencia 2021 tuvo cumplimiento del 100%. El apoyo a las 73 instituciones educativas en la formulación y/o actualización de los PEGR se logró en marco del Contrato N°152 del 30 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar estrategias educativas ambientales para la construcción de una cultura de prevención y gestión del riesgo en instituciones educativas oficiales del departamento, así como el apoyo a los proyectos propuestos por los CMGR.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11734,
            'year' =>2,
            'value' => 100,
            'description' => 'En la vigencia 2021, la meta tuvo cumplimiento del 100% de talleres de capacitación realizados, relacionados con temas ambientales, solicitados en el departamento. 
        Atendimos la totalidad de la demanda de talleres de capacitación presentadas por parte de la comunidad, para ello desarrollamos 33 talleres en los temas: Manejo de residuos sólidos ordinarios, emisiones atmosféricas, biodiversidad, caracol africano, logrando capacitar a 815 personas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11735,
            'year' =>2,
            'value' => 10,
            'description' => 'A diciembre 31 de la vigencia 2021, con la ejecución del Contrato No.190 del 21 de mayo del 2021 cuyo objeto contractual es: “Prestacion de servicios profesionales y de apoyo a la gestion, para, formar agentes ambientales en las comunidades seleccionadas de los municipios de galapa, suan y juan de acosta en la conservación de la biodiversidad desde su aporte local, como una herramienta de conciencia cultural, social y ambiental”, la meta tuvo cumplimiento del 100%.
        
        En marco del Contrato se desarrollaron diez (10) jornadas pedagógicas dirigidas a 150 miembros de las comunidades previamente seleccionadas de los municipios de Galapa, Suan y Juan de Acosta.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11736,
            'year' =>2,
            'value' => 7,
            'description' => 'Con la implementación de siete (7) proyectos educativo ambientales, la meta tuvo cumplimiento del 100%. 
        Para el logro de los objetivos trazados, la Corporación Autónoma Regional del Atlántico, celebró el Contrato N° 151 de 2021 cuyo objeto contractual fue: “Prestación de servicios profesionales de apoyo a la gestión para desarrollar un programa de formación ciudadana alrededor de liderazgos con capacidad técnica para orientar procesos participativos en función de alcanzar los niveles de sostenibilidad y resiliencia en las comunidades rurales y urbanas del departamento del Atlántico, propuesto en el Plan de Acción Institucional de la CRA.”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11736,
            'year' =>2,
            'value' => 2,
            'description' => 'La meta se encuentra cumplida al 100%, con la implementación de los proyectos:
        
        1.	Administración e innovación en acuicultura sostenible
        2.	Administración e innovación ambiental
        
        Se logró la meta a través de la ejecución del Contrato N° 340 de 2020 cuyo objeto es: “Desarrollar un proyecto de formación dirigido a las organizaciones no gubernamentales ONG y asociaciones de pescadores para la gestión y protección ambiental, así como para la seguridad alimentaria de estas comunidades”',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11737,
            'year' =>2,
            'value' => 1,
            'description' => 'Producto de los talleres teórico prácticos, desarrollados a través de la Primera Escuela Regional de Liderazgo Ambiental, en marco del Contrato N° 151 de 2021 cuyo objeto contractual es: “Prestación de servicios profesionales de apoyo a la gestión para desarrollar un programa de formación ciudadana alrededor de liderazgos con capacidad técnica para orientar procesos participativos en función de alcanzar los niveles de sostenibilidad y resiliencia en las comunidades rurales y urbanas del departamento del Atlántico, propuesto en el Plan de Acción Institucional de la CRA.”, realizamos una feria ambiental con experiencias exitosas en la implementación de los ODS municipales, brindando la oportunidad a los participantes, de mostrar sus iniciativas, capacidades, productos, innovaciones y creatividad sobre estilos de vida biosociales y amigables con el medio ambiente, cumpliendo así la meta programada en un 100%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11737,
            'year' =>2,
            'value' => 1,
            'description' => 'Se cumplió la meta al 100% con la realización de una (1) ECO FERIA ambiental la cual se llevó a cabo a través del Contrato No. 340 de 2020',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11738,
            'year' =>2,
            'value' => 1,
            'description' => 'Podemos decir que, existe seguridad alimentaria cuando las personas tenemos permanentemente acceso físico y económico a suficientes alimentos para satisfacer nuestras necesidades alimenticias, a fin de llevar una vida activa y sana.
        A través del Contrato N° 154 del 30 de marzo del  2021, cuyo objeto contractual es: “Prestación de servicios profesionales y de apoyo a la gestión para promover espacios para la participación ciudadana en la gestión ambiental que permitan sensibilizar al ciudadano en la conservación de los ecosistemas de su entorno asociados a su bienestar social y económico”, se dio cumplimiento al 100% de la meta a diciembre 31 de 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11738,
            'year' =>2,
            'value' => 1,
            'description' => 'Se logró con el cumplimiento del 100% de la meta en la vigencia 2021. Para lograrlo, se capacitaron 50 personas representantes de las Asociaciones de pescadores y agricultores de los municipios de Sabanagrande y Santo Tomás; escogiendo a 25 personas por cada municipio.
        
        Las actividades se llevaron a cabo con la ejecución del Contrato N° 340 de 2020 ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11739,
            'year' =>2,
            'value' => 1,
            'description' => 'Con el desarrollo de una (1) estrategia de comunicación y cultura ciudadana sobre separación en la fuente la meta se cumplió en el 100% en la vigencia 2021.
        Lo anterior se logró con la ejecución del Contrato N. 00153 del 30 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar un programa de sensibilización para fortalecer en la comunidad el conocimiento ambiental sobre el departamento del Atlántico, a través de estrategias de comunicación, educación ambiental y del acompañamiento apoyo a los PROCEDA.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11740,
            'year' =>2,
            'value' => 1,
            'description' => 'La meta tuvo cumplimiento del 100%, ello fue posible a que en marco del Contrato N. 00153 del 30 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar un programa de sensibilización para fortalecer en la comunidad el conocimiento ambiental sobre el departamento del Atlántico, a través de estrategias de comunicación, educación ambiental y del acompañamiento apoyo a los PROCEDA se realizó un concurso de fotografía digital y video de tipo ambiental, abierto, en el que se evidenciaron acciones de mitigación y/o adaptación al cambio climático tanto por la biodiversidad como los seres humanos y/o las potencialidades de los ecosistemas del Departamento. 
        En el concurso fueron inscritas 157 fotografías, para lo cual se realizó la exposición de éstas en un Centro comercial de la ciudad de Barranquilla, con gran afluencia de público desde el día 24 de septiembre de 2021 hasta el día 9 de octubre del 2021. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11741,
            'year' =>2,
            'value' => 2,
            'description' => 'La meta tuvo cumplimiento del 100% a 31 de diciembre de 2021, las actividades que permitieron el logro de la meta se desarrollaron en marco del Contrato N. 00153 del 30 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar un programa de sensibilización para fortalecer en la comunidad el conocimiento ambiental sobre el departamento del Atlántico, a través de estrategias de comunicación, educación ambiental y del acompañamiento apoyo a los PROCEDA.
        
        Se desarrolló una campaña de cultura ciudadana sobre separación en la fuente de los residuos sólidos y RAEE. La campaña de recolección de residuos posconsumo peligrosos, especiales y RAEE., se realizó en 10 municipios: Soledad (1 de octubre), Sabanagrande (21 de septiembre), Santo Tomás (22 de septiembre), Palmar de Varela (29 de septiembre), Ponedera (24 de septiembre), Puerto Colombia (25 de septiembre), Tubará (23 de septiembre), Galapa (27 de septiembre), Baranoa (28 de septiembre) y Sabanalarga (30 de septiembre).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11742,
            'year' =>2,
            'value' => 1,
            'description' => 'Con la ejecución del Contrato N. 00153 del 30 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar un programa de sensibilización para fortalecer en la comunidad el conocimiento ambiental sobre el departamento del Atlántico, a través de estrategias de comunicación, educación ambiental y del acompañamiento apoyo a los PROCEDA.  La meta se cumplió al 100% durante la vigencia 2021.
        
        Se realizaron dos (2) webinarios, los días 12 y 13 de agosto de 2021 como preámbulo del concurso de fotografía ambiental, cuyas temáticas fueron: 
        
        1.	Fotografía ambiental: https://www.youtube.com/watch?v=swAwZdY_K8s&t=667s  
        2.	Potencialidades ambientales del Atlántico y su adaptación al cambio climático: https://www.youtube.com/watch?v=XWJ9pNTWhsw&t=13s  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia103 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11743,
            'year' =>2,
            'value' => 1,
            'description' => 'Las actividades planteadas para dar cumplimiento a la meta se desarrollaron favorablemente logrando un cumpimiento del 100% de la misma en la vigencia 2021.
        
        Se promovió un espacio departamental de socialización en el cual se presentaron los resultados de las actividades realizadas por cada uno de los Proyectos Ciudadanos de Educación Ambiental -PROCEDA, que permitió el intercambio de experiencias durante el I Encuentro de Departamental de PROCEDAS. 
        
        En el evento se presentaron representantes de cada Proyecto, quienes tuvieron un espacio para mostrar su iniciativa y la experiencia en la realización del mismo. El evento fue realizado el día 14 de octubre del 2021 en la ciudad de Barranquilla.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia104 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11744,
            'year' =>2,
            'value' => 1,
            'description' => 'La Corporación, en cabeza del Director General asistió al evento Comisión Regional de Educación Ambiental del Caribe e Insular -CREACI realizado el día 16 de julio de 2021 en Coveñas, Sucre, y participó en el conversatorio: “La experiencia en educación ambiental de las CAR/CDS del Caribe; una aproximación constructiva hacia el futuro de territorio”. cuyo objetivo es implementar estrategias de trabajo conjunto y articulado en el fortalecimiento de la educación ambiental en la Región Caribe.
        
        Con estas participaciones se cumplió el 100% de la meta programada para la vigencia 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia105 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11745,
            'year' =>2,
            'value' => 1,
            'description' => 'VIGENCIA 2021 y REZAGO 2020: En marco del Contrato N°0149 del 29 de marzo del 2021, cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar una estrategia de educación ambiental para el fortalecimiento a los jóvenes indígenas, Room y NARP del departamento del Atlántico, en el rescate de su cultura ancestral ambiental, así como fomentar el desarrollo integral en la función de la mujer como dinamizadora ambiental. Con el contrato se dió cumplimiento a la meta de rezago de la vigencia 2020 y a la meta de la vigencia 2021 ejecutando los dos  (2) siguientes proyectos de  emprendimiento:
        1. Comunidad NARP: Productos ancestrales derivados del millo, Fabricación de accesorios tejidos y bordados, Platos ancestrales de la yuca. 
        2. Etnia indígena: Artesanías en tejido crochet, totumo y fusionadas, artesanías con los tejidos, acabados en totumo y otras variedades de productos propios, y gastronomía local como los pasteles de Pital de Megua.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11745,
            'year' =>2,
            'value' => 1,
            'description' => 'VIGENCIA 2021 y REZAGO 2020: En marco del Contrato N°0149 del 29 de marzo del 2021, cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar una estrategia de educación ambiental para el fortalecimiento a los jóvenes indígenas, Room y NARP del departamento del Atlántico, en el rescate de su cultura ancestral ambiental, así como fomentar el desarrollo integral en la función de la mujer como dinamizadora ambiental. Con el contrato se dió cumplimiento a la meta de rezago de la vigencia 2020 y a la meta de la vigencia 2021 ejecutando los dos  (2) siguientes proyectos de  emprendimiento:
        1. Comunidad NARP: Productos ancestrales derivados del millo, Fabricación de accesorios tejidos y bordados, Platos ancestrales de la yuca. 
        2. Etnia indígena: Artesanías en tejido crochet, totumo y fusionadas, artesanías con los tejidos, acabados en totumo y otras variedades de productos propios, y gastronomía local como los pasteles de Pital de Megua.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia107 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11746,
            'year' =>2,
            'value' => 1,
            'description' => 'Con la ejecución del Contrato N°00149 del 29 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar una estrategia de educación ambiental para el fortalecimiento a los jóvenes indígenas, Rrom y NARP del departamento del Atlántico, en el rescate de su cultura ancestral ambiental, así como fomentar el desarrollo integral en la función de la mujer como dinamizadora ambiental, se da cumplimiento a la meta de rezago 2020 y a la meta de la vigencia 2021.
        VIGENCIA 2021: Capacitación en Fauna y Flora orientada a la Gastronomía, Jóvenes NARP - Municipio de Palmar de Varela.
        Como culminación del proceso de asesoramiento de los emprendimientos y unidades de negocio se desarrolló una feria en la cual se presentaron al público en general las unidades de negocios de los grupos de jóvenes indígenas, NARP y Rrom y los emprendimientos de los grupos de mujeres que participaron del proyecto.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11746,
            'year' =>2,
            'value' => 1,
            'description' => 'Con la ejecución del Contrato N°00149 del 29 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar una estrategia de educación ambiental para el fortalecimiento a los jóvenes indígenas, Rrom y NARP del departamento del Atlántico, en el rescate de su cultura ancestral ambiental, así como fomentar el desarrollo integral en la función de la mujer como dinamizadora ambiental, se da cumplimiento a la meta de rezago 2020 y a la meta de la vigencia 2021.
        REZAGO 2020: Capacitación en Fauna y Flora orientada a la Medicina Ancestral Jóvenes Indígenas - Municipio de Puerto Colombia.   
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia109 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11747,
            'year' =>2,
            'value' => 1,
            'description' => 'VIGENCIA 2021 y REZAGO 2020: A través del Contrato N°00149 del 29 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar una estrategia de educación ambiental para el fortalecimiento a los jóvenes indígenas, Rrom y NARP del departamento del Atlántico, en el rescate de su cultura ancestral ambiental, así como fomentar el desarrollo integral en la función de la mujer como dinamizadora ambiental, se desarrollaron acciones para el fortalecimiento de los saberes y prácticas tradicionales ambientales de las comunidades indígenas y ROM del departamento se da cumplimiento a las acciones programadas para la vigencia 2021 y de rezago 2020.
        En marco del Contrato mencionado, desarrollamos capacitaciones en temas tales como: Fauna y flora orientadas a la medicina ancestral, manifestaciones culturales entre otras de rescate de la cultura de las etnias. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia110 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11747,
            'year' =>2,
            'value' => 1,
            'description' => 'VIGENCIA 2021 y REZAGO 2020: A través del Contrato N°00149 del 29 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar una estrategia de educación ambiental para el fortalecimiento a los jóvenes indígenas, Rrom y NARP del departamento del Atlántico, en el rescate de su cultura ancestral ambiental, así como fomentar el desarrollo integral en la función de la mujer como dinamizadora ambiental, se desarrollaron acciones para el fortalecimiento de los saberes y prácticas tradicionales ambientales de las comunidades indígenas y ROM del departamento se da cumplimiento a las acciones programadas para la vigencia 2021 y de rezago 2020.
        En marco del Contrato mencionado, desarrollamos capacitaciones en temas tales como: Fauna y flora orientadas a la medicina ancestral, manifestaciones culturales entre otras de rescate de la cultura de las etnias. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11748,
            'year' =>2,
            'value' => 1,
            'description' => 'VIGENCIA 2021 y REZAGO 2020: Con capacitaciones dirigidas a 90 jóvenes NARP desarrolladas en tema de fauna y flora, medicina ancestral, rescate de la cultura de la etnia, en marco del Contrato N°0149 del 29 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar una estrategia de educación ambiental para el fortalecimiento a los jóvenes indígenas, Rrom y NARP del departamento del Atlántico, en el rescate de su cultura ancestral ambiental, así como fomentar el desarrollo integral en la función de la mujer como dinamizadora ambiental se cumplió al 100%  la meta de la vigencia 2021 y rezago 2020 en un 100%
        Las acciones para lograr los objetivos propuestos fueron desarrolladas con representantes de los siguientes municipios: Juan de Acosta, Piojó, Palmar de Varela, Polonuevo, Candelaria, Manatí. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia112 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11748,
            'year' =>2,
            'value' => 1,
            'description' => 'VIGENCIA 2021 y REZAGO 2020: Con capacitaciones dirigidas a 90 jóvenes NARP desarrolladas en tema de fauna y flora, medicina ancestral, rescate de la cultura de la etnia, en marco del Contrato N°0149 del 29 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar una estrategia de educación ambiental para el fortalecimiento a los jóvenes indígenas, Rrom y NARP del departamento del Atlántico, en el rescate de su cultura ancestral ambiental, así como fomentar el desarrollo integral en la función de la mujer como dinamizadora ambiental se cumplió al 100%  la meta de la vigencia 2021 y rezago 2020 en un 100%
        Las acciones para lograr los objetivos propuestos fueron desarrolladas con representantes de los siguientes municipios: Juan de Acosta, Piojó, Palmar de Varela, Polonuevo, Candelaria, Manatí. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia113 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11749,
            'year' =>2,
            'value' => 1,
            'description' => 'VIGENCIA 2021 y REZAGO 2020: Las acciones se desarrollaron en marco del Contrato N°0149 del 29 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar una estrategia de educación ambiental para el fortalecimiento a los jóvenes indígenas, Rrom y NARP del departamento del Atlántico, en el rescate de su cultura ancestral ambiental, así como fomentar el desarrollo integral en la función de la mujer como dinamizadora ambiental permitieron lograr el cumplimiento del rezago 2020 como la meta programada para la vigencia 2021. 
        Para el cumplimiento de la meta se  desarrollaron las asesorías y apoyo a las iniciativas productivas surgidas desde las comunidades NARP del departamento del Atlántico; dichas iniciativas incluyen productos gastronómicos y artesanales, productos basados en las plantas y medicina ancestral natural como jabones, elaboración  y comercialización de productos cuyos principios activos son provenientes de plantas, cultivo, transformación y comercialización de plantas medicinales utilizadas para la medicina tradicional de uso externo (aceites, tinturas, jabones, ungüentos, talcos, planta) condimentos y la comida tradicional de las comunidades afros, elaboración de artesanías. Elaboración de dulces típicos, (yuca, ñame, papaya). gastronomía típica.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia114 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11749,
            'year' =>2,
            'value' => 1,
            'description' => 'VIGENCIA 2021 y REZAGO 2020: Las acciones se desarrollaron en marco del Contrato N°0149 del 29 de marzo del 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión para desarrollar una estrategia de educación ambiental para el fortalecimiento a los jóvenes indígenas, Rrom y NARP del departamento del Atlántico, en el rescate de su cultura ancestral ambiental, así como fomentar el desarrollo integral en la función de la mujer como dinamizadora ambiental permitieron lograr el cumplimiento del rezago 2020 como la meta programada para la vigencia 2021. 
        Para el cumplimiento de la meta se  desarrollaron las asesorías y apoyo a las iniciativas productivas surgidas desde las comunidades NARP del departamento del Atlántico; dichas iniciativas incluyen productos gastronómicos y artesanales, productos basados en las plantas y medicina ancestral natural como jabones, elaboración  y comercialización de productos cuyos principios activos son provenientes de plantas, cultivo, transformación y comercialización de plantas medicinales utilizadas para la medicina tradicional de uso externo (aceites, tinturas, jabones, ungüentos, talcos, planta) condimentos y la comida tradicional de las comunidades afros, elaboración de artesanías. Elaboración de dulces típicos, (yuca, ñame, papaya). gastronomía típica.
        ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia115 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11750,
            'year' =>2,
            'value' => 23,
            'description' => 'Con la ejecución del Contrato No.151 del 29 de marzo del 2021, cuyo objeto contractual es : “Prestación de servicios profesionales de apoyo a la gestión para desarrollar un programa de formación ciudadana alrededor de liderazgos con capacidad técnica para orientar procesos participativos en función de alcanzar los niveles de sostenibilidad y resiliencia en las comunidades rurales y urbanas del departamento del Atlántico, propuesto en el Plan de Acción Institucional de la CRA”, creamos 23 comités municipales del medio ambiente dando cumplimiento al 100% de la meta establecida para la vigencia 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia116 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11751,
            'year' =>2,
            'value' => 100,
            'description' => 'Con las actividades desarrolladas a través del Contrato No.151 del 29 de marzo del 2021, cuyo objeto contractual es : “Prestación de servicios profesionales de apoyo a la gestión para desarrollar un programa de formación ciudadana alrededor de liderazgos con capacidad técnica para orientar procesos participativos en función de alcanzar los niveles de sostenibilidad y resiliencia en las comunidades rurales y urbanas del departamento del Atlántico, propuesto en el Plan de Acción Institucional de la CRA” se dio cumplimiento al 100% de la meta establecida para la vigencia 2021.
        En marco del Contrato, se creó la primera Escuela Regional de Liderazgo Ambiental, a través de la cual desarrollamos talleres teórico prácticos, formando a 70 jóvenes como Guardianes Ambientales del Medio Ambiente – GUMA.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia117 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11752,
            'year' =>2,
            'value' => 1,
            'description' => 'Con la celebración del Contrato No.151 del 29 de marzo del 2021, cuyo objeto contractual es: “Prestación de servicios profesionales de apoyo a la gestión para desarrollar un programa de formación ciudadana alrededor de liderazgos con capacidad técnica para orientar procesos participativos en función de alcanzar los niveles de sostenibilidad y resiliencia en las comunidades rurales y urbanas del departamento del Atlántico, propuesto en el Plan de Acción Institucional de la CRA”, se da cumplimiento al 100% de la meta establecida para la vigencia 2021.
        El informe anual de seguimiento a los ODS quedó plasmado en el documento denominado: Informe de seguimiento hacia los ODS en el departamento del Atlántico, en éste, se registra el seguimiento a los ODS dentro del departamento del Atlántico, basado en las tendencias de cada uno de los indicadores disponibles en el Plan de Desarrollo Departamental 2016-2019 y los resultados frente a los indicadores y metas trazadas en el CONPES 3918. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia118 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11753,
            'year' =>2,
            'value' => 0,
            'description' => 'La meta no presentó avance físico en su ejecución, sin embargo, para el cumplimiento de esta meta la corporación suscribió el Convenio 0007 celebrado con la Universidad Simón Bolívar, cuyo alcance incluye implementar un proyecto de Producción Más Limpia -PML- para el fomento y fortalecimiento del desempeño y la eficiencia ambiental en una institución educativa pública priorizada del departamento del Atlántico. 
         
        Se estableció el clausulado del mencionado convenio y el Plan de trabajo donde se detallan las actividades a realizar, incluyendo la implementación de Convenios de Producción más Limpia con los sectores de equipamiento urbano.  
        
        Con la celebración del Contrato, la meta registra un avance del 5% en la vigencia 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia119 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11754,
            'year' =>2,
            'value' => 1,
            'description' => 'Con la celebración del Convenio 0007 celebrado con la Universidad Simón Bolívar, el cual tiene por objeto: “aunar esfuerzos y recursos técnicos, jurídicos, administrativos y financieros para el desarrollo de un programa institucional que contribuya al fortalecimiento de la gestión e innovación ambiental sostenible de los recursos naturales del departamento del Atlántico”. Se impulsó un (1) proyecto para el aprovechamiento energético de biomasa agropecuaria en el Departamento del Atlántico.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia120 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11755,
            'year' =>2,
            'value' => 1,
            'description' => 'Con la celebración del Convenio 0007 celebrado con la Universidad Simón Bolívar, el cual tiene por objeto: “aunar esfuerzos y recursos técnicos, jurídicos, administrativos y financieros para el desarrollo de un programa institucional que contribuya al fortalecimiento de la gestión e innovación ambiental sostenible de los recursos naturales del departamento del Atlántico”. Se impulsó un (1) proyecto para el aprovechamiento energético de biomasa agropecuaria en el Departamento del Atlántico.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia121 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11756,
            'year' =>2,
            'value' => 0,
            'description' => 'La meta presentó avance de un 5% con la celebración del Convenio 0007, celebrado con la Universidad Simón Bolívar, la Subdirección de Gestión Ambiental adelanta las acciones para desarrollar durante la vigencia 2022 el estudio de evaluación geoespacial para conocer el potencial de energía eólica en el Departamento del Atlántico. 
         
        El Plan de trabajo incluye el apoyo para desarrollar un (1) estudio de evaluación geoespacial. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia122 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11757,
            'year' =>2,
            'value' => 23,
            'description' => 'Con las actividades desarrolladas para asesorar a los municipios en los procesos de revisión de sus instrumentos de planificación del desarrollo físico territorial, podemos indicar que al 31 de diciembre de 2021 la meta tuvo cumplimiento del 100%; lo que significa que, brindamos asesoría a los 23 municipios del departamento del Atlántico.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia123 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11758,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia124 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11759,
            'year' =>2,
            'value' => 24,
            'description' => 'A 31 de diciembre de 2021 la meta tuvo cumplimiento del 100%.
        
        Con oficio N°000942 del 31 de marzo del 2021, se informa al Ministro de Ambiente y Desarrollo Sostenible sobre predios para proteger las fuentes hídricas abastecedoras de los acueductos en el Departamento del Atlántico y Pagos por Servicios Ambientales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia125 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11759,
            'year' =>2,
            'value' => 12,
            'description' => 'La meta registró solo un avance del 50% de lo programado para la vigencia 2020. Dentro del plan diseñado para darle cumplimiento a esta meta, se difundió la Resolución No. 440 de fecha 19 de junio de 2019, por medio de la cual se adoptan las áreas de importancia estratégica para la conservación de los recursos hídricos en el Departamento del Atlántico y solicitar información en relación con los esquemas de pago por servicios ambientales que habían sido implementados. ',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia126 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11760,
            'year' =>2,
            'value' => 1,
            'description' => 'REZAGO 2020: Se cumplió la meta en rezago en marco del Contrato N°375 de 2020, cuyo objeto es: “Elaborar el plan de manejo de la ciénaga de mallorquin y la actualización de los estudios para el manejo integrado de los manglares del departamento del Atlántico en cumplimiento de lo establecido en el Plan de Acción Institucional 2020-2023”, la meta tuvo cumplimiento del 100% en la vigencia 2021 para la meta programada en el 2020.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia127 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11761,
            'year' =>2,
            'value' => 1,
            'description' => 'Mediante la ejecución de los Contratos 189 de 2021 cuyo objeto es:  Compra de kits didácticos ambientales para sensibilizar a las comunidades seleccionadas de los municipios de Galapa, Suan y Juan de Acosta en la conservación de la biodiversidad desde su aporte local, como una herramienta de conciencia cultural, social y ambiental.    y 190 de 2021 cuyo objeto es: Prestación de servicios profesionales y de apoyo a la gestión, para, formar agentes ambientales en las comunidades seleccionadas de los municipios de Galapa, Suan y Juan de Acosta en la conservación de la biodiversidad desde su aporte local, como una herramienta de conciencia cultural, social y ambiental”, se logró el cumplimiento del 100% de la meta, a través del desarrollo de acciones orientadas a implementar la Política Integral del Salud Ambiental en la jurisdicción de la CRA. 
         
        En marco de los Contratos se realizaron las siguientes actividades durante la vigencia 2021:  
         
        •	Diez (10) talleres dirigidos a miembros de las comunidades previamente seleccionadas de los municipios de Galapa, Suan y Juan de Acosta para la formación de ciento cincuenta (150) Agentes Ambientales Municipales. 
        •	Suministro de los implementos necesarios (kits didácticos ambientales) para la formación de agentes ambientales y agentes ambientales municipales. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia128 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11762,
            'year' =>2,
            'value' => 6,
            'description' => 'En la vigencia 2021 se efectuó visita de seguimiento y control ambiental a las estaciones del Sistema de Vigilancia de la Calidad del Aire-SVCA en jurisdicción de la Corporación Autónoma Regional del Atlántico-CRA, verificando que se encuentran en operación seis (6) estaciones con reporte de datos meteorológicos, de las ocho (8) estaciones con las que cuenta la Corporación, logrando un cumplimiento del 75% de la meta programada. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia129 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11763,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia130 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11764,
            'year' =>2,
            'value' => 3,
            'description' => 'Durante la vigencia 2021, la Corporación realizó adecuaciones para la implementación de la plataforma SARA CLOUD (https://monitoreo.gndelectronics.com/accounts/signin/) en las estaciones PIMSA (Malambo), Tránsito (Malambo), Granabastos (Soledad), EDUMAS (Soledad), Alcaldía (Puerto Colombia) y Bomberos (Puerto Colombia), para el reporte en línea de los datos meteorológicos; sin embargo no se logró los objetivos de reportes del informe SISAIRE debido a la ausencia de datos de parámetros de contaminantes atmosféricos objeto. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia131 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11764,
            'year' =>2,
            'value' => 3,
            'description' => 'En relación con los datos disponibles en las estaciones del Sistema de Vigilancia de Calidad del Aire-SVCA se registraron dificultades para el acceso a éstos en el 2020, debido a la configuración de los equipos que requería la descarga manual, y ante la declaratoria de emergencia sanitaria por COVID-19, las labores de campo estuvieron restringidas, así como las autorizaciones para el ingreso a los sitios en los que las estaciones se encuentran ubicadas; por las razones expuestas no fue posible la consolidación de datos para el reporte de información del año 2020. La ejecución de la meta quedó al 60% en la vigencia 2020.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia132 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11765,
            'year' =>2,
            'value' => 0,
            'description' => 'El cumplimiento de este indiciador está sujeto a la capacitación del personal en la Norma Técnica Colombiana NTC ISO 17025:2019. 
        A través de la Subdirección de Gestión Ambiental, se realizará para la vigencia 2022 la contratación y ejecución de actividades para la acreditación por  el IDEAM, del  Sistema  de Vigilancia  de  la  Calidad  del  Aire  Acreditado y en operación con  NTC  ISO  17025  
        Al corte de diciembre 31 de 2021 no se registran avances en la meta.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia133 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11766,
            'year' =>2,
            'value' => 68,
            'description' => 'Las acciones desarrolladas al 31 de Diciembre de 2021  representan un avance del 68% en la vigencia, asociadas a seguimiento y evaluación ambiental las cuales se describen en el informe.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia134 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11767,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia135 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11768,
            'year' =>2,
            'value' => 0,
            'description' => 'La Subdirección de Gestión Ambiental, en el marco del Convenio 0007 celebrado con la Universidad Simón Bolívar, adelantará las acciones para elaborar el Inventario de emisiones atmosféricas aplicando la Guía para la elaboración de Inventario de Emisiones Atmosféricas. 
        
        A la entrega del presente informe y con la celebración del convenio la meta presenta un avance del 5%. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia136 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11769,
            'year' =>2,
            'value' => 2,
            'description' => 'Al 31 de diciembre de 2021 la meta programada tiene un cumplimiento del 100% con la realización de dos (2) operativos.
        1.	OPERATIVO INTERPELLI 
        2.	OPERATIVO AGROSAN ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia137 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11770,
            'year' =>2,
            'value' => 0,
            'description' => 'La Corporación ha identificado la necesidad de actualizar los mapas de ruido diurno y nocturno de los municipios con más de 100.00 habitantes, en virtud de lo anterior, en el marco del Convenio 007 de 2021 la Subdirección de Gestión Ambiental adelantará las acciones para actualizar  los mapas de ruido diurno y nocturno en los municipios con más de 100.000 habitantes del Departamento, el cual tiene por objeto “aunar esfuerzos y recursos técnicos, jurídicos, administrativos y financieros para el desarrollo de un programa institucional que contribuya al fortalecimiento de la gestión e innovación ambiental sostenible de los recursos naturales del departamento del Atlántico”.  
        
        Al cierre de la vigencia con la celebración del convenio mencionado la meta presenta avance en su ejecución de un 5%; en el Plan de trabajo se detallan las actividades a realizar, incluyendo la implementación y análisis de mapas de ruido diurno y nocturno actualizados en los municipios con más de 100.000 habitantes del Departamento.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia138 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11771,
            'year' =>2,
            'value' => 100,
            'description' => 'En la vigencia 2021 hemos atendido el 100% de las quejas realizadas por actividades generadoras de ruido en el Departamento del Atlántico. Se recibieron y atendieron 19 denuncias por presunta afectación por emisión de ruido presentadas por la comunidad, tal como se detalla en el informe.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia139 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11772,
            'year' =>2,
            'value' => 0,
            'description' => 'Al 31 de diciembre de 2021 no se registran avances en la meta; sin embargo, es importante mencionar que, la Corporación dispone de dos (2) equipos sonómetros portátiles que cuentan con kit completo de estación metereológica, pistófonos y calibrador; que, para fortalecer y seguir garantizando a los municipios del departamento el apoyo técnico en las mediciones de ruido oportunamente, la entidad va a adquirir dos (2) nuevos equipos de medición en la vigencia siguiente. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia140 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11773,
            'year' =>2,
            'value' => 0,
            'description' => 'Las actividades desarrolladas al 30 de junio de 2021 representan un 3% de avance en la meta. 
        Desde la Subdirección de Gestión Ambiental se adelantó la elaboración de los estudios previos, para celebrar el proceso de contratación para el servicio de calibración de los equipos de medición de Ruido existentes, tomando como referente lo establecido en la Resolución No. 0627 del 2006 para la próxima vigencia.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia141 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11774,
            'year' =>2,
            'value' => 0,
            'description' => 'En el marco del convenio No.003 del 2021 cuyo objeto es: “Aunar esfuerzos administrativos, técnicos y financieros a fin de fortalecer la inclusión de la dimensión ambiental en la educación formal y la estrategia de economía circular en el departamento del Atlántico”, se están realizando capacitaciones a los recicladores de las zonas costeras donde se fortalece el conocimiento de la adecuada separación de los residuos sólidos y el aprovechamiento de los materiales reciclable dentro de su trabajo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia142 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11775,
            'year' =>2,
            'value' => 22,
            'description' => 'A corte 31 de Diciembre de 2021, la meta registra un avance del 95,65%, representado en las visitas de seguimiento realizadas a los 22 municipios del departamento.
        Es importante mencionar que, la CRA tiene jurisdicción en el área rural del distrito de Barranquilla; sin embargo, el PGIRS del distrito en su mayoría va dirigido al área urbana del mismo, razón por la cual el seguimiento ambiental del instrumento es realizado por EPA Barranquilla Verde. En consecuencia, se pondrá a consideración esta situación para solicitar el ajuste a la meta programada.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia143 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11776,
            'year' =>2,
            'value' => 100,
            'description' => 'La Corporación, a través de la Subdirección de Gestión Ambiental adelantó  acciones asociadas al seguimiento de la implementación del Plan de Gestión de Residuos Peligrosos de los municipios de la jurisdicción de la CRA las cuales se especifican en el informe y dando cumplimineto a dicha meta.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia144 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11777,
            'year' =>2,
            'value' => 100,
            'description' => 'La meta registra un cumplimiento del 100% a Diciembre 31 de 2021
        En la vigencia 2021 el aplicativo de Generadores de Residuos o Desechos peligrosos cuenta con un total de trescientos veinticinco (325) establecimientos registrados. Adicionalmente, se recibieron 46 solicitudes de inscripción al aplicativo RESPEL, de las cuales fueron atendidas al 100% según se detalla en el informe.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia145 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11778,
            'year' =>2,
            'value' => 0,
            'description' => 'A corte de 31 de diciembre del 2022, en el marco del convenio No.003 del 2021 cuyo objeto es: “Aunar esfuerzos administrativos, técnicos y financieros a fin de fortalecer la inclusión de la dimensión ambiental en la educación formal y la estrategia de economía circular en el departamento del Atlántico”, se llevaron a cabo todas las mesas de trabajo para obtener la información para la construcción de la agenda de económica circular, adicionalmente se sistematizó lo desarrollado dentro de la línea base para comenzar a diseñar el documento y así poder socializar con los diferentes gremios lo que se plasmó para llevarle un seguimiento y desarrollar las diferentes actividades de forma conjunta logrando que se convierta en el plan de acción de la economía circular en el departamento del Atlántico.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia146 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11779,
            'year' =>2,
            'value' => 0,
            'description' => 'A corte de 31 de diciembre del 2022, en el marco del convenio No.003 del 2021 cuyo objeto es: “Aunar esfuerzos administrativos, técnicos y financieros a fin de fortalecer la inclusión de la dimensión ambiental en la educación formal y la estrategia de economía circular en el departamento del Atlántico” la meta registra un avance del 20%. De acuerdo a lo avanzando en el desarrollo de la agenda salieron diferentes proyectos para desarrollar en el marco de dicho convenio, sin embargo, estos se encuentran en proceso de formulación para comenzar su ejecución en el 2022.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia147 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11780,
            'year' =>2,
            'value' => 82,
            'description' => 'Con las acciones desarrolladas en el año se tiene un avance de la meta de un 82% a 31 Diciembre del 2021. En términos generales durante el año 2021 se expidieron 237 autos de inicio, En cuanto a pronunciamientos, una vez validado el cumplimiento de los requisitos de pago y publicación durante el año 2021 se evaluaron y negación 5 solicitudes de permisos ambientales y expidieron 80 resoluciones de otorgamiento. De igual forma se evaluaron y autorizaron 159 solicitudes de tala de árboles, durante la vigencia 2021.  En el caso concreto de las 257 solicitudes recibidas durante el año 2021, 11 se encuentran con requerimiento de información, 188 cuentan con auto de inicio, de las cuales 87 que cumplieron con los requerimientos de información complementaria, pago y/o publicación por parte de los interesados, 64 fueron evaluadas durante el periodo, logrando una atención de 146 del total de las solicitudes, equivalente al 73%.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia148 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11780,
            'year' =>2,
            'value' => 3,
            'description' => 'Con el desarrollo de las actividades programadas para el cumplimiento de la meta de la vigencia 2020, se logró una ejecución del 96% de la misma.
        
        En el ejercicio de las funciones de Evaluación, Seguimiento y Control en el año 2020 se recibieron trescientas doce (312) solicitudes de trámites ambientales. Se encuentran atendidas y priorizadas acorde a la situación actual del estado de emergencia, 299 trámites, para una gestión sobre el 96% de las solicitudes, como se registra en el documento informe de gestión',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia149 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11781,
            'year' =>2,
            'value' => 43,
            'description' => 'El promedio de cumplimiento de estos dos componentes del indicador de Denuncias Ambientales y Procesos Sancionatorios es del 43%. Para el periodo enero a diciembre de 2021, han ingresado un total de 425 denuncias asociadas a la afectación de recursos naturales, de las cuales se ha dado atención a 288 correspondiente al 67%. De los 497 procesos activos registrados al inicio del periodo, se resolvieron 86 investigaciones y se cesaron 10 procesos sancionatorios, registrando un avance del 19%.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia150 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11781,
            'year' =>2,
            'value' => 11,
            'description' => 'En apoyo del grupo CRIA, de las 207 denuncias recibidas en el año 2020, se atendieron 198, logrando atención oportuna del 96% de las denuncias',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia151 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11782,
            'year' =>2,
            'value' => 81,
            'description' => 'En cumplimiento de la Resolución 360 de 2018, desde la vigencia anterior se priorizaron los seguimientos a las medidas de compensación establecidos en el marco de los proyectos licenciados y aprovechamiento Forestal único de los instrumentos activos de la Subdirección.
         
        En referencia de lo citado anteriormente, de las 78 autorizaciones forestales registradas al inicio del año, en el periodo 2021 se llevaron a cabo 63 seguimientos, logrando un cumplimiento del 81%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia152 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11783,
            'year' =>2,
            'value' => 1,
            'description' => 'En el marco del Contrato 231 de 2021, cuyo objeto es “Acompañamiento y desarrollo de actividades que permitan la identificación de usuarios ilegales de alto impacto, que realizan minería ilegal y acciones que permitan la formalización de la actividad minera en los municipios del departamento del Atlántico”, se desarrolló un (1) estudio que permite identificar usuarios que realizan minería ilegal, quienes pueden adelantar la formalización de la actividad minera en los municipios del Departamento del Atlántico, dando cumplimiento al 100% de la meta programada para la vigencia 2021. 
         
        El diagnóstico realizado permitió la identificación de usuarios potenciales que realizan minería ilegal en los municipios de Juan de Acosta, Puerto Colombia, Campo de la Cruz, Luruaco, Soledad, Sabanalarga y Candelaria. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia153 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11784,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia154 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11785,
            'year' =>2,
            'value' => 84,
            'description' => 'El promedio de cumplimiento de estos dos componentes del indicador es de 83.5% para la vigencia 2021. Para el periodo enero a diciembre de 2021, han ingresado un total de 425 denuncias asociadas a la afectación de recursos naturales, de las cuales se ha dado atención a 288, logrando un cumplimiento del 67%. Para el apoyo del cumplimiento de esta meta, la Corporación Autónoma Regional del Atlántico, suscribió el Contrato 00041 de 2021 que tiene por objeto Prestar los servicios profesionales de un veterinario que apoye los procesos de decomisos y postdecomiso de las especies faunísticas. 
        
        En el marco de las obligaciones contractuales se desarrolló el seguimiento a la Red de Amigos de la Fauna de los 2 establecimientos que pertenecen a esta figura: 
          
        1.	Villa Zunilda. Resolución 644 de 2013  
        2.	GRANJA ECO CAMPESTRE SOLAR DE MAO. Resolución 624 de 2013  
          
        El cumplimiento del seguimiento de la Red de Amigos de la Fauna es del 100%. 
              ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia155 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11786,
            'year' =>2,
            'value' => 94,
            'description' => 'En la vigencia 2021, la meta logró un cumplimiento del 94.38%
        
        Para el apoyo del cumplimiento de la meta, se suscribió el Contrato No.041 de 2021 que tiene por objeto: PRESTAR LOS SERVICIOS PROFESIONALES DE UN VETERINARIO QUE APOYE LOS PROCESOS DE DECOMISOS Y POSTDECOMISO DE LAS ESPECIES FAUNISTICAS. Entre las obligaciones de este Contrato se encuentra el seguimiento a la Red de Amigos de la Fauna, que es la figura que la entidad utiliza para el manejo de la Fauna Silvestre decomisada, entregada o rescatada, pues la entidad no cuenta hasta el momento con CAV. 
          
        Adicional a lo anterior, se suscribió el Contrato No.052 de 2021 que tiene por objeto: PRESTAR LOS SERVICIOS PROFESIONALES DE UN BIOLOGO PARA QUE APOYE EN LA SUPERVISION DE LAS EXPORTACIONES DE LOS PRODUCTOS DE LA FAUNA Y DE LA FLORA SILVESTRE PROVENIENTE DE ESTABLECIMIENTOS LEGALMENTE ESTABLECIDOS, A TRAVES DE LOS PUERTOS AUTORIZADOS EN JURISDICCION DE LA CRA, ASI COMO EN LA DISPOSICION DE ESPECIES DECOMISADAS.   ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia156 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11787,
            'year' =>2,
            'value' => 0,
            'description' => 'Teniendo en cuenta la experiencia de vigencias anteriores, en la actualidad, la Corporación, a través de su Red de Amigos de la Fauna, presta la atención vital a las especies decomisadas en el Departamento, brindando una respuesta inmediata para el rescate, decomiso y tratamiento de especies faunísticas en los municipios del Atlántico.  
        Para la atención de este indicador se propone diseñar una estrategia que contribuya a la prevención al tráfico y consumo ilegal de especies nativas de fauna y flora en estado de amenaza en vías de jurisdicción de la CRA, mediante el uso de productos y herramientas pedagógicas multiformato para la protección y conservación de especies nativas de fauna y en estado de amenaza que puedan ser integrados tanto a las acciones de sensibilización y concientización, como a procesos de enseñanza en instituciones  educativas priorizadas y a diferentes canales de comunicación.
        
        La meta no presenta avance en la vigencia 2021. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia157 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11788,
            'year' =>2,
            'value' => 1,
            'description' => 'Desde la Subdirección de Gestión Ambiental, se lideró la construcción del directorio unificado de usuarios de la SDGA, diseñado y cargado en el aplicativo Share Point - Office 365.  La alimentación del directorio parte de la información que reposa en los expedientes de la Corporación y de los datos de identificación del usuario, consultados en la base de datos de la Cámara de Comercio de Barranquilla.  
        
        A 31 de diciembre de 2021 se han registrado 579 usuarios de la Corporación, dando cumplimiento al 100% de la meta con Una (1) base de datos elaborada de usuarios para la regulación de los instrumentos economicos ambientales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia158 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11789,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia159 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11790,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia160 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11791,
            'year' =>2,
            'value' => 100,
            'description' => 'Con las actividades desarrolladas para asesorar a los municipios del departamento del Atlántico en lo que corresponde a la incorporación del componente de gestión de riesgos a sus instrumentos de planificación, podemos indicar que al 31 de diciembre de 2021 la meta presenta se cumplió en el 100% de municipios asesorados.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia161 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11792,
            'year' =>2,
            'value' => 23,
            'description' => 'La Corporación Autónoma Regional del Atlántico, en calidad de autoridad ambiental y en el desempeño de sus funciones de asistencia técnica y jurídica ambiental en los procesos de ordenación del territorio, remitió a los 22 municipios y al Distrito de Barranquilla, oficio N°01291 del 26 de abril del 2021, recordando la Implementación de procesos de Gestión del Riesgo de Desastre y Gestión al Cambio Climático en los Instrumentos de Planificación Territorial, así como la inclusión de las Determinantes Ambientales previamente remitidas por la entidad, en los procesos de ajuste, revisión y/o actualización de los instrumentos de planificación del territorio, de los entes territoriales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia162 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11793,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia163 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11794,
            'year' =>2,
            'value' => 1,
            'description' => 'Con las acciones desarrolladas, se alcanzó la meta establecida de realizar un (1) estudio de fortalecimiento Institucional, lo que representa una ejecución de esta acción estrategica en un 100%, a corte 31 de diciembre del 2021. 
        Para ello, se realizaron diez (10) reuniones entre los delegados del Departamento Administrativo de la Función Pública - DAFP con el Comité Técnico del Proceso de Rediseño Institucional, en las sigientes fechas: febrero 2, febrero 18, marzo 3, marzo 18, marzo 30, mayo 9, julio 14, Octubre 10, Noviembre 11 y  Noviembre 29 de 2022, en las que se revisó la ejecución de los pasos que requiere el proceso para poder contar con una propuesta técnica.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia164 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11795,
            'year' =>2,
            'value' => 4,
            'description' => 'A corte 31 de diciembre del 2021 se realizaron las 4 reuniones programadas de los miembros del sindicato, proyectadas para esta vigencia, lo que representa un cumplimiento del 100% respecto a la ejecución de esta acción estratégica.
        
        Las reuniones se llevaron a cabo en las siguientes fechas: 16 de julio, 17 de marzo, 28 de Septiembre y 29 de octubre del añor 2021, para las cuales fueron otorgados los respectivos permisos sindicales, garantizando el derecho a su libre asociación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia165 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11796,
            'year' =>2,
            'value' => 100,
            'description' => 'A continuación se presenta la forma como se logró el cumplimiento del 100% de la meta correspondiente a la presente acción estrategica.
        
        Con base en el Plan de Capacitación y el Plan de Bienestar Social de la entidad formulado, se firmó con la Fundación Alianza Tecnológica y Desarrollo Educativo –ALITIC el Contrato No. 109 de 2021, cuyo objeto fue: Contratar a una persona jurídica que preste los servicios profesionales en capacitación, formación y actualización para implementar los conocimientos, el desarrollo de habilidades y competencias en los funcionarios, empleados y contratistas de la Corporación Autónoma Regional del Atlántico para la mejora continua en el ejercicio de sus funciones y obligaciones. Lo anterior, para el cumplimiento del Plan de Capacitación Institucional.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia166 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11797,
            'year' =>2,
            'value' => 31,
            'description' => 'A corte 31 de diciembre esta acción estrategica presenta un cumplimiento del 100%. 
        
        La meta de esta vigencia de entregar 10 auxilios de tipo educativo y de otro tipo fue superada, teniendo en cuenta que se otorgaron un total de 31 estímulos educativos para funcionarios o sus familiares cursaran estudios a nivel de pregrado, postgrado, educación preescolar, primaria y secundaria.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia167 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11798,
            'year' =>2,
            'value' => 1,
            'description' => 'Por legislación, la Autoevaluación de los Estandares Mínimos del Sistema de Gestión de la Seguridad y Salud en el Tranbajo - SG-SST, se realiza al finalizar la vigencia, es decir, en diciembre de 2021, cuyos resultados determinaran la calificación esperada del Informe Anual de la vigencia.
        
        Los insumos que permiten ir evaluando el avance de esta meta son: el cumplimiento del Plan de Trabajo Anual en SST, el Plan de Capacitación y el cumplimiento de los Requisitos Legales aplicables. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia168 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11799,
            'year' =>2,
            'value' => 0.1,
            'description' => 'Se le asignaron recursos, a pesar de no tener registradas metas, ya que para la vigencia 2020 debido al aislamiento preventivo ocasionado por el Covid 19, no se habían podido realizar los exámenes médicos ocupacionales periódicos y sus pruebas complementarias, tal como lo describe el Informe de Gestión del 2020: “A pesar de no contar con la línea base que ofrece la realización de exámenes medico ocupacionales periódicos del personal, con fundamento en la matriz de peligros y riesgos de la Corporación”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia169 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11799,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia170 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11800,
            'year' =>2,
            'value' => 0.1,
            'description' => 'Se le asignaron recursos, a pesar de no tener registradas metas, puesto que para la vigencia 2020 debido al aislamiento preventivo ocasionado por el Covid 19, no se habían podido realizar los exámenes médicos ocupacionales periódicos y sus pruebas complementarias, tal como lo describe el Informe de Gestión del 2020: “A pesar de no contar con la línea base que ofrece la realización de exámenes medico ocupacionales periódicos del personal, con fundamento en la matriz de peligros y riesgos de la Corporación”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia171 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11801,
            'year' =>2,
            'value' => 0.1,
            'description' => 'Se le asignaron recursos, a pesar de no tener registradas metas, puesto que para la vigencia 2020 debido al aislamiento preventivo ocasionado por el Covid 19, no se habían podido realizar los exámenes médicos ocupacionales periódicos y sus pruebas complementarias, tal como lo describe el Informe de Gestión del 2020: “A pesar de no contar con la línea base que ofrece la realización de exámenes medico ocupacionales periódicos del personal, con fundamento en la matriz de peligros y riesgos de la Corporación”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia172 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11801,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia173 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11802,
            'year' =>2,
            'value' => 1,
            'description' => 'La Corporación dio cumplimiento a la exigencia legal y compromiso de seguridad y salud en el trabajo, consistente en la entrega de los Elementos de Protección Personal - EPP y elementos Covid – 19 para la protección de sus funcionarios y contratistas. Como producto de estas dotaciones sumado al cumplimiento de las demás medidas de bioseguridad se logró la realización del trabajo de forma segura y productiva. 
        
        A corte 31 de diciembre del 2021 se dio cumplimiento del 100% de la meta de realizar el reporte anual de los Elementos de Protección Personal y Colectiva para una labor segura, garantizado la entrega de los EPP necesarios para el desarrollo de las labores presenciales y de trabajo en campo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia174 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11803,
            'year' =>2,
            'value' => 1,
            'description' => 'Es importante señalar, que se evaluaron el 100% de los puntos puntos planificados para la actual vigencia, asimismo, durante el periodo 2021 se realizaron las adecuaciones derivadas del diagnóstico del periodo anterior.
        
        Por consiguiente, la meta se logró en un 100% con la realización del estudio correspondiente a la medición de iluminación de las diferentes áreas de la Entidad. Lo anterior considerando que, conforme a la matriz de peligros y riesgos existentes, es el riesgo susceptible de medición.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia175 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11804,
            'year' =>2,
            'value' => 1,
            'description' => 'La meta se cumplió en un 100% logrando la capacitación y formación de los colaboradores que requieren competencia para trabajo en alturas los cuales se encuentra detallados en el informe oficial.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia176 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11805,
            'year' =>2,
            'value' => 1,
            'description' => 'La meta de la presente acción estratégica, de tener el informe anual con una valoración mínima de 90 sobre 100 puntos se cumplió en un 100% logrando mantener el Plan Estratégico de Seguridad Vial (PESV) actualizado que, cumple con los parámetros legales vigentes. Esto se refleja en la no ocurrencia de accidentes de trabajo de tipo vial y en el fortalecimiento de la cultura preventiva de la Entidad. Se desarrollaron todas las actividades planificadas en relación con los cinco componentes del sistema.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia177 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11806,
            'year' =>2,
            'value' => 1,
            'description' => 'Se formuló el Plan Estratégico de Tecnologías de la Información - PETI, el cual recoge las acciones estratégicas que permitan el desarrollo de las TIC dentro de la Corporación dando cumplimiento del 100% a la meta fijada para la vigencia 2021. Este plan visiona la implementación, modernización y actualización de los recursos tecnológicos, su mantenimiento y optimización, así como la implementación de estándares nacionales e internacionales para su adecuada gestión, tales como el Marco de Referencia de Arquitectura Empresarial definido por MinTIC, y la norma NTC-ISO 27001 para la gestión de la seguridad de la información. 
        Todas sus acciones se encuentran formalizadas a través de su inclusión en el Plan de Acción Institucional 2020-2023 y los Planes de Acción Integrado 2020, 2021 y 2022.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia178 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11807,
            'year' =>2,
            'value' => 0,
            'description' => 'Se elaboró el proyecto para el Plan estratégico de Tecnologías de Información PETI 2020-2023. 
        Sin embargo, esta acción estratégica no presenta avances en la vigencia 2021 debido a que no se adelantaron acciones asociadas a la divulgación de este. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia179 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11808,
            'year' =>2,
            'value' => 0.1,
            'description' => 'La acción estratégica 5.3.1.3.que busca diseñar e implementar un sistema de gestión de seguridad de la información basado en la norma ISO 27001 tiene meta física programada para el 2022. Sin embargo, teniendo cuenta que en 12 meses no se alcanza a tener implementado el sistema, se adelantó el proceso previo de acompañamiento técnico para el logro de esta acción durante la vigencia 2021, para poder dar cumplimiento de la meta en el 2022. Es por esta razón, que se presenta un avance en la meta financiera.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia180 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11809,
            'year' =>2,
            'value' => 40,
            'description' => 'A corte de 31 de diciembre del 2021 se cumplió la meta en el 100%, para lograrlo, se realizó la adición No.1 al Contrato 367 con fecha 31 Mayo 2021 cuyo objeto es:“Adquisición, instalacion y configuraciòn de equipos de cómputos, escaneres e impresoras de última tecnología con el objeto de iniciar el reemplazo de los equipos obsoletos, de acuerdo a las especificaciones técnicas descritas en anexo técnico; incluye servicios complementarios, a todo costo, por mano de obra certificada”.
        Lo anterior, con el fin de garantizar la renovación del 100% de los equipos de cómputo y periféricos de la CRA para  los funcionarios. Dicha adición permitió adquirir 33 equipos de cómputo y una impresora adicional, con lo que se renovó al 100% el inventario de tecnología para usuario final. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia181 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11810,
            'year' =>2,
            'value' => 20,
            'description' => 'En la vigencia 2021 acorde con la meta establecida, se da cumplimiento del 20% de la Red de voz y datos corporativos y servidores virtualizados implementados programados para dicha vigencia.
        
        Con lo relacionado a Red de voz Se elaboró revisión con el proveedor de telefonía Movistar, para los servicios de comunicaciones a través de WAN, implementando un Gateway de voz, troncal SIP, hardphone y softphone, lo que permitiría que los computadores y celulares de los funcionarios sirviesen de extensiones a través de softphones (Apps de voz). ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia182 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11811,
            'year' =>2,
            'value' => 70,
            'description' => 'Es preciso mencionar que las licencias de software de la Corporación se vencen en los meses de Junio y Octubre de la vigencia 2021. 
        
        Se realizó, a través de la Tienda Virtual del Estado Colombiano, la adquisición de software base de la CRA. Se adquirieron las licencias de Kaspersky Endpoint Security Cloud (Que incluye Kaspersky Security for Microsoft Office 365), Adobe Acrobat DC Pro y Adobe Sign In.
        
        A corte 31 de diciembre de 2021 se presenta un avance del 70%, con respecto al 100% definido para esta vigencia. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia183 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11812,
            'year' =>2,
            'value' => 0.1,
            'description' => 'No tenia meta fisica para la vigencia, pero se comprometieron recursos por lo que se define como estrategia poner de meta 0.1, de tal forma que se pueda ingresar el reporte en el sistema CARdinal',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia184 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11813,
            'year' =>2,
            'value' => 5,
            'description' => 'Con las estrategias  implementadas en lo corrido de la presente vigencia, a corte 31 de diciembre de 2021, la meta se cumplió en un 100%.
        
        El logro de la meta se obtiene a través de la ejecucion de las siguientes 5 estrategias de comunicación:
        I.	Estrategia de Divulgación y Visibilización de acciones institucionales.
        II.	Estrategia de Crecimiento en Redes Sociales.
        III.	Estrategia de Promoción de Imagen institucional.
        IV.	Estrategia de Engagement (Marketing Online).
        V.	Estrategia de relacionamiento con medios de comunicación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia185 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11814,
            'year' =>2,
            'value' => 4,
            'description' => 'Cinco (05) Campañas institucionales en medios de comunicación tradicionales y nuevas tecnologías: 
        
        1.	Nuevo Código de colores: Emisora Atlántico, emisoras ABC y redes sociales.
        2.	Atlántico Respira Ambiente: Programa de TV regional Sucesos y redes sociales.
        3.	Gestión 2020: Radios comunitarias y redes sociales.
        4.	Tita y Titi te enseñan a cuidar el medio ambiente: Portal La Chachara y redes sociales. 
        5.	La Nota Ambiental: Las Noticias de Telecaribe y redes sociales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia186 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11815,
            'year' =>2,
            'value' => 71517,
            'description' => 'Las campañas institucionales y estrategias implementadas en las  tres redes sociales corporativas, han tenido una acogida muy por encima de la meta proyectada para el año 2021. El detalle de interacciones en cada una de las redes sociales se presenta a continuación:
        
        	Facebook: 35.207interacciones
        	Instagram: 32.705 interacciones
        	Twitter: 3.605 interacciones
        
        El total de interacciones en las tres redes sociales fue de 71.517 durante la vigencia 2021, logrando el cumplimiento de la meta.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia187 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11816,
            'year' =>2,
            'value' => 10,
            'description' => 'Se desarrollaron diferentes acciones para el crecimiento en redes sociales, en el período comprendido entre enero y diciembre de 2021, logrando un incremento total de 1.921 nuevos seguidores entre las tres prinicipales redes sociales, instagram, facebook y twitter.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia188 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11817,
            'year' =>2,
            'value' => 1,
            'description' => 'Con la financiación del proyecto, Mantenimiento, limpieza, rectificación de cauce y protección de talud del k0+000 al k1 + 300 del canal de aguas lluvias El Pantano en el municipio de Manatí - Atlántico”, durante la vigencia 2021, se dio el cumplimiento en un 100% a la meta fijada de un (1) Proyecto financiado con recursos nacionales o internacionales para dicha vigencia.
        
        Los recursos asignados para la ejecución del proyecto corresponden al Fondo Nacional Ambiental – FONAM, siendo estos del orden nacional. El valor aprobado para el proyecto fue de cinco mil doscientos veintiún millones ochocientos seis mil doscientos treinta y nueve pesos m.l ($5.221.806.239).',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia189 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11818,
            'year' =>2,
            'value' => 100,
            'description' => 'Durante el año 2021, se radicaron catorce (14) proyectos ambientales en el Banco de Proyectos, de los cuales, a la fecha de cierre del presente informe de gestión, seis (6) tienen concepto de evaluación técnica, financiera y ambiental con concepto VIABLE, cuatro (4) corresponden a proyectos institucionales; es decir, formulados desde la Corporación que fueron presentados al Ministerio de Ambiente y Desarrollo Sostenible para viabilidad y asignación de recursos del FONAM y/o del Sistema General de Regalías y cuatro (4) se encontraban en proceso de revisión y /o evaluación por parte del equipo interdisciplinario evaluador del Banco de Proyectos de la CRA.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia190 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11819,
            'year' =>2,
            'value' => 0,
            'description' => 'Durante la vigencia 2021 se desarrollaron mesas de trabajo con el fin de establecer la ruta a seguir para crear una herramienta que articule desde la planeación, pasando por la evaluación hasta el seguimiento de los proyectos radicados en la entidad por actores externos y los proyectos formulados desde la Corporación.
        A corte 31 de diciembre de 2021 no se cumplió con la meta programada, quedando pendiente para presentar en próxima vigencia y dar cumplimiento dentro del Plan de Acción Institucional 2020-2023.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia191 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11820,
            'year' =>2,
            'value' => 100,
            'description' => 'Durante la vigencia se celebró el Contrato No. 0000217 de 2021 con EDURED, el cual fue fudamental para realizar un cambio en la cultura de los funionarios para la gestión de documentos digitales y electrónicos, en consonancia con la política de “Cero Papel” del gobierno nacional e incursión en la estratégia digital de manejo de archivos para garantizar el trabajo en casa o remoto, cuando se requiera. Al entrar en operación el software de Gestión Documental ORFEO, se hace dimanica el proceso recepción, asignación, distribución y respuesta de la correspodencia. 
        Tambien es importante destacar la renovación del Software contable (PCT), un paso adelante en la emisión de facturación electronica cumpliendo asi con la normativa y directrices emitidas por la DIAN. 
        Con las acciones desarrolladas se tiene un avance en el indicador en un 100%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia192 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11820,
            'year' =>2,
            'value' => 15,
            'description' => 'A cierre de la vigencia 2021, el rezago presentado en la meta de renovacion y licenciamiento software, alcanzó el  85% de cumplimiento.
        
        Lo anterior, teniendo en cuenta que se tiene licenciado todo el software corporativo (como estuvo en la vigencia 2020), y adicionalmente se realizó la actualizacion de gran parte de los aplicativos institucionales durante esta vigencia como se detalla en el documento de informe gestión 2021',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia193 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11821,
            'year' =>2,
            'value' => 100,
            'description' => 'Con las acciones desarrolladas al 31 de diciembre del 2021, se puede evidenciar que la meta se ha cumplido al 100% en el mantenimiento de la pagina web/ intranet y subportales de la entidad como se observa en el informe oficial.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia194 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11822,
            'year' =>2,
            'value' => 0.1,
            'description' => 'Las acciones estratégicas 5.6.1.3. y 5.6.1.4. se refieren a “Adquirir un (1) software de la Oficina Jurídica” e “Implementación del software para PQRS” respectivamente. En este sentido se asignaron recursos, a pesar de que las metas (ambas) se tienen planeadas para el 2022, con el propósito de iniciar el proceso desde la vigencia 2021 y poder así adoptar los softwares que le permitan a la entidad llevar estas actividades con un mayor control, cumpliendo con la meta en la vigencia asignada.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia195 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11823,
            'year' =>2,
            'value' => 0.1,
            'description' => 'Las acciones estratégicas 5.6.1.3. y 5.6.1.4. se refieren a “Adquirir un (1) software de la Oficina Jurídica” e “Implementación del software para PQRS” respectivamente. En este sentido se asignaron recursos, a pesar de que las metas (ambas) se tienen planeadas para el 2022, con el propósito de iniciar el proceso desde la vigencia 2021 y poder así adoptar los softwares que le permitan a la entidad llevar estas actividades con un mayor control, cumpliendo con la meta en la vigencia asignada.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia196 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11824,
            'year' =>2,
            'value' => 0,
            'description' => 'A corte 31 de diciembre de 2021, la Corporación se encuentra en proceso de revisión de posibles acciones que permitan desarrollar la formulación e implementación del documento de política de seguridad y manejo de la información. A la fecha de cierre de vigencia no se tienen avances. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia197 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11825,
            'year' =>2,
            'value' => 50,
            'description' => 'Esta acción estratégica, a corte 31 de diciembre de 2021 se cumplió en el 50% establecido para la vigencia, representado en la actualización de la información cartográfica de MAGNA SIRGAS COLOMBIA al sistema único de coordenadas, teniendo en cuenta que esta es la nueva estandarización nacional.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia198 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11826,
            'year' =>2,
            'value' => 100,
            'description' => 'Con la actualización permanente y reporte de la información en el SIAC, la meta registra un cumplimiento del 100% durante la vigencia 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia199 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11826,
            'year' =>2,
            'value' => 16,
            'description' => 'La meta relacionada con el cumplimiento en la actualización y reporte de la información en el SIAC un cumplimiento del 96%, como se detalla en el documento informe de gestión 2021',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia200 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11827,
            'year' =>2,
            'value' => 1,
            'description' => 'Se realizó ciclo de auditoría interna en el período del 29 de noviembre al 16 de diciembre de la vigencia 2021, de conformidad con el cronograma establecido entre la Dirección General, la Secretaria General y el equipo auditor. Por consiguiente, la meta a corte 31 de diciembre del 2021 tiene un cumplimiento del 100%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia201 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11828,
            'year' =>2,
            'value' => 1,
            'description' => 'Las acciones desarrolladas permiten reportar un cumplimiento de la meta a 31 de diciembre del 2021, toda vez que, la entidad mantiene vigente la certificación del sistema de gestión de la calidad según NTC ISO 9001:2015, bajo el ente certificador ICONTEC.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia202 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11829,
            'year' =>2,
            'value' => 0,
            'description' => 'Para las acciones estratégicas 5.7.1.3. Implementar un Sistema de Seguridad y Salud en el Trabajo, según norma NTC 45001:2015 y 5.7.1.4. Implementar un Sistema de Gestión Ambiental según la norma NTC ISO 14001:2015, incluidas dentro del programa Sistema de Gestión Integrado, se asignaron recursos debido a que el proceso de diseño, implementación y evaluación estos Sistemas de Gestión en entidades como la Corporación, deben tener un tiempo de ejecución de al menos 18 meses. Situación similar se presenta con la acción estratégica 5.7.2.1. Implementar una norma para la calibración de equipos según ISO 17025: 2017 (Ensayo y Calibración). Por esta razón se decidió iniciar con estos procesos en la vigencia 2020, para darle continuidad durante el 2021, y poder entrar en las fases de mantenimiento y mejora en las vigencias posteriores.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia203 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11830,
            'year' =>2,
            'value' => 0,
            'description' => 'Para las acciones estratégicas 5.7.1.3. Implementar un Sistema de Seguridad y Salud en el Trabajo, según norma NTC 45001:2015 y 5.7.1.4. Implementar un Sistema de Gestión Ambiental según la norma NTC ISO 14001:2015, incluidas dentro del programa Sistema de Gestión Integrado, se asignaron recursos debido a que el proceso de diseño, implementación y evaluación estos Sistemas de Gestión en entidades como la Corporación, deben tener un tiempo de ejecución de al menos 18 meses. Situación similar se presenta con la acción estratégica 5.7.2.1. Implementar una norma para la calibración de equipos según ISO 17025: 2017 (Ensayo y Calibración). Por esta razón se decidió iniciar con estos procesos en la vigencia 2020, para darle continuidad durante el 2021, y poder entrar en las fases de mantenimiento y mejora en las vigencias posteriores.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia204 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11831,
            'year' =>2,
            'value' => 0,
            'description' => 'Para las acciones estratégicas 5.7.1.3. Implementar un Sistema de Seguridad y Salud en el Trabajo, según norma NTC 45001:2015 y 5.7.1.4. Implementar un Sistema de Gestión Ambiental según la norma NTC ISO 14001:2015, incluidas dentro del programa Sistema de Gestión Integrado, se asignaron recursos debido a que el proceso de diseño, implementación y evaluación estos Sistemas de Gestión en entidades como la Corporación, deben tener un tiempo de ejecución de al menos 18 meses. Situación similar se presenta con la acción estratégica 5.7.2.1. Implementar una norma para la calibración de equipos según ISO 17025: 2017 (Ensayo y Calibración). Por esta razón se decidió iniciar con estos procesos en la vigencia 2020, para darle continuidad durante el 2021, y poder entrar en las fases de mantenimiento y mejora en las vigencias posteriores.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia205 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11832,
            'year' =>2,
            'value' => 0.1,
            'description' => 'Esta acción estratégica 5.7.3.1, Implementar un Modelo Integrado de Planeación y Gestión - MIPG se le asignaron recursos con el fin de iniciar el proceso de adopción de este Modelo y como actividad complementaria al Sistema de Gestión de la Calidad, debido a todas las actividades que conllevan el MIPG y que se encuentran en complementariedad con los demás Sistemas de Gestión que la entidad tiene planeado adoptar. Por consiguiente, se adelantó el proceso previo de acompañamiento técnico para el logro de esta acción durante a vigencia 2021, para poder dar cumplimiento de la meta en el 2022. Es por esta razón, que se presenta un avance en la meta financiera.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia206 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11833,
            'year' =>2,
            'value' => 100,
            'description' => 'En la vigencia 2021 se cumplió con la meta programada, ello se logró con las actividades definidas en el Contrato No. 362 del 2020, suscrito con la empresa Mercadatos S.A, cuyo objeto es: Prestación del servicio de almacenamiento, conservación, custodia, préstamo, y transporte de los acervos documentales de la Corporación Autónoma Regional del Atlántico C.R.A, según las necesidades y en cumplimiento de la ley 594 de 2000, el acuerdo 008 de 2014 y demás normas reglamentarias.
        Actualmente se encuentra la información del archivo central de la Corporación en las bodegas del contratista, cumpliendo con todos los requerimientos exigidos por el Archivo General de la Nación para la adecuada protección y custodia de los documentos de la entidad, entre ellas: seguridad, medición de temperatura y humedad relativa, uso y manejo de extintores, alarmas contra incendio, personal especializado para el desarrollo de todas las actividades.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia207 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11833,
            'year' =>2,
            'value' => 30,
            'description' => 'Durante la vigencia 2021, se logró el cumplimiento del 100% de la meta de la vigencia anterior, de tener por lo menos el 50% de los documentos custodiados en condiciones de espacio y medioambientales adecuadas',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia208 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11834,
            'year' =>2,
            'value' => 34,
            'description' => 'Para la ejecución de esta acción estratégica se suscribió el Contrato el 227 del 2021 cuyo objeto es: “Prestar servicios para la implementación de la Cultura de la Gestión de Documentos Digitales y Electrónicos, en consonancia con la Política de “Cero Papel” del Gobierno Nacional e incursión en la Estrategia Digital de Manejo de Archivos para garantizar el trabajo en casa o remoto, cuando se requiera”.
        
        A traves de estre Contrato, se dió cumplimiento a la meta de la vigencia 2021 de tener al menos el 20% de la documentación misional y estratégica digitalizada y certificada para fines probatorios, siendo esta superada, dado que la misma alcanzó un cumplimiento del 34%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia209 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11834,
            'year' =>2,
            'value' => 10,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia210 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11835,
            'year' =>2,
            'value' => 1,
            'description' => 'Para este año 2021, se elaboró el instrumento archivístico denominado “Tabla de Control de acceso”, que es un instrumento de referencia que determina las agrupaciones documentales que serán objeto de uso, consulta y acceso por parte de usuarios internos y externos. Dicho instrumento archivistico creado, fue enviado al SGI para su revisión e ingreso al sistema, se adjunta evidencia del correo enviado y la Tabla, lo que representa un cumplimiento del 100% de la meta que mide esta acción estratégica. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia211 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11836,
            'year' =>2,
            'value' => 3,
            'description' => 'Durante la vigencia 2021 se actualizaron 3 instrumentos de gestión de la información, los cuales están colgados en la página de la entidad en el link de Transparencia y acceso a la información pública: 
        
        http://www.crautonoma.gov.co/atencion-al-publico/transparencia-y-acceso-a-informacion-publica/gestion-documental/instrumentos-de-gestion-de-informacion-publica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia212 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11837,
            'year' =>2,
            'value' => 4,
            'description' => 'Durante el año 2021, se prestó apoyo a 4 archivos de gestión de la entidad así:
        
        	Archivo de Subdirección de gestión ambiental: Con la organización de los expedientes de trámites ante autoridad ambiental.
        	Archivo de Secretaria General con el grupo de Recursos Humanos: Con la elaboración de las hojas de control de las Historias Laborales inactivas.
        	Archivo del área de la Subdirección Financiera: Apoyo mancomunado con el área ambiental para el saneamiento financiero de los expedientes de trámites ante autoridad ambiental.
        	Subdirección de Planeación: Para la recepción, entrega, verificación y ajustes de las cajas de información en el proceso de digitalización.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia213 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11837,
            'year' =>2,
            'value' => 1,
            'description' => '
        A corte 31 de diciembre de 2021, se logró el cumplimiento del 100% de esta meta que presentó rezago en la vigencia 2020, logrando gestionar los 3 archivos programados de la vigencia anterior, que corresponden a:
        o	Subdirección de Gestión Ambiental: En la organización de los expedientes de trámites ante autoridad ambiental.
        o	Secretaria General: En Recursos Humanos para la elaboración de las hojas de control de las Historias Laborales inactivas. 
        o	Subdirección Financiera: Saneamiento financiero de los expedientes de trámites ante autoridad ambiental.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia214 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11838,
            'year' =>2,
            'value' => 90,
            'description' => 'En lo corrido de la vigencia 2021, a corte 31 Diciembre de 2021 se encuentran actualizados los expedientes en un 90%, que corresponde a 1.424 cajas de expedientes organizadas de un total de 1.582 cajas. 
        
        La 1.424 cajas de expedientes organizadas contienen alrededor de 9.968 carpetas y tienen las siguiente caracteristicas:
        
        	1.416 son cajas x 200 
        	8 son cajas x 300',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia215 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11838,
            'year' =>2,
            'value' => 41,
            'description' => 'Durante la vigencia 2021 se continuó con el proceso de revisión y actualización para el saneamiento de expedientes, logrando relaizar el saneamiento del 100% de los expedientes que se encontraban pendientes de la vigencia 2020.
        
        Al cierre de la vigencia 2020, se tenian un total de 1.282 cajas con alrededor de 7.500 carpetas, que conformaban los expedientes de los trámites adelantados ante la entidad.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia216 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11839,
            'year' =>2,
            'value' => 100,
            'description' => 'Los trámites jurídicos presentados se atendieron en su totalidad, dándole el impulso correspondiente, lo que permite indicar que se cumplió con el 100% de la atención del de los tramites procesales en cuento a las actuaciones administrativa y judiciales que los mismos demandan. 
        
        En la tabla siguiente se relacionan los 53 procesos impetrados durante la anualidad 2021, que fueron atendidos, los cuales se encuentran discriminados  en el informe oficial.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia217 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11840,
            'year' =>2,
            'value' => 100,
            'description' => 'La política de prevención del daño antijurídico conlleva la solución de deficiencias administrativas o misionales que generan litigiosidad e implica el uso de recursos públicos para mitigar las causas de los eventos generadores de daño antijurídico, de aquí que la metodología a utilizar busque identificar el origen de las fallas y establecer el procedimiento a seguir para la formulación, evaluación e institucionalización de las acciones que se debe adoptar para reducir los riesgos y costos de enfrentar un proceso judicial.
        
        En cumplimiento de lo anterior, en la Corporación se tomaron las acciones pertinentes que permitieran la formulación y posterior implementación de las políticas de prevención de daño antijurídico. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia218 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11841,
            'year' =>2,
            'value' => 91,
            'description' => 'El cumplimiento de la meta se registra con la cantidad de peticiones asignadas VS cantidad de peticiones resueltas, que permite realizar el calculo del indicador:
        
        1.	Cantidad de peticiones asignadas: 1773
        2.	Cantidad de peticiones resueltas: 1619
        3.	PORCENTAJE PROMEDIO DE ATENCIÓN: 91,31%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia219 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11841,
            'year' =>2,
            'value' => 12,
            'description' => 'Durante la vigencia 2020, la meta tuvo un cumplimiento del 87,78% correspondiente a 1.179 PQRS atendidas de 1343 recibidas, es decir, se presento un rezago y quedaron 164 PQRS pendientes por atender.
        
        A corte 31 de dicembre del 2021 ya se les habia dado respuesta a las 164 PQRS que conformaron el rezago de la vigencia 2020, dandose cumplimiento al 100% la meta.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia220 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11842,
            'year' =>2,
            'value' => 100,
            'description' => 'En el proceso de adquisicion de bienes y servicios que hace referencia a la Contratacion Estatal que realiza la Corporación, a corte 31 de diciembre del 2021 la meta registra un cumplimiento del 100% en la presente vigencia.
        En este periodo, se recibió la solicitud de 288 requeimientos para trámites procesales contractuales por parte de la Dirección de la entidad, los cuales fueron atendidos y tramitados conforme al reglamento interno y al Estatuto de Contratación Estatal, hasta el perfeccionamiento de los respectivos Contratos. Las evidencias en relación con la información generada en los procesos contractuales, puede ser verificada en la plataforma del SECOP I (del Contrato 001 al 164) y en la plataforma del SECOP II (del Contrato 165 al 305), donde se encuentran los datos correspondientes a número de Contrato, objeto, valor, tiempo de ejecución y demás información requerida.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia221 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11843,
            'year' =>2,
            'value' => 0,
            'description' => 'Dentro de las actividades que contemplan el buen y eficiente funcionamiento de la infraestructura de la Corporación Autónoma Regional del Atlántico CRA, teniendo en cuenta los problemas de salud pública, pandemia del Covid -19, cuarentena, el trabajo remoto en casa, no se han podido llevar a cabo las auditorías energéticas a la CRA. 
        
        Se realizaron los estudios previos y de mercado, a los cuales se les hicieron unas recomendaciones por parte de la oficina jurídica. Esta acción estratégica cuya meta era de realizar 2 auditorías energéticas en la vigencia 2021, no se alcanzó, por consiguiente, se ejecutará en la siguiente anualidad. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia222 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11844,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizarón en total 326 actividades de mantenimientos a la infraestructura,  asociadas a grantizar la funcionalidad fisica de la Entidad dando cumplimiento a la meta en un 100% para la vigencia 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia223 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11844,
            'year' =>2,
            'value' => 22,
            'description' => 'A corte de 31 de diciembre del año 2021, el rezago que presentó este indicador al cierre del año anterior se encuentra con un cumplimiento del 100%; es decir se logró el 40% programado para la vigencia 2020. 
        
        El cumplimiento se logró con el mantenimiento preventivo y correctivo de los aires acondicionados que estaban pendientes',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia224 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11845,
            'year' =>2,
            'value' => 100,
            'description' => 'A cierre 31 de diciembre del 2021, la meta establecida para la vigencia relacionada con el mantenimiento preventivo y correctivo de la infraestructura de la Corporación, alcanzó un 100% de su ejecución física. El cumplimiento de esta acción estratégica durante la vigencia 2021, tuvo como uno de los Contratos principales de mantenimiento de infraestructura física, el suscrito con la empresa DOCTOR HOUSE, antes mencionado. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia225 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11845,
            'year' =>2,
            'value' => 7,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => true,
            ]);
            $idevidencia226 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11846,
            'year' =>2,
            'value' => 4,
            'description' => 'La Corporación cuenta con cuatro (4) vehículos tipo camioneta identificados con las placas: OQN 626, OQN 627, OQN 628 Y OQN 629, de los cuales, al finalizar la vigencia 2021, se encuentran funcionando en su totalidad, lo que representa un cumplimiento de la meta en un del 100% al cierre del año 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia227 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 11847,
            'year' =>2,
            'value' => 14,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-16',
            'rezago' => false,
            ]);
            $idevidencia228 = DB::getPdo()->lastInsertId();
        
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
