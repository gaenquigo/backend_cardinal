<?php

use Illuminate\Database\Seeder;

class DateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dates')->insert([
            'start_date' => '2020-07-01',
            'end_date' => '2020-07-31',
            'semester' => 'Primer'
        ]);

        DB::table('dates')->insert([
            'start_date' => '2021-01-01',
            'end_date' => '2021-02-28',
            'semester' => 'Segundo'
        ]);
    }
}
