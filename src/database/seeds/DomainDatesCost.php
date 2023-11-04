<?php

use Illuminate\Database\Seeder;

class DomainDatesCostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'CON_GASTOS',
            'name' => 'Configuracion vigencia de Gastos'
        ]);

        $idDomainCost = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idDomainCost,
            'name' => 'VIGENCIA',
            'description' => '01-03'
        ]);

    }
}
