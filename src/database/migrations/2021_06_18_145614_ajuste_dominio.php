<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteDominio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('domains')->where([
            ['id', '=', '257'],
            ['father_id', '=', '256'],
        ])->update(['name' => 'Centro de Atención e interpretación de la biodiversidad y sus Servicio ecosistemicos construido y dotado']);
        DB::table('domains')->where([
            ['id', '=', '139'],
            ['father_id', '=', '90'],
        ])->update(['name' => 'Documentos de política para mejorar la calidad ambiental de las áreas urbanas']);  
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
