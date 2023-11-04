<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AvancesCorpomojana2022 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 12079,
            'year' =>3,
            'value' => 0,
            'description' => 'Este proyecto no fue aprobado por el Ministerio, la Corporación procederá a solicitar el ajuste de la meta.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia1 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12080,
            'year' =>3,
            'value' => 0,
            'description' => 'Este proyecto no fue aprobado por el Ministerio, la Corporación procederá a solicitar el ajuste de la meta.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia2 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12081,
            'year' =>3,
            'value' => 0.6,
            'description' => 'Conservación de la especie del cocodrylus acutus',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CPSAG-002-2022,CPSAG-004-2022,CPSAG-005-2022, PSA-001-2022',
            'state_id' => 1201,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia3 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12082,
            'year' =>3,
            'value' => 0,
            'description' => 'Este proyecto no fue aprobado por el Ministerio, la Corporación procederá a solicitar el ajuste de la meta.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia4 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12083,
            'year' =>3,
            'value' => 0,
            'description' => 'Este proyecto no fue aprobado por el Ministerio, la Corporación procederá a solicitar el ajuste de la meta.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia5 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12084,
            'year' =>3,
            'value' => 0,
            'description' => 'Trámite de incripción ante el RUNAP de EL Zapal El Aguacate, ubicado en Guaranda, Sucre, jurisdicción de Corpomojana, como Distrito de Manejo Integrado - DMI.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia6 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14221,
            'year' =>3,
            'value' => 0,
            'description' => ' Se firmó el acta de inicio 22 de junio de 2022',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'LP-002-2022',
            'state_id' => 1201,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia7 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15292,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia8 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15293,
            'year' =>3,
            'value' => 0,
            'description' => ' Se firmó el acta de inicio 22 de junio de 2022',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'LP-002-2022',
            'state_id' => 1201,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia9 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15801,
            'year' =>3,
            'value' => 115,
            'description' => 'Se ha cumplido con la entrega de insumos y herramientas para las labores de aislamiento, construcción e instalación de vallas, contratación del personal requerido para brindar la asistencia técnica.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'LP-001-2022',
            'state_id' => 1201,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia10 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15802,
            'year' =>3,
            'value' => 1,
            'description' => 'Se ha cumplido con la entrega de insumos y herramientas para las labores de aislamiento, construcción e instalación de vallas, contratación del personal requerido para brindar la asistencia técnica.',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'LP-001-2022',
            'state_id' => 1201,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia11 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15803,
            'year' =>3,
            'value' => 0,
            'description' => 'Le fueron asignados los recursos mediante resolución 435 del 20 de abril de 2022. Del cual le fue solicitado al ministerio la modificación de POA en tal sentido que las áreas donde se pretende ejecutar el proyecto se encuentran inundadas.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia12 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15804,
            'year' =>3,
            'value' => 0,
            'description' => 'Le fueron asignados los recursos mediante resolución 435 del 20 de abril de 2022. Del cual le fue solicitado al ministerio la modificación de POA en tal sentido que las áreas donde se pretende ejecutar el proyecto se encuentran inundadas.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia13 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15805,
            'year' =>3,
            'value' => 0,
            'description' => 'se encuentra en proceso de contratación de las diferentes actividades que lo conforman',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia14 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15806,
            'year' =>3,
            'value' => 0,
            'description' => 'se encuentra en proceso de contratación de las diferentes actividades que lo conforman',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia15 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15807,
            'year' =>3,
            'value' => 0,
            'description' => 'se encuentra en proceso de contratación de las diferentes actividades que lo conforman',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia16 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15808,
            'year' =>3,
            'value' => 0,
            'description' => 'se encuentra en proceso de contratación de las diferentes actividades que lo conforman',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia17 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15809,
            'year' =>3,
            'value' => 0,
            'description' => 'se encuentra en proceso de contratación de las diferentes actividades que lo conforman',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia18 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15810,
            'year' =>3,
            'value' => 0,
            'description' => 'se encuentra en proceso de contratación de las diferentes actividades que lo conforman',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia19 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15811,
            'year' =>3,
            'value' => 0,
            'description' => 'se encuentra en proceso de contratación de las diferentes actividades que lo conforman',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia20 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15812,
            'year' =>3,
            'value' => 0,
            'description' => 'se encuentra en proceso de contratación de las diferentes actividades que lo conforman',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia21 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 15813,
            'year' =>3,
            'value' => 0,
            'description' => 'se encuentra en proceso de contratación de las diferentes actividades que lo conforman',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia22 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12090,
            'year' =>3,
            'value' => 5,
            'description' => 'Monitoreo a las fuentes de abastecimiento y sus estados de legalidad, así como los puntos de entrega de aguas residuales en los municipios de San Marcos, San Benito, Caimito y La Unión',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CPSAG-006-2022',
            'state_id' => 1201,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia23 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12091,
            'year' =>3,
            'value' => 10,
            'description' => 'seguimiento a los procesos de legalización de los puntos de captación de agua subterránea no autorizados y utilizados en el abastecimiento público de los municipios',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CPSAG - 011 - 2022,CPSAG - 007 - 2022',
            'state_id' => 1201,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia24 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12092,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia25 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12093,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia26 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12094,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia27 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12095,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia28 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12096,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia29 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12097,
            'year' =>3,
            'value' => 60,
            'description' => 'Boletines de las condiciones hidrometeorológicas diarias, informando las condiciones actuales de los niveles de los ríos, caños y ciénagas, así cpmo el pronostico meteorológico',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => 1201,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia30 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12099,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia31 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12100,
            'year' =>3,
            'value' => 0,
            'description' => '',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia32 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 12101,
            'year' =>3,
            'value' => 3,
            'description' => 'se vienen fortaleciendo en materia de planeación y juridicamente, las dependencias de la corporación',
            'type' => 'contract',
            'how_is_done' => 'null',
            'contract_number' => 'CPSAG -001 - 2022,CPSAG - 016 - 2022,CPSAG - 017 - 2022',
            'state_id' => 1201,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia33 = DB::getPdo()->lastInsertId();
        DB::table('evidence_advance')->insert([
            'activity_id' => 14223,
            'year' =>3,
            'value' => 3,
            'description' => 'Se viene trabajando con los municipios (CMGR) en materia de gestión del riesgo.',
            'type' => '',
            'how_is_done' => 'null',
            'contract_number' => 'null',
            'state_id' => null,
            'date_report' => '30-jun-2022',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
            $idevidencia34 = DB::getPdo()->lastInsertId();
        
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
