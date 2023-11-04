<?php

use Illuminate\Database\Seeder;
use App\Models\Indicador_Geodata;

class IndicadorGeodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Indicador_Geodata::truncate();
        Indicador_Geodata::unguard();

        DB::table('indicador_geodata')->insert(['variable_id' => 1, 'master_geodata_id' => 11,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 2, 'master_geodata_id' => 7,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 3, 'master_geodata_id' => 11,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 4, 'master_geodata_id' => 5,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 5, 'master_geodata_id' => 2,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 6, 'master_geodata_id' => 22,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 7, 'master_geodata_id' => 22,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 8, 'master_geodata_id' => 12,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 9, 'master_geodata_id' => 2,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 10, 'master_geodata_id' => 2,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 11, 'master_geodata_id' => 4,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 12, 'master_geodata_id' => 21,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 13, 'master_geodata_id' => 20,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 14, 'master_geodata_id' => 4,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 15, 'master_geodata_id' => 21,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 16, 'master_geodata_id' => 20,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 17, 'master_geodata_id' => 17,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 18, 'master_geodata_id' => 17,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 19, 'master_geodata_id' => 17,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 20, 'master_geodata_id' => 17,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 21, 'master_geodata_id' => 17,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 22, 'master_geodata_id' => 16,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 23, 'master_geodata_id' => 16,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 24, 'master_geodata_id' => 16,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 52, 'master_geodata_id' => 3,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 30, 'master_geodata_id' => 9,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 31, 'master_geodata_id' => 9,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 32, 'master_geodata_id' => 19,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 33, 'master_geodata_id' => 19,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 34, 'master_geodata_id' => 9,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 35, 'master_geodata_id' => 9,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 36, 'master_geodata_id' => 15,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 37, 'master_geodata_id' => 15,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 38, 'master_geodata_id' => 15,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 39, 'master_geodata_id' => 15,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 40, 'master_geodata_id' => 14,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 41, 'master_geodata_id' => 14,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 42, 'master_geodata_id' => 14,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 43, 'master_geodata_id' => 14,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 44, 'master_geodata_id' => 18,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 45, 'master_geodata_id' => 18,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 46, 'master_geodata_id' => 18,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 47, 'master_geodata_id' => 18,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 48, 'master_geodata_id' => 13,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 53, 'master_geodata_id' => 10,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 54, 'master_geodata_id' => 2,]);
        ///////// INDICADORES AMBIENTALES  //////////// 
        DB::table('indicador_geodata')->insert(['variable_id' => 60, 'master_geodata_id' => 23,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 60, 'master_geodata_id' => 24,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 60, 'master_geodata_id' => 25,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 60, 'master_geodata_id' => 26,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 60, 'master_geodata_id' => 27,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 60, 'master_geodata_id' => 28,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 60, 'master_geodata_id' => 29,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 61, 'master_geodata_id' => 30,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 61, 'master_geodata_id' => 31,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 62, 'master_geodata_id' => 32,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 62, 'master_geodata_id' => 33,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 63, 'master_geodata_id' => 34,]);
        DB::table('indicador_geodata')->insert(['variable_id' => 63, 'master_geodata_id' => 35,]);
    }
}
