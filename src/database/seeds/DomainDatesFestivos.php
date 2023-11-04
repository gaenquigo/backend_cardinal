<?php

use Illuminate\Database\Seeder;

class DomainDatesFestivos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
            'domain' => 'CON_FESTIVOS',
            'name' => 'Configuracion vigencia de Festivos'
        ]);

        $idRecaudo = DB::getPdo()->lastInsertId();
      
        DB::table('domains')->insert([
            'father_id' => $idRecaudo,
            'name' => 'Festivo Agosto',
            'description' => '07-08 , 17-08'
        ]);
        


    }
}
