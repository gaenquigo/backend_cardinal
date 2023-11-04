<?php

use Illuminate\Database\Seeder;

class DomainIndicatorCalculeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'TipoCalculo',
            'name' => 'Tipo de cálculo de Indicadores'
        ]);

        $idTipoCalculo = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'domain' => 'Tipo1',
            'father_id' => $idTipoCalculo,
            'name' => 'Tipo 1',
            'description' => 'Descripción del tipo de calculo del indicador'
        ]);

        DB::table('domains')->insert([
            'domain' => 'Tipo2',
            'father_id' => $idTipoCalculo,
            'name' => 'Tipo 2',
            'description' => 'Descripción del tipo de calculo del indicador'
        ]);

        DB::table('domains')->insert([
            'domain' => 'Tipo3',
            'father_id' => $idTipoCalculo,
            'name' => 'Tipo 3',
            'description' => 'Descripción del tipo de calculo del indicador'
        ]);

        DB::table('domains')->insert([
            'domain' => 'Tipo4',
            'father_id' => $idTipoCalculo,
            'name' => 'Tipo 4',
            'description' => 'Descripción del tipo de calculo del indicador'
        ]);

        DB::table('domains')->insert([
            'domain' => 'Tipo5',
            'father_id' => $idTipoCalculo,
            'name' => 'Tipo 5',
            'description' => 'Descripción del tipo de calculo del indicador'
        ]);
    }
}
