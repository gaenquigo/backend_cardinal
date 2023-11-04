<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvaancesCorpoguavio2021 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 10629,
            'year' =>2,
            'value' => 0,
            'description' => 'Sin Meta para la vigencia 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10630,
            'year' =>2,
            'value' => 0,
            'description' => 'Sin Meta para la vigencia 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10631,
            'year' =>2,
            'value' => 100,
            'description' => 'Las siguientes subactividades se desarrollaron durante la vigencia 2021 para el cumplimiento de la actividad: 
        • Socialización de estándares y avance del eje programático de los POMCAS a los municipios y actores solicitantes.
        • Gestión para la generación de informes de seguimiento de POMCAS.
        • Participación en Comités Técnicos de las Comisiones Conjuntas de los POMCAS ríos Guavio, Humea, Guayuriba y Bogotá.
        • Revisión para mejoras de la caja de herramientas para el seguimiento y la evaluación del avance físico y financiero de los POMCAS ríos Guavio y Humea.
        • Mesas técnicas con entes territoriales y autoridades ambientales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10632,
            'year' =>2,
            'value' => 100,
            'description' => 'Durante la vigencia 2021 se desarrollaron las siguientes subactividades para el cumplimiento de la actividad: 
        • Armonización de los proyectos específicos de inversión del PAI “CORPOGUAVIO Somos Todos, Vida-Confianza-Desarrollo” con los componentes programáticos de los POMCAS presentes en la jurisdicción. 
        • Asistencia técnica en la alineación proyectos municipales con los componentes programáticos de los POMCAS.
        •  Realización de proceso formativo en cuencas hidrográficas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10633,
            'year' =>2,
            'value' => 100,
            'description' => 'En el 2021 se desarrollaron las siguientes subactividades: 
        • Participación en Comité Técnico citado por CORMACARENA donde se informó por parte de CORPORINOQUIA el estado actual del contrato y su proceso legal.
        • Cumplimiento de los compromisos adquiridos en el marco del comité técnico realizado.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10634,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizo seguimiento y reporte del segundo semestre a la gestión y ajuste de los POAI de los 22 Objetivos y 9 Proyectos que componen el plan de acción institucinal para la vigencia 2021.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10635,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizo seguimiento del aporte en la gestión del segundo semestre 2021 al PGAR 2013 - 2023.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10636,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizo seguimiento, reporte y evaluación mensual del SIRECI presentado ante la contraloria General al igual que el reporte de proyectos .',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10637,
            'year' =>2,
            'value' => 100,
            'description' => 'Se mantuvo constante asistencia tecnica de los proyectos asociados a los 22 objetivos, 9 proyectos del plan de acción y los proyectos especificos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10638,
            'year' =>2,
            'value' => 100,
            'description' => 'Para la vigencia 2021, se realizó la asistencia tecnica a los municipios de Gachalá, Gama, Junín, Guasca, Gachetá , Medina, Fómeque  y Ubalá, como resultado de ellos se suscribieron las actas de concertación de los asuntos ambientales y se expidieron los respectivos actos administrativos de concertación de los asuntos ambientales de seis (06) de los ocho (08) municipios  de la jurisdicción de CORPOGUAVIO. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10639,
            'year' =>2,
            'value' => 20,
            'description' => 'Cuando los municipios inicien su ejecución  en EOTs segunda generación, Corpoguavio realizará el respectivo seguimiento y evaluara la implementación de las determinantes ambientales, sin embargo para la vigencia 2021 se realizó la revisión del marco legal vigente y la guía orientadora para la incorporación de las Determinantes Ambientales en los EOT y su respectivo seguimiento la cual permite obtener un avance cerca le 20% en la actividad. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10640,
            'year' =>2,
            'value' => 100,
            'description' => 'Para la vigencia 2021, se asistierón tecnicamente a los ocho (08) municipios de la jurisdicción de Corpoguavio,   municipios de Gachalá, Gama, Junín, Guasca, Gachetá,  Medina,  Ubalá y Fómeque   para la incorporación efectiva de la variable de riesgo y cambio climático en las propuestas de modelo de ocupación concertadas ambientalmente en la vigencia 2021.
        A partir de la  2022 se realizará el ajuste y actualización de los estudios de amenaza, vulnerabilidad y riesgo  (AVR) desde la Linea Temática de Gestió del Riesgo de Desastres y Cambio Climático para luego si realizar el seguimiento desde la Linea de Ordenamiento Territorial a dicha actualizacion de estudios AVR y su articulación con otros instrumentos de la gestión del riesgo municipal que se relacionan con el ordenamiento territorial. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10640,
            'year' =>2,
            'value' => 30,
            'description' => 'Para la vigencia 2021, se asistierón tecnicamente a los ocho (08) municipios de la jurisdicción de Corpoguavio,   municipios de Gachalá, Gama, Junín, Guasca, Gachetá,  Medina,  Ubalá y Fómeque   para la incorporación efectiva de la variable de riesgo y cambio climático en las propuestas de modelo de ocupación concertadas ambientalmente en la vigencia 2021.
        A partir de la  2022 se realizará el ajuste y actualización de los estudios de amenaza, vulnerabilidad y riesgo  (AVR) desde la Linea Temática de Gestió del Riesgo de Desastres y Cambio Climático para luego si realizar el seguimiento desde la Linea de Ordenamiento Territorial a dicha actualizacion de estudios AVR y su articulación con otros instrumentos de la gestión del riesgo municipal que se relacionan con el ordenamiento territorial. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10641,
            'year' =>2,
            'value' => 100,
            'description' => 'Se brindó acompañamiento técnico a los consejos municipales y  administraciones municipales en los procesos de revisión y ajuste de los Esquemas de Ordenamiento Territorial. Adicionalmente, CORPOGUAVIO brindó la asistencia técnica y acompañamiento en el desarrollo del cabildo abierto del pasado 12 de noviembre y Miércoles 09 de junio de 2021 respectivamente.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10642,
            'year' =>2,
            'value' => 100,
            'description' => 'CORPOGUAVIO para la vigencia 2021, propicio escenarios de participación y socialización con los consejos territoriales y grupos de interés identificados y  realizó acompañamiento a los grupos de interés general con relación a la funciones y competencias de los entes territoriales, autoridad ambiental y comunidad en general frente a los procesos de desarrollo minero-energético en la jurisdicción de Corpoguavio',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10643,
            'year' =>2,
            'value' => 100,
            'description' => 'Se adelantaron actividades  de fortalecimiento de capacidades para los Concejos Municipales a través de actividades lúdicas y académicas no formales,  teniendo en cuenta que estas instancias contituyen en actores tomadores de decisión e incidentes en los procesos de ordenamiento territorial  para lo cual se realizarón dos espacios de Capacitación Técnica y legal sobre Ordenamiento Territorial y ejercicio de la Autoridad Ambiental y un (01) foro denominado  “Diálogos Territoriales en la Dimensión Ambiental” para el municipio de Gachalá..',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10644,
            'year' =>2,
            'value' => 50,
            'description' => 'En la vigencia 2021, Corpoguavio adelantó las acciones correspondientes al recibo de los productos finales objeto del Contrato 507 de 2020, entre los cuales se encuentran el documento técnico de Determinantes Ambientales para la Región del Guavio y las fichas de determinantes ambientales aplicables a cada uno de los municipios de la jurisdicción, el componente cartográfico y otros que dan soporte a los mencionados productos, con el fin de facilitar la correcta incorporación de las determinantes ambientales en el desarrollo de los procesos de Revisión y Ajuste de los Esquemas de Ordenamiento Territorial Municipal. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10645,
            'year' =>2,
            'value' => 0,
            'description' => 'Corpoguavio en la vigencia 2021, una vez surtidos los tramites mencionados, procedió a la elaboración y expedición del acto administrativo POR MEDIO DE LA CUAL SE ADOPTA EL INSTRUMENTO AJUSTADO DE CÁLCULO DE LAS DENSIDADES MÁXIMAS DE OCUPACIÓN EN SUELO RURAL PARA USO RESIDENCIAL EN LA CATEGORÍA DE DESARROLLO RESTRINGIDO CORRESPONDIENTE A SUELO SUBURBANO Y VIVIENDA CAMPESTRE PARA LOS MUNICIPIOS DE LA JURISDICCIÓN DE CORPORACIÓN AUTÓNOMA REGIONAL DEL GUAVIO – CORPOGUAVIO, con el fin de ser tenidas en cuenta por los ocho (8) municipios de la jurisdicción, en los procesos de formulación, revisión, ajuste y/o actualización de los Esquemas de Ordenamiento Territorial. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10645,
            'year' =>2,
            'value' => 10,
            'description' => 'Corpoguavio en la vigencia 2021, una vez surtidos los tramites mencionados, procedió a la elaboración y expedición del acto administrativo POR MEDIO DE LA CUAL SE ADOPTA EL INSTRUMENTO AJUSTADO DE CÁLCULO DE LAS DENSIDADES MÁXIMAS DE OCUPACIÓN EN SUELO RURAL PARA USO RESIDENCIAL EN LA CATEGORÍA DE DESARROLLO RESTRINGIDO CORRESPONDIENTE A SUELO SUBURBANO Y VIVIENDA CAMPESTRE PARA LOS MUNICIPIOS DE LA JURISDICCIÓN DE CORPORACIÓN AUTÓNOMA REGIONAL DEL GUAVIO – CORPOGUAVIO, con el fin de ser tenidas en cuenta por los ocho (8) municipios de la jurisdicción, en los procesos de formulación, revisión, ajuste y/o actualización de los Esquemas de Ordenamiento Territorial. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10646,
            'year' =>2,
            'value' => 3,
            'description' => 'La Corporación realizó la contratación del grupo de trabajo durante el primer trimestre del presente año quien atendió durante 2021 el cumplimiento de metas de la Línea Temática Responsabilidad Integral Sector Minero Energético. Durante el año se desarrollaron procesos formativos relacionados con temáticas del sector minero energético algunos eventos virtuales con convocatoria abierta a todos los interesados de la jurisdicción CORPOGUAVIO y otros presenciales en el municipio de Gachalá.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10647,
            'year' =>2,
            'value' => 15,
            'description' => 'Durante el año la Línea Temática Responsabilidad Integral Sector Minero Energético participó en diferentes escenarios que permitieron realizar enlaces institucionales de esta manera fortalecer las acciones ambientales en las actividades del sector minero energético',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10648,
            'year' =>2,
            'value' => 2,
            'description' => 'Los integrantes de la Línea Temática Responsabilidad Integral Sector Minero Energético generaron reuniones con Ministerio de Minas y Energía, diferentes representantes de proyectos entre ellos Salud Pública del municipio de Gachalá y Ubalá a fin de consolidar los acuerdos de voluntades que permitieron en el segundo semestre de 2021 realizar actividades de seguridad y salud en el trabajo para el sector minero. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10649,
            'year' =>2,
            'value' => 6,
            'description' => 'La Línea Temática Responsabilidad Integral Sector Minero Energético generó acompañamiento no solo a titulares sino a instituciones y entes territoriales con el fin de ser un garante en todos los procesos que permitan la legalización ambiental de la actividad minera en la jurisdicción CORPOGUAVIO ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10650,
            'year' =>2,
            'value' => 2,
            'description' => 'Durante el año se realizaron las visitas técnicas de evaluación a los títulos mineros vigentes en jurisdicción CORPOGUAVIO con el fin de identificar posibles actividades mineras sin los permisos requeridos y/o afectaciones ambientales en los mismos con el fin de iniciar acciones pertinentes según el caso. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10651,
            'year' =>2,
            'value' => 20,
            'description' => 'Cada actividad realizada por los integrantes de la Línea Temática Responsabilidad Integral Sector Minero Energético es divulgada por los canales de información de CORPOGUAVIO, sin embargo hay espacios en los cuales se permite informar  la comunidad el conjunto de actividades que realizan los profesionales en pro del mejoramiento del medioambiente en el sector económico minero. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10652,
            'year' =>2,
            'value' => 1,
            'description' => 'CORPOGUAVIO estableció el contrato 200-30.4-314 de 25/05/2021 con la empresa FG Consultores la cual socializó a CORPOGUAVIO, el plan de trabajo proyectado para acompañar a pequeños mineros de la jurisdicción de la Corporación, brindándoles asesoría jurídica y técnica en aras de mejorar su actividad reforzando las temáticas de protección a los recursos naturales, responsabilidad social, empresarial y técnica de este gremio. Los siguientes fueron los conceptos generados. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10653,
            'year' =>2,
            'value' => 20,
            'description' => 'La Línea Temática Responsabilidad Integral Sector Minero Energético estableció el contrato 200-30.4-314 de 25/05/2021 con la empresa FG Consultores la cual socializó a CORPOGUAVIO, el plan de trabajo proyectado para acompañar a pequeños mineros de la jurisdicción de la Corporación, brindándoles asesoría jurídica y técnica en aras de mejorar su actividad reforzando las temáticas de protección a los recursos naturales, responsabilidad social, empresarial y técnica de este gremio. 
        Adicional a este contrato la línea temática verifica diferentes actividades comunitarias que las empresas del sector vienen desarrollando en jurisdicción Corpoguavio en procesos responsabilidad social empresarial.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10654,
            'year' =>2,
            'value' => 20,
            'description' => 'Durante la vigencia la línea temática logro realizar tres actividades que contribuyeron directamente en la publicación de conocimiento sobre Sector Energético por medio de un panel de expertos, participando por medio de un video en el III Seminario Internacional y IV Nacional “Voladuras - Explosivos y realizando un artículo denominado El Verde Guavio en el cual se describe la riqueza esmeraldifera de Gachalá y Ubalá.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10655,
            'year' =>2,
            'value' => 0.2,
            'description' => 'Año 2021
        Se suscribió el contrato No. 200-30.4-457 del 21 de diciembre de 2021, el cual se perfeccionó con acta de inicio el día 29 de diciembre de 2021, con un plazo de ejecución de 3 meses.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10656,
            'year' =>2,
            'value' => 2.6,
            'description' => 'Año 2021
        Se suscribió el contrato No. 200-30.4-457 del 21 de diciembre de 2021, el cual se perfeccionó con acta de inicio el día 29 de diciembre de 2021, con un plazo de ejecución de 3 meses.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10657,
            'year' =>2,
            'value' => 0,
            'description' => 'AÑO 2021
        Se ejecutó y se liquidó el Contrato de Consultoría No. 200-30.4-488 de 2020 y su interventoría bajo el contrato de consultoría 200-30.4-533 de 2020, dentro del cual se recibieron 17 estudios y diseños detallados de cada uno de los puntos críticos priorizados por los CMGRD de los municipios de la jurisdicción. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10658,
            'year' =>2,
            'value' => 0.2,
            'description' => 'Año 2021
        Se suscribe contrato No. 200-30.4-467 del día 29 de diciembre de 2021 con el siguiente objeto: “CONSULTORÍA PARA REALIZAR LA ACTUALIZACIÓN DE LOS ESTUDIOS EXISTENTES DE DELIMITACIÓN Y ZONIFICACIÓN DE LOS ESCENARIOS DE AMENAZA, VULNERABILIDAD Y RIESGO PARA ZONAS URBANAS, DE EXPANSIÓN URBANA Y SUELOS SUBURBANOS EN LOS MUNICIPIOS DE FÓMEQUE, GUASCA, JUNÍN, UBALÁ Y GACHALÁ, EN CUMPLIMIENTO AL PROYECTO ALIANZAS PARA LA GESTION DEL RIESGO Y ADAPTACION AL CAMBIO CLIMATICO DEL PLAN DE ACCIÓN 2020-2023”. Se encuentra en  perfeccionamiento del contrato para ser ejecutado en término de 5 meses.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10659,
            'year' =>2,
            'value' => 1,
            'description' => 'AÑO 2020 
        Se ejecutaron y liquidaron los contratos de obra 200-30.4-546-2020 correspondiente a la estabilización de taludes en el municipio de Ubalá Sector la variante, contrato de obra 200-30.4-610-2020 que se ejecuta en el Sector el Puerto del municipio de Ubalá. Y contrato de obra No. 200-30.4-623-2020 correspondiente a las obras de control de drenajes en la Quebrada La Moya.
        AÑO 2021
        Se suscribió, ejecutó y liquidó el Contrato de Obra 200-30.4-430-2021  en el M.pio de Medina con uso de llantas como medida alternativa en Mitigación del Riesgo.
        Se suscribió Contrato de Obra número 200-30.4-426-2021 en ejecución en el Municipio de Junín Sector el severo de la Vereda Santa Bárbara.
        Se suscribió Contrato de Obra número 200-30.4-463-2021 para ejecución de actividades en la Vda. Pastora del M.pio de Fómeque y el Sector Moja Moja del M.pio de Medina.
        Se suscribió contrato de obra 200-30.4-473-2021 para la ejecución de actividades en areas del drenaje del Río Niporé en el M.pio de Medina.
        Se suscribió Contrato de Obra No. 200-30.4-475-2021 en apoyo a actividades de recuperación de áreas degradas por avenida torrencial ocurrida en la fuente Caño Curo del Municipio de Ubalá B.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10659,
            'year' =>2,
            'value' => 3,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10660,
            'year' =>2,
            'value' => 1,
            'description' => 'AÑO 2020
        Se ejecutaron y liquidaron los proyectos en el Municipio de Gachetá sobre la Quebrada Chulo Y tablón bajo contrato de obra 200-30.4-546 DEL 29 DE OCTUBRE DE 2020, y el proyecto en el Municipio de Gachalá Inspección de Palomas bajo el contrato de obra 200-30.4-597 DEL 14 DE DICIEMBRE DE 2020
        AÑO 2021
        Se suscribió y se encuentra en ejecución el Contrato de Obra 200-30.4-357-2021 con avance del 85% desarrollado en los municipios de Gachetá, Junín y Ubalá.
        Se suscribió, ejecutó y liquido el Contrato de Obra 200-30.4-342-2021 desarrollado en el Municipio de Ubalá B en las márgenes del Caño Poblano en Mámbita.
        Se suscribió Contrato de obra 200-30.4-463-2021 para ejecutar obras en el M.pio de Gama y Gachetá.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia35 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10660,
            'year' =>2,
            'value' => 2,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia36 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10661,
            'year' =>2,
            'value' => 0.2,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia37 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10661,
            'year' =>2,
            'value' => 2,
            'description' => 'Zonas priorizadas por CMGRD de los municipios de Gachetá y Guasca.  Se realizaron visitas de inspección ocular y socialización con la comunidad de las medidas a implementar.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia38 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10662,
            'year' =>2,
            'value' => 8,
            'description' => 'AÑO 2020
        Se ejecutó y liquidó el contrato de obra 200-30.4-606-2020 en desarrollo de actividades de adecuación hidraúlica en los Municipios de Gachetá (Qda Tapias y Río Muchindote) y Medina (Río Niporé sector Puente Militar y Río Gazamumo).
        AÑO 2021
        Se suscribió Contrato de obra 200-30.4-463-2021 que contempla intervenciones con adecuación hidráulica mediante dragado sobre el Rio Salinero en el municipio de Gachetá y sobre la Quebrada El Motilón en el municipio de Guasca.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia39 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10663,
            'year' =>2,
            'value' => 3,
            'description' => 'Se realizó la asistencia y acompañmiento a los CMGRD de todos los municipios en cumplimiento de los dispuesto en la Ley 1523 de 2012.  Asi mismo se realizó diagnostico a los PMGRD y de acuerdo a resultados de desactualización de estos documentos se contrato a la Universidad de Cundinamarca para realizar Diplomado en Gestión del Riesgo con énfasis a la actulización de los PMGRD de los municipios.  Contrato No. No. 200-30.4-387-2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia40 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10663,
            'year' =>2,
            'value' => 2,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia41 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10664,
            'year' =>2,
            'value' => 97,
            'description' => 'AÑO 2021
        Se realizaron campañas en las IED de los diferentes municipios con el eslogan Arriesgate a estar Seguro.
        Se suscribió contrato No. No. 200-30.4-387-2021 con la Universidad de Cundinamarca para el desarrollo del diplomado en gestión del riesgo como una Campaña en fortalecimiento en procesos de gestión del riesgo en donde particpan todos los municipios con un numero de inscritos de 110 personas interantes de CMGRD, docentes de IED y comunidad lider; avance del diplomado 70%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia42 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10664,
            'year' =>2,
            'value' => 5,
            'description' => 'AÑO 2021
        Se realizaron campañas en las IED de los diferentes municipios con el eslogan Arriesgate a estar Seguro.
        Se suscribió contrato No. No. 200-30.4-387-2021 con la Universidad de Cundinamarca para el desarrollo del diplomado en gestión del riesgo como una Campaña en fortalecimiento en procesos de gestión del riesgo en donde particpan todos los municipios con un numero de inscritos de 110 personas interantes de CMGRD, docentes de IED y comunidad lider; avance del diplomado 70%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia43 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10665,
            'year' =>2,
            'value' => 1.4,
            'description' => 'AÑO 2020
        Se ejecutó y liquidó el Proyecto bajo el contrato de obra 200-30.4-596-2020 a ejecutarse en los municipios de Gachalá, Gama, Gachetá y Ubalá.
        AÑO 2021
        Se suscribió, ejecutó y liquidó el Contrato de Obra 200-30.4-336-2021 haciendo el mantenimiento a una obra en el municipio de Gachalá.
        Se suscribió Contrato de Obra 200-30.4-405-2021 para el mentenimiento de obras en los municipios de Gachalá, Guasca, Junín y Ubalá, el cual denota un avance del 25%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia44 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10665,
            'year' =>2,
            'value' => 5,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia45 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10666,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia46 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10667,
            'year' =>2,
            'value' => 20,
            'description' => 'Se realizan 62 capacitaciones en temas REDD+ en los diferentes municipios de la jurisdicción.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia47 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10668,
            'year' =>2,
            'value' => 37,
            'description' => 'Se desarrolla el análisis histórico de la deforestación en la jurisdicción, y se realiza determinación de la propiedad de las áreas de bosque, así como la identificación de la estructura de gobernanza. Se consolida y analiza la información',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia48 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10669,
            'year' =>2,
            'value' => 50,
            'description' => 'Se realiza la construcción del Documento de Proyecto de estrategias REDD+ (Reducción de Emisiones causadas por la Deforestación y la Degradación de los Bosques), de acuerdo con el estándar VCS/VERRA, recibiendo la inscripción de 10713 Has de bosques para ser tenidas en cuenta en el proyecto.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia49 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10670,
            'year' =>2,
            'value' => 20,
            'description' => 'Se cuenta con el documento de proyecto que será objeto de validación y se inicia la fase precontractual para la validación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia50 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10671,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia51 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10672,
            'year' =>2,
            'value' => 14,
            'description' => 'Se realizo liquidación total del contrato 554 y  557 de estufas ecoeficientes y huertos dendroenergéticos junto con la interventoría del mismo. Con la reincorporación de  CDP 454 del 22 de junio de 2021 junto con los recursos obtenidos del convenio SA-CDCVI-090-2021 suscrito entre el departamento de Cundinamarca - Secretaria de ambiente y la Corporación Autónoma Regional del Guavio - CORPOGUAVIO se inicia proceso de contratación de licitación publica N.006 con lo que se realiza evaluación técnica del pliego de estufas, siguiente se adjudica el 17 de diciembre de 2021; simultáneamente se avanza con las visitas de viabilización en los municipios de Gama, Gachalá, Gacheta, Guasca, Junín, Medina, Fomeque y Ubalá, actividad que se relación el la reunión de seguimiento impartida el 13 de diciembre por la Secretaria de ambiente de la Gobernación de Cundinamarca.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia52 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10672,
            'year' =>2,
            'value' => 85,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia53 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10673,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia54 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10674,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia55 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10675,
            'year' =>2,
            'value' => 10,
            'description' => 'Se ha realiza mesa técnica para formulación el proyecto BAMA presentado por la alcaldía de Fomeque.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia56 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10676,
            'year' =>2,
            'value' => 100,
            'description' => 'Se participo en:
        * Nodo regional de cambio climático centro oriente andino
        *Plan regional integral de cambio climático
        *Planes sectoriales de cambio climático',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia57 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10677,
            'year' =>2,
            'value' => 1,
            'description' => 'Se expidió la Resolución No. 1875 del 16 de diciembre de 2021 “Por medio de la cual se establece el acotamiento de la rondahídrica del cuerpo de agua denominado Río Chipatá desde la coordenada E: 1.020.834 m N: 1.029.769 m, hasta su desembocadura en el Río Siecha y el Río Siecha desde la desembocadura del Río Chipatá hasta la desembocadura de la Quebrada Chimicé en el municipio de Guasca, Cundinamarca, jurisdicción de Corpoguavio”',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia58 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10678,
            'year' =>2,
            'value' => 0,
            'description' => 'Se ejecuta Contrato No. 200-12-30,4-363 de 2021 que tiene por objeto: Elaborar la propuesta de actualización del proceso de reglamentación del uso y aprovechamiento del agua en las unidades hidrográficas Río Negro y Río Blanco, en el municipio de Fómeque.Ejecutándose las fases de  aprestamiento y diagnóstico',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia59 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10678,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia60 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10679,
            'year' =>2,
            'value' => 1,
            'description' => 'Se encuentra en proceso de elaboración y ajuste el acto administrativo de adopción del Plan de Ordenamiento del Recurso Hídrico - PORH para la Cuenca del Río Guayuriba (Ríos Blanco-Negro-Guayuriba)',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia61 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10680,
            'year' =>2,
            'value' => 0,
            'description' => 'Se ejecuta Contrato No. 200-12-30,4-389 de 2021 que tiene por objeto Formular el plan de manejo ambiental de microcuenca PMAM para las cuencas abastecedoras de los municipios de  Guasca y Gama. Ejecutándose las fases de  aprestamiento y diagnóstico',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia62 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10680,
            'year' =>2,
            'value' => 2,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia63 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10681,
            'year' =>2,
            'value' => 2,
            'description' => 'Se ejecuta Contrato No. 200-12-30,4-388 de 2021 que tiene por objeto Monitoreo de calidad y cantidad del recurso hídrico, durante los periodos de lluvia y estiaje, en fuentes hídricas priorizadas por la Subdirección de Gestión Ambiental. Se inicia campaña de monitoreo correspondiente a la época de lluvia',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia64 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10681,
            'year' =>2,
            'value' => 1,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia65 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10682,
            'year' =>2,
            'value' => 1,
            'description' => 'Se adelantó la operación y mantenimiento de la red hidrométrica de CORPOGUAVIO',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia66 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10683,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizó la actualización diaria del Sistema de Información del Recurso Hídrico -SIRH',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia67 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10684,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizó la implementación del instrumento económico tasa por utilizacion de agua -TUA en la jurisdicción',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia68 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10685,
            'year' =>2,
            'value' => 0,
            'description' => 'Se ejecuta Convenio No. 200-12-30,4-381 de 2021 con el municipio de Medina
        
        Se ejecuta Convenio No. 200-12-30,4-380 de 2021 con el municipio de Fómeque',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia69 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10685,
            'year' =>2,
            'value' => 2,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia70 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10686,
            'year' =>2,
            'value' => 20,
            'description' => 'Se realizó la evaluación de los Programa de Uso Eficiente y Ahorro del Agua -PUEAA presentados por los usuarios',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia71 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10687,
            'year' =>2,
            'value' => 221,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia72 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10688,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia73 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10689,
            'year' =>2,
            'value' => 0,
            'description' => 'Acorde a la base de datos existentes y los requerimientos realizados por los municipios, se direcciona los recursos mediante radicado 20211100816, el municipio de Fómeque solicitó recursos para la financiación de los estudios y diseños para la optimización de la Planta de Tratamiento de Aguas Residuales del casco urbano del Municipio de Fómeque, en el marco del cumplimiento del cumplimiento del PSMV, donde se generó el contrato de consultoría  # 200.30.4.416 del 2021,  el cual se vincula con interventoría  ,en el marco del rezago 2020, Se brindo apoyo al municipio de Guasca obteniendo el producto al 100%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia74 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10689,
            'year' =>2,
            'value' => 1,
            'description' => 'Acorde a la base de datos existentes y los requerimientos realizados por los municipios, se direcciona los recursos mediante radicado 20211100816, el municipio de Fómeque solicitó recursos para la financiación de los estudios y diseños para la optimización de la Planta de Tratamiento de Aguas Residuales del casco urbano del Municipio de Fómeque, en el marco del cumplimiento del cumplimiento del PSMV, donde se generó el contrato de consultoría  # 200.30.4.416 del 2021,  el cual se vincula con interventoría  ,en el marco del rezago 2020, Se brindo apoyo al municipio de Guasca obteniendo el producto al 100%',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia75 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10690,
            'year' =>2,
            'value' => 0.4,
            'description' => 'Acorde a la hoja metodológico se recepción las solicitud de los municipio de fomeque y Junín en el marco del apoyo de la estrategia SISAR y  con  la ejecución del convenio 578 del 2020con EMGESA, se está proyectando el apoyo a los municipios de Gacheta, Ubalá ,Gama y Medina, con la estrategia de sistemas sépticos para vivienda rural dispersa, el cual se adjudicó bajo el Contrato 200-30.4-323 del 09 de junio de 2021, el cual se beneficio a los municipios Gama (5), Gachetá (6), Ubalá B (12) y Medina (8) Cundinamarca, por un valor de $251.803.031,22, el cual está en ejecución con una avance de 10,50%. Asu vez se genero contrato de los SISAR No. 200-30.4-337 del 30 de junio de 2021 se implementan 17 sistemas 8 en el municipio de Junín y 9 en el municipio de Fómeque, por un valor de $252.073.012 está en ejecución con un avance de 10, %
        En el rezago 2020, se brindó apoyo a los municipios de Gachalá, Gama y Guasca para la implementación de un nuevos denominado Sistema integral de saneamiento ambiental Rural-SISAR, beneficiando a 19 familias, el cual se recibió a satisfacción al 100% ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia76 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10690,
            'year' =>2,
            'value' => 1,
            'description' => 'Acorde a la hoja metodológico se recepción las solicitud de los municipio de fomeque y Junín en el marco del apoyo de la estrategia SISAR y  con  la ejecución del convenio 578 del 2020con EMGESA, se está proyectando el apoyo a los municipios de Gacheta, Ubalá ,Gama y Medina, con la estrategia de sistemas sépticos para vivienda rural dispersa, el cual se adjudicó bajo el Contrato 200-30.4-323 del 09 de junio de 2021, el cual se beneficio a los municipios Gama (5), Gachetá (6), Ubalá B (12) y Medina (8) Cundinamarca, por un valor de $251.803.031,22, el cual está en ejecución con una avance de 10,50%. Asu vez se genero contrato de los SISAR No. 200-30.4-337 del 30 de junio de 2021 se implementan 17 sistemas 8 en el municipio de Junín y 9 en el municipio de Fómeque, por un valor de $252.073.012 está en ejecución con un avance de 10, %
        En el rezago 2020, se brindó apoyo a los municipios de Gachalá, Gama y Guasca para la implementación de un nuevos denominado Sistema integral de saneamiento ambiental Rural-SISAR, beneficiando a 19 familias, el cual se recibió a satisfacción al 100% ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia77 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10691,
            'year' =>2,
            'value' => 3,
            'description' => 'Acorde a las solicitudes de los municipios se brindará se apoyó a los municipios de Gacheta, Gama y Gachalá., para lograr la implementación de una ruta selectiva, con el equipamiento de los elementos necesarios para logar la ruta de recolección de residuos orgánico, con este equipamiento se entregó en su totalidad y se logró apoyar al Plan de Gestión de Residuos sólidos PGIRS., el cual se generó el contrato de suministro No. 200-30.4-345 del 09 de julio de 2021 entre CORPOGUAVIO y CONSORCIO COMPOSTERA AMAGAN 2021, , por valor de cuatrocientos nueve millones doscientos ocho mil quinientos pesos con sesenta centavos ($ 409.208.500,60) M/Cte. En el marco de dicho contrato, la campaña recibió el nombre de “El Residuo se aprovecha en casa”, donde a la fecha se ha equiparon con composteras, canastillas, galones de inóculo microbiológico y los kits por usuario (canecas con su respectiva tapa y rejilla de fondo, a bono orgánico Bokashi, tabla de picar, cuchillo, cuchara y pocillo). Entregándolo y  en función amiento en los tres municipios , dando cumplimento  la meta al 100% ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10692,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizo a los seguimeintos a las  acciones implementadas de saneamiento básico de los años -2018-2019-2020, Se realizaron los conceptos técnicos de los contratos No. 200-30.4-466 de 2018, 200-30.4-507 de 2018, No. 200-30.4-329 de 2019, No. 200-30.4-465 de 2018; convenios: No. 200-30.4-273 de 2018, No. 200-30.4-276, No. 200-30.4-297, No. 200-30.4-277 de 2018, No. 200.30-4.290 de 2019.
        Estos conceptos están para impresión, numerado y fechado. 
        Se realizó seguimiento al contrato No. 200-30.4-566 del 2020 del SISAR en los municipios de Gachalá, Gama y Guasca. Al contrato No. Contrato No. 200-30.4-581 del 2020 en el municipio de Junín sobre la ruta selectiva para residuos orgánicos y al convenio No. 200-30.4-626 de 2020, convenio realizado con Colempaques , relizando todoas las visitas con sus respectivos conceptos ye relizacion de oficios os mismos no ha sido terminada.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia79 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10693,
            'year' =>2,
            'value' => 16,
            'description' => 'Para esta vigencia se realizará dos seguimientos a los 8 PGIRS uno de verificación de requerimientos y avance parcial y el otro de avance total de la vigencia a evaluar., por lo que se realizó las visitas de seguimiento del 01 de junio al 16 de junio, realizando conceptos técnicos; 1066 Gachala,1067 Gama,1068 Gacheta,1069 Junín ,1070 medina,1071 fomeque ,1072 Guasca ,1073 Ubalá- El segundo seguimiento se ejecutó en el mes de octubre en el cual se generaron los siguientes números de conceptos técnicos (Fómeque – 2575, Gachalá – 2578, Medina – 2580, Ubalá – 2574, Junín – 2576, Gachetá – 2579, Gama – 2577, Guasca – 2581 con fecha del 26 de noviembre del 2021), dichos conceptos técnicos se entregaron el día 06 de diciembre al área de jurídica para generar el respectivo acto administrativo. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia80 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10694,
            'year' =>2,
            'value' => 8,
            'description' => 'se realizó seguimiento a los Planes de Saneamiento y Manejo de Vertimientos – PSMV, vigencia 2021, a los municipios de la jurisdicción de Corpoguavio del cual se generaron lo siguientes números de conceptos técnicos (Fómeque – 2586, Gachalá – 2592-2593, Medina – 2595, Ubalá – 2582-2583-2584-2585, Junín – 2587-2588-2589-2590, Gachetá – 2594, Gama – 2591, Guasca - 2596 con fecha del 26 de noviembre del 2021) y liquidaciones (Fómeque – 1071, Gachalá – 1066, Medina – 1070, Ubalá – 1073, Junín – 1069, Gachetá – 1068, Gama – 1067), el día 06 de diciembre se entregaron los conceptos técnicos al área de jurídica para que de inicio con los actos administrativos. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia81 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10695,
            'year' =>2,
            'value' => 2,
            'description' => 'Acorde a las necesidades evidencias en la asistencia técnica, las guías a implementar están enfocadas en manejo de residuos solios orgánicos mediante compostaje y en manejo de aguas residuales domesticas en zonas rurales. Donde se adjudicó el CONTRATO DE SUMINISTRO N° 358 DE 2021 23 DE AGOSTO DEL 2021, con el objeto contratar la adquisición de materiales educativo y de manejo para realizar capacitaciones y campañas con los actores involucrados en temas; residuos orgánicos generados para proceso de aprovechamiento y manejo de sistemas sépticos para viviendas rurales dispersas en la jurisdicción de CORPOGUAVIO, el cual se recibió al 100% de la guías y se iniciaron los talleres de entrega con usuarios de la jurisdicción. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia82 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10696,
            'year' =>2,
            'value' => 2,
            'description' => 'En el marco de las solicitudes, que se realizaron en la audiencia pública de esta vigencia, se solicitó apoyo para el manejo de residuos sólidos en zona ribereña de los ríos Negro y Blanco del municipio de Fomeque, donde se ha adelantado un proceso con la administración y  se llegó a un acuerdo con Corporinoquia para ejecutar limpieza comunitaria en conjunto con Corpoguavio para los días 25 y 26 de octubre en rio negro y rio blanco, donde estará presente la policía nacional apoyando  la actividad, a su vez capacitando a la comunidad en las diferentes infracciones ambientales por generación de residuos sólidos en zonas ribereñas, una vez finalizada la actividad se dará a conocer los lineamientos que se establecerán en estas zonas por ser de importancia turística y presentar problemática de residuos sólidos.A su vez estamos en trabajo con la oficina de cultura y ambiente, la empresa de servicios públicos ECOSIECHA del municipio de guasca y los profesionales del proyecto, trabajando de manera conjunta en el proceso de la clasificación e identificación de los usuarios vertedores al sistema del alcantarillado., genrando los terminos de referencias ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia83 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10697,
            'year' =>2,
            'value' => 1,
            'description' => 'Que mediante la Resolución 0510 del 3 de junio de 2021 se da inicio a la actualización de la meta global y las metas individuales y/o grupales de carga contaminante por vertimientos puntuales efectuados a los cuerpos de agua que hacen parte de La Jurisdicción de CORPOGUAVIO, para el periodo comprendido entre el 1 de enero de 2022 y el 31 de diciembre de 2026, el cual se surtió el proceso para ser presentados ante el concejo el día 25  de octubre y aprodo bajo acuerdo 016 del 03 de Noviembre  2021, POR MEDIO DEL CUAL SE ESTABLECEN LAS METAS DE CARGA CONTAMINANTE PARA LOS VERTIMIENTOS PUNTUALES DE AGUAS RESIDUALES EFECTUADOS A LOS CUERPOS DE AGUA SUPERFICIALES CON OBJETIVOS DE CALIDAD EN LA JURISDICCIÓN DE CORPOGUAVIO, DURANTE EL QUINQUENIO 2022-2026 Y SE TOMAN OTRAS DETERMINACIONES.- se recolecto toda la información histórica de monitoreos de las fuentes hídricas de la jurisdicción y de los monitoreos de vertimientos, generando el informe técnico 2704 del 14 de diciembre del 2021',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia84 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10698,
            'year' =>2,
            'value' => 1,
            'description' => 'La subdirección de Gestión Ambiental de la Corporación generó la base de datos de tasa retributiva del año 2020 vigencia 2021, la cual incluye en total 59 usuarios objeto de cobro y que hacen parte del Acuerdo 024 de 2016, donde se generó concepto técnico SGA  65 del 05 de marzo 2021, con la información obtenida acorde a la tabla N° 1, el cual con los cálculos realizados se obtuvo  la suma total de SESENTA Y SIETE MILLONES CIENTO DOCE MIL DOSCIENTOS TRECE PESOS  ($ 67.112.213) M/CTE y se entregó a financiar bajo radicado 00213100158',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10699,
            'year' =>2,
            'value' => 80,
            'description' => 'se realizó seguimiento a los Planes de Saneamiento y Manejo de Vertimientos – PSMV, vigencia 2021, a los municipios de la jurisdicción de Corpoguavio del cual se generaron lo siguientes números de conceptos técnicos (Fómeque – 2586, Gachalá – 2592-2593, Medina – 2595, Ubalá – 2582-2583-2584-2585, Junín – 2587-2588-2589-2590, Gachetá – 2594, Gama – 2591, Guasca - 2596 con fecha del 26 de noviembre del 2021) y liquidaciones (Fómeque – 1071, Gachalá – 1066, Medina – 1070, Ubalá – 1073, Junín – 1069, Gachetá – 1068, Gama – 1067), el día 06 de diciembre se entregaron los conceptos técnicos al área de jurídica para que de inicio con los actos administrativos. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia86 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10700,
            'year' =>2,
            'value' => 100,
            'description' => 'se implementaron 12 actividades, proyectadas en el plan de gestión integral de residuos peligrosos -PGIRESPEL  de las cuales se han adelantado, logrando la planificación de la campaña posconsumo si el planeta debes conservar tus residuos posconsumo debes entregar , para lo 8 municipios de la jurisdicción, así mismo se ha logrado trasmitir información de los aplicativos de RUA,RESPEL Y PCB en el , también se ha venido adelantando talleres  con los generadores y se esta de proceso contractual para logra incentivos al manejo de llantas usadas y RESPEL hospitalarios, dejando .  y de la vigencia 2020 se encuentra en ejecución el contrato 604 para la construcción de centros de acopio de residuos y envases de plaguicidas, el cual esta en proceso de liquidación.  se recibio ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia87 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10700,
            'year' =>2,
            'value' => 100,
            'description' => 'se implementaron 12 actividades, proyectadas en el plan de gestión integral de residuos peligrosos -PGIRESPEL  de las cuales se han adelantado, logrando la planificación de la campaña posconsumo si el planeta debes conservar tus residuos posconsumo debes entregar , para lo 8 municipios de la jurisdicción, así mismo se ha logrado trasmitir información de los aplicativos de RUA,RESPEL Y PCB en el , también se ha venido adelantando talleres  con los generadores y se esta de proceso contractual para logra incentivos al manejo de llantas usadas y RESPEL hospitalarios, dejando .  y de la vigencia 2020 se encuentra en ejecución el contrato 604 para la construcción de centros de acopio de residuos y envases de plaguicidas, el cual esta en proceso de liquidación.  se recibio ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia88 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10701,
            'year' =>2,
            'value' => 95,
            'description' => 'Acorde a las solicitudes allegadas a la entidad se atendieron al 100% donde se logró enfocar a los usuarios en manejo de aguas residuales y residuos sólidos, en el marco de las solicitudes están enfocados en proyectos ecoturísticos y vivienda rural dispersa.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia89 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10702,
            'year' =>2,
            'value' => 1,
            'description' => 'Para vigencia de genero contrato de consultoría 388 del 2021, y está en proceso de toma de muestras en cinco municipios, para la temporada de lluvia, a su vez se iniciará con la información el reporte de la capa de objetivos de calidad en el geoportal de la entidad.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia90 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10703,
            'year' =>2,
            'value' => 20,
            'description' => 'La Corporación suscribió el Contrato de Obra No. 200-30.4-347 del 9 de julio de 2021 suscrito con el Consorcio Delta Pro Ambiental por ser un contrato de obra se suscribió el contrato de interventoría No 200-30.4-378-2021 del 19 de agosto de 2021 con la ASOCIACIÓN SINAALCOL — SOLUCIONES INTEGRALES AGROPECUARIAS Y AMBIENTALES DE COLOMBIA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia91 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10704,
            'year' =>2,
            'value' => 5,
            'description' => 'La Corporación suscribió el Contrato de Obra No. 200-30.4-347 del 9 de julio de 2021 suscrito con el Consorcio Delta Pro Ambiental por ser un contrato de obra se suscribió el contrato de interventoría No 200-30.4-378-2021 del 19 de agosto de 2021 con la ASOCIACIÓN SINAALCOL — SOLUCIONES INTEGRALES AGROPECUARIAS Y AMBIENTALES DE COLOMBIA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia92 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10704,
            'year' =>2,
            'value' => 1,
            'description' => 'La Corporación suscribió el Contrato de Obra No. 200-30.4-347 del 9 de julio de 2021 suscrito con el Consorcio Delta Pro Ambiental por ser un contrato de obra se suscribió el contrato de interventoría No 200-30.4-378-2021 del 19 de agosto de 2021 con la ASOCIACIÓN SINAALCOL — SOLUCIONES INTEGRALES AGROPECUARIAS Y AMBIENTALES DE COLOMBIA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10705,
            'year' =>2,
            'value' => 4,
            'description' => 'Selección abreviada de Menor Cuantía SAMC 09 DE 2021 mediante el cual se implementarán sistemas silvopastoriles con mejoramiento de praderas y cercas vivas en la zona B del municipio de Ubalá con un área de intervención de 4 hectáreas..
        Se suscribio el convenio interadministrativo con el municipio de Medina 
        Se radico proyecto silvopastoril de parte del municipio de gacheta y municipio de Medina',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10705,
            'year' =>2,
            'value' => 1,
            'description' => 'Selección abreviada de Menor Cuantía SAMC 09 DE 2021 mediante el cual se implementarán sistemas silvopastoriles con mejoramiento de praderas y cercas vivas en la zona B del municipio de Ubalá con un área de intervención de 4 hectáreas..
        Se suscribio el convenio interadministrativo con el municipio de Medina 
        Se radico proyecto silvopastoril de parte del municipio de gacheta y municipio de Medina',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10706,
            'year' =>2,
            'value' => 3000,
            'description' => 'La Corporación suscribió el Contrato de Obra No. 200-30.4-347 del 9 de julio de 2021 suscrito con el Consorcio Delta Pro Ambiental por ser un contrato de obra se suscribió el contrato de interventoría No 200-30.4-378-2021 del 19 de agosto de 2021 con la ASOCIACIÓN SINAALCOL — SOLUCIONES INTEGRALES AGROPECUARIAS Y AMBIENTALES DE COLOMBIA  con 3 kilometros en cerca de púas y postes de plástico, pero se construirán 1,6 kilometros de mas debido al ofrecimiento mas favorable ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10707,
            'year' =>2,
            'value' => 30,
            'description' => 'Se suscribio  CONTRATAR OBRA PÚBLICA PARA DESARROLLAR ACCIONES DE RESTAURACIÓN EN ÁREAS AFECTADAS POR INCENDIOS, DEGRADADAS POR DEFORESTACIÓN Y EJECUTAR ACCIONES DE MANTENIMIENTO A LAS ACCIONES DE RESTAURACIÓN ADELANTADAS EN AÑOS ANTERIORES EN LOS MUNICIPIOS DE LA JURISDICCIÓN DE CORPOGUAVIO.
         adjudicado mediante la resolución No 0497 del 1 de junio de 2021 al CONSORCIO DELTA PRO AMBIENTAL
        Se ha recibido actividades de mantenimiento de las contratadas el año anterior;  se tienen identificadas las areas a las cuales se les realizara manternimiento en le presente vigencia y se adelanta la construccion de los estudios previos para el proceso de seleccion del contrataista que ejecutara dicha actividad.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10707,
            'year' =>2,
            'value' => 60,
            'description' => 'Se suscribio  CONTRATAR OBRA PÚBLICA PARA DESARROLLAR ACCIONES DE RESTAURACIÓN EN ÁREAS AFECTADAS POR INCENDIOS, DEGRADADAS POR DEFORESTACIÓN Y EJECUTAR ACCIONES DE MANTENIMIENTO A LAS ACCIONES DE RESTAURACIÓN ADELANTADAS EN AÑOS ANTERIORES EN LOS MUNICIPIOS DE LA JURISDICCIÓN DE CORPOGUAVIO.
         adjudicado mediante la resolución No 0497 del 1 de junio de 2021 al CONSORCIO DELTA PRO AMBIENTAL
        Se ha recibido actividades de mantenimiento de las contratadas el año anterior;  se tienen identificadas las areas a las cuales se les realizara manternimiento en le presente vigencia y se adelanta la construccion de los estudios previos para el proceso de seleccion del contrataista que ejecutara dicha actividad.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10708,
            'year' =>2,
            'value' => 100,
            'description' => 'En el tercer trimestre de 2021 se han recibido 61 solicitudes a la oficina del proyecto restauraciony conservacion de los cuales se culminado tramite de 52 y los otros continuan en tiempos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10708,
            'year' =>2,
            'value' => 3,
            'description' => 'En el tercer trimestre de 2021 se han recibido 61 solicitudes a la oficina del proyecto restauraciony conservacion de los cuales se culminado tramite de 52 y los otros continuan en tiempos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10709,
            'year' =>2,
            'value' => 1,
            'description' => 'En el tercer timestre se han realizado  visitas a 81,2 hectareras y se ha venido proyectando los  conceptos tecnicos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10710,
            'year' =>2,
            'value' => 8,
            'description' => 'Se adelanto proceso de Selección abreviada de Menor Cuantía SAMC 09 DE 2021 Mediante el cual se implementarán la protección de 9 fuentes hídricas con 1.6 hectáreas de restauración y con la construcción de 3.2 kilómetros de aislamiento en cerca muerta.
        Se encuentra en proceso la suscripcion del convenio con el municipio de Junin   ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10710,
            'year' =>2,
            'value' => 15,
            'description' => 'Se adelanto proceso de Selección abreviada de Menor Cuantía SAMC 09 DE 2021 Mediante el cual se implementarán la protección de 9 fuentes hídricas con 1.6 hectáreas de restauración y con la construcción de 3.2 kilómetros de aislamiento en cerca muerta.
        Se encuentra en proceso la suscripcion del convenio con el municipio de Junin   ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia103 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10711,
            'year' =>2,
            'value' => 1,
            'description' => 'Se han adelantado visitas de viabilidad en el municipio de Gachalá, se han generado los respectivos conceptos técnicos, se suscrtibio contrato de obra  382 con ECOMPRO VyJ  el cual  ha iniciado proceso de construccion ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia104 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10712,
            'year' =>2,
            'value' => 0,
            'description' => 'Firmo convenio con el Batallón energético y vial N°13; el municipio de Gachetá  radico el proyecto para apoyo a vivero forestal el cual se encuentra en revisión por parte del componente metodológico y técnico de la corporación',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia105 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10712,
            'year' =>2,
            'value' => 0.2,
            'description' => 'Firmo convenio con el Batallón energético y vial N°13; el municipio de Gachetá  radico el proyecto para apoyo a vivero forestal el cual se encuentra en revisión por parte del componente metodológico y técnico de la corporación',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10713,
            'year' =>2,
            'value' => 14,
            'description' => 'Se suscribió el Convenio de Asociación No. 200-30.4-418 de 2021 entre CORPOGUAVIO y  EMGESA S.A. ESP que tiene por objeto: Aunar esfuerzos administrativos y financieros para adelantar un estudio que permita realizar el levantamiento de información del componente social y consolidación del documento final para la declaratoria del Parque Natural Regional Farallones, en los municipios de Gachalá, Ubalá y Medina. Mediante Consejo Directivo se procedió a realizar la incorporación de recursos porvenientes del convenio por valor de $228.526.277. A partir de lo cual, se procedió a adelantar tramite de contrato derivado, logrando suscribir el 29 de diciembre de 2021 Contrato de Consultoría No. 200-30.4-465 con V&J S.A.S., para que adelante el respectuvo estudio y consolidación del documento. Adicionalmente se avanzó en la revisión y análisis del documento técnico realizado para el área de Farallones.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia107 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10714,
            'year' =>2,
            'value' => 1,
            'description' => 'En sesión del 25 de octubre de 2021, la Subdirectora de Gestión Ambiental presentó ante el Consejo Directivo de la Corporación Autónoma Regional del Guavio – CORPOGUAVIO, los documentos soporte y con base en los mismos fue aprobado el Acuerdo No. 15 “POR MEDIO DEL CUAL SE APRUEBA Y ADOPTA EL PLAN DE MANEJO DE LA RESERVA FORESTAL PROTECTORA REGIONAL EL DESIERTO – EL PATIO BONITO DEL MUNICIPIO DE JUNÍN EN LA JURISDICCIÓN DE LA CORPORACIÓN AUTÓNOMA REGIONAL DEL GUAVIO - CORPOGUAVIO Y SE DICTAN OTRAS DISPOSICIONES”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10715,
            'year' =>2,
            'value' => 100,
            'description' => 'Se dió atención a diferentes procesos enmarcados en la gestión con el SIRAP, el RUNAP y con WWF que facilitaron el cumplimiento de metas establecidas en el CONPES 3680 de 2010 y los compromisos del país frente al convenio sobre Diversidad Biológica, que incluyen en su plan de trabajo el fortalecimiento de las áreas protegidas, y también en el proyecto “Consolidación del Sistema Nacional de Áreas Protegidas (SINAP) a nivel nacional y regional”. Adicionalmente, la Corporación realizó el proceso de contratación de 19 Gestores Ambientales Comunitarios distribuidos en los ocho municipios de la jurisdicción, quienes realizaron acciones de monitoreo en las áreas protegidas de los objetivos de conservación y resolvieron las diferentes situaciones que se presentaron.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia109 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10716,
            'year' =>2,
            'value' => 0,
            'description' => 'Se obtuvo el documento con la actualización de los humedales, resultado del ejercicio realizado por los Gestores Ambientales Comunitarios de los ocho municipios y profesionales de la línea temática. En el informe se  estableció la condición actual de los humedales, basado en los servicios ecosistemicos, las presiones y afectaciones de origen antrópico y natural presentes en los humedales y resultados de parámetros cualitativos y cuantitativos básicos como color y olor de agua, entre otros. Éste ejercicio se complementó con la estrategia de intervención social que permitió conocer la percepción de las administraciones municipales y comunidad, con respecto a la conservación de los humedales, apoyar el proceso de identificación y establecer estrategias para su protección.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia110 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10717,
            'year' =>2,
            'value' => 0.2,
            'description' => 'Después de surtir el proceso precontractual y cumplir con los términos establecidos en el Concurso de méritos, se adjudicó el contrato de consultoría No. 200-30.4- 330 el día 11 de junio del 2021 al Consorcio Chinchorro, con el objeto de “Formular el plan de manejo y la valoración económica de los servicios ambientales que presta el humedal ubicado en el predio Chinchorro, del municipio de Gama – Cundinamarca”. Posterior a cumplir con los requerimientos para el perfeccionamiento según minuta del contrato, se suscribió acta de inicio el día 22 de junio del 2021, se adelantó Comité Técnico Operativo mediante acta de fecha de 07 de julio de 2021, la Consultoría realizó la entrega de informe con la compilación de información secundaria y metodologías a cada uno de los aspectos estipulados en el anexo técnico; asi mismo, adelantó monitoreo de campo y procesos de socialización con la comunidad del proyecto. Se realizó prórroga el 19 de noviembre del 2021 por 4 meses, teniendo como nueva fecha de terminación el 20 de marzo de 2022.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10718,
            'year' =>2,
            'value' => 50,
            'description' => 'El día 5 de mayo de 2021, se adelantó de manera virtual el comité técnico CEERCCO, donde se manifestó que basados en los lineamientos dados por la Resolución 0886 de 2018 y la Comisión Conjunta CEERCCO, las Corporaciones CORPOCHIVOR, CAR, CORPORINOQUIA y CORPOGUAVIO adelantaron y finalizaron satisfactoriamente el proceso de zonificación y régimen de usos en la zona de Páramo Chingaza, quedando pendiente la entrega de esta información por La Corporación Autónoma Regional del Guavio- CORPOGUAVIO, atendiendo su misionalidad de administrar y proteger el patrimonio ecológico y ambiental, lleva a cabo la administración y manejo del complejo de Páramo Chingaza delimitado por la Resolución 710 de 2016, el cual comprende un área de 32.622 hectáreas, localizado en 7 de los 8 municipios presentes en esta jurisdicción. Por lo anterior, llevó a cabo la zonificación y régimen de usos del páramo Chingaza jurisdicción de Corpoguavio, el cual contempla a los municipios de Fómeque, Guasca, Gachetá, Junín, Gama, Ubalá y Gachalá, conforme a la Resolución No.710 de 2016 y la Resolución 886 de 2018.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia112 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10719,
            'year' =>2,
            'value' => 30,
            'description' => 'En relación al cumplimiento del avance en la formulación del Plan de Manejo para el Páramo Chingaza de la jurisdicción de Corpoguavio se soporta con el desarrollo de la estructura del Plan de Manejo del Páramo Chingaza jurisdicción de CORPOGUAVIO, con la sistematización de la información secundaria y el análisis de la información faltante de cada uno de los capítulos (Diagnostico, Definición de objetivos de manejo, zonificación, Programático, Estrategia financiera, Evaluación y seguimiento de la ejecución del plan de manejo y Monitoreo socio-ecosistémico) que contemplan el Plan de Manejo según el Art.10 de la Resolución No. 0886 de 2018, ejecutado a través del Otro si No. 1 de adición y modificación del contrato de No. 200.30-4-355 del 16 de julio del 2021, suscrito con el Grupo Empresarial INGEMA S.A.S.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia113 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10720,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia114 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10720,
            'year' =>2,
            'value' => 0,
            'description' => '1',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => true,
            ]);
            $idevidencia115 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10721,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia116 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10722,
            'year' =>2,
            'value' => 45,
            'description' => 'El 16 de julio de 2021 se suscribió entre CORPOGUAVIO y el Consorcio ASOCEDRO 2021 el contrato derivado de consultoría No. 200-30.4-354 cuyo objeto es: “Adelantar acciones de manejo y control de la especie invasora Ulex europaeus que involucre procesos de restauración con especies nativas en áreas de páramo y bosque alto andino, asociados a un proceso de investigación científica”, el cual dio inicio el 19 de octubre, para cumplir con las obligaciones y actividades del Convenio interinstitucional No. 2615 de 2020 suscrito entre CAR y CORPOGUAVIO. Paralelamente se firmó el Otrosí No. 2 del Convenio interinstitucional No. 2615 de 2020 cuyo objeto es realizar la prórroga por el termino de 6 meses, con el fin de cumplir con el principio de planeación y suscribir acta de inicio del contrato derivado.
        Para la vigencia 2021, el Consorcio ASOCEDRO generó el análisis de información secundaria de la distribución del retamo espinoso en el área de estudio y los efectos del retamo en el ambiente. Así mismo, el Consorcio hizo entrega de las metodologías para el levantamiento de información primaria, donde paralelamente se llevaron a cabo salidas a campo entre el consorcio y CORPOGUAVIO, para realizar el levantamiento de polígonos y áreas donde potencialmente se pueda llevar a cabo las actividades de desinfestación y restauración.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia117 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10723,
            'year' =>2,
            'value' => 45,
            'description' => 'El 16 de julio de 2021 se suscribió entre CORPOGUAVIO y el Consorcio ASOCEDRO 2021 el contrato derivado de consultoría No. 200-30.4-354 cuyo objeto es: “Adelantar acciones de manejo y control de la especie invasora Ulex europaeus que involucre procesos de restauración con especies nativas en áreas de páramo y bosque alto andino, asociados a un proceso de investigación científica”, el cual dio inicio el 19 de octubre, para cumplir con las obligaciones y actividades del Convenio interinstitucional No. 2615 de 2020 suscrito entre CAR y CORPOGUAVIO. Paralelamente se firmó el Otrosí No. 2 del Convenio interinstitucional No. 2615 de 2020 cuyo objeto es realizar la prórroga por el termino de 6 meses, con el fin de cumplir con el principio de planeación y suscribir acta de inicio del contrato derivado.
        Para la vigencia 2021, el Consorcio ASOCEDRO generó el análisis de información secundaria de la base de datos de la flora nativa en los ecosistemas de páramo y bosque altoandino, los efectos del retamo en la entomofauna de las áreas conservadas; así mismo, el Consorcio hizo entrega de las metodologías para el levantamiento de información en campo y adelantó comités con las Corporaciones para resolución de inquietudes técnicas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia118 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10724,
            'year' =>2,
            'value' => 4,
            'description' => 'Desde la Línea Temática Biodiversidad y Áreas Estratégicas adscrita a la Subdirección de Gestión Ambiental se han implementado acciones de control y manejo de las siguientes especies invasoras en la Jurisdicción. 
        
        *FLORA, Recolección y disposición final de:
        Buchón de agua (Eichhornia crassipes) de 10,5 toneladas. 
        Helecho marranero (Pteridium aquilinum) un área de 17.184,82 metros cuadrados. 
        Retamo espinoso (Ulex europaeus) un área de 1.520,11 metros cuadrados.  
        Pasto Rabo de zorro (Andropogon bicornis) un área de 8.798 metros cuadrados, 
        Susanita u ojo de poeta (Thunbergia alata) un área de 1.548,78 metros cuadrados. 
        Kikuyo  (Cenchrus clandestinus / Pennisetum clandestinum) 544,75 m².  
        Lengua vaca o romaza   (Rumex crispus) 235,80 m².
        Matandrea o quereme de las quebradas (Hedychium coronarium) 446 m².
        Caña brava (Arundo  donax) con un área reportada de 30 metros cuadrados. 
        
        *FAUNA, Recolección y disposición final de:
        Caracol gigante africano (Achatina fulica) Recolección y disposición final de 1.367,70 libras (683,85 kilos) 
        Paloma doméstica (Columba livia).
        Carpa común (Cyprinus carpio), recolección de 85 libras (42,5 kilos). 
        Caracol de jardín (Helix aspersa), con recolección y disposición final de 10 libras (5 kilos). 
        
        Los procesos fueron adelantados junto con actividades ludico-pedagogicas con el objetivo de reconocer las especies invasoras y las caracteristicas que causan afectaciones a los ecosistemas y la salud humana.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia119 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10725,
            'year' =>2,
            'value' => 4,
            'description' => '*FLORA:
        En cuanto a flora se lleva a cabo por parte de los Gestores Ambientales Comunitarios la identificación y seguimiento del estado fisiológico y fenológico de las especies de flora amenazadas, obteniendo durante el 2021 100 semillas de la especie Ceroxylon quindiuense y 6 de Cedrela odorata las cuales se encuentran en proceso de germinación, así mismo, en alianza con el área de Educación Ambiental y la línea temática de Conservación y Restauración se firmaron acuerdos de cooperación en el marco del PRAE con los municipios de Fómeque y Guasca para el establecimiento de los viveros de propagación de especies amenazadas. 
        
        *FAUNA:
        A través de la instalación de cámaras trampa realizada por los Gestores Ambientales en los municipios de Gachalá, Gachetá, Ubalá, Gama, Guasca, Medina, Fómeque y Junín, se realizó el monitoreo de las especies de fauna silvestre presente en la jurisdicción, registrando especialmente oso andino, puma, yaguarundí, tayra, entre otros; información que ha sido sistematizada y analizada para la identificación de las especies que transitan dichos corredores biológicos, dando cumplimiento a lo establecido en los Planes de Conservación elaborados por la Corporación. Así mismo, en los recorridos realizados por los Gestores Ambientales Comunitarios se han registrado nuevos avistamientos de Águila Crestada en el municipio de Gachalá sector Chisguales y Oso Andino municipio de Gachetá sector Chirivital, donde se realizó la entrega de material divulgativo como cartillas con información sobre la especie con el objetivo de generar educación con los habitantes de esta zona.
        
        Tanto para flora como fauna con algún grado de amenaza, se adelantaron procesos de educación y sensibilización con la comunidad y organizaciones, a través de la participación en espacios como la Feria Internacional de Medio Ambiente – FIMA, la implementación de jornadas lúdico pedagógicas en instituciones educativas y población adulta, donde se socializaron los planes de conservación de las especies águila crestada, oso andino, frailejones de la jurisdicción, entre otros; con el fin de generar conciencia en los participantes.  Así mismo, en cooperación con el área de comunicaciones se ha realizado la divulgación de la importancia y tips de conservación de las especies amenazadas mediante redes sociales y cuñas radiales.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia120 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10726,
            'year' =>2,
            'value' => 1,
            'description' => 'Rezago:
        Se ejecutó y liquidó el Contrato de Obra N°200-30.4-620 del 28 de diciembre de 2020, en el cual se adelantaron 21 visitas de caracterización y diagnóstico en los predios seleccionados por la corporación en los municipios de Gachetá, Ubala, Guasca, Junín y Gachalá para manejo del conflicto en las zonas donde se presentan interacciones negativas entre los seres humanos y la fauna silvestre. En los predios se adelantó la implementación de obras con las especificaciones contempladas en el anexo técnico del Contrato de Obra tales como: Gallineros, Establos, Adecuaciones de establos, Porqueriza, Hornilla, Huerta Casera, Apoyo a Cultivo de Frijol, Apícola, bebederos y saleros. 
        
        Vigencia 2021:
        Durante la vigencia 2021, el personal de la Corporación ha atendido 130 casos entre avistamientos y ataques de fauna silvestre, información que es consolidada en la base de datos con la que cuenta la entidad registrando un total de 106 muertes de animales domésticos entre aves de corral, bovinos, ovinos y caprinos, ocasionadas por animales silvestres como águila crestada, puma, comadrejas, felinos y oso andino. Así mismo, se han registrado 24 avistamientos de la especie Oso Andino en varios municipios de la jurisdicción de la Corporación. 
        Por otra parte, la Corporación firmó el Otro Si N°1 para Adicionar, Prorrogar y Modificar el Contrato de Obra N°200-30.4-620 del 28 de diciembre de 2020 suscrito con SEIING S.A.S, vinculando 10 nuevos usuarios en los municipios de Medina, Gachalá, Ubalá y Junín, para lo cual el equipo técnico llevo a cabo visitas técnicas con el objetivo de verificar el área a intervenir y la distancia de la vía a cada uno de los predios para el transporte de los materiales que se requieren para la implementación de las medidas antidepredatorias, adelantando como obras establos y gallineros, donde se logró mitigar las perdidas económicas e implementar acciones para disminuir el conflicto entre la fauna silvestre y domestica.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia121 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10727,
            'year' =>2,
            'value' => 100,
            'description' => '*El 16 de julio de 2021, la Corporación suscribió un contrato de consultoría con el Grupo Empresarial INGEMA SAS, con el objetivo de “Realizar un estudio de identificación de las especies de fauna y flora silvestre presentes en el Páramo Chingaza a través del monitoreo comunitario participativo que permita la apropiación y protección del territorio, para contribuir al cumplimiento de las metas de la Línea Temática Biodiversidad y Áreas Estratégicas del proyecto conservación del patrimonio natural y expresiones de vida, contenido en el plan de acción 2020-2023”, el cual se ejecutó en siete municipios que tienen presencia de páramo Chingaza jurisdicción de Corpoguavio. En el desarrollo del mismo, se contó con la participación de catorce personas de la comunidad, dos por municipio, quienes fueron vinculados por la consultoría para adelantar el monitoreo participativo comunitario, así mismo, para el desarrollo del monitoreo el contratista, adquirió y suministro a la comunidad los elementos necesarios, como el Kit de monitoreo (una tula impermeable, regla plastificada, agenda, esfero ecológico y Tablet marca SANSUMG modelo T-500); en este último equipo tecnológico fue instalada un App que permitió registrar la información recolectada en las visitas de campo. Una vez compilada y analizada la información producto de la fase de campo se obtuvo un documento final donde se realizó la consolidación, sistematización y análisis de la información resultado del desarrollo de las diferentes fases contempladas en el contrato.
        
        *El día 30 de junio de 2021 se suscribió el contrato No. 200-30.4-341 de 2021 entre CORPOGUAVIO y la UNIÓN TEMPORAL PIONONO cuyo objeto es Planificar estrategias de conservación para las reservas forestales protectoras regionales pionono y cerros de pionono y las águilas a partir de sus planes de manejo y el estudio de fragmentación y conectividad ecológica., para lo cual se suscribió prórroga del Convenio 2650 de 2020 por 176 días calendario el día 22 de septiembre de 2021. El contrato derivado cuenta con acta de inicio del día 28 de septiembre de 2021, y a la fecha se ha cumplido casi en su totalidad con la entrega de los productos pactados en el contrato para la fase de aprestamiento que incluyen la presentación de metodologías de trabajo para el levantamiento de la información primaria, así como la recolección de información predial y social.
        
        *El día 30 de junio se suscribio el contrato No. 200-30.4-335 de 2021 entre CORPOGUAVIO  y  UNION TEMPORAL CORREDOR BIOLOGICO 2021 cuyo objeto Llevar a cabo el diseño de un corredor biológico entre las áreas protegidas y ecosistemas estratégicos presentes en la zona alta de los municipios de Guatavita, Gachetá y Junín, como una estrategia de conservación que permita identificar alternativas de desarrollo sostenible en la región, para lo cual se suscribió prorroga del convenio interadministrativo 2649 de 2020 por 173 dias calendario, lo que permitió firmar acta de inicio del contrato derivado el dia 28 de septiembre de 2021, adelantar comité técnico, entregar el cronograma de actividades por el contratista y remitir información secundaria del área de estudio. A 31 de diciembre se contaba con los productos de la fase de aprestamiento establecidos en el anexo técnico del contrato, con lo cual se tramitó primer desembolso. 
        
        *El 30 de diciembre de 2021 se suscribió el contrato de suministro No. 200-30.4-472 con Working Project S.A.S  cuyo objeto es: Suministro de elementos como estrategia de protección de las áreas protegidas, ecosistemas estratégicos, fauna, flora, recursos naturales e imagen institucional, en el marco del Plan de Acción 2020-2023 “CORPOGUAVIO Somos Todos Vida, Confianza, Desarrollo; el cual será ejecutado durante la vigencia 2022.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia122 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10728,
            'year' =>2,
            'value' => 100,
            'description' => 'Durante el año 2021, los Gestores Ambientales Comunitarios llevaron a cabo el recorrido a los humedales registrados en el inventario realizado en el año 2020. Se adelantó el monitoreo y seguimiento de 236 humedales, con el fin de corroborar su condición actual; a través del diligenciamiento de los formatos, toma de parámetros cualitativos y cuantitativos e identificación de los servicios ecosistémicos que se encuentren presentes, se logró  identificar que no hay ninguna alteración significativa en estos ecosistemas estratégicos y por lo tanto en los servicios que brinda. Asi mismo, para el año 2021 se identificaron y monitorearon 25 humedales  que no se encontraban registrados en el inventario realizado en la jurisdicción de la Corporación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia123 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10729,
            'year' =>2,
            'value' => 1200,
            'description' => '*Se contrató el equipo de profesionales y Gestores Ambientales Comunitarios de la línea Temática Biodiversidad y Áreas Estratégicas, quienes durante la vigencia 2021 expidieron 32 conceptos técnicos correspondientes a 52 predios, de los municipios de Guasca y Medina, como requisito para el descuento de impuesto predial, lo cual corresponde a 4439,2562 hectáreas en estado de conservación.
        
        *En el marco del convenio interadministrativo No. SA-CDCVI-068-2020 suscrito entre CORPOGUAVIO y la Secretaría del Ambiente de la Gobernación de Cundinamarca, se suscribió el Contrato de Consultoría No. 200-30.4-419 de 2021 con Bioambiente de la Orinoquia S.A.S., con el objeto de adelantar la “Formulación de acuerdos colectivos de conservación - PSA, en la jurisdicción de CORPOGUAVIO”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia124 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10730,
            'year' =>2,
            'value' => 20,
            'description' => 'Se proyecta la metodología para la construcción del sistema de monitoreo de la deforestación, se construye la línea base de información y se identifican las necesidades para la instrumentalización',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia125 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10731,
            'year' =>2,
            'value' => 32,
            'description' => 'Se construye el documento de análisis de los procesos de fragmentación de los bosques de la jurisdicción de CORPOGUAVIO.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia126 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10732,
            'year' =>2,
            'value' => 25,
            'description' => 'Se realizan cargues de información en el aplicativo SNIF, modulo restauración. Se recibe asesoría y acompañamiento del IDEAM..',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia127 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10733,
            'year' =>2,
            'value' => 50,
            'description' => 'Se construye el documento descriptivo de los procesos de conflictos de uso del suelo de vocación forestal y las alternativas de manejo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia128 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10734,
            'year' =>2,
            'value' => 30,
            'description' => 'Se realiza la determinación del alcance del proceso de medición de stocks de carbono y definición de la metodología a ser empleada. Se realiza la instalación de parcelas semipermanentes para la medición del carbono forestal.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia129 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10735,
            'year' =>2,
            'value' => 30,
            'description' => 'Se consolidan fichas de seguimiento fenológico de 18 especies forestales, con su respectiva caracterización y georeferenciación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia130 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10736,
            'year' =>2,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia131 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10737,
            'year' =>2,
            'value' => 25,
            'description' => 'Se realiza implementación de la metodología para medición de la efectividad, realizando la comprobación en campo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia132 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10738,
            'year' =>2,
            'value' => 50,
            'description' => 'Se consolida la información identificando las necesidades de los diferentes actores y las responsabilidades de cada uno en el sector forestal; se priorizan grupos focales objeto de acompañamiento y asesoría.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia133 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10739,
            'year' =>2,
            'value' => 30,
            'description' => 'Se consolida la información identificando las necesidades de los diferentes actores y las responsabilidades de cada uno en el sector forestal; se priorizan grupos focales objeto de acompañamiento y asesoría.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia134 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10740,
            'year' =>2,
            'value' => 1,
            'description' => 'Para el cumplimiento del presente indicador se ejecutaron los convenios interadministrativos 548 y 561 de 2020 establecidos con los municipios de Ubalá y Junín; mediante los cuales se implementaron modelos de producción sostenible en los subsectores; frijolero, hortifruticola, sachainchero y aguacatero, asi mismo ha mantenido comunicción constante con PORKCOLOMBIA para el fortalecimiento del subsector porcicola de la jurisdicción y suscripción alianza SENA.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia135 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10741,
            'year' =>2,
            'value' => 1,
            'description' => 'Para el cumplimiento del indicador se identificaron acciones que permiten el fortalecimiento de las inicitaivas productivas innovadoras, para lo cual se avanza en la ejecución del contrato de prestación de servicios 356 de 2021, mediante el cual se viene desarrollando un proceso de identificación de caracteristicas diferenciadoras para productos como el café, miel y la miel de abejas, así mismo se estableció el convenio interadministrativo SA-CDCVI-150-2021 con la gobernación de cundinamarca para el establecimiento de fincas piloto sostenibles.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia136 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10742,
            'year' =>2,
            'value' => 21,
            'description' => 'Para el cumplimiento del indicador se contrato el equipo técnico de la ventanilla de negocios verdes, realizando el proceso de identificación de los siguientes negocios verdes; Wilkabamba, Apicola San Felipe, Moringama, Café y Miel, La puerta de Alcalá, Ecofeliz, la Casa del Sagú, Calentanos San Jorge Guasca, Asoemprenderg, Oro dulce del Guavio,  Vivero Entre Verde, Típicos del fogon, alojamiento  Gastronomia la terraza, Finca agroturistica L & L el palomar, Yogurt Mi Casita, Posadas rurales el río, Abejas del Bosque The Forest Bees, Alien snack, Apiario el Colorado, Green Lemon y Isa & Anto..',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia137 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10743,
            'year' =>2,
            'value' => 48,
            'description' => 'Para el cumplimiento del indicador y producto del proceso de verificación de criterios de sostenibilidad se logró la expedición de 50 avales de confianza para los negocios verdes verificados por la entidad, así mismo se realizó la actualización de bases de datos y formatos de verificación de criterios para la expedición de planes de mejora con reoporte al MADS.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia138 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10744,
            'year' =>2,
            'value' => 2,
            'description' => '
        Para el cumplimiento del presente indicador se celebraron los siguientes procesos contractuales:
        
        • Contrato de prestación de servicios No. 220-30.4-303 del 11 de mayo de 2021, establecido entre la corporación y la empresa Oxygen Tree Ingeniería SAS, mediante el cual se desarrolló en el municipio de Medina el foro “El aviturismo como alternativa de desarrollo sostenible” al que asistieron presencialmente 40 actores vinculados con el subsector turismo de naturaleza.
        
        • Contrato de apoyo logístico N° 220-30.4-438 del 17 de noviembre de 2021, establecido entre la Corporación y la empresa ECONPRO V&J SAS mediante el cual se desarrolló la agenda académica de la 3ª feria de Negocios Verdes “Origen Guavio” con una participación total de 50 negocios verdes verificados por la entidad y cuyo lugar de realización fue el municipio de Guasca, este evento se desarrolló teniendo en cuenta la necesidad de generar espacios de interacción entre la entidad, los productores de negocios verdes y aliados estratégicos de la Corporación, en este evento se realizó la entrega de avales de confianza a un total de 55 negocios verdes destacados. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia139 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10745,
            'year' =>2,
            'value' => 0,
            'description' => 'Para el cumplimiento del presente indicador se suscribieron los siguientes procesos contractuales:
        • Contrato de prestación de servicios de apoyo logístico No. 200-30.4-438 del 17 de noviembre de 2021 mediante el cual se participó de la realización de la feria nacional de Negocios Verdes BIOEXPO Antioquia 2021 a través de la vinculación de 5 empresas y representación del equipo técnico de la ventanilla NV, así mismo en el marco del referido contrato se desarrolló la tercera versión de la feria Regional de Negocios Verdes “Origen Guavio” la cual se realizó durante el mes de diciembre en el municipio de Guasca contando con la participación de 50 negocios verdes verificados.
        • Contrato de prestación de servicios de apoyo a la gestión Nº 200-30.4- 397 del 28 de septiembre de 2021; el cual se suscribió entre CORPOGUAVIO y el TALLER RED CREATIVA SAS; para propiciar la participación de la entidad en la Feria Internacional del Medio Ambiente – FIMA 2021 – Evento realizado en el mes de septiembre en la ciudad de Bogotá.
        
        *Contrato de prestación de servicios No. 200-30.4-445-2021 del 01 de diciembre de 2021 mediante el cual se participó de la realización de la primer agroferia de Negocios Verdes desarrollada en el mes de diciembre en el municipio de Fómeque; evento en el que participaron un total de 30 emprendimientos. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia140 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10746,
            'year' =>2,
            'value' => 3,
            'description' => 'Para el cumplimiento del indicador se identificaron acciones que permiten el fortalecimientode la oferta de bienes y servicios sostenibles de la jurisdicción, para lo cual se avanza en la elaboración de estudios previos , estudios de sector y banco de proyectos de inversión para su desarrollo e implementación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia141 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10747,
            'year' =>2,
            'value' => 1,
            'description' => 'Para el cumplimiento del indicador se ejecutó el siguiente proceso contractual: 
        
        Contrato de Prestación de Servicios de apoyo logístico No. 200-30.4-440 del 24 de noviembre de 2021: mediante el cual la corporación desarrolló en los municipios de Gachalá y Medina cabo los Foros Temáticos para la Implementación de estrategias de mercado de carbono y adaptación al cambio climático en la jurisdicción, en este espacio académico se contó con la participación de dos profesionales expertos en cambio climático y mercados de carbono los cuales cuentan con una amplia trayectoria en las áreas de sostenibilidad y cambio climático y en servicios de finanzas para el Clima: mercados de carbono regulado y no regulado, Preparación de proyectos REDD, estructuración de emisión de Bonos Verdes, como también en estrategias en cambio climáticas, inventarios de emisiones de Gases de Efecto Invernadero y huella de carbono.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia142 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10748,
            'year' =>2,
            'value' => 0,
            'description' => 'Contrato de prestación de servicios de apoyo a la gestión N°200-30.4-398 del 30 de septiembre de 2021; el cual se suscribió entre CORPOGUAVIO y la Corporación de Turismo de Cundinamarca – CORCUNDINAMARCA, para propiciar la participación institucional en la feria de turismo Cundinamarca Expotravel 2021; evento mediante el cual se presentó la oferta ecoturística de la jurisdicción.
        
        • Aunado a lo anterior se participó de dos vitrinas turísticas desarrolladas en los municipios de Junín y Guasca; eventos realizados durante el mes de octubre y en los que se vincularon operadores y prestadores de servicios de turismo de naturaleza adscritos a la ventanilla de negocios verdes y al proyecto regional Ruta del Agua.
        
        Por otra parte, y en cumplimiento de las acciones establecidas durante la vigencia 2020 se desarrollaron los siguientes procesos: 
        Para el cumplimiento del presente indicador se avanza en la ejecución del convenio interadministrativo 235 – 2020 establecido con la Gobernación de Cundinamarca, mediante l cual se establecio para su ejecución el Contrato de Prestación de servicios 625 del 2020 en el que se busca desarrollar actividades que permitan la reactivación económica de los operadores y prestadores de servicios de turismo en el marco de la emergencia sanitaria COVID 19, asi mismo se avanza en la identificación de acciones que permiten el desarrollo de procesos que potecialicen las actividades de turismo de naturaleza.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia143 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10749,
            'year' =>2,
            'value' => 0,
            'description' => 'Para el cumplimiento del presente indicador se avanza en la ejecución  del contrato 613 de 2020, el cual tiene como propósito el desarrollo de acciones que permitan apoyar a los municipios de la jurisdicción en la actualización de sus planes de desarrollo turístico, así mismo se identificaron acciones que permiten el fortalecimiento de la planificación turistica del jurisdicción, para lo cual se avanza en la formulación de banco de proyectos de inversión para su desarrollo e implementación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia144 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10750,
            'year' =>2,
            'value' => 0,
            'description' => 'Para el cumplimento del presente indicador se avanza en la ejecución del Contrato de consultoría N° 200-30.4-609 del 22 de diciembre de 2020, en el que se esta desarrollando un diagnóstico de los impactos generados por prácticas inadecuadas en los subsectores piscícola, piscícola y avícola, atendiendo dichas problemáticas a través de asesorías especializadas buscando el cambio de patrones de producción y estableciendo modelos de reconversión productiva, asi mismo se avanza en la suscripción de un convenio que permita la implementación de proyecto de ganaderia sostenible en el municipio de Ubalá en el marco del proceso Alianzas productivas del MADR.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia145 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10751,
            'year' =>2,
            'value' => 0,
            'description' => 'Para el cumplimiento de la presente actividad se desarrollaron los siguientes procesos:
        
        • Suscripción del contrato de obra N° 200-30.4-453-2021 cuyo objeto es “Contratar la obra pública para implementación de sistemas ecoeficientes que permitan la disminución de impactos ambientales generados a partir del proceso de transformación de la caña panelera en el municipio de Gachalá jurisdicción de Corpoguavio” dicho proceso se encuentra en aprobación de garantías para dar inicio a la fase de aprestamiento, convocar comunidades para la capacitación y construir un total de seis (6) sistemas ecoeficientes de combustión panelera.
        • Suscripción del Convenio Interadministrativo N° 200-30.4-434 del 12 de noviembre de 2021 cuyo objeto es “Aunar esfuerzos técnicos, administrativos y financieros entre la Corporación Autónoma Regional del Guavio y el Municipio de Gama para la implementación del proyecto Implementación de parcelas del cultivo de aguacate hass con proyección a negocios verdes en el municipio de Gama Cundinamarca en cumplimiento de las metas del proyecto sectores productivos responsables con el planeta del plan de acción 2020 — 2023 Corpoguavio Somos Todos, Vida — Confianza — Desarrollo”, dicho proceso se encuentra suspendido teniendo en cuenta que el Municipio como ejecutor debe iniciar un proceso de contratación derivada.
        
        Por otra parte, y en cumplimiento de las acciones establecidas durante la vigencia 2020 se desarrolló el siguiente proceso: 
        • Ejecución del Contrato de prestación de servicios N° 200-30.4-589 del 11 de diciembre de 2020, en el que se desarrolla un modelo piloto piscícola para identificar la viabilidad técnica para el aprovechamiento piscícola en el embalse del Guavio dando así cumplimiento a la guía ambiental del subsector.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia146 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10752,
            'year' =>2,
            'value' => 0.2,
            'description' => 'Para el cumplimento de la presente actividad se avanza en las siguientes actividades:
        
        • Suscripción del Convenio interadministrativo No 200-30.4-432-2021 suscrito entre la corporación autónoma regional del Guavio - Corpoguavio y el departamento de Cundinamarca, mediante el cual se desarrollará un proceso de reconversión productiva en el municipio de Junín con el fin de mitigar las interacciones negativas el oso andino y las comunidades, para su ejecución se espera la incorporación de los recursos aportados por la Gobernación de Cundinamarca para avanzar en su ejecución a través de un proceso de contratación derivada, en el marco de este proceso se implementaran modelos de reconversión productiva a partir de la implementación de sistemas silvopastoriles y de ganadería sostenible.
        Por otra parte, y en cumplimiento de las acciones establecidas durante la vigencia 2020 se desarrolló el siguiente proceso: 
        • Contrato de consultoría N° 200-30.4-584 del 04 de diciembre de 2020, en el que se busca ejecutar el proyecto “Diseño de modelos de reconversión y sustitución de actividades productivas para su implementación en socioecosistemas de páramo de  los municipios de la jurisdicción de Corpoguavio” mediante el cual se avanza en el desarrollo de un proceso de gestión comunitaria del Páramo como sociecosistema orientado a su conservación, la identificación e implementación de estrategias de reconversión y sustitución de actividades productivas en las áreas de Páramo con enfoque de adaptación al cambio climático y el desarrollo de actividades de educación ambiental en las comunidades del páramo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia147 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10753,
            'year' =>2,
            'value' => 1,
            'description' => 'Para el cumplimiento de la meta se avanza en los siguientes procesos:
        
        • Contrato de prestación de servicios de apoyo logístico N° 200-30.4-404-2021 mediante el cual se  desarrolló el primer concurso denominado “Huellas productivas juveniles” el cual tiene como objeto identificar iniciativas productivas lideradas por jóvenes e incentivar su permanencia en el territorio a través de apoyos financieros para potencializar sus proyectos de vida y el concurso “Identificación de procesos productivos sostenibles e innovadores” de los cuales se recepcionaron un total de 30 propuestas productivas con el propósito de vincularlas al proceso de negocios verdes de la entidad.
        
        Por otra parte, y en cumplimiento de las acciones establecidas durante la vigencia 2020 se desarrolló el siguiente proceso: 
        
        • Ejecución del Convenio Interadministrativo N°553-2020 establecido con la alcaldía de Gama mediante el cual se desarrolló un proyecto piloto para el establecimiento de modelos de producción agroecológica del cultivo de aguacate variedad hass vinculando especialmente a los jóvenes como principales actores estratégicos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia148 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10754,
            'year' =>2,
            'value' => 8,
            'description' => 'Durante la vigencia se realizó la contratación del personal y de terceros para el desarrollo de las actividades del proyecto y se implementaron la totalidad de estrategias descritas en este indicador de la siguiente manera: 9 Aulas Ambientales, 4 Foros Académicos, 9 giras ecopedagógicas, 40 obras de teatro de títeres, implementación de 10 pruebas Yincanas, 27 talleres presenciales y 3 virtuales, 5 procesos de formación en metodología WET y el diseño y puesta en funcionamiento del rincón Infantil en la página web institucional en el siguiente link https://educacion.corpoguavio.gov.co/rincon-infantil/',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia149 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10755,
            'year' =>2,
            'value' => 8,
            'description' => 'Se realizó acercamiento a las administraciones municipales de los 8 municipios de la jurisdicción para reactivar el Comité Interinstitucional de Educación Ambiental – CIDEA, se adelantó asesoría, seguimiento y acompañamiento técnico permanente a los CIDEAS de los todos los municipios, se socializó nuevamente la herramienta para la construcción de los Planes de Educación Ambiental Municipal dando continuidad a la formulación de los mismos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia150 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10756,
            'year' =>2,
            'value' => 0,
            'description' => 'Se realizó la contratación del personal para el desarrollo de las actividades de Educación Ambiental, al igual que se revisó, definió y realizó la suscripción del Contrato de Prestación de Servicios No. 200-30.4- 452 del 16 de diciembre de 2021 suscrito con CONSORCIO PROCEDA 2021 para la implementación de 3 iniciativas ciudadanas relacionadas con: 1) Conocimiento, manejo y conservación de Ofidios; 2) Promoción del Turismo Rural Comunitario en la Reserva Natural Tolima y 3) Conservación Biológica. Estas estrategias serán desarrolladas en el I semestre del año 2022.
        Se realizó seguimiento a los PROCEDAS de Conservación Biológica y Promoción del Turismo Rural Comunitario en la Reserva Natural Tolima que iniciaron en vigencias anteriores, al igual que a las iniciativas ganadoras en el marco del Diplomado Gestión de Proyectos innovadores.   
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia151 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10757,
            'year' =>2,
            'value' => 19,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia152 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10758,
            'year' =>2,
            'value' => 14,
            'description' => 'Para el periodo en ejecución se realizó asistencia y seguimiento a 19 instituciones educativas priorizadas en la implementación del PRAE. 
        Se suscribió agenda conjunta con las IE Agropecuaria Piloto del municipio de Gachetá, Domingo Savio del municipio de Guasca; Escuela Normal Superior y Claraval – Chuscales del municipio de Junín.  
        Se realizó adición y prórroga al contrato No. 200-30.4-525 de 2020 suscrito con CONSOSRCIO PRAE 2020 para la adquisición de elementos e insumos necesarios para el fortalecimiento de los PRAE de las 4 instituciones educativas priorizadas para la presente vigencia y se realizó la entrega e instalación de insumos y equipos como incentivos a 9 instituciones educativas que se encontraban pendientes de la anterior vigencia.
        En la página web se cuenta con una ventana denominada Educación Ambiental y dentro de ésta un espacio dirigido a los PRAE en el siguiente link: https://educacion.corpoguavio.gov.co/educacion/ 
        En cada una de las Instituciones Educativas en las que se ha llevado a cabo la implementación del PRAE, se ha elaborado la planificación y ejecución de diferentes actividades, se realizó la entrega de incentivos y de igual forma se hace su respectivo seguimiento. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia153 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10759,
            'year' =>2,
            'value' => 2,
            'description' => 'Se realizó acercamiento a las 19 instituciones educativas priorizadas para la vigencia a quienes se realizó acompañamiento técnico en relación a la revisión del documento Plan Escolar para la Gestión del Riesgo y se solicitó por escrito el documento a quienes no lo entregaron siendo éstas las instituciones educativas Escuela Normal Superior de Junín, Baldomero Sanín Cano, Claraval – Chuscales, Gazaduje y Alonso Ronquillo. 
        Por otro lado, se realizó la articulación con el área técnica de Gestión del Riesgo de la Corporación para la revisión y posterior ajuste del documento y la implementación de la campaña “Arriésgate a estar seguro”, se trabajó de manera conjunta la construcción de la cartilla de Gestión del Riesgo en la que se incluyó el tema de Plan Escolar de Gestión de Riesgo y se realizó la selección de contenidos y validación del juego de mesa que contiene dicha temática.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia154 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10760,
            'year' =>2,
            'value' => 16,
            'description' => 'Para el periodo en ejecución se recibió los elementos y el material pedagógico requerido para el desarrollo de 4 campañas las cuales se relacionan a continuación:  
        • Campaña 1. Recurso Hídrico: 3 veces. 
        • Campaña 2. Residuos Sólidos: 11 veces.
        • Campaña 3. Cambio y variabilidad climática: 3 veces.
        • Campaña 4. Biodiversidad: 5 veces.
        Las campañas se desarrollaron en los diferentes municipios de la jurisdicción contando con la participan de 1.259 personas. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia155 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10761,
            'year' =>2,
            'value' => 2,
            'description' => 'Durante el periodo se adelantó la contratación del personal para el desarrollo de las actividades de Educación Ambiental y Participación dando inicio a la implementación de la estrategia de posicionamiento institucional en los ocho (8) municipios de la jurisdicción en diferentes espacios de diálogo con diversos grupos poblacionales, socializando el quehacer institucional y el PAI 2020 – 2023 contando con la participación de 1.044 personas. De igual manera, se creó un espacio en la APP de Educación Ambiental denominada Infogestión en el cual se presenta por proyecto de manera resumida los avances en cada uno de ellos como estrategia que permite a los contratistas y funcionarios de la Entidad conocer de manera más cercana la gestión institucional en el territorio',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia156 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10762,
            'year' =>2,
            'value' => 2,
            'description' => 'Se adelantó la contratación del personal para el desarrollo de las actividades de Participación realizando la implementación de la estrategia con diferentes grupos poblacionales socializando los mecanismos de participación ciudadana, acompañado de un proceso de articulación institucional con estudiantes de 4 Instituciones educativas, integrantes del ejército en el marco del convenio interadministrativo con el Batallón Energético Víal -  BAEEV No.13 de Ubalá y población diversamente hábil para un total de 10 procesos de socialización.
        De igual manera se dispone de un espacio en la página web institucional en el que se abordan los mecanismos de participación en el siguiente link:  https://educacion.corpoguavio.gov.co/participacion/mecanismos-de-participacion/',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia157 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10763,
            'year' =>2,
            'value' => 3,
            'description' => 'En cumplimiento a lo estipulado en la normatividad vigente se realizaron 10 espacios de Dialogo previos a la Audiencia Pública en la que participaron 147 personas, 4 Audiencias en los municipios de Fómeque, Medina, Junín y Gachalá de manera presencial, y la de este último municipio también de manera virtual, contando con la participación de 233 personas de manera presencial.
        De igual manera los Directivos de la Entidad participaron en 5 sesiones de Concejo convocados en los municipios de Junín, Guasca y Medina para conocer las acciones adelantadas desde la Entidad.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia158 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10764,
            'year' =>2,
            'value' => 2,
            'description' => 'Se formularon y dio inicio a la implementación de dos semilleros de investigación promoviendo la participación de la comunidad educativa de las instituciones Escuela Normal Superior de Gachetá y Martín Romero del municipio de Gama, los cuales se encuentran orientados a la implementación de un “Sistema acuapónico” mediante el cual los estudiantes puedan realizar un trabajo de investigación articulado con todas las áreas del saber y a “Turismo y Naturaleza” con el fin de implementar un trabajo de investigación que permita realizar una caracterización de flora, fauna y determinar los servicios ecosistémicos de cuatro senderos turísticos, priorizados por su importancia ecosistémica.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia159 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10765,
            'year' =>2,
            'value' => 7,
            'description' => 'Se formularon y dio inicio a la implementación de dos semilleros de investigación promoviendo la participación de la comunidad educativa de las instituciones Escuela Normal Superior de Gachetá y Martín Romero del municipio de Gama, los cuales se encuentran orientados a la implementación de un “Sistema acuapónico” mediante el cual los estudiantes puedan realizar un trabajo de investigación articulado con todas las áreas del saber y a “Turismo y Naturaleza” con el fin de implementar un trabajo de investigación que permita realizar una caracterización de flora, fauna y determinar los servicios ecosistémicos de cuatro senderos turísticos, priorizados por su importancia ecosistémica.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia160 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10766,
            'year' =>2,
            'value' => 5,
            'description' => 'Se  tiene  realizo el levantamiento de la Información de los requisitos mininos exigidos por (MINTIC) en cuanto infraestructura y seguridad para le restructuración del cuarto de servidores, pero se esta a la espera de incorporacion de recursos, para realizar la contratación ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia161 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10767,
            'year' =>2,
            'value' => 100,
            'description' => 'Se  brindo soporte al 100% de toda la infraestructura tecnológica con que cuenta la entidad (mantenimiento preventivo y correctivo a software y hardware según corresponda, aplicativos, Red de datos, Red de Internet, Servidores, etc.) la cual se encuentra registrada en el formato de DE-TIC-FT-HVE V-01 de 2020 y se puede verificar en el siguiente link https://docs.google.com/spreadsheets/d/1eIoi4YpAEOghb8QhWfUR3MftJdGmlYPqc0kVoPQAeIg/edit#gid=729463922 .',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia162 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10768,
            'year' =>2,
            'value' => 100,
            'description' => 'Este servicio se viene realizando bajo el contrato de prestación de servicios No. 200-30.4-470 del 20 de agosto de 2020',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia163 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10769,
            'year' =>2,
            'value' => 100,
            'description' => 'De los diferentes aplicativos con que cuenta la entidad, se realizó la actualización de los que fueron priorizados para esta vigencia por parte de la Oficina de Tics',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia164 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10770,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizo inventario de equipos de cómputo para proceso bajas, lista de repuestos de tecnología y se realizó inventario de equipos tecnológicos necesarios para la entidad, esta Información se puede evidenciar en el link  https://drive.google.com/file/d/1j30ZArTD-zsQ2xvAznGJxnaMoLECAFLe/view?usp=sharing 
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia165 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10771,
            'year' =>2,
            'value' => 100,
            'description' => 'Por medio de contrato de suministros 200-30.4-376 del 24 agosto de 2021, cuyo Objeto era “ADQUISICIÓN DE ELEMENTOS TECNOLOGICOS Y MANTENIMIENTO DE UN IMAC PARA LA CORPORACION AUTÓNOMA REOGINAL DEL GUAVIO – CORPOGUAVIO”. Se realizo la adquisición de diferentes elementos y repuestos Tecnológicos  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia166 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10772,
            'year' =>2,
            'value' => 38,
            'description' => 'Por medio de contrato de PRESTACIÓN DE SERVICIOS NO 200-30.4-352 DEL 15 DE JULIO 2021, el cual tenía como Objeto “ADQUISICIÓN DEL SERVICIO DE POOL DE DIRECCIONAMIENTO IPV6 A NOMBRE DE LA CORPORACIÓN AUTÓNOMA REGIONAL DEL GUAVIO -CORPOGUAVIO-, PARA USO EN LA INFRAESTRUCTURA DE RED TECNOLÓGICA DE LA ENTIDAD.” ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia167 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10773,
            'year' =>2,
            'value' => 50,
            'description' => 'La oficina de Tics actualizo y presento el plan de comunicaciones PETI, cumpliendo con el indicador programado para la vigencia 2021.al igual el plan fue socializado ante el Comité de Desempeño y Gestión Institucional, para su posterior aprobación por medio de acta No 16 del 2 de diciembre',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia168 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10774,
            'year' =>2,
            'value' => 0,
            'description' => 'Se desarrollo la actualización de los diferentes planes pertenecientes al decreto 612, incorporando diferentes actividades que se tienen que realizar en la vigencia 2021 estos planes actualizados se pueden verificar por medio del siguiente link.
         
        https://drive.google.com/drive/folders/1e0VEjEUKwFqcd_dsGs5LQFnoGWDWJCw7?usp=sharing',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia169 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10775,
            'year' =>2,
            'value' => 40,
            'description' => 'Se realizo la actualización e implementación de los 4 planes pertenecientes al decreto 612, los cuales fueron socializados y aprobamos por el comité de desempeño y Gestión Institucional por medio de Acta No xxxxx. El seguimiento de estos planes fue enviado a la oficina de control Interno de la entidad y al igual se puede verificar atravez del siguiente link: https://drive.google.com/drive/folders/1e0VEjEUKwFqcd_dsGs5LQFnoGWDWJCw7?usp=sharing ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia170 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10776,
            'year' =>2,
            'value' => 32,
            'description' => 'Durante la vigencia 2021 seguimos realizando la emisión de los programas de radio, VIDA AL AIRE por las emisoras comunitarias y privadas Farrallones stereo 106,4, Ubalá FM 107,8, Chingaza FM 106,4 y Junín Stereo. Además de El Dorado Radio de la Gobernación de Cundinamarca y las 43 emisoras comunitarias del departamento, logrando de esta manera una mayor audiencia y un mayor impacto en el territorio y fuera de el.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia171 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10777,
            'year' =>2,
            'value' => 100,
            'description' => 'Durante la vigencia 2021 la realización y emisión de los diferentes contenidos audiovisuales internos y externos de la gestión adelantada por la corporación, estuvo enmarcada en los proyectos ambientales, educativos, científicos y lúdicos de interés general.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia172 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10778,
            'year' =>2,
            'value' => 500,
            'description' => 'La vigencia 2021 nos demostró que cada vez más usuarios del territorio aprovechan el soporte que les brindan nuestras plataformas sociales para recibir el contenido que se elabora, y emite a traves de las mismas, sobre la gestión que adelanta la entidad y otros temas de su interes.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia173 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10779,
            'year' =>2,
            'value' => 92,
            'description' => 'El Plan estrategico de Información y Comunicación fue la carta de navegación para la implementación de diferentes estrategias implementadas para el acompañamiento donde la corporación participó, lo que nos permitió distribuir piezas publicitarias con diferentes motivos ambientales y de imagen institucional (cuadernos, calendarios planeadores, sombrillas, mugs, bolsas reutilizables, esferos, afiches y plegables) con el fin de : Posicionar la marca e imagen de la entidad en audiencias, mercados, consejos directivos, ferias ambientales, fechas más importantes de calendario ambiental.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia174 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10780,
            'year' =>2,
            'value' => 98,
            'description' => 'Se realizó el proceso de estructuración de la información geográfica, la cual contempla la organización, depuración, actualización, transformación y migración de información para los diferentes estudios adelantados por la Corporación y que cuentan con insumos geográficos y cartográficos, así mismo se realizó la centralización de estudios, la cual corresponde a la migración de la información geográfica desde los ordenadores del SIG, al servidor SIG y se adelantaron nuevas pruebas en RED de la operatividad de la información, la cual consistió en interactuar con herramientas y velocidad de manejo del software frente a la interactividad con coberturas desde las Geodatabase dispuesta en el servidor SIG.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia175 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10781,
            'year' =>2,
            'value' => 100,
            'description' => 'Se publicó en el Visor Geográfico  las  diferentes coberturas temáticas de los estudios mas relevantes adelantados por la Corporación, así como la fotografía aérea para el municipio de Gama y puntos georreferenciados con imágenes de diferentes proyectos de la Corporación. Se realizó la capacitación a mas de 100 funcionarios y contratistas de la entidad en la instalación, configuración y manejo del aplicativo Survey123, para el diligenciamiento de Visitas de Campo y se brindó respectivo soporte. se incorporó el tablero de control de visitas de campo a la pagina oficial de la Corporación, la cual cuenta con mas de 700 registros a la fecha. se ingresó a la base del SIG, nuevas imágenes satelitales y estudio topográfico de predios de la Corporación, así como nueva información predial para los ocho (8) Municipios de la Jurisdicción.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia176 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10782,
            'year' =>2,
            'value' => 98,
            'description' => 'Se reinstalaron los diferentes servicios de ArcGis Server y se reconfiguraron las diferentes funciones disponibles en el Portal for ArcGis. Se realizó el análisis y estudio de mercado para la adquisición de Software y Hardware que permitan la generación de nueva información geográfica, mediante el cual se adelantó la suscripción de un contrato de compraventa.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia177 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10783,
            'year' =>2,
            'value' => 30,
            'description' => 'Se realizó visita de asistencia técnica y seguimiento a todos los Municipios de la jurisdicción, mediante las cuales se evaluó el avance en el uso del software ArcGis, se aclararon inquietudes y se suministró la información geográfica en formato shapefile de nuevos Límites Municipales y Veredales, así como de coberturas temáticas relevantes para cada municipio. se brindó soporte a diferentes Municipios en cuanto a la reinstalación del software y la activación de Licencias de ArcGis.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia178 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10784,
            'year' =>2,
            'value' => 100,
            'description' => 'Durante la vigencia se atendieron el total de solicitudes externas presentadas a la oficina SIG de la Corporación mediante correo electrónico y SIDCAR y que respectan a la entrega o análisis de la información geográfica y cartográfica. Así mismo se atendió el total de solicitudes internas presentadas mediante el formato “Solicitud Interna de Información Geográfica y Cartográfica”. Se asesoró y acompaño en las solicitudes de análisis de la información Geográfica, las cuales se relacionaron en el formato “Consultas SIG”.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia179 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10785,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizó solicitud interna a las diferentes áreas de la Corporación, de los reportes emitidos a las entidades administradoras de subsistemas que alimentan al SIAC y se envío respectivo consolidado a la subdirección de Planeación. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia180 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10786,
            'year' =>2,
            'value' => 50,
            'description' => 'Se realizaron las actividades propuestas para el trimestre evaluado, dando cumplimieto a las tareas enmarcadas dentro del PAI para la Linea Tematica Sistemas de Gestion MIPG ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia181 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10787,
            'year' =>2,
            'value' => 30,
            'description' => 'Dentro del Indicador para el desarrollo de politicas enfocados en el trabajo con los lideres de procesos para la implementacion de las 7 Dimensiones y 19 Politicas de MIPG se registra el cumplimiento de las metas propuestas para este periodo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia182 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10788,
            'year' =>2,
            'value' => 33,
            'description' => 'Frente al avance del indicador de seguimiento y Evaluacion del Modelo, se dio cumplimiento a las diferentes actividades propuestas en cada etapa. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia183 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10789,
            'year' =>2,
            'value' => 100,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia184 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10790,
            'year' =>2,
            'value' => 100,
            'description' => ' Para la vigencia 2021 frente a una meta del 100% el indicador de Ejecución de la capacitación y entrega de productos fue del 20%. Y ponderando el resultado es del 20%. para lo que llevamos del primer semestre de la vigencia 2021. 
        ejecutar debido a la Emergencia Sanitaria- Covid2019, el Instituto Internacional de Auditores Internos como único prestador suspendió la oferta de capacitaciones en temas de Marco Internacional para la Práctica de la Auditoría Interna desde el mes de marzo hasta la fecha situación que afectó el desarrollo de la capacitación, asi mismo se esta desarrollando en la inscripción de los servidores para los cursos de capacitación del segundo semestre con recursos del plan de capacitación. Sin embargo, la gestión se ha  realizado fue con el apoyo del Departamento Administrativo de la Función quienes a través del mecanismo caja de herramientas dispuesto para las Oficinas de Control Interno de todo el país dieron el insumo técnico para los productos presentados en la mencionada meta en cumplimiento de los lineamientos aprobados por el Marco Internacional de Auditoria Interna y de lo establecido en esta materia por el DAFP en la Guía de Auditoría Interna. Para primer semestre de 2021 se recibio capacitación del DAFP en la guia de Auditoria Interna
        
        Es decir que la ejecución de toda la linea temática es del 20%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia185 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10791,
            'year' =>2,
            'value' => 100,
            'description' => 'La Corporación realizó la contratación de un grupo de trabajo conformado por 13 personas con el y 9 adiciones  se adelantan objetivos del Plan Institucional de Archivo PINAR 2020-2023, durante la vigencia 2021.
        Se realizó Actualización del inventario documental del archivo central en el  FUID, Asignación de la signatura Topográfica de depósito 2 desde la caja 1 hasta la caja 1507 de acuerdo al avance y metas establecidas.
        Organización y aplicación de criterios archivísticos de las series Estados diarios de Tesorería - Ordenes de Pago 2016, 2017 y 2018, conciliaciones bancarias 2017 y 2018, Autos 2016, 2017 y 2019  y Resoluciones de 2016, 2017, 2018 y 2019, comunicaciones de Dirección General.
        Se realizan llamadas Telefónicas, comunicaciones y ajustes entregados al Archivo General de la Nación para continuar el proceso de convalidación y aprobación de las TRD y TVD, Solicitud mesa de Trabajo Técnica para continuar el proceso de convalidación de las TVD.
        Elaboración de concepto Técnico para Proyecto específico para construcción de Depósito para almacenamiento de Documentos correspondiente a  Archivo Central y Proyecto específico para Digitalización  de series priorizadas.
        Se realiza preparación documental del Depósito 2 para el proceso de Digitalización con actividades como colocar Hoja de ruta desde la caja 1 hasta la caja 873  de la serie Contratos desde 1999 hasta el 2015.
        Proceso de preparación para la Digitalización documental con actividades como  girar documentos, pegar bien las puntas de los documentos, tomar fotocopia a los Fax,  revisar, retirar material abrasivo, desdoblar documentos, dar primeros auxilios a folios maltratados, colocar una X en los documentos impresos que han sido archivados y conservados en papel reciclado del Depósito 1 desde la caja 896 hasta la caja 1787 desde la caja 2057 hasta la 2616 y del Depósito 2 desde la caja 1 hasta la 1507. 
        Capacitación personalizada e inducciones a 361 Funcionarios y contratistas para el manejo, custodia, organización, lectura y aplicación de las TRD y transferencia Documentales de los Archivos de Gestión al Archivo Central de las diferentes Subdirecciones.
        Mediante comunicación interna 20213101179 Se elaboró y se dio cumplimiento Cronograma de Seguimiento Archivos de Gestión 2021, se realizaron los informes y se entregaron a las Subdirecciones correspondientes. 
        Se realiza digitalización de series priorizadas las cuales se encuentran para consulta en  red: \\SIGYCO\ARCHIVO CENTRAL CORPOGUAVIO.
        CORPOGUAVIO mediante contrato 446 de 2021 dio continuidad al proceso de digitalización de los documentos organizados del archivo central de la Corporación Autónoma Regional Del Guavio, el grupo de trabajo de Gestión Documental realizo la entrega al contratista de 600 cajas de referencia X100 donde se relacionan las  carpetas entregadas.
        Se da cumplimiento de 962 solicitudes de préstamos y consultas que realizan los usuarios internos y externos, registrados en la Subserie 300-28.3 Planilla de préstamos y consulta 2021, se verifica las carpetas prestadas estén completas, organizadas y se archiva en la respectiva ubicación topográfica.
        Verificación de Transferencias Documentales que cumplen Criterios Archivísticos, se recibieron 22 transferencias Documentales en 480 cajas con 1796 carpetas ubicadas en el Deposito 2 del Archivo Central.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia186 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10792,
            'year' =>2,
            'value' => 100,
            'description' => 'Ejecucion de plan de trabajo anual del Sitema de Gestion de Seguridad y Salud en el trabajo, medicion de resultados de su implementacion, autoevaluacion del sistema de gestion de seguridad y salud en el trabajo, elaboracion del plan de mejora par el 2022.  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia187 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10793,
            'year' =>2,
            'value' => 100,
            'description' => 'Se han generado facturas de servicios ambientales tales como servicios de evaluacion, servicios de seguimiento servicios ambientalés papel y multas, se han generado  cobros persuasivos de acuerdo al vencimiento de estas facturas, la facturacion de tasa por uso y tasa retributiva ya genero en su totalidad y se envio a los diferentes municipios para su respectiva notificacion. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia188 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10794,
            'year' =>2,
            'value' => 100,
            'description' => 'Durante el Tercer trimestre de la vigencia se recibieron 239 solicitudes para revisión y expedición de certificaciones de Disponibilidad presupuestal correspondientes al presupuesto de la Corporación, a las cuales se les realizó control y revisión para la apropiación de los recursos de acuerdo a los Planes Operativos de Inversión y al presupuesto aprobado. Así mismo se generó el respectivo certificado remitido al área solicitante.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia189 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10795,
            'year' =>2,
            'value' => 1300,
            'description' => 'Se realizan un total de 100 operativos, 1100 recorridos y 100 talleres casa a casa de la estrategia al control del trafico ilegal de especímenes de la diversidad biológica
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia190 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10796,
            'year' =>2,
            'value' => 100,
            'description' => ' Se evalúan un total de 75 aprovechamientos forestales, 98 concesiones de aguas superficiales, 8 permisos de vertimiento, 12 ocupaciones de cauce, 1 permiso de emisiones atmosféricas, 4 registros de libros de operaciones y 2 licencias ambientales',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia191 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10797,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizan las visitas técnicas de seguimiento a 100 aprovechamientos forestales, 288 concesiones de aguas superficiales, 8 concesiones de aguas subterráneas, 18 permisos de vertimiento, 81 ocupaciones de cauce, 25 licencias ambientales , 4 planes de manejo, restauración y recuperación – PMRRA, 6 permisos de emisiones atmosféricas y 9 planes de manejo ambiental - PMA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia192 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10798,
            'year' =>2,
            'value' => 95,
            'description' => 'Se realizan las visitas técnicas de seguimiento a 100 aprovechamientos forestales, 288 concesiones de aguas superficiales, 8 concesiones de aguas subterráneas, 18 permisos de vertimiento, 81 ocupaciones de cauce, 25 licencias ambientales , 4 planes de manejo, restauración y recuperación – PMRRA, 6 permisos de emisiones atmosféricas y 9 planes de manejo ambiental - PMA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia193 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10799,
            'year' =>2,
            'value' => 82,
            'description' => 'Se realizan las visitas técnicas de seguimiento a 100 aprovechamientos forestales, 288 concesiones de aguas superficiales, 8 concesiones de aguas subterráneas, 18 permisos de vertimiento, 81 ocupaciones de cauce, 25 licencias ambientales , 4 planes de manejo, restauración y recuperación – PMRRA, 6 permisos de emisiones atmosféricas y 9 planes de manejo ambiental - PMA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia194 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10800,
            'year' =>2,
            'value' => 98,
            'description' => 'Se realizan 71 conceptos técnicos de tasaciones, 77 conceptos técnicos de seguimiento compensaciones, visita a pruebas, indagaciones preliminares, inspecciones oculares y 25 conceptos técnicos de visitas sociales ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia195 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10801,
            'year' =>2,
            'value' => 100,
            'description' => 'Se realizan un total de 314 conceptos tecnicos en atencion a quejas de carácter ambientall',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia196 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10802,
            'year' =>2,
            'value' => 100,
            'description' => 'Se ha contratado el personal para atender los tramites administrativo ambiental  de carácter permisivo, asi mismo se aprobó el Plan de Seguimiento el 24 de febrero de 2021 y se han emitido  1534  actos administrativos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia197 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10803,
            'year' =>2,
            'value' => 100,
            'description' => 'Se ha contratado el personal para atender los tramites administrativos ambiental de carácter sancionatorio, asi mismo se aprobó el Plan de Seguimiento el 24 de febrero de 2021 y se han emitido 305 actos administrativos. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia198 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10804,
            'year' =>2,
            'value' => 100,
            'description' => 'Se ha contratado el personal para atender los tramites cobro coactivo, asi mismo se aprobó el Plan de Seguimiento el 24 de febrero de 2021 y se encuentran en seguimiento a 15 procesos. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia199 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10805,
            'year' =>2,
            'value' => 100,
            'description' => 'Durante la Vigencia 2021 se realizo revisión, analisis y seguimiento y finalización acertiva de los contratos suscritos con la Corporación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia200 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10806,
            'year' =>2,
            'value' => 100,
            'description' => 'Las acciones implementadas en el presente indicador se cumplieron, toda vez que el contrato de suministros se encuentra en etapa precontractual, cuyo objeto es el suministro e instalación de equipos e inmobiliario de la oficina de la sede central de experiencia al usuario de la Entidad; para de esta manera dar cumplimiento con la innovación y renovación, y poder brindar una experiencia satisfactoria a los grupos de interés que acuden a la Entidad.
        
        Se han realizado mejoras continuas; toda vez que, con el mejoramiento de las Tic, s en cada una de las oficinas de enlace, ha permitido que exista una conexión directa entre los diferentes grupos de valor y sede central.
        
        De igual forma, cabe mencionar que desde el área de experiencia al usuario, se realiza constantemente la medición de la percepción a través de encuestas e instrumentos de medición de satisfacción de los grupos de interés, en relación con cada una de las solicitudes o inquietudes presentadas a la Entidad, a través de los diferentes canales de atención; así mismo a través de las herramientas tecnológicas (chat, correo, modulo PQRS, línea telefónica zoom, google meet) se han resuelto inquietudes y/o peticiones presentadas por los usuarios. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2021-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia201 = DB::getPdo()->lastInsertId();
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
