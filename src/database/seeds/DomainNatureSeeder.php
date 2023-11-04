<?php

use Illuminate\Database\Seeder;

class DomainNatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fuentes de financiación - Naturaleza
        DB::table('domains')->insert([
            'domain' => 'Naturaleza',
            'name' => 'Fuentes de Financiación'
        ]);

        $idNaturaleza = DB::getPdo()->lastInsertId();

        DB::table('domains')->insert([
            'father_id' => $idNaturaleza,
            'name' => 'Propio'
        ]);

        DB::table('domains')->insert([          
            'father_id' => $idNaturaleza,
            'name' => 'Nación'
        ]);

        DB::table('domains')->insert([        
            'father_id' => $idNaturaleza,
            'name' => 'Regalías'
        ]);

        DB::table('domains')->insert([       
            'father_id' => $idNaturaleza,
            'name' => 'Fondo de Compensación'
        ]);    
    }
}
