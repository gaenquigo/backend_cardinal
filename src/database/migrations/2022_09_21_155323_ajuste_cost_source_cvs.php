<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteCostSourceCvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
        --creación fuente costos padre IMPUESTOS NACIONALES sin grupo
        insert into cardinal.cost_sources
        (father_id,code,name,description,functioning,compensation,debt_service,final_level)
        values(23, '2.1.4.1.2','IMPUESTOS NACIONALES','IMPUESTOS NACIONALES',true,false,false,false);
        --actualización fuente costos Gravamen a movimientos financieros al padre IMPUESTOS NACIONALES
        update cardinal.cost_sources
        set father_id = 700
        where id = 651;
        --elminación fuente costos padre IMPUESTOS NACIONALES
        delete from cardinal.cost_sources where id = 650;
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
