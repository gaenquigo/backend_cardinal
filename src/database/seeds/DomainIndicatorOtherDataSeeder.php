<?php

use Illuminate\Database\Seeder;

class DomainIndicatorOtherDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'OtroTipoDatos',
            'name' => 'Otros Tipo de Datos de Indicadores'
        ]);

        $idOtherDataTypes = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
           
            'father_id' => $idOtherDataTypes,
            'domain' => 'numero',
            'name' => 'Numérico'
        ]);

        DB::table('domains')->insert([
           
            'father_id' => $idOtherDataTypes,
            'domain' => 'texto',
            'name' => 'Texto'
        ]);
    }
}
