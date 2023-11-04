<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvancesFisicosCam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('evidence_advance')->insert([
            'activity_id' => 13388,
            'year' =>3,
            'value' => 0.5,
            'description' => 'Se adelantó la contratación y esta en ejecución',
            'type' => 'funcioning',
            'how_is_done' => 'Gastos Operativos de inversión',
            'contract_number' => null,
            'state_id' => null,
            'date_report' => '2022-06-07',
            'created_at' => '2022-06-07',
            'rezago' => false,
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
