<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteAvancesFisicosCam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        update cardinal.evidence_advance
        set activity_id = 13390
        where id = 17695;
        --
        update cardinal.evidence_advance
        set activity_id = 13402,
        description = 'Se avanza en la contratacion y ejecucion de las acciones establecidas en el presente proyecto.'
        where id = 17329;
        --
        delete from cardinal.evidence_financial where id = 5420;
        delete from cardinal.payments where id =81;
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
