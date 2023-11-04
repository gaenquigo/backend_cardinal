<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorpoguavio2020 extends Migration
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
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizo la construcción del Plan de acción Institucional Corpoguavio somos todos: Vida, Confianza y Desarrollo 2020 - 2023, el cual fue aprobado mediante Acuerdo 003 del 08 de Mayo de 2020. ',
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
            'activity_id' => 10630,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10631,
            'year' =>1,
            'value' => 4,
            'description' => 'Durante la vigencia 2020 se desarrollaron las siguientes subactividades para el cumplimiento de la actividad “Informes de seguimiento y Evaluación a los (4) POMCAS aprobados y adoptados”: 
        • Socialización de estándares y del eje programático de los POMCAS
        • Formulación de sistema de seguimiento y evaluación del POMCA
        • Formulación de la caja de herramientas para el seguimiento y la evaluación de los POMCAS
        • Socialización en micro talleres y mesas técnicas
        • Implementación del sistema de seguimiento y evaluación de los POMCAS
        • Gestión para la generación de informes de seguimiento de POMCAS
        • Actualización procedimiento interno
        • Solicitud proceso Liquidación Convenio 032 de 2014 – Fondo de Adaptación
        • Participación en Comités Técnicos de los POMCAS Bogotá y Guayuriba
        • Elecciones de los Consejos de Cuenca de los POMCA Ríos Guavio y Humea (Primer trimestre 2021).',
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
            'activity_id' => 10632,
            'year' =>1,
            'value' => 25,
            'description' => 'Durante la vigencia 2020 se desarrollaron las siguientes subactividades para el cumplimiento de la actividad “Armonización institucional y territorial de los POMCAS con los diferentes instrumentos de planificación”: 
        • Armonización de los POMCAS con el PAI de CORPOGUAVIO y PGAR
        • Acompañamiento en la incorporación de los proyectos POMCAS en los Planes de Desarrollo Municipal PDM
        • Alineación proyectos municipales con los componentes programáticos de los POMCAS',
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
            'activity_id' => 10633,
            'year' =>1,
            'value' => 100,
            'description' => 'En la vigencia 2020 se desarrollaron las siguientes subactividades para el cumplimiento de la actividad “Acompañamiento para el desarrollo de los procesos de formulación del POMCA Guacavía”: 
        • Indagación en Comité técnico del estado del POMCA Guacavía 
        • Solicitudes de informe del estado actual de la formulación del POMCA Guacavía
        • Revisión del expediente contractual POMCA Guacavía',
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
            'activity_id' => 10634,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizo seguimiento y reporte trimestral a la gestión de las 22 Lineas tematicas que componen el plan de acción institucinal para la vigencia 2020.',
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
            'activity_id' => 10635,
            'year' =>1,
            'value' => 20,
            'description' => 'Se realizo el diagnostico de avance del PGAR de los planes de acción de los años 2013 al 2019',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10636,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizo seguimiento, reporte y evaluación mensual del SIRECI presentado ante la contraloria General.',
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
            'activity_id' => 10637,
            'year' =>1,
            'value' => 100,
            'description' => 'Se mantuvo constante asistencia tecnica de los proyectos asociados a las 22 Lineas Tematicas.',
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
            'activity_id' => 10638,
            'year' =>1,
            'value' => 100,
            'description' => 'Se asesoró y acompañó  a los ocho  municipios de la jurisdicción de la Corporación en la incorporación y armonización de las determinantes ambientales y los criterios del cambio climático en el proceso  de revisión y ajuste de los EOT.',
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
            'activity_id' => 10639,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10640,
            'year' =>1,
            'value' => 100,
            'description' => 'Se asitió  tecnicamente, asesoró y realizó el seguimiento a los municipios de la jurisdiccion de la Corporación en la incorporación de la variable del riesgo y cambio climatico en los procesos de planificación territorial. ',
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
            'activity_id' => 10641,
            'year' =>1,
            'value' => 100,
            'description' => 'Se propiciaron y desarrollaron  escenarios de participación y socialización acerca de la consistencia del proceso de concertacion ambiental para la revision y ajuste de los EOT con las Alcaldías Municipales, Secretarías de Planeacion Municipal y Concejos Municipales de cada uno de los ocho municipios de la jurisdiccion de la Corporación.',
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
            'activity_id' => 10642,
            'year' =>1,
            'value' => 100,
            'description' => 'Se propiciaron y desarrollaron  escenarios de participación y socialización acerca de la consistencia del proceso de concertacion ambiental para la revision y ajuste de los EOT con los Consejos Territoriales de Planeaión y Grupos de Interes indentificados como Veedurias Ciudadanas de cada uno de los ocho municipios de la jurisdiccion de la Corporación.',
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
            'activity_id' => 10643,
            'year' =>1,
            'value' => 100,
            'description' => 'Se fortalecieron las capacidades técnicas de los tomadores de decisión y grupos de interés (Alcaldes Municipales, Consejos Territoriales de Planeación, Concejos Municipales) para la planificación territorial a traves de la realización del Diplomado Fortalecimiento para la gestión del ordenamiento territorial municipal.',
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
            'activity_id' => 10644,
            'year' =>1,
            'value' => 50,
            'description' => 'Se avanzó en la elaboración y actualización de los documentos técnicos y la cartografía correspondiente de las determinantes  ambientales por cada uno de los municipios de la jurisdicción la Corporación para los procesos de revisión y ajuste de los EOT. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10645,
            'year' =>1,
            'value' => 90,
            'description' => 'Se avanzó en la actualización  del instrumento para el cálculo de los umbrales máximos y densidades de ocupación del territorio en suelo rural para cada uno de los municipios de la jurisdicción de cara a la revision y ajuste de los EOT.',
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
            'activity_id' => 10646,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizaron procesos formativos durante al año 2020 con:
        CORPOGUAVIO - ANM *5 Sesiones *Alcance 151 personas
        CORPOGUAVIO - AREANDINA *3 Sesiones * Alcance 120 personas
        CORPOGUAVIO ECOPETROL* 1 Sesión *10 funcionarios
        CORPOGUAVIO SENA *2 SESIONES *48 Personas',
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
            'activity_id' => 10647,
            'year' =>1,
            'value' => 10,
            'description' => 'Participamos en 16 escenarios, a continuación, algunos de ellos:
        * “Diálogos desde las regiones: el sector minero-energético como dinamizador de territorios sostenibles” 
        * Acompañamiento coordinación, concurrencia y subsidiaridad ANM – CORPOGUAVIO
        *COLOMBIA RURAL Mesa intersectorial Fuentes De Materiales INVIAS- ANM - Municipios - CAR – CORPOGUAVIO
        *Mesa de trabajo Reglamentación Ley 1930/2018 - Programa de reconversión o reubicación laboral
        *Asistencia Técnica denominada Planeacion desde la Provincia - Secretaria de Planeación de Cundinamarca
        *Enel-Emgesa y CORPOGUAVIO actividad firma un Acuerdo de Intención - convenio 
        entre otros',
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
            'activity_id' => 10648,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizó acuerdo de voluntades con las alcaldías de Gachalá y Ubalá con el fin de mantener activa la comunicación que permita el control a las actividades de explotación ilícita y daño a los recursos naturales',
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
            'activity_id' => 10649,
            'year' =>1,
            'value' => 15,
            'description' => 'Se realizó una alianza con la Secretaría de Minas de la Gobernación de Cundinamarca lo que permitió realizar 11 asesorías técnicas, también se realizó acompañamiento a 4 títulos mineros para: recibo de áreas, verificación de obligaciones ambientales y fiscalización minera.
        Como complemento a las acciones de este objetivo se acompañaron orientaciones para obtención de Autorización Temporal - Alcaldía Guasca Cund. ANM. CORPOGUAVIO, y se desarrolló un Panel de expertos en Formalización Minera donde se contó con la participación de ANM, MinMinas, Areandina y Gobernación de Cundinamarca.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10650,
            'year' =>1,
            'value' => 1,
            'description' => 'Se generaron 53 Conceptos Técnicos producto de los títulos mineros visitados durante el año 2020.',
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
            'activity_id' => 10651,
            'year' =>1,
            'value' => 3,
            'description' => '• 10/09/2020 Visita de Gobernador Nicolás García - Para esta jornada se realizó un video en el cual se muestran los avances de la línea temática en el sector minero energético de la jurisdicción Guavio.
        • 26/08/2020 Riquezas minerales jurisdicción CORPOGUAVIO -Proyección en redes sociales Video
        • 29/12/2020 Gestión de Conocimiento una Prioridad de 2020 -Proyección en redes sociales Video',
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
            'activity_id' => 10652,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizó documento denominado “Diagnóstico de las particularidades del sector minero de la jurisdicción CORPOGUAVIO para el año 2020” el cual se mantendrá para consulta en el centro de documentación de CORPOGUAVIO y en la pagina WEB de la misma entidad.',
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
            'activity_id' => 10653,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10654,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10655,
            'year' =>1,
            'value' => 1,
            'description' => 'Instalación del SAT en el Municipio de Gachetá bajo el contrato No. 200-30.4-556 del 4 de noviembre de 2020',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10656,
            'year' =>1,
            'value' => 12,
            'description' => 'Ejecutado en el contrato No. 200-30.4-556 del 4 de noviembre de 2020',
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
            'activity_id' => 10657,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10658,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10659,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10660,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10661,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10662,
            'year' =>1,
            'value' => 8,
            'description' => 'Se atendieron con los 8 municipios la revisión de los documentos de PMGRD y EMRE y emitendo las observaciones pertinentes para su ajuste por parte de los CMGRD, además de la participación de la entidad en los CMGRD para la atención a problematicas en materia de Gestión del Riesgo de Desastres.',
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
            'activity_id' => 10663,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10664,
            'year' =>1,
            'value' => 95,
            'description' => 'Cumplimiento del indicador sobre la atención de 90 solicitudes radicadas en la presente vigencia.',
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
            'activity_id' => 10665,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10666,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizó la recopilación de información social y geográfica de los actores de la jurisdicción, determinando su papel en temas de mitigación y adaptacion al cambio climático, priorizando las zonas para la realización de intervenciones.',
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
            'activity_id' => 10667,
            'year' =>1,
            'value' => 50,
            'description' => 'De acuerdo con la priorización definida para las intervenciones comunitarias en temas de cambio climático, se desarrollaron talleres especialmente en temas REDD+.',
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
            'activity_id' => 10668,
            'year' =>1,
            'value' => 50,
            'description' => 'Se lleva a cabo el análisis histórico de la deforestación en los municipios de la jurisdicción, lo que permitió determinar el área potencial para el desarrollo de proyectos REDD+, priorizando los municipios de medina, Ubalá y Gachalá, ',
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
            'activity_id' => 10669,
            'year' =>1,
            'value' => 40,
            'description' => 'En la construcción del Documento de Proyecto de estrategias REDD+ (Reducción de Emisiones causadas por la Deforestación y la Degradación de los Bosques), se realiza una caracterización del territorio, haciendo énfasis en el comportamiento de los procesos de deforestación, sus causas y agentes y la proyección en la zona priorizada para el proyecto, a la vez que se define el estándar de certificacion bajo el cual se lleve a cabo la medición de bonos de carbono.',
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
            'activity_id' => 10670,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10671,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10672,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10673,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10674,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10675,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10676,
            'year' =>1,
            'value' => 100,
            'description' => 'Se participo en:
        * Nodo regional de cambio climático centro oriente andino
        *Plan regional integral de cambio climático
        *Planes sectoriales de cambio climático',
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
            'activity_id' => 10677,
            'year' =>1,
            'value' => 1,
            'description' => 'Se expidió la Resolución No. 1536 del 31 de diciembre de 2020 por medioa de la cual se establece el acotamiento de la ronda hídrica de la quebrada La Esperanza a la altura del casco urbano del municipio de Gachetá, desde la coordenada E: 1.049.907 m N: 1.024.374 m, hasta la coordenada E: 1.049.440 m N: 1.023.772 m, para una longitud aproximada de 900 m',
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
            'activity_id' => 10678,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10679,
            'year' =>1,
            'value' => 1,
            'description' => 'Se suscribió en conjunto con la CAR, la Resolución No. 1001 del 21 de diciembre de 2020 “Por medio de la cual se adopta el Plan de Ordenamiento del Recurso Hídrico - PORH para las unidades hidrográficas de nivel I embalse de Tominé y río Teusacá que hacen parte de la subzona hidrográfica río Bogotá”.',
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
            'activity_id' => 10680,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10681,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10682,
            'year' =>1,
            'value' => 1,
            'description' => 'Se adelantó la operación y mantenimiento de la red hidrométrica de CORPOGUAVIO',
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
            'activity_id' => 10683,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizó la actualización diaria del Sistema de Información del Recurso Hídrico -SIRH',
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
            'activity_id' => 10684,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizó la implementación del instrumento económico tasa por utilizacion de agua -TUA en la jurisdicción',
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
            'activity_id' => 10685,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10686,
            'year' =>1,
            'value' => 15,
            'description' => 'Se realizó la evaluación de los Programa de Uso Eficiente y Ahorro del Agua -PUEAA presentados por los usuarios',
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
            'activity_id' => 10687,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizó la adquisición de mas de 100 hectáreas de áreas de importancia estratégica en la jurisdicción',
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
            'activity_id' => 10688,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10689,
            'year' =>1,
            'value' => 0,
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
            'activity_id' => 10690,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10691,
            'year' =>1,
            'value' => 1,
            'description' => 'se apoyo al municipio de Junín, para lograr la implementación de una ruta selectiva, con el equipamiento de los elementos necesarios para logar la ruta de recolección de resIdUos orgánico, con  este equipamiento se entrego en su totalidad y se logro apoyar al Plan de Gestión de Residuos solidos PGIRS.',
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
            'activity_id' => 10692,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizo a los seguimeintos a las  acciones implementadas de saneamiento básico de los años 2017-2018-2019, con sus respectivo conceptos técnicos y informado los resultados a los municipios que fueron poyados en esas vigencias.',
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
            'activity_id' => 10693,
            'year' =>1,
            'value' => 8,
            'description' => 'se realizo el seguimiento a los 8 PGIRS, generaron los conceptos técnicos correspondientes, entregando al área jurídica para que se generara las determinaciones correspondientes. ',
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
            'activity_id' => 10694,
            'year' =>1,
            'value' => 8,
            'description' => 'se realizo el seguimiento a los 8 PSMVS , generaron los conceptos técnicos correspondientes, entregando al área jurídica para que se generara las determinaciones correspondientes. ',
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
            'activity_id' => 10695,
            'year' =>1,
            'value' => 1,
            'description' => 'para la vigencia 2020 se genero e implemento la Guía de manejo de residuos solidos domiciliarios, incluyendo los residuos COVI-19',
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
            'activity_id' => 10696,
            'year' =>1,
            'value' => 1,
            'description' => 'la medidas de manejo asociadas con  Saneamiento Básico, que se planificaron y se llevaron acabo en la vigencia 2020, se enfoco a el manejo de residuos solidos en zonas ribereñas de importancia turística del municipio de medina cundinamarca ',
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
            'activity_id' => 10697,
            'year' =>1,
            'value' => 1,
            'description' => 'se realizo la avualacio bajo concepto técnico N° 2186 del 30 de noviembre del 2020, generando como resultado el factor regional de 1, para cobro de tasa retributiva en la vigencia 2021 y fue acogido bajo acto administrativo el N°1444 del 16 de diciembre del 2020 y presentado ante el concejo directivo el día 18 de diciembre del 2021, de manera virtual.',
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
            'activity_id' => 10698,
            'year' =>1,
            'value' => 1,
            'description' => 'La subdirección de Gestión Ambiental de la Corporación generó la base de datos de tasa retributiva del año 2019 vigencia 2020, la cual incluye en total 59 usuarios objeto de cobro y que hacen parte del Acuerdo 024 de 2016, donde se generó concepto técnico SGA 332 2020, con la información obtenida acorde a la tabla N° 1, el cual con los cálculos realizados se obtuvo  la suma total de OCHENTA MILLONES SETECIENTOS CINCUENTA Y DOS MIL TRECIENTOS NOVENTA Y SIETE PESOS ($ 80.752.397) M/CTE',
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
            'activity_id' => 10699,
            'year' =>1,
            'value' => 20,
            'description' => 'Se generao la actulizacion del PGIRESPEL hasta el 20% logrando la fase diagnostica del docuemento.',
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
            'activity_id' => 10700,
            'year' =>1,
            'value' => 100,
            'description' => 'se implementaron 15 actividades, proyectadas en el plan de gestión integral de residuos peligrosos -PGIRESPEL',
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
            'activity_id' => 10701,
            'year' =>1,
            'value' => 100,
            'description' => 'Acorde a las solicitudes allegadas a la entidad se atendieron al 100% donde se logro enfocar a los usuarios en manejo de aguas residuales y residuos solidos ',
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
            'activity_id' => 10702,
            'year' =>1,
            'value' => 1,
            'description' => 'la subdirección y el esquipo técnico procedió a ralizar  informe basado en los historias de las vigencias anteriores y los reportes dados por los monitoreos de los usuarios, para evaluar los objetivos de la vigencia 2020.',
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
            'activity_id' => 10703,
            'year' =>1,
            'value' => 37,
            'description' => 'EL proyecto “RECUPERACIÓN DE ÁREAS DEGRADADAS EN LA CUENCA MEDIA DEL RIO GUAVIO EN LA JURISDICCIÓN DE
        CORPOGUAVIO – CUNDINAMARCA” con código BPIN 2019011000245 aprobado por el FCA se ejecuto mewdiante el CONTRATO DE OBRA  con  CONSORCIO RESTAURACIÓN CUENCAS CORPOGUAVIO con fecha de inicio MARZO 18 DE 2020, se realizó la intervención de 50 hectáreas en el modelo reforestación para la restauración.
        El Consorcio Restauración Ambiental Corpoguavio con Contrato de Obra No. 200-30.4-542 intervino  15 has en estrategias de restauracion',
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
            'activity_id' => 10704,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10705,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10706,
            'year' =>1,
            'value' => 6000,
            'description' => 'En el marco del  CONTRATO DE OBRA  CONSORCIO RESTAURACIÓN CUENCAS CORPOGUAVIO cuyo OBJETO: “RECUPERAR COBERTURA BOSCOSA EN LA PARTE MEDIA DE LA CUENCA DEL RÍO GUAVIO DE LA JURISDICCIÓN DE CORPOGUAVIO” con fecha de inicio MARZO 18 DE 2020 El contratista realizó  la construcción de 15 kilómetros de aislamiento
        El contratista Consorcio Restauración Ambiental Corpoguavio Contrato de Obra No. 200-30.4-542  ha desarrollado la construcción de 1150 metros de aislamiento',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia78 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10707,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10708,
            'year' =>1,
            'value' => 97,
            'description' => 'Se recibieron 130 solicitudes relacionadas con restauración las cuales se brindó respuesta mediante oficio en su totalidad mediante el sistema de correspondencia de la entidad, las solicitudes de los usuarios que requieren ser incluidos dentro de los proyectos de Restauración y Conservación se realizan visitas técnicas de evaluación',
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
            'activity_id' => 10709,
            'year' =>1,
            'value' => 100,
            'description' => 'Mediante los profesionales adscritos al mismo realizaron veintinueve (29) visitas técnicas en 29 predios ubicados en los municipios de la jurisdicción (Gachalá, Junín, Ubalá), donde se desarrollaron acciones de Restauración y Conservación acciones de seguimiento a los predios intervenidos en marco de la ejecución de los siguientes contratos ejecutados en años anteriores, para un total de 151.5 hectáreas con acciones de seguimiento.',
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
            'activity_id' => 10710,
            'year' =>1,
            'value' => 0,
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
            'activity_id' => 10711,
            'year' =>1,
            'value' => 2,
            'description' => 'Suscribiendo el contrato 517 de 2020 el cual se ejecutó interviniendo dos  predios en el municipio de Gachetá
        •construcción de diez (22 m2) de trinchos.
        • Establecer doscientos (250) árboles  
        • Establecer doscientos dos (202) esquejes de pasto vetiver 
        • Construir doscientos metros lineales (200 m) de cerca 
        • Construcción  (350 m) de zanjas de conducción.
        ',
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
            'activity_id' => 10712,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10713,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia85 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10714,
            'year' =>1,
            'value' => 1,
            'description' => 'Mediante el Acuerdo No. 14 del 18 de diciembre de 2020 del Consejo Directivo de CORPOGUAVIO se aprobó y adoptó el plan de manejo del Distrito Regional de Manejo Integrado – DRMI Chinchorro del municipio de Gama, con una extensión de 1.800,3 hectáreas que abarcan 80 predios, el cual contempla los componentes diagnóstico, ordenamiento y estratégico.
        Por otra parte, se realizó revisión y análisis de los estudios topográficos y documentos técnicos elaborados durante los años 2018 y 2019 para los predios propiedad de CORPOGUAVIO y que fueron declarados como área protegida.',
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
            'activity_id' => 10715,
            'year' =>1,
            'value' => 100,
            'description' => 'La Corporación por medio de gestores ambientales comunitarios distribuidos en los ocho municipios que componen la jurisdicción de la Corporación realizó acciones de monitoreo de los objetivos de conservación, así como control y vigilancia de las actividades que generan conflicto dentro de las áreas protegidas presentes en el territorio de CORPOGUAVIO.  Se realizaron mensualmente recorridos de control, seguimiento y labores de mantenimiento básico a senderos en las 31 áreas protegidas y Estrategias Complementarias de Conservación. 
        Adicionalmente, se desarrollaron talleres de sensibilización con entes territoriales y comunidad por medio de la identificación, priorización y caracterización de la población participante, planificación y realización de los talleres y entrega de material formativo en los procesos educativos. 
        En cuanto a la participación en los comités del Sistema Regional de Áreas protegidas - SIRAP Andes Nororientales se delegó a un profesional adscrito a la Subdirección de Gestión Ambiental línea temática Biodiversidad y Áreas Estratégicas para la representación de la Corporación ante el comité técnico quien atendió los requerimientos por parte de Parques Nacionales Naturales para el fortalecimiento del subsistema dentro de la jurisdicción.
        ',
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
            'activity_id' => 10716,
            'year' =>1,
            'value' => 1,
            'description' => '',
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
            'activity_id' => 10717,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10718,
            'year' =>1,
            'value' => 50,
            'description' => '',
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
            'activity_id' => 10719,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10720,
            'year' =>1,
            'value' => 0,
            'description' => '',
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
            'activity_id' => 10721,
            'year' =>1,
            'value' => 1,
            'description' => 'Se realizó en el informe de Actualización de fauna y flora vulnerable para la jurisdicción de CORPOGUAVIO, donde se destaca que de las 351 especies de flora registradas en el departamento de Cundinamarca, en el Sistema de Información Biológica de Colombia (SIB) se  obtuvieron 4590 datos, de los cuales 955 puntos se sobreponen con la jurisdicción de CORPOGUAVIO pertenecientes a 68 especies de flora con algún grado de vulnerabilidad; lo que implica un aumento notorio en el número de especies reportadas en el año 2016.
        En cuanto a fauna se tiene que respecto al inventario realizado en el año 2016, la evaluación elaborada en el marco del presente Plan de Acción contempla un aumento de 14 a 90 especies que presentan algún grado de vulnerabilidad de acuerdo a las fuentes consultadas (IUCN, CITES, Libros Rojos, Minambiente).
        Dentro de las especies más representativas o carismáticas se encuentran Quercus humboldtii, Cedrela odorata, Espeletia killipii, Lagothrix lagothricha lugens, Odocoileus virginianus, Vultur gryphus, Tremarctos ornatus, Leopardus tigrinus, Panthera onca, entre otros.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia93 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10722,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia94 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10723,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia95 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10724,
            'year' =>1,
            'value' => 2,
            'description' => 'Se adelantaron jornadas de manejo y control de las especies invasoras: Carpa común con 12 libras recolectadas, buchón de agua en el embalse del Guavio con 18.850 libras, retamo espinoso en el municipio de Guasca con 276.5 metros y caracol africano en el municipio de Ubalá y Medina con el manejo de 173 libras. Así mismo, se realizaron actividades lúdico pedagógicas sobre el reconocimiento de las especies invasoras identificadas en los municipios de la jurisdicción, con la comunidad de las inspecciones de Sueva, Claraval, Chuscales y vereda San Francisco del municipio de Junín y con el Batallón Energético Vial del municipio de Ubalá A.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia96 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10725,
            'year' =>1,
            'value' => 2,
            'description' => 'CORPOGUAVIO, analizando los Planes de conservación de Águila Crestada, Oso Andino, Mono Churuco, Félidos, Roble, Cedro, Palma de cera y frailejones; identificando en cada uno de ellos las acciones propuestas para la protección a corto, mediano y largo plazo de estas especies. Una vez realizada esta revisión, se desarrollaron las metodologías a implementar por parte de los profesionales y los Gestores Ambientales Comunitarios y se generaron las estrategias necesarias con otras áreas de la entidad que manejan diferentes componentes que apuntan a la conservación de especies, tales como Gestión forestal y Educación ambiental.
        Con el fin de fortalecer la red de monitoreo adelantó el contrato de prestación de suministros No.200-30-4-514 del 24 de septiembre de 2020 con el cual se adquirieron equipos de seguimiento, manejo e investigación de especies silvestres con algún grado de amenaza, tales como cámaras trampa, collar de monitoreo satelital para oso andino, GPS, baterías, semilleros, bolsas, tierra, desjarretadora, entre otros elementos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia97 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10726,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia98 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10727,
            'year' =>1,
            'value' => 100,
            'description' => 'El cumplimiento de la meta se genera  a traves de la ejecución del Convenio de Alianza Estratégica No. 200-30.4-169 de 20 de febrero de 2019, suscrita entre WWF Colombia y CORPOGUAVIO, el cual tiene por objeto “Aunar esfuerzos administrativos y técnicos con WORLD WILDLIFE FUND INC - WWF COLOMBIA, para la gestión y conservación de los recursos naturales, ecosistemas estratégicos y áreas protegidas en la jurisdicción de la Corporación Autónoma Regional del Guavio - CORPOGUAVIO, en el marco del proyecto GEF: Consolidación del Sistema Nacional de Áreas Protegidas (SINAP) a Nivel Nacional y Regional”, donde se aprobó plan de trabajo para la implementación del Plan de Manejo de la Reserva Forestal Protectora Regional - RFPR Cuenca Alta del Río Zaque. 
        Para dicha implementación se priorizó el proyecto “Conservación y monitoreo de la biodiversidad” contemplado en el programa “Administración y Manejo”, con el cual se busca ejecutar la actividad “Seleccionar un grupo de especies indicadoras del estado de conservación de la RFPR Cuenca Alta del Río Zaque, incluyendo especies florísticas amenazadas”. Para su cumplimiento se destinó una inversión para la adquisición de equipos de monitoreo.
        Adicionalmente se priorizaron los proyectos Ordenamiento predial y fomento a prácticas de producción sostenible, Incentivos a la conservación y Alinderamiento y amojomamiento del Plan de Manejo adoptado para la RFPR Cuenca Alta del Río Zaque. 
        Para su ejecución, WWF Colombia como agencia ejecutora contrató seis profesionales para el cumplimiento de las acciones anteriormente citadas a través de jornadas de campo en los municipios de Gachetá y Junín y recopilación de información para la actualización del plan de manejo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia99 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10728,
            'year' =>1,
            'value' => 100,
            'description' => 'Se adelantó el seguimiento, monitoreo, evaluación y análisis de los humedales presentes en la jurisdicción, con el apoyo de los Gestores Ambientales Comunitarios en sus recorridos de campo, los cuales diligenciaron formatos de evaluación, recopilando parámetros claves como: ubicación, altitud, tipo  y régimen del humedal; profundidad promedio; biota asociada, la cual comprende especies de fauna y flora con algún grado de amenaza, invasoras, introducidas y nativas; características físicas del cuerpo de agua de las tres zonas del humedal (espejo del agua, zonas vadosas o pantanosas y área de retiro); presiones y afectaciones de origen antrópico, natural y servicios ecosistémicos (valores ambientales, sociales y económicos asociados a los humedales). Posteriormente, la información obtenida para cada uno de los cuerpos de agua se organizó de la siguiente manera: formato de campo o de evaluación, track y waypoints, e informe complementario de datos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia100 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10729,
            'year' =>1,
            'value' => 1500,
            'description' => 'El equipo de profesionales emitió un total de 48 conceptos técnicos correspondientes a 69 predios, de los municipios de Gachetá, Guasca y Medina, como requisito para el descuento de impuesto predial, lo cual corresponde a 926,4922 hectáreas en estado de conservación. Así mismo, a través del Programa de Pago por Servicios Ambientales en los municipios de Fómeque, Medina y Ubalá de la jurisdicción de CORPOGUAVIO, se suscribieron 25 acuerdos individuales en 30 predios, para un proceso de conservación de 1548 hectáreas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia101 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10730,
            'year' =>1,
            'value' => 40,
            'description' => 'Se construye una propuesta piloto de monitoreo comunitario de procesos de deforestación en el municipio de Medina, la cual es concertada con la comunidad para ser implementada en las siguientes vigencias.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia102 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10731,
            'year' =>1,
            'value' => 50,
            'description' => 'Se lleva a cabo la determinación de causas y agentes de los procesos de deforestación en la jurisdicción y se identifica, mediante procesos de geoprocesamiento, las zonas fragmentadas de la jurisdicción, procesos que serán verificados en la siguiente vigencia.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia103 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10732,
            'year' =>1,
            'value' => 25,
            'description' => 'Se recopila y organiza la información a ser cargada en el aplicativo SNIF, modulo restauración, de las actividades de reforestación ejecutadas por la corporación. Se recibe asesoría y acompañamiento del IDEAM.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia104 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10733,
            'year' =>1,
            'value' => 50,
            'description' => 'Se lleva a cabo un proceso de determinación de uso del suelo de vocación forestal, así como la relación con los diferentes instrumentos de planificación y ordenación del territorio, para determinar posibles conflicos de uso y las alternativas de manejo.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia105 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10734,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia106 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10735,
            'year' =>1,
            'value' => 20,
            'description' => 'Se realiza la determinación de especies potenciales para seguimiento a su fenología, realizando la caracterización de sitio y georeferenciación de individuos en los municipios de la jurisdicción.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia107 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10736,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realiza el proceso de valoración del servicio de provisión hídrica del humedal Las Pavas en el municipio de Gachetá, principal fuente abastecedora del casco urbano del municipio, proceso desarrollado mediante la metodología de precios hedónicos, luego de haber realizado un análisis de los bienes y servicios ofertados por ls principales complejos de humedales de la jurisdicción.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia108 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10737,
            'year' =>1,
            'value' => 25,
            'description' => 'Se realiza la identificación de las medidas de restauración implementadas por la corporación, priorizando el municipio de Ubalá para la evaluación de la efectividad de las estrategias implementadas, encontrando una necesidad de mejorar los procesos asociados a la priorización de predios y sobre todo, el seguimiento al establecimiento de las plantaciones protectoras.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia109 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10738,
            'year' =>1,
            'value' => 25,
            'description' => 'Se lleva a cabo la determinación de los focos de actuación en el sector forestal de cada uno de los municipios de la jurisdicción, identificando los grupos de interés para la realización de abordaje social.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia110 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10739,
            'year' =>1,
            'value' => 15,
            'description' => 'Se realiza abordaje con las oficinas de atención al usuario de cada uno de los municipios de la jurisdicción, empresas y centros de transformación y estaciones de policía, capacitando y asesorando en trámites forestales, así como en el reconocimiento de funciones y cambios normativos.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia111 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10740,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia112 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10741,
            'year' =>1,
            'value' => 2,
            'description' => 'Para el cumplimiento del indicador se establecieron los contratos 474, 450, 515 y 451 de 2020, mediante los cuales se apoyaron actividades relacionadas con la implememntación de beneficiaderos para el cacao, modelos agroecologicos del friol, sacha inchi y tomate de guiso y se realizó el lanzamiento de la estrategia digital de negocios verdes.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia113 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10742,
            'year' =>1,
            'value' => 8,
            'description' => 'Para el cumplimiento del indicador se contrato el equipo técnico al interior de la entidad para realizar el proceso de identificación de los siguientes negocios verdes; Finca agroturistica el portal, Reserva el Zoque, Finca Suasie, Vino artesanal del paramo, Huertos sancatiro, Apiario los nogales, Posada rural Canta claro y Setas la villa.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia114 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10743,
            'year' =>1,
            'value' => 40,
            'description' => 'Para el cumplimiento del indicador se envió el reporte consolidado a la oficina de Negocios verdes del MADS en el que se presentaron soportes del proceso de verificación de 40 negocios verdes vinculados a la ventanilla NV, dicho proceso fue apoyado por el equipo tecnico contratado por la entidad. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia115 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10744,
            'year' =>1,
            'value' => 1,
            'description' => 'Para el cumplimiento del presente indicador se celebró el Contrato de prestación de servicios profesionales No. 220- 30.4-380 del 13 de julio de 2020, establecido entre la corporación y la Universidad Libre de Colombia, en el que se certificaron 93 empresarios, emprendedores y aliados estratégicos de la ventanilla de negocios verdes de los 8 municipios de la jurisdicción  en el Diplomado virtual – “Proyecciones de crecimiento empresarial para los negocios verdes”.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia116 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10745,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia117 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10746,
            'year' =>1,
            'value' => 2,
            'description' => 'Para el cumplimiento del presente indicador se establecieron los contratos de mínima cuantía 200-30.4-541 y 200-30.4-544 de 2020 en los que se apoyó la realización en el municipio de Fómeque de la segunda feria de negocios verdes “Origen Guavio” en la que participaron 34 emprendimientos de manera presencial y 50 a través de las plataformas digitales corporativas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia118 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10747,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia119 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10748,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia120 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10749,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia121 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10750,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia122 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10751,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia123 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10752,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia124 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10753,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia125 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10754,
            'year' =>1,
            'value' => 4,
            'description' => 'Durante la vigencia se implementaron las siguientes estrategias: 
        • Se construyó la estrategia de aula ambiental cuyo objetivo es la apropiación de valores ambientales y el aprendizaje en varios escenarios a través de diferentes herramientas pedagógicas.
        • Se desarrollaron talleres Lúdico - Pedagógicos con tres grupos focales (fuerzas militares, comunidad educativa y jóvenes).
        • Se adelantó proceso de formación en metodología WET con jóvenes de los municipios de Gachalá, Junín, Gachetá y Guasca.
        • Se elaboraron y publicaron en redes sociales actividades con teatro de títeres, al igual que se realizó la presentación de 2 obras de manera presencial.
        • Se realizó la implementación de algunas de las pruebas Yincana.
        • En la página web se cuenta con un espacio del Rincón Infantil en el que se realizaron publicaciones, al igual que se suscribió un contrato para su actualización y fortalecimiento el cual se encuentra en ejecución. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia126 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10755,
            'year' =>1,
            'value' => 8,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia127 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10756,
            'year' =>1,
            'value' => 1,
            'description' => 'Durante la vigencia se desarrollaron 3 PROCEDAS los cuales se relacionan a continuación: 
        *Educación Biológica para la conservación de los recursos naturales en la vereda San Pedro Guajaray en el municipio de Medina. 
        *Proyecto para la prevención, control y manejo del caracol gigante africano (achatina fulica) en las inspecciones de Mámbita y San Pedro de Jagua del municipio de Ubalá, el cual se encuentra en ejecución.
        *Propuesta de educación ambiental para promover el turismo rural comunitario en la Reserva Natural Tolima en la vereda Sinaí del municipio de Gachalá, el cual se encuentra en ejecución.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia128 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10757,
            'year' =>1,
            'value' => 15,
            'description' => 'Para el periodo en ejecución se suscribió acta de compromiso y realizó acompañamiento en el fortalecimiento de los documentos PRAE de 15 instituciones educativas presentes en los municipios de la jurisdicción al igual que, los cuales se relacionan a continuación: 
        • Instituciones Educativas San Lorenzo, IPEBI y Monseñor Agustín Gutiérrez de municipio de Fómeque.
        • Instituciones Educativas Baldomero Sanín Cano, Bocademonte y Murca del municipio de Gachalá.
        • Institución Educativa Escuela Normal Superior del municipio de Gachetá.
        • Institución Educativa Martín Romero del municipio de Gama.
        • Instituciones educativas de Mesa de Reyes, Alonso Ronquillo, Los Alpes, San Pedro de Guajaray y Gazatavena del municipio de Medina. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia129 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10758,
            'year' =>1,
            'value' => 6,
            'description' => 'Escolares de las 15 instituciones educativas priorizadas, se realizó acompañamiento técnico y seguimiento a la implementación del PRAE para lo cual se desarrollaron actividades desde casa por la comunidad educativa. De igual manera se suscribió un contrato para la adquisición de elementos e insumos necesarios para el fortalecimiento de los PRAE concertados previamente con los rectores y docentes, de los cuales fueron entregados a 6 Instituciones Educativas debido al periodo de vacaciones. Los faltantes serán entregados en el primer trimestre de 2021. 
        
        Se suscribió un contrato de herramientas digitales para el fortalecimiento de los PRAE el cual se encuentra en ejecución',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia130 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10759,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia131 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10760,
            'year' =>1,
            'value' => 10,
            'description' => 'Se estructuró la metodología para cada una de las campañas que promueven la cultura y la conservación, enfocadas a las siguientes temáticas: Recurso Hídrico, Biodiversidad, Residuos Sólidos y Cambio y Variabilidad climática; se dio inicio a la implementación de las mismas y se realizó contrato de suministros para la adquisición de elementos y material pedagógico. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia132 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10761,
            'year' =>1,
            'value' => 2,
            'description' => 'Durante el periodo se adelantó la contratación del personal requerido, se diseñó una estrategia para el posicionamiento institucional el cual cuenta con un componente de inclusión con el objetivo de propiciar escenarios de participación y reconocimiento institucional en el quehacer institucional permitiendo la integración de las Instituciones y comunidades, presentes en la jurisdicción. 
        
        La estrategia se implementó en los municipios de la jurisdicción y se dirigió a población diversamente hábil, jóvenes, personerías municipales, representantes de veedurías ciudadanas, docentes, comunidad indígena, batallón de Ubalá y comunidad en general.
         
        De igual manera, en la página web institucional de manera permanente se presentan las actividades y gestión que adelanta la Entidad. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia133 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10762,
            'year' =>1,
            'value' => 3,
            'description' => 'Se adelantó la contratación de profesionales del área social quienes construyeron e iniciaron la implementación de la estrategia pedagógica para socializar a las comunidades los mecanismos de participación ciudadana en los 8 municipios de la jurisdicción, para lo cual se realizó acercamiento institucional con las personerías municipales con el fin de articular junto con la Defensoría del Pueblo y los Derechos Colectivos el proceso de fortalecimiento de las veedurías de cada municipio. 
        De igual manera se coordinó la agenda, la estrategia de convocatoria, publicidad y logística para el desarrollo del Diálogo Social Virtual denominado “Construyendo espacios participativos en el contexto ambiental del territorio” espacio de participación solicitado por la veeduría del Río Bogotá. 
        Teniendo en cuenta que en la página web se encuentra un subsitio para mecanismos de participación, se construyeron los lineamientos para la actualización de información suscribiéndose un contrato de herramientas digitales, el cual se encuentra en ejecución.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia134 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10763,
            'year' =>1,
            'value' => 2,
            'description' => 'En la presente vigencia se realizó la Audiencia Pública virtual para la presentación del Plan de Acción 2020 – 2023 “CORPOGUAVIO Somos Todos: Vida – Confianza - Desarrollo”, para lo cual se realizaron 32 talleres para la formulación del Plan de Acción en los 8 municipios de la jurisdicción en los que participaron diferentes actores sociales e institucionales. Una vez aprobado el PAI se presentó en la página web Institucional y redes sociales cada una de las líneas temáticas a través de un video donde los líderes de manera concreta socializaron las acciones que se adelantarán en el marco de cada uno de los proyectos y programas para el cumplimiento del mismo.
        
        De igual manera se construyó la estrategia de socialización del Plan de Acción Cuatrienal e inició su implementación con jóvenes del municipio de Gachalá, las personerías y representantes de las veedurías ciudadanas de los 8 municipios de la jurisdicción; y se coordinó la agenda y desarrollo del Diálogo Social Virtual denominado “Construyendo espacios participativos en el contexto ambiental del territorio” espacio de participación solicitado por la veeduría del Río Bogotá. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia135 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10764,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia136 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10765,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia137 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10766,
            'year' =>1,
            'value' => 20,
            'description' => 'Se realizo el levantamiento de la Información de los requisitos mininos exigidos por (MINTIC) en cuanto infraestructura y seguridad para le restructuración del cuarto de servidores
        
        https://drive.google.com/drive/folders/10ayJem9virQ-LonUD31X-9PJuD4geN4b?usp=sharing',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia138 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10767,
            'year' =>1,
            'value' => 100,
            'description' => 'Se brindo soporte a toda la infraestructura tecnológica con que cuenta la entidad (mantenimiento preventivo y correctivo a software y hardware según corresponda, aplicativos, Red de datos, Red de Internet, Servidores, etc.) 
        
        https://docs.google.com/spreadsheets/d/1eIoi4YpAEOghb8QhWfUR3MftJdGmlYPqc0kVoPQAeIg/edit#gid=729463922  ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia139 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10768,
            'year' =>1,
            'value' => 100,
            'description' => 'Este servicio se viene realizando bajo el contrato de prestación de servicios No. 200-30.4-470 del 20 de agosto de 2020',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia140 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10769,
            'year' =>1,
            'value' => 100,
            'description' => 'De los diferentes aplicativos con que cuenta la entidad, se  desarrollo la actualización de los mismos, bien sea en renovación de licenciamiento, actualización de Software y soporte a distancia de dos de ellos. A la fecha se tiene contratado y en ejecución el licenciamiento de PCTG, ANTIVIRUS, HOSTING y FORTINET.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia141 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10770,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizó la actualización del plan de renovación de equipos para la vigencia del 2021, este plan se puede evidenciar en el link https://drive.google.com/file/d/1j30ZArTD-zsQ2xvAznGJxnaMoLECAFLe/view?usp=sharing ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia142 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10771,
            'year' =>1,
            'value' => 71,
            'description' => 'Se realizo la contratación de suministros bajo el contrato No 200-30.4-368,  los elementos adquiridos se pueden verificar en el siguiente link 
        https://drive.google.com/file/d/1rnPtb6x5NlQLu0GS5ojqb8PSyEqffrtR/view?usp=sharing ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia143 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10772,
            'year' =>1,
            'value' => 29,
            'description' => 'Se realizo la elaboracion de los estudios previos, pero estamos a la espera que el proovedor envie la factura para realizar la contreatacion ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia144 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10773,
            'year' =>1,
            'value' => 50,
            'description' => 'Mediante la ejecución de las actividades del equipo contratado (Ctos. de prestación de servicios profesionales 200-30.4-259 de 2020 y 200-30.4-283 de 2020.) a la fecha se ha realizado un 50% de avance',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia145 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10774,
            'year' =>1,
            'value' => 1,
            'description' => 'Se desarrollo la actualización de los diferentes planes pertenecientes al decreto 612, incorporando diferentes actividades que se tienen que realizar en la vigencia 2021 estos planes actualizados se pueden verificar por medio del siguiente link.
        https://drive.google.com/drive/folders/1e0VEjEUKwFqcd_dsGs5LQFnoGWDWJCw7?usp=sharing ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia146 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10775,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia147 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10776,
            'year' =>1,
            'value' => 12,
            'description' => 'Para esta meta se realizó el proceso contractual para la difusión en las emisoras locales que siempre han apoyado la gestión comunicativa de la entidad y se produjeron nuevas cuñas y mensajes ambientales para el nuevo programa de radio institucional “Vida al Aire, donde todos somos protagonistas”:
        
        Farallones  estéreo 106.4 del municipio de Gachalá
        Chingaza FM estéreo del municipio de Fómeque
        Ubalá 107.8 estéreo del municipio de Ubalá
        Junín 104.6 estero del municipio de Junín
        Además de las 43 emisoras que hacen parte de RECCO la red de emisoras Comunitarias del Departamento.
        Y replicamos el programa a través de la emisora del departamento “EL DORADO RADIO”, llegando a diciembre 31 con la emisión de 12 programas. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia148 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10777,
            'year' =>1,
            'value' => 150,
            'description' => 'En este sentido, esta meta durante la vigencia 2020 resaltó la importancia de los sistemas multimedia, consistentes en la integración de varios medios: imagen, sonido, texto, gráficos, tratados en imagen fija o en movimiento. La entidad produjo 235 audiovisuales, entre los que se encuentran animaciones, video clips, testimonios sonovisos y entrevistas, superando ampliamente, la meta planteada, debido a la situación bien particular por la que atraviesa el mundo y nuestro país, debido a la pandemia por COVID-19, lo que influyó en que este tipo de piezas informativas, fueran tan necesarias y casi que las unicas para llegar a la población y nuestros grupos de interes (virtualidad). ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia149 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10778,
            'year' =>1,
            'value' => 500,
            'description' => 'En esta meta durante el año 2020 avanzamos en la consolidación de nuestros medios digitales: sitio web, página de Facebook, canal de YouTube, Twitter e Instagram, además de los boletines electrónicos, pasando del cuarto al tercer lugar dentro del sector, con un promedio mayor de alcance de nuestras publicaciones con respecto a otras entidades que poseen un mayor número de seguidores. Cumpliendo ampliamente con el objetivo y número planteado.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia150 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10779,
            'year' =>1,
            'value' => 100,
            'description' => 'A través de la implementación al 100% del Plan se logró, la transversalidad de la divulgación con todas las áreas de la Corporación, sus programas, proyectos, servicios e iniciativas las cuales fueron apoyadas en las actividades que permitian la estructuración, desarrollo, implementación y seguimiento de los procesos derivados de cada una.
        
        Por otra parte dentro de la implementación del Plan Estrategico de Comunicaciones se adquirieron los elementos necesarios para el posicionamiento de la marca, los cuales fueron recibidos en su totalidad. ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia151 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10780,
            'year' =>1,
            'value' => 94,
            'description' => 'Durante la vigencia se adelantó el proceso de estructuración de la información geográfica, la cual consistió en la organización, depuración, actualización, transformación y migración de información para los diferentes estudios adelantados por la Corporación y que cuentan con insumos geográficos y cartográficos. La centralización de la Información, que corresponde a la migración de la información geográfica desde los ordenadores del SIG, al servidor SIG y se se adelantaron ejercicios de operatividad que consistió en interactuar con las herramientas de ArcGIS, frente a las diferentes coberturas que se encuentran centralizadas en el servidor SIG.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia152 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10781,
            'year' =>1,
            'value' => 100,
            'description' => 'Durante la vigencia se adelantó conjuntamente la configuración de diferentes herramientas, para la optimización de servicios del Visor Geográfico mediante la actualización del Web app Builder y la publicación de coberturas . Así mismo se creó el  Portal Geográfico de la Corporación mediante la plataforma Portal for ArcGis, la cual permitió configurar las herramientas  Experience Builder , la creación de ArcGis Dashboard y la implementación del Aplicativo Survey123 entre otros',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia153 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10782,
            'year' =>1,
            'value' => 100,
            'description' => 'Se suscribió el contrato de Prestación de Servicios N° 200.30.4.383 del 14 de Julio de 2020, orden de compra 51937 con ESRI Colombia, como representantes exclusivos de la casa matriz ESRI. Mediante dicho contrato se adquirieron las licencias de ArcGis en su versión 10.8.1 esenciales en los procesos de publicación y producción de información Geográfica; ArcGis Server Basic a ArcGis Server Estándar (ArcGIS Enterprise Standard (Windows) Up to Four Cores Upgrade from), los mantenimientos a su última versión de dos (2) licencias ArcGIS for Desktop Standard Concurrentes (ArcGIS for Desktop Standard Concurrent Primary and Secondary Mainten), Mantenimiento a su última versión de la licencia ArcGis Server (ArcGIS for Server Enterprise Basic Up 4 Cores Mainten), mantenimiento a su última versión de ocho (8) licencias de ArcGis for Desktop Basic single.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia154 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10783,
            'year' =>1,
            'value' => 15,
            'description' => 'Se adelantó la entrega oficial de licencias ArcGis for desktop basicen su versión 10.8.1 a los Municipios de Guasca, Fómeque, Gachetá, Medina, Junín, Ubalá, Gama y Gachalá mediante ACTA DE ENTREGA  suscrita entre Corpoguavio y cada uno de los Municipios de la Jurisdicción. Conforme al cronograma de Asistencia Técnica elaborado y aprobado, se adelantaron las visitas de seguimiento a cada una de las secretarías de planeación de los Municipios de la Jurisdicción de Corpoguavio, mediante la cual se realizó la instalación de la nueva licencia de ArcGis, se aclararon inquietudes y se suministró nueva información geográfica en formato shapefile base y temática que respecta al área de su Jurisdicción Municipal.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia155 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10784,
            'year' =>1,
            'value' => 100,
            'description' => 'Durante la vigencia se atendieron el total de solicitudes externas presentadas a la oficina SIG de la Corporación mediante correo electrónico y SIDCOR y que respectan a la entrega o análisis de la información geográfica y cartográfica. Así mismo se atendió el total de solicitudes internas presentadas mediante el formato “Solicitud Interna de Información Geográfica y Cartográfica”. Se asesoró y acompaño en las solicitudes de análisis de la información Geográfica, las cuales se relacionan en el formato “Consultas SIG”.
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia156 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10785,
            'year' =>1,
            'value' => 100,
            'description' => 'Se adelantó la actualización de registros de profesionales encargados en el reporte a entidades administradoras de los Subsistemas del SIAC, de esta forma se notificó a cada uno de estos profesionales para el diligenciamiento de la matriz de reportes emitidos durante la vigencia, la cual se consolidó y se envió a la subdirección de planeación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia157 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10786,
            'year' =>1,
            'value' => 50,
            'description' => 'Se cumplio la meta al 100 % dando cumpimiento a las diferentes actividades propuestas dentro de la linea tematica',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia158 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10787,
            'year' =>1,
            'value' => 10,
            'description' => 'Se entrego el porcentaje del indicador al 100% dando cumplimiento a tareas requeridas dentro del Plan de Accion del Modelo Integrado de Gestion y Control ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia159 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10788,
            'year' =>1,
            'value' => 0,
            'description' => '',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia160 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10789,
            'year' =>1,
            'value' => 95,
            'description' => 'Ejecución del Producto equivalente al 90%. Para la vigencia 2020 de acuerdo con el PAA
        aprobado para la vigencia 2020 en Comité de Coordinación del Sistema de Control Interno
        a través del desarrollo de los 5 roles de la Oficina de Control Interno se cumplieron 67 de las
        70 actividades planteadas.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia161 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10790,
            'year' =>1,
            'value' => 50,
            'description' => 'Los productos entregados de acuerdo a la planificación fueron:
        • Papeles de Trabajo: P/T Planeación de Auditorias Basada en Riesgos, Adición de
        Componente de Riesgos en el Formato de Informe de Auditoria, Programa de
        Trabajo, Análisis de Recursos vs Plan Anual de Auditorias y Universo de Auditorias.
        • Administración de Riesgos y Auditoria Basada en Riesgos: Incorporación del
        componente riesgos de Auditoria dentro de los Informes de Auditoria.\
        • Mapas de Aseguramiento y/o mejora: Se realizó la primera versión de Mapa de
        Aseguramiento basado en el Marco Internacional para la Práctica de la Auditoría
        Interna.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia162 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10791,
            'year' =>1,
            'value' => 100,
            'description' => 'El grupo de trabajo de la Oficina de Gestión Documental – Archivo Central e Histórico realizó
        los procesos y aplicación de criterios archivísticos',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia163 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10792,
            'year' =>1,
            'value' => 100,
            'description' => 'El plan de trabajo anual se cumple en un 92%.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia164 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10793,
            'year' =>1,
            'value' => 100,
            'description' => 'La Subdirección Administrativa y Financiera en el mes de Julio de 2020 genero la Tasa
        por Uso y la Tasa retributiva del periodo 01 de enero de 2019 al 31 de diciembre de 2019,
        con fecha de registro 29 de Julio de 2020 y fecha de vencimiento 30 de noviembre de
        2020 y enviada a toda la jurisdicción de la Corporación Autónoma Regional del Guavio
        CORPOGUAVIO, para su entrega por medio de los notificadores y las Oficinas de
        enlaces.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia165 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10794,
            'year' =>1,
            'value' => 100,
            'description' => 'Se brindó apoyo en la expedición de Certificados de Disponibilidad Presupuestal y
        Registros Presupuestales al área Presupuestal, durante  la
        vigencia 2020. Durante el Periodo de 01/01/2020 al 31/12/2020, se expidieron 864
        Certificados de Disponibilidad Presupuestal, los cuales corresponden a la respectiva
        vigencia fiscal.
        documentación solicitada:',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia166 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10795,
            'year' =>1,
            'value' => 860,
            'description' => 'Se realizan un total de 30 operativos, 800 recorridos y 30 talleres casa a casa de la estrategia al control del trafico ilegal de especímenes de la diversidad biológica
        ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia167 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10796,
            'year' =>1,
            'value' => 100,
            'description' => ' Se evalúan un total de 75 aprovechamientos forestales, 98 concesiones de aguas superficiales, 8 permisos de vertimiento, 12 ocupaciones de cauce, 1 permiso de emisiones atmosféricas, 4 registros de libros de operaciones y 2 licencias ambientales',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia168 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10797,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizan las visitas técnicas de seguimiento a 100 aprovechamientos forestales, 288 concesiones de aguas superficiales, 8 concesiones de aguas subterráneas, 18 permisos de vertimiento, 81 ocupaciones de cauce, 25 licencias ambientales , 4 planes de manejo, restauración y recuperación – PMRRA, 6 permisos de emisiones atmosféricas y 9 planes de manejo ambiental - PMA',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia169 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10798,
            'year' =>1,
            'value' => 96,
            'description' => 'Se realizan un total de 326 conceptos tecnicos de los 340 allegados en la vigencia 2020, el 4,11% restante corresponde a solicitudes allgeadas a la entidad despues del 20 de diciembre de 2020, por lo que estan en tiempos para su atención',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia170 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10799,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizan 71 conceptos técnicos de tasaciones, 77 conceptos técnicos de seguimiento compensaciones, visita a pruebas, indagaciones preliminares, inspecciones oculares y 25 conceptos técnicos de visitas sociales ',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia171 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10800,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizan un total de 314 conceptos tecnicos en atencion a quejas de carácter ambiental',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia172 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10801,
            'year' =>1,
            'value' => 100,
            'description' => 'Se realizan conceptos técnicos de subsectores productivos distribuidos así: 7 botaderos a cielo abierto - BACA, 2 planta de beneficio animal – PBA, 45 ebanisterías, 14 estaciones de servicio, 71 de otros subsectores y 103 de generadores de residuos hospitalarios y similares - RHYS',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia173 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10802,
            'year' =>1,
            'value' => 100,
            'description' => 'Es así como en el área de permisivo se encuentran contenidos los permisos de Recurso
        Hídrico, Licencias Ambientales, Fauna – Flora, inspección, vigilancia y control.
        Cada año el Comité Directivo de la Entidad, aprueba los planes de seguimiento de estas
        áreas con la finalidad de dar cumplimiento a lo establecido en el PAI, el cual es aprobado de
        forma anual.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia174 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10803,
            'year' =>1,
            'value' => 100,
            'description' => 'Teniendo en cuenta la aprobación del Plan de Acción Institucional, Corpoguavio “Somos
        Todos Vida, Confianza y Desarrollo” 2020– 2023, se estableció la línea temática Jurídica;
        dentro del proyecto Misional, se encuentran las actividades de emitir actos administrativos
        Permisivos y sancionatorios, así como realizar los procesos de cobro coactivo:',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia175 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10804,
            'year' =>1,
            'value' => 100,
            'description' => 'Actualmente se cuenta con 411 procesos administrativos de cobro
        coactivo',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia176 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10805,
            'year' =>1,
            'value' => 100,
            'description' => 'Durante la Vigencia 2020 se realizo revisión, analisis y seguimiento y finalización acertiva de los contratos suscritos con la Corporación.',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia177 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 10806,
            'year' =>1,
            'value' => 95,
            'description' => 'La Entidad ha brindando respuesta a cada una de las peticiones y/o solicitudes presentadas por los grupos de interes',
            'type' => 'null',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '2020-12-31',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia178 = DB::getPdo()->lastInsertId();
                
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
