<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjustePentaho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('domains')->where([
            ['name', '=', 'passwordPentaho']
        ])->update(['description' => 'cmVwb3J0ZXM6RGY1NiMlMjEvNVR2R3NkMUBWZ3Q=']);
        DB::table('domains')->where([
            ['name', '=', 'useridPentaho']
        ])->update(['description' => 'reportes']);
        DB::table('domains')->where([
            ['name', '=', 'urlpentaho']
        ])->update(['description' => 'https://pentaho-sipgacar.minambiente.gov.co/pentaho/api/repos/%3Ahome%3Areportes%3A']);
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
