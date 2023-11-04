<?php

use Illuminate\Database\Seeder;

class DomainIndicatorVariablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'SolicitudVariable',
            'name' => 'Solicitud de variables Indicadores'
        ]);

        $idSolicitudVariables = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'domain' => 'Formulacion',
            'father_id' => $idSolicitudVariables,
            'name' => 'Formulación'
        ]);

        $idSolicitudVariablesFormulacion = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'domain' => 'Seguimiento',
            'father_id' => $idSolicitudVariables,
            'name' => 'Seguimiento'
        ]);

        $idSolicitudVariablesSeguimiento = DB::getPdo()->lastInsertId();
    }
}
