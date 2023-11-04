<?php

use Illuminate\Database\Seeder;
use App\Models\Domain;

/**
 * Class DomainTableSeeder
 */
class DomainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domain::truncate();
        Domain::unguard();

        /**
         * Es posible que el administrador del sistema autorice a una corporación a reportar la novedad después de la
         * fecha anteriormente mencionada, en este caso, el administrador deberá habilitar el tiempo desde la base de
         * datos.
         */
        DB::table('domains')->insert([
            'domain' => 'PlazoDiasNovedadesPAI',
            'name' => 'Numero Dias Reporte Novedades',
            'description' => 15 // Es el valor por defecto para poder registrar una nueva novedad.
        ]);        
    }
}