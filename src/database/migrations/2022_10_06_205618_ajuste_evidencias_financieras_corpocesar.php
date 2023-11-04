<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteEvidenciasFinancierasCorpocesar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        --
        update cardinal.evidence_advance
        set activity_id = 17129
        where id = 18490;
        --
        update cardinal.evidence_financial
        set activity_source_id = 9242
        where id = 10254;
        ");
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
