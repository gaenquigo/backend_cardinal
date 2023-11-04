<?php

use Illuminate\Database\Seeder;

class StateEvidenceAdvanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')
            ->insert([
                'domain' => 'EstadosModuloEvidencia',                
                'name' => 'Estados del modulo de evidencia'            
            ]);

        $fatherID = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'name' => 'Liquidado',
            'father_id' => $fatherID
        ]);

        DB::table('domains')->insert([
            'name' => 'En reserva',
            'father_id' => $fatherID
        ]);

        DB::table('domains')->insert([
            'name' => 'Saldo a favor',
            'father_id' => $fatherID
        ]);
    }
}
