<?php

use App\Models\Continent;
use Illuminate\Database\Seeder;

/**
 * Class ContinentsTableSeeder
 */
class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Continent::truncate();
        Continent::unguard();

        Continent::create([
            'name' => 'America'
        ]);

        Continent::create([
            'name' => 'Africa'
        ]);

        Continent::create([
            'name' => 'Asia'
        ]);

        Continent::create([
            'name' => 'Europa'
        ]);

        Continent::create([
            'name' => 'Oceania'
        ]);
    }
}
