<?php

use Illuminate\Database\Seeder;

class AnexosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'Anexos',
            'name' => 'Configuracion de anexos'
        ]);

        $idDomainRezagos = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idDomainRezagos,
            'name' => 'Anexo 1. Avance de metas fisicas y financieras',
            'description' => 'Anexo 1. Avance de metas fisicas y financieras'
        ]);

        DB::table('domains')->insert([
            'father_id' => $idDomainRezagos,
            'name' => 'Anexo 3.Reporte de avance de indicadores minimos de gestión incorporados en la resolucion 667 del 2016',
            'description' => 'Anexo 3.Reporte de avance de indicadores minimos de gestión incorporados en la resolucion 667 del 2016'
        ]);
      
        
        DB::table('domains')->insert([
            'father_id' => $idDomainRezagos,
            'name' => 'Anexo 5.1. Informe de ejecución presupuestal de ingresos',
            'description' => 'Anexo 5.Informe de ejecución presupuestal de ingresos'
        ]);
      
      
        DB::table('domains')->insert([
            'father_id' => $idDomainRezagos,
            'name' => 'Anexo 5.2. Informe de ejecución presupuestal de gastos',
            'description' => 'Anexo 5.2. Informe de ejecución presupuestal de gastos'
        ]);
      
    }
}
