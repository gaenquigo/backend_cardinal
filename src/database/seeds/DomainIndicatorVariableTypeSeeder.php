<?php

use Illuminate\Database\Seeder;

class DomainIndicatorVariableTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'Tipo6',
            'father_id' => 2,
            'name' => 'Tipo 6',
            'description' => 'Descripción del tipo de calculo del indicador'
        ]);

        DB::table('domains')->insert([
            'domain' => 'TipoVariableIndicator',
            'name' => 'Tipo de variable de Indicadores'
        ]);

        $idTipoVariableIndicator = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'domain' => 'numerator',
            'father_id' => $idTipoVariableIndicator,
            'name' => 'Numerador',
            'description' => 'Tipo de Variable numerador'
        ]);

        DB::table('domains')->insert([
            'domain' => 'denominator',
            'father_id' => $idTipoVariableIndicator,
            'name' => 'Denominador',
            'description' => 'Tipo de Variable denominador'
        ]);

        DB::table('domains')->insert([
            'domain' => 'weighing',
            'father_id' => $idTipoVariableIndicator,
            'name' => 'Ponderador',
            'description' => 'Tipo de Variable ponderador'
        ]);
    }
}
