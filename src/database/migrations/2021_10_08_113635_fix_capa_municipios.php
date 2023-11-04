<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixCapaMunicipios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('master_geodata')->where([['nombre_capa', '=', 'Lim. Municipal'],])->update(['url' => 'https://mapas.igac.gov.co/server/rest/services/limites/entidadesterritoriales/MapServer/0']);
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
