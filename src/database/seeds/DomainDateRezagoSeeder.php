<?php

use Illuminate\Database\Seeder;

class DomainDateRezagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'CON_REZAGOS',
            'name' => 'Configuracion vigencia de Rezagos'
        ]);

        $idDomainRezagos = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idDomainRezagos,
            'name' => 'VIGENCIA',
            'description' => '01-03'
        ]);

    }
}
