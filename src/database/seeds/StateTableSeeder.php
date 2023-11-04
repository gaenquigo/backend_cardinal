<?php

use App\Models\State;
use Illuminate\Database\Seeder;

/**
 * Class StateTableSeeder
 */
class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::truncate();
        State::unguard();

        State::create(['id' => 5, 'name' => 'ANTIOQUIA', 'country_id' => 170,]);
        State::create(['id' => 8, 'name' => 'ATLANTICO', 'country_id' => 170,]);
        State::create(['id' => 11, 'name' => 'BOGOTA D.C.', 'country_id' => 170,]);
        State::create(['id' => 13, 'name' => 'BOLIVAR', 'country_id' => 170,]);
        State::create(['id' => 15, 'name' => 'BOYACA', 'country_id' => 170,]);
        State::create(['id' => 17, 'name' => 'CALDAS', 'country_id' => 170,]);
        State::create(['id' => 18, 'name' => 'CAQUETA', 'country_id' => 170,]);
        State::create(['id' => 19, 'name' => 'CAUCA', 'country_id' => 170,]);
        State::create(['id' => 20, 'name' => 'CESAR', 'country_id' => 170,]);
        State::create(['id' => 23, 'name' => 'CORDOBA', 'country_id' => 170,]);
        State::create(['id' => 25, 'name' => 'CUNDINAMARCA', 'country_id' => 170,]);
        State::create(['id' => 27, 'name' => 'CHOCO', 'country_id' => 170,]);
        State::create(['id' => 41, 'name' => 'HUILA', 'country_id' => 170,]);
        State::create(['id' => 44, 'name' => 'GUAJIRA', 'country_id' => 170,]);
        State::create(['id' => 47, 'name' => 'MAGDALENA', 'country_id' => 170,]);
        State::create(['id' => 50, 'name' => 'META', 'country_id' => 170,]);
        State::create(['id' => 52, 'name' => 'NARIÑO', 'country_id' => 170,]);
        State::create(['id' => 54, 'name' => 'NORTE DE SANTANDER', 'country_id' => 170,]);
        State::create(['id' => 63, 'name' => 'QUINDIO', 'country_id' => 170,]);
        State::create(['id' => 66, 'name' => 'RISARALDA', 'country_id' => 170,]);
        State::create(['id' => 68, 'name' => 'SANTANDER', 'country_id' => 170,]);
        State::create(['id' => 70, 'name' => 'SUCRE', 'country_id' => 170,]);
        State::create(['id' => 73, 'name' => 'TOLIMA', 'country_id' => 170,]);
        State::create(['id' => 76, 'name' => 'VALLE DEL CAUCA', 'country_id' => 170,]);
        State::create(['id' => 81, 'name' => 'ARAUCA', 'country_id' => 170,]);
        State::create(['id' => 85, 'name' => 'CASANARE', 'country_id' => 170,]);
        State::create(['id' => 86, 'name' => 'PUTUMAYO', 'country_id' => 170,]);
        State::create(['id' => 88, 'name' => 'SAN ANDRES', 'country_id' => 170,]);
        State::create(['id' => 91, 'name' => 'AMAZONAS', 'country_id' => 170,]);
        State::create(['id' => 94, 'name' => 'GUAINIA', 'country_id' => 170,]);
        State::create(['id' => 95, 'name' => 'GUAVIARE', 'country_id' => 170,]);
        State::create(['id' => 97, 'name' => 'VAUPES', 'country_id' => 170,]);
        State::create(['id' => 99, 'name' => 'VICHADA', 'country_id' => 170,]);

    }
}
