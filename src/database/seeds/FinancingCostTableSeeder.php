<?php

use Illuminate\Database\Seeder;
use App\Models\Cost_Source;

class FinancingCostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Cost_Source::truncate();
      Cost_Source::unguard();

      DB::table('cost_sources')->insert([
       'father_id' => Null,
       'code' => '2',
       'name' => 'GASTOS',
       'description' => 'GASTOS']);
       
    $id1 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id1,
       'code' => '2.1',
       'name' => 'GASTOS DE FUNCIONAMIENTO',
       'description' => 'GASTOS DE FUNCIONAMIENTO',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id2 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id2,
       'code' => '2.1.1',
       'name' => 'GASTOS DE PERSONAL',
       'description' => 'GASTOS DE PERSONAL',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id3 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id2,
       'code' => '2.1.2',
       'name' => 'ADQUISICIÓN DE BIENES Y SERVICIOS',
       'description' => 'ADQUISICIÓN DE BIENES Y SERVICIOS',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id4 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id4,
       'code' => '2.1.2.1',
       'name' => 'Adquisición de activos no financieros',
       'description' => 'Adquisición de activos no financieros',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id5 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id4,
       'code' => '2.1.2.1',
       'name' => 'Adquisiciones diferentes de activos',
       'description' => 'Adquisiciones diferentes de activos',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id6 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id2,
       'code' => '2.1.3',
       'name' => 'TRANSFERENCIAS CORRIENTES',
       'description' => 'TRANSFERENCIAS CORRIENTES',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id7 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id7,
       'code' => '2.1.3.1',
       'name' => 'A ENTIDADES DE GOBIERNO',
       'description' => 'A ENTIDADES DE GOBIERNO',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id8 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id8,
       'code' => '2.1.3.1.1',
       'name' => 'A ORGANOS DEL PGN',
       'description' => 'A ORGANOS DEL PGN',
       'functioning' => FALSE,
       'compensation' => TRUE,
       'debt_service' => FALSE]);
       
    $id9 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id9,
       'code' => '2.1.3.1.1.1',
       'name' => 'Fondo de Compensación Ambiental - Ministerio del Medio Ambiente Art 24 Ley 344 de 1996',
       'description' => 'Fondo de Compensación Ambiental - Ministerio del Medio Ambiente Art 24 Ley 344 de 1996',
       'functioning' => FALSE,
       'compensation' => TRUE,
       'debt_service' => FALSE]);
       
    $id10 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id10,
       'code' => '2.1.3.1.1.1.1',
       'name' => 'Fondo de Compensación Ambiental - TSE (20%)',
       'description' => 'Fondo de Compensación Ambiental - TSE (20%)',
       'functioning' => FALSE,
       'compensation' => TRUE,
       'debt_service' => FALSE]);
       
    $id11 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id10,
       'code' => '2.1.3.1.1.1.2',
       'name' => 'Fondo de Compensación Ambiental - Recursos propios diferentes a TSE (10%)',
       'description' => 'Fondo de Compensación Ambiental - Recursos propios diferentes a TSE (10%)',
       'functioning' => FALSE,
       'compensation' => TRUE,
       'debt_service' => FALSE]);
       
    $id12 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id8,
       'code' => '2.1.3.1.2',
       'name' => 'A ESQUEMAS ASOCIATIVOS',
       'description' => 'A ESQUEMAS ASOCIATIVOS',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id13 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id13,
       'code' => '2.1.3.1.2.1',
       'name' => 'Aportes a ASOCARS',
       'description' => 'Aportes a ASOCARS',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id14 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id7,
       'code' => '2.1.3.2',
       'name' => 'PRESTACIONES SOCIALES ',
       'description' => 'PRESTACIONES SOCIALES ',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id15 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id15,
       'code' => '2.1.3.2.1',
       'name' => 'Prestaciones sociales relacionadas con el empleo',
       'description' => 'Prestaciones sociales relacionadas con el empleo',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id16 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id16,
       'code' => '2.1.3.2.1.1',
       'name' => 'Mesadas pensionales (de pensiones)',
       'description' => 'Mesadas pensionales (de pensiones)',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id17 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id16,
       'code' => '2.1.3.2.1.2',
       'name' => 'Bonos pensionales (de pensiones)',
       'description' => 'Bonos pensionales (de pensiones)',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id18 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id7,
       'code' => '2.1.3.3',
       'name' => 'SENTENCIAS Y CONCILIACIONES',
       'description' => 'SENTENCIAS Y CONCILIACIONES',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id19 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id19,
       'code' => '2.1.3.3.1',
       'name' => 'Comisiones y otros gastos',
       'description' => 'Comisiones y otros gastos',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id20 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id19,
       'code' => '2.1.3.3.2',
       'name' => 'Conciliaciones',
       'description' => 'Conciliaciones',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id21 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id2,
       'code' => '2.1.4',
       'name' => 'GASTOS POR TRIBUTOS, MULTAS, SANCIONES E INTERESES DE MORA',
       'description' => 'GASTOS POR TRIBUTOS, MULTAS, SANCIONES E INTERESES DE MORA',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id22 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id22,
       'code' => '2.1.4.1',
       'name' => 'IMPUESTOS',
       'description' => 'IMPUESTOS',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id23 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id23,
       'code' => '2.1.4.1.1',
       'name' => 'IMPUESTOS TERRITORIALES',
       'description' => 'IMPUESTOS TERRITORIALES',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id24 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id24,
       'code' => '2.1.4.1.1.1',
       'name' => 'Impuesto predial y Sobretasa ambiental',
       'description' => 'Impuesto predial y Sobretasa ambiental',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id25 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id24,
       'code' => '2.1.4.1.1.2',
       'name' => 'Impuesto sobre vehículos automotores.',
       'description' => 'Impuesto sobre vehículos automotores.',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id26 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id22,
       'code' => '2.1.4.2',
       'name' => 'TASAS Y DERECHOS ADMINISTRATIVOS',
       'description' => 'TASAS Y DERECHOS ADMINISTRATIVOS',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id27 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id27,
       'code' => '2.1.4.2.1',
       'name' => 'Peajes.',
       'description' => 'Peajes.',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id28 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id22,
       'code' => '2.1.4.3',
       'name' => 'CONTRIBUCIONES',
       'description' => 'CONTRIBUCIONES',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id29 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id29,
       'code' => '2.1.4.3.1',
       'name' => 'Cuota de fiscalización y auditaje',
       'description' => 'Cuota de fiscalización y auditaje',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id30 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id22,
       'code' => '2.1.4.4',
       'name' => 'Multas, sanciones e intereses de mora',
       'description' => 'Multas, sanciones e intereses de mora',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id31 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id31,
       'code' => '2.1.4.4.1',
       'name' => 'Multas',
       'description' => 'Multas',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id32 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id31,
       'code' => '2.1.4.4.2',
       'name' => 'Sanciones',
       'description' => 'Sanciones',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id33 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id31,
       'code' => '2.1.4.4.3',
       'name' => 'Intereses de mora',
       'description' => 'Intereses de mora',
       'functioning' => TRUE,
       'compensation' => FALSE,
       'debt_service' => FALSE]);
       
    $id34 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id1,
       'code' => '2.2',
       'name' => 'SERVICIO DE LA DEUDA',
       'description' => 'SERVICIO DE LA DEUDA',
       'functioning' => FALSE,
       'compensation' => FALSE,
       'debt_service' => TRUE]);
       
    $id35 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id35,
       'code' => '2.2.1',
       'name' => 'Servicios de la deuda pública externa',
       'description' => 'Servicios de la deuda pública externa',
       'functioning' => FALSE,
       'compensation' => FALSE,
       'debt_service' => TRUE]);
       
    $id36 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id36,
       'code' => '2.2.1.1',
       'name' => 'Servicios de la deuda pública externa',
       'description' => 'Servicios de la deuda pública externa',
       'functioning' => FALSE,
       'compensation' => FALSE,
       'debt_service' => TRUE]);
       
    $id37 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id36,
       'code' => '2.2.1.2',
       'name' => 'Intereses de la deduda pública externa',
       'description' => 'Intereses de la deduda pública externa',
       'functioning' => FALSE,
       'compensation' => FALSE,
       'debt_service' => TRUE]);
       
    $id38 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id36,
       'code' => '2.2.1.3',
       'name' => 'Comisiones y otros gastos',
       'description' => 'Comisiones y otros gastos',
       'functioning' => FALSE,
       'compensation' => FALSE,
       'debt_service' => TRUE]);
       
    $id39 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id35,
       'code' => '2.2.2',
       'name' => 'Servicios de la deuda pública interna',
       'description' => 'Servicios de la deuda pública interna',
       'functioning' => FALSE,
       'compensation' => FALSE,
       'debt_service' => TRUE]);
       
    $id40 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id40,
       'code' => '2.2.2.1',
       'name' => 'Servicios de la deuda pública interna',
       'description' => 'Servicios de la deuda pública interna',
       'functioning' => FALSE,
       'compensation' => FALSE,
       'debt_service' => TRUE]);
       
    $id41 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id40,
       'code' => '2.2.2.2',
       'name' => 'Intereses de la deduda pública interna',
       'description' => 'Intereses de la deduda pública interna',
       'functioning' => FALSE,
       'compensation' => FALSE,
       'debt_service' => TRUE]);
       
    $id42 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id40,
       'code' => '2.2.2.3',
       'name' => 'Comisiones y otros gastos',
       'description' => 'Comisiones y otros gastos',
       'functioning' => FALSE,
       'compensation' => FALSE,
       'debt_service' => TRUE]);
       
    $id43 = DB::getPdo()->lastInsertId();
       
       DB::table('cost_sources')->insert([
       'father_id' => $id40,
       'code' => '2.2.2.4',
       'name' => 'Fondo de contigencias',
       'description' => 'Fondo de contigencias',
       'functioning' => FALSE,
       'compensation' => FALSE,
       'debt_service' => TRUE]);
  }
}
